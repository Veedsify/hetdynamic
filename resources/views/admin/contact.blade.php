@extends('../layouts/admin/adminlayout')
@section('content')
    <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body hstack align-items-start gap-6">
            <i class="ti ti-alert-circle fs-6"></i>
            <div>
                <h5 class="text-white fs-3 mb-1">Welcome to Modernize</h5>
                <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('admin-assets/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('assets/custom/resources/hetlogo.png') }}" style="filter:invert(1);"
                            width="150" class="dark-logo" alt="Logo-Dark">
                        <img src="{{ asset('assets/custom/resources/hetlogo.png') }}" style="filter:invert(1);"
                            width="150" class="light-logo" alt="Logo-light">
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
                                    <h4 class="fw-semibold mb-8">Contact</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none" href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Contact</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <div class="text-center mb-n5">
                                        <img src="{{asset('admin-assets/images/breadcrumb/ChatBc.png')}}" alt=""
                                            class="img-fluid mb-n4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content searchable-container list">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-3">
                                    <form class="position-relative">
                                        <input type="text" class="form-control product-search ps-5" id="input-search"
                                            placeholder="Search Contacts...">
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
                                    <a href="javascript:void(0)" id="btn-add-contact"
                                        class="btn btn-primary d-flex align-items-center">
                                        <i class="ti ti-users text-white me-1 fs-5"></i> Add Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
                            aria-labelledby="addContactModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex align-items-center">
                                        <h5 class="modal-title">Contact</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="add-contact-box">
                                            <div class="add-contact-content">
                                                <form id="addContactModalTitle">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 contact-name">
                                                                <input type="text" id="c-name" class="form-control"
                                                                    placeholder="Name">
                                                                <span class="validation-text text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 contact-email">
                                                                <input type="text" id="c-email" class="form-control"
                                                                    placeholder="Email">
                                                                <span class="validation-text text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 contact-occupation">
                                                                <input type="text" id="c-occupation"
                                                                    class="form-control" placeholder="Occupation">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 contact-phone">
                                                                <input type="text" id="c-phone" class="form-control"
                                                                    placeholder="Phone">
                                                                <span class="validation-text text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3 contact-location">
                                                                <input type="text" id="c-location"
                                                                    class="form-control" placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-flex gap-6 m-0">
                                            <button id="btn-add" class="btn btn-success rounded-pill">Add</button>
                                            <button id="btn-edit" class="btn btn-success rounded-pill">Save</button>
                                            <button class="btn bg-danger-subtle text-danger rounded-pill"
                                                data-bs-dismiss="modal"> Discard
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body">
                            <div class="table-responsive">
                                <table class="table search-table align-middle text-nowrap">
                                    <thead class="header-item">
                                        <th>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input primary"
                                                        id="contact-check-all">
                                                    <label class="form-check-label" for="contact-check-all"></label>
                                                    <span class="new-control-indicator"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox1">
                                                        <label class="form-check-label" for="checkbox1"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                        alt="avatar" class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Emma Adams">Emma
                                                                Adams</h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Web Developer">Web Developer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="adams@mail.com">adams@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Boston, USA">Boston,
                                                    USA</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070)
                                                    123-4567</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox2">
                                                        <label class="form-check-label" for="checkbox2"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('admin-assets/images/profile/user-2.jpg') }}"
                                                        alt="avatar" class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Olivia Allen">
                                                                Olivia Allen</h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Web Designer">Web Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="allen@mail.com">allen@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Sydney, Australia">Sydney,
                                                    Australia</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125)
                                                    450-1500</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox3">
                                                        <label class="form-check-label" for="checkbox3"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-4.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Isabella Anderson">
                                                                Isabella Anderson </h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="UX/UI Designer">UX/UI Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="anderson@mail.com">anderson@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Miami, USA">Miami,
                                                    USA</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100)
                                                    154-1254</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox4">
                                                        <label class="form-check-label" for="checkbox4"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-5.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Amelia Armstrong">
                                                                Amelia Armstrong </h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Ethical Hacker">Ethical Hacker</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="armstrong@mail.com">armstrong@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Tokyo, Japan">Tokyo,
                                                    Japan</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154)
                                                    199- 1540</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox5">
                                                        <label class="form-check-label" for="checkbox5"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-6.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Emily Atkinson">
                                                                Emily Atkinson </h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Web developer">Web developer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="atkinson@mail.com">atkinson@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Edinburgh, UK">Edinburgh,
                                                    UK</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900)
                                                    150- 1500</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <!-- start row -->
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox6">
                                                        <label class="form-check-label" for="checkbox6"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-7.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Sofia Bailey">
                                                                Sofia Bailey</h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="UX/UI Designer">UX/UI Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="bailey@mail.com">bailey@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="New York, USA">New York,
                                                    USA</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001)
                                                    160- 1845</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox7">
                                                        <label class="form-check-label" for="checkbox7"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-8.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Victoria Sharma">
                                                                Victoria Sharma </h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Project Manager">Project
                                                                Manager</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="sharma@mail.com">sharma@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Miami, USA">Miami,
                                                    USA</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110)
                                                    180- 1600</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="search-items">
                                            <td>
                                                <div class="n-chk align-self-center text-center">
                                                    <div class="form-check">
                                                        <input type="checkbox"
                                                            class="form-check-input contact-chkbox primary"
                                                            id="checkbox8">
                                                        <label class="form-check-label" for="checkbox8"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{asset('admin-assets/images/profile/user-9.jpg')}}" alt="avatar"
                                                        class="rounded-circle" width="35">
                                                    <div class="ms-3">
                                                        <div class="user-meta-info">
                                                            <h6 class="user-name mb-0" data-name="Penelope Baker">
                                                                Penelope Baker </h6>
                                                            <span class="user-work fs-3"
                                                                data-occupation="Web Developer">Web Developer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="usr-email-addr"
                                                    data-email="baker@mail.com">baker@mail.com</span>
                                            </td>
                                            <td>
                                                <span class="usr-location" data-location="Edinburgh, UK">Edinburgh,
                                                    UK</span>
                                            </td>
                                            <td>
                                                <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405)
                                                    483- 4512</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="javascript:void(0)" class="text-primary edit">
                                                        <i class="ti ti-eye fs-5"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--  Shopping Cart -->
        <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header justify-content-between py-4">
                <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
                    Shopping Cart
                </h5>
                <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
            </div>
            <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar="">
                <ul class="mb-0">
                    <li class="pb-7">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('admin-assets/images/products/product-1.jpg')}}" width="95" height="75"
                                class="rounded-1 me-9 flex-shrink-0" alt="">
                            <div>
                                <h6 class="mb-1">Supreme toys cooker</h6>
                                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                    <div class="input-group input-group-sm w-50">
                                        <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                            type="button" id="add1">
                                            -
                                        </button>
                                        <input type="text"
                                            class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                            placeholder="" aria-label="Example text with button addon"
                                            aria-describedby="add1" value="1">
                                        <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                            type="button" id="addo2">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="pb-7">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('admin-assets/images/products/product-2.jpg')}}" width="95" height="75"
                                class="rounded-1 me-9 flex-shrink-0" alt="">
                            <div>
                                <h6 class="mb-1">Supreme toys cooker</h6>
                                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                    <div class="input-group input-group-sm w-50">
                                        <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                            type="button" id="add2">
                                            -
                                        </button>
                                        <input type="text"
                                            class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                            placeholder="" aria-label="Example text with button addon"
                                            aria-describedby="add2" value="1">
                                        <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                            type="button" id="addon34">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="pb-7">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('admin-assets/images/products/product-3.jpg')}}" width="95" height="75"
                                class="rounded-1 me-9 flex-shrink-0" alt="">
                            <div>
                                <h6 class="mb-1">Supreme toys cooker</h6>
                                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                    <div class="input-group input-group-sm w-50">
                                        <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                            type="button" id="add3">
                                            -
                                        </button>
                                        <input type="text"
                                            class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                            placeholder="" aria-label="Example text with button addon"
                                            aria-describedby="add3" value="1">
                                        <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                            type="button" id="addon3">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="align-bottom">
                    <div class="d-flex align-items-center pb-7">
                        <span class="text-dark fs-3">Sub Total</span>
                        <div class="ms-auto">
                            <span class="text-dark fw-semibold fs-3">$2530</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pb-7">
                        <span class="text-dark fs-3">Total</span>
                        <div class="ms-auto">
                            <span class="text-dark fw-semibold fs-3">$6830</span>
                        </div>
                    </div>
                    <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
                </div>
            </div>
        </div>


    </div>
    <div class="dark-transparent sidebartoggler"></div>
@endsection
