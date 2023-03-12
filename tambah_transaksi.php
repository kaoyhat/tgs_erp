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
            <label for="kode" class="col-sm-2 col-form-label">Kode Transaksi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis" class=" col-sm-2 col-form-label ">Jenis Transaksi</label>
            <div class=" col-sm-10">
                <select class="form-control" name="jenis">
                    <option value="--Pilih Transaksi--">--Pilih Transaksi--</option>
                    <option value="Tunai/Langsung">Tunai/Langsung</option>
                    <option value="Pengiriman/Transfer">Pengiriman/Transfer</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="biaya" class="col-sm-2 col-form-label">Biaya</label>
            <div class="col-sm-10">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                    <input type="text" class="form-control" name="biaya">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl">
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" rows="5"></textarea>
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
        $koneksi->query("INSERT INTO transaksi (kode_transaksi,jenis_transaksi,biaya,tanggal_transaksi,keterangan) VALUES ('$_POST[kode]','$_POST[jenis]','$_POST[biaya]',
        '$_POST[tgl]','$_POST[keterangan]')");
        echo "<script>alert('Data Berhasil Disimpan');window.location='data_transaksi.php'</script>";
    }
    ?>