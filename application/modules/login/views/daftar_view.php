
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>SISTEM PENDUKUNG KEPUTUSAN</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url("assets"); ?>/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url("assets"); ?>/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/assets/examples/css/pages/login.css">

        <link href="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.css" rel="stylesheet" />
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets") ?>/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url("assets") ?>/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="<?php echo base_url("assets") ?>/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?php echo base_url("assets") ?>/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login layout-full page-dark">
  

    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <img class="brand-img" src="<?php echo base_url("assets"); ?>/assets//images/logo.png" alt="...">
          <h2 class="brand-text">Sistem Pendukung Keputusan Penyakit</h2>
        </div>
        <p>PENDAFTARAN PASIEN  </p>


        <form id="frmlogin"  method="post">
                <div class="card-body">
                   
                  <div class="row">
                    
                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="username" class="form-label">Nama pengguna</label>
                    <input type="text" class="form-control" id="username" name="username"  placeholder="Nama penggguna">
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="password" class="form-label">Kata sandi
                       
                    </label>
                    <input type="password" class="form-control" id="password"  name="password" placeholder="Kata sandi">
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="password2" class="form-label">Ulangi Kata sandi
                       
                    </label>
                    <input type="password" class="form-control" id="password2"  name="password2" placeholder="Kata sandi">
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="username" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama lengkap">
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="jk" class="form-label">JK</label>
                    <?php 
                    $arr = array("L"=>"Laki laki ","P"=>"Perempuan");
                    echo form_dropdown("jk",$arr,'','class="form-control" id="jk"');
                    ?>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur"  placeholder="Umur">
                  </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="hp" name="hp"  placeholder="Nomor HP">
                  </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat lengkap">
                  </div>
                  </div>
                  

                  <!-- 
                  

                  

                  

                   -->
                   </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check"></i> DAFTAR </button>
                  </div>
                  <div class="text-center text-muted mt-3">
                    Sudah  terdaftar ?  <a href="<?php echo site_url("login"); ?>">Login di sini </a>
                  </div>
                </div>
                
              </form>




         
        <p>Belum terdaftar ?  <a href="<?php echo site_url("login/daftar"); ?>">Daftar di sini </a></p>

        <footer class="page-copyright page-copyright-inverse">
          <p>Dibuat oleh Riani</p>
          <p>© 2019. USTJ - JAYAPURA .</p>
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
          </div>
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url("assets") ?>/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url("assets") ?>/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url("assets") ?>/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url("assets") ?>/global/js/Component.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Plugin.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Base.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Config.js"></script>
    
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url("assets") ?>/global/js/config/colors.js"></script>
    <script src="<?php echo base_url("assets"); ?>/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url("assets"); ?>/assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url("assets"); ?>/assets/js/Site.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url("assets") ?>/global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url("assets") ?>/global/js/Plugin/jquery-placeholder.js"></script>


<script src="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();

  $("#frmlogin").submit(function(){
    $.ajax({
      url : '<?php echo site_url("login/savedaftar"); ?>',
      data : $(this).serialize(),
      type : 'post',
      dataType : 'json',
      success : function(obj){
        if(obj.error==false) {
          
          swal.fire('Info',obj.message,'success').then((result) => {

            location.href='<?php echo base_url(); ?>';

          });

          
        }
        else {
          swal.fire('Error',obj.message,'error');

        }
      }
    });

    return false;
  });


        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
