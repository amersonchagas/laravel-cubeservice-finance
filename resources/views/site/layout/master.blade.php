<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="app, app landing, product landing, digital, material, html5">


    <title>@yield('title')</title>

    <!-- inject:css -->
    <link rel="stylesheet" href={{asset("martplace/css/animate.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/fontello.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/jquery-ui.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/lnr-icon.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/slick.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/trumbowyg.min.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/bootstrap/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("martplace/css/style.css")}}>
    <link rel="stylesheet" href={{asset("custom/css/custom-site.css")}}>
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('custom/images/icon.png')}}">
</head>

<body class="preload invoice-page">






    <!--================================
        START MENU AREA
    =================================-->



    <div class="menu-area menu--style1">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="{{route("site.home")}}">
                                <img src="{{asset('custom/images/logo.png')}}" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-6 col-md-9 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area not_logged_in">

                            <div class="pull-right join desktop-size d-md-block d-none">
                                <a href="#" class="btn btn--round btn--xs bg-secondary">Área do Cliente</a>
                            </div>
                            <div class="pull-right join mobile-size d-md-none d-flex">
                                <a href="#" class="btn btn--round btn-secondary bg-secondary"><span class="lnr lnr-user"></span></a>
                                {{-- <a href="#" class="btn btn--round"><span class="lnr lnr-enter"></span></a> --}}
                            </div>
                        </div>
                        <!-- end .author-area -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu bg-primary">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        {{-- <div class="navbar-header">
                            <!-- start mainmenu__search -->
                            <div class="mainmenu__search">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Search product">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- start mainmenu__search -->
                        </div> --}}

                        <nav class="navbar navbar-expand-lg navbar-light mainmenu__menu bg-primary">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav4">
                                <ul class="navbar-nav">
                                    <li>
                                        <a href="{{route('site.home')}}">HOME</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.about')}}">SOBRE NÓS</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.services')}}">SERVIÇOS</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.products')}}">PRODUTOS</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.contact')}}">CONTATO</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>

    <!--================================
        END MENU AREA
    =================================-->

    @yield('content')


    {{--  <section class="call-to-action">
         <div class="bg_image_holder" style="background-image: url(&quot;images/calltobg.jpg&quot;); opacity: 1;">
            <img src="images/calltobg.jpg" alt="images/calltobg.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Venha Estudar com a CubeCode!</h1>
                        <h4 class="text--white">E saia pronto para o mercado.</h4>
                        <a href="{{route('site.class-list')}}" class="btn btn--lg btn--round btn--white callto-action-btn">Ver Turmas Abertas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}


    <!--================================
        START FOOTER AREA
    =================================-->
    <footer class="footer-area">
        {{--  <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="info-footer">
                            <div class="info__logo">
                                <img src="{{asset('custom/images/logo.png')}}" alt="footer logo">
                            </div>
                            <p class="info--text">Nunc placerat mi id nisi interdum they mollis. Praesent pharetra, justo ut scel erisque the mattis,
                                leo quam.</p>
                            <ul class="info-contact">
                                <li>
                                    <span class="lnr lnr-phone info-icon"></span>
                                    <span class="info">Phone: +6789-875-2235</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-envelope info-icon"></span>
                                    <span class="info">support@aazztech.com</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-map-marker info-icon"></span>
                                    <span class="info">202 New Hampshire Avenue Northwest #100, New York-2573</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.info-footer -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-5 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="#">How to Join Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Work</a>
                                </li>
                                <li>
                                    <a href="#">Buying and Selling</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Copyright Notice</a>
                                </li>
                                <li>
                                    <a href="#">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->

                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Help and FAQs</h4>
                            <ul>
                                <li>
                                    <a href="#">How to Join Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Work</a>
                                </li>
                                <li>
                                    <a href="#">Buying and Selling</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Copyright Notice</a>
                                </li>
                                <li>
                                    <a href="#">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title text--white color-secondary">Newsletter</h4>
                            <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
                            <div class="newsletter__form">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Enter email">
                                        <button class="btn btn--round" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>  --}}
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2019
                                <a href="#">CubeCode</a>. All rights reserved.
                            </p>
                        </div>

                        <div class="go_top bg-primary bold">
                            <span class="lnr lnr-chevron-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <!-- inject:js -->
    <script src="{{asset("martplace/js/vendor/jquery/jquery-1.12.3.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery/popper.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery/uikit.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/bootstrap.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/chart.bundle.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/grid.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery-ui.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery.barrating.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery.countdown.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery.counterup.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/jquery.easing1.3.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/owl.carousel.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/slick.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/tether.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/trumbowyg.min.js")}}"></script>
    <script src="{{asset("martplace/js/vendor/waypoints.min.js")}}"></script>
    <script src="{{asset("martplace/js/dashboard.js")}}"></script>
    <script src="{{asset("martplace/js/main.js")}}"></script>
    <script src="{{asset("martplace/js/map.js")}}"></script>
    <!-- endinject -->
</body>

</html>
