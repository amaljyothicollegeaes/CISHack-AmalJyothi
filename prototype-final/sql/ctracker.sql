-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 06:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shopName` varchar(255) NOT NULL DEFAULT 'noshop'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userId`, `firstName`, `lastName`, `password`, `mobile`, `type`, `createdOn`, `shopName`) VALUES
(8, 'John', 'Koodarathil', 'IdkKnow', 2147483647, 1, '2020-09-05 16:05:24', 'Varkey entre'),
(11, 'binh', 'bingo', 'abey1234', 8920, 1, '2020-09-06 13:58:27', 'as'),
(14, 'shin', 'sa', 'abey1234', 94475, 1, '2020-09-08 12:20:13', 'celesta'),
(15, 'kiki', 'you', 'abey1234', 7899, 1, '2020-09-08 12:50:50', 'semi'),
(16, 'llllll', 'lllll', 'agy', 5676, 1, '2020-09-10 09:40:35', 'werrt'),
(18, 'binomo', 'nomi', 'abey1234', 7890, 1, '2020-09-10 13:40:11', ''),
(19, 'allen', 'mon', 'abey1234', 8921, 1, '2020-09-11 15:21:50', ''),
(21, 'Thomas', 'kurian', 'abey1234', 7821, 1, '2020-09-13 08:16:46', ''),
(22, 'Gokul', 'R', 'abey1234', 1234, 1, '2020-09-16 10:21:19', 'intanetytech'),
(23, 'Allen', 'MON', 'abey1234', 6789, 1, '2020-09-16 14:25:15', ''),
(24, 'Jinto', 'Jos', 'abey1234', 8888, 1, '2020-09-18 05:29:19', ''),
(25, 'Ervin', 'Thomas', 'abey1234', 5678, 1, '2020-09-18 14:35:27', 'VNS - MEDICALS');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `shopName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mobileNo` bigint(10) DEFAULT NULL,
  `enterTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `exitTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `shopName`, `mobileNo`, `enterTime`, `exitTime`) VALUES
(56, 'binomo', '1234', 7890, '2020-09-16 18:04:15.722151', '2020-09-16T18:12:02.'),
(58, 'binomo', '7899', 7890, '2020-09-16 18:57:55.718425', '2020-09-16T18:58:14.'),
(59, 'Thomas', '1234', 7821, '2020-09-16 19:00:24.381756', '2020-09-16T19:00:31.'),
(61, 'binomo', '2147483647', 7890, '2020-09-18 04:43:06.155814', '2020-09-18T04:43:21.'),
(63, 'allen', '2147483647', 8921, '2020-09-18 04:50:34.778191', '2020-09-18T04:52:02.'),
(65, 'Jinto', '1234intanetytech', 8888, '2020-09-18 05:34:37.323354', '2020-09-18T05:35:09.'),
(67, 'Jinto', 'as 8920', 8888, '2020-09-18 06:56:52.627833', '2020-09-18T06:57:03.'),
(69, 'binomo', 'as 8920', 7890, '2020-09-18 14:31:19.061370', '2020-09-18T14:31:25.'),
(70, '', '', 0, '2020-09-18 14:36:44.572193', '2020-09-18T14:36:49.'),
(71, 'binomo', 'VNS - MEDICALS 5678', 7890, '2020-09-18 14:36:44.681213', '2020-09-18T14:36:49.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
