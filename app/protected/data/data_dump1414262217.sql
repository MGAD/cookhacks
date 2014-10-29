-- MySQL dump 10.13  Distrib 5.5.38, for osx10.6 (i386)
--
-- Host: localhost    Database: cookhacks
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
-- Dumping data for table `tbl_articles`
--

LOCK TABLES `tbl_articles` WRITE;
/*!40000 ALTER TABLE `tbl_articles` DISABLE KEYS */;
INSERT INTO `tbl_articles` VALUES (1,'Первая статья',1,'Содержание','2014-10-27 09:34:57',0,1);
/*!40000 ALTER TABLE `tbl_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_articles_category`
--

LOCK TABLES `tbl_articles_category` WRITE;
/*!40000 ALTER TABLE `tbl_articles_category` DISABLE KEYS */;
INSERT INTO `tbl_articles_category` VALUES (1,'Общая',1,0);
/*!40000 ALTER TABLE `tbl_articles_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,'Свинина',2,1000,'грамм');
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_product_category`
--

LOCK TABLES `tbl_product_category` WRITE;
/*!40000 ALTER TABLE `tbl_product_category` DISABLE KEYS */;
INSERT INTO `tbl_product_category` VALUES (1,'Общая',1),(2,'Мясо',1),(3,'Говядина',2);
/*!40000 ALTER TABLE `tbl_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_profiles`
--

LOCK TABLES `tbl_profiles` WRITE;
/*!40000 ALTER TABLE `tbl_profiles` DISABLE KEYS */;
INSERT INTO `tbl_profiles` VALUES (1,'Admin','Administrator'),(2,'Demo','Demo');
/*!40000 ALTER TABLE `tbl_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_profiles_fields`
--

LOCK TABLES `tbl_profiles_fields` WRITE;
/*!40000 ALTER TABLE `tbl_profiles_fields` DISABLE KEYS */;
INSERT INTO `tbl_profiles_fields` VALUES (1,'lastname','Last Name','VARCHAR','50','3',1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3),(2,'firstname','First Name','VARCHAR','50','3',1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3);
/*!40000 ALTER TABLE `tbl_profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_recipe`
--

LOCK TABLES `tbl_recipe` WRITE;
/*!40000 ALTER TABLE `tbl_recipe` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_recipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_recipe_category`
--

LOCK TABLES `tbl_recipe_category` WRITE;
/*!40000 ALTER TABLE `tbl_recipe_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_recipe_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_recipe_ingridient`
--

LOCK TABLES `tbl_recipe_ingridient` WRITE;
/*!40000 ALTER TABLE `tbl_recipe_ingridient` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_recipe_ingridient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_setting`
--

LOCK TABLES `tbl_setting` WRITE;
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','mgad.project@gmail.com','9a24eff8c15a6a141ece27eb6947da0f','2014-10-25 13:15:55','2014-10-27 07:04:37',1,1),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','099f825543f7850cc038b90aaff39fac','2014-10-25 13:15:55','2014-10-27 07:02:47',0,1);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-27 18:16:45
