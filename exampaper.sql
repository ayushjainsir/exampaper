-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2017 at 08:26 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exampaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `$subjectcode`
--

CREATE TABLE IF NOT EXISTS `$subjectcode` (
  `question` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL DEFAULT '0',
  `marks` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `contributer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ASD101`
--

CREATE TABLE IF NOT EXISTS `ASD101` (
  `question` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `marks` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contributer` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ASD101`
--

INSERT INTO `ASD101` (`question`, `level`, `qid`, `marks`, `chapter`, `timestamp`, `contributer`) VALUES
('fgfd', 'easy', 1, 1, 5, '2017-02-19 18:58:03', ''),
('u', 'easy', 2, 1, 7, '2017-02-19 19:02:53', 'jain'),
('', 'easy', 3, 1, 0, '2017-02-19 19:03:56', 'jain'),
('wf', 'easy', 4, 1, 1, '2017-02-19 19:09:51', 'jain'),
('', 'easy', 5, 1, 0, '2017-02-19 19:09:56', 'jain'),
('Q2', 'easy', 6, 1, 7, '2017-02-19 19:22:59', 'jain'),
('b', 'easy', 7, 1, 5, '2017-02-19 19:47:02', 'jain'),
('wer', 'easy', 8, 1, 2, '2017-02-21 13:30:35', ''),
('my name is ?', 'easy', 9, 1, 1, '2017-02-21 13:57:43', ''),
('hai  bhvgf', 'easy', 10, 1, 5, '2017-02-21 14:00:11', ''),
('sdbsd sjg sndbhs?', 'easy', 11, 1, 3, '2017-02-21 14:01:27', 'jain');

-- --------------------------------------------------------

--
-- Table structure for table `ASD102`
--

CREATE TABLE IF NOT EXISTS `ASD102` (
  `question` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `marks` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contributer` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ASD102`
--

INSERT INTO `ASD102` (`question`, `level`, `qid`, `marks`, `chapter`, `timestamp`, `contributer`) VALUES
('which of the following is an animal?\na) dog\nb) cat\nc) lion\nd) horse', 'easy', 1, 1, 2, '2017-02-21 14:24:28', 'jain');

-- --------------------------------------------------------

--
-- Table structure for table `ASD103`
--

CREATE TABLE IF NOT EXISTS `ASD103` (
  `question` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `marks` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contributer` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ASD103`
--

INSERT INTO `ASD103` (`question`, `level`, `qid`, `marks`, `chapter`, `timestamp`, `contributer`) VALUES
('quest 1', 'hard', 1, 5, 4, '2017-02-19 19:01:36', ''),
('quest 1', 'hard', 2, 5, 4, '2017-02-19 19:02:42', 'jain');

-- --------------------------------------------------------

--
-- Table structure for table `CS205`
--

CREATE TABLE IF NOT EXISTS `CS205` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `chapter` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contributer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `CS205`
--

INSERT INTO `CS205` (`qid`, `question`, `level`, `marks`, `chapter`, `created_at`, `contributer`) VALUES
(1, 'dfsdf', 'easy', 1, 4, '2017-02-21 13:56:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `CS702`
--

CREATE TABLE IF NOT EXISTS `CS702` (
  `question` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL DEFAULT '0',
  `marks` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `contributer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CS702`
--

INSERT INTO `CS702` (`question`, `level`, `qid`, `marks`, `chapter`, `timestamp`, `contributer`) VALUES
('hello', 'easy', 0, 1, 5, '0000-00-00 00:00:00', ''),
('dgdf', 'easy', 0, 1, 11, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectname` varchar(20) NOT NULL,
  `subjectcode` varchar(10) NOT NULL,
  PRIMARY KEY (`subjectcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectname`, `subjectcode`) VALUES
('Maths', 'ASD101'),
('Physics', 'ASD102'),
('Chemistry', 'ASD103'),
('DAA', 'CS105'),
('DS', 'CS205'),
('DLD', 'CS302'),
('AI', 'CS702');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `emailid`, `name`, `phone`, `branch`) VALUES
(1, 'jain', 'jain', 'ayushjainsir@gmail.com', 'Ayush Jain', '9058124789', 'CS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
