<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM transaksi where id_transaksi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<?php include "header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Transaksi</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="kode" class="col-sm-2 col-form-label">Kode Transaksi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode" value="<?php echo $pecah['kode_transaksi'] ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis" class=" col-sm-2 col-form-label ">Jenis Transaksi</label>
            <div class=" col-sm-10">
                <select class="form-control" name="jenis" value="<?php echo $pecah['jenis_transaksi'] ?>">
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
                    <input type="text" class="form-control" name="biaya" value="<?php echo $pecah['biaya'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl" value="<?php echo $pecah['tanggal_transaksi'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" rows="5">
                    <?php echo $pecah['keterangan'] ?>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
    <?php include "footer.php" ?>
    <?php
    if (isset($_POST['ubah'])) {
        $koneksi->query("UPDATE transaksi SET kode_transaksi='$_POST[kode]',jenis_transaksi='$_POST[jenis]',
        biaya='$_POST[biaya]',tanggal_transaksi='$_POST[tgl]',keterangan='$_POST[keterangan]' WHERE id_transaksi='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_transaksi.php'</script>";
    }
    ?>