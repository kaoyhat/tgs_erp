<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM karyawan where id_karyawan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM karyawan WHERE id_karyawan='$_GET[id]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_karyawan.php'</script>";
