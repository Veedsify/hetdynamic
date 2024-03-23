@extends('layouts/index', [
    'title' => 'Login - HetDynamic | Signin to your account ',
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
                    <h2>Login</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Login Page Start-->
        <section class="login-page">
            <div class="container">
                <div class="login-page__top">
                    <p>We have a demo account setup. <span>Username:</span> <a href="#">demo</a> <span>and
                            Password:</span> <a href="#">demo</a></p>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="login-page__single">
                            <h3 class="login-page__title">Login</h3>
                            <form class="login-page__form">
                                <div class="login-page__form-input-box">
                                    <input type="email" placeholder="Username or Email Address*">
                                </div>
                                <div class="login-page__form-input-box">
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper2" id="skipper2" checked="">
                                    <label for="skipper2"><span></span>Remember Me?</label>
                                </div>
                                <div class="login-page__form-btn-box">
                                    <button type="submit" class="thm-btn login-page__form-btn">Login</button>
                                    <div class="login-page__form-forgot-password">
                                        <a href="#">Forgot your Passowrd?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="login-page__single">
                            <h3 class="login-page__title">Register</h3>
                            <form class="login-page__form">
                                <div class="login-page__form-input-box">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div class="login-page__form-input-box">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="login-page__form-input-box">
                                    <input type="Password" placeholder="Password">
                                </div>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper3" id="skipper3" checked="">
                                    <label for="skipper3"><span></span>I accept company privacy policy.</label>
                                </div>
                                <div class="login-page__form-btn-box">
                                    <button type="submit" class="thm-btn login-page__form-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Login Page End-->

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
    {{-- @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/app2.jsx') --}}
@endsection
