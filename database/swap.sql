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
-- Table structure for table `swap`
--

CREATE TABLE `swap` (
  `ID` int(11) NOT NULL,
  `studentcourse_ID` int(11) NOT NULL,
  `current_couresedate` int(11) NOT NULL,
  `move_coursedate` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `swap`
--

INSERT INTO `swap` (`ID`, `studentcourse_ID`, `current_couresedate`, `move_coursedate`, `note`, `permission`) VALUES
(1, 61, 27, 28, 'ขอนะครับ', 0),
(2, 61, 27, 28, 'dsadasdasdas', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `swap`
--
ALTER TABLE `swap`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `studentcourse_ID` (`studentcourse_ID`,`current_couresedate`,`move_coursedate`),
  ADD KEY `current_couresedate` (`current_couresedate`),
  ADD KEY `move_coursedate` (`move_coursedate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `swap`
--
ALTER TABLE `swap`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `swap`
--
ALTER TABLE `swap`
  ADD CONSTRAINT `swap_ibfk_1` FOREIGN KEY (`studentcourse_ID`) REFERENCES `studentcourse` (`ID`),
  ADD CONSTRAINT `swap_ibfk_2` FOREIGN KEY (`current_couresedate`) REFERENCES `coursedate` (`ID`),
  ADD CONSTRAINT `swap_ibfk_3` FOREIGN KEY (`move_coursedate`) REFERENCES `coursedate` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
