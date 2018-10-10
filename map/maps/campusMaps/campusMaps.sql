-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2016 at 05:44 AM
-- Server version: 5.6.32
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campusMaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE IF NOT EXISTS `maps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Gate_A', 'Gate_A', -1.101550, 37.014183, 'Gate'),
(2, 'ATM', 'ATM', -1.101566, 37.014011, 'Commercial'),
(3, 'BANK', 'BANK', -1.100225, 37.014919, 'Commercial'),
(4, 'POND', 'POND', -1.092253, 37.010712, 'Water_body'),
(5, 'SWIMMING_POOL', 'SWIMMING_POOL', -1.092103, 37.015121, 'Water_body'),
(6, 'MAIN_MESS', 'MAIN_MESS', -1.095439, 37.015446, 'Caf'),
(7, 'SMOKING_ZONE', 'SMOKING_ZONE', -1.095128, 37.017826, 'Smoking'),
(8, 'LIBRARY', 'LIBRARY', -1.096908, 37.015347, 'Library'),
(9, 'NSC_CAFETERIA', 'NSC_CAFETERIA', -1.098764, 37.013168, 'Caf'),
(10, 'LT1', 'LT1', -1.098975, 37.013535, 'Lecture_theater'),
(11, 'LT2', 'LT2', -1.098982, 37.013401, 'Lecture_theater');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Email` char(128) NOT NULL,
  `FirstName` char(32) NOT NULL,
  `LastName` char(32) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Contact` char(16) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Group` enum('1','0') NOT NULL DEFAULT '1',
  `RegDate` date NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `FirstName`, `LastName`, `Gender`, `Contact`, `Password`, `Group`, `RegDate`) VALUES
('admin@admin.com', 'Administrator', 'Admin', 'Male', '0706662011', '64e1b8d34f425d19e1ee2ea7236d3028', '0', '0000-00-00'),
('mwegiy@gmail.com', 'Martin', 'Mwegi', 'Male', '0725813261', 'c6c791d790d503fb595a5152c65bafde', '1', '0000-00-00'),
('surgbc1@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '8453b43e4402ded21b29b98ba1e8e015', '1', '0000-00-00'),
('surgbc2@gmail.com', 'Brian', 'Onang''o', 'Male', '0706662011', '4477615493e679fdaec6026650a095e8', '1', '0000-00-00'),
('surgbc@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '900150983cd24fb0d6963f7d28e17f72', '1', '0000-00-00'),
('surg_bc@yahoo.com', 'Brian', 'Onang''o', 'Male', '0706662011', '73c1d22470f673b6c95f939bcd136be0', '1', '2016-07-12'),
('test12@test.com', 'test@test.com', 'test@test.com', 'Male', '0706662011', '7577d017ef5dd579021dba7a9f50730e', '1', '2016-08-08'),
('test1@test.com', 'Brian', 'Onang''o', 'Female', '0706662911', '94fba03762323f286d7c3ca9e001c541', '1', '2016-04-12'),
('test@test.com', 'test@test.com', 'test@test.com', 'Male', '077', 'b642b4217b34b1e8d3bd915fc65c4452', '1', '2016-07-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
