@extends('../layouts/admin/adminlayout')
@section('content')
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset($pagedata->site_logo) }}" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <x-admin.aside />
        <!--  Sidebar End -->
        <div class="page-wrapper">
            {{-- Header start --}}
            <x-admin.header />
            {{-- Header ends --}}
            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h4 class="fw-semibold mb-8">Notification</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none" href="/admin">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Notification</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <div class="text-center mb-n5">
                                        <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt=""
                                            class="img-fluid mb-n4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content searchable-container list">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <form class="position-relative">
                                        <input type="text" class="form-control product-search ps-5" id="input-search"
                                            placeholder="Search Article...">
                                        <i
                                            class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                    </form>
                                </div>
                                <div
                                    class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                    <div class="action-btn show-btn">
                                        <a href="javascript:void(0)"
                                            class="delete-multiple bg-danger-subtle btn me-2 text-danger d-flex align-items-center ">
                                            <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                           <!-- start notification  -->
                                <!-- ------------------------------- -->

                                    <div>

                                        <div class="mb-3">
                                            <div class="d-md-flex items-center border rounded-2">

                                            <a href="javascript:void(0)"
                                                class="py-6 px-7 d-flex    w-100">
                                                <span class="me-3">
                                                    <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                        alt="user" class="rounded-circle" width="48"
                                                        height="48">
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ">
                                                    <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Congratulate
                                                        him
                                                        <small class="ms-3 d-md-inline-block  d-none">
                                                            1hr ago
                                                        </small>
                                                    </span>
                                                </div>
                                            </a>

                                            <div class="text-end  p-2 justify-content-center d-md-flex flex-column ms-auto">


                                                <i class="ti ti-trash fs-5"></i>

                                            </div>

                                            </div>


                                        </div>
                                        <div >
                                            <div class="d-md-flex items-center border rounded-2">

                                            <a href="javascript:void(0)"
                                                class="py-6 px-7 d-flex    w-100">
                                                <span class="me-3">
                                                    <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                        alt="user" class="rounded-circle" width="48"
                                                        height="48">
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ">
                                                    <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Congratulate
                                                        him
                                                        <small class="ms-3 d-md-inline-block  d-none">
                                                            1hr ago
                                                        </small>
                                                    </span>
                                                </div>
                                            </a>

                                            <div class="text-end  p-2 justify-content-center d-md-flex flex-column ms-auto">


                                                <i class="ti ti-trash fs-5"></i>

                                            </div>

                                            </div>


                                        </div>
                                        <div class="py-6 px-7 mb-1  ">
                                            <button class="btn btn-outline-primary md-w ms-auto d-block" >Mark all as read
                                            </button>
                                        </div>

                                    </div>
                                <!-- ------------------------------- -->
                                <!-- end notification  -->
                    </div>
                </div>
            </div>
        </div>






    </div>
    <div class="dark-transparent sidebartoggler"></div>
@endsection
