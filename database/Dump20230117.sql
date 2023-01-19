-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bgv
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `cand_address`
--

DROP TABLE IF EXISTS `cand_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_address` (
  `cand_address_id` int NOT NULL AUTO_INCREMENT,
  `cand_street_name` varchar(45) NOT NULL,
  `cand_address_city` varchar(45) NOT NULL,
  `cand_address_state` varchar(45) NOT NULL,
  `cand_address_pincode` int DEFAULT NULL,
  `cand_address_landmark` varchar(45) DEFAULT NULL,
  `cand_address_period_stay` varchar(45) DEFAULT NULL,
  `cand_address_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_address_id`),
  KEY `cand_email_idx` (`cand_address_email`),
  CONSTRAINT `cand_address_email` FOREIGN KEY (`cand_address_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_address`
--

LOCK TABLES `cand_address` WRITE;
/*!40000 ALTER TABLE `cand_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_education_details`
--

DROP TABLE IF EXISTS `cand_education_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_education_details` (
  `cand_education_details_id` int NOT NULL AUTO_INCREMENT,
  `cand_highschool_name` varchar(45) NOT NULL,
  `cand_highschool_id` varchar(45) NOT NULL,
  `cand_highschool_board` varchar(45) NOT NULL,
  `cand_highschool_marks` varchar(45) NOT NULL,
  `cand_highschool_address` varchar(45) NOT NULL,
  `cand_highschool_yop` date NOT NULL,
  `cand_highschool_marksheet` blob NOT NULL,
  `cand_intermediate_school_name` varchar(45) NOT NULL,
  `cand_intermediate_id` varchar(45) NOT NULL,
  `cand_intermediate_board` varchar(45) NOT NULL,
  `cand_intermediate_address` varchar(45) NOT NULL,
  `cand_intermediate_yop` date NOT NULL,
  `cand_intermediate_marks` varchar(45) NOT NULL,
  `cand_intermediate_marksheet` blob NOT NULL,
  `cand_intermediate_dept` varchar(45) NOT NULL,
  `cand_clg_name` varchar(45) NOT NULL,
  `cand_clg_address` varchar(45) NOT NULL,
  `cand_clg_id` varchar(45) NOT NULL,
  `cand_clg_yop` date NOT NULL,
  `cand_university_name` varchar(45) NOT NULL,
  `cand_clg_per_marks` varchar(45) NOT NULL,
  `cand_clg_final_marksheet` blob NOT NULL,
  `cand_pg_clg_name` varchar(45) DEFAULT NULL,
  `cand_pg_clg_id` varchar(45) DEFAULT NULL,
  `cand_pg_clg_address` varchar(45) DEFAULT NULL,
  `cand_pg_clg_yop` date DEFAULT NULL,
  `cand_pg_university_name` varchar(45) DEFAULT NULL,
  `cand_pg_clg_marks` varchar(45) DEFAULT NULL,
  `cand_pg_clg_marksheet` blob,
  `cand_education_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_education_details_id`),
  KEY `cand_education_email_idx` (`cand_education_email`),
  CONSTRAINT `cand_education_email` FOREIGN KEY (`cand_education_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_education_details`
--

LOCK TABLES `cand_education_details` WRITE;
/*!40000 ALTER TABLE `cand_education_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_education_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_id_proof`
--

DROP TABLE IF EXISTS `cand_id_proof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_id_proof` (
  `cand_id_proof_id` int NOT NULL AUTO_INCREMENT,
  `cand_pancard_number` varchar(45) NOT NULL,
  `cand_name_as_pancard` varchar(45) NOT NULL,
  `cand_pancard_photo` blob NOT NULL,
  `cand_aadhar_number` bigint NOT NULL,
  `cand_name_as_aadhar` varchar(45) NOT NULL,
  `cand_aadhar_photo_front` blob NOT NULL,
  `cand_aadhar_photo_back` blob NOT NULL,
  `cand_dl_no` varchar(20) DEFAULT NULL,
  `cand_name_as_dl` varchar(45) DEFAULT NULL,
  `cand_dl_place_issue` varchar(45) DEFAULT NULL,
  `cand_dl_date_issue` date DEFAULT NULL,
  `cand_dl_expiry_date` date DEFAULT NULL,
  `cand_dl_photo_front` blob,
  `cand_passport_no` varchar(45) DEFAULT NULL,
  `cand_name_as_passport` varchar(45) DEFAULT NULL,
  `cand_passport_date_issue` date DEFAULT NULL,
  `cand_passport_place_issue` varchar(45) DEFAULT NULL,
  `cand_passport_expiry_date` date DEFAULT NULL,
  `cand_passport_photo` blob,
  `cand_id_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_id_proof_id`),
  KEY `cand_id_email_idx` (`cand_id_email`),
  CONSTRAINT `cand_id_email` FOREIGN KEY (`cand_id_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_id_proof`
--

LOCK TABLES `cand_id_proof` WRITE;
/*!40000 ALTER TABLE `cand_id_proof` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_id_proof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_personal`
--

DROP TABLE IF EXISTS `cand_personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_personal` (
  `cand_personal_id` int NOT NULL AUTO_INCREMENT,
  `cand_personal_email` varchar(45) NOT NULL,
  `cand_name` varchar(45) NOT NULL,
  `cand_father_name` varchar(45) NOT NULL,
  `cand_blood_group` varchar(45) NOT NULL,
  `cand_phone_name` bigint NOT NULL,
  `cand_natioality` varchar(45) NOT NULL,
  `cand_address` varchar(45) NOT NULL,
  `cand_dob` date NOT NULL,
  `cand_former_name` varchar(45) DEFAULT NULL,
  `cand_name_change_date` date DEFAULT NULL,
  PRIMARY KEY (`cand_personal_id`),
  UNIQUE KEY `cand_phone_name_UNIQUE` (`cand_phone_name`),
  KEY `cand_email_idx` (`cand_personal_email`),
  CONSTRAINT `cand_email` FOREIGN KEY (`cand_personal_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_personal`
--

LOCK TABLES `cand_personal` WRITE;
/*!40000 ALTER TABLE `cand_personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_reg`
--

DROP TABLE IF EXISTS `cand_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_reg` (
  `cand_id` int NOT NULL AUTO_INCREMENT,
  `cand_name` varchar(255) NOT NULL,
  `cand_email` varchar(255) NOT NULL,
  `cand_phone` bigint NOT NULL,
  `cand_password` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_id`),
  UNIQUE KEY `cand_email_UNIQUE` (`cand_email`),
  UNIQUE KEY `cand_phone_UNIQUE` (`cand_phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_reg`
--

LOCK TABLES `cand_reg` WRITE;
/*!40000 ALTER TABLE `cand_reg` DISABLE KEYS */;
INSERT INTO `cand_reg` VALUES (2,'Kinshuk Maity','kinshukmaity54@gmail.com',9064706514,'21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `cand_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_otp`
--

DROP TABLE IF EXISTS `email_otp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_otp` (
  `email_id` varchar(45) NOT NULL,
  `otp` int NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_otp`
--

LOCK TABLES `email_otp` WRITE;
/*!40000 ALTER TABLE `email_otp` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_otp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-17 20:00:33
