-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018 年 12 月 29 日 23:28
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
-- テーブルの構造 `subjects_hiroshima`
--

CREATE TABLE `subjects_hiroshima` (
  `id_unique` int(8) NOT NULL,
  `id_subject` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_child` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_date_begin` date DEFAULT NULL,
  `opening_date_string` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apply_deadline` datetime DEFAULT NULL,
  `fee` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects_hiroshima`
--

INSERT INTO `subjects_hiroshima` (`id_unique`, `id_subject`, `id_parent`, `name_subject`, `name_child`, `URL`, `opening_date_begin`, `opening_date_string`, `opening_time`, `apply_deadline`, `fee`) VALUES
(1, 'T01', NULL, 'リアルタイムOSの内部構造', NULL, 'http://localhost/index.php/cource/t01/', '2018-07-07', '2018年07月07日（土曜日）および14日（土曜日）の2日間', '09時30分から17時00分\n（09時00分開場，初日集合時刻09時15分）', '2018-06-29 09:00:00', '40,000円（税込）'),
(2, 'T02', NULL, 'リアルタイム性保証技術', NULL, 'http://localhost/index.php/cource/t02/', '2018-12-15', '2018年12月15日（土曜日）', '09時30分から17時00分\n（09時00分開場，集合時刻09時15分）', '2018-12-09 09:00:00', '20,000円（税込）'),
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

-- --------------------------------------------------------

--
-- テーブルの構造 `subjects_nagoya`
--

CREATE TABLE `subjects_nagoya` (
  `id_unique` int(8) NOT NULL,
  `id_subject` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_child` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_date_begin` date DEFAULT NULL,
  `opening_date_string` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apply_deadline` datetime DEFAULT NULL,
  `fee` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects_nagoya`
--

INSERT INTO `subjects_nagoya` (`id_unique`, `id_subject`, `id_parent`, `type`, `name_subject`, `name_child`, `URL`, `opening_date_begin`, `opening_date_string`, `opening_time`, `apply_deadline`, `fee`) VALUES
(1, 'T01', NULL, 1, 'リアルタイムOSの内部構造', NULL, 'http://localhost/index.php/cource/t01/', '2018-07-07', '2018年07月07日（土曜日）および14日（土曜日）の2日間', '09時30分から17時00分\n（09時00分開場，初日集合時刻09時15分）', '2018-06-29 09:00:00', '40,000円（税込）'),
(2, 'T02', NULL, 1, 'リアルタイム性保証技術', NULL, 'http://localhost/index.php/cource/t02/', '2018-12-15', '2018年12月15日（土曜日）', '09時30分から17時00分\n（09時00分開場，集合時刻09時15分）', '2018-12-09 09:00:00', '20,000円（税込）'),
(3, 'D03', NULL, 1, '技術者のための文書作成法', NULL, 'http://localhost/index.php/cource/d03/', NULL, NULL, '09時30分から17時00分\n（09時00分開場，集合時刻09時15分）', NULL, ' 	20,000円（税込）'),
(4, 'D03_01', 'D03', 1, NULL, '1回目', 'http://localhost/index.php/cource/d03_01/', '2018-04-25', NULL, NULL, '2018-04-19 09:00:00', NULL),
(5, 'D03_02', 'D03', 1, NULL, '2回目', 'http://localhost/index.php/cource/d03_02/', '2018-05-26', NULL, NULL, '2018-05-18 09:00:00', NULL),
(6, 'T03', NULL, 1, 'FPGAを用いたハードウェア/ソフトウェア　コ・デザイン', NULL, 'http://localhost/index.php/cource/t03/', '2018-08-24', NULL, NULL, NULL, NULL),
(10, 'D03_03', 'D03', 1, NULL, '3回目', 'http://localhost/index.php/cource/d03_03/', '2018-06-16', NULL, NULL, '2018-06-08 09:00:00', NULL),
(11, 'D03_04', 'D03', 1, NULL, '4回目', 'http://localhost/index.php/cource/d03_04/', '2018-08-28', NULL, NULL, '2018-08-22 09:00:00', NULL),
(12, 'D03_05', 'D03', 1, NULL, '5回目', 'http://localhost/index.php/cource/d03_05/', '2018-10-02', NULL, NULL, '2018-09-26 09:00:00', NULL),
(13, 'D03_06', 'D03', 1, NULL, '6回目', 'http://localhost/index.php/cource/d03_06/', '2018-11-21', NULL, NULL, '2018-11-14 09:00:00', NULL),
(14, 'D03_07', 'D03', 1, NULL, '7回目', 'http://localhost/index.php/cource/d03_07/', '2018-12-05', NULL, NULL, '2018-11-29 09:00:00', NULL),
(15, 'D03_08', 'D03', 1, NULL, '8回目', 'http://localhost/index.php/cource/d03_08/', '2019-01-21', NULL, NULL, '2019-01-16 09:00:00', NULL),
(16, 'D03_09', 'D03', 1, NULL, '9回目', 'http://localhost/index.php/cource/d03_09/', '2019-03-01', NULL, NULL, '2019-02-22 09:00:00', NULL),
(17, 'T09', NULL, 2, '組込み/自動車セキュリティ中級', NULL, 'http://localhost/index.php/cource/t09/', '2019-02-27', '2019-02-28', '09時30分から17時00分\n（09時00分開場，初日集合時刻09時15分）', '2019-02-21 09:00:00', '50,000円（税込）'),
(19, NULL, NULL, 1, '組込みシステムのセーフティ/セキュリティ入門', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, 1, '組込みプログラミング初級', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, 1, 'マルチプロセッサ用RTOSを使ったアプリケーション開発', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 1, 'マルチプロセッサ用RTOSの内部構造', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 1, '技術者のための文書作成法（開講回選択）', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, 1, 'メンタル面の管理技術', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, 1, 'メンタル面の管理技術【夜間開講】', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, 1, 'ドキュメントレビュー', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, 1, '人材育成と仕事の質を重視した管理技術', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, 1, '要求仕様書と設計書の作成技術', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, 1, 'ソフトウェア品質・信頼性評価技術</em><br>（広島大学提供科目）', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, 1, 'ソフトウェア構成管理演習</em><br>（広島大学提供科目）', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, 1, 'C-プログラミング入門（ソケットプログラミング）</em><br>（静岡大学提供科目）', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, 1, 'C-プログラミング入門（リファクタリング）</em><br>（静岡大学提供科目）', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 1, 'IoT環境における知的情報処理</em><br>（愛媛大学提供科目）', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects_hiroshima`
--
ALTER TABLE `subjects_hiroshima`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- Indexes for table `subjects_nagoya`
--
ALTER TABLE `subjects_nagoya`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects_hiroshima`
--
ALTER TABLE `subjects_hiroshima`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `subjects_nagoya`
--
ALTER TABLE `subjects_nagoya`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
