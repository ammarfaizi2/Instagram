<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Situs Penambah Followers & Like BEBAS Spam & Iklan">
    <meta name="author" content="Absorb Team">
    <link rel="icon" href="<?=base_url($list_config['base_images'])?>/favicon.ico">
    <title>SociaBuzz</title>
    <link href="<?=base_url($list_config['base_css'])?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url($list_config['base_css'])?>/main-style.css" rel="stylesheet">
    <link href="<?=base_url($list_config['base_fonts'])?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
		body {
			padding-top: 100px;
		}
	</style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="backcuk">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <?=anchor('#', 'SociaBuzz', array('class' => 'navbar-brand'))?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?=anchor('/', '<i class="glyphicon glyphicon-home"></i> Dashboard')?></li>
            <li class="active"><?=anchor('peraturan', '<i class="fa fa-info-circle"></i> Peraturan')?></li>
            <li><?=anchor('kontak', '<i class="glyphicon glyphicon-earphone"></i> Hubungi Kami')?></li>
			<li><?=anchor('masuk', '<i class="glyphicon glyphicon-off"></i> Masuk')?></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
		<div class="col-md-12">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Peraturan dan Penggunaan Layanan</div>
                    </div> 
                    <div class="panel-body">
						<h2 class="text-center">PERATURAN</h2><hr>
                                        <ol>
                                            <li>
                                                Jangan mengunfollow sesama pengguna layanan ini.Cukup mention mereka untuk follback
                                            </li>
                                            <li>
												Jangan mem-Private akun anda,jika anda mem-Private akun anda,followers/like tidak akan bertambah.
                                            </li>
                                            <li>
												Layanan ini gratis,mohon gunakan layanan ini dengan bijak
                                            </li>
                                            <li>
                                                Use this tools at your own risk
                                            </li>
                                            <li>
                                                Ingat kami tidak pernah menyimpan password anda!,Kami hanya memerlukan password anda pada saat login untuk menghubungkan akun anda dengan API Instagram.
                                            </li>
                                        </ol><hr>
						<h2 class="text-center">BANTUAN</h2><hr>
                                        <ol>
                                            <li>
                                                <h4>Bagaimana Cara Berhenti Dari Layanan Ini?</h4>
												<p>Cukup mengganti password instagram anda,dan otomatis anda berhenti dari layanan ini</p>
                                            </li>
                                            <li>
												<h4>Kenapa Following Saya Ikut Bertambah?</h4>
												<p>Karena layanan ini adalah tukar-menukar followers.Anda mendapatkan followers anda juga mendapatkan following.Anda dapat memention mereka untuk melakukan follback :)</p>
                                            </li>
                                            <li>
												<h4>Saya Ingin Memberi Masukan terhadap layanan ini,kemana saya harus mengirimnya?</h4>
												<p>Silahkan klik Menu 'Hubungi Kami' diatas,atau bisa juga mention instagram kami @rian_arts. Terima Kasih - </p>
                                            </li>
                                        </ol><hr>
					</div>
				</div>
			</div>
		</div>
    <script src="<?=base_url($list_config['base_js'])?>/jquery.min.js"></script>
    <script src="<?=base_url($list_config['base_js'])?>/bootstrap.min.js"></script>
  </body>
</html>