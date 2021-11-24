/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.38-MariaDB : Database - arsip_surat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arsip_surat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `arsip_surat`;

/*Table structure for table `surat` */

DROP TABLE IF EXISTS `surat`;

CREATE TABLE `surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(20) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `namafile` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`no_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `surat` */

insert  into `surat`(`id`,`no_surat`,`kategori`,`judul`,`waktu`,`namafile`) values 
(6,'	2020/PD3/TU/001','Undangan','Undangan Rapat Desa 2','2021-11-24 05:26:38','04. Soal Praktek Pemrograman PSDKU Kediri 2021.pdf'),
(7,'	2020/PD3/TU/002','Pengumuman','Hari Kemerdekaan','2021-11-24 05:28:39','04. Soal Praktek Pemrograman PSDKU Kediri 2021.pdf'),
(8,'	2020/PD3/TU/003','Pengumuman','Hari Kemerdekaan','2021-11-24 05:41:08','1931733087.pdf'),
(9,'	2020/PD3/TU/004','Pengumuman','Undangan Halal Bi Halal','2021-11-24 05:42:57','1931733087.pdf'),
(10,'	2020/PD3/TU/005','Undangan','Rapat Swadaya Masyarakat','2021-11-24 05:44:23','1931733087.pdf'),
(12,'	2020/PD3/TU/006','Undangan','Undangan Halal ','2021-11-24 06:20:21','1931733087.pdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
