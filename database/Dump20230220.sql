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
-- Table structure for table `cand_curr_address`
--

DROP TABLE IF EXISTS `cand_curr_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_curr_address` (
  `cand_curr_address_id` int NOT NULL AUTO_INCREMENT,
  `cand_per_house_no` varchar(45) NOT NULL,
  `cand_curr_street_name` varchar(45) NOT NULL,
  `cand_curr_landmark` varchar(45) NOT NULL,
  `cand_curr_city` varchar(45) NOT NULL,
  `cand_curr_state` varchar(45) NOT NULL,
  `cand_curr_pincode` int NOT NULL,
  `cand_landlord_name` varchar(45) DEFAULT NULL,
  `cand_landlord_phone` bigint DEFAULT NULL,
  `cand_address_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_curr_address_id`),
  KEY `cand_email_idx` (`cand_address_email`),
  CONSTRAINT `cand_address_email` FOREIGN KEY (`cand_address_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_curr_address`
--

LOCK TABLES `cand_curr_address` WRITE;
/*!40000 ALTER TABLE `cand_curr_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_curr_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_diploma_details`
--

DROP TABLE IF EXISTS `cand_diploma_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_diploma_details` (
  `cand_diploma_id` int NOT NULL AUTO_INCREMENT,
  `cand_diploma_course_name` varchar(45) DEFAULT NULL,
  `cand_diploma_spalization` varchar(45) DEFAULT NULL,
  `cand_diploma_yos` date DEFAULT NULL,
  `cand_diploma_yoe` date DEFAULT NULL,
  `cand_diploma_clg_name` varchar(45) DEFAULT NULL,
  `cand_diploma_rollno` varchar(45) DEFAULT NULL,
  `cand_diploma_clg_addr` varchar(45) DEFAULT NULL,
  `cand_diploma_university_name` varchar(45) DEFAULT NULL,
  `cand_diploma_marks_per` varchar(45) DEFAULT NULL,
  `cand_diploma_degree` blob,
  `cand_diploma_marksheet` blob,
  `cand_diploma_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_diploma_id`),
  UNIQUE KEY `cand_diploma_email_UNIQUE` (`cand_diploma_email`),
  KEY `cand_deploma_email_idx` (`cand_diploma_email`),
  CONSTRAINT `cand_deploma_email` FOREIGN KEY (`cand_diploma_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_diploma_details`
--

LOCK TABLES `cand_diploma_details` WRITE;
/*!40000 ALTER TABLE `cand_diploma_details` DISABLE KEYS */;
INSERT INTO `cand_diploma_details` VALUES (1,'Deploma','CSE','2019-01-15','2022-01-15','Testing Baba','9064706514','Purba Medinipur','Flucent Technology','78.09%',_binary 'IMG-Deploma-Degree-63eca77d132ba3.62711627.pdf',_binary 'IMG-Deploma-Marksheet-63eca77d132c47.15923885.pdf','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_diploma_details` ENABLE KEYS */;
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
-- Table structure for table `cand_emp1`
--

DROP TABLE IF EXISTS `cand_emp1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_emp1` (
  `cand_emp1_id` int NOT NULL AUTO_INCREMENT,
  `cand_com1_name` varchar(45) NOT NULL,
  `cand_comp1_door_no` varchar(45) NOT NULL,
  `cand_comp1_city` varchar(45) NOT NULL,
  `cand_comp1_pincode` bigint NOT NULL,
  `cand_comp1_state` varchar(45) NOT NULL,
  `cand_emp1_yos` date NOT NULL,
  `cand_emp1_yoe` date DEFAULT NULL,
  `cand_emp1_code` varchar(45) NOT NULL,
  `cand_emp1_designation` varchar(45) NOT NULL,
  `cand_emp1_dept` varchar(45) NOT NULL,
  `cand_emp1_ctc` varchar(45) NOT NULL,
  `cand_emp1_sal_inhand` varchar(45) NOT NULL,
  `cand_emp1_supervisor_name` varchar(45) NOT NULL,
  `cand_emp1_supervisor_designation` varchar(45) NOT NULL,
  `cand_emp1_supervisor_email` varchar(45) NOT NULL,
  `cand_emp1_supervisor_phone` bigint NOT NULL,
  `cand_emp1_hr_name` varchar(45) NOT NULL,
  `cand_emp1_hr_designation` varchar(45) NOT NULL,
  `cand_emp1_hr_email` varchar(45) NOT NULL,
  `cand_emp1_hr_phone` varchar(45) NOT NULL,
  `cand_emp1_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_emp1_id`),
  UNIQUE KEY `cand_emp1_email_UNIQUE` (`cand_emp1_email`),
  CONSTRAINT `cand_emp1_email` FOREIGN KEY (`cand_emp1_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_emp1`
--

LOCK TABLES `cand_emp1` WRITE;
/*!40000 ALTER TABLE `cand_emp1` DISABLE KEYS */;
INSERT INTO `cand_emp1` VALUES (1,'Flucent Technology Pvt Ltd','H-161 BSI builling sector-63','Noida',201301,'UP','2019-01-16','2023-02-16','FT-123','Java Developer','IT','4.5 LPA','35,0000','Kinshuk Maity','Sr. Manager','kinshukmaity54@gmail.com',9064706514,'Kinshuk Maity','Sr. HR','kinshukmaity54@gmail.com','9064706514','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_emp1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_emp2`
--

DROP TABLE IF EXISTS `cand_emp2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_emp2` (
  `cand_emp2_id` int NOT NULL AUTO_INCREMENT,
  `cand_com1_name` varchar(45) DEFAULT NULL,
  `cand_comp2_door_no` varchar(45) DEFAULT NULL,
  `cand_comp2_city` varchar(45) DEFAULT NULL,
  `cand_comp2_pincode` bigint DEFAULT NULL,
  `cand_comp2_state` varchar(45) DEFAULT NULL,
  `cand_emp2_yos` date DEFAULT NULL,
  `cand_emp2_yoe` date DEFAULT NULL,
  `cand_emp2_code` varchar(45) DEFAULT NULL,
  `cand_emp2_designation` varchar(45) DEFAULT NULL,
  `cand_emp2_dept` varchar(45) DEFAULT NULL,
  `cand_emp2_ctc` varchar(45) DEFAULT NULL,
  `cand_emp2_sal_inhand` varchar(45) DEFAULT NULL,
  `cand_emp2_supervisor_name` varchar(45) DEFAULT NULL,
  `cand_emp2_supervisor_designation` varchar(45) DEFAULT NULL,
  `cand_emp2_supervisor_email` varchar(45) DEFAULT NULL,
  `cand_emp2_supervisor_phone` bigint DEFAULT NULL,
  `cand_emp2_hr_name` varchar(45) DEFAULT NULL,
  `cand_emp2_hr_designation` varchar(45) DEFAULT NULL,
  `cand_emp2_hr_email` varchar(45) DEFAULT NULL,
  `cand_emp2_hr_phone` varchar(45) DEFAULT NULL,
  `cand_emp2_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_emp2_id`),
  UNIQUE KEY `cand_emp2col_UNIQUE` (`cand_emp2_email`),
  CONSTRAINT `cand_emp2_email` FOREIGN KEY (`cand_emp2_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_emp2`
--

LOCK TABLES `cand_emp2` WRITE;
/*!40000 ALTER TABLE `cand_emp2` DISABLE KEYS */;
INSERT INTO `cand_emp2` VALUES (1,'Crocus Robotics Pvt Ltd','H-161 sector-63','Noida',721430,'2019-01-16','2019-01-16','2022-01-16','CR1990','Java Developer','IT','4.5 LPA','35,0000','Kinshuk Maity','Sr. Java Developer','kinshukmaity54@gmail.com',9064706514,'Sandeep k','Sr. Human Resource','kinshukmaity98@gmail.com','8001236308','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_emp2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_emp3`
--

DROP TABLE IF EXISTS `cand_emp3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_emp3` (
  `cand_emp3_id` int NOT NULL AUTO_INCREMENT,
  `cand_com3_name` varchar(45) DEFAULT NULL,
  `cand_emp3col` varchar(45) DEFAULT NULL,
  `cand_comp3_door_no` varchar(45) DEFAULT NULL,
  `cand_comp3_city` varchar(45) DEFAULT NULL,
  `cand_comp3_pincode` bigint DEFAULT NULL,
  `cand_comp3_state` varchar(45) DEFAULT NULL,
  `cand_emp3_yos` date DEFAULT NULL,
  `cand_emp3_yoe` date DEFAULT NULL,
  `cand_emp3_code` varchar(45) DEFAULT NULL,
  `cand_emp3_designation` varchar(45) DEFAULT NULL,
  `cand_emp3_dept` varchar(45) DEFAULT NULL,
  `cand_emp3_ctc` varchar(45) DEFAULT NULL,
  `cand_emp3_sal_inhand` varchar(45) DEFAULT NULL,
  `cand_emp3_supervisor_name` varchar(45) DEFAULT NULL,
  `cand_emp3_supervisor_designation` varchar(45) DEFAULT NULL,
  `cand_emp3_supervisor_email` varchar(45) DEFAULT NULL,
  `cand_emp3_supervisor_phone` bigint DEFAULT NULL,
  `cand_emp3_hr_name` varchar(45) DEFAULT NULL,
  `cand_emp3_hr_designation` varchar(45) DEFAULT NULL,
  `cand_emp3_hr_email` varchar(45) DEFAULT NULL,
  `cand_emp3_hr_phone` bigint DEFAULT NULL,
  `cand_emp3_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_emp3_id`),
  UNIQUE KEY `cand_emp3_email_UNIQUE` (`cand_emp3_email`),
  CONSTRAINT `cand_emp3_email` FOREIGN KEY (`cand_emp3_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_emp3`
--

LOCK TABLES `cand_emp3` WRITE;
/*!40000 ALTER TABLE `cand_emp3` DISABLE KEYS */;
INSERT INTO `cand_emp3` VALUES (1,'KingBomm Tech',NULL,'Krishnanagar','Khejuri',721430,'West Bengal','2020-01-16','2022-01-16','KB-1345','Java Developer','IT','4.5 LPA','35,0000','Kinshuk Maity','Sr. Java Developer','kinshukmaity54@gmail.com',9064706514,'Kinshuk Maity','Sr. Human Resource','kinshukmaity54@gmail.com',9064706514,'kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_emp3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_graduation_details`
--

DROP TABLE IF EXISTS `cand_graduation_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_graduation_details` (
  `cand_graduation_id` int NOT NULL AUTO_INCREMENT,
  `cand_graduation_course_name` varchar(45) DEFAULT NULL,
  `cand_graduation_specilization` varchar(45) DEFAULT NULL,
  `cand_graduation_clg_yos` date DEFAULT NULL,
  `cand_graduation_clg_yop` date DEFAULT NULL,
  `cand_graduation_clg_name` varchar(45) DEFAULT NULL,
  `cand_graduation_clg_id` varchar(45) DEFAULT NULL,
  `cand_graduation_clg_addr` varchar(45) DEFAULT NULL,
  `cand_graduation_uni_name` varchar(45) DEFAULT NULL,
  `cand_graduation_marks_per` varchar(45) DEFAULT NULL,
  `cand_graduation_degree` blob,
  `cand_graduation_marksheet` blob,
  `cand_graduation_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_graduation_id`),
  UNIQUE KEY `cand_graduation_email_UNIQUE` (`cand_graduation_email`),
  KEY `cand_graduation_email_idx` (`cand_graduation_email`),
  CONSTRAINT `cand_graduation_email` FOREIGN KEY (`cand_graduation_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_graduation_details`
--

LOCK TABLES `cand_graduation_details` WRITE;
/*!40000 ALTER TABLE `cand_graduation_details` DISABLE KEYS */;
INSERT INTO `cand_graduation_details` VALUES (1,'B.Tech','ECE','2015-08-15','2019-07-15','College of Engineering & Management ,Kolaghat','9064706514','Purba Medinipur','MAKUT','7.68',_binary 'IMG-G-Degree-63ec8bb4745984.75240258.pdf',_binary 'IMG-G-Marksheet-63ec8bb4745a55.00996585.pdf','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_graduation_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_highschool_details`
--

DROP TABLE IF EXISTS `cand_highschool_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_highschool_details` (
  `cand_highschool_details_id` int NOT NULL AUTO_INCREMENT,
  `cand_highschool_name` varchar(250) NOT NULL,
  `cand_highschool_rollno` varchar(250) NOT NULL,
  `cand_highschool_board_name` varchar(250) NOT NULL,
  `cand_highschool_address` varchar(250) NOT NULL,
  `cand_highschool_yop` date NOT NULL,
  `cand_highschool_marks_per` varchar(250) NOT NULL,
  `cand_highschool_marksheet` blob NOT NULL,
  `cand_highschool_email` varchar(250) NOT NULL,
  PRIMARY KEY (`cand_highschool_details_id`),
  UNIQUE KEY `cand_highschool_email_UNIQUE` (`cand_highschool_email`),
  KEY `cand_highschool_email_idx` (`cand_highschool_email`),
  CONSTRAINT `cand_highschool_email` FOREIGN KEY (`cand_highschool_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_highschool_details`
--

LOCK TABLES `cand_highschool_details` WRITE;
/*!40000 ALTER TABLE `cand_highschool_details` DISABLE KEYS */;
INSERT INTO `cand_highschool_details` VALUES (1,'Krishnanagar M.N. High School','9051073730','WBBSC','Purba Medinipur','2023-02-14','73%',_binary 'IMG-HighSchool-63eb820c324fd8.10961886.pdf','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_highschool_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_id_proof`
--

DROP TABLE IF EXISTS `cand_id_proof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_id_proof` (
  `cand_id_proof_id` int NOT NULL AUTO_INCREMENT,
  `cand_aadhar_number` bigint NOT NULL,
  `cand_name_as_aadhar` varchar(45) NOT NULL,
  `cand_aadhar_photo_front` blob NOT NULL,
  `cand_aadhar_photo_back` blob NOT NULL,
  `cand_pancard_number` varchar(45) NOT NULL,
  `cand_name_as_pancard` varchar(45) NOT NULL,
  `cand_pancard_photo` blob NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_id_proof`
--

LOCK TABLES `cand_id_proof` WRITE;
/*!40000 ALTER TABLE `cand_id_proof` DISABLE KEYS */;
INSERT INTO `cand_id_proof` VALUES (1,951551580114,'Kinshuk Maity',_binary 'IMG-Aadhar1-63e939f3e965c5.64221571.jpeg',_binary 'IMG-Aadhar2-63e939f3e96654.60562932.jpeg','DUPPM3862Q','Kinshuk Maity',_binary 'IMG-Pan-63e939f3e96674.56088284.jpg','','','',NULL,NULL,'','','',NULL,'',NULL,'','kinshukmaity54@gmail.com'),(2,951551580114,'Kinshuk Maity',_binary 'IMG-Aadhar1-63e93ab225dca5.95364094.jpeg',_binary 'IMG-Aadhar2-63e93ab225dd36.22559065.jpeg','DUPPM3862Q','Kinshuk Maity',_binary 'IMG-Pan-63e93ab225dd52.20069313.jpg','','','',NULL,NULL,'','','',NULL,'',NULL,'','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_id_proof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_intermediate_details`
--

DROP TABLE IF EXISTS `cand_intermediate_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_intermediate_details` (
  `cand_inter_id` int NOT NULL AUTO_INCREMENT,
  `cand_inter_school_name` varchar(45) DEFAULT NULL,
  `cand_inter_school_rollno` varchar(45) DEFAULT NULL,
  `cand_inter_board_name` varchar(45) DEFAULT NULL,
  `cand_inter_school_addres` varchar(45) DEFAULT NULL,
  `cand_inter_school_yop` varchar(45) DEFAULT NULL,
  `cand_intermediate_marks_per` varchar(45) DEFAULT NULL,
  `cand_intermediate_marksheet` blob,
  `cand_intermediate_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_inter_id`),
  UNIQUE KEY `cand_intermediate_email_UNIQUE` (`cand_intermediate_email`),
  KEY `cand_intermediate_email_idx` (`cand_intermediate_email`),
  CONSTRAINT `cand_intermediate_email` FOREIGN KEY (`cand_intermediate_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_intermediate_details`
--

LOCK TABLES `cand_intermediate_details` WRITE;
/*!40000 ALTER TABLE `cand_intermediate_details` DISABLE KEYS */;
INSERT INTO `cand_intermediate_details` VALUES (1,'krishnanagar','9064706514','WBHSE','Purba Medinipur','2023-02-14','80%',_binary 'IMG-HighSchool-63eb8b7e243505.88954185.pdf','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_intermediate_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_other_details`
--

DROP TABLE IF EXISTS `cand_other_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_other_details` (
  `cand_other_details_id` int NOT NULL AUTO_INCREMENT,
  `cand_other_criminal_offense` varchar(10) NOT NULL,
  `cand_other_details_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_other_details_id`),
  UNIQUE KEY `cand_other_details_emailid_UNIQUE` (`cand_other_details_email`),
  CONSTRAINT `cand_other_details_email` FOREIGN KEY (`cand_other_details_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_other_details`
--

LOCK TABLES `cand_other_details` WRITE;
/*!40000 ALTER TABLE `cand_other_details` DISABLE KEYS */;
INSERT INTO `cand_other_details` VALUES (1,'yes','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_other_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_per_address`
--

DROP TABLE IF EXISTS `cand_per_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_per_address` (
  `cand_per_address_id` int NOT NULL AUTO_INCREMENT,
  `cand_per_house_no` varchar(45) NOT NULL,
  `cand_per_street` varchar(45) NOT NULL,
  `cand_per_landmark` varchar(45) NOT NULL,
  `cand_per_city` varchar(45) NOT NULL,
  `cand_per_state` varchar(45) NOT NULL,
  `cand_per_pincode` int NOT NULL,
  `cand_per_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_per_address_id`),
  KEY `cand_per_email_idx` (`cand_per_email`),
  CONSTRAINT `cand_per_email` FOREIGN KEY (`cand_per_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_per_address`
--

LOCK TABLES `cand_per_address` WRITE;
/*!40000 ALTER TABLE `cand_per_address` DISABLE KEYS */;
INSERT INTO `cand_per_address` VALUES (1,'cdgbvfdg','dfgdsfg','fdsgfgsdfg','fdgsdfg','Uttrakhand',3412413,'kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_per_address` ENABLE KEYS */;
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
  `cand_dob` date NOT NULL,
  `cand_former_name` varchar(45) DEFAULT NULL,
  `cand_name_change_date` date DEFAULT NULL,
  PRIMARY KEY (`cand_personal_id`),
  UNIQUE KEY `cand_phone_name_UNIQUE` (`cand_phone_name`),
  KEY `cand_email_idx` (`cand_personal_email`),
  CONSTRAINT `cand_email` FOREIGN KEY (`cand_personal_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_personal`
--

LOCK TABLES `cand_personal` WRITE;
/*!40000 ALTER TABLE `cand_personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `cand_personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_personal_ref`
--

DROP TABLE IF EXISTS `cand_personal_ref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_personal_ref` (
  `cand_personal_ref_id` int NOT NULL AUTO_INCREMENT,
  `cand_personal_ref_name_1` varchar(45) NOT NULL,
  `cand_personal_ref_phone_1` bigint NOT NULL,
  `cand_personal_ref_email_1` varchar(45) NOT NULL,
  `cand_personal_ref_adress_1` varchar(45) NOT NULL,
  `cand_personal_ref_relation_1` varchar(45) NOT NULL,
  `cand_personal_ref_name_2` varchar(45) DEFAULT NULL,
  `cand_personal_ref_phone_2` bigint DEFAULT NULL,
  `cand_personal_ref_email_2` varchar(45) DEFAULT NULL,
  `cand_personal_ref_address_2` varchar(45) DEFAULT NULL,
  `cand_personal_relation_2` varchar(45) DEFAULT NULL,
  `cand_personal_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_personal_ref_id`),
  KEY `cand_personal_email_idx` (`cand_personal_email`),
  CONSTRAINT `cand_personal_email` FOREIGN KEY (`cand_personal_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_personal_ref`
--

LOCK TABLES `cand_personal_ref` WRITE;
/*!40000 ALTER TABLE `cand_personal_ref` DISABLE KEYS */;
INSERT INTO `cand_personal_ref` VALUES (1,'Kinshuk Maity',9064706514,'kinshukmaity54@gmail.com','Purba Medinipur','Friend','Kinshuk Maity',9064706514,'kinshukmaity54@gmail.com','Purba Medinipur','friend','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_personal_ref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_postgraduate_details`
--

DROP TABLE IF EXISTS `cand_postgraduate_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_postgraduate_details` (
  `cand_postgraduate_id` int NOT NULL AUTO_INCREMENT,
  `cand_pg_course_name` varchar(45) DEFAULT NULL,
  `cand_pg_specilization` varchar(45) DEFAULT NULL,
  `cand_pg_yos` date DEFAULT NULL,
  `cand_pg_yop` date DEFAULT NULL,
  `cand_pg_clg_name` varchar(45) DEFAULT NULL,
  `cand_pg_clg_enrollment` varchar(45) DEFAULT NULL,
  `cand_pg_clg_address` varchar(45) DEFAULT NULL,
  `cand_pg_clg_unv_name` varchar(45) DEFAULT NULL,
  `cand_pg_marks_per` varchar(45) DEFAULT NULL,
  `cand_pg_degree` blob,
  `cand_pg_marksheet` blob,
  `cand_pg_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_postgraduate_id`),
  UNIQUE KEY `cand_pg_email_UNIQUE` (`cand_pg_email`),
  KEY `cand_pg_email_idx` (`cand_pg_email`),
  CONSTRAINT `cand_pg_email` FOREIGN KEY (`cand_pg_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_postgraduate_details`
--

LOCK TABLES `cand_postgraduate_details` WRITE;
/*!40000 ALTER TABLE `cand_postgraduate_details` DISABLE KEYS */;
INSERT INTO `cand_postgraduate_details` VALUES (4,'M.Tech','CSE','2020-01-15','2021-01-15','College of Engineering & Management ,Kolaghat','951551580114','Purba Medinipur','70.56%','70.56%',_binary 'IMG-PG-Degree-63ec97a25e28f7.51331243.pdf',_binary 'IMG-PG-Marksheet-63ec97a25e2993.85012793.pdf','kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_postgraduate_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cand_professional_ref`
--

DROP TABLE IF EXISTS `cand_professional_ref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cand_professional_ref` (
  `cand_professional_ref_id` int NOT NULL AUTO_INCREMENT,
  `cand_professional_ref_name_1` varchar(45) NOT NULL,
  `cand_professional_ref_com_name_1` varchar(45) NOT NULL,
  `cand_professional_ref_com_addr_1` varchar(45) NOT NULL,
  `cand_professional_ref_des_1` varchar(45) NOT NULL,
  `cand_professional_ref_email_1` varchar(45) NOT NULL,
  `cand_professional_ref_phone_1` bigint NOT NULL,
  `cand_professional_ref_name_2` varchar(45) NOT NULL,
  `cand_professional_ref_com_name_2` varchar(45) NOT NULL,
  `cand_professional_ref_com_addr_2` varchar(45) NOT NULL,
  `cand_professional_ref_des_2` varchar(45) NOT NULL,
  `cand_professional_ref_email_2` varchar(45) NOT NULL,
  `cand_professional_ref_phone_2` bigint NOT NULL,
  `cand_professional_ref_name_3` varchar(45) DEFAULT NULL,
  `cand_professional_ref_com_name_3` varchar(45) DEFAULT NULL,
  `cand_professional_ref_com_addr_3` varchar(45) DEFAULT NULL,
  `cand_professional_ref_des_3` varchar(45) DEFAULT NULL,
  `cand_professional_ref_email_3` varchar(45) DEFAULT NULL,
  `cand_professional_ref_phone_3` bigint DEFAULT NULL,
  `cand_professional_email` varchar(45) NOT NULL,
  PRIMARY KEY (`cand_professional_ref_id`),
  KEY `cand_professional_email_idx` (`cand_professional_email`),
  CONSTRAINT `cand_professional_email` FOREIGN KEY (`cand_professional_email`) REFERENCES `cand_reg` (`cand_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_professional_ref`
--

LOCK TABLES `cand_professional_ref` WRITE;
/*!40000 ALTER TABLE `cand_professional_ref` DISABLE KEYS */;
INSERT INTO `cand_professional_ref` VALUES (1,'Kinshuk Maity','KingBomm Tech','Purba Medinipur','SE3','kinshukmaity54@gmail.com',9064706514,'Kinshuk Maity','KingBomm Tech','Purba Medinipur','SE2','kinshukmaity54@gmail.com',9064706514,'Kinshuk Maity','KingBomm Tech','Purba Medinipur','SE2','kinshukmaity54@gmail.com',9064706514,'kinshukmaity54@gmail.com');
/*!40000 ALTER TABLE `cand_professional_ref` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cand_reg`
--

LOCK TABLES `cand_reg` WRITE;
/*!40000 ALTER TABLE `cand_reg` DISABLE KEYS */;
INSERT INTO `cand_reg` VALUES (2,'Kinshuk Maity','kinshukmaity54@gmail.com',9064706514,'21232f297a57a5a743894a0e4a801fc3'),(3,'rashi','rashmiv309@gmail.com',9990567875,'21232f297a57a5a743894a0e4a801fc3'),(4,'Kinshuk Maity','kinshukmaity555@gmail.com',1234567891,'21232f297a57a5a743894a0e4a801fc3');
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

-- Dump completed on 2023-02-20 18:59:16
