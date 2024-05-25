<?php
session_start();
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

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

    <!-- End HEader -->
    <!-- ======= Hero Section ======= -->
    <section id="hero2"></section>
    <!-- End Hero -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Guru</h2>
            </div>
            <!-- ======= awal tabel data guru ======= -->
            <table width=300 align=center border=3 cellspacing=4 cellpadding=2 bordercolor=blue>
                <tr>
                    <td>
                        <center>
                            <div>
                                <h3> <strong>Login</strong></h3>
                            </div>
                        </center>
                    </td>
                </tr>
            </table>
            <br>
            <table width=300 align=center border=3 cellspacing=4 cellpadding=2 bordercolor=blue>
                <tr>
                    <td>
                        <form role="form" method="post">
                            <div class="mb-3">
                                <label for="user" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass" />
                            </div>

                            <center><button class="btn btn-primary " name="login">Login</button>
                            </center>

                            <br>
                            <a href="">
                                <center>
                                    <p>Lupa password ?</p>
                                </center>
                            </a>
                        </form>
                        <?php 
                        if (isset($_POST['login']))
                        {
                            $ambil = $koneksi->query("SELECT * FROM guru WHERE email_guru='$_POST[email]'AND password_guru ='$_POST[pass]'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                                $_SESSION['guru']=$ambil->fetch_assoc();
                                echo "<script>alert('Login berhasil [ Selamat datang Guru ]')</script>";
                                echo "<script>location='index.php'</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Login Gagal [ Coba cek kembali ussername & Password anda ]')</script>";
                                echo "<script>location='login2.php'</script>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <center>
                <a href="login.php"><INPUT TYPE="button" value="Login Admin" class="btn btn-primary btn-kirim"></a>
            </center>
        </div>
    </section>
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