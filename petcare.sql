-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2019 at 12:45 PM
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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` int(11) NOT NULL DEFAULT '0',
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `contact`, `email`, `amount`, `payment`, `case_id`) VALUES
(1, 'Ohm', '7016778587', 'ohm.1998@gmail.com', 250, 1, 1),
(2, 'ohm', '7016778566', 'ohm.1998@gmail.com', 251, 1, 1),
(4, 'ohm', '7016778566', 'ohm.1998@gmail.com', 200, 1, 1),
(5, 'ohm', '7016778566', 'ohm.1998@gmail.com', 400, 1, 1);

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
  `case_id` int(11) NOT NULL,
  `case_title` text NOT NULL,
  `case_date` text NOT NULL,
  `case_address` text NOT NULL,
  `case_contact` text NOT NULL,
  `contact_name` text NOT NULL,
  `case_problem` text NOT NULL,
  `attended` int(11) NOT NULL DEFAULT '0',
  `photo_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`case_id`, `case_title`, `case_date`, `case_address`, `case_contact`, `contact_name`, `case_problem`, `attended`, `photo_location`) VALUES
(1, 'Leg injurry', '2/5/2019', 'oasndf kjnsadkjfn ln slkfnlsn flsdn', '7639195879', 'Ohm Trivedi', 'front left leg has been injurred by a car', -1, 'adminp/uploads/adoption/anim12.jpeg'),
(2, 'Case 14', '4/5/2019', 'jnsdfnsdjfn saf skdf', '7016778587', 'ohm trivedi', 'jsndfnsaf;asnf', 0, ''),
(3, 'Case 16', '4/5/2019', 'jnsdfnsdjfn saf skdf', '7016778587', 'ohm trivedi', 'jsndfnsaf;asnf', 0, ''),
(4, 'case 16', '4/5/2019', 'k;jsbdfk slfdsa df asdflklas', '7016778587', 'ohmtttt', 'kb sdlkf salf lsak flaksd f', 0, ''),
(5, 'Case 18', '4/5/2019', 'lskndfas dfjsa d;f as;df a;', '7016778587', 'lksnddfl ', 'ls df;l sa;f ;s d;lsa f;d', -1, 'adminp/uploads/adoption/anim12.jpeg'),
(6, 'Case 19', '4/5/2019', 'lknsdlfsalkdflklknflasf', '7016778587', 'lnads', 'lknslfdnalsnflnasd', 0, ''),
(7, 'Case 20', '4/5/2019', '77asfd lkasldf alk s dfl', '7016778587', 'ohm t', ' alsdkf la sfdlk sfl asldkf', 0, ''),
(8, 'injury 23', '4/5/2019', 'fa, lkasdf l', '7016778587', 'ohm ttt', 'lkasdfl lakf ldk sf', 0, ''),
(9, 'Case 14', '4/5/2019', 'lmsa dfs f ', '7639195879', 'knsdf', 'w e  sdf asdf', 1, ''),
(10, 'Leg injurry', '4/5/2019', 'lknasldfnlsad fls dlf', '7016778587', 'kas fkjas df', 'lksndfl asdfl al;f dsa', -1, ''),
(11, 'Leg injurry', '4/5/2019', 'kjsbdfk sakdf  ', '7016778587', 'kjasdffkj', 'jk skd fkas df a', 0, ''),
(12, '12', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'adminp/uploads/adoption/anim12.jpeg'),
(13, '13', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/adoption/anim13.jpeg'),
(14, '14', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/adoption/anim14.jpeg'),
(15, '15', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/anim15.jpeg'),
(16, '16', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/anim16.jpeg'),
(17, '17', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/anim17.jpeg'),
(18, '18', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/anim18.jpeg'),
(19, '19', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/adoption/anim19.jpeg'),
(20, '20', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/anim20.jpeg'),
(21, '21', 'case 29', '4/5/2019', 'lsnfslandfl', '7016778566', 'ohm trivedi', 0, 'uploads/rescue/rescue_anim21.jpeg');

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
(3, 5, 256, '-1', 'xyzzzzhsjdf', '2019-05-04 13:08:24'),
(4, 10, 2263, '-1', '2253', '2019-05-04 13:09:43'),
(5, 1, 256, '2019-05-14', 'Again Little laskdf', '2019-05-05 06:37:53'),
(6, 1, 200, '2019-05-31', 'going for it', '2019-05-05 06:38:24'),
(7, 1, 591, '-1', 'Finished', '2019-05-05 06:38:57');

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
(6, 9, 4),
(7, 1, 3);

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
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rescue_case_followup`
--
ALTER TABLE `rescue_case_followup`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lost_found`
--
ALTER TABLE `lost_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `rescue_case_followup`
--
ALTER TABLE `rescue_case_followup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rescue_case_mem`
--
ALTER TABLE `rescue_case_mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
