<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>SI - Posyandu</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/member.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="navbar-brand">
                <div class="d-flex justify-content-center align-items-center text-light">
                    <img src="assets/img/logo.png" alt="Logo" height="40"
                        class="d-inline-block align-text-top me-3">
                    <strong>Posyandu Dahlia 1</strong>
                </div>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li class="dropdown">
                        {{-- <a href="#"><span>Login/Register</span><i class="bi bi-chevron-down"></i></a> --}}
                        @if (Auth::user())
                            <button class="nav-link btn-login"><span>{{ Auth::user()->name }}</span> <i
                                    class="bi bi-chevron-down"></i></button>
                        @else
                            <button class="nav-link btn-login"><span>Masuk</span> <i
                                    class="bi bi-chevron-down"></i></button>
                        @endif
                        <ul class="mt-2">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('my-portal') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">My
                                        Portal</a>
                                    <a href="{{ route('logout') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </li>
                    {{-- <li><button class="nav-link btn-login" href="#login">Masuk</button></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Selamat Datang di <span>Sistem Informasi Posyandu Desa Ngariboyo</span></h1>
                        <h2>Semua yang anda butuhkan kini dapat diakses dalam sebuah website</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/logo-desa.png" class="img-fluid animated" width="60%"
                        alt="Kabupaten Magetan">
                </div>
                {{-- <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Selamat Datang di <span>Sistem Informasi Posyandu Desa Ngariboyo</span></h1>
                        <h2>Semua yang anda butuhkan kini dapat diakses dalam sebuah website</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/logo-desa.png" class="img-fluid animated" alt="">
                </div> --}}
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <div class="section-title" data-aos="fade-up">
                            <h2>Tentang Kami</h2>
                            <p>Posyandu Dahlia 1</p>
                        </div>

                        <p class="text-tentang">
                            Posyandu Dahlia 1 merupakan pos pelayanan yang terletak di Dusun Jetis,
                            Desa Ngariboyo. Dimana kegiatan ini bertujuan untuk memudahkan masyarakat dalam
                            memperoleh pelayanan kesehatan ibu dan anak. Pelaksanaan posyandu dilakukan secara rutin
                            satu bulan sekali di tempat yang telah disediakan oleh petugas. Agar berjalan dengan
                            lancar, posyandu ini didampingi oleh kader posyandu dan bidan atau petugas puskesmas,
                            sehingga perkembangan dan pertumbuhan ibu dan anak dapat dipantau secara maksimal.
                            <br>
                            <br>
                            <strong>VISI :</strong>
                            <br>
                            Menjadikan masyarakat yang sehat, cerdas dan mandiri
                            <br>
                            <br>
                            <strong>MISI :</strong>
                            <br>
                            1. Kesehatan yang optimal mewujudkan keluarga sehat dan harmoni
                            <br>
                            2. Meningkatkan masyarakat agar hidup sehat dan bersih
                        </p>

                    </div>
                    <div class="col-xl-4 icon-boxes d-flex flex-column align-items-center justify-content-center"
                        data-aos="fade-left">
                        <img class="rounded" src="assets\img\hero-main.png" alt="potret pemeriksaan balita">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <div class="section-title" data-aos="fade-up">
                            <h2>Layanan</h2>
                            <p>Kami Melayani</p>
                        </div>

                        <p class="justify-content-center">Jadwal kegiatan posyandu Dahlia 1 dilakukan secara rutin
                            tanggal 21 setiap bulannya, yang berlokasi di rumah Ibu Laili Mukharomah RT 3 RW 1 Dusun
                            Jetis, Desa Ngariboyo.
                            Adapun program layanan yang dilakukan oleh Posyandu Dahlia 1 diantaranya :
                        </p>

                        <div class="row mt-3">
                            <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <h4 style="color: #01036f;"><strong>Timbangan</strong></h4>
                                        </h5>
                                        <p class="card-text" style="text-align: justify;">Posyandu Dahlia 1 melayani
                                            program timbangan, dimana bayi dan balita
                                            akan di timbang berat badan dan diukur tinggi badannya untuk mengetahui
                                            perkembangan bayi dan balita yang ada di Dusun Jetis Desa Ngariboyo setiap
                                            bulannya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <h4 style="color: #01036f;"><strong>Imunisasi</strong></h4>
                                        </h5>
                                        <p class="card-text" style="text-align: justify;">Posyandu Dahlia 1 juga
                                            melayani program imunisasi bagi bayi dan
                                            balita, dimana imunisasi akan dilakukan secara bertahap sesuai dengan umur
                                            dan jenis
                                            vaksin agar kesehatan
                                            terjaga dan terhindar dari penyakit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <h4 style="color: #01036f;"><strong>Cek Ibu Hamil</strong></h4>
                                            <p class="card-text" style="text-align: justify;">Posyandu Dahlia 1 juga
                                                melayani cek kesehatan ibu hamil untuk
                                                mengetahui perkembangan janin dan kesehatan ibu agar terhindar dari
                                                resiko yang tidak diinginkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Galeri</h2>
                    <p>Lihat Aktivitas Kami</p>
                </div>

                <div class="row g-0" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="assets/img/gallery/galeri1.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri1.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/galeri2.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri2.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/galeri3.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/galeri4.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri4.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="assets/img/gallery/galeri5.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri5.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="assets/img/gallery/galeri6.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri6.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="assets/img/gallery/galeri7.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri7.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="assets/img/gallery/galeri8.png" class="gallery-lightbox">
                                <img src="assets/img/gallery/galeri8.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat</h4>
                                <p>Jl. Eang Singogati, Dsn. Jetis RT 3 RW 1, Ds. Ngariboyo, Kab. Magetan</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email</h4>
                                <p>posyanduDahlia1@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon</h4>
                                <p>+62 857-3506-8205</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                    scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=300&amp;hl=en&amp;q=Ngariboyo&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://gachanox.io/">Gacha Nox Download</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 300px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 300px;
                                }

                                .gmap_iframe {
                                    height: 300px !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gap-5">
                    <div class="col-lg-6 col-md-8">
                        <div class="footer-info">
                            <h3>Posyandu Dahlia 1</h3>
                            <p class="pb-3"><em>Menjadikan masyarakat yang sehat, cerdas dan mandiri</em></p>
                            <p>
                                Jl. Eang Singogati <br>
                                Dsn. Jetis, RT 3 RW 1,
                                Ds. Ngariboyo, Kab. Magetan<br><br>
                                <strong>Telepon:</strong> +62 857-3506-8205<br>
                                <strong>Email:</strong> posyandudahlia1@gmail.com<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Jadwal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Layanan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Timbangan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Imunisasi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cek Ibu Hamil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Posyandu Dahlia 1</span></strong>. All Rights Reserved
            </div>
            <!-- <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> -->
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
