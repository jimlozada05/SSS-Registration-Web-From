-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: sss_registration
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `civil_status` varchar(10) NOT NULL,
  `tin` varchar(15) DEFAULT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `birth_place` varchar(35) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(35) NOT NULL,
  `province` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `father` varchar(200) DEFAULT NULL,
  `mother` varchar(200) DEFAULT NULL,
  `member_code` varchar(3) NOT NULL DEFAULT 'M',
  `member_type` varchar(25) NOT NULL DEFAULT 'Member',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('alexchamia@gmail.com','Mia Alexia Castillo','2002-10-24','Female','Single',NULL,'Filipino','Jehovah Witnesses','Quezon City','1','Dollar St.','Cainta','Rizal','Philippines','1800','09159760212',NULL,'Dante Castillo','Michelle Castillo','SE','Self-Employed'),('erinpotato08@gmail.com','Katherine D. Mamaradlo','2000-10-08','Female','Married',NULL,'Filipino','Born Again','Pasig, City','26','T. Bugallon St.','Marikina','Metro Manila','Philippines','1800','09995260914',NULL,'Roy E. Mamaradlo','Susan D. Mamaradlo','NWS',''),('Haniemay.yao008@gmail.com','Haniemay S. Yao','2002-02-11','Female','Single',NULL,'Filipino','Roman Catholic','Manila','312','Lakas St. Bacood','Manila','Metro Manila','Philippines','1008','09159616839',NULL,'Emiliano Yao','Mila Yao','M','Member'),('iamsherlocked@yahoo.com','Sherlock Holmes','1983-01-06','Male','Single','161471158874','British','N/A','London','221B','Baker St.','London','Greater London','United Kingdom','NW1','09523786523','N/A','Morland Holmes','May Holmes','SE','Self-Employed'),('imnotbatman@gmail.com','Bruce Wayne','1985-04-17','Male','Single','512977930610','Filipino','N/A','Quezon City','17','Detroit ','San Juan','Metro Manila','Philippines','1500','09134798567','N/A','Thomas Wayne','Martha Wayne','OFW','Overseas Filipino Worker'),('imnotsuperman@yahoo.com','Clark Kent','1977-04-18','Male','Married','482825538698','American','N/A','Smallville','3D','Clinton St.','Mandaluyong','Metro Manila','Philippines','1550','09425861098','92347456','Jonathan Kent','Martha Kent','SE','Self-Employed'),('jdc@gmail.com','Juan Dela Cruz','1990-12-01','Male','Married',NULL,'Filipino','N/A','Manila','33','Truck St.','Pasay City','Metro Manila','Philippines','1456','0978654321','98765432',NULL,NULL,'OFW','Overseas Filipino Worker'),('jim@yahoo.com','Jim','2002-04-03','Male','Single',NULL,'Filipino','Born Again','Paranaque','45','PSP St.','Tagaytay','Cavite','Philippines','3333','09123456789','12345678',NULL,NULL,'SE','Self-Employed'),('jimlozada05@gmail.com','Jim Lozada','2001-02-05','Male','Single',NULL,'Filipino','Buddhism','Pasay City','21','Lourdes St. F.B. Harrison','Pasay','Metro Manila','Philippines','1306','09093256705',NULL,NULL,'Gina R. Lozada','M','Member'),('julius_c@gmail.com','Gaius Julius Caesar Jr.','1990-07-01','Male','Married','385289153947 ','Filipino','N/A','Rome','33','Rubicon St. ','Tagaytay','Cavite','Philippines','4120','09871257623','86795143','Gaius Julius Caesar',NULL,'OFW','Overseas Filipino Worker'),('lanz.orendez@gmail.com','Lanz Orendez','2002-02-17','Male','Single',NULL,'Filipino','Jehovah Witnesses','Cainta','605B','1st Street','Cainta','Rizal','Philippines','1800','+639053797608',NULL,'Ferdinand Orendez','Marneth Orendez','M','Member'),('morendez@foodzone.ph','Marneth Orendez','1979-12-24','Female','Married','884674970689','Filipino','Jehovah Witnesses','Quezon, City','605B','1st Street','Cainta','Rizal','Philippines','1800','+639053797608',NULL,'Levi Antiado','Noemi Antiado','M','Member'),('nat_rom@gmail.com','Natasha Romanoff','1984-12-03','Female','Widowed','501621036850 ','Filipino','Roman Catholic','Paranaque','328','Russia St.','Nasugbu','Batangas','Philippines','	4231','09125762345','93456127','Alexei Romanoff','Melina Romanoff','SE','Self-Employed'),('oshei.orendez@gmail.com','Oshei Gabriel A. Orendez','2000-08-04','Male','Single',NULL,'Filipino','Jehovah Witnesses','Angono, Rizal','605B','1st Street','Cainta','Rizal','Philippines','1800','09053797608',NULL,'Ferdinand M. Orendez','Marneth A. Orendez','M','Member'),('peterjto@gmail.com','Jephthah T. Olladas','2000-05-10','Male','Single',NULL,'Filipino','Born Again','Bicol','114A','Bantayog St.','Marikina','Metro Manila','Philippines','1800','09668433185',NULL,'Wien Felipe G. Olladas','Sheril T. Olladas','OFW','Overseas Filipino Worker');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependent`
--

DROP TABLE IF EXISTS `dependent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dependent` (
  `email` varchar(50) NOT NULL,
  `dependent_name` varchar(200) NOT NULL,
  `dependent_birthdate` date NOT NULL,
  `relationship` varchar(20) NOT NULL,
  PRIMARY KEY (`email`,`dependent_name`),
  CONSTRAINT `is_dependent` FOREIGN KEY (`email`) REFERENCES `customer` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependent`
