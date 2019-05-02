-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 01:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE IF NOT EXISTS `rescue` (
`case_id` int(11) NOT NULL,
  `case_title` text NOT NULL,
  `case_date` text NOT NULL,
  `case_address` text NOT NULL,
  `case_contact` text NOT NULL,
  `contact_name` text NOT NULL,
  `case_problem` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`case_id`, `case_title`, `case_date`, `case_address`, `case_contact`, `contact_name`, `case_problem`) VALUES
(1, 'Leg injurry', '2/5/2019', 'oasndf kjnsadkjfn ln slkfnlsn flsdn', '7639195879', 'Ohm Trivedi', 'front left leg has been injurred by a car');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
 ADD PRIMARY KEY (`case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
