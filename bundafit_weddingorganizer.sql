/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - weddingorganizer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bundafit_weddingorganizer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bundafit_weddingorganizer`;

/*Table structure for table `dekorasi` */

DROP TABLE IF EXISTS `dekorasi`;

CREATE TABLE `dekorasi` (
  `dekorasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dekorasi` varchar(15) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_dekorasi` decimal(11,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`dekorasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `dekorasi` */

insert  into `dekorasi`(`dekorasi_id`,`nama_dekorasi`,`deskripsi`,`harga_dekorasi`,`foto`) values 
(1,'-','-',0,'FB_IMG_158235622340130861.jpg'),
(2,'-','-',0,'FB_IMG_158235647308183681.jpg'),
(3,'-','-',0,'FB_IMG_158235682552581331.jpg'),
(4,'-','-',0,'FB_IMG_158235693981739331.jpg'),
(5,'-','-',0,'FB_IMG_158235696977749111.jpg'),
(6,'-','-',0,'FB_IMG_158235697473060331.jpg'),
(7,'-','-',0,'FB_IMG_158235708792763941.jpg'),
(8,'-','-',0,'FB_IMG_15823571064570563.jpg'),
(9,'-','-',0,'FB_IMG_158235711055849551.jpg'),
(10,'-','-',0,'FB_IMG_15823571568958833.jpg'),
(11,'-','-',0,'FB_IMG_158235716327188041.jpg'),
(12,'-','-',0,'FB_IMG_158235718472456171.jpg'),
(13,'-','-',0,'FB_IMG_15823572070793307.jpg'),
(14,'-','-',0,'FB_IMG_158235745878168081.jpg'),
(15,'-','-',0,'FB_IMG_158235746405543521.jpg'),
(16,'-','-',0,'FB_IMG_158235748050560311.jpg'),
(17,'-','-',0,'FB_IMG_158235758496628581.jpg'),
(18,'-','-',0,'FB_IMG_15823576438100926.jpg');

/*Table structure for table `dokumentasi` */

DROP TABLE IF EXISTS `dokumentasi`;

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumentasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_dokumentasi` decimal(11,0) NOT NULL,
  PRIMARY KEY (`dokumentasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `dokumentasi` */

/*Table structure for table `gedung` */

DROP TABLE IF EXISTS `gedung`;

CREATE TABLE `gedung` (
  `gedung_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_gedung` varchar(35) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_gedung` decimal(11,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  KEY `gedung_id` (`gedung_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `gedung` */

/*Table structure for table `katering` */

DROP TABLE IF EXISTS `katering`;

CREATE TABLE `katering` (
  `katering_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_katering` varchar(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jumlah` decimal(5,0) NOT NULL,
  `harga_katering` decimal(11,0) NOT NULL,
  PRIMARY KEY (`katering_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `katering` */

insert  into `katering`(`katering_id`,`nama_katering`,`deskripsi`,`jumlah`,`harga_katering`) values 
(1,'Wedding Paket Komplit','Dilengkapi Tata Rias, Henna, Baju Pengantin (Orant Tua & Mertua), Dekorasi Pelaminan & Akad, Dekorasi Kamar, Galeri Foto, Tenda, Kotak Amplop, Kursi Tamu, Kipas Angin dan Fotografi ',1,30000000),
(2,'Wedding Paket A','Dilengkapi Tata Rias, Henna, Baju Penganti (Orang Tua & Mertua), Dekorasi Pelaminan, Dekorasi Kamar, Kotak Amplop dan Kipas Angin',1,15000000),
(3,'Wedding Paket B','Dilengkapi Tenda, Kursi Tamu dan Kipas Angin',1,8000000),
(4,'Wedding Paket C','Dilengkapi Dekorasi Pelaminan, Kotak Amplop dan Kusi Tamu',1,6000000),
(5,'Wedding Paket D','Dilengkapi Pelaminan Minimalis dan Tata Rias',1,4000000),
(6,'Paket Foto & Video','Dilengkapi Prewedding dan Video Shoot',1,3000000),
(7,'Sewa Kipas Angin','Disewakan Kipas Angin Blower',4,200000);

/*Table structure for table `konfirmasi` */

DROP TABLE IF EXISTS `konfirmasi`;

CREATE TABLE `konfirmasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) DEFAULT NULL,
  `pemesanan_id` int(11) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `pemilik` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `konfirmasi` */

insert  into `konfirmasi`(`id`,`pelanggan_id`,`pemesanan_id`,`no_rek`,`nama_bank`,`pemilik`,`foto`) values 
(1,1,202011281,'232323','BRI','Anisa','khs_indri.png');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

/*Table structure for table `paket` */

DROP TABLE IF EXISTS `paket`;

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(150) DEFAULT NULL,
  `harga_paket` decimal(10,0) DEFAULT NULL,
  `keterangan_paket` text,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `paket` */

insert  into `paket`(`id_paket`,`nama_paket`,`harga_paket`,`keterangan_paket`) values 
(2,'Wedding Package Complete',30000000,'Fasilitas untuk pernikahan lengkap secara keseluruhan'),
(3,'Wedding Package A',15000000,'Terdiri dari tata rias, pengantin dan pelaminan'),
(4,'Wedding Package B',8000000,'Fasilitas yang disediakan tenda dan kursi'),
(5,'Wedding Package C',6000000,'Fasilitas pelaminan mewah'),
(6,'Wedding Package D',4000000,'Fasilitas pelaminan minimalis'),
(7,'Photography Package',3000000,'Fasilitas prewedding dan video shooting');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `tugas_pegawai` varchar(255) NOT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`pegawai_id`,`nama_pegawai`,`no_telp`,`email_pegawai`,`alamat_pegawai`,`tugas_pegawai`) values 
(2,'Ana','086754007897','ana@gmail.com','Palembang','Merias'),
(3,'Andi','088888827771','andirahman@gmail.com','Palembang','Tenda');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL DEFAULT '',
  PRIMARY KEY (`pelanggan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`pelanggan_id`,`nama`,`no_telp`,`alamat`,`email`,`password`) values 
(1,'anisa','087654324123','palembnag','anisahumairah@gmail.com','579');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(15) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tgl_acara` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id_pemesanan`,`user_id`,`tgl_acara`,`status`,`pelanggan_id`) values 
('202011281',0,'2020-11-28','pending',1);

/*Table structure for table `pemesanan_dekorasi` */

DROP TABLE IF EXISTS `pemesanan_dekorasi`;

CREATE TABLE `pemesanan_dekorasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `dekorasi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan_dekorasi` */

/*Table structure for table `pemesanan_dokumentasi` */

DROP TABLE IF EXISTS `pemesanan_dokumentasi`;

CREATE TABLE `pemesanan_dokumentasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `dokumentasi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan_dokumentasi` */

/*Table structure for table `pemesanan_gedung` */

DROP TABLE IF EXISTS `pemesanan_gedung`;

CREATE TABLE `pemesanan_gedung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `gedung_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan_gedung` */

/*Table structure for table `pemesanan_katering` */

DROP TABLE IF EXISTS `pemesanan_katering`;

CREATE TABLE `pemesanan_katering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `katering_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan_katering` */

insert  into `pemesanan_katering`(`id`,`pemesanan_id`,`katering_id`) values 
(1,'202011281',3);

/*Table structure for table `pemesanan_paket` */

DROP TABLE IF EXISTS `pemesanan_paket`;

CREATE TABLE `pemesanan_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan_paket` */

insert  into `pemesanan_paket`(`id`,`pemesanan_id`,`id_paket`) values 
(1,'',2);

/*Table structure for table `pemesanan_rias` */

DROP TABLE IF EXISTS `pemesanan_rias`;

CREATE TABLE `pemesanan_rias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `rias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan_rias` */

/*Table structure for table `rias` */

DROP TABLE IF EXISTS `rias`;

CREATE TABLE `rias` (
  `rias_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rias` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_rias` decimal(11,0) NOT NULL,
  PRIMARY KEY (`rias_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `rias` */

insert  into `rias`(`rias_id`,`nama_rias`,`gambar`,`deskripsi`,`harga_rias`) values 
(4,'-','42.jpg','-',0),
(9,'-','91.jpg','-',0),
(14,'-','13.jpg','-',0),
(15,'-','14.jpg','-',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`username`,`no_telp`,`password`) values 
(1,'admin','admin','','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
