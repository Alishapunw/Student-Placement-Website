-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 07:59 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_no` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_des` varchar(2000) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_no`, `event_name`, `event_des`, `date`, `time`, `venue`, `updated_at`, `created_at`) VALUES
(6, 'Placement Campaign', '<tr class=\"row100 head\">\r\n                                    <th class=\"cell100 column1\">Event Name</th>\r\n                                    <th class=\"cell100 column2\">Event Description</th>\r\n                                    <th class=\"cell100 column3\">Venue</th>\r\n                                    <th class=\"cell100 column4\">Date</th>\r\n                                    <th class=\"cell100 column5\">Time</th>\r\n                                </tr>', '2/12/2019', '5:00 PM', 'Auditorium', '2019-06-21 00:25:39', '2019-06-21 00:25:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
