/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.19-MariaDB : Database - db_siptk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_siptk` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_siptk`;

/*Table structure for table `tb_kapal` */

DROP TABLE IF EXISTS `tb_kapal`;

CREATE TABLE `tb_kapal` (
  `kapalId` int(11) NOT NULL AUTO_INCREMENT,
  `kapalKode` varchar(100) DEFAULT NULL,
  `kapalNama` varchar(255) DEFAULT NULL,
  `kapalKategori` int(11) DEFAULT NULL,
  `kapalKapasitas` int(11) DEFAULT NULL,
  `kapalPemilik` varchar(255) DEFAULT NULL,
  `kapalFoto` varchar(255) DEFAULT NULL,
  `kapalKeterangan` varchar(255) DEFAULT NULL,
  `kapalUpdatedAt` datetime DEFAULT NULL,
  `kapalCreatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`kapalId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kapal` */

insert  into `tb_kapal`(`kapalId`,`kapalKode`,`kapalNama`,`kapalKategori`,`kapalKapasitas`,`kapalPemilik`,`kapalFoto`,`kapalKeterangan`,`kapalUpdatedAt`,`kapalCreatedAt`) values 
(1,'KBS001','KM Binaya',1,150,'PT. Binaya Sejahtera','km-binaya.jpg','-','2022-05-18 16:45:32','2022-05-18 16:45:34');

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `kategoriId` int(11) NOT NULL AUTO_INCREMENT,
  `kategoriNama` varchar(255) DEFAULT NULL,
  `kategoriFasilitas` varchar(255) DEFAULT NULL,
  `kategoriUpdatedAt` datetime DEFAULT NULL,
  `kategoriCreatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`kategoriId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`kategoriId`,`kategoriNama`,`kategoriFasilitas`,`kategoriUpdatedAt`,`kategoriCreatedAt`) values 
(1,'Ekonomi','Tempat Duduk, Toilet','2022-05-18 11:08:08','2022-05-18 11:08:11');

/*Table structure for table `tb_penumpang` */

DROP TABLE IF EXISTS `tb_penumpang`;

CREATE TABLE `tb_penumpang` (
  `penumpangId` int(11) NOT NULL AUTO_INCREMENT,
  `penumpangNama` varchar(255) DEFAULT NULL,
  `penumpangAlamat` varchar(255) DEFAULT NULL,
  `penumpangNoHp` varchar(50) DEFAULT NULL,
  `penumpangJenkel` int(11) DEFAULT NULL,
  `penumpangUserId` int(11) DEFAULT NULL,
  `penumpangUpdatedAt` datetime DEFAULT NULL,
  `penumpangCreatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`penumpangId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_penumpang` */

insert  into `tb_penumpang`(`penumpangId`,`penumpangNama`,`penumpangAlamat`,`penumpangNoHp`,`penumpangJenkel`,`penumpangUserId`,`penumpangUpdatedAt`,`penumpangCreatedAt`) values 
(1,'Rudi Widodo','Jln. Perkutut Padang','088958938524',1,0,'2022-05-17 22:43:38','2022-05-17 13:14:44');

/*Table structure for table `tb_rute` */

DROP TABLE IF EXISTS `tb_rute`;

CREATE TABLE `tb_rute` (
  `ruteId` int(11) NOT NULL AUTO_INCREMENT,
  `ruteAsal` varchar(255) DEFAULT NULL,
  `ruteTujuan` varchar(255) DEFAULT NULL,
  `ruteUpdatedAt` datetime DEFAULT NULL,
  `ruteCreatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ruteId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_rute` */

insert  into `tb_rute`(`ruteId`,`ruteAsal`,`ruteTujuan`,`ruteUpdatedAt`,`ruteCreatedAt`) values 
(1,'Mentawai','Padang','2022-05-18 11:41:52','2022-05-18 11:41:55');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `userRole` int(11) DEFAULT NULL,
  `userUpdatedAt` datetime DEFAULT NULL,
  `userCreatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`userId`,`userNama`,`userEmail`,`userPassword`,`userRole`,`userUpdatedAt`,`userCreatedAt`) values 
(11,'Super Admin','superadmin@gmail.com','$2y$10$PYjhYndKzxVx10Xdpn1saOo7fftHwGb9h6s6cY3nkOxNGBigCBTbu',0,'2022-05-17 22:23:51','2022-05-17 22:23:51');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
