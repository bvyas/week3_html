-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: buddy
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `add_email` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `notfriend_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (3,'bhavik','bhavik@gmail.com','bhru',1,2),(4,'kruti','kruti@gmail.com','kru',1,6),(5,'ved','ved@gmail.com','vedu',1,3);
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notfriends`
--

DROP TABLE IF EXISTS `notfriends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notfriends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notfriends`
--

LOCK TABLES `notfriends` WRITE;
/*!40000 ALTER TABLE `notfriends` DISABLE KEYS */;
INSERT INTO `notfriends` VALUES (10,'Mario Lou Smith','mario@gmail.com','Mario'),(11,'Colin Fareel','colin@yahoo.com','Colin'),(12,'Erica Johnson','Erica@gmail.com','Erica'),(13,'Brad Pitt','Brad@gmail.com',NULL);
/*!40000 ALTER TABLE `notfriends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'salman','khan','salman@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-03-27 09:41:47','2015-03-27 09:41:47'),(2,'bhavik','bhru','bhavik@gmail.com','e19d5cd5af0378da05f63f891c7467af','2015-03-28 20:29:02','2015-03-28 20:29:02'),(3,'Riya','Riyu','riya@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-03-28 20:30:45','2015-03-28 20:30:45'),(4,'kruti','kru','kruti@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','2015-03-28 20:42:12','2015-03-28 20:42:12'),(5,'ved','vedu','ved@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','2015-03-28 20:43:53','2015-03-28 20:43:53'),(6,'anjali','nair','anjali@gmail.com','7c6a180b36896a0a8c02787eeafb0e4c','2015-03-28 20:46:40','2015-03-28 20:46:40'),(7,'jani','jan','jani@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-03-30 01:03:39','2015-03-30 01:03:39'),(8,'pari','pai','pari@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-03-30 01:05:21','2015-03-30 01:05:21'),(9,'gopi','gopi','gopi@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2015-03-30 01:06:22','2015-03-30 01:06:22'),(10,'yari','yari','yari@gmail.com','a99442d2a736365f5fe637e299b0e339','2015-03-30 01:10:14','2015-03-30 01:10:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-30  1:29:33
