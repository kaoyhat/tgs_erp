<?php include "header.php" ?>
<?php $cari = $_GET['cari'];
$semuadata = array();
$ambil = $koneksi->query("SELECT*FROM transaksi WHERE jenis_transaksi LIKE '%$cari%'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Pencarian : <?php echo $cari ?></h1>
        <?php if (empty($semuadata)) : ?>
            <script>
                alert('Data tidak ditemukan');
                window.location = 'data_transaksi.php'
            </script>
        <?php endif ?>
    </div>
    <?php foreach ($semuadata as $key => $value) : ?>
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
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $value['kode_transaksi'] ?></td>
                        <td><?php echo $value['jenis_transaksi'] ?></td>
                        <td>Rp.<?php echo number_format($value['biaya']) ?></td>
                        <td><?php echo $value['tanggal_transaksi'] ?></td>
                        <td><?php echo $value['keterangan'] ?></td>
                        <td>
                            <a href="hapus_transaksi.php?id=<?php echo $value['id_transaksi'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_transaksi.php?id=<?php echo $value['id_transaksi']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include "footer.php"; ?>