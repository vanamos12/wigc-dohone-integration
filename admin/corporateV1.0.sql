-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2018 at 01:05 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corporate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Full_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`User_ID`, `Username`, `Password`, `Full_Name`) VALUES
(3, 'jeff', '166ee015c0e0934a8781e0c86a197c6e', 'Happi Oliver');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_horizon`
--

CREATE TABLE `tbl_horizon` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `postSlug` varchar(1000) NOT NULL,
  `Bref` varchar(5000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_horizon`
--

INSERT INTO `tbl_horizon` (`Information_ID`, `Title`, `postSlug`, `Bref`, `Content`, `Photo`, `Pdf`) VALUES
(2, 'Communication', 'communication', 'Sortie du N°0001 :Horizon 2035', 'Développement local durable: le Moungo peut-il compter sur sur son agriculture?', 'upload/prsentation2-1260x10500.jpg.png', 'upload/ExeHorizon2035.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `postSlug` varchar(1000) NOT NULL,
  `Bref` varchar(5000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`Information_ID`, `Title`, `postSlug`, `Bref`, `Content`, `Photo`, `Pdf`) VALUES
(17, 'Communication', 'communication', 'Sortie du N°0002 :Horizon 2035', 'Dibombari, le futur Eldorado de la Région', 'upload/exe-horizon203520nc2b000220-2036pages20mail-417x572.png', 'upload/ExeHorizon2035.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tbl_horizon`
--
ALTER TABLE `tbl_horizon`
  ADD PRIMARY KEY (`Information_ID`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`Information_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_horizon`
--
ALTER TABLE `tbl_horizon`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
