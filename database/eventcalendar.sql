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
-- Table structure for table `eventcalendar`
--

CREATE TABLE `eventcalendar` (
  `ID` int(11) NOT NULL,
  `Title` varchar(65) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `eventDate` varchar(10) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventcalendar`
--

INSERT INTO `eventcalendar` (`ID`, `Title`, `Detail`, `eventDate`, `dateAdded`) VALUES
(143, 'ต', 'ค', '4/23/2018', '2018-04-22'),
(144, 'ไ', 'ไ', '4/23/2018', '2018-04-22'),
(196, 'wwwwwwwwwwwwwwwwwww', 'fre', '4/23/2018', '2018-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventcalendar`
--
ALTER TABLE `eventcalendar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
