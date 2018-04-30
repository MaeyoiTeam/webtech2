-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:04 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jakapatb_59010187`
--

-- --------------------------------------------------------

--
-- Table structure for table `daytime`
--

CREATE TABLE `daytime` (
  `ID` int(11) NOT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daytime`
--

INSERT INTO `daytime` (`ID`, `start`, `finish`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '13:00:00', '16:00:00'),
(3, '17:30:00', '20:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daytime`
--
ALTER TABLE `daytime`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daytime`
--
ALTER TABLE `daytime`
  ADD CONSTRAINT `daytime_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `coursedate` (`daytime_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
