<?php
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

$ambil = $koneksi->query("SELECT * FROM guru WHERE id_guru='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM guru WHERE id_guru='$_GET[id]'");

echo "<script>alert('Guru Terhapus')</script>";
echo "<script>location='adminguru.php'</script>";

?>