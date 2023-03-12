<?php include "header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
        <form action="cari_barang.php" method="GET" class="navbar-form navbar-right">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="* Isi nama barang " aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


    </div>
    <!-- /.container-fluid -->
    <a href="tambah_barang.php" class="btn btn-primary">Tambah Data</a>
    <a href="cetak_barang.php" class="btn btn-info">Cetak Data </a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT*FROM barang"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $pecah['kode_barang'] ?></td>
                        <td><?php echo $pecah['nama_barang'] ?></td>
                        <td>Rp.<?php echo number_format($pecah['harga']) ?></td>
                        <td><?php echo $pecah['stok'] ?></td>
                        <td>
                            <a href="hapus_barang.php?id=<?php echo $pecah['id_barang'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_barang.php?id=<?php echo $pecah['id_barang']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>