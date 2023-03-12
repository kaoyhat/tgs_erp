<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM barang WHERE id_barang='$_GET[id]'");

echo "<script>alert('Data Berhasil Dihapus');window.location='data_barang.php'</script>";
