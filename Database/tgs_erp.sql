-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 09:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgs_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga`, `stok`) VALUES
(1, 'B01', 'Kusen', '300000', '20'),
(5, 'B04', 'Baja beton', '2000000', '43');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `jenis_kelamin`, `ttl`, `no_telp`, `alamat`) VALUES
(1, 'Baety', 'Perempuan', 'Kuningan, 17 Juli 2000', '08575467880', 'Kuningan'),
(3, 'Ilyas Ramadani Sidiq', 'Laki-laki', 'Kuningan, 03 november 2001', '08765766772', '  Bungurberes            ');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tipe_cuti` varchar(255) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `tglselesai_cuti` date NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `nama`, `jenis_kelamin`, `ttl`, `no_telp`, `alamat`, `tipe_cuti`, `tanggal_cuti`, `tglselesai_cuti`, `alasan`) VALUES
(1, 'Yayat Taufik ', 'Laki - laki', 'Kuningan, 03 november 1999', '08575467485', '                                                            Kuningan                                           ', 'Cuti Tahunan', '2021-08-14', '2021-10-02', ' Liburan                                         '),
(3, 'Farhan Nurohman', 'Laki-laki', '02, Mei 2002', '085724113488', 'Kuningan', 'Cuti Besar', '2021-08-26', '2021-08-28', 'yaa gtu lah');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_penggajian` int(11) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `gaji_pokok` varchar(255) NOT NULL,
  `potongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_penggajian`, `nip`, `nama`, `jenis_kelamin`, `ttl`, `notelp`, `alamat`, `golongan`, `gaji_pokok`, `potongan`) VALUES
(1, 'P02', 'Yayat Taufik Hidayat', 'Laki-laki', 'Kuningan 03 november 1999', '085724113485', '                                        Kuningan             ', 'Staff', '8000000', '5000'),
(4, 'P03', 'Farhan ', 'Laki-laki', 'Kuningan, 03 november 1990', '085724113485', '                    Kuningan       barat         ', 'Director', '10000000', '6000000');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kerja`
--

CREATE TABLE `jadwal_kerja` (
  `id_jadwal` int(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kerja`
--

INSERT INTO `jadwal_kerja` (`id_jadwal`, `tanggal`) VALUES
(1, '2021-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tempat_tgllahir` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `jenis_kelamin`, `tempat_tgllahir`, `status`, `jabatan`, `no_telp`, `alamat`) VALUES
(1, 'Yayat Taufik hidayat', 'Laki-laki', 'Kuningan, 03 november 1999', 'Menikah', 'Programer', '085724113485', '    Jakarta Selatan          '),
(6, 'Farhan Nurohman', 'Laki-laki', 'Kuningan, 03 Maret 2002', 'Lajang', 'karyawan', '085724113481', 'Tebet, Jakarta Selatan     '),
(8, 'Ilyas Ramadani Sidiq', 'Laki-laki', 'Kuningan, 03 november 1999', 'Lajang', 'BOS', '08575467888', 'Kuningan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(30) NOT NULL,
  `id_karyawan` int(30) NOT NULL,
  `id_jadwal` int(30) NOT NULL,
  `id_penempatan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_karyawan`, `id_jadwal`, `id_penempatan`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `username`, `password`) VALUES
(1, 'yayat', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan_kerja`
--

CREATE TABLE `penempatan_kerja` (
  `id_penempatan` int(30) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `jumlah_karyawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penempatan_kerja`
--

INSERT INTO `penempatan_kerja` (`id_penempatan`, `nama_perusahaan`, `alamat_perusahaan`, `no_telp`, `jumlah_karyawan`) VALUES
(1, 'Astra bandung', '                     Jawa Barat                                ', '08575467888', '14'),
(3, 'PT. Garut Indah', 'Garut', '08765766779', '122');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(3, 'farhan', '$2y$10$A/f/R3J8Pwi2tgceTE2SkOA3qft1v8COPq9AvFUTM0D3vaOyWug4m', 'Farhan Nurohman'),
(4, 'Yayat', '$2y$10$7Qv3A7ncGhYOEJ5NwzpDHuM8aMyGAW4y0bgz1RwAgQQPF7uOOgdyW', 'Yayat Taufik Hidayat');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_transaksi`, `jenis_transaksi`, `biaya`, `tanggal_transaksi`, `keterangan`) VALUES
(3, 'T05', 'Tunai/Langsung', '100000', '2021-08-28', 'Selesai            '),
(4, 'T06', 'Tunai/Langsung', '200000', '2021-09-09', 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_penggajian`);

--
-- Indexes for table `jadwal_kerja`
--
ALTER TABLE `jadwal_kerja`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `penempatan_kerja`
--
ALTER TABLE `penempatan_kerja`
  ADD PRIMARY KEY (`id_penempatan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_kerja`
--
ALTER TABLE `jadwal_kerja`
  MODIFY `id_jadwal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penempatan_kerja`
--
ALTER TABLE `penempatan_kerja`
  MODIFY `id_penempatan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
