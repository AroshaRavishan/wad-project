-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 06:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `R_ID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`R_ID`, `firstName`, `LastName`, `Password`, `Email`) VALUES
(3, 'arosha', 'ravishan', '1234', 'arosharavishan1210@gmail.com'),
(4, 'kp', 'sasi', '1234', 'arosharavishan1210@gmail.com'),
(5, 'kp', 'sasi', '1234', 'ilearnlearningmanagmentsystem@gmail.com'),
(6, 'kp', 'sasi', '0000', 'sasi@gmail.com'),
(7, 'banuka', 'fernando', '12345', 'banu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `Category_ID` varchar(200) NOT NULL,
  `Category_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`Category_ID`, `Category_Name`) VALUES
('1', 'sea'),
('2', 'burger'),
('3', 'burger'),
('4', 'seafood'),
('5', 'pizza'),
('6', 'beer'),
('7', 'coke'),
('8', 'sea');

-- --------------------------------------------------------

--
-- Table structure for table `food_item_table`
--

CREATE TABLE `food_item_table` (
  `Category_ID` varchar(100) NOT NULL,
  `Item_ID` varchar(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_item_table`
--

INSERT INTO `food_item_table` (`Category_ID`, `Item_ID`, `Item_Name`, `Price`) VALUES
('1', '3', 'malu pan', '10'),
('4', '4', 'chiken pizza', '2000'),
('4', '5', 'malu pan', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`Category_ID`(100)) USING BTREE;

--
-- Indexes for table `food_item_table`
--
ALTER TABLE `food_item_table`
  ADD PRIMARY KEY (`Item_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
