-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 01:59 PM
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
-- Database: `quesup.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `b_id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=not active,1=active,2delete',
  `created_by` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`b_id`, `blog_name`, `description`, `image`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(1, 'First Blog', '1st blog', '32.jpg', '1', 1, '2017-09-26 06:56:00', 0, '0000-00-00 00:00:00'),
(2, 'second Post', '2nd Post', '4.jpg', '1', 1, '2017-09-26 09:01:18', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `r_id` int(11) NOT NULL,
  `role` enum('0','1','2') NOT NULL COMMENT '0=Developer, 1=Designer, 2=BPO',
  `status` enum('0','1','2') NOT NULL COMMENT '0=not active, 1=active, 2=delete',
  `created_by` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=not active, 1=active, 2=delete',
  `created_by` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service_name`, `description`, `image`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(2, 'Web', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.', '55.jpg', '0', 1, '2017-09-20 07:19:43', 1, '0000-00-00 00:00:00'),
(5, 'digital', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.', '58.jpg', '1', 1, '2017-09-20 07:31:14', 1, '0000-00-00 00:00:00'),
(8, 'dfdg', 'Another Testing of service', '511.jpg', '1', 1, '2017-09-20 09:54:19', 1, '0000-00-00 00:00:00'),
(10, 'BPO', 'Do a testing of service', '513.jpg', '1', 1, '2017-09-20 09:57:42', 1, '0000-00-00 00:00:00'),
(15, 'New one', 'New one for demo purpose.', '3.jpg', '1', 1, '2017-09-21 10:35:39', 2, '0000-00-00 00:00:00'),
(16, 'dd', 'ede', '', '1', 1, '2017-09-21 11:36:10', 0, '0000-00-00 00:00:00'),
(17, 'new 1', 'For new testing', '31.jpg', '1', 1, '2017-09-21 11:37:39', 0, '0000-00-00 00:00:00'),
(18, 'One for new', 'Hey one new two', '2.jpg', '1', 1, '2017-09-21 11:38:51', 0, '0000-00-00 00:00:00'),
(19, 'desdf', 'weded', '518.jpg', '1', 1, '2017-09-21 11:46:12', 0, '0000-00-00 00:00:00'),
(20, 'without photo', 'without photo', '', '1', 1, '2017-09-21 11:46:50', 0, '0000-00-00 00:00:00'),
(21, 'over the limit', 'dfds', '2.jpg', '1', 1, '2017-09-21 11:47:34', 0, '0000-00-00 00:00:00'),
(22, 'sa', 'edwe', '519.jpg', '1', 1, '2017-09-25 10:09:44', 0, '0000-00-00 00:00:00'),
(23, 'Ajax', '4ee43r', '41.jpg', '1', 1, '2017-09-29 11:02:33', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('0','1','2') NOT NULL COMMENT '0=Developer, 1=Designer, 2=BPO',
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=not active, 1=active, 2=delete',
  `created_by` int(10) NOT NULL COMMENT '1=admin',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `role`, `email`, `password`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(1, 'Sarika Chaudhari', '1', 'csarika33@gmail.com', '07b7168167e0118130e809acf1817cb4', '1', 1, '2017-09-16 05:37:06', 1, '2017-09-16 11:05:00'),
(2, 'Shweta Sadavarte', '1', 'shweata@gamail.com', '', '1', 0, '2017-09-20 11:32:04', 1, '0000-00-00 00:00:00'),
(3, 'Sara Chaudhari', '1', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 0, '2017-09-20 11:36:17', 1, '0000-00-00 00:00:00'),
(4, 'adam', '0', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, '2017-09-25 11:32:43', 0, '0000-00-00 00:00:00'),
(5, 'Grace', '1', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 1, '2017-09-25 11:34:25', 0, '0000-00-00 00:00:00'),
(6, 'Chetan', '2', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 1, '2017-09-25 11:52:00', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
