-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('prithvia28@gmaiil.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `permanent_data`
--

CREATE TABLE `permanent_data` (
  `no` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_data`
--

INSERT INTO `permanent_data` (`no`, `s_id`, `date`, `time`) VALUES
(1, 105, '0000-00-00', '00:00:00'),
(2, 0, '0000-00-00', '00:00:00'),
(3, 105, '0000-00-00', '00:00:00'),
(4, 0, '0000-00-00', '00:00:00'),
(5, 105, '0000-00-00', '00:00:00'),
(6, 0, '0000-00-00', '00:00:00'),
(7, 0, '0000-00-00', '00:00:00'),
(8, 0, '0000-00-00', '00:00:00'),
(9, 0, '0000-00-00', '00:00:00'),
(10, 0, '0000-00-00', '00:00:00'),
(11, 0, '0000-00-00', '00:00:00'),
(12, 0, '0000-00-00', '00:00:00'),
(13, 58, '0000-00-00', '00:00:00'),
(14, 0, '0000-00-00', '00:00:00'),
(15, 0, '0000-00-00', '00:00:00'),
(16, 0, '0000-00-00', '00:00:00'),
(17, 0, '0000-00-00', '00:00:00'),
(18, 0, '0000-00-00', '00:00:00'),
(19, 0, '0000-00-00', '00:00:00'),
(20, 0, '0000-00-00', '00:00:00'),
(21, 0, '0000-00-00', '00:00:00'),
(22, 0, '0000-00-00', '00:00:00'),
(23, 0, '0000-00-00', '00:00:00'),
(24, 0, '0000-00-00', '00:00:00'),
(25, 0, '0000-00-00', '00:00:00'),
(26, 0, '0000-00-00', '00:00:00'),
(27, 0, '0000-00-00', '00:00:00'),
(28, 0, '0000-00-00', '00:00:00'),
(29, 0, '0000-00-00', '00:00:00'),
(30, 0, '0000-00-00', '00:00:00'),
(31, 105, '0000-00-00', '00:00:00'),
(32, 105, '2019-10-14', '14:51:58'),
(33, 105, '2019-10-14', '14:54:50'),
(34, 105, '2019-10-14', '14:54:52'),
(35, 105, '2019-10-14', '14:54:52'),
(36, 105, '2019-10-14', '14:54:53'),
(37, 105, '2019-10-14', '14:54:54'),
(38, 105, '2019-10-14', '14:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `status_val` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `email`, `class`, `status`, `status_val`) VALUES
(1, 'Jan Doe', '2017.jan.doe@ves.ac.in', 'D15', 1, 0),
(2, 'Shubham Kelkar', '2017.shubham.kelkar@ves.ac.in', 'D15', 1, 0),
(58, 'Prithvi Amin', '2017.prithvi.amin@ves.ac.in', 'D15', 0, 0),
(105, 'Jay Pakale', '2017.jay.pakale@ves.ac.in', 'D15', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `no` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`no`, `s_id`) VALUES
(1, 105),
(2, 105),
(3, 105),
(4, 105),
(5, 105);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permanent_data`
--
ALTER TABLE `permanent_data`
  ADD KEY `no` (`no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permanent_data`
--
ALTER TABLE `permanent_data`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
