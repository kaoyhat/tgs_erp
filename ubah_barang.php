<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<?php include "header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Barang</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode" value="<?php echo $pecah['kode_barang'] ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_barang'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                    <input type="text" class="form-control" name="harga" value="<?php echo $pecah['harga'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stok" value="<?php echo $pecah['stok'] ?>">
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
        $koneksi->query("UPDATE barang SET kode_barang='$_POST[kode]',nama_barang='$_POST[nama]',
        harga='$_POST[harga]',stok='$_POST[stok]' WHERE id_barang='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_barang.php'</script>";
    }
    ?>