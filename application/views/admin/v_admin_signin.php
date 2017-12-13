<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/admin_font-awesome.css');?>" rel="stylesheet"> 
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js');?>"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form id="login-form" role="form" method="POST" action="<?php echo base_url('index.php/Autentifikasi/login');?>">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
				   

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					
				
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js');?>"></script>
	<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	<!--//scrolling js-->
</body>
</html>

