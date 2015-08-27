-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E27 日 04:24
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservation`
--
<<<<<<< HEAD
CREATE DATABASE IF NOT EXISTS `reservation` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
=======
CREATE DATABASE IF NOT EXISTS `reservation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
>>>>>>> bf6699c4ad02ac8ae6cdf22bd65e1c0f6097996c
USE `reservation`;

-- --------------------------------------------------------

--
-- テーブルの構造 `affiliations`
--

CREATE TABLE IF NOT EXISTS `affiliations` (
`id` int(11) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `affiliations`
--

INSERT INTO `affiliations` (`id`, `tel`, `email`, `name`, `created`, `modified`) VALUES
(1, '000000000000', 'nittai@ac.jp', '日本体育大学', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '111111111111', 'july@aaa.com', '株式会社ジュライ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', '', '友達', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '', '職場', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `sales_info_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `answers`
--

INSERT INTO `answers` (`id`, `name`, `sales_info_id`, `created`, `modified`) VALUES
(1, '未定', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '参加', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '不参加', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `affiliation_id` int(11) DEFAULT NULL,
  `primary_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `tel` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sales_info_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `customers`
--

INSERT INTO `customers` (`id`, `affiliation_id`, `primary_id`, `customer_name`, `tel`, `email`, `sales_info_id`, `created`, `modified`) VALUES
(1, 1, 2, '世川　望', '00000000000', 'segawa@gamil.com', 0, '2015-08-13 00:00:00', '2015-08-26 12:55:01'),
(2, 1, 1, '柳澤　将吾', '111111111111', 'shogo@gmail.com', 0, '2015-08-13 00:00:00', '2015-08-26 12:50:34'),
(3, 1, 1, '齋藤　恭平', '222222222222', 'saihe.kyon@gmail.com', 0, '2015-08-13 00:00:00', '2015-08-26 12:54:30'),
(4, 1, 2, '安田　健太', '444444444444', 'yasuken@gmail.com', 0, '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(5, 3, 2, '安田　奈々子', '555555555555', '7@gmail.com', 0, '2015-08-13 00:00:00', '2015-08-19 11:32:25'),
(6, 4, 2, '堀切　貴明', '666666666666', 'horikiri@gmail.com', 0, '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(7, 2, 2, '溝江智則', '777777777777', 'july@gmail.com', 0, '2015-08-20 10:49:17', '2015-08-21 14:48:21'),
(8, 2, 2, 'あうー', '888888888888', 'au@gmail.com', 0, '2015-08-20 15:13:01', '2015-08-20 15:13:01'),
(9, 1, 1, '吉田竜也', '999999999999', 'yoshi@gmail.com', 0, '2015-08-21 13:36:22', '2015-08-26 12:54:36'),
(10, 1, 2, 'asdf', '11234', 'asdf@asdf.co.jp', 0, '2015-08-21 14:27:23', '2015-08-21 14:27:23');

-- --------------------------------------------------------

--
-- テーブルの構造 `primarys`
--

CREATE TABLE IF NOT EXISTS `primarys` (
`id` int(11) NOT NULL,
  `name` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `primarys`
--

INSERT INTO `primarys` (`id`, `name`, `created`, `modified`) VALUES
(1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'VIP', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `sales_infos`
--

CREATE TABLE IF NOT EXISTS `sales_infos` (
`id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
`id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `stock` int(11) NOT NULL,
  `customer_count` int(11) DEFAULT NULL,
  `sales_info_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `stock`, `customer_count`, `sales_info_id`, `created`, `modified`) VALUES
(1, '安田健太デュオコンサート with アンサンブルひとり', 20, 4, 0, '2015-08-19 03:50:03', '2015-08-21 14:23:37'),
(2, '劇団きょんたろ　オペラ座の怪人', 50, 3, 0, '2015-08-20 10:30:11', '2015-08-20 10:30:11'),
(3, 'きょんたろソロコンサート', 10, NULL, 0, '2015-08-26 11:06:29', '2015-08-26 11:06:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliations`
--
ALTER TABLE `affiliations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primarys`
--
ALTER TABLE `primarys`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_infos`
--
ALTER TABLE `sales_infos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliations`
--
ALTER TABLE `affiliations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `primarys`
--
ALTER TABLE `primarys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales_infos`
--
ALTER TABLE `sales_infos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
