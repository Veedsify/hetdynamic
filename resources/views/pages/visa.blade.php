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

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Visa Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Visa Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Four Start-->
        <section class="services-four">
            <div class="container">
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
        <!--Services Four End-->

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

        <!--feature One Start-->
        <section class="feature-four">
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

        <!--Benefits One Start-->
        <section class="benefits-one benefits-two">
            <div class="benefits-two__bg" style="background-image: url(assets/images/backgrounds/benefits-two-bg.jpg);">
            </div>
            <div class="benefits-two__bg-two"
                style="background-image: url(assets/images/backgrounds/benefits-two-bg-two.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="benefits-one__left">
                            <div class="benefits-one__img-box">
                                <div class="benefits-one__img-one">
                                    <img src="/assets/images/resources/benefits-two-img-1.jpg" alt="">
                                </div>
                                <div class="benefits-one__img-two">
                                    <img src="/assets/images/resources/benefits-two-img-2.jpg" alt="">
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

        <!--Services Three Start-->
        <section class="services-five">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">our Visa categories</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">We Offers Citizenship
                        <br> & Immigration Services
                    </h2>
                </div>
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
                                    <h3 class="services-three__title"><a href="visa-details.html">Tourist Visa</a></h3>
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
                                    <h3 class="services-three__title"><a href="visa-details.html">Business Visa</a></h3>
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
                                    <h3 class="services-three__title"><a href="visa-details.html">Student Visa</a></h3>
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
        </section>
        <!--Services Three End-->

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
                                                    Message</button>
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
