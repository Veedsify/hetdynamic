@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
     'description' => 'Contact us for any inquiries, we are always available to help you out. Reach us on our hotlines or send us an email.',
    'image' => $pagedata->site_logo,
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
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Coaching</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Coaching</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Coaching Four Start-->
        <section class="coaching-four">
            <div class="container">
                <div class="row">
                    <!--Coaching Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
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
                    <!--Coaching Four Single End-->
                    <!--Coaching Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
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
                    <!--Coaching Four Single End-->
                    <!--Coaching Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
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
                    <!--Coaching Four Single End-->
                </div>
            </div>
        </section>
        <!--Coaching Four End-->

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

        <!--Feature Three Start-->
        <section class="feature-three">
            <div class="feature-three__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/feature-three-bg.jpg);"></div>
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
                                    <h3 class="feature-two__title"><a href="visa-details.html">Immigration & Visa <br>
                                            Process</a>
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
                                    <h3 class="feature-two__title"><a href="visa-details.html">Quick & Easy Visa <br>
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
                                    <h3 class="feature-two__title"><a href="team-details.html">Expert & Experince <br>
                                            Consultants</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>
            </div>
        </section>
        <!--Feature Three End-->

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

        <!--Coaching five Start-->
        <section class="coaching-five">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Coaching we offer</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Get the Best Trainings <br> you
                        Deserve</h2>
                </div>
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
        </section>
        <!--Coaching five End-->

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
