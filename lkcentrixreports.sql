-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 04:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkcentrixreports`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `auditlog_id` bigint(20) NOT NULL,
  `auditlog_user` varchar(45) NOT NULL,
  `auditlog_reportname` varchar(45) NOT NULL,
  `auditlog_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deedoffice`
--

CREATE TABLE `deedoffice` (
  `deedoffice_id` bigint(20) NOT NULL,
  `deedoffice_description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deedoffice`
--

INSERT INTO `deedoffice` (`deedoffice_id`, `deedoffice_description`) VALUES
(1, 'ALL'),
(2, 'BLOEMFONTEIN'),
(3, 'CAPE TOWN'),
(4, 'JOHANNESBURG'),
(5, 'KING WILLIAMS TOWN'),
(6, 'MPUMALANGA'),
(7, 'PIETERMARITZBURG'),
(8, 'PRETORIA'),
(9, 'UMTATA'),
(10, 'VRYBURG'),
(11, 'LIMPOPO');

-- --------------------------------------------------------

--
-- Table structure for table `deviation`
--

CREATE TABLE `deviation` (
  `deviation_id` bigint(20) NOT NULL,
  `deviation_description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deviation`
--

INSERT INTO `deviation` (`deviation_id`, `deviation_description`) VALUES
(1, 0),
(2, 1),
(3, 2),
(4, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` bigint(20) NOT NULL,
  `province_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Eastern Cape'),
(2, 'Free State'),
(3, 'Gauteng'),
(4, 'KwaZulu-Natal'),
(5, 'Limpopo'),
(6, 'Mpumalanga'),
(7, 'Northern Cape'),
(8, 'North West'),
(9, 'Eastern Cape');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` bigint(20) NOT NULL,
  `report_name` varchar(45) NOT NULL,
  `report_link` varchar(45) NOT NULL,
  `icon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `report_link`, `icon`) VALUES
(1, 'Trace Report', 'tracereport', 'fa fa-unlock'),
(2, 'Deed Report', 'deedreport', 'fa fa-home'),
(3, 'Verification Report', 'verificationreport', 'fa fa-check-square-o'),
(4, 'Procurement Report', 'procurementreport', 'fa fa-ship'),
(5, 'Indigent Report', 'indigentreport', 'fa fa-unlock');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `report_type_id` bigint(20) NOT NULL,
  `report_type_description` varchar(45) NOT NULL,
  `report_type_report_id` bigint(20) NOT NULL,
  `report_type_link` varchar(45) NOT NULL,
  `icon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`report_type_id`, `report_type_description`, `report_type_report_id`, `report_type_link`, `icon`) VALUES
(1, 'ID Search', 1, 'idsearch', 'fa fa-key'),
(2, 'Address Search', 1, 'addresssearch', 'fa fa-address-book'),
(3, 'Telephone Search', 1, 'telephonesearch', 'fa fa-phone-square'),
(5, 'Individual Search', 2, 'individualsearch', 'fa fa-key'),
(6, 'ID Verification', 3, 'idverification', 'fa fa-id-card'),
(7, 'ID Facial Verification', 3, 'idphotoverification', 'fa fa-id-badge'),
(8, 'Company Name', 4, 'companyname', 'fa-houzz'),
(9, 'Company Registration number', 4, 'companyregistrationno', 'fa-sort-numeric-asc'),
(10, 'ID Search', 5, 'idsearch', 'fa fa-search');

-- --------------------------------------------------------

--
-- Table structure for table `searchtype`
--

CREATE TABLE `searchtype` (
  `search_type_id` bigint(20) NOT NULL,
  `search_type_description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `searchtype`
--

INSERT INTO `searchtype` (`search_type_id`, `search_type_description`) VALUES
(1, 'Exact Search'),
(2, 'Deviation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`auditlog_id`);

--
-- Indexes for table `deedoffice`
--
ALTER TABLE `deedoffice`
  ADD PRIMARY KEY (`deedoffice_id`);

--
-- Indexes for table `deviation`
--
ALTER TABLE `deviation`
  ADD PRIMARY KEY (`deviation_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`report_type_id`);

--
-- Indexes for table `searchtype`
--
ALTER TABLE `searchtype`
  ADD PRIMARY KEY (`search_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditlog`
--
ALTER TABLE `auditlog`
  MODIFY `auditlog_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deedoffice`
--
ALTER TABLE `deedoffice`
  MODIFY `deedoffice_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deviation`
--
ALTER TABLE `deviation`
  MODIFY `deviation_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `report_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `searchtype`
--
ALTER TABLE `searchtype`
  MODIFY `search_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
