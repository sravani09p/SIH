-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 02:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `organisation_details`
--

CREATE TABLE `organisation_details` (
  `OrgName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `OrgId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisation_details`
--

INSERT INTO `organisation_details` (`OrgName`, `Email`, `Password`, `Contact`, `OrgId`) VALUES
('Friends NGO', 'FriendsNGO@gmail.com', 'abcdefgh', '9876543210', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `per`
--

CREATE TABLE `per` (
  `FullName` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNo` int(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `TribeName` varchar(20) NOT NULL,
  `Talent` varchar(20) NOT NULL,
  `Achievements` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per`
--

INSERT INTO `per` (`FullName`, `Username`, `Password`, `DOB`, `PhoneNo`, `Gender`, `State`, `District`, `TribeName`, `Talent`, `Achievements`) VALUES
('a', 'a', '', '2020-02-06', 1, 'f', 'a', 'a', 'a', 'a', 'a'),
('Lily', 'lily', 'lily04', '2000-09-07', 2147483647, 'female', 'telangana', 'hyderabad', 'yiuth', 'painting', 'Winner in district l');

-- --------------------------------------------------------

--
-- Table structure for table `sih`
--

CREATE TABLE `sih` (
  `FirstName` char(5) NOT NULL,
  `LastName` char(10) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `State` char(10) NOT NULL,
  `District` char(10) NOT NULL,
  `TribeName` varchar(10) NOT NULL,
  `Talent` text NOT NULL,
  `Achievements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videoup`
--

CREATE TABLE `videoup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videoup`
--

INSERT INTO `videoup` (`id`, `name`) VALUES
(8, 'Boston Historic Site.mov'),
(10, 'Video1.webm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisation_details`
--
ALTER TABLE `organisation_details`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `videoup`
--
ALTER TABLE `videoup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videoup`
--
ALTER TABLE `videoup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
