<?php include "header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Input Data Baru</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat_tgllahir" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tempat_tgllahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelp">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
        </div>
    </form>
    <?php include "footer.php" ?>
    <?php
    if (isset($_POST['simpan'])) {
        $koneksi->query("INSERT INTO customer (nama,jenis_kelamin,ttl,no_telp,alamat) VALUES ('$_POST[nama]','$_POST[jenis_kelamin]',
        '$_POST[tempat_tgllahir]','$_POST[notelp]','$_POST[alamat]')");
        echo "<script>alert('Data Berhasil Disimpan');window.location='data_customer.php'</script>";
    }
    ?>