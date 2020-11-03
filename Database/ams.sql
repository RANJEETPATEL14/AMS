-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `password` varchar(12) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `middlename` varchar(30) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin', 'admin', 'Private', '', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `att_id` bigint(9) NOT NULL,
  `date` varchar(10) NOT NULL,
  `course_id` int(2) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `att` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`att_id`, `date`, `course_id`, `student_id`, `username`, `att`) VALUES
(1, '05/31/2020', 4, '1', '201852001', 1),
(2, '05/31/2020', 4, '2', '201852002', 1),
(3, '05/31/2020', 4, '3', '201852003', 1),
(4, '05/31/2020', 4, '4', '201852025', 1),
(5, '05/23/2020', 1, '1', '201852001', 1),
(6, '05/23/2020', 1, '2', '201852002', 1),
(7, '05/23/2020', 1, '3', '201852003', 1),
(8, '05/23/2020', 1, '4', '201852025', 1),
(9, '05/09/2020', 3, '1', '201852001', 1),
(10, '05/09/2020', 3, '2', '201852002', 1),
(11, '05/09/2020', 3, '3', '201852003', 1),
(12, '05/09/2020', 3, '4', '201852025', 1),
(13, '05/08/2020', 2, '1', '201852001', 1),
(14, '05/08/2020', 2, '2', '201852002', 1),
(15, '05/08/2020', 2, '3', '201852003', 1),
(16, '05/08/2020', 2, '4', '201852025', 1),
(17, '05/01/2020', 5, '1', '201852001', 1),
(18, '05/01/2020', 5, '2', '201852002', 1),
(19, '05/01/2020', 5, '3', '201852003', 1),
(20, '05/01/2020', 5, '4', '201852025', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(6) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(1, 'WEB TECH'),
(2, 'COA'),
(3, 'DBMS'),
(4, 'OS'),
(5, 'System Software');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `firstname`, `lastname`, `password`) VALUES
(1, '201852001', 'AKSHAY', 'SONI', '201852001'),
(2, '201852002', 'Aman', 'Ghumra', '201852002'),
(3, '201852003', 'Amit', 'Kumar', '201852003'),
(4, '201852025', 'RANJEET', 'PATEL', '201852025');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` bigint(11) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `course` varchar(10) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `firstname`, `lastname`, `course`, `password`) VALUES
(3, '201852000', 'Santosh', 'Bharti', 'WEB TECH', '201852000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `att_id` bigint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
