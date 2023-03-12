<?php include "header.php"; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM cuti WHERE id_cuti='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Cuti</h1>
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
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin'] ?>">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin'] ?>">
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
                <input type="text" class="form-control" name="notelp" value="<?php echo $pecah['no_telp'] ?>">
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
            <label for="tipecuti" class=" col-sm-2 col-form-label ">Tipe Cuti</label>
            <div class=" col-sm-10">
                <select class="form-control" name="tipe" value="<?php echo $pecah['tipe_cuti'] ?>">
                    <option value="--Pilih Tipe--">--Pilih Tipe--</option>
                    <option value="Cuti Tahunan">Cuti Tahunan</option>
                    <option value="Cuti Sakit">Cuti Sakit</option>
                    <option value="Cuti Besar">Cuti Besar</option>
                    <option value="Cuti Hamil">Cuti Hamil</option>
                    <option value="Cuti Penting">Cuti Penting</option>
                    <option value="Cuti Bersama">Cuti Bersama</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="mulai" class="col-sm-2 col-form-label">Tanggal Cuti</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="mulai" value="<?php echo $pecah['tanggal_cuti'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="selesai" value="<?php echo $pecah['tglselesai_cuti'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alasan" class="col-sm-2 col-form-label">Alasan</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alasan" rows="5">
                    <?php echo $pecah['alasan'] ?>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="ubah">ubah</button>
            </div>
        </div>
    </form>
    <?php include "footer.php" ?>
    <?php
    if (isset($_POST['ubah'])) {
        $koneksi->query("UPDATE cuti SET nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',
        ttl='$_POST[tempat_tgllahir]',no_telp='$_POST[notelp]',alamat='$_POST[alamat]',tipe_cuti='$_POST[tipe]',
        tanggal_cuti='$_POST[mulai]',tglselesai_cuti='$_POST[selesai]',alasan='$_POST[alasan]' 
        WHERE id_cuti='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_cuti.php'</script>";
    }
    ?>