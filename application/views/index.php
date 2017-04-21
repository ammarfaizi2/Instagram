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
    <title>Redangel Magetan</title>
    <link href="<?=base_url($list_config['base_css'])?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url($list_config['base_css'])?>/main-style.css" rel="stylesheet">
    <link href="<?=base_url($list_config['base_fonts'])?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php 
if ($allowed) print '
	<style>
	body {padding-top: 80px;}
	.sorry {margin-bottom:5px;}
	</style>'; ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <?=anchor('#', 'RedAngel Magetan', array('class' => 'navbar-brand'))?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?=anchor('/', '<i class="glyphicon glyphicon-home"></i> Dashboard')?></li>
            <li><?=anchor('peraturan', '<i class="fa fa-info-circle"></i> Peraturan')?></li>
            <li><?=anchor('kontak', '<i class="glyphicon glyphicon-earphone"></i> Hubungi Kami')?></li>
			<?php if(!$allowed) print '<li>'.anchor('masuk', '<i class="glyphicon glyphicon-off"></i> Masuk').'</li>'; ?>
          </ul>
		  <?php if($allowed): ?>
          <ul class="nav navbar-nav navbar-right">
			<li><?=anchor('#', '<i class="fa fa-credit-card"></i> Poin: '.$user->poin, array('id' => 'point'))?></li>
			<li><?=anchor('users/logout', '<i class="glyphicon glyphicon-off"></i> LogOut')?></li>
		  </ul>
		 <?php endif; ?>
        </div>
      </div>
    </nav>
<?php if(!$allowed): ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?=base_url($list_config['base_images'])?>/slide_4.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>RedAngel Magetan</h1>
              <p>Situs penambah followers dan likes gratis yang telah digunakan oleh lebih dari <b><?=$all_member?></b> pengguna dari mancanegara</p>
              <p><?=anchor('masuk', 'Masuk & Nikmati Layanan Kami', array('class' => 'btn btn-info btn-outline', 'role' => 'button'))?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?=base_url($list_config['base_images'])?>/slide_2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>RedAngel Magetan</h1>
              <p>Kami menyediakan layanan ini dengan gratis untuk anda tanpa dipungut biaya sepersen pun</p>
              <p><?=anchor('masuk', 'Masuk & Nikmati Layanan Kami', array('class' => 'btn btn-info btn-outline', 'role' => 'button'))?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?=base_url($list_config['base_images'])?>/slide_3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>RedAngel Magetan</h1>
              <p>Situs kami bebas dari IKLAN yang membuat anda lebih nyaman saat menggunakannya</p>
              <p><?=anchor('masuk', 'Masuk & Nikmati Layanan Kami', array('class' => 'btn btn-info btn-outline', 'role' => 'button'))?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="page-header text-center">
        <h1>Hanya Untuk Anda</h1>
      </div>
      <p class="lead">Kami menyediakan layanan auto followers & likes ini <b>24 Jam</b> yang bisa anda gunakan dimana saja dan kapan saja, dan tentunya tanpa membuat spam</p>
	</div>
	<section>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shield fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Keamanan</h4>
                    <p class="text-muted">Bicara mengenai keamanan, kami tidak pernah menyimpan/mengetahui kata sandi anda. Alasan kenapa kami memerlukan password anda pada saat masuk adalah agar data anda dapat terhubung ke <b>API Instagram</b> untuk dapat bertukar follow dan like. <b>Mengapa kami tidak menyimpan password?</b> karena kami tahu, bahwa <b>Privasi</b> adalah hal yang sangat penting bagi kita semua. Kami hanya ingin menjaga kepercayaan pengguna terhadap auto followers dan likes ini.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Tampilan/Interface</h4>
                    <p class="text-muted">Untuk urusan tampilan,jangan diragukan lagi karena situs kami sangat responsive dan cocok dibuka baik melalui <b>Smartphone, Tablet, Atau PC</b> anda. Situs kami juga <b>BEBAS</b> dari iklan, karena kami tahu bahwa iklan sangat mengganggu anda saat mengakses situs ini. Terlebih lagi jika anda menggunakan Smartphone/Tablet.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Followers & Like</h4>
                    <p class="text-muted">Kita semua tahu bahwa semakin banyak followers/likes yang kita punya dapat <b>meningkatkan popularitas, merk dan juga status anda</b>. Hal ini tentunya akan sangat bermanfaat bagi anda yang berjualan online agar produk anda tidak kalah saing dengan produk dari toko online di instagram lainnya. Situs kami juga menggunakan sistem poin untuk bertukar like/follow yang setiap harinya di reset.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
	<hr>
	</div>
