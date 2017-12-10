<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> -->
<!DOCTYPE html>
<html>
<head>
<title>Puma Hearing Aid | Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
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
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="<?php echo site_url()."/login/";?>"> Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html"> Register</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="<?php echo base_url('index.php/dm_user/home');?>">P   u   m   a <span>Hearing Aid</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url('index.php/dm_user/home');?>" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-12">
											<ul class="multi-column-dropdown">
												<h6>Hearing Aid Styles</h6>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">
Invisible in Canal (IIC)</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">
Completely in Canal (CIC)</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">
In the Canal (ITC)</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">
In the Ear (ITE)</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">mini Receiver in Canal</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">Receiver in Canal (RIC)</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">mini Behind the Ear</a></li>
												<li><a href="<?php echo base_url('index.php/dm_user/products');?>">Behind the Ear (BTE)</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="aboutus.html">About Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="<?php echo base_url();?>assets/js/classie.js"></script>
						<script src="<?php echo base_url();?>assets/js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="<?php echo base_url();?>assets/images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->

<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Hearing Aid for <br>Hearing Loss</br></h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>T-Shirts + Formal Pants + Jewellery + Cosmetics</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Toys + Furniture + Lighting + Watches</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Tops + Books & Media + Sports</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="<?php echo base_url();?>assets/js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
			</div>
		</div>
	</div>

<!-- collections -->


	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Our Products</h3>
<?php $i=0; 
foreach ($data as $x) { ?>
			<p class="est animated wow zoomIn" data-wow-delay=".5s"></p>
			<div class="new-collections-grids">

				<div class="col-md-12 new-collections-grid">
					<div class="new-collections-grid-sub-grids">
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="single.html" class="product-image"><img src="<?php echo $x['image']; ?>" alt=" " class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="single.html">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="single.html"><?php echo $x['nama_barang'];  ?></a></h4>
								<p><?php echo $x['deskripsi_barang'];  ?></p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>$480</i> <span class="item_price">$ <?php echo $x['harga_barang'];  ?></span><a class="item_add" href="#">add to cart </a></p>
								</div>
							</div>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>						
<?php } ?>					
					<script src="<?php echo base_url();?>assets/js/jquery.countdown.js"></script>
					<script src="<?php echo base_url();?>assets/js/script.js"></script>

				</div>
				<div class="clearfix"> </div>

			</div>
		</div>
	</div>
<!-- //new-timer -->
<!-- collections-bottom -->
	<div class="collections-bottom">
		<div class="container">
			<div class="collections-bottom-grids">
				<div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>45% Discount <span>for new products</span></h3>
				</div>
			</div>
		</div>
	</div>
<!-- //collections-bottom -->

</body>
</html>