-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2022 at 11:39 AM
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
-- Database: `pdo_toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `bodemfoormaat` varchar(40) NOT NULL,
  `saus` varchar(20) NOT NULL,
  `pizzatoppings` varchar(20) NOT NULL,
  `kruiden` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `bodemfoormaat`, `saus`, `pizzatoppings`, `kruiden`) VALUES
(1, '30', 'Tomatensaus', 'Vegan', 'Oregano'),
(2, '40', 'BBQ saus', 'Vegetarisch', 'Chili flakes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
