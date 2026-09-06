<?php 
    include 'server.php';
     session_start();
    if(!isset($_SERVER['HTTP_REFERER'])){
        header('location:index.php');
        exit;
    }
     error_reporting(0);

?>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Accelerators</title>
        <!--favicon-->
        <link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon"/>
         <!-- vertical timeline CSS-->
  <link href="assets/plugins/vertical-timeline/css/vertical-timeline.css" rel="stylesheet"/>
        <!-- Vector CSS -->
        <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
        <!-- simplebar CSS-->
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
        <!-- Bootstrap core CSS-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- animate CSS-->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
        <!-- Sidebar CSS-->
        <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
        <!-- Custom Style-->
        <link href="assets/css/app-style.css" rel="stylesheet"/>

    </head>

    <body class="gradient-jshine">
      
<div class="container-fluid " >

         <?php       
        include 'topbar.php';
        ?>
         <div class="row">           
         <div class="col-lg-12">
          <div style="height:80px"></div>

          
  <section class="cd-timeline js-cd-timeline" >
            <div class="cd-timeline__container" >
                
                          
                 <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                    <br><center>   <i class="zmdi zmdi-card-travel text-white fa-2x"></i></center>
                    <!--<img src="assets/images/timeline/cd-icon-picture.svg" alt="Picture">-->
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content js-cd-content">
                  <a href="TagSync_home.php"><h4>TAGSYNC</h4>
                  <h5>Tagging Solution for Cloud Resources</h5></a>
                </div> <!-- cd-timeline__content -->
                    </div> <!-- cd-timeline__block -->

                    <div class="cd-timeline__block js-cd-block">
                  
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                     <br><center>   <i class="zmdi zmdi-chart text-white fa-2x"></i></center>
                  <!--<img src="assets/images/timeline/cd-icon-location.svg" alt="Location">-->
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content js-cd-content">
                 <a href="opticloud.php">  <h4>OPTICLOUD</h4>
                  <h6>Cost Optimization Solution for Public Cloud Deployments</h6> </a>
                
                </div> <!-- cd-timeline__content -->
              </div> <!-- cd-timeline__block --> 

                <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                    <br><center>   <i class="fa fa-gears text-white fa-2x"></i></center>
                    <!--<img src="assets/images/timeline/cd-icon-picture.svg" alt="Picture">-->
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content js-cd-content">
                  <a href="cloudmapper_home.php"><h4>CloudMapper</h4>
                  <h5>Visulaization tools used to represent cloud component dependencies </h5></a>
                </div> <!-- cd-timeline__content -->
                    </div> <!-- cd-timeline__block -->                 
            </div>
          </section> <!-- cd-timeline -->

    
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->


</div>
</div>

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Easy Pie Chart JS -->
    <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <!-- Sparkline JS -->
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script>
        $(function () {
            $(".knob").knob();
        });
    </script>
    <!-- Index js -->
    <script src="assets/js/index.js"></script>
    <!-- Vertical timeline js -->
  <script src="assets/plugins/vertical-timeline/js/vertical-timeline.js"></script>


</body>
</html>
