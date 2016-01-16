		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Edit Profile</h1>
                </div> 
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Profile
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								  <form action="<?php echo base_url()?>admin/profile/update" method="POST" enctype="multipart/form-data" > 
								  <?php foreach ($data as $row): ?>
										<input class="form-control" size="10" id="id" name="id" type="hidden" value="<?php echo $row->id_user;?>" class="input-xlarge"/>
                                        
										<div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" readonly="true" size="20" id="username" name="username"  value="<?php echo $row->username;?>" class="input-xlarge"/>
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" size="20" id="password" name="password"  value="<?php echo $row->password;?>" class="input-xlarge"/>
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
	
	
	 
