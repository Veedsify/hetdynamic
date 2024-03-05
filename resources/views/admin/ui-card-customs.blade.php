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
                                    <h4 class="fw-semibold mb-8">Customs Card</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none"
                                                    href="index.html">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Customs Card</li>
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
                        <div class="col-12">
                            <!-- user card -->
                            <div class="row">
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-2.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-success-subtle text-success rounded-pill mb-3">active</span>
                                            <a href="#"
                                                class="btn bg-success-subtle text-success  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-3.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-warning-subtle text-warning rounded-pill mb-3">away</span>
                                            <a href="#"
                                                class="btn bg-warning-subtle text-warning  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-4.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-success-subtle text-success rounded-pill mb-3">active</span>
                                            <a href="#"
                                                class="btn bg-success-subtle text-success  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-5.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-secondary-subtle text-secondary rounded-pill mb-3">offline</span>
                                            <a href="#"
                                                class="btn bg-secondary-subtle text-secondary  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-6.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-warning-subtle text-warning rounded-pill mb-3">away</span>
                                            <a href="#"
                                                class="btn bg-warning-subtle text-warning  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="bg-white card text-center alert-dismissible fade show alert p-0 card-hover"
                                        role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <div class="p-2 d-block mt-3">
                                            <img src="../assets/images/profile/user-7.jpg" width="75"
                                                class="rounded-circle img-fluid">
                                            <h5 class="card-title mt-3">John Deo</h5>
                                            <span
                                                class="badge bg-secondary-subtle text-secondary rounded-pill mb-3">offline</span>
                                            <a href="#"
                                                class="btn bg-secondary-subtle text-secondary  d-block w-100">Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="../assets/images/profile/user-2.jpg"
                                                class="rounded-1 img-fluid" width="90">
                                            <div class="mt-n2">
                                                <span class="badge text-bg-primary">Editor</span>
                                                <h3 class="card-title mt-3">Matt Carlson</h3>
                                                <h6 class="card-subtitle">San Francisco, CA</h6>
                                            </div>
                                            <div class="row mt-3 justify-content-center">
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-warning"><i
                                                                class="ti ti-star fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                                            <h4 class="mb-0 fs-5">368</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-primary"><i
                                                                class="ti ti-brand-google-photos fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Photos</h6>
                                                            <h4 class="mb-0 fs-5">1200</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="../assets/images/profile/user-3.jpg"
                                                class="rounded-1 img-fluid" width="90">
                                            <div class="mt-n2">
                                                <span class="badge text-bg-danger">Developer</span>
                                                <h3 class="card-title mt-3">Matt Carlson</h3>
                                                <h6 class="card-subtitle">San Francisco, CA</h6>
                                            </div>
                                            <div class="row mt-3 justify-content-center">
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-warning"><i
                                                                class="ti ti-star fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                                            <h4 class="mb-0 fs-5">368</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-primary"><i
                                                                class="ti ti-brand-google-photos fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Photos</h6>
                                                            <h4 class="mb-0 fs-5">1200</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="../assets/images/profile/user-4.jpg"
                                                class="rounded-1 img-fluid" width="90">
                                            <div class="mt-n2">
                                                <span class="badge text-bg-warning">Desinger</span>
                                                <h3 class="card-title mt-3">Matt Carlson</h3>
                                                <h6 class="card-subtitle">San Francisco, CA</h6>
                                            </div>
                                            <div class="row mt-3 justify-content-center">
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-warning"><i
                                                                class="ti ti-star fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                                            <h4 class="mb-0 fs-5">368</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="py-2 px-3 text-bg-light rounded-pill d-flex align-items-center">
                                                        <span class="text-primary"><i
                                                                class="ti ti-brand-google-photos fs-8"></i></span>
                                                        <div class="ms-2 text-start">
                                                            <h6 class="fw-normal text-muted mb-0">Photos</h6>
                                                            <h4 class="mb-0 fs-5">1200</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div>
                                                    <h4 class="card-title">Social Marketing</h4>
                                                    <h6 class="card-subtitle">65,450 sales</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a href="#" class="link" id="new"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i data-feather="more-horizontal"
                                                                class="feather-sm"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="new">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="earnings-month mt-1"></div>
                                        <div class="card-body">
                                            <div class="row pb-3 border-bottom">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-primary-subtle text-primary text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-dribbble fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Dribble</h5>
                                                        <p class="text-muted mb-0">
                                                            Ecommerce Design, App Design
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-3 border-bottom">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-danger-subtle text-danger text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-youtube fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Youtube</h5>
                                                        <p class="text-muted mb-0">
                                                            Waiting for new videos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="bg-info-subtle text-info text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-messenger fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Messanger</h5>
                                                        <p class="text-muted mb-0">4 new notifcations</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div>
                                                    <h4 class="card-title">Storage Clouds</h4>
                                                    <h6 class="card-subtitle">5,450 sales</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a href="#" class="link" id="new"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i data-feather="more-horizontal"
                                                                class="feather-sm"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="new">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="earnings-month2 mt-1"></div>
                                        <div class="card-body">
                                            <div class="row pb-3 border-bottom">
                                                <div class="col-3">
                                                    <div class="bg-info-subtle text-info text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-drops fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Dropbox</h5>
                                                        <p class="text-muted mb-0">
                                                            wainting for 2 new uploads
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-3 border-bottom">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-warning-subtle text-warning text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-google-drive fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Youtube</h5>
                                                        <p class="text-muted mb-0">
                                                            Add new folder and files
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-secondary-subtle text-secondary text-center py-2 rounded-1">
                                                        <i class="ti ti-brand-soundcloud fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">One Drive</h5>
                                                        <p class="text-muted mb-0">
                                                            Add new photos, videos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div>
                                                    <h4 class="card-title">Yearly Sales</h4>
                                                    <h6 class="card-subtitle">50,050 sales</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a href="#" class="link" id="new"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i data-feather="more-horizontal"
                                                                class="feather-sm"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="new">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Another
                                                                    action</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="earnings-month3 mt-1"></div>
                                        <div class="card-body">
                                            <div class="row pb-3 border-bottom">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-primary-subtle text-primary text-center py-2 rounded-1">
                                                        <i class="ti ti-users fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Top Designers</h5>
                                                        <p class="text-muted mb-0">John Smith, Nancy Deo</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-3 border-bottom">
                                                <div class="col-3">
                                                    <div class="bg-info-subtle text-info text-center py-2 rounded-1">
                                                        <i class="ti ti-chart-pie fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Top sales</h5>
                                                        <p class="text-muted mb-0">
                                                            January, March, December
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-success-subtle text-success text-center py-2 rounded-1">
                                                        <i class="ti ti-message fs-8"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1">Best sellers</h5>
                                                        <p class="text-muted mb-0">
                                                            Maria Rodriguez, Maria Garcia
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-3 mt-4 fs-5">Card With Progreesbar</h4>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-warning-subtle text-warning rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-basket fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">+259</h4>
                                                        <h6 class="card-subtitle mb-0">Sales Change</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-warning" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-primary-subtle text-primary rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-chart-pie fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">750$</h4>
                                                        <h6 class="card-subtitle mb-0">Weekly Income</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-primary" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-danger-subtle text-danger rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-user-plus fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">+6.5K</h4>
                                                        <h6 class="card-subtitle mb-0">New Users</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-danger" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-success-subtle text-success rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-bell fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">156</h4>
                                                        <h6 class="card-subtitle mb-0">
                                                            New Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-success" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-info-subtle text-info rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-brand-messenger fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">15+</h4>
                                                        <h6 class="card-subtitle mb-0">Latest Messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-info" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div
                                                        class="bg-secondary-subtle text-secondary rounded d-flex align-items-center p-8 justify-content-center">
                                                        <i class="ti ti-brand-drops fs-8"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-9 d-flex align-items-center justify-content-end text-end">
                                                    <div>
                                                        <h4 class="card-title">1500</h4>
                                                        <h6 class="card-subtitle mb-0">
                                                            Wainting for downloads
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress mt-3 text-bg-light">
                                                <div class="progress-bar text-bg-secondary" role="progressbar"
                                                    style="width: 26%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row py-2">
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center">
                                                    <div>
                                                        <h1 class="fw-light">86</h1>
                                                        <h6 class="text-muted mb-0 fw-normal">
                                                            New Clients
                                                        </h6>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center justify-content-end">
                                                    <div data-label="20%"
                                                        class="css-bar mb-0 css-bar-primary css-bar-20">
                                                        <i class="ti ti-user-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row py-2">
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center">
                                                    <div>
                                                        <h1 class="fw-light">248</h1>
                                                        <h6 class="text-muted mb-0 fw-normal">
                                                            All Projects
                                                        </h6>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center justify-content-end">
                                                    <div data-label="30%"
                                                        class="css-bar mb-0 css-bar-danger css-bar-20">
                                                        <i class="ti ti-briefcase"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row py-2">
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center">
                                                    <div>
                                                        <h1 class="fw-light">352</h1>
                                                        <h6 class="text-muted mb-0 fw-normal">New Items</h6>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center justify-content-end">
                                                    <div data-label="40%"
                                                        class="css-bar mb-0 css-bar-warning css-bar-40">
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row py-2">
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center">
                                                    <div>
                                                        <h1 class="fw-light">159</h1>
                                                        <h6 class="text-muted mb-0 fw-normal">Invoices</h6>
                                                    </div>
                                                </div>
                                                <!-- Column -->
                                                <div class="col d-flex align-items-center justify-content-end">
                                                    <div data-label="60%"
                                                        class="css-bar mb-0 css-bar-info css-bar-60">
                                                        <i class="ti ti-receipt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top img-responsive"
                                            src="../assets/images/blog/blog-img4.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center mb-3">
                                                <span class="d-flex align-items-center"><i
                                                        class="ti ti-calendar me-1 fs-5"></i> 20 May
                                                    2023</span>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0)" class="link text-muted"><i
                                                            class="ti ti-message-circle me-1 fs-5"></i> 3 Comments</a>
                                                </div>
                                            </div>
                                            <h3 class="fs-6">
                                                Featured Hydroflora Pots Garden &amp; Outdoors
                                            </h3>
                                            <p class="mb-0 mt-2 text-muted">
                                                Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
                                            </p>
                                            <div class="text-end">
                                                <button class="btn btn-primary rounded-pill mt-3">
                                                    Read more
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top img-responsive"
                                            src="../assets/images/blog/blog-img5.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center mb-3">
                                                <span class="d-flex align-items-center"><i
                                                        class="ti ti-calendar me-1 fs-5"></i> 19 May
                                                    2023</span>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0)" class="link text-muted"><i
                                                            class="ti ti-message-circle me-1 fs-5"></i> 16
                                                        Comments</a>
                                                </div>
                                            </div>
                                            <h3 class="fs-6">
                                                Featured Hydroflora Pots Garden &amp; Outdoors
                                            </h3>
                                            <p class="mb-0 mt-2 text-muted">
                                                Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
                                            </p>
                                            <div class="text-end">
                                                <button class="btn btn-primary rounded-pill mt-3">
                                                    Read more
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top img-responsive"
                                            src="../assets/images/blog/blog-img6.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center mb-3">
                                                <span class="d-flex align-items-center"><i
                                                        class="ti ti-calendar me-1 fs-5"></i> 19 May
                                                    2023</span>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0)" class="link text-muted"><i
                                                            class="ti ti-message-circle me-1 fs-5"></i> 16
                                                        Comments</a>
                                                </div>
                                            </div>
                                            <h3 class="fs-6">
                                                Featured Hydroflora Pots Garden &amp; Outdoors
                                            </h3>
                                            <p class="mb-0 mt-2 text-muted">
                                                Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
                                            </p>
                                            <div class="text-end">
                                                <button class="btn btn-primary rounded-pill mt-3">
                                                    Read more
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">26%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted text-muted">Total Product
                                                    </h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-success" role="progressbar"
                                                            style="width: 85%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">60%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted text-muted">Pending
                                                        Product</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-info" role="progressbar"
                                                            style="width: 40%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">63%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted text-muted">Selling
                                                        Products</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-danger" role="progressbar"
                                                            style="width: 56%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">29%</h3>
                                                    <h6 class="card-subtitle text-muted mb-2">Buying Products</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-dark" role="progressbar"
                                                            style="width: 26%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-success">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h3 class="mb-0 fs-6">$18090</h3>
                                                    <span class="text-muted">Income</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-info">
                                                    <i class="ti ti-users fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h3 class="mb-0 fs-6">2690</h3>
                                                    <span class="text-muted">Users</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-danger">
                                                    <i class="ti ti-calendar fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h3 class="mb-0 fs-6">20 march</h3>
                                                    <span class="text-muted">My birthday</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-success">
                                                    <i class="ti ti-settings fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h3 class="mb-0 fs-6">6540</h3>
                                                    <span class="text-muted">Manage notifications</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="text-bg-info p-4 rounded-3 rounded-bottom-0">
                                            <div class="text-center text-white display-6">
                                                <i class="ti ti-settings"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h3 class="fs-6">456</h3>
                                                    <h5 class="fs-4 fw-medium text-info mb-0">Following</h5>
                                                </div>
                                                <div class="ms-auto">
                                                    <h3 class="fs-6">1,456</h3>
                                                    <h5 class="fs-4 fw-medium text-info mb-0">Friends</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="text-bg-primary p-4 rounded-3 rounded-bottom-0">
                                            <div class="text-center text-white display-6">
                                                <i class="ti ti-brand-twitter"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h3 class="fs-6">456</h3>
                                                    <h5 class="fs-4 fw-medium text-primary mb-0">Tweets</h5>
                                                </div>
                                                <div class="ms-auto">
                                                    <h3 class="fs-6">1,456</h3>
                                                    <h5 class="fs-4 fw-medium text-primary mb-0">Followers</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="text-bg-success p-4 rounded-3 rounded-bottom-0">
                                            <div class="text-center text-white display-6">
                                                <i class="ti ti-brand-instagram"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h3 class="fs-6">456</h3>
                                                    <h5 class="fs-4 fw-medium text-success mb-0">Following</h5>
                                                </div>
                                                <div class="ms-auto">
                                                    <h3 class="fs-6">1,456</h3>
                                                    <h5 class="fs-4 fw-medium text-success mb-0">Followers</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="text-bg-dark p-4 rounded-3 rounded-bottom-0">
                                            <div class="text-center text-white display-6">
                                                <i class="ti ti-brand-skype"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h3 class="fs-6">456</h3>
                                                    <h5 class="fs-4 fw-medium text-dark mb-0">Contacts</h5>
                                                </div>
                                                <div class="ms-auto">
                                                    <h3 class="fs-6">1,456</h3>
                                                    <h5 class="fs-4 fw-medium text-dark mb-0">Following</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">86%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted">Total Product</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-success" role="progressbar"
                                                            style="width: 85%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">40%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted">Pending Product</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-info" role="progressbar"
                                                            style="width: 40%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">56%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted">Product A</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-danger" role="progressbar"
                                                            style="width: 56%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="fs-6">26%</h3>
                                                    <h6 class="card-subtitle mb-2 text-muted">Product B</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-dark" role="progressbar"
                                                            style="width: 26%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <h4 class="fs-5 mt-5 mb-3">Cards With Icon</h4>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-bottom border-info">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h2 class="fs-7">120</h2>
                                                    <h6 class="fw-medium text-info mb-0">News Feed</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-info display-6"><i
                                                            class="ti ti-file-text"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-bottom border-primary">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">150</h2>
                                                    <h6 class="fw-medium text-primary mb-0">Invoices</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-primary display-6"><i
                                                            class="ti ti-clipboard"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-bottom border-success">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">450</h2>
                                                    <h6 class="fw-medium text-success mb-0">Revenue</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-success display-6"><i
                                                            class="ti ti-credit-card"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-bottom border-danger">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">100</h2>
                                                    <h6 class="fw-medium text-danger mb-0">Sales</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-danger display-6"><i
                                                            class="ti ti-pie-chart"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-start border-danger">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-danger display-6"><i
                                                            class="ti ti-users"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">290</h2>
                                                    <h6 class="fw-medium text-danger mb-0">New Customers</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-start border-info">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-info display-6"><i
                                                            class="ti ti-message-circle"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">120</h2>
                                                    <h6 class="fw-medium text-info mb-0">New Messages</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-start border-primary">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-primary display-6"><i
                                                            class="ti ti-bell"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">600</h2>
                                                    <h6 class="fw-medium text-primary mb-0">New Notification</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-start border-success">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-success display-6"><i
                                                            class="ti ti-briefcase"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">270</h2>
                                                    <h6 class="fw-medium text-success mb-0">New Projects</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-top border-success">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">120</h2>
                                                    <h6 class="fw-medium text-success mb-0">Top Locations</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-success display-6"><i
                                                            class="ti ti-map"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-top border-dark">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">201</h2>
                                                    <h6 class="fw-medium text-dark mb-0">Top Activity Pages</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-dark display-6"><i
                                                            class="ti ti-archive"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-top border-info">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">140</h2>
                                                    <h6 class="fw-medium text-info mb-0">Top Sales</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-info display-6"><i
                                                            class="ti ti-chart-bar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-top border-primary">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <h2 class="fs-7">160</h2>
                                                    <h6 class="fw-medium text-primary mb-0">Top Feeds</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-primary display-6"><i
                                                            class="ti ti-rss"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-end border-dark">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-dark display-6"><i
                                                            class="ti ti-cast"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">360</h2>
                                                    <h6 class="fw-medium text-dark mb-0">Device Variations</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-end border-info">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-info display-6"><i
                                                            class="ti ti-currency-dollar"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">120</h2>
                                                    <h6 class="fw-medium text-info mb-0">Net Income</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-end border-primary">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-primary display-6"><i
                                                            class="ti ti-clock-hour-4"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">471</h2>
                                                    <h6 class="fw-medium text-primary mb-0">Sales Performance</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card border-end border-success">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <span class="text-success display-6"><i
                                                            class="ti ti-box-multiple"></i></span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7">150</h2>
                                                    <h6 class="fw-medium text-success mb-0">Monthly Sales</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <h4 class="fs-5 mt-5 mb-3">
                                Cards With Propgressbar &amp; Icon
                            </h4>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h3 class="fs-6">86%</h3>
                                                    <h6 class="card-subtitle mb-1 text-muted">Total Product</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-success display-6"><i
                                                            class="ti ti-box"></i></span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-success" role="progressbar"
                                                    style="width: 85%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h3 class="fs-6">40%</h3>
                                                    <h6 class="card-subtitle mb-1 text-muted">Pending Product</h6>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-info display-6"><i
                                                            class="ti ti-cast"></i></span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-info" role="progressbar"
                                                    style="width: 40%; height: 6px;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <h3 class="fs-6">56%</h3>
                                                            <h6 class="card-subtitle mb-1 text-muted">Selling</h6>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <span class="text-primary display-6"><i
                                                                    class="ti ti-clipboard"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-primary" role="progressbar"
                                                            style="width: 56%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <h3 class="fs-6">26%</h3>
                                                            <h6 class="card-subtitle mb-1 text-muted">Buying</h6>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <span class="text-danger display-6"><i
                                                                    class="ti ti-copy"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress text-bg-light">
                                                        <div class="progress-bar text-bg-danger" role="progressbar"
                                                            style="width: 26%; height: 6px;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <h4 class="fs-5 mt-5 mb-3">Crypto Cards</h4>
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card text-bg-dark text-white">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <a href="JavaScript: void(0);"><i
                                                        class="ti ti-currency-ethereum display-6 text-white"
                                                        title="ETH"></i></a>
                                                <div class="ms-3 mt-2">
                                                    <h4 class=" mb-0 text-white">
                                                        Ethereum
                                                    </h4>
                                                    <h5 class="text-white">$3589.00k</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card text-bg-primary text-white">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <a href="JavaScript: void(0);"><i
                                                        class="ti ti-currency-dogecoin display-6 text-white"
                                                        title="LTC"></i></a>
                                                <div class="ms-3 mt-2">
                                                    <h4 class=" mb-0 text-white">
                                                        Dash
                                                    </h4>
                                                    <h5 class="text-white">$900.00k</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card text-bg-danger text-white">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <a href="JavaScript: void(0);"><i
                                                        class="ti ti-currency-bitcoin display-6 text-white"
                                                        title="BTC"></i></a>
                                                <div class="ms-3 mt-2">
                                                    <h4 class=" mb-0 text-white">
                                                        Bitcoin
                                                    </h4>
                                                    <h5 class="text-white">$284.50k</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card text-bg-info text-white">
                                        <div class="card-body">
                                            <div class="d-flex no-block align-items-center">
                                                <a href="JavaScript: void(0);"><i
                                                        class="ti ti-currency-ripple display-6 text-white"
                                                        title="AMP"></i></a>
                                                <div class="ms-3 mt-2">
                                                    <h4 class=" mb-0 text-white">
                                                        Ripple
                                                    </h4>
                                                    <h5 class="text-white">$650.80k</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-danger">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-bitcoin display-6 text-white"
                                                                title="BTC"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitcoin
                                                                </h5>
                                                                <h6 class="text-white">Realestate</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 0.08</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.06</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -20.10</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-bitcoin display-6 text-white me-3"
                                                                title="BTC"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitcoin
                                                                </h5>
                                                                <h6 class="text-white">Realestate</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 2.08</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -3.06</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -21.01</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-bitcoin display-6 text-white me-3"
                                                                title="BTC"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitcoin
                                                                </h5>
                                                                <h6 class="text-white">Realestate</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 0.12</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.06</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -0.08</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-success">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-euro display-6 text-white me-3"
                                                                title="EOS"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    EOS
                                                                </h5>
                                                                <h6 class="text-white">Banking</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 0.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -5.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -0.10</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-euro display-6 text-white me-3"
                                                                title="EOS"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    EOS
                                                                </h5>
                                                                <h6 class="text-white">Banking</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.08</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.01</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-euro display-6 text-white me-3"
                                                                title="EOS"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    EOS
                                                                </h5>
                                                                <h6 class="text-white">Banking</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 2.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.00</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -2.08</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-dark">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i
                                                                class="ti ti-currency-ethereum display-6 text-white me-3"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Ethereum
                                                                </h5>
                                                                <h6 class="text-white">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -5.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -20.10</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i
                                                                class="ti ti-currency-ethereum display-6 text-white me-3"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Ethereum
                                                                </h5>
                                                                <h6 class="text-white">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 2.08</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.08</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i
                                                                class="ti ti-currency-ethereum display-6 text-white me-3"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Ethereum
                                                                </h5>
                                                                <h6 class="text-white">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.02</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -3.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -10.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-secondary">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-baht display-6 text-white me-3"
                                                                title="BTM"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitmark
                                                                </h5>
                                                                <h6 class="text-white">Advertising</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 0.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -2.06</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.10</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-baht display-6 text-white me-3"
                                                                title="BTM"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitmark
                                                                </h5>
                                                                <h6 class="text-white">Advertising</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 2.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -3.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -2.01</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-currency-baht display-6 text-white me-3"
                                                                title="BTM"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Bitmark
                                                                </h5>
                                                                <h6 class="text-white">Advertising</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 0.12</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1s.08</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-primary">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-dogecoin display-6 text-white me-3"
                                                                title="DASH"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Dash
                                                                </h5>
                                                                <h6 class="text-white">Trading</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -0.20</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-dogecoin display-6 text-white me-3"
                                                                title="DASH"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Dash
                                                                </h5>
                                                                <h6 class="text-white">Trading</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.06</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.01</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block align-items-center me-3">
                                                            <i class="ti ti-currency-dogecoin display-6 text-white me-3"
                                                                title="DASH"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-white ">
                                                                    Dash
                                                                </h5>
                                                                <h6 class="text-white">Trading</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-white mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -0.08</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card text-bg-light">
                                        <div class="card-body">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-diamond display-6 text-dark me-3"
                                                                title="GEMZ"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-dark ">
                                                                    GetGems
                                                                </h5>
                                                                <h6 class="text-dark">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-dark mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.10</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-diamond display-6 text-dark me-3"
                                                                title="GEMZ"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-dark ">
                                                                    GetGems
                                                                </h5>
                                                                <h6 class="text-dark">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-dark mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 1.18</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -1.11</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item flex-column active">
                                                        <div class="d-flex no-block al me-3ign-items-center">
                                                            <i class="ti ti-diamond display-6 text-dark me-3"
                                                                title="GEMZ"></i>
                                                            <div class="mt-2">
                                                                <h5 class="text-dark ">
                                                                    GetGems
                                                                </h5>
                                                                <h6 class="text-dark">Exchange</h6>
                                                            </div>
                                                            <div class="ms-auto mt-3">
                                                                <div class="crypto1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center text-dark mt-4">
                                                            <div class="col-4">
                                                                <span class="fs-3">% 1h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> 12.16</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 24h</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-down fs-5"></i> -1.10</p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="fs-3">% 7d</span>
                                                                <p class=""><i
                                                                        class="ti ti-arrow-up fs-5"></i> -2.18</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->
                            <h4 class="fs-5 mt-5 mb-3">Card Icon Section</h4>
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3 bg-info-subtle d-flex align-items-center">
                                                <h3 class="text-info box mb-0">
                                                    <i class="ti ti-brand-messenger"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-info mb-0 fs-6">$980</h3>
                                                <span class="text-muted">Free Messages</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3 bg-success-subtle d-flex align-items-center">
                                                <h3 class="text-success box mb-0">
                                                    <i class="ti ti-building-broadcast-tower"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-success mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Internet</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3 bg-primary-subtle d-flex align-items-center">
                                                <h3 class="text-primary box mb-0">
                                                    <i class="ti ti-clock-hour-3"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-primary mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Unlimited Calls</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3 bg-warning-subtle d-flex align-items-center">
                                                <h3 class="text-warning box mb-0">
                                                    <i class="ti ti-database"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-warning mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Data Storage</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- End Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3">
                                                <h3 class="text-info mb-0 fs-6">$980</h3>
                                                <span class="text-muted">Free Messages</span>
                                            </div>
                                            <div class="p-3 bg-info-subtle d-flex align-items-center ms-auto">
                                                <h3 class="text-info box mb-0">
                                                    <i class="ti ti-brand-messenger"></i>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3">
                                                <h3 class="text-success mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Internet</span>
                                            </div>
                                            <div class="p-3 bg-success-subtle d-flex align-items-center ms-auto">
                                                <h3 class="text-success box mb-0">
                                                    <i class="ti ti-building-broadcast-tower"></i>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3">
                                                <h3 class="text-primary mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Unlimited Calls</span>
                                            </div>
                                            <div class="p-3 bg-primary-subtle d-flex align-items-center ms-auto">
                                                <h3 class="text-primary box mb-0">
                                                    <i class="ti ti-clock-hour-3"></i>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-3">
                                                <h3 class="text-warning mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Data Storage</span>
                                            </div>
                                            <div class="p-3 bg-warning-subtle d-flex align-items-center ms-auto">
                                                <h3 class="text-warning box mb-0">
                                                    <i class="ti ti-database"></i>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- End Row -->
                            <h4 class="fs-5 mt-5 mb-3">Title With Subtitles</h4>
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-success">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total Income</h4>
                                                    <span class="text-muted">Income</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">$2900</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-info">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total Products</h4>
                                                    <span class="text-muted">Users</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">$2690</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-danger">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total Members</h4>
                                                    <span class="text-muted">My birthday</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">20 March</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div
                                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-warning">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total Tasks</h4>
                                                    <span class="text-muted">pending</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">6540</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card text-bg-success">
                                        <div class="card-body text-white">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-success-subtle text-success">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="mb-0 text-white fs-6">Total Income</h4>
                                                    <span class="text-white-50">Income</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7 mb-0 text-white">
                                                        $2900
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card text-bg-info">
                                        <div class="card-body text-white">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-info-subtle text-info">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="mb-0 text-white fs-6">Total Products</h4>
                                                    <span class="text-white-50">Users</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7 mb-0 text-white">
                                                        $2690
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card text-bg-primary">
                                        <div class="card-body text-white">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-primary-subtle text-primary">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="mb-0 text-white fs-6">Total Members</h4>
                                                    <span class="text-white-50">My birthday</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7 mb-0 text-white">
                                                        20 March
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card text-bg-danger">
                                        <div class="card-body text-white">
                                            <div class="d-flex flex-row align-items-center">
                                                <div
                                                    class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-danger-subtle text-danger">
                                                    <i class="ti ti-credit-card fs-6"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="mb-0 text-white fs-6">Total Tasks</h4>
                                                    <span class="text-white-50">pending</span>
                                                </div>
                                                <div class="ms-auto">
                                                    <h2 class="fs-7 mb-0 text-white">
                                                        6540
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 text-bg-info">
                                                <h3 class="text-white box mb-0">
                                                    <i class="ti ti-brand-messenger"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-info mb-0 fs-6">$980</h3>
                                                <span class="text-muted">Free Messages</span>
                                            </div>
                                            <div class="align-self-center me-3 ms-auto">
                                                <h2 class="fs-7 text-info mb-0">250</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 text-bg-primary">
                                                <h3 class="text-white box mb-0">
                                                    <i class="ti ti-building-broadcast-tower"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-primary mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Internet</span>
                                            </div>
                                            <div class="align-self-center me-3 ms-auto">
                                                <h2 class="fs-7 text-primary mb-0">125</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 text-bg-danger">
                                                <h3 class="text-white box mb-0">
                                                    <i class="ti ti-clock-hour-3"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-danger mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Unlimited Calls</span>
                                            </div>
                                            <div class="align-self-center me-3 ms-auto">
                                                <h2 class="fs-7 text-danger mb-0">450</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 text-bg-success">
                                                <h3 class="text-white box mb-0">
                                                    <i class="ti ti-database"></i>
                                                </h3>
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-success mb-0 fs-6">$18090</h3>
                                                <span class="text-muted">Free Data Storage</span>
                                            </div>
                                            <div class="align-self-center me-3 ms-auto">
                                                <h2 class="fs-7 text-success mb-0">750</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- End Row -->
                            <h4 class="fs-5 mt-5 mb-3">Group Cards</h4>
                            <!-- Row -->
                            <div class="card-group mb-4">
                                <!-- Column -->
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-center fs-5 text-info">Unique Visit</h4>
                                        <h2 class="fs-7">1200</h2>
                                        <div class="row pt-2 pb-2">
                                            <!-- Column -->
                                            <div class="col text-center align-self-center">
                                                <div data-label="20%"
                                                    class="css-bar mb-0 css-bar-primary css-bar-20">
                                                    <i class="display-6 ti ti-user-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 border-end">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-up fs-6 text-success"></i> <br>
                                                    12056
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-down fs-6 text-danger"></i> <br>
                                                    145
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-center fs-5 text-danger">Total Visit</h4>
                                        <h2 class="fs-7">1200</h2>
                                        <div class="row pt-2 pb-2">
                                            <!-- Column -->
                                            <div class="col text-center align-self-center">
                                                <div data-label="20%"
                                                    class="css-bar mb-0 css-bar-danger css-bar-20">
                                                    <i class="display-6 ti ti-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 border-end">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-up fs-6 text-success"></i> <br>
                                                    21456
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-down fs-6 text-danger"></i> <br>
                                                    145
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-center fs-5 text-cyan">Bounce rate</h4>
                                        <h2 class="fs-7">1200</h2>
                                        <div class="row pt-2 pb-2">
                                            <!-- Column -->
                                            <div class="col text-center align-self-center">
                                                <div data-label="20%"
                                                    class="css-bar mb-0 css-bar-success css-bar-20">
                                                    <i class="display-6 ti ti-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 border-end">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-up fs-6 text-success"></i> <br>
                                                    12465
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="fs-5 mb-0">
                                                    <i class="ti ti-chevron-down fs-6 text-danger"></i> <br>
                                                    145
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- End Row -->
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
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/widget/card-custom.js"></script>
</body>

</html>
