@extends('layouts/index', [
    'title' => 'Residency Details - HetDynamic',
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
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Countries Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Countries {{ $pageId }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Countries Details Start-->
        <section class="countries-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="countries-details__right">
                            <h3 class="countries-details__title">United Kingdom</h3>
                            <p class="countries-details__text">There are many variations of passages of lorem ipsum is
                                simply free text available in the market, but the majority time you put aside to be in
                                our office. Lorem ipsum dolor sit amet, consectet lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Lorem ipsum dolor sit amet.</p>
                            <div class="countries-details__img-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="countries-details__img">
                                            <img src="/assets/images/countries/countries-details-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="countries-details__img">
                                            <img src="/assets/images/countries/countries-details-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="countries-details__text-two">Neque porro est qui dolorem ipsum quia quaed
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                                lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <p class="countries-details__text-three">Biophilia is the idea that humans possess an innate
                                tendency to seek connections with nature. The term translates</p>
                            <p class="countries-details__text-four">When an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially unchanged. Aelltes port
                                lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <h3 class="countries-details__title-two">Reasons of Choosing USA</h3>
                            <p class="countries-details__text-five">There are many variations of passages of lorem ipsum
                                is simply free text available in the market, but the majority time you put aside to be
                                in our office.</p>
                            <ul class="countries-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-theater"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Experience the
                                                <br> Culture</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-goals"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Opportunities
                                                <br> for Growth</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-education"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Quality Higher
                                                <br> Educations</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Countries Details End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="site-footer__map float-bob-x">
                        <img src="/assets/images/shapes/site-footer-map-1.png" alt="">
                    </div>
                    <div class="site-footer__top-left">
                        <div class="site-footer__visa-box">
                            <ul class="list-unstyled site-footer__visa-list">
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-1.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-2.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="site-footer__visa-img">
                                        <img src="/assets/images/resources/site-footer-visa-img-1-3.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="site-footer__visa-content">
                                <p class="site-footer__visa-text">Approved Traveler Visa Applications. <a
                                        href="visa-details.html">Get
                                        Your Visa</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__call">
                        <div class="site-footer__call-icon">
                            <img src="/assets/images/icon/site-footer-icon-comment.png" alt="">
                        </div>
                        <div class="site-footer__call-content">
                            <p class="site-footer__call-sub-title">Have Question?</p>
                            <h5 class="site-footer__call-number"><a href="tel:9288009850"><span>Free</span> +92 (8800) -
                                    9850</a></h5>
                        </div>
                    </div>
                </div>
                <div class="site-footer__middle">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="/assets/images/resources/footer-logo.png"
                                            alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">Aliqua id fugiat nostrud irure ex duis ea quis id
                                    quis ad et. Sunt qui esse pariatur duis deserunt.</p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__link-list list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Meet Experts</a></li>
                                    <li><a href="blog.html">News & Media</a></li>
                                    <li><a href="visa-details.html">Projects</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__visa">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Visa</h3>
                                </div>
                                <ul class="footer-widget__visa-list list-unstyled">
                                    <li><a href="visa-details.html">Work Visa</a></li>
                                    <li><a href="visa-details.html">Students Visa</a></li>
                                    <li><a href="visa-details.html">Business Visa</a></li>
                                    <li><a href="visa-details.html">Family Visa</a></li>
                                    <li><a href="visa-details.html">Travel Visa</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__gallery">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Instagram</h3>
                                </div>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-1.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-2.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-3.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-4.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-5.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="/assets/images/gallery/footer-widget-gallery-img-6.jpg"
                                                alt="">
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p>30 Commercial Road <br> Fratton, Australia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-clock"></span>
                                        </div>
                                        <div class="text">
                                            <p>Mon – Sat: 8:00 am to 6:00 pm <br> Sunday: Closed</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Treck.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
                    <a href="mailto:needhelp@packageName__.com">needhelp@treck.com</a>
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

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
@endsection
