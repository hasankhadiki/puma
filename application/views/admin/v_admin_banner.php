
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
                        <a href="<?php echo base_url('Autentifikasi/logout');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                  
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">