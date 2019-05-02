-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 08:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--
CREATE DATABASE IF NOT EXISTS `petcare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petcare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `SR` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `USERNAME` text NOT NULL,
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`SR`, `NAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ohm', 'ott', '123'),
(2, 'abhimanyu', 'abhi', '123'),
(3, 'jishant', 'mangs', '123'),
(4, 'abc', 'abc', '202cb962ac59075b964b07152d234b70'),
(5, 'xyz', 'xyz', '202cb962ac59075b964b07152d234b70'),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `adopter_details`
--

CREATE TABLE `adopter_details` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `anim_sr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adopter_details`
--

INSERT INTO `adopter_details` (`id`, `name`, `contact`, `email`, `address`, `anim_sr`) VALUES
(1, 'ohm', '7639195879', 'ohm.trivedi@yahoo.com', '146 matri', 6),
(2, 'abhi', '6554635', 'lkansdlf', 'asldnflsanlf', 9);

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `sr` int(11) NOT NULL,
  `animal` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `breed` text NOT NULL,
  `photo_location` text NOT NULL,
  `adopt_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`sr`, `animal`, `age`, `gender`, `breed`, `photo_location`, `adopt_status`) VALUES
(5, 'dog', 25, 'male', 'pomerian', '/uploads/adoption/anim5.jpeg', 0),
(6, 'dog', 12, 'male', 'pomerian', '/uploads/adoption/anim6.jpeg', 0),
(11, 'dog', 9, 'Male', 'Abcd', '/uploads/adoption/anim11.jpeg', 0),
(13, 'Cat', 5, 'Female', 'XYZ', '/uploads/adoption/anim13.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lost_found`
--

CREATE TABLE `lost_found` (
  `id` int(11) NOT NULL,
  `animal` text NOT NULL,
  `animal_details` text NOT NULL,
  `owner_name` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `photo_location` text NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_found`
--

INSERT INTO `lost_found` (`id`, `animal`, `animal_details`, `owner_name`, `contact`, `address`, `photo_location`, `status`, `timestamp`) VALUES
(1, 'dog', '', 'ohm trivedi', '7639195879', 'lksndfnsf', '/uploads/lost_found/anim1.jpeg', 1, '2019-04-28 07:45:56'),
(2, 'dog', '', 'ohm trivedi', '7639195879', 'lksndfnsf', '/uploads/lost_found/anim2.jpeg', 0, '2019-04-28 07:46:14'),
(3, 'cat', 'lklnsfl lnasdfd ls vlksandfl l asldnffls flas dflnsaldflasd dla sdlf las dfl', 'ohm trivedi', '7639195879', 'lksndfnsf', '/uploads/lost_found/anim3.jpeg', 0, '2019-04-28 08:03:24'),
(4, '', '', '', '', '', '/uploads/lost_found/anim4.', 1, '2019-05-01 13:56:18'),
(5, '', '', '', '', '', '/uploads/lost_found/anim5.', 1, '2019-05-01 13:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `sr` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `panid` text NOT NULL,
  `email` text NOT NULL,
  `occ` text,
  `school` text,
  `currclub` text,
  `club_society` text,
  `club_status` text,
  `prev_memnum` text,
  `mem_type` text NOT NULL,
  `area_of_interest` text NOT NULL,
  `agreed` int(11) NOT NULL,
  `photo_location` text NOT NULL,
  `reg_timestamp` text NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`sr`, `name`, `dob`, `age`, `address`, `contact`, `panid`, `email`, `occ`, `school`, `currclub`, `club_society`, `club_status`, `prev_memnum`, `mem_type`, `area_of_interest`, `agreed`, `photo_location`, `reg_timestamp`, `payment`) VALUES
(3, 'ohm trivedi', '2019-04-23', 25, 'lksndfnsf', '7639195879', '22563321235165', 'ohm.trivedi@yahoo.com', ' kn sakdf k sdkfs', '', '', '', '', '', '6m', 'EP,Donation', 1, './uploads/member/m3.jpeg', '1556274748', 1),
(4, 'abhimanyu', '2019-04-09', 20, 'sdfscasfdsdc', '7639195879', '22563321235165', 'ohm.trivedi@yahoo.com', 'facas fdfascas dcsadc d', 'sdcaslm cksa dksa d ksaf', '', '', '', '', '12m', 'EP,HR', 1, './uploads/member/m4.jpeg', '1556274886', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `case_id` varchar(100) NOT NULL DEFAULT '',
  `case_title` text NOT NULL,
  `case_date` text NOT NULL,
  `case_address` text NOT NULL,
  `case_contact` text NOT NULL,
  `contact_name` text NOT NULL,
  `case_problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`SR`);

--
-- Indexes for table `adopter_details`
--
ALTER TABLE `adopter_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `lost_found`
--
ALTER TABLE `lost_found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `sr` (`sr`);

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `SR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `adopter_details`
--
ALTER TABLE `adopter_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lost_found`
--
ALTER TABLE `lost_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
