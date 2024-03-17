@extends('layouts/index', [
    'title' => 'Privacy Policy - HetDynamic | Learn more about us ',
])

@section('content')
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        {{-- NAVGATION BAR HERE --}}
        <x-nav/>
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
                    <h2>Privacy Policy</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Four Start-->
        <section class="about-four">
            <div class="about-four__shape-2 img-bounce">
                <img src="/assets/images/shapes/about-four-shape-2.png" alt="">
            </div>
            <div class="container">
              <div class="row">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Privacy Policy</span>
                        <div class="section-title__border-box"></div>
                    </div>
                </div>
                <p class="fw-semibold text-dark fs-6 " style="letter-spacing: .7px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque atque expedita ea asperiores fuga quia ipsam omnis eius dolore! Quo tempora iste esse necessitatibus dolorem quod nostrum animi non id reprehenderit ad delectus, eligendi similique, odit debitis exercitationem veritatis autem dolore tempore soluta voluptates. Quos, sunt voluptatibus. Doloremque voluptas doloribus nostrum libero, minus, necessitatibus reiciendis ea delectus, optio asperiores assumenda est harum illum voluptatibus magnam aliquid iste laudantium atque. Doloribus ex eveniet perferendis distinctio error dignissimos. Quis praesentium beatae debitis accusamus. Officia debitis autem voluptates, numquam aspernatur quaerat maxime, provident quam neque odit repellat nisi itaque ab fuga minima, earum fugiat perferendis ex ea quos iste excepturi. Corporis dicta asperiores sed impedit facilis voluptatum reiciendis quibusdam aliquid, ipsa itaque nobis eum id iusto rem molestiae veniam earum ad porro. Illo totam suscipit magni iste doloremque aperiam minus et magnam repellat, incidunt qui animi perspiciatis accusantium voluptatem! Eius quam, ullam ad autem voluptate id vel accusamus hic natus porro nam quidem, sequi adipisci eveniet, ipsum provident rem? Nulla, molestiae perferendis. Vero quidem nulla mollitia facere a eos placeat harum maiores assumenda recusandae delectus, nam beatae quibusdam hic ratione illo consequuntur porro tempore. Ratione molestias consequatur magni veritatis enim accusamus nam magnam.
                </p>

              </div>
            </div>
        </section>
        <!--About Four End-->



        <!--Site Footer Start-->
        <x-footer/>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="/assets/images/resources/logo-2.png"
                                                                  width="135" alt=""/></a>
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
