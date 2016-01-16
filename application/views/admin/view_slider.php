		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Slider</h1>
                </div>
				
				<div class="col-lg-12">
					<a href="<?php echo base_url()?>admin/slider/tambah">
						<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data </button>
					</a>
					<br/>
					<br/>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							Tabel Slider
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>ID</th> 
											<th>Nama</th> 
											<th>Foto</th> 
											<th>Keterangan</th>
											<th>  </th> 
										</tr>
									</thead>
									<tbody>
										<?php foreach ($data as $row): ?>
										<tr>
											<td><?php echo $row->id_slider; ?></td> 
											<td><?php echo $row->nama_slider; ?></td> 
											<td><a href="<?php echo base_url()?>assets/upload/slider/<?php echo $row->foto; ?>" target="_blank"><img width="50px" src="<?php echo base_url()?>assets/upload/slider/<?php echo $row->foto; ?>"/></a></td> 
											<td><?php echo $row->keterangan; ?></td>
											<td><a href="<?php echo base_url()?>admin/slider/ubah/<?php echo $row->id_slider;?>">Update</a> |
												<a href="<?php echo base_url();?>admin/slider/delete/<?php echo $row->id_slider;?>">Delete</a></td>
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