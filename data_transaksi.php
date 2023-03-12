<?php include "header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>

        <form action="cari_transaksi.php" method="GET" class="navbar-form navbar-center">
            <div class="input-group">
                <select class="form-control" name="cari">
                    <option value="--Pilih Transaksi--">--Pilih Transaksi--</option>
                    <option value="Tunai/Langsung">Tunai/Langsung</option>
                    <option value="Pengiriman/Transfer">Pengiriman/Transfer</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>


        </form>


    </div>
    <!-- /.container-fluid -->
    <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Data</a>
    <a href="cetak_transaksi.php" class="btn btn-info">Cetak Data </a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">jenis Transaksi</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT*FROM transaksi"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $pecah['kode_transaksi'] ?></td>
                        <td><?php echo $pecah['jenis_transaksi'] ?></td>
                        <td>Rp.<?php echo number_format($pecah['biaya']) ?></td>
                        <td><?php echo $pecah['tanggal_transaksi'] ?></td>
                        <td><?php echo $pecah['keterangan'] ?></td>
                        <td>
                            <a href="hapus_transaksi.php?id=<?php echo $pecah['id_transaksi'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_transaksi.php?id=<?php echo $pecah['id_transaksi']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>