-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:05 AM
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
-- Table structure for table `teachert`
--

CREATE TABLE `teachert` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Major` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachert`
--

INSERT INTO `teachert` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(1010, 'teacher', '1', 'Engineering', 'Information Engineering', '1980-01-01', 'Male', '0811111111', '1010@kmtil.ac.th'),
(2020, 'teacher', '2', 'Engineering', 'Information Engineering', '1980-02-02', 'Female', '0822222222', '2020@kmil.ac.th'),
(90000001, 'sutheera', ' puntheeranurak', 'Engineeing', 'information Engineeing', NULL, 'Female', NULL, NULL),
(90000002, 'teacher', '2tiut', 'Engineering', 'Information Engineering', '1980-02-02', 'Male', '0822222222', '90000002@kmtil.ac.th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachert`
--
ALTER TABLE `teachert`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teachert`
--
ALTER TABLE `teachert`
  ADD CONSTRAINT `teachert_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
