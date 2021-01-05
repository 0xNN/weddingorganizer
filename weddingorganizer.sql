/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - weddingorganizer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `bukti_bayar` */

DROP TABLE IF EXISTS `bukti_bayar`;

CREATE TABLE `bukti_bayar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) DEFAULT NULL,
  `pemesanan_id` int(11) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `pemilik` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `bukti_bayar` */

insert  into `bukti_bayar`(`id`,`pelanggan_id`,`pemesanan_id`,`no_rek`,`nama_bank`,`pemilik`,`foto`) values 
(1,1,202011281,'232323','BRI','Anisa','khs_indri.png'),
(2,1,20210122,'232221233','BNI','Se','1_jP-6BxHaaQ0D7bn5k-NRlQ.png');

/*Table structure for table `dekorasi` */

DROP TABLE IF EXISTS `dekorasi`;

CREATE TABLE `dekorasi` (
  `dekorasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dekorasi` varchar(15) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`dekorasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `dekorasi` */

insert  into `dekorasi`(`dekorasi_id`,`nama_dekorasi`,`deskripsi`,`foto`) values 
(1,'-','-','FB_IMG_158235622340130861.jpg'),
(2,'-','-','FB_IMG_158235647308183681.jpg'),
(3,'-','-','FB_IMG_158235682552581331.jpg'),
(4,'-','-','FB_IMG_158235693981739331.jpg'),
(5,'-','-','FB_IMG_158235696977749111.jpg'),
(6,'-','-','FB_IMG_158235697473060331.jpg'),
(7,'-','-','FB_IMG_158235708792763941.jpg'),
(8,'-','-','FB_IMG_15823571064570563.jpg'),
(9,'-','-','FB_IMG_158235711055849551.jpg'),
(10,'-','-','FB_IMG_15823571568958833.jpg'),
(11,'-','-','FB_IMG_158235716327188041.jpg'),
(12,'-','-','FB_IMG_158235718472456171.jpg'),
(13,'-','-','FB_IMG_15823572070793307.jpg'),
(14,'-','-','FB_IMG_158235745878168081.jpg'),
(15,'-','-','FB_IMG_158235746405543521.jpg'),
(16,'-','-','FB_IMG_158235748050560311.jpg'),
(17,'-','-','FB_IMG_158235758496628581.jpg'),
(18,'-','-','FB_IMG_15823576438100926.jpg');

/*Table structure for table `list` */

DROP TABLE IF EXISTS `list`;

CREATE TABLE `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_list` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `list` */

insert  into `list`(`id`,`nama_list`,`foto`) values 
(1,'MAKE UP','fb13.jpg'),
(2,'HENNA','fb14.jpg'),
(3,'BAJU PENGANTING (ORANG TUA & MERTUA)','fb17.jpg'),
(4,'TENDA','fb9.jpg'),
(5,'DEKORASI PELAMINAN & AKAD','fb1.jpg'),
(6,'DEKORASI KAMAR','fb4.jpg'),
(7,'GALERI FOTO','fb10.jpg'),
(8,'KOTAK AMPLOP','fb6.jpg'),
(9,'KURSI PLASTIK (SARUNG)','fb7.jpg'),
(10,'KIPAS ANGIN & BLOWER','fb5.jpg'),
(11,'PREWEDDING','fb11.jpg'),
(12,'FOTOGRAFER','fb10.jpg'),
(13,'VIDEOSHOT','fb30.jpg'),
(14,'ALBUM FOTO KOLASE','fb31.jpg');

/*Table structure for table `list_paket` */

DROP TABLE IF EXISTS `list_paket`;

CREATE TABLE `list_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

/*Data for the table `list_paket` */

insert  into `list_paket`(`id`,`paket_id`,`list_id`) values 
(1,1,1),
(2,1,2),
(3,1,3),
(4,1,4),
(5,1,5),
(6,1,6),
(7,1,7),
(8,1,8),
(9,1,9),
(10,1,10),
(11,1,11),
(12,1,12),
(13,1,13),
(14,1,14),
(15,2,1),
(16,2,2),
(17,2,3),
(18,2,5),
(19,2,6),
(20,2,12),
(21,2,14),
(22,3,1),
(23,3,3),
(24,3,5),
(25,3,10),
(26,3,12),
(27,3,14),
(28,4,5),
(29,4,8),
(30,4,9),
(31,4,10),
(32,5,1),
(33,5,3),
(34,5,5),
(35,6,11),
(36,6,13),
(37,7,10);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

/*Table structure for table `modul` */

DROP TABLE IF EXISTS `modul`;

CREATE TABLE `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `pemilik` text NOT NULL,
  `struktur_organisasi` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `modul` */

