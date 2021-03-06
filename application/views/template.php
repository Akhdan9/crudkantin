<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
      ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/favicon.ico">
    <!-- Google Fonts
      ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/wave/waves.min.css">
    <!-- main CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- style CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <!-- responsive CSS
      ============================================ -->
      <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Header Top Area -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="#"><img src="<?=base_url()?>assets/img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="header-top-menu">
                            <ul class="nav navbar-nav notika-top-nav">
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i><?php echo $this->session->userdata('username');?></span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard One</a></li>
                                            <li><a href="index-2.html">Dashboard Two</a></li>
                                            <li><a href="index-3.html">Dashboard Three</a></li>
                                            <li><a href="index-4.html">Dashboard Four</a></li>
                                            <li><a href="analytics.html">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="view-email.html">View Email</a></li>
                                            <li><a href="compose-email.html">Compose Email</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="animations.html">Animations</a></li>
                                            <li><a href="google-map.html">Google Map</a></li>
                                            <li><a href="data-map.html">Data Maps</a></li>
                                            <li><a href="code-editor.html">Code Editor</a></li>
                                            <li><a href="image-cropper.html">Images Cropper</a></li>
                                            <li><a href="wizard.html">Wizard</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="flot-charts.html">Flot Charts</a></li>
                                            <li><a href="bar-charts.html">Bar Charts</a></li>
                                            <li><a href="line-charts.html">Line Charts</a></li>
                                            <li><a href="area-charts.html">Area Charts</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="normal-table.html">Normal Table</a></li>
                                            <li><a href="data-table.html">Data Table</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-components.html">Form Components</a></li>
                                            <li><a href="form-examples.html">Form Examples</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="notification.html">Notifications</a>
                                            </li>
                                            <li><a href="alert.html">Alerts</a>
                                            </li>
                                            <li><a href="modals.html">Modals</a>
                                            </li>
                                            <li><a href="buttons.html">Buttons</a>
                                            </li>
                                            <li><a href="tabs.html">Tabs</a>
                                            </li>
                                            <li><a href="accordion.html">Accordion</a>
                                            </li>
                                            <li><a href="dialog.html">Dialogs</a>
                                            </li>
                                            <li><a href="popovers.html">Popovers</a>
                                            </li>
                                            <li><a href="tooltips.html">Tooltips</a>
                                            </li>
                                            <li><a href="dropdown.html">Dropdowns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="contact.html">Contact</a>
                                            </li>
                                            <li><a href="invoice.html">Invoice</a>
                                            </li>
                                            <li><a href="typography.html">Typography</a>
                                            </li>
                                            <li><a href="color.html">Color</a>
                                            </li>
                                            <li><a href="login-register.html">Login Register</a>
                                            </li>
                                            <li><a href="404.html">404 Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <!-- Main Menu area start-->
        <div class="main-menu-area mg-tb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                            <li class="active"><a href="<?= base_url('index.php/dashboard')?>"><i class="notika-icon notika-house"></i> Home</a>
                            </li>
                            <?php 
                            if($this->session->userdata('id_level')=='1'){
                                ?>
                                <li><a href="<?= base_url('index.php/user')?>"><i class="notika-icon notika-mail"></i>User</a>
                                </li>
                                <li><a href="<?= base_url('index.php/pelanggan')?>"><i class="notika-icon notika-edit"></i>Pelanggan</a>
                                </li>
                                <li><a href="<?= base_url('index.php/masakan')?>"><i class="notika-icon notika-bar-chart"></i>Masakan</a>
                                </li>
                                <?php       
                            }
                            ?>
                            <li><a href="<?= base_url('index.php/Dashboard/kasir')?>"><i class="notika-icon notika-form"></i>Verifikasi Pemesanan</a>
                            </li>
                            <li><a href="<?= base_url('index.php/Dashboard/nota')?>"><i class="notika-icon notika-app"></i>Riwayat Order</a>
                            </li>
                            
                            
                            <li><a href="<?= base_url('index.php/logout')?>"><i class="notika-icon notika-support"></i> Logout</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu area End-->
        <!-- Start Status area -->
        <div class="notika-status-area">
            <?php
            $this->load->view($konten);
            ?>
        </div>
        <!-- End Realtime sts area-->
        <!-- Start Footer area-->
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright ?? 2018 
                            . All rights reserved. Template by Muhammad Akhdan Baihaqi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer area-->
    <!-- jquery
      ============================================ -->
      <script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
      <script src="<?=base_url()?>assets/js/counterup/waypoints.min.js"></script>
      <script src="<?=base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?=base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
      <script src="<?=base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/flot/jquery.flot.js"></script>
      <script src="<?=base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
      <script src="<?=base_url()?>assets/js/flot/curvedLines.js"></script>
      <script src="<?=base_url()?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/knob/jquery.knob.js"></script>
      <script src="<?=base_url()?>assets/js/knob/jquery.appear.js"></script>
      <script src="<?=base_url()?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/wave/waves.min.js"></script>
      <script src="<?=base_url()?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
        <script src="<?=base_url()?>assets/js/chat/moment.min.js"></script>
        <script src="<?=base_url()?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
      ============================================ -->
      <script src="<?=base_url()?>assets/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
        <script src="<?=base_url()?>assets/js/tawk-chat.js"></script>
    </body>

    </html>