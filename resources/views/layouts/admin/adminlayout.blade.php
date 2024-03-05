<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('admin-assets/images/logos/favicon.png')}}">

    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/styles.css')}}">

    <title>Modernize Bootstrap Admin</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('admin-assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
</head>

<body>
    @yield('content')
     <script src="{{ asset('admin-assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('admin-assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('admin-assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/theme/sidebarmenu.js') }}"></script>

    <!-- solar icons -->
    <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('admin-assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboards/dashboard.js') }}"></script>
</body>

</html>