insert  into `modul`(`id`,`nama_perusahaan`,`email`,`alamat`,`no_telp`,`pemilik`,`struktur_organisasi`,`foto`) values 
(1,'Bunda Fitry Wedding Organizer','bundafitrypali@gmail.com','Jl.Taman Siswa Kel. Talang Ubi selatan, Kec. Talang Ubi Pendopo, Kabupaten Penukal Abab Lematang Ilir','+628136796776','Eni Fitriani','oke8.png','pemilik.jpg');

/*Table structure for table `paket` */

DROP TABLE IF EXISTS `paket`;

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(150) DEFAULT NULL,
  `harga_paket` decimal(10,0) DEFAULT NULL,
  `keterangan_paket` text DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `paket` */

insert  into `paket`(`id_paket`,`nama_paket`,`harga_paket`,`keterangan_paket`) values 
(1,'PAKET LENGKAP',30000000,'Dilengkapi dengan pelayanan mulai dari Make Up, Henna, Baju Pengantin (OrangTua & Mertua),Tenda, Dekorasi Pelaminan & Akad, Dekorasi Kamar, Galeri Foto, Kotak Amplop, Kursi Plastik (Sarung), Kipas Angin,Prewedding,Fotografer,Video Shoot dan Album Foto Kolase'),
(2,'PAKET A',15000000,'Dilengkapi dengan pelayanan Make Up, Henna, Baju Pengantin (Orang Tua & Mertua), Dekorasi Pelaminan dan Akad, Dekorasi Kamar, Fotografer dan Album Kolase'),
(3,'PAKET B',8000000,'Dilengkapi dengan pelayanan Make Up, Baju Pengantin (Ortu dan Mertua), Dekorasi Pelaminan Akad Minimalis, Kipas Angin, Fotografer dan Album Biasa'),
(4,'PAKET C',6000000,'Dilengkapi dengan pelayanan Dekorasi Pelaminan, Kotak Amplop, Kursi Plastik (Sarung) dan Kipas Angin Blower'),
(5,'PAKET D',4000000,'Dilengkapi dengan pelayanan Make Up, Baju Pengantin dan Dekorasi Pelaminan Minimalis'),
(6,'PAKET FOTO & VIDEO',3000000,'Dilengkapi dengan pelayanan Prewedding dan Videoshot'),
(7,'SEWA KIPAS ANGIN',600000,'Disewakan kipas angin dan blower');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`pelanggan_id`,`nama`,`no_telp`,`alamat`,`email`,`password`) values 
(1,'anisa','087654324123','palembnag','anisahumairah@gmail.com','579'),
(4,'Sendi','081377519655','Palembang','sendi02@gmail.com','sendi02'),
(5,'Muhammad Sendi','2323','sdsd','ss@gmail.com','12345678');

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(15) NOT NULL,
  `tgl_acara` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id_pemesanan`,`tgl_acara`,`status`,`pelanggan_id`) values 
('20201230','2020-12-30','active',5),
('20210108','2021-01-08','active',1),
('20210122','2021-01-22','active',1);

/*Table structure for table `pemesanan_paket` */

DROP TABLE IF EXISTS `pemesanan_paket`;

CREATE TABLE `pemesanan_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan_paket` */

insert  into `pemesanan_paket`(`id`,`pemesanan_id`,`id_paket`) values 
(5,'20201230',2),
(6,'20210108',1),
(9,'20210122',4);

/*Table structure for table `rias` */

DROP TABLE IF EXISTS `rias`;

CREATE TABLE `rias` (
  `rias_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rias` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`rias_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `rias` */

insert  into `rias`(`rias_id`,`nama_rias`,`gambar`,`deskripsi`) values 
(4,'-','42.jpg','-'),
(9,'-','91.jpg','-'),
(14,'-','13.jpg','-'),
(15,'-','14.jpg','-');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`username`,`no_telp`,`password`) values 
(1,'admin','admin','','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
