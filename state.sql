-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2014 at 07:17 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `state-district`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `Andhra Pradesh` varchar(255) NOT NULL,
  `Karnataka` varchar(255) NOT NULL,
  `Madhya Pradesh` varchar(255) NOT NULL,
  `Maharashtra` varchar(255) NOT NULL,
  `Tamil Nadu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Andhra Pradesh`, `Karnataka`, `Madhya Pradesh`, `Maharashtra`, `Tamil Nadu`) VALUES
('Srikakulam', 'Ramanagara', 'Ahmednaga', 'Kalanagar', 'ellurumbam'),
('Vishakapatnam', 'Davanagere', 'Bhandara', 'karmanghar', 'arumbakkam');
