-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2017 at 09:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rak`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_howitworks_content`
--

CREATE TABLE `home_howitworks_content` (
  `id` int(10) NOT NULL,
  `big` varchar(1000) DEFAULT NULL,
  `small` varchar(10000) DEFAULT NULL,
  `one_big` varchar(1000) DEFAULT NULL,
  `one_small` varchar(10000) DEFAULT NULL,
  `two_big` varchar(1000) DEFAULT NULL,
  `two_small` varchar(10000) DEFAULT NULL,
  `three_big` varchar(1000) DEFAULT NULL,
  `three_small` varchar(10000) DEFAULT NULL,
  `four_big` varchar(1000) DEFAULT NULL,
  `four_small` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_howitworks_content`
--

INSERT INTO `home_howitworks_content` (`id`, `big`, `small`, `one_big`, `one_small`, `two_big`, `two_small`, `three_big`, `three_small`, `four_big`, `four_small`) VALUES
(0, 'this is big ', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_main_content`
--

CREATE TABLE `home_main_content` (
  `id` int(10) NOT NULL,
  `big` varchar(100) DEFAULT NULL,
  `small` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_main_content`
--

INSERT INTO `home_main_content` (`id`, `big`, `small`) VALUES
(1, 'this is big content', NULL),
(2, 'this is big content', 'this is small content'),
(3, 'this is big content', 'this is small content and thanks for that'),
(4, 'this is big content and thanks ', 'this is small content and thanks for that'),
(5, 'this is big content and thanks ', 'this is small content and thanks for that'),
(6, 'this is big content and thanks a lot ', 'this is small content and thanks for that'),
(7, 'this is big content and thanks a lot ', 'this is small content and thanks for that'),
(8, 'this is big content and thanks a lot ', 'this is small content and thanks for that . ok '),
(9, 'this is big content and thanks a lot ', 'this is small content and thanks for that . ok ');

-- --------------------------------------------------------

--
-- Table structure for table `home_resturant_andmore_content`
--

CREATE TABLE `home_resturant_andmore_content` (
  `id` int(11) NOT NULL,
  `resturant` varchar(100) DEFAULT NULL,
  `people_served` varchar(100) DEFAULT NULL,
  `registered_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_resturant_andmore_content`
--

INSERT INTO `home_resturant_andmore_content` (`id`, `resturant`, `people_served`, `registered_user`) VALUES
(1, 'this is new content ', '', ''),
(2, 'this is new content ', '12160', ''),
(3, 'this is new content ', '12160', 'hello dolly'),
(4, 'this is new content ', '12160', 'hello '),
(5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_section_4`
--

CREATE TABLE `home_section_4` (
  `id` int(10) NOT NULL,
  `big` varchar(1000) DEFAULT NULL,
  `small` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_4`
--

INSERT INTO `home_section_4` (`id`, `big`, `small`) VALUES
(1, 'this is big', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_5`
--

CREATE TABLE `home_section_5` (
  `id` int(10) NOT NULL,
  `big` varchar(100) DEFAULT NULL,
  `small` varchar(1000) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_5`
--

INSERT INTO `home_section_5` (`id`, `big`, `small`, `image`) VALUES
(1, 'this is big', '', ''),
(2, 'this is big', '', '15777061_1283400545037215_5109786879746060967_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_section_6`
--

CREATE TABLE `home_section_6` (
  `id` int(10) NOT NULL,
  `big` varchar(100) NOT NULL,
  `small` varchar(100) NOT NULL,
  `submit_big` varchar(100) NOT NULL,
  `submit_small` varchar(1000) NOT NULL,
  `submit_details` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section_6`
--

INSERT INTO `home_section_6` (`id`, `big`, `small`, `submit_big`, `submit_small`, `submit_details`, `image`) VALUES
(1, 'this is big', 'this is big', '', '', '', ''),
(2, 'this is big', 'this is small', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin@123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_main_content`
--
ALTER TABLE `home_main_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_resturant_andmore_content`
--
ALTER TABLE `home_resturant_andmore_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_4`
--
ALTER TABLE `home_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_5`
--
ALTER TABLE `home_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section_6`
--
ALTER TABLE `home_section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_main_content`
--
ALTER TABLE `home_main_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `home_resturant_andmore_content`
--
ALTER TABLE `home_resturant_andmore_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home_section_4`
--
ALTER TABLE `home_section_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_section_5`
--
ALTER TABLE `home_section_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_section_6`
--
ALTER TABLE `home_section_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
