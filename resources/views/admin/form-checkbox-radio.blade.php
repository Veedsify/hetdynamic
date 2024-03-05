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
    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-okaidia.min.css">
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
                                    <h4 class="fw-semibold mb-8">Checkboxes</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Checkboxes</li>
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

                    <div class="row">
                        <!-- ------------------------------------------ -->
                        <!-- checkboxs -->
                        <!-- ------------------------------------------ -->
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Checks -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Checks</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code1-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code1-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Checks -View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
            Default checkbox
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckChecked&quot; checked&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
            Checked checkbox
          &lt;/label&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" checked="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- end Checks -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Checks - Disabled -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Checks - Disabled</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code3-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code3-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckIndeterminate&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckIndeterminate&quot;&gt;
            Indeterminate checkbox
          &lt;/label&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDisabled" disabled="">
                                        <label class="form-check-label" for="flexCheckDisabled">
                                            Disabled checkbox
                                        </label>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckCheckedDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                                            Disabled checked checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- end Checks - Disabled -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Checks - Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Checks - Colors</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code5-1-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code5-1-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                        <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Success&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;checkbox&quot; id=&quot;success-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;checkbox&quot; id=&quot;success2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;checkbox&quot; id=&quot;success3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Danger&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;checkbox&quot; id=&quot;danger-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;checkbox&quot; id=&quot;danger2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;checkbox&quot; id=&quot;danger3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Warning&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;checkbox&quot; id=&quot;warning-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;checkbox&quot; id=&quot;warning2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;checkbox&quot; id=&quot;warning3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Primary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;checkbox&quot; id=&quot;primary-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;checkbox&quot; id=&quot;primary2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;checkbox&quot; id=&quot;primary3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Secondary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                        </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="checkbox"
                                                    id="success-check" value="option1">
                                                <label class="form-check-label" for="success-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="checkbox"
                                                    id="success2-check" value="option1" checked="">
                                                <label class="form-check-label" for="success2-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="checkbox"
                                                    id="success3-check" value="option1" disabled=""
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="success3-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="checkbox"
                                                    id="danger-check" value="option1">
                                                <label class="form-check-label" for="danger-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="checkbox"
                                                    id="danger2-check" value="option1" checked="">
                                                <label class="form-check-label" for="danger2-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="checkbox"
                                                    id="danger3-check" value="option1" disabled=""
                                                    checked="">
                                                <label class="form-check-label" for="danger3-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="checkbox"
                                                    id="warning-check" value="option1">
                                                <label class="form-check-label" for="warning-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="checkbox"
                                                    id="warning2-check" value="option1" checked="">
                                                <label class="form-check-label" for="warning2-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="checkbox"
                                                    id="warning3-check" value="option1" disabled=""
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="warning3-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="checkbox"
                                                    id="primary-check" value="option1">
                                                <label class="form-check-label" for="primary-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="checkbox"
                                                    id="primary2-check" value="option1" checked="">
                                                <label class="form-check-label" for="primary2-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="checkbox"
                                                    id="primary3-check" value="option1" disabled=""
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="primary3-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="checkbox"
                                                    id="secondary-check" value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="checkbox"
                                                    id="secondary2-check" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="checkbox"
                                                    id="secondary3-check" value="option1" disabled=""
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="secondary3-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Checks - Colors -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Checks - Light Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Checks - Light Colors</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code5-2-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code5-2-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Checks - Light Colors - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                        <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Success&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-light-success&quot; type=&quot;checkbox&quot; id=&quot;success-light-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-light-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;checkbox&quot; id=&quot;success2-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;checkbox&quot; id=&quot;success3-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Danger&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;checkbox&quot; id=&quot;danger-light-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-light-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;checkbox&quot; id=&quot;danger2-light-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-light-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;checkbox&quot; id=&quot;danger3-light-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-light-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Warning&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;checkbox&quot; id=&quot;warning-light-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-light-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;checkbox&quot; id=&quot;warning2-light-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-light-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;checkbox&quot; id=&quot;warning3-light-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-light-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Primary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;checkbox&quot; id=&quot;primary-light-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-light-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;checkbox&quot; id=&quot;primary2-light-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-light-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;checkbox&quot; id=&quot;primary3-light-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-light-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Secondary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary-light-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-light-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary2-light-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-light-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary3-light-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-light-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                        </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="checkbox" id="success-light-check" value="option1">
                                                <label class="form-check-label"
                                                    for="success-light-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="checkbox" id="success2-light-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="success2-light-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="checkbox" id="success3-radio-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="success3-radio-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="checkbox" id="danger-light-check" value="option1">
                                                <label class="form-check-label"
                                                    for="danger-light-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="checkbox" id="danger2-light-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="danger2-light-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="checkbox" id="danger3-light-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="danger3-light-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="checkbox" id="warning-light-check" value="option1">
                                                <label class="form-check-label"
                                                    for="warning-light-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="checkbox" id="warning2-light-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="warning2-light-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="checkbox" id="warning3-light-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="warning3-light-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="checkbox" id="primary-light-check" value="option1">
                                                <label class="form-check-label"
                                                    for="primary-light-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="checkbox" id="primary2-light-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="primary2-light-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="checkbox" id="primary3-light-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="primary3-light-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="checkbox" id="secondary-light-check" value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-light-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="checkbox" id="secondary2-light-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-light-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="checkbox" id="secondary3-light-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="secondary3-light-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Checks - Light Colors -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Checks - Outline Border Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-05">
                                                Checks - Outline Border Colors
                                            </h5>
                                        </div>
                                        <div class=" ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code5-3-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code5-3-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Checks - Outline Border Colors - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                        <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Success Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;checkbox&quot; id=&quot;success-outline-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-outline-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;checkbox&quot; id=&quot;success2-outline-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-outline-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;checkbox&quot; id=&quot;success3-outline--check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-outline--check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Danger Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;checkbox&quot; id=&quot;danger-outline-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-outline-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;checkbox&quot; id=&quot;danger2-outline-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-outline-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;checkbox&quot; id=&quot;danger3-outline-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-outline-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Warning Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;checkbox&quot; id=&quot;warning-outline-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-outline-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;checkbox&quot; id=&quot;warning2-outline-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-outline-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;checkbox&quot; id=&quot;warning3-outline-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-outline-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Primary Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;checkbox&quot; id=&quot;primary-outline-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-outline-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;checkbox&quot; id=&quot;primary2-outline-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-outline-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;checkbox&quot; id=&quot;primary3-outline-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-outline-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Secondary Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary-outline-check&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-outline-check&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary2-outline-check&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-outline-check&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;checkbox&quot; id=&quot;secondary3-outline-check&quot; value=&quot;option1&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-outline-check&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                        </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="checkbox" id="success-outline-check" value="option1">
                                                <label class="form-check-label"
                                                    for="success-outline-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="checkbox" id="success2-outline-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="success2-outline-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="checkbox" id="success3-outline--check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="success3-outline--check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="checkbox" id="danger-outline-check" value="option1">
                                                <label class="form-check-label"
                                                    for="danger-outline-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="checkbox" id="danger2-outline-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="danger2-outline-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="checkbox" id="danger3-outline-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="danger3-outline-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="checkbox" id="warning-outline-check" value="option1">
                                                <label class="form-check-label"
                                                    for="warning-outline-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="checkbox" id="warning2-outline-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="warning2-outline-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="checkbox" id="warning3-outline-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="warning3-outline-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="checkbox" id="primary-outline-check" value="option1">
                                                <label class="form-check-label"
                                                    for="primary-outline-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="checkbox" id="primary2-outline-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="primary2-outline-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="checkbox" id="primary3-outline-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="primary3-outline-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="checkbox" id="secondary-outline-check" value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-outline-check">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="checkbox" id="secondary2-outline-check" value="option1"
                                                    checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-outline-check">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="checkbox" id="secondary3-outline-check" value="option1"
                                                    disabled="" checked="">
                                                <label class="form-check-label"
                                                    for="secondary3-outline-check">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Checks - Outline Border Colors -->
                        </div>
                        <!-- ------------------------------------------ -->
                        <!-- radios -->
                        <!-- ------------------------------------------ -->
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Radios - Default -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Radios - Default</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code6-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code6-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radios - Default- View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios1&quot; value=&quot;option1&quot; checked&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios1&quot;&gt;
            Default radio
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios2&quot; value=&quot;option2&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios2&quot;&gt;
            Second default radio
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios3&quot; value=&quot;option3&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;exampleRadios3&quot;&gt;
            Disabled radio
          &lt;/label&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Second default radio
                                        </label>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios3" value="option3" disabled="">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- end Radios - Default -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Radios - Disabled -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Radios - Disabled</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code8-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code8-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radios - Disabled - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioDisabled&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDisabled&quot;&gt;
            Disabled radio
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioCheckedDisabled&quot; checked disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioCheckedDisabled&quot;&gt;
            Disabled checked radio
          &lt;/label&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled" disabled="">
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            Disabled radio
                                        </label>
                                    </div>
                                    <div class="form-check py-2">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            Disabled checked radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- end Radios - Disabled -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Radio - Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Radio - Colors</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code9-1-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code9-1-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radio - Colors - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                        <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Success&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;radio&quot; name=&quot;radio-solid-success&quot; id=&quot;success-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;radio&quot; name=&quot;radio-solid-success&quot; id=&quot;success2-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success&quot; type=&quot;radio&quot; name=&quot;radio-solid-success&quot; id=&quot;success3-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Danger&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;radio&quot; name=&quot;radio-solid-danger&quot; id=&quot;danger-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;radio&quot; name=&quot;radio-solid-danger&quot; id=&quot;danger2-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger&quot; type=&quot;radio&quot; name=&quot;radio-solid-danger&quot; id=&quot;danger3-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot; &gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Warning&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;radio&quot; name=&quot;radio-solid-warning&quot; id=&quot;warning-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;radio&quot; name=&quot;radio-solid-warning&quot; id=&quot;warning2-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning&quot; type=&quot;radio&quot; name=&quot;radio-solid-warning&quot; id=&quot;warning3-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot; &gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Primary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;radio&quot; name=&quot;radio-solid-primary&quot; id=&quot;primary-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;radio&quot; name=&quot;radio-solid-primary&quot; id=&quot;primary2-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary&quot; type=&quot;radio&quot; name=&quot;radio-solid-primary&quot; id=&quot;primary3-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot; &gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Secondary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;radio&quot; name=&quot;radio-solid-secondary&quot; id=&quot;secondary-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;radio&quot; name=&quot;radio-solid-secondary&quot; id=&quot;secondary2-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary&quot; type=&quot;radio&quot; name=&quot;radio-solid-secondary&quot; id=&quot;secondary3-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot; &gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                        </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="radio"
                                                    name="radio-solid-success" id="success-radio" value="option1">
                                                <label class="form-check-label" for="success-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="radio"
                                                    name="radio-solid-success" id="success2-radio" value="option1"
                                                    checked="">
                                                <label class="form-check-label" for="success2-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success" type="radio"
                                                    name="radio-solid-success" id="success3-radio" value="option1"
                                                    disabled="">
                                                <label class="form-check-label"
                                                    for="success3-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="radio"
                                                    name="radio-solid-danger" id="danger-radio" value="option1">
                                                <label class="form-check-label" for="danger-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="radio"
                                                    name="radio-solid-danger" id="danger2-radio" value="option1"
                                                    checked="">
                                                <label class="form-check-label" for="danger2-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger" type="radio"
                                                    name="radio-solid-danger" id="danger3-radio" value="option1"
                                                    disabled="">
                                                <label class="form-check-label" for="danger3-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="radio"
                                                    name="radio-solid-warning" id="warning-radio" value="option1">
                                                <label class="form-check-label" for="warning-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="radio"
                                                    name="radio-solid-warning" id="warning2-radio" value="option1"
                                                    checked="">
                                                <label class="form-check-label" for="warning2-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning" type="radio"
                                                    name="radio-solid-warning" id="warning3-radio" value="option1"
                                                    disabled="">
                                                <label class="form-check-label"
                                                    for="warning3-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="radio"
                                                    name="radio-solid-primary" id="primary-radio" value="option1">
                                                <label class="form-check-label" for="primary-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="radio"
                                                    name="radio-solid-primary" id="primary2-radio" value="option1"
                                                    checked="">
                                                <label class="form-check-label" for="primary2-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary" type="radio"
                                                    name="radio-solid-primary" id="primary3-radio" value="option1"
                                                    disabled="">
                                                <label class="form-check-label"
                                                    for="primary3-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="radio"
                                                    name="radio-solid-secondary" id="secondary-radio"
                                                    value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="radio"
                                                    name="radio-solid-secondary" id="secondary2-radio"
                                                    value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary" type="radio"
                                                    name="radio-solid-secondary" id="secondary3-radio"
                                                    value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="secondary3-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Radio - Colors -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!--  start Radios - Light Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Radios - Light Colors</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code9-2-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code9-2-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radios - Light Colors - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                        <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Success&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-light-success&quot; type=&quot;radio&quot; name=&quot;radio-light-success&quot; id=&quot;success-light-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-light-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-light-success&quot; type=&quot;radio&quot; name=&quot;radio-light-success&quot; id=&quot;success2-light-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-light-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-light-success&quot; type=&quot;radio&quot; name=&quot;radio-light-success&quot; id=&quot;success3-light-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-light-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Danger&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;radio&quot; name=&quot;radio-light-danger&quot; id=&quot;danger-light-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-light-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;radio&quot; name=&quot;radio-light-danger&quot; id=&quot;danger2-light-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-light-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-light-danger&quot; type=&quot;radio&quot; name=&quot;radio-light-danger&quot; id=&quot;danger3-light-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-light-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Warning&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;radio&quot; name=&quot;radio-light-warning&quot; id=&quot;warning-light-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-light-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;radio&quot; name=&quot;radio-light-warning&quot; id=&quot;warning2-light-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-light-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-light-warning&quot; type=&quot;radio&quot; name=&quot;radio-light-warning&quot; id=&quot;warning3-light-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-light-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Primary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;radio&quot; name=&quot;radio-light-primary&quot; id=&quot;primary-light-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-light-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;radio&quot; name=&quot;radio-light-primary&quot; id=&quot;primary2-light-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-light-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-light-primary&quot; type=&quot;radio&quot; name=&quot;radio-light-primary&quot; id=&quot;primary3-light-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-light-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Light Secondary&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;radio&quot; name=&quot;radio-light-secondary&quot; id=&quot;secondary-light-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-light-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;radio&quot; name=&quot;radio-light-secondary&quot; id=&quot;secondary2-light-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-light-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-light-secondary&quot; type=&quot;radio&quot; name=&quot;radio-light-secondary&quot; id=&quot;secondary3-light-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-light-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                        </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="radio" name="radio-light-success"
                                                    id="success-light-radio" value="option1">
                                                <label class="form-check-label"
                                                    for="success-light-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="radio" name="radio-light-success"
                                                    id="success2-light-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="success2-light-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-light-success"
                                                    type="radio" name="radio-light-success"
                                                    id="success3-light-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="success3-light-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="radio" name="radio-light-danger"
                                                    id="danger-light-radio" value="option1">
                                                <label class="form-check-label"
                                                    for="danger-light-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="radio" name="radio-light-danger"
                                                    id="danger2-light-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="danger2-light-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-light-danger"
                                                    type="radio" name="radio-light-danger"
                                                    id="danger3-light-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="danger3-light-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="radio" name="radio-light-warning"
                                                    id="warning-light-radio" value="option1">
                                                <label class="form-check-label"
                                                    for="warning-light-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="radio" name="radio-light-warning"
                                                    id="warning2-light-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="warning2-light-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-light-warning"
                                                    type="radio" name="radio-light-warning"
                                                    id="warning3-light-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="warning3-light-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="radio" name="radio-light-primary"
                                                    id="primary-light-radio" value="option1">
                                                <label class="form-check-label"
                                                    for="primary-light-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="radio" name="radio-light-primary"
                                                    id="primary2-light-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="primary2-light-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-light-primary"
                                                    type="radio" name="radio-light-primary"
                                                    id="primary3-light-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="primary3-light-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="radio" name="radio-light-secondary"
                                                    id="secondary-light-radio" value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-light-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="radio" name="radio-light-secondary"
                                                    id="secondary2-light-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-light-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input secondary check-light-secondary"
                                                    type="radio" name="radio-light-secondary"
                                                    id="secondary3-light-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="secondary3-light-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  end Radios - Light Colors -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!--  start Radios - Outline Border Colors -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-05">
                                                Radios - Outline Border Colors
                                            </h5>
                                        </div>
                                        <div class=" ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code9-3-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code9-3-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radios - Outline Border Colors - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Success Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;radio&quot; id=&quot;success-outline-radio&quot; name=&quot;radio-success&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success-outline-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;radio&quot; id=&quot;success2-outline-radio&quot; name=&quot;radio-success&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success2-outline-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input success check-outline outline-success&quot; type=&quot;radio&quot; id=&quot;success3-outline-radio&quot; value=&quot;option1&quot; name=&quot;radio-success&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;success3-outline-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Danger Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;radio&quot; id=&quot;danger-outline-radio&quot; name=&quot;radio-danger&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger-outline-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;radio&quot; id=&quot;danger2-outline-radio&quot; name=&quot;radio-danger&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger2-outline-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input danger check-outline outline-danger&quot; type=&quot;radio&quot; id=&quot;danger3-outline-radio&quot; name=&quot;radio-danger&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;danger3-outline-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Warning Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;radio&quot; name=&quot;radio-warning&quot; id=&quot;warning-outline-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning-outline-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;radio&quot; name=&quot;radio-warning&quot; id=&quot;warning2-outline-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning2-outline-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input warning check-outline outline-warning&quot; type=&quot;radio&quot; name=&quot;radio-warning&quot; id=&quot;warning3-outline-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;warning3-outline-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Primary Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;radio&quot; name=&quot;radio-primary&quot; id=&quot;primary-outline-radio&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary-outline-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;radio&quot; name=&quot;radio-primary&quot; id=&quot;primary2-outline-radio&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary2-outline-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input primary check-outline outline-primary&quot; type=&quot;radio&quot; name=&quot;radio-primary&quot; id=&quot;primary3-outline-radio&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;primary3-outline-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row py-2&quot;&gt;
            &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;label&gt;Secondary Border&lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;radio&quot; id=&quot;secondary-outline-radio&quot; name=&quot;radio-secondary&quot; value=&quot;option1&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary-outline-radio&quot;&gt;Default&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;radio&quot; id=&quot;secondary2-outline-radio&quot; name=&quot;radio-secondary&quot; value=&quot;option1&quot; checked=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary2-outline-radio&quot;&gt;Checked&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
                      &lt;input class=&quot;form-check-input secondary check-outline outline-secondary&quot; type=&quot;radio&quot; id=&quot;secondary3-outline-radio&quot; name=&quot;radio-secondary&quot; value=&quot;option1&quot; disabled=&quot;&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;secondary3-outline-radio&quot;&gt;Disabled&lt;/label&gt;
                    &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Success</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="radio" id="success-outline-radio" name="radio-success"
                                                    value="option1">
                                                <label class="form-check-label"
                                                    for="success-outline-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="radio" id="success2-outline-radio"
                                                    name="radio-success" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="success2-outline-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input success check-outline outline-success"
                                                    type="radio" id="success3-outline-radio" value="option1"
                                                    name="radio-success" disabled="">
                                                <label class="form-check-label"
                                                    for="success3-outline-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Danger</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="radio" id="danger-outline-radio" name="radio-danger"
                                                    value="option1">
                                                <label class="form-check-label"
                                                    for="danger-outline-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="radio" id="danger2-outline-radio" name="radio-danger"
                                                    value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="danger2-outline-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input danger check-outline outline-danger"
                                                    type="radio" id="danger3-outline-radio" name="radio-danger"
                                                    value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="danger3-outline-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Warning</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="radio" name="radio-warning" id="warning-outline-radio"
                                                    value="option1">
                                                <label class="form-check-label"
                                                    for="warning-outline-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="radio" name="radio-warning"
                                                    id="warning2-outline-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="warning2-outline-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input warning check-outline outline-warning"
                                                    type="radio" name="radio-warning"
                                                    id="warning3-outline-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="warning3-outline-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Primary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="radio" name="radio-primary" id="primary-outline-radio"
                                                    value="option1">
                                                <label class="form-check-label"
                                                    for="primary-outline-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="radio" name="radio-primary"
                                                    id="primary2-outline-radio" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="primary2-outline-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input primary check-outline outline-primary"
                                                    type="radio" name="radio-primary"
                                                    id="primary3-outline-radio" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="primary3-outline-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4 col-xl-3">
                                            <span class="fs-3 text-muted">Secondary</span>
                                        </div>
                                        <div class="col-md-8 col-xl-9">
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="radio" id="secondary-outline-radio"
                                                    name="radio-secondary" value="option1">
                                                <label class="form-check-label"
                                                    for="secondary-outline-radio">Default</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="radio" id="secondary2-outline-radio"
                                                    name="radio-secondary" value="option1" checked="">
                                                <label class="form-check-label"
                                                    for="secondary2-outline-radio">Checked</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input secondary check-outline outline-secondary"
                                                    type="radio" id="secondary3-outline-radio"
                                                    name="radio-secondary" value="option1" disabled="">
                                                <label class="form-check-label"
                                                    for="secondary3-outline-radio">Disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  end Radios - Outline Border Colors -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!--  start Toggle buttons -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Toggle buttons</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code10-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code10-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Toggle buttons - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;d-md-flex gap-2&quot;&gt;
          &lt;div&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check&quot; autocomplete=&quot;off&quot;&gt;
              &lt;label class=&quot;btn btn-outline-primary  rounded-pill&quot; for=&quot;btn-check&quot;&gt;Single toggle&lt;/label&gt;
          &lt;/div&gt;

          &lt;div&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-2&quot; checked autocomplete=&quot;off&quot;&gt;
              &lt;label class=&quot;btn btn-outline-info  rounded-pill&quot; for=&quot;btn-check-2&quot;&gt;Checked&lt;/label&gt;
          &lt;/div&gt;
          &lt;div&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-3&quot; autocomplete=&quot;off&quot; disabled&gt;
              &lt;label class=&quot;btn btn-outline-danger  rounded-pill&quot; for=&quot;btn-check-3&quot;&gt;Disabled&lt;/label&gt;
          &lt;/div&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-6">
                                        <div>
                                            <input type="checkbox" class="btn-check" id="btn-check"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary  rounded-pill"
                                                for="btn-check">Single
                                                toggle</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" class="btn-check" id="btn-check-2"
                                                checked="" autocomplete="off">
                                            <label class="btn btn-outline-info  rounded-pill"
                                                for="btn-check-2">Checked</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" id="btn-check-3"
                                                autocomplete="off" disabled="">
                                            <label class="btn btn-outline-danger  rounded-pill"
                                                for="btn-check-3">Disabled</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  end Toggle buttons -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Radio toggle buttons-->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Radio toggle buttons</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code11-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code11-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Radio toggle buttons - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option1&quot; autocomplete=&quot;off&quot; checked&gt;
        &lt;label class=&quot;btn btn-outline-primary rounded-pill &quot; for=&quot;option1&quot;&gt;Checked&lt;/label&gt;

        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option2&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-warning rounded-pill &quot; for=&quot;option2&quot;&gt;Radio&lt;/label&gt;

        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option3&quot; autocomplete=&quot;off&quot; disabled&gt;
        &lt;label class=&quot;btn btn-outline-info rounded-pill &quot; for=&quot;option3&quot;&gt;Disabled&lt;/label&gt;

        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option4&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-danger rounded-pill &quot; for=&quot;option4&quot;&gt;Radio&lt;/label&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-6">
                                        <input type="radio" class="btn-check" name="options" id="option1"
                                            autocomplete="off" checked="">
                                        <label class="btn btn-outline-primary rounded-pill "
                                            for="option1">Checked</label>

                                        <input type="radio" class="btn-check" name="options" id="option2"
                                            autocomplete="off">
                                        <label class="btn btn-outline-warning rounded-pill "
                                            for="option2">Radio</label>

                                        <input type="radio" class="btn-check" name="options" id="option3"
                                            autocomplete="off" disabled="">
                                        <label class="btn btn-outline-info rounded-pill "
                                            for="option3">Disabled</label>

                                        <input type="radio" class="btn-check" name="options" id="option4"
                                            autocomplete="off">
                                        <label class="btn btn-outline-danger rounded-pill "
                                            for="option4">Radio</label>
                                    </div>
                                </div>
                            </div>
                            <!--  end Radio toggle buttons -->
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <!-- start Outlined styles -->
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div>
                                            <h5 class="mb-0">Outlined styles</h5>
                                        </div>
                                        <div class="ms-auto flex-shrink-0">
                                            <button
                                                class="btn bg-primary-subtle text-primary rounded-pill text-decoration-none btn-sm"
                                                title="View Code" data-bs-toggle="modal"
                                                data-bs-target="#view-code12-modal">
                                                <i class="ti ti-code fs-5 d-flex"></i>
                                            </button>
                                            <!-- Code Modal -->
                                            <div id="view-code12-modal" class="modal fade" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-bottom">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Outlined styles - View Code
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <pre class="language-html scrollable">
                                                                    <code>
        &lt;div class=&quot;d-inline-block&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-outlined&quot; autocomplete=&quot;off&quot;&gt;
            &lt;label class=&quot;btn btn-outline-primary mb-2 rounded-pill &quot; for=&quot;btn-check-outlined&quot;&gt;Single toggle&lt;/label&gt;&lt;br&gt;

            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-2-outlined&quot; checked autocomplete=&quot;off&quot;&gt;
            &lt;label class=&quot;btn btn-outline-success mb-2  rounded-pill&quot; for=&quot;btn-check-2-outlined&quot;&gt;Checked&lt;/label&gt;&lt;br&gt;

            &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options-outlined&quot; id=&quot;success-outlined&quot; autocomplete=&quot;off&quot; checked&gt;
            &lt;label class=&quot;btn btn-outline-info mb-2  rounded-pill&quot; for=&quot;success-outlined&quot;&gt;Checked success radio&lt;/label&gt;

            &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options-outlined&quot; id=&quot;danger-outlined&quot; autocomplete=&quot;off&quot;&gt;
            &lt;label class=&quot;btn btn-outline-danger mb-2  rounded-pill&quot; for=&quot;danger-outlined&quot;&gt;Danger radio&lt;/label&gt;
        &lt;/div&gt;
                                                                    </code>
                                                                </pre>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="d-inline-block">
                                        <input type="checkbox" class="btn-check" id="btn-check-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary mb-6 rounded-pill "
                                            for="btn-check-outlined">Single
                                            toggle</label><br>

                                        <input type="checkbox" class="btn-check" id="btn-check-2-outlined"
                                            checked="" autocomplete="off">
                                        <label class="btn btn-outline-success mb-6  rounded-pill"
                                            for="btn-check-2-outlined">Checked</label><br>

                                        <input type="radio" class="btn-check" name="options-outlined"
                                            id="success-outlined" autocomplete="off" checked="">
                                        <label class="btn btn-outline-info mb-6  rounded-pill"
                                            for="success-outlined">Checked
                                            success radio</label>

                                        <input type="radio" class="btn-check" name="options-outlined"
                                            id="danger-outlined" autocomplete="off">
                                        <label class="btn btn-outline-danger mb-6  rounded-pill"
                                            for="danger-outlined">Danger
                                            radio</label>
                                    </div>
                                </div>
                            </div>
                            <!--  end Outlined styles -->
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
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/prismjs/prism.js"></script>
</body>

</html>
