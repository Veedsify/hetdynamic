﻿<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('admin-assets/images/logos/favicon.png')}}">

    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset("admin-assets/css/styles.css")}}">


    <title>Modernize Bootstrap Admin</title>
</head>

<body>
    <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body hstack align-items-start gap-6">
            <i class="ti ti-alert-circle fs-6"></i>
            <div>
                <h5 class="text-white fs-3 mb-1">Welcome to Modernize</h5>
                <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none"
                data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{asset("admin-assets/images/logos/favicon.png")}}" alt="loader" class="lds-ripple img-fluid">
    </div>

    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
           <div class="brand-logo d-flex align-items-center justify-content-between">
    <a href="index.html" class="text-nowrap logo-img">
      <img src="{{asset("assets/custom/resources/hetlogo.png")}}" style="filter:invert(1);" width="150" class="dark-logo" alt="Logo-Dark">
      <img src="{{asset("assets/custom/resources/hetlogo.png")}}" style="filter:invert(1);" width="150"  class="light-logo" alt="Logo-light">
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
                            <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40"
                                height="40" alt="">
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
            <x-admin.header/>
        {{-- Header ends --}}


            <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">
                            <!-- ============================= -->
                            <!-- Home -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-home-2"></i>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="index.html" class="sidebar-link">
                                            <i class="ti ti-aperture"></i>
                                            <span class="hide-menu">Modern</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">eCommerce</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index3.html" class="sidebar-link">
                                            <i class="ti ti-currency-dollar"></i>
                                            <span class="hide-menu">NFT</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index4.html" class="sidebar-link">
                                            <i class="ti ti-cpu"></i>
                                            <span class="hide-menu">Crypto</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index5.html" class="sidebar-link">
                                            <i class="ti ti-activity-heartbeat"></i>
                                            <span class="hide-menu">General</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index6.html" class="sidebar-link">
                                            <i class="ti ti-playlist"></i>
                                            <span class="hide-menu">Music</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Apps -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Apps</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span>
                                        <i class="ti ti-archive"></i>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="app-calendar.html" class="sidebar-link">
                                            <i class="ti ti-calendar"></i>
                                            <span class="hide-menu">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-kanban.html" class="sidebar-link">
                                            <i class="ti ti-layout-kanban"></i>
                                            <span class="hide-menu">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-chat.html" class="sidebar-link">
                                            <i class="ti ti-message-dots"></i>
                                            <span class="hide-menu">Chat</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-mail"></i>
                                            </span>
                                            <span class="hide-menu">Email</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-contact.html" class="sidebar-link">
                                            <i class="ti ti-phone"></i>
                                            <span class="hide-menu">Contact Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-contact2.html" class="sidebar-link">
                                            <i class="ti ti-list-details"></i>
                                            <span class="hide-menu">Contact List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-notes.html" class="sidebar-link">
                                            <i class="ti ti-notes"></i>
                                            <span class="hide-menu">Notes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="app-invoice.html" class="sidebar-link">
                                            <i class="ti ti-file-text"></i>
                                            <span class="hide-menu">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="page-user-profile.html" class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">User Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="blog-posts.html" class="sidebar-link">
                                            <i class="ti ti-article"></i>
                                            <span class="hide-menu">Posts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="blog-detail.html" class="sidebar-link">
                                            <i class="ti ti-details"></i>
                                            <span class="hide-menu">Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-shop.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Shop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-shop-detail.html" class="sidebar-link">
                                            <i class="ti ti-basket"></i>
                                            <span class="hide-menu">Shop Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-product-list.html" class="sidebar-link">
                                            <i class="ti ti-list-check"></i>
                                            <span class="hide-menu">List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-checkout.html" class="sidebar-link">
                                            <i class="ti ti-brand-shopee"></i>
                                            <span class="hide-menu">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- PAGES -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">PAGES</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-notebook"></i>
                                    </span>
                                    <span class="hide-menu">Pages</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="page-faq.html" class="sidebar-link">
                                            <i class="ti ti-help"></i>
                                            <span class="hide-menu">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="page-account-settings.html" class="sidebar-link">
                                            <i class="ti ti-user-circle"></i>
                                            <span class="hide-menu">Account Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="page-pricing.html" class="sidebar-link">
                                            <i class="ti ti-currency-dollar"></i>
                                            <span class="hide-menu">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-cards.html" class="sidebar-link">
                                            <i class="ti ti-cards"></i>
                                            <span class="hide-menu">Card</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-banners.html" class="sidebar-link">
                                            <i class="ti ti-ad"></i>
                                            <span class="hide-menu">Banner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-charts.html" class="sidebar-link">
                                            <i class="ti ti-chart-bar"></i>
                                            <span class="hide-menu">Charts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../landingpage/index.html" class="sidebar-link">
                                            <i class="ti ti-app-window"></i>
                                            <span class="hide-menu">Landing Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- UI -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">UI</span>
                            </li>
                            <!-- =================== -->
                            <!-- UI Elements -->
                            <!-- =================== -->
                            <li class="sidebar-item mega-dropdown">
                                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <i class="ti ti-layout-grid"></i>
                                    </span>
                                    <span class="hide-menu">UI</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="ui-accordian.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Accordian</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-badge.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Badge</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-buttons.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-dropdowns.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-modals.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-tab.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tab</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-tooltip-popover.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tooltip & Popover</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-notification.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-progressbar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Progressbar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-pagination.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-typography.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Typography</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-bootstrap-ui.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap UI</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-breadcrumb.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-offcanvas.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-lists.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Lists</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-grid.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-carousel.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-scrollspy.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-spinner.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Spinner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-link.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Forms -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Forms</span>
                            </li>
                            <!-- =================== -->
                            <!-- Forms -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <i class="ti ti-file-text"></i>
                                    </span>
                                    <span class="hide-menu">Forms</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <!-- form elements -->
                                    <li class="sidebar-item">
                                        <a href="form-inputs.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Forms Input</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-input-groups.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Groups</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-input-grid.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Input Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-checkbox-radio.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Checkbox & Radios</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bootstrap-touchspin.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap Touchspin</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bootstrap-switch.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bootstrap Switch</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-select2.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Select2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-dual-listbox.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dual Listbox</span>
                                        </a>
                                    </li>
                                    <!-- form inputs -->
                                    <li class="sidebar-item">
                                        <a href="form-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Form</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-vertical.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Vertical</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-horizontal.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Horizontal</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-actions.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Actions</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-row-separator.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Row Separator</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bordered.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Bordered</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-detail.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Detail</span>
                                        </a>
                                    </li>
                                    <!-- form wizard -->
                                    <li class="sidebar-item">
                                        <a href="form-wizard.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Form Wizard</span>
                                        </a>
                                    </li>
                                    <!-- Quill Editor -->
                                    <li class="sidebar-item">
                                        <a href="form-editor-quill.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Quill Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Tables -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Tables</span>
                            </li>
                            <!-- =================== -->
                            <!-- Bootstrap Table -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <i class="ti ti-layout-sidebar"></i>
                                    </span>
                                    <span class="hide-menu">Tables</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="table-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-dark-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Dark Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-sizing.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-layout-coloured.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Coloured Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-basic.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Basic Initialisation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-api.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">API</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-advanced.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Advanced Initialisation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Charts -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Charts</span>
                            </li>
                            <!-- =================== -->
                            <!-- Apex Chart -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <i class="ti ti-chart-pie"></i>
                                    </span>
                                    <span class="hide-menu">Charts</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="chart-apex-line.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Line Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-area.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Area Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-bar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Bar Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-pie.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Pie Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-radial.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-radar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Radar Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ============================= -->
                            <!-- Icons -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Icons</span>
                            </li>
                            <!-- =================== -->
                            <!-- Tabler Icon -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <i class="ti ti-archive"></i>
                                    </span>
                                    <span class="hide-menu">Icon</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="icon-tabler.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Tabler Icon</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="icon-solar.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Solar Icon</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- multi level -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                                    <span class="rounded-3">
                                        <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"
                                            class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Multi DD</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../docs/index.html" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Documentation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link has-arrow">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse second-level">
                                            <li class="sidebar-item">
                                                <a href="#" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.1</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="#" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="#" class="sidebar-link">
                                                    <i class="ti ti-circle"></i>
                                                    <span class="hide-menu">Page 2.3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->

            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h4 class="fw-semibold mb-8">Contact Application</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Contact Application</li>
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

                    <div class="card overflow-hidden chat-application">
                        <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
                            <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                                <i class="ti ti-menu-2 fs-5"></i>
                            </button>
                            <form class="position-relative w-100">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                    placeholder="Search Contact">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                        </div>
                        <div class="d-flex w-100">
                            <div class="left-part border-end w-20 flex-shrink-0 d-none d-lg-block">
                                <div class="px-9 pt-4 pb-3">
                                    <button class="btn btn-primary fw-semibold py-8 w-100">Add New Contact</button>
                                </div>
                                <ul class="list-group mh-n100" data-simplebar="">
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-inbox fs-5"></i>All Contacts </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-star"></i>Starred </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-file-text fs-5"></i>Pending </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-alert-circle"></i>Blocked </a>
                                    </li>
                                    <li class="border-bottom my-3"></li>
                                    <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">CATEGORIES
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-primary"></i>Engineers </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-warning"></i>Support Staff </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-success"></i>Sales Team </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex w-100">
                                <div class="min-width-340">
                                    <div class="border-end user-chat-box h-100">
                                        <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                                            <form class="position-relative">
                                                <input type="text" class="form-control search-chat py-2 ps-5"
                                                    id="text-srh" placeholder="Search">
                                                <i
                                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                            </form>
                                        </div>
                                        <div class="app-chat">
                                            <ul class="chat-users mh-n100" data-simplebar="">
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user bg-light-subtle"
                                                        id="chat_user_1" data-user-id="1">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-2.jpg"
                                                                alt="user-4" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Dr. Bonnie Barstow
                                                            </h6>
                                                            <span class="fs-2 text-body-color d-block">barstow@
                                                                modernize.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_2" data-user-id="2">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-3.jpg"
                                                                alt="user4" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Jonathan Higgins
                                                            </h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">jonathan_hig@modernize.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_3" data-user-id="3">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-4.jpg"
                                                                alt="user3" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Michael Knight
                                                            </h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">michale-knight@gmail.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_4" data-user-id="4">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-5.jpg"
                                                                alt="user8" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Angus MacGyver</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">macgyver@gmail.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_5" data-user-id="5">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-6.jpg"
                                                                alt="user2" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Rick Wright</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">rockwright@modernize.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_6" data-user-id="6">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-7.jpg"
                                                                alt="user1" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Sledge Hammer</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">hammer9@gmail.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_7" data-user-id="7">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-8.jpg"
                                                                alt="user3" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Peter Thornton</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">peter293@modernize.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_8" data-user-id="8">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-9.jpg"
                                                                alt="user1" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Devon Miles</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">devon@gmail.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_9" data-user-id="9">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-10.jpg"
                                                                alt="user1" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Michael Knight</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">michael_knight@modernize.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"
                                                        class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user"
                                                        id="chat_user_10" data-user-id="10">
                                                        <span class="position-relative">
                                                            <img src="../assets/images/profile/user-2.jpg"
                                                                alt="user1" width="40" height="40"
                                                                class="rounded-circle">
                                                        </span>
                                                        <div class="ms-6 d-inline-block w-75">
                                                            <h6 class="mb-1 fw-semibold chat-title"
                                                                data-username="James Anderson">Mike Torello</h6>
                                                            <span
                                                                class="fs-2 text-body-color d-block">torello@gmail.com</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <div class="chat-container h-100 w-100">
                                        <div class="chat-box-inner-part h-100">
                                            <div class="chatting-box app-email-chatting-box">
                                                <div
                                                    class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                                                    <h5 class="text-dark mb-0 fs-5">Contact Details</h5>
                                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                                        <li class="d-lg-none d-block">
                                                            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                                href="javascript:void(0)">
                                                                <i class="ti ti-arrow-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="position-relative" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="important">
                                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                                href="javascript:void(0)">
                                                                <i class="ti ti-star"></i>
                                                            </a>
                                                        </li>
                                                        <li class="position-relative" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Edit">
                                                            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                                href="javascript:void(0)">
                                                                <i class="ti ti-pencil"></i>
                                                            </a>
                                                        </li>
                                                        <li class="position-relative" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Delete">
                                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                                href="javascript:void(0)">
                                                                <i class="ti ti-trash"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="position-relative overflow-hidden">
                                                    <div class="position-relative">
                                                        <div class="chat-box email-box mh-n100 p-9"
                                                            data-simplebar="init">

                                                            <div class="chat-list chat active-chat"
                                                                data-user-id="1">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-2.jpg"
                                                                            alt="user4" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Dr.
                                                                                Bonnie Barstow </h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2"
                                                                        fdprocessedid="pk6kl8">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2"
                                                                        fdprocessedid="83zpb">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="2">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-3.jpg"
                                                                            alt="user4" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Jonathan
                                                                                Higgins</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="3">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-4.jpg"
                                                                            alt="user3" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Michael
                                                                                Knight </h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="4">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-5.jpg"
                                                                            alt="user8" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Angus
                                                                                MacGyver</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="5">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-6.jpg"
                                                                            alt="user2" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Rick
                                                                                Wright</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="6">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-7.jpg"
                                                                            alt="user1" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Sledge
                                                                                Hammer</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="7">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-8.jpg"
                                                                            alt="user3" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Peter
                                                                                Thornton</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="8">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-9.jpg"
                                                                            alt="user1" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Devon
                                                                                Miles</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="9">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-10.jpg"
                                                                            alt="user1" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Michael
                                                                                Knight</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="10">
                                                                <div
                                                                    class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <img src="../assets/images/profile/user-2.jpg"
                                                                            alt="user1" width="72"
                                                                            height="72" class="rounded-circle">
                                                                        <div>
                                                                            <h6 class="fw-semibold fs-4 mb-0">Mike
                                                                                Torello</h6>
                                                                            <p class="mb-0">Sales Manager</p>
                                                                            <p class="mb-0">Digital Arc Pvt. Ltd.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">Phone number</p>
                                                                        <h6 class="fw-semibold mb-0">+1 (203) 3458
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Email address</p>
                                                                        <h6 class="fw-semibold mb-0">
                                                                            alexandra@modernize.com</h6>
                                                                    </div>
                                                                    <div class="col-12 mb-9">
                                                                        <p class="mb-1 fs-2">Address</p>
                                                                        <h6 class="fw-semibold mb-0">312, Imperical
                                                                            Arc, New western corner</h6>
                                                                    </div>
                                                                    <div class="col-4 mb-7">
                                                                        <p class="mb-1 fs-2">City</p>
                                                                        <h6 class="fw-semibold mb-0">New York</h6>
                                                                    </div>
                                                                    <div class="col-8 mb-7">
                                                                        <p class="mb-1 fs-2">Country</p>
                                                                        <h6 class="fw-semibold mb-0">United Stats</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-4">
                                                                    <p class="mb-2 fs-2">Notes</p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Quisque bibendum
                                                                        hendrerit lobortis. Nullam ut lacus eros. Sed at
                                                                        luctus urna, eu fermentum
                                                                        diam.
                                                                        In et tristique mauris.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">Ut id ornare metus, sed
                                                                        auctor enim. Pellentesque
                                                                        nisi magna, laoreet a augue eget, tempor
                                                                        volutpat diam.</p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-6">
                                                                    <button class="btn btn-primary fs-2">Edit</button>
                                                                    <button
                                                                        class="btn bg-danger-subtle text-danger fs-2">Delete</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar"
                                aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Contact </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="px-9 pt-4 pb-3">
                                    <button class="btn btn-primary fw-semibold py-8 w-100">Add New Contact</button>
                                </div>
                                <ul class="list-group h-n150" data-simplebar="">
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-inbox fs-5"></i>All Contacts </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-star"></i>Starred </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-file-text fs-5"></i>Pening Approval </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-alert-circle"></i>Blocked </a>
                                    </li>
                                    <li class="border-bottom my-3"></li>
                                    <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">CATEGORIES
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-primary"></i>Engineers </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-warning"></i>Support Staff </a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 mx-9">
                                        <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1"
                                            href="javascript:void(0)">
                                            <i class="ti ti-bookmark fs-5 text-success"></i>Sales Team </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    $("html").attr("data-color-theme", e);
                    $(e).prop("checked", !0);
                }
            </script>
            <button
                class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="icon ti ti-settings fs-7"></i>
            </button>

            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                        Settings
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-n80" data-simplebar="">
                    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check light-layout" name="theme-layout"
                            id="light-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout"><i
                                class="icon ti ti-brightness-up fs-7 me-2"></i>Light</label>

                        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout"><i
                                class="icon ti ti-moon fs-7 me-2"></i>Dark</label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="direction-l" id="ltr-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="ltr-layout"><i
                                class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR</label>

                        <input type="radio" class="btn-check" name="direction-l" id="rtl-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="rtl-layout"><i
                                class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL</label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="BLUE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="AQUA_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="PURPLE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout"
                            id="green-theme-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Green_Theme')" for="green-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout"
                            id="orange-theme-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="vertical-layout"><i
                                    class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical</label>
                        </div>
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="horizontal-layout"><i
                                    class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal</label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="layout" id="boxed-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="boxed-layout"><i
                                class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed</label>

                        <input type="radio" class="btn-check" name="layout" id="full-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="full-layout"><i
                                class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full</label>
                    </div>

                    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <a href="javascript:void(0)" class="fullsidebar">
                            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="full-sidebar"><i
                                    class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full</label>
                        </a>
                        <div>
                            <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="mini-sidebar"><i
                                    class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse</label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="card-with-border"><i
                                class="icon ti ti-border-outer fs-7 me-2"></i>Border</label>

                        <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="card-without-border"><i
                                class="icon ti ti-border-none fs-7 me-2"></i>Shadow</label>
                    </div>
                </div>
            </div>
        </div>

        <!--  Search Bar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                    <div class="modal-header border-bottom">
                        <input type="search" class="form-control fs-3" placeholder="Search here"
                            id="search">
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
                            <img src="../assets/images/products/product-1.jpg" width="95" height="75"
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
                            <img src="../assets/images/products/product-2.jpg" width="95" height="75"
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
                            <img src="../assets/images/products/product-3.jpg" width="95" height="75"
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
    <script src="{{asset("admin-assets/js/vendor.min.js")}}"></script>


    <!-- Import Js Files -->
    <script src="{{asset("admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("admin-assets/libs/simplebar/dist/simplebar.min.js")}}"></script>
    <script src="{{asset("admin-assets/js/theme/app.init.js")}}"></script>
    <script src="{{asset("admin-assets/js/theme/theme.js")}}"></script>
    <script src="{{asset("admin-assets/js/theme/app.min.js")}}"></script>
    <script src="{{asset("admin-assets/js/theme/sidebarmenu.js")}}"></script>

    <!-- solar icons -->
    <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{asset("admin-assets/js/apps/contact.js")}}"></script>

</body>

</html>