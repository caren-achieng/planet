<!DOCTYPE html>
<html lang="en">
@php
$siteIdentity = \App\Models\SiteIdentity::first();
$footer = \App\Models\Footer::first();
    @endphp
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $siteIdentity -> title ?? 'Strathmore University' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: UpConstruction - v1.3.0
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img height="70px" width="200px" src=" {{ $siteIdentity -> getFirstMediaUrl('logo') }}" />

        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a h20f="index.html" class="active">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

{{ $slot }}

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <img height="70px" width="200px" src="{{ $footer -> getFirstMediaUrl('logo_image') }}"/> <br><br>
                            {{ $footer -> location ?? 'Ole Sangale Road, off Langata Road, in Madaraka Estate, Nairobi, Kenya.'}} <br>
                            <br>
                            <strong>Mail Address: </strong> {{$footer -> address ?? 'P.O. Box 59857, 00200, City Square, Nairobi, Kenya.'}} <br>
                            <strong>Phone: </strong> {{$footer -> phone ?? '(+254) (0) 730-734000/200/300 \n (+254) (0)703-034000/200/300'}} <br>
                            <strong>Email: </strong> {{$footer -> email ?? 'enquiries@strathmore.edu'}}<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="https://twitter.com/StrathU" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/StrathmoreUniversity" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.youtube.com/user/StrathmoreUniversity" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/school/strathmore-university/" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

{{--                <div class="col-lg-2 col-md-3 footer-links">--}}
{{--                    <h4>Study at Strathmore</h4>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Admissions</a></li>--}}
{{--                        <li><a href="#">Courses</a></li>--}}
{{--                        <li><a href="#">Faculty and Schools</a></li>--}}
{{--                        <li><a href="#">Office of Graduate Studies</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- End footer links column-->--}}


{{--                <div class="col-lg-2 col-md-3 footer-links">--}}
{{--                    <h4>Important Links</h4>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Home</a></li>--}}
{{--                        <li><a href="#">About us</a></li>--}}
{{--                        <li><a href="#">Targets</a></li>--}}
{{--                        <li><a href="#">Milestones</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- End footer links column-->--}}

{{--                <div class="col-lg-2 col-md-3 footer-links">--}}
{{--                    <h4>Other Links</h4>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Events</a></li>--}}
{{--                        <li><a href="#">News</a></li>--}}
{{--                        <li><a href="#">Services</a></li>--}}
{{--                        <li><a href="#">Contact Us</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- End footer links column-->--}}
            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                Engineered by <a href="https://github.com/caren-achieng">PinkDev</a>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
