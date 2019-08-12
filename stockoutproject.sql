-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 12:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(10, 'ALAT BERAT'),
(25, 'ASDASD');

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
  `kode_akurat` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `kondisi_barang` varchar(128) NOT NULL,
  `nomor_serial` varchar(128) NOT NULL,
  `nomor_produk` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan_barang` varchar(128) NOT NULL,
  `batas` int(15) NOT NULL,
  `nama_satuan` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbarang`
--

INSERT INTO `mbarang` (`id`, `kode_barang`, `kode_akurat`, `nama_barang`, `nama_kategori`, `kondisi_barang`, `nomor_serial`, `nomor_produk`, `harga`, `keterangan_barang`, `batas`, `nama_satuan`, `photo`) VALUES
(82, 'QQQ001', '', 'PS3', 'ELEKTRONIK', 'Baru', '', '', 3000000, 'd', 12, 'BUTIR', ''),
(83, 'QQQ002', '', 'PS4', 'ELEKTRONIK', 'Baru', 'WE', '', 4500000, 'asd', 55, 'BUTIR', ''),
(84, 'BBT001', '', 'Batu Bata', 'ELEKTRONIK', 'Baru', 'ASD213', 'ASD23', 1000000, 'asd', 51, 'BUTIR', ''),
(85, 'BTT001', '', 'Batu Beton', 'ELEKTRONIK', 'Baru', '', '', 1499999, 'asd', 45, 'BUTIR', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluar`
--

CREATE TABLE `pengeluar` (
  `id` int(11) NOT NULL,
  `nama_pengeluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluar`
--

INSERT INTO `pengeluar` (`id`, `nama_pengeluar`) VALUES
(1, 'ASD'),
(2, 'DSS'),
(3, 'DSSDS');

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
(114, 'ASDF'),
(115, 'FGDFG'),
(116, 'QWE'),
(117, 'ASDFG');

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_barang` varchar(225) NOT NULL,
  `jumlah_masuk` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `unit` varchar(225) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`id`, `nama_barang`, `kode_barang`, `jumlah_masuk`, `harga`, `unit`, `lokasi`, `keterangan`, `user_session`, `tanggal_masuk`, `lampiran`) VALUES
(64, 'PS3', 'QQQ001', '50', '3000000', 'BUTIR', 'SDFDFG', '				wqe						', 'superadmin', '09/08/2019', ''),
(65, 'PS4', 'QQQ002', '50', '4500000', 'BUTIR', 'SDFDFG', '				wqe						', 'superadmin', '09/08/2019', ''),
(66, 'Batu Bata', 'BBT001', '76', '1000000', 'BUTIR', 'SDFDFG', '				asd						', 'superadmin', '09/08/2019', ''),
(71, 'PS4', 'QQQ002', '10', '4500000', 'BUTIR', 'SDFDFG', '										', 'superadmin', '12/08/2019', ''),
(72, 'PS3', 'QQQ001', '5', '3000000', 'BUTIR', 'SDFDFG', '										', 'superadmin', '12/08/2019', ''),
(73, 'PS3', 'QQQ001', '10', '3000000', 'BUTIR', 'SDFDFG', '										', 'superadmin', '12/08/2019', ''),
(74, 'PS4', 'QQQ002', '10', '4500000', 'BUTIR', 'SDFDFG', '										', 'superadmin', '12/08/2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id_out` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `current_stock` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `pengeluar` varchar(255) NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `dateout` varchar(255) NOT NULL,
  `supir` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `no_suratjalan` varchar(255) NOT NULL,
  `nolast_suratjalan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`id_out`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`, `current_stock`, `lokasi`, `keterangan`, `pengeluar`, `user_session`, `dateout`, `supir`, `divisi`, `no_suratjalan`, `nolast_suratjalan`) VALUES
(95, 'QQQ002', 'PS4', 'BUTIR', 20, '', 'SDFDFG', '', 'ASD', 'superadmin@gmail.com', '12/08/2019', 'DASD', 'IT', 'IT/IJSM/VIII/2019/01', '01'),
(96, 'QQQ002', 'PS4', 'BUTIR', 5, '', 'SDFDFG', '', 'ASD', 'superadmin@gmail.com', '12/08/2019', 'DASD', 'IT', 'IT/IJSM/VIII/2019/02', '02');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id` int(11) NOT NULL,
  `nama_supir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`id`, `nama_supir`) VALUES
(1, 'DASD'),
(2, 'DASDDFG');

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
-- Indexes for table `pengeluar`
--
ALTER TABLE `pengeluar`
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
  ADD PRIMARY KEY (`id_out`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mbarang`
--
ALTER TABLE `mbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `pengeluar`
--
ALTER TABLE `pengeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
