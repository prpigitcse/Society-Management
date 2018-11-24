-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 03:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_society`
--

-- --------------------------------------------------------

--
-- Table structure for table `labour_table`
--

CREATE TABLE `labour_table` (
  `labour_id` int(255) NOT NULL,
  `labour_name` varchar(255) NOT NULL,
  `labour_category` varchar(255) NOT NULL,
  `labour_number` varchar(255) NOT NULL,
  `labour_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_table`
--

INSERT INTO `labour_table` (`labour_id`, `labour_name`, `labour_category`, `labour_number`, `labour_password`) VALUES
(1, 'harry', 'ELECTRICITY', '7829487050', 'harry'),
(2, 'bob', 'WATER', '9845471591', 'bob'),
(3, 'mary', 'PARKING', '9591318694', 'mary'),
(4, 'sham', 'CLEANLINESS', '9916806095', 'sham'),
(5, 'rosy', 'SECURITY', '7829487050', 'rosy');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `issue_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `labour_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`issue_id`, `category`, `user_name`, `subject`, `issue`, `otp`, `status`, `start_date`, `end_date`, `labour_name`) VALUES
(1, 'ELECTRICITY', '', 'power supply', 'Dimmer switches that donâ€™t adjust light properly', 'qmpH6', 'close', '2018-11-21', '2018-11-22', 'mary'),
(2, 'ELECTRICITY', '', 'hello anush', 'kjwrhgkjhrk', 'pqH6m', 'open', '2018-11-22', '0000-00-00', ''),
(3, 'CLEANLINESS', '', 'dirty', 'road is not clean', 'Q5r8nz', 'open', '2018-11-24', '0000-00-00', ''),
(4, 'PARKING', '', '[parking issue', 'parking area is not sufficent', 'Q85nzr', 'close', '2018-11-24', '2018-11-02', ''),
(6, 'WATER', '', 'water supply ', 'water is not supplyed', 'nz5r8Q', 'close', '2018-11-24', '2018-11-08', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labour_table`
--
ALTER TABLE `labour_table`
  ADD PRIMARY KEY (`labour_id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`issue_id`),
  ADD UNIQUE KEY `otp` (`otp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labour_table`
--
ALTER TABLE `labour_table`
  MODIFY `labour_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `issue_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
