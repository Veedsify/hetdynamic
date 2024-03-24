@extends('../layouts/admin/adminlayout', [
    'pagedata' => $pagedata,
    'title' => '',
    'description' => '',
      'metatags' => implode(',', ['admin, dashboard, home, index, page']),
])
@section('content')
    {{-- <div class="preloader">
        <img src="{{ $pagedata->site_logo }}" alt="loader" class="lds-ripple img-fluid">
    </div> --}}
    <div id="main-wrapper">
        <!--  Sidebar End -->
        <div class="page-wrapper">
            {{-- aside --}}
            <x-admin.aside />
            {{-- Header start --}}
            <x-admin.header />
            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h4 class="fw-semibold mb-8">User Profile</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none" href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">User Profile</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <div class="text-center mb-n5">
                                        <img src="../assets/images/breadcrumb/ChatBc.png" alt=""
                                            class="img-fluid mb-n4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden">
                        <div class="card-body p-0">
                            <img src="{{ asset(auth()->user()->avatar) }}" alt="" class="w-100 object-fit-cover"
                                height="200" style="">
                            <div class="row align-items-center">
                                <div class="col-lg-4 order-lg-1 order-2">
                                    <div class="d-flex align-items-center justify-content-around m-4">
                                        <div class="text-center">
                                            <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                                            <h4 class="mb-0 fw-semibold lh-1">
                                                {{ number_format($blogs->count()) }}
                                            </h4>
                                            <p class="mb-0 fs-4">Article{{ $blogs->count() > 1 ? 's' : '' }}</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                                            <h4 class="mb-0 fw-semibold lh-1">
                                                {{ $addresses }}
                                            </h4>
                                            <p class="mb-0 fs-4">Addresses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                                    <div class="mt-n5">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <div class="d-flex align-items-center justify-content-center round-110">
                                                <div
                                                    class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                                                    <img src="{{ asset(auth()->user()->avatar) }}" alt=""
                                                        class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h5 class="fs-5 mb-0 fw-semibold">
                                                {{ auth()->user()->fullname }}
                                            </h5>
                                            <p class="mb-0 fs-4">
                                                {{ auth()->user()->role }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-none border">
                                        <div class="card-body">
                                            <h4 class="fw-semibold mb-3">Bio Data</h4>
                                            {{-- <p></p> --}}
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                    <i class="ti ti-briefcase text-dark fs-6"></i>
                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                        {{ auth()->user()->role }}
                                                    </h6>
                                                </li>
                                                <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                    <i class="ti ti-mail text-dark fs-6"></i>
                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                        {{ auth()->user()->email }}
                                                    </h6>
                                                </li>
                                                <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                    <i class="ti ti-user text-dark fs-6"></i>
                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                        {{ auth()->user()->user_id }}
                                                    </h6>
                                                </li>
                                                <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                        <a href="#" class="btn btn-sm btn-success">
                                                            Edit User
                                                        </a>
                                                    </h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="card shadow-none border">
                                        <div class="card-body">
                                            <h4 class="fw-semibold mb-3">Photos</h4>
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-2.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-3.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-4.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-5.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-6.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-7.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-9">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-8.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-6">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-9.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-6">
                                                </div>
                                                <div class="col-4">
                                                    <img src="../assets/images/profile/user-10.jpg" alt=""
                                                        class="rounded-2 img-fluid mb-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        @foreach ($blogs as $blog)
                                            <div class="card-body border-bottom">
                                                <div class="d-flex align-items-center gap-6 flex-wrap">
                                                    <img src="
                                                        {{ $blog->user->avatar }}
                                                    "
                                                        alt="" class="rounded-circle" width="40" height="40">
                                                    <h6 class="fw-semibold mb-0 fs-4">
                                                        {{ $blog->user->fullname }}
                                                    </h6>
                                                    <span class="fs-2"><span
                                                            class="p-1 text-bg-light rounded-circle d-inline-block"></span>
                                                        {{ $blog->created_at->diffForHumans() }}
                                                    </span>
                                                </div>
                                                <h4 class="text-dark my-3 fw-bold">
                                                    {{ $blog->title }}
                                                </h4>
                                                <p class="text-dark my-3">
                                                    {{ $blog->description }}
                                                </p>
                                                <img src="
                                                    {{ asset($blog->image) }}
                                                "
                                                    alt="" height="360" class="rounded-4 w-100 object-fit-cover">
                                                <div class="d-flex align-items-center my-3">
                                                    <div class="d-flex align-items-center gap-2 ms-4">
                                                        <a class="d-flex align-items-center justify-content-center text-bg-secondary p-2 fs-4 rounded-circle"
                                                            href="javascript:void(0)" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Comment">
                                                            <i class="ti ti-message-2"></i>
                                                        </a>
                                                        <span class="text-dark fw-semibold">
                                                            {{ $blog->comments->count() }}
                                                        </span>
                                                    </div>
                                                    <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                                        href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Share"
                                                        onclick="navigator.share({ title: 'Share', url: '{{ route('blog.details', $blog->slug) }}' })">
                                                        <i class="ti ti-share"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Search Bar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                    <div class="modal-header border-bottom">
                        <input type="search" class="form-control fs-3" placeholder="Search here" id="search">
                        <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                            <i class="ti ti-x fs-5 ms-3"></i>
                        </a>
                    </div>
                    <div class="modal-body message-body" data-simplebar="">
                        <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                        <ul class="list mb-0 py-2">
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Detail</span>
                                    <span
                                        class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Detail</span>
                                    <span
                                        class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3 text-dark fw-normal d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
