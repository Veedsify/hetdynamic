@extends('layouts/index', [
    'title' => 'Contact - HetDynamic | Reach us on our hotlines',
    'description' => 'Contact us for any inquiries, we are always available to help you out. Reach us on our hotlines or send us an email.',
    'image' => $pagedata->site_logo,
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
        <x-nav />

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset($contactBanners->contact_banner_image) }})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ $contactBanners->contact_banner_title }}</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Five Start-->
        <section class="contact-five">
            <div class="contact-five__bg" style="background-image: url(assets/images/backgrounds/contact-five-bg.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">contact with us</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Feel Free to Get in <br> Touch with us</h2>
                </div>
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
                            <div class="col-xl-12">
                                <div class="contact-five__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="contact-five__btn-box">
                                    <button type="submit" class="thm-btn contact-five__btn">Send a
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--Contact Five End-->

        <!--Location One Start-->
        <section class="location-one">
            <div class="container">
                <div class="location-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="location-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <span class="section-title__tagline">checkout our locations</span>
                                        <div class="section-title__border-box"></div>
                                    </div>
                                    <h2 class="section-title__title">{{ $contactLocation->location_title }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="location-one__top-right">
                                <p class="ocation-one__top-text">{{ $contactLocation->location_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-one__bottom">
                    <div class="location-one__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            @foreach ($officeAddress as $tab)
                                @if ($loop->first)
                                    <li data-tab="#{{ $tab->id }}" class="tab-btn active-btn">
                                        <span>{{ $tab->country }}</span>
                                    </li>
                                    @continue
                                @endif
                                <li data-tab="#{{ $tab->id }}" class="tab-btn"><span>{{ $tab->country }}</span></li>
                            @endforeach
                        </ul>
                        <div class="tabs-content">
                            @foreach ($officeAddress as $office)
                                <!--tab-->
                                @if ($loop->first)
                                    <div class="tab active-tab" id="{{ $office->id }}">
                                        <div class="location-one__tab-content-box">
                                            <div class="location-one__tab-content-box-inner">
                                                <div class="location-one__bg"
                                                    style="background-image: url({{ asset('assets/images/backgrounds/location-one-bg.png') }});">
                                                </div>
                                                <div class="location-one__tab-content-left">
                                                    <div class="location-one__tab-content-img">
                                                        <img src="{{ asset($office->image) }}" class="mx-w-370"
                                                            alt="">
                                                    </div>
                                                    <div class="location-one__tab-content-contact">
                                                        <h5 class="location-one__tab-content-contact-title">We’re Always
                                                            Here
                                                            for
                                                            You</h5>
                                                        <ul class="list-unstyled location-one__tab-content-contact-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p>{{ $office->address }}</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fas fa-envelope"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p><a
                                                                            href="mailto:{{ $office->email }}">{{ $office->email }}</a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fas fa-phone"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p><a
                                                                            href="tel:{{ $office->phone }} ">{{ $office->phone }}</a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="location-one__tab-content-right">
                                                    <ul class="list-unstyled location-one__tab-content-time">
                                                        @foreach ($office->openHours as $openHour)
                                                            <li>
                                                                <p class="location-one__tab-content-day-name">
                                                                    {{ $openHour->day }}</p>
                                                                <h4 class="location-one__tab-content-time-box">
                                                                    {{ date('H:i A', strtotime($openHour->open)) }} -
                                                                    {{ date('H:i A', strtotime($openHour->close)) }}
                                                                </h4>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @continue
                                @endif
                                <div class="tab" id="{{ $office->id }}">
                                    <div class="location-one__tab-content-box">
                                        <div class="location-one__tab-content-box-inner">
                                            <div class="location-one__bg"
                                                style="background-image: url({{ asset('assets/images/backgrounds/location-one-bg.png') }});">
                                            </div>
                                            <div class="location-one__tab-content-left">
                                                <div class="location-one__tab-content-img">
                                                    <img src="{{ asset($office->image) }}" class="mx-w-370"
                                                        alt="">
                                                </div>
                                                <div class="location-one__tab-content-contact">
                                                    <h5 class="location-one__tab-content-contact-title">We’re Always Here
                                                        for
                                                        You</h5>
                                                    <ul class="list-unstyled location-one__tab-content-contact-list">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                            <div class="content">
                                                                <p>{{ $office->address }}</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                            <div class="content">
                                                                <p><a
                                                                        href="mailto:{{ $office->email }}">{{ $office->email }}</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                            <div class="content">
                                                                <p><a
                                                                        href="tel:{{ $office->phone }} ">{{ $office->phone }}</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="location-one__tab-content-right">
                                                <ul class="list-unstyled location-one__tab-content-time">
                                                    @foreach ($office->openHours as $openHour)
                                                        <li>
                                                            <p class="location-one__tab-content-day-name">
                                                                {{ $openHour->day }}</p>
                                                            <h4 class="location-one__tab-content-time-box">
                                                                {{ date('H:i A', strtotime($openHour->open)) }} -
                                                                {{ date('H:i A', strtotime($openHour->close)) }}
                                                            </h4>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location One End-->

        <!--Google Map Two Start-->
        <section class="google-map-two">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4035001.2583403247!2d6.03107378588033!3d9.024396683844525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1711281487117!5m2!1sen!2sng"
                class="google-map__two" allowfullscreen></iframe>

        </section>
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
