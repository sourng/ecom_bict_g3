-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5249
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ci_ecommerce
CREATE DATABASE IF NOT EXISTS `ci_ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ci_ecommerce`;

-- Dumping structure for table ci_ecommerce.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.brands: ~0 rows (approximately)
DELETE FROM `brands`;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.category: ~0 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.company
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `logo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `map` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.company: ~6 rows (approximately)
DELETE FROM `company`;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`id`, `name`, `address`, `phone`, `email`, `password`, `logo`, `map`, `status`) VALUES
	(1, 'Apple', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Sony', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'Lenovo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Dell', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Asus', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cus-id` int(11) NOT NULL AUTO_INCREMENT,
  `cus-name` varchar(250) NOT NULL,
  `cus-email` varchar(250) NOT NULL,
  `cus-pass` varchar(250) NOT NULL,
  `cus-phone` varchar(250) NOT NULL,
  `cus-address` varchar(250) NOT NULL,
  `img-profile` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`cus-id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_ecommerce.customer: ~0 rows (approximately)
DELETE FROM `customer`;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.order
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.order: ~0 rows (approximately)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brands_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `new` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.products: ~4 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `brands_id`, `category_id`, `name`, `description`, `image`, `image2`, `image3`, `image4`, `feature`, `new`, `price`, `unite`, `qty`, `discount`, `status`) VALUES
	(1, 1, 0, 'iphone 6', NULL, 'public/img/product2.jpg', 'public/img/product2_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
	(2, 2, 2, 'galaxy s7', NULL, 'public/img/product2_2.jpg', 'public/img/product2_2.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
	(3, 3, 3, 'experia z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
	(4, 4, 4, 'asus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.stock_in
CREATE TABLE IF NOT EXISTS `stock_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `stock_in` int(11) DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.stock_in: ~0 rows (approximately)
DELETE FROM `stock_in`;
/*!40000 ALTER TABLE `stock_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_in` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.stock_out
CREATE TABLE IF NOT EXISTS `stock_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `date_out` datetime DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.stock_out: ~0 rows (approximately)
DELETE FROM `stock_out`;
/*!40000 ALTER TABLE `stock_out` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_out` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.tbl_dow
CREATE TABLE IF NOT EXISTS `tbl_dow` (
  `dow_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `dow_discount` varchar(250) DEFAULT NULL,
  `dow_img` varchar(250) DEFAULT NULL,
  `dow_name` varchar(250) DEFAULT NULL,
  `dow_brand_name` varchar(250) DEFAULT NULL,
  `dow_price` varchar(250) DEFAULT NULL,
  `dow_available` varchar(250) DEFAULT NULL,
  `dow_sold` varchar(250) DEFAULT NULL,
  `dow_timer` varchar(250) DEFAULT NULL,
  `dow_old_price` varchar(250) DEFAULT NULL,
  `dow_best_price` varchar(250) DEFAULT NULL,
  `dow_hours` varchar(250) DEFAULT NULL,
  `dow_mins` varchar(250) DEFAULT NULL,
  `dow_secs` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`dow_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_ecommerce.tbl_dow: ~0 rows (approximately)
DELETE FROM `tbl_dow`;
/*!40000 ALTER TABLE `tbl_dow` DISABLE KEYS */;
INSERT INTO `tbl_dow` (`dow_id`, `title`, `dow_discount`, `dow_img`, `dow_name`, `dow_brand_name`, `dow_price`, `dow_available`, `dow_sold`, `dow_timer`, `dow_old_price`, `dow_best_price`, `dow_hours`, `dow_mins`, `dow_secs`) VALUES
	(8, 'samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_dow` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.tbl_login
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_ecommerce.tbl_login: ~4 rows (approximately)
DELETE FROM `tbl_login`;
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
INSERT INTO `tbl_login` (`id`, `user_name`, `password`) VALUES
	(1, NULL, NULL),
	(2, 'sasa', '123'),
	(3, 'ssasa', '123'),
	(4, 'q', 'q');
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT '0',
  `lname` varchar(50) DEFAULT '0',
  `passowd` varchar(50) DEFAULT '0',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(50) DEFAULT NULL,
  `user_login` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_ecommerce.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
