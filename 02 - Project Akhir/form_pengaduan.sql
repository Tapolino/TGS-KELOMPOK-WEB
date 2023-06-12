-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `usia` varchar(10) DEFAULT NULL,
  `jdl_laporan` varchar(255) DEFAULT NULL,
  `isi_laporan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `usia`, `jdl_laporan`, `isi_laporan`, `foto`, `status`, `gambar`) VALUES
(1, '11-17', 's', 's', NULL, 'anonim', '647e1b11d0bec.png'),
(2, '11-17', 'a', 'a', NULL, 'anonim', '647e1befc46a4.png'),
(3, '11-17', 'a', 'a', NULL, 'anonim', '647e1c773d807.png'),
(4, '18-22', 'a', 'a', NULL, 'anonim', '647e1dd02c8f4.jpg'),
(5, '11-17', 'a', 'a', NULL, NULL, '64872eea87620.jpg'),
(6, '11-17', 'a', 'a', NULL, '', '64873029137c7.jpg'),
(7, '11-17', 'a', 'a', NULL, '', '648730cce1e77.jpg'),
(8, '11-17', 'a', 'a', NULL, '', '648730e20a781.jpg'),
(9, '11-17', 'a', 'a', NULL, '', '648730ee3b6cc.jpg'),
(10, '11-17', 'a', 'a', NULL, '', '648731498080e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
