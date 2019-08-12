-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2019 pada 13.44
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(9, 'ELEKTRONIK'),
(10, 'ALAT BERAT'),
(25, 'ASDASD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`) VALUES
(5, 'SDFDFG'),
(6, 'WER'),
(7, 'RTE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbarang`
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
-- Dumping data untuk tabel `mbarang`
--

INSERT INTO `mbarang` (`id`, `kode_barang`, `kode_akurat`, `nama_barang`, `nama_kategori`, `kondisi_barang`, `nomor_serial`, `nomor_produk`, `harga`, `keterangan_barang`, `batas`, `nama_satuan`, `photo`) VALUES
(82, 'QQQ001', '', 'PS3', 'ELEKTRONIK', 'Baru', '', '', 3000000, 'd', 12, 'BUTIR', ''),
(83, 'QQQ002', '', 'PS4', 'ELEKTRONIK', 'Baru', 'WE', '', 4500000, 'asd', 55, 'BUTIR', ''),
(84, 'BBT001', '', 'Batu Bata', 'ELEKTRONIK', 'Baru', 'ASD213', 'ASD23', 1000000, 'asd', 51, 'BUTIR', ''),
(85, 'BTT001', '', 'Batu Beton', 'ELEKTRONIK', 'Baru', '', '', 1499999, 'asd', 45, 'BUTIR', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluar`
--

CREATE TABLE `pengeluar` (
  `id` int(11) NOT NULL,
  `nama_pengeluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluar`
--

INSERT INTO `pengeluar` (`id`, `nama_pengeluar`) VALUES
(1, 'ASD'),
(2, 'DSS'),
(3, 'DSSDS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `nama_satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan`
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
-- Struktur dari tabel `stockin`
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
-- Dumping data untuk tabel `stockin`
--

INSERT INTO `stockin` (`id`, `nama_barang`, `kode_barang`, `jumlah_masuk`, `harga`, `unit`, `lokasi`, `keterangan`, `user_session`, `tanggal_masuk`, `lampiran`) VALUES
(64, 'PS3', 'QQQ001', '50', '3000000', 'BUTIR', 'SDFDFG', '				wqe						', 'superadmin', '09/08/2019', ''),
(65, 'PS4', 'QQQ002', '50', '4500000', 'BUTIR', 'SDFDFG', '				wqe						', 'superadmin', '09/08/2019', ''),
(66, 'Batu Bata', 'BBT001', '76', '1000000', 'BUTIR', 'SDFDFG', '				asd						', 'superadmin', '09/08/2019', ''),
(67, 'PS4', 'QQQ002', '2', '4500000', 'BUTIR', 'SDFDFG', '				as						', 'superadmin', '09/08/2019', ''),
(68, 'PS4', 'QQQ002', '8', '4500000', 'BUTIR', 'SDFDFG', '										', 'superadmin', '09/08/2019', ''),
(69, 'PS4', 'QQQ002', '20', '4500000', 'BUTIR', 'SDFDFG', '							ds			', 'superadmin', '09/08/2019', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stockout`
--

CREATE TABLE `stockout` (
  `id_out` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
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
-- Dumping data untuk tabel `stockout`
--

INSERT INTO `stockout` (`id_out`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`, `lokasi`, `keterangan`, `pengeluar`, `user_session`, `dateout`, `supir`, `divisi`, `no_suratjalan`, `nolast_suratjalan`) VALUES
(86, 'QQQ001', 'PS3', 'BUTIR', 12, 'SDFDFG', 'ed', 'ASD', 'superadmin@gmail.com', '09/08/2019', 'DASD', 'IT', 'IT/IJSM/VIII/2019/01', '01'),
(87, 'QQQ002', 'PS4', 'BUTIR', 12, 'SDFDFG', 'ed', 'ASD', 'superadmin@gmail.com', '09/08/2019', 'DASD', 'IT', 'IT/IJSM/VIII/2019/01', '01'),
(88, 'QQQ002', 'PS4', 'BUTIR', 12, 'SDFDFG', 'fg', 'ASD', 'superadmin@gmail.com', '09/08/2019', 'DASD', 'IT', 'IT/IJSM/VIII/2019/02', '02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id` int(11) NOT NULL,
  `nama_supir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id`, `nama_supir`) VALUES
(1, 'DASD'),
(2, 'DASDDFG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `image`, `password`, `role`, `about`, `divisi`, `is_active`, `date_created`) VALUES
(26, 'superadmin', '', 'superadmin@gmail.com', 'default.jpg', '$2y$10$V4Zkw1Jlnghe3STiZHDmCOrXfkgKMJ/WlYa1Ybc181yO1uL7eHYZa', 'superadmin', 'Hi Aku baru', 'IT', 1, 1564968983);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mbarang`
--
ALTER TABLE `mbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluar`
--
ALTER TABLE `pengeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`id_out`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mbarang`
--
ALTER TABLE `mbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `pengeluar`
--
ALTER TABLE `pengeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
