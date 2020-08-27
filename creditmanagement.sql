-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 01:49 PM
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
-- Database: `creditmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE `1` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`name`, `email`, `credit`) VALUES
('faishal', 'faishal@live.in', '7623'),
('prashant', 'nalla@gmail.com', '65442'),
('rohit', 'rohit2@gmail.com', '54421'),
('shubhodeep', 'shubh@gmail.com', '20032');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transac_id` int(255) NOT NULL,
  `from_name` varchar(255) NOT NULL,
  `to_name` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transac_id`, `from_name`, `to_name`, `amt`) VALUES
(1, 'shubhodeep', 'rohit', '1'),
(2, 'shubhodeep', 'rohit', '5000'),
(3, 'shubhodeep', 'rohit', '6'),
(4, 'shubham', 'rohit', '2'),
(5, 'shubhodeep', 'faishal', '42'),
(6, 'faishal', 'shubhodeep', '1'),
(7, 'shallum', 'rahul', '32'),
(8, 'shubham', 'ayush', '986'),
(9, 'abishek', 'pratham', '87'),
(10, 'rohit', 'shubhodeep', '10000'),
(11, 'ayush', 'shubhodeep', '765');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `From_id` varchar(255) NOT NULL,
  `To_id` varchar(255) NOT NULL,
  `Credit  Pts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `credit`, `mobno`, `college`) VALUES
(1, 'shubhodeep', 'shubhodeep@gmail.com', '11140', '9872345612', 'don bosco institute of technology'),
(2, 'rohit', 'rohit@gmail.com', '2562', '7665553321', 'vit'),
(3, 'faishal', 'faishal@gmail.com', '6593', '766443123', 'rv college'),
(4, 'shubham', 'shubh@gmail.com', '5536', '8776532125', 'iit delhi'),
(5, 'ayush', 'ak2@gmail.com', '76455', '8723417623', 'don bosco'),
(6, 'pratham', 'pk97@outlook.com', '83330', '6614279351', 'ramaiya institute'),
(7, 'shallum', 'shallum@live.in', '580', '9012562374', 'dbit'),
(8, 'rahul', 'rahul87@gmail.com', '4288', '8715263542', 'svit'),
(9, 'vivek', 'vk87@gmail.com', '987', '7812346235', 'bmit'),
(10, 'abishek', 'abhishek532@live.in', '1036', '9876543212', 'iit bombay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`transac_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `transac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
