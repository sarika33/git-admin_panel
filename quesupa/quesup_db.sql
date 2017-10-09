-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 07:03 AM
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
  `s_description` text NOT NULL,
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

INSERT INTO `blogs` (`b_id`, `blog_name`, `description`, `s_description`, `image`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(4, 'Web Development', 'Quesup Web Solutions is a web development company in Nashik that project complete web development solutions at economically better price. As a web development company in India our skilled professionals deliver A to Z web services to cater all your web development needs. We at world India do all the necessary work form designing, developing and website hosting too. We assure our clients utmost business support to make your website visible and profitable through our vast experience in web development. We offer every possible range of web development like WordPress website development, Joomla CMS development, joomla Web Development and Ecommerce Development. ', 'Quesup Web Solutions is a web development company in Nashik that project complete web development solutions at economically better price.', 'webdevelopmentbanner2.png', '1', 1, '2017-10-03 11:40:54', 0, '0000-00-00 00:00:00'),
(5, 'Marketing Plan', 'Your website is the most important component of your company’s marketing plan. It’s the central hub for your messaging and content marketing efforts. All other marketing materials should support and drive traffic to your website. As website design and development technology has progressed over the years, you now have more digital marketing tools than ever before.\r\nSocial media, blogs and mobile allow businesses and nonprofits to easily target and convert users by driving them to a well-designed website with a positive user experience or UX.\r\nWe work with you to develop a user experience which delivers value to your audience. Value means repeat visits and referrals via social media and other channels. Using our years of experience and research, Wood Street’s web design and development solutions are customized to help you achieve your digital marketing goals.', 'Your website is the most important component of your company’s marketing plan. It’s the central hub for your messaging and content marketing efforts.', 'content-marketing-cycle1.png', '1', 1, '2017-10-03 11:45:06', 0, '0000-00-00 00:00:00');

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
  `s_description` text NOT NULL,
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

INSERT INTO `services` (`s_id`, `service_name`, `description`, `s_description`, `image`, `status`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
(26, 'Social Media Integration', 'Social Media tools are easily accessed and abundant making them popular but also misunderstood. Proper planning is still required. The use of tools like Twitter, LinkedIn, and Facebook can enhance your marketing efforts, with your website acting as your central marketing hub. The content posted with these tools can also be integrated into Blogs and RSS feeds, automatically streamlining your content development efforts.', 'Social Media tools are easily accessed and abundant making them popular but also misunderstood.', 'M_social_integration.jpg', '1', 1, '2017-10-03 09:26:46', 0, '2017-10-07 08:01:39'),
(27, 'Content Development and Content Marketing', 'One of the most important parts of a website is the content. We provide web content development services such as site map development, content planning, writing, editing, and keyword analysis.\r\nContent marketing is a crucial piece to any digital marketing campaign. Successful digital marketing plans are only as great as the content you produce and the tools used to produce it. Content marketing requires a steady stream of fresh content. You need a content management system (CMS) like WordPress or Drupal to keep pace with the fast-moving world of marketing today.', 'One of the most important parts of a website is the content.', 'content-marketing-cycle.png', '1', 1, '2017-10-03 09:28:44', 0, '0000-00-00 00:00:00'),
(28, 'Website Maintenance', 'Another service we offer our clients is website maintenance. Through this service, we’re able to provide you with recommendations to reach your marketing goals, make simple text updates as well as add additional pages of content to help in your SEO efforts. We provide this service to all new and existing clients even if we didn’t develop your website.', 'Another service we offer our clients is website maintenance.', 'site-maint.gif', '1', 1, '2017-10-03 09:30:16', 0, '0000-00-00 00:00:00'),
(29, 'Software Development', 'Social Media tools are easily accessed and abundant making them popular but also misunderstood. Proper planning is still required. The use of tools like Twitter, LinkedIn, and Facebook can enhance your marketing efforts, with your website acting as your central marketing hub. The content posted with these tools can also be integrated into Blogs and RSS feeds, automatically streamlining your content development efforts.', 'Social Media tools are easily accessed and abundant making them popular but also misunderstood.', '', '1', 1, '2017-10-07 05:27:03', 0, '0000-00-00 00:00:00'),
(30, 'New1', 'dfsdf', 'fsdfs', '', '1', 1, '2017-10-07 08:32:27', 0, '0000-00-00 00:00:00');

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
(2, 'Shweta Sadavarte', '1', 'shweata@gamail.com', '', '1', 0, '2017-09-20 11:32:04', 1, '2017-10-07 11:15:21'),
(3, 'Sara Chaudhari', '1', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 0, '2017-09-20 11:36:17', 1, '0000-00-00 00:00:00'),
(4, 'adam', '0', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, '2017-09-25 11:32:43', 0, '0000-00-00 00:00:00'),
(5, 'Grace', '1', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 1, '2017-09-25 11:34:25', 0, '2017-10-07 11:14:46'),
(6, 'Chetan', '2', 'chaudharisara91@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 1, '2017-09-25 11:52:00', 0, '0000-00-00 00:00:00'),
(7, 'New', '0', '', '', '1', 1, '2017-10-06 12:27:07', 0, '0000-00-00 00:00:00'),
(8, 'New1', '0', '', '', '1', 1, '2017-10-06 12:34:58', 0, '0000-00-00 00:00:00'),
(10, 'encription password', '0', 'ddsd', '81dc9bdb52d04dc20036dbd8313ed055', '1', 1, '2017-10-07 09:12:52', 0, '0000-00-00 00:00:00'),
(11, 'e3e', '0', 'qqeqe', '9fc3d7152ba9336a670e36d0ed79bc43', '1', 1, '2017-10-07 09:43:29', 0, '0000-00-00 00:00:00'),
(12, 'confirm Password', '0', 'sdsd', '202cb962ac59075b964b07152d234b70', '1', 1, '2017-10-07 10:04:13', 0, '0000-00-00 00:00:00');

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
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
