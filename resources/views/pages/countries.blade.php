@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
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
                    <h2>Countries</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Countries</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Countries-Four Start-->
        <section class="countries-four">
            <div class="container">
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
            </div>
        </section>
        <!--Countries-Four End-->

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
                        <a href="contact.html" class="excellence-one__btn thm-btn">Apply for Visa</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Excellence One End-->

        <!--Travel One Start-->
        <section class="travel-one">
            <div class="travel-one__bg" style="background-image: url(assets/images/backgrounds/travel-one-bg.jpg);">
            </div>
            <div class="travel-one__bg-two"
                style="background-image: url(assets/images/backgrounds/travel-one-bg-two.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Countries of your choice</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Ready to Travel the World</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="travel-one__left">
                            <div class="travel-one__img">
                                <img src="/assets/images/resources/travel-one-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="travel-one__right">
                            <p class="travel-one__text-1">There are many variations of passag of lorem ipsum available
                                but the jority have suffered alteration in some form by injected randomised words which
                                don't look even slightly believable. </p>
                            <p class="travel-one__text-2">There are many variations of passages of available but the
                                majority have suffered alteration in some form.</p>
                            <ul class="travel-one__points list-unstyled">
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
                            <div class="travel-one__btn-box">
                                <a href="contact.html" class="travel-one__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Travel One End-->

        <!--Gallery Two Start-->
        <section class="gallery-two ">
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
        <!--Gallery Two End-->

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
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-1.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">Germany</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-2.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">London</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-3.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">Italy</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-4.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">Australia</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-5.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">Canada</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                    <!--Countries One Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="countries-one__single">
                            <div class="countries-one__img-box">
                                <div class="countries-one__img">
                                    <img src="/assets/images/countries/countries-1-6.jpg" alt="">
                                </div>
                            </div>
                            <h3 class="countries-one__title"><a href="countries-details.html">Turkey</a></h3>
                            <p class="countries-one__text">Nulla ut elemen
                                tum sapien</p>
                            <div class="countries-one__arrow-box">
                                <a href="countries-details.html" class="countries-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Countries One Single End-->
                </div>
            </div>
        </section>
        <!--Countries One End-->

        <!--Brand One Start-->
        <section class="brand-one countries-page-brand">
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
