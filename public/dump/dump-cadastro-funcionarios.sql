CREATE DATABASE  IF NOT EXISTS `cadastro_funcionarios` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cadastro_funcionarios`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro_funcionarios
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `dados_funcionarios`
--

DROP TABLE IF EXISTS `dados_funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dados_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `profissao` varchar(30) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `idade` varchar(30) DEFAULT NULL,
  `sexo` enum('Masculino','Feminino') DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dados_funcionarios`
--

LOCK TABLES `dados_funcionarios` WRITE;
/*!40000 ALTER TABLE `dados_funcionarios` DISABLE KEYS */;
INSERT INTO `dados_funcionarios` VALUES (1,'William','email@teste.com','Advogado','img/funcionarios/foto9110.jpeg','26','Masculino',NULL,NULL,NULL,NULL),(2,'João',NULL,'Professor de Matemática','img/funcionarios/foto6934.jpeg','33','Masculino',NULL,NULL,NULL,NULL),(3,'Rosana',NULL,'Geógrafa',NULL,NULL,'Feminino',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `dados_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone_funcionario`
--

DROP TABLE IF EXISTS `telefone_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefone_funcionario` (
  `id_celular` int(11) NOT NULL AUTO_INCREMENT,
  `celular1` varchar(30) DEFAULT NULL,
  `celular2` varchar(30) DEFAULT NULL,
  `telefone1` varchar(30) DEFAULT NULL,
  `telefone2` varchar(30) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_celular`),
  KEY `idfuncionario` (`idfuncionario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone_funcionario`
--

LOCK TABLES `telefone_funcionario` WRITE;
/*!40000 ALTER TABLE `telefone_funcionario` DISABLE KEYS */;
INSERT INTO `telefone_funcionario` VALUES (1,'98457-9647','2','3','4',1),(2,'94657-598',NULL,'94',NULL,2),(3,'95142-1023',NULL,NULL,NULL,3);
/*!40000 ALTER TABLE `telefone_funcionario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-19 21:59:30
