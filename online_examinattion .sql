-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 04:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examinattion`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `c_date`) VALUES
(1, 'Computer science', '2018-10-12 09:50:03'),
(2, 'Finance', '2018-10-12 13:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `class_id`, `lecture_id`, `c_date`) VALUES
(1, 'MUSIC abc', 0, 15, '2018-10-11 07:29:41'),
(2, 'DRUM ezpk', 5, 15, '2018-10-11 07:40:45'),
(4, 'kk', 5, 15, '2018-10-11 08:32:28'),
(5, 'bakk', 5, 15, '2018-10-11 08:35:29'),
(6, 'Machine Learning', 4, 18, '2018-10-11 15:32:42'),
(7, 'C++', 1, 19, '2018-10-11 15:33:48'),
(8, 'Java OOP', 1, 19, '2018-10-11 20:04:13'),
(9, 'ARDUINO', 4, 18, '2018-10-11 20:04:40'),
(10, 'Distributed Computer', 1, 21, '2018-10-12 09:51:55'),
(11, 'Calculus', 1, 15, '2018-10-13 15:09:56'),
(12, 'DATA MINING', 1, 15, '2018-10-13 15:10:26'),
(13, 'Wireless and Mobile', 1, 15, '2018-10-13 15:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_subject` varchar(200) NOT NULL,
  `nb_question` int(11) NOT NULL DEFAULT '10',
  `course_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_subject`, `nb_question`, `course_id`, `c_date`) VALUES
