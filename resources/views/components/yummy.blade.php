<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts
    @vite(['resources/js/app.js'])-->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('sass/app.scss') }}" rel="stylesheet"> --}}
    <!--@vite(['resources/sass/app.scss'])

    <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files-->
    <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('import/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Yummy - v1.1.0
    * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>MyComputer</h1>
        </a>

        <nav id="navbar" class="navbar">

            <ul>
                <li><a href="{{ route('index') }}">In??cio</a></li>
                <li><a href="{{ route('meuscomponentes') }}">Meus componentes</a></li>
                <li class="dropdown ">
                    <a href="#" class="d-flex justify-content-end">
                        <span>Op????es</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <a href="{{ route('criar') }}">
                            Criar componentes
                        </a>

                    </ul>
                </li>

                <li class="dropdown "><a href="#" class="d-flex justify-content-end"><span>{{Auth::user()->name}}</span>
                        <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
<!-- End Header -->
<main id="main">
    <div class="hero section-bg">
        {{ $slot }}
    </div>
</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div>
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Links ??teis</h4>
                        <p>
                        </p>
                        <p>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Siga o desenvolvedor</h4>
                    <div class="social-links d-flex">
                        <a href="https://github.com/Audrey-Teles" class="github"><i class="bi bi-github"></i></a>
                        <a href="https://www.instagram.com/audrey_teles/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/audreyteles/" class="linkedin"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>


</footer><!-- End Footer -->
<!-- End Footer -->

<!-- Vendor JS Files -->
<script src={{asset("import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<script src={{asset("import/assets/vendor/aos/aos.js") }}></script>
<script src={{asset("import/assets/vendor/glightbox/js/glightbox.min.js") }}></script>
<script src={{asset("import/assets/vendor/purecounter/purecounter_vanilla.js") }}></script>
<script src={{asset("import/assets/vendor/swiper/swiper-bundle.min.js") }}></script>
<script src={{asset("import/assets/vendor/php-email-form/validate.js")}}></script>
<!-- Template Main JS File -->
<script src={{asset("import/assets/js/main.js")}}></script>

</body>
</html>
