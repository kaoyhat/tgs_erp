<?php include "header.php" ?>
<?php $cari = $_GET['cari'];
$semuadata = array();
$ambil = $koneksi->query("SELECT*FROM karyawan WHERE nama LIKE '%$cari%'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Pencarian : <?php echo $cari ?> </h1>
        <?php if (empty($semuadata)) : ?>
            <script>
                alert('Data tidak ditemukan');
                window.location = 'data_karyawan.php'
            </script>
        <?php endif ?>



    </div>
    <?php foreach ($semuadata as $key => $value) : ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat, tanggal lahir</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">no_telp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1; ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $value['nama']; ?></td>
                        <td><?php echo $value['jenis_kelamin'] ?></td>
                        <td><?php echo $value['tempat_tgllahir'] ?></td>
                        <td><?php echo $value['status'] ?></td>
                        <td><?php echo $value['jabatan'] ?></td>
                        <td><?php echo $value['no_telp'] ?></td>
                        <td><?php echo $value['alamat'] ?></td>
                        <td>
                            <a href="hapus_karyawan.php?id=<?php echo $value['id_karyawan'] ?>" class="btn-danger btn"><img src="img/delete.png" width="32px"></a>
                            <a href="ubah_karyawan.php?id=<?php echo $value['id_karyawan']  ?>" class="btn btn-warning"><img src="img/edit.png" width="32px"></a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
</div>