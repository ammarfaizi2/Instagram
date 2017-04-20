<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokenfilter extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->config('mainconfig');
	}
	public function index()
	{
		if(!$this->input->post('url')||!$this->input->post('limit')):
			print '<html>
					<body>
					<form method="post">
						<label>URL</label><br>
						<input type="text" name="url" placeholder="https://instagram.com/p/8lOMeQBQUN/?taken-by=instagram"><br><br>
						<label>Limit Query</label><br>
						<input type="text" name="limit" placeholder="0,100"><br><br>
						<button type="submit">Check Now!</button>
					</form>
					</body>
					</html>';
		else:
			$this->load->library('curl');
			$check = $this->curl->simple_get('http://api.instagram.com/publicapi/oembed/?url='.trim($this->input->post('url')));
			if($this->curl->info['http_code']<>200)
				die('No URL Match');
			$check = json_decode($check);
			$info_member = $this->db->query("select * from instagram limit ".$this->input->post('limit'))->result_array();
			$this->load->model('instaloader');
			foreach($info_member as $b):
				$connect = $this->instaloader->create($b['cookies'], $b['useragent'], $b['device_id']);
				if(!$connect){
					$this->db->delete('instagram', array('id' => $b['id'])); 
					print '<b style="color:orange;">Token mati/tidak valid</b><br>';
				}else{
				$ck = $connect->post_like($check->media_id, $b['useragent'], $b['cookies']);
				if($ck->status<>'ok'){
					if($ck->message=='checkpoint_required'){
						print '<b style="color:orange;">Token ini valid,tetapi user terkena checkpoint_required</b><br>';
						$this->db->delete('instagram', array('id' => $b['id'])); 
					}else
						print '<b style="color:orange;">Unknown error => '.$ck->message.'</b><br>';
				}else
					print '<b style="color:green;">Token Valid cuy</b><br>';
				}
			flush();
		endforeach;
	  endif;
	}
}
				