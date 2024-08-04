<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>AIN Business Group</title>
        <!-- Favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="/images/favicons/site.webmanifest" />
        <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/animate/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/bxslider/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/nice-select/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/odometer/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/vegas/vegas.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/vendors/thm-icons/style.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/vendors/language-switcher/polyglot-language-switcher.c') }}ss">
        <!-- Module css -->
        <link rel="stylesheet" href="{{ asset('/css/module-css/01-header-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/02-banner-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/03-about-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/04-fact-counter-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/05-testimonial-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/06-partner-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/07-footer-section.c') }}ss">
        <link rel="stylesheet" href="{{ asset('/css/module-css/08-blog-section.c') }}ss">

        @yield('page-css')

        <!-- Template styles -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />
    </head>

    <body>
        <!-- Start preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <!-- <div class="preloader-close">x</div> -->
                <div id="handle-preloader" class="handle-preloader" style="background-color: {{ $webpage->color }} !important;">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="N" class="letters-loading mr-10">
                                N
                            </span>
                            
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End preloader -->


        <div class="page-wrapper">
            <header class="main-header main-header-style1">

                <!--Start Main Header Style1 Top-->
                <div class="main-header-style1-top">
                    <div class="auto-container">
                        <div class="outer-box">
                            <!--Start Main Header Style1 Top Left-->
                            <div class="main-header-style1-top__left">
                                <div class="looking-banking-box ">
                                    <div class="inner-title">
                                        <span class="icon-binoculars"></span>
                                        <p>Looking</p>
                                    </div>
                                    <div class="select-box clearfix" style="--ain-theme-color: {{ $webpage->color }}">
                                        <select class="wide">
                                            <option data-display="Exporting Experts">
                                                Exporting Experts
                                            </option>
                                            <option value="1">African Exporters</option>
                                            <option value="2">Middle East</option>
                                            <option value="3">Europe</option>
                                            <option value="4">Asia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="nearest-branch">
                                    <span class="icon-map"></span>
                                    <a href="#">Afia Mall 4th Floor, Addis Ababa, Ethiopia</a>
                                </div>
                            </div>
                            <!--End Main Header Style1 Top Left-->

                            <!--Start Main Header Style1 Top Right-->
                            <div class="main-header-style1-top__right">
                                <div class="header-menu-style1">
                                    <ul>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">FAQ’s</a></li>
                                        <li><a href="#">Offers</a></li>
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                </div>
                                <div class="box-search-style1">
                                    <a href="#" class="search-toggler">
                                        <span class="icon-search"></span>
                                        Search
                                    </a>
                                </div>
                                <div class="language-switcher">
                                    <div id="polyglotLanguageSwitcher" style="--ain-theme-color: {{ $webpage->color }}">
                                        <form action="#">
                                            <select id="polyglot-language-options">
                                                <option id="en" value="en" selected>English</option>
                                                <option id="amh" value="amh">Amharic</option>
                                                <option id="ar" value="ar">Arabic</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End Main Header Style1 Top Right-->

                        </div>
                    </div>
                </div>
                <!--End Main Header Style1 Top-->

                <nav class="main-menu main-menu-style1">
                    <div class="main-menu__wrapper clearfix">
                        <div class="container">
                            <div class="main-menu__wrapper-inner">

                                <div class="main-menu-style1-left">
                                    <div class="logo-box-style1" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%) !important;">
                                        <a href="{{route('ain.home')}}">
                                            <img src="/images/resources/logo-1.png" alt="Awesome Logo" title="">
                                        </a>
                                    </div>

                                    <div class="main-menu-box">
                                        <a href="#" class="mobile-nav__toggler">
                                            <i class="icon-menu"></i>
                                        </a>

                                        <ul class="main-menu__list" style="--ain-theme-color: {{ $webpage->color }}">
                                            <li class="megamenu">
                                                <a href="{{route('ain.home')}}">Home</a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#">Services</a>
                                                <ul>
                                                    <li class="dropdown">
                                                        <a href="#">Product Sourcing</a>
                                                        <ul>
                                                            <li><a href="accounts.html">Export</a></li>
                                                            <li><a href="account-savings.html">Import</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Deals Management</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Investment Opportunities</a>
                                                        <ul>
                                                            <li><a href="loan-home.html">Foreign Investors</a></li>
                                                            <li><a href="loan-home.html">Local Investors</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="">
                                                <a href="#">News</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('ain.about')}}">About Us</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('ain.contact')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="main-menu-style1-right">
                                    <div class="header-btn-one">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" style="background-color: {{ $webpage->color }} !important;">
                                                Dashboard
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" style="background-color: {{ $webpage->color }} !important;">
                                                <span class="icon-home-button"></span>Login
                                            </a>

                                            <a class="style2" href="#">
                                                <span class="icon-payment"></span>Request Quote
                                            </a>
                                        @endauth
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>

                <!--Start Main Header Style1 Bottom-->
                <div class="main-header-style1-bottom">
                    <div class="auto-container">
                        <div class="outer-box" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%) !important;">
                            <div class="update-box">
                                <div class="inner-title">
                                    <span class="icon-megaphone"></span>
                                    <h4>Updates:</h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="#"><span class="icon-chevron"></span>More Details</a>
                                </div>
                            </div>
                            <div class="slogan-box">
                                <p>SuGet Startedisse vitae diam id metus suscipit lacinia. Proin ultrices est a est aliquam, ut sagittis
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Header Style1 Bottom-->

            </header>


            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->


            @yield('page-content')


            <!--Start footer area -->
            <footer class="footer-area">
                <div class="right-shape">
                    <!-- <img src="/images/resources/logo-1.png" alt=""> -->
                </div>

                <!--Start Footer Top-->
                <div class="footer-top">
                    <div class="lef-shape">
                        <span class="icon-origami"></span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <!--Start single footer widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                                <div class="single-footer-widget single-footer-widget--link-box">
                                    <div class="title">
                                        <h3>Quick Links</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="{{ route('ain.about') }}">About us</a></li>
                                            <li><a href="{{ route('ain.contact') }}">Contact us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">NEWS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                                <div class="single-footer-widget single-footer-widget--link-box">
                                    <div class="title">
                                        <h3>Pages</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Partners</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-footer-widget single-footer-widget--link-box-style2">
                                    <div class="title">
                                        <h3>Company</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Why us?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                                <div class="single-footer-widget single-footer-widget--link-box">
                                    <div class="title">
                                        <h3>Services</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="#">Product Sourcing</a></li>
                                            <li><a href="#">Deals Management</a></li>
                                            <li><a href="#">Investment Opportunities</a></li>
                                            <li><a href="#">EHC Finder</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                                <div class="single-footer-widget single-footer-widget--link-box">
                                    <div class="title">
                                        <h3>Contact us</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><span class="icon-phone-call"></span>&nbsp;<a href="#">+251-91-128-9095</a></li>
                                            <li><span class="icon-phone-call"></span>&nbsp;<a href="#">+251-91-128-9095</a></li>
                                            <li><span class="icon-envelope"></span>&nbsp;<a href="#">info@amirexport.com</a></li>
                                            <li><a href="#">Afia Mall 4th Floor, Addis Ababa, Ethiopia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                        </div>
                    </div>
                </div>
                <!--End Footer Top-->

                <!--Start Footer-->
                <div class="footer">
                    <div class="container">
                        <div class="row">

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="single-footer-widget marbtm50">
                                    <div class="our-company-info">
                                        <div class="footer-logo-style1">
                                            <a href="{{route('ain.home')}}">
                                                <img src="/images/resources/logo-1.png" alt="Awesome Logo"
                                                    title="">
                                            </a>
                                        </div>
                                        <div class="copyright-text">
                                            <p>
                                                Copyright &copy; 2024 <a href="{{route('ain.home')}}">AIN Business Group.</a><br> 
                                                Developed by Drongo Technology.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="single-footer-widget marbtm50">
                                    <div class="footer-widget-contact-info">
                                        <ul>
                                            <li>
                                                <h3>
                                                    <a href="tel:+251911289095">+251-91-128-9095</a>
                                                </h3>
                                                <p>Customer Care</p>
                                            </li>
                                            <li>
                                                <h3>Mon &mdash; Fri: 9:00AM to 5:00PM</h3>
                                                <p>Banking Hours</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="single-footer-widget">
                                    <div class="single-footer-widget-right-colum">
                                        <ul>
                                            <li>
                                                <a href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                                    Download Resources
                                                    <span class="icon-download"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                                    Register Your Complaint
                                                    <span class="icon-feedback"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                        </div>
                    </div>
                </div>
                <!--End Footer-->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Online Tips</a></li>
                                </ul>
                            </div>
                            <div class="footer-social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!--End footer area-->
        </div>
        <!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler">
                    <i class="fas fa-plus"></i>
                </span>
                <div class="logo-box">
                    <a href="{{route('ain.home')}}" aria-label="logo image">
                        <img src="/images/resources/logo-1.png" alt="" />
                    </a>
                </div>
                <div class="mobile-nav__container"></div>
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@amirexport.com">info@amirexport.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:123456789">+251-91-128-9095</a>
                    </li>
                </ul>
                <div class="mb-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" style="background-color: {{ $webpage->color }} !important; padding: 7px; color: white;">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" style="background-color: {{ $webpage->color }} !important; padding: 7px; color: white;">
                            <span class="icon-home-button"></span>&nbsp;&nbsp;Login
                        </a>
                    @endauth
                </div>
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>


        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label>
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn" style="background-color: {{ $webpage->color }} !important;">
                        <i class="icon-search"></i>
                    </button>
                </form>
            </div>
        </div>


        <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="background-color: {{ $webpage->color }} !important;">
            <i class="icon-chevron"></i>
        </a>


        <script src="{{ asset('/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset('/vendors/circleType/jquery.circleType.js') }}"></script>
        <script src="{{ asset('/vendors/circleType/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('/vendors/isotope/isotope.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-migrate/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/vendors/odometer/odometer.min.js') }}"></script>
        <script src="{{ asset('/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/vendors/swiper/swiper.min.js') }}"></script>
        <script src="{{ asset('/vendors/vegas/vegas.min.js') }}"></script>
        <script src="{{ asset('/vendors/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('/vendors/wow/wow.js') }}"></script>
        <script src="{{ asset('/vendors/extra-scripts/jquery.paroller.min.js') }}"></script>
        <script src="{{ asset('/vendors/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
        <script src="{{ asset('/vendors/aos/aos.js') }}"></script>

        <!-- Template js -->
        <script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>