-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018 年 12 月 24 日 04:35
-- サーバのバージョン： 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `subjects`
--

CREATE TABLE `subjects` (
  `id_unique` int(8) NOT NULL,
  `id_subject` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_child` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_date1` date DEFAULT NULL,
  `opening_date2` date DEFAULT NULL,
  `opening_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apply_deadline` datetime DEFAULT NULL,
  `fee` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects`
--

INSERT INTO `subjects` (`id_unique`, `id_subject`, `id_parent`, `name_subject`, `name_child`, `URL`, `opening_date1`, `opening_date2`, `opening_time`, `apply_deadline`, `fee`) VALUES
(1, 'T01', NULL, 'リアルタイムOSの内部構造', NULL, 'http://localhost/index.php/cource/t01/', '2018-07-07', '2018-07-14', '09時30分から17時00分\n（09時00分開場，初日集合時刻09時15分）', '2018-06-29 09:00:00', '40,000円（税込）'),
(2, 'T02', NULL, 'リアルタイム性保証技術', NULL, 'http://localhost/index.php/cource/t02/', '2018-12-15', NULL, '09時30分から17時00分\n（09時00分開場，集合時刻09時15分）', '2018-12-07 09:00:00', '20,000円（税込）'),
(3, 'D03', NULL, '技術者のための文書作成法', NULL, 'http://localhost/index.php/cource/d03/', NULL, NULL, '09時30分から17時00分\n（09時00分開場，集合時刻09時15分）', NULL, ' 	20,000円（税込）'),
(4, 'D03_01', 'D03', NULL, '1回目', NULL, '2018-04-25', NULL, NULL, '2018-04-19 09:00:00', NULL),
(5, 'D03_02', 'D03', NULL, '2回目', NULL, '2018-05-26', NULL, NULL, '2018-05-18 09:00:00', NULL),
(10, 'D03_03', 'D03', NULL, '3回目', NULL, '2018-06-16', NULL, NULL, '2018-06-08 09:00:00', NULL),
(11, 'D03_04', 'D03', NULL, '4回目', NULL, '2018-08-28', NULL, NULL, '2018-08-22 09:00:00', NULL),
(12, 'D03_05', 'D03', NULL, '5回目', NULL, '2018-10-02', NULL, NULL, '2018-09-26 09:00:00', NULL),
(13, 'D03_06', 'D03', NULL, '6回目', NULL, '2018-11-21', NULL, NULL, '2018-11-14 09:00:00', NULL),
(14, 'D03_07', 'D03', NULL, '7回目', NULL, '2018-12-05', NULL, NULL, '2018-11-29 09:00:00', NULL),
(15, 'D03_08', 'D03', NULL, '8回目', NULL, '2019-01-21', NULL, NULL, '2019-01-16 09:00:00', NULL),
(16, 'D03_09', 'D03', NULL, '9回目', NULL, '2019-03-01', NULL, NULL, '2019-02-22 09:00:00', NULL),
(17, 'T09', NULL, '組込み/自動車セキュリティ中級', NULL, 'http://localhost/index.php/cource/t09/', '2019-02-27', '2019-02-28', '09時30分から17時00分\n（09時00分開場，初日集合時刻09時15分）', '2019-02-21 09:00:00', '50,000円（税込）');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
