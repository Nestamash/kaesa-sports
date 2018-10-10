-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 08:06 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `pros`
--

CREATE TABLE IF NOT EXISTS `pros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(18) NOT NULL,
  `surname` varchar(18) NOT NULL,
  `othername` varchar(18) NOT NULL,
  `title` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `specialization` text NOT NULL,
  `availability` varchar(40) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pros`
--

INSERT INTO `pros` (`id`, `firstname`, `surname`, `othername`, `title`, `age`, `office`, `specialization`, `availability`, `contact`, `email`, `image`, `gender`) VALUES
(1, 'Job', 'Omenta', 'Okinyi', 'Student', 23, 'Hall 7, 2nd flr, Studio IV', 'Quantity Surveying, Quality Analysis and Survey Methodologies.', '8.00 a.m to 3.30 p.m.', '0728177869', 'jobomenta@roreom.org', 'apache_pb2.gif', 'Male'),
(2, 'Caleb', 'Saina', 'Kiprob', 'Student', 21, 'NSC 104, 2ND FLOOR', 'Supply Chain Management', '2:00-3:30', '0728177844', 'calebsaina@gmail.com', 'heavenly-recipes.jpg', 'Male'),
(3, 'Caleb', 'momanyi', 'omayio', 'Proffessor', 25, 'fedha3', 'bbit', 'yes', '0705903465', 'momanyicalebomayio@gmail.com', 'heavenly-recipes.jpg', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `date`) VALUES
(1, 'reagan', 'd3c25e0c4dd275a5b92a2767e865a964', 1, '2016-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE IF NOT EXISTS `users1` (
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
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`Email`, `FirstName`, `LastName`, `Gender`, `Contact`, `Password`, `Group`, `RegDate`) VALUES
('admin@admin.com', 'Administrator', 'Admin', 'Male', '0706662011', '64e1b8d34f425d19e1ee2ea7236d3028', '0', '0000-00-00'),
('mwegiy@gmail.com', 'Martin', 'Mwegi', 'Male', '0725813261', 'c6c791d790d503fb595a5152c65bafde', '1', '0000-00-00'),
('surgbc1@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '8453b43e4402ded21b29b98ba1e8e015', '1', '0000-00-00'),
('surgbc2@gmail.com', 'Brian', 'Onang''o', 'Male', '0706662011', '4477615493e679fdaec6026650a095e8', '1', '0000-00-00'),
('surgbc@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '900150983cd24fb0d6963f7d28e17f72', '1', '0000-00-00'),
('test1@test.com', 'Brian', 'Onang''o', 'Female', '0706662911', '94fba03762323f286d7c3ca9e001c541', '1', '2016-04-12'),
('test@test.com', 'test@test.com', 'test@test.com', 'Male', '0706662911', 'b642b4217b34b1e8d3bd915fc65c4452', '1', '2016-04-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
