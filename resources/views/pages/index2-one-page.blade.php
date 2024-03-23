@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
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

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Main Slider Start -->
        <section class="main-slider-two" id="home">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider__slide-1">
                    <div class="main-slider-two__bg"
                        style="background-image: url(assets/images/backgrounds/slider-2-1.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider-two__shadow"
                        style="background-image: url(assets/images/shapes/main-slider-two-shadow.png);"></div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__shape-1 img-bounce">
                                <img src="/assets/images/shapes/main-slider-two-shape-1.png" alt="">
                            </div>
                            <h2 class="main-slider-two__title">Planning to <br> Studying Abroad</h2>
                            <ul class="list-unstyled main-slider-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No Interviews</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Relocate in 30 Days</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Afforable Fee</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-slider-two__btn-box">
                                <a href="about.html" class="main-slider-two__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                        <div class="main-slider__feature">
                            <div class="row">
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-passport-4"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Apply for
                                                    Visa</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-immigration"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Immigration
                                                    Programs</a>
                                            </h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single main-slider__feature-single--3">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-licensing"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Visa
                                                    Documents</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-2">
                    <div class="main-slider-two__bg"
                        style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider-two__shadow"
                        style="background-image: url(assets/images/shapes/main-slider-two-shadow.png);"></div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__shape-1 img-bounce">
                                <img src="/assets/images/shapes/main-slider-two-shape-1.png" alt="">
                            </div>
                            <h2 class="main-slider-two__title">Planning to <br> Studying Abroad</h2>
                            <ul class="list-unstyled main-slider-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No Interviews</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Relocate in 30 Days</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Afforable Fee</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-slider-two__btn-box">
                                <a href="about.html" class="main-slider-two__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                        <div class="main-slider__feature">
                            <div class="row">
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-passport-4"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Apply for
                                                    Visa</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-immigration"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Immigration
                                                    Programs</a>
                                            </h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single main-slider__feature-single--3">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-licensing"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Visa
                                                    Documents</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-1">
                    <div class="main-slider-two__bg"
                        style="background-image: url(assets/images/backgrounds/slider-2-3.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider-two__shadow"
                        style="background-image: url(assets/images/shapes/main-slider-two-shadow.png);"></div>
                    <div class="container">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__shape-1 img-bounce">
                                <img src="/assets/images/shapes/main-slider-two-shape-1.png" alt="">
                            </div>
                            <h2 class="main-slider-two__title">Planning to <br> Studying Abroad</h2>
                            <ul class="list-unstyled main-slider-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No Interviews</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Relocate in 30 Days</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Afforable Fee</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-slider-two__btn-box">
                                <a href="about.html" class="main-slider-two__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                        <div class="main-slider__feature">
                            <div class="row">
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-passport-4"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Apply for
                                                    Visa</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-immigration"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Immigration
                                                    Programs</a>
                                            </h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                                <!--Main Slider Feature Single Start -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="main-slider__feature-single main-slider__feature-single--3">
                                        <div class="main-slider__feature-icon">
                                            <span class="icon-licensing"></span>
                                        </div>
                                        <div class="main-slider__feature-content">
                                            <h4 class="main-slider__feature-title"><a href="visa-details.html">Visa
                                                    Documents</a></h4>
                                            <p class="main-slider__feature-text">Lorem ipsum is simply free dolo sit
                                                amet ctetur.</p>
                                        </div>
                                        <div class="main-slider__feature-arrow">
                                            <a href="visa-details.html"><span class="icon-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Main Slider Feature Single End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider Start -->

        <!--About Two Start -->
        <section class="about-two" id="about">
            <div class="about-two__shape-2 img-bounce">
                <img src="/assets/images/shapes/about-two-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="/assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <div class="about-two__experience">
                                    <div class="about-two__experience-inner count-box">
                                        <h3 class="count-text" data-stop="28" data-speed="1500">00</h3>
                                        <p>Years of Experience</p>
                                        <div class="about-two__shape-1">
                                            <img src="/assets/images/shapes/about-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">About HetDynamic agency</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Providing the Best Visa
                                    Services to Clients</h2>
                            </div>
                            <p class="about-two__text">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected hum randomised words which
                                don't simply free text now slightly.</p>
                            <ul class="about-two__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Ready to Help <br> You in Immigration</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Works Fast & We’re
                                            <br> Cost Effective
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-two__progress">
                                <h4 class="about-two__progress-title">Construction</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-two__btn-and-call-box">
                                <div class="about-two__btn-box">
                                    <a href="about.html" class="about-two__btn thm-btn">Discover More</a>
                                </div>
                                <div class="about-two__call-box">
                                    <div class="about-two__call-icon">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="about-two__call-content">
                                        <p>Have Question?</p>
                                        <h3><span>Free </span><a href="tel:+9288009850">+92 (8800) - 9850</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two Start -->

        <!--Countries Two Start -->
        <section class="countries-two" id="countries">
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
                <div class="countries-two__bottom">
                    <div class="countries-two__carousel owl-carousel owl-theme thm-owl__carousel"
                        data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
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
                        <!--Countries Two Single Start-->
                        <div class="item">
                            <div class="countries-two__single">
                                <div class="countries-two__name-and-img">
                                    <div class="countries-two__name">
                                        <h3><a href="countries-details.html">Australia</a></h3>
                                    </div>
                                    <div class="countries-two__img">
                                        <img src="/assets/images/countries/countries-2-1.jpg" alt="">
                                    </div>
                                </div>
                                <ul class="countries-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Years Business Visa</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Apply via Online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Student Visa</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Countries Two Single End-->
                        <!--Countries Two Single Start-->
                        <div class="item">
                            <div class="countries-two__single">
                                <div class="countries-two__name-and-img">
                                    <div class="countries-two__name">
                                        <h3><a href="countries-details.html">Dubai</a></h3>
                                    </div>
                                    <div class="countries-two__img">
                                        <img src="/assets/images/countries/countries-2-2.jpg" alt="">
                                    </div>
                                </div>
                                <ul class="countries-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Years Business Visa</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Apply via Online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Student Visa</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Countries Two Single End-->
                        <!--Countries Two Single Start-->
                        <div class="item">
                            <div class="countries-two__single">
                                <div class="countries-two__name-and-img">
                                    <div class="countries-two__name">
                                        <h3><a href="countries-details.html">United States</a></h3>
                                    </div>
                                    <div class="countries-two__img">
                                        <img src="/assets/images/countries/countries-2-3.jpg" alt="">
                                    </div>
                                </div>
                                <ul class="countries-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Years Business Visa</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Apply via Online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Student Visa</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Countries Two Single End-->
                        <!--Countries Two Single Start-->
                        <div class="item">
                            <div class="countries-two__single">
                                <div class="countries-two__name-and-img">
                                    <div class="countries-two__name">
                                        <h3><a href="countries-details.html">Paris</a></h3>
                                    </div>
                                    <div class="countries-two__img">
                                        <img src="/assets/images/countries/countries-2-4.jpg" alt="">
                                    </div>
                                </div>
                                <ul class="countries-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Years Business Visa</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Apply via Online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Student Visa</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Countries Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Countries Two End -->

        <!--Excellence One Start -->
        <section class="excellence-one">
            <div class="container">
                <div class="excellence-one__inner">
                    <div class="excellence-one__bg"
                        style="background-image: url(assets/images/backgrounds/excellence-one-bg.png);"></div>
                    <div class="excellence-one__shape-1 img-bounce">
                        <img src="/assets/images/shapes/excellence-one-shape-1.png" alt="">
                    </div>
                    <div class="excellence-one__shape-2 float-bob-x">
                        <img src="/assets/images/shapes/excellence-one-shape-2.png" alt="">
                    </div>
                    <h3 class="excellence-one__title">Excellence
                        <br> in Visa & Immigration
                    </h3>
                    <div class="excellence-one__btn-box">
                        <a href="visa-details.html" class="excellence-one__btn thm-btn">Apply for Visa</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Excellence One End -->

        <!--coaching Two Start -->
        <section class="coaching-two" id="coaching">
            <div class="coaching-two__bg" style="background-image: url(assets/images/backgrounds/coaching-two-bg.jpg);">
            </div>
            <div class="coaching-two__bg-2"
                style="background-image: url(assets/images/backgrounds/coaching-two-bg-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Coaching we offer</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Get the Best Trainings
                        <br> You Deserve
                    </h2>
                </div>
                <div class="row">
                    <!--Coaching Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="coaching-two__single">
                            <div class="coaching-two__arrow-box">
                                <a href="/coaching/1" class="coaching-two__arrow"><span
                                        class="icon-up-right"></span></a>
                            </div>
                            <div class="coaching-two__img-box">
                                <div class="coaching-two__img">
                                    <img src="/assets/images/coaching/coaching-2-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="coaching-two__content">
                                <h3 class="coaching-two__title"><a href="/coaching/1">OET
                                        <br> Coaching</a></h3>
                                <p class="coaching-two__text">There are many variations of passages the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Two Single End-->
                    <!--Coaching Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="coaching-two__single">
                            <div class="coaching-two__arrow-box">
                                <a href="/coaching/1" class="coaching-two__arrow"><span
                                        class="icon-up-right"></span></a>
                            </div>
                            <div class="coaching-two__img-box">
                                <div class="coaching-two__img">
                                    <img src="/assets/images/coaching/coaching-2-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="coaching-two__content">
                                <h3 class="coaching-two__title"><a href="/coaching/1">IELTS
                                        <br> Coaching</a></h3>
                                <p class="coaching-two__text">There are many variations of passages the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Two Single End-->
                    <!--Coaching Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="coaching-two__single">
                            <div class="coaching-two__arrow-box">
                                <a href="/coaching/1" class="coaching-two__arrow"><span
                                        class="icon-up-right"></span></a>
                            </div>
                            <div class="coaching-two__img-box">
                                <div class="coaching-two__img">
                                    <img src="/assets/images/coaching/coaching-2-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="coaching-two__content">
                                <h3 class="coaching-two__title"><a href="/coaching/1">TOFEL
                                        <br> Coaching</a></h3>
                                <p class="coaching-two__text">There are many variations of passages the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Two Single End-->
                </div>
            </div>
        </section>
        <!--coaching Two End -->

        <!--FAQ One Start -->
        <section class="faq-one">
            <div class="faq-one__shape-1 float-bob-y">
                <img src="/assets/images/shapes/faq-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__left">
                            <div class="faq-one__bg"
                                style="background-image: url(assets/images/backgrounds/faq-one-bg.jpg);"></div>
                            <div class="faq-one__inner">
                                <div class="faq-one__icon">
                                    <span class="icon-deal"></span>
                                </div>
                                <h3 class="faq-one__title">Most Trusted Visa
                                    & Immigration
                                    Agency!</h3>
                                <div class="faq-one__btn-box">
                                    <a href="about.html" class="faq-one__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">common faqs</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Frequently Asked
                                    Questions?</h2>
                            </div>
                            <div class="faq-one__faq-box">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What is a Direct Immigration Services?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable.
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>What are the Benefits of Visa Consultancy?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable.
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What We should do If our Visa get Rejection?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable.
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Which Documents are Required to Apply Visa Online?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable.
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->

        <!--Services Two Start -->
        <section class="services-two" id="visa">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">our Visa categories</span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">We Offers Citizenship & <br>
                    Immigration Services</h2>
            </div>
            <div class="services-two__wrap">
                <div class="services-two__shape-1"
                    style="background-image: url(assets/images/shapes/services-two-shape-1.png);"></div>
                <div class="container">
                    <div class="services-two__inner">
                        <div class="services-two__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
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
                                    "items": 3
                                }
                            }
                        }'>
                            <!--Services Two Single End -->
                            <div class="item">
                                <div class="services-two__single">
                                    <div class="services-two__single-inner">
                                        <div class="services-two__content">
                                            <h3 class="services-two__title"><a href="visa-details.html">Tourist Visa</a>
                                            </h3>
                                            <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                        </div>
                                        <div class="services-two__img-box">
                                            <div class="services-two__icon">
                                                <span class="icon-tourist"></span>
                                            </div>
                                            <div class="services-two__img">
                                                <img src="/assets/images/services/services-2-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="services-two__hover-content-box">
                                            <div class="services-two__hover-bg"
                                                style="background-image: url(assets/images/backgrounds/services-two-hover-bg.jpg);">
                                            </div>
                                            <div class="services-two__hover-content">
                                                <h3 class="services-two__hover-title"><a href="visa-details.html">Tourist
                                                        Visa</a></h3>
                                                <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                    one priority strive to deliver.</p>
                                            </div>
                                            <div class="services-two__hover-icon">
                                                <span class="icon-tourist"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Services Two Single End -->
                            <!--Services Two Single End -->
                            <div class="item">
                                <div class="services-two__single">
                                    <div class="services-two__single-inner">
                                        <div class="services-two__content">
                                            <h3 class="services-two__title"><a href="visa-details.html">Business
                                                    Visa</a></h3>
                                            <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                        </div>
                                        <div class="services-two__img-box">
                                            <div class="services-two__icon">
                                                <span class="icon-consulting"></span>
                                            </div>
                                            <div class="services-two__img">
                                                <img src="/assets/images/services/services-2-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="services-two__hover-content-box">
                                            <div class="services-two__hover-bg"
                                                style="background-image: url(assets/images/backgrounds/services-two-hover-bg.jpg);">
                                            </div>
                                            <div class="services-two__hover-content">
                                                <h3 class="services-two__hover-title"><a href="visa-details.html">Business
                                                        Visa</a></h3>
                                                <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                    one priority strive to deliver.</p>
                                            </div>
                                            <div class="services-two__hover-icon">
                                                <span class="icon-consulting"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Services Two Single End -->
                            <!--Services Two Single End -->
                            <div class="item">
                                <div class="services-two__single">
                                    <div class="services-two__single-inner">
                                        <div class="services-two__content">
                                            <h3 class="services-two__title"><a href="visa-details.html">Student Visa</a>
                                            </h3>
                                            <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                        </div>
                                        <div class="services-two__img-box">
                                            <div class="services-two__icon">
                                                <span class="icon-graduating-student"></span>
                                            </div>
                                            <div class="services-two__img">
                                                <img src="/assets/images/services/services-2-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="services-two__hover-content-box">
                                            <div class="services-two__hover-bg"
                                                style="background-image: url(assets/images/backgrounds/services-two-hover-bg.jpg);">
                                            </div>
                                            <div class="services-two__hover-content">
                                                <h3 class="services-two__hover-title"><a href="visa-details.html">Student
                                                        Visa</a></h3>
                                                <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                    one priority strive to deliver.</p>
                                            </div>
                                            <div class="services-two__hover-icon">
                                                <span class="icon-graduating-student"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Services Two Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End -->

        <!--Process One Start-->
        <section class="process-one">
            <div class="process-one__bg" style="background-image: url(assets/images/backgrounds/process-one-bg.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">3 easy process steps</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Get your Visa in 03 Easy
                        <br> & Simple Steps
                    </h2>
                </div>
                <div class="row">
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-box">
                                <div class="process-one__shape-1">
                                    <img src="/assets/images/shapes/process-one-shape-1.png" alt="">
                                    <div class="process-one__shape-3">
                                        <img src="/assets/images/shapes/process-one-shape-3.png" alt="">
                                    </div>
                                </div>
                                <div class="process-one__shape-2">
                                    <img src="/assets/images/shapes/process-one-shape-2.png" alt="">
                                </div>
                                <div class="process-one__icon">
                                    <span class="icon-success-1"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <div class="process-one__step">
                                    <p>Step</p>
                                    <div class="process-one__count"></div>
                                </div>
                                <h3 class="process-one__title"><a href="about.html">Complete
                                        <br> Online Form</a></h3>
                                <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-box">
                                <div class="process-one__shape-1">
                                    <img src="/assets/images/shapes/process-one-shape-1.png" alt="">
                                    <div class="process-one__shape-3">
                                        <img src="/assets/images/shapes/process-one-shape-3.png" alt="">
                                    </div>
                                </div>
                                <div class="process-one__shape-2">
                                    <img src="/assets/images/shapes/process-one-shape-2.png" alt="">
                                </div>
                                <div class="process-one__icon">
                                    <span class="icon-document"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <div class="process-one__step">
                                    <p>Step</p>
                                    <div class="process-one__count"></div>
                                </div>
                                <h3 class="process-one__title"><a href="about.html">Documents
                                        <br> and Payments</a></h3>
                                <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-box">
                                <div class="process-one__shape-1">
                                    <img src="/assets/images/shapes/process-one-shape-1.png" alt="">
                                    <div class="process-one__shape-3">
                                        <img src="/assets/images/shapes/process-one-shape-3.png" alt="">
                                    </div>
                                </div>
                                <div class="process-one__shape-2">
                                    <img src="/assets/images/shapes/process-one-shape-2.png" alt="">
                                </div>
                                <div class="process-one__icon">
                                    <span class="icon-visa"></span>
                                </div>
                            </div>
                            <div class="process-one__content">
                                <div class="process-one__step">
                                    <p>Step</p>
                                    <div class="process-one__count"></div>
                                </div>
                                <h3 class="process-one__title"><a href="about.html">Receive now
                                        <br> your Visa</a></h3>
                                <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                            </div>
                        </div>
                    </div>
                    <!--Process One Single End-->
                </div>
            </div>
        </section>
        <!--Process One End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="container">
                <div class="testimonial-two__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="testimonial-two__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">Our feedbacks</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">What They’re
                                        <br> Talking About HetDynamic
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="testimonial-two__right">
                                <p class="testimonial-two__right-text">There are many variations of passages of
                                    available but
                                    the majority have suffered alteration in some form, by injected hum randomised words
                                    which don't slightly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-two__bottom">
                    <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel"
                        data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
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
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__inner">
                                    <div class="testimonial-two__img">
                                        <img src="/assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                        <div class="testimonial-two__shape-1">
                                            <img src="/assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-details-and-quote">
                                        <div class="testimonial-two__client-details">
                                            <div class="testimonial-two__client-rate">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h4 class="testimonial-two__client-name"><a href="story-details.html">Jessica
                                                    Brown</a></h4>
                                            <p class="testimonial-two__client-sub-title">Co Founder</p>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="icon-chat"></span>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">There are many variations of passages of available
                                        but
                                        the free majority have suffered alteration in some form believable.</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__inner">
                                    <div class="testimonial-two__img">
                                        <img src="/assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                        <div class="testimonial-two__shape-1">
                                            <img src="/assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-details-and-quote">
                                        <div class="testimonial-two__client-details">
                                            <div class="testimonial-two__client-rate">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h4 class="testimonial-two__client-name"><a href="story-details.html">Mike
                                                    Hardson</a></h4>
                                            <p class="testimonial-two__client-sub-title">Co Founder</p>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="icon-chat"></span>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">There are many variations of passages of available
                                        but
                                        the free majority have suffered alteration in some form believable.</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__inner">
                                    <div class="testimonial-two__img">
                                        <img src="/assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                        <div class="testimonial-two__shape-1">
                                            <img src="/assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-details-and-quote">
                                        <div class="testimonial-two__client-details">
                                            <div class="testimonial-two__client-rate">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h4 class="testimonial-two__client-name"><a href="story-details.html">Nikolo
                                                    Hardson</a></h4>
                                            <p class="testimonial-two__client-sub-title">Co Founder</p>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="icon-chat"></span>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">There are many variations of passages of available
                                        but
                                        the free majority have suffered alteration in some form believable.</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__inner">
                                    <div class="testimonial-two__img">
                                        <img src="/assets/images/testimonial/testimonial-2-4.jpg" alt="">
                                        <div class="testimonial-two__shape-1">
                                            <img src="/assets/images/shapes/testimonial-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-details-and-quote">
                                        <div class="testimonial-two__client-details">
                                            <div class="testimonial-two__client-rate">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h4 class="testimonial-two__client-name"><a href="story-details.html">Alisha
                                                    Martin</a></h4>
                                            <p class="testimonial-two__client-sub-title">Co Founder</p>
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <span class="icon-chat"></span>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">There are many variations of passages of available
                                        but
                                        the free majority have suffered alteration in some form believable.</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Awards One Start-->
        <section class="awards-one">
            <div class="awards-one__shape-2">
                <img src="/assets/images/shapes/awards-one-shape-2.png" alt="">
            </div>
            <div class="awards-one__shape-3">
                <img src="/assets/images/shapes/awards-one-shape-3.png" alt="">
            </div>
            <div class="awards-one__shape-4">
                <img src="/assets/images/shapes/awards-one-shape-4.png" alt="">
            </div>
            <div class="awards-one__shape-5 img-bounce">
                <img src="/assets/images/shapes/awards-one-shape-5.png" alt="">
            </div>
            <div class="awards-one__shape-6 float-bob-y">
                <img src="/assets/images/shapes/awards-one-shape-6.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="awards-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">They trust HetDynamic</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Our Agency Awards &
                                    <br> Achievements
                                </h2>
                            </div>
                            <div class="awards-one__text-and-points-box">
                                <p class="awards-one__text count-box">We’re Trusted by <span class="count-text"
                                        data-stop="68000" data-speed="1500">00</span> Satisfied Clients
                                    Across the World for Best Visa & Immigration</p>
                                <ul class="awards-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Professional Consultants</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>100% Guarantee Approvals</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Affordable Fees</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="awards-one__right">
                            <div class="awards-one__shape-7">
                                <img src="/assets/images/shapes/awards-one-shape-7.png" alt="">
                            </div>
                            <div class="row">
                                <!--Awards One Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="awards-one__single">
                                        <div class="awards-one__shape-1">
                                            <img src="/assets/images/shapes/awards-one-shape-1.png" alt="">
                                        </div>
                                        <p class="awards-one__year">2020
                                            <br> Award
                                        </p>
                                        <div class="awards-one__img">
                                            <img src="/assets/images/resources/awards-1-1.png" alt="">
                                        </div>
                                        <h3 class="awards-one__title"><a href="#">Best <br>
                                                Consulting</a></h3>
                                    </div>
                                </div>
                                <!--Awards One Single End-->
                                <!--Awards One Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="awards-one__single">
                                        <div class="awards-one__shape-1">
                                            <img src="/assets/images/shapes/awards-one-shape-1.png" alt="">
                                        </div>
                                        <p class="awards-one__year">2022
                                            <br> Award
                                        </p>
                                        <div class="awards-one__img">
                                            <img src="/assets/images/resources/awards-1-2.png" alt="">
                                        </div>
                                        <h3 class="awards-one__title"><a href="#">Visa <br>
                                                Guarantee</a></h3>
                                    </div>
                                </div>
                                <!--Awards One Single End-->
                                <!--Awards One Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="awards-one__single">
                                        <div class="awards-one__shape-1">
                                            <img src="/assets/images/shapes/awards-one-shape-1.png" alt="">
                                        </div>
                                        <p class="awards-one__year">2018
                                            <br> Award
                                        </p>
                                        <div class="awards-one__img">
                                            <img src="/assets/images/resources/awards-1-3.png" alt="">
                                        </div>
                                        <h3 class="awards-one__title"><a href="#">Quality <br>
                                                Management</a></h3>
                                    </div>
                                </div>
                                <!--Awards One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Awards One End-->

        <!--Blog Two Start-->
        <section class="blog-two" id="blog">
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
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="/assets/images/blog/blog-2-1.jpg" alt="">
                                </div>
                                <div class="blog-two__date">
                                    <p>20<br><span>Feb</span></p>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__tag">
                                        <p>Immigration</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">Vaccination Requirements for
                                            Immigrant Visa Applicants</a></h3>
                                    <div class="blog-two__comment-and-arrow">
                                        <div class="blog-two__comment">
                                            <p><span class="fas fa-comments"></span> 02 Comments</p>
                                        </div>
                                        <div class="blog-two__arrow">
                                            <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="/assets/images/blog/blog-2-2.jpg" alt="">
                                </div>
                                <div class="blog-two__date">
                                    <p>20<br><span>Feb</span></p>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__tag">
                                        <p>Immigration</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">How to Ensure Direct for the
                                            Hassle-Free Visa Process</a></h3>
                                    <div class="blog-two__comment-and-arrow">
                                        <div class="blog-two__comment">
                                            <p><span class="fas fa-comments"></span> 02 Comments</p>
                                        </div>
                                        <div class="blog-two__arrow">
                                            <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__single-two">
                            <ul class="blog-two__single-list list-unstyled">
                                <li>
                                    <div class="blog-two__content-two">
                                        <div class="blog-two__tag-and-user-two">
                                            <div class="blog-two__tag-two">
                                                <p>Immigration</p>
                                            </div>
                                            <div class="blog-two__user-two">
                                                <div class="img">
                                                    <img src="/assets/images/blog/blog-two-user-img-1.jpg" alt="">
                                                </div>
                                                <div class="text">
                                                    <p>by Admin</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="blog-two__title-two"><a href="blog-details.html">Citizenship Concept
                                                on
                                                How to Become a UK Resident</a></h3>
                                        <div class="blog-two__comment-and-arrow-two">
                                            <div class="blog-two__comment-two">
                                                <p><span class="fas fa-comments"></span> 02 Comments</p>
                                            </div>
                                            <div class="blog-two__arrow-two">
                                                <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-two__content-two">
                                        <div class="blog-two__tag-and-user-two">
                                            <div class="blog-two__tag-two">
                                                <p>Immigration</p>
                                            </div>
                                            <div class="blog-two__user-two">
                                                <div class="img">
                                                    <img src="/assets/images/blog/blog-two-user-img-1.jpg" alt="">
                                                </div>
                                                <div class="text">
                                                    <p>by Admin</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="blog-two__title-two"><a href="blog-details.html">Pearson English
                                                Language Test Aapproved by Canadian</a></h3>
                                        <div class="blog-two__comment-and-arrow-two">
                                            <div class="blog-two__comment-two">
                                                <p><span class="fas fa-comments"></span> 02 Comments</p>
                                            </div>
                                            <div class="blog-two__arrow-two">
                                                <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Blog Two Single End-->
                </div>
            </div>
        </section>
        <!--Blog Two End-->

        <!--Contact Two Start-->
        <section class="contact-two" id="contact">
            <div class="contact-two__bg" style="background-image: url(assets/images/backgrounds/contact-two-bg.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Contact with us</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Contact HetDynamic for Visa
                        <br> & Immigration
                    </h2>
                </div>
                <div class="contact-two__inner">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="contact-two__left">
                                <div class="contact-two__form-box">
                                    <form action="assets/inc/sendemail.php"
                                        class="contact-two__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__form-input-box">
                                                    <input type="text" placeholder="Full Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__form-input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__form-input-box">
                                                    <input type="text" placeholder="Phone" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__form-input-box">
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
                                                <div class="contact-two__form-input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                                </div>
                                                <div class="contact-two__form-btn-box">
                                                    <button type="submit" class="thm-btn contact-two__form-btn">Send a
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="contact-two__right">
                                <div class="contact-two__address-box">
                                    <div class="contact-two__address-top">
                                        <div class="contact-two__address-top-title">
                                            <h3>HetDynamic Offices</h3>
                                        </div>
                                        <div class="contact-two__address-top-icon">
                                            <span class="icon-buildings"></span>
                                        </div>
                                    </div>
                                    <div class="contact-two__address-faq">
                                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                            <div class="accrodion active">
                                                <div class="accrodion-title">
                                                    <h4>Dubai Office</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <ul class="contact-two__address-list list-unstyled">
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
                                                                    <p><a href="tel:9288009850">+92 (8800) - 9850</a>
                                                                    </p>
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
                                                        <ul class="contact-two__address-list list-unstyled">
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
                                                                    <p><a href="tel:9288009850">+92 (8800) - 9850</a>
                                                                    </p>
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
                                                        <ul class="contact-two__address-list list-unstyled">
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
                                                                    <p><a href="tel:9288009850">+92 (8800) - 9850</a>
                                                                    </p>
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
            </div>
        </section>
        <!--Contact Two End-->

        <!--Brand Two Start-->
        <section class="brand-two">
            <div class="container">
                <h4 class="brand-two__title">Our partners & suppoters</h4>
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
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
                            <img src="/assets/images/brand/brand-2-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-6.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="/assets/images/brand/brand-2-6.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End-->

        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="container">
                <div class="gallery-one__carousel owl-carousel owl-theme thm-owl__carousel"
                    data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 10,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 3
                        },
                        "992": {
                            "items": 4
                        },
                        "1200": {
                            "items": 5
                        }
                    }
                }'>
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="/assets/images/gallery/gallery-1-1.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a href="/assets/images/gallery/gallery-1-1.jpg" class="img-popup"><i
                                            class="icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="/assets/images/gallery/gallery-1-2.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a href="/assets/images/gallery/gallery-1-2.jpg" class="img-popup"><i
                                            class="icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="/assets/images/gallery/gallery-1-3.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a href="/assets/images/gallery/gallery-1-3.jpg" class="img-popup"><i
                                            class="icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="/assets/images/gallery/gallery-1-4.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a href="/assets/images/gallery/gallery-1-4.jpg" class="img-popup"><i
                                            class="icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="/assets/images/gallery/gallery-1-5.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a href="/assets/images/gallery/gallery-1-5.jpg" class="img-popup"><i
                                            class="icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                </div>
            </div>
        </section>
        <!--Gallery One End-->

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
                <a href="/" aria-label="logo image"><img src="{{ asset($pagedata->site_logo) }}"
                        width="135" alt="" /></a>
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
