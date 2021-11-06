<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Lembaga Sertifikasi Profesi - HATHI</title>

    <meta property="og:title" content="Lembaga Sertifikasi Profesi - HATHI"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://oedadesign.com/HATHI/assets/img/og-facebook.png"/>
    <meta property="og:site_name" content="Lembaga Sertifikasi Profesi - HATHI"/>
    <meta property="og:description" content="Himpunan Ahli Teknik Hidraulik Indonesia"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Lembaga Sertifikasi Profesi - HATHI"/>
    <meta name="twitter:description" content="Himpunan Ahli Teknik Hidraulik Indonesia"/>
    <meta name="twitter:image" content="https://oedadesign.com/HATHI/assets/img/og-facebook.png"/>
    <meta itemprop="image" content="https://oedadesign.com/HATHI/assets/img/og-facebook.png"/>
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('web/img/favicon.png')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">

</head>

<body>
<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main">
    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
                <img class="navbar-brand-regular" src="{{asset('web/img/logo/HATHI-logo.png')}}" alt="sticky brand-logo" style="max-width: 70px;">
                <img class="navbar-brand-sticky" src="{{asset('web/img/logo/HATHI-logo.png')}}" alt="sticky brand-logo" style="max-width: 70px;">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-inner">
                <!--  Mobile Menu Toggler -->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LSP-HATHI
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="about.html">Tentang Kami</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="organisasi.html">Organisasi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="kegiatan.html">Kegiatan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Kanggotaan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Dokumen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#pricing">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Kontak</a>
                        </li>
                        <li style="margin-top: 15px;">
                            <div class="btndaftar"><a style="color: #fff;padding: 0 10px;" href="#">DAFTAR</a> | <a style="color: #fff;padding: 0 10px;" href="#">LOGIN</a></div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header End ***** -->
@yield('content')
<!--====== Footer Area Start ======-->
    <footer class="footer-area footer-fixed">
        <!-- Footer Top -->
        <div class="footer-top ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mobgone">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">
                                <img class="logo" src="{{asset('web/img/logo/HATHI-logo.png')}}" alt="" style="max-width: 50%;">
                            </a>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mobgone mobgone991">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title mb-2">Useful Links</h3>
                            <ul>
                                <li class="py-2"><a href="#">Beranda</a></li>
                                <li class="py-2"><a href="#">Tentang Kami</a></li>
                                <li class="py-2"><a href="#">Kegiatan</a></li>
                                <li class="py-2"><a href="#">Organisasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mobgone mobgone991">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title mb-2">Product Help</h3>
                            <ul>
                                <li class="py-2"><a href="#">FAQ</a></li>
                                <li class="py-2"><a href="#">Dokumen</a></li>
                                <li class="py-2"><a href="#">Syarat Ketentuan</a></li>
                                <li class="py-2"><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mobgone mobgone991">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title mb-2">Connect with Us</h3>
                            <!-- Store Buttons -->
                            <div class="social-icons d-flex">
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="google-plus" href="#">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 deskgone991">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title mb-2">Connect with Us</h3>
                            <!-- Store Buttons -->
                            <div class="social-icons d-flex">
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="google-plus" href="#">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright Area -->
                        <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                            <!-- Copyright Left -->
                            <div class="copyright-left">&copy; 2021 HATHI  |   All rights reserved.</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{asset('web/js/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('web/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Plugins js -->
<script src="{{asset('web/js/plugins/plugins.min.js')}}"></script>

<!-- Active js -->
<script src="{{asset('web/js/active.js')}}"></script>
</body>


</html>
