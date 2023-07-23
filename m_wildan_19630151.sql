-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2023 at 11:06 AM
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
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
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
  `volume` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_harga_ikan`
--

INSERT INTO `tb_harga_ikan` (`id_harga_ikan`, `id_pasar`, `id_ikan`, `harga`, `volume`, `created_at`, `update_at`) VALUES
(4, 3, 2, 15000, 25, '2023-07-12 06:37:55', '2023-07-12 06:38:03');

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
  `alamat_pasar` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_pasar` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasar`
--

INSERT INTO `tb_pasar` (`id_pasar`, `nama_pasar`, `alamat_pasar`, `deskripsi_pasar`, `created_at`) VALUES
(6, 'Pasar raya bogor', 'Jl banjarbaru', 'Pasar ikan Internasional di indonesia', '2023-07-19 13:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembenihan`
--

CREATE TABLE `tb_pembenihan` (
  `id_pembenihan` int NOT NULL,
  `id_ikan` int NOT NULL,
  `tgl_benih` date NOT NULL,
  `lokasi_benih` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `metode` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_betina` int NOT NULL,
  `jumlah_jantan` int NOT NULL,
  `jumlah_telur` int NOT NULL,
  `status_benih` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembenihan`
--

INSERT INTO `tb_pembenihan` (`id_pembenihan`, `id_ikan`, `tgl_benih`, `lokasi_benih`, `metode`, `jumlah_betina`, `jumlah_jantan`, `jumlah_telur`, `status_benih`, `keterangan`, `created_at`) VALUES
(3, 2, '2023-07-20', 'Kolam Budidaya Pemerintahan Kota Banjarbaru', 'Pembenihan Buatan (Artificial Spawning)', 21, 22, 90, 'Sukses', '-', '2023-07-20 04:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembesaran`
--

CREATE TABLE `tb_pembesaran` (
  `id_pembesaran` int NOT NULL,
  `id_ikan` int NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `lokasi` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `suhu_air` int NOT NULL,
  `jumlah_pakan` int NOT NULL,
  `kondisi_kesehatan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembesaran`
--

INSERT INTO `tb_pembesaran` (`id_pembesaran`, `id_ikan`, `tgl_mulai`, `tgl_selesai`, `lokasi`, `suhu_air`, `jumlah_pakan`, `kondisi_kesehatan`, `keterangan`, `created_at`) VALUES
(1, 2, '2023-07-21', '2023-07-01', 'Banjarbaru', 25, 90, 'Sehat', 'Tidak ada', '2023-07-21 01:59:59');

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
-- Table structure for table `tb_penjual`
--

CREATE TABLE `tb_penjual` (
  `id_penjual` int NOT NULL,
  `id_pasar` int NOT NULL,
  `id_user` int NOT NULL,
  `nama_toko` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `kontak_toko` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penjual`
--

INSERT INTO `tb_penjual` (`id_penjual`, `id_pasar`, `id_user`, `nama_toko`, `kontak_toko`, `created_at`) VALUES
(1, 6, 8, 'Toko ikan puas', '+6284534889422', '2023-07-20 02:08:17');

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
-- Table structure for table `tb_transaksi_ikan`
--

CREATE TABLE `tb_transaksi_ikan` (
  `id_transaksi_ikan` int NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `lokasi` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipe_transaksi` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_komunitas` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan_komunitas` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `jumlah_perkg` int DEFAULT NULL,
  `keterangan` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL,
  `nik_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `nama_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `lahir_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `tgllahir_user` date DEFAULT NULL,
  `jekel_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `alamat_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `desa_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `kecamatan_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `kabupaten_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `rt_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `rw_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `agama_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `kawin_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `pekerjaan_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `ktp_user` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik_user`, `nama_user`, `lahir_user`, `tgllahir_user`, `jekel_user`, `alamat_user`, `desa_user`, `kecamatan_user`, `kabupaten_user`, `rt_user`, `rw_user`, `agama_user`, `kawin_user`, `pekerjaan_user`, `ktp_user`, `slug`, `created_at`) VALUES
(8, '3525011711086058', 'Widya Ilham Sikyt', 'banjarbaru', '1992-12-12', 'Laki-laki', 'Jl Batu Malang', 'Batu', 'Malang', 'Malang', '3', '2', 'Kristen', 'belum_menikah', 'Programer', '3525011711086058_widya-ilham-sikyt.pdf', '3525011711086058_widya-ilham-sikyt', '2023-07-17 12:37:33'),
(9, '3326160902090003', 'Ratna Alki', 'banjarbaru', '1992-02-11', 'Perempuan', 'Jl Batu Malang', 'Batu', 'landasan ulin', 'Malang', '3', '2', 'Islam', 'belum_menikah', 'Programer', '3326160902090003_ratna-alki.pdf', '3326160902090003_ratna-alki', '2023-07-18 04:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
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
-- Indexes for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `id_pasar` (`id_pasar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_perikanan_tangkap`
--
ALTER TABLE `tb_perikanan_tangkap`
  ADD PRIMARY KEY (`id_perikanan_tangkap`);

--
-- Indexes for table `tb_transaksi_ikan`
--
ALTER TABLE `tb_transaksi_ikan`
  ADD PRIMARY KEY (`id_transaksi_ikan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik_user` (`nik_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_harga_ikan`
--
ALTER TABLE `tb_harga_ikan`
  MODIFY `id_harga_ikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  MODIFY `id_ikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  MODIFY `id_pasar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pembenihan`
--
ALTER TABLE `tb_pembenihan`
  MODIFY `id_pembenihan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembesaran`
--
ALTER TABLE `tb_pembesaran`
  MODIFY `id_pembesaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengolahan_ikan`
--
ALTER TABLE `tb_pengolahan_ikan`
  MODIFY `id_pengolahan_ikan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  MODIFY `id_penjual` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_perikanan_tangkap`
--
ALTER TABLE `tb_perikanan_tangkap`
  MODIFY `id_perikanan_tangkap` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaksi_ikan`
--
ALTER TABLE `tb_transaksi_ikan`
  MODIFY `id_transaksi_ikan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD CONSTRAINT `tb_penjual_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `tb_pasar` (`id_pasar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjual_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
