 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Puma Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url('assets/css/admin_bootstrap.css');?>" rel='stylesheet' type='text/css' />
<!-- <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/admin_style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/admin_font-awesome.css');?>" rel="stylesheet"> 
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/admin_custom.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js');?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}
			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			
		});
		</script>
<!--skycons-icons-->
<script src="<?php echo base_url('assets/js/skycons.js');?>"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">


        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="<?php echo base_url('index.php/dm_admin/index');?>">Puma Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
            <div class="clearfix"> </div>
           </div>
     
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="<?php echo base_url('index.php/dm_admin/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/dm_admin/layout');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Produk</span> </a>
                    </li>
                    <li>
                         <a href="<?php echo base_url('index.php/dm_admin/pemesanan');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Pemesanan</span> </a>
                     </li>
                    <li>
                        <a href="<?php echo base_url('index.php/dm_admin/pelanggan');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Pelanggan</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Autentifikasi/logout');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                  
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Puma Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url('assets/css/admin_bootstrap.css');?>" rel='stylesheet' type='text/css' />
<!-- <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/admin_style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/admin_font-awesome.css');?>" rel="stylesheet"> 
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/admin_custom.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js');?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}
			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			
		});
		</script>
<!--skycons-icons-->
<script src="<?php echo base_url('assets/js/skycons.js');?>"></script>
<!--//skycons-icons-->
</head>


 	<!--banner-->
		    <div class="banner">
		    	<h2>
				<a href="<?php echo base_url('index.php/dm_admin/index');?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Produk</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">

	<div class="konten" style="text-align: center;">
		<div class="tombol">
		</div>
		<h2><?php if (isset($error)) {
			echo $error;
		} ?></h2>
	</div>

			<table class="table table-bordered ">
				<tr>
					<th>ID</th>
					<th>TOTAL</th>
					<th>FOTO</th>
					<th>STATUS</th>
					<th>Konfirmasi</th>
					
				</tr>
				<?php $i=0; $j=0;
				foreach($data as $x){
				?>
				<tr>
					<td style="text-align: left;" id=i><?php echo $x['id_order']; ?></td>
					<td style="text-align: left;"><?php echo $x['total']; ?></td>
					<td style="text-align: left; max-width: 220px;"><img style="max-width: 100%; height: auto" src="<?php echo base_url().$x['image']; ?>"></td>
					<td style="text-align: left;"><?php echo $x['status']; ?></td>
					<td><a href="<?php echo base_url().'dm_admin/change_status_order/'.$x['id_order']; ?>">
                      <button type="button" class="btn btn-outline btn-primary btn-sm">Ubah Status</button>
                    </a></td>
				</tr>

</div>
				<?php

				}
				?>
			</table>

</div>
</div>
 	<!--//grid-->
		<!---->
		<!--modal Edit-->

<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Barang</h4>
      </div>
      <form method="POST" action="<?php echo base_url()."dm_admin/ubah"; ?>" enctype='multipart/form-data'>
      	<div class="modal-body">
					<div class="form-group">
		  			<label for="comment">Nama</label>
		  			<input type="text" class="form-control" name="nama_barang" id="nama_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Merk</label>
		  			<input type="text" class="form-control" name="merk_barang" id="merk_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Harga</label>
		  			<input type="text" class="form-control" name="harga_barang" id="harga_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Deskripsi</label>
		  			<textarea type="text" class="form-control" name="deskripsi_barang" id="deskripsi_barang"></textarea>
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
					</div>
					<div class="form-group">
		  			<label for="comment">Gambar</label>
		  			<input type="file" name="file1" id="image">
					</div>
      </div>
      <div class="modal-footer">
				<button type="submit" class="btn btn-info">Simpan</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>

  </div>
</div>

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#modalEdit').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#nama_barang').attr("value",div.data('nama_barang'));
            modal.find('#merk_barang').attr("value",div.data('merk_barang'));
						modal.find('#harga_barang').attr("value",div.data('harga_barang'));
						modal.find('#deskripsi_barang').attr("value",div.data('deskripsi_barang'));
						modal.find('#image').attr("value",div.data('image'));
        });
    });
</script>


	<div class="copy">
    	<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	</div>
	</div>
	</div>
	<div class="clearfix"> </div>
  </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
