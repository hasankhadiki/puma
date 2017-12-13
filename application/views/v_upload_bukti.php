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
<title>Puma Hearing | Confirm</title>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- //js -->
<!-- cart -->
<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href=”<?php echo base_url('assets/css/jquery.countdown.css');?>” />
<!-- //timer -->
<!-- animation-effect -->
<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
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
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->

<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Confirm</h3>
		</div>
	<!--Form PEMBAYARAN-->
	
		<div class="container signup-form" style="margin: 10px;">
				<form method="POST" action="<?php echo base_url()."dm_user/insert"; ?>" enctype='multipart/form-data'>
				<form>
				<div class="col-md-7">

					<div class="form-group"> 
						<label for="full_name_id" class="control-label" >Your Invoice Number</label>
						<input type="text" class="form-control" id="id_order" name="id_order" placeholder="<?php echo $this->uri->segment(3); ?>" value="<?php echo $this->uri->segment(3); ?>">
					</div>	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Total Pembayaran</label>
						<input type="text" class="form-control" id="alamat" name="total" value="<?php echo $this->cart->total(); ?>" readonly>
					</div>	
					<div class="form-group">
			  			<label for="comment">Gambar</label>
			  			<input type="file" name="file1">
					</div>
					<div class="form-group"> 
						<button type="submit" class=" btn btn-primary">Check Out</button>
					</div>     
				</form>
				</form>
				</div>
			</form>	
		</form>
		</div>	
	</div>	
		<!--End Form PEMBAYARAN-->
</body>
</html>