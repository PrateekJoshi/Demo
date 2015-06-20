-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql311.byethost24.com
-- Generation Time: Jun 20, 2015 at 12:22 AM
-- Server version: 5.6.22-71.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b24_16281312_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(17, 'hjhjhj', 'p[popop', 'dfb7ab6ac221bbad3ee6a6a189f4a4c2'),
(18, 'prateek joshi', 'prateek@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Harry Potter', 'name@yahoo.co.in', '5f4dcc3b5aa765d61d8327deb882cf99'),
(20, 'jjjhjhhj', 'jjkkj@gmail.com', 'c8dfbba76c448f2197df704010f567f2'),
(21, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(23, 'obama ', 'Obama@web.com', 'b21afc54fb48d153c19101658f4a2a48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
