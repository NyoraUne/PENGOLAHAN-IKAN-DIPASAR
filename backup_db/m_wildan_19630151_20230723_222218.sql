-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: m_wildan_19630151
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.23.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detail_tangkap`
--

DROP TABLE IF EXISTS `detail_tangkap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_tangkap` (
  `id_detail_tangkap` int NOT NULL AUTO_INCREMENT,
  `id_perikanan_tangkap` int NOT NULL,
  `id_ikan` int NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_detail_tangkap`),
  KEY `id_ikan` (`id_ikan`),
  KEY `id_perikanan_tangkap` (`id_perikanan_tangkap`),
  CONSTRAINT `detail_tangkap_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_ikan` (`id_ikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_tangkap_ibfk_2` FOREIGN KEY (`id_perikanan_tangkap`) REFERENCES `tb_perikanan_tangkap` (`id_perikanan_tangkap`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_tangkap`
--

LOCK TABLES `detail_tangkap` WRITE;
/*!40000 ALTER TABLE `detail_tangkap` DISABLE KEYS */;
INSERT INTO `detail_tangkap` VALUES (6,1,2,'2023-07-23 13:51:01'),(7,1,3,'2023-07-23 13:51:04');
/*!40000 ALTER TABLE `detail_tangkap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_berita`
--

DROP TABLE IF EXISTS `tb_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_berita` (
  `id_berita` int NOT NULL AUTO_INCREMENT,
  `tgl_diterbitkan` datetime DEFAULT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `judul` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `isi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_berita`
--

LOCK TABLES `tb_berita` WRITE;
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_harga_ikan`
--

DROP TABLE IF EXISTS `tb_harga_ikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_harga_ikan` (
  `id_harga_ikan` int NOT NULL AUTO_INCREMENT,
  `id_pasar` int DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `volume` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_harga_ikan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_harga_ikan`
--

LOCK TABLES `tb_harga_ikan` WRITE;
/*!40000 ALTER TABLE `tb_harga_ikan` DISABLE KEYS */;
INSERT INTO `tb_harga_ikan` VALUES (4,3,2,15000,25,'2023-07-12 06:37:55','2023-07-12 06:38:03');
/*!40000 ALTER TABLE `tb_harga_ikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ikan`
--

DROP TABLE IF EXISTS `tb_ikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_ikan` (
  `id_ikan` int NOT NULL AUTO_INCREMENT,
  `nama_ikan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `habitat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_ikan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at_ikan` datetime NOT NULL,
  PRIMARY KEY (`id_ikan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ikan`
--

LOCK TABLES `tb_ikan` WRITE;
/*!40000 ALTER TABLE `tb_ikan` DISABLE KEYS */;
INSERT INTO `tb_ikan` VALUES (2,'Ikan lele','air tawar','Ikan ini sangat baik untuk di budidayakan oleh masyarakat','2023-07-10 08:07:58'),(3,'Ikan patin','air tawar','ikan ini sangat banyak di temukan di daerah yang berair','2023-07-10 08:11:11');
/*!40000 ALTER TABLE `tb_ikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_login` (
  `id_login` int NOT NULL AUTO_INCREMENT,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hak_akses` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` VALUES (3,'admin','0192023a7bbd73250516f069df18b500','1');
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pasar`
--

DROP TABLE IF EXISTS `tb_pasar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pasar` (
  `id_pasar` int NOT NULL AUTO_INCREMENT,
  `nama_pasar` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_pasar` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_pasar` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_pasar`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pasar`
--

LOCK TABLES `tb_pasar` WRITE;
/*!40000 ALTER TABLE `tb_pasar` DISABLE KEYS */;
INSERT INTO `tb_pasar` VALUES (6,'Pasar raya bogor','Jl banjarbaru','Pasar ikan Internasional di indonesia','2023-07-19 13:01:31');
/*!40000 ALTER TABLE `tb_pasar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pembenihan`
--

DROP TABLE IF EXISTS `tb_pembenihan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pembenihan` (
  `id_pembenihan` int NOT NULL AUTO_INCREMENT,
  `id_ikan` int NOT NULL,
  `tgl_benih` date NOT NULL,
  `lokasi_benih` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `metode` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_betina` int NOT NULL,
  `jumlah_jantan` int NOT NULL,
  `jumlah_telur` int NOT NULL,
  `status_benih` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_pembenihan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pembenihan`
--

LOCK TABLES `tb_pembenihan` WRITE;
/*!40000 ALTER TABLE `tb_pembenihan` DISABLE KEYS */;
INSERT INTO `tb_pembenihan` VALUES (3,2,'2023-07-20','Kolam Budidaya Pemerintahan Kota Banjarbaru','Pembenihan Buatan (Artificial Spawning)',21,22,90,'Sukses','-','2023-07-20 04:21:38');
/*!40000 ALTER TABLE `tb_pembenihan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pembesaran`
--

DROP TABLE IF EXISTS `tb_pembesaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pembesaran` (
  `id_pembesaran` int NOT NULL AUTO_INCREMENT,
  `id_ikan` int NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `lokasi` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `suhu_air` int NOT NULL,
  `jumlah_pakan` int NOT NULL,
  `kondisi_kesehatan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_pembesaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pembesaran`
--

LOCK TABLES `tb_pembesaran` WRITE;
/*!40000 ALTER TABLE `tb_pembesaran` DISABLE KEYS */;
INSERT INTO `tb_pembesaran` VALUES (1,2,'2023-07-21','2023-07-01','Banjarbaru',25,90,'Sehat','Tidak ada','2023-07-21 01:59:59');
/*!40000 ALTER TABLE `tb_pembesaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pengolahan_ikan`
--

DROP TABLE IF EXISTS `tb_pengolahan_ikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pengolahan_ikan` (
  `id_pengolahan_ikan` int NOT NULL AUTO_INCREMENT,
  `id_ikan` int NOT NULL,
  `tanggal_olah` date NOT NULL,
  `jenis_olah` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_olah` int NOT NULL,
  `durasi_olah` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `peralatan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pengolahan_ikan`),
  KEY `id_ikan` (`id_ikan`),
  CONSTRAINT `tb_pengolahan_ikan_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_ikan` (`id_ikan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengolahan_ikan`
--

LOCK TABLES `tb_pengolahan_ikan` WRITE;
/*!40000 ALTER TABLE `tb_pengolahan_ikan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengolahan_ikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penjual`
--

DROP TABLE IF EXISTS `tb_penjual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_penjual` (
  `id_penjual` int NOT NULL AUTO_INCREMENT,
  `id_pasar` int NOT NULL,
  `id_user` int NOT NULL,
  `nama_toko` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kontak_toko` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_penjual`),
  KEY `id_pasar` (`id_pasar`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tb_penjual_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `tb_pasar` (`id_pasar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_penjual_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penjual`
--

LOCK TABLES `tb_penjual` WRITE;
/*!40000 ALTER TABLE `tb_penjual` DISABLE KEYS */;
INSERT INTO `tb_penjual` VALUES (1,6,8,'Toko ikan puas','+6284534889422','2023-07-20 02:08:17');
/*!40000 ALTER TABLE `tb_penjual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_perikanan_tangkap`
--

DROP TABLE IF EXISTS `tb_perikanan_tangkap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_perikanan_tangkap` (
  `id_perikanan_tangkap` int NOT NULL AUTO_INCREMENT,
  `jenis_perairan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `lokasi` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_kapal` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `alat_tangkap` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `jumlah_tangkap` int DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_perikanan_tangkap`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perikanan_tangkap`
--

LOCK TABLES `tb_perikanan_tangkap` WRITE;
/*!40000 ALTER TABLE `tb_perikanan_tangkap` DISABLE KEYS */;
INSERT INTO `tb_perikanan_tangkap` VALUES (1,'Air Tawar','Danau Durian','2023-07-23','Perahu Mini','Jaring',9,193,'Molestiae maiores ex quae. ','2023-07-23 11:59:20'),(2,'Air Tawar','Danau Seran','2023-07-23','Kapal Medium','Pancingan',8,625,'Explicabo esse atque.','2023-07-23 14:03:18');
/*!40000 ALTER TABLE `tb_perikanan_tangkap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_transaksi_ikan`
--

DROP TABLE IF EXISTS `tb_transaksi_ikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_transaksi_ikan` (
  `id_transaksi_ikan` int NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `lokasi` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipe_transaksi` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_komunitas` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan_komunitas` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_ikan` int DEFAULT NULL,
  `jumlah_perkg` int DEFAULT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_transaksi_ikan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_transaksi_ikan`
--

LOCK TABLES `tb_transaksi_ikan` WRITE;
/*!40000 ALTER TABLE `tb_transaksi_ikan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_transaksi_ikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
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
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `nik_user` (`nik_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (8,'3525011711086058','Widya Ilham Sikyt','banjarbaru','1992-12-12','Laki-laki','Jl Batu Malang','Batu','Malang','Malang','3','2','Kristen','belum_menikah','Programer','3525011711086058_widya-ilham-sikyt.pdf','3525011711086058_widya-ilham-sikyt','2023-07-17 12:37:33'),(9,'3326160902090003','Ratna Alki','banjarbaru','1992-02-11','Perempuan','Jl Batu Malang','Batu','landasan ulin','Malang','3','2','Islam','belum_menikah','Programer','3326160902090003_ratna-alki.pdf','3326160902090003_ratna-alki','2023-07-18 04:08:27');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-23 22:22:18
