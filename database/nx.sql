-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 04:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nx`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(5) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `contact_mobile` bigint(11) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `contact_name`, `contact_mobile`, `contact_email`, `message`, `status`, `is_deleted`, `created_on`, `updated_on`) VALUES
(1, 'Paresh Chaudhari', 8806671212, 'hjvvhvjh@gnqil.cds', 'nhhhh', '1', '0', '0000-00-00 00:00:00', '2020-04-28 19:54:28'),
(2, 'Paresh Chaudhari', 8806671212, 'hjvvhvjh@gnqil.cds', 'eee', '1', '0', NULL, '2020-04-28 19:55:41'),
(3, 'Paresh Chaudhari', 8855224411, 'hjvvhvjh@gnqil.cdseeee', 'eeeeff', '1', '0', '2020-04-28 12:56:50', '2020-04-28 19:56:50'),
(4, 'Paresh Chaudhari', 8806671212, 'hjvvhvjh@gnqil.cds', 'qweeweee', '1', '0', '2020-04-28 15:43:56', '2020-04-28 22:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_phone` varchar(12) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`id`, `first_name`, `contact_email`, `contact_phone`, `message`, `status`, `is_deleted`, `created_on`, `updated_on`) VALUES
(1, 'rohit', 'rohit@gmail.com', '94956723595', 'rwe', '1', '0', '0000-00-00 00:00:00', '2020-03-16 08:54:31'),
(2, 'dqw', 'rahul@gamil.com', '01234567890', 'rfewrr rwq ', '1', '0', '0000-00-00 00:00:00', '2020-03-16 08:54:35'),
(3, 'rohit ggg', 'ld@gmailcom', '5588774466', 'eeee', '1', '1', '0000-00-00 00:00:00', '2020-04-28 19:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `mobile_no` bigint(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `reset_password` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `first_name`, `last_name`, `company_name`, `mobile_no`, `address`, `email`, `password`, `reset_password`, `status`, `is_deleted`, `created_on`, `updated_on`) VALUES
(1, 'xyz', 'pac', 'cool', 7896523148, 'pune', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '1', '0', NULL, NULL),
(2, 'paresh', 'chaudhari', 'pac', 7752142365, 'jalgaon', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', '', '1', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `first_name`, `middle_name`, `last_name`, `user_email`, `phone_number`, `status`, `is_deleted`, `created_on`, `updated_on`) VALUES
(1, 'asdf', 'qew', 'auti', 'rohit@gmail.com', '94956723595', '1', '0', NULL, '2020-03-16 10:19:43'),
(2, 'as', 'sqwe', 'pawar', 'rahul@gamil.com', '01234567890', '1', '0', NULL, '2020-03-16 10:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
