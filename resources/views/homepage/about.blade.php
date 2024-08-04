@extends('layout/mainlayout')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('/css/module-css/09-breadcrumb-section.css') }}">
@endsection

@section('page-content')
    <?php $page = $pageTitle;?>
    
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="--ain-theme-color: {{ $webpage->color }}">
        <div class="breadcrumb-area-bg"
            style="background-image: url(/images/backgrounds/breadcrumb-area-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                            <h2>About Business</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="500">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active">About Business</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Intro Style1 Area-->
    <section class="intro-style1-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="intro-style1-video-gallery">
                        <div class="intro-style1-video-gallery-bg"
                            style="background-image: url(/images/resources/intro-style1-video-gallery.jpg);">
                        </div>
                        <div class="intro-video-gallery-style1">
                            <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="--ain-theme-color: {{ $webpage->color }}">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/">
                                    <span class="icon-play-button-1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="intro-style1-content-box">
                        <div class="sec-title">
                            <h2>{{$webpage->about_page_header}}</h2>
                        </div>
                        <div class="text">
                            <p>{{$webpage->about_page_header_desc}}</p>
                        </div>

                        <div class="row">
                            <!--Start Intro Style1 Single Box-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="intro-style1-single-box">
                                    <div class="img-box">
                                        <div class="img-box-inner">
                                            <img src="images/resources/intro-style1-1.jpg" alt="">
                                        </div>
                                        <div class="overlay-text">
                                            <h3 style="--ain-theme-color: {{ $webpage->color }}">{{$webpage->about_us_title1}}</h3>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3><a href="#">{{$webpage->about_us_desc1}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Intro Style1 Single Box-->
                            <!--Start Intro Style1 Single Box-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="intro-style1-single-box">
                                    <div class="img-box">
                                        <div class="img-box-inner">
                                            <img src="images/resources/intro-style1-2.jpg" alt="">
                                        </div>
                                        <div class="overlay-text">
                                            <h3 style="--ain-theme-color: {{ $webpage->color }}">{{$webpage->about_us_title2}}</h3>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <h3><a href="#">{{$webpage->about_us_desc2}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Intro Style1 Single Box-->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Intro Style1 Area-->

    <!--Start Choose Style1 Area-->
    <section class="choose-style1-area">
        <div class="container">
            <ul class="row choose-style1__content">

                <!--Start Single Choose Style1-->
                <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                    <div class="single-choose-style1">
                        <div class="icon">
                            <div class="icon-inner">
                                <span class="icon-crowd"></span>
                            </div>
                            <div class="counting">01</div>
                        </div>
                        <div class="text">
                            <h3>{{$webpage->about_value_title1}}</h3>
                            <p>{{$webpage->about_value_desc1}}</p>
                        </div>
                    </div>
                </li>
                <!--End Single Choose Style1-->

                <!--Start Single Choose Style1-->
                <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                    <div class="single-choose-style1">
                        <div class="icon">
                            <div class="icon-inner">
                                <span class="icon-commitment"></span>
                            </div>
                            <div class="counting">02</div>
                        </div>
                        <div class="text">
                            <h3>{{$webpage->about_value_title2}}</h3>
                            <p>{{$webpage->about_value_desc2}}</p>
                        </div>
                    </div>
                </li>
                <!--End Single Choose Style1-->

                <!--Start Single Choose Style1-->
                <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                    <div class="single-choose-style1">
                        <div class="icon">
                            <div class="icon-inner">
                                <span class="icon-consistency"></span>
                            </div>
                            <div class="counting">03</div>
                        </div>
                        <div class="text">
                            <h3>{{$webpage->about_value_title3}}</h3>
                            <p>{{$webpage->about_value_desc3}}</p>
                        </div>
                    </div>
                </li>
                <!--End Single Choose Style1-->

            </ul>
        </div>
    </section>
    <!--End Choose Style1 Area-->

    <!--Start Statements Area-->
    <section class="statements-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="statements-content-box">
                        <ul>
                            <li>
                                <div class="single-statements-box">
                                    <div class="img-box">
                                        <img src="images/resources/statements-1.jpg" alt="">
                                        <div class="static-content">
                                            <h2>Mission</h2>
                                        </div>
                                        <div class="overlay-content">m</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-statements-box">
                                    <div class="img-box">
                                        <img src="images/resources/statements-2.jpg" alt="">
                                        <div class="static-content">
                                            <h2>Vision</h2>
                                        </div>
                                        <div class="overlay-content">v</div>
                                    </div>
                                </div>
                                <div class="single-statements-box">
                                    <div class="img-box">
                                        <img src="images/resources/statements-3.jpg" alt="">
                                        <div class="static-content">
                                            <h2>Core Value</h2>
                                        </div>
                                        <div class="overlay-content">c</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="statements-text-box" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%) !important;">
                        <div class="shape">
                            <span class="icon-origami"></span>
                        </div>
                        <div class="inner-title">
                            <h2>{{$webpage->about_mission_statement}}</h2>
                        </div>
                        <div class="text">
                            <p>{{$webpage->about_mission_desc}}</p>
                            <div class="btn-box">
                                <a href="blog-single.html"><span class="icon-right-arrow"></span>Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Statements Area-->

    <!--Start Facts Area-->
    <section class="facts-area">
        <div class="facts-area-bg" style="background-image: url(/images/backgrounds/facts-area-bg.jpg);">
        </div>
        <div class="container">
            <div class="sec-title text-center">
                <h2>Few Interesting Numbers</h2>
                <div class="sub-title">
                    <p>Numbers that speak about Businessing service.</p>
                </div>
            </div>
            <div class="row">
                <!--Start Single Fact Box-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-box">
                        <div class="icon">
                            <span class="icon-Business"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span class="path5"></span><span
                                    class="path6"></span><span class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span><span
                                    class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span
                                    class="path15"></span><span class="path16"></span></span>
                        </div>
                        <div class="text">
                            <h3>Our Network</h3>
                            <p>2 Branches in Africa</p>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Box-->

                <!--Start Single Fact Box-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-box">
                        <div class="icon">
                            <span class="icon-expert"><span class="path1"></span><span class="path2"></span></span>
                        </div>
                        <div class="text">
                            <h3>Customers</h3>
                            <p>More than 32 customers</p>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Box-->

                <!--Start Single Fact Box-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-box">
                        <div class="icon">
                            <span class="icon-human"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span class="path5"></span><span
                                    class="path6"></span><span class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span><span
                                    class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span
                                    class="path15"></span></span>
                        </div>
                        <div class="text">
                            <h3>Employee</h3>
                            <p>13 professional employees</p>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Box-->

                <!--Start Single Fact Box-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-box">
                        <div class="icon">
                            <span class="icon-money-bag"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <div class="text">
                            <h3>Total Revenue</h3>
                            <p>10Million revenue from customers</p>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Box-->

            </div>
        </div>
    </section>
    <!--End Facts Area-->
@endsection