(1, 'Distributed', 10, 10, '2018-10-12 09:55:52'),
(2, 'Dist_Exam_Fat', 10, 10, '2018-10-12 12:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `pass_exam`
--

CREATE TABLE `pass_exam` (
  `pass_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `response` longtext NOT NULL,
  `result` int(11) NOT NULL,
  `pass_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_exam`
--

INSERT INTO `pass_exam` (`pass_id`, `exam_id`, `student_id`, `question_id`, `response`, `result`, `pass_date`) VALUES
(1, 1, 22, 1, '12', 100, '2018-10-12 09:56:53'),
(2, 1, 22, 1, '0', 0, '2018-10-12 10:00:06'),
(3, 1, 22, 1, '5', 0, '2018-10-12 11:24:13'),
(4, 2, 24, 2, '47', 0, '2018-10-12 12:54:09'),
(5, 2, 24, 2, '47', 0, '2018-10-12 13:29:33'),
(6, 0, 24, 0, '', 100, '2018-10-12 20:37:19'),
(7, 0, 24, 0, '', 100, '2018-10-12 20:39:58'),
(8, 0, 24, 0, '', 100, '2018-10-12 20:43:32'),
(9, 0, 24, 0, '', 100, '2018-10-12 20:44:58'),
(10, 0, 24, 0, '', 100, '2018-10-12 20:48:15'),
(11, 0, 24, 0, '', 100, '2018-10-12 20:49:40'),
(12, 0, 24, 0, '', 100, '2018-10-12 20:51:06'),
(13, 0, 24, 0, '', 100, '2018-10-12 20:51:37'),
(14, 0, 24, 0, '', 100, '2018-10-12 20:52:05'),
(15, 0, 24, 0, '', 100, '2018-10-12 20:52:22'),
(16, 0, 24, 0, '', 100, '2018-10-12 20:55:19'),
(17, 0, 24, 0, '', 100, '2018-10-12 20:56:07'),
(18, 0, 24, 0, '', 100, '2018-10-12 20:57:38'),
(19, 0, 24, 0, '', 100, '2018-10-12 20:58:07'),
(20, 0, 24, 0, '', 100, '2018-10-12 20:59:24'),
(21, 0, 24, 0, '', 100, '2018-10-12 21:00:08'),
(22, 0, 24, 0, '', 100, '2018-10-12 21:00:26'),
(23, 0, 24, 0, '', 100, '2018-10-12 21:00:41'),
(24, 0, 24, 0, '', 100, '2018-10-12 21:01:00'),
(25, 0, 24, 0, '', 100, '2018-10-12 21:01:40'),
(26, 0, 24, 0, '', 100, '2018-10-12 21:02:00'),
(27, 0, 24, 0, '', 100, '2018-10-12 21:02:39'),
(28, 0, 24, 0, '', 100, '2018-10-12 21:27:08'),
(29, 0, 24, 0, '', 100, '2018-10-12 21:29:56'),
(30, 0, 24, 0, '', 100, '2018-10-12 21:30:50'),
(31, 0, 24, 0, '', 100, '2018-10-12 21:32:40'),
(32, 0, 24, 0, '', 100, '2018-10-12 21:35:02'),
(33, 0, 24, 0, '', 100, '2018-10-12 21:36:20'),
(34, 0, 24, 0, '', 100, '2018-10-12 21:37:55'),
(35, 0, 24, 0, '', 100, '2018-10-12 21:38:32'),
(36, 0, 24, 0, '', 100, '2018-10-12 21:42:44'),
(37, 0, 24, 0, '', 100, '2018-10-12 21:43:36'),
(38, 0, 24, 0, '', 100, '2018-10-12 21:44:00'),
(39, 0, 24, 0, '', 100, '2018-10-12 21:44:36'),
(40, 0, 24, 0, '', 100, '2018-10-12 21:46:48'),
(41, 0, 24, 0, '', 100, '2018-10-13 15:01:10'),
(42, 0, 24, 0, '', 100, '2018-10-13 15:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `p_answ` int(11) NOT NULL,
  `q_date` datetime DEFAULT NULL,
  `as1` text NOT NULL,
  `as2` text NOT NULL,
  `as3` text NOT NULL,
  `as4` varchar(200) NOT NULL DEFAULT 'None',
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `exam_id`, `question`, `p_answ`, `q_date`, `as1`, `as2`, `as3`, `as4`, `test_id`) VALUES
(1, 1, 'Define a distributed', 12, '2018-10-12 09:55:52', '0', '12', '5', '45', 0),
(2, 2, 'Define the term Dist?', 1, '2018-10-12 12:51:12', '47', '45', '1', '85', 0),
(3, 4, 'pux', 4, NULL, 'hhh', 'kk', 'yy', 'oo', 1),
(4, 13, 'What is a wireless Network?', 0, NULL, 'It is a connection of devices without a wire intervention.', 'It is 4g network.', 'It is a kind of communication.', 'All above.', 1),
(5, 13, 'hhh', 0, NULL, 'hhhuuu', 'o', 'y', 'c', 2),
(6, 0, 'FF', 0, NULL, 'DD', 'EE', 'G', 'HH', 2),
(7, 13, 'HH', 0, NULL, 'HHYY', 'UU', 'II', 'OO', 2),
(8, 13, 'RR', 0, NULL, 'OO', 'LL', 'MM', 'NN', 2),
(9, 13, '445YY', 0, NULL, 'II', 'RR', 'OO', 'KK', 2),
(10, 13, 'kk', 0, NULL, 'kkkuu', 'jjj', 'hhh', 'gg', 2),
(11, 13, 'mm', 0, NULL, 'ggg', 'll', 'kk', 'uuu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `Name`) VALUES
(1, 'FAT'),
(2, 'CAT2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `names` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(110) NOT NULL,
  `c_date` datetime NOT NULL,
  `photoprofile` varchar(200) NOT NULL DEFAULT 'img/u.png',
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `names`, `email`, `phone`, `status`, `category_id`, `pin`, `password`, `c_date`, `photoprofile`, `class_id`) VALUES
(1, 'Oly', 'olivier@gmail.com', '0786618405', 1, 1, 1, '12345678', '2018-10-24 00:00:00', 'img/how.png', 0),
(15, 'Patrick', 'patrickrockman@gmail.com', '0788352314', 1, 2, 0, '12345678', '2018-10-12 12:48:32', 'img/jdedieu.jpg', 1),
(24, 'Steven', 'steven@yahoo.fr', '454545454', 1, 3, 0, '12345678', '2018-10-12 12:52:46', 'img/xfcbbbbbbb.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `pass_exam`
--
ALTER TABLE `pass_exam`
  ADD PRIMARY KEY (`pass_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pass_exam`
--
ALTER TABLE `pass_exam`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
