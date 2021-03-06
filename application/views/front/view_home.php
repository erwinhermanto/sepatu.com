﻿<div class="container main-container">
        <div class="row">

        	<!-- Slider -->
        	<div class="col-lg-12 col-md-12">
                <div class="slider">
                    <ul class="bxslider">
					<?php foreach ($slider as $row): ?>  
						<li>
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/upload/slider/<?php echo $row->foto; ?>" alt="<?php echo $row->nama_slider; ?>"/>
                            </a>
                        </li>  
					<?php endforeach; ?>  
                    </ul>
                </div>
            </div>
            <!-- End Slider -->

			 
        </div>

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<?php $this->load->view('front/layout/view_sidebar')?>
 
        	</div>

        	<div class="clearfix visible-sm"></div>

			 

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="col-lg-12 col-sm-12">
            		<span class="title">SEMUA SEPATU</span>
            	</div>
				<?php foreach ($sepatu as $row): ?>  
				<div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="<?php echo base_url(); ?>front/perbandingan/detail/<?php echo $row->nama_sepatu; ?>" class="link-p">
	                    	<img src="<?php echo base_url()?>assets/upload/<?php echo $row->foto; ?>" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="<?php echo base_url(); ?>front/perbandingan/detail/<?php echo $row->nama_sepatu; ?>"><?php echo $row->nama_sepatu; ?></a></h4>
	                        <p><?php echo $row->keterangan; ?></p>
	                        <p>
	                        	<div class="btn-group">
		                        	<a href="<?php echo base_url(); ?>front/perbandingan/detail/<?php echo $row->nama_sepatu; ?>" class="btn btn-default">Lihat Perbandingan</a>
									<!--
		                        	<a href="#" class="btn btn-default">$ 22.22</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
									-->
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div> 
				<?php endforeach; ?> 
	            
	             
			</div>
			<!-- End Adidas Category -->

        </div>
	</div>