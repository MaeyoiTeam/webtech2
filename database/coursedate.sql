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
-- Table structure for table `coursedate`
--

CREATE TABLE `coursedate` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) DEFAULT NULL,
  `sec` int(11) DEFAULT NULL,
  `date_date` date DEFAULT NULL,
  `daytime_ID` int(11) DEFAULT NULL,
  `active` enum('on','off','wait','break') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `current_start` time NOT NULL,
  `breaktime` time NOT NULL,
  `current_finish` time NOT NULL,
  `duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursedate`
--

INSERT INTO `coursedate` (`ID`, `course_ID`, `sec`, `date_date`, `daytime_ID`, `active`, `current_start`, `breaktime`, `current_finish`, `duration`) VALUES
(180001, 1236055, 21, '2018-04-18', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180002, 1236054, 21, '2018-04-18', 2, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180003, 1236052, 21, '2018-04-19', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180004, 1236053, 21, '2018-04-19', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180005, 1236054, 22, '2018-04-18', 1, 'off', '09:17:08', '09:27:16', '09:17:55', '00:06:47'),
(180006, 1236052, 22, '2018-04-18', 2, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180007, 1236053, 22, '2018-04-18', 3, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180008, 1236055, 22, '2018-04-19', 1, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180009, 1236055, 21, '2018-04-25', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180010, 1236054, 21, '2018-04-25', 2, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180011, 1236052, 21, '2018-04-26', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180012, 1236053, 21, '2018-04-26', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180013, 1236054, 22, '2018-04-25', 1, 'wait', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180014, 1236052, 22, '2018-04-25', 2, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180015, 1236053, 22, '2018-04-25', 3, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(180016, 1236055, 22, '2018-04-26', 1, 'off', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`,`sec`,`date_date`,`daytime_ID`),
  ADD KEY `sec` (`sec`),
  ADD KEY `daytime_ID` (`daytime_ID`),
  ADD KEY `date_date` (`date_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD CONSTRAINT `coursedate_ibfk_1` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_2` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_3` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
