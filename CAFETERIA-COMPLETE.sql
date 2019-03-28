-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cafeteria
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `caja`
--

DROP TABLE IF EXISTS `caja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caja` (
  `id_operacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cajero` int(11) DEFAULT NULL,
  `id_cliente` varchar(50) DEFAULT '0',
  `id_producto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` varchar(50) DEFAULT NULL,
  `pu` decimal(5,2) DEFAULT NULL,
  `total` decimal(5,2) DEFAULT NULL,
  `nota` varchar(100) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_operacion`)
) ENGINE=InnoDB AUTO_INCREMENT=266 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caja`
--

LOCK TABLES `caja` WRITE;
/*!40000 ALTER TABLE `caja` DISABLE KEYS */;
/*!40000 ALTER TABLE `caja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,1,2);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` varchar(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `credito` varchar(50) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES ('1410','RAMSES','TAMAYO','LEDESMA','400','2018-08-09 18:33:44'),('1411','ALICIA','LEDEZMA','GOMEZ','1500','2018-08-09 18:34:02'),('1412','ALONSO','FRANCO','LOPEZ','1500','2018-08-09 18:34:25'),('1413','SANTANA ','CHAVEZ','ARRENDONDO','1000','2018-10-02 17:38:12');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientesextras`
--

DROP TABLE IF EXISTS `ingredientesextras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredientesextras` (
  `id_ingrediente` varchar(100) NOT NULL,
  `nombre_ingrediente` varchar(100) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientesextras`
--

LOCK TABLES `ingredientesextras` WRITE;
/*!40000 ALTER TABLE `ingredientesextras` DISABLE KEYS */;
INSERT INTO `ingredientesextras` VALUES ('2001','QUESO PARA NACHO 200ML',15.00,'2018-08-09 22:31:26'),('2002','SALSA VALENTINA 200ML',15.00,'2018-08-09 22:31:47'),('2003','JAMON EXTRA',15.00,'2018-08-09 22:32:24'),('2004','4 TORTILLAS',3.00,'2018-10-02 03:35:11');
/*!40000 ALTER TABLE `ingredientesextras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventario` (
  `id_articulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` decimal(5,0) DEFAULT NULL,
  `precio_unitario` decimal(5,2) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id_articulo` (`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` VALUES ('1001','SOPA EN VASO',3,15.00,'2018-07-30 22:58:08'),('1002','SODA 600 ML',47,16.00,'2018-07-30 22:58:34'),('1003','SABRITAS 600G',48,18.00,'2018-07-30 22:58:57'),('B1004','BARRA DE CHOCOLATE',26,12.00,'2018-07-30 23:00:26'),('B01MUBY9LE','FUSE TEA',26,25.00,'2018-07-30 23:05:30'),('7501055310883','AGUA CIEL 1 LTS',5,15.00,'2018-07-31 01:43:32'),('096619523665','AGUA DE 600ML',50,11.00,'2018-10-02 03:32:54');
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiosco`
--

DROP TABLE IF EXISTS `kiosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiosco` (
  `id_operacion` int(11) NOT NULL AUTO_INCREMENT,
  `folio` int(11) DEFAULT NULL,
  `id_producto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `nota` varchar(50) DEFAULT NULL,
  `tiempo_inicial` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tiempo_final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '0',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_operacion`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiosco`
--

LOCK TABLES `kiosco` WRITE;
/*!40000 ALTER TABLE `kiosco` DISABLE KEYS */;
INSERT INTO `kiosco` VALUES (1,34,'1002','SODA 600 ML',1,'','2018-08-16 20:57:48','0000-00-00 00:00:00',1,'2018-08-16 20:57:48'),(2,34,'3002','TORTA CUBANA',1,'sin mayonesa','2018-08-16 20:57:48','0000-00-00 00:00:00',1,'2018-08-16 20:57:48'),(3,36,'3001','CLUB SANWISH',1,'sin queso','2018-08-16 21:04:56','0000-00-00 00:00:00',1,'2018-08-16 21:04:56'),(4,36,'1002','SODA 600 ML',1,'','2018-08-16 21:04:56','0000-00-00 00:00:00',1,'2018-08-16 21:04:56'),(5,38,'1002','SODA 600 ML',1,'','2018-08-16 21:12:05','0000-00-00 00:00:00',1,'2018-08-16 21:12:05'),(6,38,'3002','TORTA CUBANA',1,'','2018-08-16 21:12:05','0000-00-00 00:00:00',1,'2018-08-16 21:12:05'),(7,39,'1002','SODA 600 ML',1,'','2018-08-16 21:15:33','0000-00-00 00:00:00',1,'2018-08-16 21:15:33'),(8,39,'3001','CLUB SANWISH',1,'','2018-08-16 21:15:33','0000-00-00 00:00:00',1,'2018-08-16 21:15:33'),(9,40,'3001','CLUB SANWISH',1,'','2018-08-16 21:17:49','0000-00-00 00:00:00',1,'2018-08-16 21:17:49'),(10,40,'1002','SODA 600 ML',1,'','2018-08-16 21:17:49','0000-00-00 00:00:00',1,'2018-08-16 21:17:49'),(11,41,'1002','SODA 600 ML',1,'','2018-08-16 21:18:36','0000-00-00 00:00:00',1,'2018-08-16 21:18:36'),(12,41,'3002','TORTA CUBANA',1,'','2018-08-16 21:18:36','0000-00-00 00:00:00',1,'2018-08-16 21:18:36'),(13,42,'3002',NULL,1,'','2018-08-16 22:32:37','0000-00-00 00:00:00',1,'2018-08-16 22:32:37'),(14,43,'3002','torta de jamon',3,'sin mayonesa','2018-08-16 22:45:29','0000-00-00 00:00:00',1,'2018-08-16 22:45:29'),(15,45,'3002','TORTA CUBANA',1,'','2018-08-16 22:46:20','0000-00-00 00:00:00',1,'2018-08-16 22:46:20'),(16,46,'3001','CLUB SANWISH',3,'sin queso','2018-08-16 22:48:37','0000-00-00 00:00:00',1,'2018-08-16 22:48:37'),(17,47,'3001','CLUB SANWISH',2,'','2018-08-16 23:01:29','0000-00-00 00:00:00',1,'2018-08-16 23:01:29'),(18,47,'3002','TORTA CUBANA',2,'si mayonesa','2018-08-16 23:01:29','0000-00-00 00:00:00',1,'2018-08-16 23:01:29'),(19,48,'3003','TORTA DE JAMON',1,'','2018-08-16 23:51:06','0000-00-00 00:00:00',1,'2018-08-16 23:51:06'),(20,49,'3002','TORTA CUBANA',1,'','2018-08-17 17:49:58','0000-00-00 00:00:00',1,'2018-08-17 17:49:58'),(21,50,'3002','TORTA CUBANA',1,'','2018-08-17 17:55:51','0000-00-00 00:00:00',1,'2018-08-17 17:55:51'),(22,52,'3002','TORTA CUBANA',1,'','2018-09-04 03:25:40','0000-00-00 00:00:00',1,'2018-09-04 03:25:40'),(23,53,'3002','TORTA CUBANA',1,'','2018-09-13 01:42:40','0000-00-00 00:00:00',1,'2018-09-13 01:42:40'),(24,54,'3002','TORTA CUBANA',1,'','2018-09-24 14:46:10','0000-00-00 00:00:00',1,'2018-09-24 14:46:10'),(25,55,'3002','TORTA CUBANA',1,'','2018-09-24 14:50:44','0000-00-00 00:00:00',1,'2018-09-24 14:50:44'),(26,56,'3002','TORTA CUBANA',1,'','2018-09-24 14:55:06','0000-00-00 00:00:00',1,'2018-09-24 14:55:06'),(27,60,'3001','CLUB SANWISH',1,'','2018-09-27 16:10:39','0000-00-00 00:00:00',1,'2018-09-27 16:10:39'),(28,61,'3001','CLUB SANWISH',1,'','2018-09-27 16:12:04','0000-00-00 00:00:00',1,'2018-09-27 16:12:04'),(29,62,'3001','CLUB SANWISH',1,'','2018-09-27 16:12:26','0000-00-00 00:00:00',1,'2018-09-27 16:12:26'),(30,63,'3001','CLUB SANWISH',1,'','2018-09-27 16:15:23','0000-00-00 00:00:00',0,'2018-09-27 16:15:23'),(31,64,'3002','TORTA CUBANA',1,'','2018-09-28 18:23:26','0000-00-00 00:00:00',0,'2018-09-28 18:23:26'),(32,66,'3001','CLUB SANWISH',1,'','2018-09-28 18:59:41','0000-00-00 00:00:00',0,'2018-09-28 18:59:41'),(33,67,'3001','CLUB SANWISH',1,'','2018-09-28 19:01:44','0000-00-00 00:00:00',0,'2018-09-28 19:01:44'),(34,68,'3001','CLUB SANWISH',1,'','2018-09-28 19:21:29','0000-00-00 00:00:00',0,'2018-09-28 19:21:29'),(35,69,'3002','TORTA CUBANA',1,'','2018-09-28 19:22:06','0000-00-00 00:00:00',0,'2018-09-28 19:22:06'),(36,70,'3001','CLUB SANWISH',1,'','2018-09-28 19:34:30','0000-00-00 00:00:00',0,'2018-09-28 19:34:30'),(37,72,'3001','CLUB SANWISH',1,'','2018-09-29 00:06:09','0000-00-00 00:00:00',0,'2018-09-29 00:06:09'),(38,74,'3001','CLUB SANWISH',1,'','2018-10-01 23:59:44','0000-00-00 00:00:00',0,'2018-10-01 23:59:44'),(39,76,'3001','CLUB SANWISH',1,'','2018-10-02 00:16:13','0000-00-00 00:00:00',0,'2018-10-02 00:16:13'),(40,79,'3001','CLUB SANWISH',1,'','2018-10-02 03:37:17','0000-00-00 00:00:00',0,'2018-10-02 03:37:17'),(41,80,'3001','CLUB SANWISH',1,'','2018-10-02 03:50:30','0000-00-00 00:00:00',0,'2018-10-02 03:50:30');
/*!40000 ALTER TABLE `kiosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platillos`
--

DROP TABLE IF EXISTS `platillos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platillos` (
  `idPlatillo` varchar(100) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` decimal(5,1) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPlatillo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platillos`
--

LOCK TABLES `platillos` WRITE;
/*!40000 ALTER TABLE `platillos` DISABLE KEYS */;
INSERT INTO `platillos` VALUES ('3001','CLUB SANWISH',45.0,'2018-08-09 22:33:13'),('3002','TORTA CUBANA',45.0,'2018-08-09 22:33:44'),('3003','TORTA DE JAMON!',40.0,'2018-08-09 22:34:06'),('3004','BURRO DE FRIJOL CON QUESO',16.0,'2018-09-27 17:21:45'),('3005','sopa de fideos',45.0,'2018-09-28 16:14:18'),('3006','BURRO DE QUESO',15.0,'2018-10-02 03:34:25');
/*!40000 ALTER TABLE `platillos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'kjsdfnkjsdf',5,14.5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabla`
--

DROP TABLE IF EXISTS `tabla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dato1` varchar(50) DEFAULT NULL,
  `dato2` varchar(50) DEFAULT NULL,
  `dato3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabla`
--

LOCK TABLES `tabla` WRITE;
/*!40000 ALTER TABLE `tabla` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidoPaterno` varchar(50) DEFAULT NULL,
  `apellidoMaterno` varchar(50) DEFAULT NULL,
  `user` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Carlos','Alcantar','Gonzalezz','carlos','nomelose',1,'2018-03-20 20:53:37'),(5,'ramses','tamayo','ledesma','ramses','ramses',1,'2018-06-24 18:45:44'),(7,'jose','lopez','gomez','jose','jose123',1,NULL),(8,'RAMON','SALGADO','GONZALEZ','RSALDAGO','SALGADO',0,NULL),(9,'STEPHANI','MIA','LOPEZ','NOSE','NOSE',0,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id_venta` int(11) DEFAULT NULL,
  `id_cajero` varchar(50) DEFAULT NULL,
  `id_cliente` varchar(50) DEFAULT NULL,
  `id_producto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pu` decimal(5,2) DEFAULT NULL,
  `total` decimal(5,2) DEFAULT NULL,
  `nota` varchar(100) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0',
  `id_operacion` int(11) NOT NULL AUTO_INCREMENT,
  `Eliminada` int(11) DEFAULT '0',
  PRIMARY KEY (`id_operacion`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-10 23:23:04',1,1,1),(1,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-10 23:23:04',1,2,1),(1,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:23:04',1,3,1),(2,'1','1411','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-10 23:23:24',1,4,0),(2,'1','1411','2001','QUESO PARA NACHO 200ML',2,15.00,30.00,'','2018-08-10 23:23:24',1,5,0),(3,'1','0','1001','SOPA EN VASO',2,15.00,30.00,'','2018-08-10 23:24:01',0,6,0),(3,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:24:01',0,7,0),(4,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:24:22',1,8,1),(5,'1','1411','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-10 23:25:41',1,9,1),(6,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:26:40',1,10,1),(6,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:26:40',1,11,1),(7,'1','1410','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-10 23:34:31',1,12,1),(8,'1','1410','1001','SOPA EN VASO',2,15.00,30.00,'','2018-08-10 23:35:36',1,13,1),(9,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:39:45',1,14,1),(9,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:39:45',1,15,1),(9,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-10 23:39:45',1,16,1),(10,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-08-10 23:41:03',1,17,1),(11,'1','1410','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-10 23:44:58',1,18,1),(11,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:44:58',1,19,1),(12,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-10 23:45:17',1,20,1),(12,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:45:17',1,21,1),(13,'1','0','1001','SOPA EN VASO',2,15.00,30.00,'','2018-08-10 23:55:17',0,22,1),(13,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:55:17',1,23,1),(14,'1','1410','1002','SODA 600 ML',3,16.00,48.00,'','2018-08-10 23:55:41',1,24,1),(15,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-10 23:58:34',1,25,0),(15,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:58:34',1,26,0),(16,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-10 23:58:50',1,27,0),(16,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:58:50',1,28,0),(17,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-10 23:59:17',1,29,0),(17,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-08-10 23:59:17',1,30,0),(17,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-10 23:59:17',1,31,0),(18,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-13 22:34:14',1,32,0),(18,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 22:34:14',1,33,0),(19,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-13 22:34:35',1,34,0),(19,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 22:34:35',1,35,0),(20,'1','1411','1001','SOPA EN VASO',1,15.00,15.00,'','2018-08-13 22:35:09',1,36,0),(20,'1','1411','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 22:35:09',1,37,0),(21,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-13 23:03:45',1,38,0),(21,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-13 23:03:45',1,39,0),(22,'1','1411','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:04:03',1,40,0),(22,'1','1411','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-13 23:04:03',1,41,0),(23,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:12:24',1,42,0),(23,'1','1410','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-13 23:12:24',1,43,0),(24,'1','1411','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-13 23:12:50',1,44,0),(24,'1','1411','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 23:12:50',1,45,0),(25,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:16:32',1,46,0),(25,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-13 23:16:32',1,47,0),(26,'1','1411','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:17:01',1,48,0),(26,'1','1411','3002','TORTA CUBANA',2,45.00,90.00,'','2018-08-13 23:17:01',1,49,0),(27,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:23:46',1,50,0),(27,'1','1410','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-13 23:23:46',1,51,0),(28,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:25:31',1,52,0),(28,'1','1410','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-13 23:25:31',1,53,0),(29,'1','1411','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:25:48',1,54,0),(29,'1','1411','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-13 23:25:48',1,55,0),(30,'1','1410','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:26:27',1,56,1),(30,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 23:26:27',1,57,1),(30,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-08-13 23:26:27',1,58,1),(30,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-13 23:26:27',1,59,1),(31,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-13 23:26:59',1,60,0),(31,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-13 23:26:59',1,61,0),(31,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-13 23:26:59',1,62,0),(32,'1','1415','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-13 23:28:27',0,63,0),(32,'1','1415','3002','TORTA CUBANA',2,45.00,90.00,'','2018-08-13 23:28:27',0,64,0),(33,'1','1412','1003','SABRITAS 600G',1,18.00,18.00,'','2018-08-16 20:53:27',0,65,0),(33,'1','1412','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-16 20:53:27',0,66,0),(33,'1','1412','3002','TORTA CUBANA',1,45.00,45.00,'sin jalapaneos','2018-08-16 20:53:27',0,67,0),(34,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 20:57:48',0,68,0),(34,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'sin mayonesa','2018-08-16 20:57:48',0,69,0),(35,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:03:14',0,70,0),(36,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'sin queso','2018-08-16 21:04:56',0,71,0),(36,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:04:56',0,72,0),(37,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:08:13',0,73,0),(37,'1','0','3003','TORTA DE JAMON',1,35.00,35.00,'ok','2018-08-16 21:08:13',0,74,0),(38,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:12:05',0,75,0),(38,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-16 21:12:05',0,76,0),(39,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:15:33',0,77,0),(39,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-16 21:15:33',0,78,0),(40,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-08-16 21:17:49',0,79,0),(40,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:17:49',0,80,0),(41,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 21:18:36',0,81,0),(41,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-16 21:18:36',0,82,0),(42,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 22:32:37',0,83,0),(42,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-16 22:32:37',0,84,0),(43,'1','0','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 22:35:01',0,85,0),(43,'1','0','3003','TORTA DE JAMON',3,35.00,105.00,'','2018-08-16 22:35:01',0,86,0),(44,'1','0','3003','TORTA DE JAMON',3,35.00,105.00,'','2018-08-16 22:37:19',0,87,0),(44,'1','0','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-16 22:37:19',0,88,0),(45,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-16 22:46:20',0,89,0),(46,'1','0','1002','SODA 600 ML',3,16.00,48.00,'','2018-08-16 22:48:37',0,90,0),(46,'1','0','3001','CLUB SANWISH',3,45.00,135.00,'sin queso','2018-08-16 22:48:37',0,91,0),(47,'1','0','1002','SODA 600 ML',2,16.00,32.00,'','2018-08-16 23:01:29',0,92,0),(47,'1','0','3001','CLUB SANWISH',2,45.00,90.00,'','2018-08-16 23:01:29',0,93,0),(47,'1','0','3002','TORTA CUBANA',2,45.00,90.00,'si mayonesa','2018-08-16 23:01:29',0,94,0),(47,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-08-16 23:01:29',0,95,0),(48,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-16 23:51:06',1,96,0),(48,'1','1410','1003','SABRITAS 600G',1,18.00,18.00,'','2018-08-16 23:51:06',1,97,0),(48,'1','1410','3003','TORTA DE JAMON',1,35.00,35.00,'','2018-08-16 23:51:06',1,98,0),(49,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-17 17:49:58',1,99,0),(49,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-08-17 17:49:58',1,100,0),(50,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-08-17 17:55:51',0,101,0),(51,'1','1410','1001','SOPA EN VASO',2,15.00,30.00,'','2018-09-04 03:17:33',1,102,0),(52,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-04 03:25:40',0,103,0),(52,'1','0','2002','SALSA VALENTINA 200ML',1,15.00,15.00,'','2018-09-04 03:25:40',0,104,0),(52,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-04 03:25:40',0,105,0),(53,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-13 01:42:40',0,106,0),(53,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-13 01:42:40',0,107,0),(54,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-24 14:46:10',1,108,0),(54,'1','1410','2002','SALSA VALENTINA 200ML',1,15.00,15.00,'','2018-09-24 14:46:10',1,109,0),(54,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-24 14:46:10',1,110,0),(54,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-09-24 14:46:10',1,111,0),(55,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-24 14:50:44',1,112,0),(55,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-09-24 14:50:44',1,113,0),(55,'1','1410','2002','SALSA VALENTINA 200ML',1,15.00,15.00,'','2018-09-24 14:50:44',1,114,0),(55,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-24 14:50:44',1,115,0),(56,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-24 14:55:06',1,116,0),(56,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-09-24 14:55:06',1,117,0),(56,'1','1410','2001','QUESO PARA NACHO 200ML',1,15.00,15.00,'','2018-09-24 14:55:06',1,118,0),(56,'1','1410','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-24 14:55:06',1,119,0),(57,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-24 15:02:44',0,120,0),(58,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-24 15:03:07',0,121,0),(59,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-25 03:11:57',1,122,0),(59,'1','1410','1002','SODA 600 ML',1,16.00,16.00,'','2018-09-25 03:11:57',1,123,0),(59,'1','1410','1003','SABRITAS 600G',1,18.00,18.00,'','2018-09-25 03:11:57',1,124,0),(60,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-27 16:10:39',1,125,0),(60,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-27 16:10:39',1,126,0),(61,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-27 16:12:04',1,127,0),(61,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-27 16:12:04',1,128,0),(62,'1','1411','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-27 16:12:26',1,129,0),(62,'1','1411','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-27 16:12:26',1,130,0),(63,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-27 16:15:23',1,131,0),(64,'1','0','1001','SOPA EN VASO',2,15.00,30.00,'','2018-09-28 18:23:26',0,132,0),(64,'1','0','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-28 18:23:26',0,133,0),(65,'1','0','1001','SOPA EN VASO',2,15.00,30.00,'','2018-09-28 18:30:52',0,134,0),(66,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-28 18:59:41',0,135,0),(66,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-28 18:59:41',0,136,0),(67,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-28 19:01:44',1,137,0),(67,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-28 19:01:44',1,138,0),(67,'1','1410','2001','QUESO PARA NACHO 200ML',1,15.00,15.00,'','2018-09-28 19:01:44',1,139,0),(68,'1','1411','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-28 19:21:29',1,140,0),(68,'1','1411','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-28 19:21:29',1,141,0),(69,'1','1411','1002','SODA 600 ML',1,16.00,16.00,'','2018-09-28 19:22:06',1,142,0),(69,'1','1411','3002','TORTA CUBANA',1,45.00,45.00,'','2018-09-28 19:22:06',1,143,0),(70,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-28 19:34:30',0,144,0),(70,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-28 19:34:30',0,145,0),(71,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-28 20:11:42',0,146,0),(72,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-09-29 00:06:09',0,147,0),(72,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-09-29 00:06:09',0,148,0),(73,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-10-01 23:22:47',1,149,0),(74,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-10-01 23:59:44',0,150,0),(74,'1','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-10-01 23:59:44',0,151,0),(75,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-10-02 00:13:17',1,152,0),(76,'1','1410','1001','SOPA EN VASO',2,15.00,30.00,'','2018-10-02 00:16:13',1,153,0),(76,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-10-02 00:16:13',1,154,0),(77,'1','0','1001','SOPA EN VASO',1,15.00,15.00,'','2018-10-02 03:06:46',0,155,0),(78,'1','0','096619523665','AGUA 600ML',2,11.00,22.00,'','2018-10-02 03:09:36',0,156,0),(79,'1','1410','096619523665','AGUA DE 600ML',5,11.00,55.00,'','2018-10-02 03:37:17',1,157,0),(79,'1','1410','3001','CLUB SANWISH',1,45.00,45.00,'','2018-10-02 03:37:17',1,158,0),(80,'9','0','3001','CLUB SANWISH',1,45.00,45.00,'','2018-10-02 03:50:30',0,159,0),(81,'1','1410','1001','SOPA EN VASO',1,15.00,15.00,'','2018-10-02 17:51:37',0,160,0);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cafeteria'
--
/*!50003 DROP PROCEDURE IF EXISTS `actualizacaja` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizacaja`(
id_operacion1 int,
cantidad1 decimal(5,2),
nota1 varchar(50)
)
BEGIN
DECLARE id_producto1 nvarchar(50);
DECLARE pu decimal(5,2);
DECLARE total1 decimal(5,2);
set id_producto1=(select id_producto from caja where id_operacion=id_operacion1);
set pu = (select precio_unitario from inventario where id_articulo=id_producto1);
set total1=pu*cantidad1;
update caja set cantidad=cantidad1,
total=total1, nota=nota1 where id_operacion=id_operacion1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actualizacliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizacliente`(
id_cliente1 nvarchar(50),
nombre1 nvarchar (50),
ap_paterno1 nvarchar(50),
ap_materno1 nvarchar (50),
credito1 nvarchar (50) 
)
BEGIN
update clientes set nombre=nombre1 , ap_paterno=ap_paterno1 , ap_materno=ap_materno1
,  credito=credito1 where id_cliente= id_cliente1 ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actualizaingrediente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizaingrediente`(
id_ingrediente1 varchar(100),
descripcion1 varchar(100),
precio1 decimal(5,2)
)
BEGIN
update ingredientesextras set nombre_ingrediente=descripcion1,
precio=precio1 where id_ingrediente=id_ingrediente1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actualizaplatillo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizaplatillo`(
id_platillo1 varchar(100),
descripcion1 varchar(100),
precio1 decimal(5,2)
)
BEGIN
update platillos set descripcion=descripcion1,
precio=precio1 where idPlatillo=id_platillo1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actulizainventario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actulizainventario`(
id_articulo1 varchar(100),
descripcion1 varchar(100),
cantidad1 decimal(5,2),
precio1 decimal(5,2)
)
BEGIN
update inventario set descripcion=descripcion1,cantidad=cantidad1,
precio_unitario=precio1 where id_articulo=id_articulo1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `cobrocaja` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `cobrocaja`(
 id_cajero1 int
)
BEGIN
DECLARE subtotal decimal(5,2);
DECLARE total1 decimal(5,2);
set subtotal=(select sum(total) from caja where id_cajero=id_cajero1);
select  subtotal;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultacaja` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultacaja`(
id_cajero1 int
)
BEGIN
select * from caja where id_cajero=id_cajero1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultaticket` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaticket`(
id_cajero1 int
)
BEGIN
declare num_venta int;

set num_venta= (select   max(id_venta) from ventas where id_cajero=id_cajero1);
select *  from ventas where id_venta=num_venta;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultaticket2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaticket2`(
id_cliente1 int
)
BEGIN
declare num_venta int;

select  * from ventas where id_cliente=id_cliente1 and status =0;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `eliminacaja` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminacaja`(
id_operacion1 int,
id_cajero1 varchar(50)
)
BEGIN
delete from caja where id_operacion=id_operacion1 and id_cajero=id_cajero1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ELIMINARUSUARIO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ELIMINARUSUARIO`(id nvarchar(50))
DELETE  FROM usuarios WHERE id=id ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertacliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertacliente`(
id_cliente1 nvarchar(50),
nombre1 nvarchar (50),
ap_paterno1 nvarchar(50),
ap_materno1 nvarchar (50),
credito1 nvarchar (50) 
)
BEGIN
insert into clientes (id_cliente,nombre,ap_paterno,ap_materno,credito)values(id_cliente1,nombre1,ap_paterno1,ap_materno1,credito1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `INSERTAREMPLEADO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERTAREMPLEADO`(NOMBRE VARCHAR(50),
 APELLLIDO_PATERNO VARCHAR(50),
 APELLIDO_MATERNO VARCHAR(50),
  USER NVARCHAR(50),
PASSWORD VARCHAR(50),
  TIPO_USUARIO INT 
  )
INSERT INTO usuarios(NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,USER,PASSWORD,TIPO_USUARIO)VALUES(NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,USER,PASSWORD,TIPO_USUARIO) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertaringredientes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertaringredientes`(
id_ingrediente1 varchar(100),
nombre_ingrediente1 varchar(100),
precio1 decimal(5,1)
)
BEGIN
insert into IngredientesExtras(id_ingrediente,nombre_ingrediente,precio)
values(id_ingrediente1,nombre_ingrediente1,precio1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertarinventario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarinventario`(
id_articulo1 varchar(100),
descripcion1 varchar(100),
cantidad1 decimal(5,1),
precio_unitario1 decimal(5,2))
BEGIN
insert into inventario(id_articulo,descripcion,cantidad,precio_unitario)
values(id_articulo1,descripcion1,cantidad1,precio_unitario1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertarplatillo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarplatillo`(
id_platillo1 varchar(100),
descripcion1 varchar(100),
precio1 decimal(5,2))
BEGIN
insert into platillos(idPlatillo,descripcion,precio)
values(id_platillo1,descripcion1,precio1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ProcesaEliminaVenta` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcesaEliminaVenta`(
id_venta1 int,
id_cajero1 varchar(50)
)
BEGIN
update ventas set Eliminada=1, id_cajero=id_cajero1 where id_venta=id_venta1 and id_operacion!=0;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ProcesaPagoCliente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcesaPagoCliente`(
id_cliente1 varchar(50),
id_cajero1 varchar(50)
)
BEGIN
update ventas set status=1, id_cajero=id_cajero1 where id_cliente=id_cliente1 and id_operacion!=0;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `procesaventa` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `procesaventa`(
id_cajero1 int,
id_producto1 nvarchar(50),
cantidad1 decimal(5,0),
nota1 nvarchar(100),
id_cliente1 nvarchar(500)
)
BEGIN
DECLARE pu decimal(5,2);
DECLARE total decimal(5,2);
DECLARE descripcion1 nvarchar(50);
DECLARE cantidad2 decimal(5,0);
DECLARE resta int;
set @consulta=(select id_articulo from inventario where id_articulo=id_producto1 );
set @consulta2=(select idPlatillo from platillos where idPlatillo=id_producto1 );
set @consulta3=(select id_ingrediente from ingredientesextras where id_ingrediente=id_producto1 );

IF (TRIM(@consulta)!='') THEN

set pu = (select precio_unitario from inventario where id_articulo=id_producto1);
set descripcion1=(select descripcion from inventario where id_articulo=id_producto1);
set cantidad2=(select cantidad from inventario where id_articulo=id_producto1);
set total=pu*cantidad1;
set resta=cantidad2-cantidad1;

update inventario set cantidad=resta where id_articulo=id_producto1;
insert into caja(id_cajero,id_cliente,id_producto,descripcion,cantidad,pu,total, nota)
values(id_cajero1,id_cliente1,id_producto1,descripcion1,cantidad1,pu,total,nota1);

else
   SELECT 'flag1';
   
END IF;

IF (TRIM(@consulta2)!='') THEN

set pu = (select precio from platillos where idPlatillo=id_producto1);
set descripcion1=(select descripcion from platillos where idPlatillo=id_producto1);

set total=pu*cantidad1;
insert into caja(id_cajero,id_cliente,id_producto,descripcion,cantidad,pu,total, nota)
values(id_cajero1,id_cliente1,id_producto1,descripcion1,cantidad1,pu,total,nota1);
else
   SELECT 'flag2';
END IF;


IF (TRIM(@consulta3)!='') THEN

set pu = (select precio from ingredientesextras where id_ingrediente=id_producto1);
set descripcion1=(select nombre_ingrediente from ingredientesextras where id_ingrediente=id_producto1);

set total=pu*cantidad1;
insert into caja(id_cajero,id_cliente,id_producto,descripcion,cantidad,pu,total, nota)
values(id_cajero1,id_cliente1,id_producto1,descripcion1,cantidad1,pu,total,nota1);
else
   SELECT 'flag3';
END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `procesa_kiosco` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `procesa_kiosco`(
folio1 int,
id_producto1 nvarchar(50),
descripcion1 varchar(50),
cantidad1 int,
nota1 nvarchar(50)
)
BEGIN
DECLARE consulta1 nvarchar(50);
set consulta1=( select idPlatillo from platillos where idPlatillo=id_producto1);

if(consulta1!="") then
insert into kiosco (folio,id_producto,descripcion,cantidad,nota)values(folio1,id_producto1,descripcion1,cantidad1,nota1);
else 
select flag2;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `termina_orden` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `termina_orden`(
id_operacion1 int
)
BEGIN
update kiosco set status=1 where id_operacion=id_operacion1 ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `totalticket` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `totalticket`(
id_cajero1 int
)
BEGIN
declare num_venta int;

set num_venta= (select   max(id_venta) from ventas where id_cajero=id_cajero1);
select sum(total) from ventas where id_venta=num_venta;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `totalticket2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `totalticket2`(
id_cliente1 int
)
BEGIN
select   sum(total) from ventas where id_cliente=id_cliente1 and status=0;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `totalticket3` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `totalticket3`(
folio int
)
BEGIN
select   sum(total) from ventas where id_venta=folio;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `totalticket4` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `totalticket4`(
folio int
)
BEGIN
select   *  from ventas where id_venta=folio;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `VENTAFINAL` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `VENTAFINAL`(
id_cajero1 varchar(50)
)
BEGIN
declare contador int;
DECLARE id_producto1 nvarchar(100);
declare descripcion1 nvarchar(100);
declare cantidad1 int ;
declare pu1 decimal(5,2);
declare total1 decimal(5,2);
declare nota1 nvarchar(100);


set contador = (select count(id_operacion) from caja where id_cajero=id_cajero1);
set id_producto1= (select id_producto from caja where id_cajero=id_cajero1);
/*set descripcion1= (select descripcion from caja where id_cajero=id_cajero1);
set cantidad1= (select cantidad from caja where id_cajero=id_cajero1);
set pu1= (select pu from caja where id_cajero=id_cajero1);
set total1= (select total from caja where id_cajero=id_cajero1);
set nota1= (select nota1 from caja where id_cajero=id_cajero1);
*/
select id_operacion1;
select id_producto1;


/*insert into ventas(id_cajero,id_producto,descripcion,cantidad,pu,total,nota)
values(id_cajero1,id_producto1,descripcion1,cantidad1,pu1,total1,nota1); */

/*delete from caja where id_operacion=id_operacion1;*/
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-02 10:57:51
