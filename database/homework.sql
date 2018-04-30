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
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `file` longblob NOT NULL,
  `course_ID` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `time_finish` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`ID`, `name`, `note`, `file`, `course_ID`, `sec`, `date_start`, `date_finish`, `time_finish`) VALUES
(16, 'บทที่1 Database', 'การออกแบบฐานข้อมูล', 0x2e2e2f696d616765732f75706c6f6164732f35616464616234353938336161312e36373733323933342e706466, 1236054, 21, '2018-04-23', '2018-01-29', '16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`),
  ADD KEY `sec` (`sec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `homework`
--
ALTER TABLE `homework`
  ADD CONSTRAINT `homework_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `homework_ibfk_2` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
