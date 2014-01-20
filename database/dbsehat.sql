-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Desember 2013 jam 17:25
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
  `nama_image` varchar(30) NOT NULL,
  `Pagi` varchar(150) NOT NULL,
  `Siang` varchar(150) NOT NULL,
  `Malam` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Nama`, `Tanggal_Lahir`, `Tinggi_Badan`, `Berat_Badan`, `Jenis_Kelamin`, `Username`, `Password`, `Confirm_Pass`, `Email`, `tanggal`, `nama_image`, `Pagi`, `Siang`, `Malam`) VALUES
('Mukhlis Rusadi Situmorang', '1992-09-11 00:00:00', 171, 53, 'laki-laki', 'mukhlis', 'mukhlis', 'mukhlis', 'mukhlisrusadi@gmail.com', '2013-12-23 23:12:58', 'gambar/DSC01276_Large_.JPG', 'Lontong Sayur', 'Nasi Goreng Ayam', 'Nasi Goreng Ayam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
