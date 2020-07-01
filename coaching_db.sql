-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 05:06 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coaching_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coaching`
--

CREATE TABLE IF NOT EXISTS `tbl_coaching` (
  `registration_id` varchar(20) NOT NULL DEFAULT '',
  `c_name` varchar(150) DEFAULT NULL,
  `c_address` varchar(80) DEFAULT NULL,
  `c_contact_no` varchar(13) DEFAULT NULL,
  `c_mobile` varchar(10) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `est_year` int(4) DEFAULT NULL,
  `c_password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`registration_id`),
  UNIQUE KEY `url` (`url`),
  UNIQUE KEY `c_email` (`c_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coaching`
--

INSERT INTO `tbl_coaching` (`registration_id`, `c_name`, `c_address`, `c_contact_no`, `c_mobile`, `url`, `c_email`, `est_year`, `c_password`, `role`, `Date_time`) VALUES
('123456', 'target', 'm.p nagar bhopal', '7879364862', '7879364863', 'www.target.com', 'target@gmail.com', 2016, '81dc9bdb52d04dc20036dbd8313ed055', 'Coaching', '0000-00-00 00:00:00'),
('123457', 'made easy', 'ISbti', '07552030401', '8517943958', 'www.mdz.com', 'vinay@gmail.com', 2017, '9996535e07258a7bbfd8b132435c5962', 'Coaching', '0000-00-00 00:00:00'),
('123459', 'sai coaching', 'buit university', '6568435355', '7788995546', 'www.sai.com', 'durga@123', 2018, '8e3308c853e47411c761429193511819', 'Coaching', '0000-00-00 00:00:00'),
('321208', 'Success Coaching', 'Saket nagar habibganj bhopal m.p. ', '07552030401', '8517943953', 'www.success.co.edu.in', 'durgajaiswal1998@gmail.com', 2014, 'b4d9246f0c454719b178c0cada6768fd', 'Coaching', '2019-06-16 07:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coaching_course`
--

CREATE TABLE IF NOT EXISTS `tbl_coaching_course` (
  `registration_id` varchar(20) NOT NULL DEFAULT '',
  `course` varchar(20) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  PRIMARY KEY (`registration_id`,`course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coaching_course`
--

INSERT INTO `tbl_coaching_course` (`registration_id`, `course`, `subject`, `duration`, `fees`) VALUES
('321208', 'B.COM ', 'commerce', 1095, 15000),
('321208', 'BA ', 'Arts', 800, 10000),
('321208', 'BANK', 'math ', 30, 0),
('321208', 'Banking', 'ACCOUNT', 168, 1000),
('321208', 'BE', 'Computer network', 25, 0),
('321208', 'DCA', 'MS OFFICE', 365, 10000),
('321208', 'GATE', 'DATA STRUCTURE', 365, 80000),
('321208', 'PGDCA ', 'TALLY', 730, 15000),
('321208', 'RAILWAYS', 'REASONING', 84, 5000),
('321208', 'SCC ', 'ENGLISH', 730, 12000),
('321208', 'SSC', 'MATH', 84, 4000),
('321208', 'TALLY ', 'TALLY', 84, 5000),
('321208', 'upsc', 'GK', 84, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coaching_student`
--

CREATE TABLE IF NOT EXISTS `tbl_coaching_student` (
  `s_mobile` varchar(10) DEFAULT NULL,
  `registration_id` varchar(20) DEFAULT NULL,
  KEY `s_mobile` (`s_mobile`),
  KEY `registration_id` (`registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coaching_student`
--

INSERT INTO `tbl_coaching_student` (`s_mobile`, `registration_id`) VALUES
('7879364862', '321208'),
('79999', '123456'),
('123', '123457'),
('1234', '321208'),
('123456', '123457'),
('7828362542', '123459'),
('88995555', '123456'),
('9009529451', '123459');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `registration_id` varchar(20) DEFAULT NULL,
  `s_mobile` varchar(10) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  KEY `s_mobile` (`s_mobile`),
  KEY `registration_id` (`registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`registration_id`, `s_mobile`, `rate`, `remark`) VALUES
('321208', '7879364862', 9, 'best teacher'),
('123456', '79999', 8, 'best teacher'),
('123457', '123', 6, 'Average'),
('321208', '1234', 2, 'bad'),
('123459', '7828362542', 5, 'bad'),
('123456', '88995555', 5, 'Average'),
('123459', '9009529451', 8, 'wqr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `s_mobile` varchar(10) NOT NULL DEFAULT '',
  `s_name` varchar(30) DEFAULT NULL,
  `s_address` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `s_email` varchar(50) DEFAULT NULL,
  `s_aadhar` varchar(12) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_mobile`),
  UNIQUE KEY `s_aadhar` (`s_aadhar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`s_mobile`, `s_name`, `s_address`, `DOB`, `s_email`, `s_aadhar`, `password`, `role`, `Date_time`) VALUES
('123', 'garg', 'saket', '2019-06-26', 'garg@gmail.com', '234234', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('1234', 'jay limbola', '45 pratap nager ratlam', '2019-06-04', 'poojalimbol@gmail.com', '646848963486', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('12345', 'durga', '46 pratap nagar ratlam', '2019-06-06', 'durgajaiswal1998@gmail.com', '3546846646', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('123456', 'ankit', 'danish kunj', '2019-06-18', 'anki@gmail.com', '778899665544', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('7828362542', 'surekha', 'saket nagar', '2019-06-13', 'surekha@gmail.com', '4643531534', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('7879364862', 'pooja limbola', 'saket nagar', '2010-05-09', 'poojalimbol@gmail.com', '223344556677', 'e10adc3949ba59abbe56e057f20f883e', 'Student', '0000-00-00 00:00:00'),
('79999', 'rishi', 'saket nagar', '2019-06-19', 'rishi@gmail.com', '312142', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('88995555', 'kriparam', 'saket nagr', '2019-06-04', 'kariparam@gmail.com', '554466887799', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('9009529451', 'Pooja limbola', '45 Pratap Nagar Bhopal', '2019-06-11', 'poojalimbola@gmail.com', '437865435476', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00'),
('987', 'durga', 'saket nagr', '2019-06-19', 'durga@gmail.com', '231', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_coaching`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_coaching` (
  `t_mobile` varchar(10) DEFAULT NULL,
  `registration_id` varchar(20) DEFAULT NULL,
  KEY `t_mobile` (`t_mobile`),
  KEY `registration_id` (`registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_register`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_register` (
  `t_mobile` varchar(10) NOT NULL DEFAULT '',
  `t_name` varchar(30) DEFAULT NULL,
  `t_address` varchar(50) DEFAULT NULL,
  `t_email` varchar(50) DEFAULT NULL,
  `specialization` varchar(60) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `password` int(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`t_mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher_register`
--

INSERT INTO `tbl_teacher_register` (`t_mobile`, `t_name`, `t_address`, `t_email`, `specialization`, `experience`, `password`, `role`, `Date_time`) VALUES
('9074804070', 'Akash jaiswal', 'saket nagar bhopal', 'durga@gmail.com', 'CGM', 5, 0, 'Teacher', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_coaching_course`
--
ALTER TABLE `tbl_coaching_course`
  ADD CONSTRAINT `tbl_coaching_course_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `tbl_coaching` (`registration_id`);

--
-- Constraints for table `tbl_coaching_student`
--
ALTER TABLE `tbl_coaching_student`
  ADD CONSTRAINT `tbl_coaching_student_ibfk_1` FOREIGN KEY (`s_mobile`) REFERENCES `tbl_student` (`s_mobile`),
  ADD CONSTRAINT `tbl_coaching_student_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `tbl_coaching` (`registration_id`);

--
-- Constraints for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD CONSTRAINT `tbl_rating_ibfk_1` FOREIGN KEY (`s_mobile`) REFERENCES `tbl_student` (`s_mobile`),
  ADD CONSTRAINT `tbl_rating_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `tbl_coaching` (`registration_id`);

--
-- Constraints for table `tbl_teacher_coaching`
--
ALTER TABLE `tbl_teacher_coaching`
  ADD CONSTRAINT `tbl_teacher_coaching_ibfk_1` FOREIGN KEY (`t_mobile`) REFERENCES `tbl_teacher_register` (`t_mobile`),
  ADD CONSTRAINT `tbl_teacher_coaching_ibfk_2` FOREIGN KEY (`registration_id`) REFERENCES `tbl_coaching` (`registration_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
