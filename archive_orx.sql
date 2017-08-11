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
-- Table structure for table `archive_orx`
--

CREATE TABLE `archive_orx` (
  `order_num` varchar(9) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `path` varchar(150) NOT NULL,
  `submit_by` varchar(50) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archive_orx`
--

INSERT INTO `archive_orx` (`order_num`, `filename`, `path`, `submit_by`, `submit_date`, `id`) VALUES
('000000001', 'ORX-111000001-P1', '..\\pictures\\1.png', 'Ghader', '2017-07-04 19:19:26', 1),
('000000002', 'ORX-111000002-P1', '..\\pictures\\1.png', 'Ghader', '2017-07-04 19:19:30', 2),
('000000003', 'ORX-111000003-P1', '..\\pictures\\1.png', 'Ghader', '2017-07-04 19:19:33', 3),
('00000001', '00000001.png', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 2.png', 'cs1', '2017-07-07 01:57:53', 4),
('2', '2.png', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 2.png', 'cs1', '2017-07-05 18:53:02', 6),
('6', '6.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 6.jpg', 'cs1', '2017-07-06 16:55:12', 10),
('one', 'one.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - one.jpg', 'abc', '2017-07-06 18:22:19', 12),
('0001-p1', '0001-p1.txt', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 0001-p1.txt', '123', '2017-07-07 01:41:33', 14),
('1-p1', '1-p1.txt', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 1-p1.txt', '123', '2017-07-07 01:48:21', 15),
('00000002-', '00000002-P1.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 00000002-P1.jpg', 'Gong', '2017-07-07 15:23:28', 16),
('000001', '000001-p2.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 000001-p2.jpg', 'John', '2017-07-07 15:35:31', 17),
('000000001', '000000001-p1.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 000000001-p1.jpg', 'Jon Snow', '2017-07-07 16:00:09', 18),
('0000001', '0000001-p3.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 0000001-p3.jpg', 'adsf', '2017-07-07 16:13:24', 19),
('0000002', '0000002-p4.jpg', 'http://www.compassmeds.com/john//upload-test/ORX/2017/ORX - 0000002-p4.jpg', 'GGDK', '2017-07-07 16:30:27', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_orx`
--
ALTER TABLE `archive_orx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_orx`
--
ALTER TABLE `archive_orx`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
