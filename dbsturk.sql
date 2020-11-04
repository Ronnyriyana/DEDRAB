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
/*Table structure for table `akun` */

CREATE TABLE `akun` (
  `id_akun` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `desain` */

CREATE TABLE `desain` (
  `id_desain` int(10) NOT NULL AUTO_INCREMENT,
  `id_proyek` int(4) DEFAULT NULL,
  `nama_desain` varchar(40) DEFAULT NULL,
  `spek` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  PRIMARY KEY (`id_desain`),
  KEY `id_proyek` (`id_proyek`),
  CONSTRAINT `desain_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id_proyek`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `harga_upah_material` */

CREATE TABLE `harga_upah_material` (
  `id_hum` int(10) NOT NULL AUTO_INCREMENT,
  `nama_um` text DEFAULT NULL,
  `spesifikasi` text DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `asal_harga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori_pekerjaan` */

CREATE TABLE `kategori_pekerjaan` (
  `id_kp` int(10) NOT NULL AUTO_INCREMENT,
  `id_desain` int(10) DEFAULT NULL,
  `nama_kp` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_kp`),
  KEY `id_desain` (`id_desain`),
  CONSTRAINT `kategori_pekerjaan_ibfk_1` FOREIGN KEY (`id_desain`) REFERENCES `desain` (`id_desain`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `pekerjaan` */

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT,
  `id_kp` int(10) DEFAULT NULL,
  `nama_pekerjaan` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `volume` double DEFAULT NULL,
  `harga_satuan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`),
  KEY `id_kp` (`id_kp`),
  CONSTRAINT `pekerjaan_ibfk_1` FOREIGN KEY (`id_kp`) REFERENCES `kategori_pekerjaan` (`id_kp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `proyek` */

CREATE TABLE `proyek` (
  `id_proyek` int(4) NOT NULL AUTO_INCREMENT,
  `nama_proyek` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `upah_material_terpakai` */

CREATE TABLE `upah_material_terpakai` (
  `id_umt` int(10) NOT NULL AUTO_INCREMENT,
  `id_desain` int(10) DEFAULT NULL,
  `id_hum` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_umt`),
  KEY `id_desain` (`id_desain`),
  KEY `id_material` (`id_hum`),
  CONSTRAINT `upah_material_terpakai_ibfk_1` FOREIGN KEY (`id_desain`) REFERENCES `desain` (`id_desain`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `upah_material_terpakai_ibfk_2` FOREIGN KEY (`id_hum`) REFERENCES `harga_upah_material` (`id_hum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
