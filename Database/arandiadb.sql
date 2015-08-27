-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2015 at 07:14 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arandiadb`
--
CREATE DATABASE IF NOT EXISTS `arandiadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `arandiadb`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `Class_id` char(10) NOT NULL,
  `Section` varchar(45) NOT NULL,
  `Subject_Code` char(20) NOT NULL,
  `Student_id` char(10) NOT NULL,
  `Teacher_id` char(10) NOT NULL,
  PRIMARY KEY (`Class_id`),
  KEY `classes_ibfk_1` (`Subject_Code`),
  KEY `classes_ibfk_2` (`Student_id`),
  KEY `Section` (`Section`),
  KEY `Teacher_id` (`Teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `first_grading` decimal(10,0) NOT NULL,
  `second_grading` decimal(10,0) NOT NULL,
  `third_grading` decimal(10,0) NOT NULL,
  `fourth_grading` decimal(10,0) NOT NULL,
  `Final_grading` date NOT NULL,
  `Subject_code` char(20) NOT NULL,
  `Student_id` char(15) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id_number` char(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `grade_level` varchar(45) NOT NULL,
  `prev_school` varchar(100) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_occupation` varchar(50) NOT NULL,
  `emerg_name` varchar(50) NOT NULL,
  `relation` varchar(45) NOT NULL,
  `tel_num` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  PRIMARY KEY (`id_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Student_id` char(15) NOT NULL,
  `Student_lname` varchar(45) NOT NULL,
  `Student_fname` varchar(45) NOT NULL,
  `Student_mname` varchar(45) NOT NULL,
  `Student_email` varchar(45) NOT NULL,
  `Student_addr` varchar(100) NOT NULL,
  `Student_cont` varchar(45) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Subject_code` char(20) NOT NULL,
  `Subject_desc` varchar(45) NOT NULL,
  `Teacher_id` int(10) NOT NULL,
  PRIMARY KEY (`Subject_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Teacher_id` char(10) NOT NULL,
  `Teacher_lname` varchar(45) NOT NULL,
  `Teacher_fname` varchar(45) NOT NULL,
  `Teacher_mname` varchar(45) NOT NULL,
  `Teacher_email` varchar(45) NOT NULL,
  `Teacher_addr` varchar(100) NOT NULL,
  `Teacher_cont` varchar(20) NOT NULL,
  `Teacher_stat` varchar(10) NOT NULL,
  PRIMARY KEY (`Teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`Subject_Code`) REFERENCES `subject` (`Subject_code`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