<?php else: ?>
    <div class="container">    
        <div class="col-md-12">                    
            <div class="panel panel-info highlight-one text-center">
			    <div class="bullet-one" style="background-image: url(assets/images/mark.jpg);"></div>
				              <a href="https://www.instagram.com/<?=$user_data['account']->user->username; ?>">
                <img class="highlight-two" src="<?=$user_data['account']->user->profile_pic_url?>">
              </a><div class="panel-body">
				              <h5 class="bullet-two">
                <a class="compersation-one" href="profile/"><b><?=$user_data['account']->user->full_name?></b> (@<?=$user_data['account']->user->username?>)</a>
              </h5>

              <p style="text-align:left">
                <?=$user_data['account']->user->biography?><br>
              </p>
              <ul class="list-one text-center">
                <li class="ul-list">
                  <a class="compersation-one">
                    Post
                    <h5 class="slide"><b style="color:blue;"><?=$user_data['account']->user->media_count?></b></h5>
                  </a>
                </li>

                <li class="ul-list">
                  <a class="compersation-one">
                    Followers
                    <h5 class="slide"><b style="color:blue;" id="followers"><?=$user_data['account']->user->follower_count?></b></h5>
                  </a>
                </li>

                <li class="ul-list">
                  <a class="compersation-one">
                    Following
                    <h5 class="slide"><b style="color:blue;"><?=$user_data['account']->user->following_count?></b></h5>
                  </a>
                </li>
              </ul>
				</div>
			</div>
		</div>
		<div id="menu"></div>
        <div class="col-md-12">                    
            <div class="panel panel-success">
                <div class="panel-heading">
                        <div class="panel-title">Menu
				</div></div>
				<div class="panel-body">
				<div class="form-group">
					<a class="btn btn-primary sorry btn-outline form-control" id="getfollowers"><i class="fa fa-user-plus"></i> Followers+</a>
					<a class="btn btn-success sorry btn-outline form-control"  id="getlikes"><i class="fa fa-heart"></i> Likes+</a>
				</div>
				</div>
			</div>
		</div>
        <div class="col-md-6">                    
            <div class="panel panel-info">
                <div class="panel-heading">
                        <div class="panel-title">Bagikan
				</div></div>
				<div class="panel-body"><div class="form-group">
				<a class="btn btn-primary sorry btn-outline form-control" href="#"><i class="fa fa-instagram"></i> Instagram</a>
				<a href="https://www.facebook.com/sharer/sharer.php?u=http://socia.buzz/" target="_blank" class="btn btn-primary sorry btn-outline form-control"><i class="fa fa-facebook"></i> Facebook</a>
				<a class="btn btn-primary sorry btn-outline form-control" href="https://twitter.com/intent/tweet?text=Situs Penambah Followers dan Likes Indonesia BEBAS Spam dan Iklan hanya di http://socia.buzz/" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
				<a class="btn btn-primary sorry btn-outline form-control" href="https://plus.google.com/share?url=Situs Penambah Followers dan Likes Indonesia BEBAS Spam dan Iklan di http://socia.buzz/"><i class="fa fa-google-plus"></i> Google+</a>
				<hr>
				<p class="small">Bagikan situs ini agar pengguna auto followers dan like ini bertambah,karena semakin banyak yang menggunakan ini,semakin banyak pula followers dan like yang akan anda dapatkan..</p>
				</div>
				</div>
			</div>
		</div>
        <div class="col-md-6">                    
            <div class="panel panel-info highlight-one text-center">
			    <div class="bullet-one" style="background-image: url(assets/images/bench.jpg);"></div>
				              <a href="https://www.instagram.com/ammarfaizi12">
                <img class="highlight-two" src="https://scontent-sea1-1.cdninstagram.com/t51.2885-19/s150x150/17934097_1019609138141244_1800979516353413120_a.jpg">
              </a><div class="panel-body">
				              <h5 class="bullet-two">
                <a class="compersation-one" href="https://www.instagram.com/ammarfaizi12"> (@ammarfaizi12)</a>
              </h5>

              <p style="text-align:center">
                Follow kami untuk mendapatkan informasi tentang auto followers dan like ini..
              </p>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
</script>
    <footer class="footer">
      <div class="container">
        <p class="text-muted"><i>&trade; and &copy;, Inc. All Right Reserved.</i></p>
      </div>
    </footer>
    <script src="<?=base_url($list_config['base_js'])?>/jquery.min.js"></script>
