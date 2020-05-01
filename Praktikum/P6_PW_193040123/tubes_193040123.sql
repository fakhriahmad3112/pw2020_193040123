-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 12:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040123`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `NO` int(11) NOT NULL,
  `GAMBAR` varchar(50) NOT NULL,
  `JUDUL` varchar(70) NOT NULL,
  `TAHUN TERBIT` year(4) NOT NULL,
  `PENGARANG` varchar(100) NOT NULL,
  `GENRE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`NO`, `GAMBAR`, `JUDUL`, `TAHUN TERBIT`, `PENGARANG`, `GENRE`) VALUES
(1, '5cm.jpeg', '5 CM', 2005, 'Donny Dhirgantoro', 'Sastra'),
(2, 'SP.jpg', 'Sang Pemimpi', 2006, 'Andrea Hirata', 'Fiksi'),
(3, 'mm.jfif', 'Marmut Merah Jambu', 2010, 'Raditya Dika', 'Roman'),
(4, 'ms.png', 'Manusia Setengah Salmon', 2011, 'Raditya Dika', 'Roman'),
(5, 'pk.jpg', 'Perahu Kertas', 2003, 'Dee Lestari', 'Fiksi'),
(6, 'ng.jpg', 'Negeri 5 Menara', 2009, 'Ahmad Fuadi', 'Edukasi, Religi, Roman'),
(7, 'rk.jfif', 'Rumah Kaca', 1988, 'Pramoedya Ananta Toer', 'Fiksi Sejarah'),
(8, 'vd.jpg', 'Tenggelamnya Kapal Van Der Wijck', 1938, 'Hamka', 'Fiksi'),
(9, 'lp.jpg', 'Laskar Pelangi', 2005, 'Andre Hirata', 'Sastra'),
(10, 'sn.jfif', 'Siti Nurbaya', 1922, 'Marah Roesli', 'Fiksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
