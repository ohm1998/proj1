-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 03:35 PM
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
-- Table structure for table `rescue_case_mem`
--

CREATE TABLE `rescue_case_mem` (
  `id` int(11) NOT NULL,
  `rescue_case_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue_case_mem`
--

INSERT INTO `rescue_case_mem` (`id`, `rescue_case_id`, `mem_id`) VALUES
(1, 25, 4),
(2, 10, 4),
(5, 5, 4),
(6, 9, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rescue_case_mem`
--
ALTER TABLE `rescue_case_mem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rescue_case_id` (`rescue_case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rescue_case_mem`
--
ALTER TABLE `rescue_case_mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
