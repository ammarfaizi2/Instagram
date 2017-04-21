-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 01:13 PM
-- Server version: 5.1.67-andiunpam
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `redangel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_data`
--

CREATE TABLE IF NOT EXISTS `account_data` (
  `userid` varchar(16) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ukey` varchar(72) NOT NULL,
  `password` text NOT NULL,
  `authority` enum('user','moderator','admin','root') NOT NULL DEFAULT 'user',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `verified` enum('true','false') NOT NULL DEFAULT 'false',
  `blocked` enum('true','false') NOT NULL DEFAULT 'false',
  `registered_at` datetime NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_data`
--

INSERT INTO `account_data` (`userid`, `username`, `email`, `ukey`, `password`, `authority`, `last_login`, `verified`, `blocked`, `registered_at`) VALUES
('1', 'ammarfaizi2', 'ammarfaizi2@gmail.com', 'bqG_nN8GqxDQJEwZAyJ163w1KHiEWpDQG2wBNGwDJan959rCsMMydnZgg_2qOVm3tmVs_3gZ', '=AwBwMzNvwCzJxCzIxCLy9y9Ks8y', 'user', '0000-00-00 00:00:00', 'false', 'true', '2017-04-15 15:50:56'),
('2', 'ammarfaizi931qP', 'ammarfaizi93qpq@gmail.com', '1h6c0lzGhJOtJZdRo2lfKfdD4jJRFGRUWGwsrJuaq24dAbs8stqtv99QHe_id2ThSny5Jkl0', 'AQQKtmyKt4CKLQHjwdzK', 'user', '0000-00-00 00:00:00', 'false', 'true', '2017-04-15 17:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE IF NOT EXISTS `account_info` (
  `userid` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `birthloc` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `religion` varchar(32) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`userid`, `name`, `address`, `birthloc`, `birthdate`, `religion`, `phone`) VALUES
('1', 'Ammar faizi', 'Surakarta', 'Surakarta', '1996-12-07', 'Surakarta', '087836832000'),
('2', 'Ammar faizi', 'Surakarta', 'Surakarta', '1994-12-07', 'Surakarta', '087836832000'),
('3', 'Ammar faizi', 'Surakarta', 'Surakarta', '1994-12-07', 'Surakarta', '087836832000'),
('4', 'Ammar faizi', 'Surakarta', 'Surakarta', '1994-12-07', 'Surakarta', '087836832000'),
('5', 'Ammar faizi', 'Surakarta', 'Surakarta', '1994-12-07', 'Surakarta', '087836832000'),
('2', 'Ammar faizi', 'Surakarta', 'Surakarta', '1994-12-07', 'Surakarta', '087836832000');

-- --------------------------------------------------------

--
-- Table structure for table `checkpoint`
--

CREATE TABLE IF NOT EXISTS `checkpoint` (
  `userid` varchar(20) NOT NULL,
  `type` enum('banned','register','security') NOT NULL,
  `checked` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_session`
--

CREATE TABLE IF NOT EXISTS `login_session` (
  `userid` varchar(20) NOT NULL,
  `session` varchar(72) NOT NULL,
  `login_at` datetime NOT NULL,
  `expired` datetime NOT NULL,
  `info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
