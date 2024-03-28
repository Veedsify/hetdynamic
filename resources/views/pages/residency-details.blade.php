@extends('layouts/index', [
    'title' => ucwords($thisService->title) . ' ' . ucwords($thisService->service) . ' - ' . ucwords($pagedata->site_name),
    'description' => $thisService->services_title,
    'image' => asset($thisService->featured_image),
    'meta_tags' => implode(',', explode(' ', $thisService->tags)),
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
            <div class="page-header-bg" style="background-image: url({{ asset($thisService->featured_image) }})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ $thisService->title }}</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">{{ $thisService->title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @if ($thisService->highlight_features_active == true)
            <x-services.header :highlights="$thisService->highlights" :featuredimage="$thisService->featured_image" />
        @endif

        @if ($thisService->service_features_active == true)
            <x-services.servicedata :title="$thisService->services_title" :firstcontent="$thisService->services_first_content" :secondcontent="$thisService->services_second_content" />
        @endif

        @if ($thisService->benefits_active == true)
            <x-services.benefits :benefits="$thisService->benefits" />
        @endif

        @if ($thisService->requirements_section_1_active == true)
            <x-services.requirement1 :requirements="$thisService->requirements" />
        @endif

        @if ($thisService->requirements_section_2_active == true)
            <x-services.requirement2 :requirements="$thisService->requirements" />
        @endif

        @if ($thisService->option_1_active == true)
            <x-services.option1 :title="$thisService->option_1_title" :text="$thisService->option_1_content" :image="$thisService->option_1_image" />
        @endif

        {{-- CONTINUE FROM HERE --}}
        {{-- ALSO SEE WHY ALL THE IMAGES ARE OF THE SAME FILE --}}
        @if ($thisService->option_2_active == true)
            <x-services.option2 :sponsorship="$thisService->sponsorship" />
        @endif

        @if ($thisService->option_3_active == true)
            <x-services.option1 :sponsorship="$thisService->sponsorship" />
        @endif

        @if ($thisService->extra_requirements_active == true)
            <x-services.extrarequirement :sponsorship="$thisService->sponsorship" />
        @endif

        @if ($thisService->mandatory_requirements_active == true)
            <x-services.mandatory :sponsorship="$thisService->sponsorship" />
        @endif

        @if ($thisService->timeline_of_events_active == true)
            <x-services.timeline :sponsorship="$thisService->sponsorship" />
        @endif

        @if ($thisService->sponsorship_active == true)
            <x-services.sponsorship :sponsorship="$thisService->sponsorship" />
        @endif




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
