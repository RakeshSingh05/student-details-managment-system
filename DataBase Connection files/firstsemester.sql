-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2024 at 10:35 AM
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
-- Table structure for table `firstsemester`
--

CREATE TABLE `firstsemester` (
  `registrationno` bigint(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Branchname` varchar(85) NOT NULL,
  `exam` text NOT NULL DEFAULT 'MARCH-APRIL-2023',
  `theorypaper` text NOT NULL DEFAULT '\'[BSC101] PHYSICS-1\'',
  `theorypaper2` text NOT NULL DEFAULT '[BSC103] MATHEMATICS 1',
  `theorypaper3` text NOT NULL DEFAULT '[ESE101] BASIC ELECTRICAL ENGINEERING ',
  `theorygrade1` varchar(3) NOT NULL,
  `theorygrade2` varchar(3) NOT NULL,
  `theorygrade3` varchar(3) NOT NULL,
  `practiclepaper1` text NOT NULL DEFAULT '[ESC 102] ENGINEERING GRAPHICS & DESIGN',
  `practiclepaper2` text NOT NULL DEFAULT '[BSC101P] PHYSICS LAB',
  `practiclepaper3` text NOT NULL DEFAULT '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB',
  `practiclegrade1` varchar(3) NOT NULL,
  `pracitlcegrade2` varchar(3) NOT NULL,
  `practiclegrade3` varchar(3) NOT NULL,
  `totalcredit` float NOT NULL DEFAULT 17.5,
  `sgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstsemester`
--

INSERT INTO `firstsemester` (`registrationno`, `name`, `Branchname`, `exam`, `theorypaper`, `theorypaper2`, `theorypaper3`, `theorygrade1`, `theorygrade2`, `theorygrade3`, `practiclepaper1`, `practiclepaper2`, `practiclepaper3`, `practiclegrade1`, `pracitlcegrade2`, `practiclegrade3`, `totalcredit`, `sgpa`) VALUES
(2201344001, 'AADARSH SHABHEB SING', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 8),
(2201344002, 'ABHAY KUMAR VERMA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 4.04),
(2201344003, 'ABHISHEK KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 6.05),
(2201344004, 'ADITI PRIYA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.83),
(2201344005, 'AFSANA PARWEEN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 5.58),
(2201344006, 'AHMAD RAZA KHAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.08),
(2201344007, 'AKASH RANA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.04),
(2201344008, 'ANANAYA SINHA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 5.54),
(2201344009, 'ANISH KUMAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.96),
(2201344010, 'ANKIT PRASAD', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.76),
(2201344011, 'ANKUSH KUMAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.17),
(2201344012, 'ANU KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.42),
(2201344013, 'APARNA SHARMA', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 9.04),
(2201344014, 'ARCHIT KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.67),
(2201344015, 'AVINASH RAJ ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 5.92),
(2201344016, 'AYUSH  KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 6.92),
(2201344017, 'AYUSH KUMAR JASWAL ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.58),
(2201344018, 'AYUSH KUMAR SINHA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.13),
(2201344019, 'BIMBESWAR MURMU', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.5),
(2201344020, 'DARAKSHAN IMTEYAZ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.79),
(2201344021, 'DAYANAND KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 8.38),
(2201344022, 'DHEERAJ KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.04),
(2201344023, 'DHIRAJ PRAJAPATI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.83),
(2201344024, 'GOURANGO BHAKAT ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 5),
(2201344025, 'HIMANSHU KAMILA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.79),
(2201344026, 'HIMANSHU MAZUMDAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 5.08),
(2201344027, 'ISHA ANAND ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.75),
(2201344028, 'JEENAT PARWEEN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 8.42),
(2201344029, 'KANHAYA AGARWAL ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 8.08),
(2201344030, 'KUMARI KUSHI SINGH ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.75),
(2201344031, 'KUNAL KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 6.71),
(2201344032, 'KUSHI SINGH ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.38),
(2201344033, 'MADHU SHREE', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.71),
(2201344034, 'MAHESWAR MANDAL', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 4.21),
(2201344035, 'MD AADIL ANSARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.08),
(2201344036, 'MD AAMIL JAMIL', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 5.46),
(2201344037, 'MD AMAANUDDINI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8),
(2201344038, 'MD AMMANT ANSARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.67),
(2201344039, 'MD ARRESH ANSARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 7.75),
(2201344040, 'MD FARHAN ALI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.17),
(2201344041, 'MD IMRAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 5.33),
(2201344042, 'MD KAIF', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 3.96),
(2201344043, 'MD RAIYAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.5),
(2201344044, 'MD TAKHAR RAMEEZ ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 4.92),
(2201344045, 'MOHHMMAD AFAQUE ANUU', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7),
(2201344046, 'MOHHMMAD KAMIL AKHTA', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 5.88),
(2201344047, 'MOU SAMADDAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 7.04),
(2201344048, 'MUBARAK HUSSAIN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.21),
(2201344049, 'MUSKHAN KUMARI', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 8.08),
(2201344050, 'NEHA KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 5.63),
(2201344051, 'NIKHIL KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.17),
(2201344052, 'NIRAJ TAKHUR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 8.04),
(2201344053, 'NIRBHAY SINGH', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.13),
(2201344054, 'NISCHAY ANAND ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.88),
(2201344055, 'NITIN KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.92),
(2201344056, 'NITISH KUMAR SHARAMA', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 6.04),
(2201344057, 'PARTH KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 7.79),
(2201344058, 'PARYOG PRIYANSHU', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.96),
(2201344059, 'PAYAL MANNA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.75),
(2201344060, 'PRERNA KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.42),
(2201344061, 'PUJA RANI DHARA ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 8.42),
(2201344062, 'R.YASWANT ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.75),
(2201344063, 'RAHUL KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.58),
(2201344064, 'RAHUL KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.67),
(2201344065, 'RAKESH KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 9.45),
(2201344066, 'RAKHI KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.08),
(2201344067, 'RASHMI KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.96),
(2201344068, 'RIYA GOND ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.29),
(2201344069, 'ROHAN KAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 4.58),
(2201344070, 'SABAUN ADIL KHAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.13),
(2201344071, 'SADDAM ANSARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.88),
(2201344072, 'SAIF KHAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.79),
(2201344073, 'SAIFEE CHAND ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.08),
(2201344074, 'SAKSHI KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 7.75),
(2201344075, 'SANDEEP KUMAR BHARTI', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 6.79),
(2201344076, 'SATKA PARKASH KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 6.42),
(2201344077, 'SHASHISKHANT KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 2.42),
(2201344078, 'SHIKHA VERMA', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.29),
(2201344079, 'SHIRIST KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 8.88),
(2201344080, 'SHIVAM KUMAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.7),
(2201344081, 'SHIVAM KUMAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.92),
(2201344082, 'SHIVAM KUMAR  RAWAT ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 7.83),
(2201344083, 'SHRESHTH SUPRIT KUJU', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.63),
(2201344084, 'SHWETA KUMARI ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 8),
(2201344085, 'SIFAT JAHAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.42),
(2201344086, 'SIRAT FATMA', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 7.63),
(2201344087, 'SOMNATH NAYAK ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.13),
(2201344088, 'SONA KARAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 5.79),
(2201344089, 'SOURAV  KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 6.92),
(2201344090, 'SUNIL KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.75),
(2201344091, 'SURAJ KUMAR NAYAK ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 8.33),
(2201344092, 'SUSHANT KUMAR', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 6.67),
(2201344093, 'SYED MD .SHADAMAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C+', 'C+', 'C+', 17.5, 7.08),
(2201344094, 'SYED NAVED HASAN ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'C', 'C', 'C', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A', 'A', 'A', 17.5, 7.58),
(2201344095, 'TABSHEERUL HAFFEZ AN', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A', 'A', 'A', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'A+', 'A+', 'A+', 17.5, 7.63),
(2201344096, 'TAKUR AMMAN KUMAR ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'B+', 'B+', 'B+', 17.5, 6.75),
(2201344097, 'TANVEER ALAM ', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 1', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'A+', 'A+', 'A+', '[ESC 102] ENGINEERING GRAPHICS & DESIGN', '[BSC101P] PHYSICS LAB', '[ESC101P]BASIC ELECTRICAL ENGINEERING LAB', 'C ', 'C ', 'C ', 17.5, 7.13),
(2201344098, 'VISHAL CHOUBEY', 'Computer Science and Engineering ', 'MARCH-APRIL-2023', '[BSC101] PHYSICS-1', '[BSC103] MATHEMATICS 2', '[ESE101] BASIC ELECTRICAL ENGINEERING ', 'B+', 'B+', 'B+', '', '', '', '', '', '', 0, 5.46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstsemester`
--
ALTER TABLE `firstsemester`
  ADD PRIMARY KEY (`registrationno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
