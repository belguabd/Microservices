<?php include '../include/connection.php' ?>
<?php include '../include/sess.php' ?>
<!DOCTYPE html>
<?php $id_user=$_SESSION['id_user']?>
<?php
$id= $id_user;
$req = $bd->prepare('SELECT * FROM users where id=?');
$req->execute([$id]);
$data= $req->fetch();
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>page home</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="alRl.css">
        <link rel="stylesheet" href="css/all.css">
        <!-- footer -->
        
    <link rel="stylesheet" href="../asset/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/style.css" type="text/css">
</head>
<body>
    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                            <span class="logo-light">
                            <img src="../upload/logo.svg" class="rounded-circle" width="40">   MultiServices
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="list-inline d-none d-lg-block mb-0">
                            <li class="hide-phone app-search float-left">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            <!-- language-->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                               
                                  <a href="add_service.php" class="btn btn-outline-light waves-effect waves-light"> <i class="fa-solid fa-plus"></i>add service</a>  
                                
                               
                            </li>
                            <!-- notification -->
                            <li class="dropdown notification-list list-inline-item">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    
                                    <!-- <span class="btn btn-warning waves-effect waves-light">Sign up<i class="fa-duotone fa-plus"></i></span> -->
                                </a>
                                
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="../upload/<?=$data["image_user"]?>" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                      
                                        <a class="dropdown-item" href="profile.php"><i class="mdi mdi-account-circle"></i> Profile</a>
                                        <a class="dropdown-item text-danger" href="../admin/logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

          
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                        <h1>avec des micro-indépendants peuvent facilement mettre leurs services à vendre</h1>
                            <a class="btn-solid-lg page-scroll" href="#catigori">start now</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                            <img class="img-fluid" src="../upload/index.png" alt="alternative" style="position: absolute;bottom: 97px;"> 
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>

    <div class="wrapper" id="catigori">
        <div class="container-fluid">
            
            <!-- Page-Title -->
            <div class="page-title-box">
                
                
                <!-- end row -->
            </div>

            <div class="row">
                

                <div class="row" id="catigori">
               
                    
    
                <?php
                        $req =  $bd->query("SELECT * FROM categories");
                        while($data = $req->fetch()):
                            ?>
    
                    <div class="col-md-6 col-xl-3">
                    <a href="products.php?id=<?=$data['id']?>">
                        <div class="card m-b-30">
                            <img class="card-img-top img-fluid" src="../upload/<?= $data['image'] ?>"alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><?=$data["name"]?></p>
                            </div>
                        </div>
                        </a>
                    </div><!-- end col -->
                    <?php endwhile;?> 
                </div>
         

            <!-- START ROW -->
            
            <!-- END ROW -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
    <footer id="footer"class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                           
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        cilisis.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="asset/img/payment/payment-1.png" alt=""></a>
                            <a href="#"><img src="asset/img/payment/payment-2.png" alt=""></a>
                            <a href="#"><img src="asset/img/payment/payment-3.png" alt=""></a>
                            <a href="#"><img src="asset/img/payment/payment-4.png" alt=""></a>
                            <a href="#"><img src="asset/img/payment/payment-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>NEWSLETTER</h6>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/waves.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>

    <script src="../assets/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>