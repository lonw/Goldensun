-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 06:29 PM
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
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `ms` int(11) NOT NULL,
  `bd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cemployer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pemployer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pjobtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobtime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pjobtime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aincome` int(11) NOT NULL,
  `propertyaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `houseprice` int(11) NOT NULL,
  `martgage` int(11) NOT NULL,
  `closingdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cash` int(11) NOT NULL,
  `bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otherassets` int(11) NOT NULL,
  `holdaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cvalue` int(11) NOT NULL,
  `pdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apropertytax` int(11) NOT NULL,
  `oriprice` int(11) NOT NULL,
  `ancondofees` int(11) NOT NULL,
  `mortgagebal` int(11) NOT NULL,
  `maturitydate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `monthlypayment` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `ratetype` int(11) NOT NULL,
  `termtype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `approval` int(11) NOT NULL DEFAULT '0',
  `get_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
