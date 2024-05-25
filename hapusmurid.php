<?php
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

$ambil = $koneksi->query("SELECT * FROM murid WHERE id_murid='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM murid WHERE id_murid='$_GET[id]'");

echo "<script>alert('Murid Terhapus')</script>";
echo "<script>location='adminmurid.php'</script>";

?>