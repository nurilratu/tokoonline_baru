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
            <li>
                    <a href="<?php echo base_url(); ?>index.php/admin/shoes">
                        <i class="material-icons">favorite</i>
                        <p>Shoes</p>
                    </a>
                </li>
                <li class="active">
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
                    <h2>Customer</h2>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                        </ul>
                            </li>
							</ul>
                    </div>
                </div>
            </nav>
            <br>
            <br>
            <br>
            <br>
            <br>
                    <div class="row" style="margin-left: 5%;">
                        <div class="col col-lg-11 col-md-11">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Customer</h4>
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                        </div>
                                    </div>
                                </div>
                                           <br><form class="tabel" method="GET">
                                <table width="94%" class="w3-table-all" id="tabel" name="tabel">
                                <tr class="w3-blue">
                                    <th width="50px"><center>ID</center></th>
                                    <th width="150px"><center>Username</center></th>
                                    <th width="150px"><center>Email</center></th>                              
                                    <th width="200px"><center>Alamat</center></th>
                                    <th width="150px"><center>No Telpon</center></th>
                                    <th width="80px"><center>Status</center></th>
                                    <th width="50px" colspan="2"><center>Opsi</center></th>
                                </tr>
                                <?php
                                    foreach ($customer as $c) {
                                        echo '
                                        <tr class="delete_row">
                                            <td><center>'.$c->id_customer.'</center></td>
                                            <td><center>'.$c->username.'</center></td>
                                            <td><center>'.$c->email.'</center></td>
                                            <td><center>'.$c->alamat.'</center></td>
                                            <td><center>'.$c->no_telp.'</center></td>
                                            <td><center>'.($c->status==1?'active':'banned').'</center></td>               <td scope="col"><div align="center"><a href="'.base_url().'index.php/admin/update_status_action/'.$c->id_customer.'/'.$c->status.'" name="update" class="btn success" id="update"><em><strong>'.($c->status == 1 ? 'Nonaktifkan':'aktifkan').'</strong></em></a></div></td>		
                                       </tr>
                                        ';
                                    }
                                ?>
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
                        <!-- Material Dashboard javascript methods -->
                        <script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
                        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
                        <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>                 
</body>
</html>