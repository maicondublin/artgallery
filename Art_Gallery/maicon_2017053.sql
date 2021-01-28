-- MySQL dump 10.13  Distrib 5.7.28, for Win64 (x86_64)
--
-- Host: 52.215.185.140    Database: maicon_2017053
-- ------------------------------------------------------
-- Server version	5.7.26-log

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED='';

--
-- Table structure for table `art_piece`
--

DROP TABLE IF EXISTS `art_piece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `art_piece` (
  `id_art_piece` int(11) NOT NULL AUTO_INCREMENT,
  `art_piecename` varchar(90) NOT NULL,
  `type` varchar(90) NOT NULL,
  `title` varchar(90) NOT NULL,
  `idartists` int(11) NOT NULL,
  PRIMARY KEY (`id_art_piece`,`idartists`),
  KEY `fk_art_piece_artists_idx` (`idartists`),
  CONSTRAINT `fk_art_piece_artists` FOREIGN KEY (`idartists`) REFERENCES `artists` (`id_artists`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_piece`
--

LOCK TABLES `art_piece` WRITE;
/*!40000 ALTER TABLE `art_piece` DISABLE KEYS */;
INSERT INTO `art_piece` VALUES (34,'Sunset','Post-Impressionism','Sunset',1),(35,'Mestico','Social Realism','Mestico',2),(36,'Crianca Morta','Expressionism','Crianca Morta',3),(37,'Meio Ambiente','Naive Art','Meio Ambiente',4),(38,'Os Retirantes','Expressionism','Os Retirantes',5),(39,'India e Mulata','Expressionism','India e Mulata',1),(40,'Dom Quixote','Expressionism','Dom Quixote',2),(41,'Lavadeiras','Expressionism','Lavadeiras',3),(42,'War and Peace','Expressionism','War and Peace',4),(43,'The Broken Column','Surrealism','The Broken Column',5),(44,'The Wounded Deer','Naive Art','The Wounded Deer',1),(45,'Self Portrait with Thorn Necklace and Humming bird','Naive Art','Self Portrait with Thorn Necklace and Humming bird',2),(46,'Roots','Naive Art','Roots',3),(47,'The Frame','Twenty Century','The frame',4),(48,'Without Hope','Surrealism','Without Hope',5),(49,'The Bus','Social Realism','The Bus',1),(50,'The Persistence of Memory','Surrealism','The Persistence of Memory',2),(51,'The Great Masturbator','Surrealism','The Great Masturbator',3),(52,'The Burning giraffe','Surrealism','The Burning Giraffe',4),(53,'Soft Construction with Boiled Beans','Surrealism','Soft Construction with Boiled Beans',5),(54,'Geopoliticus child watching the birth of the new man','Surrealism','Geopoliticus child watching the birth of the new man',1),(55,'The Enigma of Hitler','Surrealism','The Enigma of Hitler',2),(56,'Santiago el Grande','Surrealism','Santiago el Grande',3),(57,'The Weepin Woman','Cubism','The Weepin Woman',4),(58,'Les Demoiselles D Avienon','Cubism','Les Demoiselles D Avienon',5),(59,'Ma Jolie','Cubism','Ma Jolie',1),(60,'Three Women','Cubism','Three Women',2),(61,'Les Noces de Pierrette','Blue and Rose','Les Noces de Pierrette',3),(62,'The Actor','Blue','The Actor',4),(63,'The Accordionist','Cubism','The accordionist',5),(64,'La Lecture','Blue','La Lecture',1),(65,'Three Women at The Spring','Blue','Three Women at The Spring',2),(66,'Olga in an Armchair','Neo Classical','Olga in an Armchair',3);
/*!40000 ALTER TABLE `art_piece` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artists` (
  `id_artists` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_artists`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artists`
--

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;
INSERT INTO `artists` VALUES (1,'Ben','Jamin','https://www.cct.ie','30-34 Westmoreland Street','Dublin','Ireland'),(2,'Candido','Portinari','http://www.portinari.org.br','298 candido portinari praca, brodowski','Sao Paulo','Bazil'),(3,'Frida','Kahlo','https://www.fridakahlo.org',' 247 Londres , Del Carmen,Coyoacán','Mexico city','Mexico'),(4,'Salvador','Dali','https://www.salvador-dali.org/en/',' 17488 Platja Portlligat, Cadaqués','Girona','Spain'),(5,'Pablo','Picasso','https://www.pablopicasso.org','501-869 Chemin de la Chapelle,','Mougins','France');
/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorite` (
  `user_id_user` int(11) NOT NULL,
  `art_piece_id_art_piece` int(11) NOT NULL,
  PRIMARY KEY (`user_id_user`,`art_piece_id_art_piece`),
  KEY `fk_user_has_art_piece_art_piece2_idx` (`art_piece_id_art_piece`),
  KEY `fk_user_has_art_piece_user2_idx` (`user_id_user`),
  CONSTRAINT `fk_user_has_art_piece_art_piece2` FOREIGN KEY (`art_piece_id_art_piece`) REFERENCES `art_piece` (`id_art_piece`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_art_piece_user2` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `user_id_user` int(11) NOT NULL,
  `art_piece_id_art_piece` int(11) NOT NULL,
  PRIMARY KEY (`user_id_user`,`art_piece_id_art_piece`),
  KEY `fk_user_has_art_piece_art_piece1_idx` (`art_piece_id_art_piece`),
  KEY `fk_user_has_art_piece_user1_idx` (`user_id_user`),
  CONSTRAINT `fk_user_has_art_piece_art_piece1` FOREIGN KEY (`art_piece_id_art_piece`) REFERENCES `art_piece` (`id_art_piece`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_art_piece_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'CCT','A','CCT','administrator','Dublin','cctit@gmail.com','30 - 34 westmoreland st, dublin 2','Dublin','Ireland'),(2,'Michael','CCT','MCCT','administrator','Dublin','mcct@gmail.com','30 - 34 westmoreland st, dublin 2','Dublin','Ireland'),(3,'John','WEB','JWEB','administrator','Dublin','jweb@gmail.com','30 - 34 westmoreland st, dubin 2','Dublin','Ireland'),(4,'Almicar','Gui','AGui','adiministrator','Dublin','agui@gmail.com','30 - 34 wsetmoreland st, dublin 2','Dublin','ireland'),(5,'Greg','Mobile','GMobile','administrator','Dublin','gmobile@gmail.com',' 30 - 34 westmoreland st, dublin 2','Dublin','Ireland'),(6,'Ken','Java','KJava','administrator','Dublin','kjava@gmail.com',' 30 - 34 westmoreland st, dublin 2','Dublin','Ireland'),(11,'someone','noone','someone','user','123','teste@mail.com',NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-15 16:08:22
