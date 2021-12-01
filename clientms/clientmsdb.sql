-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555562, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-10-21 07:01:36'),
(2, 'Admin', 'admin', 1234567890, 'admin@gmail.com', '12345', '2021-11-21 13:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `JobNo` int(4) NOT NULL,
  `CustomerName` varchar(20) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `ReceivedDate` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `ModelNo` int(11) DEFAULT NULL,
  `Problem` text DEFAULT NULL,
  `RepairStatus` text DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Accessories` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`JobNo`, `CustomerName`, `Phone`, `ReceivedDate`, `ReturnDate`, `ModelNo`, `Problem`, `RepairStatus`, `Amount`, `Accessories`) VALUES
(1, 'firstnhb', 12345, '0000-00-00', '0000-00-00', 12345, 'no', 'Pending', 1200, ''),
(2, 'rrr', 21474836, '0000-00-00', '0000-00-00', 12345, 'abcdef ', 'Pending', 2000, ''),
(3, ',', 2147483647, '0000-00-00', '0000-00-00', 12345, ' jjh', 'jhjj', 1200, ''),
(4, '', 2147483647, '0000-00-00', '0000-00-00', 0, ' f', 'fffff', 0, ''),
(5, '', 12345, '2021-01-02', '2012-02-21', 123, ' dnndb', 'sdm', 45, ''),
(6, 'afrid', 990210948, '0000-00-00', '0000-00-00', 2147483647, ' ndsjnjdnddjdd jdjdjdjdjjdjdjdjjddjjd', 'done', 120000, ' s'),
(8, 'old', 12, '0000-00-00', '0000-00-00', 12121212, 'nnsnnsns ', 'nsns', 0, 'jdjj '),
(9, 'hello', 12, '0000-00-00', '0000-00-00', 21, ',m ', 'Repaired', 0, ' w'),
(12, 'yoyopp', 11111111, '0000-00-00', '0000-00-00', 999999, '1111 54554', 'Other', 20, 'no'),
(13, 'ray', 0, '0000-00-00', '0000-00-00', 0, 'lll ', 'Pending', 0, 'll '),
(14, 'ddd', 0, '0000-00-00', '0000-00-00', 0, 'jjj ', 'Pending', 0, 'jhhj '),
(15, 'rayyan', 323, '0000-00-00', '0000-00-00', 0, 'mm ', 'Pending', 0, 'k '),
(16, 'ddduuu', 121, '2021-11-16', '0000-00-00', 0, ' d', 'Other', 0, ' d'),
(17, 'xx', 0, '0000-00-00', '0000-00-00', 0, 'h ', 'Pending', 0, 'h '),
(18, 'dd', 0, '2021-11-28', '2021-11-19', 0, ' ', 'Pending', 0, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `ID` int(10) NOT NULL,
  `Userid` varchar(120) DEFAULT NULL,
  `ServiceId` varchar(120) DEFAULT NULL,
  `BillingId` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Billid` int(11) DEFAULT 1000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`ID`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`, `Billid`) VALUES
(33, '0', '1', '623603346', '2021-11-28 13:34:00', 1000),
(34, '0', '1', '375758755', '2021-11-28 14:23:54', 1000),
(35, '0', '13', '547319127', '2021-11-28 14:27:52', 1000),
(36, '0', '1', '885991569', '2021-11-28 14:30:01', 1000),
(37, '0', '1', '957721040', '2021-11-28 14:36:26', 1000),
(38, '1', '1', '427945036', '2021-11-28 14:37:33', 1000),
(39, '1', '1', '107737460', '2021-11-28 14:37:46', 1000),
(40, '1', '10', '107737460', '2021-11-28 14:37:46', 1000),
(41, '1', '12', '107737460', '2021-11-28 14:37:46', 1000),
(42, '1', '1', '285693602', '2021-11-28 15:00:36', 1000),
(43, '3', '1', '321543126', '2021-11-28 15:11:51', 1000),
(44, '1', '1', '3108', '2021-11-28 15:12:32', 1000),
(45, '1', '1', '3943', '2021-11-28 15:12:52', 1000),
(46, '4', '13', '2466', '2021-11-28 15:32:11', 1000),
(47, '4', '14', '2466', '2021-11-28 15:32:11', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', 'bghjgjhg', NULL, NULL, '2019-10-24 07:54:52'),
(2, 'contactus', 'Contact Us', 'Kavoor, Mangalore 574142', 'contact@softnetcenter.com', 9876543210, '2019-10-24 07:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServicePrice` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServicePrice`, `CreationDate`) VALUES
(1, 'Website Developments', '121', '2019-10-22 13:42:29'),
(10, 'Web Development', '356', '2019-11-26 05:02:54'),
(12, 'Samsung', '1000', '2020-05-02 05:43:34'),
(13, 'Service ', '500', '2021-11-21 14:06:12'),
(14, 'Service ', '500', '2021-11-26 16:39:23'),
(15, 'dd', 'f', '2021-11-28 16:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`JobNo`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `JobNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
