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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aventurier`
--

LOCK TABLES `aventurier` WRITE;
/*!40000 ALTER TABLE `aventurier` DISABLE KEYS */;
INSERT INTO `aventurier` VALUES (1,'Horn','Mike',56),(2,'Marquis','Sarah',50),(3,'Polo','Marco',69),(8,'Camus','Rémis',37),(9,'Vanier','Nicolas',60),(10,'Maillart','Ella',94),(11,'Humphreys','Alastair',46),(12,'Ousland','Borge',60),(13,'Troillet','Jean',75),(14,'Loretan','Erhard',52);
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
  `img_expe` varchar(100) DEFAULT NULL,
  `id_aven` int(25) DEFAULT NULL,
  PRIMARY KEY (`id_expe`),
  KEY `FK_expedition_id_aven` (`id_aven`),
  CONSTRAINT `FK_expedition_id_aven` FOREIGN KEY (`id_aven`) REFERENCES `aventurier` (`id_aven`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expedition`
--

LOCK TABLES `expedition` WRITE;
/*!40000 ALTER TABLE `expedition` DISABLE KEYS */;
INSERT INTO `expedition` VALUES (1,'La descente de l’Amazone','1997-05-07',180,'1','continent sud américain','2023_03_23_05_12_32---descente-amazon.jpg',1),(2,'Lattitude 0','1999-05-11',540,'1','autour de l\'équateur','2023_03_23_05_15_58---Latitude-Zero.jpg',1),(3,'Arktos','2002-05-07',808,'1',' cercle polaire','2023_03_23_05_19_52---Arkots_.jpg',1),(4,'Northpole de nuit','2002-01-23',60,'1','Artique','2023_03_23_05_21_45---northpole_.jpg',1),(5,'Pangaea','2008-05-23',1460,'100 jeunes','au tour du mondes','2023_03_23_05_24_03---pangaea_.jpg',1),(6,'Pole2Pole : L\'antarctique','2017-05-23',57,'1','Antartique','2023_03_23_05_26_00---pole2pole_.jpg',1),(7,'TASMANIA','2018-08-23',120,'1','CÔTE OUEST (SUD AU NORD)','2023_03_23_05_28_18---tasmania_.jpg',2),(34,'Australie','2015-01-23',90,'1','Australie occidentale','2023_03_23_05_30_00---Australia.jfif',2),(35,'Sibérie - Australie','2010-05-23',1095,'1','Le monde','2023_03_23_05_35_09---siberie-australie_.jpg',2),(36,'Amérique du Sud','2006-05-23',240,'1','Chili, Bolivie, Pérou','2023_03_23_05_36_57---amerique_du_sud_.jpg',2),(37,'Australie Outback','2002-06-23',510,'1','Australie','2023_03_23_05_40_08---australie_outaback.jpg',2),(38,'Etats-Unis','2000-06-23',130,'1',' Etats-Unis côte ouest','2023_03_23_05_43_10---Etats_unis_.jpg',2),(39,'L\'Asie','1260-09-23',8770,'3','L\'Asie','2023_03_23_05_45_32---marco_polo_.jpg',3),(40,'Une aventure humaine !','2022-02-23',15,'1','Calvi – Monaco','2023_03_23_05_55_10---remis_aventure_hummaine.jpg',8),(41,'Tour de France à la nage','2018-11-23',140,'1','France','2023_03_23_05_55_52---remis_tour_defrance.jpg',8),(42,'Riverboarding the mekong','2021-02-23',190,'1','tibet au viêtnam','2023_03_23_05_57_02---remis_riverbording_.jpg',8),(43,'Running Across Australia','2011-06-23',100,'1','Australie','2023_03_23_05_57_36---running_australia.jpg',8),(44,'Couleurs des bois','1984-05-20',365,'3','Nouveau-Québec Labrador','2023_03_23_09_09_37---couleurs_des_bois_.jpg',9),(45,'Le triathlon historique','1986-01-23',365,'1','Wyoming détroit de Béring','2023_03_23_09_10_31---triathlon_historique_.jpg',9),(46,'Translaponie','1988-02-23',365,'1','Kiruna à Mourmansk','2023_03_23_09_11_09---transpolie_.jpg',9),(47,'Transsibérie','1990-02-23',365,'1','Sibérie, de la Mongolie','2023_03_23_09_12_03---transiberie_.jpg',9),(48,'L\'enfant des neiges','1994-05-23',365,'2','Prince George à Dawson','2023_03_23_09_12_50---enfant_des_neiges_.jpg',9),(49,'L\'odyssée Blanche','1998-10-23',365,'1','Skagway à Québec','2023_03_23_09_13_31---odyssee-blanche_.jpg',9),(50,'L\'odyssée sibérienne','2005-05-23',365,'1','lac Baïkal à Moscou','2023_03_23_09_14_16---odyssee-siberienne_.jpg',9),(51,'L\'odyssée sauvage','2013-05-23',85,'1','Mongolie - chine','2023_03_23_09_14_52---odyssee-sauvage_.jpg',9),(52,'Traversée de l\'atlantique','1922-06-23',30,'1','Atlantique','2023_03_23_09_20_48---atlantique_.jpg',10),(53,'Caucase','1930-01-23',30,'1','Caucase','2023_03_23_09_21_25---cauccasse.jpg',10),(54,'tour du monde a vélo','2001-10-23',1460,'1','Monde','2023_03_23_09_28_39---monde_velo_.jpg',11),(55,'Marathon des sables','2008-05-23',8,'1200','desert du Sahara','2023_03_23_09_29_08---marathon-des-sables_.jpg',11),(56,'The Empty Quarter','2012-05-23',46,'2','Desert','2023_03_23_09_29_52---the_empty-quarter_.jpg',11),(57,'Antarctique-solitaire','1996-05-23',64,'1','L\'Antarctique','2023_03_23_09_38_40---antarctique_.jpg',12),(58,'Cho Oyu','1999-06-23',2,'1','Cho Oyo','2023_03_23_09_39_16---cho_oyo_.jpg',12),(59,'Pôle Nord','2006-01-23',86,'2','Pôle Nord','2023_03_23_09_39_49---pole_nord_.jpg',12),(60,'Circumnavigation','2010-01-23',20,'10','Pôle Nord','2023_03_23_09_40_19---circumnavigation_.jpg',12),(61,'Annapurna','2012-05-23',5,'2','Himalaya','2023_03_23_09_52_10---annapurna_.jpg',13),(62,'Terre de Baffin','2013-06-23',30,'3','Bylot Island','2023_03_23_09_52_42---bylot_island_.jpg',13),(63,'Groenland','2014-05-23',12,'3','Groenland','2023_03_23_09_53_34---groendland_.jpg',13),(64,'Record de vitesse','1986-09-23',2,'2','Everest','2023_03_23_09_54_10---evreste_.jpg',13),(65,'Les 8 000 métres','1969-06-23',365,'1','dix sommets','2023_03_23_09_54_57---les_8000_.jpg',13),(67,'K2','1985-05-23',1,'3','K2','2023_03_23_10_19_39---K2_.jpg',14),(68,'Everset','1986-05-23',60,'2','Everset','2023_03_23_10_20_18---evrest_.jpg',14),(69,'Kangchenjunga','1995-05-23',1,'2','Kangchenjunga','2023_03_23_10_20_57---kangchenjunga_.jpg',14),(70,'Lhotse','1994-09-23',4,'2','Lhotse','2023_03_23_10_22_06---lhotse_.jpg',14),(71,'Makalu','1991-05-23',1,'2','Makalu','2023_03_23_10_22_47---makalu_.jpg',14),(72,'Cho Oyu','1990-08-23',12,'3','Cho Oyu','2023_03_23_10_23_23---cho_oyo_.jpg',14),(73,'Dhaulagiri','1985-06-23',1,'3','Dhaulagiri','2023_03_23_10_24_00---Dhaulagiri_.jpg',14),(74,'Manaslu','1994-05-03',1,'2','Manaslu','2023_03_23_10_25_18---manaslu_.jpg',14),(75,'Nanga Parbat','1982-09-23',37,'2','Nanga Parbat','2023_03_23_10_25_55---nanga_parbat_.jpg',14),(76,'Annapurna','1984-10-23',18,'2','Annapurna','2023_03_23_10_27_13---Annapurna_.jpg',14),(77,'Gasherbrum I','1983-10-23',40,'2','Gasherbrum I','2023_03_23_10_27_49---Gasherbrum_I_.jpg',14),(78,'Broad Peak','1983-11-18',1,'2','Broad Peak','2023_03_23_10_29_14---broad_peak.jpg',14),(79,'Shisha Pangma','1990-06-23',1,'3','Shisha Pangma','2023_03_23_10_30_12---shisha_pangma_.jpg',14),(80,'Gasherbrum II','1983-06-23',1,'3','Gasherbrum II','2023_03_23_10_31_00---Gasherbrum_II_.jpg',14);
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

-- Dump completed on 2023-03-23 10:37:42
