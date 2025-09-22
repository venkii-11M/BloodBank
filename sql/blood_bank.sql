-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 09:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbloodbank`
--

CREATE TABLE `addbloodbank` (
  `id` int(11) NOT NULL,
  `BloodBankName` varchar(200) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `ContactPerson` varchar(30) NOT NULL,
  `bankemail` varchar(30) NOT NULL,
  `FirstRegistrationDate` date NOT NULL,
  `Address` text NOT NULL,
  `PinCode` int(6) NOT NULL,
  `State` varchar(30) NOT NULL,
  `District` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbloodbank`
--

INSERT INTO `addbloodbank` (`id`, `BloodBankName`, `Category`, `ContactNo`, `ContactPerson`, `bankemail`, `FirstRegistrationDate`, `Address`, `PinCode`, `State`, `District`, `city`) VALUES
(31, 'Arpan Blood Centre Nanded', 'Gov.', '9767964849', 'venkatesh', 'vmachanwar@gmail.com', '2025-06-17', 'shivaji nagar', 431602, 'Maharashra', 'Nanded', 'Nanded'),
(32, 'CHAITANYA BLOOD BANK', 'private', '9767964849', 'CHAITANYA', 'chaitanyaudgirkar02@gmail.com', '2005-12-08', 'HANUMAN PETH NANDED MAHARASHTRA', 431602, 'Maharashra', 'Nanded', 'Nanded'),
(33, 'SOHAM BLOOD BANK', 'private', '7796832034', 'Soham', 'sohamgadekar@gmail.com', '2005-02-20', 'Namaskar chowk Near MGM\'s COLLEGE OF ENGINEERING NANDED MAHARASHTRA', 431602, 'Maharashra', 'Nanded', 'Nanded'),
(37, 'Blood bank', 'Gov.', '9767964849', 'venkatesh', 'vmachanwar@gmail.com', '2025-06-19', 'shivaji', 431602, 'Maharashra', 'Nanded', 'Nanded'),
(38, 'Blood bank1', 'Gov.', '976796484', 'venkatesh', 'vmachanwar@gmail.com', '2025-06-19', 'shivaji', 431602, 'Maharashra', 'Nanded', 'Nanded'),
(39, 'Blood Centre Nanded', 'Gov.', '9767964985', 'venkatesh', 'machanwarom@gmail.com', '2025-06-02', 'tehra nagar nanded', 431452, 'Maharashra', 'Nanded', 'nanded');

-- --------------------------------------------------------

--
-- Table structure for table `campregistration`
--

CREATE TABLE `campregistration` (
  `id` int(11) NOT NULL,
  `orgtype` varchar(100) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `organizername` varchar(30) NOT NULL,
  `orgphone` int(15) NOT NULL,
  `orgemail` varchar(25) NOT NULL,
  `campname` varchar(30) NOT NULL,
  `campaddres` text NOT NULL,
  `state` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `campdate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campregistration`
--

INSERT INTO `campregistration` (`id`, `orgtype`, `orgname`, `organizername`, `orgphone`, `orgemail`, `campname`, `campaddres`, `state`, `district`, `city`, `campdate`, `starttime`, `endtime`) VALUES
(1, '1', 'Dera Sacha Sauda', 'venatesh', 2147483647, 'machanwar@gmail.com', 'blood donate', 'shivaji nagar', 'Maharashra', 'Nanded', 'nanded', '2025-06-19', '19:54:00', '23:57:00'),
(2, '1', 'SOHAM ORGANIZATION', 'SOHAM NARENDRA GADEKAR', 2147483647, 'sohamgadekar@gmail.com', 'SOHAM BLOOD CAMP', 'NAMASKAR CHOWK NEAR MGM\'s COLLEGE OF ENGINEERING NANDED MAHARASHTRA', 'Maharashra', 'Nanded', 'Nanded', '2025-06-18', '10:30:00', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donorregistration`
--

CREATE TABLE `donorregistration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donorregistration`
--

INSERT INTO `donorregistration` (`id`, `fullname`, `emailid`, `mobileno`, `birthdate`, `gender`, `bloodgroup`, `address`, `city`, `country`, `state`, `district`, `pincode`) VALUES
(5, 'venkatesh machanwar', 'vmachanwar@gmail.com', 2147483647, '2004-12-11', '1', '1', 'tehra nagar', 'nanded', '0', 'Maharashra', 'Nanded', 431602),
(6, 'venkatesh machanwar', 'vmachanwar@gmail.com', 2147483647, '2004-12-11', 'Male', 'A+Ve', 'tehra nagar', 'nanded', 'India', 'Maharashra', 'Nanded', 431602),
(7, 'Venkatesh machanwar', 'machanwarom@gmail.com', 2147483647, '2025-06-18', '0', 'A+Ve', 'vhgvh', 'samrala', 'India', 'Maharashra', 'Nanded', 431602),
(8, 'Vaibhav Rajkumar Paike ', 'vaibhavpaike@gmail.com', 2147483647, '2004-02-01', 'Male', 'A-Ve', 'Kabra Nagar Nanded Maharashtra', 'Nanded', 'India', 'Maharashra', 'Nanded', 431602);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbloodbank`
--
ALTER TABLE `addbloodbank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`BloodBankName`),
  ADD UNIQUE KEY `Blood Bank Name` (`BloodBankName`),
  ADD UNIQUE KEY `Blood Bank Name_2` (`BloodBankName`),
  ADD UNIQUE KEY `BloodBankName` (`BloodBankName`,`ContactPerson`,`Address`) USING HASH;

--
-- Indexes for table `campregistration`
--
ALTER TABLE `campregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorregistration`
--
ALTER TABLE `donorregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbloodbank`
--
ALTER TABLE `addbloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `campregistration`
--
ALTER TABLE `campregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donorregistration`
--
ALTER TABLE `donorregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
