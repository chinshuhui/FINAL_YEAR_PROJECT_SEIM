-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 09:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpmsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `up_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `up_time`) VALUES
(1, 'admin', 'admin', 'admin', 'May, Saturday, 05:24 pm');

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`id`, `name`, `username`, `email`, `password`, `date`) VALUES
(1, 'chin', 'chin', 'chin@gmail.com', 'password', '2022-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `cmp_log`
--

CREATE TABLE `cmp_log` (
  `id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone no` varchar(10) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `complain` varchar(300) NOT NULL,
  `ref_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmp_log`
--

INSERT INTO `cmp_log` (`id`, `user_id`, `name`, `username`, `email`, `phone no`, `subject`, `complain`, `ref_no`) VALUES
(1, 2, 'user', 'user', 'user@user.com', '9165063741', 'test help', 'help me buddy', 1900709),
(2, 1, 'chin', 'chin', 'chin@gmail.com', '0123456789', 'aa', 'aa', 768829),
(3, 1, 'chin', 'chin', 'chin@gmail.com', '0123456789', 'masalah sistem', 'window 11 i kadang kala lag dan akan black out', 3264058),
(4, 1, 'chin', 'chin', 'chin@gmail.com', '0123456789', 'test', 'test', 2931307),
(5, 1, 'chin', 'chin', 'chin@gmail.com', '0123456789', 'a', 'test', 865294);

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(170) NOT NULL,
  `post` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`, `user_name`, `email`, `post`, `password`, `time`) VALUES
(1, 'software engineer', 'software engineer', 'software engineer@gmail.com', 'softawre engineer', 'password', '2022-06-13 15:33:09'),
(2, 'technician', 'technician', 'technician@gmail.com', 'technician', 'password', '2022-06-13 15:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `phno`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `view_cmp`
--

CREATE TABLE `view_cmp` (
  `id` int(11) NOT NULL,
  `ref_no` varchar(20) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `phone no` varchar(220) NOT NULL,
  `subject` varchar(220) NOT NULL,
  `complain` text NOT NULL,
  `dummy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_cmp`
--

INSERT INTO `view_cmp` (`id`, `ref_no`, `name`, `email`, `phone no`, `subject`, `complain`, `dummy`) VALUES
(1, '343973', 'Manash Bharali', 'manash@php.com', '9706374844', 'Nothing just a test', 'some text some textsome text some textsome text some textsome text some textsome text some textsome text some textsome text some textsome text some textsome text some textsome text some text', 'Manash '),
(2, '822969', 'Manash Bharali', 'manash@php.com', '9876541235', 'nothing', 'mpsdjfshgiosdfhm iaioyioh aweyfu9 ab  wetyfuo0', 'Manash '),
(3, '1900709', 'user', 'user@user.com', '9165063741', 'test help', 'help me buddy', 'engineer '),
(4, '3264058', 'chin', 'chin@gmail.com', '0123456789', 'masalah sistem', 'window 11 i kadang kala lag dan akan black out', 'software engineer '),
(5, '865294', 'chin', 'chin@gmail.com', '0123456789', 'a', 'test', 'technician ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circle`
--
ALTER TABLE `circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmp_log`
--
ALTER TABLE `cmp_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_cmp`
--
ALTER TABLE `view_cmp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circle`
--
ALTER TABLE `circle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmp_log`
--
ALTER TABLE `cmp_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `view_cmp`
--
ALTER TABLE `view_cmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
