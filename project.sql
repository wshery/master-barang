-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 04:21 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(9, 'ELEKTRONIK'),
(10, 'ALAT BERAT');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`) VALUES
(5, 'SDFDFG'),
(6, 'WER'),
(7, 'RTE');

-- --------------------------------------------------------

--
-- Table structure for table `mbarang`
--

CREATE TABLE `mbarang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `kondisi_barang` varchar(128) NOT NULL,
  `nomor_serial` varchar(128) NOT NULL,
  `nomor_produk` varchar(128) NOT NULL,
  `harga` int(25) NOT NULL,
  `keterangan_barang` varchar(128) NOT NULL,
  `batas` int(15) NOT NULL,
  `nama_satuan` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbarang`
--

INSERT INTO `mbarang` (`id`, `kode_barang`, `nama_barang`, `nama_kategori`, `kondisi_barang`, `nomor_serial`, `nomor_produk`, `harga`, `keterangan_barang`, `batas`, `nama_satuan`, `photo`) VALUES
(144, 'ASDE', 'sdf', 'ELEKTRONIK', 'Rusak', '222333', '222EE3', 12000, 'ASD', 12, 'PCS', ''),
(145, 'QWEAS', 'sdf', 'ALAT BERAT', 'Rusak', 'WER123', '123QWE', 15000, 'DSF', 12, 'ROLL', 'Capture213.PNG'),
(146, 'SDF', 'SDF', 'ALAT BERAT', 'Bekas', '123WDSF', '123ASD', 50000, 'DSF', 32, 'PCS', 'Penguins12.jpg'),
(147, 'QWE', 'qwe', 'ALAT BERAT', 'Rusak', 'QWE123', 'QWE123', 100000, 'asd', 21, 'ROLL', 'Koala25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `nama_satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `nama_satuan`) VALUES
(111, 'BUTIR'),
(112, 'PCS'),
(113, 'ROLL'),
(114, 'ASD');

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`id`, `nama_barang`, `jumlah_masuk`, `lokasi`, `keterangan`, `user_session`, `tanggal_masuk`, `lampiran`) VALUES
(22, 'sdf', 12, 'RTE', '					SDF					', 'superadmin', '05/08/2019', 'Tulips.jpg'),
(23, 'sdf', 213, 'RTE', '					SDF					', 'superadmin', '05/08/2019', 'Tulips.jpg'),
(24, 'SDF', 42, 'RTE', '					SDF					', 'superadmin', '05/08/2019', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id_out` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `dateout` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `no_suratjalan` varchar(255) NOT NULL,
  `nolast_suratjalan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`id_out`, `id`, `nama_barang`, `jumlah`, `lokasi`, `keterangan`, `user_session`, `dateout`, `divisi`, `no_suratjalan`, `nolast_suratjalan`) VALUES
(15, 0, 'sdf', 12, 'WER', 'sdf', 'superadmin@gmail.com', '05/08/2019', 'IT', 'IT/IJSM/VIII/2019/01', '01'),
(16, 0, 'SDF', 32, 'WER', 'sdf', 'superadmin@gmail.com', '05/08/2019', 'IT', 'IT/IJSM/VIII/2019/01', '01'),
(17, 0, 'qwe', 21, 'RTE', 'retg', 'superadmin@gmail.com', '05/08/2019', 'IT', 'IT/IJSM/VIII/2019/02', '02'),
(18, 0, 'SDF', 22, 'RTE', 'retg', 'superadmin@gmail.com', '05/08/2019', 'IT', 'IT/IJSM/VIII/2019/02', '02'),
(19, 0, 'SDF', 12, 'SDFDFG', 'asd', 'superadmin@gmail.com', '05/08/2019', 'IT', 'IT/IJSM/VIII/2019/03', '03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  `about` varchar(255) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `image`, `password`, `role`, `about`, `divisi`, `is_active`, `date_created`) VALUES
(26, 'superadmin', '', 'superadmin@gmail.com', 'default.jpg', '$2y$10$V4Zkw1Jlnghe3STiZHDmCOrXfkgKMJ/WlYa1Ybc181yO1uL7eHYZa', 'superadmin', 'Hi Aku baru', 'IT', 1, 1564968983);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbarang`
--
ALTER TABLE `mbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`id_out`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mbarang`
--
ALTER TABLE `mbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
