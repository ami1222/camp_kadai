-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: campkadai_db
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beer_table`
--

DROP TABLE IF EXISTS `beer_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beer_table` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `Indate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beer_table`
--

LOCK TABLES `beer_table` WRITE;
/*!40000 ALTER TABLE `beer_table` DISABLE KEYS */;
INSERT INTO `beer_table` VALUES (1,'PITMANS','バーベキュー','⼤江⼾線「清澄白河」駅徒歩10 分','https://www.herofield.com/bbq/pitmans/','川床の東京版“かわてらす”に併設した完全レストラン型のバーベキュー施設！','2020-03-05 21:53:33'),(2,'Vector Beer Factory','ビアレストラン','東京メトロ丸ノ内線 新宿御苑前駅 徒歩2分','https://lina-brand.com/vectorbeerfactory-shinjyuku/','併設された醸造所から豊富なクラフトビールを常時17種類あり！','2020-03-07 11:21:02'),(3,'暁タップス　銀座','ビアレストラン','東京メトロ銀座線 ／ 銀座駅(C3) 徒歩2分','https://akatsuki-taps.jp/','繊細な日本料理に調和するように、炭酸や苦みをおさえたビールが楽しめる','2020-03-07 11:42:37');
/*!40000 ALTER TABLE `beer_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coffee_table`
--

DROP TABLE IF EXISTS `coffee_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coffee_table` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `Indate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffee_table`
--

LOCK TABLES `coffee_table` WRITE;
/*!40000 ALTER TABLE `coffee_table` DISABLE KEYS */;
INSERT INTO `coffee_table` VALUES (1,'Mont Blanc STYLE','ケーキ','小田急線 代々木八幡駅＆東京メトロ 代々木公園駅より徒歩2分','https://www.montblancstyle.com/','作りたてカウンタースタイルの『モンブラン専門店』','2020-03-05 22:03:00'),(2,'FISH&WINE UMIラボ千葉店','居酒屋 魚介・海鮮料理 チーズフォンデュ','千葉都市モノレール１号線 ／ 市役所前駅(出入口4) 徒歩4分','https://umi-labo.owst.jp/','バーナーで炙ったバスクチーズケーキが食べてみたい！！！','2020-03-05 22:09:55'),(3,'表参道 茶茶の間','日本茶専門店','東京メトロ「明治神宮前駅」徒歩5分','https://chachanoma.com/','抹茶スイーツ尽くしの「抹茶ちゃ」プレートを食べられる日本茶専門店！','2020-03-05 22:15:32'),(4,'Patisserie l’abricotier','ケーキ',' JR中央・総武線 ／ 高円寺駅(北口) 徒歩6分','https://tabelog.com/tokyo/A1319/A131904/13100828/','賞味期限がわずか60分の「モンブラン」！9月中旬から3月までの期間限定。','2020-03-05 22:20:46');
/*!40000 ALTER TABLE `coffee_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sake_table`
--

DROP TABLE IF EXISTS `sake_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sake_table` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `Indate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sake_table`
--

LOCK TABLES `sake_table` WRITE;
/*!40000 ALTER TABLE `sake_table` DISABLE KEYS */;
INSERT INTO `sake_table` VALUES (1,'ぴんちょ　Japanese Pinchos Bar Tokyo','モダンスパニッシュ','JR山手線目黒駅西口より徒歩5分','https://www.ozmall.co.jp/restaurant/4322/','オリジナルピンチョスとお酒を楽しむ大人の隠れ家バル。','2020-03-03 23:09:16'),(2,'酒亭　穂掠','和食・懐石料理','JR新橋駅烏森口より徒歩5分','https://shuteihokura.owst.jp/','四季折々の旬の味覚と全国から厳選した日本酒が楽しめるお店！','2020-03-05 21:39:22'),(3,'Gem by moto','日本料理 ','地下鉄日比谷線 広尾駅／JR 恵比寿駅 徒歩10分','https://gembymoto.gorp.jp/','日本酒をワイングラスで飲むオシャレなスタイルのお店','2020-03-07 11:49:46');
/*!40000 ALTER TABLE `sake_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wine_table`
--

DROP TABLE IF EXISTS `wine_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wine_table` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `Indate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wine_table`
--

LOCK TABLES `wine_table` WRITE;
/*!40000 ALTER TABLE `wine_table` DISABLE KEYS */;
INSERT INTO `wine_table` VALUES (1,'サングリア　青山店','スペイン料理','東京メトロ銀座線・千代田線・半蔵門線 表参道駅A3出口 徒歩2分','https://www.sangria.co.jp/aoyama/','ワカコ酒で紹介されたお店。女性1人でも気軽にいけるらしい！','2020-03-01 20:37:41'),(2,'アルボール　神楽坂','洋食、欧風料理','東京メトロ有楽町線・南北線【飯田橋駅】徒歩５分','https://www.cardenas.co.jp/shop/family/kagurazaka-arbol/','一軒家を改築した神楽坂の路地裏にたたずむ隠れ家レストラン。','2020-03-02 23:16:58'),(3,'AVANTI-TAKAHIRO-','イタリアン','大江戸線牛込神楽坂駅から徒歩3分','https://avanti-takahiro.owst.jp/','約10種類の前菜がワゴンで運ばれてきて自分だけのオリジナルコースが作れる.','2020-03-05 21:29:26'),(4,'清澄白河 フジマル醸造所','イタリアン、ワインバー','東京メトロ半蔵門線清澄白河駅B2出口から徒歩5分','https://www.papilles.net/','作りたて東京産ワインが楽しめるワイナリー！','2020-03-07 22:54:33');
/*!40000 ALTER TABLE `wine_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-11 22:17:45
