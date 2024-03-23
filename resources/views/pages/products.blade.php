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
                    <h2>Products</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                            <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Keywrord...">
                                </form>
                            </div>
                            <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Immigration</a></li>
                                    <li class="active"><a href="#">Visa Process</a></li>
                                    <li><a href="#">Permanent Residency</a></li>
                                    <li><a href="#">Citizenship</a></li>
                                    <li><a href="#">Government</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–9 of 12 results</p>
                                        </div>
                                        <div class="product__showing-sort">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Sort by popular</option>
                                                <option value="1">Sort by popular-01</option>
                                                <option value="2">Sort by popular-02</option>
                                                <option value="3">Sort by popular-03</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__all">
                                <div class="row">
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-1.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Boss
                                                            Sofa</a></h4>
                                                    <p class="product__all-price">$82.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-2.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Office
                                                            Chair</a></h4>
                                                    <p class="product__all-price">$78.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-3.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Long
                                                            Stool</a></h4>
                                                    <p class="product__all-price">$33.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-4.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Round
                                                            Chair</a></h4>
                                                    <p class="product__all-price">$49.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-5.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Sofa
                                                            Chair</a></h4>
                                                    <p class="product__all-price">$31.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-6.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">White
                                                            Chair</a></h4>
                                                    <p class="product__all-price">$50.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-7.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Wood
                                                            Stool</a></h4>
                                                    <p class="product__all-price">$15.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-8.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Sofa
                                                            Seat</a></h4>
                                                    <p class="product__all-price">$27.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="/assets/images/shop/shop-product-1-9.jpg" alt="">
                                                </div>
                                                <div class="product__all-content">
                                                    <div class="product__all-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4 class="product__all-title"><a href="product-details.html">Long
                                                            Chair</a></h4>
                                                    <p class="product__all-price">$86.00</p>
                                                    <div class="product__all-btn-box">
                                                        <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="products__all-icon-boxes">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->

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
