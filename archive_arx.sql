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
-- Table structure for table `archive_arx`
--

CREATE TABLE `archive_arx` (
  `order_num` varchar(9) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `path` varchar(150) NOT NULL,
  `submit_by` varchar(50) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `dr_authorized` varchar(1) NOT NULL,
  `dr_authorized_by` varchar(50) NOT NULL,
  `dr_authorized_date` varchar(50) NOT NULL,
  `dr_ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archive_arx`
--

INSERT INTO `archive_arx` (`order_num`, `filename`, `path`, `submit_by`, `submit_date`, `id`, `dr_authorized`, `dr_authorized_by`, `dr_authorized_date`, `dr_ip_address`) VALUES
('000000001', '000000001-p1.jpg', 'http://www.compassmeds.com/john//upload-test/ARX/2017/ARX - 000000001-p1.jpg', 'Jon Snow', '2017-07-07 16:00:09', 2, '', '', '', ''),
('00000001', '00000001-p1.jpg', 'http://www.compassmeds.com/john//upload-test/ARX/2017/ARX - 00000001-p1.jpg', 'ned', '2017-08-09 17:25:54', 3, '', '', '', ''),
('0000001 ', '0000001 -p23.jpg', 'http://www.compassmeds.com/john//upload-test/ARX/2017/ARX - 0000001 -p23.jpg', 'jack', '2017-08-09 17:32:17', 4, '', '', '', ''),
('00000001 ', '00000001 -p33.jpg', 'http://www.compassmeds.com/john//upload-test/ARX/2017/ARX - 00000001 -p33.jpg', 'jack', '2017-08-09 17:33:01', 5, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_arx`
--
ALTER TABLE `archive_arx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_arx`
--
ALTER TABLE `archive_arx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
