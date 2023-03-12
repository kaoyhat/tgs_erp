<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM customer where id_customer='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM customer WHERE id_customer='$_GET[id]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_customer.php'</script>";
