		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                </div>
				
				<div class="col-lg-12">
					<a href="<?php echo base_url()?>admin/user/tambah">
						<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data </button>
					</a>
					<br/>
					<br/>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							Tabel User
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>ID</th>
											<th>Toko</th>
											<th>Username</th>
											<th>Password</th>
											<th>Level</th>
											<th>Keterangan</th> 
											<th>  </th> 
										</tr>
									</thead>
									<tbody>
										<?php foreach ($data as $row): ?>
										<tr>
											<td><?php echo $row->id_user; ?></td>
											<td><?php echo $row->nama_toko; ?></td>
											<td><?php echo $row->username; ?></td>
											<td><?php echo $row->password; ?></td>
											<td><?php echo $row->level; ?></td>
											<td><?php echo $row->keterangan; ?></td> 
											<td><a href="<?php echo base_url()?>admin/user/ubah/<?php echo $row->id_user;?>">Update</a> |
												<a href="<?php echo base_url();?>admin/user/delete/<?php echo $row->id_user;?>">Delete</a></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
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