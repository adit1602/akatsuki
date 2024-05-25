<?php
//koneksi ke data base
$koneksi = new mysqli("localhost","root","","sekolah");

$ambil = $koneksi->query("SELECT * FROM mapel WHERE id_mapel='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM mapel WHERE id_mapel='$_GET[id]'");

echo "<script>alert('Mata Pelajaran Terhapus')</script>";
echo "<script>location='adminmapel.php'</script>";

?>