		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Tambah Toko</h1>
                </div> 
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Toko
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								  <form action="<?php echo base_url()?>admin/toko/insert" method="POST" enctype="multipart/form-data" > 
                                         
										 
										<div class="form-group">
                                            <label>Nama toko</label>
                                            <input class="form-control" type="text" size="20" id="nama_toko" name="nama_toko"  value="" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" size="20" id="alamat" name="alamat"  value="" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>No Telepon</label>
                                            <input class="form-control" type="text" size="20" id="no_telepon" name="no_telepon"  value="" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control" type="text" size="20" id="website" name="website"  value="" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Latitude</label>
                                            <input class="form-control" type="text" size="20" id="latitude" name="latitude"  value="" class="input-xlarge"/>
                                        </div> 
										<div class="form-group">
                                            <label>Longitude</label>
                                            <input class="form-control" type="text" size="20" id="longitude" name="longitude"  value="" class="input-xlarge"/>
                                        </div> 
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea id="keterangan" name="keterangan" class="form-control" rows="3"></textarea>
                                        </div>
										
										 
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
	
	
	 
