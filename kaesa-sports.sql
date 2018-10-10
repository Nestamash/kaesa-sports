-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 02:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaesa-sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE IF NOT EXISTS `admin_credentials` (
  `admin_username` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`admin_username`, `admin_password`) VALUES
('admin@admin.com', 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `article_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `coach_username` varchar(40) NOT NULL,
  `coach_f_name` varchar(40) DEFAULT NULL,
  `coach_l_name` varchar(40) DEFAULT NULL,
  `coach_profile_pic` varchar(100) DEFAULT NULL,
  `coach_profile_pic_ext` varchar(10) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`coach_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`coach_username`, `coach_f_name`, `coach_l_name`, `coach_profile_pic`, `coach_profile_pic_ext`, `sport_id`) VALUES
('admighn@admin.com', 'sdtfgh', 'tfyghn', 'Desert.jpg', NULL, 1),
('admisfn@admin.com', 'fsda', 'arvgf', '18739835_1921189214573415_303761111652084194_n.jpg', NULL, 1),
('afootball@gmail.com', 'Kibe ', 'John', 'DSC_0499 - Copy.JPG', NULL, 2),
('athletics@gmail.com', 'Kithuka', 'Patrick', 'jm.jpg', NULL, 5),
('bball@gmail.com', 'Brian', 'Muriithi', 'DSC_0854.JPG', NULL, 4),
('chess@gmail.com', 'Jackson', 'Mutua', 'Dating-in-a-wheelchair1.jpg', NULL, 6),
('football@gmail.com', 'John ', 'Laton', 'DSC_0745.JPG', NULL, 1),
('marsahapi@gmail.com', 'marsha', 'pita', 'tits.jpg', NULL, 11),
('scrabble@gmail.com', 'Shamim', 'Salim', 'friendship.jpg', NULL, 7),
('swimming@gmail.com', 'Kennedy', 'Musyoki', 'DSC_0010.JPG', NULL, 9),
('ttennis@gmail.com', 'sa', 'sad', 'tb1.jpg', NULL, 10),
('vball@gmail.com', 'Mejja', 'Mugoka', 'DSC_0320.JPG', NULL, 3),
('zedg@fdgh', 'etrh', 'zdgr', 'Tulips.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coach_credentials`
--

CREATE TABLE IF NOT EXISTS `coach_credentials` (
  `coach_username` varchar(40) NOT NULL,
  `coach_password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`coach_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_credentials`
--

INSERT INTO `coach_credentials` (`coach_username`, `coach_password`) VALUES
('', ''),
('admighn@admin.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('admisfn@admin.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('afootball@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('athletics@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('bball@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('chess@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('football@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('marsahapi@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('scrabble@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('swimming@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('ttennis@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('vball@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('zedg@fdgh', '75e7172d105c21800902f60b1cbf3c2523baa6f8');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` longtext,
  `comment_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_type` varchar(15) DEFAULT NULL,
  `player_username` varchar(40) DEFAULT NULL,
  `coach_username` varchar(40) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `comment_time`, `comment_type`, `player_username`, `coach_username`, `sport_id`, `post_id`) VALUES
(1, 'This is only a sample Comment. This is only a sample Comment.This is only a sample Comment.This is only a sample Comment.', '2016-05-17 09:55:17', 'comment', 'admin@admin.com', 'admin@admin.com', 1, NULL),
(4, 'Hello Brother. I like How you think Man, Keep that up', '2016-05-17 15:25:33', 'comment', 'admin@admin.com ', NULL, 1, 2),
(5, 'Hello Brother. I like How you think Man, Keep that up', '2016-05-17 15:27:28', 'comment', 'admin@admin.com ', NULL, 1, 2),
(6, 'Please postpone games this weekend', '2016-05-17 15:53:43', 'comment', 'admin@admin.com ', NULL, 1, 2),
(7, 'Hello, Please count me out of this seasons games', '2016-05-17 15:55:19', 'comment', 'admin@admin.com ', NULL, 1, 2),
(8, 'Patrick,  enter your comment here...', '2016-05-17 16:48:53', 'comment', 'kithuka@gmail.com ', NULL, 1, 1),
(9, 'Hey Am I the Only one chatting here?', '2016-05-17 16:49:37', 'comment', 'kithuka@gmail.com ', NULL, 1, 1),
(10, 'Hello, The Hell are you postponing games without consulting us', '2016-05-17 17:24:43', 'comment', 'kithuka@gmail.com ', NULL, 1, 3),
(11, 'Yea, @Kithuka, Good Question, How can you do that?', '2016-05-17 17:26:17', 'comment', 'admin@admin.com ', NULL, 1, 3),
(12, 'Hey, What happened to this Chat @Kithuka @Coach', '2016-05-17 17:28:24', 'comment', 'admin@admin.com ', NULL, 1, 1),
(13, 'I Totally Agree with you Admin. Good Job there introducing New Players', '2016-05-17 17:31:07', 'comment', 'kithuka@gmail.com ', NULL, 1, 2),
(14, 'Hey I am here again', '2016-05-17 19:11:17', 'comment', 'kithuka@gmail.com ', NULL, 1, 3),
(15, 'Uhoro Waku mundu wa nyumba? @Kithuka', '2016-05-17 19:16:03', 'comment', 'kithuka@gmail.com  ', NULL, 1, 1),
(16, 'You can change your citizenship, partner, friends or religion but NEVER EVER can you change your favourite football team', '2016-05-17 19:30:14', 'comment', 'kithuka@gmail.com   ', NULL, 1, 1),
(17, 'You can change your citizenship, partner, friends or religion but NEVER EVER can you change your favourite football team ', '2016-05-17 19:31:44', 'comment', 'kithuka@gmail.com    ', NULL, 1, 1),
(18, 'You can change your citizenship, partner, friends or religion but NEVER EVER can you change your favourite football team ', '2016-05-17 19:37:55', 'comment', 'kithuka@gmail.com ', NULL, 1, 3),
(19, 'Brian is an idiot, That we all know, Dont we?', '2016-05-18 07:46:08', 'comment', 'kithuka@gmail.com ', NULL, 1, 2),
(20, 'Hey Everyone, Can I register for the Competition? What are the Requirements?', '2016-05-18 08:12:32', 'comment', 'dn@gmail.com ', NULL, 6, 4),
(21, 'Hello everyone, No Game tonight, I am not available.', '2016-05-18 08:53:17', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(22, 'Can We meet tonight for the Game?', '2016-05-18 08:57:16', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(23, 'I am Getting Bored by the game', '2016-05-18 08:57:57', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(24, 'Coach? What are you saying? What is boring you?', '2016-05-18 08:58:57', 'comment', 'dn@gmail.com ', NULL, 6, 4),
(25, 'People in here are playing as if they are paid to do so. Good Job today, Aint bored any more @DN', '2016-05-18 09:00:22', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(26, 'Some New Information Will Be coming your way soon.', '2016-05-18 09:04:03', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(27, 'Which info @coach', '2016-05-18 09:04:30', 'comment', 'dn@gmail.com ', NULL, 6, 4),
(28, 'Hi Coach', '2016-05-18 11:05:40', 'comment', 'dn@gmail.com ', NULL, 6, 4),
(29, 'Hi @DN', '2016-05-18 11:15:48', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(30, 'Hey People, Been too silent', '2016-05-18 11:29:33', 'coach-comment', 'admin@admin.com ', NULL, 1, 1),
(31, 'Hi Everyone, Anyone around?', '2016-05-18 11:38:15', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(32, 'This Chat Died?', '2016-05-18 12:15:26', 'coach-comment', 'admin@admin.com ', NULL, 1, 2),
(33, 'Anyone online?', '2016-05-18 12:24:25', 'coach-comment', 'admin@admin.com ', NULL, 1, 3),
(34, 'I am new around here, Someone give me some directions kindly.', '2016-05-18 15:34:03', 'comment', 'pk@gmail.com ', NULL, 1, 3),
(35, 'Hey People, Someone teach me Chess?', '2016-05-18 15:36:44', 'comment', 'aw@gmail.com ', NULL, 6, 4),
(36, 'Jackson,  Comment as Coach Here...', '2016-05-19 00:00:46', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(37, 'Jackson,  Comment as Coach Here...blablaaah', '2016-05-19 00:01:01', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(38, 'Blah blah blah\r\n', '2016-05-19 00:01:24', 'coach-comment', 'kk@gmail.com ', NULL, 6, 4),
(39, '   Â Alright Man. Blah blah blah.', '2016-05-19 00:44:51', 'comment', 'Alex ', NULL, 6, 4),
(40, 'Kitu chenye tutakumbuka', '2016-05-19 00:48:35', 'comment', 'Patrick ', NULL, 1, 3),
(41, ' Ati nini @Pato', '2016-05-19 00:49:30', 'comment', 'Kaeke ', NULL, 1, 3),
(42, 'Wacheni Kelele laleni', '2016-05-19 00:50:24', 'coach-comment', 'admin@admin.com ', NULL, 1, 3),
(43, 'No More comments, Conversation Closed', '2016-05-19 09:44:57', 'coach-comment', 'mma@gmail.com ', NULL, 1, 3),
(44, 'Hey, I am back\r\n', '2016-05-19 09:52:28', 'comment', 'Kithuka ', NULL, 1, 3),
(45, '   Â Sema Kithuka', '2016-05-19 15:44:26', 'comment', 'Fredrick ', NULL, 1, 3),
(46, '   Great Job there, Welcome aboard Anthony', '2016-05-19 17:19:37', 'comment', 'Fredrick ', NULL, 1, 6),
(47, '  Cartoon? Did you get a girlfriend?', '2016-05-19 17:24:10', 'comment', 'Fredrick ', NULL, 1, 7),
(48, 'Any one available for the Chess Master Visit to show up for the session.', '2016-05-20 11:31:09', 'coach-comment', 'chess@gmail.com ', NULL, 6, 11),
(49, ' Alrigh Coach, Will be there.', '2016-05-20 11:32:12', 'comment', 'Doreen ', NULL, 6, 11),
(50, 'Alright Doreen, See you then. Anyone else?', '2016-05-20 11:34:18', 'coach-comment', 'Jackson ', NULL, 6, 11),
(51, 'The studium goes for 20000', '2016-05-20 12:46:03', 'coach-comment', 'John  ', NULL, 1, 8),
(52, 'That is too much Money', '2016-05-20 12:47:00', 'comment', 'Kithuka ', NULL, 1, 8),
(53, 'Good luck cartoon\r\n', '2016-05-20 12:47:46', 'comment', 'Kithuka ', NULL, 1, 7),
(54, 'Hey People, Please speak up', '2016-05-20 18:47:43', 'coach-comment', 'John  ', NULL, 1, 12),
(55, 'People went silent here', '2016-05-20 18:48:27', 'coach-comment', 'John  ', NULL, 1, 5),
(56, 'Thank you everyone. I appreciate', '2016-05-20 18:53:14', 'comment', 'Joy ', NULL, 4, 10),
(57, 'Coach is speaking', '2016-05-20 18:56:02', 'coach-comment', 'Coach John  ', NULL, 1, 12),
(58, '   Sorry Sir, We are here', '2016-05-20 18:56:48', 'comment', 'Kithuka ', NULL, 1, 12),
(59, ' What do you want of us?', '2016-05-20 18:58:47', 'comment', 'Kithuka ', NULL, 1, 12),
(60, 'There is a game today', '2016-05-22 11:06:33', 'comment', 'Mutati ', NULL, 1, 12),
(61, 'I wont be available', '2016-05-25 08:48:56', 'comment', 'Kithuka ', NULL, 1, 12),
(62, 'You are welcome on Board Joy', '2016-05-25 09:37:18', 'coach-comment', 'Coach Brian ', NULL, 4, 10),
(63, 'Hey, People, long time.', '2016-06-30 16:10:49', 'comment', 'Kithuka ', NULL, 1, 12),
(64, 'Hey Kithuka, You are the one that has been lost', '2016-06-30 16:11:59', 'coach-comment', 'Coach John  ', NULL, 1, 12),
(65, '   Â  Â  Hey There. Been long', '2016-07-08 15:00:39', 'comment', 'Kithuka ', NULL, 1, 12),
(66, 'I am here now. People please update me', '2016-07-14 21:47:17', 'comment', 'Kaesa ', NULL, 1, 12),
(67, 'this is great', '2018-08-08 01:17:59', 'comment', 'FREDI ', NULL, 1, 155),
(68, 'hey', '2018-08-08 01:21:32', 'comment', 'FREDI ', NULL, 1, 155),
(69, 'just', '2018-08-08 01:22:18', 'comment', 'FREDI ', NULL, 1, 155),
(70, 'cool', '2018-08-08 01:23:01', 'comment', 'FREDI ', NULL, 1, 155),
(71, 'tss', '2018-08-08 01:28:21', 'comment', 'FREDI ', NULL, 1, 155),
(72, 'hello', '2018-08-08 01:33:35', 'comment', 'FREDI ', NULL, 1, 12),
(73, 'fun', '2018-08-08 01:36:01', 'comment', 'FREDI ', NULL, 1, 12),
(74, 'am back', '2018-08-08 01:43:47', 'comment', 'FREDI ', NULL, 1, 12),
(75, 'here i am', '2018-08-08 01:47:28', 'comment', 'FREDI ', NULL, 1, 6),
(76, 'cool', '2018-08-08 01:50:35', 'comment', 'FREDI ', NULL, 1, 12),
(77, 'am here ', '2018-08-08 01:52:48', 'comment', 'FREDI ', NULL, 1, 8),
(78, 'got it', '2018-08-08 01:57:01', 'comment', 'FREDI ', NULL, 1, 155),
(79, 'thanks', '2018-08-08 01:59:18', 'comment', 'FREDI ', NULL, 1, 7),
(80, 'yes', '2018-08-08 02:02:58', 'comment', 'FREDI ', NULL, 1, 7),
(81, 'welcome', '2018-08-08 02:05:23', 'comment', 'FREDI ', NULL, 1, 12),
(82, 'ha', '2018-08-08 02:07:29', 'comment', 'FREDI ', NULL, 1, 155),
(83, 'gh', '2018-08-08 02:14:49', 'comment', 'FREDI ', NULL, 1, 8),
(84, 'nice', '2018-08-08 02:16:20', 'comment', 'FREDI ', NULL, 1, 7),
(85, 'aje', '2018-08-08 02:18:39', 'comment', 'FREDI ', NULL, 1, 7),
(86, 'fredi', '2018-08-08 02:20:03', 'comment', 'FREDI ', NULL, 1, 155),
(87, 'sasa', '2018-08-08 02:21:28', 'comment', 'FREDI ', NULL, 1, 155),
(88, 'ffff', '2018-08-08 02:24:39', 'comment', 'FREDI ', NULL, 1, 155),
(89, 'absolutely', '2018-08-08 02:30:57', 'comment', 'kamau ', NULL, 2, 157),
(90, 'thanks', '2018-08-08 02:34:47', 'comment', 'kamau ', NULL, 2, 157),
(91, 'ss', '2018-08-08 02:38:26', 'comment', 'kamau ', NULL, 2, 157),
(92, 'this cool', '2018-08-08 02:56:25', 'comment', 'kamau ', NULL, 2, 157),
(93, 'wonderful', '2018-08-08 02:58:55', 'comment', 'kamau ', NULL, 2, 157),
(94, 'i love this', '2018-08-08 03:00:13', 'comment', 'kamau ', NULL, 2, 157),
(95, 'thanks', '2018-08-08 03:01:49', 'comment', 'kamau ', NULL, 2, 157),
(96, 's', '2018-08-08 03:04:37', 'comment', 'kamau ', NULL, 2, 157),
(97, 'gf', '2018-08-08 03:05:17', 'comment', 'kamau ', NULL, 2, 157),
(98, 'fr', '2018-08-08 03:06:07', 'comment', 'kamau ', NULL, 2, 157),
(99, 'real', '2018-08-08 03:07:30', 'comment', 'kamau ', NULL, 2, 157),
(100, 'was', '2018-08-08 03:10:16', 'comment', 'kamau ', NULL, 2, 157),
(101, 'hi', '2018-08-08 03:16:14', 'comment', 'kamau ', NULL, 2, 157),
(102, 'fun', '2018-08-08 03:18:59', 'comment', 'kamau ', NULL, 2, 157),
(103, 'hall 6', '2018-08-08 03:20:36', 'comment', 'kamau ', NULL, 2, 157),
(104, 'hello coach', '2018-08-08 03:27:25', 'comment', 'charles ', NULL, 9, 151),
(105, 'cool', '2018-08-08 03:29:59', 'comment', 'charles ', NULL, 9, 151),
(106, 'fun', '2018-08-08 03:31:33', 'comment', 'charles ', NULL, 9, 153),
(107, 'wow', '2018-08-08 03:34:46', 'comment', 'charles ', NULL, 9, 147),
(108, 'ss', '2018-08-08 03:35:56', 'comment', 'charles ', NULL, 9, 151),
(109, 'wow', '2018-08-08 03:36:47', 'comment', 'charles ', NULL, 9, 153),
(110, 'd', '2018-08-08 03:38:16', 'comment', 'charles ', NULL, 9, 153),
(111, 'sg', '2018-08-08 03:39:40', 'comment', 'charles ', NULL, 9, 153),
(112, 'dx', '2018-08-08 03:40:42', 'comment', 'charles ', NULL, 9, 153),
(113, 'er', '2018-08-08 03:42:41', 'comment', 'charles ', NULL, 9, 153),
(114, 'gf', '2018-08-08 03:43:19', 'comment', 'charles ', NULL, 9, 153),
(115, 'gv', '2018-08-08 03:44:26', 'comment', 'charles ', NULL, 9, 153),
(116, 'ds', '2018-08-08 03:47:21', 'comment', 'charles ', NULL, 9, 151),
(117, 'hi', '2018-08-08 03:50:08', 'comment', 'charles ', NULL, 9, 153),
(118, 'saw3a', '2018-08-08 03:51:19', 'comment', 'charles ', NULL, 9, 153),
(119, 'des', '2018-08-08 03:52:21', 'comment', 'charles ', NULL, 9, 153),
(120, 'cdoo', '2018-08-08 03:53:44', 'comment', 'charles ', NULL, 9, 153),
(121, 'szdf', '2018-08-08 03:54:59', 'comment', 'charles ', NULL, 9, 153),
(122, 'fes', '2018-08-08 03:56:18', 'comment', 'charles ', NULL, 9, 153),
(123, 'gv', '2018-08-08 03:57:16', 'comment', 'charles ', NULL, 9, 152),
(124, 'v', '2018-08-08 04:06:11', 'comment', 'anoldd ', NULL, 1, 155),
(125, 'sasa', '2018-08-08 04:14:36', 'comment', 'cate ', NULL, 10, 158),
(126, 'cll', '2018-08-08 04:15:06', 'comment', 'cate ', NULL, 10, 158),
(127, 'call', '2018-08-08 04:15:19', 'comment', 'cate ', NULL, 10, 158),
(128, 'sasa', '2018-08-08 04:16:45', 'comment', 'charles ', NULL, 9, 153),
(129, 'h', '2018-08-08 04:17:39', 'comment', 'charles ', NULL, 9, 153),
(130, 's', '2018-08-08 04:29:13', 'comment', 'charles ', NULL, 9, 153),
(131, 'sa', '2018-08-08 04:34:03', 'comment', 'charles ', NULL, 9, 153),
(132, 'cass', '2018-08-08 06:19:58', 'comment', 'charles ', NULL, 9, 153),
(133, 'am back', '2018-08-08 06:32:15', 'comment', 'charles ', NULL, 9, 153),
(134, 'hgfc', '2018-08-08 06:34:18', 'comment', 'charles ', NULL, 9, 153),
(135, 'dog', '2018-08-08 06:36:41', 'comment', 'charles ', NULL, 9, 153),
(136, '3', '2018-08-08 06:52:35', 'comment', 'charles ', NULL, 9, 153),
(137, 'sasa', '2018-08-08 06:55:50', 'comment', 'charles ', NULL, 9, 153),
(138, 'dead', '2018-08-08 06:58:32', 'comment', 'charles ', NULL, 9, 152),
(139, 'fifa', '2018-08-08 07:07:11', 'comment', 'anoldd ', NULL, 1, 155),
(140, 'totoal', '2018-08-08 07:07:38', 'comment', 'anoldd ', NULL, 1, 155),
(141, 'cool', '2018-08-08 07:52:10', 'coach-comment', 'Coach Brian ', NULL, 4, 10),
(142, 'sasa', '2018-08-12 02:35:08', 'comment', 'kamau ', NULL, 2, 184),
(143, 'cool', '2018-08-12 03:31:22', 'coach-comment', 'Coach Kibe  ', NULL, 2, 188),
(144, 'woow', '2018-08-12 03:32:23', 'comment', 'kamau ', NULL, 2, 188),
(145, 'cool red', '2018-08-30 16:34:27', 'comment', 'rwf ', NULL, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `game` varchar(32) NOT NULL,
  `team_game` varchar(32) NOT NULL,
  `game_date` date NOT NULL,
  `game_time` time NOT NULL,
  `game_venue` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `game`, `team_game`, `game_date`, `game_time`, `game_venue`, `created_at`, `updated_at`) VALUES
(78, 'Football', 'esf', '2018-08-17', '00:22:00', '234', '2018-08-30 13:06:00', '13:06:00'),
(79, 'Football', 'sdfg', '2018-08-01', '00:23:00', 'QW', '2018-08-30 13:09:00', '13:09:00'),
(80, 'Football', 'tre', '2018-07-31', '14:33:00', 'ww', '2018-08-30 13:16:00', '13:16:00'),
(81, 'Football', 'saD', '2018-08-24', '00:22:00', 'WEWE', '2018-08-30 13:23:00', '13:23:00'),
(82, 'Football', 'MAMA', '2018-08-02', '18:30:00', 'gash', '2018-08-30 13:24:00', '13:24:00'),
(83, 'Loan Tennis', 'htjd', '2018-08-08', '00:23:00', 'f', '2018-08-30 09:58:00', '09:58:00'),
(84, 'Football', 'man c', '2018-08-08', '00:22:00', 'manc', '2018-08-30 19:39:00', '19:39:00'),
(85, 'Football', 'chelsea', '2018-09-05', '18:11:00', 'gashororo', '2018-08-30 19:56:00', '19:56:00'),
(86, 'Football', 'liverpool', '2018-09-07', '19:30:00', 'dubai', '2018-08-30 20:04:00', '20:04:00'),
(87, 'Football', 'sfg', '2018-08-07', '03:44:00', 'df', '2018-08-30 20:32:00', '20:32:00'),
(88, 'Football', 'SASASA', '2018-08-04', '09:22:00', 'FESA', '2018-08-30 20:35:00', '20:35:00'),
(89, 'Football', 'hjyr', '2018-08-09', '02:23:00', 'gast', '2018-08-22 12:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mainteam`
--

CREATE TABLE IF NOT EXISTS `mainteam` (
  `f_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sport_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainteam`
--

INSERT INTO `mainteam` (`f_name`, `last_name`, `email`, `sport_id`) VALUES
('sekeita', 'brenda', 'bri@gmail.com', 10),
('nyambs', 'cate', 'cate@gmail.com', 10),
('kakuu', 'shaz', 'shaz@gmail.com', 10),
('maji', 'nzioka', 'nzioka@gmail.com', 5),
('francis', 'KAHATA', 'kahata@gmail.com', 1),
('mnufe', 'charles', 'charles@gmail.com', 9),
('wawish', 'FREDI', 'fredi@gmail.com', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('kama', 'kamau', 'kama@gmailc.com', 2),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('wawish', 'FREDI', 'fredi@gmail.com', 1),
('keep ', 'kayak ', 'ka@gmal.com', 1),
('klad', 'anoldd', 'kadhu@gmail.com', 1),
('l', 'm', 'wd@gd', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('wawish', 'FREDI', 'fredi@gmail.com', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('Oliech', 'Dennis', 'deniss@gmail.com', 1),
('wish', 'wisha', 'wisha@gmail.com', 11),
('frvw', 'rwf', 'FW@g.com', 1),
('kahuhia', 'kahuhia', 'kahu@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `password`) VALUES
(1, 'marsha@gmail.com', 'trial'),
(2, 'kamm@gmail.com', 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1085 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES
(872, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-11 07:32:30'),
(873, 'wd@gd', 'comment', ' congratulation m you have been added to the main team', 'unread', '2018-08-11 07:32:39'),
(874, 'deniss@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:38'),
(875, 'fredi@gmail.com', 'comment', 'coach added a new post WEF  ', 'read', '2018-08-11 07:34:39'),
(876, 'ka@gmal.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(877, 'kadhu@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(878, 'kahata@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(879, 'kahu@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(880, 'karis@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(881, 'karis@gmail.comf', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:39'),
(882, 'karis@gmail.comjh', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(883, 'kithuka@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(884, 'liz@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(885, 'ma@g', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(886, 'make@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(887, 'marry@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(888, 'mary@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(889, 'michelle@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(890, 'mkithuka@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(891, 'ro@gmail.com', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(892, 'vf@g', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(893, 'wd@gd', 'comment', 'coach added a new post WEF  ', 'unread', '2018-08-11 07:34:40'),
(894, 'cate@gmail.com', 'comment', '  a new  salary added to your account', 'read', '2018-08-11 07:39:51'),
(895, 'cate@gmail.com', 'comment', '  a new  allowance added to your account', 'unread', '2018-08-11 07:40:04'),
(896, 'kama@gmailc.com', 'comment', 'coach added a new post coll popst  ', 'read', '2018-08-12 05:31:30'),
(897, 'afootball@gmail.com', 'comment', '  kamau   commented on your post ', 'read', '2018-08-12 05:35:08'),
(898, 'kama@gmailc.com', 'comment', 'there is a new American Football event', 'read', '2018-08-12 05:39:10'),
(899, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'read', '2018-08-12 05:40:53'),
(900, 'kama@gmailc.com', 'comment', '  you have been suspended you', 'read', '2018-08-12 05:41:30'),
(901, 'kama@gmailc.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-12 05:41:41'),
(902, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 05:41:46'),
(903, 'kama@gmailc.com', 'comment', 'there is a new American Football event', 'unread', '2018-08-12 05:43:17'),
(904, 'kama@gmailc.com', 'comment', 'there is a new American Football event', 'unread', '2018-08-12 05:47:38'),
(905, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 05:48:07'),
(906, 'kama@gmailc.com', 'comment', '  you have been suspended you', 'unread', '2018-08-12 05:49:20'),
(907, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:01:45'),
(908, 'kama@gmailc.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-12 06:03:21'),
(909, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:03:32'),
(910, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:04:18'),
(911, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:05:09'),
(912, 'kama@gmailc.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-12 06:09:53'),
(913, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:13:29'),
(914, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:13:59'),
(915, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:14:41'),
(916, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:15:03'),
(917, 'kama@gmailc.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-12 06:16:07'),
(918, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:16:22'),
(919, 'kama@gmailc.com', 'comment', '  you have been suspended you', 'unread', '2018-08-12 06:16:39'),
(920, 'kama@gmailc.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-12 06:18:36'),
(921, 'kama@gmailc.com', 'comment', ' congratulation kamau you have been added to the main team', 'unread', '2018-08-12 06:28:03'),
(922, 'kama@gmailc.com', 'comment', 'coach added a new post scary  ', 'unread', '2018-08-12 06:31:04'),
(923, 'afootball@gmail.com', 'comment', '  kamau   commented on your post ', 'unread', '2018-08-12 06:32:23'),
(924, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-21 13:19:07'),
(925, 'fredi@gmail.com', 'comment', ' congratulation FREDI you have been added to the main team', 'read', '2018-08-21 13:19:10'),
(926, 'ka@gmal.com', 'comment', ' congratulation kayak  you have been added to the main team', 'unread', '2018-08-21 13:19:12'),
(927, 'kadhu@gmail.com', 'comment', ' congratulation anoldd you have been added to the main team', 'unread', '2018-08-21 13:19:14'),
(928, 'kahata@gmail.com', 'comment', '  you have been suspended you', 'unread', '2018-08-21 13:19:29'),
(929, 'wd@gd', 'comment', '  you have been removed from the main team', 'unread', '2018-08-23 08:59:16'),
(930, 'vf@g', 'comment', '  you have been removed from the main team', 'unread', '2018-08-23 08:59:26'),
(931, 'wd@gd', 'comment', '  you have been removed from the main team', 'unread', '2018-08-23 08:59:34'),
(932, 'wd@gd', 'comment', ' congratulation m you have been added to the main team', 'unread', '2018-08-23 08:59:53'),
(933, 'wd@gd', 'comment', '  you have been suspended you', 'unread', '2018-08-23 09:00:20'),
(934, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-23 09:01:17'),
(935, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-23 09:02:51'),
(936, 'fredi@gmail.com', 'comment', ' congratulation FREDI you have been added to the main team', 'read', '2018-08-23 09:02:53'),
(937, 'deniss@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(938, 'fredi@gmail.com', 'comment', 'coach added a new post this new post  ', 'read', '2018-08-24 07:30:08'),
(939, 'ka@gmal.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(940, 'kadhu@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(941, 'kahata@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(942, 'kahu@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(943, 'karis@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(944, 'karis@gmail.comf', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(945, 'karis@gmail.comjh', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(946, 'kithuka@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(947, 'liz@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(948, 'ma@g', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:08'),
(949, 'make@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(950, 'marry@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(951, 'mary@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(952, 'michelle@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(953, 'mkithuka@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(954, 'ro@gmail.com', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(955, 'vf@g', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(956, 'wd@gd', 'comment', 'coach added a new post this new post  ', 'unread', '2018-08-24 07:30:09'),
(957, 'deniss@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(958, 'fredi@gmail.com', 'comment', 'coach added a new post check out this  ', 'read', '2018-08-24 07:35:13'),
(959, 'ka@gmal.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(960, 'kadhu@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(961, 'kahata@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(962, 'kahu@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(963, 'karis@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(964, 'karis@gmail.comf', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(965, 'karis@gmail.comjh', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(966, 'kithuka@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(967, 'liz@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(968, 'ma@g', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(969, 'make@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:13'),
(970, 'marry@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(971, 'mary@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(972, 'michelle@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(973, 'mkithuka@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(974, 'ro@gmail.com', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(975, 'vf@g', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(976, 'wd@gd', 'comment', 'coach added a new post check out this  ', 'unread', '2018-08-24 07:35:14'),
(977, 'deniss@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:24'),
(978, 'fredi@gmail.com', 'comment', 'coach added a new post ahae  ', 'read', '2018-08-24 07:36:24'),
(979, 'ka@gmal.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:24'),
(980, 'kadhu@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:24'),
(981, 'kahata@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:24'),
(982, 'kahu@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:24'),
(983, 'karis@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(984, 'karis@gmail.comf', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(985, 'karis@gmail.comjh', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(986, 'kithuka@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(987, 'liz@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(988, 'ma@g', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(989, 'make@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(990, 'marry@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(991, 'mary@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(992, 'michelle@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(993, 'mkithuka@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(994, 'ro@gmail.com', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(995, 'vf@g', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(996, 'wd@gd', 'comment', 'coach added a new post ahae  ', 'unread', '2018-08-24 07:36:25'),
(997, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-24 07:42:36'),
(998, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-24 07:43:11'),
(999, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 08:33:41'),
(1000, 'deniss@gmail.com', 'comment', '  a new  salary added to your account', 'unread', '2018-08-24 08:34:35'),
(1001, 'fredi@gmail.com', 'comment', '  a new  salary added to your account', 'read', '2018-08-24 08:39:32'),
(1002, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 09:51:40'),
(1003, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 09:52:06'),
(1004, 'loadtennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 09:53:53'),
(1005, 'loadtennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 09:55:19'),
(1006, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-24 09:59:59'),
(1007, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 10:03:06'),
(1008, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 10:03:29'),
(1009, 'football@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-24 10:03:44'),
(1010, 'loadtennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 10:05:43'),
(1011, 'swimming@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 10:22:25'),
(1012, 'loadtennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 10:22:58'),
(1013, 'ttennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 10:24:06'),
(1014, 'swimming@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-24 10:25:35'),
(1015, 'deniss@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:25'),
(1016, 'fredi@gmail.com', 'comment', 'coach added a new post sEG  ', 'read', '2018-08-26 19:07:25'),
(1017, 'ka@gmal.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1018, 'kadhu@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1019, 'kahata@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1020, 'kahu@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1021, 'karis@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1022, 'karis@gmail.comf', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1023, 'karis@gmail.comjh', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1024, 'kithuka@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1025, 'liz@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1026, 'ma@g', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1027, 'make@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1028, 'marry@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1029, 'mary@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1030, 'michelle@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1031, 'mkithuka@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1032, 'ro@gmail.com', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1033, 'vf@g', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:26'),
(1034, 'wd@gd', 'comment', 'coach added a new post sEG  ', 'unread', '2018-08-26 19:07:27'),
(1035, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-26 19:08:44'),
(1036, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-26 19:09:13'),
(1037, 'ma@g', 'comment', '  you have been suspended you', 'unread', '2018-08-26 19:09:40'),
(1038, 'ro@gmail.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-26 19:09:49'),
(1039, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:02:19'),
(1040, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:06:17'),
(1041, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:09:51'),
(1042, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:16:22'),
(1043, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:23:09'),
(1044, 'deniss@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-27 13:24:05'),
(1045, 'deniss@gmail.com', 'comment', ' congratulation Dennis you have been added to the main team', 'unread', '2018-08-28 22:07:35'),
(1046, 'wd@gd', 'comment', '  you have been suspended you', 'unread', '2018-08-28 22:07:54'),
(1047, 'mkithuka@gmail.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-28 22:08:01'),
(1048, 'marsahapi@gmail.com', 'comment', '  a new  payment has been added to your account', 'read', '2018-08-29 23:49:04'),
(1049, 'wisha@gmail.com', 'comment', ' congratulation wisha you have been added to the main team', 'read', '2018-08-29 23:52:54'),
(1050, 'wisha@gmail.com', 'comment', '  you have been suspended you', 'read', '2018-08-29 23:53:34'),
(1051, 'wisha@gmail.com', 'comment', '  you have been removed from the main team', 'read', '2018-08-29 23:53:44'),
(1052, 'wisha@gmail.com', 'comment', ' congratulation wisha you have been added to the main team', 'read', '2018-08-29 23:56:46'),
(1053, 'wisha@gmail.com', 'comment', 'coach added a new post 769  ', 'read', '2018-08-29 23:57:10'),
(1054, 'wisha@gmail.com', 'comment', 'there is a new Loan Tennis event', 'read', '2018-08-29 23:58:01'),
(1055, 'kahu@gmail.com', 'comment', '  a new  bonus added to your account', 'unread', '2018-08-30 08:57:37'),
(1056, 'athletics@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-30 09:03:17'),
(1057, 'ttennis@gmail.com', 'comment', '  a new  payment has been added to your account', 'unread', '2018-08-30 09:03:48'),
(1058, 'zedg@fdgh', 'comment', '  rwf   commented on your post ', 'unread', '2018-08-30 09:34:27'),
(1059, 'FW@g.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1060, 'kahu@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1061, 'karis@gmail.comf', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1062, 'karis@gmail.comjh', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1063, 'kithuka@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1064, 'ma@g', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1065, 'make@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1066, 'marry@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1067, 'mary@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1068, 'michelle@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1069, 'mkithuka@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1070, 'ro@gmail.com', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1071, 'vf@g', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1072, 'wd@gd', 'comment', 'coach added a new post sdfc  ', 'unread', '2018-08-30 09:38:44'),
(1073, 'FW@g.com', 'comment', 'there is a new Football event', 'unread', '2018-08-30 09:39:34'),
(1074, 'FW@g.com', 'comment', ' congratulation rwf you have been added to the main team', 'unread', '2018-08-30 09:39:56'),
(1075, 'kahu@gmail.com', 'comment', '  you have been suspended you', 'unread', '2018-08-30 09:40:33'),
(1076, 'ro@gmail.com', 'comment', '  you have been removed from the main team', 'unread', '2018-08-30 09:40:41'),
(1077, 'FW@g.com', 'comment', 'there is a new Football event', 'unread', '2018-08-30 09:56:29'),
(1078, 'FW@g.com', 'comment', 'there is a new Football event', 'unread', '2018-08-30 10:04:16'),
(1079, 'FW@g.com', 'comment', 'there is a new Football event', 'unread', '2018-08-30 10:32:06'),
(1080, 'FW@g.com', 'comment', 'there is a new Football event', 'unread', '2018-08-30 10:35:39'),
(1081, 'kahu@gmail.com', 'comment', 'there is a new Football event', 'unread', '2018-08-22 12:00:42'),
(1082, 'kahu@gmail.com', 'comment', ' congratulation kahuhia you have been added to the main team', 'unread', '2018-08-22 12:00:53'),
(1083, 'kahu@gmail.com', 'comment', '  a new  salary added to your account', 'unread', '2018-08-31 17:20:00'),
(1084, 'kahu@gmail.com', 'comment', '  a new  allowance added to your account', 'unread', '2018-08-31 17:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `amount` double NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `username`, `amount`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 'cate@gmail.com', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'liz@gmail.com', 1000, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'charles@gmail.com', 45, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'charles@gmail.com', 1452, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'make@gmail.com', 10000, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'kadhu@gmail.com', 123, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'kadhu@gmail.com', 123, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'cate@gmail.com', 14, 'bonus', '2014-04-15 10:30:00', '2014-04-15 10:30:00'),
(9, 'ka@gmal.com', 54, '', '1970-01-01 03:00:01', '1970-01-01 03:00:01'),
(10, 'cate@gmail.com', 14, 'bonus', '1970-01-01 03:00:01', '1970-01-01 03:00:01'),
(11, 'karis@gmail.comjh', 2525, 'bonus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'kennedy@gmail.com', 20000, 'bonus', '2018-08-07 11:16:30', '2018-08-07 11:16:30'),
(13, '$player_username', 452, '', '2018-08-07 11:30:18', '2018-08-07 11:30:18'),
(14, 'chess@gmail.com', 70000, 'bonus', '2018-08-07 11:31:00', '2018-08-07 11:31:00'),
(15, 'cate@gmail.com', 10000, 'bonus', '2018-08-07 12:46:57', '2018-08-07 12:46:57'),
(16, 'cate@gmail.com', 1254, 'bonus', '2018-08-07 12:47:10', '2018-08-07 12:47:10'),
(17, 'cate@gmail.com', 70000, 'bonus', '2018-08-07 12:47:22', '2018-08-07 12:47:22'),
(18, 'charles@gmail.com', 10000, 'bonus', '2018-08-07 02:08:55', '2018-08-07 02:08:55'),
(19, 'charles@gmail.com', 700, 'bonus', '2018-08-07 02:09:06', '2018-08-07 02:09:06'),
(20, 'charles@gmail.com', 80, 'bonus', '2018-08-07 02:09:17', '2018-08-07 02:09:17'),
(21, 'charles@gmail.com', 256, 'bonus', '2018-08-07 02:09:28', '2018-08-07 02:09:28'),
(22, 'charles@gmail.com', 20000, 'bonus', '2018-08-07 02:09:43', '2018-08-07 02:09:43'),
(23, 'afootball@gmail.com', 50000, 'bonus', '2018-08-08 03:42:00', '2018-08-08 03:42:00'),
(24, 'basketball@gmail.com', 10000, 'bonus', '2018-08-08 10:51:04', '2018-08-08 10:51:04'),
(25, 'football@gmail.com', 40000, 'bonus', '2018-08-08 11:08:05', '2018-08-08 11:08:05'),
(26, 'football@gmail.com', 15000, 'bonus', '2018-08-08 11:08:23', '2018-08-08 11:08:23'),
(27, 'football@gmail.com', 5, 'bonus', '2018-08-08 11:08:47', '2018-08-08 11:08:47'),
(28, 'football@gmail.com', 12, 'bonus', '2018-08-08 11:12:31', '2018-08-08 11:12:31'),
(29, 'cate@gmail.com', 15, 'bonus', '2018-08-08 11:12:45', '2018-08-08 11:12:45'),
(30, 'cate@gmail.com', 14, 'salary', '2018-08-08 12:33:57', '2018-08-08 12:33:57'),
(31, 'cate@gmail.com', 20, 'allowance', '2018-08-08 12:34:11', '2018-08-08 12:34:11'),
(32, 'cate@gmail.com', 60, 'bonus', '2018-08-08 12:34:26', '2018-08-08 12:34:26'),
(33, 'cate@gmail.com', 10, 'salary', '2018-08-11 07:39:51', '2018-08-11 07:39:51'),
(34, 'cate@gmail.com', 40000, 'allowance', '2018-08-11 07:40:04', '2018-08-11 07:40:04'),
(35, 'marsahapi@gmail.com', 40000, 'salary', '2018-08-30 09:49:04', '2018-08-30 09:49:04'),
(36, 'kahu@gmail.com', 2334, 'bonus', '2018-08-30 06:57:36', '2018-08-30 06:57:36'),
(37, 'athletics@gmail.com', 123, 'bonus', '2018-08-30 07:03:17', '2018-08-30 07:03:17'),
(38, 'ttennis@gmail.com', 54, 'allowance', '2018-08-30 07:03:48', '2018-08-30 07:03:48'),
(39, 'kahu@gmail.com', 10000, 'salary', '2018-08-31 05:20:00', '2018-08-31 05:20:00'),
(40, 'kahu@gmail.com', 10000, 'allowance', '2018-08-31 05:20:26', '2018-08-31 05:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `player_username` varchar(40) NOT NULL,
  `player_f_name` varchar(40) DEFAULT NULL,
  `player_l_name` varchar(40) DEFAULT NULL,
  `player_profile_pic` varchar(100) DEFAULT NULL,
  `player_profile_pic_ext` varchar(5) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`player_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_username`, `player_f_name`, `player_l_name`, `player_profile_pic`, `player_profile_pic_ext`, `sport_id`) VALUES
('kahu@gmail.com', 'kahuhia', 'kahuhia', 'jhgf.jpg', NULL, 1),
('kama@gmailc.com', 'kamau', 'kama', 'WIN_20180725_181331.JPG', NULL, 2),
('karis@gmail.comf', 'karisf', 'mumrf', 'y.jpg', NULL, 1),
('karis@gmail.comjh', 'karis', 'g', 'Screenshot (2).png', NULL, 1),
('kithuka@gmail.com', 'Kithuka', 'Patrick', 'DSC_0079.jpg', NULL, 1),
('ma@g', 'rem', 'mre', 'WIN_20180725_181329.JPG', NULL, 1),
('make@gmail.com', 'miriam', 'makeba', 'WIN_20180414_063904.JPG', NULL, 1),
('mara@gmail.com', 'kimbo', 'kanonoh', 'received_561739667345974.gif', NULL, 6),
('marry@gmail.com', 'maryr', 'mumr', 't.jpg', NULL, 1),
('marsh@g.com', 'marsha', 'ma', 'WIN_20180414_063904.JPG', NULL, 9),
('mary@gmail.com', 'mary', 'mum', 'gfrs.jpg', NULL, 1),
('michelle@gmail.com', 'michelle', 'wa masha', 've.jpg', NULL, 1),
('mkithuka@gmail.com', 'Mutati', 'Kithuka', 'DSC_0929.JPG', NULL, 1),
('nzioka@gmail.com', 'nzioka', 'maji', 's.jpg', NULL, 5),
('ro@gmail.com', 'roll', 'lol', 'WIN_20180725_181331.JPG', NULL, 1),
('shaz@gmail.com', 'shaz', 'kakuu', '2.jpg', NULL, 10),
('vf@g', 'vx', 'dvfs', 'WIN_20180224_030841.JPG', NULL, 1),
('we@g.com', 'we', 'me', 'WIN_20180725_181336.JPG', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `player_credentials`
--

CREATE TABLE IF NOT EXISTS `player_credentials` (
  `player_username` varchar(40) NOT NULL,
  `player_password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`player_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_credentials`
--

INSERT INTO `player_credentials` (`player_username`, `player_password`) VALUES
('kahu@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('kama@gmailc.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('karis@gmail.comf', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('karis@gmail.comjh', 'a072de60e972b926c6189e8bd01b3e403a62f5ee'),
('kithuka@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('ma@g', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('make@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('mara@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('marry@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('marsh@g.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('mary@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('michelle@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('mkithuka@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('nzioka@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('ro@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('shaz@gmail.com', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('vf@g', '8369137bfb66c4f1b3e42aab7d3ce211cd5add5d'),
('we@g.com', '836ad467a9667b203f26b1222d65e7215e64a124');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) DEFAULT NULL,
  `post_content` longtext,
  `post_image_name` varchar(100) DEFAULT NULL,
  `post_image_ext` varchar(5) DEFAULT NULL,
  `post_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sport_id` int(11) DEFAULT NULL,
  `coach_username` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `sport_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_title` varchar(100) DEFAULT NULL,
  `coach_username` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`sport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sport_id`, `sport_title`, `coach_username`) VALUES
(1, 'Football', 'football@gmail.com'),
(2, 'American Football', 'afootball@gmail.com'),
(3, 'Volley Ball', 'vball@gmail.com'),
(4, 'Basket Ball', 'bball@gmail.com'),
(5, 'Athletics', 'athletics@gmail.com'),
(6, 'Chess', 'chess@gmail.com'),
(7, 'Scrabble', 'scrabble@gmail.com'),
(8, 'Skating', 'skating@gmail.com'),
(9, 'Swimming', 'swimming@gmail.com'),
(10, 'Table Tennis', 'ttennis@gmail.com'),
(11, 'Loan Tennis', 'ltennis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `suspended_players`
--

CREATE TABLE IF NOT EXISTS `suspended_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suspension_date` datetime NOT NULL,
  `sus_length` varchar(32) NOT NULL,
  `reason` varchar(32) NOT NULL,
  `player_name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `suspended_players`
--

INSERT INTO `suspended_players` (`id`, `suspension_date`, `sus_length`, `reason`, `player_name`) VALUES
(1, '2018-08-14 00:00:00', 'LIFE', '', 'deniss@gmail.com'),
(2, '0000-00-00 00:00:00', 'bgv', '', 'deniss@gmail.com'),
(3, '2018-08-16 00:00:00', '1 game', 'small', 'deniss@gmail.com'),
(4, '2018-08-09 00:00:00', 'entire season', 'fihgting', 'charles@gmail.com'),
(5, '2018-08-06 00:00:00', 'tt', 'cool', ''),
(6, '0000-00-00 00:00:00', '', '', 'marsh@g.com'),
(7, '2018-08-08 00:00:00', 'LIFEFEFF', 'COOL SUS', 'marsh@g.com'),
(8, '2018-08-24 00:00:00', 'sasa', 'weweeeee', 'marsh@g.com'),
(9, '0000-00-00 00:00:00', '', '', 'marsh@g.com'),
(10, '0000-00-00 00:00:00', '', '', 'charles@gmail.com'),
(11, '2018-08-16 00:00:00', 'life sus', 'why did you fight', 'we@g.com'),
(12, '2018-08-11 00:00:00', 'entire season', 'kukudance', 'charles@gmail.com'),
(13, '2018-08-14 00:00:00', 'rrrrrrrrrw', 'werf', 'we@g.com'),
(14, '2018-08-09 00:00:00', 'wewe ni chafu', 'chafu wewe', '$_PlayerUsername'),
(15, '2018-08-24 00:00:00', 'check kama', 'kamau', 'kama@gmailc.com'),
(16, '2018-08-23 00:00:00', 'entire season', 'fihgting', 'kama@gmailc.com'),
(17, '2018-08-15 00:00:00', 'life', 'crawling in the field like a sna', '$_PlayerUsername'),
(18, '2018-08-21 00:00:00', 'sasa', 'dead', 'deniss@gmail.com'),
(19, '2018-08-09 00:00:00', 'this cool', 'ama', 'deniss@gmail.com'),
(20, '2018-08-15 00:00:00', 'reyvgvf', 'ervffvbv', 'kahu@gmail.com'),
(21, '2018-08-02 00:00:00', 'ter', 'gttr', 'kahu@gmail.com'),
(22, '2018-08-02 00:00:00', 'ese', 'fgtgt', '$_PlayerUsername'),
(23, '2018-07-31 00:00:00', 'gty', 'reeed', 'mkithuka@gmail.com'),
(24, '2018-08-07 00:00:00', 'ed', 'd', 'mary@gmail.com'),
(25, '2018-08-07 00:00:00', 'tsrh', '6hjurysn', 'mary@gmail.com'),
(26, '2018-08-23 00:00:00', 'fifa', 'veve', 'dsdc@f'),
(27, '2018-08-08 00:00:00', 'check kama', 'cccc', 'liz@gmail.com'),
(28, '2018-08-10 00:00:00', 'life time', 'too old', 'ro@gmail.com'),
(29, '2018-08-14 00:00:00', 'sdg', 'werf', 'michelle@gmail.com'),
(30, '2018-08-08 00:00:00', 'njyrsj', 'sreha', 'mkithuka@gmail.com'),
(31, '2018-08-15 00:00:00', 'sdf', 'sbh', 'ma@g'),
(32, '2018-08-06 00:00:00', 'entire season', 'red card', 'charles@gmail.com'),
(33, '2018-08-15 00:00:00', '1 game', 'kuhara kwa grao', 'kama@gmailc.com'),
(34, '2018-07-30 00:00:00', 'fftgh', 'j', 'kama@gmailc.com'),
(35, '2018-08-08 00:00:00', 'sdfgh', 'ghj', 'we@g.com'),
(36, '0000-00-00 00:00:00', 'bonus', 'bonus', 'we@g.com'),
(37, '0000-00-00 00:00:00', '', '', 'charles@gmail.com'),
(38, '0000-00-00 00:00:00', '', '', 'deniss@gmail.com'),
(39, '0000-00-00 00:00:00', '', '', 'fredi@gmail.com'),
(40, '0000-00-00 00:00:00', '', '', 'fredi@gmail.com'),
(41, '0000-00-00 00:00:00', '', '', 'fredi@gmail.com'),
(42, '0000-00-00 00:00:00', '', '', 'ka@gmal.com'),
(43, '0000-00-00 00:00:00', '', '', 'kahata@gmail.com'),
(44, '0000-00-00 00:00:00', '', '', 'kahata@gmail.com'),
(45, '0000-00-00 00:00:00', '', '', 'kahata@gmail.com'),
(46, '0000-00-00 00:00:00', '', '', 'charles@gmail.com'),
(47, '0000-00-00 00:00:00', '', '', 'fredi@gmail.com'),
(48, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(49, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(50, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(51, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(52, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(53, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(54, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(55, '0000-00-00 00:00:00', '', '', 'fredi@gmail.com'),
(56, '0000-00-00 00:00:00', '', '', 'deniss@gmail.com'),
(57, '0000-00-00 00:00:00', '', '', 'kadhu@gmail.com'),
(58, '0000-00-00 00:00:00', '', '', 'kadhu@gmail.com'),
(59, '0000-00-00 00:00:00', '', '', 'kadhu@gmail.com?pay=success'),
(60, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(61, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(62, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(63, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(64, '0000-00-00 00:00:00', '', '', 'deniss@gmail.com'),
(65, '0000-00-00 00:00:00', '', '', 'deniss@gmail.com'),
(66, '0000-00-00 00:00:00', '', '', 'deniss@gmail.com'),
(67, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(68, '0000-00-00 00:00:00', '', '', 'ka@gmal.com'),
(69, '0000-00-00 00:00:00', '', '', 'kadhu@gmail.com'),
(70, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(71, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(72, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(73, '0000-00-00 00:00:00', '', '', 'charles@gmail.com'),
(74, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(75, '0000-00-00 00:00:00', '', '', '$_PlayerUsername'),
(76, '2018-08-07 00:00:00', 'life', 'fear', 'kama@gmailc.com'),
(77, '2018-08-07 00:00:00', 'a', 'sa', 'kama@gmailc.com'),
(78, '2018-08-07 00:00:00', 'tas', 'sbh', 'kama@gmailc.com'),
(79, '2018-08-07 00:00:00', 'tt', 'yts', 'kama@gmailc.com'),
(80, '2018-08-15 00:00:00', 'ASDF', 'SXC', 'kama@gmailc.com'),
(81, '2018-07-30 00:00:00', 'ter', 'FD', 'kama@gmailc.com'),
(82, '2018-08-07 00:00:00', '2DSC', 'SDF', 'kama@gmailc.com'),
(83, '2018-08-14 00:00:00', 'atf', 'asd', 'kama@gmailc.com'),
(84, '2018-08-15 00:00:00', 'life', 'fight', 'kama@gmailc.com'),
(85, '2018-08-09 00:00:00', 'life time', 'bullying', 'kama@gmailc.com'),
(86, '2018-07-30 00:00:00', 'fffffffs', 'sv', 'kama@gmailc.com'),
(87, '2018-08-07 00:00:00', 'life', 'life', 'kahata@gmail.com'),
(88, '2018-08-06 00:00:00', 'life', 'life', 'wd@gd'),
(89, '2018-08-14 00:00:00', 'ertyh', 'SGR', 'ma@g'),
(90, '2018-08-07 00:00:00', 'cxcv', 'cxcvb', 'wd@gd'),
(91, '2018-08-08 00:00:00', 'life', 'we', 'wisha@gmail.com'),
(92, '2018-08-07 00:00:00', 'ear5t', 'tyr', 'kahu@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
