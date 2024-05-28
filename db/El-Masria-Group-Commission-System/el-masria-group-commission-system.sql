-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el-masria-group-commission-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `description`) VALUES
(1, 'East', 'East'),
(2, 'West', 'West');

-- --------------------------------------------------------

--
-- Table structure for table `area_direct_confilict`
--

CREATE TABLE `area_direct_confilict` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `is_over_seas` enum('yes','no') NOT NULL,
  `area_master_percentage` varchar(255) NOT NULL,
  `area_slave_percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_direct_confilict`
--

INSERT INTO `area_direct_confilict` (`id`, `department_id`, `is_over_seas`, `area_master_percentage`, `area_slave_percentage`) VALUES
(1, 1, 'yes', '50', '50'),
(2, 1, 'no', '50', '50'),
(3, 2, 'yes', '50', '50'),
(4, 2, 'no', '50', '50'),
(5, 3, 'no', '75', '25'),
(6, 3, 'yes', '50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `area_indirect_confilict`
--

CREATE TABLE `area_indirect_confilict` (
  `id` int(11) NOT NULL,
  `broker_type` varchar(255) NOT NULL,
  `is_over_seas` enum('yes','no') NOT NULL,
  `sales_percentage` varchar(255) NOT NULL,
  `broker_percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_indirect_confilict`
--

INSERT INTO `area_indirect_confilict` (`id`, `broker_type`, `is_over_seas`, `sales_percentage`, `broker_percentage`) VALUES
(1, 'mega', 'yes', '50%', '50%'),
(2, 'solo', 'yes', '75%', '25%'),
(3, 'mega', 'no', '75%', '25%'),
(4, 'solo', 'no', '75%', '25%');

-- --------------------------------------------------------

--
-- Table structure for table `broker_commission_stack_holder`
--

CREATE TABLE `broker_commission_stack_holder` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `commission_percentage` varchar(255) NOT NULL,
  `commission_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`) VALUES
(1, 'Contract', 'Contract'),
(2, 'Operation', 'Operation'),
(3, 'Sales', 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `manger_id` int(11) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `job_title` int(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `department_id`, `manger_id`, `area_id`, `job_title`, `mobile`, `bank_account`, `level`) VALUES
(1, 'Moustafa Mohamed Ibrahim', 1, NULL, 1, 1, '1001234567', 'XXX-XXX-XXX', 0),
(2, 'Ahmed Tamer Ibrahim', 2, NULL, 1, 3, '1001234568', 'XXX-XXX-XXX', 0),
(3, 'Ibrahim Mohamed Ibrahim', 3, NULL, 1, 5, '1001234569', 'XXX-XXX-XXX', 0),
(4, 'Wagdy Mohamed Ibrahim', 3, 3, 1, 6, '1001234570', 'XXX-XXX-XXX', 1),
(5, 'Ahmed Wagdy Ibrahim', 3, 4, 1, 7, '1001234571', 'XXX-XXX-XXX', 2),
(6, 'Alla Wagdy Ibrahim', 1, 1, 1, 2, '1001234572', 'XXX-XXX-XXX', 1),
(7, 'Ahmed Wagdy Alla', 2, 2, 1, 4, '1001234573', 'XXX-XXX-XXX', 1),
(8, 'Ahmed Kamal Ibrahim', 3, 5, 1, 8, '1001234574', 'XXX-XXX-XXX', 1),
(9, 'Mohamed Wagdy Mohamed', 1, 1, 2, 2, '1001234575', 'XXX-XXX-XXX', 1),
(10, 'Rady Wagdy Rady', 2, 2, 1, 4, '1001234576', 'XXX-XXX-XXX', 1),
(11, 'teleb Wagdy teleb', 3, NULL, 1, 8, '1001234577', 'XXX-XXX-XXX', 3),
(12, 'Ahmed Moustafa Moustafa', 1, 1, 1, 2, '1001234578', 'XXX-XXX-XXX', 1),
(13, 'Dalya Wagdy Wagdy', 2, 2, 1, 4, '1001234579', 'XXX-XXX-XXX', 1),
(14, 'Mohamed Magdy Ibrahim', 3, 5, 1, 8, '1001234580', 'XXX-XXX-XXX', 3),
(15, 'Magdy MagdyAdel', 3, NULL, 1, 8, '1001234581', 'XXX-XXX-XXX', 3),
(16, 'Adel Magdy Ibrahim', 3, NULL, 1, 8, '1001234582', 'XXX-XXX-XXX', 3),
(17, 'Adel Adel Ibrahim', 3, NULL, 2, 8, '1001234583', 'XXX-XXX-XXX', 3),
(19, 'Walaa Wagdy Mohamed', 3, NULL, 2, 7, '1001234583', 'XXX-XXX-XXX', 2),
(20, 'Ahmed AliAliAli Mohamed', 2, NULL, 2, 3, '1001234568', 'XXX-XXX-XXX', 0),
(21, 'Ahmed AliAliAli Ahmed', 2, 20, 2, 4, '1001234568', 'XXX-XXX-XXX', 1),
(22, 'Tamer Tamer Tamer', 2, NULL, 2, 4, '1001234568', 'XXX-XXX-XXX', 1),
(23, 'alyaa ahmad nagy', 1, NULL, 2, 2, '1001234581', 'XXX-XXX-XXX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `commission_percentage` varchar(11) DEFAULT NULL,
  `commission_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`id`, `name`, `commission_percentage`, `commission_value`) VALUES
(1, 'Contract Manager', NULL, 150),
(2, 'Contract Specialist', NULL, 200),
(3, 'Operation Manager', NULL, 150),
(4, 'Sales Admin', NULL, 200),
(5, 'CCO', '0.04', NULL),
(6, 'Sales Director', '0.04', NULL),
(7, 'Sales Manager', '0.02', NULL),
(8, 'Sales Sepecialist', '0.01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `Name`, `area_id`) VALUES
(1, 'ISOLA - OCTOBER GARDENS', 2),
(2, 'ISOLA - SHERATON', 1),
(3, 'ISOLA VILLA', 2),
(4, 'Bait Elmasria', 2);

-- --------------------------------------------------------

--
-- Table structure for table `unit_commission_direct`
--

CREATE TABLE `unit_commission_direct` (
  `id` int(11) NOT NULL,
  `emplyee_id` int(11) NOT NULL,
  `emplyee_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `manger` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `unit_number` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `unit_price` varchar(255) NOT NULL,
  `contract_date` varchar(255) NOT NULL,
  `is_over_seas` varchar(255) NOT NULL,
  `unit_commission_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_sold`
--

CREATE TABLE `unit_sold` (
  `id` int(11) NOT NULL,
  `unit_number` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `unit_price` varchar(255) NOT NULL,
  `Contract_Date` datetime NOT NULL,
  `is_over_seas` enum('yes','no') NOT NULL,
  `is_launch` enum('yes','no') NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_sold`
--

INSERT INTO `unit_sold` (`id`, `unit_number`, `building_name`, `project_name`, `unit_price`, `Contract_Date`, `is_over_seas`, `is_launch`, `area`) VALUES
(1, '111', 'سكنى', 'Elmasria Simple', '1000000', '2010-11-13 07:42:51', 'no', 'no', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_direct_confilict`
--
ALTER TABLE `area_direct_confilict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_indirect_confilict`
--
ALTER TABLE `area_indirect_confilict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broker_commission_stack_holder`
--
ALTER TABLE `broker_commission_stack_holder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_commission_direct`
--
ALTER TABLE `unit_commission_direct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_sold`
--
ALTER TABLE `unit_sold`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area_direct_confilict`
--
ALTER TABLE `area_direct_confilict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area_indirect_confilict`
--
ALTER TABLE `area_indirect_confilict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `broker_commission_stack_holder`
--
ALTER TABLE `broker_commission_stack_holder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job_title`
--
ALTER TABLE `job_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit_commission_direct`
--
ALTER TABLE `unit_commission_direct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_sold`
--
ALTER TABLE `unit_sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
