-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2020 at 02:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'SAMSUNG - M31 MOBILE PHONE', 11000),
(2, 'NOKIA - 206 MOBILE PHONE ', 2500),
(3, 'REALME - 6PRO MOBILE PHONE  ', 12000),
(4, 'APPLE IPHONE 10 MOBILE PHONE ', 65000),
(5, 'NOKIA - 210 MOBILE PHONE ', 4000),
(6, 'ONE PLUS - 7T MOBILE PHONE', 36000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Amit', 'amit@xyz.com', '1234', '10989876', 'Delhi', 'East rohini'),
(2, 'Gourav', 'gourav@xyz.com', '1234', '123456784', 'Noida', ' Near East road side park'),
(3, 'Naresh', 'naresh@xyz.com', '1234', '12346742', 'Gurugram', 'Sector 99'),
(10, 'Ishant Khurana', 'ishantkhurana@xyz.com', 'c8837b23ff8aaa8a2dde915473ce0991', '1234567890', 'hansi', 'hno 860/20 roop nagar colony'),
(11, 'amit', 'amit@xyz.com', 'c8837b23ff8aaa8a2dde915473ce0991', '1234567890', 'hansi', 'hno 860/20 roop nagar colony'),
(12, 'Monika', '', '6f3fc039bfe1efdb272111f276a0e84a', '9087654321', 'kurukshetra', 'girls hostel '),
(13, 'himi', 'himi12@xyz.com', 'c8837b23ff8aaa8a2dde915473ce0991', '9138104237', 'hansi', 'huda'),
(16, 'hunny', 'hunny@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'hno 860/20 roop nagar colony'),
(17, 'arun', 'arun23@xyz.com', 'fa7d5dcd109a27b6fa057412ef454626', '9087654321', 'hansi', 'huda'),
(19, 'himi', 'himi12@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'huda'),
(21, 'anil', 'anil13@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'shnkdn'),
(22, 'arjun', 'arjun21@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'shfskhf'),
(23, 'motii', 'motii12@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'faridabad', 'HUDA'),
(24, 'panda', 'panda1@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'huda'),
(25, 'nishant', 'nishant12@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9138104237', 'hansi', 'HUDA'),
(27, 'parveen', 'parveen3@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9138104237', 'hansi', 'huda'),
(28, 'rohit', 'rohit@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9138104237', 'hansi', 'bsnl exchange'),
(29, 'jitu', 'jitu12@xyz.com', 'c8837b23ff8aaa8a2dde915473ce0991', '9087654321', 'gurgaon', 'dlf phase 3'),
(30, 'paro', 'paro1@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'HUDA'),
(31, 'navya', 'navya27@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9087654321', 'faridabad', 'huda'),
(32, 'nidhi', 'nidhi07@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9138104237', 'kurukshetra', 'kurukshetra'),
(34, 'jitesh', 'jitesh1@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9087654321', 'gurgaon', 'dlf phase 3'),
(35, 'himanshu', 'himanshu18@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9138104237', 'hansi', ' roop nagar colony'),
(36, 'Ishant Khurana', 'ishant07@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', ' roop nagar colony'),
(37, 'bhushan', 'bhushi30@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '9087654321', 'hansi', 'lal sarak'),
(38, 'shweta', 'shweta12@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'kurukshetra', 'kurukshetra'),
(39, 'ishu', 'ishuboy07@xyz.com', 'bcf35bc9c1d1950a5cd08b437addcb00', '9138104237', 'hansi', 'hno 860/20 roop nagar colony'),
(40, 'deepika', 'deepika7@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'hansi', 'hansi');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(27, 24, 3, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
