-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018 年 12 月 20 日 20:52
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

CREATE TABLE `subjects_` (
  `id_unique` int(8) NOT NULL,
  `id_subject` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_child` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_date1` date DEFAULT NULL,
  `opening_date2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects`
--

INSERT INTO `subjects_` (`id_unique`, `id_subject`, `id_parent`, `name_subject`, `name_child`, `URL`, `opening_date1`, `opening_date2`) VALUES
(1, 'T01', NULL, 'リアルタイムOSの内部構造', NULL, 'http://localhost/index.php/cource/t01/', '2018-07-07', '2018-07-14'),
(2, 'T02', NULL, 'リアルタイム性保証技術', NULL, 'http://localhost/index.php/cource/t02/', '2018-12-15', NULL),
(3, 'D03', NULL, '技術者のための文書作成法', NULL, 'http://localhost/index.php/cource/d03/', '2018-08-24', NULL),
(4, NULL, 'D03', NULL, '1回目', NULL, '2018-04-25', NULL),
(5, NULL, 'D03', NULL, '2回目', NULL, '2018-05-26', NULL),
(10, NULL, 'D03', NULL, '3回目', NULL, '2018-06-16', NULL),
(11, NULL, 'D03', NULL, '4回目', NULL, '2018-08-28', NULL),
(12, NULL, 'D03', NULL, '5回目', NULL, '2018-10-02', NULL),
(13, NULL, 'D03', NULL, '6回目', NULL, '2018-11-21', NULL),
(14, NULL, 'D03', NULL, '7回目', NULL, '2018-12-05', NULL),
(15, NULL, 'D03', NULL, '8回目', NULL, '2019-01-21', NULL),
(16, NULL, 'D03', NULL, '9回目', NULL, '2019-03-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects_`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects_`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
