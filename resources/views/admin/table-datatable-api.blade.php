﻿<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png">

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>Modernize Bootstrap Admin</title>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
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
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid">
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
            <!--  Header Start -->
            <header class="topbar card rounded-0 border-0">
                <div class="with-vertical"><!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav quick-links d-none d-lg-flex">
                            <!-- ------------------------------- -->
                            <!-- start apps Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Chat Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Invoice App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Email App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="page-user-profile.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            User Profile
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-calendar.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-date.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Calendar App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact List Table
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-notes.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-application.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Notes Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center py-3">
                                                    <div class="col-8">
                                                        <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                            href="#"><i
                                                                class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                            Questions</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-end pe-4">
                                                            <button class="btn btn-primary">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ms-n4">
                                            <div class="position-relative p-7 border-start h-100">
                                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                                <ul class="">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-pricing.html">Pricing Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-login.html">Authentication Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-register.html">Register Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-error.html">404 Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="app-notes.html">Notes App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-user-profile.html">User Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end apps Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-chat.html">Chat</a>
                            </li>
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-calendar.html">Calendar</a>
                            </li>
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-email.html">Email</a>
                            </li>
                        </ul>

                        <div class="d-block d-lg-none">
                            <a href="index.html" class="text-nowrap logo-img">
                                <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark">
                                <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light">
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0)"
                                    class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item">
                                        <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone"
                                                class="moon fs-7"></iconify-icon>
                                        </a>
                                        <a class="nav-link sun light-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:sun-2-line-duotone"
                                                class="sun fs-7"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../assets/images/svgs/icon-flag-en.svg" alt=""
                                                width="20px" height="20px"
                                                class="rounded-circle object-fit-cover round-20">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-en.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">English (UK)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-cn.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-fr.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">français (French)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-sa.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">عربي (Arabic)</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start shopping cart Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item">
                                        <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">
                                            <i class="ti ti-basket"></i>
                                            <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                        </a>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end shopping cart Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-bell-ringing"></i>
                                            <div class="notification bg-primary rounded-circle"></div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                                    new</span>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-3.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Salma sent you
                                                            new message</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-4.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Check your
                                                            earnings</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-5.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Assign her new
                                                            tasks</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-6.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                        <span class="fs-2 d-block text-body-secondary">$230 deducted
                                                            from account</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-7.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-6 px-7 mb-1">
                                                <button class="btn btn-outline-primary w-100">See All
                                                    Notifications</button>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar="">
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="80" height="80"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                                        <span class="mb-1 d-block">Designer</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> info@modernize.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-account.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-email.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-inbox.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Messages &
                                                                Emails</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-notes.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-tasks.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                            <span class="fs-2 d-block text-body-secondary">To-do and
                                                                Daily Tasks</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <div
                                                        class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                                                                <button class="btn btn-primary">Upgrade</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="m-n4 unlimited-img">
                                                                    <img src="../assets/images/backgrounds/unlimited-bg.png"
                                                                        alt="" class="w-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="authentication-login.html"
                                                        class="btn btn-outline-primary">Log Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                        aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <img src="../assets/images/logos/favicon.ico" alt="" class="img-fluid">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar="">
                                <ul id="sidebarnav">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                            aria-expanded="false">
                                            <span>
                                                <i class="ti ti-apps"></i>
                                            </span>
                                            <span class="hide-menu">Apps</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level my-3">
                                            <li class="sidebar-item py-2">
                                                <a href="app-chat.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">New messages
                                                            arrived</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-invoice.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">Get latest
                                                            invoice</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="../main/app-cotact.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">2 Unsaved
                                                            Contacts</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-email.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">Get new
                                                            emails</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="page-user-profile.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">learn more
                                                            information</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-calendar.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-date.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">Get
                                                            dates</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-contact2.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">Add new
                                                            contact</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-notes.html" class="d-flex align-items-center">
                                                    <div
                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/svgs/icon-dd-application.svg"
                                                            alt="" class="img-fluid" width="24"
                                                            height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                        <span class="fs-2 d-block fw-normal text-muted">To-do and Daily
                                                            tasks</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <ul class="px-8 mt-7 mb-4">
                                                <li class="sidebar-item mb-3">
                                                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark" href="page-pricing.html">Pricing
                                                        Page</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark"
                                                        href="authentication-login.html">Authentication Design</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark"
                                                        href="authentication-register.html">Register Now</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark"
                                                        href="authentication-error.html">404 Error Page</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark" href="app-notes.html">Notes
                                                        App</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark"
                                                        href="page-user-profile.html">User Application</a>
                                                </li>
                                                <li class="sidebar-item py-2">
                                                    <a class="fw-semibold text-dark"
                                                        href="page-account-settings.html">Account Settings</a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-message-dots"></i>
                                            </span>
                                            <span class="hide-menu">Chat</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                            <span class="hide-menu">Calendar</span>
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
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <a href="index.html" class="text-nowrap nav-link">
                                    <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" width="180"
                                        alt="">
                                    <img src="../assets/images/logos/light-logo.svg" class="light-logo"
                                        width="180" alt="">
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav quick-links d-none d-xl-flex">
                            <!-- ------------------------------- -->
                            <!-- start apps Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Chat Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Invoice App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Email App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="page-user-profile.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            User Profile
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-calendar.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-date.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Calendar App
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact List Table
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-notes.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-application.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Notes Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center py-3">
                                                    <div class="col-8">
                                                        <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                            href="#"><i
                                                                class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                            Questions</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-end pe-4">
                                                            <button class="btn btn-primary">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ms-n4">
                                            <div class="position-relative p-7 border-start h-100">
                                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                                <ul class="">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-pricing.html">Pricing Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-login.html">Authentication Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-register.html">Register Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-error.html">404 Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="app-notes.html">Notes App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-user-profile.html">User Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end apps Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-chat.html">Chat</a>
                            </li>
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-calendar.html">Calendar</a>
                            </li>
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="app-email.html">Email</a>
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="index.html" class="text-nowrap nav-link">
                                <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <a href="javascript:void(0)"
                                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item">
                                        <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone"
                                                class="moon fs-7"></iconify-icon>
                                        </a>
                                        <a class="nav-link sun light-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:sun-2-line-duotone"
                                                class="sun fs-7"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../assets/images/svgs/icon-flag-en.svg" alt=""
                                                width="20px" height="20px"
                                                class="rounded-circle object-fit-cover round-20">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-en.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">English (UK)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-cn.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-fr.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">français (French)</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/svgs/icon-flag-sa.svg"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">عربي (Arabic)</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start shopping cart Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item">
                                        <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">
                                            <i class="ti ti-basket"></i>
                                            <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                        </a>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end shopping cart Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-bell-ringing"></i>
                                            <div class="notification bg-primary rounded-circle"></div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                                    new</span>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-3.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Salma sent you
                                                            new message</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-4.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Check your
                                                            earnings</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-5.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Assign her new
                                                            tasks</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-6.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                        <span class="fs-2 d-block text-body-secondary">$230 deducted
                                                            from account</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-7.jpg" alt="user"
                                                            class="rounded-circle" width="48" height="48">
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-6 px-7 mb-1">
                                                <button class="btn btn-outline-primary w-100">See All
                                                    Notifications</button>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar="">
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="80" height="80"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                                        <span class="mb-1 d-block">Designer</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> info@modernize.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-account.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-email.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-inbox.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Messages &
                                                                Emails</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-notes.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-tasks.svg"
                                                                alt="" width="24" height="24">
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                            <span class="fs-2 d-block text-body-secondary">To-do and
                                                                Daily Tasks</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <div
                                                        class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access
                                                                </h5>
                                                                <button class="btn btn-primary">Upgrade</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="m-n4 unlimited-img">
                                                                    <img src="../assets/images/backgrounds/unlimited-bg.png"
                                                                        alt="" class="w-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="authentication-login.html"
                                                        class="btn btn-outline-primary">Log Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </header>
            <!--  Header End -->

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
                                    <h4 class="fw-semibold mb-8">Datatable Api</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Datatable Api</li>
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

                    <div class="datatables">
                        <!-- add row -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Add Row -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">Add Row</h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            New rows can be added to a DataTable using the
                                            <code> row.add()</code> API method. Simply call the API
                                            function with the data for the new row (be it an array or
                                            object). Multiple rows can be added using the
                                            <code> rows.add()</code> method (note the plural). Data
                                            can likewise be updated with the
                                            <code>row().data()</code> and
                                            <code> row().remove()</code> methods. You can refer full
                                            documentation from here
                                            <a href="https://datatables.net/">Datatables</a>
                                        </p>
                                        <button id="addRow" class="btn btn-primary mb-2">
                                            <i class="ti ti-plus fs-4"></i>&nbsp; Add
                                            new row
                                        </button>
                                        <div class="table-responsive">
                                            <table id="t_add_row"
                                                class="table table-striped w-100 border table-bordered display text-nowrap">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                        <th>Column 3</th>
                                                        <th>Column 4</th>
                                                        <th>Column 5</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                        <th>Column 3</th>
                                                        <th>Column 4</th>
                                                        <th>Column 5</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Add Row -->
                            </div>
                        </div>
                        <!-- Individual column searching (select inputs) -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Individual column searching (select inputs) -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">
                                                Individual column searching (select inputs)
                                            </h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            After the table is initialised, the API is used to build
                                            the select inputs through the use of the
                                            <code> column().data()</code> method to get the data for
                                            each column in turn. The helper methods
                                            <code>unique()</code> and <code> sort()</code> are also
                                            used to reduce the data for set input to unique and
                                            ordered elements. Finally the change event from the select
                                            input is used to trigger a column search using the
                                            <code>column().search()</code> method.
                                        </p>
                                        <div class="table-responsive">
                                            <table
                                                class="table table-striped w-100 table-bordered border datatable-select-inputs text-nowrap">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                </tbody>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Individual column searching (select inputs) -->
                            </div>
                        </div>
                        <!-- Individual column searching (text inputs) -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Individual column searching (text inputs) -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">
                                                Individual column searching (text inputs)
                                            </h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            DataTables has the ability to apply searching to a
                                            specific column through the
                                            <code> column().search()</code> method (note that the name
                                            of the method is search not filter, since
                                            <code> filter()</code> is used to apply a filter to a
                                            result set).
                                        </p>
                                        <div class="table-responsive">
                                            <table
                                                class="table table-striped w-100 table-bordered border text-inputs-searching text-nowrap">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                </tbody>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Individual column searching (text inputs) -->
                            </div>
                        </div>
                        <!-- Row selection (multiple rows) -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Row selection (multiple rows) -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">Row selection (multiple rows)</h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            It can be useful to provide the user with the option to
                                            select rows in a DataTable. This can be done by using a
                                            click event to add / remove a class on the table rows. The
                                            <code> rows().data()</code> method can then be used to get
                                            the data for the selected rows. In this case it is simply
                                            counting the number of selected rows, but much more
                                            complex interactions can easily be developed.
                                        </p>
                                        <button id="button" class="btn btn-primary mb-2">
                                            <i class="ri-filter-line"></i> Row count
                                        </button>
                                        <div class="table-responsive">
                                            <table id="row_select"
                                                class="table table-striped w-100 table-bordered border display text-nowrap">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                </tbody>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Row selection (multiple rows) -->
                            </div>
                        </div>
                        <!-- Form inputs -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Form Inputs -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">Form Inputs</h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            In order to perform paging, ordering, searching etc,
                                            DataTables can remove rows and cells from the document
                                            (i.e. those rows / cells which are not needed are not
                                            inserted into the document). This increases performance
                                            and compatibility, however, it means that submitting forms
                                            which span multiple pages requires a little bit of
                                            additional work to get the information that is not in the
                                            document any longer.
                                        </p>
                                        <button class="btn btn-primary me-1 inputs-submit">
                                            <i class="ri-file-fill align-middle"></i> Submit form
                                        </button>
                                        <div class="table-responsive mt-3">
                                            <table id="form_inputs"
                                                class="table table-striped w-100 table-bordered border display text-nowrap align-middle">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-1-age" name="row-1-age" value="61">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-1-position" name="row-1-position"
                                                                value="System Architect">
                                                        </td>
                                                        <td>
                                                            <select class="form-select" size="1"
                                                                id="row-1-office" name="row-1-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-2-age" name="row-2-age" value="63">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-2-position" name="row-2-position"
                                                                value="Accountant">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-2-office" name="row-2-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo" selected="selected">
                                                                    Tokyo
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-3-age" name="row-3-age" value="66">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-3-position" name="row-3-position"
                                                                value="Junior Technical Author">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-3-office" name="row-3-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-4-age" name="row-4-age" value="22">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-4-position" name="row-4-position"
                                                                value="Senior Javascript Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-4-office" name="row-4-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-5-age" name="row-5-age" value="33">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-5-position" name="row-5-position"
                                                                value="Accountant">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-5-office" name="row-5-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo" selected="selected">
                                                                    Tokyo
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-6-age" name="row-6-age" value="61">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-6-position" name="row-6-position"
                                                                value="Integration Specialist">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-6-office" name="row-6-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-7-age" name="row-7-age" value="59">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-7-position" name="row-7-position"
                                                                value="Sales Assistant">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-7-office" name="row-7-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-8-age" name="row-8-age" value="55">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-8-position" name="row-8-position"
                                                                value="Integration Specialist">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-8-office" name="row-8-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo" selected="selected">
                                                                    Tokyo
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-9-age" name="row-9-age" value="39">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-9-position" name="row-9-position"
                                                                value="Javascript Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-9-office" name="row-9-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-10-age" name="row-10-age" value="23">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-10-position" name="row-10-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-10-office" name="row-10-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-11-age" name="row-11-age" value="30">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-11-position" name="row-11-position"
                                                                value="Office Manager">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-11-office" name="row-11-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-12-age" name="row-12-age" value="22">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-12-position" name="row-12-position"
                                                                value="Support Lead">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-12-office" name="row-12-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-13-age" name="row-13-age" value="36">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-13-position" name="row-13-position"
                                                                value="Regional Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-13-office" name="row-13-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-14-age" name="row-14-age" value="43">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-14-position" name="row-14-position"
                                                                value="Senior Marketing Designer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-14-office" name="row-14-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-15-age" name="row-15-age" value="19">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-15-position" name="row-15-position"
                                                                value="Regional Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-15-office" name="row-15-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-16-age" name="row-16-age" value="66">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-16-position" name="row-16-position"
                                                                value="Marketing Designer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-16-office" name="row-16-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-17-age" name="row-17-age" value="64">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-17-position" name="row-17-position"
                                                                value="Chief Financial Officer (CFO)">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-17-office" name="row-17-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-18-age" name="row-18-age" value="59">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-18-position" name="row-18-position"
                                                                value="Systems Administrator">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-18-office" name="row-18-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-19-age" name="row-19-age" value="41">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-19-position" name="row-19-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-19-office" name="row-19-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-20-age" name="row-20-age" value="35">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-20-position" name="row-20-position"
                                                                value="Personnel Lead">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-20-office" name="row-20-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-21-age" name="row-21-age" value="30">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-21-position" name="row-21-position"
                                                                value="Development Lead">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-21-office" name="row-21-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-22-age" name="row-22-age" value="40">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-22-position" name="row-22-position"
                                                                value="Chief Marketing Officer (CMO)">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-22-office" name="row-22-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-23-age" name="row-23-age" value="21">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-23-position" name="row-23-position"
                                                                value="Pre-Sales Support">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-23-office" name="row-23-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-24-age" name="row-24-age" value="23">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-24-position" name="row-24-position"
                                                                value="Sales Assistant">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-24-office" name="row-24-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-25-age" name="row-25-age" value="47">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-25-position" name="row-25-position"
                                                                value="Chief Executive Officer (CEO)">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-25-office" name="row-25-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-26-age" name="row-26-age" value="42">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-26-position" name="row-26-position"
                                                                value="Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-26-office" name="row-26-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-27-age" name="row-27-age" value="28">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-27-position" name="row-27-position"
                                                                value="Regional Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-27-office" name="row-27-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-28-age" name="row-28-age" value="28">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-28-position" name="row-28-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-28-office" name="row-28-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-29-age" name="row-29-age" value="48">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-29-position" name="row-29-position"
                                                                value="Chief Operating Officer (COO)">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-29-office" name="row-29-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-30-age" name="row-30-age" value="20">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-30-position" name="row-30-position"
                                                                value="Regional Marketing">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-30-office" name="row-30-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo" selected="selected">
                                                                    Tokyo
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-31-age" name="row-31-age" value="37">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-31-position" name="row-31-position"
                                                                value="Integration Specialist">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-31-office" name="row-31-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-32-age" name="row-32-age" value="53">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-32-position" name="row-32-position"
                                                                value="Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-32-office" name="row-32-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-33-age" name="row-33-age" value="27">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-33-position" name="row-33-position"
                                                                value="Technical Author">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-33-office" name="row-33-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-34-age" name="row-34-age" value="22">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-34-position" name="row-34-position"
                                                                value="Team Leader">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-34-office" name="row-34-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-35-age" name="row-35-age" value="46">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-35-position" name="row-35-position"
                                                                value="Post-Sales support">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-35-office" name="row-35-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-36-age" name="row-36-age" value="47">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-36-position" name="row-36-position"
                                                                value="Marketing Designer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-36-office" name="row-36-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-37-age" name="row-37-age" value="51">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-37-position" name="row-37-position"
                                                                value="Office Manager">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-37-office" name="row-37-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-38-age" name="row-38-age" value="41">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-38-position" name="row-38-position"
                                                                value="Secretary">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-38-office" name="row-38-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-39-age" name="row-39-age" value="62">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-39-position" name="row-39-position"
                                                                value="Financial Controller">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-39-office" name="row-39-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-40-age" name="row-40-age" value="37">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-40-position" name="row-40-position"
                                                                value="Office Manager">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-40-office" name="row-40-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-41-age" name="row-41-age" value="65">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-41-position" name="row-41-position"
                                                                value="Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-41-office" name="row-41-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-42-age" name="row-42-age" value="64">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-42-position" name="row-42-position"
                                                                value="Support Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-42-office" name="row-42-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-43-age" name="row-43-age" value="38">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-43-position" name="row-43-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-43-office" name="row-43-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-44-age" name="row-44-age" value="37">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-44-position" name="row-44-position"
                                                                value="Support Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-44-office" name="row-44-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo" selected="selected">
                                                                    Tokyo
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-45-age" name="row-45-age" value="61">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-45-position" name="row-45-position"
                                                                value="Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-45-office" name="row-45-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-46-age" name="row-46-age" value="47">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-46-position" name="row-46-position"
                                                                value="Support Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-46-office" name="row-46-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-47-age" name="row-47-age" value="64">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-47-position" name="row-47-position"
                                                                value="Data Coordinator">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-47-office" name="row-47-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-48-age" name="row-48-age" value="63">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-48-position" name="row-48-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-48-office" name="row-48-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-49-age" name="row-49-age" value="56">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-49-position" name="row-49-position"
                                                                value="Software Engineer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-49-office" name="row-49-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-50-age" name="row-50-age" value="43">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-50-position" name="row-50-position"
                                                                value="Junior Javascript Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-50-office" name="row-50-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-51-age" name="row-51-age" value="46">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-51-position" name="row-51-position"
                                                                value="Sales Assistant">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-51-office" name="row-51-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-52-age" name="row-52-age" value="47">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-52-position" name="row-52-position"
                                                                value="Regional Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-52-office" name="row-52-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-53-age" name="row-53-age" value="21">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-53-position" name="row-53-position"
                                                                value="Systems Administrator">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-53-office" name="row-53-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London" selected="selected">
                                                                    London
                                                                </option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-54-age" name="row-54-age" value="30">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-54-position" name="row-54-position"
                                                                value="Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-54-office" name="row-54-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco" selected="selected">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-55-age" name="row-55-age" value="51">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-55-position" name="row-55-position"
                                                                value="Regional Director">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-55-office" name="row-55-office">
                                                                <option value="Edinburgh" selected="selected">
                                                                    Edinburgh
                                                                </option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-56-age" name="row-56-age" value="29">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-56-position" name="row-56-position"
                                                                value="Javascript Developer">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-56-office" name="row-56-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York">New York</option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-57-age" name="row-57-age" value="27">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="row-57-position" name="row-57-position"
                                                                value="Customer Support">
                                                        </td>
                                                        <td>
                                                            <select size="1" class="form-select"
                                                                id="row-57-office" name="row-57-office">
                                                                <option value="Edinburgh">Edinburgh</option>
                                                                <option value="London">London</option>
                                                                <option value="New York" selected="selected">
                                                                    New York
                                                                </option>
                                                                <option value="San Francisco">
                                                                    San Francisco
                                                                </option>
                                                                <option value="Tokyo">Tokyo</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!-- end row -->
                                                </tbody>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Form Inputs -->
                            </div>
                        </div>
                        <!-- row selection & deletion -->
                        <div class="row">
                            <div class="col-12">
                                <!-- start Row selection and deletion (single row) -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <h5 class="card-title">
                                                Row selection and deletion (single row)
                                            </h5>
                                        </div>
                                        <p class="card-subtitle mb-3">
                                            This example modifies the multiple row selection example
                                            by only allowing the selection of a single row. This is
                                            done by checking to see if the row already has a selected
                                            class, and if so removing it, but if not then the class is
                                            removed from all other rows in the table and then applied
                                            to the row being selected.
                                        </p>
                                        <button id="delete-row" class="btn btn-primary me-1">
                                            <i class="ri-delete-bin-line fs-5 align-middle"></i>
                                            Delete selected row
                                        </button>
                                        <div class="table-responsive mt-3">
                                            <table id="sing_row_del"
                                                class="table table-striped w-100 table-bordered border display text-nowrap">
                                                <thead>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </thead>
                                                <tbody>
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                    <!-- start row -->
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                    <!-- end row -->
                                                </tbody>
                                                <tfoot>
                                                    <!-- start row -->
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    <!-- end row -->
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Row selection and deletion (single row) -->
                            </div>
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
                    <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                        autocomplete="off">
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
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                        autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                        autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                        autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Green_Theme')" for="green-theme-layout"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                        autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                        autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
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



    <div class="dark-transparent sidebartoggler"></div>
    <script src="../assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatable-api.init.js"></script>
</body>

</html>
