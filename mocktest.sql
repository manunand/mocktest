-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 01:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mocktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `gender`, `branch`, `desig`, `email`, `phone`, `address`) VALUES
(1, 'Ranga', 'Male', 'ECE', 'HOD', 'range@gmail.com', '9686238503', 'bangalore'),
(6, 'Anand Kammar', 'Male', 'CSE', 'HOD', 'rc.anandkammar@gmail.com', '7204993889', 'Karajaga');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`id`, `username`, `password`, `privilege`) VALUES
(6, 'admin', 'password', 1),
(1, 'ranga', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) NOT NULL,
  `que_desc` varchar(250) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'What is the preferred way for adding a background color in HTML?', '<body background="yellow"> ', '<background>yellow</background> ', '< body style="background-color:yellow">', '<background color="yellow">text<background>', 3),
(2, 1, 'Which of these tags are all <table> tags?', '<table><head><tfoot> ', '<table><tr><td>', '<table><tr><tt>', '<thead><body><tr>', 2),
(3, 2, 'Which of the following function sets first n characters of a string to a given character?', 'strinit()', 'strnset()', 'strset()', 'strcset()', 2),
(4, 2, ' What will be the output of following program ?\r\n\r\n#include <stdio.h>\r\nvoid main(){\r\n    int a=0;\r\n    a=5||2|1;\r\n    printf("%d",a);\r\n}', '1', '7', '0', '8', 1),
(5, 2, ' What will be the output?\r\nint main()\r\n{\r\n	int a=34;\r\n	printf("%d %i %p %n",a,a,a,a);\r\n	return 0;\r\n}', '34 34 00 22', 'compilation error', '34', 'None of these.', 2),
(6, 2, 'What the below code prints.\r\n#include<stdio.h>\r\nint main()\r\n{\r\n      return 0;\r\n      printf("hello");\r\n}', 'hello', 'Hello', 'Gives error', 'it prints nothing', 4),
(7, 6, 'How constructor can be used for a servlet?', 'Initialization', 'Constructor function', 'Initialization and Constructor function', 'Setup() method', 3),
(8, 6, 'Which of the following code is used to get an attribute in a HTTP Session object in servlets?', 'session.getAttribute(String name)', 'session.alterAttribute(String name)', 'session.updateAttribute(String name)', 'session.setAttribute(String name)', 1),
(9, 6, 'Which method is used to get three-letter abbreviation for locale’s country in servlets?', 'Request.getISO3Country()', 'Locale.getISO3Country()', 'Response.getISO3Country()', 'Local.retrieveISO3Country()', 1),
(10, 6, 'Which of the following code retrieves the body of the request as binary data?', 'DataInputStream data = new InputStream()', 'DataInputStream data = response.getInputStream()', 'DataInputStream data = request.getInputStream()', 'DataInputStream data = request.fetchInputStream()', 3),
(11, 7, 'gcv hzsdchj azsv fgkjhvgjah zsjhv', 'jhbg xsja', 'jhg hjg', ' jhgbj khg', 'jhg jyhbguiy', 2),
(12, 7, 'hb sjkhdbjhk sbJHfc j', 'bnhd shbg', 'kjh bgkjh g', 'b jkhgbiju', 'jk hbjk ujhgb', 2),
(13, 7, 'zxsdfj ghjkgbs zkjbkjiusf hg bsdgb', 'jhbgsdf hjgbsdhji', 'jhy gjhg j', 'uyhygjhg', 'g jhvhjg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `reg_no` varchar(10) NOT NULL,
  `test_id` int(5) NOT NULL,
  `test_date` date NOT NULL,
  `correct_answers` int(4) NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`reg_no`, `test_id`, `test_date`, `correct_answers`, `score`) VALUES
