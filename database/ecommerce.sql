-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2021 at 04:27 AM
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
-- Database: `ecommerce`
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Canon EOS', 36000),
(3, 'Nikon DSLR', 40000),
(4, 'Sony DSLR', 50000),
(5, 'Olympus DSLR', 80000),
(6, 'Titan Model #301', 13000),
(7, 'Titan Model #201', 3000),
(8, 'HMT Milan', 8000),
(9, 'Faber Luba #111', 18000),
(10, 'H&W', 800),
(11, 'Luis', 1000),
(12, 'John Zok', 1500),
(13, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `contact`, `city`, `address`) VALUES
(1, 'venu@xyz.com', 'Venu Sharma', 'venu@123', '547903927', 'Gwalior', 'A-12 gole ka mandir'),
(2, 'shubham@xyz.com', 'Shubha Tiwari', 'shubha@123', '538915694', 'Katni', 'B-56 shivajinagar'),
(3, 'disha@xyz.com', 'Disha Kaur', 'disha@123', '557825323', 'Bhopal', 'D-3 gandhinagar'),
(4, 'ankit@xyz.com', 'Ankit Kumar', 'ankit@123', '561322116', 'Indore', 'C-9 ghanta ghar'),
(5, 'mrinal@xyz.com', 'Mrinal Joy', 'mrinal@123', '517918670', 'Gwalior', 'A-14 gole ka mandir'),
(6, 'abhilash@xyz.com', 'Abhilash Jalsani', 'abhilash@123', '509841902', 'Katni', 'B-56 shivajinagar'),
(7, 'hardik@xyz.com', 'Hardik Arora', 'hardik@123', '595452568', 'Indore', 'C-1 ghanta ghar'),
(8, 'yesha@xyz.com', 'Yesha Krishna', 'yesha@123', '534532216', 'Bhopal', 'D-10 gandhinagar'),
(9, 'rushit@xyz.com', 'Rushit Sahu', 'rushit@123', '534359370', 'Bhopal', 'G-3 gandhinagar'),
(10, 'jessy@xyz.com', 'Jessy Joseph', 'jessy@123', '591053100', 'Bhopal', 'D-3 shivajinagar'),
(11, 'jasper@xyz.com', 'Jaspreet Singh', 'jaspreet@123', '515078235', 'Shihora', 'A-3 gandhinagar'),
(12, 'prachi@xyz.com', 'Prachi Sharma', 'prachi@123', '530670640', 'Ujjain', 'D-3 ghanta ghar'),
(13, 'ravikant@rerddit.com', 'Ravikant Rathore', 'ravi@123', '7878969632', 'Gwalior', 'Nai basti '),
(14, 'zdgsdg@gmail.com', 'fdhd', 'fhdg', '35435', 'dg', 'xgff'),
(15, 'aditect@yahoo.com', 'Aditya SHukla', 'addu432', '9171418261', 'Maihar', 'Colony abc');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 12, 3, 'Added to cart'),
(2, 12, 6, 'Confirmed'),
(3, 8, 6, 'Added to cart'),
(4, 4, 6, 'Confirmed'),
(5, 10, 9, 'Confirmed'),
(6, 7, 4, 'Confirmed'),
(7, 5, 1, 'Confirmed'),
(8, 4, 5, 'Confirmed'),
(9, 8, 5, 'Added to cart'),
(10, 7, 7, 'Added to cart'),
(11, 12, 2, 'Confirmed'),
(12, 12, 7, 'Added to cart'),
(13, 7, 2, 'Confirmed'),
(14, 7, 8, 'Confirmed'),
(15, 1, 2, 'Confirmed'),
(16, 11, 6, 'Confirmed'),
(17, 15, 1, 'Confirmed'),
(18, 15, 8, 'Confirmed'),
(19, 15, 2, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
