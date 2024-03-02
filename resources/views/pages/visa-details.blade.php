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
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Visa Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Visa Details Start-->
        <section class="visa-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="visa-details__left">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="visa-details__img">
                                        <img src="/assets/images/resources/visa-details-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="visa-details__points-box">
                                        <h3 class="visa-details__points-box-title">Business Visa</h3>
                                        <p class="visa-details__points-box-text">United Kingdom Allows you Easy Setting
                                            up Your Business in Country</p>
                                        <ul class="visa-details__points-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Setup Your Business in other Country</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Grow Your Business to Next Level</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Get in 2 Years Residence</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Sponsor Your Spouse</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Get 30% Tax Reductions</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p class="visa-details__text-1">There are many variations of passages of lorem ipsum is
                                simply free text available in the market, but the majority time you put aside to be in
                                our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="visa-details__text-box">
                                <p>We stand for quality, safety & credibility, so you could be trust us fully about city
                                    government and our working process.</p>
                            </div>
                            <p class="visa-details__text-2">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                                eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
                            </p>
                            <div class="visa-details__visa-process">
                                <h3 class="visa-details__visa-process-title">Online Visa Process</h3>
                                <ul class="visa-details__visa-process-list list-unstyled">
                                    <li>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <span class="icon-application-1"></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <p>Select
                                                <br> Visa Type
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <span class="icon-application"></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <p>Fill
                                                <br> Online Form
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <span class="icon-submit"></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <p>Submit
                                                <br> Application
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <span class="icon-digitalization"></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <p>Visa
                                                <br> Processing
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <span class="icon-stamp"></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <p>Visa
                                                <br> Approved
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="visa-details__btn-box">
                                <a href="contact.html" class="visa-details__btn thm-btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="coaching-details__sidebar">
                            <div class="coaching-details__services-list">
                                <ul class="coaching-details__services list-unstyled">
                                    <li>
                                        <a href="#">Tourist Visa</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Business Visa</a>
                                    </li>
                                    <li>
                                        <a href="#">Student Visa</a>
                                    </li>
                                    <li>
                                        <a href="#">Residence Visa</a>
                                    </li>
                                    <li>
                                        <a href="#">Employement Visa</a>
                                    </li>
                                    <li>
                                        <a href="#">Transit Visa</a>
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
                </div>
            </div>
        </section>
        <!--Visa Details End-->

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
