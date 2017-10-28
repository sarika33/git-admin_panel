-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 02:03 PM
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
-- Database: `multilan.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `p_id` int(10) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_ch` varchar(255) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content_ch` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta-tag` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `created_by` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `title`, `title_ch`, `content`, `content_ch`, `slug`, `meta-tag`, `image`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(3, 'सारिका', '', 'rdsed', '', 'sdffsf', '', '', '1', 1, '2017-10-28 09:40:15', 0, '0000-00-00 00:00:00'),
(4, '莎莉嘉', '', 'rsr', '', 'sfs', '', '', '1', 1, '2017-10-28 09:41:07', 0, '0000-00-00 00:00:00'),
(5, '莎莉嘉', '', '???', '', 'ada', '', '', '1', 1, '2017-10-28 09:43:10', 0, '0000-00-00 00:00:00'),
(6, 'english', '', 'adsad', '', 'adad', '', '', '1', 1, '2017-10-28 09:49:56', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('0','1','2') NOT NULL COMMENT '	0=Developer, 1=Designer, 2=BPO',
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` enum('o','1','2') NOT NULL COMMENT '	0=not active, 1=active, 2=delete',
  `created_by` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(10) NOT NULL,
  `update_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
