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
                <a href="<?php echo base_url(); ?>index.php/admin/admin_toko" class="simple-text">
                    Admin Flad.eo
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
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
                        <h2>Dashboard</h2>
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
                  </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Penjualan Per Hari</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Jumlah Pengunjung Per Bulan</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
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
                        <script type="text/javascript">
                            $(document).ready(function() {

                                // Javascript method's body can be found in assets/js/demos.js
                                demo.initDashboardPageCharts();

                            });
                        </script>
</body>
</html>