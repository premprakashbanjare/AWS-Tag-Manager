<?php
include('database.php');
include('server.php');
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:index.php");
}
?>
<!-- start loader -->
<!-- <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
<!-- end loader --> -->
<!--Start topbar header-->
<div class="col-lg-12">

<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void();">
                   <img src="assets/images/logo.png" style="height:80px;width:160px">
                   <!-- <span><i class="fa fa-handshake-o fa-2x" style="color:black"></i></span>
                    <img src="assets/images/FRB_logo.png" style="height:80px;width:140px;margin-top: 0px">
                --> </a>
            </li>

        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
            <!-- <img src="assets/images/Infragenie.png" style="height:25px;width:110px"> -->



            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span><i class="fa fa-user fa-2x"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><i class="fa fa-user fa-2x" style="color:black"></i></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title"> <?php echo $_SESSION['username']; ?></h6>
                                    <!--<p class="user-subtitle">mccoy@example.com</p>-->
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!--End topbar header-->
</div>