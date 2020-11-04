/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - dedrab
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ded` */

CREATE TABLE `ded` (
  `id_ded` int(8) NOT NULL AUTO_INCREMENT,
  `id_desain` int(8) DEFAULT NULL,
  `nama_ded` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  PRIMARY KEY (`id_ded`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ded` */

insert  into `ded`(`id_ded`,`id_desain`,`nama_ded`,`foto`) values 
(1,1,'a','a.png'),
(2,1,'b','b.png'),
(3,1,'c','c.png'),
(4,1,'d','d.png'),
(5,1,'e','e.png'),
(6,1,'f','f.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
