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
                    <h2>Gallery</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Gallery Page Start-->
        <section class="gallery-page">
            <div class="container">
                <div class="row masonary-layout">
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-1.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-1.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-2.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-2.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-3.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-3.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-4.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-4.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-5.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-5.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-6.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-6.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-7.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-7.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-9.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-9.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-8.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-8.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="/assets/images/gallery/gallery-page-1-10.jpg" alt="">
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="/assets/images/gallery/gallery-page-1-10.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                </div>
            </div>
        </section>
        <!--Gallery Page End-->

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
