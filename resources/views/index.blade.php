<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. Rizki Jaya Abadi Transportasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="home">
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/rja_logo.png') }}" alt="" width="65px">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/rja_logo.png') }}" alt="" width="65px"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#home">Home</a></li>
                                                <li><a href="#services">Services</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10">
                                <div class="hero__caption">
                                    <h1>Kami Melayani <span>Pengiriman</span> Barang - Barang Retail Ke Seluruh Indonesia</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30" id="services">
            <div class="container" x-data="{ service: 1 }">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Services</span>
                            <h2>What We Can Do For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="single-cat active text-center mb-20" x-on:click="service = 1">
                            <div class="cat-icon">
                              <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Tracking Barang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center mb-20" x-on:click="service = 2">
                            <div class="cat-icon">
                              <i class="fa-solid fa-truck"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Trucking</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center mb-20" x-on:click="service = 3">
                            <div class="cat-icon">
                              <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Retail</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center mb-20" x-on:click="service = 4">
                            <div class="cat-icon">
                              <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Freight Forwarding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center mb-20" x-on:click="service = 5">
                            <div class="cat-icon">
                              <i class="fa-solid fa-box"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Project Cargo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center mb-20" x-on:click="service = 6">
                            <div class="cat-icon">
                              <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Shipping Service</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" x-show="service == 1">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Track your shipments</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-sm">Track</button>
                                </form>
                            </div>
                        </div>
                        <div class="card" x-show="service == 2">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" x-show="service == 3">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" x-show="service == 4">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" x-show="service == 5">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" x-show="service == 6">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!--? About Area Start -->
        <div class="about-low-area padding-bottom" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>Solusi Logistik & Transportasi Aman yang Menghemat Waktu Kita yang Berharga!</h2>
                            </div>
                            <p>
                              PT. Rizki Jaya Abadi Transportasi Berdiri pada tanggal
                              15 Juni 2009. Sebelumnya PT. Rizki Jaya Abadi
                              berbadan hukum. Perseroan Komanditer dengan
                              nama CV. Rizki Jaya Abadi dibawah wewenang notaris
                              Ayem Agustinah., SH. Di Surabaya. Perseroan Terbatas
                              ini didirikan untuk jangka waktu yang tidak terbatas,
                              tertanggal sejak keputusan ini diturunkan oleh instansi
                              pemerintah terkait yang mempunyai wewenang.
                            </p>
                            <p>
                              Didalam naungan PT. Rizki Jaya Abadi Transportasi
                              telah tergabung tenaga-tenaga profesional dari
                              bidang terkait yang mempunyai etos kerja yang tinggi
                              serta dedikasi tinggi terhadap pekerjaan dalam
                              membangun perusahaan PT. Rizki Jaya Abadi
                              Transportasi guna memberikan keseimbangan
                              terhadap perkembangan zaman dan laju tumbuh
                              perekonomian Indonesia dan Masyarakat Ekonomi
                              Asean (MEA)
                            </p>
                            <div class="section-tittle mb-35">
                                <h2>Visi, Misi Dan Legalitas Perusahaan</h2>
                            </div>
                            <div class="section-tittle mb-35">
                                <span>Visi</span>
                            </div>
                            <p>
                                Menjadi perusahaan jasa ekspedisi dan jasa transportsi berkualitas, professional, unggul,
                                terkemuka dan terpercaya, serta terdepan di Indonesia dalam layanan kinerja juga kepuasan
                                customer. Selalu mengutamakan mutu layanan pada pelanggan dengan mutu yang tinggi,
                                aman dan harga yang kompetitif.
                            </p>
                            <div class="section-tittle mb-35">
                                <span>Misi</span>
                            </div>
                            <ul>
                                <li>
                                    Mengembangkan karyawan yang berkompeten dengan menciptakan lingkungan kerja
                                    yang baik untuk mendukung tercapainya kepuasan customer dan hasil maksimal
                                    perusahaan.
                                </li>
                                <li>
                                    Membantu customer dalam pengiriman barang dengan baik dan tepat waktu.
                                </li>
                                <li>
                                    Selalu memberikan pelayanan berkualitas yang terbaik kepada seluruh customer melalui
                                    mitra kerja perusahaan.
                                </li>
                                <li>
                                    Peningkatan nilai perusahaan bagi para mitra bisnis.
                                </li>
                                <li>
                                    Melakukan kegiatan bisnis sesuaI standar manajemen perusahaan.
                                </li>
                                <li>
                                    Meningkatkan produktifitas kerja karyawan.
                                </li>
                                <li>
                                    Selalu berinovasi dalam setiap perkembangan.
                                </li>
                                <li>
                                    Mensejahterakan taraf hidup karyawan.
                                </li>
                                <li>
                                    Memberikan dampak positif bagi lingkungan sekitar perusahaan.
                                </li>
                            </ul>
                            <div class="section-tittle mb-35">
                                <span>Legalitas</span>
                            </div>
                            <ul>
                                <li>
                                    Nomor Induk Wajib Pajak (NPWP) <br>
                                    No. 92.104.355.0-603.000
                                </li>
                                <li>
                                    Nomor Induk Berusaha (NIB) <br>
                                    9120302742323
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <img src="assets/img/gallery/about2.png" alt="" class="w-100 float-right">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
    </main>
    <footer id="contact">
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row d-flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <h1 class="text-white">PT. Rizki Jaya Abadi Transportasi</h1>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">
                                          Pengiriman Barang Menggunakan <span class="text-orange">COLT DIESEL</span>, <span class="text-orange">FUSO ENGKEL</span>, <span class="text-orange">TRONTON</span>, <span class="text-orange">TRAILER</span>, <span class="text-orange">LOW BED</span>, <span class="text-orange">CONTAINER & KAPAL LOS CARGO?</span> Melalui Darat dan Laut? KAMI SOLUSINYA !!! Kami melayani pengiriman barang partai besar maupun kecil ke seluruh wilayah Indonesia.
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-tittle">
                                  <div class="footer-pera">
                                      <p class="info1">
                                        <span class="d-block">Email: rizkijayaabadi@ymail.com</span>
                                        <span class="d-block mt-2">Alamat: JL Bypas krian km 30 ruko keraton residence superblok no 9, Sidomukti, Kraton, Kec. Krian, Kabupaten Sidoarjo, Jawa Timur 61262</span>
                                      </p>
                                  </div>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social ">
                                    <a href="https://web.facebook.com/rizkijaya.abadi.54?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/pt-rizki-jaya-abadi-2756b34b" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="https://www.instagram.com/rizkijayaabadi_official" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>CONTACT PERSON</h4>
                                    <ul>
                                        <li><a href="https://api.whatsapp.com/send/?phone=6281357777014&text&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp-square mr-1"></i> 081357777014</a></li>
                                        <li><a href="https://api.whatsapp.com/send/?phone=6281354697558&text&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp-square mr-1"></i> 081354697558</a></li>
                                        <li><a href="https://api.whatsapp.com/send/?phone=6281217829942&text&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp-square mr-1"></i> 081217829942</a></li>
                                        <li><a href="https://api.whatsapp.com/send/?phone=6282336584694&text&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp-square mr-1"></i> 082336584694</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> <span class="text-orange">PT. Rizki Jaya Abadi Transportasi</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>