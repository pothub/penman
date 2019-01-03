-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 1 月 03 日 22:28
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
-- テーブルの構造 `subjects_IoTs`
--

CREATE TABLE `subjects_IoTs` (
  `id_order` int(11) NOT NULL DEFAULT '999',
  `id_unique` int(8) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects_IoTs`
--

INSERT INTO `subjects_IoTs` (`id_order`, `id_unique`, `type`, `name_subject`, `URL`) VALUES
(1, 1, 1, 'C-プログラミング入門（ポインタ編）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a02'),
(2, 2, 1, 'C-プログラミング入門（関数編）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a03'),
(3, 3, 1, 'C-プログラミング入門（構造体編）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a04'),
(4, 4, 1, 'C-プログラミング入門（ソケットプログラミング）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a05'),
(5, 5, 1, 'C-プログラミング入門（設計とテスト）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a06'),
(6, 6, 1, 'C-プログラミング入門（リファクタリング）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a07'),
(7, 7, 1, 'オブジェクト指向設計講座', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a14'),
(8, 8, 1, '組込みソフトウェア開発のためのUML基礎', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a08'),
(9, 9, 1, 'UMLドキュメンテーションとレビュー手法', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a09'),
(10, 10, 1, '技術文書を対象としたテクニカルライティング', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a10'),
(11, 11, 1, 'リアルタイムOS（導入編）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a11'),
(12, 12, 1, 'リアルタイムOS（実践編）', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a12'),
(1, 13, 2, 'モデルベース開発基礎', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a13'),
(2, 14, 2, 'IoTシステムアーキテクト養成プログラム', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/shizuoka/index.html#a01'),
(1, 15, 3, 'IoT環境における知的情報処理技術', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/ehime/index.html#a03'),
(2, 16, 3, 'IoTにおけるテスト技術及びセキュリティ技術', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/ehime/index.html#a01'),
(1, 17, 4, 'IoT 環境における画像処理・理解技術(リンクがおかしい)', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/ehime/index.html#a03'),
(1, 18, 5, 'ソフトウェア品質と検証技術', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/nanzan/index.html#a01'),
(2, 19, 5, '組込みシステムのモデリング', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/nanzan/index.html#a02'),
(1, 20, 6, 'データベースセキュリティ', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/nanzan/index.html#a03'),
(2, 21, 6, '分散システムとクラウド技術', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/nanzan/index.html#a04'),
(3, 22, 6, 'IoTデータ分析基盤', 'https://hept.inf.shizuoka.ac.jp/enpit/subject/nanzan/index.html#a05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects_IoTs`
--
ALTER TABLE `subjects_IoTs`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects_IoTs`
--
ALTER TABLE `subjects_IoTs`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
