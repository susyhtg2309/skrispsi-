/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.25-MariaDB : Database - mlc_nb_ervila
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mlc_nb_ervila` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mlc_nb_ervila`;

/*Table structure for table `dataset` */

DROP TABLE IF EXISTS `dataset`;

CREATE TABLE `dataset` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `ipk` varchar(100) NOT NULL,
  `jumlah_tanggungan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dataset` */

insert  into `dataset`(`data_id`,`nim`,`nama`,`prodi`,`ipk`,`jumlah_tanggungan`,`penghasilan`,`kelas`) values 
(1,'202171029','Vernando yosua kilis','D3 Teknologi Listrik','3.14','5','4400000','tidak layak'),
(2,'202171027','PHILIP MORRIS TANDY','D-III TEKNOLOGI LISTRIK','3.49','5','5500000','tidak layak'),
(3,'202171022','Salsabilla Andhara Oksana Pratiwi ','D3 Teknologi Listrik ','3.73','3','2000000','tidak layak'),
(4,'202171019','Abdul Haris','D3 Teknologi Listrik','3.04','5','9000000','tidak layak'),
(5,'202171016','Jean salurapa','D3 teknologi listrik','3.2','11','4000000','tidak layak'),
(6,'202171014','Deka Oktobelia Putri Rusali ','D3 Teknologi Listrik','3.14','4','4000000','tidak layak'),
(7,'202171013','Shela okta viani','D3 teknologi listrik','3.39','6','1000000','tidak layak'),
(8,'202171009','Jaya Gabriel Haposan Sipahutar','D3 Teknologi Listrik','3.33','4','9000000','tidak layak'),
(9,'202171003','Fadilla salsabila Zahrani setia nugroho','D3 teknologi listrik','3.6','5','3000000','tidak layak'),
(10,'202171001','FITRIANI','D3 Teknologi Listrik','3.59','5','4000000','tidak layak'),
(11,'202131168','Fathur Aulia Rezky ','S1 teknik informatika ','3.73','6','2500000','tidak layak'),
(12,'202131163','Muhammad Dirar ','S1 Teknik Informatika','3.78','6','2000000','tidak layak'),
(13,'202131154','Azmi Azis','S1 Teknik Informatika','3.85','4','3000000','Layak'),
(14,'202131144','Yosafat Christofel Nainggolan','S1 Teknik Informatoka','3.44','6','5000000','tidak layak'),
(15,'202131142','Dani Rizky Syabana','S1 teknik informatika','3.85','4','6000000','tidak layak'),
(16,'202131136','FITRA WILDANIA','S1 TEKNIK INFORMATIKA','3.96','3','1500000','Layak'),
(17,'202131132','Raden Mas Muhammad Rivaldi','Teknik informatika','3.38','6','11500000','tidak layak'),
(18,'202131130','MARSHA ELEONORE STEPHANIE CHELSEA ','S1 Teknik Informatika','3.68','6','8000000','tidak layak'),
(19,'202131125','Siti Nurul Maghfirah L','TEKNIK INFORMATIKA ','3.88','4','3000000','Layak'),
(20,'202131117','Kevin Desrenito Putra Kandey','S1 Teknik Informatika','3.83','3','1500000','tidak layak'),
(21,'202131115','Adinda Shafira Sholihin','Teknik Informatika','3.9','5','7000000','tidak layak'),
(22,'202131114','Mochamad Andryan Maulana','S1 Teknik informatika','3.73','4','4000000','tidak layak'),
(23,'202131112','Ruth Syalomitha Hutabarat ','Teknik Informatika ','3.83','6','15000000','tidak layak'),
(24,'202131111','I Putu Angga Prawira Prathama','Teknik Informatika','3.71','4','4000000','tidak layak'),
(25,'202131110','Ivan Christian Lado','S1 Teknik Informatika','3.8','3','4500000','tidak layak'),
(26,'202131109','Tessa Yolanda Sitorus','Teknik informatika','3.6','6','8000000','tidak layak'),
(27,'202131106','Muhammad Rifqi','S1 Teknik Informatika','3.6','5','2000000','tidak layak'),
(28,'202131105','Ghina Siti Nadhifah','Teknik Informatika','3.83','5','1000000','tidak layak'),
(29,'202131104','Muhammad Abyan Thorif','Teknik Informatika','3.93','4','4000000','tidak layak'),
(30,'202131103','DESI IKA PUTRI','TEKNIK INFORMATIKA','3.93','4','5000000','tidak layak'),
(31,'202131099','seanneta apfia aulia pramesti','teknik informatika','3.88','4','5000000','Layak'),
(32,'202131095','Neysaqilla Auldey Ardyan','S1 Teknik Informatika','3.94','5','3000000','Layak'),
(33,'202131094','Andi Uvik ','Teknik informatika ','3.93','5','9000000','tidak layak'),
(34,'202131092','Zulkhaliza Dealita Haqi','S1 Informatika','3.96','8','25000000','tidak layak'),
(35,'202131090','Fasya rifka zannuba','Teknik informatika','3.63','5','15000000','tidak layak'),
(36,'202131088','Adinda musika permata','Telematika energi','3.6','6','5000000','tidak layak'),
(37,'202131085','Dwika Lintang Nugraha','S1- TEKNIK INFORMATIKA','3.68','3','4000000','tidak layak'),
(38,'202131084','Edra Elvareta','S1 Teknik Informatika','3.75','4','4000000','tidak layak'),
(39,'202131083','Eli Muliani','S1 Teknik Informatika','3.63','6','4000000','tidak layak'),
(40,'202131081','Luthfi Yani Darmawansyah','Informatika','3.46','5','4000000','tidak layak'),
(41,'202131080','Aulia pravda sulistyaseva ','Teknik informatika','0','4','4000000','tidak layak'),
(42,'202131079','Ricky Jordan Marpaung ','S1 teknik informatika ','3.39','4','10000000','tidak layak'),
(43,'202131078','Arfani lovina br.stendel','S1 teknik informatika','3.65','2','5000000','tidak layak'),
(44,'202131075','Nadhya Shaliha Ridha','Teknik Informatika','3.08','5','4000000','tidak layak'),
(45,'202131074','Erwin Hardiansyah','S1 Teknik Informatika','3.8','5','45000000','tidak layak'),
(46,'202131073','SHERLY WAHYUNI','S1 Teknik Informatika','3.78','5','8000000','tidak layak'),
(47,'202131072','Arga Rizqi Saputra','S1 Informatika','3.76','5','3000000','Layak'),
(48,'202131071','Deis Zadiaqe','S1Teknik Informatika','3.58','6','8500000','tidak layak'),
(49,'202131070','Checyliana Sampe Hendra ','S1 Informatika ','3.49','4','9000000','tidak layak'),
(50,'202131069','Nindira Mediana Syawalya','S1 - Informatika','3.7','4','10000000','tidak layak'),
(51,'202131067','Fauzan Fuadi Pasaribu','S1-Teknik Informatika','3.76','7','9000000','tidak layak'),
(52,'202131066','Mohamad Tanwirul Akbar','S1 Teknik Informatika','3.81','4','3500000','tidak layak'),
(53,'202131065','SALSABILA TSAMROTUL QOLBI','S1 TEKNIK INFORMATIKA','3.76','4','3000000','tidak layak'),
(54,'202131063','Jihan Hemanda Putri','S1 Teknik Informatika','3.71','5','3000000','tidak layak'),
(55,'202131062','Muhammad Raehand Fathahillah ','S1 Teknik Informatika','3.78','5','3000000','tidak layak'),
(56,'202131060','Muhammad Khatami','S1 Teknik Informatika','3.74','1','600000','tidak layak'),
(57,'202131057','Althof Zijan Putra Viandhi ','Teknik Informatika ','3.98','5','7000000','tidak layak'),
(58,'202131056','Farhan rafsanjani','S1 TEKNIK INFORMATIKA','3.84','5','6000000','tidak layak'),
(59,'202131054','Bayu Alif Pratikno','S1 Informatika','3.5','3','5800000','tidak layak'),
(60,'202131053','Nursalsabila Ali','S1 Teknik Informatika','3.93','5','10000000','tidak layak'),
(61,'202131052','Yoga Aria Kusuma','S1 Teknik Informatika','3.84','4','7000000','tidak layak'),
(62,'202131051','Fakhrihan Luthfi','Teknik Informatika ','3.94','3','5000000','tidak layak'),
(63,'202131050','Muhammad abdullah nurhidayah ','S1 INFORMATIKA ','3.89','5','8000000','tidak layak'),
(64,'202131047','Vivin melanesya Wayeni','S1 teknik informatika','3.44','4','1300900','tidak layak'),
(65,'202131045','Fargho Farthogi ','S1 Teknik Informatika ','3.8','5','7000000','tidak layak'),
(66,'202131043','Muhammad amar mahdin','S1 Teknik Informatika','3.8','7','5000000','Layak'),
(67,'202131042','Lauren valentina','Informatika','3.76','5','2500000','Layak'),
(68,'202131041','Della Pransiska','Teknik informatika','3.79','4','0','tidak layak'),
(69,'202131040','Muhammad Fastabiqul Khairat','S1 Teknik Informatika','3.81','5','2000000','Layak'),
(70,'202131038','Ahmad david gibran','Teknik informatika','3.73','5','14000000','tidak layak'),
(71,'202131037','Anugrah AK.','S1 Teknik Informatika','3.25','5','9470297','tidak layak'),
(72,'202131035','Muhammad Gamal','Telematika dan Energi','3.88','5','6500000','tidak layak'),
(73,'202131034','Siti Zahra Muliayanti','S1 Teknik Informatika','3.96','5','10000000','tidak layak'),
(74,'202131033','Ahmad Atalaraya.S','S1 Teknik Informatika','3.88','5','3500000','tidak layak'),
(75,'202131032','Muhammad Deksa Alghifari','Informatika','3.86','3','8000000','tidak layak'),
(76,'202131031','Andre Zuliani','Teknik Informatika','3.9','4','3000000','tidak layak'),
(77,'202131028','salsabila apri intania','S1 Teknik Informatika','3.6','5','2500000','tidak layak'),
(78,'202131025','Annisa Azzahir','S1 Teknik informatika','3.86','4','3000000','tidak layak'),
(79,'202131023','Adi Setiadi Putra','S1 Teknik Informatika','3.63','6','3000000','tidak layak'),
(80,'202131022','rina setiyaningsih','telematika energi ( s1 teknik informatika)','3.96','4','20000000','tidak layak'),
(81,'202131021','Melisa br Ginting','S1-Teknik Informatika','3.93','5','8000000','tidak layak'),
(82,'202131019','Asmal Adyatma Siolimbona','S1 Teknik Informatika','3.51','4','6000000','tidak layak'),
(83,'202131018','Putu Niar Meiwasandi','S1 Teknik Informartika','3.91','3','3000000','tidak layak'),
(84,'202131017','Aldiva Fadlie Fauzan','S1 teknik informatika','3.38','4','7000000','tidak layak'),
(85,'202131016','Putra Ari Sandi','S1 Informatika','3.66','6','3000000','tidak layak'),
(86,'202131013','RAFFI NANDYKA PUTRA ','S1 TEKNIK INFORMATIKA ','3.83','5','2000000','tidak layak'),
(87,'202131010','Muhammad razi fuadi','S1 teknik informatika','3.44','6','10000000','tidak layak'),
(88,'202131009','I Wayan Ardika Chandra','Teknik Informatika','3.81','3','18000000','tidak layak'),
(89,'202131006','Naufal Adli','Teknik Informatika','3.69','4','4000000','Layak'),
(90,'202131005','RADEN RONGGO BINTANG PRATOMO PRAWIRODIRJO','Teknik Informatika','3.79','5','30000000','tidak layak'),
(91,'202131004','Lidya meltiana ','Teknik Informatika','3.81','2','8000000','tidak layak'),
(92,'202131002','Amalia Damayanti Husaini','S1 Teknik Informatika ','3.94','4','5000000','tidak layak'),
(93,'202121064','WIRDA SENTIA SIMBOLON','S1 TEKNIK SIPIL','3.15','5','1000000','Layak'),
(94,'202121008','Ananda Tita Firdausa','Teknik Informatika','3.43','4','1000000','tidak layak'),
(95,'202112046','REPLYINDRA PRATAMA','S1 Teknik Mesin','3.21','5','1000000','Layak'),
(96,'202112030','Maulana Bangkit Utama Zaini ','S1 Teknik Mesin','3.48','5','7500000','Layak'),
(97,'202112026','Patricia Gloria Gani','S1 Teknik Mesin','3.73','4','3000000','Layak'),
(98,'202111170','RANGGA PRASETYA ADIWIJAYA','S1 TEKNIK ELEKTRO','3.61','3','700','Layak'),
(99,'202111006','Erlangga Fakih Farhan','S1 Teknik Elektro','3.54','5','5000000','Layak'),
(100,'202111273','Hilmi Fauzan','S1 Teknik Elektro','3.07','4','0','Layak'),
(101,'202112021','Sakila Maharani Harahap ','S1 Teknik Mesin','3.2','5','6500000','Layak'),
(102,'202121004','M Kandela Ralva Junaidi ','S1 Teknik Sipil','3.23','5','4000000','Layak'),
(103,'202121009','WAHYU KHUMBIANTORO','S1 Teknik Sipil','3.45','2','3800000','Layak'),
(104,'202121024','SURIKHA RAKHESVARA','S1 Teknik Sipil','3.5','5','6000000','Layak'),
(105,'202121016','Atanmeia Rabina Br Bukit','S1 Teknik Sipil','2.81','2','0','Layak');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
