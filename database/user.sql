-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 02:25 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Nama` varchar(255) NOT NULL,
  `Tanggal_Lahir` datetime NOT NULL,
  `Tinggi_Badan` int(5) NOT NULL,
  `Berat_Badan` int(5) NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Pass` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_image` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nama`, `Tanggal_Lahir`, `Tinggi_Badan`, `Berat_Badan`, `Jenis_Kelamin`, `Username`, `Password`, `Confirm_Pass`, `Email`, `tanggal`, `nama_image`) VALUES
('Julianus P A', '1991-07-29 00:00:00', 175, 60, 'laki-laki', 'Julianus', 'juli', 'juli', 'julianus@gmail.com', '2013-11-25 09:52:39', ''),
('Juve bin scudetto', '1997-09-19 00:00:00', 187, 80, 'laki-laki', 'Juve', 'juve', 'juve', 'juve@gmail.com', '2013-11-25 01:07:13', ''),
('wendi', '2013-11-03 00:00:00', 172, 70, 'laki-laki', 'wendi', 'w', 'w', 'wendi@gmail.com', '2013-11-24 00:02:40', ''),
('Jojor Marpaung', '1992-01-01 00:00:00', 180, 60, 'perempuan', 'jojor', 'josua', 'josua', 'jojor@gmail.com', '2013-12-01 20:27:53', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
