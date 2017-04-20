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
            <li class="active"><?=anchor('kontak', '<i class="glyphicon glyphicon-earphone"></i> Hubungi Kami')?></li>
			<li><?=anchor('masuk', '<i class="glyphicon glyphicon-off"></i> Masuk')?></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">    
        <div class="col-md-6 col-md-offset-3">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title text-center">Saran/Kritik/Tanya/Error</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body">
                        <?=form_open('kontak', array('class' => 'form-horizontal','id' => 'contact'))?>
							<div class="form-group"><div class="col-sm-12 controls" id="salsakp"></div></div>
                            <div class="form-group">
							<div class="col-sm-12 controls">
										<label>Subyek</label>
										<?=form_input(array('id' => 'subject', 'name' => 'subject', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Saran Saya....', 'required' => 'required'))?>                                 
                                    </div></div>
                            <div class="form-group">
							<div class="col-sm-12 controls">
										<label>Teks</label>
										<?=form_textarea(array('id' => 'teks', 'name' => 'teks', 'type' => 'text', 'class' => 'form-control', 'rows' => 5, 'cols' => '10', 'placeholder' => 'Lebih baik jika layanan ini....', 'required' => 'required'))?>                                 
                                    </div> </div>
                            <div class="form-group">
							<div class="col-sm-12 controls">
										<label>Tipe</label>
										<?=form_dropdown('jenis', array('sarankritik' => 'Saran/Kritik', 'error' => 'Error', 'tanya' => 'Tanya'), '', array('id' => 'jenis', 'class' => 'form-control', 'required' => 'required'));?>                                 
                                    </div></div>
                            <div class="form-group">
							<div class="col-sm-12 controls">
										<label>Email</label>
										<?=form_input(array('id' => 'email', 'name' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'andi@....com', 'required' => 'required'))?>                                 
                                    </div></div>
                                <div style="margin-top:30px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <button id="btn-submit" type="submit" href="#" class="form-control btn btn-info">Submit</button>
                                    </div>
                                </div>
                            <?=form_close()?>
                        </div>                     
                    </div>  
        </div>
    </div>
    <script src="<?=base_url($list_config['base_js'])?>/jquery.min.js"></script>
	<script>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(z).y(6(){$(\'#o\').x();$("B#E").8(6(){p($(\'#D\').f().d>3||$(\'#H\').f().d>5||$(\'#G\').f.d>3||$(\'#o\').f.d>3){t q=$(s).C();t r=$(s).l(\'A\');$.F({K:r,T:q,S:n,R:\'U\',Q:\'O\',m:6(7){$("i").e("0","0");$("k").e("0","0");$("#j-8").2(\'u\');p(7.I)$("#9").2(\'<4 g="1 1-m" h="1">\'+7.v+\'</4>\');P $("#9").2(\'<4 g="1 1-w" h="1">\'+7.v+\'</4>\')},J:6(a,b,c){$("i").e("0","0");$("k").e("0","0");$("#j-8").2(\'u\');$("#9").2(\'<4 g="1 1-w" h="1">\'+c+\'</4>\')},L:6(){$("i").l("0","0");$("#j-8").2(\'M..\');$("#9").2(\'\');$("k").l("0","0")}})}N n})});',57,57,'disabled|alert|html||div||function|hasil|submit|salsakp||||length|removeAttr|val|class|role|input|btn|button|attr|success|false|subject|if|pdata|purl|this|var|Submit|content|warning|focus|ready|document|action|form|serialize|email|contact|ajax|jenis|teks|result|error|url|beforeSend|Loading|return|JSON|else|dataType|type|timeout|data|POST'.split('|'),0,{}))
</script>
    <script src="<?=base_url($list_config['base_js'])?>/bootstrap.min.js"></script>
  </body>
</html>