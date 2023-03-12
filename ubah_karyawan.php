<?php include "header.php"; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM karyawan WHERE id_karyawan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Karyawan</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama'] ?>">
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
                <input type="text" class="form-control" name="tempat_tgllahir" value="<?php echo $pecah['tempat_tgllahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="Lajang">
                    <label class="form-check-label" for="inlineRadio1">Lajang</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="Menikah">
                    <label class="form-check-label" for="inlineRadio2">Menikah</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" value="<?php echo $pecah['jabatan'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelp" value="<?php echo $pecah['no_telp']  ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="5" ?>
                    <?php echo $pecah['alamat']; ?>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="ubah">ubah</button>
            </div>
        </div>
    </form>
    <?php include "footer.php"; ?>
    <?php
    if (isset($_POST['ubah'])) {
        $koneksi->query("UPDATE karyawan SET nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',
        tempat_tgllahir='$_POST[tempat_tgllahir]',status='$_POST[status]',jabatan='$_POST[jabatan]',
        no_telp='$_POST[notelp]',alamat='$_POST[alamat]' WHERE id_karyawan='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_karyawan.php'</script>";
    }
