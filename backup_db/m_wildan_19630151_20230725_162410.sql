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
-- Table structure for table `detail_harga`
--

DROP TABLE IF EXISTS `detail_harga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_harga` (
  `id_detail_harga` int NOT NULL AUTO_INCREMENT,
  `id_ikan` int NOT NULL,
  `id_harga_ikan` int NOT NULL,
  `harga` int NOT NULL,
  `banyak` int NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id_detail_harga`),
  KEY `id_ikan` (`id_ikan`),
  KEY `id_harga_ikan` (`id_harga_ikan`),
  CONSTRAINT `detail_harga_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_ikan` (`id_ikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_harga_ibfk_2` FOREIGN KEY (`id_harga_ikan`) REFERENCES `tb_harga_ikan` (`id_harga_ikan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_harga`
--

LOCK TABLES `detail_harga` WRITE;
/*!40000 ALTER TABLE `detail_harga` DISABLE KEYS */;
INSERT INTO `detail_harga` VALUES (6,2,6,20000,90,'2023-07-25'),(7,3,6,25000,129,'2023-07-25');
/*!40000 ALTER TABLE `detail_harga` ENABLE KEYS */;
UNLOCK TABLES;

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
  `judul` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `isi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_berita`
--

LOCK TABLES `tb_berita` WRITE;
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
INSERT INTO `tb_berita` VALUES (1,'Dampak Ikan terhadap kemajuan Masyarakat','<p style=\"text-align: justify;\">Kecerdasan dapat disiapkan semanjak dini yaitu salah satunya dengan cara mengkonsumsi makanan yang memiliki kandungan gizi yang baik. Ikan sebagai salah pilihan makanan yang memiliki kandungan gizi beragam, antara lain: omega 3, protein, vitamin, mineral, bio-Active, dan asam lemak tak jenuh. Masa tumbuh kembang anak berlangsung sangat cepat, khususnya pada seribu hari pertama kehidupan (HPK) atau yang biasa disebut dengan periode emas anak. Anak pada periode emas membutuhkan makanan dengan kualitas dan kuantitas yang tepat serta seimbang. Ikan memiliki potensi sebagai sumber pangan kaya gizi yang sangat diperlukan pada tahap periode emas bahkan juga pada orang yang sudah tua (Depkes, 2014). Tingkat konsumsi ikan di Indonesia setiap tahunnya terjadi peningkatan, namun dapat dikatakan masih rendah. Rendah tingginya tingkat konsumsi ikan ditentukan oleh jumlah konsumsi ikan perkapita pertahun dan dibandingkan dengan angka persediaan ikan. Tingkat konsumsi ikan Nasional yang tercatat sebesar 31,64 kg/kapita/tahun masih lebih rendah dibandingkan dengan Malaysia yang warganya mengkonsumsi 45 kg/kapita/tahun (KKP, 2012). Rendahnya tingkat konsumsi ikan di Indonesia menunjukan masih rendahnya budaya makan ikan di masyarakat. Pemerintah merancang berbagai program yang dapat mendukung tercapainya peningkatan konsumsi ikan nasional. Salah satu program yang diharapkan dapat menyebarluaskan informasi dan edukasi kepada masyarakat tentang ikan dan manfaatnya bagi kesehatan adalah Gerakan Memasyarakatkan Makan Ikan atau sering disebut dengan GEMARIKAN. Program GEMARIKAN dilaksanakan diseluruh wilayah Indonesia salah satunya di Kota Malang. Pelaksanaan program GEMARIKAN yang dilaksanakan di Kota Malang berbeda dengan Kota yang lain karena disesuaikan dengan kondisi wilayah Kota Malang. Dampak pelaksanaan program GEMARIKAN dapat dilihat salah satunya dengan kenaikan tingkat konsumsi ikan dari tahun ke-tahun. Konsumsi ikan rumah tangga peserta GEMARIKAN dapat digunakan untuk membantu melihat sejauh mana program diterima masyarakat dan dampak yang didapat setelah mengikuti kegiatan. Konsumsi ikan rumah tangga responden di Kecamatan Lowokwaru, didapatkan data rata-rata sebagai berikut; konsumsi ikan dan udang segar (KIDS) sebesar 19,46 kg/kapita/tahun, konsumsi ikan dan udang awetan seebesar 4,80 kg/kapita/tahun, dan konsumsi ikan dalam makanan jadi (KIMJ) sebesar 0,28 kg/kapita/tahun. Sehingga, didapatkan rata-rata tingkat konsumsi ikan (TKI) responden sebesar 24,55 kg/kapita/tahun sedangkan tingkat konsumsi ikan Kota Malang pada tahun 2015 sebesar 25,50 kg/kapita/tahun. Sehingga perlu lebih ditingkatkan lagi dalam pelaksanaan program agar dampak positif yang diharapkan dapat tercapai dan merata di seluruh Kota Malang. Saran yang dapat diberikan untuk penelitian ini, yaitu saran akademis sebagai berikut pelaksanaan disesuaikan dengan kondisi Kota Malang, perlu penelitian lanjutan yg berkaitan dengan pola konsumsi, perbandingan wilayah diperlukan guna mengetahui daerah yang lebih membutuhkan perhatian lebih. Sedangkan, saran praktis dalam penelitian sebagai berikut; perlu evaluasi setelah program, perlu memaksimalkan kegiatan, dan membuat pola konsumsi.</p>','2023-07-24 03:43:39'),(2,'Hama dan Penyakit Ikan Lele: Gejala Serangan, Penyebab dan Cara Pencegahan','<h2 id=\"h-penyebab-adanya-serangan-hama-pada-ikan-lele\" class=\"wp-block-heading\"><strong>Penyebab Adanya Serangan Hama Pada ikan Lele</strong></h2>\r\n<p>Ada dua faktor yang bisa menjadi penyebab serangan hama pada ikan lele, yaitu faktor internal dan faktor eksternal. Faktor internal merupakan faktor penyebab yang berasal dari dalam tubuh ikan lele itu sendiri, sedangkan faktor eksternal terjadi karena faktor lingkungan sekitar.</p>\r\n<p>Faktor internal yang menyebabkan ikan lele mudah terserang hama adalah keturunan dan pakan yang tidak sehat.</p>\r\n<ul>\r\n<li>Induk ikan lele yang sudah pernah sakit dan mudah terserang hama biasanya juga menghasilkan anak dengan penyakit yang sama. Sebenarnya ciri-ciri ikan lele yang mudah terserang hama bisa anda lihat sejak kecil.</li>\r\n<li>Pakan yang tidak tepat biasanya juga dapat mempengaruhi pertumbuhan ikan lele sehingga lebih mudah terserang hama. Pakan juga cukup mempengaruhi kekebalan tubuh ikan lele. Pemberian pakan yang buruk akan membuat ikan lele mudah terserang hama.</li>\r\n</ul>\r\n<p>Faktor eksternal yang menjadi penyebab ikan lele terserang hama adalah air kolam, cuaca, hingga jumlah hama di sekitar kolam.</p>\r\n<ul>\r\n<li>Air kolam yang tidak berkualitas, seperti suhu yang terlalu tinggi atau rendah, mengandung banyak amoniak, dan terlampau kotor akan menyebabkan ikan lele mudah terserang hama. Terlebih air yang kotor juga sangat disukai oleh berbagai macam hama dan penyakit.</li>\r\n<li>Cuaca yang tidak bersahabat juga bisa mengubah suhu air kolam dengan sangat cepat. Suhu air kolam yang berubah akan membuat stress dan gangguan metabolisme pada ikan lele. Hal ini akan mempengaruhi kesehatannya juga.</li>\r\n</ul>\r\n<h2 id=\"h-jenis-hama-pada-ikan-lele\" class=\"wp-block-heading\"><span id=\"Jenis_Hama_Pada_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Jenis Hama Pada Ikan Lele</strong></h2>\r\n<p>Ada banyak jenis hama ikan lele yang dapat mengganggu perkembangan ikan lele bahkan menyebabkan kematian. Umumnya, hama yang paling sering menyerang ikan lele adalah predator dan juga hama yang merugikan.</p>\r\n<h3 id=\"h-1-hama-predator\" class=\"wp-block-heading\"><span id=\"1_Hama_Predator\" class=\"ez-toc-section\"></span><strong>1.&nbsp;&nbsp;&nbsp; </strong><strong>Hama Predator</strong></h3>\r\n<p>Ikan lele merupakan makanan yang enak bagi beberapa predator, seperti musang, ular, linsang, dan bahkan kucing. Dengan serangan para hama ini, sudah dapat dipastikan kalau ikan lele akan mati.</p>\r\n<p>Sedikit saja luka yang diakibatkan serangan dari predator ini akan membuat ikan lele mengalami penyakit hingga akhirnya mati.</p>\r\n<p>Selain itu, anda juga harus mewaspadai katak yang bisa memakan telur dan ikan lele yang masih berbentuk larva atau benih.</p>\r\n<h3 id=\"h-2-hama-pengganggu\" class=\"wp-block-heading\"><span id=\"2_Hama_Pengganggu\" class=\"ez-toc-section\"></span><strong>2.&nbsp;&nbsp;&nbsp; </strong><strong>Hama Pengganggu</strong></h3>\r\n<p>Kolam yang bagus biasanya akan mudah bolong, terutama jika anda menggunakan kolam tanah. Belut dan atau kepiting dapat membuat lubang pada kolam sehingga membuatnya bocor. Hal ini akan mengganggu sirkulasi air di dalam kolam. Jika terus dibiarkan, maka air akan terus berkurang dan membuat masalah bagi ikan lele.</p>\r\n<h3 id=\"h-3-hama-pesaing\" class=\"wp-block-heading\"><span id=\"3_Hama_Pesaing\" class=\"ez-toc-section\"></span><strong>3.&nbsp;&nbsp;&nbsp; </strong><strong>Hama Pesaing</strong></h3>\r\n<p>Ada beberapa ikan yang dapat hidup pada saluran air, seperti ikan mujair dan ikan gabus. Ketika sampai pada ikan lele, kedua jenis ikan tersebut bisa saja memakan pakan yang anda berikan. Tidak jarang pula akan membuat anda rugi karena mengeluarkan biaya pakan yang lebih besar.</p>\r\n<h2 id=\"h-pengendalian-hama-pada-ikan-lele\" class=\"wp-block-heading\"><span id=\"Pengendalian_Hama_Pada_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Pengendalian Hama Pada Ikan Lele</strong></h2>\r\n<p>Anda harus segera melakukan pengendalian, terutama dari hama predator agar dapat mencegah kematian dari ikan lele. Untuk mengendalikan hama predator, anda dapat membuat penghalang kolam yang bagus sehingga sulit dilalui katak, ular, hingga musang.</p>\r\n<p>Belut atau kepiting memang bisa hidup di dalam tanah dan terus menggali hingga akhirnya sampai pada kolam tanah yang anda miliki. Untuk mengatasinya, anda dapat melapisi dasar kolam dengan semen atau keramik.</p>\r\n<p>Hama pesaing, seperti ikan mujair dan gabus dapat berkunjung ke kolam ikan lele yang anda pelihara dari saluran air. Karena itu, tutup saluran air menggunakan saringan air agar kedua jenis ikan tersebut tidak bisa masuk ke dalam kolam.</p>\r\n<h2 id=\"h-penyebab-serangan-penyakit-ikan-lele\" class=\"wp-block-heading\"><span id=\"Penyebab_Serangan_Penyakit_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Penyebab Serangan Penyakit Ikan Lele</strong></h2>\r\n<p>Penyebab berbagai macam penyakit pada ikan lele juga tidak jauh berbeda dari serangan hama, yaitu keturunan, pemberian pakan yang tidak berkualitas, dan kualitas air kolam yang sangat buruk.</p>\r\n<ul>\r\n<li>Sama seperti yang sebelumnya telah dijelaskan, induk dengan penyakit tertentu berpotensi menularkan penyakit yang sama pada keturunannya. Hal ini bisa menjadi penyebab ikan lele yang anda pelihara terserang penyakit.</li>\r\n<li>Begitu juga keturunan dari induk yang kawin sedarah (inbreeding) sangat riskan terjadi penurunan sifat-sifat buruk dari induknya.</li>\r\n<li>Memberikan pakan yang tidak berkualitas dan juga kualitas air yang&nbsp; buruk &nbsp;akan mengganggu pertumbuhan ikan lele. Kebanyakan ikan lele akan mengalami penyakit yang sangat mudah menular karena kualitas hidup yang jelek.</li>\r\n</ul>\r\n<h2 id=\"h-jenis-penyakit-pada-ikan-lele\" class=\"wp-block-heading\"><span id=\"Jenis_Penyakit_Pada_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Jenis Penyakit Pada Ikan Lele</strong></h2>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-6004 lazyloaded\" src=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-1024x614.jpg\" sizes=\"(max-width:767px) 480px, (max-width:1024px) 100vw, 1024px\" srcset=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-1024x614.jpg 1024w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-300x180.jpg 300w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-768x461.jpg 768w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-243x146.jpg 243w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-50x30.jpg 50w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele-125x75.jpg 125w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/penyakit-ikan-lele.jpg 1125w\" alt=\"jenis penyakit ikan lele\" width=\"1024\" height=\"614\" data-ll-status=\"loaded\"></figure>\r\n</div>\r\n<p>Penyakit pada lele lebih banyak lagi jumlahnya daripada hama. Biasanya penyakit pada ikan lele juga bisa menular dengan sangat cepat pada ikan lele yang masih sehat melalui media air yang buruk. Ada pula penyakit dengan tingkat kematian yang sangat tinggi.</p>\r\n<h3 id=\"h-1-penyakit-bintik-putih\" class=\"wp-block-heading\"><span id=\"1_Penyakit_Bintik_Putih\" class=\"ez-toc-section\"></span><strong>1.&nbsp;&nbsp;&nbsp; </strong><strong>Penyakit Bintik Putih</strong></h3>\r\n<p>Penyakit bintik putih atau white spot menimbulkan gejala berupa bintik putih pada kulit dan insang ikan lele. Ikan lele merupakan target dari penyakit bintik putih ini.</p>\r\n<p>Gejala lainnya bisa anda perhatikan dari sifat ikan lele yang merasa sangat gatal sehingga sering menggosokkan badannya ke dinding atau dasar kolam.</p>\r\n<p>Penyakit ikan lele&nbsp; ini bisa terjadi karena air yang kotor sehingga menimbulkan protozoa. Populasi ikan lele yang terlalu padat hingga suhu air yang terlalu dingin akan mempercepat pertumbuhan protozoa tersebut.</p>\r\n<h3 id=\"h-2-cotton-wall-disease\" class=\"wp-block-heading\"><span id=\"2_Cotton_Wall_Disease\" class=\"ez-toc-section\"></span><strong>2.&nbsp;&nbsp;&nbsp; </strong><strong>Cotton Wall Disease</strong></h3>\r\n<p>Selain penyakit bintik putih, penyebab lele berwarna putih lainnya adalah penyakit cotton wall disease. Penyakit ini akan menunjukkan gejala munculnya luka secara mendadak pada badan ikan lele.</p>\r\n<p>Dari luka itu, muncul benang-benang putih yang akan melapisi seluruh badannya. Ikan lele jadi tampak malas berenang. Jika terus dibiarkan, ikan lele akan mati.</p>\r\n<p>Sisa pakan dalam air kolam yang tidak kunjung dibersihkan menyebabkan pertumbuhan bakteri. Bakteri inilah yang akan menjadi dalang dibalik penyakit yang satu ini.</p>\r\n<h3 id=\"h-3-lele-kuning\" class=\"wp-block-heading\"><span id=\"3_Lele_Kuning\" class=\"ez-toc-section\"></span><strong>3.&nbsp;&nbsp;&nbsp; </strong><strong>Lele Kuning</strong></h3>\r\n<p>Ada pula penyakit kuning pada lele yang benar-benar membuat badan ikan lele berubah warna menjadi kuning. Jika anda melalukan pembedahan, organ dalam ikan lele yang terserang penyakit kuning biasanya juga akan berubah warna menjadi kuning.</p>\r\n<p>Malnutrisi atau pemberian pakan yang terlampau buruk menjadi penyebab penyakit yang satu ini. Dengan memberikan pakan yang buruk, organ ikan lele bekerja terlalu keras.</p>\r\n<h3 id=\"h-4-penyakit-gatal\" class=\"wp-block-heading\"><span id=\"4_Penyakit_Gatal\" class=\"ez-toc-section\"></span><strong>4.&nbsp;&nbsp;&nbsp; </strong><strong>Penyakit Gatal</strong></h3>\r\n<p>Tidak perlu terlalu khawatir terhadap penyakit gatal karena tidak menyebabkan kematian, tetapi tingkat penyebarannya sangat tinggi dan menurunkan mutu ikan sehingga harga jualnya menjadi rendah.</p>\r\n<p>Ikan lele akan terlihat sering menggosokkan badannya ke sekitar kolam dan jadi malas berenang. Kalau anda perhatikan, warna tubuh ikan akan berubah kusam.</p>\r\n<p>Penyebab penyakit gatal pada ikan lele adalah kualitas air kolam yang buruk dan terlalu padat sehingga memunculkan protozoa.</p>\r\n<h3 id=\"h-5-penyakit-cacar\" class=\"wp-block-heading\"><span id=\"5_Penyakit_Cacar\" class=\"ez-toc-section\"></span><strong>5.&nbsp;&nbsp;&nbsp; </strong><strong>Penyakit Cacar</strong></h3>\r\n<p>Penyakit cacar merupakan penyakit lele kulit mengelupas sebagai salah satu gejalanya. Sebelum kulit ikan lele mengelupas, biasanya muncul borok. Borok ini juga bisa menyebar hingga ke organ ikan lele.</p>\r\n<p>Kualitas air yang kurang baik menjadi penyebab munculnya bakteri yang menjadi penyebab penyakit cacar ini.</p>\r\n<h3 id=\"h-6-usus-lele-pecah\" class=\"wp-block-heading\"><span id=\"6_Usus_Lele_Pecah\" class=\"ez-toc-section\"></span><strong>6.&nbsp;&nbsp;&nbsp; </strong><strong>Usus Lele Pecah</strong></h3>\r\n<p>Pemberian pakan yang terlalu berlebihan dan tidak berkualitas bisa menjadi penyebab lele kembung. Biasanya, lele juga tidak bisa buang kotoran selama berhari-hari sehingga menyebabkan perutnya membesar. Jika terus dibiarkan, maka usus lele bisa pecah dan menyebabkan kematian.</p>\r\n<h3 id=\"h-7-jamur\" class=\"wp-block-heading\"><span id=\"7_Jamur\" class=\"ez-toc-section\"></span><strong>7.&nbsp;&nbsp;&nbsp; </strong><strong>Jamur</strong></h3>\r\n<p>Kalau anda melihat ikan lele dipenuhi oleh benang halus, maka bisa dipastikan kalau ikan lele terserang penyakit jamur. Biasanya lele akan merasa gatal dan malas berenang.</p>\r\n<p>Penyebab penyakit jamur bisa menyerang ikan lele adalah air yang terlalu kotor dan imunitas ikan lele yang sedang lemah.</p>\r\n<h3 id=\"h-8-ragged-tail-fin\" class=\"wp-block-heading\"><span id=\"8_Ragged_Tail_Fin\" class=\"ez-toc-section\"></span><strong>8.&nbsp;&nbsp;&nbsp; </strong><strong>Ragged Tail Fin</strong></h3>\r\n<p>Penyakit ini merupakan sebutan untuk kecacatan pada buntut ikan lele. Biasanya penyakit yang satu ini akan terlihat dari gejala warnanya yang pudar dan bentuknya yang tidak normal.</p>\r\n<p>Kepadatan ikan lele di dalam kolam menjadi penyebabnya karena ada ikan lele yang lebih agresif yang menyerang ikan lele lainnya.</p>\r\n<h3 id=\"h-9-enteric-septicemia-of-catfish\" class=\"wp-block-heading\"><span id=\"9_Enteric_Septicemia_of_Catfish\" class=\"ez-toc-section\"></span><strong>9.&nbsp;&nbsp;&nbsp; </strong><strong>Enteric Septicemia of Catfish</strong></h3>\r\n<p>Penyakit yang satu ini memiliki tingkat penularan dan kematian yang cukup tinggi. Beberapa gejalanya bisa dilihat dari warna tubuh dan insang yang pucat. Rahang dan perut ikan lele juga terlihat bengkak. Kalau anda pegang perutnya, biasanya terisi cairan.</p>\r\n<p>Kualitas air yang buruk, terutama karena tidak ada kandungan oksigen menjadi penyebab penyakit ini. Dengan kualitas oksigen air kolam yang buruk akan menyebabkan munculnya bakteri penyebab penyakit yang satu ini.</p>\r\n<h3 id=\"h-10-darah-cokelat\" class=\"wp-block-heading\"><span id=\"10_Darah_Cokelat\" class=\"ez-toc-section\"></span><strong>10.&nbsp; </strong><strong>Darah Cokelat</strong></h3>\r\n<p>Darah cokelat bukanlah penyakit yang terlalu berbahaya. Namun, tetap dapat menyebabkan kematian. Gejala dari serangan penyakit darah cokelat juga cukup sulit untuk dikenali. Salah satu gejala yang dapat dikenali adalah hilangnya nafsu makan pada ikan.</p>\r\n<p>Penyebab dari penyakit darah cokelat adalah air kolam yang sudah terlalu kotor hingga berubah warna menjadi hitam kecokelatan.</p>\r\n<h3 id=\"h-11-gill-poliferatif\" class=\"wp-block-heading\"><span id=\"11_Gill_Poliferatif\" class=\"ez-toc-section\"></span><strong>11.&nbsp; </strong><strong>Gill Poliferatif</strong></h3>\r\n<p>Gill poliferatif merupakan penyakit yang cukup berbahaya karena membuat ikan lele kesulitan untuk bernapas. Penyakit yang satu ini disebabkan oleh protozoa dan cacing yang muncul dari tanah berlumpur.</p>\r\n<h3 id=\"h-12-kolumnaris\" class=\"wp-block-heading\"><span id=\"12_Kolumnaris\" class=\"ez-toc-section\"></span><strong>12.&nbsp; </strong><strong>Kolumnaris</strong></h3>\r\n<p>Munculnya warna putih pada tubuh lele, kesulitan bergerak, hingga perubahan warna kulit adalah gejala dari penyakit ini. Penyakit yang satu ini disebabkan oleh bakteri yang bisa muncul di air bersih sekalipun.</p>\r\n<h3 id=\"h-13-channel-catfish-virus-disease\" class=\"wp-block-heading\"><span id=\"13_Channel_Catfish_Virus_Disease\" class=\"ez-toc-section\"></span><strong>13.&nbsp; </strong><strong>Channel Catfish Virus Disease</strong></h3>\r\n<p>Penyakit yang disebabkan oleh virus ini biasanya hanya menyerang ikan lele yang masih kecil. Terjadi pembengkakan dan pendarahan menjadi gejala dari serangan penyakit ini. Penyakit yang satu ini juga bisa menjadi penyebab ikan lele kembung.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-full\"><a href=\"https://forms.gle/CrrNct6f1UreZQms9\"><img class=\"wp-image-8262 lazyloaded\" src=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2.png\" sizes=\"(max-width:767px) 480px, 520px\" srcset=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2.png 520w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2-300x115.png 300w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2-260x100.png 260w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2-50x19.png 50w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/11/CTA-hama-dan-penyakit-ikan-lele-2-150x58.png 150w\" alt=\"\" width=\"520\" height=\"200\" data-ll-status=\"loaded\"></a></figure>\r\n</div>\r\n<h2 id=\"h-pengendalian-penyakit-pada-ikan-lele\" class=\"wp-block-heading\"><span id=\"Pengendalian_Penyakit_Pada_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Pengendalian Penyakit Pada Ikan Lele</strong></h2>\r\n<p>Untuk mengendalikan berbagai penyakit pada ikan lele, anda harus mengatur kualitas air sesuai dengan standar hidup ikan lele.</p>\r\n<ul>\r\n<li>Suhu air yang tidak tepat menjadi penyebab paling sering yang membuat ikan lele sering terserang penyakit. Kendalikan suhu air hingga pada suhu 26<sup>o</sup>C hingga 30<sup>o</sup>C. Suhu tersebut cukup ideal untuk ikan lele.</li>\r\n<li>Pastikan juga air memiliki pH antara 6,5 hingga 8,5. Derajat keasaman yang tidak tepat akan membuat organ ikan lele mudah rusak.</li>\r\n<li>Kandungan oksigen atau DO yang tepat untuk ikan lele adalah minimal 4 mg/L. Oksigen yang kurang di dalam air sering menjadi penyebab penyakit pada ikan lele.</li>\r\n</ul>\r\n<p>Selain itu, anda juga dapat memberikan obat yang tepat sesuai dengan jenis penyakitnya.</p>\r\n<h2 id=\"h-cara-pencegahan-hama-dan-penyakit-ikan-lele\" class=\"wp-block-heading\"><span id=\"Cara_Pencegahan_Hama_dan_Penyakit_Ikan_Lele\" class=\"ez-toc-section\"></span><strong>Cara Pencegahan Hama dan Penyakit Ikan Lele</strong></h2>\r\n<p>Tentunya anda tidak ingin kalau hama dan penyakit kembali menyerang ikan lele. Karena itu, anda harus mengetahui cara mencegahnya.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-6005 lazyloaded\" src=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-1024x614.jpg\" sizes=\"(max-width:767px) 480px, (max-width:1024px) 100vw, 1024px\" srcset=\"https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-1024x614.jpg 1024w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-300x180.jpg 300w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-768x461.jpg 768w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-243x146.jpg 243w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-50x30.jpg 50w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele-125x75.jpg 125w, https://i2.wp.com/gdm.id/wp-content/uploads/2022/04/pencegahan-penyakit-ikan-lele.jpg 1125w\" alt=\"pencegahan ikan lele\" width=\"1024\" height=\"614\" data-ll-status=\"loaded\"></figure>\r\n</div>\r\n<h3 id=\"h-1-pastikan-kualitas-air-kolam\" class=\"wp-block-heading\"><span id=\"1_Pastikan_Kualitas_Air_Kolam\" class=\"ez-toc-section\"></span><strong>1.&nbsp;&nbsp;&nbsp; </strong><strong>Pastikan Kualitas Air Kolam</strong></h3>\r\n<p>Salah satu penyebab dari penyakit dan hama pada ikan lele adalah kualitas air yang sangat bermasalah. Karena itu, pastikan air kolam tetap berkualitas untuk mencegah berbagai penyakit pada ikan lele.</p>\r\n<h3 id=\"h-2-pemberian-pakan-yang-berkualitas\" class=\"wp-block-heading\"><span id=\"2_Pemberian_Pakan_yang_Berkualitas\" class=\"ez-toc-section\"></span><strong>2.&nbsp;&nbsp;&nbsp; </strong><strong>Pemberian Pakan yang Berkualitas</strong></h3>\r\n<p>Pakan yang tidak berkualitas menjadi penyebab lainnya yang membuat ikan lele sakit. Berikan pakan yang berkualitas dalam jumlah yang cukup agar tidak terjadi penyakit usus pecah pada ikan lele.&nbsp;</p>\r\n<h3 id=\"h-3-obati-ikan-lele-yang-luka\" class=\"wp-block-heading\"><span id=\"3_Obati_Ikan_Lele_yang_Luka\" class=\"ez-toc-section\"></span><strong>3.&nbsp;&nbsp;&nbsp; </strong><strong>Obati Ikan Lele yang Luka</strong></h3>\r\n<p>Beberapa penyakit pada ikan lele juga diawali dari luka kecil. Anda harus bisa cara mengobati ikan lele yang luka untuk mencegah berbagai serangan hama dan penyakit. Beberapa predator juga dapat mencium aroma bau darah dengan sangat cepat.</p>\r\n<h3 id=\"h-4-pemberian-suplemen\" class=\"wp-block-heading\"><span id=\"4_Pemberian_Suplemen\" class=\"ez-toc-section\"></span><strong>4.&nbsp;&nbsp;&nbsp; </strong><strong>Pemberian Suplemen</strong></h3>\r\n<p>Langkah terakhir untuk mencegah serangan hama dan penyakit pada ikan lele adalah pemberian suplemen yang tepat. Salah satu suplemen yang dapat anda berikan untuk ikan lele adalah <a href=\"https://gdm.id/produk-gdm/suplemen-organik-cair/spesialis-perikanan/\">Suplemen Organik Cair GDM Spesialis Ikan</a>.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-full\"><img class=\"wp-image-753 lazyloaded\" src=\"https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan.jpg\" sizes=\"(max-width:767px) 480px, (max-width:900px) 100vw, 900px\" srcset=\"https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan.jpg 900w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-150x150.jpg 150w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-300x300.jpg 300w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-768x768.jpg 768w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-146x146.jpg 146w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-50x50.jpg 50w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-75x75.jpg 75w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-85x85.jpg 85w, https://i2.wp.com/gdm.id/wp-content/uploads/2019/07/ikan-5-lt-depan-80x80.jpg 80w\" alt=\"suplemen ikan GDM\" width=\"900\" height=\"900\" data-ll-status=\"loaded\"></figure>\r\n</div>\r\n<p><a href=\"https://gdm.id/produk-gdm/suplemen-organik-cair/spesialis-perikanan/\">Suplemen Organik Cair GDM Spesialis Ikan</a> terbuat dari bahan-bahan alami yang dapat meningkatkan imunitas ikan lele. Selain itu, <a href=\"https://gdm.id/produk-gdm/suplemen-organik-cair/spesialis-perikanan/\">Suplemen Organik Cair GDM Spesialis Ikan</a> juga mengandung bakteri baik yang dapat meningkatkan kualitas air kolam.</p>\r\n<ul>\r\n<li>Cukup berikan <a href=\"https://gdm.id/produk-gdm/suplemen-organik-cair/spesialis-perikanan/\">Suplemen Organik Cair GDM Spesialis Ikan</a> sebanyak 6 ml yang harus anda semprot dengan rentang waktu seminggu sekali. Dosis tersebut diberikan jika kolam berukuran kurang dari 1 hektar.</li>\r\n<li>Kalau kolam berukuran lebih dari 1 hektar, gunakan <a href=\"https://gdm.id/produk-gdm/suplemen-organik-cair/spesialis-perikanan/\">Suplemen Organik Cair GDM Spesialis Ikan</a> sebanyak 10 liter dengan rentang waktu yang sama.</li>\r\n</ul>\r\n<p>Itulah macam-macam penyakit lele dan cara mengatasinya harus anda ketahui. Jangan lupa juga untuk menjaga ikan lele dari serangan hama. Selalu jaga kualitas air kolam dan pakan yang akan anda berikan untuk ikan lele.</p>','2023-07-24 03:53:13');
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
  `map` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_harga_ikan`),
  KEY `id_pasar` (`id_pasar`),
  CONSTRAINT `tb_harga_ikan_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `tb_pasar` (`id_pasar`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_harga_ikan`
