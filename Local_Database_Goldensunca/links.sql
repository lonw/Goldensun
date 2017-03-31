-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 06:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `lang` int(11) NOT NULL DEFAULT '0',
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `lang`, `category`, `title`, `link`, `attachment`, `deleted`) VALUES
(1, 0, '常用链接', '关于我们', 'page.php?title=About&category=about', '', 0),
(2, 0, '常用链接', '咨询顾问', 'page.php?title=About&category=about#team', '', 0),
(3, 0, '常用链接', '职位招聘', 'contact.php?hire=1', '', 0),
(4, 0, '常用链接', '核心团队', 'page.php?title=About&category=about#team', '', 0),
(5, 0, '常用链接', '用户平台', 'admin', '', 0),
(6, 0, '技术支援', '服务范围', 'home.php#about', '', 0),
(7, 0, '技术支援', '投资咨询', 'contact.php?invest=1', '', 0),
(8, 0, '技术支援', '证书资格', 'https://www5.fsco.gov.on.ca/mbsweblist/ShowLicence.aspx?M11002760~', '', 0),
(9, 0, '技术支援', '技术困难', 'contact.php?support=1', '', 0),
(10, 0, '技术支援', '预约会议', 'contact.php', '', 0),
(11, 0, '表格下载', '房屋贷款', 'download/Application.pdf', '', 0),
(12, 0, '表格下载', '商业贷款', 'download/Application.pdf', '', 0),
(13, 0, '表格下载', '私人贷款', 'download/Application.pdf', '', 0),
(14, 0, '表格下载', '租赁贷款', 'download/Application.pdf', '', 0),
(15, 0, '表格下载', '债务重组', 'download/Application.pdf', '', 0),
(16, 0, 'Useful Links', 'About Us', 'page.php?title=About&category=about', '', 0),
(17, 0, 'Useful Links', 'Our Adviser', 'page.php?title=About&category=about#team', '', 0),
(18, 0, 'Useful Links', 'Careers', 'contact.php?hire=1', '', 0),
(19, 0, 'Useful Links', 'Partners', 'page.php?title=About&category=about#team', '', 0),
(20, 0, 'Useful Links', 'Control Panel', 'admin', '', 0),
(21, 0, 'Support Menu', 'Our Services', 'home.php#about', '', 0),
(22, 0, 'Support Menu', 'Registration', 'contact.php?invest=1', '', 0),
(23, 0, 'Support Menu', 'Broker Licence', 'https://www5.fsco.gov.on.ca/mbsweblist/ShowLicence.aspx?M11002760~', '', 0),
(24, 0, 'Support Menu', 'Technical Difficulties', 'contact.php?support=1', '', 0),
(25, 0, 'Support Menu', 'Reservation', 'contact.php', '', 0),
(26, 0, 'Downloads', 'Residential Mortgage', 'download/Application.pdf', '', 0),
(27, 0, 'Downloads', 'Commercial Mortgage', 'download/Application.pdf', '', 0),
(28, 0, 'Downloads', 'Private Mortgage', 'download/Application.pdf', '', 0),
(29, 0, 'Downloads', 'Commercial Leasing', 'download/Application.pdf', '', 0),
(30, 0, 'Downloads', 'Second Mortgage', 'download/Application.pdf', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
