<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="<?php echo base_url()?>">Mimity Toko Sepatu</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url()?>" class="active">Beranda</a></li>
                    <li><a href="<?php echo base_url(); ?>front/katalog">Katalog</a></li>
                    <li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Merk <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						<?php foreach ($merk as $row): ?>  
							<li><a href="<?php echo base_url(); ?>front/merk/detail/<?php echo $row->id_merk; ?>"><?php echo $row->nama_merk; ?></a></li> 
						<?php endforeach; ?> 
						</ul>
                    </li>
					<li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Jenis <span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
						<?php foreach ($jenis as $row): ?>  
							<li><a href="<?php echo base_url(); ?>front/jenis/detail/<?php echo $row->id_jenis; ?>"><?php echo $row->nama_jenis; ?></a></li> 
						<?php endforeach; ?> 
						</ul>
                    </li>
					<li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Toko <span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
						<?php foreach ($toko as $row): ?>  
							<li><a href="<?php echo base_url(); ?>front/toko/detail/<?php echo $row->id_toko; ?>"><?php echo $row->nama_toko; ?></a></li> 
						<?php endforeach; ?> 
						</ul>
                    </li>
                    <li><a href="<?php echo base_url(); ?>front/about_us">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>front/daftar">Daftar</a></li>
                    <li><a href="<?php echo base_url(); ?>login">Masuk</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->