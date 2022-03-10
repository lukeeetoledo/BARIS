-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 07:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baris_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `system_accounts_tbl`
--

CREATE TABLE `system_accounts_tbl` (
  `user_ID` varchar(32) NOT NULL,
  `account_Username` varchar(32) NOT NULL,
  `account_Password` varchar(32) NOT NULL,
  `account_Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_accounts_tbl`
--

INSERT INTO `system_accounts_tbl` (`user_ID`, `account_Username`, `account_Password`, `account_Type`) VALUES
('BaRIS_622997e14bbbe', 'testuser1', 'cc03e747a6afbbcbf8be7668acfebee5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_users_tbl`
--

CREATE TABLE `system_users_tbl` (
  `user_ID` varchar(32) NOT NULL,
  `user_Fname` varchar(50) NOT NULL,
  `user_Mname` varchar(50) NOT NULL,
  `user_Lname` varchar(50) NOT NULL,
  `user_Suffix` varchar(50) DEFAULT NULL,
  `user_Gender` varchar(20) NOT NULL,
  `user_Birthdate` varchar(50) NOT NULL,
  `user_Birthplace` varchar(70) NOT NULL,
  `user_Civilstatus` varchar(50) NOT NULL,
  `user_Religion` varchar(50) NOT NULL,
  `user_Contactnumber` int(11) NOT NULL,
  `user_Region` varchar(50) NOT NULL,
  `user_Province` varchar(90) NOT NULL,
  `user_Citymunicipality` varchar(90) NOT NULL,
  `user_Barangay` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_users_tbl`
--

INSERT INTO `system_users_tbl` (`user_ID`, `user_Fname`, `user_Mname`, `user_Lname`, `user_Suffix`, `user_Gender`, `user_Birthdate`, `user_Birthplace`, `user_Civilstatus`, `user_Religion`, `user_Contactnumber`, `user_Region`, `user_Province`, `user_Citymunicipality`, `user_Barangay`) VALUES
('BaRIS_622997e14bbbe', 'Test', 'User', 'A', '', 'Male', 'November 2, 1999', 'Manila', 'Single', 'Roman Catholic', 2147483647, 'National Capital Region', 'Metro Manila', 'Pasay City', 'Barangay 54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `system_accounts_tbl`
--
ALTER TABLE `system_accounts_tbl`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `system_users_tbl`
--
ALTER TABLE `system_users_tbl`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
