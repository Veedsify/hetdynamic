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
                                    <h4 class="fw-semibold mb-8">Widgets-Apps</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Widgets-Apps</li>
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

                    <div class="row widget-app-columns">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Recent Comments copy and paste this code-->
                        <!-- -------------------------------------------------------------- -->
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Recent Comments</h4>
                                </div>
                                <div class="comment-widgets scrollable mb-2 common-widget h-450" data-simplebar="">
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                                        <div>
                                            <span class=""><img src="../assets/images/profile/user-2.jpg"
                                                    class="rounded-circle" alt="user" width="50"></span>
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-weight-medium">James Anderson</h6>
                                            <p class="mb-1 fs-2 text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                type etting industry
                                            </p>
                                            <div class="comment-footer mt-2">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="
                              badge
                              bg-info-subtle
                              text-info
                              rounded-pill
                              font-weight-medium
                              fs-1
                              py-1
                            ">Pending</span>
                                                    <span class="action-icons">
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-edit fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-check fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-heart fs-5"></i></a>
                                                    </span>
                                                </div>
                                                <span
                                                    class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April
                                                    14, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row border-bottom active p-3 gap-3">
                                        <div>
                                            <span><img src="../assets/images/profile/user-3.jpg"
                                                    class="rounded-circle" alt="user" width="50"></span>
                                        </div>
                                        <div class="comment-text active w-100">
                                            <h6 class="font-weight-medium">Michael Jorden</h6>
                                            <p class="mb-1 fs-2 text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                type setting industry.
                                            </p>
                                            <div class="comment-footer mt-2">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="
                              badge
                              bg-success-subtle
                              text-success
                              rounded-pill
                              font-weight-medium
                              fs-1
                              py-1
                            ">Approved</span>
                                                    <span class="action-icons active">
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-edit fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-circle-x fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-heart text-danger fs-5"></i></a>
                                                    </span>
                                                </div>
                                                <span
                                                    class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            text-end
                            mt-2
                            d-block
                          ">April
                                                    14, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                                        <div>
                                            <span><img src="../assets/images/profile/user-4.jpg"
                                                    class="rounded-circle" alt="user" width="50"></span>
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-weight-medium">Johnathan Doeting</h6>
                                            <p class="mb-1 fs-2 text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                type setting industry.
                                            </p>
                                            <div class="comment-footer mt-2">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="
                              badge
                              bg-danger-subtle
                              text-danger
                              rounded-pill
                              font-weight-medium
                              fs-1
                              py-1
                            ">Rejected</span>
                                                    <span class="action-icons">
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-edit fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-check fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-heart fs-5"></i></a>
                                                    </span>
                                                </div>
                                                <span
                                                    class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April
                                                    14, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row p-3 gap-3">
                                        <div>
                                            <span><img src="../assets/images/profile/user-5.jpg"
                                                    class="rounded-circle" alt="user" width="50"></span>
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-weight-medium">James Anderson</h6>
                                            <p class="mb-1 fs-2 text-muted">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                type setting industry.
                                            </p>
                                            <div class="comment-footer mt-2">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="
                              badge
                              bg-info-subtle
                              text-info
                              rounded-pill
                              font-weight-medium
                              fs-1
                              py-1
                            ">Pending</span>
                                                    <span class="action-icons">
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-edit fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-check fs-5"></i></a>
                                                        <a href="javascript:void(0)" class="ps-3"><i
                                                                class="ti ti-heart fs-5"></i></a>
                                                    </span>
                                                </div>
                                                <span
                                                    class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            text-end
                            mt-2
                          ">April
                                                    14, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title mb-0">Weather Report</h4>
                                        <select class="form-select w-auto ms-auto">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-center flex-row mt-4">
                                        <div class="p-2 display-5 text-info">
                                            <i class="ti ti-cloud-snow"></i>
                                            <span>73<sup>°</sup></span>
                                        </div>
                                        <div class="p-2">
                                            <h3 class="mb-0">Saturday</h3>
                                            <small>Ahmedabad, India</small>
                                        </div>
                                    </div>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Wind</td>
                                                <td class="font-weight-medium">ESE 17 mph</td>
                                            </tr>
                                            <tr>
                                                <td>Humidity</td>
                                                <td class="font-weight-medium">83%</td>
                                            </tr>
                                            <tr>
                                                <td>Pressure</td>
                                                <td class="font-weight-medium">28.56 in</td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Cover</td>
                                                <td class="font-weight-medium">78%</td>
                                            </tr>
                                            <tr>
                                                <td>Ceiling</td>
                                                <td class="font-weight-medium">25760 ft</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <ul class="list-unstyled row text-center city-weather-days">
                                        <li class="col">
                                            <i class="ti ti-sun-high fs-4"></i><span>09:30</span>
                                            <h3 class="mb-0 fs-14">70<sup>°</sup></h3>
                                        </li>
                                        <li class="col">
                                            <i class="ti ti-cloud fs-4"></i><span>11:30</span>
                                            <h3 class="mb-0 fs-14">72<sup>°</sup></h3>
                                        </li>
                                        <li class="col">
                                            <i class="ti ti-cloud-rain fs-4"></i><span>13:30</span>
                                            <h3 class="mb-0 fs-14">75<sup>°</sup></h3>
                                        </li>
                                        <li class="col">
                                            <i class="ti ti-cloud-snow fs-4"></i><span>15:30</span>
                                            <h3 class="mb-0 fs-14">76<sup>°</sup></h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="profile-pic mb-3 mt-3">
                                        <img src="../assets/images/profile/user-5.jpg" width="150"
                                            class="rounded-circle" alt="user">
                                        <h4 class="mt-3 mb-0">Daniel Kristeen</h4>
                                        <a href="mailto:danielkristeen@gmail.com">danielkristeen@gmail.com</a>
                                    </div>
                                    <div
                                        class="
                      badge
                      rounded-pill
                      bg-primary-subtle
                      text-primary
                      font-weight-medium
                      fs-4
                    ">
                                        Dashboard
                                    </div>
                                    <div
                                        class="
                      badge
                      rounded-pill
                      bg-primary-subtle
                      text-primary
                      font-weight-medium
                      fs-4
                    ">
                                        UI
                                    </div>
                                    <div
                                        class="
                      badge
                      rounded-pill
                      bg-primary-subtle
                      text-primary
                      font-weight-medium
                      fs-4
                    ">
                                        UX
                                    </div>
                                    <div class="badge rounded-pill text-bg-primary fs-4" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="3 more">
                                        +3
                                    </div>
                                </div>
                                <div class="p-4 border-top mt-3">
                                    <div class="row text-center">
                                        <div class="col-6 border-end">
                                            <a href="#"
                                                class="
                          link
                          text-dark
                          d-flex
                          align-items-center
                          justify-content-center
                          font-weight-medium
                        "><i
                                                    class="ti ti-message me-1 fs-6"></i>Message</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#"
                                                class="
                          link
                          text-dark
                          d-flex
                          align-items-center
                          justify-content-center
                          font-weight-medium
                        "><i
                                                    class="ti ti-artboard me-1 fs-6"></i>Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card social-widget overflow-hidden">
                                <div class="card-body text-bg-primary">
                                    <div class="d-flex align-items-center text-white">
                                        <div>
                                            <h4 class="mb-0 text-white">People you may know</h4>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript: void(0)"><i
                                                    class="ti ti-menu-2 text-white fs-6"></i></a>
                                        </div>
                                    </div>
                                    <form class="mt-4 mb-3">
                                        <div class="input-group input-group-lg mb-3">
                                            <input type="text" class="form-control bg-body"
                                                placeholder="Search by Email" aria-label="">
                                            <button class="btn btn-light" type="button">
                                                <i class="ti ti-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-2">
                                        <div class="col-4 text-center">
                                            <img src="../assets/images/profile/user-1.jpg" alt=""
                                                class="img-fluid rounded">
                                            <h6 class="fs-2 mt-1">Hanna Gover</h6>
                                            <button class="btn btn-light btn-sm">Connect</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="../assets/images/profile/user-2.jpg" alt=""
                                                class="img-fluid rounded">
                                            <h6 class="fs-2 mt-1">Kendra Silly</h6>
                                            <button class="btn btn-light btn-sm">Connect</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="../assets/images/profile/user-3.jpg" alt=""
                                                class="img-fluid rounded">
                                            <h6 class="fs-2 mt-1">Jack Sully</h6>
                                            <button class="btn btn-light btn-sm">Connect</button>
                                        </div>
                                    </div>
                                    <button class="btn d-block w-100 btn-primary mb-2 mt-5">
                                        Invite friends from Twitter
                                        <i class="ti ti-brand-twitter ms-2 fs-5"></i>
                                    </button>
                                    <button class="btn d-block w-100 btn-info">
                                        Invite friends from Facebook
                                        <i class="ti ti-brand-facebook ms-2 fs-5"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Currency Exchange</h4>
                                    <h5 class="card-subtitle">exchange currency from here</h5>
                                </div>
                                <div class="mb-4 p-4 text-center bg-light">
                                    <form>
                                        <div class="row gx-0">
                                            <div class="col-8">
                                                <input class="form-control form-control-lg" type="text"
                                                    value="1.02458">
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select form-select-lg">
                                                    <option value="1">BTC</option>
                                                    <option value="2">ETH</option>
                                                    <option value="3">DASH</option>
                                                    <option value="4">LTC</option>
                                                    <option value="5">NEO</option>
                                                    <option value="6">XRP</option>
                                                    <option value="7">EOS</option>
                                                    <option value="8">NEM</option>
                                                    <option value="9">ADA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="
                        round-40
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        text-center
                        rounded-circle
                        text-bg-danger
                        my-3
                        mx-auto
                      ">
                                            <i class="ti ti-exchange fs-5"></i>
                                        </div>
                                        <div class="row gx-0">
                                            <div class="col-8">
                                                <input class="form-control form-control-lg" type="text"
                                                    value="9526.39">
                                            </div>
                                            <div class="col-4">
                                                <select class="form-select form-select-lg">
                                                    <option value="1">USD</option>
                                                    <option value="2">EUR</option>
                                                    <option value="3">INR</option>
                                                    <option value="4">AUD</option>
                                                    <option value="5">GBP</option>
                                                    <option value="6">CAD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body pt-0 text-center">
                                    <button type="button" class="btn btn-primary">
                                        Exchange Now
                                    </button>
                                </div>
                            </div>
                            <div class="card poll-widget">
                                <div class="card-body">
                                    <h4 class="card-title">Result of Poll</h4>
                                    <h5 class="card-subtitle mb-7">
                                        Here is the result for the latest poll
                                    </h5>
                                    <p class="fw-bold text-muted">
                                        What is your mobile app usage daily?
                                    </p>
                                    <ul class="list-style-none mt-3 mb-2">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 fw-bold">
                                                        A <span class="fw-light">30 Minutes</span>
                                                    </h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <h6 class="mb-0 fw-bold">55%</h6>
                                                </div>
                                            </div>
                                            <div class="progress mt-2 text-bg-light">
                                                <div class="progress-bar text-bg-info" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 fw-bold">
                                                        B <span class="fw-light">More than 30 minutes</span>
                                                    </h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <h6 class="mb-0 fw-bold">20%</h6>
                                                </div>
                                            </div>
                                            <div class="progress mt-2 text-bg-light">
                                                <div class="progress-bar bg-cyan" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 fw-bold">
                                                        C <span class="fw-light">1 Hour</span>
                                                    </h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <h6 class="mb-0 fw-bold">15%</h6>
                                                </div>
                                            </div>
                                            <div class="progress mt-2 text-bg-light">
                                                <div class="progress-bar text-bg-success" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 fw-bold">
                                                        D <span class="fw-light">More than 1 hour</span>
                                                    </h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <h6 class="mb-0 fw-bold">10%</h6>
                                                </div>
                                            </div>
                                            <div class="progress mt-2 text-bg-light">
                                                <div class="progress-bar text-bg-danger" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------------------------------------------- -->
                        <!-- To Do list copy and paste this code-->
                        <!-- -------------------------------------------------------------- -->
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">To do List</h4>
                                    <div class="todo-widget">
                                        <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                            <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        "
                                                data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input success bg-success-subtle"
                                                        id="newc1">
                                                    <label
                                                        class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            "
                                                        for="newc1">
                                                        <div>
                                                            <h5 class="todo-desc mb-0 fs-3 font-weight-medium">
                                                                Give purchase report to john
                                                            </h5>
                                                            <div class="todo-desc text-muted fw-normal fs-2">
                                                                2 January 2023
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown dropstart">
                                                                <a href="#" class="link" id="new"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots fs-6 text-dark"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                                    <li>
                                                                        <h6 class="dropdown-header">
                                                                            Choose Label
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          font-weight-medium
                                        ">Primary</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-info-subtle
                                          text-info
                                          font-weight-medium
                                        ">Social</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-light-primary
                                          text-primary
                                          font-weight-medium
                                        ">Promotions</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          font-weight-medium
                                        ">Trash</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        "
                                                data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input primary bg-primary-subtle"
                                                        id="newc2">
                                                    <label
                                                        class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            "
                                                        for="newc2">
                                                        <div>
                                                            <h5 class="todo-desc mb-0 fs-3 font-weight-medium">
                                                                Hit the gym
                                                            </h5>
                                                            <div class="todo-desc text-muted fw-normal fs-2">
                                                                5 January 2023
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown dropstart">
                                                                <a href="#" class="link" id="new"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots fs-6 text-dark"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                                    <li>
                                                                        <h6 class="dropdown-header">
                                                                            Choose Label
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          font-weight-medium
                                        ">Primary</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-info-subtle
                                          text-info
                                          font-weight-medium
                                        ">Social</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-light-primary
                                          text-primary
                                          font-weight-medium
                                        ">Promotions</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          font-weight-medium
                                        ">Trash</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        "
                                                data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input danger bg-danger-subtle"
                                                        id="newc3">
                                                    <label
                                                        class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            "
                                                        for="newc3">
                                                        <div>
                                                            <h5 class="todo-desc mb-0 fs-3 font-weight-medium">
                                                                Pay bills
                                                            </h5>
                                                            <div class="todo-desc text-muted fw-normal fs-2">
                                                                12 January 2023
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown dropstart">
                                                                <a href="#" class="link" id="new"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots fs-6 text-dark"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                                    <li>
                                                                        <h6 class="dropdown-header">
                                                                            Choose Label
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          font-weight-medium
                                        ">Primary</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-info-subtle
                                          text-info
                                          font-weight-medium
                                        ">Social</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-light-primary
                                          text-primary
                                          font-weight-medium
                                        ">Promotions</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          font-weight-medium
                                        ">Trash</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        "
                                                data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input warning bg-warning-subtle"
                                                        id="newc4">
                                                    <label
                                                        class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            "
                                                        for="newc4">
                                                        <div>
                                                            <h5 class="todo-desc mb-0 fs-3 font-weight-medium">
                                                                Meet George
                                                            </h5>
                                                            <div class="todo-desc text-muted fw-normal fs-2">
                                                                15 January 2023
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown dropstart">
                                                                <a href="#" class="link" id="new"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots fs-6 text-dark"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                                    <li>
                                                                        <h6 class="dropdown-header">
                                                                            Choose Label
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          font-weight-medium
                                        ">Primary</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-info-subtle
                                          text-info
                                          font-weight-medium
                                        ">Social</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-light-primary
                                          text-primary
                                          font-weight-medium
                                        ">Promotions</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          font-weight-medium
                                        ">Trash</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        "
                                                data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="
                              form-check-input
                              secondary
                              bg-secondary-subtle
                            "
                                                        id="newc5">
                                                    <label
                                                        class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            "
                                                        for="newc5">
                                                        <div>
                                                            <h5 class="todo-desc mb-0 fs-3 font-weight-medium">
                                                                Read a book
                                                            </h5>
                                                            <div class="todo-desc text-muted fw-normal fs-2">
                                                                20 January 2023
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown dropstart">
                                                                <a href="#" class="link" id="new"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots fs-6 text-dark"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="new">
                                                                    <li>
                                                                        <h6 class="dropdown-header">
                                                                            Choose Label
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          font-weight-medium
                                        ">Primary</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-info-subtle
                                          text-info
                                          font-weight-medium
                                        ">Social</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-light-primary
                                          text-primary
                                          font-weight-medium
                                        ">Promotions</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <span
                                                                                class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          font-weight-medium
                                        ">Trash</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Task List</h4>
                                    <div class="to-do-widget mt-3 common-widget">
                                        <!-- .modal for add task -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header d-flex">
                                                        <h4 class="modal-title">Add Task</h4>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label>Task name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Task Name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label>Assign to</label>
                                                                <select class="form-select">
                                                                    <option selected="">Sachin</option>
                                                                    <option value="1">Sehwag</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="button" class="btn btn-success"
                                                            data-bs-dismiss="modal">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                data-role="task">
                                                <div class="form-check form-check-inline w-100">
                                                    <input type="checkbox"
                                                        class="form-check-input danger bg-danger-subtle"
                                                        id="inputSchedule" name="inputCheckboxesSchedule">
                                                    <label for="inputSchedule"
                                                        class="form-check-label font-weight-medium">
                                                        <span>Schedule meeting with</span><span
                                                            class="badge rounded-pill fs-2 text-bg-danger badge-pill ms-1">Today</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-2.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Steave" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-3.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Jessica" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-4.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Priyanka" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-5.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Selina" class="rounded-circle">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                data-role="task">
                                                <div class="form-check form-check-inline w-100">
                                                    <input type="checkbox" id="inputCall"
                                                        class="form-check-input info bg-info-subtle"
                                                        name="inputCheckboxesCall">
                                                    <label for="inputCall"
                                                        class="form-check-label font-weight-medium">
                                                        <span>Give Purchase report to</span>
                                                        <span
                                                            class="badge rounded-pill fs-2 text-bg-info badge-pill ms-1">Yesterday</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-3.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Priyanka" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-4.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Selina" class="rounded-circle">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                data-role="task">
                                                <div class="form-check form-check-inline w-100">
                                                    <input type="checkbox" id="inputBook"
                                                        class="form-check-input primary bg-primary-subtle"
                                                        name="inputCheckboxesBook">
                                                    <label for="inputBook"
                                                        class="form-check-label font-weight-medium">
                                                        <span>Book flight for holiday</span><span
                                                            class="badge rounded-pill fs-2 text-bg-primary badge-pill ms-1">1
                                                            week</span>
                                                    </label>
                                                </div>
                                                <div class="fs-2 ps-3 d-inline-block ms-2">
                                                    26 jun 2023
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                data-role="task">
                                                <div class="form-check form-check-inline w-100">
                                                    <input type="checkbox" id="inputForward"
                                                        class="form-check-input warning bg-warning-subtle"
                                                        name="inputCheckboxesForward">
                                                    <label for="inputForward"
                                                        class="form-check-label font-weight-medium">
                                                        <span>Forward all tasks</span>
                                                        <span
                                                            class="badge rounded-pill fs-2 text-bg-warning badge-pill ms-1">2
                                                            weeks</span>
                                                    </label>
                                                </div>
                                                <div class="fs-2 ps-3 d-inline-block ms-2">
                                                    26 jun 2023
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                data-role="task">
                                                <div class="form-check form-check-inline w-100">
                                                    <input type="checkbox" id="inputRecieve"
                                                        class="form-check-input success bg-success-subtle"
                                                        name="inputCheckboxesRecieve">
                                                    <label for="inputRecieve"
                                                        class="form-check-label font-weight-medium">
                                                        <span>Recieve shipment</span><span
                                                            class="badge rounded-pill fs-2 text-bg-success badge-pill ms-1">2
                                                            weeks</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-2.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Steave" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-3.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Jessica" class="rounded-circle">
                                                    </li>
                                                    <li class="d-inline-block border-0 me-1">
                                                        <img src="../assets/images/profile/user-4.jpg"
                                                            alt="user" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-original-title="Priyanka" class="rounded-circle">
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Messages</h4>
                                    <div class="mailbox">
                                        <div
                                            class="
                        message-center
                        contact-widget
                        position-relative
                      ">
                                            <a href="javascript:void(0)"
                                                class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Pavan kumar</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">info@wrappixel.com</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-3.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Sonu Nigam</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">pamela1987@gmail.com</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-4.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle away"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Arijit Sinh</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">cruise1298.fiplip@gmail.com</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-5.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle offline"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Pavan kumar</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">kat@gmail.com</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-6.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Sonu Nigam</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">pamela1987@gmail.com</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center p-3">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="../assets/images/profile/user-7.jpg" alt="user"
                                                        class="rounded-circle w-100 round-40">
                                                    <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-4">Pavan kumar</h5>
                                                    <span
                                                        class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">info@wrappixel.com</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Subscribe</h4>
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleInputname2"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <button type="submit"
                                            class="
                        btn btn-primary
                        font-weight-medium
                        d-block
                        w-100
                      ">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card overflow-hidden">
                                <img class="card-img img-fluid" src="../assets/images/backgrounds/profile-bg.jpg"
                                    alt="Card image">
                                <div
                                    class="
                    card-img-overlay
                    d-flex
                    align-items-center
                    justify-content-center
                    flex-column
                    mt-n5
                    mb-4
                  ">
                                    <img src="../assets/images/profile/user-2.jpg" alt=""
                                        class="rounded-circle" width="100">
                                    <h4 class="card-title text-white">John doe</h4>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="mb-0 fs-14">12K</h3>
                                            <h5 class="fw-light fs-4">Followers</h5>
                                        </div>
                                        <div class="col">
                                            <h3 class="mb-0 fs-14">420</h3>
                                            <h5 class="fw-light fs-4">Following</h5>
                                        </div>
                                        <div class="col">
                                            <h3 class="mb-0 fs-14">128</h3>
                                            <h5 class="fw-light fs-4">Tweets</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Reviews</h4>
                                    <h5 class="card-subtitle">Overview of Review</h5>
                                    <h2 class="font-weight-medium mt-5 mb-0 fs-7">25426</h2>
                                    <span class="text-muted">This month we got 346 New Reviews</span>
                                    <div class="image-box mt-4 mb-4">
                                        <a href="#" class="me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Simmons"><img
                                                src="../assets/images/profile/user-2.jpg" class="rounded-circle"
                                                width="45" alt="user"></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Fitz"><img
                                                src="../assets/images/profile/user-3.jpg" class="rounded-circle"
                                                width="45" alt="user"></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Phil"><img
                                                src="../assets/images/profile/user-4.jpg" class="rounded-circle"
                                                width="45" alt="user"></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Melinda"><img
                                                src="../assets/images/profile/user-5.jpg" class="rounded-circle"
                                                width="45" alt="user"></a>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="btn btn-lg rounded-2 btn-primary mt-2">Checkout All Reviews</a>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Visits around the countries</h4>
                                    <ul class="list-style-none country-state mt-3">
                                        <li class="mb-4">
                                            <h2 class="mb-0 fs-7">6350</h2>
                                            <div class="d-flex align-items-center">
                                                <small>From India</small>
                                                <div class="ms-auto">
                                                    48% <i class="fas fa-level-up-alt text-success"></i>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-success" role="progressbar"
                                                    style="width: 48%; height: 6px" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <h2 class="mb-0 fs-7">3250</h2>
                                            <div class="d-flex align-items-center">
                                                <small>From UAE</small>
                                                <div class="ms-auto">
                                                    98% <i class="fas fa-level-up-alt text-success"></i>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-info" role="progressbar"
                                                    style="width: 48%; height: 6px" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <h2 class="mb-0 fs-7">1250</h2>
                                            <div class="d-flex align-items-center">
                                                <small>From Australia</small>
                                                <div class="ms-auto">
                                                    75% <i class="fas fa-level-down-alt text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-primary" role="progressbar"
                                                    style="width: 48%; height: 6px" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <h2 class="mb-0 fs-7">1350</h2>
                                            <div class="d-flex align-items-center">
                                                <small>From USA</small>
                                                <div class="ms-auto">
                                                    48% <i class="fas fa-level-up-alt text-success"></i>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-warning" role="progressbar"
                                                    style="width: 48%; height: 6px" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card earning-widget">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-0">Total Earning</h4>
                                                <h2 class="mt-0 fs-7 mb-0">$586</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <select class="form-select">
                                                    <option selected="">Today</option>
                                                    <option value="1">Weekly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-top">
                                    <div class="d-flex align-items-center pb-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-2.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Andrew Simon</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-info">$2300</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-3.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Daniel Kristeen</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-primary">$4300</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-4.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Dany John</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-success">$4300</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-5.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Chris gyl</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-warning">$5300</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-6.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Opera mini</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-danger">$4567</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/profile/user-7.jpg" width="50"
                                                class="rounded-circle" alt="logo">
                                        </div>
                                        <div class="ms-2 font-weight-medium">Microsoft edge</div>
                                        <div class="ms-auto">
                                            <span class="badge rounded-pill fs-2 text-bg-primary">$7889</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------------------------------------------- -->
                        <!-- Project of the month copy and paste this code-->
                        <!-- -------------------------------------------------------------- -->
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Projects of the Month</h4>
                                        <select class="form-select w-auto ms-auto">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table stylish-table v-middle mb-0 text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="border-0 text-muted fw-normal" colspan="2">
                                                        Assigned
                                                    </th>
                                                    <th class="border-0 text-muted fw-normal">Name</th>
                                                    <th class="border-0 text-muted fw-normal">
                                                        Priority
                                                    </th>
                                                    <th class="border-0 text-muted fw-normal">Budget</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-info
                              ">S</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">Sunil Joshi</h6>
                                                        <small class="text-muted">Web Designer</small>
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill fs-2 text-bg-success px-2 py-1">Low</span>
                                                    </td>
                                                    <td>$3.9K</td>
                                                </tr>
                                                <tr class="active">
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-info
                              "><img
                                                                src="../assets/images/profile/user-2.jpg"
                                                                alt="user" class="rounded-circle"
                                                                width="40"></span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">Andrew</h6>
                                                        <small class="text-muted">Project Manager</small>
                                                    </td>
                                                    <td>Real Homes</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill text-bg-info px-2 py-1">Medium</span>
                                                    </td>
                                                    <td>$23.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-success
                              ">B</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">
                                                            Bhavesh patel
                                                        </h6>
                                                        <small class="text-muted">Developer</small>
                                                    </td>
                                                    <td>MedicalPro Theme</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill text-bg-primary px-2 py-1">High</span>
                                                    </td>
                                                    <td>$12.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-primary
                              ">N</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">Nirav Joshi</h6>
                                                        <small class="text-muted">Frontend Eng</small>
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill text-bg-danger px-2 py-1">Low</span>
                                                    </td>
                                                    <td>$10.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-warning
                              ">M</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">Micheal Doe</h6>
                                                        <small class="text-muted">Content Writer</small>
                                                    </td>
                                                    <td>Helping Hands</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill text-bg-warning px-2 py-1">High</span>
                                                    </td>
                                                    <td>$12.9K</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-danger
                              ">N</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-weight-medium mb-0">Johnathan</h6>
                                                        <small class="text-muted">Graphic</small>
                                                    </td>
                                                    <td>Digital Agency</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill text-bg-info px-2 py-1">High</span>
                                                    </td>
                                                    <td>$2.6K</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                class="rounded-circle" width="100">
                                        </div>
                                        <div class="ps-3">
                                            <h3 class="font-weight-medium fs-14">Daniel Kristeen</h3>
                                            <h6>UIUX Designer</h6>
                                            <button class="btn btn-success">
                                                <i class="ti ti-plus"></i> Follow
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col border-end text-center">
                                            <h2 class="fs-7">14</h2>
                                            <h6 class="mb-0">Photos</h6>
                                        </div>
                                        <div class="col border-end text-center">
                                            <h2 class="fs-7">54</h2>
                                            <h6 class="mb-0">Videos</h6>
                                        </div>
                                        <div class="col text-center">
                                            <h2 class="fs-7">145</h2>
                                            <h6 class="mb-0">Tasks</h6>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <p class="text-center aboutscroll">
                                        Lorem ipsum dolor sit ametetur adipisicing elit, sed do
                                        eiusmod tempor incididunt adipisicing elit, sed do eiusmod
                                        tempor incididunLorem ipsum dolor sit ametetur adipisicing
                                        elit, sed do eiusmod tempor incididuntt
                                    </p>
                                    <ul
                                        class="
                      list-style-none list-icons
                      d-flex
                      flex-item
                      text-center
                      pt-2
                    ">
                                        <li class="col">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                title="Website"><i class="ti ti-world fs-6 text-dark"></i></a>
                                        </li>
                                        <li class="col">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                title="twitter"><i
                                                    class="ti ti-brand-twitter fs-6 text-dark"></i></a>
                                        </li>
                                        <li class="col">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                title="Facebook"><i
                                                    class="ti ti-brand-facebook fs-6 text-dark"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Browser Stats</h4>
                                    <table class="table mt-3 table-borderless align-middle">
                                        <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/chrome-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0 w-100">Google Chrome</td>
                                                <td class="ps-0 text-end">23%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/firefox-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0">Mozila Firefox</td>
                                                <td class="ps-0 text-end">15%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/safari-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0">Apple Safari</td>
                                                <td class="ps-0 text-end">07%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/internet-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0">Internet Explorer</td>
                                                <td class="ps-0 text-end">09%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/opera-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0">Opera mini</td>
                                                <td class="ps-0 text-end">23%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/edge-logo.png" alt="logo"
                                                        class="rounded-circle">
                                                </td>
                                                <td class="ps-0">Microsoft edge</td>
                                                <td class="ps-0 text-end">09%</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <img src="../assets/images/browser/netscape-logo.png"
                                                        alt="logo">
                                                </td>
                                                <td class="ps-0" class="text-truncate">
                                                    Netscape Navigator
                                                </td>
                                                <td class="ps-0 text-end">04%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title">Place your Order</h4>
                                            <h5 class="card-subtitle">
                                                Buy and Sell Crypto as you Like
                                            </h5>
                                        </div>
                                        <div class="ms-auto d-flex align-items-center">
                                            <div class="dl">
                                                <select class="form-select">
                                                    <option value="0" selected="">Bitcoin</option>
                                                    <option value="1">Ethereum</option>
                                                    <option value="2">Ripple</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- title -->
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                href="#test4" role="tab" aria-selected="true">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                href="#test5" role="tab" aria-selected="false">Sell</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="test4" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <form>
                                                <div class="mb-3">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text"><i
                                                                class="ti ti-coin-bitcoin fs-6"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Amount">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text">$</span>

                                                        <input type="text" class="form-control"
                                                            placeholder="Price">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary">
                                                        Buy Bitcoin
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="test5" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <form>
                                                <div class="mb-3">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text"><i
                                                                class="ti ti-coin-bitcoin fs-6"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Amount">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text">$</span>

                                                        <input type="text" class="form-control"
                                                            placeholder="Price">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-success">
                                                        Sell Bitcoin
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card poll-widget">
                                <div class="card-body">
                                    <h4 class="card-title">Poll of the week</h4>
                                    <h5 class="card-subtitle mb-3">Here is the latest poll</h5>
                                    <p class="fw-bold text-muted">
                                        What is your mobile app usage daily?
                                    </p>
                                    <ul class="list-style-none mt-3">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="a" name="customRadio"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="a"><b
                                                        class="me-1">A</b> 30 Minutes</label>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="b" name="customRadio"
                                                    class="form-check-input" checked="">
                                                <label class="form-check-label text-primary" for="b"><b
                                                        class="me-1">B</b> More than 30
                                                    minutes</label>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="c" name="customRadio"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="c"><b
                                                        class="me-1">C</b> 1 Hour</label>
                                            </div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="d" name="customRadio"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="d"><b
                                                        class="me-1">D</b> More than 1 hour</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="btn btn-success mt-3">Submit Answer</button>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Feeds</h4>
                                </div>
                                <ul class="feeds ps-0">
                                    <div class="feed-item mb-2 py-2 pe-3 ps-4">
                                        <div
                                            class="
                        border-start border-2 border-info
                        d-md-flex
                        align-items-center
                      ">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)"
                                                    class="
                            ms-3
                            btn bg-info-subtle
                            text-info
                            btn-circle
                            fs-5
                            d-flex
                            align-items-center
                            justify-content-center
                            flex-shrink-0
                          "><i
                                                        class="ti ti-bell fs-6"></i></a>
                                                <div class="ms-3 text-truncate">
                                                    <span class="text-dark font-weight-medium">You have 4 pending
                                                        tasks.</span>
                                                </div>
                                            </div>
                                            <div
                                                class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                                                <span class="fs-2 text-muted">Just Now</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-item mb-2 py-2 pe-3 ps-4">
                                        <div
                                            class="
                        border-start border-2 border-success
                        d-md-flex
                        align-items-center
                      ">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)"
                                                    class="
                            ms-3
                            btn bg-success-subtle
                            text-success
                            btn-circle
                            fs-5
                            d-flex
                            align-items-center
                            justify-content-center
                            flex-shrink-0
                          "><i
                                                        class="ti ti-database fs-6"></i></a>
                                                <div class="ms-3 text-truncate">
                                                    <span class="text-dark font-weight-medium">Server #1
                                                        overloaded</span>
                                                </div>
                                            </div>
                                            <div
                                                class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                                                <span class="fs-2 text-muted">2 Hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-item mb-2 py-2 pe-3 ps-4">
                                        <div
                                            class="
                        border-start border-2 border-warning
                        d-md-flex
                        align-items-center
                      ">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)"
                                                    class="
                            ms-3
                            btn bg-warning-subtle
                            text-warning
                            btn-circle
                            fs-5
                            d-flex
                            align-items-center
                            justify-content-center
                            flex-shrink-0
                          "><i
                                                        class="ti ti-shopping-cart fs-6"></i></a>
                                                <div class="ms-3 text-truncate">
                                                    <span class="text-dark font-weight-medium">New order
                                                        received.</span>
                                                </div>
                                            </div>
                                            <div
                                                class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                                                <span class="fs-2 text-muted">31 May</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-item mb-2 py-2 pe-3 ps-4">
                                        <div
                                            class="
                        border-start border-2 border-danger
                        d-md-flex
                        align-items-center
                      ">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)"
                                                    class="
                            ms-3
                            btn bg-danger-subtle
                            text-danger
                            btn-circle
                            fs-5
                            d-flex
                            align-items-center
                            justify-content-center
                            flex-shrink-0
                          "><i
                                                        class="ti ti-users fs-6"></i></a>
                                                <div class="ms-3 text-truncate">
                                                    <span class="text-dark font-weight-medium">New user
                                                        registered.</span>
                                                </div>
                                            </div>
                                            <div
                                                class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                                                <span class="fs-2 text-muted">30 May</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-item mb-2 py-2 pe-3 ps-4">
                                        <div
                                            class="
                        border-start border-2 border-primary
                        d-md-flex
                        align-items-center
                      ">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0)"
                                                    class="
                            ms-3
                            btn bg-primary-subtle
                            text-primary
                            btn-circle
                            fs-5
                            d-flex
                            align-items-center
                            justify-content-center
                            flex-shrink-0
                          ">
                                                    <i class="ti ti-users fs-6"></i>
                                                </a>
                                                <div class="ms-3 text-truncate">
                                                    <span class="text-dark font-weight-medium">New Version just
                                                        arrived.</span>
                                                </div>
                                            </div>
                                            <div
                                                class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                                                <span class="fs-2 text-muted">27 May</span>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>