--

LOCK TABLES `tb_harga_ikan` WRITE;
/*!40000 ALTER TABLE `tb_harga_ikan` DISABLE KEYS */;
INSERT INTO `tb_harga_ikan` VALUES (5,6,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31860.802702216763!2d114.7529137743164!3d-3.4469459999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de683c673e4298b%3A0x1e79127f4cfd414e!2sPasar%20Saptamarga!5e0!3m2!1sid!2sid!4v1690244218445!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','2023-07-24 08:03:00','2023-07-25 00:46:35'),(6,7,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31860.802702216763!2d114.7529137743164!3d-3.4469459999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de683df20fac7e1%3A0x72a17066822312d!2sPasar%20Malam%20Karang%20Rejo!5e0!3m2!1sid!2sid!4v1690247429286!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','2023-07-25 01:10:47','2023-07-25 01:16:02');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` VALUES (3,'admin','0192023a7bbd73250516f069df18b500','1'),(4,'user','80ec08504af83331911f5882349af59d','2');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pasar`
--

LOCK TABLES `tb_pasar` WRITE;
/*!40000 ALTER TABLE `tb_pasar` DISABLE KEYS */;
INSERT INTO `tb_pasar` VALUES (6,'Pasar raya bogor','Jl banjarbaru','Pasar ikan Internasional di indonesia','2023-07-19 13:01:31'),(7,'Pasar baru','Jl banjarbaru','Pasar ikan Internasional','2023-07-25 00:50:19');
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
  `catatan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_pengolahan_ikan`),
  KEY `id_ikan` (`id_ikan`),
  CONSTRAINT `tb_pengolahan_ikan_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_ikan` (`id_ikan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengolahan_ikan`
--

LOCK TABLES `tb_pengolahan_ikan` WRITE;
/*!40000 ALTER TABLE `tb_pengolahan_ikan` DISABLE KEYS */;
INSERT INTO `tb_pengolahan_ikan` VALUES (4,2,'2023-07-24','Kalengan',636,'75','-','2023-07-24 01:02:53','2023-07-24 01:08:23');
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
  `id_ikan` int NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int NOT NULL,
  `keterangan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id_transaksi_ikan`),
  KEY `id_ikan` (`id_ikan`),
  CONSTRAINT `tb_transaksi_ikan_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_ikan` (`id_ikan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_transaksi_ikan`
--

LOCK TABLES `tb_transaksi_ikan` WRITE;
/*!40000 ALTER TABLE `tb_transaksi_ikan` DISABLE KEYS */;
INSERT INTO `tb_transaksi_ikan` VALUES (1,2,'2023-12-28',603,'Masuk','Danau Durian','2023-07-24 03:22:34');
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

-- Dump completed on 2023-07-25 16:24:10
