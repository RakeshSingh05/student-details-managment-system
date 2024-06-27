-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2024 at 10:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `sno` int(4) NOT NULL,
  `FIRST NAME` varchar(50) NOT NULL,
  `Last name` varchar(15) NOT NULL,
  `studentNumber` bigint(20) NOT NULL,
  `Year` bigint(20) NOT NULL,
  `Degree Program` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Network provider` varchar(25) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `select Month` varchar(15) NOT NULL,
  `Select Day` int(11) NOT NULL,
  `Select year` varchar(15) NOT NULL,
  `streetaddresss` varchar(50) NOT NULL,
  `streetaddresssecond` varchar(50) NOT NULL,
  `cityaddress` varchar(15) NOT NULL,
  `postal` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(55) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`sno`, `FIRST NAME`, `Last name`, `studentNumber`, `Year`, `Degree Program`, `Email`, `Network provider`, `Phone`, `select Month`, `Select Day`, `Select year`, `streetaddresss`, `streetaddresssecond`, `cityaddress`, `postal`, `state`, `country`, `Date`) VALUES
(1, 'Rakesh', 'singh ', 22013440069, 0, 'Btechece', 'rakeshsingh455@gamil.com', 'Globe', 9973261272, '9', 17, '2014', 'mango ', 'Azad Basti ', 'Jamshedpur', '828405', 'jharkhand', 'India', '2024-06-05 22:09:12'),
(2, 'ssd', 'singh', 22013440069, 0, 'Btechece', 'manmohan343@gmail.com', 'Globe', 9142967367, '7', 6, '2008', 'sdsdxxxxxx', 'dadd', '', '', '', '', '2024-06-09 18:37:28'),
(3, 'ssd', 'singh', 22013440069, 0, 'Btechece', 'manmohan343@gmail.com', 'Globe', 9142967367, '7', 6, '2008', 'sdsdxxxxxx', 'dadd', '', '', '', '', '2024-06-09 18:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
