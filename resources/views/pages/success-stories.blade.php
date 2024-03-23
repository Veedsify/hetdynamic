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
                    <h2>Success Stories</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Success Stories</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Success Stories Start-->
        <section class="success-stories">
            <div class="container">
                <div class="row">
                    <!--Testimonial Two Single Start-->
                    <div class="col-xl-6 col-md-6">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Jessica
                                                Brown</a></h4>
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
                    <div class="col-xl-6 col-md-6">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Mike
                                                Hardson</a></h4>
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
                    <div class="col-xl-6 col-md-6">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Nikolo
                                                Hardson</a></h4>
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
                    <div class="col-xl-6 col-md-6">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Alisha
                                                Martin</a></h4>
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
                    <div class="col-xl-6 col-md-6">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__inner">
                                <div class="testimonial-two__img">
                                    <img src="/assets/images/testimonial/testimonial-2-5.jpg" alt="">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Alisha
                                                Fox</a></h4>
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
                    <div class="col-xl-6 col-md-6">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__inner">
                                <div class="testimonial-two__img">
                                    <img src="/assets/images/testimonial/testimonial-2-6.jpg" alt="">
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
                                        <h4 class="testimonial-two__client-name"><a href="story-details.html">Kevin
                                                Martin</a></h4>
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
        </section>
        <!--Success Stories End-->

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
