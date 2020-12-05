-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 01:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Pass` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Pass`, `Name`) VALUES
(1, 'admin@admin.com', 'admin', 'Main Admin'),
(2, 'misasuraj22@gmail.com', '123456', 'suraj');

-- --------------------------------------------------------

--
-- Table structure for table `corp`
--

CREATE TABLE `corp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corp`
--

INSERT INTO `corp` (`ID`, `Name`) VALUES
(1, 'Rice'),
(3, 'Wheat'),
(4, 'Toor');

-- --------------------------------------------------------

--
-- Table structure for table `corpdetails`
--

CREATE TABLE `corpdetails` (
  `ID` int(11) NOT NULL,
  `corp` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `dist` varchar(500) NOT NULL,
  `soil` varchar(500) NOT NULL,
  `season` varchar(500) NOT NULL,
  `fertilizer` varchar(500) NOT NULL,
  `min` varchar(500) NOT NULL,
  `max` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corpdetails`
--

INSERT INTO `corpdetails` (`ID`, `corp`, `state`, `dist`, `soil`, `season`, `fertilizer`, `min`, `max`) VALUES
(1, 'Rice', 'karnataka', 'chikodi', 'Moist', 'w', 'anp', '', ''),
(2, 'Rice', 'karnataka', 'chikodi', 'Moist', 'w', 'anp', '', ''),
(3, 'Rice', 'karnataka', '0', 'Moist', 'w', 'anp', '', ''),
(4, 'Wheat', 'maha', 'chikodi', 'Moist', 'w', 'anp', '100', '200'),
(5, 'Wheat', 'maha', 'chikodi', 'Moist', 'w', 'anp', '100', '200');

-- --------------------------------------------------------

--
-- Table structure for table `dist`
--

CREATE TABLE `dist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist`
--

INSERT INTO `dist` (`ID`, `Name`) VALUES
(0, 'chikodi');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`ID`, `Name`) VALUES
(1, 'anp');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`ID`, `Name`) VALUES
(1, 'w');

-- --------------------------------------------------------

--
-- Table structure for table `soiltype`
--

CREATE TABLE `soiltype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soiltype`
--

INSERT INTO `soiltype` (`ID`, `Name`) VALUES
(1, 'Moist');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`ID`, `Name`) VALUES
(1, 'karnataka'),
(3, 'maha');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Phone` varchar(500) NOT NULL,
  `DOB` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Phone`, `DOB`, `Email`, `Pass`) VALUES
(2, 'Suraj Misal', '9538843434', '2018-10-07', 'misalsuraj22@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `corp`
--
ALTER TABLE `corp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `corpdetails`
--
ALTER TABLE `corpdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `soiltype`
--
ALTER TABLE `soiltype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `corp`
--
ALTER TABLE `corp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `corpdetails`
--
ALTER TABLE `corpdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `soiltype`
--
ALTER TABLE `soiltype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
