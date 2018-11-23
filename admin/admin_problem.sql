-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: admin
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `issue_id` int(255) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'open',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `labour_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`issue_id`),
  UNIQUE KEY `otp` (`otp`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problem`
--

LOCK TABLES `problem` WRITE;
/*!40000 ALTER TABLE `problem` DISABLE KEYS */;
INSERT INTO `problem` VALUES (1,'ELECTRICITY','','power inccorect','power inccorect in area due to rain','mp6qH','close','2018-11-20','2018-11-09','harry'),(2,'WATER','','water inccorect','water insufficent for drinking','Hmpq6','close','2018-11-20','2018-11-13','bob'),(3,'PARKING','','parking inccorect','no proper parking','H6qmp','open','2018-11-20','0000-00-00',''),(4,'ELECTRICITY','','power inccorect','jkklhghdlk','qmpH6','close','2018-11-20','2018-11-16','bob'),(5,'CLEANLINESS','','unclean roadside','unclean roadside due to improper disposal','pqH6m','open','2018-11-20','0000-00-00',''),(6,'SECURITY','',' inccorect security',' inccorect security during night','mHq6p','open','2018-11-20','0000-00-00',''),(7,'WATER','','water inccorect','drinking water problem','qp6Hm','open','2018-11-20','0000-00-00','harry'),(8,'PARKING',NULL,'issue with electricity','incorrect','mq6Hp','open','2018-11-21',NULL,'mary');
/*!40000 ALTER TABLE `problem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-23 15:20:40
