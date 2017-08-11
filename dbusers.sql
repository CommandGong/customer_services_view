-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2017 at 04:07 PM
-- Server version: 5.6.36-82.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compa045_csadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbusers`
--

CREATE TABLE `dbusers` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `code` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbusers`
--

INSERT INTO `dbusers` (`id`, `username`, `fullname`, `password`, `email`, `active`, `code`) VALUES
(1, 'cs', 'Customer Service', '81dc9bdb52d04dc20036dbd8313ed055', '1@t.com', 1, '2'),
(3, 'admin', 'Ghader', 'a35653f14e8929fc4d60ff829b11987e', 'salimigh1@gmail.com', 1, '1'),
(4, 'dr', 'Doctor', '81dc9bdb52d04dc20036dbd8313ed055', 'test@doctor.com', 1, '3'),
(5, 'testcs', 'testcs', 'e81dd1ee8fdc6aee2c3177abb477fe8e', 'testcs@gg', 1, '2'),
(6, 'testdr', 'testdr', 'bbc6f1cd7cd0568fb04994e6799e82e8', 'testder@gg.com', 1, '3'),
(7, 'testad', 'testad', 'bf58f1fbf92896ef64cf6265a5889c42', '', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbusers`
--
ALTER TABLE `dbusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbusers`
--
ALTER TABLE `dbusers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
