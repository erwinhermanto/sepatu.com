<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">MERK SEPATU</span>
	            	</div>

					<div id="main_menu">
                        <div class="list-group panel panel-cat"> 
                            <?php foreach ($merk as $row): ?>  
							<a href="<?php echo base_url(); ?>front/merk/detail/<?php echo $row->id_merk; ?>" class="list-group-item" ><?php echo $row->nama_merk; ?></a> 
							<?php endforeach; ?> 
                        </div>
                    </div>
					
					<div class="no-padding">
	            		<span class="title">JENIS SEPATU</span>
	            	</div>

					<div id="main_menu">
                        <div class="list-group panel panel-cat">
                            <?php foreach ($jenis as $row): ?>  
							<a href="<?php echo base_url(); ?>front/jenis/detail/<?php echo $row->id_jenis; ?>" class="list-group-item" ><?php echo $row->nama_jenis; ?></a> 
							<?php endforeach; ?> 
                        </div>
                    </div>
					
					<div class="no-padding">
	            		<span class="title">TOKO</span>
	            	</div>

					<div id="main_menu">
                        <div class="list-group panel panel-cat">
                            <?php foreach ($toko as $row): ?>  
							<a href="<?php echo base_url(); ?>front/toko/detail/<?php echo $row->id_toko; ?>" class="list-group-item" ><?php echo $row->nama_toko; ?></a> 
							<?php endforeach; ?> 
                        </div>
                    </div>

				</div>
				<!-- End Categories -->