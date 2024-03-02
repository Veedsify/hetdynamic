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
                    <h2>Story Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Story Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Story Details Start-->
        <section class="story-details">
            <div class="story-details__wrap">
                <div class="container">
                    <div class="story-details__inner">
                        <div class="story-details__img-box">
                            <div class="story-details__img">
                                <img src="/assets/images/resources/story-details-img-1.png" alt="">
                            </div>
                            <div class="story-details__badge">
                                <img src="/assets/images/resources/story-details-badge.png" alt="">
                            </div>
                            <div class="story-details__shape img-bounce">
                                <img src="/assets/images/shapes/story-details-shape-1.png" alt="">
                            </div>
                            <div class="story-details__flag">
                                <img src="/assets/images/resources/story-details-flag.png" alt="">
                            </div>
                        </div>
                        <div class="story-details__content">
                            <h4 class="story-details__title">My Visa Was Approved <br> for Australia</h4>
                            <div class="story-details__icon-and-rating">
                                <div class="story-details__icon">
                                    <img src="/assets/images/icon/story-details-chatting-icon.png" alt="">
                                </div>
                                <div class="story-details__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="story-details__text-1">We got our case approved today. Both of my children are
                                very happy. This happened all because of your advise and right action taken by you and
                                your team.</p>
                            <p class="story-details__text-2">I am thankful to you and your team and looking ahead for
                                further processing of my petition. To be very true with you now i am not at all worried
                                as I know I have you, God bless you.</p>
                            <ul class="list-unstyled story-details__list">
                                <li>Visa Applied: <span>30 December 2022</span></li>
                                <li>Visa Type: <span>Tourist Visa</span></li>
                                <li>Approval: <span>30 Days</span></li>
                            </ul>
                            <div class="story-details__client-name">
                                <h3>Aleesha Brown</h3>
                            </div>
                            <div class="story-details__btn-box">
                                <a href="visa-details.html" class="thm-btn story-details__btn-one">Apply for Visa
                                    Now</a>
                                <a href="success-stories.html" class="thm-btn story-details__btn-two">Read More
                                    Stories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Story Details End-->

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
                <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="135"
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
