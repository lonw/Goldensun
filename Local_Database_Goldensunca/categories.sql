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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `lang` int(11) NOT NULL DEFAULT '0',
  `link` text COLLATE utf8_unicode_ci,
  `img` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`, `lang`, `link`, `img`) VALUES
(1, '首 页', 0, 0, 'home.php', NULL),
(2, '关于我们', 0, 0, 'solution2.php', NULL),
(3, '贷款服务', 0, 0, 'solution3.php', NULL),
(4, '金融服务', 0, 0, 'investment.php', NULL),
(5, '申请贷款', 0, 0, 'loan.php', NULL),
(6, '税务服务', 0, 0, 'asset.php', NULL),
(7, '加入我们', 0, 0, 'exchange.php', NULL),
(8, '地产金融', 0, 0, 'solution2.php', NULL),
(9, '公司简介', 2, 0, 'solution2.php', NULL),
(10, '最新消息', 2, 0, 'map.php', NULL),
(11, '房屋贷款', 3, 0, 'solution1.php', NULL),
(12, '商业贷款', 3, 0, 'solution2.php', NULL),
(13, '私人贷款', 3, 0, 'solution3.php', NULL),
(14, '租赁贷款', 3, 0, 'investment.php', NULL),
(15, '二次贷款', 3, 0, 'loan.php', NULL),
(16, '重新贷款', 3, 0, 'asset.php', NULL),
(17, '预批贷款', 3, 0, 'exchange.php', NULL),
(18, '小生意贷款', 3, 0, 'solution2.php', NULL),
(19, '货币兑换', 4, 0, 'solution2.php', NULL),
(20, '投资理财', 4, 0, 'map.php', NULL),
(21, '委托理财', 4, 0, NULL, NULL),
(22, '创业投资', 4, 0, NULL, NULL),
(23, '债务重组', 4, 0, NULL, NULL),
(24, '教育储蓄', 4, 0, NULL, NULL),
(25, '保险业务', 4, 0, NULL, NULL),
(26, '贷款计算', 5, 0, NULL, NULL),
(27, '常见问题', 5, 0, NULL, NULL),
(28, '公司税务', 6, 0, NULL, NULL),
(29, '个人税务', 6, 0, NULL, NULL),
(30, '审计及会计', 6, 0, NULL, NULL),
(31, '公司注册及注销', 6, 0, NULL, NULL),
(32, '奥兰多', 8, 0, NULL, NULL),
(33, '坦帕', 8, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
