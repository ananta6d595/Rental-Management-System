-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 06:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'aladin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `total_bill` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_details`
--

INSERT INTO `owner_details` (`id`, `name`, `address`, `phone`, `area`, `total_bill`) VALUES
(1, 'Riajul', 'Narayngong', '0181726252', 'niltir', 10000),
(2, 'Moinul', 'Narayngong-28', '0191926252', 'bottola', 12344),
(3, 'Atik', 'dhaka-1212', '0171354565', 'mohakhali', 5000),
(4, 'Shuvo', 'dhaka-1000', '0177726252', 'puranbari', 12000),
(5, 'Marjan', 'Dhaka-1500', '0181726277', 'polton', 19000),
(6, 'Lalchan', 'Barishal-16', '0181725552', 'nodirpar', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tenants_details`
--

CREATE TABLE `tenants_details` (
  `owner_name` varchar(255) NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `floor` varchar(5) NOT NULL,
  `bill` varchar(123) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `due` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants_details`
--

INSERT INTO `tenants_details` (`owner_name`, `tid`, `name`, `floor`, `bill`, `phone`, `due`) VALUES
('Riajul', 1, 'Torun', '1st', '1234', '01234758', 'no'),
('Moinul', 3, 'billgates', '1st', '2348', '012349858', 'no'),
('Atik', 4, 'Trump', '1st', '12994', '012367758', 'yes'),
('Shuvo', 5, 'Tirban', '1st', '1834', '07534758', 'yes'),
('Marjan', 6, 'Morjina', '1st', '1734', '067834758', 'no'),
('Lalchan', 7, 'batman', '1st', '2334', '01734758', 'yes'),
('Riajul', 8, 'Torun', '2nd', '3234', '01734758', 'yes'),
('Moinul', 9, 'Bruce', '2nd', '2048', '015349858', 'yes'),
('Atik', 10, 'Lily', '2nd', '1994', '015367758', 'yes'),
('Shuvo', 11, 'Barry', '2nd', '5634', '015234758', 'yes'),
('Marjan', 12, 'Inuyasha', '2nd', '8934', '01834758', 'no'),
('Lalchan', 13, 'Antman', '2nd', '20034', '01739878', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `adress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `adress`) VALUES
(1, 'ananta2', '1234', 0),
(2, 'rijvi2', '3456', 0),
(3, 'musa12', '23451', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants_details`
--
ALTER TABLE `tenants_details`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner_details`
--
ALTER TABLE `owner_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tenants_details`
--
ALTER TABLE `tenants_details`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
