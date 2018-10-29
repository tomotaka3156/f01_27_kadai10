-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 29 日 20:18
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f01_db27`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `titleURL` text COLLATE utf8_unicode_ci NOT NULL,
  `bookcoment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `titleURL`, `bookcoment`, `indate`, `image`) VALUES
(9, 'ROSバイブル', 'http://shop.ohmsha.co.jp/shopdetail/000000005508/', '<p>ロボットのプログラム構成。Rbot operation systemの解説本</p>\r\n', '2018-10-29 19:28:27', 'upload/20181029192827d41d8cd98f00b204e9800998ecf8427e.jpg'),
(12, '自律ロボット概論 プレミアムブックス版', 'https://www.amazon.co.jp/%E8%87%AA%E5%BE%8B%E3%83%AD%E3%83%9C%E3%83%83%E3%83%88%E6%A6%82%E8%AB%96-%E3%83%97%E3%83%AC%E3%83%9F%E3%82%A2%E3%83%A0%E3%83%96%E3%83%83%E3%82%AF%E3%82%B9%E7%89%88-George-Bekey/dp/4839956715/ref=pd_bxgy_14_img_2?_encoding=UTF8&pd_rd_i=4839956715&pd_rd_r=93b6a63e-db69-11e8-a683-a1f9407c1049&pd_rd_w=G8Y2X&pd_rd_wg=vHAbr&pf_rd_i=desktop-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=a4de75e6-d8f7-4a34-bd69-503ea4866e6c&pf_rd_r=A6WHEKKZ0D9AE72XA0RC&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=A6WHEKKZ0D9AE72XA0RC', '<p>人間による明示的な制御なしにタスクを実行する「自律ロボット」の総合入門書!<strong>&nbsp;</strong></p>\r\n', '2018-10-29 20:01:24', 'upload/20181029200344d41d8cd98f00b204e9800998ecf8427e.jpg'),
(13, '三毛猫ホームズシリーズ', 'https://ja.wikipedia.org/wiki/%E4%B8%89%E6%AF%9B%E7%8C%AB%E3%83%9B%E3%83%BC%E3%83%A0%E3%82%BA%E3%82%B7%E3%83%AA%E3%83%BC%E3%82%BA', '<p>推理小説</p>\r\n', '2018-10-29 20:02:35', 'upload/20181029200235d41d8cd98f00b204e9800998ecf8427e.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
