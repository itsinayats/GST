-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql1005.mochahost.com
-- Generation Time: Sep 07, 2019 at 10:52 AM
-- Server version: 5.6.39
-- PHP Version: 7.2.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saueriex_gst_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL,
  `delind` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `description`, `path`, `upload_date`, `userid`, `delind`) VALUES
(8, 'kkkhj', 'adhar', '/GST/images/g2.jpg', '2019-07-20 13:24:06', 8, 0),
(13, '2.jpeg.jpg', '', '/gst.ringel.in/uploads/2.jpeg.jpg', '2019-07-28 04:42:38', 8, 0),
(14, 'photo.jpeg', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:51:29', 8, 0),
(15, 'photo.jpeg', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:52:16', 8, 0),
(9, 'Inayat Hussain - Offer Letter.pdf', 'dsa', '/uploads/Inayat Hussain - Offer Letter.pdf', '2019-07-27 17:44:33', 8, 0),
(10, 'adhaar.pdf', 'hello', 'C:/wamp64/www/uploads/adhaar.pdf', '2019-07-27 17:51:23', 8, 0),
(11, 'adhaar.pdf', 'hello', '/gst.ringel.in/uploads/adhaar.pdf', '2019-07-27 17:55:40', 8, 0),
(12, 'photo.jpeg', 'damn', '/gst.ringel.in/uploads/photo.jpeg', '2019-07-28 04:23:38', 8, 0),
(16, '10th marksheet.jpeg', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:52:30', 8, 0),
(17, 'photo.jpeg', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:52:45', 8, 1),
(18, 'g2.jpg', '', '/gst.ringel.in/uploads/avatar.jpg', '2019-07-28 04:53:11', 8, 1),
(19, 'g2.jpg', '', '/gst.ringel.in/uploads/avatar.jpg', '2019-07-28 04:53:39', 8, 1),
(20, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:56:03', 8, 1),
(21, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/avatar.jpeg', '2019-07-28 04:56:19', 8, 1),
(22, 'g2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:02:11', 8, 1),
(23, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:02:58', 8, 1),
(24, 'g2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:04:34', 8, 1),
(25, 'g2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:05:07', 8, 1),
(26, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:18:23', 8, 1),
(27, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:18:31', 8, 1),
(28, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:18:39', 8, 1),
(29, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:18:43', 8, 1),
(30, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:18:56', 8, 1),
(31, '1.jpeg.png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:20:23', 8, 1),
(32, '800px_COLOURBOX19674972.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:20:35', 8, 1),
(33, 'a4.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:20:47', 8, 1),
(34, 'Screenshot (3).png', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:22:21', 8, 1),
(35, 'photo.jpeg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 05:22:46', 8, 1),
(36, 'DEC790.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 06:23:30', 8, 1),
(37, 'IMG_20181222_215130.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 10:02:26', 8, 1),
(38, 'IMG_20181222_215130.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 10:02:40', 8, 1),
(39, '84.pdf', 'Youtub', '/gst.ringel.in/uploads/84.pdf', '2019-07-28 10:04:15', 8, 1),
(40, 'a2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 17:50:54', 8, 1),
(41, 'a2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 17:53:44', 8, 1),
(42, 'a2.jpg', '', '/gst.ringel.in/uploads/8/avatar.jpeg', '2019-07-28 17:53:53', 8, 1),
(43, 'all-the-worlds-a-stage-3-638.jpg', 'jhjhj', '/gst.ringel.in/uploads/all-the-worlds-a-stage-3-638.jpg', '2019-07-28 17:58:31', 8, 1),
(44, 'IMG_20181222_215130.jpg', '', '/gst.ringel.in/uploads/IMG_20181222_215130.jpg', '2019-07-28 20:06:53', 8, 1),
(45, 'ghost.jpg', 'ghost', '/uploads/ghost.jpg', '2019-08-04 07:04:11', 8, 1),
(46, 'a4.jpg', 'l', '/uploads/a4.jpg', '2019-08-04 07:15:35', 8, 1),
(47, 'IMG-20171213-WA0002.jpg', 'Me', '/uploads/IMG-20171213-WA0002.jpg', '2019-08-04 08:12:49', 8, 0),
(48, 'a4.jpg', '', '/gst.ringel.in/uploads/10/avatar.jpeg', '2019-08-04 19:24:13', 10, 1),
(49, 'Screenshot_2019-08-04-15-58-26-154_in.swiggy.android.png', 'Test', '/uploads/Screenshot_2019-08-04-15-58-26-154_in.swiggy.android.png', '2019-08-04 19:50:24', 10, 0),
(50, 'IMG-20190802-WA0013.jpg', '', '/uploads/IMG-20190802-WA0013.jpg', '2019-08-04 19:59:19', 10, 0),
(51, 'IMG-20190802-WA0009.jpg', '', '/gst.ringel.in/uploads/10/avatar.jpeg', '2019-08-05 03:44:03', 10, 0),
(52, 'IMG-20190802-WA0009.jpg', '', '/gst.ringel.in/uploads/10/avatar.jpeg', '2019-08-05 03:44:52', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE IF NOT EXISTS `get_in_touch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `location` varchar(400) DEFAULT NULL,
  `query` varchar(800) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mobile` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `name`, `location`, `query`, `time`, `mobile`) VALUES
(22, 'Suuejjd', 'Sjsjjd', 'Sjsjjs', '2019-08-04 20:08:46', 'Susjusj'),
(21, 'Ianyat', 'Noida', 'Testing', '2019-08-04 08:42:34', '9311982278');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  `delind` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `userid`, `message`, `time`, `status`, `delind`) VALUES
(1, 8, 'inayat\r\n', '2019-07-14 17:53:53', 0, 1),
(7, 8, '\r\ninayat', '2019-07-24 19:59:56', 0, 1),
(8, 8, 'Place your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\nPlace your message here\r\n', '2019-07-24 20:02:18', 0, 1),
(9, 8, 'Place your message here\r\n', '2019-07-24 20:03:11', 0, 1),
(10, 8, 'Place your message here\r\n', '2019-07-24 20:03:17', 0, 1),
(11, 8, 'Place your message here\r\n', '2019-07-24 20:03:38', 0, 1),
(12, 8, 'Place your message here\r\n', '2019-07-24 20:03:43', 0, 1),
(13, 8, 'Place your message here\r\n', '2019-07-24 20:03:53', 0, 1),
(14, 8, 'Place your message here\r\n', '2019-07-24 20:03:59', 0, 1),
(15, 8, 'Place your message here\r\n', '2019-07-24 20:06:04', 0, 1),
(16, 8, 'Place your message here\r\n', '2019-07-24 20:06:17', 0, 1),
(17, 8, 'Place your message here\r\n', '2019-07-24 21:07:05', 0, 1),
(18, 8, 'Place your message here\r\n', '2019-07-24 21:07:39', 0, 1),
(19, 8, 'Place your message here\r\n', '2019-07-24 21:08:54', 0, 1),
(20, 8, 'Place your message here\r\n', '2019-07-24 21:09:21', 0, 1),
(21, 1, 'Place your message her', '2019-07-28 05:23:40', 0, 1),
(22, 1, 'Place your message here\r\nafasf', '2019-07-28 05:27:33', 0, 1),
(23, 1, 'Place your message here\r\nafasf', '2019-07-28 05:28:20', 0, 1),
(24, 1, 'Place your message here\r\nafasf', '2019-07-28 05:28:37', 0, 1),
(25, 1, 'Place your message here\r\nafasf', '2019-07-28 05:30:53', 0, 1),
(26, 1, 'Place your message here\r\nafasf', '2019-07-28 05:31:20', 0, 0),
(27, 1, 'Place your message here\r\nafasf', '2019-07-28 05:31:48', 0, 0),
(28, 1, 'Place your message here\r\nafasf', '2019-07-28 05:35:28', 0, 0),
(29, 2, 'ini', '2019-07-28 05:52:24', 0, 1),
(30, 1, 'Place your message here\r\n', '2019-08-04 06:49:44', 0, 0),
(31, 10, 'Submit your bill', '2019-08-04 20:09:46', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reference` varchar(250) DEFAULT 'system',
  `role` varchar(30) DEFAULT 'user',
  `firm_company` varchar(200) NOT NULL DEFAULT 'NA',
  `constitution` varchar(200) NOT NULL DEFAULT 'NA',
  `gstn` varchar(200) NOT NULL DEFAULT 'NA',
  `pan` varchar(200) NOT NULL DEFAULT 'NA',
  `address_office` varchar(500) NOT NULL DEFAULT 'NA',
  `address_res` varchar(500) NOT NULL DEFAULT 'NA',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `date`, `reference`, `role`, `firm_company`, `constitution`, `gstn`, `pan`, `address_office`, `address_res`) VALUES
(6, 'inayat', '9311982278', 'inayat.asdf@gmail.com', '1234', '2019-07-13 17:04:00', NULL, 'admin', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(10, 'inayat hussain', '9069448198', 'inayat.rdec@gmail.com', '7894', '2019-08-04 08:44:47', 'as', 'user', 'Solutiontech', 'TEST', 'jbjb', 'Ajadsjb', 'bj', 'bjbj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
