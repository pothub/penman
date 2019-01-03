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
-- テーブルの構造 `subjects_hiroshima`
--

CREATE TABLE `subjects_hiroshima` (
  `id_order` int(11) NOT NULL DEFAULT '999',
  `id_unique` int(8) NOT NULL,
  `id_subject` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `name_subject` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lecturer` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `opening_date_string` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_time` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `application_period` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `fee` int(11) NOT NULL DEFAULT '0',
  `goal` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `course_outline` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `precondition` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `lecture_plan` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `evaluation` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `equipment` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `subjects_hiroshima`
--

INSERT INTO `subjects_hiroshima` (`id_order`, `id_unique`, `id_subject`, `type`, `name_subject`, `URL`, `location`, `lecturer`, `opening_date_string`, `opening_time`, `application_period`, `target`, `fee`, `goal`, `course_outline`, `precondition`, `lecture_plan`, `evaluation`, `equipment`, `remarks`) VALUES
(1, 1, 'hru-k-01', 1, 'ソフトウェア品質・信頼性評価技術', 'http://localhost/index.php/cource/hru-k-01/', '広島大学', '岡村寛之（広島大学）', '近日公開', '6時間', '近日公開', 'ソフトウェア開発管理の業務に従事されている方', 0, '        ソフトウェア品質の概念について理解する<br>\r\n        ソフトウェアテストの基礎を理解する<br>\r\n        バグ管理手法ならびにソフトウェア信頼性評価手法を習得する<br>', '高品質のソフトウェアを工学的に開発するため，ソフトウェアの品質やディペンダビリティの概念，さらに種々の検証技術とその実践方法について解説する．', 'ソフトウェアシステムの開発経験があること', '        ソフトウェア品質／ディペンダビリティ属性<br>\r\n        ソフトウェアテスト<br>\r\n        ソフトウェア信頼性評価<br>', '        全時間数を出席していること，出席時間が必要条件に満たない場合は受講認定しない<br>\r\n        レポートにより評価する<br>', '特になし，資料を配布する', ''),
(2, 2, 'hru-k-02', 1, 'ソフトウェア構成管理演習', 'http://localhost/index.php/cource/hru-k-02/', '広島大学', '岡村寛之（広島大学），他', '近日公開', '6時間', '近日公開', '     ソフトウェア開発業務に従事されている方', 0, '        Git/GitHubによる成果物管理を習得する<br>         効率的な開発環境の構築方法について理解する<br>', 'ソフトウェア構成管理におけるソースコード管理，ビルド環境の構築ならびにテストコード管理を行う．', '        C言語によるプログラミングが可能であること<br>         Linuxの基礎的なコマンドを理解していること<br>', '        Gitによるソースコード管理<br>         リアルタイムスケジューリング理論<br>         GitHubを用いたワークフロー<br>         単体テストツール<br>         統合開発環境（Eclipse 他）<br>         統合開発環境を用いたソフトウェア構成管理<br>', '        全時間数を出席していること，出席時間が必要条件に満たない場合は受講認定しない<br>         レポートにより評価する<br>', '特になし，資料を配布する', ''),
(3, 3, 'hru-k-03', 1, 'チーム開発演習術', 'http://localhost/index.php/cource/hru-k-03/', '広島大学', '岡村寛之（広島大学）', '近日公開', '12時間', '近日公開', 'ソフトウェア開発業務に従事されている方', 0, '        Scrumを通じて自己組織的なチーム運営のやり方を習得する<br>         アジャイル的なソフトウェア開発手法の考え方を理解する<br>', 'Scrumを通じてチーム運営の考え方ならびに運営方法を習得する．', 'ソフトウェア構成管理演習を受講していること', '        Scrumの概要<br>         リーンキャンバスの作成<br>         プロダクトバックログの作成<br>         スプリントバックログの作成<br>         チーム運営（スプリント計画，スタンドアップミーティング）<br>', '        全時間数を出席していること，出席時間が必要条件に満たない場合は受講認定しない<br>         レポートにより評価する<br>', '特になし，資料を配布する', ''),
(4, 4, 'hru-k-04', 1, ' GPUプログラミング', 'http://localhost/index.php/cource/hru-k-04/', '広島大学', ' 伊藤靖朗（広島大学）', '近日公開', '    6時間', '近日公開', 'ソフトウェア開発の業務に従事されている方', 0, '        GPUアーキテクチャについて理解する<br>         GPUプログラミングの基礎を理解する<br>         GPUの効果的な並列計算プログラミング手法を習得する<br>', 'GPUで高性能計算プログラムを作成するため，GPUのアーキテクチャの概念，GPUプログラミングについて解説し，演習を通じてGPUプログラミングを習得する．', '        C言語によるプログラミングが可能であること<br>         Linuxの基礎的なコマンドを理解していること<br>', '        GPUアーキテクチャの概要<br>         GPUプログラミングの基礎<br>         並列処理プログラム<br>         チューニングテクニック<br>         GPUプログラミングの応用<br>', '        全時間数を出席していること，出席時間が必要条件に満たない場合は受講認定しない<br>         レポートにより評価する<br>', '特になし，資料を配布する', ''),
(101, 5, 'hru-s-01', 2, 'モデルベース開発プロセス', 'http://localhost/index.php/cource/hru-s-01/', '広島大学', '山本 透（広島大学），他', '近日公開', '41時間', '近日公開', '制御システム開発に関与する制御技術者，ソフトウェア技術者，またはそれらの開発管理者', 30000, '機械・電気・制御ソフトの全要素が含まれたメカトロシステムの教材を使った演習を通してMDB（モデルベース開発）V字開発プロセスを実体験し，MEBの意義，開発プロセスの全体像についての理解を深める．', '        MATLAB/Simulinkを用いたMBD (MILS/HILS)<br>         Scilabを用いたMILS<br>         非因果ツールによるモデリング<br>', '    特になし', '        MBDとは，モデリング概論<br>         第一原理モデリング<br>         ラプラス変換と伝達関数<br>         MILSによる制御システム設計<br>         HILS実習，実機実験<br>         Scilab実習，モデル流通I/Fガイドライン<br>         非因果ツールによるモデリング<br>', '        全時間数を出席していること<br>         修了テストおよびレポートにより評価<br>', '資料を配布する', ''),
(999, 6, 'hru-g-01', 3, '技術展開演習', 'localhost/index.php/cource/hru-g-01/', '広島大学', '広島大学大学院情報工学専攻全教員', '近日公開', '24時間', '近日公開', 'ソフトウェア開発業務に従事されている方', 0, '先端的なソフトウェア開発に関する研究について調査し，将来のソフトウェア開発の方向性について理解する', '教員それぞれがテーマを提供し，そのいずれかを選択してゼミ形式で学習をすすめる．最後に口頭発表する．', '          特になし', '        ゼミ形式による学習<br>         口頭発表<br>', '        指導する教員による評価<br>         口頭発表の評価<br>', '          特になし', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects_hiroshima`
--
ALTER TABLE `subjects_hiroshima`
  ADD UNIQUE KEY `id` (`id_unique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects_hiroshima`
--
ALTER TABLE `subjects_hiroshima`
  MODIFY `id_unique` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
