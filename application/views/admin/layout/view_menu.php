			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/home"><i class="fa fa-home fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>admin/sepatu"><i class="fa fa-tags fa-fw"></i> Sepatu</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-th-large fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"> 
                                <li>
                                    <a href="<?php echo base_url()?>admin/jenis">Jenis</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/merk">Merk</a>
                                </li> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<?php 
						if($this->session->userdata('level') == 'admin')
						{
						?> 
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Admin Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
									<a href="<?php echo base_url()?>admin/slider">Slider</a>
								</li> 
								<li>
                                    <a href="<?php echo base_url()?>admin/toko">Toko</a>
                                </li>
								 <li>
                                    <a href="<?php echo base_url()?>admin/user">User</a>
                                </li> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<?php
                        }
						?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>