-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 11:16 AM
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
(48, 'damana.jpg', 'damana', 'BRI', '3 BULAN', 'dama@gmail.com', '08399238483', '2022-10-30 10:15:34'),
(49, 'sunshine.jpg', 'sunshine', 'BTN', '6 BULAN', 'sunshineinthemorning@gmail.com', '089736267223', '2022-10-30 02:59:33');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
