-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: parliament
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmark`
--

LOCK TABLES `bookmark` WRITE;
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `party` int(11) DEFAULT NULL,
  `house` enum('rajya-sabha','lok-sabha') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Narendra Modi','narendra.modi@gov.in',NULL,0,'lok-sabha'),(2,'Amit Shah','amit.shah@gov.in',NULL,0,'lok-sabha'),(3,'Rahul Gandhi','rahul.gandhi@gov.in',NULL,0,'lok-sabha'),(4,'Mamata Banerjee','mamta.banerjee@gov.in',NULL,0,'lok-sabha'),(5,'Arvind Kejriwal','arvind.kejriwal@gov.in',NULL,0,'lok-sabha'),(6,'Anil Baluni','anil.baluni@sansad.nic.in',NULL,0,'rajya-sabha'),(7,'B. Parthasaradhi Reddy','bps.reddy@sansad.nic.in',NULL,0,'rajya-sabha'),(8,'Binoy Viswam','binoy.viswam@sansad.nic.in',NULL,0,'rajya-sabha'),(9,'Bikash Ranjan','bikash.ranjanbh@sansad.nic.in',NULL,0,'rajya-sabha'),(10,'G.K. Vasan','gkvasan@sansad.nic.in',NULL,0,'rajya-sabha'),(11,'Faiyaz Ahmad','faiyaz.ahmad@sansad.nic.in',NULL,0,'rajya-sabha'),(12,'Fauzia Khan','fauzia.khanmp@sansad.nic.in',NULL,0,'rajya-sabha'),(13,'Sukhendu Sekhar Ray','sukhendu.sekhar@sansad.nic.in',NULL,0,'rajya-sabha'),(14,'Vikramjit Singh Sahney','vikram.sahney@sansad.nic.in',NULL,0,'rajya-sabha'),(15,'Sanjeev Arora','sanjeev.aroramprs@sansad.nic.in',NULL,0,'rajya-sabha'),(16,'Sasmit Patra','sasmit.patra@sansad.nic.in',NULL,0,'rajya-sabha'),(17,'Sujeet Kumar','sujeetkumar.mp@sansad.nic.in',NULL,0,'rajya-sabha'),(18,'Seema','seema.dwivedi@sansad.nic.in',NULL,0,'rajya-sabha'),(19,'Sanjay Singh','mp.sanjaysingh@sansad.nic.in',NULL,0,'rajya-sabha'),(20,'S. Jaishankar','s.jaishankar@sansad.nic.in',NULL,0,'rajya-sabha'),(21,'Sushil Kumar Rinku','',NULL,0,'lok-sabha'),(22,'Arvind Ganpat Sawant','arvind.sawant@sansad.nic.in',NULL,0,'lok-sabha'),(23,'Pragya Singh Thakur','sadhvi.pragya@sansad.nic.in',NULL,0,'lok-sabha'),(24,'Rajan Baburao Vichare','rb.vichare@sansad.nic.in',NULL,0,'lok-sabha'),(25,'Locket Chatterjee','locket.chatterjee@sansad.nic.in',NULL,0,'lok-sabha'),(26,'Kavitha Maloth','k.malothu@sansad.nic.in',NULL,0,'lok-sabha'),(27,'Dinesh Chandra Yadav','dc.yadavmp@sansad.nic.in',NULL,0,'lok-sabha'),(28,'Harsimrat Kaur Badal','harsimratk.badal@sansad.nic.in',NULL,0,'lok-sabha'),(29,'Sajda Ahmed','sajda.ahmed@sansad.nic.in',NULL,0,'lok-sabha'),(30,'Dimple Yadav','dimpleyadav78@gmail.com',NULL,0,'lok-sabha'),(31,'Mohammad Akbar Lone','akbar.lone@sansad.nic.in',NULL,0,'lok-sabha'),(32,'Mohammad Sadique','m.sadique@sansad.nic.in',NULL,0,'lok-sabha'),(33,'Mimi Chakraborty','mimi.chakraborty@sansad.nic.in',NULL,0,'lok-sabha'),(34,'Abdussamad Samadani','samadani@Sansad.nic.in',NULL,0,'lok-sabha'),(35,'Faizal P.P. Mohammed','mohammed.faizal@sansad.nic.in',NULL,0,'lok-sabha'),(36,'Farooq Abdullah','abdullah@sansad.nic.in',NULL,0,'lok-sabha'),(37,'E. T. Mohammed Basheer','basheer.et@sansad.nic.in',NULL,0,'lok-sabha'),(38,'Lalubhai Babubhai Patel','patel.babubhai@sansad.nic.in',NULL,0,'lok-sabha'),(39,'Tapir Gao','tapirgao@sansad.nic.in',NULL,0,'lok-sabha'),(40,'Talari Rangaiah','rangaiah.talari@gov.in',NULL,0,'lok-sabha');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ministry`
--

DROP TABLE IF EXISTS `ministry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ministry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ministry`
--

LOCK TABLES `ministry` WRITE;
/*!40000 ALTER TABLE `ministry` DISABLE KEYS */;
INSERT INTO `ministry` VALUES (1,'Ministry of Home Affairs','ministry-of-home-affairs','1.jpg'),(2,'Ministry of Finance','ministry-of-finance','2.png'),(3,'Ministry of External Affairs','ministry-of-external-affairs','3.jpg'),(4,'Ministry of Defence','ministry-of-defence','4.webp');
/*!40000 ALTER TABLE `ministry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `party`
--

LOCK TABLES `party` WRITE;
/*!40000 ALTER TABLE `party` DISABLE KEYS */;
INSERT INTO `party` VALUES (1,'Bharatiya Janata Party','bharatiya-janata-party','1.png'),(2,'Aam Aadmi Party','aam-aadmi-party','2.png'),(3,'Indian National Congress','indian-national-congess','3.png'),(4,'All India Trinamool Congress','all-india-trinamool-congress','4.png'),(5,'Communist Party of India','comunist-party-of-india','5.png'),(6,'Samajwadi Party','samajwadi-party','6.png');
/*!40000 ALTER TABLE `party` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist_video`
--

DROP TABLE IF EXISTS `playlist_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playlist_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_video`
--

LOCK TABLES `playlist_video` WRITE;
/*!40000 ALTER TABLE `playlist_video` DISABLE KEYS */;
/*!40000 ALTER TABLE `playlist_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `ministry_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Arafat','arafatulla121@gmail.com',2147483647,'adghdga','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `transcript` text DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `house` enum('rajya-sabha','lok-sabha') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'Error neque ea sed q','Odit modi repudianda',NULL,15,'2023-07-27','Aliqua Hic pariatur, htjllg, gaojgg',''),(2,'Sint velit soluta ut','Qui et ipsum sit qu',NULL,12,'1970-01-01','Ea labore et molesti',''),(3,'Nam adipisicing volu','Ut consequatur aliqu',NULL,33,'2015-04-10','Sint iure iusto iste','lok-sabha'),(4,'Repudiandae voluptat','Doloribus fugiat cu',NULL,36,'1970-01-01','Placeat qui sit qui','lok-sabha'),(5,'Ut earum sequi tenet','Aut qui sequi cumque',NULL,29,'1970-01-01','Mollit sit cupidata',''),(6,'Ut earum sequi tenet','Aut qui sequi cumque',NULL,29,'1970-01-01','Mollit sit cupidata','rajya-sabha');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-10 18:47:32
