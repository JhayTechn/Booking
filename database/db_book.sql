/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.21-MariaDB : Database - db_book
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_book` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_book`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`username`,`password`) values (3,'admin','admin');

/*Table structure for table `tbl_approved` */

DROP TABLE IF EXISTS `tbl_approved`;

CREATE TABLE `tbl_approved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datein` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `CompleteAddress` varchar(255) DEFAULT NULL,
  `DateofBooking` varchar(255) DEFAULT NULL,
  `DayofBooking` varchar(255) DEFAULT NULL,
  `ContactNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_approved` */

/*Table structure for table `tbl_bookingform` */

DROP TABLE IF EXISTS `tbl_bookingform`;

CREATE TABLE `tbl_bookingform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datein` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `CompleteAddress` varchar(255) DEFAULT NULL,
  `DateofBooking` varchar(255) DEFAULT NULL,
  `DayofBooking` varchar(255) DEFAULT NULL,
  `ContactNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_bookingform` */

/*Table structure for table `tbl_checklog` */

DROP TABLE IF EXISTS `tbl_checklog`;

CREATE TABLE `tbl_checklog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ConfirmPassword` varchar(255) DEFAULT NULL,
  `datein` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_checklog` */

insert  into `tbl_checklog`(`id`,`Username`,`Password`,`ConfirmPassword`,`datein`,`Picture`) values (6,'weslie','weslie','weslie','2021-07-29 08:37:21 PM','20210729083721-'),(7,'albert','albert','albert','2021-07-29 08:49:03 PM','20210729084903-'),(8,'ketung','ketung','ketung','2021-07-30 01:27:47 PM','20210730012747-');

/*Table structure for table `tbl_checklogs` */

DROP TABLE IF EXISTS `tbl_checklogs`;

CREATE TABLE `tbl_checklogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ConfirmPassword` varchar(255) DEFAULT NULL,
  `datein` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_checklogs` */

insert  into `tbl_checklogs`(`id`,`Username`,`Password`,`ConfirmPassword`,`datein`,`Picture`) values (7,'ketung','ketung','ketung','2021-07-29 08:34:57 PM','20210729083457-'),(8,'weslie','weslie','weslie','2021-07-29 08:37:00 PM','20210729083700-'),(9,'albert','albert','albert','2021-07-29 08:48:16 PM','20210729084816-'),(10,'Jesusa','1234','1234','2021-07-29 10:45:25 PM','20210729104525-');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
