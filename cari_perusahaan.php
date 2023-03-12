<?php include "header.php" ?>
<?php $cari = $_GET['cari'];
$semuadata = array();
$ambil = $koneksi->query("SELECT*FROM penempatan_kerja WHERE nama_perusahaan LIKE '%$cari%'");
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
                window.location = 'data_perusahaan.php'
            </script>
        <?php endif ?>


    </div>
    <?php foreach ($semuadata as $key => $value) : ?>
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
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $value['nama_perusahaan']; ?></td>
                        <td><?php echo $value['alamat_perusahaan'] ?></td>
                        <td><?php echo $value['no_telp'] ?></td>
                        <td><?php echo $value['jumlah_karyawan'] ?></td>
                        <td>
                            <a href="hapus_perusahaan.php?id=<?php echo $value['id_penempatan'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_perusahaan.php?id=<?php echo $value['id_penempatan']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include "footer.php"; ?>