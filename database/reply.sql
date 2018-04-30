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
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `ReplyID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `QuestionID` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `Details` text,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`ReplyID`, `QuestionID`, `CreateDate`, `Details`, `Name`) VALUES
(00001, 00001, '2018-04-17 13:14:04', 'sfasfsadfsafsdafw', 'wedfassfwerwe'),
(00002, 00001, '2018-04-17 20:16:43', 'sfasfsadfsafsdafw', 'wedfassfwerwe'),
(00003, 00001, '2018-04-17 20:18:13', 'GUYJ', 'JKGG'),
(00004, 00002, '2018-04-17 20:18:46', 'KUAY', '55+'),
(00005, 00002, '2018-04-17 20:19:04', '', ''),
(00006, 00001, '2018-04-17 20:19:21', 'JHYJ', '55+'),
(00007, 00002, '2018-04-17 20:19:28', 'à¸ªà¸à¸ªà¸”à¸”à¸§', 'à¹ˆà¸à¸²à¸²à¸à¸à¸²'),
(00008, 00002, '2018-04-17 20:22:52', 'à¸¢à¸²à¸à¸¡à¸²à¸', '???'),
(00009, 00001, '2018-04-17 20:23:16', 'à¹‚à¸„à¸•à¸£à¸¢à¸²à¸', 'T_T'),
(00010, 00002, '2018-04-17 20:23:19', 'SAD', 'Wen'),
(00011, 00001, '2018-04-17 20:25:59', 'SADSAD', 'Wen'),
(00012, 00003, '2018-04-17 20:29:55', 'Hsusnn', 'Nusnsk'),
(00013, 00004, '2018-04-17 20:31:18', 'à¸­à¸´à¹‰à¹†', 'à¸‡à¸²à¸¢'),
(00014, 00004, '2018-04-17 20:31:27', 'narakza', '555+'),
(00015, 00004, '2018-04-17 20:31:43', 'kuay', 'new'),
(00016, 00004, '2018-04-17 20:32:05', 'Sad', 'Wen'),
(00017, 00004, '2018-04-17 20:32:36', 'à¸—à¸³à¹€à¸§à¸› à¹à¸•à¹ˆà¸—à¸³database à¹„à¸¡à¹ˆà¹€à¸›à¹‡à¸™', 'basza'),
(00018, 00003, '2018-04-17 20:33:08', 'Bxush', 'Bdysbs'),
(00019, 00005, '2018-04-17 20:35:58', 'à¹„à¸›à¸—à¸µà¹ˆà¸«à¹‰à¸­à¸‡à¹€à¸£à¸²à¸ªà¸´', 'à¹„à¸¡à¹ˆà¸šà¸­à¸à¸«à¸£à¸­à¸à¸™à¸°'),
(00020, 00005, '2018-04-17 20:36:04', 'à¸«à¸´à¸§à¹€à¸«à¸¡à¸·à¸­à¸™à¸à¸±à¸™', 'à¸™à¸´à¸§'),
(00021, 00004, '2018-04-17 21:00:18', 'à¸­à¸´à¹‰à¹†', 'à¸‡à¸²à¸¢'),
(00022, 00006, '2018-04-17 23:51:55', 'à¸—à¸³à¹ƒà¸ˆ T_T', 'asfsadf'),
(00023, 00007, '2018-04-18 00:25:52', 'eee', ''),
(00024, 00006, '2018-04-18 00:32:01', 'à¸—à¸³à¸—à¸¸à¸à¸­à¸¢à¹ˆà¸²à¸‡à¸—à¸µà¹ˆà¹„à¸¡à¹ˆà¹ƒà¸Šà¹ˆà¹à¸šà¸šà¸§à¸±à¸™à¸™à¸µà¹‰', 'ieie'),
(00025, 00007, '2018-04-18 00:35:04', 'eeee', 'ieie'),
(00026, 00019, '2018-04-23 17:26:50', 'à¹ƒà¸ˆà¹€à¸¢à¹‡à¸™à¹†à¸™à¸°', 'à¸·no name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`ReplyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `ReplyID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
