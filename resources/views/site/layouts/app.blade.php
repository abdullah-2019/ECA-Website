<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ECA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <style>
        /* Style the preloader container */
        .preloader-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the SVG preloader */
        .preloader {
            animation: rotate 1s linear infinite;
            width: 50px;
            height: 50px;
        }

        /* Define the animation */
        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        /* Hide the page content initially */
        .site-content {
            display: none;
        }
    </style>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('../site-assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../site-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('../site-assets/css/style.css') }}" rel="stylesheet">

    @yield('css')

</head>

<body>

    <!-- Preloader container -->
    <div class="preloader-container">
        <!-- SVG preloader -->
        <svg class="preloader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" fill="none" stroke="#106eea" stroke-width="10" r="35"
                stroke-dasharray="164.93361431346415 56.97787143782138">
                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s"
                    values="0 50 50;360 50 50" keyTimes="0;1" />
            </circle>
        </svg>
    </div>

    <!-- Your page content goes here -->
    <div class="site-content">
        @include('site.layouts.header')

        <main id="main">
            @yield('content')
        </main>

        @include('site.layouts.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
    </div>

    <script>
        // Hide the preloader when the page finishes loading
        window.addEventListener('load', function() {
            var preloader = document.querySelector('.preloader-container');
            var content = document.querySelector('.site-content');

            preloader.style.display = 'none'; // Hide the preloader
            content.style.display = 'block'; // Show the page content
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('site-assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('site-assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('site-assets/js/main.js') }}"></script>

    @yield('js')

</body>

</html>
