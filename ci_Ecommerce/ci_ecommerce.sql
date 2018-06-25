-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 03:32 AM
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
-- Database: `ci_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(250) DEFAULT NULL,
  `banner_image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_image`) VALUES
(1, NULL, 'main-slider1.jpg'),
(2, NULL, 'main-slider2.jpg'),
(3, NULL, 'main-slider3.jpg'),
(4, NULL, 'main-slider4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `status`) VALUES
(1, 'Apple', NULL),
(2, 'Clothing', NULL),
(3, 'ASUS', NULL),
(4, 'Dell', NULL),
(5, 'VIVO', NULL),
(6, 'ACER', NULL),
(7, 'Shoes_man', NULL),
(8, 'Shoes_woman', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `logo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `map` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `phone`, `email`, `password`, `logo`, `map`, `status`) VALUES
(1, 'Apple', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Sony', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Lenovo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Dell', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Asus', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus-id` int(11) NOT NULL,
  `cus-name` varchar(250) NOT NULL,
  `cus-email` varchar(250) NOT NULL,
  `cus-pass` varchar(250) NOT NULL,
  `cus-phone` varchar(250) NOT NULL,
  `cus-address` varchar(250) NOT NULL,
  `img-profile` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inspired`
--

CREATE TABLE `inspired` (
  `inpired_id` int(11) NOT NULL,
  `inpired_name` varchar(250) DEFAULT NULL,
  `inpired_image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inspired`
--

INSERT INTO `inspired` (`inpired_id`, `inpired_name`, `inpired_image`) VALUES
(1, NULL, 'getinspired1.jpg'),
(2, NULL, 'getinspired2.jpg'),
(3, NULL, 'getinspired3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `brands_id` int(50) DEFAULT NULL,
  `category_id` int(50) DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `image2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `new` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `unite` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `qty` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(250) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brands_id`, `category_id`, `name`, `description`, `image`, `image2`, `image3`, `image4`, `feature`, `new`, `price`, `unite`, `qty`, `discount`, `status`) VALUES
(1, 1, 1, 'Galaxy s7', '<p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>', 'iphone6.jpg', 'iphone7.jpg', 'iphone6.jpg', 'iphone7.jpg', NULL, NULL, '100', NULL, '8', '10', '1'),
(2, 6, 1, 'Experia z', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphone6.jpg', 'iphone7.jpg', 'iphone6.jpg', 'iphone7.jpg', NULL, NULL, '100', NULL, '8', '100', '1'),
(3, NULL, 7, 'Shoes', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'shoes_man.jpg', 'shoes_man1.jpg', 'shoes_man2.jpg', 'shoes_man1.jpg', NULL, NULL, '1000', NULL, NULL, '30', NULL),
(4, 2, 1, 'Iphone 6', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphone6.jpg', 'iphone6.jpg', 'iphone7.jpg', 'iphone7.jpg', '', NULL, '200', NULL, '1', '20', '1'),
(5, NULL, 2, NULL, 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'man-cloth.jpg', 'man-cloth.jpg', 'man-cloth.jpg', 'man-cloth.jpg', NULL, NULL, '22', NULL, NULL, '3', NULL),
(6, NULL, 2, NULL, 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'man-cloth.jpg', 'man-cloth3.jpg', 'man-cloth4.jpg', 'man-cloth3.jpg', NULL, NULL, '222', NULL, NULL, '2', NULL),
(7, 7, 7, 'Shoes', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'shoes_man2.jpg', 'shoes_man2.jpg', 'shoes_man2.jpg', 'shoes_man2.jpg', NULL, NULL, '300', NULL, NULL, '20', NULL),
(8, NULL, 2, NULL, 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'man-cloth5.jpg', 'man-cloth5.jpg', 'man-cloth5.jpg', 'man-cloth3.jpg', NULL, NULL, '300', NULL, NULL, '2', NULL),
(9, 3, 1, 'Shoes', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphone7.jpg', 'iphonex.jpg', 'iphone7.jpg', 'iphone7.jpg', NULL, NULL, '300', NULL, '8', '30', '1'),
(10, 3, 1, 'ASUS', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphone7.jpg', 'iphonex.jpg', 'iphone7.jpg', 'iphone7.jpg', NULL, NULL, '300', NULL, '8', '30', '1'),
(11, NULL, 2, NULL, 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'man-cloth2.jpg', 'man-cloth3.jpg', 'man-cloth4.jpg', 'man-cloth3.jpg', NULL, NULL, '333', NULL, NULL, '4', NULL),
(12, 4, 1, 'Experia z', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphonex.jpg', 'iphone7.jpg', 'iphone7.jpg', 'iphonex.jpg', NULL, NULL, '400', NULL, '3', '40', '1'),
(13, NULL, 7, 'Running Shoes', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'shoes_man4.jpg', 'shoes_man5.jpg', 'shoes_man4.jpg', 'shoes_man4.jpg', NULL, NULL, '500', NULL, NULL, '20', NULL),
(14, 5, 1, 'Experia z', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphonex.jpg', 'iphone7.jpg', 'iphone7.jpg', 'iphone7.jpg', NULL, NULL, '500', NULL, '8', '50', '1'),
(15, NULL, 7, 'Shoes Sneaker', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'shoes_man6.jpg', 'shoes_man7.jpg', 'shoes_man6.jpg', 'shoes_man6.jpg', NULL, NULL, '600', NULL, NULL, '80', NULL),
(16, NULL, 7, 'Shoes Transparent', 'White lace top, woven, has a round neck, short sleeves, has knitted lining attached', 'iphone7.jpg', 'iphonex.jpg', 'iphone7.jpg', 'iphonex.jpg', NULL, NULL, '700', NULL, NULL, '50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 1, 'ASUS Laptop 1500', '799.00', 'phone/iphonex.jpg'),
(2, 1, 'Microsoft Surface Pro 3', '898.00', 'phone/iphonex.jpg'),
(3, 1, 'Samsung EVO 32GB', '12.00', 'phone/iphonex.jpg'),
(4, 1, 'Desktop Hard Drive', '50.00', 'phone/iphonex.jpg'),
(5, 1, 'External Hard Drive', '80.00', 'phone/iphonex.jpg'),
(6, 2, 'Crock-Pot Oval Slow Cooker', '34.00', 'phone/iphonex.jpg'),
(7, 2, 'Magic Blender System', '80.00', 'phone/iphonex.jpg'),
(8, 2, 'Cordless Hand Vacuum', '40.00', 'phone/iphonex.jpg'),
(9, 2, 'Dishwasher Detergent', '15.00', 'phone/iphonex.jpg'),
(10, 2, 'Essential Oil Diffuser', '20.00', 'phone/iphonex.jpg'),
(11, 3, 'Medical Personalized', '11.00', 'phone/iphonex.jpg'),
(12, 3, 'Best Bridle Leather Belt', '64.00', 'phone/iphonex.jpg'),
(13, 3, 'HANDMADE Bow set', '24.00', 'phone/iphonex.jpg'),
(14, 3, 'Ceramic Coffee Mug', '18.00', 'phone/iphonex.jpg'),
(15, 3, 'Wine Birthday Glass', '18.00', 'phone/iphonex.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `stock_in` int(11) DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `date_out` datetime DEFAULT NULL,
  `unite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dow`
--

CREATE TABLE `tbl_dow` (
  `dow_id` int(11) NOT NULL,
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
  `dow_secs` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dow`
--

INSERT INTO `tbl_dow` (`dow_id`, `title`, `dow_discount`, `dow_img`, `dow_name`, `dow_brand_name`, `dow_price`, `dow_available`, `dow_sold`, `dow_timer`, `dow_old_price`, `dow_best_price`, `dow_hours`, `dow_mins`, `dow_secs`) VALUES
(1, 'samsung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `user_name`, `password`) VALUES
(1, 'thoninjc', 'jc1234'),
(2, 'sasa', '123'),
(3, 'ssasa', '123'),
(4, 'sian', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT '0',
  `lname` varchar(50) DEFAULT '0',
  `passowd` varchar(50) DEFAULT '0',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(50) DEFAULT NULL,
  `user_login` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus-id`);

--
-- Indexes for table `inspired`
--
ALTER TABLE `inspired`
  ADD PRIMARY KEY (`inpired_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  ADD PRIMARY KEY (`dow_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus-id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inspired`
--
ALTER TABLE `inspired`
  MODIFY `inpired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  MODIFY `dow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
