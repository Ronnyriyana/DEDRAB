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
  `id_akun` int(6) NOT NULL AUTO_INCREMENT,
  `id_desain` int(6) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_akun`),
  KEY `desain` (`id_desain`),
  CONSTRAINT `desain` FOREIGN KEY (`id_desain`) REFERENCES `desain` (`id_desain`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `akun` */

insert  into `akun`(`id_akun`,`id_desain`,`username`,`password`,`level`) values 
(1,NULL,'bambang','$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O','kuwu'),
(2,NULL,'admin','$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O','admin');

/*Table structure for table `ci_sessions` */

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('gmb0bei9u3qcvnafj47fbrh7fkudihni','::1',1607698142,'__ci_last_regenerate|i:1607698142;'),
('033qvd45agc7rsjfkvr40ti2ke8mf36d','::1',1607698856,'__ci_last_regenerate|i:1607698856;'),
('edmdkgaj07ete7i8frva4v9deao5k4e8','::1',1607699261,'__ci_last_regenerate|i:1607699261;'),
('t4mrsk0233o29qj10jca2psrp2pumt34','::1',1607699869,'__ci_last_regenerate|i:1607699869;'),
('ciqheafuc80froj85nt3ohi3d0d2vqae','::1',1607700177,'__ci_last_regenerate|i:1607700177;'),
('e8o7ohbo1ipda95apvo7sidjeaaij5f6','::1',1607700571,'__ci_last_regenerate|i:1607700571;'),
('tkp7urulaut5ahctcct829o8eoejf9id','::1',1607700480,'__ci_last_regenerate|i:1607700480;'),
('178pcst9hmmups7hupq6q10soh3b9q0q','::1',1607700986,'__ci_last_regenerate|i:1607700986;'),
('52nlpc9u3cji5k3dbooq2tjijc585ab2','::1',1607701603,'__ci_last_regenerate|i:1607701603;'),
('vekteslbr81pi7crilu5lajsccd73b1u','::1',1607701921,'__ci_last_regenerate|i:1607701921;'),
('163e2jjrcn2dpov3u6nus1n398kbk8ln','::1',1607702357,'__ci_last_regenerate|i:1607702357;'),
('27aaltb5ejcq7qhelh91slhnjdout13f','::1',1607702692,'__ci_last_regenerate|i:1607702692;user_logged|O:8:\"stdClass\":5:{s:7:\"id_akun\";s:1:\"1\";s:9:\"id_desain\";N;s:8:\"username\";s:7:\"bambang\";s:8:\"password\";s:60:\"$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O\";s:5:\"level\";s:4:\"kuwu\";}username|s:7:\"bambang\";level|s:4:\"kuwu\";id_desain|s:1:\"1\";'),
('gp63filce1macaphj8psndm6sit8e60d','::1',1607702998,'__ci_last_regenerate|i:1607702998;user_logged|O:8:\"stdClass\":5:{s:7:\"id_akun\";s:1:\"1\";s:9:\"id_desain\";N;s:8:\"username\";s:7:\"bambang\";s:8:\"password\";s:60:\"$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O\";s:5:\"level\";s:4:\"kuwu\";}username|s:7:\"bambang\";level|s:4:\"kuwu\";id_desain|s:1:\"1\";'),
('t9pngmrvt3vqd3o7d1vs0hldapr165sc','::1',1607702880,'__ci_last_regenerate|i:1607702879;id_desain|s:1:\"1\";'),
('n4v26jrjpqa9m3o0ms0gekhvvkgjclrp','::1',1607703706,'__ci_last_regenerate|i:1607703706;user_logged|O:8:\"stdClass\":5:{s:7:\"id_akun\";s:1:\"1\";s:9:\"id_desain\";N;s:8:\"username\";s:7:\"bambang\";s:8:\"password\";s:60:\"$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O\";s:5:\"level\";s:4:\"kuwu\";}username|s:7:\"bambang\";level|s:4:\"kuwu\";id_desain|s:1:\"1\";'),
('kqp989evgjfpflcdagpitj038ssjegfj','::1',1607704042,'__ci_last_regenerate|i:1607704042;id_desain|s:1:\"1\";'),
('96lbtbmctmrnikqbp3ar85nqhrd76l5m','::1',1607705032,'__ci_last_regenerate|i:1607705032;'),
('mgoemu1de2m1hn05fe37nn0ltdokh455','::1',1607707155,'__ci_last_regenerate|i:1607707155;'),
('q1k1f30qejvirtv62be5ocqt20pog4go','::1',1607705280,'__ci_last_regenerate|i:1607705280;'),
('mpl2uep9smbnm4i826k4g0jb6c26qj62','::1',1607707239,'__ci_last_regenerate|i:1607707155;user_logged|O:8:\"stdClass\":5:{s:7:\"id_akun\";s:1:\"1\";s:9:\"id_desain\";N;s:8:\"username\";s:7:\"bambang\";s:8:\"password\";s:60:\"$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O\";s:5:\"level\";s:4:\"kuwu\";}username|s:7:\"bambang\";level|s:4:\"kuwu\";id_desain|s:1:\"1\";');

/*Table structure for table `ded` */

CREATE TABLE `ded` (
  `id_ded` int(8) NOT NULL AUTO_INCREMENT,
  `id_desain` int(8) DEFAULT NULL,
  `nama_ded` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  PRIMARY KEY (`id_ded`),
  KEY `desain-ded` (`id_desain`),
  CONSTRAINT `desain-ded` FOREIGN KEY (`id_desain`) REFERENCES `desain` (`id_desain`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ded` */

