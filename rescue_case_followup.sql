-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 03:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `rescue_case_followup`
--

CREATE TABLE `rescue_case_followup` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `cost_incurred` int(11) NOT NULL,
  `follow_up_date` text NOT NULL,
  `extra_comments` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue_case_followup`
--

INSERT INTO `rescue_case_followup` (`id`, `case_id`, `cost_incurred`, `follow_up_date`, `extra_comments`, `timestamp`) VALUES
(1, 25, 2556, '2019-05-28', 'sdafs sa mdl fas', '2019-05-04 12:21:14'),
(2, 35213, 352132, '-1', '321321', '2019-05-04 12:44:24'),
(3, 5, 256, '-1', 'xyzzzzhsjdf', '2019-05-04 13:08:24'),
(4, 10, 2263, '-1', '2253', '2019-05-04 13:09:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rescue_case_followup`
--
ALTER TABLE `rescue_case_followup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rescue_case_followup`
--
ALTER TABLE `rescue_case_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
