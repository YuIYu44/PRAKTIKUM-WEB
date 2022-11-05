-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 11:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_web`
--

CREATE TABLE `member_web` (
  `id` int(11) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no` varchar(13) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_web`
--

INSERT INTO `member_web` (`id`, `picture`, `nama`, `bank`, `paket`, `email`, `no`, `waktu`) VALUES
(48, 'damak.jpg', 'damak', 'BRI', '3 BULAN', 'dama@gmail.com', '08399238483', '2022-11-05 10:44:05'),
(50, 'brun.jpg', 'brun', 'MANDIRI', '6 BULAN', 'harry@gmail.com', '08924829392', '2022-11-05 03:24:46'),
(51, 'dog.jpg', 'dog', 'BRI', '3 BULAN', 'dog@gmail.com', '03940349033', '2022-11-04 12:50:37'),
(53, 'sama.jpg', 'sama', 'BNI', '6 BULAN', 'sama24@gmail.com', '083864287873', '2022-11-05 10:43:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_web`
--
ALTER TABLE `member_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_web`
--
ALTER TABLE `member_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
