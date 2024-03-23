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
                    <h2>Product Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Details Start-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img">
                            <img src="/assets/images/shop/product-details-img-1.jpg" alt="" />
                            <div class="product-details__img-search">
                                <a class="img-popup" href="/assets/images/shop/product-details-img-1.jpg"><span
                                        class="icon-magnifying-glass"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <h3 class="product-details__title">Office Chair <span>$78.00</span> </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>2 customer reviews</span>
                        </div>
                        <div class="product-details__content">
                            <p class="product-details__content-text1">Aliquam hendrerit a augue insuscipit. Etiam
                                aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit
                                convallis dignissim onec vel pellentesque neque.</p>
                            <p class="product-details__content-text2">REF. 4231/406 <br>
                                Available in store</p>
                        </div>

                        <div class="product-details__quantity">
                            <h3 class="product-details__quantity-title">Quantity</h3>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="1" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>


                        <div class="product-details__buttons">
                            <div class="product-details__buttons-1">
                                <a href="product-details.html" class="thm-btn">Add to Wishlist</a>
                            </div>

                            <div class="product-details__buttons-2">
                                <a href="cart.html" class="thm-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-details__social">
                            <div class="title">
                                <h3>Share with Friends</h3>
                            </div>
                            <div class="product-details__social-link">
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-facebook"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product Details End-->

        <!--Product Description Start-->
        <section class="product-description">
            <div class="container">
                <h3 class="product-description__title">Description</h3>
                <p class="product-description__text1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci
                    phaedrum. There are many variations of passages of Lorem Ipsum available, but the majority have
                    alteration in some injected or words which don't look even slightly believable. If you are going to
                    use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the
                    middle of text.</p>
                <div class="product-description__list">
                    <ul class="list-unstyled">
                        <li>
                            <p><span class="icon-right-arrow"></span> Nam at elit nec neque suscipit gravida.</p>
                        </li>
                        <li>
                            <p><span class="icon-right-arrow"></span> Aenean egestas orci eu maximus tincidunt.</p>
                        </li>
                        <li>
                            <p><span class="icon-right-arrow"></span> Curabitur vel turpis id tellus cursus laoreet.
                            </p>
                        </li>
                    </ul>
                </div>
                <p class="product-description__tex2">All the Lorem Ipsum generators on the Internet tend to repeat
                    predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                    dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                    generate Lorem Ipsum which looks reasonable. </p>
            </div>
        </section>
        <!--Product Description End-->

        <!--Review One Start-->
        <section class="review-one">
            <div class="container">
                <div class="comments-area">
                    <div class="review-one__title">
                        <h3>2 Reviews</h3>
                    </div>
                    <!--Start Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb">
                                <figure class="thumb"><img src="/assets/images/shop/review-1-1.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-one__content">
                                <div class="review-one__content-top">
                                    <div class="info">
                                        <h2>Kevin Martin <span>20 Mar, 2023 . 4:00 pm</span></h2>
                                    </div>
                                    <div class="reply-btn">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="review-one__content-bottom">
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting unchanged. It was popularised in the sheets containing lorem ipsum
                                        is simply free text. Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos himenaeos. Vestibulum sollicitudin varius mauris non
                                        dignissim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Comment Box-->

                    <!--Start Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb">
                                <figure class="thumb"><img src="/assets/images/shop/review-1-2.jpg" alt="">
                                </figure>
                            </div>

                            <div class="review-one__content">
                                <div class="review-one__content-top">
                                    <div class="info">
                                        <h2>Sarah Albert <span>20 Mar, 2023 . 4:00 pm</span></h2>
                                    </div>
                                    <div class="reply-btn">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="review-one__content-bottom">
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting unchanged. It was popularised in the sheets containing lorem ipsum
                                        is simply free text. Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos himenaeos. Vestibulum sollicitudin varius mauris non
                                        dignissim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Comment Box-->
                </div>
            </div>
        </section>
        <!--Review One End-->

        <!--Start Review Form-->
        <section class="review-form-one">
            <div class="container">
                <div class="review-form-one__inner">
                    <h3 class="review-form-one__title">Add a Review</h3>
                    <div class="review-form-one__rate-box">
                        <p class="review-form-one__rate-text">Rate this Product?</p>
                        <div class="review-form-one__rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <form action="assets/inc/sendemail.php" class="review-form-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="review-form-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Write  a Comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="review-form-one__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="review-form-one__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <button type="submit" class="thm-btn review-form-one__btn">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!--End Review Form-->

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
