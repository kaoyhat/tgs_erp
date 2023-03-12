<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
$ambil = $koneksi->query("SELECT * FROM gaji where id_penggajian='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<?php include "header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Penggajian</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nip" value="<?php echo $pecah['nip'] ?>" readonly>
            </div>
        </div>
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
                <input type="text" class="form-control" name="tempat_tgllahir" value="<?php echo $pecah['ttl'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelp" value="<?php echo $pecah['notelp'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="5">
                    <?php echo $pecah['alamat'] ?>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="golongan" class=" col-sm-2 col-form-label ">Golongan</label>
            <div class=" col-sm-10">
                <select class="form-control" name="golongan" value="<?php echo $pecah['golongan'] ?>">
                    <option value="--Pilih Golongan--">--Pilih Golongan--</option>
                    <option value="Non Staff">Non Staff</option>
                    <option value="Staff">Staff</option>
                    <option value="Manager">Manager</option>
                    <option value="General Manager">General Manager</option>
                    <option value="Director">Director</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji Pokok</label>
            <div class="col-sm-10">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                    <input type="text" class="form-control" name="gaji" value="<?php echo $pecah['gaji_pokok'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
            <div class="col-sm-10">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                    <input type="text" class="form-control" name="potongan" value="<?php echo $pecah['potongan'] ?>">
                </div>
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
        $koneksi->query("UPDATE gaji SET nip='$_POST[nip]',nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',
        ttl='$_POST[tempat_tgllahir]',notelp='$_POST[notelp]',alamat='$_POST[alamat]',golongan='$_POST[golongan]',
        gaji_pokok='$_POST[gaji]',potongan='$_POST[potongan]' WHERE id_penggajian='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_penggajian.php'</script>";
    }
    ?>