<script>
/* wassup bruh? */
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(1f).1i(6(){$("#j").17(6(){$.E({o:\'5/O\',G:l,I:\'H\',Y:\'X\',m:6(8){$("#j").h("3","3");$("#k").h("3","3");11(8.16){$("#O").7(8.O);$("#C").7(\'<i 1="4 4-1a-14"></i> 1c: \'+8.C);$("#5").7(\'<0 1="g-e-12"><0 1="2 2-m"><0 1="2-f"><0 1="2-d">q 1d</0></0><0 1="2-9">\'+8.v+\'</0></0></0>\')}1b $("#5").7(\'<0 1="g-e-12"><0 1="2 2-t"><0 1="2-f"><0 1="2-d">q..</0></0><0 1="2-9">\'+8.v+\'</0></0></0>\')},K:6(a,b,c){$("#j").h("3","3");$("#k").h("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-t"><0 1="2-f"><0 1="2-d">q..</0></0><0 1="2-9">\'+c+\'</0></0></0>\')},z:6(){$("#j").r("3","3");$("#k").r("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-Q"><0 1="2-f"><0 1="2-d">R..</0></0><0 1="2-9"><0 1="T"><0 1="u-U"><p><i 1="4 4-P 4-A 4-y 4-D x-B"></i></p><n S="L-N">M 19 15 O J..</n></0></0></0></0></0>\')}});w l});$("#k").17(6(){$.E({o:\'5/V\',G:l,I:\'H\',m:6(8){$("#j").h("3","3");$("#k").h("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-m"><0 1="2-f"><0 1="2-d">W 13</0></0><0 1="2-9">\'+8+\'</0></0></0>\')},K:6(a,b,c){$("#j").h("3","3");$("#k").h("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-t"><0 1="2-f"><0 1="2-d">q..</0></0><0 1="2-9">\'+c+\'</0></0></0>\')},z:6(){$("#j").r("3","3");$("#k").r("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-Q"><0 1="2-f"><0 1="2-d">R..</0></0><0 1="2-9"><0 1="T"><0 1="u-U"><p><i 1="4 4-P 4-A 4-y 4-D x-B"></i></p><n S="L-N">M Z s-s J..</n></0></0></0></0></0>\')}});w l})});6 1h(o,F,18){$.E({o:o,10:18+\'=\'+F,G:l,I:\'H\',m:6(8){$("#5").7(\'<0 1="g-e-12"><0 1="2 2-m"><0 1="2-f"><0 1="2-d">W 13</0></0><0 1="2-9">\'+8+\'</0></0></0>\')},K:6(a,b,c){$("#5").1e(o)},z:6(){$("#5").7(\'<0 1="g-e-12"><0 1="2 2-Q"><0 1="2-f"><0 1="2-d">R..</0></0><0 1="2-9"><0 1="T"><0 1="u-U"><p><i 1="4 4-P 4-A 4-y 4-D x-B"></i></p><n S="L-N">M Z s-s J..</n></0></0></0></0></0>\')}});w l}6 V(F){$.E({o:\'5/V\',10:\'1g=\'+F,G:l,I:\'H\',Y:\'X\',m:6(8){$("#j").h("3","3");$("#k").h("3","3");11(8.16){$("#C").7(\'<i 1="4 4-1a-14"></i> 1c: \'+8.C);$("#5").7(\'<0 1="g-e-12"><0 1="2 2-m"><0 1="2-f"><0 1="2-d">q 1d</0></0><0 1="2-9">\'+8.v+\'</0></0></0>\')}1b $("#5").7(\'<0 1="g-e-12"><0 1="2 2-t"><0 1="2-f"><0 1="2-d">q..</0></0><0 1="2-9">\'+8.v+\'</0></0></0>\')},K:6(a,b,c){$("#j").h("3","3");$("#k").h("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-t"><0 1="2-f"><0 1="2-d">q..</0></0><0 1="2-9">\'+c+\'</0></0></0>\')},z:6(){$("#j").r("3","3");$("#k").r("3","3");$("#5").7(\'<0 1="g-e-12"><0 1="2 2-Q"><0 1="2-f"><0 1="2-d">R..</0></0><0 1="2-9"><0 1="T"><0 1="u-U"><p><i 1="4 4-P 4-A 4-y 4-D x-B"></i></p><n S="L-N">M 19 15 V 1j s J..</n></0></0></0></0></0>\')}});w l}',62,82,'div|class|panel|disabled|fa|menu|function|html|hasil|body||||title|md|heading|col|removeAttr||getfollowers|getlikes|false|success|span|url||Hasil|attr|foto|warning|text|content|return|margin|3x|beforeSend|pulse|bottom|point|fw|ajax|id|timeout|POST|type|anda|error|help|Sedang|block|followers|spinner|info|Loading|clas|row|center|likes|Pilih|JSON|dataType|memuat|data|if||Foto|card|penambahan|result|click|add|memproses|credit|else|Poin|Coy|load|document|media_id|loadmore_|ready|pada'.split('|'),0,{}))
	</script>
    <script src="<?=base_url($list_config['base_js'])?>/bootstrap.min.js"></script>
  </body>
</html>