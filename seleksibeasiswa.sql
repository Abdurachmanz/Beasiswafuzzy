-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: seleksibeasiswa
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_pemohon`
--

DROP TABLE IF EXISTS `tb_pemohon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pemohon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `ipk_mahasiswa` float DEFAULT NULL,
  `penghasilan_ortu` int DEFAULT NULL,
  `tanggungan_ortu` int DEFAULT NULL,
  `prestasi_mahasiswa` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pemohon`
--

LOCK TABLES `tb_pemohon` WRITE;
/*!40000 ALTER TABLE `tb_pemohon` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pemohon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-17 23:49:24


-- ------------------
-- Records of Pemohon
-- ------------------

INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('1', 'Muhammad Abdurachman Fairuz', '3.22', '4000000', '4', '8');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('2', 'Pemohon Ke 2', '3.67', '2000000', '1', '1');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('3', 'Pemohon Ke 3', '3.89', '800000', '3', '0');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('4', 'Pemohon Ke 4', '2.78', '1200000', '6', '2');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('5', 'Pemohon Ke 5', '2.93', '4000000', '2', '4');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('6', 'Pemohon Ke 6', '3.58', '3500000', '1', '6');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('7', 'Pemohon Ke 7', '3.45', '1750000', '3', '7');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('8', 'Pemohon Ke 8', '3.32', '950000', '2', '5');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('9', 'Pemohon Ke 9', '3.77', '2500000', '4', '2');
INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`id`, `nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('10', 'Pemohon Ke 10', '3.53', '3250000', '1', '5');