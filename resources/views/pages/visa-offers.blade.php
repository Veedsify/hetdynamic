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
                    <h2>Visa Offers</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Visa Offers</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Visa Offers Start-->
        <section class="visa-offers">
            <div class="container">
                <div class="row">
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-1.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-1.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-1.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">Canada Study Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single visa-offers__single--2">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-2.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-2.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane-2.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-2.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">Australia Tourist Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single visa-offers__single--3">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-3.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-3.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane-3.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-3.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">Argentina PR Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single visa-offers__single--4">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-4.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-4.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane-4.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-4.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">Germany Study Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single visa-offers__single--5">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-5.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-5.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane-5.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-5.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">India Tourist Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                    <!--Visa Offers Single Start-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="visa-offers__single visa-offers__single--6">
                            <div class="visa-offers__shape-1"
                                style="background-image: url(assets/images/shapes/visa-offers-shape-6.jpg);"></div>
                            <div class="visa-offers__shape-2"
                                style="background-image: url(assets/images/shapes/visa-offers-texture-shape.jpg);">
                            </div>
                            <div class="visa-offers__img">
                                <img src="/assets/images/resources/visa-offers-img-1-6.jpg" alt="">
                            </div>
                            <div class="visa-offers__dot float-bob-x">
                                <img src="/assets/images/shapes/visa-offers-dot.png" alt="">
                            </div>
                            <div class="visa-offers__plane float-bob-y">
                                <img src="/assets/images/shapes/visa-offers-plane-6.png" alt="">
                            </div>
                            <div class="visa-offers__flag">
                                <img src="/assets/images/resources/visa-offers-flag-1-6.jpg" alt="">
                            </div>
                            <div class="visa-offers__time">
                                <p>30 Days visa Time</p>
                            </div>
                            <div class="visa-offers__sub-title-box">
                                <h5 class="visa-offers__sub-title">Fulfill Your Dream</h5>
                            </div>
                            <h3 class="visa-offers__title"><a href="visa-details.html">India Tourist Visa</a></h3>
                            <ul class="list-unstyled visa-offers__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>No IELTS Test Required</p>
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
                            <div class="visa-offers__price-box">
                                <p class="visa-offers__price-start">Starting with</p>
                                <div class="visa-offers__price">
                                    <p>$360.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Visa Offers Single End-->
                </div>
            </div>
        </section>
        <!--Visa Offers End-->

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
                <a href="/" aria-label="logo image"><img src="/assets/images/resources/logo-2.png"
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
