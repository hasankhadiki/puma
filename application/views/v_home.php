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
									<p>BTE</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>CIC</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>POCKET</p>
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
	<h3 class="animated wow zoomIn" data-wow-delay=".5s">Our Products</h3>
	<div class="container-fluid">
		<div class="row">

<?php $i=0; 
foreach ($data as $x) { ?>

			<div class="col-md-3">  	
				<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
											<div class="new-collections-grid1-image">
												<a href="single.html" class="product-image"><img src="<?php echo base_url().$x['image']; ?>" alt=" " class="img-responsive" /></a>
												<div class="new-collections-grid1-image-pos">
													<a data-toggle="modal" data-target="#Product-Modal<?php echo $i; ?>" href="">Quick View</a>
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

									<script src="<?php echo base_url();?>assets/js/jquery.countdown.js"></script>
									<script src="<?php echo base_url();?>assets/js/script.js"></script>							
									<div class="clearfix"> </div>
								</div>

<!-- Product Modal -->
        <div id="Product-Modal<?php echo $i; ?>" class="modal fade" role="dialog">
	  	<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">QUICK VIEW</h4>
		      </div>
		      <div class="modal-body">
				<div class="row">
					<div class="col-sm-6">	
						<a class="product-img" >
							<img class="img-responsive" src="<?php echo base_url().$x['image']; ?>" alt="ABD">
						</a>								
					</div>
					<div class="col-md-6" style="text-align: left;">
					 <table style="width:100%">
						<tr>
							<td><b>Merk :</b></td>	
						</tr>
						<tr>
							<td><?php echo $x['merk_barang']; ?></td>
						</tr>
						<tr>
							<td><b>Nama :</b></td>
						</tr>
						<tr>
							<td><?php echo $x['nama_barang']; ?></td>
						</tr>
						<tr>
							<td><b>Harga :</b></td>
						</tr>
						<tr>
							<td>$<?php echo $x['harga_barang']; ?></td>
						</tr>
						<tr>
							<td><b>Deskripsi :</b></td>
						</tr>					
						<tr>
							<td><?php echo $x['deskripsi_barang']; ?></td>
						</tr>
					</table> 
					</div>
				</div>	        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
                <?php $i++; ?>
	  	</div>
	</div>
        
            <?php } ?>

			</div>
		</div>
	</div>
</div>


<!-- Product Modal -->

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