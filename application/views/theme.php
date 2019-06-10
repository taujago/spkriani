
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>SISTEM PENDUKUNG KEPUTUSAN </title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url("assets"); ?>/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url("assets"); ?>/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/vendor/flag-icon-css/flag-icon.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/global/fonts/font-awesome/font-awesome.css">



    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/select2/select2.min.css">


    <link href="<?php echo base_url("assets"); ?>/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

     <link href="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.css" rel="stylesheet" />
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?php echo base_url("assets"); ?>/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


 <!-- Core  -->
    <script src="<?php echo base_url("assets"); ?>/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url("assets"); ?>/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/vendor/slidepanel/jquery-slidePanel.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url("assets"); ?>/global/js/Component.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Plugin.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Base.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Config.js"></script>
    
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url("assets"); ?>/global/js/config/colors.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url("assets"); ?>/assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url("assets"); ?>/assets/js/Site.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url("assets"); ?>/global/js/Plugin/switchery.js"></script>

<script src="<?php echo base_url("assets"); ?>/select2/select2.full.min.js"></script>


<!-- Data tables -->
<script src="<?php echo base_url("assets"); ?>/datatable/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url("assets"); ?>/datatable/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>




    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="<?php echo base_url("assets"); ?>/assets/images/logo.png" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> USJ - JAYAPURA</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
             
           
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
             
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url("assets"); ?>/global/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="<?php echo site_url("home/gantipassword"); ?>" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Ganti Password</a>
         
                 <a class="dropdown-item" href="<?php echo site_url("login/logout"); ?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
             
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>

              <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("home"); ?>">
                       <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>DASHBOARD
                    </a>
              </li>

               
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">DATA MASTER</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("gejala") ?>">
                      <span class="site-menu-title">GEJALA</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("penyakit") ?>">
                      <span class="site-menu-title">PENYAKIT</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("penyakit/pengetahuan") ?>">
                      <span class="site-menu-title">PENGETAHUAN</span>
                    </a>
                  </li>
                   
                    </ul>
                  </li>
              
               
               
               <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("konsumen"); ?>">
                       <i class="site-menu-icon fa-user-circle" aria-hidden="true"></i>DATA PASIEN
                    </a>
              </li>


              <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("konsultasi/laporan"); ?>">
                       <i class="site-menu-icon fa-folder" aria-hidden="true"></i>REKAP HASIL KONSULTASI
                    </a>
              </li>


              <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("konsultasi"); ?>">
                       <i class="site-menu-icon fa-life-bouy" aria-hidden="true"></i>KONSULTASI
                    </a>
              </li>

              <li class="site-menu-item">
                    <a class="animsition-link" href="<?php echo site_url("home"); ?>">
                       <i class="site-menu-icon wb-library" aria-hidden="true"></i>LIHAT DATA KONSULTASI
                    </a>
              </li>
               
               
            </ul>
              </div>
        </div>
      </div>
    
       
    </div>     

    <!-- Page -->
    <div class="page">
      <div class="page-content">
      


        <div class="card">
                <div class="card-header card-header-transparent card-header-bordered">
                  <h2><?php echo $title; ?></h2>
                </div>
                <div class="card-block">
                 <!--  <h4 class="card-title">Lorem ipsum dolor sit amet</h4> -->
                   <?php echo $content; ?>  
                   
                </div>
              </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2019 USTJ - Jayapura </div>
      <div class="site-footer-right">
        Created  with <i class="red-600 wb wb-heart"></i> by  Riani
      </div>
    </footer>
   
  </body>
</html>
