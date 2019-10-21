/*
SQLyog Community v13.1.4  (64 bit)
MySQL - 10.3.16-MariaDB : Database - intra-billing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`intra-billing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `intra-billing`;

/*Table structure for table `billing` */

DROP TABLE IF EXISTS `billing`;

CREATE TABLE `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver` varchar(64) NOT NULL,
  `fleet` varchar(11) DEFAULT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_total` varchar(7) NOT NULL,
  `item_code` varchar(64) DEFAULT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `invoice` varchar(64) DEFAULT NULL,
  `note` varchar(1024) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `billing` */

insert  into `billing`(`id`,`driver`,`fleet`,`item_name`,`item_total`,`item_code`,`total_price`,`invoice`,`note`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'Samuel','B 2019 MDN','Ban Bridgestone','1','G611 T',4000000.00,'INV2019','Ban baru','2019-10-22 04:34:02',1,'1970-01-01 01:00:00',NULL);

/*Table structure for table `driver` */

DROP TABLE IF EXISTS `driver`;

CREATE TABLE `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `phone_number` varbinary(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `driver` */

/*Table structure for table `fleet` */

DROP TABLE IF EXISTS `fleet`;

CREATE TABLE `fleet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `license_plate` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fleet` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `confirmed_at` int(32) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `flags` int(11) DEFAULT NULL,
  `last_login_at` int(11) DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL,
  `separated_by` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password_hash`,`auth_key`,`confirmed_at`,`unconfirmed_email`,`blocked_at`,`registration_ip`,`created_at`,`updated_at`,`flags`,`last_login_at`,`parentId`,`separated_by`) values 
(1,'admin','kevingatpardosi@gmail.com','$2y$13$os/JNT5kJul/h4J1uao7UOdoYmY1As5lVQDVCNjlLwYx64/oDDN4W','Q?????9hWqA?\r??e?Yo5R\r??e??',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),
(2,'samuel','samuel@gmail.com','$2y$13$p5c37PyDxzzAbqxDQSwQqeOPx6gEkhbFpFK0fbMSmj0pCYbr1TNFu','??5Ve??h?gA:G???X2U?	?????1?0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
