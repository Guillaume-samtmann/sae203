-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aventurier`
--

DROP TABLE IF EXISTS `aventurier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aventurier` (
  `id_aven` int(25) NOT NULL AUTO_INCREMENT,
  `nom_aven` char(25) DEFAULT NULL,
  `prenom_ave` char(25) DEFAULT NULL,
  `age_ave` int(25) DEFAULT NULL,
  PRIMARY KEY (`id_aven`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aventurier`
--

LOCK TABLES `aventurier` WRITE;
/*!40000 ALTER TABLE `aventurier` DISABLE KEYS */;
INSERT INTO `aventurier` VALUES (1,'Horn','Mike',56),(2,'Marquis','Sarah',50),(3,'Polo','Marco',69);
/*!40000 ALTER TABLE `aventurier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expedition`
--

DROP TABLE IF EXISTS `expedition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expedition` (
  `id_expe` int(25) NOT NULL AUTO_INCREMENT,
  `nom_expe` char(25) DEFAULT NULL,
  `date_expe` date DEFAULT NULL,
  `dure_expe` int(25) DEFAULT NULL,
  `membre_expe` char(25) DEFAULT NULL,
  `lieu_expe` char(25) DEFAULT NULL,
  `img_expe` varchar(25) DEFAULT NULL,
  `id_aven` int(25) DEFAULT NULL,
  PRIMARY KEY (`id_expe`),
  KEY `FK_expedition_id_aven` (`id_aven`),
  CONSTRAINT `FK_expedition_id_aven` FOREIGN KEY (`id_aven`) REFERENCES `aventurier` (`id_aven`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expedition`
--

LOCK TABLES `expedition` WRITE;
/*!40000 ALTER TABLE `expedition` DISABLE KEYS */;
INSERT INTO `expedition` VALUES (1,'La descente de l’Amazone','1997-04-01',6,'1','continent sud américain',NULL,1),(2,'Lattitude 0','1999-06-02',17,'1','autour de l\'équateur',NULL,1),(3,'Arktos','2002-01-01',808,'1',' cercle polaire',NULL,1);
/*!40000 ALTER TABLE `expedition` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-03  8:50:46
