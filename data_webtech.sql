-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Apr 29, 2018 at 08:07 AM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Credit` smallint(6) DEFAULT NULL,
  `teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

REPLACE INTO `course` (`ID`, `course_name`, `Credit`, `teacher_ID`) VALUES
(1236052, 'Telecom', 3, NULL),
(1236053, 'Coding', 3, NULL),
(1236054, 'Database', 3, 90000001),
(1236055, 'Webtech', 3, NULL);

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

REPLACE INTO `coursedate` (`ID`, `course_ID`, `sec`, `date_date`, `daytime_ID`, `active`, `current_start`, `breaktime`, `current_finish`, `duration`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `datedate`
--

CREATE TABLE `datedate` (
  `ID` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datedate`
--

REPLACE INTO `datedate` (`ID`) VALUES
('2018-04-18'),
('2018-04-19'),
('2018-04-25'),
('2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `daytime`
--

CREATE TABLE `daytime` (
  `ID` int(11) NOT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daytime`
--

REPLACE INTO `daytime` (`ID`, `start`, `finish`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '13:00:00', '16:00:00'),
(3, '17:30:00', '20:30:00');

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

REPLACE INTO `eventcalendar` (`ID`, `Title`, `Detail`, `eventDate`, `dateAdded`) VALUES
(143, 'ต', 'ค', '4/23/2018', '2018-04-22'),
(144, 'ไ', 'ไ', '4/23/2018', '2018-04-22'),
(196, 'wwwwwwwwwwwwwwwwwww', 'fre', '4/23/2018', '2018-04-23');

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

REPLACE INTO `homework` (`ID`, `name`, `note`, `file`, `course_ID`, `sec`, `date_start`, `date_finish`, `time_finish`) VALUES
(16, 'บทที่1 Database', 'การออกแบบฐานข้อมูล', 0x2e2e2f696d616765732f75706c6f6164732f35616464616234353938336161312e36373733323933342e706466, 1236054, 21, '2018-04-23', '2018-01-29', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `ID` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file` longblob NOT NULL,
  `course_ID` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` int(32) DEFAULT '0',
  `Status` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

REPLACE INTO `member` (`ID`, `Username`, `Password`, `Active`, `Status`) VALUES
(123, 'ku', 'ku', 0, 'Student'),
(59010111, 'kuy', 'kuy', 0, 'Student'),
(59010126, 'ballkitt', '1', 0, 'STUDENT'),
(59010127, 'ballll', '1', 0, 'STUDENT'),
(59010164, 'kanunsanan', '59010164', 0, 'Student'),
(59010187, 'Jakkapat', '59010187', 0, 'Student'),
(59010203, 'Jirapat', '59010203', 0, 'Student'),
(59010205, 'Jirapat', '59010205', 0, 'Student'),
(59010249, 'Chalermwut', '59010249', 0, 'Student'),
(59010386, 'Naphat', '59010386', 0, 'Student'),
(59010697, 'Nontakon', '59010697', 0, 'Student'),
(59010719, 'Nanthapong', '59010719', 0, 'Student'),
(59010731, 'Namfon', '59010731', 0, 'Student'),
(59010736, 'Nithi', '59010736', 1, 'Student'),
(59010748, 'Niwat', '59010748', 0, 'Student'),
(59010792, 'Papon', '59010792', 0, 'Student'),
(59010940, 'Phattana', '59010940', 0, 'Student'),
(59011201, 'Waritsara', '59011201', 0, 'Student'),
(90000001, 'Teacher', 'teacher', 0, 'Teacher'),
(123456789, 'kkkk', 'kkkk', 0, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `noticemsg`
--

CREATE TABLE `noticemsg` (
  `id` int(11) NOT NULL,
  `teacher_ID` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticemsg`
--

REPLACE INTO `noticemsg` (`id`, `teacher_ID`, `message`, `date_time`) VALUES
(80, 90000001, 'ขอย้ายวันเรียนวิชาdatabaseเป็นวันที่\r\n25/04/2561 นะจ๊ะ', '2018-04-23 00:00:00');

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

REPLACE INTO `reply` (`ReplyID`, `QuestionID`, `CreateDate`, `Details`, `Name`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `coursedate_ID` int(11) DEFAULT NULL,
  `num1` int(3) NOT NULL,
  `active` enum('wait','present','Late','miss') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'wait',
  `student_ID` int(11) DEFAULT NULL,
  `Group` varchar(3) DEFAULT NULL,
  `Seat` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

REPLACE INTO `room` (`ID`, `coursedate_ID`, `num1`, `active`, `student_ID`, `Group`, `Seat`) VALUES
(1031, 180010, 1, 'wait', 59010164, NULL, NULL),
(1032, 180010, 2, 'wait', 59010187, NULL, NULL),
(1033, 180010, 3, 'wait', 59010203, NULL, NULL),
(1034, 180010, 4, 'wait', 59010205, NULL, NULL),
(1035, 180010, 5, 'wait', 59010249, NULL, NULL),
(1036, 180010, 6, 'wait', 59010386, NULL, NULL),
(1037, 180010, 7, 'wait', 59010697, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `seat_row` int(1) NOT NULL,
  `seat_col` int(1) NOT NULL,
  `seat_num` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

REPLACE INTO `seat` (`ID`, `course_ID`, `seat_row`, `seat_col`, `seat_num`) VALUES
(2, 1236054, 3, 3, 5),
(3, 1236053, 4, 4, 4),
(4, 1236055, 4, 4, 6),
(7, 1236052, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sec`
--

REPLACE INTO `sec` (`ID`) VALUES
(21),
(22);

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentcourse`
--

REPLACE INTO `studentcourse` (`ID`, `course_ID`, `student_ID`, `sec`) VALUES
(1, 1236052, 59010164, 21),
(2, 1236052, 59010187, 21),
(3, 1236052, 59010203, 21),
(4, 1236052, 59010205, 21),
(5, 1236052, 59010249, 21),
(6, 1236052, 59010386, 21),
(7, 1236052, 59010697, 21),
(8, 1236052, 59010719, 22),
(9, 1236052, 59010731, 22),
(10, 1236052, 59010736, 22),
(11, 1236052, 59010748, 22),
(12, 1236052, 59010792, 22),
(13, 1236052, 59010940, 22),
(14, 1236052, 59011201, 22),
(15, 1236053, 59010164, 21),
(16, 1236053, 59010187, 21),
(17, 1236053, 59010203, 21),
(18, 1236053, 59010205, 21),
(19, 1236053, 59010249, 21),
(20, 1236053, 59010386, 21),
(21, 1236053, 59010697, 21),
(22, 1236053, 59010719, 22),
(23, 1236053, 59010731, 22),
(24, 1236053, 59010736, 22),
(25, 1236053, 59010748, 22),
(26, 1236053, 59010792, 22),
(27, 1236053, 59010940, 22),
(28, 1236053, 59011201, 22),
(29, 1236054, 59010164, 21),
(30, 1236054, 59010187, 21),
(31, 1236054, 59010203, 21),
(32, 1236054, 59010205, 21),
(33, 1236054, 59010249, 21),
(34, 1236054, 59010386, 21),
(35, 1236054, 59010697, 21),
(36, 1236054, 59010719, 22),
(37, 1236054, 59010731, 22),
(38, 1236054, 59010736, 22),
(39, 1236054, 59010748, 22),
(40, 1236054, 59010792, 22),
(41, 1236054, 59010940, 22),
(42, 1236054, 59011201, 22),
(43, 1236055, 59010164, 21),
(44, 1236055, 59010187, 21),
(45, 1236055, 59010203, 21),
(46, 1236055, 59010205, 21),
(47, 1236055, 59010249, 21),
(48, 1236055, 59010386, 21),
(49, 1236055, 59010697, 21),
(50, 1236055, 59010719, 22),
(51, 1236055, 59010731, 22),
(52, 1236055, 59010736, 22),
(53, 1236055, 59010748, 22),
(54, 1236055, 59010792, 22),
(55, 1236055, 59010940, 22),
(56, 1236055, 59011201, 22);

-- --------------------------------------------------------

--
-- Table structure for table `studentcoursedate`
--

CREATE TABLE `studentcoursedate` (
  `ID` int(11) NOT NULL,
  `sec` int(11) DEFAULT NULL,
  `studentcourse_ID` int(11) NOT NULL,
  `date_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentcoursedate`
--

REPLACE INTO `studentcoursedate` (`ID`, `sec`, `studentcourse_ID`, `date_date`) VALUES
(1, 21, 1, '2018-04-19'),
(2, 21, 1, '2018-04-26'),
(3, 21, 2, '2018-04-26'),
(4, 21, 2, '2018-04-19'),
(5, 21, 3, '2018-04-26'),
(6, 21, 3, '2018-04-19'),
(7, 21, 4, '2018-04-26'),
(8, 21, 4, '2018-04-19'),
(9, 21, 5, '2018-04-26'),
(10, 21, 5, '2018-04-19'),
(11, 21, 6, '2018-04-19'),
(12, 21, 6, '2018-04-26'),
(13, 21, 7, '2018-04-26'),
(14, 21, 7, '2018-04-19'),
(15, 22, 8, '2018-04-26'),
(16, 22, 8, '2018-04-19'),
(17, 22, 9, '2018-04-26'),
(18, 22, 9, '2018-04-19'),
(19, 22, 10, '2018-04-26'),
(20, 22, 10, '2018-04-19'),
(21, 22, 11, '2018-04-26'),
(22, 22, 11, '2018-04-19'),
(23, 22, 12, '2018-04-26'),
(24, 22, 12, '2018-04-19'),
(25, 22, 13, '2018-04-25'),
(26, 22, 13, '2018-04-18'),
(27, 22, 14, '2018-04-18'),
(28, 22, 14, '2018-04-25'),
(29, 21, 15, '2018-04-26'),
(30, 21, 15, '2018-04-19'),
(31, 21, 16, '2018-04-26'),
(32, 21, 16, '2018-04-19'),
(33, 21, 17, '2018-04-26'),
(34, 21, 17, '2018-04-19'),
(35, 21, 18, '2018-04-19'),
(36, 21, 18, '2018-04-26'),
(37, 21, 19, '2018-04-26'),
(38, 21, 19, '2018-04-19'),
(39, 21, 20, '2018-04-26'),
(40, 21, 20, '2018-04-19'),
(41, 21, 21, '2018-04-26'),
(42, 21, 21, '2018-04-19'),
(43, 22, 22, '2018-04-26'),
(44, 22, 22, '2018-04-19'),
(45, 22, 23, '2018-04-26'),
(46, 22, 23, '2018-04-19'),
(47, 22, 24, '2018-04-19'),
(48, 22, 24, '2018-04-26'),
(49, 22, 25, '2018-04-19'),
(50, 22, 25, '2018-04-26'),
(51, 22, 26, '2018-04-19'),
(52, 22, 26, '2018-04-26'),
(53, 22, 27, '2018-04-25'),
(54, 22, 27, '2018-04-18'),
(55, 22, 28, '2018-04-25'),
(56, 22, 28, '2018-04-18'),
(57, 21, 29, '2018-04-25'),
(58, 21, 29, '2018-04-18'),
(59, 21, 30, '2018-04-25'),
(60, 21, 30, '2018-04-18'),
(61, 21, 31, '2018-04-18'),
(62, 21, 31, '2018-04-25'),
(63, 21, 32, '2018-04-25'),
(64, 21, 32, '2018-04-18'),
(65, 21, 33, '2018-04-25'),
(66, 21, 33, '2018-04-18'),
(67, 21, 34, '2018-04-18'),
(68, 21, 34, '2018-04-25'),
(69, 21, 35, '2018-04-18'),
(70, 21, 35, '2018-04-25'),
(71, 22, 36, '2018-04-18'),
(72, 22, 36, '2018-04-25'),
(73, 22, 37, '2018-04-25'),
(74, 22, 37, '2018-04-18'),
(75, 22, 38, '2018-04-25'),
(76, 22, 38, '2018-04-18'),
(77, 22, 39, '2018-04-18'),
(78, 22, 39, '2018-04-25'),
(79, 22, 40, '2018-04-18'),
(80, 22, 40, '2018-04-25'),
(81, 22, 41, '2018-04-18'),
(82, 22, 41, '2018-04-25'),
(83, 22, 42, '2018-04-18'),
(84, 22, 42, '2018-04-25'),
(85, 21, 43, '2018-04-18'),
(86, 21, 43, '2018-04-25'),
(87, 21, 44, '2018-04-25'),
(88, 21, 44, '2018-04-18'),
(89, 21, 45, '2018-04-18'),
(90, 21, 45, '2018-04-25'),
(91, 21, 46, '2018-04-25'),
(92, 21, 46, '2018-04-18'),
(93, 21, 47, '2018-04-18'),
(94, 21, 47, '2018-04-25'),
(95, 21, 48, '2018-04-18'),
(96, 21, 48, '2018-04-25'),
(97, 21, 49, '2018-04-25'),
(98, 21, 49, '2018-04-18'),
(99, 22, 50, '2018-04-25'),
(100, 22, 50, '2018-04-18'),
(101, 22, 51, '2018-04-18'),
(102, 22, 51, '2018-04-25'),
(103, 22, 52, '2018-04-18'),
(104, 22, 52, '2018-04-25'),
(105, 22, 53, '2018-04-18'),
(106, 22, 53, '2018-04-25'),
(107, 22, 54, '2018-04-25'),
(108, 22, 54, '2018-04-18'),
(109, 22, 55, '2018-04-26'),
(110, 22, 55, '2018-04-19'),
(111, 22, 56, '2018-04-19'),
(112, 22, 56, '2018-04-26');

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
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentt`
--

REPLACE INTO `studentt` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(59010164, 'Kanutsanun ', 'Nithipanich', 'Engineering', 'Information Engineering', '1997-08-28', 'Male', '094-291570', '59010164@kmitl.ac.th'),
(59010187, 'Jakkapat ', 'Boonroj', 'Engineering', 'Information Engineering', '1997-01-19', 'Male', '087-7021640', '59010187@kmitl.ac.th'),
(59010203, 'Jirapat', 'Sirasri', 'Engineering', 'Information Engineering', '1998-02-15', 'Male', '0999999999', '59010203@kmitl.ac.th'),
(59010205, 'Jirapat', 'Pitaksinakorn', 'Engineering', 'Information Engineering', '1997-07-04', 'Male', '0970767580', '59010205@kmitl.ac.th'),
(59010249, 'Chalermwut', 'Lermwutwarakitti', 'Engineering', 'Information Engineering', '1997-07-13', 'Male', '0814140760', '59010249@kmitl.ac.th'),
(59010386, 'Naphat', 'Pechsrijun', 'Engineering', 'Information Engineering', '1997-10-22', 'Male', '0972345678', '59010386@kmitl.ac.th'),
(59010697, 'Nontakon', 'Cheroencheewakul', 'Engineering', 'Information Engineering', '1997-02-23', 'Male', '0817929125', '59010697@kmitl.ac.th'),
(59010719, 'Nanthapong', 'Silsrikul', 'Engineering', 'Information Engineering', '1998-01-01', 'Male', '0812345678', '59010719@kmitl.ac.th'),
(59010731, 'Namfon', 'Kaminlao', 'Engineering', 'Information Engineering', '1997-09-23', 'Female', '0912345678', '59010731@kmitl.ac.th'),
(59010736, 'Nithi', 'Seamamuang', 'Engineering', 'Information Engineering', '1998-05-05', 'Male', '0987654321', '59010736@kmitl.ac.th'),
(59010748, 'Niwat', 'Jujaroen', 'Engineering', 'Information Engineering', '1997-07-20', 'Male', '0800000000', '59010748@kmitl.ac.th'),
(59010792, 'Papon', 'Prommoon', 'Engineering', 'Information Engineering', '1997-06-30', 'Male', '0888888888', '59010729@kmitl.ac.th'),
(59010940, 'Phattana', 'Wongyuttanapong', 'Engineering', 'Information Engineering', '1998-05-29', 'Male', '092-552419', '59010940@kmitl.ac.th'),
(59011201, 'Waritsara', 'Siriaksorn', 'Engineering', 'Information Engineering', '1997-12-24', 'Female', '081-812324', '59011201@kmitl.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `teachert`
--

CREATE TABLE `teachert` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Major` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachert`
--

REPLACE INTO `teachert` (`ID`, `Fname`, `Lname`, `Faculty`, `Major`, `Birthdate`, `Gender`, `Phone`, `Email`) VALUES
(90000001, 'sutheera', ' puntheeranurak', 'Engineeing', 'information Engineeing', NULL, 'Female', NULL, NULL);

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

REPLACE INTO `webboard` (`QuestionID`, `CreateDate`, `Question`, `Details`, `Name`, `View`, `Reply`) VALUES
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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `teacher_ID` (`teacher_ID`);

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
-- Indexes for table `datedate`
--
ALTER TABLE `datedate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `daytime`
--
ALTER TABLE `daytime`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `eventcalendar`
--
ALTER TABLE `eventcalendar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`),
  ADD KEY `sec` (`sec`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`,`sec`),
  ADD KEY `sec` (`sec`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `User_ID_2` (`ID`),
  ADD KEY `User_ID` (`ID`),
  ADD KEY `User_ID_3` (`ID`);

--
-- Indexes for table `noticemsg`
--
ALTER TABLE `noticemsg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_ID` (`teacher_ID`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`ReplyID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `corusedate_ID` (`coursedate_ID`,`student_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`),
  ADD KEY `course_ID_2` (`course_ID`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`course_ID`),
  ADD KEY `studnet_ID` (`student_ID`),
  ADD KEY `sec` (`sec`);

--
-- Indexes for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `course_ID` (`sec`,`date_date`),
  ADD KEY `sec` (`sec`),
  ADD KEY `date_date` (`date_date`),
  ADD KEY `studentcourse_ID` (`studentcourse_ID`);

--
-- Indexes for table `studenthomework`
--
ALTER TABLE `studenthomework`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `homework_ID` (`homework_ID`,`student_ID`,`date_send`),
  ADD KEY `student_ID` (`student_ID`),
  ADD KEY `date_send` (`date_send`);

--
-- Indexes for table `studentt`
--
ALTER TABLE `studentt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachert`
--
ALTER TABLE `teachert`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`QuestionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `noticemsg`
--
ALTER TABLE `noticemsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `ReplyID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `studentcourse`
--
ALTER TABLE `studentcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `studenthomework`
--
ALTER TABLE `studenthomework`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_ID`) REFERENCES `teachert` (`ID`);

--
-- Constraints for table `coursedate`
--
ALTER TABLE `coursedate`
  ADD CONSTRAINT `coursedate_ibfk_1` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_2` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`),
  ADD CONSTRAINT `coursedate_ibfk_3` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `daytime`
--
ALTER TABLE `daytime`
  ADD CONSTRAINT `daytime_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `coursedate` (`daytime_ID`);

--
-- Constraints for table `homework`
--
ALTER TABLE `homework`
  ADD CONSTRAINT `homework_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `homework_ibfk_2` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`);

--
-- Constraints for table `noticemsg`
--
ALTER TABLE `noticemsg`
  ADD CONSTRAINT `noticemsg_ibfk_1` FOREIGN KEY (`teacher_ID`) REFERENCES `teachert` (`ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`coursedate_ID`) REFERENCES `coursedate` (`ID`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `sec`
--
ALTER TABLE `sec`
  ADD CONSTRAINT `sec_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `studentcourse` (`sec`);

--
-- Constraints for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD CONSTRAINT `studentcourse_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `studentcourse_ibfk_2` FOREIGN KEY (`course_ID`) REFERENCES `course` (`ID`);

--
-- Constraints for table `studentcoursedate`
--
ALTER TABLE `studentcoursedate`
  ADD CONSTRAINT `studentcoursedate_ibfk_1` FOREIGN KEY (`studentcourse_ID`) REFERENCES `studentcourse` (`ID`),
  ADD CONSTRAINT `studentcoursedate_ibfk_2` FOREIGN KEY (`sec`) REFERENCES `sec` (`ID`),
  ADD CONSTRAINT `studentcoursedate_ibfk_3` FOREIGN KEY (`date_date`) REFERENCES `datedate` (`ID`);

--
-- Constraints for table `studenthomework`
--
ALTER TABLE `studenthomework`
  ADD CONSTRAINT `studenthomework_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `studentt` (`ID`),
  ADD CONSTRAINT `studenthomework_ibfk_2` FOREIGN KEY (`homework_ID`) REFERENCES `homework` (`ID`);

--
-- Constraints for table `studentt`
--
ALTER TABLE `studentt`
  ADD CONSTRAINT `studentt_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Constraints for table `teachert`
--
ALTER TABLE `teachert`
  ADD CONSTRAINT `teachert_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
