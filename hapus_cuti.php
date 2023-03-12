<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM cuti WHERE id_cuti='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM cuti WHERE id_cuti='$_GET[id]'");

echo "<script>alert('Data Berhasil Dihapus');window.location='data_cuti.php'</script>";
