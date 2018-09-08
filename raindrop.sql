-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 10:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raindrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabfile`
--

CREATE TABLE IF NOT EXISTS `tabfile` (
  `fileID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `dataName` varchar(100) NOT NULL,
  `dateUploaded` date NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `fileType` varchar(100) NOT NULL,
  `fileSize` varchar(50) NOT NULL,
  `fileCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`fileID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tabfile`
--

INSERT INTO `tabfile` (`fileID`, `userID`, `dataName`, `dateUploaded`, `fileName`, `fileType`, `fileSize`, `fileCategory`) VALUES
(1, 1, 'test 1', '2015-05-07', 'Ethernet.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '44250', 'Document'),
(2, 1, 'test 2', '2015-05-07', '27602-ethernet.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '43.212890625', 'Document');

-- --------------------------------------------------------

--
-- Table structure for table `tabuser`
--

CREATE TABLE IF NOT EXISTS `tabuser` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userStatus` varchar(50) NOT NULL,
  `accessControl` varchar(20) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabuser`
--

INSERT INTO `tabuser` (`userID`, `userEmail`, `userPassword`, `firstName`, `lastName`, `userStatus`, `accessControl`) VALUES
(1, 'admin@raindrop.com', 'admin', 'admin', 'raindrop', 'No Status', 'admin'),
(2, 'drutio@yahoo.com', '1234', 'andrew', 'tio', 'No Status', 'user'),
(8, 'albert@raindrop.com', 'zxc', 'Albert', 'Prawono', 'asd', 'user'),
(9, 'azani@raindrop.com', '1234', 'Azani', '-', 'No Status', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