('1234', 2, '2020-03-03', 3, 75),
('179cs13002', 2, '2020-03-03', 3, 75),
('179cs13002', 1, '2020-03-03', 2, 100),
('32', 2, '2020-03-03', 0, 0),
('179cs17011', 2, '2020-03-04', 3, 75),
('179cs17011', 1, '2020-03-04', 1, 50),
('179cs17011', 6, '2020-03-09', 0, 0),
('1234', 6, '2020-03-09', 3, 75),
('1234', 7, '2020-04-05', 2, 67),
('179cs17011', 7, '2020-08-07', 1, 33),
('179cs17011', 7, '2020-08-07', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `year_join` int(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `name`, `gender`, `branch`, `year_join`, `phone`, `email`, `address`) VALUES
('1234', 'sdhg', 'Female', 'CVIL', 3454, '3563456', 'fdhg@sb.b', 'DSXHFAS'),
('179cs13002', 'anand', 'Male', 'CSE', 2013, '3253', 're@gmail.com', 'jghftiyu'),
('179cs17011', 'Nikhil Kurane', 'Male', 'CSE', 2016, '3452', 're@gmail.com', 'dxfg zsb dfhkbsd'),
('32', 'ravi', 'Male', 'CSE', 22, '9686238503', 're@gmail.com', 'hassan');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `reg_no` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`reg_no`, `username`, `password`, `privilege`) VALUES
('1234', 'abcd', '123', 1),
('179cs13002', 'anand', 'adi', 1),
('32', 'asdf', '12', 1),
('179cs17011', 'nikhil', 'kurane', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`sub_id`, `sub_name`) VALUES
(8, 'accountancy'),
(7, 'Advance Java'),
(2, 'c programming'),
(6, 'C++ Programming'),
(3, 'Data structure'),
(5, 'java'),
(4, 'sql'),
(9, 'szdfv'),
(1, 'web programming');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `test_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `sub_id`, `test_name`, `test_status`) VALUES
(1, 1, 'mock test', 3),
(2, 2, 'Basics of c', 3),
(3, 3, 'Basics of Data structure', 1),
(4, 4, 'Basic sql queries', 2),
(5, 6, 'Basics of C++ ', 3),
(6, 7, 'basics of advance java', 1),
(7, 8, 'basics of accountancy', 2),
(8, 9, 'sdzfvbvbh', 3),
(9, 9, 'ababab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `reg_no` varchar(10) NOT NULL,
  `test_id` int(5) NOT NULL,
  `que_id` int(5) NOT NULL,
  `true_ans` int(1) NOT NULL,
  `given_ans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`reg_no`, `test_id`, `que_id`, `true_ans`, `given_ans`) VALUES
('1234', 2, 3, 2, 2),
('1234', 2, 4, 1, 1),
('1234', 2, 5, 2, 2),
('1234', 2, 6, 4, 3),
('179cs13002', 2, 3, 2, 2),
('179cs13002', 2, 4, 1, 1),
('179cs13002', 2, 5, 2, 2),
('179cs13002', 2, 6, 4, 2),
('179cs13002', 1, 1, 3, 3),
('179cs13002', 1, 2, 2, 2),
('32', 2, 3, 2, 1),
('32', 2, 4, 1, 2),
('32', 2, 5, 2, 3),
('32', 2, 6, 4, 3),
('179cs17011', 2, 3, 2, 2),
('179cs17011', 2, 4, 1, 1),
('179cs17011', 2, 5, 2, 2),
('179cs17011', 2, 6, 4, 3),
('179cs17011', 1, 1, 3, 4),
('179cs17011', 1, 2, 2, 2),
('179cs17011', 6, 7, 3, 1),
('179cs17011', 6, 8, 1, 2),
('179cs17011', 6, 9, 1, 4),
('179cs17011', 6, 10, 3, 4),
('1234', 6, 7, 3, 3),
('1234', 6, 8, 1, 1),
('1234', 6, 9, 1, 1),
('1234', 6, 10, 3, 2),
('1234', 7, 11, 2, 2),
('1234', 7, 12, 2, 2),
('1234', 7, 13, 2, 1),
('179cs17011', 7, 11, 2, 3),
('179cs17011', 7, 12, 2, 2),
('179cs17011', 7, 13, 2, 1),
('179cs17011', 7, 11, 2, 0),
('179cs17011', 7, 12, 2, 0),
('179cs17011', 7, 13, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`que_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `reg_no` (`reg_no`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `sub_name` (`sub_name`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `que_id` (`que_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD CONSTRAINT `faculty_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `tests` (`test_id`);

--
-- Constraints for table `student_login`
--
ALTER TABLE `student_login`
  ADD CONSTRAINT `student_login_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject_list` (`sub_id`);

--
-- Constraints for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `user_answer_ibfk_2` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_answer_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `tests` (`test_id`),
  ADD CONSTRAINT `user_answer_ibfk_4` FOREIGN KEY (`que_id`) REFERENCES `questions` (`que_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
