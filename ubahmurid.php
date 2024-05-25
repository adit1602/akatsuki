<?php
session_start();
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

if (!isset($_SESSION['admin'])&!isset($_SESSION['guru']))
{
    echo " <script>location='murid.php';</script>";
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

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
                    <li><a class="nav-link scrollto" href="index2.php">Home</a></li>
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
                    <li><a class="getstarted scrollto" href="akun.php">Akun</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero2"></section>
    <!-- End Hero -->
    <!-- ======= awal form data  ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Ubah Data Murid</h2>
            </div>
            <?php
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

$ambil = $koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

            <form method="post" enctype="multipart/form-data">
                <div>
                    <label>Nama Murid</label><br>
                    <input type="text" name="nama" value="<?php echo $pecah['nama_murid'];?>">
                </div>
                <div>
                    <label>Email Murid</label><br>
                    <input type="text" name="email" value="<?php echo $pecah['email_murid'];?>">
                </div>
                <div>
                    <label>Telepon Murid</label><br>
                    <input type="text" name="telepon" value="<?php echo $pecah['telepon_murid'];?>">
                </div>
                <div>
                    <label>Kelas Murid</label><br>
                    <input type="text" name="kelas" value="<?php echo $pecah['kelas'];?>">
                </div>
                <br>
                <button name="ubah" class="btn btn-primary btn-kirim">Ubah</button>
            </form>

            <?php 
if (isset($_POST['ubah']))
{

        $koneksi->query("UPDATE murid SET nama_murid='$_POST[nama]',
        email_murid='$_POST[email]',telepon_murid='$_POST[telepon]',
        kelas='$_POST[kelas]'WHERE id_murid='$_GET[id]'");
    
    echo "<script>alert('data murid telah di ubah');</script>";
    echo "<script>location='adminmurid.php';</script>";
}

?>
        </div>
    </section>
    <!-- ======= akhir form data  ======= -->
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
                &copy; Copyright 2022 <strong><span>Akatsuki</span></strong>. All Rights Reserved
            </div>
            <div class="credits">Designed by @Akatsuki</div>
        </div>
    </footer>
    <!-- End Footer -->

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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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