-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 06:48 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_onetech`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `c_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `c_name`, `image`, `status`) VALUES
(1, 'Headphones', NULL, 'new'),
(2, 'Computer', NULL, NULL),
(3, 'Phone', NULL, NULL),
(4, 'Cammera', NULL, NULL),
(5, 'Tlevetion', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopcart`
--

CREATE TABLE `shopcart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopcart`
--

INSERT INTO `shopcart` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 200.00),
(6, 'Panasonic T44 Lite', '3.jpg', 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `tittle` varchar(250) DEFAULT NULL,
  `img_background` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `tittle`, `img_background`, `image`) VALUES
(1, 'New Era Of SmartPhone', 'banner_background.jpg', 'banner_product.png'),
(2, 'New Era Of  Socail', 'banner_2_background.jpg', 'banner_product.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dow`
--

CREATE TABLE `tbl_dow` (
  `dow_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dow`
--

INSERT INTO `tbl_dow` (`dow_id`, `p_id`, `start_date`, `end_date`) VALUES
(1, 1, '2018-06-11 02:20:18', '2018-06-26 19:00:00'),
(2, 2, '2018-06-11 02:20:18', '2018-06-28 05:41:29'),
(3, 3, '2018-06-11 02:20:18', '2018-06-27 05:41:29'),
(4, 4, '2018-06-24 05:42:34', '2018-06-27 05:42:42'),
(5, 5, '2018-06-24 05:42:38', '2018-06-28 05:42:44'),
(6, 6, '2018-06-24 07:06:22', '2018-06-28 07:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `p_id` int(11) NOT NULL,
  `brands_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `banner_id` int(11) DEFAULT NULL,
  `p_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image1` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `new` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`p_id`, `brands_id`, `category_id`, `banner_id`, `p_name`, `text`, `description`, `image1`, `image2`, `image3`, `feature`, `new`, `price`, `unite`, `qty`, `discount`, `status`) VALUES
(1, NULL, 2, 1, 'MacBook Air 13', 'Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '500', NULL, NULL, '10', NULL),
(2, NULL, 3, 2, 'Apple Ipone ', 'Phone Is ', 'Phone Is ', 'view_2.jpg', 'view_3.jpg', 'view_4.jpg', 'banner_product.png', NULL, '600', NULL, NULL, '10', NULL),
(3, NULL, 1, 2, 'Khmer HeadPhone', 'HeadPhone Is Khmer', 'HeadPhone Is Khmer', 'featured_3.png', 'best_2.png', 'best_3.png', 'deals.png', NULL, '300', NULL, NULL, '10', NULL),
(4, NULL, 4, 1, 'Camera Canon', 'Camera Is', 'Camera Is', 'new_8.jpg', 'new_10.jpg', 'featured_5.png', 'featured_5.png', NULL, '400', NULL, NULL, '10', NULL),
(5, NULL, 5, 2, 'TV Sumsung', 'Televetion', 'Televetion', 'blog_5.jpg', 'blog_5.jpg', 'blog_3.jpg', 'banner_2_product.png', NULL, '200', NULL, NULL, '10', NULL),
(6, NULL, 2, 1, 'MacBook Monitor', 'MacBook Desktop', 'MacBook Desktop', 'blog_5.jpg', 'blog_9.jpg', 'blog_7.jpg', 'blog_5.jpg', NULL, '200', NULL, NULL, '10', NULL),
(7, NULL, 5, 2, 'TV Sumsung', 'Televetion', 'Televetion', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '200', NULL, NULL, '10', NULL),
(8, NULL, 5, 1, 'TV Sumsung', 'Televetion', 'Televetion', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '200', NULL, NULL, '10', NULL),
(9, NULL, 5, 2, 'TV Sumsung', 'Televetion', 'Televetion', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '200', NULL, NULL, '10', NULL),
(10, NULL, 5, 1, 'TV Sumsung', 'Televetion', 'Televetion', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '200', NULL, NULL, '10', NULL),
(11, NULL, 5, 2, 'TV Sumsung', 'Televetion', 'Televetion', 'single_1.jpg', 'single_2.jpg', 'single_3.jpg', 'single_4.jpg', NULL, '200', NULL, NULL, '10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  ADD PRIMARY KEY (`dow_id`),
  ADD KEY `FK_tbl_dow_tbl_products` (`p_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `FK_tbl_products_category` (`category_id`),
  ADD KEY `FK_tbl_products_tbl_banner` (`banner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  MODIFY `dow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  ADD CONSTRAINT `FK_tbl_dow_tbl_products` FOREIGN KEY (`p_id`) REFERENCES `tbl_products` (`p_id`);

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `FK_tbl_products_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `FK_tbl_products_tbl_banner` FOREIGN KEY (`banner_id`) REFERENCES `tbl_banner` (`banner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
