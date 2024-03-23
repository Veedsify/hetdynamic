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

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Main Sllider Start -->
        <section class="main-slider-three" id="home">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider-three__slide-1">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-1.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Plan Your Trip of Dream Country</p>
                            <h2 class="main-slider-three__title">Trusted Immigration <br>
                                <span>Consultancy</span>
                            </h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider-three__slide-2">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-2.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Plan Your Trip of Dream Country</p>
                            <h2 class="main-slider-three__title">Trusted Immigration <br>
                                <span>Consultancy</span>
                            </h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider-three__slide-3">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-3.jpg);">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Plan Your Trip of Dream Country</p>
                            <h2 class="main-slider-three__title">Trusted Immigration <br>
                                <span>Consultancy</span>
                            </h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Sllider Start -->

        <!--Feature Two Start-->
        <section class="feature-two">
            <div class="feature-two__shape-3 float-bob-y">
                <img src="/assets/images/shapes/feature-two-shape-3.png" alt="">
            </div>
            <div class="feature-two__wrap">
                <div class="container">
                    <div class="row">
                        <!--Feature Two Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-two__single">
                                <div class="feature-two__single-inner">
                                    <div class="feature-two__shape-1">
                                        <div class="feature-two__shape-2">
                                            <div class="feature-two__icon">
                                                <span class="icon-passport"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-two__content-box">
                                        <p class="feature-two__sub-title">Taking care</p>
                                        <h3 class="feature-two__title"><a href="visa-details.html">Immigration & Visa
                                                <br> Process</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature Two Single End-->
                        <!--Feature Two Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-two__single">
                                <div class="feature-two__single-inner">
                                    <div class="feature-two__shape-1">
                                        <div class="feature-two__shape-2">
                                            <div class="feature-two__icon">
                                                <span class="icon-application"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-two__content-box">
                                        <p class="feature-two__sub-title">Apply Online</p>
                                        <h3 class="feature-two__title"><a href="visa-details.html">Quick & Easy Visa
                                                <br>
                                                Application</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature Two Single End-->
                        <!--Feature Two Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-two__single">
                                <div class="feature-two__single-inner">
                                    <div class="feature-two__shape-1">
                                        <div class="feature-two__shape-2">
                                            <div class="feature-two__icon">
                                                <span class="icon-exchange"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-two__content-box">
                                        <p class="feature-two__sub-title">free advice</p>
                                        <h3 class="feature-two__title"><a href="team-details.html">Expert & Experince
                                                <br>
                                                Consultants</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Feature Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Two Start -->

        <!--About Three Start-->
        <section class="about-three" id="about">
            <div class="about-thre__shape-1 img-bounce">
                <img src="/assets/images/shapes/about-three-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">our company intro</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Welcome to Visa & <br> Immigration Consultancy</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="about-three__img-box">
                                <div class="about-three__img">
                                    <img src="/assets/images/resources/about-three-img-1.jpg" alt="">
                                </div>
                                <div class="about-three__img-two">
                                    <img src="/assets/images/resources/about-three-img-2.jpg" alt="">
                                </div>
                                <div class="about-three__img-three">
                                    <img src="/assets/images/resources/about-three-img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="about-three__top">
                                <div class="about-three__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="about-three__content">
                                    <h4>The Global Leaders in Visa & Immigration <br> Since 2013</h4>
                                </div>
                            </div>
                            <p class="about-three__text-1">There are many variations of passag of lorem ipsum available
                                but the jority have suffered alteration in some form by injected randomised words which
                                don't look even slightly believable.</p>
                            <p class="about-three__text-2">There are many variations of passages of available but the
                                majority have suffered alteration in some form.</p>
                            <ul class="list-unstyled about-three__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Praesent laoreet dictum justo.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Mauris imperdiet non ligula et lobortis.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Donec scelerisque egestas purus eget fringilla</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="about.html" class="about-three__btn thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Services Three Start-->
        <section class="services-three" id="visa">
            <div class="services-three__bg-one"
                style="background-image: url(assets/images/backgrounds/services-three-bg-1.png);"></div>
            <div class="services-three__bg-two"
                style="background-image: url(assets/images/backgrounds/services-three-bg-2.jpg);"></div>
            <div class="container">
                <div class="services-three__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-three__top-left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">our Visa categories</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">We Offers Citizenship <br>
                                        & Immigration Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-three__top-right">
                                <p class="services-three__top-text">There are many variations of passages of available
                                    but the majority have suffered alteration in some form, by injected hum randomised
                                    words which don't slightly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-three__bottom">
                    <div class="row">
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="/assets/images/services/services-3-1.jpg" alt="">
                                        <div class="services-three__icon-two">
                                            <span class="icon-tour-guide"></span>
                                        </div>
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-tour-guide"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__title-box">
                                        <h3 class="services-three__title"><a href="visa-details.html">Tourist Visa</a>
                                        </h3>
                                    </div>
                                    <p class="services-three__text">Desire that they can forese <br> trouble bound
                                        ensue.</p>
                                    <div class="services-three__arrow">
                                        <a href="visa-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="/assets/images/services/services-3-2.jpg" alt="">
                                        <div class="services-three__icon-two">
                                            <span class="icon-suitcase"></span>
                                        </div>
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-suitcase"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__title-box">
                                        <h3 class="services-three__title"><a href="visa-details.html">Business Visa</a>
                                        </h3>
                                    </div>
                                    <p class="services-three__text">Desire that they can forese <br> trouble bound
                                        ensue.</p>
                                    <div class="services-three__arrow">
                                        <a href="visa-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="/assets/images/services/services-3-3.jpg" alt="">
                                        <div class="services-three__icon-two">
                                            <span class="icon-reading-book"></span>
                                        </div>
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-reading-book"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__title-box">
                                        <h3 class="services-three__title"><a href="visa-details.html">Student Visa</a>
                                        </h3>
                                    </div>
                                    <p class="services-three__text">Desire that they can forese <br> trouble bound
                                        ensue.</p>
                                    <div class="services-three__arrow">
                                        <a href="visa-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="services-three__single">
                                <div class="services-three__img-box">
                                    <div class="services-three__img">
                                        <img src="/assets/images/services/services-3-4.jpg" alt="">
                                        <div class="services-three__icon-two">
                                            <span class="icon-real-estate"></span>
                                        </div>
                                    </div>
                                    <div class="services-three__icon">
                                        <span class="icon-real-estate"></span>
                                    </div>
                                </div>
                                <div class="services-three__content">
                                    <div class="services-three__title-box">
                                        <h3 class="services-three__title"><a href="visa-details.html">Residence Visa</a>
                                        </h3>
                                    </div>
                                    <p class="services-three__text">Desire that they can forese <br> trouble bound
                                        ensue.</p>
                                    <div class="services-three__arrow">
                                        <a href="visa-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services Three End-->

        <!--Countries-Three Start-->
        <section class="countries-three" id="countries">
            <div class="countries-three__shape-1 float-bob-y">
                <img src="/assets/images/shapes/countries-three-shape-1.png" alt="">
            </div>
            <div class="countries-three__shape-2 float-bob-y">
                <img src="/assets/images/shapes/countries-three-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our countries list</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Select the Country of <br> Your Choice</h2>
                </div>
                <div class="countries-three__top">
                    <div class="countries-three__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#one" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-1.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#two" class="tab-btn active-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-2.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#three" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-3.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#four" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-4.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#five" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-5.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#six" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-6.jpg" alt="">
                                </div>
                            </li>
                            <li data-tab="#seven" class="tab-btn">
                                <div class="img-box">
                                    <img src="/assets/images/resources/flag-1-7.jpg" alt="">
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab" id="one">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Germany</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab active-tab" id="two">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">United Kingdom</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="three">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Italy</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="four">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Australia</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="five">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Canada</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="six">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">United States</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="seven">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Turkish</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="countries-three__bottom">
                    <div class="countries-three__bottom-shape">
                        <img src="/assets/images/shapes/countries-three-bottom-shape.png" alt="">
                    </div>
                    <div class="countries-three__bottom-content">
                        <p class="countries-three__bottom-text">Need Visa & Immigration Consultation? <a
                                href="about.html">Send a
                                Free Request!</a></p>
                    </div>
                    <div class="countries-three__btn-box">
                        <a href="contact.html" class="countries-three__btn thm-btn">Book Appointment</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Countries-Three End-->

        <!--Benefits One Start-->
        <section class="benefits-one">
            <div class="benefits-one__shape-1 float-bob-y">
                <img src="/assets/images/shapes/benefits-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="benefits-one__left">
                            <div class="benefits-one__img-box">
                                <div class="benefits-one__img-one">
                                    <img src="/assets/images/resources/benefits-one-img-1.jpg" alt="">
                                </div>
                                <div class="benefits-one__img-two">
                                    <img src="/assets/images/resources/benefits-one-img-2.jpg" alt="">
                                </div>
                                <div class="benefits-one__solution">
                                    <div class="benefits-one__solution-icon">
                                        <span class="icon-marketing"></span>
                                    </div>
                                    <h4 class="benefits-one__solution-title">Best Immigration <br>
                                        Solutions</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="benefits-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Our benefits list</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">See Why You Should <br>
                                    Choose HetDynamic</h2>
                            </div>
                            <p class="benefits-one__text">There are many variations of passages of available but the
                                majority have suffered. Alteration in some form, lipsum is simply free text by injected
                                humou or randomised words even believable.</p>
                            <ul class="list-unstyled benefits-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="content">
                                        <p>Benefit 01</p>
                                        <h4>Our Process is Very Fast</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-consultant"></span>
                                    </div>
                                    <div class="content">
                                        <p>Benefit 02</p>
                                        <h4>Professional Consultants</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-international-passport"></span>
                                    </div>
                                    <div class="content">
                                        <p>Benefit 03</p>
                                        <h4>100% Visa Guarantee</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Benefits One End-->

        <!--Coaching Three Start-->
        <section class="coaching-three" id="coaching">
            <div class="coaching-three__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/coaching-three-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Coaching we offer</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Get the Best Trainings <br>
                        You Deserve</h2>
                </div>
                <div class="coaching-three__carousel owl-carousel owl-theme thm-owl__carousel"
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
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="/assets/images/resources/coaching-three-1-1.jpg" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="/coaching/1"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="/coaching/1">OET Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="/assets/images/resources/coaching-three-1-2.jpg" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="/coaching/1"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="/coaching/1">IELTS Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="/assets/images/resources/coaching-three-1-3.jpg" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="/coaching/1"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="/coaching/1">TOFEL Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                </div>
            </div>
        </section>
        <!--Coaching Three End-->

        <!--Testimonial Three Start-->
        <section class="testimonial-three">
            <div class="testimonial-three__map float-bob-y">
                <img src="/assets/images/shapes/testimonial-three-map.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial-three__left">
                            <div class="testimonial-three__shape-2 img-bounce">
                                <img src="/assets/images/shapes/testimonial-three-shape-2.png" alt="">
                            </div>
                            <div class="testimonial-three__slider">

                                <div class="testimonial-three__thumb-outer-box">
                                    <div class="testimonial-three__thumb-carousel owl-carousel owl-theme">
                                        <div class="testimonial-three__thumb-item">
                                            <div class="testimonial-three__img-holder-box">
                                                <div class="testimonial-three__img-holder">
                                                    <img src="/assets/images/testimonial/testimonial-3-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-three__quote">
                                                    <img src="/assets/images/icon/testimonial-three-quote.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__thumb-item">
                                            <div class="testimonial-three__img-holder-box">
                                                <div class="testimonial-three__img-holder">
                                                    <img src="/assets/images/testimonial/testimonial-3-2.jpg"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-three__quote">
                                                    <img src="/assets/images/icon/testimonial-three-quote.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__thumb-item">
                                            <div class="testimonial-three__img-holder-box">
                                                <div class="testimonial-three__img-holder">
                                                    <img src="/assets/images/testimonial/testimonial-3-3.jpg"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-three__quote">
                                                    <img src="/assets/images/icon/testimonial-three-quote.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-three__main-content">
                                    <div class="testimonial-three__carousel owl-carousel owl-theme">
                                        <div class="testimonial-three__item">
                                            <div class="testimonial-three__inner-content">
                                                <div class="testimonial-three__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p class="testimonial-three__text">Thanks for making the process of
                                                    getting a Canada visa so easy. Your phone and email response was
                                                    prompt and courteous. I received my passport with the visa one
                                                    day earlier.</p>
                                                <div class="testimonial-three__client-info">
                                                    <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                                    <p class="testimonial-three__client-sub-title">CEO of HetDynamic
                                                        Consultancy</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-three__item">
                                            <div class="testimonial-three__inner-content">
                                                <div class="testimonial-three__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p class="testimonial-three__text">Thanks for making the process of
                                                    getting a Canada visa so easy. Your phone and email response was
                                                    prompt and courteous. I received my passport with the visa one
                                                    day earlier.</p>
                                                <div class="testimonial-three__client-info">
                                                    <h4 class="testimonial-three__client-name">Aleesha Brown</h4>
                                                    <p class="testimonial-three__client-sub-title">CEO of HetDynamic
                                                        Consultancy</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-three__item">
                                            <div class="testimonial-three__inner-content">
                                                <div class="testimonial-three__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p class="testimonial-three__text">Thanks for making the process of
                                                    getting a Canada visa so easy. Your phone and email response was
                                                    prompt and courteous. I received my passport with the visa one
                                                    day earlier.</p>
                                                <div class="testimonial-three__client-info">
                                                    <h4 class="testimonial-three__client-name">Mike Hardson</h4>
                                                    <p class="testimonial-three__client-sub-title">CEO of HetDynamic
                                                        Consultancy</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial-three__right">
                            <div class="testimonial-three__shape-1">
                                <img src="/assets/images/shapes/testimonial-three-shape-1.png" alt="">
                            </div>
                            <ul class="list-unstyled testimonial-three__counter-box">
                                <li>
                                    <div class="testimonial-three__counter-single">
                                        <div class="testimonial-three__counter-icon">
                                            <span class="icon-life-insurance"></span>
                                        </div>
                                        <div class="testimonial-three__counter-content-box">
                                            <div class="testimonial-three__counter-count-box count-box">
                                                <h3 class="count-text" data-stop="68" data-speed="1500">00</h3>
                                                <span class="testimonial-three__counter-plus">k</span>
                                            </div>
                                            <p>We Process Visas</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-three__counter-single">
                                        <div class="testimonial-three__counter-icon">
                                            <span class="icon-success"></span>
                                        </div>
                                        <div class="testimonial-three__counter-content-box">
                                            <div class="testimonial-three__counter-count-box count-box">
                                                <h3 class="count-text" data-stop="99" data-speed="1500">00</h3>
                                                <span class="testimonial-three__counter-plus">+</span>
                                            </div>
                                            <p>Our Success Rate</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial-three__counter-single">
                                        <div class="testimonial-three__counter-icon">
                                            <span class="icon-group"></span>
                                        </div>
                                        <div class="testimonial-three__counter-content-box">
                                            <div class="testimonial-three__counter-count-box count-box">
                                                <h3 class="count-text" data-stop="23" data-speed="1500">00</h3>
                                                <span class="testimonial-three__counter-plus">k</span>
                                            </div>
                                            <p>Experience Consultants</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

        <!--Blog Three Start-->
        <section class="blog-three" id="blog">
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
                    <!--Blog Three Single Start-->
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
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
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
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="/assets/images/blog/blog-2-3.jpg" alt="">
                                </div>
                                <div class="blog-two__date">
                                    <p>20<br><span>Feb</span></p>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__tag">
                                        <p>Immigration</p>
                                    </div>
                                    <h3 class="blog-two__title"><a href="blog-details.html">Pearson English Language
                                            Test Aapproved by Canadian</a></h3>
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
                    <!--Blog Three Single End-->
                </div>
            </div>
        </section>
        <!--Blog Three End-->

        <!--Contact Three Start-->
        <section class="contact-three" id="contact">
            <div class="contact-three__bg" style="background-image: url(assets/images/backgrounds/contact-three-bg.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="contact-three__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact with us</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Contact HetDynamic for Visa <br>
                                    & Immigration</h2>
                            </div>
                            <div class="contact-three__main-tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#canada" class="tab-btn active-btn"><span>Canada</span></li>
                                    <li data-tab="#australia" class="tab-btn"><span>Australia</span></li>
                                    <li data-tab="#dubai" class="tab-btn"><span>Dubai</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="canada">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="/assets/images/resources/contact-three-contact-details-img.jpg"
                                                        alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
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
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab " id="australia">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="/assets/images/resources/contact-three-contact-details-img.jpg"
                                                        alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
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
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab " id="dubai">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="/assets/images/resources/contact-three-contact-details-img.jpg"
                                                        alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
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
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="contact-three__right">
                            <div class="contact-three__form-box">
                                <div class="contact-three__form-top">
                                    <p>Request a Appointment</p>
                                </div>
                                <form action="assets/inc/sendemail.php" class="contact-three__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-three__form-input-box">
                                                <input type="text" placeholder="Full Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-three__form-input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-three__form-input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-three__form-input-box">
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
                                            <div class="contact-three__form-input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="contact-three__form-btn-box">
                                                <button type="submit" class="thm-btn contact-three__form-btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Three End-->

        <!--Brand Two Start-->
        <section class="brand-two">
            <div class="container">
                <h4 class="brand-two__title">Our partners & suppoters</h4>
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
