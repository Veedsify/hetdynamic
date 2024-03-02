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
                    <h2>Faqs</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Faqs</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Faq Search Box Start-->
        <section class="faq-search-box">
            <div class="container">
                <div class="faq-search-box__inner">
                    <div class="faq-search-box__shape float-bob-x">
                        <img src="/assets/images/shapes/faq-search-shape-1.png " alt="">
                    </div>
                    <div class="faq-search-box__left">
                        <h3 class="faq-search-box__title">Welcome Looking for Help?</h3>
                        <p class="faq-search-box__text">There are many variations of passages the majority have
                            alteration in some. Nam hendrerit elit vel urna congue.</p>
                        <form class="faq-search-box__form">
                            <div class="faq-search-box__form-input">
                                <input type="search" placeholder="Search Here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </div>
                            <div class="faq-search-box__form-btn-and-text">
                                <a href="contact.html" class="thm-btn faq-search-box__form-btn">Contact Now</a>
                                <p class="faq-search-box__form-text">Explain us everything you need?</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq Search Box End-->

        <!--Faq Page Start-->
        <section class="faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="faq-page__left">
                            <div class="faq-page__content">
                                <h4 class="faq-page__content-title">Still have Questions?
                                    Call Now!</h4>
                                <div class="faq-page__call">
                                    <div class="faq-page__call-icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="faq-page__call-content">
                                        <p class="faq-page__call-sub-title">Have Question?</p>
                                        <h4 class="faq-page__call-number"> <span>Free</span> <a href="tel:9288009850">
                                                +92 (8800) - 9850</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="faq-page__right">
                            <div class="faq-one__faq-box">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What is a Direct Immigration Services?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>What are the Benefits of Visa Consultancy?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What We should do If our Visa get Rejection?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Which Documents are Required to Apply Visa Online?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>How to get United States of America Citizenship?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>How you can Apply for Dubai Visa Online?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered
                                                    alteration in some fo injected humour, or randomised words
                                                    believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                    aliquet pellentesque vitae.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq Page End-->

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
