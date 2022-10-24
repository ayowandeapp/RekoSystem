-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2022 at 09:54 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `created_at`) VALUES
(1, 'wande', NULL),
(4, 'tayo', NULL),
(19, 'paul', NULL),
(18, 'michael', NULL),
(17, 'daniel', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

DROP TABLE IF EXISTS `user_products`;
CREATE TABLE IF NOT EXISTS `user_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `name`, `price`, `type`, `size`, `rating`) VALUES
(3, 17, 'plain t-shirt', 6000, 'shirt', 'L', NULL),
(4, 17, 'zipper jacket', 5000, 'shirt', 'L', 5),
(11, 18, 'plain t-shirt', 6000, 'shirt', 'L', NULL),
(6, 17, 'business shirt', 4000, 'shirt', 'L', 4),
(7, 17, 'short sleeve shirt', 3000, 'shirt', 'L', 2),
(8, 17, 'long sleeve shirt', 3500, 'shirt', 'L', 5),
(9, 17, 'painted shirt', 7000, 'shirt', 'L', NULL),
(10, 17, 'vintage shirt', 6000, 'shirt', 'L', 4),
(12, 18, 'zipper jacket', 5000, 'shirt', 'L', 4),
(13, 18, 'business shirt', 4000, 'shirt', 'L', NULL),
(14, 18, 'short sleeve shirt', 3000, 'shirt', 'L', NULL),
(15, 18, 'long sleeve shirt', 3500, 'shirt', 'L', 4),
(16, 18, 'painted shirt', 7000, 'shirt', 'L', NULL),
(17, 18, 'vintage shirt', 6000, 'shirt', 'L', 4),
(18, 19, 'plain t-shirt', 6000, 'shirt', 'L', 5),
(19, 19, 'zipper jacket', 5000, 'shirt', 'L', 3),
(20, 19, 'business shirt', 4000, 'shirt', 'L', 5),
(21, 19, 'short sleeve shirt', 3000, 'shirt', 'L', 3),
(22, 19, 'long sleeve shirt', 3500, 'shirt', 'L', NULL),
(23, 19, 'painted shirt', 7000, 'shirt', 'L', 3),
(24, 19, 'vintage shirt', 6000, 'shirt', 'L', 5),
(25, 4, 'plain t-shirt', 6000, 'shirt', 'L', 4),
(26, 4, 'zipper jacket', 5000, 'shirt', 'L', 5),
(27, 4, 'business shirt', 4000, 'shirt', 'L', 4),
(28, 4, 'short sleeve shirt', 3000, 'shirt', 'L', 3),
(29, 4, 'long sleeve shirt', 3500, 'shirt', 'L', 4),
(30, 4, 'painted shirt', 7000, 'shirt', 'L', 3),
(31, 4, 'vintage shirt', 6000, 'shirt', 'L', 4),
(32, 1, 'plain t-shirt', 6000, 'shirt', 'L', 5),
(33, 1, 'zipper jacket', 5000, 'shirt', 'L', 5),
(34, 1, 'business shirt', 4000, 'shirt', 'L', NULL),
(35, 1, 'short sleeve shirt', 3000, 'shirt', 'L', NULL),
(36, 1, 'long sleeve shirt', 3500, 'shirt', 'L', 4),
(37, 1, 'painted shirt', 7000, 'shirt', 'L', NULL),
(38, 1, 'vintage shirt', 6000, 'shirt', 'L', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
