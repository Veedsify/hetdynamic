@extends('layouts/index', [
    'title' => 'Home - HetDynamic',
    'description'=> '',
    'image' => '/assets/images/backgrounds/page-header-bg.jpg',
    'meta_tags' =""
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
                    <h2>Blog Sidebar</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Blog Sidebar</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Sidebar Start-->
        <section class="blog-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-sidebar__left">
                            <div class="blog-sidebar__content-box">
                                <div class="blog-sidebar__single">
                                    <div class="blog-sidebar__img">
                                        <img src="/assets/images/blog/blog-sidebar-1-1.jpg" alt="">
                                        <div class="blog-sidebar__date">
                                            <p>20 <span>Feb</span></p>
                                        </div>
                                    </div>
                                    <div class="blog-sidebar__content">
                                        <ul class="blog-sidebar__meta list-unstyled">
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-user-circle"></i>by
                                                    Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-comments"></i>02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-sidebar__title"><a href="blog-details.html">How to Ensure Direct
                                                for the
                                                Hassle-Free Visa Process</a></h3>
                                        <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                            Ipsum available, but majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum.</p>
                                        <div class="blog-sidebar__btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-sidebar__single">
                                    <div class="blog-sidebar__img">
                                        <img src="/assets/images/blog/blog-sidebar-1-2.jpg" alt="">
                                        <div class="blog-sidebar__date">
                                            <p>20 <span>Feb</span></p>
                                        </div>
                                    </div>
                                    <div class="blog-sidebar__content">
                                        <ul class="blog-sidebar__meta list-unstyled">
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-user-circle"></i>by
                                                    Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-comments"></i>02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-sidebar__title"><a href="blog-details.html">Vaccination
                                                Requirements for
                                                Immigrant Visa Applicants</a></h3>
                                        <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                            Ipsum available, but majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum.</p>
                                        <div class="blog-sidebar__btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-sidebar__single">
                                    <div class="blog-sidebar__img">
                                        <img src="/assets/images/blog/blog-sidebar-1-3.jpg" alt="">
                                        <div class="blog-sidebar__date">
                                            <p>20 <span>Feb</span></p>
                                        </div>
                                    </div>
                                    <div class="blog-sidebar__content">
                                        <ul class="blog-sidebar__meta list-unstyled">
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-user-circle"></i>by
                                                    Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html"><i class="fas fa-comments"></i>02
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="blog-sidebar__title"><a href="blog-details.html">Citizenship Concept
                                                on How to Become
                                                a UK Resident</a></h3>
                                        <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                            Ipsum available, but majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum.</p>
                                        <div class="blog-sidebar__btn">
                                            <a href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-sidebar__bottom-box">
                                <div class="blog-sidebar__bottom-box-icon">
                                    <img src="/assets/images/icon/blog-sidebar-bottom-box-icon.png" alt="">
                                </div>
                                <p class="blog-sidebar__bottom-box-text">There are many variations of passages of Lorem
                                    Ipsum available, but majority have suffered alteration in some form, by injected
                                    humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <div class="blog-sidebar__provide-services">
                                <div class="blog-sidebar__provide-services-icon">
                                    <a href="blog-details.html"><img
                                            src="/assets/images/icon/blog-sidebar-provide-services-icon.png"
                                            alt=""></a>
                                </div>
                                <h3 class="blog-sidebar__provide-services-title"><a href="blog-details.html">Providing
                                        the Best Visa Services</a></h3>
                            </div>
                            <div class="blog-sidebar__load-more">
                                <a href="blog-details.html" class="thm-btn blog-sidebar__load-more-btn">Load More
                                    Posts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 blog-sidebar__col">
                        <div class="blog-sidebar__right">
                            <div class="sidebar">
                                <div class="sidebar__search">
                                    <form action="#" class="sidebar__search-form">
                                        <input type="search" placeholder="Keywrord...">
                                        <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                    </form>
                                </div>
                                <div class="sidebar__post">
                                    <h3 class="sidebar__title">Latest Posts</h3>
                                    <ul class="sidebar__post-list list-unstyled">
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="/assets/images/blog/lp-1-1.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <a href="blog-details.html">Learn How to Apply for <br> a Canada
                                                        Visa</a>
                                                </h3>
                                                <span class="sidebar__post-content-meta"><i class="fas fa-clock"></i>20
                                                    Feb, 2023</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="/assets/images/blog/lp-1-2.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <a href="blog-details.html">Bring to the table <br> win-win
                                                        survival</a>
                                                </h3>
                                                <span class="sidebar__post-content-meta"><i class="fas fa-clock"></i>20
                                                    Feb, 2023</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="/assets/images/blog/lp-1-3.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <div class="sidebar__post-content">
                                                    <h3>
                                                        <a href="blog-details.html">There are many <br> variations
                                                            of</a>
                                                    </h3>
                                                    <span class="sidebar__post-content-meta"><i
                                                            class="fas fa-clock"></i>20
                                                        Feb, 2023</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__category">
                                    <h3 class="sidebar__title">Categories</h3>
                                    <ul class="sidebar__category-list list-unstyled">
                                        <li><a href="blog-details.html">Immigration<span
                                                    class="fas fa-caret-right"></span></a>
                                        </li>
                                        <li><a href="blog-details.html">Visa Process<span
                                                    class="fas fa-caret-right"></span></a>
                                        </li>
                                        <li><a href="blog-details.html">Permanent Residency<span
                                                    class="fas fa-caret-right"></span></a>
                                        </li>
                                        <li><a href="blog-details.html">Citizenship<span
                                                    class="fas fa-caret-right"></span></a>
                                        </li>
                                        <li><a href="blog-details.html">Government<span
                                                    class="fas fa-caret-right"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__project">
                                    <h3 class="sidebar__title">Projects</h3>
                                    <div class="sidebar__project-box">
                                        <div class="sidebar__project-carousel owl-carousel owl-theme thm-owl__carousel"
                                            data-owl-options='{
                                            "loop": true,
                                            "autoplay": true,
                                            "margin": 30,
                                            "nav": false,
                                            "dots": true,
                                            "smartSpeed": 500,
                                            "autoplayTimeout": 10000,
                                            "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                            "responsive": {
                                                "0": {
                                                    "items": 1
                                                },
                                                "768": {
                                                    "items": 1
                                                },
                                                "992": {
                                                    "items": 1
                                                },
                                                "1200": {
                                                    "items": 1
                                                }
                                            }
                                        }'>
                                            <div class="item">
                                                <div class="sidebar__project-single">
                                                    <div class="sidebar__project-bg"
                                                        style="background-image: url(assets/images/backgrounds/sidebar-project-bg.jpg);">
                                                    </div>
                                                    <p>Traveling Visa</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="sidebar__project-single">
                                                    <div class="sidebar__project-bg"
                                                        style="background-image: url(assets/images/backgrounds/sidebar-project-bg-2.jpg);">
                                                    </div>
                                                    <p>Student Visa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar__tags">
                                    <h3 class="sidebar__title">Tags</h3>
                                    <div class="sidebar__tags-list">
                                        <a href="#">Immigration</a>
                                        <a href="#">Citizenship</a>
                                        <a href="#">Visa</a>
                                        <a href="#">Traveling</a>
                                        <a href="#">Consulting</a>
                                    </div>
                                </div>
                                <div class="sidebar__comments">
                                    <h3 class="sidebar__title">Comments</h3>
                                    <ul class="sidebar__comments-list list-unstyled">
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p>A Wordpress Commenter
                                                    <br> on Launch New Mobile App
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p> <span>John Doe</span> on Template:
                                                    Comments</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p>A Wordpress Commenter on
                                                    <br> Launch New Mobile App
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__comments-icon">
                                                <i class="fas fa-comment"></i>
                                            </div>
                                            <div class="sidebar__comments-text-box">
                                                <p> <span>John Doe</span> on Template:
                                                    Comments</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Sidebar End-->

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
                <a href="/" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="135"
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
