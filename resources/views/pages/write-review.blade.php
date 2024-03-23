@extends('layouts/index', [
    'title' => 'Write a Review - HetDynamic | Reach us on our hotlines',
    'description' => 'This is hetdynamic Write Review page',
    'image' => asset($pagedata->site_logo),
    'meta_tags' => '',
])
@section('content')
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <x-nav />

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{asset($reviewBanner->review_banner_image)}})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ $reviewBanner->review_banner_title}}</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Review</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <div class="container my-lg-5">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Visa Services Review Page</span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h3 class="mt-4">{{ $reviewContent->review_title}}
                            </h3>
                        </div>
                        <p class="about-one__text">{{ $reviewContent->review_description}}</p>
                        <ul >
                            <li>{{ $reviewContent->review_list_1}}.</li>
                            <li>{{ $reviewContent->review_list_2}}.</li>
                            <li>{{ $reviewContent->review_list_3}}.</li>

                        </ul>

                    </div>
                </div>
                <div class="col-xl-6 mt-5">
                    <div class="contact-five__form-box transition-this">
                        @if (session('message'))
                            <div class="alert alert-success transition-this" data-remove_alert="1">
                                <p class="alert__text">{{ session('message') }}</p>
                            </div>
                        @endif
                        <form action="{{ route('contact.submit') }}" class="contact-five__form contact-form-validated"
                            novalidate="novalidate" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-five__input-box">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-five__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-five__input-box">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-five__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 ">
                                    <div class="contact-five__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="contact-five__btn-box ">
                                        <button type="submit" class="thm-btn contact-five__btn ">Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>

            </div>
        </div>



        <!--Google Map Two End-->

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
