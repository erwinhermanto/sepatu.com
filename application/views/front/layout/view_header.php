<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.18maret.com/demo/mimity/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2015 02:54:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Toko Sepatu</title>
    <link href="<?php echo base_url()?>assets/mimity/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/mimity/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/mimity/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/mimity/css/style.css" rel="stylesheet">
</head>
<body>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-8 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="<?php echo base_url()?>">
	            			Mimity <span>Toko Sepatu</span>
	            		</a>
	            		<div>Rekomendasi Toko Terdekat.</div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form --> 
	            <div class="col-lg-4 col-md-4 col-sm-5">
	            	<div class="well">
	                    <form action="<?php echo base_url()?>front/pencarian/index" method="post">
	                        <div class="input-group">
	                            <input type="text" id="cari" name="cari" class="form-control input-search" placeholder="Cari berdasarkan merk" value="<?php if($cari){echo $cari;} ?>"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div> 
	            <!-- End Search Form -->

	            
	        </div>
	    </div>
    </header>