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
-- Table structure for table `noticemsg`
--

CREATE TABLE `noticemsg` (
  `id` int(11) NOT NULL,
  `Teacher_ID` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticemsg`
--

INSERT INTO `noticemsg` (`id`, `Teacher_ID`, `message`, `date_time`) VALUES
(80, 90000001, 'ขอย้ายวันเรียนวิชาdatabaseเป็นวันที่\r\n25/04/2561 นะจ๊ะ', '2018-04-23 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticemsg`
--
ALTER TABLE `noticemsg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticemsg`
--
ALTER TABLE `noticemsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `noticemsg`
--
ALTER TABLE `noticemsg`
  ADD CONSTRAINT `noticemsg_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachert` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
