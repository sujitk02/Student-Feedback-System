-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 08:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(5, 'sujit', 'sujeetkhandare800@gmail.com', 7420969116, 'nothing', '2021-05-01 17:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `semester`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(1, 'Mrs.1234', 'Mrs.A.V.Chechare', 'EST-22447', 'Third Year', 'v', 'avchechare@gmail.com', 'avchechare', 1234567890, '2021-05-19 09:20:42', 0),
(2, 'Mr.R1234', 'Mr.R.N.Jangle', 'OSY-22516,ACN-22520,NIS-22620', 'Third Year', 'vi', 'rnjangle@gmail.com', 'rnjangle', 1234567890, '2021-05-19 09:22:59', 0),
(3, 'Mr.G1234', 'Mr.G.U.Jadhav', 'AJP-22517,WBP-22619', 'Third Year', 'vi', 'gujadhav@gmail.com', 'gujadhav', 1234567890, '2021-05-19 09:25:07', 0),
(4, 'Mrs.1234', 'Mrs.A.H.Jadhav', 'STE-22518', 'Third Year', 'v', 'ahjadhav@gmail.com', 'ahjadhav', 1234567890, '2021-05-19 09:26:44', 0),
(5, 'Mrs.1234', 'Mrs.D.N.Bhoye', 'CSS-22519,ETI-22618,EDE-22032', 'Third Year', 'vi', 'dnbhoye@gmail.com', 'dnbhoye', 1234567890, '2021-05-19 09:28:10', 0),
(6, 'Mr.A1234', 'Mr.A.M.Vaidya', 'MGT-22509', 'Third Year', 'vi', 'amvaidya@gmail.com', 'amvaidya', 1234567890, '2021-05-19 09:29:51', 0),
(7, 'Ms.A1234', 'Ms.A.V.Wankar', 'PWP-22616', 'Third Year', 'vi', 'avwankar@gmail.com', 'avwankar', 1234567890, '2021-05-19 09:31:48', 0),
(8, 'Mr.P1234', 'Mr.P.T.Zunjare', 'MAD-22617', 'Third Year', 'vi', 'ptzunjare@gmail.com', 'ptzunjare', 1234567890, '2021-05-19 09:33:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `ques1` enum('5','4','3','2','1') NOT NULL,
  `ques2` enum('5','4','3','2','1') NOT NULL,
  `ques3` enum('5','4','3','2','1') NOT NULL,
  `ques4` enum('5','4','3','2','1') NOT NULL,
  `ques5` enum('5','4','3','2','1') NOT NULL,
  `ques6` enum('5','4','3','2','1') NOT NULL,
  `ques7` enum('5','4','3','2','1') NOT NULL,
  `ques8` enum('5','4','3','2','1') NOT NULL,
  `ques9` enum('5','4','3','2','1') NOT NULL,
  `ques10` enum('5','4','3','2','1') NOT NULL,
  `ques11` enum('5','4','3','2','1') NOT NULL,
  `ques12` enum('5','4','3','2','1') NOT NULL,
  `ques13` text NOT NULL,
  `ques14` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `student_id`, `faculty_id`, `subject`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `date`) VALUES
(34, 'Rushi Palkar', 'ruship@gmail.com', 'dnbhoye@gmail.com', 'CSS-22519', '5', '4', '5', '3', '4', '3', '4', '3', '4', '3', '4', '4', '\r\nsafas', 'ADasd\r\n', '2021-05-20'),
(35, 'Rushi Palkar', 'ruship@gmail.com', 'gujadhav@gmail.com', 'AJP-22517', '5', '4', '1', '5', '4', '5', '4', '5', '4', '5', '5', '4', 'aeste\r\n', 'sADF\r\n', '2021-05-20'),
(36, 'Rushi Palkar', 'ruship@gmail.com', 'dnbhoye@gmail.com', 'EDE-22032', '5', '4', '5', '5', '4', '5', '4', '5', '4', '5', '5', '4', '\r\nsegd', 'ASFf\r\n', '2021-05-20'),
(37, 'Rushi Palkar', 'ruship@gmail.com', 'dnbhoye@gmail.com', 'ETI-22618', '5', '4', '5', '4', '3', '2', '5', '4', '2', '1', '5', '3', '\r\nhjfg', 'dfhg\r\n', '2021-06-03'),
(38, 'sujeet khandare', 'sujeetk@gmail.com', 'dnbhoye@gmail.com', 'ETI-22618', '2', '5', '3', '1', '5', '3', '5', '3', '5', '3', '4', '5', '\r\nsrsgdf', 'dszgh\r\n', '2021-06-03'),
(39, 'sujeet khandare', 'sujeetk@gmail.com', 'dnbhoye@gmail.com', 'EDE-22032', '5', '4', '5', '4', '4', '5', '4', '4', '5', '4', '5', '4', 'asdfgsedgsDSg\r\n', 'shgf', '2021-06-03'),
(40, 'sujeet khandare', 'sujeetk@gmail.com', 'gujadhav@gmail.com', 'WBP-22619', '5', '4', '5', '5', '4', '5', '4', '5', '4', '5', '5', '4', '\r\ndfhdfhj', 'sdgr\r\n', '2021-06-03'),
(41, 'Siddheshwar Khandare', 'sidhu@gmail.com', 'dnbhoye@gmail.com', 'ETI-22618', '3', '4', '5', '4', '5', '4', '5', '4', '5', '4', '5', '4', '\r\ndzfhdf', 'sdgdf\r\n', '2021-06-03'),
(42, 'Sandip Gavande', 'sandip@gmail.com', 'dnbhoye@gmail.com', 'ETI-22618', '5', '4', '5', '4', '5', '3', '2', '1', '3', '4', '2', '3', 'sdgfsdc\r\n', '\r\nsdfsd', '2021-06-03'),
(43, 'sujeet khandare', 'sujeetk@gmail.com', 'dnbhoye@gmail.com', 'CSS-22519', '5', '4', '3', '2', '3', '5', '4', '3', '2', '3', '5', '2', 'asfsdfs', 'dsghdf\r\n', '2021-06-06'),
(44, 'sujeet khandare', 'sujeetk@gmail.com', 'gujadhav@gmail.com', 'AJP-22517', '5', '3', '4', '2', '1', '5', '3', '4', '2', '4', '4', '3', 'sdfgdfg\r\n', 'estestdf\r\n', '2021-06-06'),
(45, 'Sandip Gavande', 'sandip@gmail.com', 'dnbhoye@gmail.com', 'CSS-22519', '5', '3', '2', '1', '4', '5', '3', '1', '4', '2', '5', '3', 'dfgg\r\n', 'ukhmng\r\n', '2021-06-06'),
(46, 'Sandip Gavande', 'sandip@gmail.com', 'dnbhoye@gmail.com', 'EDE-22032', '5', '3', '5', '2', '5', '3', '5', '4', '2', '1', '4', '1', 'sdgdg\r\n', 'sdgdfh\r\n', '2021-06-06'),
(47, 'Sandip Gavande', 'sandip@gmail.com', 'gujadhav@gmail.com', 'AJP-22517', '5', '3', '2', '4', '3', '5', '3', '2', '4', '2', '5', '3', 'xdcvfch\r\n', 'xfhfcjhcfvx\r\n', '2021-06-06'),
(48, 'Sandip Gavande', 'sandip@gmail.com', 'gujadhav@gmail.com', 'WBP-22619', '5', '3', '2', '5', '3', '5', '3', '5', '3', '2', '5', '4', 'dxgdgj\r\n', 'uljyuoy\r\n', '2021-06-06'),
(49, 'Siddheshwar Khandare', 'sidhu@gmail.com', 'dnbhoye@gmail.com', 'CSS-22519', '2', '5', '4', '4', '5', '3', '4', '2', '4', '5', '4', '5', 'fhfdhth', 'sadfshd;\r\n', '2021-06-06'),
(50, 'Siddheshwar Khandare', 'sidhu@gmail.com', 'dnbhoye@gmail.com', 'EDE-22032', '1', '2', '1', '4', '2', '5', '3', '1', '2', '1', '4', '1', 'vczvdshj', 'uyryui\r\n', '2021-06-06'),
(51, 'Siddheshwar Khandare', 'sidhu@gmail.com', 'gujadhav@gmail.com', 'AJP-22517', '5', '3', '4', '2', '4', '2', '4', '5', '1', '4', '5', '4', 'sdfdsfg\r\n', 'asfsdf\r\n', '2021-06-06'),
(52, 'Siddheshwar Khandare', 'sidhu@gmail.com', 'gujadhav@gmail.com', 'WBP-22619', '3', '3', '1', '5', '5', '3', '4', '5', '3', '4', '4', '3', 'egterg\r\n', 'dgdfgh\r\n', '2021-06-06'),
(53, 'Rushi Palkar', 'ruship@gmail.com', 'gujadhav@gmail.com', 'WBP-22619', '5', '3', '5', '4', '3', '5', '3', '4', '3', '5', '4', '2', 'argyg\r\n', 'asyjaX\r\n', '2021-06-06'),
(54, '', '', 'gujadhav@gmail.com', 'WBP-22619', '5', '3', '2', '5', '3', '5', '3', '5', '3', '2', '5', '4', 'dxgdgj\r\n', 'uljyuoy\r\n', '2021-06-06'),
(55, 'sujeet khandare', 'sujeetk@gmail.com', 'avwankar@gmail.com', 'PWP-22616', '5', '3', '4', '5', '4', '5', '4', '3', '4', '4', '5', '4', 'Python is easy\r\n', 'usdius\r\n', '2021-06-07'),
(56, 'Rushi Palkar', 'ruship@gmail.com', 'avwankar@gmail.com', 'PWP-22616', '5', '4', '3', '5', '4', '5', '4', '5', '3', '1', '4', '5', 'oiouiouio\r\n', 'oiyuoiyh\r\n', '2021-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(8, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2021-04-13 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` varchar(11) NOT NULL,
  `facultyid` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `facultyid`, `sub_name`) VALUES
('1', 'avchechare@gmail.com', 'EST-22447'),
('2', 'rnjangle@gmail.com', 'OSY-22516'),
('3', 'rnjangle@gmail.com', 'ACN-22520'),
('4', 'rnjangle@gmail.com', 'NIS-22620'),
('5', 'gujadhav@gmail.com', 'AJP-22517'),
('6', 'gujadhav@gmail.com', 'WBP-22619'),
('7', 'ahjadhav@gmail.com', 'STE-22518'),
('8', 'dnbhoye@gmail.com', 'CSS-22519'),
('9', 'dnbhoye@gmail.com', 'ETI-22618'),
('10', 'dnbhoye@gmail.com', 'EDE-22032'),
('11', 'amvaidya@gmail.com', 'MGT-22509'),
('12', 'avwankar@gmail.com', 'PWP-22616'),
('13', 'ptzunjare@gmail.com', 'MAD-22617');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `programme`, `semester`, `gender`, `hobbies`, `image`, `dob`, `regid`, `date`) VALUES
(16, 'sujeet khandare', 'sujeetk@gmail.com', '1f2bc24832dd3bb4d624c8074e1c9881', 7420969116, 'Third Year', 'vi', 'm', 'reading,singin', 'faculty.png', '2001-02-02', '1711620142', ''),
(17, 'Rushi Palkar', 'ruship@gmail.com', 'eb4fcac30a12596187ad6f4aab529ddf', 1234567890, 'Third Year', 'v', 'm', 'reading,playing', 'download (1).jpg', '2001-05-17', '1711620156', '2021-05-19 10:02:48'),
(18, 'Siddheshwar Khandare', 'sidhu@gmail.com', '401b6b737c9bca2656b82604f7b1d607', 9067370064, 'Third Year', 'vi', 'm', 'reading,singin,playing', 'download1.jpg', '2002-05-23', '1811620065', '2021-06-03 13:17:51'),
(19, 'Sandip Gavande', 'Sandip@gmail.com', '2cb6f36ec7f3b88d5574c78a31ccecd5', 9560221588, 'Third Year', 'vi', 'm', 'reading,singin', 'images (1).jpg', '2001-04-19', '1711620136', '2021-06-03 13:21:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub__id` (`subject`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
