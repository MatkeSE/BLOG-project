<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> Appside | App Landing pages HTML Templates </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- icofont -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.5.7.2.css') }}"> 
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"> 
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"> 
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"> 
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"> 


    
</head>

<body>

    <nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="">Home</a>
                    </li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog">Blog 01</a></li>
                            <li><a href="blog_detail">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="button-wrapper">
                        <a href="#" class="boxed-btn btn-rounded">Download</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
   

<!-- separating the header and footer from the rest  -->
@yield('main')
<!-- separating the header and footer from the rest  -->


<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about_widget">
                        <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt=""></a>
                        <p>Within coming figure sex things are. Pretended concluded did repulsive education smallness yet yet described. Had country man his pressed shewing. </p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul>
                            <li><a href="index.html"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Service</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Need Help?</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Faqs</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Policy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Support</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Temrs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Download</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For IOS</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Android</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Mac</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Window</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Linax</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area"><!-- left content area -->
                            &copy; Copyrights 2019 Appside All rights reserved.
                        </div><!-- //. left content aera -->
                        <div class="right-content-area"><!-- right content area -->
                            Designed by <strong>Love</strong>
                        </div><!-- //. right content area -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
<div class="preloader-wrapper" id="preloader">
    <div class="preloader" >
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
</div>

  <!-- preloader area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script> 
    <!-- contact js-->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <!-- wow js-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script> 
    <!-- way points js-->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script> 
    <!-- counterup js-->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> 
    <!-- main -->
    <script src="{{ asset('assets/js/main.js') }}"></script> 

    <script>
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
    </script>

    @yield('customJs')

</body>

</html>