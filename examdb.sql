-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 05:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'anh', 'chinh'),
(3, 'anh', 'chinh');

-- --------------------------------------------------------

--
-- Table structure for table `exam_for_user`
--

CREATE TABLE `exam_for_user` (
  `id` int(5) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `time_do_exam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_for_user`
--

INSERT INTO `exam_for_user` (`id`, `exam`, `time_do_exam`) VALUES
(5, 'listen', '1'),
(6, 'reading', '1'),
(11, 'speaking1', '2'),
(12, 'speaking2', '3'),
(13, 'speaking17', '4'),
(14, 'reading2', '5'),
(15, 'php', '1');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `username`, `email`, `exam`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(1, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-08'),
(2, 'linhttm', '', 'listen', '5', '5', '0', '2020-06-08'),
(3, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-08'),
(4, 'chinhtb', '', 'listen', '5', '2', '3', '2020-06-08'),
(5, 'linhttm', '', 'listen', '5', '4', '1', '2020-06-08'),
(6, 'linhttm', '', 'speaking1', '2', '1', '1', '2020-06-08'),
(7, 'linhttm', '', 'reading', '2', '1', '1', '2020-06-08'),
(8, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(9, 'linhttm', '', 'listen', '5', '2', '3', '2020-06-09'),
(10, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(11, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(12, 'linhttm', '', 'listen', '5', '0', '5', '2020-06-09'),
(13, 'linhttm', '', 'reading', '2', '0', '2', '2020-06-09'),
(14, 'linhttm', '', 'reading', '2', '0', '2', '2020-06-09'),
(15, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-10'),
(16, 'chinhtb', '', 'listen', '5', '1', '4', '2020-06-10'),
(17, 'linhttm', '', 'listen', '5', '2', '3', '2020-06-10'),
(18, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-10'),
(19, 'chinhtb', '', 'listen', '5', '0', '5', '2020-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `exam`) VALUES
(32, '1', 'what is your name ?', 'Chinh', 'LINH', 'LINH', 'LINH', 'Chinh', 'listen'),
(33, '2', 'what is your name?', 'c', 'a', 'a', 'a', 'c', 'listen'),
(34, '3', 'what is your name ?', 'chinh', 'linh', 'chung', 'trinh', 'linh', 'listen'),
(35, '4', 'what is A', 'image_question/aa3e9af3cba11904cc37cc383df283f4a.PNG', 'image_question/aa3e9af3cba11904cc37cc383df283f4bPNG.PNG', 'image_question/aa3e9af3cba11904cc37cc383df283f46aa15c7ec9b1c5b0dcb2a87006ebde7ec.PNG', 'image_question/aa3e9af3cba11904cc37cc383df283f43ff1a4158071326073801649e9b860a4d.PNG', 'image_question/aa3e9af3cba11904cc37cc383df283f4a.PNG', 'listen'),
(36, '5', 'what is A', 'image_question/1e7d025349d14475ffa7d1a45de7663ba.PNG', 'image_question/1e7d025349d14475ffa7d1a45de7663bbPNG.PNG', 'image_question/1e7d025349d14475ffa7d1a45de7663b6aa15c7ec9b1c5b0dcb2a87006ebde7ec.PNG', 'image_question/1e7d025349d14475ffa7d1a45de7663b3ff1a4158071326073801649e9b860a4d.PNG', 'image_question/1e7d025349d14475ffa7d1a45de7663ba.PNG', 'listen'),
(37, '1', 'what is your name ?', 'Chinh', 'Linh', 'Trinh', 'Chung', 'Chinh', 'reading'),
(38, '2', 'what is your name ?', 'Chinh', 'Linh', 'Trinh', 'Chung', 'Chinh', 'reading'),
(39, '1', '2+1+2 = ?', '2', '3', '4', '5', '5', 'speaking1'),
(40, '2', '2+1+2 = ?', '2', '3', '4', '5', '5', 'speaking1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'tr??ng', 'chính', 'chinhtb', 'anhchinh123', 'truongbachinh205', 'anhhhh'),
(2, 'trương', 'chính', 'ngoclinh8c', 'anhchinh123', 'truongbachinh205', 'anhhhh'),
(3, 'ad', 'chính', 'chinhtbc', 'anhchinh123', 'phongvan19201@gmail.com', '0965560564'),
(4, 'trương', 'chính', 'anhanhhc123', 'anhchinh123', 'truongbachinh205', '1234556'),
(5, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(5) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`) VALUES
(9, 'aaaa'),
(10, 'av');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `address`) VALUES
(3, 'anh', 'anh', 'anhanhhc', 'anhanh', 'aaa', '0', 'aaa'),
(4, 'trương', 'chính', 'chinhtb', '123456', 'truongbachinh205', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(5, 'trương', 'chính', 'chinhtbaaav', '123456', 'chinhtbgch17527@fpt.edu.vn', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(7, 'trương', 'chính', 'chinhtbhc', '123456', 'anhchinhhc12@gmail.com', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(8, 'trương', 'chính', 'chinhtb000', '123456', '', '0965560564', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(9, 'trương', 'chính', 'ngoclinh8caaa', 'anh123', 'anhchinhhc12@gmail.com', '', ''),
(10, 'trương', 'chính', 'admindd', 'anh123', 'anhanhpham99@gmail.com', '', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(12, 'ad', 'ad', 'admin', 'admin', '', '', ''),
(13, 'Trần Thị', 'Mỹ Linh', 'linhttm', 'linhttm', 'linhttm@fpt.edu.vn', '0332565795', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên'),
(14, 'trương', 'chính', 'asd', 'asd', 'asd', '', 'kí túc xá mỹ đình, đường hàm nghi quận nam từ liên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_for_user`
--
ALTER TABLE `exam_for_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_for_user`
--
ALTER TABLE `exam_for_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
