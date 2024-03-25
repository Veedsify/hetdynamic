@extends('../layouts/admin/adminlayout', [
    'pagedata' => $pagedata,
    'title' => 'Create New Residency  - ' . $pagedata->site_name,
    'description' => '',
    'metatags' => implode(',', ['admin, dashboard, home, index, page']),
])
@section('content')
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset($pagedata->site_logo) }}" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <aside class="left-sidebar with-vertical">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('admin') }}" class="text-nowrap logo-img p-2">
                        <img src="{{ asset($pagedata->site_logo) }}" width="70" class="dark-logo" alt="Logo-Dark">
                    </a>
                    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>


                {{-- SIDEBAR --}}
                <x-admin.sidebar />

                <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
                    <div class="hstack gap-3">
                        <div class="john-img">
                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" class="rounded-circle"
                                width="40" height="40" alt="">
                        </div>
                        <div class="john-title">
                            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                            <span class="fs-2">Designer</span>
                        </div>
                        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                            aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                            <i class="ti ti-power fs-6"></i>
                        </button>
                    </div>
                </div>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <div class="page-wrapper">
            <!--  Header Start -->
            {{-- Header start --}}
            <x-admin.header />
            {{-- Header ends --}}
            <div class="body-wrapper">
                <div class="container-fluid">
                    {{-- EDITOR HERE --}}
                    <div class="card rounded-2 overflow-hidden p-md-4 p-2">
                        <form action="{{ route('blog.new.article') }}" method="post" enctype="multipart/form-data"
                            id="newarticleform">
                            @csrf
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif

                            @if ($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            @endif

                            <div class="form-group ">
                                <input type="text" class="blog-title" id="title" name="title" value=""
                                    placeholder="Add a title ...">
                            </div>


                            <label htmlFor="featured_article_image" id="file_upload_label">
                                <p>Featured Image</p>
                                <input type="file" className="hidden d-none" id="featured_article_image"
                                    name="file" />
                                <img src="{{ asset('custom/placeholder.png') }}" alt="" width="500" />
                            </label>

                                <template>
                                    <div>
                                        <input type="text" class="form-control">
                                        <button>Remove</button>
                                    </div>
                                </template>
                            </div>


                            {{-- Highlight Features --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Highlight Features
                                </label>
                                <div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="" placeholder="Highlighted Feature">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="" placeholder="Highlighted Feature ">
                                        </div>
                                    </div>
                                </div>

                                <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Add more
                                </a>
                            </div>

                            {{-- Our Services --}}
                            <label for="" class="mb-3 d-block fw-bolder fs-4">
                                Our Services
                            </label>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="title" name="title" value=""
                                    placeholder="Services Title">
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <textarea data-editor="true" rows="5" class="form-control" id="title" name="title" value=""
                                        placeholder="First Content"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <textarea data-editor="true" rows="5" class="form-control" id="title" name="title" value=""
                                        placeholder="Second Content"></textarea>
                                </div>
                            </div>

                            {{-- Benefits Section --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Benefits Section
                                </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control py-4" id="title" name="title"
                                        value="" placeholder="Benefits Title">
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-md-12">
                                        <input class="form-control" id="title" name="title" value=""
                                            placeholder="Benefits">
                                    </div>
                                </div>
                                <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Add more
                                </a>
                            </div>

                            {{-- Requirements 1 --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Requirements Section
                                </label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Requirements Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Benefits Title">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Benefits Title 2">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <input class="form-control" id="title" name="title" value=""
                                                    placeholder="Requirements">
                                            </div>
                                        </div>
                                        <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            Add more
                                        </a>
                                    </div>

                                </div>
                            </div>

                            {{-- Requirements 2 --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Requirements Section 2
                                </label>
                                <div class="row">
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Benefits Title">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Benefits Title 2">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <input class="form-control" id="title" name="title" value=""
                                                    placeholder="Requirements">
                                            </div>
                                        </div>
                                        <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            Add more
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Requirements Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- OPTION 1 --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Options 1
                                </label>
                                <div class="row">
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Option Title">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <textarea data-editor="true" class="form-control" rows="8" id="title" name="title" value=""
                                                    placeholder="Context"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Requirements Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- Option 2 --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Options 2
                                </label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Option Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Option Title">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <textarea data-editor="true" class="form-control" rows="8" id="title" name="title" value=""
                                                    placeholder="Context"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Option 3 --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Options 3
                                </label>
                                <div class="row">
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Option Title">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <textarea data-editor="true" class="form-control" rows="8" id="title" name="title" value=""
                                                    placeholder="Context"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Option Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Extra Requirements --}}
                            <div class="mb-3">
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Extra Requirements
                                </label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Option Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Requirements Title">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <textarea data-editor="true" class="form-control" rows="8" id="title" name="title" value=""
                                                    placeholder="Context"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- MANDATORY REQUIREMENTS --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Mandatory Requirements
                                </label>
                                <div>
                                    <div class="">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                            </label>
                                            <input type="text" class="form-control py-2" id="requirement_image"
                                                name="requirement_image" value="" placeholder="Requirements Title">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Requirements Title">
                                        </div>
                                        <div class="col-md-6">
                                            <textarea data-editor="true" class="form-control w-100" rows="8" id="title" name="title"
                                                value="" placeholder="Context"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- Add this closing div tag -->
                                <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Add more
                                </a>
                            </div>

                            {{-- Timeline of Events --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Timeline Of Events
                                </label>
                                <div>
                                    <div class="">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                            </label>
                                            <input type="text" class="form-control py-2" id="requirement_image"
                                                name="requirement_image" value="" placeholder="Requirements Title">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Requirements Title">
                                        </div>
                                        <div class="col-md-6">
                                            <textarea data-editor="true" class="form-control w-100" rows="8" id="title" name="title"
                                                value="" placeholder="Context"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- Add this closing div tag -->
                                <a href="javascript:void()" class="text-success d-inline-block mb-5 my-2">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Add more
                                </a>
                            </div>

                            {{-- Sponship Section --}}
                            <div>
                                <label for="" class="mb-3 d-block fw-bolder fs-4">
                                    Sponsorship Section
                                </label>
                                <div class="row">
                                    <div class="col-md-6 pt-4">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control py-2" id="title"
                                                name="title" value="" placeholder="Option Title">
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <textarea data-editor="true" class="form-control" rows="8" id="title" name="title" value=""
                                                    placeholder="Context"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group
                                        mb-3">
                                            <label for="requirement_image">
                                                Option Image
                                                <input type="file" class="form-control py-2" id="requirement_image"
                                                    name="requirement_image" value=""
                                                    placeholder="Requirements Title">
                                                <img class="img-fluid object-fit-cover border" width="100%"
                                                    src="{{ asset('custom/placeholder.png') }}" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="form-group ">
                        @if ($errors->has('tags'))
                            <p class="text-danger">{{ $errors->first('tags') }}</p>
                        @endif
                        <input type="text" class="blog-title slim-title" id="tags" name="tags"
                            value="{{ old('tags') }}" placeholder="Tags here comma seperated">
                    </div>
                    <div class="form-group ">
                        <select type="text" class="blog-title slim-title" id="category" name="category">
                            <option value="" selected disabled>{--- Select Country ---}</option>
                            {{-- @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach --}}
                        </select>
                    </div>
                    @if ($errors->has('description'))
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    @endif
                    <div class="form-group ">
                        <label class="fw-bold fs-4">
                            Active Status
                        </label>
                        <select type="text" class="blog-title slim-title" id="status" name="status">
                            <option value="active" selected>Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="px-5 py-4 btn btn-primary">Publish</button>
                    </div>
                    </form>
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

    <!--  Shopping Cart -->
    </div>
    <div class="dark-transparent sidebartoggler"></div>
@endsection
