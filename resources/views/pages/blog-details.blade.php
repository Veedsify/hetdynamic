@extends('layouts/index', [
    'title' => $article->title . ' | HetDynamic',
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
            <div class="page-header-bg" style="background-image: url({{ $article->image }})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ ucfirst($article->title) }}</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">{{ $article->title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img-box">
                                <img src="{{ $article->image }}" alt=""
                                    style="aspect-ratio:16/9; object-fit:cover;">
                                <div class="blog-details__date">
                                    <p>20 <span>Feb</span></p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="blog-details__meta list-unstyled mb-5">
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-user-circle"></i>by
                                            {{ \App\Models\User::where('id', $article->user_id)->first()->fullname }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-comments"></i>
                                            {{ \App\Models\BlogComment::where('blog_id', $article->id)->count() }}
                                            {{ \App\Models\BlogComment::where('blog_id', $article->id)->count() > 1 ? 'Comments' : 'Comment' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><i class="fas fa-box"></i>
                                            {{ \App\Models\Category::where('id', $article->category)->first()->name }}
                                        </a>
                                    </li>
                                </ul>
                                {{--                                <h3 class="blog-details__title">{{ $article->title }}</h3> --}}
                                {{-- <div class="blog-details__text-1">{!! $article->content_html !!}</div> --}}
                                <div class="blog-details__text-1">
                                    <div id="app2"></div>
                                </div>

                            </div>
                            <div class="blog-details__bottom">
                                <p class="blog-details__tags mb-4 gap-2">
                                    <span>Tags</span>
                                    @php
                                        $tags = explode(',', $article->tags);
                                    @endphp

                                    @foreach ($tags as $tag)
                                        <a class="d-inline-block m-1" href="/tags/">{{ trim($tag) }}</a>
                                    @endforeach
                                </p>
                                <div class="blog-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            {{-- BLOG DETAILS NEXT --}}
                            <div class="blog-details__pagenation">
                                <div class="blog-details__pagenation-left">
                                    <div class="blog-details__pagenation-left-img">
                                        <img src="/assets/images/blog/blog-details-pagenation-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-details__pagenation-left-content">
                                        <h4 class="blog-details__pagenation-left-title"><a href="#">How to Ensure
                                                Direct
                                                for the <br> Hassle-Free Visa Process</a></h4>
                                        <p class="blog-details__pagenation-left-date"><i class="fas fa-clock"></i> 20
                                            Feb, 2023</p>
                                    </div>
                                </div>
                                <div class="blog-details__pagenation-right">
                                    <div class="blog-details__pagenation-right-content">
                                        <h4 class="blog-details__pagenation-right-title"><a href="#">Citizenship
                                                Concept
                                                on How to <br> Become a UK Resident</a></h4>
                                        <p class="blog-details__pagenation-right-date"><i class="fas fa-clock"></i> 20
                                            Feb, 2023</p>
                                    </div>
                                    <div class="blog-details__pagenation-right-img">
                                        <img src="/assets/images/blog/blog-details-pagenation-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            {{-- BLOG DETAILS END --}}
                            <div class="comment-one">
                                <h3 class="comment-one__title">
                                    <span>({{ \App\Models\BlogComment::where('blog_id', $article->id)->count() }})</span>
                                    Comments
                                </h3>
                                @foreach ($comments as $comment)
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="https://images.pexels.com/photos/20440051/pexels-photo-20440051/free-photo-of-a-woman-leaning-against-a-railing-with-her-hand-on-her-chin.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
                                                class="object-fit-square" alt="" width="100">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>{{ $comment->name }}</h3>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                @if (\App\Models\BlogComment::where('blog_id', $article->id)->count() > 3)
                                    <div class="mb-4">
                                        <a href="/comments/{{ $article->slug }}/all" class="text-primary fw-bold">View
                                            All Comments</a>
                                    </div>
                                @endif
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="{{ route('comment.new', $article->slug) }}" method="post"
                                    class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write  a Comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    Comment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
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
                                    <h3 class="sidebar__title">Related Posts</h3>
                                    <ul class="sidebar__post-list list-unstyled">
                                        @foreach ($relatedArticles as $relatedArticle)
                                            <li>
                                                <div class="sidebar__post-image">
                                                    <img src="{{ $relatedArticle->image }}" alt="">
                                                </div>
                                                <div class="sidebar__post-content">
                                                    <h3>
                                                        <a
                                                            href="{{ route('blog.details', $relatedArticle->slug) }}">{{ $relatedArticle->title }}</a>
                                                    </h3>
                                                    <span class="sidebar__post-content-meta"><i
                                                            class="fas fa-clock"></i>{{ $relatedArticle->created_at->format('d, M, Y') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="sidebar__category">
                                    <h3 class="sidebar__title">Categories</h3>
                                    <ul class="sidebar__category-list list-unstyled">
                                        @foreach ($categories as $category)
                                            <li><a href="/categories/{{ $category->slug }}">
                                                    {{ $category->name }}
                                                    <span class="fas fa-caret-right"></span></a>
                                            </li>
                                        @endforeach
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
                                                        style="background-image: url(/assets/images/backgrounds/sidebar-project-bg.jpg);">
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
                                        <a href="#">
                                            {{ $article->tags }}
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar__comments">
                                    <h3 class="sidebar__title">Comments</h3>
                                    <ul class="sidebar__comments-list list-unstyled">

                                        @foreach ($comments as $comment)
                                            <li>
                                                <div class="sidebar__comments-icon">
                                                    <i class="fas fa-comment"></i>
                                                </div>
                                                <div class="sidebar__comments-text-box">
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </li>
                                            @if ($loop->index > 3)
                                            @break
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->

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
