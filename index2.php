<?php
session_start();
//koneksi ke data base
$koneksi = new mysqli("localhost", "root", "", "sekolah");

if (isset($_SESSION['admin'])) {
    echo " <script>location='index.php';</script>";
    exit();
} else if (isset($_SESSION['guru'])) {
    echo " <script>location='index.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Team Akatsuki</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/akatsuki.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index2.php">Akatsuki</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index2.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index2.php?#about">About</a></li>
                    <li><a class="nav-link scrollto" href="struktur.html">Struktur</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="Berita.html">Berita & Informasi</a></li>
                            <li><a class="nav-link scrollto" href="pengumuman.html">Pengumuman Sekolah</a></li>
                            <li><a class="nav-link scrollto" href="agenda.html">Agenda Sekolah</a></li>
                            <li><a class="nav-link scrollto" href="index2.php?#portfolio">Infrastruktur</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Prestasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="prestasi-sekolah.html">Sekolah</a></li>
                            <li><a href="prestasi-siswa.html">Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index2.php?#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="adminguru.php">Guru</a></li>
                            <li><a class="nav-link scrollto" href="adminmurid.php">Murid</a></li>
                            <li><a class="nav-link scrollto" href="adminmapel.php">Mata Pelajaran</a></li>

                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="akun.php">Daftar / Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>SELAMAT DATANG DI<br />SMAN 1 BAGAN SINEMBAH</h1>
                    <h2>Where Tomorrow's Leaders Come Together</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="login.php" class="btn-get-started scrollto">Daftar / Login</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200"></div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Our School</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>SMA Negeri (SMAN) 1 Bagan Sinembah, merupakan salah satu Sekolah Menengah Atas Negeri yang
                            ada di Kabupaten Rokan Hilir, Provinsi Riau, Indonesia. Sama dengan SMA pada umumnya di
                            Indonesia masa pendidikan sekolah di SMAN 1 Bagan
                            Sinembah ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII.
                            SMAN 1 Jember didirikan pada tahun 1987.

                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ditinjau dari aspek geografis, SMAN 1 Bagan Sinembah terletak di wilayah timur dalam peta
                            provinsi Riau. Posisi SMAN 4 Jember terletak di Jalan Jendral Ahmad Yani No.45, Riau dan
                            tepat berada di pinggir jalan provinsi serta tidak jauh dari Pusat Kita.
                            Secara geografis SMAN 1 Jember memiliki letak yang strategis, mudah dijangkau dari berbagai
                            arah, dan dilalui segala jenis angkutan umum sehingga memudahkan akses menuju sekolah.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Sambutan Section ======= -->
        <section id="sambutan" class="sambutan section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h3> <strong>Sambutan Kepala Sekolah</strong></h3>
                            <p>Hingga saat ini keberadaan SMA Negeri 1 Bagan Sinembah di tengah-tengah masyarakat sangat
                                dibutuhkan. Untuk memenuhi tuntutan masyarakat dan orangtua siswa, berbagai upaya telah
                                dilakukan untuk meningkatkan kualitas SMA Negeri
                                1 Bagan Sinembah. Salah satunya adalah dengan pembuatan Website. Sesuai dengan kemajuan
                                teknologi dan informasi pihak sekolah melalui Website akan memberikan informasi kepada
                                masyarakat tentang keberadaan SMA Negeri 1 Bagan
                                Sinembah. Disamping itu, kehadiran Website SMA Negeri 1 Bagan Sinembah akan memudahkan
                                pihak sekolah untuk memberikan pelayanan akan informasi dan data tentang SMA Negeri 1
                                Bagan Sinembah kepada masyarakat dengan mudah,
                                cepat dan akurat. Saya mengucapkan terima kasih atas kesungguhan dan kerja keras dari
                                semua pihak yang telah berupaya mewujudkan Website SMA Negeri 1 Bagan Sinembah. Semoga
                                kerja keras dan kesungguhan yang dilakukan mendapat
                                sambutan yang positif dari masyarakat. </p>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('assets/img/team/team-2.jpg')" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- End Sambutan Section -->

        <!-- ======= VisiMisi Section ======= -->
        <section id="visimisi" class="visimisi">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>VISI DAN MISI</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h1>Visi Sekolah</h1>
                        <ul>
                            Terwujudnya Sekolah Yang APIK (AGAMIS, PEDULI LINGKUNGAN, INTELEKTUAL, KOMPETITIF, DAN
                            BERKARAKTER)
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h1>Misi Sekolah</h1>
                        <p>
                        <ol>
                            <li>Menciptakan Suasana yang Agamis Dengan Semangat Nasionalisme dan Kekeluargaan dengan
                                Melaksanakan Ajaran Agama Masing-Masing.</li>
                            <li>Mengembangkan Sekolah yang Memiliki Sarana Pembelajaran yang Berbasis Teknologi dan
                                Informatika di</li>
                            <li>Suasana Lingkungan yang Asri, Aman, Bersih, dan Sehat. Mempersiapkan Peserta Didik Untuk
                                Mengikuti Pendidikan Lanjut, Memiliki Kecerdasan dan Kompetensi Untuk Mampu Hidup
                                Mandiri, Mampu Bersaing Pada Taraf Regional, Nasional
                                Dan Internasional.</li>
                            <li> Mencetak Insan yang Santun Dengan Perilaku Sesuai Dengan Kepribadian dan Budaya Bangsa.
                            </li>
                            <li>Mewujudkan Lingkungan Sekolah yang Clear dan Green. Menciptakan Kepribadian Yang SAKAL
                                (Sayang Akan Kelestarian Alam Dan Lingkungan).</li>
                            <li>Melaksanakan KBM Dan Bimbingan Secara Sportif dan Profesional Untuk Meningkatkan
                                Penguasaan IPTEK.</li>
                            <li>eningkatkan Pembelajaran yang Aktif Inovatif Kreatif dan Menyenangkan. Membuat Sistem
                                Pengembangan Pembelajaran Berbasis IT.</li>
                            <li>Menumbuhkan Rasa Percaya Diri Pada Siswa.</li>
                        </ol>
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End VisiMisi Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>SMAN 1 Bagan Sinembah</h3>
                        <p>AYO DAFTARKAN DIRIMU SEKARANG</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="login.php">Daftar / Login</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Album Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Album</h2>
                    <p>SMAN 1 Bagan Sinembah menyediakan Ruang kelas yang nyaman dan laboratotium yang lengkap lapangan
                        yang luas dan Eskul Paskibraka</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Sekolah</li>
                    <li data-filter=".filter-card">Laboratorium</li>
                    <li data-filter=".filter-web">Kelas</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Sekolah</h4>
                            <p>Paskibraka</p>
                            <a href="assets/img/portfolio/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/6.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Kelas</h4>
                            <p>Ruang Kelas</p>
                            <a href="assets/img/portfolio/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/4.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Sekolah</h4>
                            <p>Kantin</p>
                            <a href="assets/img/portfolio/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/10.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Laboratorium</h4>
                            <p>Laboratorium Komputer</p>
                            <a href="assets/img/portfolio/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/5.webp" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Kelas</h4>
                            <p>Ruang Kelas</p>
                            <a href="assets/img/portfolio/5.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Sekolah</h4>
                            <p>Lapangan</p>
                            <a href="assets/img/portfolio/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/7.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Laboratorium</h4>
                            <p>Laboratorium Sains</p>
                            <a href="assets/img/portfolio/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/8.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Laboratorium</h4>
                            <p>Laboratorium Biologi</p>
                            <a href="assets/img/portfolio/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/9.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="portfolio-info">
                            <h4>Kelas</h4>
                            <p>Ruang Kelas</p>
                            <a href="assets/img/portfolio/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Album Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        Berikut adalah hal hal yang sering ditanyakan oleh calon Siswa.
                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa Itu Sekolah
                                Penggerak? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>Sekolah Penggerak adalah sekolah yang berfokus pada pengembangan hasil belajar siswa
                                    secara holistik dengan mewujudkan Profil Pelajar Pancasila yang mencakup kompetensi
                                    dan karakter yang diawali dengan SDM yang unggul (kepala
                                    sekolah dan guru)</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Bagaimana Tata
                                Cara Pendaftaran PPDB? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana Proses
                                Seleksinya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                    tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah Saya Bisa
                                merubah pilihan jurusan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"> Bagaimana
                                Proses Seleksinya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <!-- Contact -->
        <section id="contact">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Pesan dan Kesan</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Mantap</strong> Pesan anda sudah masuk.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form name="ditz-contact-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="name" class="form-control" id="name" aria-describedby="name" name="nama" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
                            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Contact -->
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center"></div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2023 <strong><span>Indra Adityawarman 2100018060</span></strong>. All Rights Reserved
            </div>
            <div class="credits">Designed by @Adityawarman</div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Script Pesan dan kesan -->
    <script>
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbxJB32YoyZNECjciPOiasIT78TYhx8pvd8kI3M68QfkZJV6HrebROnTLU48snwWuTAe/exec";
        const form = document.forms["ditz-contact-form"];
        const btnKirim = document.querySelector(".btn-kirim");
        const btnLoading = document.querySelector(".btn-loading");
        const myAlert = document.querySelector(".my-alert");

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            //ketika tombol submit di klik
            //tampilkan loading hilangkan kirim
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form)
                })
                .then((response) => {
                    //tampilkan kirim hilangkan loading
                    btnLoading.classList.toggle("d-none");
                    btnKirim.classList.toggle("d-none");
                    //tampilkan alert
                    myAlert.classList.toggle("d-none");
                    //reset form
                    form.reset();
                    console.log("Success!", response);
                })
                .catch((error) => console.error("Error!", error.message));
        });
    </script>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>