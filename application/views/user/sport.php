<!DOCTYPE html>
<html lang="en">
<head>
    <title>FLAD.EO</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/web/fl.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="<?php echo base_url(); ?>assets/css/style_user.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
		<!--bootstrap-js-->
			<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!--script-->
         <!-- FlexSlider -->
            <script src="<?php echo base_url(); ?>assets/js/imagezoom.js"></script>
              <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" />

<script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
        <style type="text/css"></style>
<!--
.style1 {
	font-size: 36px;
	color: #FFFF00;
	font-family: "Snap ITC", "Source Sans Pro";
}
.style2 {color: #CCCCCC}
.style4 {font-size: 40px; font-family: 'Didact Gothic';}
.style5 {font-family: 'Didact Gothic'}
.style6 {font-size: 40px}
-->
</head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
  <div class="span6"></div>
</div>
<br>
<!-- Navbar ================================================== -->
<div class="header">
            <div class="container">
<div class="header-top">
                    <div class="logo">
                        <center><a href="<?php echo base_url(); ?>index.php/user/dashboard">FLAD.EO</a></center>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="<?php echo base_url(); ?>index.php/user/login" role="button">Login</a>
                        <div class="cart box_1">
                            <h3>
                            <div class="total">
                            <span class="simpleCart_total"></span></div>
                        </h3>
                            <a href="<?php echo base_url(); ?>index.php/user/checkout"><button type="button" class="btn btn-default btn-lg button1 button1-hover">0 cart
							&nbsp;&nbsp;&nbsp;
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </button></a>
                        </div>	
                    </div>
        <div class="clearfix"></div>
              </div>
</div>
                <!---menu-----bar--->
                <div class="header-botom center">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/user/dashboard">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/user/man">Man</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/user/women">Women</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/user/kids">Kids</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>index.php/user/sport">Sport</a></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
    </div>
  </div>
        <form>
     <center><input class="search search-hover" align="left" type="search" placeholder="Search" width="500px">
	 <button type="button" class="btn btn-default btn-lg button1 button1-hover">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
       </button></center>
    </form>
<!-- Header End====================================================================== -->
<!-- Sidebar end=============================================== -->
<br>
<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>index.php/user/dashboard">Home</a></li>
                    <li class="active">Sport</li>
                </ol>
            </div>
        </div>
<br>
<h1>&nbsp;&nbsp;&nbsp;Sport</h1>
<ul class="thumbnails">
<?php 
    foreach($barang as $b) {
        echo '
        <li class="span3 detail-box">
            <div class="thumbnail">
            <a  href="'.base_url('index.php/user/detail/').$b->id_barang.'"><img src="'.base_url('assets/img/').$b->gambar.'" alt=""/></a>
            <div class="caption">
                <h5>'.$b->nama_barang.'</h5>
                <p> 
                '.$b->keterangan.' 
                </p>
                <center><a class="btn buy buy-hover" href="'.base_url('index.php/user/detail/').$b->id_barang.'">BUY</a></center>
            </div>
            </div>
        </li>
        ';
    }
?>
</ul>	

		</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<!-- Footer ================================================================== -->
	<ul class="thumbnail">
	<li>
	<div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li><a href="<?php echo base_url(); ?>index.php/user/men">Men</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/user/women">Women</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/user/kids">Kids</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/user/sport">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Short links</h3>
                    <ul class="shot-links">
                        <li><a href="<?php echo base_url(); ?>index.php/user/contact">Contact us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="#" class="fb">facebook</a></li>
                        <li><a href="#" class="twt">twitter</a></li>
                        <li><a href="#" class="gpls">g+ plus</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>index.php/user/dashboard" class="ft-log">FLAD.EO</a>
                        </div>
                    </div>
                </div>
	  </li>
  </ul>
        <div class="clearfix"></div>
</div>
            <div class="copy-rt">
                <div class="container">
				<!--
            <p>&copy;   2015 N-AIR All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
                </div>
            </div>
        </div>-->
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url(); ?>assets/themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/themes/js/bootshop.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</body>
</html>