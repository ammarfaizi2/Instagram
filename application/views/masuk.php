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
		.backcuk {
			background: url('assets/images/slide_4.jpg') no-repeat center top;
			background-size: cover;
			z-index: -1;
		}
		.sorry {
		margin-top:50px;
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
            <li><?=anchor('peraturan', '<i class="fa fa-info-circle"></i> Peraturan')?></li>
            <li><?=anchor('kontak', '<i class="glyphicon glyphicon-earphone"></i> Hubungi Kami')?></li>
			<li class="active"><?=anchor('masuk', '<i class="glyphicon glyphicon-off"></i> Masuk')?></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">    
        <div style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Masuk dengan akun Instagram anda</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="https://instagram.com/accounts/password/reset/" target="_blank">Lupa password?</a></div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <?=form_open('/users/login', array('class' => 'form-horizontal','id' => 'loginform'))?>
							<div id="salsakp" class="input-group col-sm-12"></div>
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<?=form_input(array('id' => 'username', 'name' => 'username', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Username Anda', 'required' => 'required'))?>                                 
                                    </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<?=form_password(array('id' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Kata Sandi', 'required' => 'required'))?>
                                    </div>
                                <div style="margin-top:30px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" type="submit" href="#" class="form-control btn btn-info">Masuk</button>
                                    </div>
                                </div>  
						<div class="sorry text-center">
							<a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=instagramweb.login.install_link&amp;mt=8"><img height="45px" alt="Available on the App Store" src="//instagramstatic-a.akamaihd.net/bluebar/857185b/images/appstore-install-badges/badge_ios_english-en.png"></a>
							<a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3Dlogin%26utm_medium%3Dinstall_link"><img height="45px" alt="Available on Google Play" src="//instagramstatic-a.akamaihd.net/bluebar/857185b/images/appstore-install-badges/english_get.png"></a>
						</div>
                            <?=form_close()?>
                        </div>                     
                    </div>  
        </div>
    </div>
    <script src="<?=base_url($list_config['base_js'])?>/jquery.min.js"></script>
	<script>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(H).I(5(){$(\'#s\').A();$("y#F").D(5(){o($(\'#s\').p().l>3||$(\'#v\').p.l>3){k q=$(j).E();k n=$(j).f(\'C\');$.B({w:n,x:q,z:m,G:\'M\',W:\'V\',r:5(6){$("h").7("0","0");$("9").7("0","0");$("#i-g").2(\'u\');o(6.U){Y.11.10(6.Z);$("#8").2(\'<4 d="1 1-r" e="1">J X,S T L..</4>\')}K $("#8").2(\'<4 d="1 1-t" e="1">\'+6.N+\'</4>\')},O:5(a,b,c){$("h").7("0","0");$("9").7("0","0");$("#i-g").2(\'u\');$("#8").2(\'<4 d="1 1-t" e="1">\'+c+\'</4>\')},R:5(){$("h").f("0","0");$("#i-g").2(\'Q..\');$("#8").2(\'\');$("9").f("0","0")}})}P m})});',62,64,'disabled|alert|html||div|function|hasil|removeAttr|salsakp|button||||class|role|attr|login|input|btn|this|var|length|false|purl|if|val|pdata|success|username|warning|Masuk|password|url|data|form|timeout|focus|ajax|action|submit|serialize|loginform|type|document|ready|Berhasil|else|dialihkan|POST|content|error|return|Loading|beforeSend|Anda|akan|result|JSON|dataType|Login|window|redirect|replace|location'.split('|'),0,{}))
</script>
    <script src="<?=base_url($list_config['base_js'])?>/bootstrap.min.js"></script>
  </body>
</html>