-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 05:03 PM
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
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`sr`, `name`, `dob`, `age`, `address`, `contact`, `panid`, `email`, `occ`, `school`, `currclub`, `club_society`, `club_status`, `prev_memnum`, `mem_type`, `area_of_interest`, `agreed`, `photo_location`, `reg_timestamp`, `payment`) VALUES
(3, 'ohm trivedi', '2019-04-23', 25, 'lksndfnsf', '7639195879', '22563321235165', 'ohm.trivedi@yahoo.com', ' kn sakdf k sdkfs', '', '', '', '', '', '6m', 'EP,Donation', 1, './uploads/member/m3.jpeg', '1556274748', 1),
(4, 'abhimanyu', '2019-04-09', 20, 'sdfscasfdsdc', '7639195879', '22563321235165', 'ohm.trivedi@yahoo.com', 'facas fdfascas dcsadc d', 'sdcaslm cksa dksa d ksaf', '', '', '', '', '12m', 'EP,HR', 1, './uploads/member/m4.jpeg', '1556274886', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`sr`), ADD UNIQUE KEY `sr` (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
