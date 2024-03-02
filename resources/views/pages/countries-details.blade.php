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
                    <h2>Countries Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Countries Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Countries Details Start-->
        <section class="countries-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="countries-details__sidebar">
                            <div class="countries-details__services-list">
                                <ul class="countries-details__services list-unstyled">
                                    <li>
                                        <a href="#">Germany</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/germany-flag.jpg" alt="">
                                        </div>
                                    </li>
                                    <li class="active">
                                        <a href="#">United Kingdom</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/united-kingdom-flag.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Italy</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/italy-flag.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Australia</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/australia-flag.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Canada</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/canada-flag.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">United States</a>
                                        <div class="countries-details__countries-flag">
                                            <img src="/assets/images/countries/united-states-flag.jpg" alt="">
                                        </div>
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
