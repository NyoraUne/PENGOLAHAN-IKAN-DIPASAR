-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2023 at 05:27 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_wildan_19630151`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_Berita`
--

CREATE TABLE `tb_Berita` (
  `id_berita` int NOT NULL,
  `tgl_diterbitkan` datetime DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_general_ci,
  `judul` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `isi_berita` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga_ikan`
--

CREATE TABLE `tb_harga_ikan` (
  `id_harga_ikan` int NOT NULL,
  `id_pasar` int DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `volume` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `id_ikan` int NOT NULL,
  `nama_ikan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `habitat` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_ikan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at_ikan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ikan`
--

INSERT INTO `tb_ikan` (`id_ikan`, `nama_ikan`, `habitat`, `deskripsi_ikan`, `created_at_ikan`) VALUES
(2, 'Ikan lele', 'air tawar', 'Ikan ini sangat baik untuk di budidayakan oleh masyarakat', '2023-07-10 08:07:58'),
(3, 'Ikan patin', 'air tawar', 'ikan ini sangat banyak di temukan di daerah yang berair', '2023-07-10 08:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int NOT NULL,
  `username` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hak_akses` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `hak_akses`) VALUES
(3, 'admin', '0192023a7bbd73250516f069df18b500', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasar`
--

CREATE TABLE `tb_pasar` (
  `id_pasar` int NOT NULL,
  `nama_pasar` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penjual` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at_pasar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasar`
--

INSERT INTO `tb_pasar` (`id_pasar`, `nama_pasar`, `tanggal`, `nama_penjual`, `created_at_pasar`) VALUES
(1, 'Pasar raya bogor', '0000-00-00', 'Pak yasin', '2023-07-10 09:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembenihan`
--

CREATE TABLE `tb_pembenihan` (
  `id_pembenihan` int NOT NULL,
  `jenis_pembenihan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `jumlah_kg` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembesaran`
--

CREATE TABLE `tb_pembesaran` (
  `id_pembesaran` int NOT NULL,
  `jenis_pembesaran` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `jumlah_kg` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengolahan_ikan`
--

CREATE TABLE `tb_pengolahan_ikan` (
  `id_pengolahan_ikan` int NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `produk_yg_dihasilkan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proses` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perikanan_tangkap`
--

CREATE TABLE `tb_perikanan_tangkap` (
  `id_perikanan_tangkap` int NOT NULL,
  `jenis_perairan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `jenis_kapal` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `alat_penangkap_ikan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT '',
  `id_ikan` int DEFAULT NULL,
  `jumlah_kg` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_Transaksi_ikan`
--

CREATE TABLE `tb_Transaksi_ikan` (
  `id_Transaksi_ikan` int NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `lokasi` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipe_transaksi` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_komunitas` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan_komunitas` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `jumlah_perkg` int DEFAULT NULL,
  `keterangan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_Berita`
--
ALTER TABLE `tb_Berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_harga_ikan`
--
ALTER TABLE `tb_harga_ikan`
  ADD PRIMARY KEY (`id_harga_ikan`);

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `tb_pembenihan`
--
ALTER TABLE `tb_pembenihan`
  ADD PRIMARY KEY (`id_pembenihan`);

--
-- Indexes for table `tb_pembesaran`
--
ALTER TABLE `tb_pembesaran`
  ADD PRIMARY KEY (`id_pembesaran`);

--
-- Indexes for table `tb_pengolahan_ikan`
--
ALTER TABLE `tb_pengolahan_ikan`
  ADD PRIMARY KEY (`id_pengolahan_ikan`);

--
-- Indexes for table `tb_perikanan_tangkap`
--
ALTER TABLE `tb_perikanan_tangkap`
  ADD PRIMARY KEY (`id_perikanan_tangkap`);

--
-- Indexes for table `tb_Transaksi_ikan`
--
ALTER TABLE `tb_Transaksi_ikan`
  ADD PRIMARY KEY (`id_Transaksi_ikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_Berita`
--
ALTER TABLE `tb_Berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_harga_ikan`
--
ALTER TABLE `tb_harga_ikan`
  MODIFY `id_harga_ikan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  MODIFY `id_ikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  MODIFY `id_pasar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembenihan`
--
ALTER TABLE `tb_pembenihan`
  MODIFY `id_pembenihan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembesaran`
--
ALTER TABLE `tb_pembesaran`
  MODIFY `id_pembesaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengolahan_ikan`
--
ALTER TABLE `tb_pengolahan_ikan`
  MODIFY `id_pengolahan_ikan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perikanan_tangkap`
--
ALTER TABLE `tb_perikanan_tangkap`
  MODIFY `id_perikanan_tangkap` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_Transaksi_ikan`
--
ALTER TABLE `tb_Transaksi_ikan`
  MODIFY `id_Transaksi_ikan` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
