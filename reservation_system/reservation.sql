-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E19 日 05:33
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

-- --------------------------------------------------------

--
-- テーブルの構造 `affiliations`
--

CREATE TABLE IF NOT EXISTS `affiliations` (
`id` int(11) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `affiliation_type` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `affiliations`
--

INSERT INTO `affiliations` (`id`, `tel`, `email`, `affiliation_type`) VALUES
(1, '000000000000', 'nittai@ac.jp', '日本体育大学'),
(2, '111111111111', 'july@aaa.com', '株式会社ジュライ'),
(3, '', '', '友達'),
(4, '', '', '職場');

-- --------------------------------------------------------

--
-- テーブルの構造 `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`id` int(11) NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `answers`
--

INSERT INTO `answers` (`id`, `type`) VALUES
(1, '未定'),
(2, '参加'),
(3, '不参加');

-- --------------------------------------------------------

--
-- テーブルの構造 `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `affiliation_id` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `primary_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `tel` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `answer_id` varchar(12) CHARACTER SET utf16 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `customers`
--

INSERT INTO `customers` (`id`, `affiliation_id`, `primary_id`, `customer_name`, `tel`, `email`, `ticket_id`, `answer_id`, `created`, `modified`) VALUES
(1, '1', '2', '世川　望', '00000000000', 'segawa@gamil.com', 1, '3', '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(2, '1', '1', '柳澤　将吾', '111111111111', 'shogo@gmail.com', 1, '2', '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(3, '1', '1', '齋藤　恭平', '222222222222', 'saihe.kyon@gmail.com', 1, '2', '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(4, '1', '2', '安田　健太', '444444444444', 'yasuken@gmail.com', 1, '2', '2015-08-13 00:00:00', '2015-08-13 00:00:00'),
(5, '3', '2', '安田　奈々子', '555555555555', '7@gmail.com', 1, '2', '2015-08-13 00:00:00', '2015-08-19 11:32:25'),
(6, '4', '2', '堀切　貴明', '666666666666', 'horikiri@gmail.com', 1, '1', '2015-08-13 00:00:00', '2015-08-13 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `primarys`
--

CREATE TABLE IF NOT EXISTS `primarys` (
`id` int(11) NOT NULL,
  `primary_type` varchar(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `primarys`
--

INSERT INTO `primarys` (`id`, `primary_type`) VALUES
(1, ''),
(2, 'VIP');

-- --------------------------------------------------------

--
-- テーブルの構造 `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
`id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `stock` int(11) NOT NULL,
  `issue` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `stock`, `issue`, `created`, `modified`) VALUES
(1, '安田健太デュオコンサート with アンサンブルひとり', 20, 15, '2015-08-19 03:50:03', '2015-08-19 03:50:03');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `primarys`
--
ALTER TABLE `primarys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
