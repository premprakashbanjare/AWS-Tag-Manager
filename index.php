<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Nextstep</title>
  <!--favicon-->
  <link rel="icon" href="assets_dark/images/logo-icon.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets_dark/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets_dark/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets_dark/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets_dark/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">
		<div class="user-lock rounded-top bg-dark-light">
		
                  <h3><center><br>AWS TagSync<br><br>Login </center></h3>
              
              
           </div>
          <div class="card-body">
             <h4 class="text-center mt-5 py-2">Enter Credentials</h4>
            <form class="mt-3 mb-1" action="" method="post">
              
		          <div class="form-group">
              	<label for="exampleInputusername" class="sr-only">Enter Username</label>
                <input type="text" autocomplete="off" name="username"class="form-control" id="exampleInputusername" placeholder="Enter your Username">
              </div>
              <div class="form-group">
              	<label for="exampleInputpassword" class="sr-only">Enter Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputpassword" placeholder="Enter your password">
              </div>
		         <!--  <div class="form-group">
                  <input type="radio" name="role" value="admin"> Admin
                  <input type="radio" name="role" value="user"> User
              </div> -->
              <button type="submit" name="login_user" class="btn btn-light btn-block waves-effect waves-light mt-2"><i class="icon-lock-open"></i> Login </button>
      		  <div class="form-row">
      			 <div class="form-group col-6">
      			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
      			  </div>
      			 </div>
      			 <div class="form-group col-6 text-right">
      			    <a href="authentication-reset-password.html">Reset Password</a>
      			 </div>
      			</div>
            </form>
          </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
    