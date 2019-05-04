-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 11:06 AM
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
  `case_problem` text NOT NULL,
  `attended` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`case_id`, `case_title`, `case_date`, `case_address`, `case_contact`, `contact_name`, `case_problem`, `attended`) VALUES
(1, 'Leg injurry', '2/5/2019', 'oasndf kjnsadkjfn ln slkfnlsn flsdn', '7639195879', 'Ohm Trivedi', 'front left leg has been injurred by a car', 0),
(2, 'Case 14', '4/5/2019', 'jnsdfnsdjfn saf skdf', '7016778587', 'ohm trivedi', 'jsndfnsaf;asnf', 0),
(3, 'Case 16', '4/5/2019', 'jnsdfnsdjfn saf skdf', '7016778587', 'ohm trivedi', 'jsndfnsaf;asnf', 0),
(4, 'case 16', '4/5/2019', 'k;jsbdfk slfdsa df asdflklas', '7016778587', 'ohmtttt', 'kb sdlkf salf lsak flaksd f', 0),
(5, 'Case 18', '4/5/2019', 'lskndfas dfjsa d;f as;df a;', '7016778587', 'lksnddfl ', 'ls df;l sa;f ;s d;lsa f;d', 0),
(6, 'Case 19', '4/5/2019', 'lknsdlfsalkdflklknflasf', '7016778587', 'lnads', 'lknslfdnalsnflnasd', 0),
(7, 'Case 20', '4/5/2019', '77asfd lkasldf alk s dfl', '7016778587', 'ohm t', ' alsdkf la sfdlk sfl asldkf', 0),
(8, 'injury 23', '4/5/2019', 'fa, lkasdf l', '7016778587', 'ohm ttt', 'lkasdfl lakf ldk sf', 0),
(9, 'Case 14', '4/5/2019', 'lmsa dfs f ', '7639195879', 'knsdf', 'w e  sdf asdf', 0),
(10, 'Leg injurry', '4/5/2019', 'lknasldfnlsad fls dlf', '7016778587', 'kas fkjas df', 'lksndfl asdfl al;f dsa', 0),
(11, 'Leg injurry', '4/5/2019', 'kjsbdfk sakdf  ', '7016778587', 'kjasdffkj', 'jk skd fkas df a', 0);

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
MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
