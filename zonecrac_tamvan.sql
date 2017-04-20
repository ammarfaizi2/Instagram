-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Inang: localhost:3306
-- Waktu pembuatan: 02 Jan 2016 pada 05.59
-- Versi Server: 5.5.46-cll
-- Versi PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `zonecrac_tamvan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(255) NOT NULL,
  `teks` varchar(255) NOT NULL,
  `jenis` enum('sarankritik','error','tanya') NOT NULL,
  `date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uplink` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `second_target` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` enum('like','follow','comment') NOT NULL,
  `submit` int(255) NOT NULL,
  `logs` varchar(255) NOT NULL,
  `unik` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instagram`
--

CREATE TABLE IF NOT EXISTS `instagram` (
  `id` varchar(32) NOT NULL,
  `cookies` text NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `verifikasi` int(1) NOT NULL,
  `poin` int(1) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('member','admin') NOT NULL,
  `joindate` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`username`, `password`, `level`, `joindate`) VALUES
('iqbal', 'tamvan', 'admin', '02/24/2001');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
