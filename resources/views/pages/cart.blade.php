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
                    <h2>Cart</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="/assets/images/shop/cart-page-img-1.jpg" alt="">
                                        </div>
                                        <h3><a href="product-details.html">Office Chair</a></h3>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-1" value="1" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>
                                    $10.99
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="/assets/images/shop/cart-page-img-2.jpg" alt="">
                                        </div>
                                        <h3><a href="product-details.html">Round Chair</a></h3>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td>
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-2" value="1" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>
                                    $10.99
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <form action="#" class="default-form cart-cupon__form">
                            <input type="text" placeholder="Enter Coupon Code" class="cart-cupon__input">
                            <button class="thm-btn" type="submit">
                                <span>Apply Coupon</span>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>$20.98 USD </span>
                            </li>
                            <li>
                                <span>Shipping cost</span>
                                <span>$0.00 USD</span>
                            </li>
                            <li>
                                <span>Total</span>
                                <span class="cart-total-amount">$20.98 USD</span>
                            </li>
                        </ul>
                        <div class="cart-page__buttons">
                            <div class="cart-page__buttons-1">
                                <a href="#" class="thm-btn">Update</a>
                            </div>
                            <div class="cart-page__buttons-2">
                                <a href="checkout.html" class="thm-btn">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cart Page-->

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
                <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="135"
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
