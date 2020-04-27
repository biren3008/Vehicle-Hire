-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2016 at 08:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehiclehire`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Car Image` longblob NOT NULL,
  `Car Type` varchar(200) NOT NULL,
  `Seating Capacity` int(11) NOT NULL,
  `Price Per Day` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Country Name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Image` tinyblob NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Facility` tinyblob NOT NULL,
  `Date` date NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`ID`, `Image`, `Name`, `Type`, `Facility`, `Date`, `Price`) VALUES
(1, 0x6c6f6e646f6e2e6a7067, 'London Tour', '6 Days 7 Nights', 0x7472616e73666572732e6a7067, '2016-01-28', 151000),
(2, 0x676f612e6a7067, 'Goa', '3 Days 2 Nights', 0x686f74656c2e6a7067, '2016-01-27', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `showeasycabs`
--

CREATE TABLE IF NOT EXISTS `showeasycabs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mobile Number` bigint(20) NOT NULL,
  `Pick Up Date` date NOT NULL,
  `Pick Up City` varchar(200) NOT NULL,
  `Pick Up Address` varchar(200) NOT NULL,
  `Drop Location` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `showpackage`
--

CREATE TABLE IF NOT EXISTS `showpackage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Package Type` varchar(200) NOT NULL,
  `Person` int(11) NOT NULL,
  `Mobile Number` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `showselfdrive`
--

CREATE TABLE IF NOT EXISTS `showselfdrive` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Car Type` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mobile Number` bigint(20) NOT NULL,
  `Pick Up Date` int(11) NOT NULL,
  `Pick Up City` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `State Name` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `traveller`
--

CREATE TABLE IF NOT EXISTS `traveller` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Contact Information` varchar(200) NOT NULL,
  `Country` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vhadmin`
--

CREATE TABLE IF NOT EXISTS `vhadmin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vhadmin`
--

INSERT INTO `vhadmin` (`ID`, `Name`, `Email`, `Password`, `Mobile_Number`) VALUES
(1, 'Admin', 'admin', 'admin', 9662597967);

-- --------------------------------------------------------

--
-- Table structure for table `vhcustomer`
--

CREATE TABLE IF NOT EXISTS `vhcustomer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  `Country` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vhcustomer`
--

INSERT INTO `vhcustomer` (`ID`, `Name`, `Email`, `Password`, `Gender`, `Address`, `Mobile_Number`, `Country`) VALUES
(1, 'Biren', 'patelbiren058@yahoo.com', 'biren', 'Male', 'Petlad', 9662597967, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `vhtraveller`
--

CREATE TABLE IF NOT EXISTS `vhtraveller` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vhtraveller`
--

INSERT INTO `vhtraveller` (`ID`, `Name`, `Email`, `Password`, `Address`, `Contact_Number`) VALUES
(1, 'Make My Trip', 'makemytrip@aol.com', 'traveller', 'Anand', 9898976546);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
