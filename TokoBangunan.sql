/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.25-MariaDB-0ubuntu1 : Database - db_toko_bangunan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_toko_bangunan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_toko_bangunan`;

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_jenis_barang` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `tb_barang_FK` (`id_satuan`),
  KEY `tb_barang_FK_1` (`id_jenis_barang`),
  CONSTRAINT `tb_barang_FK` FOREIGN KEY (`id_satuan`) REFERENCES `tb_satuan` (`id_satuan`),
  CONSTRAINT `tb_barang_FK_1` FOREIGN KEY (`id_jenis_barang`) REFERENCES `tb_jenis_barang` (`id_jenis_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang` */

/*Table structure for table `tb_detail_penjualan` */

DROP TABLE IF EXISTS `tb_detail_penjualan`;

CREATE TABLE `tb_detail_penjualan` (
  `id_detail_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_penjualan`),
  KEY `tb_detail_penjualan_FK` (`id_penjualan`),
  CONSTRAINT `tb_detail_penjualan_FK` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_penjualan` */

/*Table structure for table `tb_jenis_barang` */

DROP TABLE IF EXISTS `tb_jenis_barang`;

CREATE TABLE `tb_jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_barang` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenis_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jenis_barang` */

/*Table structure for table `tb_penjualan` */

DROP TABLE IF EXISTS `tb_penjualan`;

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `totalpenjualan` int(11) NOT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_penjualan` */

/*Table structure for table `tb_satuan` */

DROP TABLE IF EXISTS `tb_satuan`;

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_satuan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
