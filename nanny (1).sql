-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 01:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanny`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `first_name`, `email`, `phoneno`, `salary`, `age`, `category`, `location`, `date`) VALUES
(1, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-03 00:01:53'),
(2, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-03 00:02:00'),
(3, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-03 00:02:07'),
(4, 'bett', 'bett@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 18:53:00'),
(5, 'Taurus', 'taurus@gmail.com', '703788562', 'class2', '21-24', 'nanny', 'Eldoret', '2018-11-05 23:14:58'),
(6, 'Taurus', 'taurus@gmail.com', '703788562', 'class2', '21-24', 'nanny', 'Eldoret', '2018-11-05 23:16:06'),
(7, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 23:29:01'),
(8, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 23:30:33'),
(9, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 23:31:27'),
(10, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 23:32:46'),
(11, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-05 23:40:20'),
(12, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:10:49'),
(13, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:16:43'),
(14, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:21:35'),
(15, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:23:43'),
(16, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:29:11'),
(17, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:29:17'),
(18, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:30:39'),
(19, '', '', '', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:35:49'),
(20, '', '', '', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 17:36:47'),
(21, '', '', '', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:08:12'),
(22, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:08:49'),
(23, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:09:21'),
(24, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:12:50'),
(25, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:13:17'),
(26, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:19:25'),
(27, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:23:10'),
(28, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 20:24:19'),
(29, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-07 22:54:46'),
(30, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-08 01:11:36'),
(31, 'Taurus', 'taurus@gmail.com', '703788562', 'class2', '16-20', 'babysitter', 'Nairobi', '2018-11-08 01:11:53'),
(32, 'Taurus', 'taurus@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-09 02:44:04'),
(33, 'Rael', 'rael@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-09 02:49:57'),
(34, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '16-20', 'babysitter', 'Nairobi', '2018-11-13 00:16:08'),
(35, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-14 17:31:10'),
(36, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-14 17:34:10'),
(37, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-14 17:34:53'),
(38, 'Jorges M', 'georgetmuchiri@yahoo.com', '254', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-14 22:54:30'),
(39, 'Jorges M', 'georgetmuchiri@yahoo.com', '254', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-14 22:55:20'),
(40, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-15 01:39:24'),
(41, 'Joyce', 'joyce@gmail.com', '703788562', 'class1', '18-20', 'babysitter', 'Nairobi', '2018-11-15 01:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `nannies`
--

CREATE TABLE `nannies` (
  `id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `avatar` varchar(30) NOT NULL DEFAULT 'deafult.png',
  `status` varchar(30) NOT NULL DEFAULT 'unemployed',
  `employer` varchar(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dob` date DEFAULT NULL,
  `nhif` int(30) DEFAULT NULL,
  `license` varchar(30) DEFAULT NULL,
  `county` varchar(30) DEFAULT NULL,
  `accident` varchar(30) DEFAULT NULL,
  `manual` varchar(30) DEFAULT NULL,
  `car` varchar(30) DEFAULT NULL,
  `living` varchar(30) DEFAULT NULL,
  `wtime` varchar(30) DEFAULT NULL,
  `employment` varchar(30) DEFAULT NULL,
  `days` varchar(30) DEFAULT NULL,
  `criminal` varchar(30) DEFAULT NULL,
  `cyes` varchar(30) DEFAULT NULL,
  `smoke` varchar(30) DEFAULT NULL,
  `drugs` varchar(30) DEFAULT NULL,
  `diet` varchar(30) DEFAULT NULL,
  `ydiet` varchar(100) DEFAULT NULL,
  `medical` varchar(30) DEFAULT NULL,
  `ymedical` varchar(100) DEFAULT NULL,
  `psychological` varchar(30) DEFAULT NULL,
  `ypsychological` varchar(100) DEFAULT NULL,
  `education` varchar(30) DEFAULT NULL,
  `firstaid` varchar(30) DEFAULT NULL,
  `firstaid_level` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `course_list` varchar(50) DEFAULT NULL,
  `hobbies` varchar(30) DEFAULT NULL,
  `pets` varchar(30) DEFAULT NULL,
  `ypets` varchar(50) DEFAULT NULL,
  `housekeeping` varchar(30) DEFAULT NULL,
  `yhousekeeping` varchar(30) NOT NULL,
  `cook` varchar(30) DEFAULT NULL,
  `ycook` varchar(30) DEFAULT NULL,
  `emp1` varchar(100) DEFAULT NULL,
  `emp2` varchar(100) DEFAULT NULL,
  `nannyexp` varchar(50) DEFAULT NULL,
  `expnanny` varchar(50) DEFAULT NULL,
  `childrenexp` varchar(30) DEFAULT NULL,
  `vetting` varchar(30) NOT NULL DEFAULT 'Pending',
  `image` varchar(30) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nannies`
--

INSERT INTO `nannies` (`id`, `first_name`, `last_name`, `phoneno`, `email`, `gender_id`, `password`, `amount`, `reference`, `salary`, `age`, `category`, `location`, `skills`, `avatar`, `status`, `employer`, `time`, `dob`, `nhif`, `license`, `county`, `accident`, `manual`, `car`, `living`, `wtime`, `employment`, `days`, `criminal`, `cyes`, `smoke`, `drugs`, `diet`, `ydiet`, `medical`, `ymedical`, `psychological`, `ypsychological`, `education`, `firstaid`, `firstaid_level`, `course`, `course_list`, `hobbies`, `pets`, `ypets`, `housekeeping`, `yhousekeeping`, `cook`, `ycook`, `emp1`, `emp2`, `nannyexp`, `expnanny`, `childrenexp`, `vetting`, `image`) VALUES
(9, 'ben', 'Gakii', '25444444', 'admin@blis.local', 'Female', 'e10adc3949ba59abbe56e057f20f88', 500, 'NDXZ1OHLO737', 'class1', '21-24', 'nanny', 'Eldoret', '', 'deafult.jpg', 'unemployed', NULL, '2018-11-15 17:48:35', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'primary_school', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verified', ''),
(10, 'fred', 'Gakii', '25444444', 'admin@blis.local', 'Female', 'e10adc3949ba59abbe56e057f20f88', 500, 'NDXZ1OHLO737', 'class1', '21-24', 'nanny', 'Eldoret', '', 'deafult.jpg', 'unemployed', NULL, '2018-11-15 17:48:35', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verified', ''),
(11, 'Charity', 'Liz', '0703788562', 'c@gmail.com', 'Female', 'e10adc3949ba59abbe56e057f20f88', 500, '3P1HN7BTY206', 'class1', '18-20', 'babysitter', 'Nairobi', '', 'deafult.png', 'employed', NULL, '2018-11-15 17:48:35', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'secondary_school', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', ''),
(12, 'alex', 'Liz', '0703788562', 'georgetmuchiri@yahoo.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, '8EMS3MUQD526', 'class1', '18-20', 'babysitter', 'Nairobi', 'cooking,showers,washing', 'deafult.png', 'unemployed', NULL, '2018-11-15 17:22:17', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', ''),
(13, 'kim', 'Liz', '0703788562', 'georgetmuchiri@yahoo.com', 'Male', 'e10adc3949ba59abbe56e057f20f88', 500, 'JB8EHKL29Z57', 'class1', '16-20', 'babysitter', 'Nairobi', 'cooking\r\neating\r\nwashing\r\ndressing', 'deafult.png', 'unemployed', NULL, '2018-11-15 18:01:06', '0000-00-00', 1222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verified', ''),
(15, 'vivy', 'vivy', '0703788562', 'vivy@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, '4H5OSVE9OU02', 'class1', '16-20', 'babysitter', 'Nairobi', 'cooking', 'deafult.png', 'employed', NULL, '2018-11-15 01:09:18', '0000-00-00', 1424234, '123', '1231', '1', 'yes', 'yes', 'live-out', 'part-time', 'Temporary', 'Monday-Saturday', 'yes', '12', 'yes', 'yes', 'no', '12', 'no', '1323', 'yes', '123', 'college', 'yes', '23', 'no', '6556', '5665', 'no', '223', 'yes', '789', 'yes', '13', 'hhhhh', 'hhhhh', 'Live-out-Nanny', 'hhhhh', 'nanny', 'Verified', ''),
(16, 'Juliana', 'Juliana', '0703788562', 'julie@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, 'DLZS0GUO3552', 'class1', '18-20', 'Domestic Manager', 'Nairobi', '', 'deafult.png', 'unemployed', NULL, '2018-11-21 07:52:05', '2018-11-30', 12341234, '5345', '', 'ghg', '', '', 'ive-in/full-time', '', '', 'Monday-Saturday', 'yes', 'fghdgf', '', 'yes', 'yes', 'ghfg', 'yes', 'hdgfh', '', 'hghdfh', 'college', 'yes', '', 'yes', 'hfgdh', '', '', '', '', '', '', '', 'hdfhgf', 'hgfhdgfhgh', 'Part-Time-House-Manager', 'hgfhdfhfh', 'child-care', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` varchar(30) DEFAULT 'offline',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `first_name`, `last_name`, `phoneno`, `email`, `gender_id`, `password`, `amount`, `reference`, `usertype`, `status`, `time`) VALUES
(4, 'ben', 'ben', '0703788562', 'admin@yahoo.com', 'Male', 'e10adc3949ba59abbe56e057f20f88', 10, 'M9236Y6CE344', 0, '', '2018-11-15 17:46:54'),
(5, 'alex', 'Muchiri', '0703788562', 'm@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f88', 10, 'FJEYU8N9TW29', 0, '', '2018-11-15 17:46:54'),
(6, 'alex', 'Muchiri', '0703788562', 'm@gmail.com', 'Female', 'e10adc3949ba59abbe56e057f20f88', 10, 'ZCRX1CQGTF03', 0, '', '2018-11-15 17:46:54'),
(7, 'alex', 'Muchiri', '0703788562', 'm@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, 'OXYTGADXGE23', 0, '', '2018-11-01 20:43:23'),
(9, 'Liz', 'Liz', '0703788562', 'liz@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, 'T4KFTKSIRP12', 0, '', '2018-11-01 23:43:12'),
(10, 'Charity', 'Muchiri', '0703788562', 'gmuchiri@yahoo.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, 'HZLLURE9IA04', 1, '', '2018-11-02 01:50:42'),
(11, 'George', 'Muchiri', '0703788562', '254@yahoo.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, 'XB7VZ10I9U17', 2, NULL, '2018-11-02 15:53:16'),
(16, 'Taurus', 'Taurus', '0703788562', 'taurus@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 100, '5PEK1S98TK12', 0, 'offline', '2018-11-02 19:41:12'),
(17, 'Taurus', 'Taurus', '0703788562', 'taurus@gmail.com', 'Female', 'e10adc3949ba59abbe56e057f20f88', 100, '8QUVPP3G6W19', 0, 'offline', '2018-11-15 17:47:19'),
(18, 'bett', 'bett', '0703788562', 'bett@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 500, '8ZVXO43O2V13', 0, 'offline', '2018-11-05 18:50:13'),
(19, 'Joyce', 'Joyce', '0703788562', 'joyce@gmail.com', 'Female', 'e10adc3949ba59abbe56e057f20f88', 10, 'UWBK5VH0AD45', 0, 'offline', '2018-11-15 17:47:31'),
(20, 'Tiffany ', 'Tiffany ', '0703788562', 'tiff@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, '85J1GCLN9B14', 0, 'offline', '2018-11-08 01:08:14'),
(21, 'Tiffany ', 'Tiffany ', '0703788562', 'tiff@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, '4LP9K4JF4I43', 0, 'offline', '2018-11-08 01:09:43'),
(22, 'Marcellous', 'Marcellous', '0703788562', 'm@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, 'IYOTEUJH9C56', 0, 'offline', '2018-11-08 01:21:56'),
(23, 'Marcellous', 'Marcellous', '0703788562', 'm@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, 'VEVVKWQ8LL39', 0, 'offline', '2018-11-08 01:22:39'),
(24, 'benjj', 'Gakii', '0703788562', 'bett@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, 'RQF8D5QHIB45', 0, 'offline', '2018-11-08 01:24:45'),
(25, 'George', 'Muchiri', '0703788562', 'g@gmail.com', '', 'e10adc3949ba59abbe56e057f20f88', 10, '3AVHTPQPLE58', 0, 'offline', '2018-11-08 01:30:58'),
(26, 'George', 'Muchiri', '0703788562', 'gmuchiri@yahoo.com', 'Female', 'e10adc3949ba59abbe56e057f20f88', 10, 'PO5D8CL4RY47', 0, 'offline', '2018-11-15 17:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `userId` int(12) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `pick_file` varchar(100) NOT NULL DEFAULT 'default.png',
  `password` varchar(32) NOT NULL,
  `lastaccessdate` datetime DEFAULT CURRENT_TIMESTAMP,
  `usertype` int(1) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`userId`, `first_name`, `email`, `phoneno`, `username`, `pick_file`, `password`, `lastaccessdate`, `usertype`, `status`) VALUES
(1, 'George', 'jiooo@gmail.com', 921890324, 'jorges', 'default.png', '900150983cd24fb0d6963f7d28e17f72', '2017-11-13 19:20:09', 1, 'online'),
(4, 'Maxin', 'mich@gmail.com', 716484610, 'Maxin', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-23 13:01:56', 1, 'offline'),
(5, 'Muchiri', 'georgetttt@bluecloud.space', 2147483647, '12345', 'susc_Muchiri.png', '827ccb0eea8a706c4c34a16891f84e7b', '2017-11-16 15:35:56', 2, 'offline'),
(6, 'ABC-06-OOO1', 'chris@gmail.com', 721890324, 'kibxz', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-02-16 12:45:35', 2, 'offline'),
(10, 'Elizabeth', 'george@briyoconsultants.co.ke', 2147483647, '', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '2018-03-28 13:07:44', 2, 'offline'),
(11, 'Tiffany Nyambura', 'tevingeorge@gmail.com', 2147483647, 'Admin', 'default.png', '14e1b600b1fd579f47433b88e8d85291', '2018-04-02 13:26:53', 1, 'offline'),
(15, 'Maxin', 'george@briyoconsultants.co.ke', 921890324, 'jorgine', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-20 13:50:29', 2, 'offline'),
(16, 'Charity', 'admin@yahoo.com', 254548044, 'CG', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-01 16:49:39', 2, 'offline'),
(19, 'Jorges M', 'georgetmuchiri@yahoo.com', 254, 'Muchiri', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-14 09:47:07', 2, 'online'),
(20, 'Charity', 'georgetmuchiri@yahoo.com', 254, 'tiff', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-02 10:40:45', 2, 'offline'),
(21, 'winnie', 'wambui@gmail.com', 703788562, 'nanny', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-02 12:33:07', 2, 'offline'),
(22, 'Taurus', 'taurus@gmail.com', 703788562, 'nanny', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-12 15:23:20', 2, 'offline'),
(23, 'Taurus', 'taurus@gmail.com', 703788562, 'nanny', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-02 12:42:19', 2, 'offline'),
(24, 'bett', 'bett@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-05 10:52:40', 2, 'offline'),
(25, 'Joyce', 'joyce@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-14 17:39:17', 2, 'offline'),
(26, 'Tiffany ', 'tiff@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-07 17:08:14', 2, 'offline'),
(27, 'Tiffany ', 'tiff@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-07 17:09:43', 2, 'offline'),
(28, 'Marcellous', 'm@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-07 17:21:57', 2, 'offline'),
(29, 'Marcellous', 'm@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-07 17:22:39', 2, 'offline'),
(30, 'benjj', 'bett@gmail.com', 703788562, 'parents', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-07 17:24:45', 2, 'offline'),
(32, 'vivy', 'vivy@gmail.com', 703788562, 'nanny', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-21 09:51:45', 2, 'offline'),
(33, 'Juliana', 'julie@gmail.com', 703788562, 'nanny', 'default.png', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-21 10:17:59', 2, 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nannies`
--
ALTER TABLE `nannies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `nannies`
--
ALTER TABLE `nannies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
