<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM transaksi where id_transaksi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_transaksi.php'</script>";
