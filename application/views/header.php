	<html>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<?php if(!($this->session->userdata('nama'))) { ?>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="<?php echo base_url()."Auth/login";?>">Login</a></li>
						<?php }  ?>
						<?php if($this->session->userdata('nama')) { ?>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="<?php echo base_url()."Auth/logout";?>">Logout</a></li>	
						<li><a href="<?php echo base_url()."dm_user/viewProfile";?>">Hello, <?=$this->session->userdata('nama')?></a></li>
						<?php }  ?>
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
							<li class=""><a href="<?php echo base_url()."dm_user/home";?>" class="act">Home</a></li>
							<li><a href="<?php echo base_url()."dm_user/products";?>">Products</a></li>
							<li><a href="<?php echo base_url()."dm_user/mail";?>">Find Us</a></li>
							<li><a href="<?php echo base_url()."dm_user/shortcodes";?>">short codes</a></li>
							<li><a href="<?php echo base_url()."dm_user/viewProfile";?>">Profile</a></li>
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
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					
					<div class="cart box_1">
						
						<a href="<?php echo base_url()."dm_user/checkout";?>">
							<h3> <div class="total">Cart: 
								<?php echo $this->cart->total_items();?>
								<!--<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)-->
								items </div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
</html>