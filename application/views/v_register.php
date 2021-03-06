<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Puma Hearing | Register</title>
<!-- for-mobile-apps -->
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href=”<?php echo base_url('assets/css/jquery.countdown.css');?>” />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			<div class="col-sm-offset-1">
					<h4 style="color: red" ><?=$this->session->flashdata('error')?></h4>
			</div>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="login-form-grids">
				
				<form class="animated wow slideInUp" data-wow-delay=".5s" 
						method="POST" action="<?php echo site_url('auth/do_register')?>">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">profile information</h5>
					<input type="text" placeholder="First Name..." name="FirstName" required>
					<input type="text" placeholder="Last Name..." name="LastName" required>
				<h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
					<input type="email" placeholder="Email Address" name="email" required>
					<input type="password" placeholder="Password" name="Password" required=" " >
					<input type="password" placeholder="Password Confirmation" name="ConfirmPassword" required=" " >
				<!--	<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div> -->
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.html">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
</body>
</html>