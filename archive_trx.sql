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
-- Table structure for table `archive_trx`
--

CREATE TABLE `archive_trx` (
  `order_num` varchar(9) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `path` varchar(255) NOT NULL,
  `submit_by` varchar(50) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dr_authorized` varchar(1) NOT NULL,
  `dr_authorized_by` varchar(50) NOT NULL,
  `dr_ip_address` varchar(15) NOT NULL,
  `dr_authorized_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archive_trx`
--

INSERT INTO `archive_trx` (`order_num`, `filename`, `path`, `submit_by`, `submit_date`, `dr_authorized`, `dr_authorized_by`, `dr_ip_address`, `dr_authorized_date`, `id`) VALUES
('000000003', '1', '..\\pictures\\1.png', 'cs1', '2017-06-27 21:29:24', '1', 'Dr Bauer', '106.1.7.72', '0000-00-00 00:00:00', 1),
('00000001', '1', '..\\pictures\\1.png', 'vs', '2017-06-28 01:05:36', '1', 'testdr ', '99.243.200.6', '2017-06-27 13:05:00', 2),
('00000002', '2', '..\\pictures\\1.png', 'cs1', '2017-06-27 21:29:59', '0', '', '', '0000-00-00 00:00:00', 3),
('99999', 'test999', '..\\pictures\\1.png', 'cs2', '2017-06-28 18:07:01', '1', 'secondValue', '135.0.88.172', '2017-06-28 06:07:00', 4),
('2', '2.png', 'http://www.compassmeds.com/john//upload-test/TRX/2017/TRX - 2.png', 'cs1', '2017-06-28 20:13:40', '', '', '', '0000-00-00 00:00:00', 11),
('00000002-', '00000002-P1.jpg', 'http://www.compassmeds.com/john//upload-test/TRX/2017/TRX - 00000002-P1.jpg', 'Gong', '2017-07-07 15:23:29', '', '', '', '0000-00-00 00:00:00', 12),
('00000001', '00000001-P1.jpg', 'http://www.compassmeds.com/john//upload-test/TRX/2017/TRX - 00000001-P1.jpg', 'Jon Snow', '2017-07-07 16:03:09', '', '', '', '0000-00-00 00:00:00', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_trx`
--
ALTER TABLE `archive_trx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_trx`
--
ALTER TABLE `archive_trx`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
