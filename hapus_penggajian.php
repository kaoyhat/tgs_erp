<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM gaji where id_penggajian='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM gaji WHERE id_penggajian='$_GET[id]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_penggajian.php'</script>";
