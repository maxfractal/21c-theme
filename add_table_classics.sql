-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2023 at 06:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xnv4`
--

-- --------------------------------------------------------

--
-- Table structure for table `classics`
--

DROP TABLE IF EXISTS `classics`;
CREATE TABLE IF NOT EXISTS `classics` (
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `category` varchar(16) DEFAULT NULL,
  `year` char(4) DEFAULT NULL,
  `isbn` int(11) DEFAULT NULL,
  KEY `author` (`author`(20)),
  KEY `title` (`title`(20)),
  KEY `year` (`year`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classics`
--

INSERT INTO `classics` (`author`, `title`, `category`, `year`, `isbn`) VALUES
('William Gibson', 'Agency', 'Science Fiction', '2015', NULL),
('Neal Stephenson', 'Snow Crash', 'Science Fiction', '1992', NULL),
('Foo1', 'foo2', 'Manga', '1980', NULL),
('Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction', '1876', NULL),
('Jane Austin', 'Pride and Prejudice', 'Fiction', '1811', NULL),
('Charles Darwin', 'The Origin of Species', 'Non-Fiction', '1856', NULL),
('Charles Dickens', 'The Old Curiousity Shop', 'Fiction', '1841', NULL),
('William Shakespear', 'Romeo and Juliet', 'Play', '1594', NULL),
('J.R.R Tolkein', 'The Silmarillion', 'Fantasy', '1977', NULL),
('Frank Herbert', 'Dune', 'Science Fiction', '1965', NULL),
('Steve Wozniak', 'iWoz', 'Biography', '2006', 97),
('adfa', 'adf', 'Comics', '1967', 234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
