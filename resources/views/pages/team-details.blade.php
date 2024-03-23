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
                    <h2>Team Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Team Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="team-details__shape-1 img-bounce">
                <img src="/assets/images/shapes/team-details-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__left">
                            <div class="team-details__img">
                                <img src="/assets/images/team/team-details-img-1.jpg" alt="">
                                <div class="team-details__guarantee">
                                    <div class="team-details__guarantee-inner">
                                        <div class="team-details__guarantee-icon">
                                            <span class="icon-success-1"></span>
                                        </div>
                                        <h4 class="team-details__guarantee-title">Guarantee <br> Visa Approval</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__right">
                            <h3 class="team-details__name">Jessica Brown</h3>
                            <p class="team-details__sub-title">Visa & Immigration Consultant</p>
                            <div class="team-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <p class="team-details__text-1">Lorem ipsum dolor sit amet, con adipiscing elit tiam
                                convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                hidden in the middle of text.</p>
                            <div class="team-details__points-box">
                                <h3 class="team-details__points-title">Top Reasons for Hiring a Expert Visa Consultant
                                </h3>
                                <ul class="list-unstyled team-details__points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Time Saving</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Support Throughout the Application Process</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Personal Attention</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Privacy Protection</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p> All Hindrances are Taken Care of</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->

        <!--Team Details Experience Start-->
        <section class="team-details-experience">
            <div class="container">
                <div class="team-details-experience__inner">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details-experience-left">
                                <h4 class="team-details-experience-left-title">Personal Experience</h4>
                                <p class="team-details-experience-left-text">If you are going to use a passage of Lorem
                                    Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details-experience-right">
                                <div class="team-details__progress">
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Consultation</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Training</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="66%">
                                                <div class="count-text">66%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Visa Rejection</h4>
                                        <div class="bar marb-0">
                                            <div class="bar-inner count-bar" data-percent="40%">
                                                <div class="count-text">40%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details Experience End-->

        <!--Contact Four Start-->
        <section class="contact-four">
            <div class="contact-four__bg-1" style="background-image: url(assets/images/backgrounds/contact-four-bg-1.jpg);">
            </div>
            <div class="contact-four__bg-2" style="background-image: url(assets/images/backgrounds/contact-four-bg-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">contact with me</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Feel Free to Get in Touch <br> with Jessica</h2>
                </div>
                <div class="contact-four__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-four__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-four__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-four__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-four__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="contact-four__btn-box">
                                    <button type="submit" class="thm-btn contact-four__btn">Send a
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Four End-->

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
