-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 03:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass'),
('mash', 'shetty'),
('mash', 'shetty'),
('thanay', 'tany'),
('mukthesh', 'birwaz');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `sub_code` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`sub_code`, `staff`) VALUES
('18CS31', '123'),
('18CS62', '123'),
('18EC32', '234');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `usnn` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `total` int(100) NOT NULL,
  `attended` int(100) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`usnn`, `sub`, `date`, `total`, `attended`, `percentage`) VALUES
('4dm20cs402', '18CS31', '2022-01-31', 30, 28, 93.3333),
('4dm20cs402', '18CS32', '2022-01-31', 30, 17, 56.6667),
('4dm20cs032', '18IS30', '2022-01-31', 30, 12, 40),
('4dm20cs032', '18CS31', '2022-01-31', 30, 16, 53.3333),
('4dm20cs054', '18CS32', '2022-01-31', 30, 26, 86.6667),
('4dm20cs054', '18CS31', '2022-01-31', 30, 12, 40),
('4dm20cs016', '18EE33', '2022-01-26', 30, 12, 40),
('4dm20cs402', '18CS39', '2022-02-25', 30, 12, 40);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dname` varchar(22) NOT NULL,
  `dno` varchar(10) NOT NULL,
  `hod` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dname`, `dno`, `hod`, `location`) VALUES
('CSE', '1', 'panduranga', '3rd'),
('EC', '2', 'suresh', '2nd'),
('EEE', '3', 'srinivas', '1st'),
('IS', '4', 'mahesh', '4th'),
('MECH', '5', 'venkatesh', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `usssn` varchar(50) NOT NULL,
  `fee` int(20) NOT NULL,
  `paid` int(20) NOT NULL,
  `pending` int(20) NOT NULL,
  `due` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`usssn`, `fee`, `paid`, `pending`, `due`) VALUES
