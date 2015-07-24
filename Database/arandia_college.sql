-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 09:15 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arandia college`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `Class_id` char(50) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Subject_code` char(100) NOT NULL,
  `Student_id` char(100) NOT NULL,
  `Teacher_id` char(100) NOT NULL,
  PRIMARY KEY (`Class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `1st_grading` decimal(5,0) NOT NULL,
  `2nd_grading` decimal(5,0) NOT NULL,
  `3rd_grading` decimal(5,0) NOT NULL,
  `4th_grading` decimal(5,0) NOT NULL,
  `Final_grading` decimal(5,0) NOT NULL,
  `Subject_code` char(100) NOT NULL,
  `Student_id` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Student_id` char(100) NOT NULL,
  `Student_fname` varchar(100) NOT NULL,
  `Student_lname` varchar(100) NOT NULL,
  `Student_mname` varchar(100) NOT NULL,
  `Student_email` varchar(100) NOT NULL,
  `Student_addr` varchar(100) NOT NULL,
  `Student_cont` varchar(100) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Subject_Code` char(100) NOT NULL,
  `Subject_desc` varchar(100) NOT NULL,
  `Teacher_id` char(100) NOT NULL,
  PRIMARY KEY (`Subject_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Teacher_id` char(100) NOT NULL,
  `Teacher_fname` varchar(100) NOT NULL,
  `Teacher_lname` varchar(100) NOT NULL,
  `Teacher_mname` varchar(100) NOT NULL,
  `Teacher_email` varchar(100) NOT NULL,
  `Teacher_addr` varchar(100) NOT NULL,
  `Teacher_cont` varchar(100) NOT NULL,
  `Teacher_stat` varchar(100) NOT NULL,
  PRIMARY KEY (`Teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`Class_id`) REFERENCES `teacher` (`Teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`Subject_Code`) REFERENCES `teacher` (`Teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
