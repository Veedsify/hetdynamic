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
                    <h2>Our Team</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="team-page">
            <div class="container">
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
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-5.jpg" alt="">
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
                                <h3 class="team-one__title"><a href="team-details.html">Sarah Albert</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-6.jpg" alt="">
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
                                <h3 class="team-one__title"><a href="team-details.html">David Cooper</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-7.jpg" alt="">
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
                                <h3 class="team-one__title"><a href="team-details.html">Monica Rose</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/assets/images/team/team-1-8.jpg" alt="">
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
                                <h3 class="team-one__title"><a href="team-details.html">Michale Smith</a></h3>
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
        <!--Team Page End-->

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
