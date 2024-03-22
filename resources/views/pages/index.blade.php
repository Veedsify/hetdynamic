@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
    'description' => $pagedata->site_description,
    'image' => asset($pagedata->site_logo),
])
@section('content')
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        {{-- NAVGATION BAR HERE --}}
        <x-nav />
        {{-- NAVIGATION ENDS HERE --}}


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Main Sllider Start -->
        <section class="main-slider">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider__slide-1">
                    <div class="main-slider__bg" style="background-image: url({{ asset($bannerDetails->banner_image_1) }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider__content">
                            <h2 class="main-slider__title">{{ $bannerDetails->banner_text_1 }}</h2>
                            <div class="main-slider__btn-box">
                                <a href="{{ route('about') }}" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-2">
                    <div class="main-slider__bg"
                        style="background-image: url({{ asset($bannerDetails->banner_image_2) }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider__content">
                            <h2 class="main-slider__title">{{ $bannerDetails->banner_text_2 }}</h2>
                            <div class="main-slider__btn-box">
                                <a href="{{ route('about') }}" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-3">
                    <div class="main-slider__bg"
                        style="background-image: url({{ asset($bannerDetails->banner_image_3) }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider__content">
                            <h2 class="main-slider__title">{{ $bannerDetails->banner_text_3 }}</h2>
                            <div class="main-slider__btn-box">
                                <a href="{{ route('about') }}" class="main-slider__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Sllider Start -->

        <!--feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="/assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <div class="feature-one__img-one">
                                    <img src="/assets/images/resources/feature-1-1.png" alt="">
                                </div>
                                <p class="feature-one__sub-title">Online form</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Apply Online for <br> New 
                                        Visa</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="/assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <div class="feature-one__img-one feature-one__img-two">
                                    <img src="/assets/images/resources/feature-1-2.png" alt="">
                                </div>
                                <p class="feature-one__sub-title">Positive result</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Best Immigration <br>
                                        Process</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="/assets/images/shapes/feature-one-shape-1.png" alt="">
                                </div>
                                <div class="feature-one__img-one feature-one__img-three">
                                    <img src="/assets/images/resources/feature-1-3.png" alt="">
                                </div>
                                <p class="feature-one__sub-title">download form</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Documents Required <br> for
                                        Visa</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature-one__bottom">
                            <p class="feature-one__text">Providing a One-Stop Solution for all Your <a
                                    href="visa.html">Visa</a>
                                & <a href="visa-details.html">Immigration</a> Needs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-3 float-bob-y">
                <img src="/assets/images/shapes/about-one-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__shape-2 img-bounce">
                                <img src="/assets/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset($consultingData->consulting_image) }}" alt="">
                                    {{-- <div class="about-one__shape-1 float-bob-y">
                                        <img src="{{ asset($consultingData->consulting_image) }}" alt="">
                                    </div> --}}
                                </div>
                                <div class="about-one__img-2">
                                    <img src="{{ asset($consultingData->consulting_image_2) }}" alt="">
                                </div>
                                <div class="about-one__experience count-box">
                                    <h3 class="count-text" data-stop="28" data-speed="1500">00</h3>
                                    <p>Years of Experience</p>
                                </div>
                                <div class="about-one__badge">
                                    <img src="{{ asset($pagedata->site_logo) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Get to know about us</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">{{ $consultingData->consulting_title }}
                                </h2>
                            </div>
                            <p class="about-one__text">{{ $consultingData->consulting_description }}</p>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-consulting"></span>
                                    </div>
                                    <div class="content">
                                        <h3>{{ $consultingData->consulting_feature_1 }}</h3>
                                        <p>{{ $consultingData->consulting_desc_1 }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-passport-3"></span>
                                    </div>
                                    <div class="content">
                                        <h3>{{ $consultingData->consulting_feature_2 }}</h3>
                                        <p>{{ $consultingData->consulting_desc_2 }}</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-box">
                                <a href="{{ route('about') }}" class="about-one__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">our Visa categories</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">We Offers Citizenship & <br> Immigration Services</h2>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__hover-content">
                                    <div class="services-one__hover-bg"
                                        style="background-image: url(assets/images/resources/services-one-img-1.jpg);">
                                    </div>
                                    <div class="services-one__hover-title-box">
                                        <h3 class="services-one__hover-title"><a href="visa-details.html">Tourist
                                                Visa</a></h3>
                                        <div class="services-one__hover-shpae">
                                            <img src="/assets/images/shapes/services-one-hover-shape.png" alt="">
                                        </div>
                                    </div>
                                    <div class="services-one__arrow">
                                        <a href="visa-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-tourist"></span>
                                </div>
                                <h3 class="services-one__title"><a href="visa-details.html">Tourist Visa</a></h3>
                                <p class="services-one__text">Desire that they can forese trouble bound ensue.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__hover-content">
                                    <div class="services-one__hover-bg"
                                        style="background-image: url(assets/images/resources/services-one-img-2.jpg);">
                                    </div>
                                    <div class="services-one__hover-title-box">
                                        <h3 class="services-one__hover-title"><a href="visa-details.html">Business
                                                Visa</a></h3>
                                        <div class="services-one__hover-shpae">
                                            <img src="/assets/images/shapes/services-one-hover-shape.png" alt="">
                                        </div>
                                    </div>
                                    <div class="services-one__arrow">
                                        <a href="visa-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <h3 class="services-one__title"><a href="visa-details.html">Business Visa</a></h3>
                                <p class="services-one__text">Desire that they can forese trouble bound ensue.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__hover-content">
                                    <div class="services-one__hover-bg"
                                        style="background-image: url(assets/images/resources/services-one-img-3.jpg);">
                                    </div>
                                    <div class="services-one__hover-title-box">
                                        <h3 class="services-one__hover-title"><a href="visa-details.html">Student
                                                Visa</a></h3>
                                        <div class="services-one__hover-shpae">
                                            <img src="/assets/images/shapes/services-one-hover-shape.png" alt="">
                                        </div>
                                    </div>
                                    <div class="services-one__arrow">
                                        <a href="visa-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-graduating-student"></span>
                                </div>
                                <h3 class="services-one__title"><a href="visa-details.html">Student Visa</a></h3>
                                <p class="services-one__text">Desire that they can forese trouble bound ensue.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__hover-content">
                                    <div class="services-one__hover-bg"
                                        style="background-image: url(assets/images/resources/services-one-img-4.jpg);">
                                    </div>
                                    <div class="services-one__hover-title-box">
                                        <h3 class="services-one__hover-title"><a href="visa-details.html">Residence
                                                Visa</a></h3>
                                        <div class="services-one__hover-shpae">
                                            <img src="/assets/images/shapes/services-one-hover-shape.png" alt="">
                                        </div>
                                    </div>
                                    <div class="services-one__arrow">
                                        <a href="visa-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-condominium"></span>
                                </div>
                                <h3 class="services-one__title"><a href="visa-details.html">Residence Visa</a></h3>
                                <p class="services-one__text">Desire that they can forese trouble bound ensue.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image:url({{ asset($supportData->support_image) }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="video-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">get our support</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">{{ $supportData->support_title }}</h2>
                            </div>
                            <ul class="video-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{ $supportData->support_feature_1 }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{ $supportData->support_feature_2}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{ $supportData->support_feature_3 }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="video-one__right">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                                <div class="video-one__shape-1 float-bob-x">
                                    <img src="/assets/images/shapes/video-one-shape-1.png" alt="">
                                </div>
                            </div>
                            <p class="video-one__text">Aliquam viverra arcu. Donec aliquet blandit enim id <br> quam sed
                                eros
                                tincidunt luctus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.png);">
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-passport-4"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="30" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p>Visa Categories</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-life-insurance"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="68" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">k</span>
                                </div>
                                <p>Visa Process</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="99" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p>Success Rate</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-one__content">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="23" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p>Pro Consultants</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Coaching One Start-->
        <section class="coaching-one">
            <div class="coaching-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="coaching-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">Coaching we offer</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">{{ $coachingData->coaching_title  }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="coaching-one__right">
                                <p class="coaching-one__text">{{ $coachingData->coaching_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coaching-one__bottom">
                <div class="container">
                    <div class="row">
                        <!--Coaching One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="coaching-one__single">
                                <div class="coaching-one__img-box">
                                    <div class="coaching-one__img">
                                        <img src="/assets/images/coaching/coaching-1-1.jpg" alt="">
                                    </div>
                                    <div class="coaching-one__content">
                                        <div class="coaching-one__shape-1">
                                            <img src="/assets/images/shapes/coaching-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__title"><a href="/coaching/1">Citizenship
                                                Test</a></h3>
                                        <div class="coaching-one__arrow-box">
                                            <a href="/coaching/1" class="coaching-one__arrow"><i
                                                    class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="coaching-one__hover-content">
                                        <div class="coaching-one__hover-shape-1"></div>
                                        <div class="coaching-one__hover-icon">
                                            <img src="/assets/images/icon/coaching-one-hover-icon.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__hover-title"><a href="/coaching/1">Citizenship
                                                Test</a></h3>
                                        <p class="coaching-one__hover-text">IELTS is an English language test
                                            for study, migration or work</p>
                                        <div class="coaching-one__hover-arrow-box">
                                            <a href="/coaching/1" class="coaching-one__hover-arrow"><i
                                                    class="icon-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Coaching One Single End-->
                        <!--Coaching One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="coaching-one__single">
                                <div class="coaching-one__img-box">
                                    <div class="coaching-one__img">
                                        <img src="/assets/images/coaching/coaching-1-2.jpg" alt="">
                                    </div>
                                    <div class="coaching-one__content">
                                        <div class="coaching-one__shape-1">
                                            <img src="/assets/images/shapes/coaching-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__title"><a href="/coaching/1">IELTS
                                                Coaching</a></h3>
                                        <div class="coaching-one__arrow-box">
                                            <a href="/coaching/1" class="coaching-one__arrow"><i
                                                    class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="coaching-one__hover-content">
                                        <div class="coaching-one__hover-shape-1"></div>
                                        <div class="coaching-one__hover-icon">
                                            <img src="/assets/images/icon/coaching-one-hover-icon.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__hover-title"><a href="/coaching/1">IELTS
                                                Coaching</a></h3>
                                        <p class="coaching-one__hover-text">IELTS is an English language test
                                            for study, migration or work</p>
                                        <div class="coaching-one__hover-arrow-box">
                                            <a href="/coaching/1" class="coaching-one__hover-arrow"><i
                                                    class="icon-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Coaching One Single End-->
                        <!--Coaching One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="coaching-one__single">
                                <div class="coaching-one__img-box">
                                    <div class="coaching-one__img">
                                        <img src="/assets/images/coaching/coaching-1-3.jpg" alt="">
                                    </div>
                                    <div class="coaching-one__content">
                                        <div class="coaching-one__shape-1">
                                            <img src="/assets/images/shapes/coaching-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__title"><a href="/coaching/1">TOEFL
                                                Coaching</a></h3>
                                        <div class="coaching-one__arrow-box">
                                            <a href="/coaching/1" class="coaching-one__arrow"><i
                                                    class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="coaching-one__hover-content">
                                        <div class="coaching-one__hover-shape-1"></div>
                                        <div class="coaching-one__hover-icon">
                                            <img src="/assets/images/icon/coaching-one-hover-icon.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__hover-title"><a href="/coaching/1">TOEFL
                                                Coaching</a></h3>
                                        <p class="coaching-one__hover-text">IELTS is an English language test
                                            for study, migration or work</p>
                                        <div class="coaching-one__hover-arrow-box">
                                            <a href="/coaching/1" class="coaching-one__hover-arrow"><i
                                                    class="icon-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Coaching One Single End-->
                        <!--Coaching One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="coaching-one__single">
                                <div class="coaching-one__img-box">
                                    <div class="coaching-one__img">
                                        <img src="/assets/images/coaching/coaching-1-4.jpg" alt="">
                                    </div>
                                    <div class="coaching-one__content">
                                        <div class="coaching-one__shape-1">
                                            <img src="/assets/images/shapes/coaching-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__title"><a href="/coaching/1">PTE Coaching</a>
                                        </h3>
                                        <div class="coaching-one__arrow-box">
                                            <a href="/coaching/1" class="coaching-one__arrow"><i
                                                    class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="coaching-one__hover-content">
                                        <div class="coaching-one__hover-shape-1"></div>
                                        <div class="coaching-one__hover-icon">
                                            <img src="/assets/images/icon/coaching-one-hover-icon.png" alt="">
                                        </div>
                                        <h3 class="coaching-one__hover-title"><a href="/coaching/1">PTE
                                                Coaching</a></h3>
                                        <p class="coaching-one__hover-text">IELTS is an English language test
                                            for study, migration or work</p>
                                        <div class="coaching-one__hover-arrow-box">
                                            <a href="/coaching/1" class="coaching-one__hover-arrow"><i
                                                    class="icon-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Coaching One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Coaching One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="testimonial-one__wrap">
                    <div class="testimonial-one__bg"
                        style="background-image: url(assets/images/backgrounds/testimonial-one-bg.png);"></div>
                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                        data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
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
                            "1200": {
                                "items": 1
                            }
                        }
                    }'>
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="/assets/images/testimonial/testimonial-one-img-1.png" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="/assets/images/icon/testimonial-one-chatting-icon.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Michale Albert</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="/assets/images/testimonial/testimonial-one-img-2.png" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="/assets/images/icon/testimonial-one-chatting-icon.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Jessica Brown</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="/assets/images/testimonial/testimonial-one-img-3.png" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="/assets/images/icon/testimonial-one-chatting-icon.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="/assets/images/testimonial/testimonial-one-img-4.png" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="/assets/images/shapes/testimonial-one-shape-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="/assets/images/icon/testimonial-one-chatting-icon.png"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Christine Eve</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Countries One Start-->
        <section class="countries-one">
            <div class="countries-one__bg" style="background-image: url(assets/images/backgrounds/countries-one-bg.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our countries list</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Select the Country of
                        <br> Your Choice
                    </h2>
                </div>
                <div class="row">
                    @foreach ($countries as $country)
                        <!--Countries One Single Start-->
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="countries-one__single">
                                <div class="countries-one__img-box">
                                    <div class="countries-one__img">
                                        <img src="{{ $country->flag }}" class="object-fit-square" alt="">
                                    </div>
                                </div>
                                <h3 class="countries-one__title"><a
                                        href="countries-details.html">{{ $country->name }}</a>
                                </h3>
                                <p class="countries-one__text">{{ $country->slogan }}</p>
                                <div class="countries-one__arrow-box">
                                    <a href="countries-details.html" class="countries-one__arrow"><i
                                            class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Countries One Single End-->
                    @endforeach

                </div>
            </div>
        </section>
        <!--Countries One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Professional people</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Meet HetDynamic Expert Visa
                        <br> Consultants
                    </h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-1.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="team-details.html">Mike Hardson</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-2.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="team-details.html">Jessica Brown</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-3.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="team-details.html">Kevin Martin</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-4.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="team-details.html">Christine Eve</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__left">
                            <div class="contact-one__bg"
                                style="background-image: url(assets/images/backgrounds/contact-one-bg.jpg);"></div>
                            <div class="contact-one__shape-1"
                                style="background-image: url(assets/images/shapes/contact-one-shape-1.png);"></div>
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact us</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Get a Call Back</h2>
                            </div>
                            <div class="contact-one__form-box">
                                <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="text" placeholder="Full Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__form-input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="contact-one__form-input-box">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Visa Type</option>
                                                    <option value="1">Tourist Visa</option>
                                                    <option value="2">Business Visa</option>
                                                    <option value="3">Student Visa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__form-input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="contact-one__formbtn-box">
                                                <button type="submit" class="thm-btn contact-one__form-btn">Send a
                                                    Message
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__right">
                            <div class="contact-one__google-map-box">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="google-map__one" allowfullscreen></iframe>
                            </div>
                            <div class="contact-one__address-box">
                                <div class="contact-one__address-top">
                                    <div class="contact-one__address-top-title">
                                        <h3>HetDynamic Offices</h3>
                                    </div>
                                    <div class="contact-one__address-top-icon">
                                        <span class="icon-buildings"></span>
                                    </div>
                                </div>
                                <div class="contact-one__address-faq">
                                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                        <div class="accrodion active">
                                            <div class="accrodion-title">
                                                <h4>Dubai Office</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <ul class="contact-one__address-list list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>30 Commercial Road <br> Fratton, Australia</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a
                                                                        href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a href="tel:9288009850">+92 (8800) - 9850</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                        <div class="accrodion">
                                            <div class="accrodion-title">
                                                <h4>Australia Office</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <ul class="contact-one__address-list list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>30 Commercial Road <br> Fratton, Australia</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a
                                                                        href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a href="tel:9288009850">+92 (8800) - 9850</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                        <div class="accrodion last-child">
                                            <div class="accrodion-title">
                                                <h4>Canada Office</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <ul class="contact-one__address-list list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>30 Commercial Road <br> Fratton, Australia</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a
                                                                        href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p><a href="tel:9288009850">+92 (8800) - 9850</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="thm-swiper__slider swiper-container"
                        data-swiper-options='{"spaceBetween": 100,
                    "slidesPerView": 5,
                    "loop": true,
                    "navigation": {
                        "nextEl": "#brand-one__swiper-button-next",
                        "prevEl": "#brand-one__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-6.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="/assets/images/brand/brand-1-6.png" alt="">
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">NEWS & UPDATES</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Latest News & Articles
                        <br> From the Blog
                    </h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    @foreach ($blogs as $blog)
                        <x-blogcard :blog="$blog" />
                    @endforeach
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Site Footer Start-->
        <x-footer />
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="135"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@HetDynamic.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->


        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
@endsection
