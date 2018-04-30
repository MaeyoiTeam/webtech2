-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:03 AM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Credit` smallint(6) DEFAULT NULL,
  `teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `course_name`, `Credit`, `teacher_ID`) VALUES
(1231231, 'A', 3, 1010),
(1231232, 'B', 3, 1010),
(1231233, 'C', 3, 1010),
(1231234, 'D', 3, 2020),
(1231235, 'E', 3, 2020),
(1231236, 'F', 3, 2020),
(1236052, 'Telecom', 3, NULL),
(1236053, 'Coding', 3, NULL),
(1236054, 'Database', 3, 90000001),
(1236055, 'Webtech', 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Teacher_ID` (`teacher_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_ID`) REFERENCES `teachert` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
