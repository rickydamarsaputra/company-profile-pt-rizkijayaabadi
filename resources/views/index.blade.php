<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. Rizki Jaya Abadi Transportasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">

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

    <!-- Timeline Css -->
    <style>
    ul, li {
        list-style: none;
        padding: 0;
    }
    
    .container-timeline {
        display: flex;
        /* justify-content: center; */
        /* align-items: center; */
        /* padding: 3rem 1rem; */
    }
    
    .container-timeline .wrapper {
        /* padding: 2rem; */
        border-radius: 15px;
    }
    
    .container-timeline h1 {
        font-size: 1.1rem;
        font-family: sans-serif;
        margin-bottom: 2rem;
    }
    
    .container-timeline .sessions {
        /* margin-top: 2rem; */
        margin: 0;
        border-radius: 12px;
        position: relative;
    }
    
    .container-timeline li {
        padding-bottom: 0.5rem;
        border-left: 1px solid #abaaed;
        position: relative;
        padding-left: 20px;
        margin-left: 10px;
        display: flex;
        flex-direction: column;
    }
    
    .container-timeline li:last-child {
        border: 0px;
        padding-bottom: 0;
    }
    
    .container-timeline li:before {
        content: '';
        width: 15px;
        height: 15px;
        background: #838994;
        /* border: 1px solid #4e5ed3; */
        box-shadow: 3px 3px 0px #bab5f8;
        box-shadow: 0px 0px 0px 4px #e5e7e9;
        border-radius: 50%;
        position: absolute;
        /* left: -10px; */
        left: -8px;
        top: 0px;
    }
    
    .container-timeline li:first-child:before {
        background: #4fd15a;
        border: 1px solid #4fd15a;
        border-radius: 50%;
        box-shadow: 0px 0px 0px 4px #d6ffde;
    }
    
    .container-timeline li:last-child:before {
        left: -7px;
    }
    
    .container-timeline .time {
        color: #2a2839;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-transform: capitalize;
        margin-top: -5px;
    }
    
    .container-timeline p,
    .container-timeline .time span {
        color: #4f4f4f;
        font-family: sans-serif;
        line-height: 1.5;
        margin-top: 0.4rem;
        text-transform: capitalize;
        opacity: 0.8;
    }
    
    @media screen and (min-width: 601px) {
        .container-timeline .time {
            font-size: .9rem;
        }
    }
    
    @media screen and (max-width: 600px) {
        .container-timeline .time {
            margin-bottom: .3rem;
            font-size: 0.85rem;
        }
    }
    
    @media screen and (max-width: 600px) {
        .container-timeline p {
            font-size: .9rem;
        }
    }
    </style>

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
                            <h2>Apa yang Dapat Kami Lakukan Untuk Anda</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-stretch mb-20">
                    <div class="col-lg">
                        <div class="single-cat active text-center" x-on:click="service = 1">
                            <div class="cat-icon">
                              <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Tracking Barang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 2">
                            <div class="cat-icon">
                              <i class="fa-solid fa-truck"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Trucking</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 3">
                            <div class="cat-icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Retail</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 4">
                            <div class="cat-icon">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Container Service</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 5">
                            <div class="cat-icon">
                              <i class="fa-solid fa-box"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Project Cargo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 6">
                            <div class="cat-icon">
                                <i class="fa-solid fa-ship"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Shipping Service</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-cat text-center" x-on:click="service = 7">
                            <div class="cat-icon">
                                <i class="fa-solid fa-ship"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>Syarat Dan Ketentuan</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" x-show="service == 1">
                            <div class="card-body">
                                <h1>Tracking Barang</h1>
                                <form action="{{ route('tracking.barang') }}" method="get">
                                    <div class="form-group">
                                        <label for="no_surat_jalan">No Surat Jalan</label>
                                        <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" placeholder="masukkan no surat jalan ex: (RJA/VII/030522)...">
                                    </div>
                                    <button type="submit" class="btn">Track</button>
                                </form>
                                @if (!empty($tracking))
                                    <div class="container-timeline mt-4">
                                        <div class="wrapper">
                                            <h1>Timeline Tracking</h1>
                                            <ul class="sessions">
                                            @if ($tracking->status == 'sampai')
                                                <li>
                                                <div class="time">Sampai</div>
                                                <p>{{ date_format($tracking->updated_at, 'd M Y, H:i') . ' WIB' }}</p>
                                                <p>Barang Sampai</p>
                                                </li>
                                            @endif
                                            @foreach ($timeline as $loopItem)
                                                <li>
                                                <div class="time">{{ $loopItem->title }}</div>
                                                <p>{{ date_format($loopItem->created_at, 'd M Y, H:i') . ' WIB' }}</p>
                                                <p>{{ $loopItem->sub_title }}</p>
                                                </li>
                                            @endforeach
                                            <li>
                                                <div class="time">Di Proses</div>
                                                <p>{{ date_format($tracking->created_at, 'd M Y, H:i') . ' WIB' }}</p>
                                                <p>Barang Di Proses</p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div x-show="service == 2">
                            @foreach ($trucks as $index => $loopItem)
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h1 class="{{ ($index % 2) == 0 ? 'text-left' : 'text-right' }}">{{ $loopItem->nama }}</h1>
                                        <div class="row">
                                            @if ($index % 2 == 0)
                                                <div class="col-lg mb-lg-0 mb-4 order-1">
                                                    <img src="{{ asset('storage/' . $loopItem->gambar) }}" class="img-fluid" alt="{{ $loopItem->deskripsi }}">
                                                </div>
                                                <div class="col-lg order-2">
                                                    <p class="text-capitalize">{{ $loopItem->deskripsi }}</p>
                                                </div>
                                            @else
                                                <div class="col-lg order-2 order-lg-1">
                                                    <p class="text-capitalize">{{ $loopItem->deskripsi }}</p>
                                                </div>
                                                <div class="col-lg mb-lg-0 mb-4 order-1 order-lg-2">
                                                    <img src="{{ asset('storage/' . $loopItem->gambar) }}" class="img-fluid" alt="Responsive image">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="card" x-show="service == 3">
                            <div class="card-body">
                                <h1>Retail</h1>
                                <div class="row">
                                    <div class="col-lg">
                                        <img src="{{ asset('assets/img/retail_img.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <p class="text-capitalize"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" x-show="service == 4">
                            <div class="card-body">
                                <h1>Container Service</h1>
                                <div class="row">
                                    <div class="col-lg">
                                        <img src="{{ asset('assets/img/container_service_img.jpg') }}" class="img-fluid" alt="pengertian freight forwarding
                                        (jasa pengiriman barang) adalah
                                        badan usaha yang bertujuan
                                        memberikan jasa
                                        pelayanan/pengurusan atau
                                        seluruh kegiatan diperlukan
                                        bagi terlaksananya pengiriman,
                                        pengangkutan dan penerimaan
                                        barang dengan menggunakan
                                        multimodal trasport baik darat,
                                        laut dan udara.">
                                    </div>
                                    <div class="col-lg">
                                        <p class="text-capitalize">
                                            pengertian freight forwarding
                                            (jasa pengiriman barang) adalah
                                            badan usaha yang bertujuan
                                            memberikan jasa
                                            pelayanan/pengurusan atau
                                            seluruh kegiatan diperlukan
                                            bagi terlaksananya pengiriman,
                                            pengangkutan dan penerimaan
                                            barang dengan menggunakan
                                            multimodal trasport baik darat,
                                            laut dan udara.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" x-show="service == 5">
                            <div class="card-body">
                                <h1>Project Cargo</h1>
                                <div class="row">
                                    <div class="col-lg">
                                        <img src="{{ asset('assets/img/project_cargo_img.jpg') }}" class="img-fluid" alt="Specialis dalam menangani mobilisasi project cargo yang
                                        didukung dengan beberapa armada dan team yang
                                        profesional serta bertanggung jawab tinggi.">
                                    </div>
                                    <div class="col-lg">
                                        <p class="text-capitalize">
                                            Specialis dalam menangani mobilisasi project cargo yang
                                            didukung dengan beberapa armada dan team yang
                                            profesional serta bertanggung jawab tinggi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" x-show="service == 6">
                            <div class="card-body">
                                <h1>Shipping Service</h1>
                                <div class="row">
                                    <div class="col-lg">
                                        <img src="{{ asset('assets/img/shipping_service_img.jpg') }}" class="img-fluid" alt="Memberikan pelayanan rental kapal
                                        untuk menangani pengiriman barang
                                        antar pulau yang terintegrasi baik
                                        menggunakan Tugboat/Tongkang,
                                        Landing Craft Tank (LCT) dan kapal
                                        reguler (Container, Ro-Ro &
                                        Breakbulk).">
                                    </div>
                                    <div class="col-lg">
                                        <p class="text-capitalize">
                                            Memberikan pelayanan rental kapal
                                            untuk menangani pengiriman barang
                                            antar pulau yang terintegrasi baik
                                            menggunakan Tugboat/Tongkang,
                                            Landing Craft Tank (LCT) dan kapal
                                            reguler (Container, Ro-Ro &
                                            Breakbulk).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" x-show="service == 7">
                            <div class="card-body">
                                <h1>Prosedur Pengiriman Barang PT. Rizki Jaya Abadi</h1>
                                <ul>
                                    <li>Pemilik/Pengirim barang wajib memberikan Informasi secara detail tentang Jenis, Jumlah, Isi dan nilai barang yang dikirim.</li>
                                    <li>Semua masalah yang timbul akibat ketidakjelasan informasi dari pemilik/pengirim barang yang diberikan kepada pihak PT. Rizki Jaya Abadi Transportasi, adalah bukan tanggung jawab PT. Rizki Jaya Abadi Transportasi dan sepenuhnya merupakan tanggung jawab pemilik/pengirim barang.</li>
                                    <li>Pemilik/Pengirim barang wajib melindungi barang yang dikirim dengan asuransi yang memadai dan menanggung seluruh biaya premi yang berlaku.</li>
                                    <li>Seluruh kerusakan/kehilangan barang yang tidak dilindungi asuransi adalah sepenuhnya tanggung jawab pemilik/pengirim barang dan PT. Rizki Jaya Abadi Transportasi terbebas dari tanggung jawab dan segala jenis tuntutan hukum yang berlaku di Indonesia.</li>
                                    <li>PT. Rizki Jaya Abadi Traansportasi mempunyai hak untuk memeriksa barang yang dikirim guna memastikan barang yang dikirim tidak melanggar hukum yang berlaku.</li>
                                    <li>PT. Rizki Jaya Abadi Transportasi tidak melayani / melarang pengiriman barang-barang seperti obat terlarang, Senjata api, amunisi, bahan kimia padat atau cair yang mudah terbakar dan berbahaya, bahan peledak, benda/senjata tajam, surat berharga, uang logam mulia atau sejenisnya dan seluruh barang-barang yang dilarang oleh hukum yang berlaku di Indonesia.</li>
                                    <li>Apabila pemilik/pengirim barang mengirimkan barang-barang yang dilarang oleh Negara, maka seluruh masalah dan kerugian yang timbul adalah mutlak tanggung jawab pemilik/pengirim barang. PT. Rizki Jaya Abadi Transportasi terbebas dari segala tanggung jawab dan tuntutan hukum dari pihak manapun yang berlaku di Negara Indonesia.</li>
                                    <li>PT. Rizki Jaya Abadi Transportasi hanya berpacuan pada jumlah koli, bukan berdasar jumlah isi dalam koli. Kerusakan/kehilangan isi dalam koli tanpa kerusakan pada kemasan luar adalah bukan tanggung jawab PT Rizki Jaya Abadi Transportasi.</li>
                                    <li>
                                        PT. Rizki Jaya Abadi Transportasi tidak bertanggung jawab atas seluruh kerusakan maupun kehilangan barang kiriman yang diakibatkan oleh Force Majuere ( kejadian yang terjadi di luar kemampuan manusia dan tidak dapat dihindarkan ) maupun kejadian yang terjadi diluar control PT. Rizki Jaya Abadi Transportasi seperti hal nya :
                                        <ul class="sub-regulation">
                                            <li>Bencana Alam (Banjir, Angin, Jembatan Putus, Kabut Asap, Gunung Meletus, Tanah longsor dan segala jenis bencana alam lainnya).</li>
                                            <li>Kebakaran (baik kebakaran alam, lintasan, maupun alat transportasi yang berkaitan).</li>
                                            <li>Huru – hara, Peperangan, Pembajakan, Teror, Kekacauan di Jaringan (darat, laut maupun udara) dan kejadian-kejadian sejenisnya.</li>
                                            <li>Terjadinya penahanan, penyitaan ataupun pemusnahan barang kiriman oleh pejabat pemerintah terkait (Bea Cukai, Karantina, Kejaksaan dan instansi Lainnya).</li>
                                            <li>Terjadinya Kesalahan teknis dari penerbangan, pelayaran dan PT KAI yang mengakibatkan kerugian material maupun non material seperti kapal tenggelam atau terbakar dan pesawat hilang kontak atau meledak, kereta api tergelincir atau tabrakan.</li>
                                        </ul>
                                    </li>
                                    <li>Selain syarat dan ketentuan yang tertulis pada surat jalan ini, PT Rizki Jaya Abadi Transportasi tidak dapat dibebani ataupun dituntut dengan perjanjian maupun dasar hukum lainnya tanpa adanya kesepakatan sebelumnya.</li>
                                    <li>Apabila tidak ada komplain dari penerima saat barang diserahkan, maka barang kiriman dianggap telah diterima dengan baik dan benar, pada saat itu juga tanggung jawab PT. Rizki Jaya Abadi  Transportasi terhadap barang kiriman sudah berakhir.</li>
                                    <li>Saat menyerahkan barang/menandatangani surat jalan PT. Rizki Jaya Abadi Transportasi, pemilik/pengirim barang dianggap telah membaca dan menyetujui semua syarat dan ketentuan pengiriman yang tertera pada surat jalan ini tanpa paksaan dari pihak manapun, serta membebaskan PT. Rizki Jaya Abadi Transportasi dari segala tuntutan dan bentuk ganti rugi apapun.</li>
                                    <li>PT. Rizki Jaya Abadi Transportasi hanya menerima klaim dari pemilik/pengirim barang. Klaim kerusakan ataupun kehilangan harus dilengkapi dengan dokumen dokumen terkait beserta bukti yang akurat selambat-lambatnya 2x24 jam terhitung sejak barang diterima.</li>
                                </ul>
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
                      <img src="assets/img/gallery/about_1.jpg" alt="" class="w-100 float-right">
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
                        <div class="col-lg-5">
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
                        <div class="col-lg-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>CONTACT PERSON</h4>
                                    <ul>
                                        <li><a href="https://api.whatsapp.com/send/?phone=6281357777014&text&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp-square mr-1"></i> 081357777014 (test)</a></li>
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