-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: bulutangkis
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brand_raket`
--

DROP TABLE IF EXISTS `brand_raket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_raket` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `BRAND` varchar(50) DEFAULT NULL,
  `ACTIVE` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UNIQ1` (`BRAND`),
  KEY `BRAND` (`BRAND`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_raket`
--

LOCK TABLES `brand_raket` WRITE;
/*!40000 ALTER TABLE `brand_raket` DISABLE KEYS */;
INSERT INTO `brand_raket` VALUES (1,'YONEX','Y'),(2,'LI-NING','Y'),(3,'ADIDAS','Y'),(4,'WILSON','Y'),(5,'HART','Y'),(6,'KARAKAL','Y'),(7,'YEHLEX','Y'),(8,'MONSOON','Y'),(9,'PRO ACE','Y'),(10,'CARLTON','Y'),(11,'VICTOR','Y'),(12,'ASTEC','Y'),(13,'ASHAWAY','Y'),(14,'FORZA','Y'),(15,'FLEET','Y'),(16,'GOSEN','Y'),(17,'TOALSON','Y'),(18,'BABOLAT','Y'),(19,'APACS','Y'),(20,'WISH','Y'),(21,'MORRIS','Y'),(22,'PROKENNEX','Y'),(23,'AINEX','Y'),(24,'KAYAKU','Y'),(25,'EURO','Y'),(26,'SPECS','Y'),(27,'BONIS','Y'),(28,'CASTON','Y'),(29,'FLEX POWER','Y'),(30,'REINFORCE SPEED','Y');
/*!40000 ALTER TABLE `brand_raket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raket`
--

DROP TABLE IF EXISTS `raket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raket` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `BRAND` varchar(50) DEFAULT NULL COMMENT 'Merek',
  `NAME` varchar(50) DEFAULT NULL COMMENT 'Nama',
  `CATEGORY` enum('SPEED','CONTROL','POWER') DEFAULT NULL COMMENT 'Kategori',
  `WEIGHT` enum('U','2U','3U','4U','5U','F') DEFAULT NULL COMMENT 'Berat',
  `GRIP` enum('G3','G4','G5') DEFAULT NULL COMMENT 'Grip',
  `MAX_TENSION` tinyint(4) unsigned DEFAULT NULL COMMENT 'Tarikan Maksimum',
  `PRICE` int(11) unsigned DEFAULT NULL COMMENT 'Harga',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Uniq1` (`NAME`,`CATEGORY`,`WEIGHT`,`GRIP`,`MAX_TENSION`,`BRAND`),
  KEY `FK_raket_brand_raket` (`BRAND`),
  CONSTRAINT `FK_raket_brand_raket` FOREIGN KEY (`BRAND`) REFERENCES `brand_raket` (`BRAND`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raket`
--

LOCK TABLES `raket` WRITE;
/*!40000 ALTER TABLE `raket` DISABLE KEYS */;
INSERT INTO `raket` VALUES (1,'YONEX','Muscle Power 22 Limited','CONTROL','3U','G5',24,399000),(2,'YONEX','Nanoray 68 Light','SPEED','5U','G5',30,299000),(3,'YONEX','Voltric Flash Boost','POWER','4U','G5',28,2300000),(4,'HART','Rainbow 3000','POWER','U','G5',22,80000),(5,'YONEX','DUORA 10','POWER','3U','G5',28,2399000),(6,'YONEX','Nanoray 18i','SPEED','4U','G5',35,439000),(7,'YONEX','ArcSaber 69 Light','CONTROL','5U','G5',30,329000);
/*!40000 ALTER TABLE `raket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senar`
--

DROP TABLE IF EXISTS `senar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senar` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `STRING_NAME` varchar(50) DEFAULT NULL COMMENT 'Nama',
  `STRING_CATEGORY` enum('DURABILITY','REPULSION_POWER','HITTING_SOUND','CONTROL') DEFAULT NULL COMMENT 'Kategori',
  `STRING_FEELING` enum('SOFT','MEDIUM','HARD') DEFAULT NULL COMMENT 'Feel',
  `STRING_DIAMETER` float unsigned DEFAULT NULL COMMENT 'Diameter',
  `POINT_REPULSION_POWER` tinyint(3) unsigned DEFAULT NULL COMMENT 'Nilai Kekuatan Tolakan',
  `POINT_DURABILITY` tinyint(3) unsigned DEFAULT NULL COMMENT 'Nilai Durabiliti',
  `POINT_HITTING_SOUND` tinyint(3) unsigned DEFAULT NULL COMMENT 'Nilai Suara Pukulan',
  `POINT_SHOCK_ABSORPTION` tinyint(3) unsigned DEFAULT NULL COMMENT 'Nilai Redaman Pukulan',
  `POINT_CONTROL` tinyint(3) unsigned DEFAULT NULL COMMENT 'Nilai Kontrol',
  `AVERAGE_PRICE` int(10) unsigned DEFAULT NULL COMMENT 'Harga (dalam Rupiah)',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UNIQUE1` (`STRING_NAME`,`STRING_CATEGORY`,`STRING_FEELING`,`STRING_DIAMETER`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senar`
--

LOCK TABLES `senar` WRITE;
/*!40000 ALTER TABLE `senar` DISABLE KEYS */;
INSERT INTO `senar` VALUES (1,'BG6','REPULSION_POWER','SOFT',0.66,8,6,8,7,7,59500),(2,'BG9','REPULSION_POWER','MEDIUM',0.66,8,5,7,7,6,64500),(3,'BG66','REPULSION_POWER','MEDIUM',0.66,9,5,7,7,7,93000),(4,'BG80 POWER','REPULSION_POWER','HARD',0.68,9,7,7,6,6,119000),(5,'BG66 FORCE','REPULSION_POWER','MEDIUM',0.65,10,6,9,9,10,103500),(6,'BG66 ULTIMAX','REPULSION_POWER','MEDIUM',0.65,10,6,10,8,10,118000),(7,'AEROBITE BOOST','CONTROL','HARD',0.72,8,7,7,6,10,115000),(8,'AEROBITE','CONTROL','MEDIUM',0.67,10,6,9,8,10,119000),(9,'AEROSONIC','REPULSION_POWER','MEDIUM',0.61,10,5,10,7,9,92000),(10,'BG80','REPULSION_POWER','HARD',0.68,8,6,7,6,6,119000),(11,'NANOGY 98','REPULSION_POWER','MEDIUM',0.66,10,7,8,8,8,119000),(12,'NANOGY 95','DURABILITY','MEDIUM',0.69,8,8,7,6,6,119000),(13,'BG65 TITANIUM','DURABILITY','HARD',0.7,7,7,7,6,6,77000),(14,'BG70 PRO','DURABILITY','MEDIUM',0.7,7,7,6,5,6,155000),(15,'BG65','DURABILITY','SOFT',0.7,6,8,6,6,6,69000),(16,'BG68 TITANIUM','HITTING_SOUND','SOFT',0.68,9,6,8,7,7,101500),(17,'BG85','HITTING_SOUND','HARD',0.67,8,6,8,7,7,109000);
/*!40000 ALTER TABLE `senar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bulutangkis'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-08 21:17:07
