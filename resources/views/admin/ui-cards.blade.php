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
                                    <h4 class="fw-semibold mb-8">UI Card</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">UI Card</li>
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

                    <!-- 1. card with img -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Card with Image</h4>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            <button class="btn bg-primary-subtle text-primary rounded-pill  btn-sm"
                                title="View Code" data-bs-toggle="modal" data-bs-target="#view-code1-modal">
                                <i class="ti ti-code fs-6"></i>
                            </button>
                            <!-- Code Modal -->
                            <div id="view-code1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Card with Image - View Code
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <pre class="language-html">
<code>
&lt;div class=&quot;row&quot;&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img1.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img2.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img3.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img4.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img5.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
&lt;!-- column --&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;!-- Card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img class=&quot;card-img-top img-responsive&quot; src=&quot;./assets/images/blog/blog-img6.jpg&quot;
    alt=&quot;Card image cap&quot; /&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
    &lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Card --&gt;
&lt;/div&gt;
&lt;!-- column --&gt;
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
                    <!-- Row -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img1.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img4.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img5.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../assets/images/blog/blog-img6.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                    </div>
                    <!-- Row -->
                    <!-- 1. end card with img -->

                    <!-- 2. card with body -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Card without image</h4>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            <button class="btn bg-primary-subtle text-primary rounded-pill  btn-sm"
                                title="View Code" data-bs-toggle="modal" data-bs-target="#view-code2-modal">
                                <i class="ti ti-code fs-6"></i>
                            </button>
                            <!-- Code Modal -->
                            <div id="view-code2-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Card without image - View Code
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <pre class="language-html">
<code>
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-md-6 col-lg-3&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;James Smith&lt;/h5&gt;
      &lt;h6 class=&quot;card-subtitle mb-2 text-muted d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-map-pin me-1 fs-5&quot;&gt;&lt;/i&gt;Albania&lt;/h6&gt;
      &lt;p class=&quot;card-text pt-2&quot;&gt;
        Some quick example text to build on the card title and make up the bulk of the card's content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Follow&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;View profile&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6 col-lg-3&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Michael Smith&lt;/h5&gt;
      &lt;h6 class=&quot;card-subtitle mb-2 text-muted d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-map-pin me-1 fs-5&quot;&gt;&lt;/i&gt;Belize&lt;/h6&gt;
      &lt;p class=&quot;card-text pt-2&quot;&gt;
        Some quick example text to build on the card title and make up the bulk of the card's content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Follow&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;View profile&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6 col-lg-3&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Maria Hernandez&lt;/h5&gt;
      &lt;h6 class=&quot;card-subtitle mb-2 text-muted d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-map-pin me-1 fs-5&quot;&gt;&lt;/i&gt;Colombia&lt;/h6&gt;
      &lt;p class=&quot;card-text pt-2&quot;&gt;
        Some quick example text to build on the card title and make up the bulk of the card's content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Follow&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;View profile&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-6 col-lg-3&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;David Margaret&lt;/h5&gt;
      &lt;h6 class=&quot;card-subtitle mb-2 text-muted d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-map-pin me-1 fs-5&quot;&gt;&lt;/i&gt;Egypt&lt;/h6&gt;
      &lt;p class=&quot;card-text pt-2&quot;&gt;
        Some quick example text to build on the card title and make up the bulk of the card's content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Follow&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;View profile&lt;/a&gt;
    &lt;/div&gt;
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
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">James Smith</h5>
                                    <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i
                                            class="ti ti-map-pin me-1 fs-5"></i>Albania</h6>
                                    <p class="card-text pt-2">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#" class="card-link">Follow</a>
                                    <a href="#" class="card-link">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Michael Smith</h5>
                                    <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i
                                            class="ti ti-map-pin me-1 fs-5"></i>Belize</h6>
                                    <p class="card-text pt-2">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#" class="card-link">Follow</a>
                                    <a href="#" class="card-link">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Maria Hernandez</h5>
                                    <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i
                                            class="ti ti-map-pin me-1 fs-5"></i>Colombia</h6>
                                    <p class="card-text pt-2">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#" class="card-link">Follow</a>
                                    <a href="#" class="card-link">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">David Margaret</h5>
                                    <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i
                                            class="ti ti-map-pin me-1 fs-5"></i>Egypt</h6>
                                    <p class="card-text pt-2">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                    <a href="#" class="card-link">Follow</a>
                                    <a href="#" class="card-link">View profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <!-- 2. end card with img -->

                    <!-- 3. kichen sink -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Kichen Sink</h4>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            <button class="btn bg-primary-subtle text-primary rounded-pill  btn-sm"
                                title="View Code" data-bs-toggle="modal" data-bs-target="#view-code3-modal">
                                <i class="ti ti-code fs-6"></i>
                            </button>
                            <!-- Code Modal -->
                            <div id="view-code3-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Kichen Sink - View Code
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <pre class="language-html">
<code>
&lt;div class=&quot;row justify-content-center&quot;&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img src=&quot;./assets/images/blog/blog-img5.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot; /&gt;
  &lt;div class=&quot;card-body p-10&quot;&gt;
    &lt;h5 class=&quot;card-title fs-5&quot;&gt;Nancy Henry&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;card-body button-group d-flex align-items-stretch p-10&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-heart fs-6 me-1&quot;&gt;&lt;/i&gt; Like&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-message-circle fs-6 me-1&quot;&gt;&lt;/i&gt; Comment&lt;/a&gt;
    &lt;div class=&quot;ms-auto&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row&quot;&gt;&lt;i class=&quot;ti ti-share fs-6&quot;&gt;&lt;/i&gt; &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img src=&quot;./assets/images/blog/blog-img6.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot; /&gt;
  &lt;div class=&quot;card-body p-10&quot;&gt;
    &lt;h5 class=&quot;card-title fs-5&quot;&gt;George Jane&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;card-body button-group d-flex align-items-stretch p-10&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-heart fs-6 me-1&quot;&gt;&lt;/i&gt; Like&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-message-circle fs-6 me-1&quot;&gt;&lt;/i&gt; Comment&lt;/a&gt;
    &lt;div class=&quot;ms-auto&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row&quot;&gt;&lt;i class=&quot;ti ti-share fs-6&quot;&gt;&lt;/i&gt; &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img src=&quot;./assets/images/blog/blog-img8.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot; /&gt;
  &lt;div class=&quot;card-body p-10&quot;&gt;
    &lt;h5 class=&quot;card-title fs-5&quot;&gt;Samuel Eliza&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;
      Some quick example text to build on the card title and make up the bulk of the card's content.
    &lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;card-body button-group d-flex align-items-stretch p-10&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-heart fs-6 me-1&quot;&gt;&lt;/i&gt; Like&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center&quot;&gt;&lt;i class=&quot;ti ti-message-circle fs-6 me-1&quot;&gt;&lt;/i&gt; Comment&lt;/a&gt;
    &lt;div class=&quot;ms-auto&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row&quot;&gt;&lt;i class=&quot;ti ti-share fs-6&quot;&gt;&lt;/i&gt; &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
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
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="../assets/images/blog/blog-img5.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-10">
                                    <h5 class="card-title fs-5">Nancy Henry</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body button-group d-flex align-items-stretch p-10">
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-heart fs-6 me-1"></i> Like</a>
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-message-circle fs-6 me-1"></i> Comment</a>
                                    <div class="ms-auto">
                                        <a href="#"
                                            class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row"><i
                                                class="ti ti-share fs-6"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="../assets/images/blog/blog-img6.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-10">
                                    <h5 class="card-title fs-5">George Jane</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body button-group d-flex align-items-stretch p-10">
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-heart fs-6 me-1"></i> Like</a>
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-message-circle fs-6 me-1"></i> Comment</a>
                                    <div class="ms-auto">
                                        <a href="#"
                                            class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row"><i
                                                class="ti ti-share fs-6"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="../assets/images/blog/blog-img8.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-10">
                                    <h5 class="card-title fs-5">Samuel Eliza</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's content.
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body button-group d-flex align-items-stretch p-10">
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-heart fs-6 me-1"></i> Like</a>
                                    <a href="#"
                                        class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center"><i
                                            class="ti ti-message-circle fs-6 me-1"></i> Comment</a>
                                    <div class="ms-auto">
                                        <a href="#"
                                            class="btn bg-secondary-subtle text-secondary px-2 d-flex align-items-center flex-column flex-sm-row"><i
                                                class="ti ti-share fs-6"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3. end kichen sink -->

                    <!-- 4. Header and footer card -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Header and footer Card</h4>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            <button class="btn bg-primary-subtle text-primary rounded-pill  btn-sm"
                                title="View Code" data-bs-toggle="modal" data-bs-target="#view-code4-modal">
                                <i class="ti ti-code fs-6"></i>
                            </button>
                            <!-- Code Modal -->
                            <div id="view-code4-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Header and footer Card - View Code
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <pre class="language-html">
<code>
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-lg-6&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;Featured&lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        With supporting text below as a natural lead-in to additional content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-6&quot;&gt;
  &lt;div class=&quot;card text-center&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;Featured&lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;
        With supporting text below as a natural lead-in to additional content.
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">Featured</div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-center">
                                <div class="card-header">Featured</div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4. end Header and footer card -->

                    <!-- 5. card with background -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Card with background</h4>
                        </div>
                        <div class="ms-auto flex-shrink-0">
                            <button class="btn bg-primary-subtle text-primary rounded-pill  btn-sm"
                                title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-modal">
                                <i class="ti ti-code fs-6"></i>
                            </button>
                            <!-- Code Modal -->
                            <div id="view-code5-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Card with background - View Code
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <pre class="language-html">
<code>
&lt;div class=&quot;row gx-3&quot;&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white bg-primary rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-layout-grid fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;450&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      New Products
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white text-bg-success rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-archive fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;50&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      Pending Apps
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white text-bg-warning rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-users fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;80&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      New Customers
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white text-bg-danger rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-gift fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;15&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      Birthday Gifts
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white text-bg-info rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-credit-card fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;1800&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      Total Budgets
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-md-4 col-lg-2 col-6&quot;&gt;
&lt;div class=&quot;card text-white text-bg-secondary rounded&quot;&gt;
  &lt;div class=&quot;card-body p-4&quot;&gt;
    &lt;span&gt;
      &lt;i class=&quot;ti ti-brand-github fs-8&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;h3 class=&quot;card-title mt-3 mb-0 text-white&quot;&gt;90&lt;/h3&gt;
    &lt;p class=&quot;card-text text-white-50 fs-3 fw-normal&quot;&gt;
      Best Designers
    &lt;/p&gt;
  &lt;/div&gt;
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
                    <div class="row gx-3">
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-primary rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-layout-grid fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">450</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        New Products
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-success rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-archive fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">50</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        Pending Apps
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-warning rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-users fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">80</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        New Customers
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-danger rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-gift fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">15</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        Birthday Gifts
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-info rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-credit-card fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">1800</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        Total Budgets
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-6">
                            <div class="card text-white text-bg-secondary rounded">
                                <div class="card-body p-4">
                                    <span>
                                        <i class="ti ti-brand-github fs-8"></i>
                                    </span>
                                    <h3 class="card-title mt-3 mb-0 text-white">90</h3>
                                    <p class="card-text text-white-50 fs-3 fw-normal">
                                        Best Designers
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5. end card with background -->

                    <!-- 6. advertise card -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Advertise card</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s1.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">50%
                                                    sell on wrist
                                                    watch</a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    By Daniel Jubile
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s2.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">Small
                                                    Cabin Luggage
                                                    (57 cm) </a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    By John Smith
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s3.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">Women
                                                    Black Heels
                                                    Sandal</a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    By Nancy Deo
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s4.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">Boat
                                                    BassHeads 900
                                                    Wireless Headset </a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    Yellow , On the Ear
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s5.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)"
                                                    class="text-dark fs-4 link lh-sm">Beauty Blender
                                                    original makeup blender</a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    By Nancy Deo
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="p-4 d-flex align-items-stretch h-100">
                                    <div class="row">
                                        <div class="col-4 col-md-3 d-flex align-items-center">
                                            <img src="../assets/images/products/s6.jpg" class="rounded img-fluid">
                                        </div>
                                        <div class="col-8 col-md-9 d-flex align-items-center">
                                            <div>
                                                <a href="javascript:void(0)"
                                                    class="text-dark fs-4 link lh-sm">Canvas Shoes For
                                                    Men</a>
                                                <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted">
                                                    Absolute Comfort
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 6. end advertise card -->

                    <!-- 7. Stats card -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Stats card</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-success text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-basket display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">Selling Products</h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            Shoes, Jeans, Party wear, Watchs
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-warning text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-glass display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">Spicy Food</h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            Black Bean and Corn Jalapeño Poppers
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-danger text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-calendar display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">
                                            Dispatch Products
                                        </h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            Shoes, Jeans, Party wear, Watchs
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-primary text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-brand-apple display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">
                                            Apple Accessories
                                        </h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            Magsafe charger, Solo Loop
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-info text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-folders display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">Manage Data</h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            on mobile, on site
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <a href="javascript:void(0)" class="card text-bg-secondary text-white w-100 card-hover">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-alert-octagon display-6"></i>
                                        <div class="ms-auto">
                                            <i class="ti ti-arrow-right fs-8"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="card-title mb-1 text-white">
                                            New Notifications
                                        </h4>
                                        <h6 class="card-text fw-normal text-white-50">
                                            Facebook, Instagram
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- 7. end advertise card -->

                    <!-- 8. Card Header -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Card Header</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-primary">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-success">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-success">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-warning">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-warning">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-danger">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-danger">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-info">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-header text-bg-secondary">
                                    <h4 class="mb-0 text-white card-title">Card Title</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 8. end Card Header -->

                    <!-- 9. Progress Card -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5 fs-5">Progress Card</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Outbound calls</h4>
                                        <div class="ms-auto">
                                            <span class="text-danger fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                18% High
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn bg-primary-subtle text-primary ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-primary progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Contracts closed</h4>
                                        <div class="ms-auto">
                                            <span class="text-success fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                10% Down
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn bg-success-subtle text-success ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-success progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Call/Contract Ratio</h4>
                                        <div class="ms-auto">
                                            <span class="text-success fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                10% Down
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn bg-warning-subtle text-warning ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-warning progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Incoming Deals</h4>
                                        <div class="ms-auto">
                                            <span class="text-danger fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                06% Down
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-danger-subtle text-danger ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-danger progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Average Contract</h4>
                                        <div class="ms-auto">
                                            <span class="text-danger fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                04% Down
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-info-subtle text-info ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-info progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100 rounded-bottom-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Contract Rate</h4>
                                        <div class="ms-auto">
                                            <span class="text-danger fs-3 ">( <i class="ti ti-caret-down fs-4"></i>
                                                15% Down
                                                )</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <div class="border-end pe-3">
                                            <h6 class="text-muted fw-normal">Yearly</h6>
                                            <b>80.40%</b>
                                        </div>
                                        <div class="ms-3 border-end pe-3">
                                            <h6 class="text-muted fw-normal">Montly</h6>
                                            <b>15.40%</b>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-muted fw-normal">Day</h6>
                                            <b>5.50%</b>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="btn bg-secondary-subtle text-secondary ">Learn
                                        More</a>
                                </div>
                                <div class="progress text-bg-light">
                                    <div class="progress-bar progress-bar-striped text-bg-secondary progress-bar-animated"
                                        style="width: 60%; height: 6px;" role="progressbar">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- version2  -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-warning-subtle text-warning d-inline-block px-4 py-3 rounded">
                                            <i class="ti ti-brand-google-drive display-6"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <h6 class="dropdown-header">New</h6>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Folder</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Google Docs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Google Sheets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Google Slides</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h4 class="card-title">Google Drive</h4>
                                        <div class="progress mt-4 bg-light">
                                            <div class="progress-bar text-bg-warning"
                                                style="width: 78%; height: 6px;" role="progressbar">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 ">
                                            <span>13.1Gb</span>
                                            <div class="ms-auto">
                                                <span>15Gb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-info-subtle text-info d-inline-block px-4 py-3 rounded">
                                            <i class="ti ti-brand-facebook display-6"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Files</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Shared
                                                            Folder</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h4 class="card-title">Facebook</h4>
                                        <div class="progress mt-4 bg-light">
                                            <div class="progress-bar text-bg-info" style="width: 50%; height: 6px;"
                                                role="progressbar">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 ">
                                            <span>7.5Gb</span>
                                            <div class="ms-auto">
                                                <span>15Gb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary-subtle text-primary d-inline-block px-4 py-3 rounded">
                                            <i class="ti ti-brand-soundcloud display-6"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Files</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Shared
                                                            Folder</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h4 class="card-title">One Drive</h4>
                                        <div class="progress mt-4 bg-light">
                                            <div class="progress-bar text-bg-primary"
                                                style="width: 20%; height: 6px;" role="progressbar">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 ">
                                            <span>2Gb</span>
                                            <div class="ms-auto">
                                                <span>15Gb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-danger-subtle text-danger d-inline-block px-4 py-3 rounded">
                                            <i class="ti ti-brand-amazon display-6"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Files</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Upload Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Folder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">New Shared
                                                            Folder</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h4 class="card-title">Amazon</h4>
                                        <div class="progress mt-4 bg-light">
                                            <div class="progress-bar text-bg-danger"
                                                style="width: 85%; height: 6px;" role="progressbar">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 ">
                                            <span>4Gb</span>
                                            <div class="ms-auto">
                                                <span>15Gb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 9. end Progress Card -->

                    <!-- 10. category card -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Category Card</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-photo text-warning display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">My Photos</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 26 Items: 159 Used: 23.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-brand-google-drive text-info display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">My Google Docs</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 26 Items: 159 Used: 23.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-users text-success display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">My Google Contacts</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 45 Items: 78 Used: 3.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-folder-down text-danger display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">My Folder</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 45 Items: 78 Used: 3.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-download text-secondary display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">My Downloads</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 45 Items: 78 Used: 3.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card rounded-3 card-hover">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0"><i
                                                class="ti ti-folder-star text-primary display-6"></i></span>
                                        <div class="ms-4">
                                            <h4 class="card-title text-dark">Office Work</h4>
                                            <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                2.4GB Junk File
                                            </h6>
                                            <span class="fs-2 mt-1 ">Folder: 4 Items: 4800 Used: 2.6GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 10. end category card -->

                    <!-- 11. notes -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Notes Card</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Design Project</h4>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="new"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                    <li><a class="dropdown-item" href="#">Add</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-x display-6 text-info"></i>
                                                <span class="text-muted d-block">notes.zip</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-description display-6 text-primary"></i>
                                                <span class="text-muted d-block">File 1</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-description display-6 text-warning"></i>
                                                <span class="text-muted d-block">File 2</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-description display-6 text-secondary"></i>
                                                <span class="text-muted d-block">File 3</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Wedding Plans</h4>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="new"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                    <li><a class="dropdown-item" href="#">Add</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-x display-6 text-primary"></i>
                                                <span class="text-muted d-block">notes.zip</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-x display-6 text-secondary"></i>
                                                <span class="text-muted d-block">photo.jpg</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-music display-6 text-warning"></i>
                                                <span class="text-muted d-block">songs.mp3</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-x display-6 text-danger"></i>
                                                <span class="text-muted d-block">design.mp4</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Finances</h4>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="new"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                    <li><a class="dropdown-item" href="#">Add</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-description display-6 text-info"></i>
                                                <span class="text-muted d-block">File 1</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="#" class="text-center rounded-1 border py-3 d-block">
                                                <i class="ti ti-file-description display-6 text-warning"></i>
                                                <span class="text-muted d-block">File 2</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center rounded-1 border py-3">
                                                <i class="ti ti-file-description display-6 text-primary"></i>
                                                <span class="text-muted d-block">File 3</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center rounded-1 border py-3">
                                                <i class="ti ti-file-description display-6 text-success"></i>
                                                <span class="text-muted d-block">File 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Meal Plans</h4>
                                        <div class="ms-auto">
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link text-dark" id="new"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-7"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                    <li><a class="dropdown-item" href="#">Add</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mb-3">
                                            <div class="text-center rounded-1 border py-3">
                                                <a href="#" class="stretched-link"></a>
                                                <i class="ti ti-file-description display-6 text-info"></i>
                                                <span class="text-muted d-block">File 1</span>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="text-center rounded-1 border py-3">
                                                <a href="#" class="stretched-link"></a>
                                                <i class="ti ti-file-plus display-6 text-secondary"></i>
                                                <span class="text-muted d-block">File 2</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center rounded-1 border py-3">
                                                <a href="#" class="stretched-link"></a>
                                                <i class="ti ti-file-description display-6 text-primary"></i>
                                                <span class="text-muted d-block">File 3</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center rounded-1 border py-3">
                                                <a href="#" class="stretched-link"></a>
                                                <i class="ti ti-file-description display-6 text-danger"></i>
                                                <span class="text-muted d-block">File 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 11. end notes -->

                    <!-- 12. card action -->
                    <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                        <div>
                            <h4 class="mb-0 fs-5">Card with Action</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-bg-info d-flex align-items-center">
                                    <h4 class="card-title text-white mb-0">Title</h4>
                                    <div class="card-actions cursor-pointer ms-auto d-flex button-group">
                                        <a href="javascript:void(0)"
                                            class="link text-white d-flex align-items-center"
                                            data-action="collapse"><i class="ti ti-minus fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 btn-minimize px-2 cursor-pointer text-white link d-flex align-items-center"
                                            data-action="expand"><i class="ti ti-arrows-maximize fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 link d-flex text-white align-items-center pe-0 cursor-pointer"
                                            data-action="close">
                                            <i class="ti ti-x fs-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body collapse show">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-bg-primary d-flex align-items-center">
                                    <h4 class="card-title text-white mb-0">Title</h4>
                                    <div class="card-actions cursor-pointer ms-auto d-flex button-group">
                                        <a href="javascript:void(0)"
                                            class="link d-flex text-white align-items-center"
                                            data-action="collapse"><i class="ti ti-minus fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 text-white btn-minimize px-2 cursor-pointer link d-flex align-items-center"
                                            data-action="expand"><i class="ti ti-arrows-maximize fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 link text-white d-flex align-items-center pe-0 cursor-pointer"
                                            data-action="close">
                                            <i class="ti ti-x fs-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body collapse show">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-bg-success d-flex align-items-center">
                                    <h4 class="card-title text-white mb-0">Title</h4>
                                    <div class="card-actions cursor-pointer ms-auto d-flex button-group">
                                        <a href="javascript:void(0)"
                                            class="link text-white d-flex align-items-center"
                                            data-action="collapse"><i class="ti ti-minus fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 text-white btn-minimize px-2 cursor-pointer link d-flex align-items-center"
                                            data-action="expand"><i class="ti ti-arrows-maximize fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 text-white link d-flex align-items-center pe-0 cursor-pointer"
                                            data-action="close">
                                            <i class="ti ti-x fs-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body collapse show">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-bg-danger d-flex align-items-center">
                                    <h4 class="card-title text-white mb-0">Title</h4>
                                    <div class="card-actions cursor-pointer ms-auto d-flex button-group">
                                        <a href="javascript:void(0)"
                                            class="link d-flex text-white align-items-center"
                                            data-action="collapse"><i class="ti ti-minus fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 text-white btn-minimize px-2 cursor-pointer link d-flex align-items-center"
                                            data-action="expand"><i class="ti ti-arrows-maximize fs-6"></i></a>
                                        <a href="javascript:void(0)"
                                            class="mb-0 text-white link d-flex align-items-center pe-0 cursor-pointer"
                                            data-action="close">
                                            <i class="ti ti-x fs-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body collapse show">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
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
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/widget/ui-card-init.js"></script>
</body>

</html>
