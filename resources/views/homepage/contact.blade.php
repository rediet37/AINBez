@extends('layout/mainlayout')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('/css/module-css/09-breadcrumb-section.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/module-css/10-contact.css') }}">
@endsection

@section('page-content')
    <?php $page = $pageTitle;?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg"
            style="background-image: url(/images/backgrounds/breadcrumb-area-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                            <h2>Get In Touch</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="500">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Get In Touch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Main Contact Form Area-->
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="contact-info-box-style1">
                        <div class="box1" style="--ain-theme-color: {{ $webpage->color }}"></div>
                        <div class="title">
                            <h2>{{$webpage->contact_page_header}}</h2>
                            <p>Committed to helping you meet all your Businessing needs.</p>
                        </div>

                        <ul class="contact-info-1">
                            <li>
                                <div class="icon">
                                    <span class="icon-map"></span>
                                </div>
                                <div class="text">
                                    <p>Corporate Office</p>
                                    <h3>{{$webpage->contact_office}}</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Office Hours</p>
                                    <h3>{{$webpage->contact_office_hours}}</h3>
                                    <!-- <span>[2nd Sat Holiday]</span> -->
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="text">
                                    <p>Front Desk</p>
                                    <h3><a href="tel:{{$webpage->contact_front_desk_phone}}">{{$webpage->contact_front_desk_phone}}</a></h3>
                                    <h3><a href="mailto:{{$webpage->contact_front_desk_email}}">{{$webpage->contact_front_desk_email}}</a></h3>
                                </div>
                            </li>
                        </ul>

                        <div class="bottom-box">
                            <div class="btn-box">
                                <a href="#"><i class="fas fa-arrow-down"></i> Customer Care</a>
                            </div>
                            <div class="footer-social-link-style1">
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


                <div class="col-xl-6">
                    <div class="contact-form">
                        <form id="contact-form" name="contact_form" class="default-form2"
                            action="/inc/sendmail.php" method="post">

                            <div class="form-group">
                                <label>Name</label>
                                <div class="input-box">
                                    <input type="text" name="form_name" id="formName" placeholder="John Doe"
                                        required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-box">
                                    <input type="email" name="form_email" id="formEmail" placeholder="example@email.com" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-box">
                                    <input type="text" name="form_phone" value="" id="formPhone" placeholder="+251-90-777-88**">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <div class="input-box">
                                    <input type="text" name="form_subject" value="" id="formSubject"
                                        placeholder="Subject">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <div class="input-box">
                                    <textarea name="form_message" id="formMessage" placeholder=""
                                        required=""></textarea>
                                </div>
                            </div>

                            <div class="button-box">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                    value="">
                                <button class="btn-one" type="submit" data-loading-text="Please wait..." style="--ain-theme-color: {{ $webpage->color }}">
                                    <span class="txt">
                                        Send a message
                                    </span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Main Contact Form Area-->

    <!--Google Map Start-->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/place/መርካቶ/@9.0312054,38.7356019,17z/data=!3m1!4b1!4m6!3m5!1s0x164b85e2aff5be9f:0xf3c31acfb90e54e3!8m2!3d9.0312054!4d38.7381822!16zL20vMGJ4NTd5?entry=ttu"
            class="google-map__one" allowfullscreen></iframe>

        <div class="google-map-content-box">
            <div class="branch-atm-tab">
                <!--Start Branch Atm Tab Buttom-->
                <div class="branch-atm-tab__button">
                    <ul class="tabs-button-box">
                        <li data-tab="#branch" class="tab-btn-item active-btn-item" style="--ain-theme-color: {{ $webpage->color }}">
                            <h5>Dubai</h5>
                        </li>
                        <li data-tab="#atm" class="tab-btn-item" style="--ain-theme-color: {{ $webpage->color }}">
                            <h5>Addis</h5>
                        </li>
                    </ul>
                    <div class="location-search-box">
                        <div class="location-search-box__inner">
                            <form class="search-form" action="#">
                                <div class="input-box">
                                    <input placeholder="Enter Your Location" type="text">
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                </div>
                                <button type="submit" style="--ain-theme-color: {{ $webpage->color }}">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Branch Atm Tab Buttom-->

                <!--Start Tabs Content Box-->
                <div class="tabs-content-box">
                    <!--Tab-->
                    <div class="tab-content-box-item tab-content-box-item-active" id="branch">
                        <div class="branch-atm-tab-content-box-item">
                            <div class="inner-title">
                                <h3>AIN Business Group,<br> Dubai</h3>
                            </div>
                            <ul>
                                <li>
                                    <h3>Building</h3>
                                    <p>Name of building</p>
                                </li>
                                <li>
                                    <h3>Address</h3>
                                    <p>Afia Mall 4th Floor, Addis Ababa,<br> Ethiopia.</p>
                                </li>
                                <li>
                                    <h3>Phone & Email</h3>
                                    <p><a href="tel:+2519">+251 11 687 9909</a></p>
                                    <p><a href="mailto:contact@aingroup.ae">contact@aingroup.ae</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab-content-box-item" id="atm">
                        <div class="branch-atm-tab-content-box-item">
                            <div class="inner-title">
                                <h3>AIN Business Group,<br> Addis</h3>
                            </div>
                            <ul>
                                <li>
                                    <h3>Building</h3>
                                    <p>Name of building</p>
                                </li>
                                <li>
                                    <h3>Address</h3>
                                    <p>Afia Mall 4th Floor, Addis Ababa,<br> Ethiopia.</p>
                                </li>
                                <li>
                                    <h3>Phone & Email</h3>
                                    <p><a href="tel:+2519">+251 11 687 9909</a></p>
                                    <p><a href="mailto:contact@aingroup.ae">contact@aingroup.ae</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Tabs Content Box-->

            </div>
        </div>

    </section>
    <!--Google Map End-->

    <!--Start Customer Care Numbers Area-->
    <!-- <section class="customer-care-numbers-area">
        <div class="container">
            <div class="title-box">
                <h2>Customer Care Numbers</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="customer-care-numbers-tab">

                        <div class="customer-care-numbers-tab__button">
                            <ul class="tabs-button-box clearfix">
                                <li data-tab="#personal-Businessing" class="tab-btn-item active-btn-item">
                                    <h4>Personal Businessing</h4>
                                </li>
                                <li data-tab="#corporate-Businessing" class="tab-btn-item">
                                    <h4>Corporate Businessing</h4>
                                </li>
                            </ul>
                        </div>

                        
                        <div class="tabs-content-box">
                            
                            <div class="tab-content-box-item tab-content-box-item-active" id="personal-Businessing">

                                <div class="customer-care-numbers-tab-content-box-item">
                                    <div class="customer-care-numbers-table-box">
                                        <div class="table-outer">
                                            <table class="customer-care-numbers-table">
                                                <thead class="header">
                                                    <tr>
                                                        <th>Service</th>
                                                        <th>Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="inner-title">
                                                            <h3>General Query/Complaint</h3>
                                                        </td>
                                                        <td class="contact-info">
                                                            <ul>
                                                                <li>
                                                                    <a href="tel:2512353256">+844 123 4567 89</a>
                                                                    <span>(Toll Free)</span>
                                                                </li>
                                                                <li>
                                                                    <a class="color2"
                                                                        href="mailto:contact@aingroup.ae">customercare@finBusiness.com</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="inner-title">
                                                            <h3>Credit Card</h3>
                                                        </td>
                                                        <td class="contact-info">
                                                            <ul>
                                                                <li>
                                                                    <a href="tel:2512353256">+844 789 0123 45</a>
                                                                </li>
                                                                <li>
                                                                    <a class="color2"
                                                                        href="mailto:contact@aingroup.ae">creditcard@finBusiness.com</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="bottom-text text-center">
                                            <h3>To submit your complaint, <a href="#">Click here</a></h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            
                            <div class="tab-content-box-item" id="corporate-Businessing">

                                <div class="customer-care-numbers-tab-content-box-item">
                                    <div class="customer-care-numbers-table-box">
                                        <div class="table-outer">
                                            <table class="customer-care-numbers-table">
                                                <thead class="header">
                                                    <tr>
                                                        <th>Service</th>
                                                        <th>Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="inner-title">
                                                            <h3>General Query/Complaint</h3>
                                                        </td>
                                                        <td class="contact-info">
                                                            <ul>
                                                                <li>
                                                                    <a href="tel:2512353256">+844 123 4567 89</a>
                                                                    <span>(Toll Free)</span>
                                                                </li>
                                                                <li>
                                                                    <a class="color2"
                                                                        href="mailto:contact@aingroup.ae">customercare@finBusiness.com</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="inner-title">
                                                            <h3>Credit Card</h3>
                                                        </td>
                                                        <td class="contact-info">
                                                            <ul>
                                                                <li>
                                                                    <a href="tel:2512353256">+844 789 0123 45</a>
                                                                </li>
                                                                <li>
                                                                    <a class="color2"
                                                                        href="mailto:contact@aingroup.ae">creditcard@finBusiness.com</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="bottom-text text-center">
                                            <h3>To submit your complaint, <a href="#">Click here</a></h3>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End Customer Care Numbers Area-->
@endsection