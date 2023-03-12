<?php include "header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Perusahaan</h1>
        <form action="cari_perusahaan.php" method="GET" class="navbar-form navbar-right">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="* Isi nama perusahaan " aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


    </div>
    <!-- /.container-fluid -->
    <a href="tambah_perusahaan.php" class="btn btn-primary">Tambah Data</a>
    <a href="cetak_perusahaan.php" class="btn btn-info">Cetak Data </a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Alamat Perusahaan</th>
                    <th scope="col">No telp</th>
                    <th scope="col">Jumlah Karyawan</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT*FROM penempatan_kerja"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $pecah['nama_perusahaan']; ?></td>
                        <td><?php echo $pecah['alamat_perusahaan'] ?></td>
                        <td><?php echo $pecah['no_telp'] ?></td>
                        <td><?php echo $pecah['jumlah_karyawan'] ?></td>
                        <td>
                            <a href="hapus_perusahaan.php?id=<?php echo $pecah['id_penempatan'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_perusahaan.php?id=<?php echo $pecah['id_penempatan']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>