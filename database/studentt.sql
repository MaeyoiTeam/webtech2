-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 30, 2018 at 09:16 AM
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
-- Table structure for table `studentt`
--

CREATE TABLE `studentt` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`, `photo`) VALUES
(1, 'student', '1', 'Engineering', 'Information Engineering', '1997-01-01', 'Male', '0911111111', '0001@kmitl.ac.th', ''),
(2, 'student', '2', 'Engineering', 'Information Engineering', '1997-02-02', 'Female', '0922222222', '0002@kmitl.ac.th', ''),
(3, 'student', '3', 'Engineering', 'Information Engineering', '1997-03-03', 'Male', '0933333333', '0003@kmitl.ac.th', ''),
(4, 'student', '4', 'Engineering', 'Information Engineering', '1997-04-04', 'Female', '0944444444', '0004@kmit.ac.th', ''),
(59010164, 'Kanutsanun ', 'Nithipanich', 'Engineering', 'Information Engineering', '1997-08-28', 'Male', '094-291570', '59010164@kmitl.ac.th', ''),
(59010187, 'Jakkapat ', 'Boonroj', 'Engineering', 'Information Engineering', '1997-01-19', 'Male', '087-7021640', '59010187@kmitl.ac.th', ''),
(59010203, 'Jirapat', 'Sirasri', 'Engineering', 'Information Engineering', '1998-02-15', 'Male', '0999999999', '59010203@kmitl.ac.th', ''),
(59010205, 'Jirapat', 'Pitaksinakorn', 'Engineering', 'Information Engineering', '1997-07-04', 'Male', '0970767580', '59010205@kmitl.ac.th', ''),
(59010249, 'Chalermwut', 'Lermwutwarakitti', 'Engineering', 'Information Engineering', '1997-07-13', 'Male', '0814140760', '59010249@kmitl.ac.th', ''),
(59010386, 'Naphat', 'Pechsrijun', 'Engineering', 'Information Engineering', '1997-10-22', 'Male', '0972345678', '59010386@kmitl.ac.th', ''),
(59010697, 'Nontakon', 'Cheroencheewakul', 'Engineering', 'Information Engineering', '1997-02-23', 'Male', '0817929125', '59010697@kmitl.ac.th', ''),
(59010719, 'Nanthapong', 'Silsrikul', 'Engineering', 'Information Engineering', '1998-01-01', 'Male', '0812345678', '59010719@kmitl.ac.th', ''),
(59010731, 'Namfon', 'Kaminlao', 'Engineering', 'Information Engineering', '1997-09-23', 'Female', '0912345678', '59010731@kmitl.ac.th', ''),
(59010736, 'Nithi', 'Seamamuang', 'Engineering', 'Information Engineering', '1998-05-05', 'Male', '0987654321', '59010736@kmitl.ac.th', ''),
(59010748, 'Niwat', 'Jujaroen', 'Engineering', 'Information Engineering', '1997-07-20', 'Male', '0800000000', '59010748@kmitl.ac.th', ''),
(59010792, 'Papon', 'Prommoon', 'Engineering', 'Information Engineering', '1997-06-30', 'Male', '0888888888', '59010729@kmitl.ac.th', ''),
(59010940, 'Phattana', 'Wongyuttanapong', 'Engineering', 'Information Engineering', '1998-05-29', 'Male', '092-552419', '59010940@kmitl.ac.th', ''),
(59011201, 'Waritsara', 'Siriaksorn', 'Engineering', 'Information Engineering', '1997-12-24', 'Female', '081-812324', '59011201@kmitl.ac.th', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentt`
--
ALTER TABLE `studentt`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentt`
--
ALTER TABLE `studentt`
  ADD CONSTRAINT `studentt_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
