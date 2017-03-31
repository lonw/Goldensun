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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `release_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lang` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `img`, `release_date`, `lang`, `featured`, `link`, `deleted`) VALUES
(1, '小生意贷款', '做生意最重要的是如何解决资金不足。买房可以贷款90%，买生意同样可以贷款90%；买房贷款审核你的收入，买生意贷款审核你要买的生意的盈利能力...', '/images/20150312105145955.jpg', '2017-03-21 18:39:09', 0, 0, 'page.php?title=Small%20Business&category=Loan', 0),
(2, '二次贷款', '二次抵押贷款是指将已做抵押的抵押物再次抵押，从特定放款人处获得贷款。二次抵押贷款的特点是不用还清以前的贷款...', '/images/sellmymortgagenote01.jpg', '2017-03-21 18:40:04', 0, 0, 'page.php?title=Secondary%20Mortgage&category=Loan', 0),
(3, '新移民房贷流程', '对于新移民，置业安家是首要的问题，如果国内资产还没有全部转移到加拿大，贷款是一个必然的选择...', '/images/Cnc_plasma_cutting_small.jpg', '2017-03-21 19:06:09', 0, 0, 'page.php?title=Residential%20Mortgage&category=Loan#menu4', 0),
(4, '房屋贷款的七个步骤', '加拿大买房贷款的手续流程大致可分为七个步骤，需要准备的文件大约分房屋材料，个人材料以及首付材料3个部分...', '/images/shutterstock_2653650_small.jpg', '2017-03-21 19:06:09', 0, 0, 'page.php?title=Residential%20Mortgage&category=Loan', 0),
(5, '房贷申请需注意', '许多房贷客户由于缺乏房贷行业内部审核流程和政策的知识，自己给自己制造了许多不必要的麻烦...', '/images/sdrt_small.jpg', '2017-03-21 19:08:34', 0, 0, 'page.php?title=Residential%20Mortgage&category=Loan', 0),
(6, '什么是预批贷款', '做预批贷款前，客户需要提供工资证明，首期付款证明，客户也会知道他们的信用等级， 以及银行都提供哪些按揭产品...', '/images/5744351061_0ee7664c9e_b_small.jpg', '2017-03-21 19:08:34', 0, 0, 'page.php?title=Pre-approval&category=Loan', 0),
(7, 'New immigrant mortgage process', 'For new immigrants, the primary problem is the purchase of new homes. If the asset has not all been transferred to Canada, ', '/images/Cnc_plasma_cutting_small.jpg', '2017-03-21 19:46:49', 1, 0, 'page.php?title=Residential%20Mortgage&category=Loan#menu4', 0),
(8, '7 Steps of mortgage application', 'The process of applying for a mortgage in Canada can be roughly divided into seven steps, and the documents to be prepared are divided into three parts: housing materials, personal materials and down payment materials.', '/images/shutterstock_2653650_small.jpg', '2017-03-21 19:48:07', 1, 0, 'page.php?title=Residential%20Mortgage&category=Loan', 0),
(9, 'What are the precautions for mortgage application?', 'Many mortgage applicants due to the lack of mortgage industry internal audit process and policy knowledge, to create their own a lot of unnecessary trouble ...', '/images/sdrt_small.jpg', '2017-03-21 19:48:07', 1, 0, 'page.php?title=Residential%20Mortgage&category=Loan', 0),
(10, 'What is mortgage pre-approval?', 'Before the mortgage pre-approval application, the customer will need to provide proof of income and down payment, to learn about credit report, and will know mortgage products are provided by bank ...', '/images/5744351061_0ee7664c9e_b_small.jpg', '2017-03-21 19:49:55', 1, 0, 'page.php?title=Pre-approval&category=Loan', 0),
(11, 'Small business loans', 'The most important thing about doing business is how to solve the shortage of funds. Buy a house can loan 90%, buy business can also loan 90%; buy a house loan to review your income, buy a business loan to review the profitability of the business you want to buy ...', '/images/20150312105145955.jpg', '2017-03-21 19:49:55', 1, 0, 'page.php?title=Small%20Business&category=Loan', 0),
(12, 'Secondary Mortgage', 'A secondary mortgage is a mortgage that has been collateralized and secured from a specific lender. The second mortgage is characterized by not paying off the previous loan ...', '/images/sellmymortgagenote01.jpg', '2017-03-21 18:39:09', 1, 0, 'page.php?title=Secondary%20Mortgage&category=Loan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
