@extends('layouts/index', [
    'title' => 'Residency Details - HetDynamic',
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

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Countries Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Countries {{ $pageId }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Countries Details Start-->
        <section class="coaching-details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="coaching-details__right">
                            <div class=" position-relative">
                                <img src="/assets/images/coaching/coaching-details-img-1.jpg" alt="" class="w-100">
                                <div class="position-absolute   w-auto bottom-0 end-0 p-lg-5 p-2 bg-base">
                                    <div class="row  gap-lg-0 gap-3">
                                        <div class="col-lg-4 col-md-6  ">

                                                <h1 class="fw-bold text-white">2023</h1>
                                                <p class="fw-bold text-white ">Innovator Founder Visa Launched
                                                </p>
                                        </div>
                                        <div class="col-lg-4  col-md-6">

                                                <h1 class="fw-bold text-white">£50,000</h1>
                                                <p class="fw-bold text-white">Minimum Requirement
                                                </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6">

                                                <h1 class="fw-bold text-white">2-3</h1>
                                                <p class="fw-bold text-white">Months Processing Time
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-title mb-3  m-0 text-left mt-5">
                                <div class="section-title__tagline-box ">
                                    <span class="section-title__tagline ">Our services</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h3 class="coaching-details__title-1 m-0 ">Innovator Founder Visa</h3>
                            </div>
                            <div class="row p-lg-0 p-2 gap-md-0 gap-3">

                                <p class="coaching-details__text-1  col-md-6">There are many variations of passages of lorem ipsum is
                                    simply free text available in the market, but the majority time you put aside to be in
                                    our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <p class="coaching-details__text-1  col-md-6 ">There are many variations of passages of lorem ipsum is
                                    simply free text available in the market, but the majority time you put aside to be in
                                    our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                </div>



                                <div class="mt-5 p-lg-0 p-2">
                                    <div class="coaching-details__benefit-content">
                                        <h3 class="coaching-details__benefit-title mb-4">Benefits of the UK Innovator Founder Program</h3>
                                        <ul class="coaching-details__benefit-points list-unstyled gap-2 d-flex flex-column ">
                                            <li class="d-flex align-items-center border p-2
                                            ">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        Residence permits acquired within few weeks</p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center border p-2">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Permanent residence possible after three years</p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center border p-2">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Path to Citizenship: provided you meet the specific criteria throughout your residency application and have upheld the requirements, you may be eligible for citizenship after five years.</p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center border p-2">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Include Family Members : As an innovator founder, It is possible to apply for dependent visas for your children below the age of 18 and your spouse</p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center border p-2">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>International business environment</p>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center border p-2">
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        World-renowned schools and universities</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

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
                                                <h3 class="coaching-details__benefit-title">Requirements of the UK Innovator Founder Program</h3>
                                                <p class="coaching-details__benefit-text">Applicants must:</p>
                                                <ul class="coaching-details__benefit-points list-unstyled">
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p >Be at least 18 years of age </p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Have a new and viable business idea with a potential for growth, supported by an endorsement letter from an approved endorsing body</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Demonstrate sufficient investment funds to set up and grow their business</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Be the sole or an instrumental member of the business’s founding team</p>
                                                        </div>
                                                    </li>
                                                        <li class="d-flex align-items-start  ">
                                                            <div class="icon p-1">
                                                                <span class="icon-check"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Have the ability to speak English according to CEFR intermediate Level B2    </p>
                                                            </div>
                                                        </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="coaching-details__benefit my-5">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="coaching-details__benefit-content">
                                                <h3 class="coaching-details__benefit-title mb-3">The proposed business must meet the following requirements:</h3>
                                                <ul class="coaching-details__benefit-points list-unstyled">
                                                    <li class="d-flex align-items-start   ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p ><b> Innovation: </b> An original, genuine business plan that meets new or existing market needs and/or creates a competitive advantage</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p> <b>Viability: </b> A realistic and achievable business plan, based on the available resources. Applicants must have, or be actively developing, the necessary skills, knowledge, experience, and market awareness to successfully run their business</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start  ">
                                                        <div class="icon p-1">
                                                            <span class="icon-check"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p><b> Scalability:</b> Evidence of structured planning and potential for job creation and growth into national and international markets</p>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6  ">
                                                <img src="https://www.hetdynamic.com/wp-content/uploads/2023/10/pexels-pixabay-163037-800x600.jpg"
                                                    alt="" width="100%" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
         <hr>
         <div class="container">
            <div class="section-title mb-3  m-0 text-left mt-5">
                <div class="section-title__tagline-box ">
                    <span class="section-title__tagline  m-0 ">All requirements are mandatory</span>
                    <div class="section-title__border-box mt-1"></div>
                </div>
                <h3 class="coaching-details__title-3 m-0 py-2">Procedures of the UK Innovator Founder Program</h3>
            </div>
            <hr>
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