insert  into `ded`(`id_ded`,`id_desain`,`nama_ded`,`foto`) values 
(1,1,'a','a.png'),
(2,1,'b','b.png'),
(3,1,'c','c.png'),
(4,1,'d','d.png'),
(5,1,'e','e.png'),
(6,1,'f','f.png');

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

/*Data for the table `desain` */

insert  into `desain`(`id_desain`,`id_proyek`,`nama_desain`,`spek`,`video`) values 
(1,1,'Tipe Terbuka (5 x 23.5 m)','- Pondasi Batu Kali</br>\r\n- Struktur Beton Berlubang</br>\r\n- Rangka Atap Baja Ringan','POSYANDU.MP4'),
(2,1,'Tipe 5 x 7 m','- Pondasi Batu Kali </br>\r\n- Struktur Beton Bertulang </br>\r\n- Rangka Atap Baja Ringan','POSYANDU2.MP4');

/*Table structure for table `harga_material` */

CREATE TABLE `harga_material` (
  `id_harga_material` int(6) NOT NULL AUTO_INCREMENT,
  `id_material` int(6) DEFAULT NULL,
  `id_kategori_harga` int(6) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_harga_material`),
  KEY `um-harga` (`id_material`),
  KEY `kategori-harga` (`id_kategori_harga`),
  CONSTRAINT `kategori-harga` FOREIGN KEY (`id_kategori_harga`) REFERENCES `kategori_harga` (`id_kategori_harga`),
  CONSTRAINT `um-harga` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `harga_material` */

insert  into `harga_material`(`id_harga_material`,`id_material`,`id_kategori_harga`,`harga`) values 
(1,1,1,2800),
(2,1,2,3000),
(3,2,1,4500),
(4,2,2,5000),
(9,5,1,10000),
(10,5,2,12000);

/*Table structure for table `harga_upah` */

CREATE TABLE `harga_upah` (
  `id_harga_upah` int(6) NOT NULL AUTO_INCREMENT,
  `id_upah` int(6) DEFAULT NULL,
  `id_kategori_harga` int(6) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_harga_upah`),
  KEY `hu-upah` (`id_upah`),
  KEY `hu-kategori_harga` (`id_kategori_harga`),
  CONSTRAINT `hu-kategori_harga` FOREIGN KEY (`id_kategori_harga`) REFERENCES `kategori_harga` (`id_kategori_harga`),
  CONSTRAINT `hu-upah` FOREIGN KEY (`id_upah`) REFERENCES `upah` (`id_upah`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `harga_upah` */

insert  into `harga_upah`(`id_harga_upah`,`id_upah`,`id_kategori_harga`,`harga`) values 
(1,1,1,8000),
(2,2,1,10000),
(3,1,2,9000),
(4,2,2,11000);

/*Table structure for table `kategori_harga` */

CREATE TABLE `kategori_harga` (
  `id_kategori_harga` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori_harga` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_harga`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_harga` */

insert  into `kategori_harga`(`id_kategori_harga`,`nama_kategori_harga`) values 
(1,'Harga Kota Cirebon 2020'),
(2,'Harga Jawa Barat 2020');

/*Table structure for table `material` */

CREATE TABLE `material` (
  `id_material` int(6) NOT NULL AUTO_INCREMENT,
  `nama_material` text DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `material` */

insert  into `material`(`id_material`,`nama_material`,`satuan`) values 
(1,'Bata merah','bh'),
(2,'Genteng glazuur turbo ex Jatiwangi','bh'),
(5,'Pasir Urug','m3');

/*Table structure for table `material_terpakai` */

CREATE TABLE `material_terpakai` (
  `id_material_terpakai` int(6) NOT NULL AUTO_INCREMENT,
  `id_pekerjaan` int(6) DEFAULT NULL,
  `id_material` int(6) DEFAULT NULL,
  `koefisien` double DEFAULT NULL,
  PRIMARY KEY (`id_material_terpakai`),
  KEY `umt-hum` (`id_material`),
  KEY `umt-pekerjaan` (`id_pekerjaan`),
  CONSTRAINT `umt-hum` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `umt-pekerjaan` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `material_terpakai` */

insert  into `material_terpakai`(`id_material_terpakai`,`id_pekerjaan`,`id_material`,`koefisien`) values 
(1,1,1,0.987),
(4,2,2,1),
(7,1,5,0.5);

/*Table structure for table `pekerjaan` */

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(6) NOT NULL AUTO_INCREMENT,
  `id_desain` int(6) DEFAULT NULL,
  `nama_pekerjaan` varchar(30) DEFAULT NULL,
  `satuan` varchar(5) DEFAULT NULL,
  `volume` double DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`),
  KEY `id_desain` (`id_desain`),
  CONSTRAINT `id_desain` FOREIGN KEY (`id_desain`) REFERENCES `desain` (`id_desain`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pekerjaan` */

insert  into `pekerjaan`(`id_pekerjaan`,`id_desain`,`nama_pekerjaan`,`satuan`,`volume`) values 
(1,1,'Urugan Galian','m3',10),
(2,1,'Bangun tembok','m2',20),
(3,1,'Cat Tembok','m2',20),
(4,1,'Lukis Tembok','m2',10);

/*Table structure for table `proyek` */

CREATE TABLE `proyek` (
  `id_proyek` int(4) NOT NULL AUTO_INCREMENT,
  `nama_proyek` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `proyek` */

insert  into `proyek`(`id_proyek`,`nama_proyek`) values 
(1,'Posyandu'),
(2,'Gedung Serba Guna'),
(3,'Balai Pertemuan Kampung'),
(4,'Kantor Babinsa/Trimitra'),
(5,'Kantor Bumdes'),
(6,'Jalan Lingkungan'),
(7,'Rabat Beton Gang Desa'),
(8,'Drainase Jalan Lingkungan');

/*Table structure for table `upah` */

CREATE TABLE `upah` (
  `id_upah` int(6) NOT NULL AUTO_INCREMENT,
  `nama_upah` text DEFAULT NULL,
  `satuan` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_upah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `upah` */

insert  into `upah`(`id_upah`,`nama_upah`,`satuan`) values 
(1,'Mandor','hok'),
(2,'Pekerja','hok');

/*Table structure for table `upah_terpakai` */

CREATE TABLE `upah_terpakai` (
  `id_upah_terpakai` int(6) NOT NULL AUTO_INCREMENT,
  `id_pekerjaan` int(6) DEFAULT NULL,
  `id_upah` int(6) DEFAULT NULL,
  `koefisien` double DEFAULT NULL,
  PRIMARY KEY (`id_upah_terpakai`),
  KEY `ut-upah` (`id_upah`),
  KEY `ut-pekerjaan` (`id_pekerjaan`),
  CONSTRAINT `ut-pekerjaan` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`),
  CONSTRAINT `ut-upah` FOREIGN KEY (`id_upah`) REFERENCES `upah` (`id_upah`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `upah_terpakai` */

insert  into `upah_terpakai`(`id_upah_terpakai`,`id_pekerjaan`,`id_upah`,`koefisien`) values 
(1,1,1,0.45),
(2,1,2,0.95),
(3,2,1,0.45);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
