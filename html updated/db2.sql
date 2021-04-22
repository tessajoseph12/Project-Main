-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 07:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_channels`
--

CREATE TABLE `tbl_channels` (
  `ch_id` int(10) NOT NULL,
  `ch_name` varchar(14) NOT NULL,
  `ch_no` varchar(8) NOT NULL,
  `ch_type` varchar(15) NOT NULL,
  `ch_amt` int(8) NOT NULL,
  `ch_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_channels`
--

INSERT INTO `tbl_channels` (`ch_id`, `ch_name`, `ch_no`, `ch_type`, `ch_amt`, `ch_status`) VALUES
(1, 'Cityline', '101', 'default', 0, 1),
(2, 'Abc', '102', 'entertainment', 18, 1),
(3, 'Safari', '103', 'Entertainment', 15, 1),
(4, 'food dfgdfgdf', '105', 'food and travel', 20, 1),
(5, 'xyz', '103', 'entertainment', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connection`
--

CREATE TABLE `tbl_connection` (
  `cid` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `due_date` varchar(8) NOT NULL,
  `c_status` int(3) NOT NULL,
  `balance_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cust_bankaccnt`
--

CREATE TABLE `tbl_cust_bankaccnt` (
  `payer_id` int(10) NOT NULL,
  `acc_name` varchar(10) NOT NULL,
  `acc_no` int(18) NOT NULL,
  `branch_name` varchar(15) NOT NULL,
  `ifsc_code` int(20) NOT NULL,
  `branch_loc` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desig`
--

CREATE TABLE `tbl_desig` (
  `did` int(10) NOT NULL,
  `d_name` varchar(18) NOT NULL,
  `d_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desig`
--

INSERT INTO `tbl_desig` (`did`, `d_name`, `d_status`) VALUES
(1, 'admin', 1),
(2, 'customer', 1),
(3, 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fid` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `fd_cont` varchar(40) NOT NULL,
  `fstatus` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fid`, `login_id`, `fd_cont`, `fstatus`) VALUES
(1, 7, 'Signal not found', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `u_status` int(5) NOT NULL,
  `did` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`, `u_status`, `did`) VALUES
(1, 'admin@gmail.com', 'Admin12#$', 1, '1'),
(2, 'heera@gmail.com', 'Heera12#$', 1, '2'),
(3, 'annmathew@gmail.com', 'Ann12#$', 1, '2'),
(4, 'abel@gmail.com', 'Abel12#$', 1, '2'),
(5, 'denny@gmail.com', 'Denny12#$', 1, '2'),
(6, 'siji@gmail.com', 'Siji12#$', 1, '2'),
(7, 'della@gmail.com', 'Della12#$', 1, '2'),
(8, 'edwin@gmail.com', 'Edwin12#$', 1, '2'),
(9, 'daniel@gmail.com', 'Daniel12#$', 1, '2'),
(10, 'aparna@gmail.com', 'Aparna12#$', 1, '2'),
(11, 'tessa@gmail.com', 'Tessa12#$', 1, '2'),
(12, 'annm@gmail.com', 'Annm12#$', 1, '2'),
(13, 'zoya@yahoo.com', 'Zoya12#$', 1, '2'),
(14, 'neena@gmail.com', 'Neena12#$', 1, '2'),
(15, 'reena@gmail.com', 'Reena12#$', 1, '2'),
(16, 'daisy@gmail.com', 'Daisy12#$', 1, '2'),
(17, '', '', 1, '2'),
(18, 'stella@gmail.com', 'Stella12#$', 1, '2'),
(19, 'sarah@gmail.com', '', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `payer_id` int(12) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `pay_date` varchar(8) NOT NULL,
  `pay_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `plan_id` int(10) NOT NULL,
  `plan_name` varchar(20) NOT NULL,
  `plan_desc` varchar(40) NOT NULL,
  `plan_amt` int(10) NOT NULL,
  `plan_date` varchar(12) NOT NULL,
  `plan_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plan`
--

INSERT INTO `tbl_plan` (`plan_id`, `plan_name`, `plan_desc`, `plan_amt`, `plan_date`, `plan_status`) VALUES
(1, 'Basic', 'primary channels only', 200, '1/1/2020', 1),
(2, 'Classic Malayalam', 'malayalam channels only', 100, '1/1/2020', 1),
(3, 'Classic Hindi', 'basic hindi channels', 135, '12/4/2019', 1),
(4, 'Sports Special', 'sports channels', 220, '12/4/2019', 1),
(5, 'Kids zone', 'Cartoons', 180, '26/6/2019', 1),
(6, 'Malayalam Premium', 'Basic plus ', 321, '12/5/2019', 1),
(7, 'BBB', 'csdd', 356, '1/1/2012', 1),
(8, 'Basic plus', 'standard set plus 4 channels', 344, '1/1/2012', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recharge`
--

CREATE TABLE `tbl_recharge` (
  `re_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `re_amt` int(10) NOT NULL,
  `re_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg-id` int(15) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(28) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `main_city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg-id`, `login_id`, `name`, `phone_number`, `address`, `main_city`) VALUES
(1, 1, 'admin', '8743886522', 'Admin, cityline ', 'Cochin'),
(2, 2, 'Heera Menon', '9766548891', 'Heera home', 'kollam'),
(3, 3, 'Ann Mathew', '7844345667', 'spring field', 'Thrissur'),
(4, 4, 'Abel anoop', '8606784577', 'Hno.13, garden view ', 'calicut'),
(5, 5, 'Denny Francis', '7889843345', 'fl.no.32, Indira nagar ', 'Thrissur'),
(6, 6, 'sijimol cyriac', '6238339394', 'H.no 12, Mansion st', 'Kottayam'),
(7, 7, 'Della Raju', '8738359456', 'Fl.no.23 spring valley', 'Thrissur'),
(8, 8, 'Edwin George', '8977561122', 'center square st ', 'Ernakulam'),
(9, 9, 'Daniel Radcliffe', '6523125678', 'Gryffindor, Hogwarts', 'Ernakulam'),
(10, 10, 'Aparna Anil', '7699522123', 'Hno.13, gokulam park ', 'Trivandrum'),
(11, 11, 'Tessa Joseph', '9447055097', 'H.no.12, madison drive', 'Ernakulam'),
(12, 12, 'Tina Joseph', '9447666493', 'Peruvachira, St Thomas Nagar, Udaya', 'Ernakulam'),
(13, 13, 'Zoya ', '8769894312', 'Hoogli Palace, East Fort Gate', 'kollam'),
(14, 15, 'Neena Jacob', '8956882934', 'Neena\'s villa', 'Thrissur'),
(15, 17, '', '', '', ''),
(16, 18, 'Stella', '8764590839', 'Springfield', 'kottayam'),
(17, 19, 'Sarah James', '', 'Springfield', 'kollam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_channels`
--
ALTER TABLE `tbl_channels`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `tbl_connection`
--
ALTER TABLE `tbl_connection`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_cust_bankaccnt`
--
ALTER TABLE `tbl_cust_bankaccnt`
  ADD PRIMARY KEY (`payer_id`);

--
-- Indexes for table `tbl_desig`
--
ALTER TABLE `tbl_desig`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `tbl_recharge`
--
ALTER TABLE `tbl_recharge`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_channels`
--
ALTER TABLE `tbl_channels`
  MODIFY `ch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_connection`
--
ALTER TABLE `tbl_connection`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cust_bankaccnt`
--
ALTER TABLE `tbl_cust_bankaccnt`
  MODIFY `payer_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_desig`
--
ALTER TABLE `tbl_desig`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `plan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_recharge`
--
ALTER TABLE `tbl_recharge`
  MODIFY `re_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg-id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
