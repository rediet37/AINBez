@extends('layout/mainlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/module-css/01-header-section.css') }}">
@endsection

@section('page-content')
    <?php $page = $pageTitle;
        $slides = $webpage->slides;
        ?>

    <!--Main Slider Start-->
    <section class="main-slider main-slider-style1">
        <div class="swiper-container thm-swiper__slider" 
            style="--ain-theme-color: {{ $webpage->color }}"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">
                <div class="slider-buttom-box">
                    <a class="style2" href="{{ $webpage->download_btn_ref }}" style="--ain-theme-color: {{ $webpage->color }}">Download now <span class="icon-play-button"></span></a>
                    <a href="{{ $webpage->enquiry_btn_ref }}" style="--ain-theme-color: {{ $webpage->color }}">Make an Enquiry <span class="icon-play-button"></span></a>
                </div>

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('/images/slides/{{$webpage->slides[0]}}');">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-content">
                                    <div class="main-slider-content__inner">
                                        <div class="big-title">
                                            <h2>{{$webpage->slide1_header}}</h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                {{$webpage->slide1_sub}}
                                            </p>
                                        </div>
                                        <div class="btns-box">
                                            <a class="btn-one" href="{{ $webpage->discover_btn_ref }}" style="--ain-theme-color: {{ $webpage->color }}">
                                                <span class="txt">
                                                    Discover now
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('/images/slides/{{$webpage->slides[1]}}')">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-content">
                                    <div class="main-slider-content__inner">
                                        <div class="big-title">
                                            <h2>{{$webpage->slide2_header}}</h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                {{$webpage->slide2_sub}}
                                            </p>
                                        </div>
                                        <div class="btns-box">
                                            <a class="btn-one" href="{{ $webpage->discover_btn_ref }}">
                                                <span class="txt">
                                                    Discover now
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('/images/slides/{{$webpage->slides[2]}}')">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-content">
                                    <div class="main-slider-content__inner">
                                        <div class="big-title">
                                            <h2>{{$webpage->slide3_header}}</h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                {{$webpage->slide3_sub}}
                                            </p>
                                        </div>
                                        <div class="btns-box">
                                            <a class="btn-one" href="{{ $webpage->discover_btn_ref }}">
                                                <span class="txt">
                                                    Discover now
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->


            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-chevron left"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-chevron right"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Start Features Style1 Area-->
    <section class="features-style1-area">
        <div class="container">
            <div class="text-center sec-title">
                <h2>{{$webpage['industries'][0]}}</h2>
                <div class="sub-title">
                    <p>Committed to helping our customers succeed.</p>
                </div>
            </div>
            <div class="features-style1-content">
                <ul class="clearfix">
                    <!--Start Single Features Style1 Box-->
                    @foreach ($webpage->industries as $index => $industry)
                        @if ($index != 0)
                            <li>
                                <div class="single-features-style1-box">
                                    <div class="shape-left">
                                        <img src="/images/shapes/shape-1.png" alt="">
                                    </div>
                                    <div class="shape-bottom">
                                        <img src="/images/shapes/shape-2.png" alt="">
                                    </div>
                                    <div class="counting-box">
                                        <div class="counting-box-bg"
                                            style="background-image: url(/images/shapes/counting-box-bg.png);"></div>
                                        <h3>0{{ $index }}</h3>
                                    </div>
                                    <div class="text-box" style="--ain-theme-color: {{ $webpage->color }}">
                                        <h4>{{ $industry[0] ?? '' }}</h4>
                                        <h3>{{ $industry[1] ?? '' }}</h3>
                                        <p>{{ $industry[2] ?? '' }}</p>
                                        <div class="btn-box">
                                            <a href="#">
                                                Read More
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--End Features Style1 Area-->

    <!--Start Service Style1 Area-->
    <section class="service-style1-area">
        <div class="service-style1-bg" style="background-image: url(/images/backgrounds/service-style1.jpg);">
        </div>
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="service-style1-title">
                        <div class="sec-title">
                            <h2>Officia laborum consequuntur.</h2>
                            <div class="sub-title">
                                <p>Sint laboriosam dolore explicabo architecto?</p>
                            </div>
                        </div>
                        <div class="get-assistant-box" style="--ain-theme-color: {{ $webpage->color }}">
                            <a href="#" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }}) !important;"><span class="icon-chatting"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="service-style1-tab">
                        <!--Start Service Style1 Tab Button-->
                        <div class="service-style1-tab__button">
                            <ul class="clearfix tabs-button-box">
                                <!-- <li data-tab="#individuals" class="tab-btn-item">
                                    <div class="inner">
                                        <div class="left">
                                            <h4>Looking for</h4>
                                            <h3>Importing</h3>
                                        </div>
                                        <div class="right">
                                            <span class="icon-down-arrow"></span>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#companies" class="tab-btn-item active-btn-item">
                                    <div class="inner">
                                        <div class="left">
                                            <h4>Looking for</h4>
                                            <h3>Exporting</h3>
                                        </div>
                                        <div class="right">
                                            <span class="icon-down-arrow"></span>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <!--End Service Style1 Tab Button-->

                        <!--Start Tabs Content Box-->
                        <div class="tabs-content-box">

                            <!--Tab-->
                            <div class="tab-content-box-item" id="individuals">
                                <div class="service-style1-tab-content-box-item">
                                    <div class="row">
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-safebox"></span>
                                                </div>
                                                <h3><a href="#">Products</a></h3>
                                                <div class="border-box" style="--ain-theme-color: {{ $webpage->color }}"></div>
                                                <p>Take trivial example which of us ever all
                                                    undertakes laborious.</p>
                                                <h6><span>*</span> Interest rate up to 5% p.a</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-online"></span>
                                                </div>
                                                <h3><a href="#">Cars</a></h3>
                                                <div class="border-box"></div>
                                                <p>Equal blame belongs to those who fail their duty through
                                                    weakness.</p>
                                                <h6><span>*</span> Terms & Conditions</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-loan"></span>
                                                </div>
                                                <h3><a href="#">Services</a></h3>
                                                <div class="border-box"></div>
                                                <p>Duty or the obligations of business will frequently occur
                                                    repudiated.</p>
                                                <h6><span>*</span> Check today’s Interest Rates</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item tab-content-box-item-active" id="companies">
                                <div class="service-style1-tab-content-box-item">
                                    <div class="row">
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-safebox"></span>
                                                </div>
                                                <h3><a href="#">Products</a></h3>
                                                <div class="border-box"></div>
                                                <p>Take trivial example which of us ever all
                                                    undertakes laborious.</p>
                                                <h6><span>*</span> Interest rate up to 5% p.a</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-online"></span>
                                                </div>
                                                <h3><a href="#">Cars</a></h3>
                                                <div class="border-box"></div>
                                                <p>Equal blame belongs to those who fail their duty through
                                                    weakness.</p>
                                                <h6><span>*</span> Terms & Conditions</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                        <!--Start Single Service Box Style1-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-service-box-style1">
                                                <div class="icon">
                                                    <span class="icon-loan"></span>
                                                </div>
                                                <h3><a href="#">Services</a></h3>
                                                <div class="border-box"></div>
                                                <p>Duty or the obligations of business will frequently occur
                                                    repudiated.</p>
                                                <h6><span>*</span> Check today’s Interest Rates</h6>
                                                <div class="btn-box">
                                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Service Box Style1-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End Tabs Content Box-->

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center service-style1__btns-box">
                        <a class="btn-one" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                            <span class="txt">View All Services</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start Wealth Secure Area-->
    <section class="wealth-secure-area">
        <div class="container">
            <div class="text-center sec-title">
                <h2>{{$webpage['services_header'] ?? ''}}</h2>
                <div class="sub-title">
                    <p>Don’t just make a deposit, make an investment today.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel wealth-secure-carousel-2 owl-nav-style-one"
                        style="--ain-theme-color: {{ $webpage->color }}"
                        data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": true,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 3
                                },
                                "1200": {
                                    "items": 4
                                }
                            }
                        }'>


                        <!--Start Single Wealth Secure Box-->
                        @foreach ($webpage->services as $index => $service)
                            <div class="single-wealth-secure-box">
                                <div class="img-box">
                                    <div class="img-box-inner">
                                        <img src="{{ asset('/images/resources/'. ($service[0] ? $service[0] : 'wealth-secure-2.jpg')) }}" alt="">
                                    </div>
                                    <div class="inner-title">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                        <h3><a href="#">{{ $service[1] ?? '' }}</a></h3>
                                        <div class="right-arrow-btn">
                                            <a href="#"><span class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>{{ $service[2] ?? '' }}</p>
                                </div>
                            </div>
                        @endforeach
                        <!--End Single Wealth Secure Box-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Wealth Secure Area-->
    
    <!--Start Features Style3 Area-->
    <section class="features-style3-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="features-style3-img-box">
                        <div class="inner-img">
                            <img class="paroller" src="/images/resources/features-style3-img.png" alt="">
                        </div>
                        <div class="icon-holder float-bob-y">
                            <span class="icon-interest-rate"></span>
                        </div>
                        <div class="icon-holder two">
                            <span class="icon-online-shop"></span>
                        </div>
                        <div class="icon-holder three">
                            <span class="icon-theater"></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="features-style3-content">
                        <div class="sec-title">
                            <h2>Help us Improve our products and services</h2>
                            <div class="sub-title">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente vero 
                                    esse natus quasi provident consequuntur</p>
                            </div>
                        </div>
                        <div class="text-box">
                            <ul>
                                <li>
                                    <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                        <span class="icon-checkbox-mark"></span>
                                    </div>
                                    <p>Nobis eligendi libero possimus quo dolorum doloribus!</p>
                                </li>
                                <li>
                                    <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                        <span class="icon-checkbox-mark"></span>
                                    </div>
                                    <p>Nobis eligendi libero possimus quo dolorum doloribus!</p>
                                </li>
                            </ul>
                            <div class="apply-credit-card">
                                <h3>Get in touch</h3>
                                <form id="apply-credit-card" name="apply-credit-card" action="#" method="post">
                                    <div class="input-box">
                                        <input type="text" name="form_name" value="" placeholder="info@amirexport.com" required="">
                                    </div>
                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait..." style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="txt">Submit</span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Features Style3 Area-->


    <!--Start Faq Style1 Area-->
    <section class="faq-style1-area">
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="faq-style1-title">
                        <div class="sec-title">
                            <h2>Frequently Asked Questions</h2>
                            <div class="sub-title">
                                <p>Find answers to all your queries about our service.</p>
                            </div>
                        </div>
                        <!-- <div class="faq-search-box">
                            <h3>Help You to Find</h3>
                            <div class="faq-search-box__inner">
                                <form class="search-form" action="#">
                                    <input placeholder="Related Keyword..." type="text">
                                    <button type="submit">
                                        <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6">
                    <div class="faq-style1__image">
                        <div class="inner">
                            <img src="/images/resources/faq-style1__image.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-style1__content">
                        <ul class="accordion-box">
                            @foreach ($webpage->faqs as $index => $faq)
                                <li class="accordion block {{ $index == 0 ? ' active-block' : '' }}">
                                    <div class="acc-btn {{ $index == 0 ? ' active' : '' }}">
                                        <div class="icon-outer" style="--ain-theme-color: {{ $webpage->color }}"><i class="icon-right-arrow"></i></div>
                                        <h3 style="--ain-theme-color: {{ $webpage->color }}">{{ $faq[0] }}</h3>
                                    </div>
                                    <div class="acc-content {{ $index == 0 ? ' current' : '' }}">
                                        <p>{{ $faq[1] }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center faq-style1-bottom-box">
                        <p>Didn’t get what you were looking for, Click below button to more anwers or <a href="#">contact us.</a></p>
                        <div class="btns-box">
                            <a class="btn-one" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                <span class="txt">Ask question</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Faq Style1 Area-->

    <!--Start Deals Area-->
    <section class="deals-area">
        <div class="auto-container">
            <div class="deals-content-box">
                <div class="owl-carousel owl-theme thm-owl__carousel deals-carousel-one owl-nav-style-one"
                    data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 50,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                    "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1550": {
                                "items": 1.4
                            }
                        }
                    }'>


                    <!--Start Single Deals Box-->
                    <div class="single-deals-box">
                        <div class="text-box">
                            <div class="inner-title">
                                <h4 style="--ain-theme-color: {{ $webpage->color }}">Offer</h4>
                                <h2>Importing Offers</h2>
                            </div>
                            <p>Deserunt amet, doloribus vel optio autem odit porro sint dignissimos
                                animi provident, fuga modi.</p>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Contact Us<br> Right away</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Contact Us<br> Right away</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="btns-box">
                                <a class="btn-one" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                    <span class="txt">Grab Your Deals</span>
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <div class="img-bg" style="background-image: url(/images/resources/deals-1.jpg);">
                            </div>
                            <div class="shape-left-1"></div>
                            <div class="shape-right-1"></div>
                            <div class="shape-right-2" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%);"></div>
                        </div>
                    </div>
                    <!--End Single Deals Box-->
                    <!--Start Single Deals Box-->
                    <div class="single-deals-box">
                        <div class="text-box">
                            <div class="inner-title">
                                <h4 style="--ain-theme-color: {{ $webpage->color }}">Offer</h4>
                                <h2>Freight Forwarding</h2>
                            </div>
                            <p>Deserunt amet, doloribus vel optio autem odit porro sint dignissimos
                                animi provident, fuga modi.</p>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Contact Us<br> Right away</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Not Valid for<br> Short Period</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="btns-box">
                                <a class="btn-one" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                    <span class="txt">Grab Your Deals</span>
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <div class="img-bg" style="background-image: url(/images/resources/deals-2.jpg);">
                            </div>
                            <div class="shape-left-1"></div>
                            <div class="shape-right-1"></div>
                            <div class="shape-right-2" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%);"></div>
                        </div>
                    </div>
                    <!--End Single Deals Box-->

                    <!--Start Single Deals Box-->
                    <div class="single-deals-box">
                        <div class="text-box">
                            <div class="inner-title">
                                <h4 style="--ain-theme-color: {{ $webpage->color }}">Offer</h4>
                                <h2>Exporting</h2>
                            </div>
                            <p>Deserunt amet, doloribus vel optio autem odit porro sint dignissimos
                                animi provident, fuga modi.</p>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Contact Us<br> Right away</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon" style="--ain-theme-color: {{ $webpage->color }}">
                                            <span class="icon-checkbox-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Contact Us<br> Right away</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="btns-box">
                                <a class="btn-one" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                    <span class="txt">Grab Your Deals</span>
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <div class="img-bg" style="background-image: url(/images/resources/deals-3.jpg);">
                            </div>
                            <div class="shape-left-1"></div>
                            <div class="shape-right-1"></div>
                            <div class="shape-right-2" style="background-image: -webkit-linear-gradient(0deg, {{ $webpage->color }} 0%, {{ $webpage->color }} 100%);"></div>
                        </div>
                    </div>
                    <!--End Single Deals Box-->
                </div>
            </div>
        </div>
    </section>
    <!--End Deals Area-->

    <!--Start Blog Style1 Area-->
    <section id="news" class="blog-style1-area">
        <div class="container">
            <div class="sec-title">
                <h2>Latest News</h2>
                <div class="sub-title">
                    <p>Our blog post provides you all the updates & guides.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel blog-style1-carousel owl-nav-style-one"
                        style="--ain-theme-color: {{ $webpage->color }}"
                        data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>


                        <!--Start Single blog Style1-->
                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="/images/blog/blog-v1-1.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html">
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-date-box">
                                    <div class="category">
                                        <span class="icon-play-button-1"></span>
                                        <h5>Export</h5>
                                    </div>
                                    <div class="date">
                                        <h5>Feb 29, 2024</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">
                                        Quis repudiandae reprehenderit fugit amet quo asperiores
                                    </a>
                                </h3>
                                <div class="bottom">
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li><span class="icon-clock"></span> <a href="#">6 Mins Read</a></li>
                                            <!-- <li><span class="icon-comment"></span> <a href="#">10 Cmnts</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="share-btn">
                                        <a href="#"><span class="icon-share"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style1-->
                        <!--Start Single blog Style1-->
                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="/images/blog/blog-v1-2.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html">
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-date-box">
                                    <div class="category">
                                        <span class="icon-play-button-1"></span>
                                        <h5>Importing</h5>
                                    </div>
                                    <div class="date">
                                        <h5>Mar 01, 2024</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">
                                        Officia rerum vel error maxime esse quis deserunt
                                    </a>
                                </h3>
                                <div class="bottom">
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li><span class="icon-clock"></span> <a href="#">4 Mins Read</a></li>
                                            <!-- <li><span class="icon-comment"></span> <a href="#">10 Cmnts</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="share-btn">
                                        <a href="#"><span class="icon-share"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style1-->
                        <!--Start Single blog Style1-->
                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="/images/blog/blog-v1-3.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html">
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-date-box">
                                    <div class="category">
                                        <span class="icon-play-button-1"></span>
                                        <h5>Forwarding</h5>
                                    </div>
                                    <div class="date">
                                        <h5>Mar 10, 2024</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">
                                        Vitae voluptas omnis facere sunt soluta asperiores
                                    </a>
                                </h3>
                                <div class="bottom">
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li><span class="icon-clock"></span> <a href="#">3 Mins Read</a></li>
                                            <!-- <li><span class="icon-comment"></span> <a href="#">10 Cmnts</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="share-btn">
                                        <a href="#"><span class="icon-share"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog Style1-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->

    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="slogan-content-box">
                <div class="slogan-content-box-bg"
                    style="background-image: url(/images/backgrounds/slogan-content-box-bg.jpg);"></div>
                <div class="inner-title">
                    <h2>Aliquam laborum, quos voluptas.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="get-app-box">
                    <ul>
                        <li>
                            <a href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                <div class="icon">
                                    <span class="icon-play-store"></span>
                                </div>
                                <div class="text">
                                    <h4>Download</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="style2" href="#" style="--ain-theme-color: {{ $webpage->color }}">
                                <div class="icon">
                                    <span class="icon-apple"></span>
                                </div>
                                <div class="text">
                                    <h4>Download</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->
@endsection