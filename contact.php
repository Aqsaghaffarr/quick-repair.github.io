<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Self Repair Club - Contact</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- navigation -->

<?php
$page='contact';
include_once('nav.php'); ?>

<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12"></div>
		</div>
	</div>
</div>

<!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Contactez-nous</h2>
                <p>Pour plus d'informations ou pour un partenariat, vous pouvez nous contacter via le formulaire de contact suivant.</p>
			</div>
			<div class="col-md-8 col-sm-8 mt30">
				<form action="#" method="post" role="form">
					<div class="col-md-6 col-sm-6">
                        <label for="name">NAME</label>
                        <input name="name" type="text" class="form-control" id="name">
                      <label for="email">EMAIL</label>
                        <input name="email" type="email" class="form-control" id="email">
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="message">MESSAGE</label>
						<textarea name="message" rows="6" class="form-control" id="message"></textarea>
					</div>
                    <div class="col-md-6 col-sm-6">
                    	<button type="submit" name="submit" class="btn btn-default">SEND</button>
                    </div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 address">
				<div>
					<h3>Email</h3>
					<p>contact@selfrepair.club</p>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 mt20" >
            	<h3>Location</h3>
				<div class="google_map mt20">
					<div class="gmap_canvas">
						<iframe width="857" height="351" id="gmap_canvas" src="https://maps.google.com/maps?q=louvain-la-neuve&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>
						<a href="https://www.whatismyip-address.com/divi-discount/"></a>
					</div>
						<style>.mapouter{position:relative;text-align:right;height:351px;width:857px;}.gmap_canvas {overflow:hidden;background:none!important;height:351px;width:857px;}
						</style>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- footer section -->
<footer>
	<div class="container">
			<div class="col-md-6 col-sm-4">
				<img src="images/logo2.png" class="img-responsive" alt="logo">
			</div>

			<div class="col-md-3 col-sm-4 newsletter">
				<p><i class="fa fa-envelope-o"></i>contact@selfrepair.club</p>
				<p><i class="fa fa-globe"></i> www.selfrepair.club</p>
			</div>
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-6">
				<p>Copyright © 2020 Self repair club</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="mailto:contact@selfrepair.club" class="fa fa-envelope-o"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- javascript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RG2Y36F46Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-RG2Y36F46Y');
</script>
</body>
</html>
