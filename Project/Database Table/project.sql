-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 05:04 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_name` varchar(50) DEFAULT NULL,
  `department_head` varchar(50) DEFAULT NULL,
  `teachers` int(11) NOT NULL,
  `no_of_courses` int(11) DEFAULT NULL,
  `total_credit` int(11) DEFAULT NULL,
  `no_of_lab` int(11) DEFAULT NULL,
  `budget` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_name`, `department_head`, `teachers`, `no_of_courses`, `total_credit`, `no_of_lab`, `budget`) VALUES
('CSE', 'Dr. Md. Sowket Ali', 11, 53, 160, 6, 2000000),
('EEE', 'Ashrafun Naher Pinky', 11, 53, 162, 5, 2000000),
('ME', 'Md. Rabiul Islam', 6, 55, 164, 7, 5000000),
('IPE', 'Md.Rabiul Islam', 3, 53, 160, 5, 4000000),
('DBA', 'Mohammad Bin Amin', 5, 50, 150, 2, 1000000),
('English', 'MST. Shahanaz Khanam', 4, 50, 150, 2, 500000),
('Arts & Science', 'Md. Mizanur Rahman', 12, 30, 150, 2, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(25) DEFAULT NULL,
  `dean` varchar(25) DEFAULT NULL,
  `department_no` int(11) NOT NULL,
  `department_name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `dean`, `department_no`, `department_name`) VALUES
('CEE', 'Dr. Md. Mamunur Rashid', 2, 'CSE'),
('CEE', 'Dr. Md. Manunur Rashid', 2, 'EEE'),
('MPE', 'Dr. Naseem Ahmed', 2, 'ME'),
('MPE', 'Dr. Naseem Ahmed', 2, 'IPE'),
('BS', 'Mohammad Bin Amin', 1, 'DBA'),
('SH', 'Md. Mizanur Rahman', 2, 'English'),
('SH', 'Md. Mizanur Rahman', 2, 'Arts & Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD KEY `department_name` (`department_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
