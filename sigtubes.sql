/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.4.11-MariaDB : Database - db_project_sig
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_project_sig` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_project_sig`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

LOCK TABLES `failed_jobs` WRITE;

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);

UNLOCK TABLES;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

LOCK TABLES `password_resets` WRITE;

UNLOCK TABLES;

/*Table structure for table `tb_agama` */

DROP TABLE IF EXISTS `tb_agama`;

CREATE TABLE `tb_agama` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `agama` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_agama` */

LOCK TABLES `tb_agama` WRITE;

insert  into `tb_agama`(`id`,`agama`) values (1,'Hindu'),(2,'Buddha'),(3,'Islam'),(4,'Kristen Protestan'),(5,'Kristen Katholik'),(6,'Konghucu');

UNLOCK TABLES;

/*Table structure for table `tb_desa` */

DROP TABLE IF EXISTS `tb_desa`;

CREATE TABLE `tb_desa` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_desa` text DEFAULT NULL,
  `batas_desa` longtext DEFAULT NULL,
  `warna` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_desa` */

LOCK TABLES `tb_desa` WRITE;

insert  into `tb_desa`(`id`,`nama_desa`,`batas_desa`,`warna`) values (7,'Peguyangan','{\r\n  \"type\": \"FeatureCollection\",\r\n  \"features\": [\r\n    {\r\n      \"type\": \"Feature\",\r\n      \"properties\": {\r\n        \"name\" : \"Peguyangan\"\r\n      },\r\n      \"geometry\": {\r\n        \"type\": \"Polygon\",\r\n        \"coordinates\": [\r\n          [\r\n            [\r\n              115.20881652832031,\r\n              -8.606990512266071\r\n            ],\r\n            [\r\n              115.20709991455078,\r\n              -8.60800887978847\r\n            ],\r\n            [\r\n              115.2055549621582,\r\n              -8.610554786606286\r\n            ],\r\n            [\r\n              115.2055549621582,\r\n              -8.612761225325709\r\n            ],\r\n            [\r\n              115.2055549621582,\r\n              -8.6147979265671\r\n            ],\r\n            [\r\n              115.20606994628905,\r\n              -8.617174064152406\r\n            ],\r\n            [\r\n              115.20538330078124,\r\n              -8.619380464253279\r\n            ],\r\n            [\r\n              115.2055549621582,\r\n              -8.621756573035341\r\n            ],\r\n            [\r\n              115.20538330078124,\r\n              -8.624302387293357\r\n            ],\r\n            [\r\n              115.20641326904297,\r\n              -8.626339026347384\r\n            ],\r\n            [\r\n              115.2055549621582,\r\n              -8.628545372928912\r\n            ],\r\n            [\r\n              115.20503997802734,\r\n              -8.630412271505058\r\n            ],\r\n            [\r\n              115.20692825317383,\r\n              -8.630921424059908\r\n            ],\r\n            [\r\n              115.20761489868164,\r\n              -8.632958027411219\r\n            ],\r\n            [\r\n              115.2084732055664,\r\n              -8.636691771674629\r\n            ],\r\n            [\r\n              115.20950317382812,\r\n              -8.636691771674629\r\n            ],\r\n            [\r\n              115.21259307861327,\r\n              -8.635673481449086\r\n            ],\r\n            [\r\n              115.21739959716797,\r\n              -8.634485472712138\r\n            ],\r\n            [\r\n              115.21894454956055,\r\n              -8.633976324965497\r\n            ],\r\n            [\r\n              115.22083282470703,\r\n              -8.631600293064718\r\n            ],\r\n            [\r\n              115.2220344543457,\r\n              -8.628545372928912\r\n            ],\r\n            [\r\n              115.22254943847658,\r\n              -8.625490428076086\r\n            ],\r\n            [\r\n              115.2223777770996,\r\n              -8.623453784446703\r\n            ],\r\n            [\r\n              115.2220344543457,\r\n              -8.621756573035341\r\n            ],\r\n            [\r\n              115.22151947021484,\r\n              -8.618192404260675\r\n            ],\r\n            [\r\n              115.2194595336914,\r\n              -8.615985997226153\r\n            ],\r\n            [\r\n              115.21894454956055,\r\n              -8.611233692198187\r\n            ],\r\n            [\r\n              115.22048950195311,\r\n              -8.60817860744248\r\n            ],\r\n            [\r\n              115.2198028564453,\r\n              -8.607160240376734\r\n            ],\r\n            [\r\n              115.21911621093749,\r\n              -8.605123498026343\r\n            ],\r\n            [\r\n              115.21551132202148,\r\n              -8.604444581474658\r\n            ],\r\n            [\r\n              115.21173477172852,\r\n              -8.604614310726706\r\n            ],\r\n            [\r\n              115.20881652832031,\r\n              -8.606990512266071\r\n            ]\r\n          ]\r\n        ]\r\n      }\r\n    }\r\n  ]\r\n}','#B27070');

UNLOCK TABLES;

/*Table structure for table `tb_jenis_potensi_desa` */

DROP TABLE IF EXISTS `tb_jenis_potensi_desa`;

CREATE TABLE `tb_jenis_potensi_desa` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_potensi` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jenis_potensi_desa` */

LOCK TABLES `tb_jenis_potensi_desa` WRITE;

insert  into `tb_jenis_potensi_desa`(`id`,`nama_potensi`,`icon`) values (1,'Sekolah','sekolah.png'),(2,'Tempat Makan','restoran.png'),(3,'Tempat Ibadah','tempatibadah.png');

UNLOCK TABLES;

/*Table structure for table `tb_jenis_sekolah` */

DROP TABLE IF EXISTS `tb_jenis_sekolah`;

CREATE TABLE `tb_jenis_sekolah` (
  `id_jenis_sekolah` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_sekolah` text DEFAULT NULL,
  PRIMARY KEY (`id_jenis_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jenis_sekolah` */

LOCK TABLES `tb_jenis_sekolah` WRITE;

insert  into `tb_jenis_sekolah`(`id_jenis_sekolah`,`jenis_sekolah`) values (1,'Negeri'),(2,'Swasta');

UNLOCK TABLES;

/*Table structure for table `tb_jenjang_sekolah` */

DROP TABLE IF EXISTS `tb_jenjang_sekolah`;

CREATE TABLE `tb_jenjang_sekolah` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `jenjang_sekolah` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jenjang_sekolah` */

LOCK TABLES `tb_jenjang_sekolah` WRITE;

insert  into `tb_jenjang_sekolah`(`id`,`jenjang_sekolah`) values (1,'Sekolah Dasar'),(2,'Sekolah Menengah Pertama'),(3,'Sekolah Menengah Atas'),(4,'Sekolah Menengah Kejuruan'),(5,'Universitas'),(6,'Taman Kanak Kanak'),(7,'Playgroup');

UNLOCK TABLES;

/*Table structure for table `tb_sekolah` */

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_jenis_potensi` int(5) DEFAULT NULL,
  `id_jenjang_sekolah` int(5) DEFAULT NULL,
  `id_jenis_sekolah` int(5) DEFAULT NULL,
  `nama_sekolah` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `koordinat` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tingkat_sekolah` (`id_jenjang_sekolah`),
  KEY `id_jenis_sekolah` (`id_jenis_sekolah`),
  KEY `tb_sekolah_ibfk_1` (`id_jenis_potensi`),
  CONSTRAINT `tb_sekolah_ibfk_2` FOREIGN KEY (`id_jenjang_sekolah`) REFERENCES `tb_jenjang_sekolah` (`id`),
  CONSTRAINT `tb_sekolah_ibfk_3` FOREIGN KEY (`id_jenis_sekolah`) REFERENCES `tb_jenis_sekolah` (`id_jenis_sekolah`),
  CONSTRAINT `tb_sekolah_ibfk_4` FOREIGN KEY (`id_jenis_potensi`) REFERENCES `tb_jenis_potensi_desa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_sekolah` */

LOCK TABLES `tb_sekolah` WRITE;

insert  into `tb_sekolah`(`id`,`id_jenis_potensi`,`id_jenjang_sekolah`,`id_jenis_sekolah`,`nama_sekolah`,`alamat`,`koordinat`) values (5,1,6,2,'TK Candra Kasih','Jl. Ahmad Yani Utara No.297, Peguyangan, Kec. Denpasar Utara, Kota Denpasar, Bali 80115','-8.625425371326973, 115.20825819730476');

UNLOCK TABLES;

/*Table structure for table `tb_tempat_ibadah` */

DROP TABLE IF EXISTS `tb_tempat_ibadah`;

CREATE TABLE `tb_tempat_ibadah` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_jenis_potensi` int(5) DEFAULT NULL,
  `id_agama` int(5) DEFAULT NULL,
  `nama_tempat_ibadah` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `koordinat` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_potensi` (`id_jenis_potensi`),
  KEY `id_agama` (`id_agama`),
  CONSTRAINT `tb_tempat_ibadah_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id`),
  CONSTRAINT `tb_tempat_ibadah_ibfk_3` FOREIGN KEY (`id_jenis_potensi`) REFERENCES `tb_jenis_potensi_desa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_tempat_ibadah` */

LOCK TABLES `tb_tempat_ibadah` WRITE;

insert  into `tb_tempat_ibadah`(`id`,`id_jenis_potensi`,`id_agama`,`nama_tempat_ibadah`,`alamat`,`koordinat`) values (2,3,1,'Pura Buitan Br Tek Tek Peguyangan','Jl. Ahmad Yani Utara, Peguyangan, Kec. Denpasar Utara, Kota Denpasar, Bali 80239','-8.61778387622705, 115.21226149884909');

UNLOCK TABLES;

/*Table structure for table `tb_tempat_makan` */

DROP TABLE IF EXISTS `tb_tempat_makan`;

CREATE TABLE `tb_tempat_makan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_jenis_potensi` int(5) DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `koordinat` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jenis_potensi` (`id_jenis_potensi`),
  CONSTRAINT `tb_tempat_makan_ibfk_1` FOREIGN KEY (`id_jenis_potensi`) REFERENCES `tb_jenis_potensi_desa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_tempat_makan` */

LOCK TABLES `tb_tempat_makan` WRITE;

insert  into `tb_tempat_makan`(`id`,`id_jenis_potensi`,`nama`,`alamat`,`koordinat`) values (2,2,'Babi Genyol Bu Agus','Jl. Astasura No.14 B, Peguyangan, Kec. Denpasar Utara, Kota Denpasar, Bali 80239','-8.612344907057587, 115.2165215941715');

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'awen','aweeen13@gmail.com',NULL,'$2y$10$Y4KD9Fz7jJ4HMPDnBW/CO.Xl3ZhmEI9qtVFN.2JB2pp2yoEhX54re',NULL,'2021-05-21 15:29:24','2021-05-21 15:29:24');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
