-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 08:04 PM
-- Server version: 10.5.15-MariaDB-0ubuntu0.21.10.1
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `mustahik`
--

CREATE TABLE `mustahik` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `jumlah_hak` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mustahik`
--

INSERT INTO `mustahik` (`id`, `kategori`, `jumlah_hak`) VALUES
(6, 'Miskin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `muzakki`
--

CREATE TABLE `muzakki` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(8) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muzakki`
--

INSERT INTO `muzakki` (`id`, `nama`, `jumlah_tanggungan`, `keterangan`) VALUES
(5, 'Budi', 5, 'telah membayar zakat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mustahik`
--
ALTER TABLE `mustahik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mustahik`
--
ALTER TABLE `mustahik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
