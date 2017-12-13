<!DOCTYPE html>
<html>
<head>
<title>Puma Hearing Aid | Products</title>
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
	
<body>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url('index.php/dm_user/home');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 20000, 80000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Item on page 9</option>
								<option value="null">Item on page 18</option> 
								<option value="null">Item on page 32</option>					
								<option value="null">All</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
						<img src="<?php echo base_url();?>assets/images/18.jpg" alt=" " class="img-responsive" />
						<div class="products-right-grids-position1">
							<h4>2016 New Collection</h4>
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
								necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae 
								non recusandae.</p>
						</div>
					</div>
				</div><!-- 

<!-- collections -->
<div class="new-collections">
	<h3 class="animated wow zoomIn" data-wow-delay=".5s">Our Products</h3>
	<div class="container-fluid">
		<div class="row">

<?php $i=0; 
foreach ($data as $x) { ?>

			<div class="col-md-6">  	
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

					<div class="clearfix"> </div>
				</div>

				<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					<li>
					  <a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>
					<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
					  <a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
</body>
</html>