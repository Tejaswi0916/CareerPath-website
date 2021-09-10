-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 02:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swini`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `Sno` varchar(10) NOT NULL,
  `userid` varchar(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `area_of_interest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`Sno`, `userid`, `name`, `dob`, `gender`, `address`, `qualification`, `area_of_interest`) VALUES
('1', '19lsmi01', 'aishwarya', '08/05/1996', 'female', NULL, 'btech', 'bioinformatics');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `Sno` varchar(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `Photo_file` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `UNIQUE` (`userid`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`Sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
