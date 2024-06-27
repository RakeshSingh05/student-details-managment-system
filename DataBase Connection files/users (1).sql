-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2024 at 10:37 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `S_no` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`S_no`, `username`, `password`, `usertype`, `email`, `dt`) VALUES
(2, 'payalsingh', '1234', 'admin', '0', '2024-06-07 11:22:48'),
(4, 'cse/093/22', '111', 'admin', '0', '2024-06-07 11:29:32'),
(5, 'prem@gmail.com', '111', 'admin', '0', '2024-06-07 11:32:09'),
(7, '555', '555', 'student', 'payal@gmail.com', '2024-06-07 11:40:42'),
(8, 'rahulkumardangi ', '111', 'student', 'manmohan343@gmail.com', '2024-06-07 11:47:51'),
(9, 'ram ranth singh dinkar', '', '', '', '2024-06-07 12:25:31'),
(10, '2222', '', '', '', '2024-06-07 12:29:34'),
(11, 'somnathnayak', '1010', 'student', 'manmohan343@gmail.com', '2024-06-07 12:32:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `S_no` (`S_no`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `S_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
