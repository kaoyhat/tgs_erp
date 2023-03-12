<?php include "header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penggajian</h1>
        <form action="cari_penggajian.php" method="GET" class="navbar-form navbar-right">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="* Isi nama karyawan " aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


    </div>
    <!-- /.container-fluid -->
    <a href="tambah_penggajian.php" class="btn btn-primary">Tambah Data</a>
    <a href="cetak_penggajian.php" class="btn btn-info">Cetak Data </a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat, tanggal lahir</th>
                    <th scope="col">no_telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Golongan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Potongan</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT*FROM gaji"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $pecah['nip']; ?></td>
                        <td><?php echo $pecah['nama']; ?></td>
                        <td><?php echo $pecah['jenis_kelamin'] ?></td>
                        <td><?php echo $pecah['ttl'] ?></td>
                        <td><?php echo $pecah['notelp'] ?></td>
                        <td><?php echo $pecah['alamat'] ?></td>
                        <td><?php echo $pecah['golongan']; ?></td>
                        <td>Rp.<?php echo number_format($pecah['gaji_pokok']); ?></td>
                        <td>Rp.<?php echo number_format($pecah['potongan']); ?></td>
                        <td>
                            <a href="hapus_penggajian.php?id=<?php echo $pecah['id_penggajian'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_penggajian.php?id=<?php echo $pecah['id_penggajian']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>