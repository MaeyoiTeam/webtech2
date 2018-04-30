-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:05 AM
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
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Details` text,
  `Name` varchar(50) DEFAULT NULL,
  `View` int(5) DEFAULT '0',
  `Reply` int(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`QuestionID`, `CreateDate`, `Question`, `Details`, `Name`, `View`, `Reply`) VALUES
(00005, '2018-04-17 20:35:02', 'à¸­à¸¢à¸²à¸à¸à¸´à¸™à¸‚à¹‰à¸²à¸§à¹€à¸¢à¹‡à¸™ à¸•à¹‰à¸­à¸‡à¹„à¸›à¸—à¸µà¹ˆà¹„à¸«à¸™à¸­à¹ˆà¸°', 'à¸«à¸´à¸§à¹à¸¥à¹‰à¸§', 'à¸¥à¸¹à¸à¸šà¸²à¸ªà¸‹à¹ˆà¸²à¸ªà¹Œ', 15, 2),
(00004, '2018-04-17 20:30:36', '1', 'Hello Namfon', '55+', 25, 6),
(00006, '2018-04-17 23:51:25', 'à¸­à¸¢à¸²à¸à¹„à¸”à¹‰ A à¸•à¹‰à¸­à¸‡à¸—à¸³à¸¢à¸±à¸‡à¹„à¸‡', 'T_T', 'à¹„à¸¡à¹ˆà¸›à¸£à¸°à¸ªà¸‡à¸„à¹Œà¸­à¸­à¸à¸™à¸²à¸¡', 26, 2),
(00007, '2018-04-18 00:25:49', 'ee', 'ee', 'ee', 8, 2),
(00008, '2018-04-18 10:21:33', 'i', 'oo', 'opo', 2, 0),
(00020, '2018-04-26 23:00:04', 'à¹ƒà¸à¸¥à¹‰à¹€à¸ªà¸£à¹‡à¸ˆà¸«à¸£à¸·à¸­à¸¢à¸±à¸‡à¸™à¸°', 'T_T à¹à¸‡à¹à¸‡à¹à¸‡à¹à¸‡à¹à¸‡à¹à¸‡à¸‡à¹à¸‡à¹à¸‡à¹à¸‡à¹à¸‡', 'EIEIEIEIEIEIEIEIEIEIEIEIEI', 0, 0),
(00019, '2018-04-23 06:22:10', 'à¸„à¸§à¸¢à¹€à¸­à¹‹à¸¢à¹à¸à¹‰à¹€à¸«à¸µà¹‰à¸¢à¹„à¸£à¸«à¸™à¸±à¸à¸«à¸™à¸²', 'à¸„à¸™à¸ˆà¸°à¸™à¸­à¸™', 'à¸™à¸±à¸— ITE', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`QuestionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
