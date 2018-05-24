-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 04:56 AM
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
(1, 'Deals of the Week', '50%', 'deals.png', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(2, 'Deals of the Week', '50%', 'best_5.png', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(3, 'Deals of the Week', '50%', 'featured_3.png', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(4, 'Deals of the Week', '50%', 'new_3.jpg', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(5, 'Deals of the Week', '50%', 'best_2.png', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(6, 'Deals of the Week', '50%', 'new_3.jpg', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs'),
(7, 'Deals of the Week', '50%', 'new_3.jpg', 'Headphones', 'Beoplay H7', 'Headphones', '66', '28', NULL, '300$', '$225', NULL, 'Mins', 'Secs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  ADD PRIMARY KEY (`dow_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dow`
--
ALTER TABLE `tbl_dow`
  MODIFY `dow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
