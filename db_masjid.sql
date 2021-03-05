/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_masjid
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_masjid` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_masjid`;

/*Table structure for table `auth_activation_attempts` */

DROP TABLE IF EXISTS `auth_activation_attempts`;

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_activation_attempts` */

/*Table structure for table `auth_groups` */

DROP TABLE IF EXISTS `auth_groups`;

CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups` */

insert  into `auth_groups`(`id`,`name`,`description`) values 
(1,'super-admin','Wow'),
(2,'user','Hello World'),
(3,'admin','Site Administrator');

/*Table structure for table `auth_groups_permissions` */

DROP TABLE IF EXISTS `auth_groups_permissions`;

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_permissions` */

insert  into `auth_groups_permissions`(`group_id`,`permission_id`) values 
(1,1);

/*Table structure for table `auth_groups_users` */

DROP TABLE IF EXISTS `auth_groups_users`;

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_users` */

/*Table structure for table `auth_logins` */

DROP TABLE IF EXISTS `auth_logins`;

CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values 
(1,'::1','emailbantu0101@gmail.com',1,'2021-01-10 17:02:47',1),
(2,'::1','emailbantu0101@gmail.com',NULL,'2021-01-10 17:25:10',0),
(3,'::1','emailbantu0101@gmail.com',1,'2021-01-10 17:25:23',1),
(4,'::1','cobacoba@gmail.com',2,'2021-01-10 17:34:47',1),
(5,'::1','emailbantu0101@gmail.com',1,'2021-01-10 19:37:41',1),
(6,'::1','emailbantu0101@gmail.com',1,'2021-01-10 19:53:31',1),
(7,'::1','cobacoba@gmail.com',2,'2021-01-10 19:56:36',1),
(8,'::1','emailbantu0101@gmail.com',1,'2021-01-10 21:40:11',1),
(9,'::1','cobacoba@gmail.com',2,'2021-01-10 21:47:03',1),
(10,'::1','cobacoba@gmail.com',2,'2021-01-11 00:03:36',1),
(11,'::1','emailbantu0101@gmail.com',1,'2021-01-11 00:04:40',1),
(12,'::1','cobacoba@gmail.com',2,'2021-01-11 00:34:33',1),
(13,'::1','cobacoba@gmail.com',2,'2021-01-11 02:29:19',1),
(14,'::1','cobacoba@gmail.com',2,'2021-01-11 16:40:58',1),
(15,'::1','cobacoba@gmail.com',2,'2021-01-11 19:43:36',1),
(16,'::1','emailbantu0101@gmail.com',NULL,'2021-01-12 03:01:34',0),
(17,'::1','emailbantu0101@gmail.com',1,'2021-01-12 03:01:48',1),
(18,'::1','cobacoba@gmail.com',2,'2021-01-12 03:03:40',1),
(19,'::1','emailbantu0101@gmail.com',1,'2021-01-12 22:05:40',1),
(20,'::1','emailbantu0101@gmail.com',1,'2021-01-13 04:11:48',1),
(21,'::1','emailbantu0101@gmail.com',1,'2021-01-20 09:12:17',1),
(22,'::1','emailbantu0101@gmail.com',1,'2021-01-20 11:38:58',1),
(23,'::1','emailbantu0101@gmail.com',1,'2021-01-25 05:13:08',1),
(24,'::1','emailbantu0101@gmail.com',NULL,'2021-01-25 10:00:49',0),
(25,'::1','emailbantu0101@gmail.com',1,'2021-01-25 10:01:08',1),
(26,'::1','emailbantu0101@gmail.com',1,'2021-01-25 12:47:48',1),
(27,'::1','emailbantu0101@gmail.com',1,'2021-01-26 09:21:44',1),
(28,'::1','emailbantu0101@gmail.com',1,'2021-01-27 03:14:31',1),
(29,'::1','emaibantu0101@gmail.com',NULL,'2021-01-27 08:15:42',0),
(30,'::1','emailbantu0101@gmail.com',1,'2021-01-27 08:25:26',1),
(31,'::1','emailbantu0101@gmail.com',1,'2021-01-27 09:31:56',1),
(32,'::1','emailbantu0101@gmail.com',1,'2021-01-27 19:22:21',1),
(33,'::1','emailbantu0101@gmail.com',1,'2021-01-28 00:14:44',1),
(34,'::1','emailbantu0101@gmail.com',1,'2021-01-28 05:22:14',1),
(35,'::1','emailbantu0101@gmail.com',1,'2021-01-28 09:30:16',1),
(36,'::1','emailbantu0101@gmail.com',1,'2021-01-28 16:49:37',1),
(37,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:18:42',1),
(38,'::1','emailbantu0101@gmail.com',NULL,'2021-01-28 21:20:11',0),
(39,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:20:27',1),
(40,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:31:58',1),
(41,'::1','emailbantu0101@gmail.com',3,'2021-01-28 22:14:21',1),
(42,'::1','adilsanak',NULL,'2021-03-02 06:15:33',0),
(43,'::1','1810005',NULL,'2021-03-02 06:15:55',0),
(44,'::1','1810005',NULL,'2021-03-02 06:16:09',0),
(45,'::1','adilsanak',NULL,'2021-03-02 06:20:58',0),
(46,'::1','adilsanak',NULL,'2021-03-02 06:21:10',0),
(47,'::1','emailbantu0101@gmail.com',4,'2021-03-02 06:21:43',1),
(48,'::1','emailbantu0101@gmail.com',4,'2021-03-02 18:17:06',1),
(49,'::1','emailbantu0101@gmail.com',4,'2021-03-02 18:26:14',1),
(50,'::1','emailbantu0101@gmail.com',4,'2021-03-02 20:46:17',1),
(51,'::1','admin',NULL,'2021-03-02 21:09:42',0),
(52,'::1','emailbantu0101@gmail.com',4,'2021-03-02 21:09:52',1),
(53,'::1','admin',NULL,'2021-03-02 21:12:39',0),
(54,'::1','admin',NULL,'2021-03-02 21:12:46',0),
(55,'::1','admin',NULL,'2021-03-02 21:12:53',0),
(56,'::1','admin',NULL,'2021-03-02 21:13:11',0),
(57,'::1','admin',NULL,'2021-03-04 21:20:40',0),
(58,'::1','admin',NULL,'2021-03-04 21:20:59',0),
(59,'::1','emailbantu0101@gmail.com',5,'2021-03-04 21:23:14',1);

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

insert  into `auth_permissions`(`id`,`name`,`description`) values 
(1,'manage-user','Site Super Administrator');

/*Table structure for table `auth_reset_attempts` */

DROP TABLE IF EXISTS `auth_reset_attempts`;

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_reset_attempts` */

/*Table structure for table `auth_tokens` */

DROP TABLE IF EXISTS `auth_tokens`;

CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_tokens` */

/*Table structure for table `auth_users_permissions` */

DROP TABLE IF EXISTS `auth_users_permissions`;

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_users_permissions` */

/*Table structure for table `bulan` */

DROP TABLE IF EXISTS `bulan`;

CREATE TABLE `bulan` (
  `idb` int(11) NOT NULL AUTO_INCREMENT,
  `namabulan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idb`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `bulan` */

insert  into `bulan`(`idb`,`namabulan`) values 
(1,'Januari'),
(2,'Februari'),
(3,'Maret'),
(4,'April'),
(5,'Mei'),
(6,'Juni'),
(7,'Juli'),
(8,'Agustus'),
(9,'September'),
(10,'Oktober'),
(11,'November'),
(12,'Desember');

/*Table structure for table `cash_in` */

DROP TABLE IF EXISTS `cash_in`;

CREATE TABLE `cash_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cash_in` */

/*Table structure for table `cash_out` */

DROP TABLE IF EXISTS `cash_out`;

CREATE TABLE `cash_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cash_out` */

/*Table structure for table `donatur` */

DROP TABLE IF EXISTS `donatur`;

CREATE TABLE `donatur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `donatur` */

insert  into `donatur`(`id`,`nama`,`alamat`,`nohp`,`jumlah`) values 
(1,'Adil Saputra Duha','Padang','089892489249',30000),
(2,'Fani Yolanda','Padang','0885935938390',40000);

/*Table structure for table `jenis_pemasukan` */

DROP TABLE IF EXISTS `jenis_pemasukan`;

CREATE TABLE `jenis_pemasukan` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `jenis_pemasukan` */

insert  into `jenis_pemasukan`(`idp`,`nama`) values 
(1,'Infaq'),
(2,'Kotak Amal'),
(3,'Coba'),
(4,'Coba2');

/*Table structure for table `jenis_pengeluaran` */

DROP TABLE IF EXISTS `jenis_pengeluaran`;

CREATE TABLE `jenis_pengeluaran` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `jenis_pengeluaran` */

insert  into `jenis_pengeluaran`(`idp`,`nama`) values 
(1,'Bayar Air');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values 
(1,'2017-11-20-223112','Myth\\Auth\\Database\\Migrations\\CreateAuthTables','default','Myth\\Auth',1610295623,1);

/*Table structure for table `pembayaran_donatur` */

DROP TABLE IF EXISTS `pembayaran_donatur`;

CREATE TABLE `pembayaran_donatur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `donatur` int(11) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `pembayaran_donatur` */

insert  into `pembayaran_donatur`(`id`,`tanggal`,`donatur`,`bulan`,`jumlah`) values 
(2,'2021-03-03',1,1,30000),
(3,'2021-03-03',1,2,30000),
(4,'2021-03-03',1,3,30000),
(5,'2021-03-03',1,4,30000),
(6,'2021-03-03',1,5,30000),
(7,'2021-03-03',1,6,30000),
(8,'2021-03-03',1,7,30000),
(9,'2021-03-03',1,8,30000),
(10,'2021-03-03',1,9,30000),
(12,'2021-03-03',1,11,30000),
(13,'2021-03-03',1,12,30000);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`fullname`,`password_hash`,`image`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values 
(5,'emailbantu0101@gmail.com','admin',NULL,'$2y$10$cSIkWVUVG2RdqAuqJwxx5eQK5gmLryH.Mky89bidrR8bugLxRXpLm','ok.jpg',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-03-04 21:22:17','2021-03-04 21:22:17',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
