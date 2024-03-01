@extends('layouts/index', [
    'title' => 'About - HetDynamic | Learn more about us ',
])

@section('content')
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


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
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Four Start-->
        <section class="about-four">
            <div class="about-four__shape-2 img-bounce">
                <img src="/assets/images/shapes/about-four-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">get to know us</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Leading Visa & <br> Immigration Agency</h2>
                            </div>
                            <div class="about-four__top">
                                <div class="about-four__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="about-four__content">
                                    <h4>The Best in Visa & Immigration Since <br> 2013</h4>
                                </div>
                            </div>
                            <p class="about-four__text-1">There are many variations of passag of lorem ipsum available
                                but the jority have suffered alteration in some form by randomised words which don't
                                look even slightly believable.</p>
                            <div class="about-four__points-box">
                                <ul class="list-unstyled about-four__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Fast Processing</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-four__points about-four__points--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Guarantee Approval</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-four__btn-box">
                                <a href="about.html" class="thm-btn about-four__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="about-four__img-box">
                                <div class="about-four__img-one">
                                    <img src="/assets/images/resources/about-four-img-1.jpg" alt="">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="/assets/images/resources/about-four-img-2.jpg" alt="">
                                </div>
                                <div class="about-four__experience">
                                    <div class="about-four__experience-inner count-box">
                                        <h3 class="count-text" data-stop="28" data-speed="1500">00</h3>
                                        <p>Years of Experience</p>
                                        <div class="about-four__shape-1">
                                            <img src="/assets/images/shapes/about-two-shape-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two about-page-testimonial">
            <div class="about-page-testimonial__bg-1"
                style="background-image: url(assets/images/backgrounds/about-page-testimonial-bg-1.jpg);"></div>
            <div class="about-page-testimonial__bg-2"
                style="background-image: url(assets/images/backgrounds/about-page-testimonial-bg-2.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our feedbacks</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">What They’re
                        <br> Talking About Treck
                    </h2>
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
                                            <h4 class="testimonial-two__client-name">Jessica Brown</h4>
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
                                            <h4 class="testimonial-two__client-name">Mike Hardson</h4>
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
                                            <h4 class="testimonial-two__client-name">Nikolo Hardson</h4>
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
                                            <h4 class="testimonial-two__client-name">Alisha Martin</h4>
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

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Professional people</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Meet Treck Expert Visa
                        <br> Consultatns
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

        <!--Counter One Start-->
        <section class="counter-one about-page-counter">
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

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="site-footer__map float-bob-x">
                        <img src="/assets/images/shapes/site-footer-map-1.png" alt="">
                    </div>
                    <div class="site-footer__top-left">
                        <div class="site-footer__visa-box">
                            <ul class="list-unstyled site-footer__visa-list">
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-1.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-2.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-3.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="site-footer__visa-content">
                                <p class="site-footer__visa-text">Approved Traveler Visa Applications. <a
                                        href="visa-details.html">Get
                                        Your Visa</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__call">
                        <div class="site-footer__call-icon">
                            <img src="/assets/images/icon/site-footer-icon-comment.png" alt="">
                        </div>
                        <div class="site-footer__call-content">
                            <p class="site-footer__call-sub-title">Have Question?</p>
                            <h5 class="site-footer__call-number"><a href="tel:9288009850"><span>Free</span> +92 (8800) -
                                    9850</a></h5>
                        </div>
                    </div>
                </div>
                <div class="site-footer__middle">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="/assets/images/resources/footer-logo.png"
                                            alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">Aliqua id fugiat nostrud irure ex duis ea quis id
                                    quis ad et. Sunt qui esse pariatur duis deserunt.</p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Meet Experts</a></li>
                                    <li><a href="blog.html">News & Media</a></li>
                                    <li><a href="visa-details.html">Projects</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__visa">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Visa</h3>
                                </div>
                                <ul class="footer-widget__visa-list list-unstyled">
                                    <li><a href="visa-details.html">Work Visa</a></li>
                                    <li><a href="visa-details.html">Students Visa</a></li>
                                    <li><a href="visa-details.html">Business Visa</a></li>
                                    <li><a href="visa-details.html">Family Visa</a></li>
                                    <li><a href="visa-details.html">Travel Visa</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__gallery">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Instagram</h3>
                                </div>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-1.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-2.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-3.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-4.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-5.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-6.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p>30 Commercial Road <br> Fratton, Australia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-clock"></span>
                                        </div>
                                        <div class="text">
                                            <p>Mon – Sat: 8:00 am to 6:00 pm <br> Sunday: Closed</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Treck.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png"
                        width="135" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@treck.com</a>
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

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
@endsection