('4dm20cs016', 80000, 50000, 30000, '2022-01-31'),
('4dm20cs032', 80000, 65500, 14500, '2022-01-31'),
('4dm20cs054', 52000, 12000, 40000, '2022-01-31'),
('4dm20cs09', 80000, 80000, 0, '2022-01-31'),
('4dm20cs402', 80000, 50001, 29999, '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `ussn` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`ussn`, `reason`, `amount`, `status`) VALUES
('4dm20cs402', 'mobile inside class', 500, 'unpaid'),
('4dm20cs016', 'smoking', 500, 'unpaid'),
('4dm20cs402', 'smoking', 2000, 'unpaid'),
('4dm20cs09', 'smoking', 500, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `uusn` varchar(50) NOT NULL,
  `scode` varchar(50) NOT NULL,
  `year` int(20) NOT NULL,
  `dno` int(20) NOT NULL,
  `IA1` int(20) NOT NULL,
  `IA2` int(20) NOT NULL,
  `IA3` int(20) NOT NULL,
  `sem` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`uusn`, `scode`, `year`, `dno`, `IA1`, `IA2`, `IA3`, `sem`) VALUES
('4dm20cs402', '18CS31', 5, 1, 30, 0, 0, 0),
('4dm20cs402', '18CS32', 5, 1, 23, 0, 0, 0),
('4dm20cs032', '18CS31', 5, 1, 12, 0, 0, 0),
('4dm20cs032', '18CS32', 5, 1, 30, 0, 0, 0),
('4dm20cs402', '18CS38', 5, 1, 0, 21, 0, 0),
('4dm20cs402', '18CS39', 5, 1, 21, 30, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dno` varchar(10) NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`fname`, `lname`, `gender`, `dno`, `staff_id`, `address`, `phone`, `dob`, `pic`) VALUES
('pandu', 'rao', 'male', '1', '123', 'belvai', '9867543421', '1993-10-10', 'boy-avator.png'),
('venkatesh', 'bhat', 'male', '1', '234', 'andaru', '9867543421', '1991-01-20', 'terrible_designer_avatar-01.jpg'),
('mahesh', 'shetty', 'male', '1', '345', 'karkala', '8765432312', '1987-01-11', 'dummy-profile.png'),
('shashank', 'k', 'male', '2', '435', 'sirsi', '8765432312', '1991-01-26', 'd1b059755ec1986183e8d24846626a33--lee.jpg'),
('chaithra', 'anchan', 'male', '1', '765', 'mysore', '8765432312', '1993-01-22', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dno` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `campusid` int(10) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bloodgrp` varchar(4) NOT NULL,
  `section` varchar(5) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `address`, `gender`, `dno`, `usn`, `campusid`, `mob`, `dob`, `bloodgrp`, `section`, `pic`) VALUES
('hanson', 'fernandis', 'belvai', 'male', '1', '4dm20cs016', 186, '9856348756', '2001-02-01', 'B-', '5', 'dummy-profile.png'),
('nithish', 'prabhu', 'udupi', 'male', '1', '4dm20cs023', 348, '9976453221', '2002-06-05', 'A+', '5', 'dummy-profile.png'),
('yumnan', 'k', 'hostel', 'male', '1', '4dm20cs032', 1124, '9845326754', '2001-10-28', 'A+', '5', 'download.png'),
('vikas', 'r', 'karkala', 'male', '1', '4dm20cs050', 453, '8756321243', '2001-01-20', 'A+', '5', 'boy-avator.png'),
('vishwanath', 'poojary', 'varanga', 'male', '1', '4dm20cs054', 154, '9741994499', '0200-09-01', 'O-', '5', '39241483.png'),
('deviprasad', 'sunil', 'kukkundhur', 'male', '1', '4dm20cs09', 3412, '6578213456', '2001-11-11', 'B', '5', '39241483.png'),
('mash', 'shetty', 'karkala', 'male', '1', '4dm20cs402', 123, '9741104490', '2001-10-28', 'A+', '5', 'PgAPuh58lJSWSPoaLa0WpoAuAjy2-0503zr5.png'),
('shushanth', 'nayak', 'nallur', 'male', '2', '4dm20ec402', 897, '9834216578', '2022-01-31', 'B-', '5', 'images (1).png'),
('charan', 'poojary', 'jodrasthe', 'male', '4', '4dm20is402', 765, '9741104490', '2001-09-22', 'B-', '5', '39241483.png'),
('kaushik', 'f', 'karkala', 'male', '5', '4dm20me050', 176, '9741104494', '2000-01-04', 'B', '5', 'd1b059755ec1986183e8d24846626a33--lee.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subname` varchar(50) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `tot_hours` int(20) NOT NULL,
  `year` int(10) NOT NULL,
  `theory` int(10) NOT NULL,
  `practical` int(10) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `dnum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subname`, `subcode`, `tot_hours`, `year`, `theory`, `practical`, `sem`, `dnum`) VALUES
('DAA', '18CS31', 70, 5, 100, 0, '5', '1'),
('OS', '18CS32', 70, 3, 100, 0, '5', '1'),
('ADP', '18CS38', 70, 5, 100, 0, '5', '1'),
('ADE', '18CS39', 70, 5, 100, 0, '5', '1'),
('ELECTRICAL', '18EC32', 62, 2, 100, 0, '5', '2'),
('EOC', '18EE31', 76, 3, 100, 0, '5', '3'),
('microcontroller', '18EE33', 70, 5, 100, 0, '5', '3'),
('DAA', '18IS30', 60, 3, 100, 0, '5', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`sub_code`),
  ADD KEY `assign_ibfk_1` (`staff`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `attendance_ibfk_1` (`usnn`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`usssn`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD KEY `ussn` (`ussn`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `marks_ibfk_1` (`scode`),
  ADD KEY `uusn` (`uusn`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_ibfk_1` (`dno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subcode`),
  ADD KEY `subjects_ibfk_1` (`dnum`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`staff`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`usnn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`usssn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fine`
--
ALTER TABLE `fine`
  ADD CONSTRAINT `fine_ibfk_1` FOREIGN KEY (`ussn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`uusn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`dnum`) REFERENCES `department` (`dno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
