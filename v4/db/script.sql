/*
SQLyog Ultimate v8.3 
MySQL - 5.5.5-10.1.22-MariaDB : Database - php_mvc
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php_mvc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `php_mvc`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (1,'producto 100++','descripcion de producto 100','33.00',144);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (2,'producto 101','detalle de producto 101','7.25',956);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (3,'monitor','descripcion de monitor','400.00',12);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (4,'mouse','desc mouse','47.00',12);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (5,'teclado','teclado desc','99.00',586);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (6,'producto uno','dfs','55.00',77);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (7,'As Dfasd','werwq','34.00',66);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (9,'producto 100000','descripcion de producto 100','16.00',200);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (10,'producto 100','descripcion de producto 100','11.00',200);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (11,'monitor','descripcion de monitor','400.00',12);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (12,'producto 100','descripcion de producto 100','77.00',200);
insert  into `products`(`id`,`name`,`description`,`price`,`quantity`) values (13,'producto 1008','descripcion de producto 100','158.00',200);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
