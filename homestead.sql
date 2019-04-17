-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `canal_t_v_plan_pivot`
--

DROP TABLE IF EXISTS `canal_t_v_plan_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canal_t_v_plan_pivot` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `canal_id` bigint(20) unsigned NOT NULL,
  `t_v_plan_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canal_t_v_plan_pivot`
--

LOCK TABLES `canal_t_v_plan_pivot` WRITE;
/*!40000 ALTER TABLE `canal_t_v_plan_pivot` DISABLE KEYS */;
/*!40000 ALTER TABLE `canal_t_v_plan_pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canals`
--

DROP TABLE IF EXISTS `canals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canals`
--

LOCK TABLES `canals` WRITE;
/*!40000 ALTER TABLE `canals` DISABLE KEYS */;
INSERT INTO `canals` VALUES (1,'Ecuavisa','2','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(2,'Teleamazonas','4','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(3,'RTS','5','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(4,'Oromar Tv','6','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(5,'Ecuador Tv','7','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(6,'Gamavisión','8','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(7,'TC Televisión','10','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(8,'Televicentro','11','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(9,'Canal Uno','12','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(10,'Teleciudadana','334','SD','Nacional','2019-04-01 06:49:51','2019-04-01 06:49:51'),(11,'Discovery Kids','50','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(12,'Nat Geo Kids','51','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(13,'Nickelodeon','52','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(14,'Cartoon Network','53','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(15,'Disney Channel','54','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(16,'Disney XD','55','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(17,'Boomerang','56','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(18,'Disney Junior','58','SD','Infantil','2019-04-01 06:49:51','2019-04-01 06:49:51'),(19,'ID Investigación Discovery','100','SD','peliculas','2019-04-01 06:49:51','2019-04-01 06:49:51'),(20,'Canal FOX','101','SD','peliculas','2019-04-01 06:49:51','2019-04-01 06:49:51'),(21,'Universal','102','SD','peliculas','2019-04-01 06:49:51','2019-04-01 06:49:51'),(22,'Space','103','SD','peliculas','2019-04-01 06:49:51','2019-04-01 06:49:51'),(23,'Studio Universal','104','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(24,'FX','105','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(25,'TCM','106','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(26,'Warner Channel','110','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(27,'SONY Entertainment Tv','111','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(28,'AXN','112','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(29,'E! Entertainment Television','113','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(30,'A&E','115','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(31,'TNT Series','116','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(32,'FOX Life','117','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(33,'Discovery Home and Health','148','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(34,'Travel & Living Channel','149','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(35,'Canal de las Estrellas','151','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(36,'El Gourmet','154','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(37,'Telemundo','157','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(38,'Life Time','159','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(39,'Telenovelas','250','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(40,'CNT Sports','3','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(41,'FOX Sports','300','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(42,'FOX Sports 2','301','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(43,'ESPN','302','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(44,'ESPN 2','303','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(45,'FOX Sports 3','304','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(46,'Canela TV','305','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(47,'Discovery Channel','350','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(48,'Animal Planet','353','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(49,'National Geographic','354','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(50,'The History Channel','361','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(51,'History 2','362','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(52,'CNN en Español','363','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(53,'NatGeo Wild','400','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(54,'MTV','450','SD','musica','2019-04-01 06:49:52','2019-04-01 06:49:52'),(55,'HTV','451','SD','musica','2019-04-01 06:49:52','2019-04-01 06:49:52'),(56,'Paramount','499','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(57,'TNT','500','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(58,'Golden','501','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(59,'FX Movies','502','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(60,'CineCanal','503','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(61,'De Película','504','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(62,'AMC','505','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(63,'Cinemax','515','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(64,'CNT Sports','700','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(65,'Rusia Today','778','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(66,'Pop Classics','900','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(67,'Tango','901','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(68,'The Chill Lounge','902','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(69,'Romance Latino','903','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(70,'Latino Tropical','904','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(71,'Poolside','905','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(72,'Flashbacj 70´s','906','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(73,'Y2K','907','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(74,'Rock en Español','908','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(75,'Reggaeton','909','Audio','Audio','2019-04-01 06:49:52','2019-04-01 06:49:52'),(76,'CNT Sports HD','700','HD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(77,'FOX Sports HD','701','HD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(78,'FOX Sports 2','702','HD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(79,'ESPN HD','703','HD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(80,'ESPN +','704','HD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(81,'Discovery Kids','705','HD','infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(82,'Discovery HD','710','HD','Documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(83,'Discovery World HD','711','HD','Documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(84,'DiscoveryTheater','712','HD','Documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(85,'Nat Geo Wild HD','713','HD','Documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(86,'History Channel HD','714','HD','Documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(87,'Investigation DIscovery','720','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(88,'FOX HD','721','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(89,'Universal Channel HD','722','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(90,'Space HD','723','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(91,'Warner','724','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(92,'SONY','725','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(93,'AXN','726','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(94,'A&E','727','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(95,'TNT Series HD','728','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(96,'ATRESERIES','729','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(97,'FX','730','HD','Entretenimiento','2019-04-01 06:49:52','2019-04-01 06:49:52'),(98,'TNT HD','740','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(99,'Golden HD','741','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(100,'Cinecanal HD','742','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(101,'Cinemax HD','743','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(102,'DHE HD','744','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(103,'AMC HD','745','HD','CINE','2019-04-01 06:49:52','2019-04-01 06:49:52'),(104,'Discovery H&H','760','HD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(105,'Hola TV HD','761','HD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(106,'Stingray Concert HD','770','HD','Musica','2019-04-01 06:49:52','2019-04-01 06:49:52'),(107,'Ecuavisa','2','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(108,'Teleamazonas','4','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(109,'RTS','5','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(110,'Ecuador Tv','7','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(111,'Gamavisión','8','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(112,'TC','10','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(113,'Televicentro','11','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(114,'UNO','12','SD','Nacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(115,'Discovery Kids','50','SD','infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(116,'Cartoon Network','53','SD','infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(117,'Disney Channel','54','SD','infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(118,'ID - Investigation Discovery','100','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(119,'Fox','101','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(120,'Space','103','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(121,'FX','105','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(122,'Warner Channel','110','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(123,'Canal Sony','111','SD','peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(124,'Discovery H&H','148','SD','variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(125,'CNT sport','300','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(126,'Fox Sport','301','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(127,'ESPN','302','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(128,'FOX 2','304','SD','deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(129,'Discovery Channel','350','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(130,'Animal Planet','353','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(131,'National Geographic','354','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(132,'History Channel','361','SD','documental','2019-04-01 06:49:52','2019-04-01 06:49:52'),(133,'CNN Español','400','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(134,'CNN Internacional','402','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(135,'TNT','500','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(136,'Cinemax','515','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(137,'Nick Junior','57','SD','Infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(138,'Tooncast','59','SD','Infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(139,'Baby Tv','60','SD','Infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(140,'Clan','61','SD','Infantil','2019-04-01 06:49:52','2019-04-01 06:49:52'),(141,'Ci SAT','107','SD','Peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(142,'Syfy','108','SD','Peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(143,'TBS','109','SD','Peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(144,'Telefe','110','SD','Peliculas','2019-04-01 06:49:52','2019-04-01 06:49:52'),(145,'Comedy Central','155','SD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(146,'GLITZ','156','SD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(147,'MasChic','158','SD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(148,'Inti','160','SD','Variado','2019-04-01 06:49:52','2019-04-01 06:49:52'),(149,'ESPN 3','306','SD','Deportes','2019-04-01 06:49:52','2019-04-01 06:49:52'),(150,'Discovery science','356','SD','Documentales','2019-04-01 06:49:52','2019-04-01 06:49:52'),(151,'Film&Arts','357','SD','Documentales','2019-04-01 06:49:52','2019-04-01 06:49:52'),(152,'Discovery Civilization','358','SD','Documentales','2019-04-01 06:49:52','2019-04-01 06:49:52'),(153,'Discovery Turbo','359','SD','Documentales','2019-04-01 06:49:52','2019-04-01 06:49:52'),(154,'Tru Tv','360','SD','Documentales','2019-04-01 06:49:52','2019-04-01 06:49:52'),(155,'CNN Internacional','402','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(156,'BBC world news','404','SD','Noticias','2019-04-01 06:49:52','2019-04-01 06:49:52'),(157,'Eurochannel','497','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(158,'Golden Edge','498','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(159,'Europa','506','SD','cine','2019-04-01 06:49:52','2019-04-01 06:49:52'),(160,'TVE','552','SD','Internacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(161,'Antena 3','554','SD','Internacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(162,'El trece','55','SD','Internacional','2019-04-01 06:49:52','2019-04-01 06:49:52'),(163,'EWTN','600','SD','Religioso','2019-04-01 06:49:52','2019-04-01 06:49:52'),(164,'Enlace','601','SD','Empresarial','2019-04-01 06:49:53','2019-04-01 06:49:53'),(165,'WOBI','610','SD','Empresarial','2019-04-01 06:49:53','2019-04-01 06:49:53'),(166,'Fox Movies','507','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(167,'Fox Series','508','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(168,'Fox Series Oeste','509','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(169,'Fox Action','510','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(170,'Fox Family','511','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(171,'Fox Comedy','512','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(172,'Fox Cinema','513','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(173,'Fox Classics','514','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(174,'Fox Series','780','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(175,'HBO','516','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(176,'HBO 2','517','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(177,'HBO plus','518','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(178,'HBO Family','520','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(179,'HBO Signature','521','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(180,'Max','522','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(181,'Max Prime','523','SD','Entretenimiento','2019-04-01 06:49:53','2019-04-01 06:49:53'),(182,'Playboy','850','SD','Adulto','2019-04-01 06:49:53','2019-04-01 06:49:53'),(183,'Venus','851','SD','Adulto','2019-04-01 06:49:53','2019-04-01 06:49:53'),(184,'Sextreme','852','SD','Adulto','2019-04-01 06:49:53','2019-04-01 06:49:53');
/*!40000 ALTER TABLE `canals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internet_fijos`
--

DROP TABLE IF EXISTS `internet_fijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internet_fijos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internet_fijos`
--

LOCK TABLES `internet_fijos` WRITE;
/*!40000 ALTER TABLE `internet_fijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `internet_fijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (270,'2014_10_12_000000_create_users_table',1),(271,'2014_10_12_100000_create_password_resets_table',1),(272,'2019_03_30_190056_create_terminals_table',1),(273,'2019_03_30_204747_create_mobile_prices_table',1),(274,'2019_03_30_205712_create_mobile_pospago_plan_mobile_price_pivot_table',1),(275,'2019_03_30_205940_create_plan_movil_pospagos_table',1),(276,'2019_03_30_212132_create_canals_table',1),(277,'2019_03_30_212256_create_plan_movil_prepagos_table',1),(278,'2019_03_30_213305_create_t_v_plans_table',1),(279,'2019_03_30_213932_create_plan_telefonia_fijas_table',1),(280,'2019_03_30_214703_create_canal_t_v_plan_pivot_table',1),(281,'2019_03_30_214824_create_telefonia_fija_plans_table',1),(282,'2019_03_30_215457_create_internet_fijos_table',1),(283,'2019_03_30_223006_create_tarifas_internet_fijos_table',1),(284,'2019_03_31_161646_create_promos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobile_pospago_plan_mobile_price_pivot`
--

DROP TABLE IF EXISTS `mobile_pospago_plan_mobile_price_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobile_pospago_plan_mobile_price_pivot` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_pospago_plan_id` bigint(20) unsigned NOT NULL,
  `mobile_price_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_pospago_plan_mobile_price_pivot`
--

LOCK TABLES `mobile_pospago_plan_mobile_price_pivot` WRITE;
/*!40000 ALTER TABLE `mobile_pospago_plan_mobile_price_pivot` DISABLE KEYS */;
INSERT INTO `mobile_pospago_plan_mobile_price_pivot` VALUES (1,1,1,NULL,NULL),(2,1,2,NULL,NULL),(3,1,3,NULL,NULL),(4,1,4,NULL,NULL),(5,1,5,NULL,NULL),(6,1,6,NULL,NULL),(7,1,7,NULL,NULL),(8,2,8,NULL,NULL),(9,2,9,NULL,NULL),(10,2,10,NULL,NULL),(11,2,11,NULL,NULL),(12,2,12,NULL,NULL),(13,2,13,NULL,NULL),(14,2,14,NULL,NULL);
/*!40000 ALTER TABLE `mobile_pospago_plan_mobile_price_pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobile_prices`
--

DROP TABLE IF EXISTS `mobile_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobile_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(5,2) NOT NULL,
  `gigs` double(3,1) NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deezer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free_minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_prices`
--

LOCK TABLES `mobile_prices` WRITE;
/*!40000 ALTER TABLE `mobile_prices` DISABLE KEYS */;
INSERT INTO `mobile_prices` VALUES (1,'Plan Móvil Gigas',12.99,1.2,'LIBRE','500 MB','LIBRE*','N/A','N/A','N/A','25','2019-04-01 06:49:51','2019-04-01 06:49:51'),(2,'Plan Móvil Gigas',15.99,2.0,'LIBRE','500 MB','LIBRE*','N/A','N/A','N/A','50','2019-04-01 06:49:51','2019-04-01 06:49:51'),(3,'Plan Móvil Gigas',19.99,2.5,'LIBRE','500 MB','LIBRE','N/A','Suscripción 6 meses','N/A','70','2019-04-01 06:49:51','2019-04-01 06:49:51'),(4,'Plan Móvil Gigas',24.99,3.0,'LIBRE*','LIBRE*','LIBRE','N/A','Suscripción 6 meses','N/A','100','2019-04-01 06:49:51','2019-04-01 06:49:51'),(5,'Plan Móvil Gigas',31.99,4.0,'LIBRE*','LIBRE*','LIBRE','LIBRE','Suscripción 6 meses','N/A','120','2019-04-01 06:49:51','2019-04-01 06:49:51'),(6,'Plan Móvil Gigas',44.99,5.0,'LIBRE*','LIBRE*','LIBRE','LIBRE','Suscripción 6 meses','N/A','500','2019-04-01 06:49:51','2019-04-01 06:49:51'),(7,'Plan Móvil Gigas',99.99,15.0,'LIBRE*','LIBRE*','LIBRE','LIBRE','Suscripción 12 meses','N/A','500','2019-04-01 06:49:51','2019-04-01 06:49:51'),(8,'Plan CNT Plus',12.99,1.2,'LIBRE','500 MB','N/A','N/A','N/A','N/A','25','2019-04-01 06:49:51','2019-04-01 06:49:51'),(9,'Plan CNT Plus',15.99,2.0,'LIBRE','500 MB','N/A','N/A','N/A','N/A','50','2019-04-01 06:49:51','2019-04-01 06:49:51'),(10,'Plan CNT Plus',19.99,2.5,'LIBRE','1000 MB','N/A','N/A','N/A','N/A','70','2019-04-01 06:49:51','2019-04-01 06:49:51'),(11,'Plan CNT Plus',24.99,4.0,'LIBRE*','LIBRE*','N/A','N/A','N/A','N/A','100','2019-04-01 06:49:51','2019-04-01 06:49:51'),(12,'Plan CNT Plus',31.99,4.5,'LIBRE*','LIBRE*','N/A','N/A','N/A','N/A','120','2019-04-01 06:49:51','2019-04-01 06:49:51'),(13,'Plan CNT Plus',44.99,5.0,'LIBRE*','LIBRE*','N/A','N/A','N/A','N/A','Ilimitado*','2019-04-01 06:49:51','2019-04-01 06:49:51'),(14,'Plan CNT Plus',99.99,20.0,'LIBRE*','LIBRE*','N/A','N/A','N/A','N/A','Ilimitado*','2019-04-01 06:49:51','2019-04-01 06:49:51'),(15,'Plan Minutos Ilimitados',19.99,1.0,'LIBRE*','150 MB / mes','N/A','N/A','N/A','200 minutos a todas las operadoras','N/A','2019-04-01 06:49:51','2019-04-01 06:49:51'),(16,'Plan Minutos Ilimitados',24.99,1.5,'LIBRE','150 MB / mes','N/A','N/A','N/A','Minutos ilimitados a todas las operadoras','N/A','2019-04-01 06:49:51','2019-04-01 06:49:51'),(17,'Plan Minutos Ilimitados',31.99,2.0,'LIBRE','150 MB / mes','N/A','N/A','N/A','Minutos ilimitados a todas las operadoras','N/A','2019-04-01 06:49:51','2019-04-01 06:49:51');
/*!40000 ALTER TABLE `mobile_prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_movil_pospagos`
--

DROP TABLE IF EXISTS `plan_movil_pospagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_movil_pospagos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_movil_pospagos`
--

LOCK TABLES `plan_movil_pospagos` WRITE;
/*!40000 ALTER TABLE `plan_movil_pospagos` DISABLE KEYS */;
INSERT INTO `plan_movil_pospagos` VALUES (1,'        \nPlan Móvil Gigas','Ahora tu nuevo plan pospago móvil te trae los mejores beneficios para que nunca pares de compartir ','    Más megas para navegar en tus planes móviles\n    Bonos de portabilidad\n    Facebook y Whatsapp libres en planes desde $24.99\n    Llamadas ilimitadas a todas las operadoras en planes de $44.99',' Una vez activada la línea, el usuario contará con un paquete de datos durante la permanencia del contrato, la cantidad de megas dependerá del CBM contratado.• De acuerdo al CBM contratado de $12,99 a $99,99, incluye una bolsa de minutos incluidos para llamar gratis ($0 costo) a todas las operadoras fijas y móviles a nivel nacional. Los minutos gratis de acuerdo al CBM contratado se detallan en la tabla siguiente. Una vez terminados los minutos incluidos, la tarifa onnet es de $0,04 + imp a números fijos y móviles de CNT y la tarifa off net es de $0,12 + imp para planes de $12,99 a $99,99.• Los minutos incluidos así como los paquetes de megas no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan.• Modalidad: Pospago controlados.• No cuenta con SMS de texto sin embargo puede enviar sms bajo demanda o contratar un paquete adicional• No aplica fondo de equipos a excepcion del plan de $99,99 que cuenta con 3CBMS .• Una vez consumido el paquete de datos, el MB adicional tendrá una tarifa de $0,0214+ imp. que se descontará del saldo disponible.• Se podrá activar paquetes de SMS onnet, offnet e Internacional, paquetes de VOZ y paquetes de MB adicionales.•Los minutos gratis aplica para llamadas hacia números móviles y fijos onnet y offnet. Las llamadas a números 1700 Y numeros especiales no se incluyen dentro de los minutos incluidos, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz. No aplica para llamadas internacionales.• Aplica para portabilidad, nuevos clientes, cambios de plan a un CBM superior, upgrade entre los mismos planes.\nPolítica de buen uso del Servicio Móvil Avanzado de CNT EP.\n\nFACEBOOK, WHATSAPP, INSTAGRAM Y TWITTER LIBRES\n\nLa navegación libre en Whatsapp es hasta 2.5GB, una vez superada la cuota el cliente podrá seguir navegando en la aplicación desde las megas disponibles en el plan o saldo disponible. Aplica para los planes desde el de $12,99 al de $99,99.\n\n•Bono de 500 megas para Facebook aplica en planes de $12,99 y $15,99 , donde el cliente puede escoger dicho bono o a su vez podrá escoger Instagram Libre, los bonos de Facebook o Instagram en estos planes no conviven. Para el plan de $19,99 el cliente recibirá automáticamente el bono de 500 megas para Facebook e Instagram libre.\n\n• La navegación libre en Instagram es hasta 5 GB, una vez superada la cuota el cliente podrá seguir navegando en la aplicación desde las megas disponibles en el plan o saldo disponible. Aplica en planes desde $12,99 en adelante. En los planes de $12,99 y $15,99 el cliente escoja el bono de Instagram o el bono de 500 megas para Facebook. En los planes desde $19,99 recibe automáticamente el bono.\n\n• La navegación libre en Twitter es hasta 2.5 GB, una vez superada la cuota el cliente podrá seguir navegando en la aplicación desde las megas disponibles en el plan o saldo disponible. Aplica en planes desde $31,99 en adelante.\n\n• Las gigas incluidas no aplican rollover ni prorrateo.\n\n• Las redes sociales no se consumen de las megas del plan y son libres hasta 5GB de acuerdo la aplicación; el uso de las aplicaciones son libres en las siguientes actividades: Recepción de notificaciones, actualización y visualización de perfiles, visualizar, subir, compartir fotos, estados, mensajería instantánea (chat), mensajes de voz, envío/recepción de fotografías, descarga de fotografías, visualización de información de contactos (fotos y estados), texto y multimedia (iconografía).\n\n• La utilización en las aplicaciones Facebook, Whatsapp, Intagram y Twitter en funcionalidades diferentes a las antes especificadas serán descontadas de la cuota de datos disponible en el plan o en navegación por demanda.\n\n• Una vez finalizada la cuota de MB del plan principal, el cliente podrá seguir haciendo uso del beneficio de Facebook y Whatsapp con las características ya descritas.\n\n• La cantidad de gigas en cada una de las aplicaciones es para uso excesivo en la aplicación\n\n• No aplica para pasa megas\n\n• La cantidad de gigas en cada una de las aplicaciones es para uso excesivo en la aplicación\n\n• El uso de las aplicaciones es de uso personal, en caso de incumplimiento por parte del cliente en uso inadecuado de las aplicaciones, CNT está facultado para suspender el servicio.\n\nAplica desde el 24 de octubre 2018 hasta el 32 de enero 2019.\n\n \n\n \n\nSUSCRIPCIÓN PREMIUM Y NAVEGACIÓN LIBRE EN DEEZER\n\nLa promoción Deezer consiste en la gratuidad al cliente de la licencia PREMIUM y de la NAVEGACIÓN por un periodo determinado de tiempo, de la aplicación de música por streaming Deezer.\n\nEsta promoción de deezer premium tiene una duración de 6 meses calendario para los planes de $19.99 , $24.99, $31.99 y $44.99 A partir del 7mo (séptimo) mes el cliente deberá cancelar un valor adicional de $4,99 más impuestos, si decide mantener la suscripción Premium de Deezer.\n\nPara los planes $19.99, $24.99, $31.99 y $44.99 la navegación por 6 meses en la aplicación Deezer será con una bolsa de 1024 megas mensuales, a partir del séptimo mes se descontará de los megas del plan.\n\nPara el plan $99,99 la suscripción gratuita Premium a Deezer es de 12 meses calendario, a partir del 13 (décimo tercer) mes el cliente deberá cancelar un valor adicional de $4,99 más impuestos, si decide mantener la suscripción Premium de Deezer.\n\nPara el plan de $99,99 la navegación en la aplicación Deezer tendrá una bolsa de 1024 megas, a partir del 13(décimo tercer) mes se descontará de los megas del plan.\n\nUna vez activado el plan, el cliente recibirá un correo electrónico con su usuario y contraseña, las mismas que deberá ingresar en la aplicación Deezer y desde ese momento podrá acceder al beneficio que le ofrece Deezer Premium y navegación en la aplicación.\n\nLos planes de $12,99 y $15,99 no poseen suscripción ni navegación gratuita Premium a Deezer.\n\nLa suscripción y navegación Premium de Deezer es gratuita para los nuevos clientes que contraten los planes antes mencionados.\n\nLa promoción Deezer también aplica para clientes antiguos que realicen un upgrade de sus planes al nuevo plan móvil gigas.\n\nLa activación de la promoción debe ser realizada máximo hasta 3 meses después de la activación o de lo contrario perderá la promoción.\n\nEsta promoción no aplica para downgrades de planes, es decir si el cliente se baja a un plan de $15,99 pierde automáticamente la promoción.\n\nFecha de vigencia de la promoción del: 24 de Octubre del 2018 al 31 de Enero del 2019\n\n \n\nBONO DE 1GB O 100 MINUTOS\n\n* La promoción aplica acorde a las condiciones descritas a continuación:\n\n* Para los planes desde $19,99 el cliente podrá escoger el bono de 1GB o el bono de 100 minutos, el cual se entregará al usuario durante 6 meses desde la fecha de activación. * El usuario podrá escoger entre el bono de 1GB o 100 minutos, y no podrá escoger los dos bonos al mismo tiempo.\n\n* Bono de 100 minutos aplica para llamadas onnet y offnet.\n\n* No aplica para clientes que realicen cambio de prepago CNT a pospago CNT. Aplica para ventas nuevas, o portabilidad en el plan antes indicado.\n\n* El Bono no convive con otras promociones, es decir el bono de minutos no convive con el bono de megas, el clientes escoge uno de los dos.\n\n* No aplica rollover. De esta manera si el cliente no usa las megas o minutos del Bono, al siguiente mes se pierden.\n\n* No aplica pasa megas.\n\n* Si el cliente realiza un cambio de plan a otro plan deja de recibir el bono de la promoción.\n\n* No aplica prorrateo de megas ni minutos. Es decir que si el cliente se porta a CNT, al momento de la habilitación del servicio se acredita la totalidad del bono independientemente de la fecha.\n\n* Para los planes de $12,99  y $15,99 el bono de 1 GB o 100 minutos aplica para campañas y promociones específicas de CNT. Este bono aplica por 6 meses consecutivos desde la fecha de activación.\n\n* Aplica en nuevas activaciones o portabilidad en el plan antes indicado entre el 1 de Febrero al 31 de Marzo del 2019.\n\n \n\nPLAN NOTIFICADO MEDIANTE OFICIO GNRI-GREG-02-1368-2018\n\nSUSCRIPCIÓN PREMIUM Y NAVEGACIÓN LIBRE EN DEEZER GNRI-GREG-02-1368-2018\n\nFACEBOOK, WHATSAPP, INSTAGRAM Y TWITTER LIBRES GNRI-GREG-02-1368-2018\n\nBONO DE 16 GB O 100 MINUTOS NT-CNT-2019-001','2019-04-01 06:49:53','2019-04-01 06:49:53'),(2,'        \nPlan CNT Plus','CNT te recibe con los brazos abiertos. Pásate a cualquiera de nuestros planes desde $15.99 + imp y recibe bonos de megas o minutos adicionales a tu plan.','    Más megas para navegar en tus planes móviles\n    Bonos de portabilidad\n    Facebook y Whatsapp libres en planes desde $24.99\n    Llamadas ilimitadas a todas las operadoras en planes de $44.99\n','El cargo básico mensual contratado de $19,99, se orienta al consumo de minutos de voz. El cargo básico mensual contratado de los planes de $24,99 y $31,99 orienta al consumo de datos. El plan de $19,99 incluye un total de 200 minutos durante la permanencia del cliente en CNT EP, para llamar a $0 costo a todas las operadoras fijas y móviles a nivel nacional. Para el plan de $19,99 una vez terminados los minutos incluidos, la tarifa off net es de $0,12 + imp. Paquete de megas incluidas en el plan, de acuerdo al CBM contratado, como se detalla en la tabla de tarifas. Paquete de SMS será acreditado mensualmente de acuerdo a lo especificado para cada CBM en la tabla de tarifas, y no podrá ser utilizado para SMS internacionales, Premium o Bulk. Para el plan de $19.99 los minutos incluidos no aplican rollover; para todos los planes de $19.99, 24.99 y $31.99 los paquetes de megas y los SMS asignados no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan. Modalidad: Pospago controlados. Fondo de equipos varían de acuerdo al plan.','2019-04-01 06:49:53','2019-04-01 06:49:53'),(3,'        \nPlan Minutos Ilimitados','Con nuestros planes Datos + Voz podrás disfrutar de la máxima velocidad en internet móvil sin pagar más.','\r\n    Ahora todos los planes tendrán mas megas para navegar Llamadas ilimitadas a todas las operadoras fijas y móviles a partir del plan $24,99.\r\n    Whatsapp libre en todos los planes.\r\n    150 MB mensuales para Facebook.\r\n','El cargo básico mensual contratado de $19,99, se orienta al consumo de minutos de voz.\r\nEl cargo básico mensual contratado de los planes de $24,99 y $31,99 orienta al consumo de datos.\r\nEl plan  de $19,99 incluye un total de 200 minutos durante la permanencia del cliente en CNT EP, para llamar a $0 costo a todas las operadoras fijas y móviles a nivel nacional.\r\nPara el plan de $19,99 una vez terminados los minutos incluidos, la tarifa off net es de $0,12 + imp.\r\nPaquete de megas incluidas en el plan, de acuerdo al CBM contratado, como se detalla en la tabla de tarifas.\r\nPaquete de SMS será acreditado mensualmente de acuerdo a lo especificado para cada CBM en la tabla de tarifas, y no podrá ser utilizado para SMS internacionales, Premium o Bulk.\r\nPara el plan de $19.99 los minutos incluidos no aplican rollover; para todos los planes de $19.99, 24.99 y $31.99  los paquetes de megas y los SMS asignados no poseen rollover, por lo que si el cliente no los utiliza dentro del mes no se acumulan.\r\nModalidad: Pospago controlados.\r\nFondo de equipos varían de acuerdo al plan.\r\nVelocidad hasta 60/4 Mbps para datos en equipos LTE.\r\nTarifa de SMS bajo demanda onnet $0,05 + imp, off net $0,06 +imp e internaciones $0,10 + imp.\r\nUna vez consumido el paquete de datos, el MB adicional tendrá una tarifa de $0,0214+ imp. que se descontará del saldo disponible.\r\nSe podrá activar paquetes de SMS onnet, offnet e Internacional, paquetes de VOZ y paquetes de MB adicionales.\r\nContrato a 24 meses,  sin embargo el cliente puede cancelar su plan cual cuando guste y si tiene financiamiento de equipos deberá traer a valor presente y cancelar lo correspondiente.\r\nEl plan de $19.99 incluye llamadas ilimitadas, sin costo a números Onnet es decir fijos y móviles CNT. No aplica rollover. No aplica para llamadas internacionales, las llamadas a números 1700 no se incluyen dentro de los minutos incluidos o llamadas ilimitadas de este CBM, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz.\r\nPara los planes de $24.99 y $31,99 se incluye llamadas ilimitadas, sin costo a números Onnet y Offnet. Números móviles y fijos de todas las operadoras, upgrade entre los mismos planes. No aplica para llamadas internacionales.\r\nLas llamadas a números 1700 no se incluyen dentro de los minutos incluidos o llamadas ilimitadas de los planes de $24,99 y $31,99, el precio del minuto bajo demanda a estos destinos es de 0,10 + imp, en caso de que haga una recarga o contrate un paquete de voz.\r\nAplica para portabilidad, nuevos clientes, cambios de plan a un CBM superior\r\nBonos de llamadas ilimitadas aplican durante la permanencia del cliente.\r\nPOLÍTICA DE BUEN USO DEL SERVICIO MÓVIL AVANZADO DE CNT EP\r\n\r\nPROMOCIÓN WHATSAPP  LIBRE PARA PLAN MINUTOS\r\n\r\nVigencia de la promoción aplica desde el 01 de enero al 30 de junio del 2019\r\nEl consumo Whatsapp libre no se debita de la cuota de datos disponible y es libre en aplicaciones oficiales sobre las siguientes actividades para Whatsapp: mensajería (chat), mensajes de voz, envío/recepción de fotografías, descarga de fotografías, videos, visualización de información de contactos (fotos y estados), texto y multimedia (iconografía).\r\n La utilización de funcionalidades no especificadas en las aplicaciones de Whatsapp serán descontadas de la cuota de datos disponible en el plan o navegación por demanda.( ejemplo llamadas voip ).\r\n Una vez finalizadas la cuota de MB del plan principal, el cliente podrá seguir haciendo uso del beneficio Whatsapp libre con las características ya descritas.\r\n Cuando se active un paquete adicional de Megas la navegación en Whatsapp no se consumirá de ésta bolsa de megas.\r\nPROMOCIÓN BONO DE 150 MB PARA FACEBOOK  PARA PLAN MINUTOS ILIMITADOS\r\n\r\nVigencia de la promoción aplica desde el 01 de enero al 30 de junio del 2019\r\nLa acreditación de este bono de 150 MB tendrá una duración de 12 meses consecutivos desde su fecha de activación en el plan que se realice.\r\nEste bono permitirá la navegación en Facebook de todas las funcionalidades que se encuentren incluidas en esta aplicación.\r\nEste bono se cargará mensualmente, una vez terminado el bono el uso de la aplicación de Facebook será descontada de los Megas adicionales del plan o navegación bajo demanda a $0,0214 + IVA.\r\nNo aplica rollover\r\nNo aplica prorrateo\r\nNo aplica pasamegas\r\n \r\n\r\nPromoción Bono de Gigas Portabilidad\r\n\r\n* La promoción Bono de Portabilidad aplica para activaciones 23  de enero al 31 de marzo del 2019 del Plan minutos ilimitados notificado mediante el oficio No GNRI-GREG-04-1445 - 2018\r\n\r\n* La promoción aplica sólo para clientes que realizan portablidad desde otras operadoras a CNT.\r\n\r\n* Promoción consiste en la entrega de un bono promocional de 12 GB, el cual es distribuido en 1 GB mensual por 12 meses desde el momento de la activación, a partir del mes trece sólo dispondrá de los Megas del plan.\r\n\r\n* No aplica para clientes que realicen cambio de prepago CNT a pospago CNT.\r\n\r\n* Aplica para planes desde $19,99 + imp\r\n\r\n* Bono de Portabilidad no convive con otras promociones.\r\n\r\n* No aplica rollover. De esta manera si el cliente no usa las Gigas del Bono de Portabilidad, al siguiente mes se pierden.\r\n\r\n* No aplica prorrateo de Gigas.\r\n\r\n \r\n\r\n \r\n\r\nPlan notificado mediante oficio No GNRI-GREG-04-1445-2018\r\n\r\nPromoción  WhatsApp libre, notificada mediante oficioNo GNRI-GREG-04-1736-2018\r\n\r\nPromoción  150 MB para Facebook, notificada mediante oficio No GNRI-GREG-04-1736-2018\r\n\r\nPromoción Bono de GIGAS Portabilidad Notificado mediante oficio No GNRI-GREG-04-0078-2019','2019-04-01 06:49:53','2019-04-01 06:49:53');
/*!40000 ALTER TABLE `plan_movil_pospagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_movil_prepagos`
--

DROP TABLE IF EXISTS `plan_movil_prepagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_movil_prepagos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(6,2) NOT NULL,
  `tariff_ec` double(6,2) NOT NULL,
  `tariff_out` double(6,2) NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_movil_prepagos`
--

LOCK TABLES `plan_movil_prepagos` WRITE;
/*!40000 ALTER TABLE `plan_movil_prepagos` DISABLE KEYS */;
INSERT INTO `plan_movil_prepagos` VALUES (1,'	\r\nPlan Todos Conectados','Tu Plan todos conectados te entrega megas y minutos Onnet para que estés siempre conectado.','\r\n\r\n    PLAN TODOS CONECTADOS: Plan tipo Prepago. Disponible para equipos aportados y equipos propios.\r\n    Acceso a contratar servicios adicionales. (datos, SMS). También tiene la opción de contratar el PAQUETE CONECTADOS.\r\n    Acceso a recargas físicas o electrónicas. Rollover de recargas, es decir el valor de las recargas es acumulable.\r\n    Disponible para clientes que deseen aplicar a portabilidad numérica en CNT EP y/o nuevas activaciones.\r\n','De acuerdo al Artículo 98 de la ley orgánica del régimen tributario, para el caso de Sociedades con RUC que activen este plan, se cobrará ICE.',7.00,0.11,0.11,'PLAN TODOS CONECTADOS: Plan tipo Prepago. Disponible para equipos aportados y equipos propios.\r\nPrecio del chip para este producto: $7,00 + imp. ($7,84 incluido impuestos).\r\nPosee una Tarifa Única de $0,10 + imp. ($0,112 incluido impuestos) por minuto para hablar a cualquier teléfono fijo o móvil en Ecuador, Estados Unidos, Canadá, Colombia, Perú y Venezuela.\r\nLas tarifas a otros destinos internacionales (diferentes a los mencionados anteriormente), son las vigentes actualmente, anteriormente notificadas con el oficio N° GNRI-GREG-04-221-2016.\r\nLas tarifas de mensajes son: SMS ONNET --> $0,05 + imp. ($0,056 incluido impuestos), SMS OFFNET --> $0,06 + imp. ($0,0672 incluido impuestos), SMS INTERNACIONAL --> $0,10 + imp. ($0,112 incluido impuestos)\r\nPrecio del mega adicional $0,0214 + imp. ($0,023968 incluido impuestos)\r\nTarifa de llamadas a números 1700 será de $0,10 + imp. ($0,112 incluido impuestos). Llamadas a números 1800 no tendrán costo.\r\nAcceso a contratar servicios adicionales. (datos, SMS). También tiene la opción de contratar el PAQUETE CONECTADOS.\r\nAcceso a recargas físicas o electrónicas. Rollover de recargas, es decir el valor de las recargas es acumulable.\r\nNo aplica duplicidad y triplicidad de recargas.\r\nDisponible para clientes que deseen aplicar a portabilidad numérica en CNT EP y/o nuevas activaciones.\r\nProducto notificado con código No.: NT-CNT-2019-007.\r\nEn la activación se incluye 2048 MB (2 GB) de navegación, 50 minutos a fijo y móvil CNT, Whatsapp libre con un tope de 1024 MB (1 GB) y 200 MB de Facebook, con vigencia de 30 días; acorde a la PROMOCIÓN DEL PLAN TODOS CONECTADOS.\r\nPolíticas de buen uso y Condiciones prestacion servicio prepago','2019-04-01 06:49:53','2019-04-01 06:49:53'),(2,'CHIP + PREPAGO','Tu CHIP + Prepago te trae grandes beneficios','\r\n    CHIP + PREPAGO: Plan tipo prepago. Disponible para equipos aportados y equipos propios.\r\n    Acceso a contratar servicios adicionales (datos, mensajes).\r\n    Acceso a recargas físicas o electrónicas. Rollover de recargas, es decir, el valor de las recargas es acumulable.\r\n    Es compatible con duplicidad de recargas en las fechas de promoción que notifique CNT.\r\n    Disponible para clientes que deseen aplicar a portabilidad numérica en CNT.\r\n','De acuerdo al Artículo 98 de la ley orgánica del régimen tributario, para el caso de Sociedades con RUC que activen este plan, se cobrará ICE.',4.00,0.11,0.11,'CHIP + PREPAGO: Plan tipo prepago. Disponible para equipos aportados y equipos propios.\r\nPrecio del chip para este producto: $4,00 + impuestos (Precio final: $4,48).\r\nPosee una Tarifa Única de $0,10 + impuestos (Precio final: $0,112) por minuto para hablar a cualquier teléfono fijo o móvil en Ecuador, Estados Unidos, Canadá, Colombia, Perú y Venezuela.\r\nLas tarifas a otros destinos internacionales (diferentes a los mencionados anteriormente), son las vigentes actualmente, anteriormente notificados.\r\nLas tarifas de mensajes son: SMS ONNET → $0,05 + impuestos (Precio final: $0,056), SMS OFFNET → $0,06 + impuestos (Precio final: $0,0672), SMS INTERNACIONAL → $0,10 + impuestos (Precio final: $0,112).\r\nPrecio del mega adicional: $0,0214 + impuestos (Precio final: $0,023968).\r\nAcceso a contratar servicios adicionales (datos, mensajes).\r\nAcceso a recargas físicas o electrónicas. Rollover de recargas, es decir, el valor de las recargas es acumulable.\r\nEs compatible con duplicidad de recargas en las fechas de promoción que notifique CNT.\r\nDisponible para clientes que deseen aplicar a portabilidad numérica en CNT.\r\nPaquete 100 megas gratis a clientes Portabilidad\r\nEl paquete de 100 megas es sin costo y su duración es de 30 días.\r\nEl paquete de 100 megas se acreditará junto a la activación de la línea Prepago que ingrese a través de portabilidad numérica\r\nLa entrega del paquete de 100 megas se realizará en los planes prepago comercialmente vigentes a la fecha de la activación de la línea\r\nBono de paquete de 100 MB Notificado con Oficio GNRI-GREG-06-0694-2018.\r\nProducto notificado con código No. NT-CNT-2019-006.\r\nVigencia de la entrega del paquete 30 junio 2019.\r\nPolíticas de buen uso y Condiciones prestacion servicio prepago','2019-04-01 06:49:53','2019-04-01 06:49:53');
/*!40000 ALTER TABLE `plan_movil_prepagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_telefonia_fijas`
--

DROP TABLE IF EXISTS `plan_telefonia_fijas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_telefonia_fijas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_telefonia_fijas`
--

LOCK TABLES `plan_telefonia_fijas` WRITE;
/*!40000 ALTER TABLE `plan_telefonia_fijas` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan_telefonia_fijas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promos`
--

LOCK TABLES `promos` WRITE;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_v_plans`
--

DROP TABLE IF EXISTS `t_v_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_v_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(5,2) NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_v_plans`
--

LOCK TABLES `t_v_plans` WRITE;
/*!40000 ALTER TABLE `t_v_plans` DISABLE KEYS */;
INSERT INTO `t_v_plans` VALUES (1,'Paquete HD','TENEMOS EL PLAN IDEAL PARA TI ¿Qué esperas para vivir una nueva experiencia en entretenimiento? Elige el plan que se ajuste a tus necesidades y accede a la mejor programación con CNT TV .\n\nDisfruta: 61 canales SD + 10 canales de + 30 canales HD + 3 señales SD promocionales.','\n    Al contratar el Paquete HD recibirás un decodificador el cual permite la visualización de contenido SD/HD.\n    Podrás contratar decodificadores adicionales en alta definición por: USD $7,00 + imp. Valor Final: USD $9,02\n    El Paquete HD incluye 61 canales SD + 10 canales de audio + 30 canales HD + 3 canales SD promocionales.\n    El decodificador de tu plan permite grabación de contenido mediante dispositivo USB, la capacidad de grabación de contenido dependerá del nivel de almacenamiento de tu dispositivo.\n    Disfruta sin costo adicional de 2 canales HD y 3 canales SD promocionales por tiempo limitado.\n    Aplica cero costo de instalación en el decodificador principal cuando el cliente accede a oferta CNT Pack (revisar oferta CNT Pack). Los decodificadores adicionales cancelarán costo de instalación normal ($10,00 c/u).\n',28.50,'La tarifa del paquete es $28,50 + imp. por la comercialización del Paquete HD. Precio final $36,71.\r\nLa tarifa por equipos (decodificadores) adicionales es de $7,00 + imp por cada uno; se puede contratar máximo 3 equipos adicionales por contrato.\r\nCosto de instalación del equipo principal $20,00 + impuestos ($25,76 con imp.), y equipos adicionales $10,00 + impuestos ($12,88 con imp.).\r\nEl Paquete HD contiene la siguiente cantidad de señales: 10 canales SD Nacionales, 51 canales SD Internacionales, 30 Canales HD y 10 señales de Audio.\r\nEn caso de cancelación del plan antes del año se procederá al cobro de costos de instalación no contemplados en la contratación inicial, conforme lo establecido en el contrato de adhesión suscrito entre el cliente/suscriptor y la CNT EP.\r\nAplica empaquetamiento de servicios CNT PACK.\r\nEl Paquete HD se comercializará con decodificadores Zapper.\r\nOferta aplica a nivel nacional a excepción de la provincia de Galápagos.\r\nPromocionalmente contará con 5 señales por tiempo limitado (31/12/2018) 3 SD y 2 HD.\r\nNotificacion hacia Arcotel con Oficio No. GNRI-GREG-03-1041-2018.\r\nPromoción señal 777:\r\n\r\nLa inclusión de esta señal promocional no altera los convenios de contrato realizados inicialmente para el cliente.\r\nLa señal GOLTV HD es una señal promocional sin costo adicional por tiempo limitado que CNT TV podrá mover de su grilla de programación sin afectar a la oferta comercial.\r\nEsta promoción aplica para los clientes/ suscriptores antiguos y nuevos en planes residenciales.\r\nPromoción notificada mediante Oficio Arcotel: GNRI-GREG-04-0951-2018\r\nPromoción señal 777 hasta el 31 de diciembre 2018','2019-04-01 06:49:51','2019-04-01 06:49:51'),(2,'Paquete SD','El decodificador de tu plan permite grabación de contenido mediante dispositivo USB, la capacidad de grabación de contenido dependerá del nivel de almacenamiento de tu dispositivo.\r\n\r\nDisfruta: 61 canales SD + 10 canales de\r\naudio + 2 señales HD promocionales + 3\r\nseñales SD promocionales.','\r\n    Al contratar el Paquete SD recibirás un decodificador el cual permite la visualización de contenido SD/HD.\r\n    Podrás contratar decodificadores adicionales en alta definición por: USD $7,00 + imp. Valor Final: USD $9,02\r\n    El Paquete SD incluye 61 canales SD + 10 canales de audio + 2 canales HD + 3 canales SD*\r\n    El decodificador de tu plan permite grabación de contenido mediante dispositivo USB, la capacidad de grabación de contenido dependerá del nivel de almacenamiento de tu dispositivo.\r\n    Disfruta sin costo adicional de 2 canales HD y 3 canales SD promocionales por tiempo limitado.\r\n    Aplica cero costo de instalación en el decodificador principal cuando el cliente accede a oferta CNT Pack (revisar oferta CNT Pack). Los decodificadores adicionales cancelarán costo de instalación normal ($10,00 c/u).',20.50,'La tarifa del paquete es de $20,50 + imp. por la comercialización del Paquete SD. Precio final $26,40\r\nLa tarifa por equipos (decodificadores) adicionales es de $7 + imp por cada uno; se puede contratar máximo 3 equipos adicionales por contrato.\r\nCosto de instalación del equipo principal $20,00 + impuestos ($25,76 con imp.), y equipos adicionales $10,00 + impuestos ($12,88 con imp.).\r\nEn caso de cancelación del plan antes del año se procederá al cobro de costos de instalación no contemplados en la contratación inicial, conforme lo establecido en el contrato de adhesión suscrito entre el cliente/suscriptor y la CNT EP.\r\nAplica empaquetamiento de servicios CNT PACK.\r\nEl cliente/suscriptor puede cambiar al Paquete HD con una permanencia mínima de 1 mes en dicho paquete, luego del tiempo el cliente podrá solicitar nuevamente un cambio de Paquete a la oferta Paquete SD\r\nEl Paquete SD se comercializará con decodificadores Zapper.\r\nOferta aplica a nivel nacional a excepción de la provincia de Galápagos.\r\nEl paquete SD contiene la siguiente cantidad de señales: 61 canales SD + 10 canales de audio + 8 señales promocionales SD + 2 señales promocionales HD.\r\nPromocionalmente el Paquete SD contará con 8 señales s SD + 2 señales HD.\r\nLas señales promocionales en SD y HD podrán ser reemplazadas o eliminadas.\r\nNotificación hacia Arcotel con Oficio No. GNRI-GREG-03-1041-2018.','2019-04-01 06:49:51','2019-04-01 06:49:51'),(3,'Plan FOX Premium','El Plan Fox Premium te da más entretenimiento al mejor costo. Diseñado para quienes no quieren perderse los últimos estrenos gracias a sus canales Premiere.','\r\n    Disfruta de 8 canales Premium SD\r\n    Contrátalo llamando al 1800 100 100 o directamente en todos los centros de atención al cliente CNT.',10.00,'Para contratar el Plan Fox Premium el cliente mínimo debe mantener contratado el Plan Súper.\r\nRecuerda que puedes contratar decos adicionales para tus televisores adicionales.\r\nRenta Deco SD $6 USD sin impuestos ($7.73 USD con impuestos.)','2019-04-01 06:49:51','2019-04-01 06:49:51'),(4,'Plan HBO Premium','Las mejores series están en HBO. Contrata el PLAN HBO PREMIUM y recibe un decodificador SD para que disfrutes al máximo de los 9 canales que están incluidos en este plan.','\r\n    El plan contiene 9 canales Premium de HBO.\r\n    Contrátalo llamando al 1800 100 100 o directamente en todos los centros de atención al cliente CNT.',10.00,'Para contratar el Plan HBO PREMIUMel cliente mínimo debe mantener contratado el Plan Súper.\r\nRecuerda que puedes contratar decos adicionales para tus televisores adicionales.\r\nRenta Deco SD $6 USD sin impuestos ($7,73 USD con impuestos.)','2019-04-01 06:49:51','2019-04-01 06:49:51'),(5,'Plan Total Plus','LLENAR','\r\n    Incluye un decodificador SD\r\n    Contrátalo llamando al 1800 100 100 o directamente en todos los centros de atención al cliente CNT.',10.00,'Para contratar el Plan TOTAL PLUS el cliente mínimo debe mantener contratado el Plan Súper.\r\nRecuerda que puedes contratar decos adicionales para tus televisores adicionales.\r\nRenta Deco SD $6 USD sin impuestos ($7,73 USD con impuestos.)','2019-04-01 06:49:51','2019-04-01 06:49:51'),(6,'HOT Pack','Este plan ofrece nuestros canales de entretenimiento solo para adultos, contrata el Plan Hot Pack mensualmente.','Con el Plan Hotpack accederás a señales para adulto (Playboy, Venus, Sextreme) y 70 señales del Plan Súper.',10.00,'Para contratar este servicio se debe tener como mínimo un Plan Súper.\r\nEl costo de activación del plan solo a decodificadores seleccionados por el cliente.','2019-04-01 06:49:51','2019-04-01 06:49:51'),(7,'Plan Adulto','Este plan ofrece nuestro canal de entretenimiento solo para adultos, contrata el Plan Adulto Playboy mensualmente o solo por un día.','Con el Plan adulto accederás a 1 señal adulto (Playboy) + 70 señales (Plan Súper base)',5.50,'La activación del plan día tiene una vigencia de 24 horas desde el inicio de la activación del servicio.\r\nPara contratar este servicio se debe tener como mínimo un Plan Súper.\r\nEl costo de activación del Plan Adulto (día/mes) aplica por cada decodificador seleccionado por el cliente.','2019-04-01 06:49:51','2019-04-01 06:49:51'),(8,'Plan Islas Galápagos','Contrata el servicio de televisión por $30 más impuestos, plan promocional exclusivo para las Islas Galápagos. Disfruta de 30 canales con la mejor señal y sin interrupciones.','\r\n    Tarifa promocional exclusiva para residentes de las islas Galápagos\r\n    Único plan de Televisión con 30 señales.\r\n    Cobertura en todas las islas Galápagos\r\n    Señales Nítidas.\r\n    Variedad de contenido',30.00,'La promoción aplica para clientes que contraten el servicio en las islas Galápagos.\r\nEl costo de $30 + impuestos se mantiene para clientes que contraten el plan desde el 25 de septiembre del 2015 hasta el 15 de enero del 2019.\r\nEl plan solo está disponible para clientes residentes en las Islas Galápagos.','2019-04-01 06:49:51','2019-04-01 06:49:51');
/*!40000 ALTER TABLE `t_v_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarifas_internet_fijos`
--

DROP TABLE IF EXISTS `tarifas_internet_fijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarifas_internet_fijos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` double(6,2) NOT NULL,
  `download` int(11) NOT NULL,
  `upload` int(11) NOT NULL,
  `instalation_cost` double(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifas_internet_fijos`
--

LOCK TABLES `tarifas_internet_fijos` WRITE;
/*!40000 ALTER TABLE `tarifas_internet_fijos` DISABLE KEYS */;
INSERT INTO `tarifas_internet_fijos` VALUES (1,'Fibra óptica para hogares','Plan 10 Mbps','Fibra óptica',24.90,10,10,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(2,'Fibra óptica para hogares','Plan 20 Mbps','Fibra óptica',29.90,20,20,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(3,'Fibra óptica para hogares','Plan 30 Mbps','Fibra óptica',36.00,30,30,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(4,'Fibra óptica para hogares','Plan 50 Mbps','Fibra óptica',49.90,50,50,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(5,'Fibra óptica para hogares','Plan 80 Mbps','Fibra óptica',80.00,80,80,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(6,'Fibra óptica para hogares','Plan 100 Mbps','Fibra óptica',110.00,100,100,80.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(7,'Planes Internet Banda Ancha Hogar','Plan 5 Mbps','Cobre',20.90,5,1,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(8,'Planes Internet Banda Ancha Hogar','Plan 10 Mbps','Cobre',24.90,10,1,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(9,'Planes Internet Banda Ancha Hogar','Plan 15 Mbps','Cobre',29.90,15,1,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(10,'Planes Internet Banda Ancha Hogar','Plan 4 mbps','GPON',18.00,4,2,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(11,'Planes Internet Banda Ancha Hogar','Plan 5 Mbps','GPON',20.90,5,2,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(12,'Planes Internet Banda Ancha Hogar','Plan 15 Mbps','GPON',29.90,15,10,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(13,'Planes Internet Banda Ancha Hogar','Plan 25 Mbps','GPON',36.00,25,15,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(14,'Planes Internet Banda Ancha Hogar','Plan 50 Mbps','GPON',49.90,50,25,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(15,'Planes Internet Banda Ancha Hogar','Plan 100 Mbps','GPON',110.00,100,50,60.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(16,'Planes Ultra Internet fibra óptica','Plan 15 Mbps','Fibra óptica',26.90,15,15,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(17,'Planes Ultra Internet fibra óptica','Plan 25 Mbps','Fibra óptica',31.90,25,25,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(18,'Planes Ultra Internet fibra óptica','Plan 50 Mbps','Fibra óptica',44.90,50,50,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(19,'Planes Ultra Internet fibra óptica','Plan 75 Mbps','Fibra óptica',59.90,75,75,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(20,'Planes Ultra Internet fibra óptica','Plan 100 Mbps','Fibra óptica',80.90,100,100,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(21,'Plan Internet Estudiantil','Plan 2 Mbps',NULL,12.99,2,1,50.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(22,'Plan Internet Social','Intenet Social',NULL,9.99,2,1,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(23,'Planes Internet Controlado','Intenet Social','EVDO',10.00,1,1,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(24,'Planes Internet Controlado','Internet Hogar','EVDO',18.00,2,2,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53'),(25,'Planes Internet Controlado','Internet Empresarial','EVDO',35.00,4,4,0.00,'2019-04-01 06:49:53','2019-04-01 06:49:53');
/*!40000 ALTER TABLE `tarifas_internet_fijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonia_fija_plans`
--

DROP TABLE IF EXISTS `telefonia_fija_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonia_fija_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonia_fija_plans`
--

LOCK TABLES `telefonia_fija_plans` WRITE;
/*!40000 ALTER TABLE `telefonia_fija_plans` DISABLE KEYS */;
INSERT INTO `telefonia_fija_plans` VALUES (1,'Telefonía Hogar Total CNT','Habla con toda la comunidad CNT, tu plan de telefonía fija hogar ahora incluye minutos a fijos y móviles CNT.\r\n\r\nMillones de ecuatorianos conectados, puedes adquirir junto con tu línea telefónica varios Servicios Adicionales para que puedas recibir más beneficios.','\r\n    Habla con la comunidad más grande del país\r\n    Tarifa única\r\n    Llamadas ilimitadas a fijos y móviles del país\r\n    Todas las líneas nuevas de telefonía fija obtienen sin ningún costo los siguientes beneficios adicionales:\r\n    Llamada en Espera, Sin Restricción a ningún tipo de llamadas.\r\n    Adultos Mayores obtienen el 50% de descuento en la pensión básica de la línea principal.\r\n    Aplica para descuento por empaquetado el 10% o 15% en la pensión básica mensual, acorde a las políticas de empaquetamiento vigentes.','Promoción llamadas ilimitadas a fijos y móviles CNT  Se requiere validar la disponibilidad de infraestructura técnica para la contratación de planes por cobre o fibra óptica GPON.El costo de inscripción para el servicio de telefonía hogar fija es de $ 60,00* (Precio final: $67.20). Oferta notificada de acuerdo al oficio No. NT-CNT-2019-012','Plan Residencial','Esta línea telefónica genera interés por mora en caso de que el abonado incurra en no pago de su planilla telefónica.\r\nEn toda instalación nueva de una línea telefónica fija de cobre, CNT asumirá el costo de instalación de hasta 100 metros de cable y materiales. Si la instalación requiere de cable y materiales adicionales, estos deberán ser facturados al abonado de acuerdo a las tarifas vigentes.\r\nEn toda instalación nueva de línea telefónica con tecnología GPON, CNT asumirá el costo de instalación de hasta 250 metros de cable y materiales. Si la instalación requiere de cable y materiales adicionales, serán facturados al Abonado a $1,10 más impuestos por metro adicional.\r\nEn el caso que el abonado adquiera la línea telefónica con modem VDSL, el equipo no tendrá costo. El modem es de propiedad de CNT y en caso de cancelación del servicio deberá entregar el equipo sin desperfectos o cancelar el valor de $46.00 más impuestos. El módem VDSL tiene garantía de un año y aplica en caso de daños de fábrica.\r\nEn caso de que el abonado realice el cambio de tecnología de cobre /CDMA / VDSL a GPON y amerite un cambio de número por factores técnicos, se le otorgará uno nuevo, previa comunicación y aceptación del usuario, en caso de no aceptación el ABONADO conservará su servicio y número bajo las condiciones tecnológicas y comerciales actuales.\r\nEn instalaciones a través de GPON, se incluye módem (ONT), mismo que es propiedad de CNT, en caso de cancelación el abonado deberá devolver el equipo, caso contrario cancelar el valor de $90.00 + IMP.\r\nLas llamadas por operadora tienen un recargo del 30% excepto para llamadas a celulares offnet. Las llamadas por operadora fueron notificadas con No. Oficio: GNRI-GREG-04-0644-2017.\r\nAplica previa factibilidad técnica.','2019-04-01 06:49:53','2019-04-01 06:49:53'),(2,'Telefonía Hogar','Contrata tu servicio de telefonía fija con la empresa con mayor experiencia, cobertura y mejor calidad del país. Llegamos donde tú estés!\r\n\r\nÚnete a los 16,3 millones de ecuatorianos que hablan con las tarifas más bajas del mercado, puedes adquirir junto con tu línea telefónica varios servicios adicionales para que puedas Llamar sin restricciones y recibir más beneficios.\r\n','\r\n        Empieza a disfrutar de una comunicación más rápida y clara con nuestra tecnología por Fibra óptica GPON*.\r\n        Habla sin restricciones con las tarifas más bajas del mercado.\r\n        Todas las líneas nuevas de telefonía fija obtienen sin ningún costo los siguientes beneficios adicionales:\r\n        Si eres Adulto Mayor aprovecha y obtén el 50% de descuento en tu línea principal.\r\n            Llamada en Espera\r\n            Sin Restricción a ningún tipo de llamadas\r\n\r\n    *Previa factibilidad técnica.\r\n','Nota.- Se requiere validar la disponibilidad de infraestructura técnica para la contratación de planes por cobre o fibra óptica GPON.El costo de inscripción para el servicio de telefonía hogar fija es de $ 60,00* (Precio final: $67.20).','Plan Residencial','En toda instalación nueva de una línea telefónica fija de cobre, CNT asumirá el costo de instalación de hasta 100 metros de cable y materiales. Si la instalación requiere de cable y materiales adicionales, estos deberán ser facturados al abonado de acuerdo a las tarifas vigentes.\r\nTodas las líneas telefónicas genera interés por mora en caso de que el abonado incurra en no pago de su planilla telefónica.\r\nLos minutos incluidos del Plan Telefonía Hogar GPON aplican para llamadas a redes fijas onnet.\r\nLos minutos incluidos en el Plan Telefonía Hogar Línea GPON Only aplican 200 para redes fijas onnet y 50 para redes fijas offnet.\r\nPlan Telefonía Hogar GPON y Línea Gpon Only dependen de la disponibilidad de infraestructura (cobertura) de la red de fibra óptica de CNT.\r\nEn toda instalación nueva de línea telefónica con tecnología GPON, CNT asumirá el costo de instalación de hasta 250 metros de cable y materiales. Si la instalación requiere de cable y materiales adicionales, serán facturados al Abonado a $1,10 más impuestos por metro adicional.\r\nEn instalaciones a través de GPON, se incluye módem (ONT), mismo que es propiedad de CNT, en caso de cancelación el abonado deberá devolver el equipo, caso contrario cancelar el valor de $90.00 + IMP.\r\nEn el caso que el abonado adquiera la línea telefónica con modem VDSL, el equipo no tendrá costo. El modem es de propiedad de CNT y en caso de desactivación del servicio deberá entregar el equipo sin desperfectos o cancelar el valor de $46.00 más impuestos. El modem VDSL tiene garantía de un año y aplica en caso de daños de fábrica.\r\nAplica Previa factibilidad técnica.\r\nAplican restricciones.','2019-04-01 06:49:53','2019-04-01 06:49:53'),(3,'Prepago País','La línea telefónica Prepago País te permite controlar tu presupuesto. Realiza una recarga a tu línea convencional de telefonía fija y maneja tu economía.','\r\n    Brinda grandes ahorros mensuales a los hogares ecuatorianos.\r\n    Habla con más de 7.5 millones de usuarios a nivel nacional.\r\n    Cuentas con la comunidad de usuarios de telefonía fija más grande del país.\r\n    Línea telefónica no tiene costo de inscripción.\r\n    Tienes a tu disposición sin costo adicional el servicio suplementario de llamada en espera.','Plan disponible para  zonas rurales.','Otros planes','Líneas telefónicas no pueden activar ningún servicio suplementario o adicional diferente a llamada en espera.\r\nNo aplica servicios de empaquetamiento.\r\nLa marcación de la llamada tiene la misma funcionalidad que una línea post-pago.\r\nLos valores que se indican en las tarifas no incluyen el costo del aparato telefónico, cuyo valor estará determinado por CNT, en el caso de que el usuario lo adquiera en la empresa.\r\nLas recargas de esta línea prepago se la puede realizar en cualquier centro Integrado de servicio al Cliente a nivel nacional.\r\nEn el caso de daños en el equipo, aplica la garantía por fallas de fábrica del proveedor por un año calendario después de la entrega del terminal especificado en la factura.\r\nEn caso que el cliente desee adquirir un nuevo terminal o que tenga un daño no cubierto por la garantía, el cliente deberá adquirir un nuevo equipo acorde a los precios vigentes.','2019-04-01 06:49:53','2019-04-01 06:49:53');
/*!40000 ALTER TABLE `telefonia_fija_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terminals`
--

DROP TABLE IF EXISTS `terminals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terminals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cash_price` double(6,2) NOT NULL,
  `from_price` double(6,2) NOT NULL,
  `screen_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_cam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_cam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extensible_memory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terminals`
--

LOCK TABLES `terminals` WRITE;
/*!40000 ALTER TABLE `terminals` DISABLE KEYS */;
INSERT INTO `terminals` VALUES (1,'Samsung Note 9','SAMSUNG','El Lapiz S Pen de Note 9 se convertirá en tu mejor aliado para controlar tu cámara, presentaciones y aplicaciones sin tocar tu teléfono.','Disponible',1290.00,55.82,'6,4″','8 MP','12 MP + 12 MP (DUAL) autofocus, LED flash','versión 8.1.0','128 GB','512 GB','161,90 mm','76,4 mm','8,8 mm','4000 mAh','\"Azul \\/ Negro \"','SAMSUNG-NOTE-9.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(2,'Samsung A6 Plus','SAMSUNG','.Tus mejores selfies grabadas en la precisión y nitidez de una fotografía, gracias a la cámara frontal de 24MP+Flash del nuevo Samsung Galaxy A6+','Disponible',545.00,19.93,' 6,0″','8 MP','Cámara Dual: 2 cámaras principales de 16.0 MP + 5.0 MP','Android Oreo versión 8.0','32 GB','256 GB','160,2 mm','75,7 mm','7,9 mm','3500 mAh','\"Negro\"','SAMSUNG-A6-PLUS.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(3,'Samsung J6','SAMSUNG','La seguridad es práctica con el nuevo J6 gracias a su funcionalidad de escaneo facial y de huellas.','Disponible',385.00,11.95,'5,6″','8 MP','13 MP','Android Oreo versión 8.0','32 GB','256 GB','149,3 mm','70,2 mm','8,2 mm','3000 mAh','\"Negro\"','SAMSUNG-J6.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(4,'Samsung J2 Core','SAMSUNG','Rendimiento y almacenamiento optimizado con Android Oreo edición Go.','Disponible',160.00,1.00,'5″','5 MP','8 MP','versión 8.1.0','8 GB','256 GB','143,4 mm','72,1 mm','8,9 mm','2600 mAh','\"Negro\"','SAMSUNG-J2-CORE.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(5,'Huawei Mate 20 Lite','HUAWEI','Las impresionantes imágenes de la pantalla FullView FHD+ de 6.3\" (2,340 x 1,080) lo sumergen en momentos de magia junto a sus 4 cámaras con Inteligencia Artificial.','Disponible',530.00,22.99,' FullView FHD+ de 6.3″','20 MP+ 2 MP','20 MP+ 2 MP LED FLASH','Android 8.1.0','64 GB','256 GB','158,3 mm','75.3 mm','7.6 mm','3750mAh','\"Negro \\/ azul \"','HUAWEY-MATE-20-LITE.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(6,'Huawei P20 PRO','HUAWEI','Presentamos la primera Triple Cámara Leica del mundo con zoom híbrido. El HUAWEI P20 Pro supera los límites de la fotografía creativa en un smartphone.','Disponible',1160.00,47.83,'6,1″','24 MP','40 MP + 20 MP + 8MP, autofocus, LED flash','Android Oreo versión 8.1.0','128 GB','N/A','155,0 mm','73,9 mm','7,8 mm','4000 mAh','\"Azul\"','HUAWEY-P20-PRO.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(7,'SONY XPERIA XZ1','SONY','El diseño, la exclusividad y las mejores funcionalidades juntas en un solo teléfono. SONY XZ1 un ícono de elegancia.','Disponible',774.00,31.04,'5,2″','13MP','19MP','Android + EMUI 8.0','64 GB','256 GB','148 mm','73 mm','7.4 mm','2700 mAh','\"Negro\"','SONY-XZ1.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(8,'LG G6','LG','Un diseño novedoso con pantalla FullVision y una excelente usabilidad en una sola mano.','Disponible',745.00,29.50,'5,7″','5 MP','13 MP','Android 7.0','32 GB','2 TB','148,9 mm','71,9 mm','7,9 mm','3300mAh','\"negro\"','LG-G6.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(9,'ALCATEL A5','ALCATEL','Selfies perfectas con un solo toque gracias a su cámara de 16 MP','Disponible',315.00,8.48,'5,7″','Dual 13 MP + 5 MP','16 MP','Android 7.0','16 GB','32 GB','152,35 mm','71.1 mm','8,45 mm','3000 mAh','\"Dorado \\/ negro \"','ALCATEL-A5.png','2019-04-01 06:49:51','2019-04-01 06:49:51'),(10,'Motorola G5 plus','MOTOROLA','Diseño increíble, pantalla HD, camara de 12 mpx y procesador Octa-Core y el mejor desempeño ¡Todo lo que necesitas en un celular.!','Disponible',299.99,9.03,'5.2″',' 5 MP','128 GB','Android 7.0','32 GB','128 GB','150,20 mm','74,0 mm','7,7 mm','3000 mAh','\"negro \\/ dorado \"','MOTOROLA-G5-PLUS.png','2019-04-01 06:49:51','2019-04-01 06:49:51');
/*!40000 ALTER TABLE `terminals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-04-01  8:55:15
