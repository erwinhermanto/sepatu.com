		<div id="page-wrapper">		 
            <div class="row">
               <div class="col-lg-12">
                    <h1 class="page-header">Tambah sepatu</h1>
                </div> 
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Sepatu
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								  <form action="<?php echo base_url()?>admin/sepatu/insert" method="POST" enctype="multipart/form-data" > 
                                        <div class="form-group">
                                            <label></label>
                                            <input class="form-control" type="hidden" size="20" id="id_toko" name="id_toko"  value="<?php echo $this->session->userdata('id_toko') ?>" class="input-xlarge"/>
                                        </div>
										<div class="form-group">
                                            <label>Merk</label>
                                            <select class="form-control"  id="id_merk" name="id_merk"   /> 
												<?php foreach ($merk as $row): ?>  
												<option value="<?php echo $row->id_merk; ?>"><?php echo $row->nama_merk; ?></option>  
												<?php endforeach; ?> 
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control"  id="id_jenis" name="id_jenis"   /> 
												<?php foreach ($jenis as $row): ?>  
												<option value="<?php echo $row->id_jenis; ?>"><?php echo $row->nama_jenis; ?></option>  
												<?php endforeach; ?> 
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Nama Sepatu</label>
                                            <input class="form-control" type="text" size="20" id="nama_sepatu" name="nama_sepatu"  value="" class="input-xlarge"/>
                                        </div>
										<div class="form-group">
                                            <label>Ukuran</label>
                                            <input class="form-control" type="text" size="20" id="ukuran" name="ukuran"  value="" class="input-xlarge"/>
                                        </div>
										<div class="form-group">
                                            <label>Warna</label>
                                            <input class="form-control" type="text" size="20" id="warna" name="warna"  value="" class="input-xlarge"/>
                                        </div>
										<div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" type="text" size="20" id="harga" name="harga"  value="" class="input-xlarge"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
											<input type="file" name="userfile" size="20" /> 
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
	
	
	 
