<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-1008641-85', 'auto');
      ga('send', 'pageview');

    </script>
    
    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/star_bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/star_bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/star_bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/star_bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
			<div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Akun Baru</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url();?>register/akun_baru">
                            <fieldset>
								<div class="form-group">
                                    <label>Nama toko</label>
                                    <input class="form-control" type="text" size="20" id="nama_toko" name="nama_toko" required value="" class="input-xlarge"/>
                                </div> 
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" size="20" id="alamat" name="alamat" required  value="" class="input-xlarge"/>
                                </div> 
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input class="form-control" type="text" size="20" id="no_telepon" name="no_telepon" required value="" class="input-xlarge"/>
                                </div> 
                                <div class="form-group">
                                    <label>Website</label>
                                    <input class="form-control" type="text" size="20" id="website" name="website"  value="" class="input-xlarge"/>
                                </div> 
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea id="keterangan" name="keterangan" class="form-control" rows="3"></textarea>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Daftar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/star_bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/star_bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/star_bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/star_bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
