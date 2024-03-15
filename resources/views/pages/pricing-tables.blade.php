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
                    <h2>Pricing Tables</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Pricing Tables</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Pricing Page Start-->
        <section class="pricing-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our pricing plans</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Select a Plan According to <br> your Requirments</h2>
                </div>
                <div class="pricing-page__main-tab-box tabs-box">
                    <ul class="tab-buttons list-unstyled">
                        <li data-tab="#monthly" class="tab-btn"><span>Monthly</span></li>
                        <li data-tab="#yearly" class="tab-btn active-btn"><span>Yearly</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="monthly">
                            <div class="pricing-page__inner">
                                <div class="row">
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$330</h3>
                                                    <p class="pricing-page__price-sub-title">Single Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-1"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$460</h3>
                                                    <p class="pricing-page__price-sub-title">Double Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-2"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$600</h3>
                                                    <p class="pricing-page__price-sub-title">Multiple Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-4"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="yearly">
                            <div class="pricing-page__inner">
                                <div class="row">
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$330</h3>
                                                    <p class="pricing-page__price-sub-title">Single Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-1"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$460</h3>
                                                    <p class="pricing-page__price-sub-title">Double Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-2"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__shape-1">
                                                    <img src="/assets/images/shapes/pricing-page-shape-1.png"
                                                        alt="">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <h3 class="pricing-page__price">$600</h3>
                                                    <p class="pricing-page__price-sub-title">Multiple Entry Visa Fee</p>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <span class="icon-passport-4"></span>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <h4 class="pricing-page__title">All Visa Services Include:</h4>
                                                    <ul class="list-unstyled pricing-page__service-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Days Time</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Interview Training</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Guarantee Approval</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Documents Submission</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-page__btn-box">
                                                        <a href="pricing-tables.html"
                                                            class="thm-btn pricing-page__btn">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                    </div>
                </div>
            </div>
        </section>
        <!--Pricing Page End-->

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
