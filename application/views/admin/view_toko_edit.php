		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Edit toko</h1>
                </div> 
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							toko
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								  <form action="<?php echo base_url()?>admin/toko/update" method="POST" enctype="multipart/form-data" > 
								  <?php foreach ($data as $row): ?>
										<input class="form-control" size="10" id="id" name="id" type="hidden" value="<?php echo $row->id_toko;?>" class="input-xlarge"/>
                                         
										<div class="form-group">
                                            <label>Nama toko</label>
                                            <input class="form-control" type="text" size="20" id="nama_toko" name="nama_toko"  value="<?php echo $row->nama_toko;?>" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" size="20" id="alamat" name="alamat"  value="<?php echo $row->alamat;?>" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" type="text" size="20" id="no_telepon" name="no_telepon"  value="<?php echo $row->no_telepon;?>" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control" type="text" size="20" id="website" name="website"  value="<?php echo $row->website;?>" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Latitude</label>
                                            <input class="form-control" type="text" size="20" id="latitude" name="latitude"  value="<?php echo $row->latitude;?>" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Longitude</label>
                                            <input class="form-control" type="text" size="20" id="longitude" name="longitude"  value="<?php echo $row->longitude;?>" class="input-xlarge"/>
                                        </div> 
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea id="keterangan" name="keterangan" class="form-control" rows="3"><?php echo $row->keterangan;?></textarea>
                                        </div>
										
										 
									<?php endforeach; ?>	
										 
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
							</div>
						</div>
					</div>
										 
				</div>													
									
                                 
							 
            </div>
            <!-- /.row -->
			 
		</div>
		
		<!-- jQuery -->
    <script src="<?php echo base_url();?>assets/star_bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/star_bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/star_bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/star_bootstrap/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/star_bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
  
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/star_bootstrap/dist/js/sb-admin-2.js"></script>
	
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
	
	
	 
