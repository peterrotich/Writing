-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 07:49 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kmh`
--
CREATE DATABASE IF NOT EXISTS `kmh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kmh`;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `uniqueId` int(255) NOT NULL AUTO_INCREMENT,
  `roomNumber` varchar(255) NOT NULL,
  `roomStatus` varchar(255) NOT NULL DEFAULT 'empty',
  `recieptCode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uniqueId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`uniqueId`, `roomNumber`, `roomStatus`, `recieptCode`) VALUES
(1, 'GA', 'empty', '8FY3H'),
(2, 'GB', 'empty', 'QW44P'),
(3, 'GC', 'empty', 'OFQHJ'),
(4, 'GD', 'empty', 'HA6DL'),
(5, 'GE', 'empty', '66QCC'),
(6, 'GF', 'empty', '98HH3'),
(7, 'GG', 'empty', '2W8QV'),
(8, 'GH', 'empty', 'D7YXC'),
(9, 'GI', 'empty', 'SC2HA'),
(10, 'GJ', 'empty', 'UTYV6'),
(11, '1A', 'empty', NULL),
(12, '1B', 'empty', NULL),
(13, '1C', 'empty', NULL),
(14, '1D', 'empty', NULL),
(15, '1E', 'empty', NULL),
(16, '1F', 'empty', NULL),
(17, '1G', 'empty', NULL),
(18, '1H', 'empty', NULL),
(19, '1I', 'empty', NULL),
(20, '1J', 'empty', NULL),
(21, '2A', 'empty', NULL),
(22, '2B', 'empty', NULL),
(23, '2C', 'empty', NULL),
(24, '2D', 'empty', NULL),
(25, '2E', 'empty', NULL),
(26, '2F', 'empty', NULL),
(27, '2G', 'empty', NULL),
(28, '2F', 'empty', NULL),
(29, '2G', 'empty', NULL),
(30, '2H', 'empty', NULL),
(31, '2I', 'empty', NULL),
(32, '2J', 'empty', NULL),
(33, '3A', 'empty', 'O5VRP'),
(34, '3B', 'empty', NULL),
(35, '3C', 'empty', 'EO72N'),
(36, '3D', 'empty', NULL),
(37, '3E', 'empty', NULL),
(38, '3F', 'empty', NULL),
(39, '3G', 'empty', NULL),
(40, '3H', 'empty', NULL),
(41, '3I', 'empty', NULL),
(42, '3J', 'empty', NULL),
(43, '4A', 'empty', NULL),
(44, '4B', 'empty', NULL),
(45, '4C', 'empty', NULL),
(46, '4D', 'empty', NULL),
(47, '4E', 'empty', NULL),
(48, '4F', 'empty', NULL),
(49, '4G', 'empty', NULL),
(50, '4H', 'empty', NULL),
(51, '4I', 'empty', NULL),
(52, '4J', 'empty', '4E08Y'),
(53, '5A', 'empty', NULL),
(54, '5B', 'empty', NULL),
(55, '5C', 'empty', NULL),
(56, '5D', 'empty', NULL),
(57, '5E', 'empty', NULL),
(58, '5F', 'empty', NULL),
(59, '5G', 'empty', NULL),
(60, '5H', 'empty', NULL),
(61, '5I', 'empty', 'I88T8'),
(62, '5J', 'empty', 'I8ZJO'),
(63, '', 'empty', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE IF NOT EXISTS `roomtype` (
  `uniqueId` int(255) NOT NULL AUTO_INCREMENT,
  `roomType` varchar(255) NOT NULL,
  `pricePerday` int(255) NOT NULL,
  `valP` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uniqueId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`uniqueId`, `roomType`, `pricePerday`, `valP`) VALUES
(1, 'Single', 500, '1'),
(2, 'Double', 800, '1'),
(3, 'Superior', 1200, '1'),
(6, 'Luxury', 1500, '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refund`
--

CREATE TABLE IF NOT EXISTS `tbl_refund` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `refundType` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `IdNumber` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `recieptCode` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `accountNumber` varchar(255) NOT NULL,
  `securityCode` varchar(255) NOT NULL,
  `mpesaNumber` varchar(255) NOT NULL,
  `transactionCode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_refund`
--

INSERT INTO `tbl_refund` (`id`, `refundType`, `names`, `IdNumber`, `phoneNumber`, `recieptCode`, `amount`, `accountNumber`, `securityCode`, `mpesaNumber`, `transactionCode`) VALUES
(3, 'Cash', 'Pish Peter', '27339458', '0728087306', 'PCKKG', '500', 'Null', '', 'Null', ''),
(4, 'Cash', 'Pish Peter', '27339458', '0728087306', 'UH0GX', '500', 'Null', '', 'Null', ''),
(5, 'Cash', 'Pish Peter', '27339458', '0728087306', 'UH0GX', '500', 'Null', '', 'Null', ''),
(6, 'Account Refund', 'Noah Wafula', '12111241', '07221252125', '0C58O', '12500', '411141', '', 'Null', ''),
(7, 'Cash', 'Enos', '12112', '287874', 'EO72N', '2000', 'Null', 'Null', 'Null', 'Null'),
(8, 'Account Refund', 'Aleki', '112125', '112101', '66QCC', '11454', '1114141', '525', 'Null', 'Null'),
(9, 'Account Refund', 'Kiboi', '1036993', '0721958706', 'IDJ3G', '3000', 'Null', 'Null', '0721958706', 'BN3D2JJNJU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation_request`
--

CREATE TABLE IF NOT EXISTS `tbl_reservation_request` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `roomType` varchar(255) NOT NULL,
  `arrivalDate` varchar(255) NOT NULL,
  `roomNumber` varchar(255) NOT NULL,
  `departureDate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `idNumber` varchar(255) NOT NULL,
  `recieptCode` varchar(255) NOT NULL,
  `reservationDate` varchar(255) NOT NULL,
  `roomStatus` varchar(255) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reserved`
--

CREATE TABLE IF NOT EXISTS `tbl_reserved` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `recieptCode` varchar(225) NOT NULL,
  `names` varchar(225) NOT NULL,
  `phoneNumber` varchar(225) NOT NULL,
  `bankAccount` varchar(225) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `amountPaid` varchar(225) NOT NULL,
  `pendingAmount` varchar(225) NOT NULL,
  `totalAmount` varchar(225) NOT NULL,
  `roomStatus` varchar(225) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uniqueId` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `uniqueId`, `email`, `userType`, `password`, `status`) VALUES
(1, 'pku787', 'petterkipp@gmail.com', 'Admin', '838f45bc037702b12d58a007b86a48958e30f850', 'active'),
(2, 'ol989u', 'ali@gmail.com', 'User', '838f45bc037702b12d58a007b86a48958e30f850', 'active'),
(4, 'w1f7s24u', 'noah@gmail.co.ke', 'User', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'deleted'),
(5, '6s85ka4a', 'pete@gmail.com', 'Admin', '9af3e919589732a91e61d4503691444be8141933', 'active'),
(6, 'h7zdq4rx', 'support@kmh.com', 'User', '838f45bc037702b12d58a007b86a48958e30f850', 'active'),
(7, '53b54wp2', 'info@kmh.com', 'User', '59272ff376f574c1260a4185ceae3f4e59467635', 'active'),
(8, 'dh3egyvi', 'admin@kmh.com', 'Admin', '7b902e6ff1db9f560443f2048974fd7d386975b0', 'active'),
(9, 'vcxg3oyg', 'pishpeter@gmail.com', 'Admin', '838f45bc037702b12d58a007b86a48958e30f850', 'deleted'),
(10, 'lvapnrx0', 'staff@kmh.com', 'User', 'e51157a25105c5db6deb0fcc52482ecb5ded2173', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
