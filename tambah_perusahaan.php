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
            <label for="nama" class="col-sm-2 col-form-label">Nama Perusahaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelp">
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">Jumlah Karyawan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jum_krywn">
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
        $koneksi->query("INSERT INTO penempatan_kerja (nama_perusahaan,alamat_perusahaan,no_telp,jumlah_karyawan) VALUES
         ('$_POST[nama]','$_POST[alamat]','$_POST[notelp]','$_POST[jum_krywn]')");
        echo "<script>alert('Data Berhasil Disimpan');window.location='data_perusahaan.php'</script>";
    }
    ?>