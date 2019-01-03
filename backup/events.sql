-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 1 月 03 日 22:27
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
-- テーブルの構造 `events`
--

CREATE TABLE `events` (
  `id_unique` int(8) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_date_begin` date NOT NULL,
  `opening_date_string` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `outline` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `events`
--

INSERT INTO `events` (`id_unique`, `title`, `URL`, `opening_date_begin`, `opening_date_string`, `location`, `outline`) VALUES
(1, '第5回HEPTコンソーシアムフォーラム (リンク切れ)', 'https://architect.inf.shizuoka.ac.jp/hept/activities/sig-hept/item/249-hept5thforum', '2018-01-24', '2018年1月24日（水）', 'プレスタワー17階静岡新聞ホール', '5周年を機会に昨今の技術動向の変化・それに伴うアーキテクトとして身に付けるべきスキルの変化と，そのスキルの変化にどのように先行していくのか，に着目した講演です．enPiT-Pro Embの紹介もあります． '),
(2, 'enPiT第6回シンポジウム', 'http://www.enpit.jp/news/2017/11/enpit6-6b97.html', '2018-01-25', '2018年1月25日（木）', '岡山コンベンションセンター(ママカリフォーラム) イベントホール', '学生向けに実施されてきたenPiTのフォーラムで，新しい取り組みとしてenPiT-Pro Embの紹介と説明を行います．'),
(3, '第3回オートモーティブ・ソフトウェア・フロンティア', 'https://b-event.impress.co.jp/event/asf201802/exhibition.html', '2018-02-28', ' 2018年2月22日（木），23日（金）', '御茶ノ水ソラシティカンファレンスセンター', '組込みソフトウェア開発に関わる技術や知識について，多忙な社会人も学び続けられるよう，各大学の特色や学びやすさにも工夫したenPiT-Pro Embのコンテンツについて，ブース展示でご案内します．'),
(4, 'enPiT-Pro 三拠点合同シンポジウム', 'https://smartse.jp/symposium/', '2018-03-12', '2018年3月12日（月）', '早稲田大学戸山キャンパス', '文部科学省enPiT-Pro採択拠点が集まって合同シンポジウムを開催します．enPiT-Pro Embの紹介もあります．');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
