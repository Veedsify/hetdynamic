@extends('layouts/index', [
    'title' => 'Contact - HetDynamic | Reach us on our hotlines',
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
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
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
                <div class="contact-five__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-five__form contact-form-validated"
                        novalidate="novalidate">
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
                                    <input type="text" placeholder="Phone Number" name="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-five__input-box">
                                    <input type="text" placeholder="Subject" name="Subject">
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
                                    <h2 class="section-title__title">Our Visa Consultancy <br>
                                        Offices in World</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="location-one__top-right">
                                <p class="ocation-one__top-text">There are many variations of passages of available but
                                    the majority have suffered alteration in some form, by injected hum randomised words
                                    which don't slightly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-one__bottom">
                    <div class="location-one__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#south-america" class="tab-btn active-btn"><span>South America</span></li>
                            <li data-tab="#canada" class="tab-btn"><span>Canada</span></li>
                            <li data-tab="#australia" class="tab-btn"><span>Australia</span></li>
                            <li data-tab="#dubai" class="tab-btn"><span>Dubai</span></li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="south-america">
                                <div class="location-one__tab-content-box">
                                    <div class="location-one__tab-content-box-inner">
                                        <div class="location-one__bg"
                                            style="background-image: url(assets/images/backgrounds/location-one-bg.png);">
                                        </div>
                                        <div class="location-one__tab-content-left">
                                            <div class="location-one__tab-content-img">
                                                <img src="/assets/images/resources/location-one-tab-content-img-1.jpg"
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
                                                            <p>30 Commercial Road <br>
                                                                Fratton, Australia</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a
                                                                    href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850 </a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="location-one__tab-content-right">
                                            <ul class="list-unstyled location-one__tab-content-time">
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Monday</p>
                                                    <h4 class="location-one__tab-content-time-box">12:00 pm - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Tuesday to Friday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Saturday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am to 3:30 pm
                                                    </h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="canada">
                                <div class="location-one__tab-content-box">
                                    <div class="location-one__tab-content-box-inner">
                                        <div class="location-one__bg"
                                            style="background-image: url(assets/images/backgrounds/location-one-bg.png);">
                                        </div>
                                        <div class="location-one__tab-content-left">
                                            <div class="location-one__tab-content-img">
                                                <img src="/assets/images/resources/location-one-tab-content-img-2.jpg"
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
                                                            <p>30 Commercial Road <br>
                                                                Fratton, Australia</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a
                                                                    href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850 </a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="location-one__tab-content-right">
                                            <ul class="list-unstyled location-one__tab-content-time">
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Monday</p>
                                                    <h4 class="location-one__tab-content-time-box">12:00 pm - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Tuesday to Friday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Saturday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am to 3:30 pm
                                                    </h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="australia">
                                <div class="location-one__tab-content-box">
                                    <div class="location-one__tab-content-box-inner">
                                        <div class="location-one__bg"
                                            style="background-image: url(assets/images/backgrounds/location-one-bg.png);">
                                        </div>
                                        <div class="location-one__tab-content-left">
                                            <div class="location-one__tab-content-img">
                                                <img src="/assets/images/resources/location-one-tab-content-img-3.jpg"
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
                                                            <p>30 Commercial Road <br>
                                                                Fratton, Australia</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a
                                                                    href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850 </a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="location-one__tab-content-right">
                                            <ul class="list-unstyled location-one__tab-content-time">
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Monday</p>
                                                    <h4 class="location-one__tab-content-time-box">12:00 pm - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Tuesday to Friday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Saturday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am to 3:30 pm
                                                    </h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="dubai">
                                <div class="location-one__tab-content-box">
                                    <div class="location-one__tab-content-box-inner">
                                        <div class="location-one__bg"
                                            style="background-image: url(assets/images/backgrounds/location-one-bg.png);">
                                        </div>
                                        <div class="location-one__tab-content-left">
                                            <div class="location-one__tab-content-img">
                                                <img src="/assets/images/resources/location-one-tab-content-img-4.jpg"
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
                                                            <p>30 Commercial Road <br>
                                                                Fratton, Australia</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a
                                                                    href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><a href="tel:9288009850 ">+92 (8800) - 9850 </a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="location-one__tab-content-right">
                                            <ul class="list-unstyled location-one__tab-content-time">
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Monday</p>
                                                    <h4 class="location-one__tab-content-time-box">12:00 pm - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Tuesday to Friday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am - 19:00 pm
                                                    </h4>
                                                </li>
                                                <li>
                                                    <p class="location-one__tab-content-day-name">Saturday</p>
                                                    <h4 class="location-one__tab-content-time-box">8:00 am to 3:30 pm
                                                    </h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location One End-->

        <!--Google Map Two Start-->
        <section class="google-map-two">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__two" allowfullscreen></iframe>

        </section>
        <!--Google Map Two End-->

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
