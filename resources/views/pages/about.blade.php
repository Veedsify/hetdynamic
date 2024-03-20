@extends('layouts/index', [
    'title' => 'About - Learn more about us ',
    'description' => $pagedata->site_description,
    'image' => asset($pagedata->site_logo),
    'meta_tags' => '',
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
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About Us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
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
                        <br> Talking About HetDynamic
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

        {{-- Mission And Vision  --}}

        <section class="testimonial-two ">
            <div class="container">
                <h1 class="text-center mb-5 section-title__title">About Us</h1>
                <div class="row ">
                    <div class="col-md-6 mb-5">
                        <h3 class="h3 mb-1">Our Mission</h3>
                        <p class="text-primary fw-bold mb-2">Why we do what we do</p>
                        <p>
                            At HetDynamic, our mission is to empower individuals and families worldwide to achieve
                            their dreams
                            of global mobility and opportunity through expert immigration solutions.

                            With a focus on Grenada Citizenship by Investment and Canadian Permanent Residency by
                            Investment, we
                            strive to provide exceptional and personalized services, guiding our clients towards a
                            brighter
                            future while maintaining the highest standards of integrity, transparency, and
                            professionalism.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="h3 mb-1">Our Vision</h3>
                        <p class="text-primary fw-bold mb-2">For the future</p>
                        <p>
                            Our vision is to become a globally recognized leader in immigration consulting, setting
                            new
                            benchmarks for excellence in client satisfaction and success.

                            We aspire to be the go-to destination for individuals seeking seamless pathways to
                            Grenada and
                            Canada, fostering a diverse and inclusive community of globally mobile citizens who
                            contribute to
                            the development and prosperity of their chosen destinations.
                        </p>
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
