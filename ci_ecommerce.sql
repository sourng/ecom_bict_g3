-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
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
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.brands: ~0 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.category: ~0 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.company
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `logo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `map` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.company: ~0 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.order
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
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
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `brands_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `feature` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `new` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.stock_in
CREATE TABLE IF NOT EXISTS `stock_in` (
  `id` int(11) NOT NULL,
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
/*!40000 ALTER TABLE `stock_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_in` ENABLE KEYS */;

-- Dumping structure for table ci_ecommerce.stock_out
CREATE TABLE IF NOT EXISTS `stock_out` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `date_out` datetime DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ci_ecommerce.stock_out: ~0 rows (approximately)
/*!40000 ALTER TABLE `stock_out` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_out` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
