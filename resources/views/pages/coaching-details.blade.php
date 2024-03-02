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
                    <h2>Coaching Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Coaching Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Coaching Details Start-->
        <section class="coaching-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="coaching-details__sidebar">
                            <div class="coaching-details__services-list">
                                <ul class="coaching-details__services list-unstyled">
                                    <li>
                                        <a href="#">Citizenship Test</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">IELTS Coaching</a>
                                    </li>
                                    <li>
                                        <a href="#">TOFEL Coaching</a>
                                    </li>
                                    <li>
                                        <a href="#">PTE Coaching</a>
                                    </li>
                                    <li>
                                        <a href="#">OET Coaching</a>
                                    </li>
                                    <li>
                                        <a href="#">SAT Coaching</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="banner-one">
                                <div class="banner-one__shape-1">
                                    <img src="/assets/images/shapes/banner-one-shape-1.png" alt="">
                                </div>
                                <div class="banner-one__bg"
                                    style="background-image: url(assets/images/backgrounds/banner-one-bg.jpg);"></div>
                                <div class="banner-one__img">
                                    <img src="/assets/images/resources/banner-one-img.png" alt="">
                                </div>
                                <h3 class="banner-one__title">100%
                                    <br> Guarantee
                                    <br> Approval
                                </h3>
                                <div class="banner-one__btn-box">
                                    <a href="#" class="banner-one__btn">Apply Now</a>
                                </div>
                            </div>
                            <div class="countries-details__documents">
                                <div class="icon">
                                    <span class="icon-pdf-file"></span>
                                </div>
                                <div class="content">
                                    <h3><a href="#">IELTS Application Form</a></h3>
                                    <p>3.9KB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="coaching-details__right">
                            <div class="coaching-details__img">
                                <img src="/assets/images/coaching/coaching-details-img-1.jpg" alt="">
                            </div>
                            <h3 class="coaching-details__title-1">IELTS Coaching</h3>
                            <p class="coaching-details__text-1">There are many variations of passages of lorem ipsum is
                                simply free text available in the market, but the majority time you put aside to be in
                                our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <h3 class="coaching-details__title-2">Score 8+ Bands with Certified & Experienced HetDynamic
                                Coach</h3>
                            <p class="coaching-details__text-2">Ut enim ad minima veniam, quis nostrum exercitationem
                                ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                consequatur.</p>
                            <h3 class="coaching-details__title-3">Why Choose HetDynamic?</h3>
                            <div class="coaching-details__why">
                                <div class="row">
                                    <!--Coaching Details Why Single Start-->
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="coaching-details__why-single">
                                            <div class="coaching-details__why-icon">
                                                <span class="icon-individual"></span>
                                                <div class="coaching-details__why-shape-1"></div>
                                            </div>
                                            <div class="coaching-details__why-title">
                                                <h3>Individual
                                                    Attention</h3>
                                            </div>
                                            <div class="coaching-details__hover-single">
                                                <div class="coaching-details__hover-icon">
                                                    <span class="icon-individual"></span>
                                                </div>
                                                <div class="coaching-details__hover-title">
                                                    <h3>Individual
                                                        Attention</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Coaching Details Why Single End-->
                                    <!--Coaching Details Why Single Start-->
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="coaching-details__why-single">
                                            <div class="coaching-details__why-icon">
                                                <span class="icon-report-card"></span>
                                                <div class="coaching-details__why-shape-1"></div>
                                            </div>
                                            <div class="coaching-details__why-title">
                                                <h3>Result Driven
                                                    Coaching</h3>
                                            </div>
                                            <div class="coaching-details__hover-single">
                                                <div class="coaching-details__hover-icon">
                                                    <span class="icon-report-card"></span>
                                                </div>
                                                <div class="coaching-details__hover-title">
                                                    <h3>Result Driven
                                                        Coaching</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Coaching Details Why Single End-->
                                    <!--Coaching Details Why Single Start-->
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="coaching-details__why-single">
                                            <div class="coaching-details__why-icon">
                                                <span class="icon-time-check"></span>
                                                <div class="coaching-details__why-shape-1"></div>
                                            </div>
                                            <div class="coaching-details__why-title">
                                                <h3>Flexbile
                                                    Timing</h3>
                                            </div>
                                            <div class="coaching-details__hover-single">
                                                <div class="coaching-details__hover-icon">
                                                    <span class="icon-time-check"></span>
                                                </div>
                                                <div class="coaching-details__hover-title">
                                                    <h3>Flexbile
                                                        Timing</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Coaching Details Why Single End-->
                                    <!--Coaching Details Why Single Start-->
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="coaching-details__why-single">
                                            <div class="coaching-details__why-icon">
                                                <span class="icon-books"></span>
                                                <div class="coaching-details__why-shape-1"></div>
                                            </div>
                                            <div class="coaching-details__why-title">
                                                <h3>Free Study
                                                    Material</h3>
                                            </div>
                                            <div class="coaching-details__hover-single">
                                                <div class="coaching-details__hover-icon">
                                                    <span class="icon-books"></span>
                                                </div>
                                                <div class="coaching-details__hover-title">
                                                    <h3>Free Study
                                                        Material</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Coaching Details Why Single End-->
                                </div>
                            </div>
                            <div class="coaching-details__benefit">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="coaching-details__benefit-img">
                                            <img src="/assets/images/coaching/coaching-details-benefit-img.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="coaching-details__benefit-content">
                                            <h3 class="coaching-details__benefit-title">Our Benefits</h3>
                                            <p class="coaching-details__benefit-text">Get the Best IETLS Coaching from
                                                the HetDynamic Academy of Exellence</p>
                                            <ul class="coaching-details__benefit-points list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Best Live Online Preparation </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Customized Study Plans</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Skill Building Sessions</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Full Lenght Mock Test</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-details__importance">
                                <div class="coaching-details__importance-bg"
                                    style="background-image: url(assets/images/backgrounds/coaching-details-importance-bg.png);">
                                </div>
                                <div class="coaching-details__importance-title-box">
                                    <h3 class="coaching-details__importance-title">Professional Training for
                                        <br> Cracking IETLS
                                    </h3>
                                    <div class="coaching-details__importance-btn-box">
                                        <a href="#" class="coaching-details__importance-btn">Apply Now</a>
                                    </div>
                                </div>
                                <ul class="coaching-details__importance-points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Listening</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Reading</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Writing</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Speaking</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Coaching Details End-->

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
                <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png"
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
