@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
    'description' => $pagedata->site_description,
    'image' => asset($pagedata->site_logo),
    'meta_tags' => '',
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

        <!--Coaching Details Start-->
        <section class="coaching-details">
            <div class="container">
                <div class="coaching-details__right">
                    <div class="coaching-details__img position-relative">
                        <img src="/assets/images/coaching/coaching-details-img-1.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 p-5 bg-base">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="fw-bold text-white">Study in Canada</h1>
                                </div>
                                <div class="col-12">
                                    <p class="fw-bold text-white">(SIC)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 " style="font-weight: 500" >

                        <div class="col-lg-6">

                            <p class="coaching-details__text-1">
                                Students need to carefully select the right school and study program to ensure they are employable after graduation. These decisions are important factors in obtaining employment in Canada and help determine salary and job satisfaction levels. Students must choose their career wisely, examine their course of education and have guidance if changes are required.
                            </p>
                            <p class="coaching-details__text-1 mt-2">
                                Hetdynamic, works closely with students to help them decide on the right career path and select the appropriate schooling. Our team monitors the ever-changing legal and economic environments to ensure they are working towards a career that qualifies them for permanent residence.
                            </p>
                        </div>
                        <div class="col-lg-6">

                            <p class="coaching-details__text-1">
                                Studying in Canada is an incredible investment in your future, especially if you acquire permanent residence. Hetdynamic can help you identify your best options, choose an appropriate immigration path and guide you through the process. You can engage us for representation throughout your entire journey, we offer convenient block-quote fees and flexible payment terms for the services you need.
                            </p>
                        </div>

                </div>

            </div>
        </section>
        <hr>
        <div class="container">
            <div class="coaching-details__benefit my-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <img src="https://www.hetdynamic.com/wp-content/uploads/2023/10/pexels-pixabay-163037-800x600.jpg"
                                alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="coaching-details__benefit-content">
                            <div class="section-title mb-3  m-0 text-left mt-5">
                                <div class="section-title__tagline-box ">
                                    <span class="section-title__tagline ">Option 1</span>
                                    <div class="section-title__border-box mt-0"></div>
                                </div>
                                <h3 class="coaching-details__title-1 m-0 mt-2 ">Federal Skilled Worker Program</h3>
                            </div>

                            <p >The Federal Skilled Worker (FSW) program is one of the three programs contained within Canada’s Express Entry system for processing immigration applications. The FSW program allows candidates with foreign work experience and no connections to Canada to apply for permanent residency. Hetdynamic, will carefully explain your point score ranking and offer recommendations to help you achieve better scores and qualify quickly.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="coaching-details__benefit my-5">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="coaching-details__benefit-content">
                            <div class="section-title mb-3  m-0 text-left mt-5">
                                <div class="section-title__tagline-box ">
                                    <span class="section-title__tagline ">Option 2</span>
                                    <div class="section-title__border-box mt-0"></div>
                                </div>
                                <h3 class="coaching-details__title-1 m-0 mt-2 ">
                                    Provincial Nominee Programs (PNP)</h3>
                            </div>

                            <p >The Canadian provinces offer a range of distinctive immigration programs for skilled workers who are outside Canada. Although many of these PNPs offer good immigration options there can be numerous complications with these programs. Our team will carefully explain the advantages and disadvantages of these programs to help you make the right decisions regarding your future.</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <img src="https://www.hetdynamic.com/wp-content/uploads/2023/10/pexels-pixabay-163037-800x600.jpg"
                                alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="coaching-details__benefit my-5">
                <div class="row">

                    <div class="col-lg-8">
                        <div class=" text-dark coaching-details__importance-title-box" style="font-weight: 500; ">
                            <h3 class="coaching-details__benefit-title mb-4">Get the guidance you need to succeed</h3>
                            <p  class="mb-3">Our expert immigration consultants, will work closely through the process by getting to know your unique circumstances and personal goals. They will carefully explain the current regulations, identify your best options and recommend the most suitable immigration strategy for you. Our team then takes care of all required paperwork to ensure an efficient and stress-free experience .</p>
                            <p  class="mb-3">Your future is incredibly important, let us help you realize the opportunities available to you. Call or email us to schedule your comprehensive consultation and let’s begin developing a customized immigration plan that’s right for you.</p>
                            <div class="main-menu__btn-box mt-lg-5 mt-3 ">
                                <a href="{{ route('contact') }}" class="thm-btn main-menu__btn">Book
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-lg-0 mt-3 ">
                            <img src="https://www.hetdynamic.com/wp-content/uploads/2023/10/pexels-kristupas-kemeza-11907588-600x900.jpg"
                                alt="" width="100%" >
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
        <!--Site Footer End-->

        {{-- <div class="row">
            <div class="col-12">
                    <h3 class="coaching-details__title-3">Why Choose HetDynamic?</h3>
                    <div class="coaching-details__why">
                        <div class="row">
                            <!--Coaching Details Why Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="coaching-details__why-single">
                                    <div class="coaching-details__why-icon">
                                        <span class="icon-individual"></span>
                                        <div class="coaching-details__why-shape-1"></div>
                                    </div>
                                    <div class="coaching-details__why-title">
                                        <h3>Individual
                                            Attention</h3>
                                    </div>
                                    <div class="coaching-details__hover-single">
                                        <div class="coaching-details__hover-icon">
                                            <span class="icon-individual"></span>
                                        </div>
                                        <div class="coaching-details__hover-title">
                                            <h3>Individual
                                                Attention</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Coaching Details Why Single End-->
                            <!--Coaching Details Why Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="coaching-details__why-single">
                                    <div class="coaching-details__why-icon">
                                        <span class="icon-report-card"></span>
                                        <div class="coaching-details__why-shape-1"></div>
                                    </div>
                                    <div class="coaching-details__why-title">
                                        <h3>Result Driven
                                            Coaching</h3>
                                    </div>
                                    <div class="coaching-details__hover-single">
                                        <div class="coaching-details__hover-icon">
                                            <span class="icon-report-card"></span>
                                        </div>
                                        <div class="coaching-details__hover-title">
                                            <h3>Result Driven
                                                Coaching</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Coaching Details Why Single End-->
                            <!--Coaching Details Why Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="coaching-details__why-single">
                                    <div class="coaching-details__why-icon">
                                        <span class="icon-time-check"></span>
                                        <div class="coaching-details__why-shape-1"></div>
                                    </div>
                                    <div class="coaching-details__why-title">
                                        <h3>Flexbile
                                            Timing</h3>
                                    </div>
                                    <div class="coaching-details__hover-single">
                                        <div class="coaching-details__hover-icon">
                                            <span class="icon-time-check"></span>
                                        </div>
                                        <div class="coaching-details__hover-title">
                                            <h3>Flexbile
                                                Timing</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Coaching Details Why Single End-->
                            <!--Coaching Details Why Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="coaching-details__why-single">
                                    <div class="coaching-details__why-icon">
                                        <span class="icon-books"></span>
                                        <div class="coaching-details__why-shape-1"></div>
                                    </div>
                                    <div class="coaching-details__why-title">
                                        <h3>Free Study
                                            Material</h3>
                                    </div>
                                    <div class="coaching-details__hover-single">
                                        <div class="coaching-details__hover-icon">
                                            <span class="icon-books"></span>
                                        </div>
                                        <div class="coaching-details__hover-title">
                                            <h3>Free Study
                                                Material</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Coaching Details Why Single End-->
                        </div>
                    </div>
                    <div class="coaching-details__benefit">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="coaching-details__benefit-img">
                                    <img src="/assets/images/coaching/coaching-details-benefit-img.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="coaching-details__benefit-content">
                                    <h3 class="coaching-details__benefit-title">Our Benefits</h3>
                                    <p class="coaching-details__benefit-text">Get the Best IETLS Coaching from
                                        the HetDynamic Academy of Exellence</p>
                                    <ul class="coaching-details__benefit-points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Best Live Online Preparation </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Customized Study Plans</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Skill Building Sessions</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Full Lenght Mock Test</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coaching-details__importance">
                        <div class="coaching-details__importance-bg"
                            style="background-image: url(assets/images/backgrounds/coaching-details-importance-bg.png);">
                        </div>
                        <div class="coaching-details__importance-title-box">
                            <h3 class="coaching-details__importance-title">Professional Training for
                                <br> Cracking IETLS
                            </h3>
                            <div class="coaching-details__importance-btn-box">
                                <a href="#" class="coaching-details__importance-btn">Apply Now</a>
                            </div>
                        </div>
                        <ul class="coaching-details__importance-points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Listening</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Reading</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Writing</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Speaking</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
   <!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset($pagedata->site_logo) }}" width="135"
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
