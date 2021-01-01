/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.25-MariaDB-0ubuntu1 : Database - tokobangunan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tokobangunan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tokobangunan`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_jenis` bigint(20) unsigned NOT NULL,
  `id_satuan` bigint(20) unsigned NOT NULL,
  `kode` bigint(20) NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` bigint(20) NOT NULL,
  `harga_jual` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id_jenis` (`id_jenis`),
  KEY `id_satuan` (`id_satuan`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`),
  CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `barang` */

insert  into `barang`(`id`,`id_jenis`,`id_satuan`,`kode`,`nama_barang`,`stok`,`harga_jual`,`created_at`,`updated_at`) values 
(2,1,1,101001,'paku biasa ukuran 1\"',15,5000,'2020-12-29 03:05:24','2020-12-30 16:54:29'),
(3,1,1,101002,'Paku biasa ukuran 2\'',30,5500,'2020-12-29 03:48:44','2020-12-29 03:48:44'),
(4,1,1,101003,'Paku biasa ukuran 3\"',70,7000,'2020-12-29 09:51:40','2020-12-29 09:51:40'),
(5,1,1,101004,'Paku biasa ukuran 4\"',40,8000,'2020-12-29 09:52:39','2020-12-29 09:52:39'),
(6,1,1,101005,'Paku biasa ukuran 5\"',20,8500,'2020-12-29 09:53:13','2020-12-29 09:53:13'),
(7,1,1,101006,'Paku biasa ukuran 6\"',70,9000,'2020-12-30 08:09:35','2020-12-30 08:09:35'),
(8,1,1,101007,'Paku biasa ukuran 7\"',10,10000,'2020-12-30 08:26:12','2020-12-30 08:26:12'),
(9,6,2,201001,'Cat biasa warna hitam',30,50000,'2020-12-30 08:27:18','2020-12-30 08:27:18'),
(10,1,1,102001,'Paku beton',20,7000,'2020-12-30 08:43:00','2020-12-30 08:43:00'),
(11,7,1,301001,'Kayu balok',30,50000,'2020-12-30 08:48:04','2020-12-30 08:48:04'),
(12,6,3,202001,'Cat biasa warna putih',10,20000,'2020-12-30 14:34:19','2020-12-30 14:34:19');

/*Table structure for table `detail_penjualan` */

DROP TABLE IF EXISTS `detail_penjualan`;

CREATE TABLE `detail_penjualan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_penjualan` bigint(20) unsigned NOT NULL,
  `id_barang` bigint(20) unsigned NOT NULL,
  `qty` bigint(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id_penjualan` (`id_penjualan`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id`),
  CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_penjualan` */

/*Table structure for table `jenis` */

DROP TABLE IF EXISTS `jenis`;

CREATE TABLE `jenis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenis` */

insert  into `jenis`(`id`,`jenis`,`created_at`,`updated_at`) values 
(1,'paku','2020-12-29 03:04:21','2020-12-29 03:04:21'),
(2,'semen','2020-12-29 03:04:24','2020-12-29 03:04:24'),
(3,'seng','2020-12-29 03:04:26','2020-12-29 03:04:26'),
(4,'baut','2020-12-29 03:04:32','2020-12-29 03:04:32'),
(5,'keramik','2020-12-29 03:04:35','2020-12-29 03:04:35'),
(6,'cat','2020-12-29 03:04:38','2020-12-29 03:04:38'),
(7,'kayu','2020-12-30 16:44:50','2020-12-30 16:44:50'),
(8,'besi','2020-12-30 13:38:29','2020-12-30 13:38:29'),
(9,'Batu','2020-12-30 13:39:55','2020-12-30 13:39:55');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2020_12_27_104209_create_penjualan_table',1),
(3,'2020_12_27_104755_create_barang_table',1),
(4,'2020_12_27_105305_create_jenis_table',1),
(5,'2020_12_27_105411_create_satuan_table',1),
(6,'2020_12_27_105459_create_detail_penjualan_table',1);

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_penjualan` datetime NOT NULL DEFAULT current_timestamp(),
  `total_penjualan` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penjualan` */

/*Table structure for table `satuan` */

DROP TABLE IF EXISTS `satuan`;

CREATE TABLE `satuan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `satuan` */

insert  into `satuan`(`id`,`satuan`,`created_at`,`updated_at`) values 
(1,'kilogram','2020-12-29 03:04:00','2020-12-29 03:04:00'),
(2,'liter','2020-12-29 09:50:53','2020-12-29 09:50:53'),
(3,'Kaleng','2020-12-30 13:47:42','2020-12-30 13:47:42'),
(4,'Zak','2020-12-31 11:54:37','2020-12-31 11:54:37');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
