-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Iun 2016 la 19:34
-- Versiune server: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `describtion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `category`
--

INSERT INTO `category` (`id`, `title`, `describtion`) VALUES
(1, 'Tennis', 'Welcome to the wondeful world of tennis. To begin with your first course of tennis, you would pass trought important moments like regional matchs , fields and your first tournement.'),
(2, 'Ball', 'There enter every sport wich is supposed to be played by kicking a ball . '),
(3, 'ssdss', 'sssss'),
(4, '', ''),
(28, 'Mental', 'A group of players really need to think while they are playing sports like chess :)'),
(29, 'es', 'e'),
(30, 'a', 's');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `event1`
--

DROP TABLE IF EXISTS `event1`;
CREATE TABLE IF NOT EXISTS `event1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interest_point_id` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `event1_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `intereste_point_id` (`interest_point_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `event1`
--

INSERT INTO `event1` (`id`, `interest_point_id`, `price`, `event1_time`) VALUES
(1, 2, 251, '2012-02-20 16:00:00');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `interest_point`
--

DROP TABLE IF EXISTS `interest_point`;
CREATE TABLE IF NOT EXISTS `interest_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `location_latitude` varchar(30) NOT NULL,
  `location_longitude` varchar(30) NOT NULL,
  `describtion` text NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `interest_point`
--

INSERT INTO `interest_point` (`id`, `title`, `location_latitude`, `location_longitude`, `describtion`, `phone_number`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, 'aaa', '12', '42', '456fdfs', '0777777555'),
(18, '', '', '', '', ''),
(19, 'es', '', '', 'e', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `describtion` text NOT NULL,
  `title` varchar(55) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `describtion`, `title`) VALUES
(1, 1, 'Two good players , a goal and a little ball , can draw you out what means the perfection.', 'Pingpong'),
(2, 1, 'sgsg', 'sdg'),
(3, 1, 'e', 'es');

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `event1`
--
ALTER TABLE `event1`
  ADD CONSTRAINT `event1_ibfk_1` FOREIGN KEY (`interest_point_id`) REFERENCES `interest_point` (`id`);

--
-- Restrictii pentru tabele `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
