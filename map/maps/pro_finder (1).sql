-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 03:46 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

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
  `title` varchar(16) NOT NULL,
  `age` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `specialization` text NOT NULL,
  `availability` varchar(40) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pros`
--

INSERT INTO `pros` (`id`, `firstname`, `surname`, `othername`, `title`, `age`, `office`, `specialization`, `availability`, `contact`, `email`, `image`, `gender`) VALUES
(1, 'Job', 'Omenta', 'Okinyi', 'Student', 23, 'Hall 7, 2nd flr, Studio IV', 'Quantity Surveying, Quality Analysis and Survey Methodologies.', '8.00 a.m to 3.30 p.m.', '0728177869', 'jobomenta@roreom.org', 'None', 'Male'),
(2, 'Caleb', 'Saina', 'Kiprob', 'Student', 21, 'NSC 104, 2ND FLOOR', 'Supply Chain Management', '2:00-3:30', '0728177844', 'calebsaina@gmail.com', 'Saina', 'Male'),
(3, 'Caleb', 'momanyi', 'omayio', 'Proffessor', 25, 'fedha3', 'bbit', 'yes', '0705903465', 'momanyicalebomayio@gmail.com', '', 'Male'),
(7, 'Brian', 'Onang\\''o', 'Odhiambo', 'Engineer', 12, 'fsgghj', 'Mechatronics, arduino, cseco', 'fsgjhg', '7239572987', 'surgbc@gmail.com', 'apache_pb2.gif', 'Male');

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
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`Email`, `FirstName`, `LastName`, `Gender`, `Contact`, `Password`) VALUES
('mwegiy@gmail.com', 'Martin', 'Mwegi', 'Male', '0725813261', 'c6c791d790d503fb595a5152c65bafde'),
('surgbc1@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '8453b43e4402ded21b29b98ba1e8e015'),
('surgbc@gmail.com', 'fsdgfhsjFS', 'fdhjgsjgfhk', 'Male', '979879', '900150983cd24fb0d6963f7d28e17f72');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
