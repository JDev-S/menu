<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Zester - Restaurant and Cafe HTML Template">
    <meta name="author" content="https://www.themetechmount.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Zester - Restaurant and Cafe HTML Template</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="\images\favicon.png">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="\css\bootstrap.min.css">

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="\css\animate.css">

    <link rel="stylesheet" type="text/css" href="\css\animate.min.css">


    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="\css\owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="\css\font-awesome.css">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="\css\themify-icons.css">

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="\css\flaticon.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="\css\prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="\css\shortcodes.css">

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="\css\main.css">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="\css\responsive.css">



</head>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-darkgrey clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container-fluid">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="/?pagina" title="Zester" rel="home">
                                        <img id="logo-img" class="img-center" src="\images\logo-white.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <!-- header-icons -->
                                    <div class="ttm-header-icons ">
                                        <span class="ttm-header-icon ttm-header-cart-link">
                                            <a href="#"><i class="ti ti-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a>
                                        </span>
                                        <div class="ttm-header-icon ttm-header-search-link">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                            <div class="ttm-search-overlay">
                                                <div class="ttm-bg-layer"></div>
                                                <div class="ttm-icon-close"></div>
                                                <div class="ttm-search-outer">
                                                    <div class="ttm-form-title">Hi, How Can We Help You?</div>
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                        <button type="submit">
                                                            <i class="ti ti-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- header-icons end -->
                                    <div class="header-btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor" href="#">ORDER ONLINE</a>
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form">
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li><a href="/">Inicio</a>

                                            </li>
                                            <li><a href="/acerca_de">Acerca de </a>

                                            </li>
                                            <li><a href="/contacto">Contacto</a>

                                            </li>
                                            <li><a href="/login">Iniciar sesion</a>

                                            </li>

                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
            <!--ttm-header-wrap end -->
        </header>
        <!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box">
                            <!--<div class="page-title-heading">
                                <h1 class="title"> Products</h1>
                            </div>--><!-- /.page-title-captions -->
                            <!--<div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span class="ttm-bread-sep"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <span><span>Shop</span></span>
                            </div>-->
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- page-title END-->

        @yield('contenido')

        <!--footer start-->
        <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="first-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row mt-40">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo-box">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="images\footer-logo.png" alt="">
                                </div>
                                <p class="mb-0">Japanese ambience with Tatami room for dining, a village like a setup inside the dining hall, bar! Experienced staff waiting to give you that unique dining experience.</p>
                                <br>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Contacto</h3>
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>Themeforest, Envanto HQ 24 Fifth st., Los Angeles, USA</li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                    <li><i class="fa fa-phone"></i>Phone: (+01) 123 456 7890 <br> Support: (+01) 123 789 1200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                                <h3 class="widget-title">Links rápidos</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="/acerca_de">Acerca de </a></li>
                                    <li><a href="/contacto">Contacto</a></li>
                                    <li><a href="/login">Iniciar sesión</a></li>
                                    <!--<li><a href="#">Quick Delivery Service</a></li>
                                    <li><a href="#">Buffet Table Service</a></li>
                                    <li><a href="#">Traditional Counter Service</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Opening Hours</h3>
                                <div class="textwidget widget-text">
                                    <div class="ttm-pricelistbox-wrapper ">
                                        <div class="ttm-timelist-block-wrapper">
                                            <ul class="ttm-timelist-block">
                                                <li><span> Mon - Fri </span>
                                                    <p class="service-time">09:00am - 05:00pm</p>
                                                </li>
                                                <li><span> Sat - Sun </span>
                                                    <p class="service-time">10:00am - 11:00pm</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3 class="widget-title">Coffee Bar Opening</h3>
                                <div class="textwidget widget-text">
                                    <div class="ttm-pricelistbox-wrapper ">
                                        <div class="ttm-timelist-block-wrapper">
                                            <ul class="ttm-timelist-block">
                                                <li> <span> Mon - Fri </span>
                                                    <p class="service-time">08:00am - 07:00pm</p>
                                                </li>
                                                <li> <span> Sat - Sun </span>
                                                    <p class="service-time">08:00am - 09:00pm</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget offer_widget text-center clearfix">
                                <div class="">
                                    <h3 class="font-sz-28 mb-0">GET <span class="ttm-textcolor-skincolor font-sz-47 mlr-10">20%</span> OFF</h3>
                                    <p class="">special offer limited time</p>
                                    <p class="pt-10 font-w-500 mb-5">OFFER CODE: <span class="ttm-textcolor-skincolor"><u>LUV1023</u></span></p>
                                    <p class="font-sz-16 font-w-500 mb-0">Offers Ends 31St Octomber</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="">
                                <span>Copyright ©  <?php
                        $fecha = date('Y');
                        echo $fecha;?>  Desarrollado por <a href="https://jdevs.com.mx/">JDev-S</a>.</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

    <!-- Javascript -->

    <script src="\js\jquery.min.js"></script>
    <script src="\js\tether.min.js"></script>
    <script src="\js\bootstrap.min.js"></script>
    <script src="\js\jquery.easing.js"></script>
    <script src="\js\jquery-waypoints.js"></script>
    <script src="\js\jquery-validate.js"></script>
    <script src="\js\owl.carousel.js"></script>
    <script src="\js\jquery.prettyPhoto.js"></script>
    <script src="\js\numinate.min.js?ver=4.9.3"></script>
    <script src="\js\main.js"></script>

    <!-- Javascript end-->

</body>

</html>
