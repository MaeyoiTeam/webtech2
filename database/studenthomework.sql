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
-- Table structure for table `studenthomework`
--

CREATE TABLE `studenthomework` (
  `ID` int(11) NOT NULL,
  `homework_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `date_send` date NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenthomework`
--
ALTER TABLE `studenthomework`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `homework_ID` (`homework_ID`,`student_ID`,`date_send`),
  ADD KEY `student_ID` (`student_ID`),
  ADD KEY `date_send` (`date_send`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studenthomework`
--
ALTER TABLE `studenthomework`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `studenthomework`
--
ALTER TABLE `studenthomework`
  ADD CONSTRAINT `studenthomework_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `studenthomework_ibfk_2` FOREIGN KEY (`homework_ID`) REFERENCES `homework` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