--

LOCK TABLES `dependent` WRITE;
/*!40000 ALTER TABLE `dependent` DISABLE KEYS */;
INSERT INTO `dependent` VALUES ('alexchamia@gmail.com','Misha Castillo','2002-10-24','Sister'),('erinpotato08@gmail.com','Jae Park','1992-09-15','Husband'),('Haniemay.yao008@gmail.com','Mila Yao','1958-10-27','Mother'),('iamsherlocked@yahoo.com','John Watson','1982-08-07','Partner'),('imnotbatman@gmail.com','Alfred Pennyworth','1966-08-16','Butler'),('imnotsuperman@yahoo.com','Louis Lane','1977-08-17','Wife'),('jdc@gmail.com','Juana Dela Cruz','1989-12-03','Wife'),('jim@yahoo.com','Arya','2019-04-03','Daughter'),('jimlozada05@gmail.com','Arya Shaye U. Lozada','2019-11-23','Daughter'),('julius_c@gmail.com','Gaius Caesar Augustus','2003-08-16','Nephew'),('lanz.orendez@gmail.com','Marneth Orendez','1979-12-24','Mother'),('lanz.orendez@gmail.com','Oshei Orendez','2000-08-04','Brother'),('morendez@foodzone.ph','Ferdinand Orendez','1979-03-21','Husband'),('nat_rom@gmail.com','Alexei Romanoff','1966-07-09','Father'),('nat_rom@gmail.com','Yelena Romanoff','1989-12-30','Sister'),('oshei.orendez@gmail.com','Lanz Orendez','2002-02-17','Brother'),('peterjto@gmail.com','Wien Felipe G. Olladas','1968-10-26','Father');
/*!40000 ALTER TABLE `dependent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nonworking_spouse`
--

DROP TABLE IF EXISTS `nonworking_spouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nonworking_spouse` (
  `email` varchar(50) NOT NULL,
  `spouse_sss` varchar(12) NOT NULL,
  `monthly_income` decimal(11,0) NOT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `EMAIL_NWS` FOREIGN KEY (`email`) REFERENCES `customer` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nonworking_spouse`
--

LOCK TABLES `nonworking_spouse` WRITE;
/*!40000 ALTER TABLE `nonworking_spouse` DISABLE KEYS */;
INSERT INTO `nonworking_spouse` VALUES ('imnotbatman@gmail.com','123',1000000),('jdc@gmail.com','123',300000),('julius_c@gmail.com','123',67000),('peterjto@gmail.com','123',500000);
/*!40000 ALTER TABLE `nonworking_spouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ofw`
--

DROP TABLE IF EXISTS `ofw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ofw` (
  `email` varchar(50) NOT NULL,
  `foreign_add` varchar(100) NOT NULL,
  `flexi_fund` varchar(3) NOT NULL,
  `monthly_income` decimal(11,0) NOT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `EMAIL_OFW` FOREIGN KEY (`email`) REFERENCES `customer` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofw`
--

LOCK TABLES `ofw` WRITE;
/*!40000 ALTER TABLE `ofw` DISABLE KEYS */;
INSERT INTO `ofw` VALUES ('imnotbatman@gmail.com','1007 Mountain Drive, Gotham City, Maine','No',1000000),('jdc@gmail.com','Barcelona, Spain','Yes',300000),('julius_c@gmail.com','Lisbon, Germany','Yes',67000),('peterjto@gmail.com','221B Baker St. London, United Kingdom','No',500000);
/*!40000 ALTER TABLE `ofw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `self_employed`
--

DROP TABLE IF EXISTS `self_employed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `self_employed` (
  `email` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `monthly_income` decimal(11,0) NOT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `EMAIL_SE` FOREIGN KEY (`email`) REFERENCES `customer` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `self_employed`
--

LOCK TABLES `self_employed` WRITE;
/*!40000 ALTER TABLE `self_employed` DISABLE KEYS */;
INSERT INTO `self_employed` VALUES ('alexchamia@gmail.com','Video Editor','2021-01-01',20000),('iamsherlocked@yahoo.com','Private Detective','2010-03-08',59000),('imnotsuperman@yahoo.com','Journalist','2000-04-07',35000),('jim@yahoo.com','IT Firm','2015-12-03',45000),('nat_rom@gmail.com','Grocery','2013-08-04',59000);
/*!40000 ALTER TABLE `self_employed` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-15 19:11:07
