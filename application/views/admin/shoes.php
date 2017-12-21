<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Flad.eo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="<?php echo base_url(); ?>index.php/admin/dashboard" class="simple-text">
                Admin Flad.eo
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
            <li class="active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">favorite</i>
                        <p>Shoes</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/customer">
                        <i class="material-icons text-gray">person</i>
                        <p>Customer</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/nota">
                        <i class="material-icons text-gray">content_paste</i>
                        <p>Nota</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/logout">
                        <i class="material-icons text-gray">input</i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2>Shoes</h2>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                        </ul>
                            </li>
							</ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card bs-center">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Input Shoes</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Sepatu</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" for="kategori">Kategori</label>
                                                    <select class="form-control" name="kategori" id="kategori">
                                                        <option value="women">Women</option>
                                                        <option value="man">Man</option>
                                                        <option value="kids">Kids</option>
                                                        <option value="sport">Sport</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kuantitas Barang</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
											</div>
											<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Harga Barang</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Keterangan</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
											</div>
											<div class="row">
											<div class="col-md-6">
											<input type="file" accept="image/jpeg" class="">
                                            </div>
											</div>
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
						
						<div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Shoes</h4>
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                        </div>
                                    </div>
                                </div>
                                           <br><form class="tabel" method="GET">
                                <table width="94%" class="w3-table-all" id="tabel" name="tabel">
                                <tr class="w3-blue">
                                    <th width="50px"><center>ID</center></th>
                                    <th width="200px"><center>Nama Sepatu</center></th>
                                    <th width="200px"><center>Kategori</center></th>                              
                                    <th width="200px"><center>Kuantitas Barang</center></th>
                                    <th width="200px"><center>Harga Barang</center></th>
                                    <th width="50px" colspan="2"><center>Opsi</center></th>
                                </tr>
                                <tr class="delete_row">
                                    <td><center>adaw</center></td>
                                    <td><center>adaw</center></td>
                                    <td><center>adaw</center></td>
                                    <td><center>adaw</center></td>
                                    <td><center>adaw</center></td>
                                <th scope="col"><div align="center"><a href="edit.html?id_barang=adaw" name="update" class="btn success" id="update"><em><strong> Edit</strong></em></a> </div></th>		
                                <th scope="col"><div align="center"><a class="btn info" onClick="return confirm('Apakah anda ingin menghapus data ini?') ? hapus('adaw') : '';"><em><strong>Delete</strong></em></div></a></th>
                                </tr>
                                </table>
                                </form>
                                </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
    <!--  Dynamic Elements plugin -->
    <script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
</body>
</html>