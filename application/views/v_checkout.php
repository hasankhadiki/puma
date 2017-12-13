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
<title>Puma Hearing | Checkout</title>
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
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Your shopping cart contains: <span><?php echo $this->cart->total_items();?> Products</span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>No.</th>	
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Subtotal</th>
							<!--<th>Remove</th>-->
						</tr>
					</thead>
					<?php $i = 1; $total = 0?>
					<?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
					<tr class="rem1">
						<td class="invert"><?php echo $i; ?></td>
						<td class="invert"><?php echo $items['name']; ?>
                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
	                        <p>
	                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

	                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

	                            <?php endforeach; ?>
	                        </p>
                        <?php endif; ?></td>
						<td class="invert"><?= $items['qty'] ?></td>
						<td class="invert">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
						<td class="invert">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
						<!--<td class="invert">
							<a href="<?php echo base_url()."dm_user/clear_cart/".$items['rowid']; ?>"><div class="rem">
								<div class="close1"> </div>
							</div></a>
						</td>-->
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
					<tfoot>
                        <tr>
                            <td class="cart_total" colspan="4" align="right"><p class="cart_total_price">Total</p></td>
                            <td class="cart_total" ><p class="cart_total_price">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></p></td>
                        </tr>
                    </tfoot>
				</table>
			</div>
			<div class="checkout-left">	
				<a href="<?php echo base_url()."dm_user/clear_cart"; ?>"><div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Clear Cart</h4>
				</div></a>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="<?php echo base_url()."dm_user/products"; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->

<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Check Out</h3>
		</div>
	<!--Form PEMBAYARAN-->
	
		<div class="container signup-form" style="margin: 10px;">
			<form role="#" action="<?php echo base_url()."dm_user/do_checkout"; ?>" method="post" enctype="multipart/form-data" >
				<form>
				<div class="col-md-4"></div>
				<div class="col-md-7">
					<div class="form-group"> 
						<label for="full_name_id" class="control-label" >Your Name</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Your Name">
					</div>	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Phone Number</label>
						<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Enter Your Phone Number">
					</div>
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
					</div>	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Adress</label>
						<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Your Adress">
					</div>									
						
					<div class="form-group"> 
						<label for="state_id" class="control-label">City</label>
						<select class="form-control" id="kota" name="kota" >
							<option>--Silahkan pilih--</option>
							<option>Denpasar</option>
							<option>Surabaya</option>
							<option>Bandung</option>
							<option>Jakarta</option>
							<option>Solo</option>
							<option>Yogyakarta</option>
							<option>Malang</option>
						</select>					
					</div>

					<!--<div class="form-group"> 
						<label for="state_id" class="control-label">Metode Pembayaran</label>
						<select name="metode" class="form-control" id="state_id">
							<option>--Silahkan pilih--</option>
							<option>JNE</option>
							<option>TIKI</option>
							<option>POS Indonesia</option>
						</select>					
					</div>-->
	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Total Pembayaran</label>
						<input type="text" class="form-control" id="alamat" name="total" value="<?php echo $this->cart->total(); ?>" readonly>
					</div>	

					<div class="form-group"> 
						<button type="submit" class=" btn btn-primary">Check Out</button>
					</div>     
				</div>
			</form>	
		</form>
		</div>	
	</div>	
		<!--End Form PEMBAYARAN-->
</body>
</html>