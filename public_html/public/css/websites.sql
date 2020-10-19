-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2013 at 04:31 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MadMade`
--

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `element_Label` varchar(25) NOT NULL,
  `href` varchar(400) NOT NULL,
  `Type` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`element_Label`, `href`, `Type`) VALUES
('Google Hacks', 'http://www.hackcollege.com/blog/2011/11/23/infographic-get-more-out-of-google.html', 'Useful'),
('Retina Display Web Design', 'http://webdesign.tutsplus.com/articles/general/improving-image-quality-on-the-retina-display/', 'Useful'),
('KEXP', 'http://kexp.org/', 'Music'),
('Web Style Guide', 'http://webstyleguide.com/wsg3/index.html', 'Useful'),
('TheVerge', 'http://www.theverge.com/', 'Interesting'),
('BoingBoing', 'http://boingboing.net', 'Interesting');
