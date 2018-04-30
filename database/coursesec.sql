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
-- Table structure for table `coursesec`
--

CREATE TABLE `coursesec` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursesec`
--

INSERT INTO `coursesec` (`ID`, `course_ID`, `sec`) VALUES
(1, 1236052, 21),
(2, 1236052, 22),
(3, 1236053, 21),
(4, 1236053, 22),
(5, 1236054, 21),
(6, 1236054, 22),
(7, 1236055, 21),
(8, 1236055, 22),
(9, 1231231, 1),
(10, 1231231, 2),
(11, 1231232, 1),
(12, 1231232, 2),
(13, 1231233, 1),
(14, 1231233, 2),
(15, 1231234, 1),
(16, 1231234, 2),
(17, 1231235, 1),
(18, 1231235, 2),
(19, 1231236, 1),
(20, 1231236, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursesec`
--
ALTER TABLE `coursesec`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `sec` (`sec`),
  ADD KEY `course_ID` (`course_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursesec`
--
ALTER TABLE `coursesec`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursesec`
--
ALTER TABLE `coursesec`
  ADD CONSTRAINT `coursesec_ibfk_1` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `coursesec_ibfk_2` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
