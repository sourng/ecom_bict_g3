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

-- Dumping data for table ci_ecommerce.brands: ~0 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.category: ~0 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.company: ~6 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`id`, `name`, `address`, `phone`, `email`, `password`, `logo`, `map`, `status`) VALUES
	(1, 'Apple', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Sony', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'Lenovo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Dell', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Asus', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.order: ~0 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.products: ~4 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `brands_id`, `category_id`, `name`, `description`, `image`, `image2`, `image3`, `image4`, `feature`, `new`, `price`, `unite`, `qty`, `discount`, `status`) VALUES
	(1, 1, 0, 'iphone 6', NULL, 'public/img/product2.jpg', 'public/img/product2_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
	(2, 2, 2, 'galaxy s7', NULL, 'public/img/product2_2.jpg', 'public/img/product2_2.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
	(3, 3, 3, 'experia z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
	(4, 4, 4, 'asus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.stock_in: ~0 rows (approximately)
/*!40000 ALTER TABLE `stock_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_in` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.stock_out: ~0 rows (approximately)
/*!40000 ALTER TABLE `stock_out` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_out` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.tbl_dow: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_dow` DISABLE KEYS */;
INSERT INTO `tbl_dow` (`dow_id`, `title`, `dow_discount`, `dow_img`, `dow_name`, `dow_brand_name`, `dow_price`, `dow_available`, `dow_sold`, `dow_timer`, `dow_old_price`, `dow_best_price`, `dow_hours`, `dow_mins`, `dow_secs`) VALUES
	(8, 'samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_dow` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.tbl_login: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
INSERT INTO `tbl_login` (`id`, `user_name`, `password`) VALUES
	(1, NULL, NULL),
	(2, 'sasa', '123'),
	(3, 'ssasa', '123'),
	(4, 'q', 'q');
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;

-- Dumping data for table ci_ecommerce.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
