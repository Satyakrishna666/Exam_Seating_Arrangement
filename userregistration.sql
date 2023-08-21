-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 03:37 PM
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
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `301room`
--

CREATE TABLE `301room` (
  `user` text NOT NULL,
  `roll` varchar(12) NOT NULL,
  `department` varchar(6) NOT NULL,
  `section` varchar(2) NOT NULL,
  `seatnumber` int(5) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `301room`
--

INSERT INTO `301room` (`user`, `roll`, `department`, `section`, `seatnumber`, `class`) VALUES
('V.T.V.Satyakrishna\r\n', '2011cs010317', 'CSE', '4', 1, 301),
('S.Srihas', '2011cs010274', 'CSE', '4', 2, 301),
('K.Shashank', '2011cs010334', 'CSE', '4', 3, 301),
('T.Pavan Kumar', '2011cs010295', 'CSE', '4', 4, 301);

-- --------------------------------------------------------

--
-- Table structure for table `302room`
--

CREATE TABLE `302room` (
  `user` text NOT NULL,
  `roll` varchar(12) NOT NULL,
  `department` varchar(5) NOT NULL,
  `section` int(3) NOT NULL,
  `seatnumber` int(5) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `302room`
--

INSERT INTO `302room` (`user`, `roll`, `department`, `section`, `seatnumber`, `class`) VALUES
('V.TejaMohan', '2011cs010316', 'CSE', 4, 1, 302),
('Ch.Shashank', '2011cs010326', 'CSE', 4, 2, 302),
('S.Surya', '2011cs010276', 'CSE', 4, 3, 302);

-- --------------------------------------------------------

--
-- Table structure for table `303room`
--

CREATE TABLE `303room` (
  `user` text NOT NULL,
  `roll` varchar(12) NOT NULL,
  `department` varchar(5) NOT NULL,
  `section` int(5) NOT NULL,
  `seatnumber` int(5) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `303room`
--

INSERT INTO `303room` (`user`, `roll`, `department`, `section`, `seatnumber`, `class`) VALUES
('Shreyash,250,261,245,', '2011cs010250', 'CSE', 3, 1, 303),
('Rohith', '2011cs010261', 'CSE', 3, 2, 303),
('Yagnesh', '2011cs010245', 'CSE', 3, 3, 303);

-- --------------------------------------------------------

--
-- Table structure for table `304room`
--

CREATE TABLE `304room` (
  `user` text NOT NULL,
  `roll` varchar(12) NOT NULL,
  `department` varchar(5) NOT NULL,
  `section` int(5) NOT NULL,
  `seatnumber` int(5) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `305room`
--

CREATE TABLE `305room` (
  `user` text NOT NULL,
  `roll` varchar(12) NOT NULL,
  `department` varchar(6) NOT NULL,
  `section` int(5) NOT NULL,
  `seatnumber` int(5) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
