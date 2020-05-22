-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 12:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aladdin customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Father_Name` varchar(20) DEFAULT NULL,
  `Mother_Name` varchar(20) DEFAULT NULL,
  `DOB` varchar(100) NOT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Post_Office` varchar(15) DEFAULT NULL,
  `Pincode` varchar(10) DEFAULT NULL,
  `State` varchar(15) DEFAULT NULL,
  `Country` varchar(5) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Adhar_Card` varchar(15) DEFAULT NULL,
  `Pan_Card` varchar(15) DEFAULT NULL,
  `Voter_Id` varchar(15) DEFAULT NULL,
  `Qualification` varchar(15) DEFAULT NULL,
  `Short_Biography` text DEFAULT NULL,
  `Mission` text DEFAULT NULL,
  `Vision` text DEFAULT NULL,
  `Full_Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Gender`, `Father_Name`, `Mother_Name`, `DOB`, `City`, `Post_Office`, `Pincode`, `State`, `Country`, `Mobile`, `Adhar_Card`, `Pan_Card`, `Voter_Id`, `Qualification`, `Short_Biography`, `Mission`, `Vision`, `Full_Address`) VALUES
(1, '', 'Ma', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '', '', '', 'b'),
(2, '', 'Ma', 'Rich Dad', 'Poor Dad', '65', 'Texas', 'Texas', '213487', 'Bostan', 'USA', '874789', '74', '7854', '4231879', 'NO Education', '', '', '', 'Texas USA'),
(3, '', 'Ma', '', 'Poor Dad', '', 'Texas', 'Texas', '213487', 'Bostan', 'USA', '874789', '74', '7854', '4231879', 'NO Education', '', '', '', 'Texas USA'),
(4, 'rakesh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrationr2`
--

CREATE TABLE `registrationr2` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `DoB` varchar(10) NOT NULL,
  `Full_Address` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Post_Office` varchar(20) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Country` varchar(5) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Adhar_Card` varchar(18) NOT NULL,
  `Pan_Card` varchar(18) NOT NULL,
  `Voter_Id` varchar(18) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Short Biography` varchar(30) NOT NULL,
  `Mission` varchar(50) NOT NULL,
  `Vision` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationr2`
--

INSERT INTO `registrationr2` (`Id`, `Name`, `Gender`, `Father_Name`, `Mother_Name`, `DoB`, `Full_Address`, `City`, `Post_Office`, `Pincode`, `State`, `Country`, `Mobile_No`, `Adhar_Card`, `Pan_Card`, `Voter_Id`, `Qualification`, `Short Biography`, `Mission`, `Vision`) VALUES
(0, 'adsda', 'male', 'aa', 'a', '0', 'a', 'a', 'asdfd', '1', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `shop information`
--

CREATE TABLE `shop information` (
  `Id` int(11) NOT NULL,
  `Shop Name` varchar(20) NOT NULL,
  `GST No` int(15) NOT NULL,
  `Shop Mobile No` int(10) NOT NULL,
  `1.Shopkeeper Name` varchar(20) NOT NULL,
  `1.Mobile No` int(10) NOT NULL,
  `1.Adhar No` int(12) NOT NULL,
  `2.Shopkeeper Name` varchar(20) NOT NULL,
  `2.Mobile No` int(10) NOT NULL,
  `2.Adhar No` int(12) NOT NULL,
  `3.Shopkeeper Name` varchar(20) NOT NULL,
  `3.Mobile No` int(10) NOT NULL,
  `3.Adhar No` int(12) NOT NULL,
  `Full Address` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Post Office` varchar(20) NOT NULL,
  `Pin Code` int(8) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Country` varchar(6) NOT NULL,
  `Valueation` int(10) NOT NULL,
  `About Your Shop` varchar(200) NOT NULL,
  `Mission` varchar(200) NOT NULL,
  `Vision` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop information`
--

INSERT INTO `shop information` (`Id`, `Shop Name`, `GST No`, `Shop Mobile No`, `1.Shopkeeper Name`, `1.Mobile No`, `1.Adhar No`, `2.Shopkeeper Name`, `2.Mobile No`, `2.Adhar No`, `3.Shopkeeper Name`, `3.Mobile No`, `3.Adhar No`, `Full Address`, `City`, `Post Office`, `Pin Code`, `State`, `Country`, `Valueation`, `About Your Shop`, `Mission`, `Vision`) VALUES
(0, 'Enter GST No.', 0, 0, 'Enter Your Mobile No', 0, 0, 'Enter Your Mobile No', 0, 0, 'Enter Your Mobile No', 0, 0, 'Enter Your Full Address ', 'Enter Your City ', '', 0, 'Enter Your Stat', 'Enter ', 0, '10 या 20----50---90 साल बाद आप अपनी दुकान को कहॉ तक ले कर जाएगें मतलब आप को लोग मार्केट में किस नाम से जानेगें', '10 या 20----50---90 साल बाद आप अपनी दुकान को कहॉ तक ले कर जाएगें मतलब आप को लोग मार्केट में किस नाम से जानेगें', '10 या 20----50---90 साल बाद आप अपनी दुकान को कहॉ तक ले कर जाएगें मतलब आप को लोग मार्केट में किस नाम से जानेगें');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `DoB` varchar(10) NOT NULL,
  `who_are_you` varchar(200) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `DoB`, `who_are_you`, `Email`, `phone`, `Address`, `pic`) VALUES
(33, 'Suzi ormen', '12-2-2000', 'Investor', 'suziormen@swmo.com', '9033505470', 'Boston USA', 'img8.jpg'),
(34, 'raju', '12/09/1999', 'Business Man', 'raju@gmail.com', '1276', 'UP', 'indian_7.jpg'),
(35, 'Ramanad  kumar', '12/07/1998', 'Business Man', 'ramanand@gmail.com', '9794242550', 'Bhatni Up', 'indian_6.jpg'),
(36, 'Arjun  Kaur', '1/2/78', 'Investor', 'arjun45@gmail.com', '656789', 'Darbhanga Bihar ', 'staff-2.jpg'),
(37, 'Suresh  Yadav', '12/2/99', 'Business Man', 'surech56@gmail.com', '32451328', 'Varansi  U P', 'img3.jpg'),
(38, 'Md Saif', '12/2/88', 'Business Man', 'mdsaif786@gmail.com', '234786', 'Gazipur  U P', 'img4.jpg'),
(39, 'Arvind Raj', '12/2/99', 'INVESTOR', 'arvind787@gmail.com', '32489', 'KOpagang Mau UP', 'img7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registrationr2`
--
ALTER TABLE `registrationr2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shop information`
--
ALTER TABLE `shop information`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
