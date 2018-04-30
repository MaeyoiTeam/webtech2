-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 01:01 PM
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
-- Table structure for table `studentcoursedate`
--

CREATE TABLE `studentcoursedate` (
  `ID` int(11) NOT NULL,
  `studentcourse_ID` int(11) NOT NULL,
  `coursedate_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentcoursedate`
--

INSERT INTO `studentcoursedate` (`ID`, `studentcourse_ID`, `coursedate_ID`) VALUES
(113, 66, 30),
(114, 65, 28),
(115, 64, 29),
(116, 63, 30),
(117, 62, 28),
(118, 61, 27),
(119, 60, 26),
(120, 59, 25),
(121, 58, 26),
(122, 57, 25),
(123, 61, 31),
(124, 62, 32),
(125, 65, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `studentcourse_ID` (`studentcourse_ID`),
  ADD KEY `coursedate_ID` (`coursedate_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  ADD CONSTRAINT `studentcoursedate_ibfk_1` FOREIGN KEY (`studentcourse_ID`) REFERENCES `studentcourse` (`ID`),
  ADD CONSTRAINT `studentcoursedate_ibfk_4` FOREIGN KEY (`coursedate_ID`) REFERENCES `coursedate` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
