-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:41 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basnamfon_basnamfon`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedate`
--

CREATE TABLE `coursedate` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) DEFAULT NULL,
  `sec` int(11) DEFAULT NULL,
  `date_date` date DEFAULT NULL,
  `daytime_ID` int(11) DEFAULT NULL,
  `active` enum('on','off','wait','break') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `current_start` time DEFAULT NULL,
  `breaktime` time DEFAULT NULL,
  `current_finish` time DEFAULT NULL,
  `duration` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursedate`
--

INSERT INTO `coursedate` (`ID`, `course_ID`, `sec`, `date_date`, `daytime_ID`, `active`, `current_start`, `breaktime`, `current_finish`, `duration`) VALUES
(17, 1236052, 21, '2018-05-03', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(18, 1236052, 22, '2018-05-02', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(19, 1236053, 21, '2018-05-03', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(20, 1236053, 22, '2018-05-02', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(21, 1236054, 21, '2018-05-02', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(22, 1236054, 22, '2018-05-02', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(23, 1236055, 21, '2018-05-02', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(24, 1236055, 22, '2018-05-03', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(25, 1231231, 1, '2018-05-02', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(26, 1231232, 1, '2018-05-02', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(27, 1231234, 1, '2018-05-02', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(28, 1231234, 2, '2018-05-03', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(29, 1231233, 2, '2018-05-02', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(30, 1231235, 2, '2018-05-03', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(31, 1231234, 1, '2018-05-09', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(32, 1231234, 2, '2018-05-10', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(37, 1231231, 2, '2018-05-24', 2, 'off', NULL, NULL, NULL, NULL),
(40, 1231233, 2, '2018-05-20', 2, 'off', NULL, NULL, NULL, NULL),
(41, 1231233, 2, '2018-02-20', 2, 'off', NULL, NULL, NULL, NULL),
(42, 1231233, 2, '2018-02-21', 2, 'off', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID2` (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `course_ID` (`course_ID`,`sec`,`date_date`,`daytime_ID`),
  ADD KEY `sec` (`sec`),
  ADD KEY `daytime_ID` (`daytime_ID`),
  ADD KEY `date_date` (`date_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursedate`
--
ALTER TABLE `coursedate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD CONSTRAINT `coursedate_ibfk_1` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_2` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_3` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_4` FOREIGN KEY (`daytime_ID`) REFERENCES `daytime` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
