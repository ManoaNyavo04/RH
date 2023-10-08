<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/simplebar.css");?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/feather.css");?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/daterangepicker.css");?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/app-light.css");?>" id="lightTheme">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/app-dark.css");?>" id="darkTheme" disabled>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <?php $this->load->view('composant/sidebar');?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Annonces</h2>
              <p class="lead text-muted"> Annonces encore disponible si vous voulez postuler. </p>
              <div class="row">                
                <?php for ($i=0; $i < 10; $i++) { ?> 
                  <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <p class="card-title"><strong>Vertically centered</strong></p>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal"> Launch demo modal </button>
                      <!-- Modal -->
                      <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="verticalModalTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui urna, cursus mollis cursus vitae, fringilla vel augue. In vitae dui ut ex fringilla consectetur. Sed vulputate ante arcu, non vehicula mauris porttitor quis. Praesent tempor varius orci sit amet sodales. Nullam feugiat condimentum posuere. Vivamus bibendum mattis mi, vitae placerat lorem sagittis nec. Proin ac magna iaculis, faucibus odio sit amet, volutpat felis. Proin eleifend suscipit eros, quis vulputate tellus condimentum eget. Maecenas eget dui velit. Aenean in maximus est, sit amet convallis tortor. In vel bibendum mauris, id rhoncus lectus. Suspendisse ullamcorper bibendum tellus a tincidunt. Donec feugiat dolor lectus, sed ullamcorper ante rutrum non. Mauris vestibulum, metus sit amet lobortis fringilla, dui est venenatis ligula, a euismod sem augue vel lorem. Nunc feugiat eget tortor vel tristique. Mauris lobortis efficitur ligula, et consectetur lectus maximus sed. </div>
                            <div class="modal-footer">
                              <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn mb-2 btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <?php } ?>   
              </div>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->        
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src=<?php echo site_url("assets/js/jquery.min.js");?>></script>
    <script src=<?php echo site_url("assets/js/popper.min.js");?>></script>
    <script src=<?php echo site_url("assets/js/moment.min.js");?>></script>
    <script src=<?php echo site_url("assets/js/bootstrap.min.js");?>></script>
    <script src=<?php echo site_url("assets/js/simplebar.min.js");?>></script>
    <script src=<?php echo site_url("assets/js/daterangepicker.js");?>></script>
    <script src=<?php echo site_url("assets/js/jquery.stickOnScroll.js");?>></script>
    <script src=<?php echo site_url("assets/js/tinycolor-min.js");?>></script>
    <script src=<?php echo site_url("assets/js/config.js");?>></script>
    <script src=<?php echo site_url("assets/js/apps.js");?>></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>