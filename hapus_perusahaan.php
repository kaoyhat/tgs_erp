<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM penempatan_kerja WHERE id_penempatan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM penempatan_kerja WHERE id_penempatan='$_GET[id]'");

echo "<script>alert('Data Berhasil Dihapus');window.location='data_perusahaan.php'</script>";
