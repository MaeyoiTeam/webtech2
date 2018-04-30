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
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `coursedate_ID` int(11) DEFAULT NULL,
  `num1` int(3) NOT NULL,
  `active` enum('wait','present','Late','miss') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'wait',
  `student_ID` int(11) DEFAULT NULL,
  `Group` varchar(3) DEFAULT NULL,
  `Seat` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `coursedate_ID`, `num1`, `active`, `student_ID`, `Group`, `Seat`) VALUES
(1031, 180010, 1, 'wait', 59010164, NULL, NULL),
(1032, 180010, 2, 'wait', 59010187, NULL, NULL),
(1033, 180010, 3, 'wait', 59010203, NULL, NULL),
(1034, 180010, 4, 'wait', 59010205, NULL, NULL),
(1035, 180010, 5, 'wait', 59010249, NULL, NULL),
(1036, 180010, 6, 'wait', 59010386, NULL, NULL),
(1037, 180010, 7, 'wait', 59010697, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `corusedate_ID` (`coursedate_ID`,`student_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`coursedate_ID`) REFERENCES `coursedate` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
