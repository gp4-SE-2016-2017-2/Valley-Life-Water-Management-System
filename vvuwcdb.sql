-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 10:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vvuwcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveriestb`
--

CREATE TABLE IF NOT EXISTS `deliveriestb` (
  `DeliveriesID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` varchar(50) DEFAULT NULL,
  `NumOfBags` int(5) NOT NULL,
  `Spoilage` int(5) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`DeliveriesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `deliveriestb`
--

INSERT INTO `deliveriestb` (`DeliveriesID`, `Customer`, `NumOfBags`, `Spoilage`, `Date`) VALUES
(1, 'JJ Nortey', 30, 0, '0000-00-00'),
(2, 'JJ Nortey', 30, 0, '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `productiontb`
--

CREATE TABLE IF NOT EXISTS `productiontb` (
  `ProductionID` int(11) NOT NULL AUTO_INCREMENT,
  `NumOfBags` int(5) NOT NULL,
  `Spoilage` int(5) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ProductionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `productiontb`
--

INSERT INTO `productiontb` (`ProductionID`, `NumOfBags`, `Spoilage`, `Date`) VALUES
(1, 60, 12, '2017-03-01'),
(2, 100, 20, '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `SalesID` int(10) NOT NULL AUTO_INCREMENT,
  `Type` varchar(20) DEFAULT NULL,
  `Date` date NOT NULL,
  `DailySale` decimal(6,0) NOT NULL,
  `DIscount` decimal(6,0) DEFAULT NULL,
  PRIMARY KEY (`SalesID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
