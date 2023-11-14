-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 nov. 2023 à 17:13
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel5`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_reference_unique` (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `reference`, `name`, `email`, `phone`, `website`, `vat_number`, `description`, `comment`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'AOVFIOR', 'Gaspard Delvaux', 'gaspard.delvaux@gmail.com', '0472020663', 'gaspard-delvaux.be', 'BE0891995172', NULL, NULL, '1', 1, '2023-11-03 15:00:59', '2023-11-04 13:32:43'),
(6, 'ABCDWXY', 'Trudie Lipgens', 'tlipgens0@pinterest.com', '3309527912', 'weebly.com', 'BE0123456789', NULL, NULL, '1', 1, '2013-08-07 15:45:31', NULL),
(7, 'EFGHIJK', 'Bryana Paulich', 'bpaulich1@bloomberg.com', '1478729702', 'hud.gov', 'BE9876543210', NULL, NULL, '1', 1, '2013-04-21 15:43:46', NULL),
(8, 'MNOPQRS', 'Peggie Scarce', 'pscarce2@weather.com', '8966677335', 'psu.edu', 'BE9876543210', NULL, NULL, '1', 1, '2016-10-15 01:08:14', NULL),
(9, 'UVWXYZA', 'Carmine Cardoo', 'ccardoo3@tripod.com', '9193552071', 'infoseek.co.jp', 'BE1357924680', NULL, NULL, '1', 1, '2014-05-20 23:59:51', NULL),
(10, 'CDEFGH', 'Delbert MacVanamy', 'dmacvanamy4@rediff.com', '6933314997', 'geocities.jp', 'BE1357924680', NULL, NULL, '1', 1, '2022-11-02 13:50:40', NULL),
(11, 'KLMNOR', 'Gretchen Biagioni', 'gbiagioni5@php.net', '4806709094', 'github.io', 'BE9876543210', NULL, NULL, '1', 1, '2020-03-25 10:21:44', NULL),
(12, 'STZXYZ', 'Nicolette Henden', 'nhenden6@so-net.ne.jp', '3223688779', 'ucla.edu', 'BE1357924680', NULL, NULL, '1', 1, '2019-10-08 23:50:33', NULL),
(13, 'DEFGHI', 'Dudley Konneke', 'dkonneke7@mapquest.com', '7154082490', 'skyrock.com', 'BE9876543210', NULL, NULL, '1', 1, '2015-10-16 12:20:07', NULL),
(14, 'LMRSTU', 'Thomas Szymaniak', 'tszymaniak8@comcast.net', '2743892259', 'discuz.net', 'BE2468135790', NULL, NULL, '1', 1, '2014-06-22 10:52:14', NULL),
(15, 'VWXYZA', 'Gaynor McCloid', 'gmccloid9@dot.gov', '3406916751', 'whitehouse.gov', 'BE9876543210', NULL, NULL, '1', 1, '2018-07-07 23:33:24', NULL),
(16, 'FLMNOP', 'Elsy Clines', 'eclinesa@cbc.ca', '9488344707', 'vk.com', 'BE9876543210', NULL, NULL, '1', 1, '2018-03-06 18:17:25', NULL),
(17, 'QRSTUV', 'Brandise Griss', 'bgrissb@slate.com', '6691269399', 'ehow.com', 'BE9876543210', NULL, NULL, '1', 1, '2017-04-25 20:05:11', NULL),
(18, 'HIJKLM', 'Wiley Rigney', 'wrigneyc@mlb.com', '9424045630', 'redcross.org', 'BE2468135790', NULL, NULL, '1', 1, '2021-07-08 12:07:41', NULL),
(19, 'NOPQRS', 'Lorelei Draye', 'ldrayed@lulu.com', '1787164985', 'webeden.co.uk', 'BE2468135790', NULL, NULL, '1', 1, '2020-04-02 10:24:33', NULL),
(20, 'GHIJKL', 'Beverie Dobrovsky', 'bdobrovskye@home.pl', '3205422421', 'sciencedaily.com', 'BE1357924680', NULL, NULL, '1', 1, '2018-01-08 03:21:12', NULL),
(21, 'UVWXYZ', 'Nadine Clines', 'nclinesf@1688.com', '4316952825', 'imdb.com', 'BE1357924680', NULL, NULL, '1', 1, '2022-01-27 20:03:26', NULL),
(22, 'CMNOPQ', 'Lizzie Jacomb', 'ljacombg@dmoz.org', '9399965261', 'gmpg.org', 'BE1357924680', NULL, NULL, '1', 1, '2015-07-14 08:07:08', NULL),
(23, 'XPBCDE', 'Charyl Desport', 'cdesporth@about.me', '2239940795', 'mapquest.com', 'BE9876543210', NULL, NULL, '1', 1, '2021-04-06 13:46:13', NULL),
(24, 'NKQRST', 'John Jirieck', 'jjiriecki@buzzfeed.com', '1512846765', 'over-blog.com', 'BE9876543210', NULL, NULL, '1', 1, '2018-10-05 20:47:17', NULL),
(25, 'UVCDEF', 'Ardyce Faulds', 'afauldsj@sun.com', '5675214619', 'adobe.com', 'BE2468135790', NULL, NULL, '1', 1, '2020-11-15 22:41:15', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NOT NULL,
  `documenttype_id` bigint UNSIGNED NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalhvat` int NOT NULL DEFAULT '0',
  `vat` int NOT NULL DEFAULT '0',
  `totalttc` int NOT NULL DEFAULT '0',
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_reference_unique` (`reference`),
  KEY `documents_customer_id_foreign` (`customer_id`),
  KEY `documents_documenttype_id_foreign` (`documenttype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `customer_id`, `documenttype_id`, `reference`, `totalhvat`, `vat`, `totalttc`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(3, 23, 8, 'HJFTZDIZ', 596, 21, 596, '1', NULL, '2023-10-11 14:14:08', '2023-11-14 15:13:43'),
(2, 6, 7, 'AJFIZEID', 78, 21, 96, '1', 'Commande super', '2023-11-04 13:21:37', '2023-11-07 13:25:40'),
(4, 13, 7, 'JKOXTN', 443, 21, 7641, '1', 'Tracy\'s Thistle', '2023-07-31 19:00:46', NULL),
(5, 22, 8, 'XXOHVJ', 3949, 21, 2548, '1', 'Winding Mariposa Lily', '2023-07-14 21:15:27', NULL),
(6, 6, 5, 'NXLBFY', 6972, 21, 5554, '1', 'Dwarf Indian Mallow', '2022-10-24 23:31:41', NULL),
(7, 19, 8, 'JPYWSF', 476, 21, 1692, '1', 'New Mexico Saltbush', '2022-07-22 05:10:52', NULL),
(8, 9, 8, 'RZAUEX', 1111, 21, 7391, '1', 'Yellow Asphodel', '2023-03-18 18:11:26', NULL),
(9, 24, 8, 'KKVPYF', 5362, 21, 699, '1', 'Pseudoleskea Moss', '2022-09-21 13:38:21', NULL),
(10, 8, 5, 'DHWNPI', 7869, 21, 7770, '1', 'White Cushion Fleabane', '2024-01-08 06:35:21', NULL),
(11, 20, 7, 'AMKCPH', 1835, 21, 9312, '1', 'Black Canyon Gilia', '2022-08-31 07:31:59', NULL),
(12, 12, 5, 'WMXNJM', 7155, 21, 7404, '1', 'Tapertip Wakerobin', '2023-09-09 10:35:22', NULL),
(13, 14, 5, 'AZFCQD', 4400, 21, 9288, '1', 'Asterothyrium Lichen', '2022-11-19 08:43:08', NULL),
(14, 9, 8, 'PDXSWH', 3423, 21, 712, '1', 'Longspur Columbine', '2023-05-24 03:40:34', NULL),
(15, 18, 8, 'KRWNRF', 7702, 21, 8962, '1', 'California Goosefoot', '2024-01-14 17:01:32', NULL),
(16, 19, 8, 'AHQDKC', 7362, 21, 4619, '1', 'Pondweed', '2022-07-03 19:16:52', NULL),
(17, 14, 5, 'ICNOPH', 6396, 21, 631, '1', 'California Red Fir', '2023-07-07 20:40:49', NULL),
(18, 6, 8, 'RHVHZG', 1482, 21, 963, '1', 'Glochidion', '2022-07-30 22:23:54', NULL),
(19, 24, 5, 'NBZAES', 7334, 21, 4259, '1', 'Zion Milkvetch', '2022-07-05 17:43:23', NULL),
(20, 15, 8, 'UBMNKN', 739, 21, 972, '1', 'Thatching Grass', '2024-03-20 11:12:14', NULL),
(21, 18, 5, 'PRFMXJ', 5806, 21, 4526, '1', 'Clustered Lady\'s-mantle', '2022-07-23 05:45:27', NULL),
(22, 20, 7, 'TCMEJP', 3682, 21, 6746, '1', 'Cosmopolitan Bulrush', '2022-09-12 14:58:44', NULL),
(23, 21, 5, 'SHSQKS', 6965, 21, 6785, '1', 'Waldo Rockcress', '2023-09-29 05:14:45', NULL),
(24, 21, 7, 'LRQURF', 6092, 21, 873, '1', 'Blue Wildrye', '2022-07-13 21:57:46', NULL),
(25, 14, 8, 'IWPLBM', 929, 21, 7891, '1', 'Peonyleaf Woodsorrel', '2024-01-16 20:15:08', NULL),
(26, 21, 7, 'JQGAOU', 3858, 21, 3075, '1', 'Cuban Nutrush', '2024-03-06 03:27:39', NULL),
(27, 20, 7, 'LIVIPX', 3230, 21, 4921, '1', 'Terete Skin Lichen', '2022-05-10 21:20:02', NULL),
(28, 11, 7, 'EYSRIM', 6633, 21, 3237, '1', 'Singleflower Cyrtandra', '2022-06-22 02:28:50', NULL),
(29, 9, 5, 'MLKYNH', 5748, 21, 3722, '1', 'Imbricate Phacelia', '2022-11-23 10:04:54', NULL),
(30, 7, 8, 'DPVCTY', 1813, 21, 824, '1', 'Glacier Avens', '2024-01-20 17:06:22', NULL),
(31, 22, 8, 'WMBHTX', 4499, 21, 3233, '1', 'Navel Cornsalad', '2022-05-16 06:59:25', NULL),
(32, 25, 5, 'TRJDBV', 6030, 21, 8308, '1', 'California Helianthella', '2023-05-10 11:55:07', NULL),
(33, 14, 8, 'JPKAML', 1343, 21, 6436, '1', 'Entirewing Bristle Fern', '2022-05-13 01:34:13', NULL),
(34, 9, 5, 'DVQQSO', 5366, 21, 798, '1', 'Hairyleaf Rush', '2022-12-05 12:39:57', NULL),
(35, 17, 8, 'BCYYOD', 7252, 21, 8777, '1', 'Larkdaisy', '2023-12-18 05:09:25', NULL),
(36, 14, 8, 'YCQXYQ', 2257, 21, 4358, '1', 'Tetragonia', '2023-08-23 10:14:01', NULL),
(37, 14, 5, 'WMHIAH', 2907, 21, 2291, '1', 'Paintedtongue', '2023-08-05 12:55:14', NULL),
(38, 23, 8, 'ESGASV', 2684, 21, 4769, '1', 'Silver Beardgrass', '2022-09-07 06:44:04', NULL),
(39, 6, 7, 'STPBEX', 2881, 21, 1802, '1', 'Grand Canyon Century Plant', '2022-05-21 16:35:39', NULL),
(40, 15, 8, 'SAUCYV', 5416, 21, 2774, '1', 'Riverside Spineflower', '2022-08-02 00:49:48', NULL),
(41, 11, 7, 'TINPCG', 5749, 21, 3125, '1', 'Hardgrass', '2022-11-03 08:18:08', NULL),
(42, 25, 8, 'KPKMZO', 6882, 21, 8263, '1', 'Whitewhorl Lupine', '2023-12-17 19:42:44', NULL),
(43, 7, 5, 'HMLGPY', 5952, 21, 7690, '1', 'Purpus\' Carpetgrass', '2023-02-16 01:05:43', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `documenttypes`
--

DROP TABLE IF EXISTS `documenttypes`;
CREATE TABLE IF NOT EXISTS `documenttypes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reference` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documenttypes_reference_unique` (`reference`),
  UNIQUE KEY `documenttypes_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documenttypes`
--

INSERT INTO `documenttypes` (`id`, `reference`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, 'UMGIJDVF', 'Offre', 'Offre client', '1', '2023-11-14 14:47:46', '2023-11-14 14:47:46'),
(5, 'BQCCGPJP', 'Devis', 'Devis client', '1', '2023-05-23 16:04:25', '2023-11-14 14:47:18'),
(7, 'FUKPSQZE', 'Facture', 'Facture client', '1', '2023-11-07 23:00:00', '2023-11-14 14:47:34'),
(9, 'CMDGFNAA', 'Autre', 'Autre document', '1', '2023-11-14 16:07:02', '2023-11-14 16:07:02');

-- --------------------------------------------------------

--
-- Structure de la table `document_product`
--

DROP TABLE IF EXISTS `document_product`;
CREATE TABLE IF NOT EXISTS `document_product` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `document_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `selling_price` int NOT NULL DEFAULT '0',
  `quantity` int NOT NULL DEFAULT '0',
  `discount` int NOT NULL DEFAULT '0',
  `total` int NOT NULL DEFAULT '0',
  `price_hvat` int NOT NULL DEFAULT '0',
  `price_vvat` int NOT NULL DEFAULT '0',
  `total_hvat` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `document_product_document_id_foreign` (`document_id`),
  KEY `document_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `document_product`
--

INSERT INTO `document_product` (`id`, `document_id`, `product_id`, `selling_price`, `quantity`, `discount`, `total`, `price_hvat`, `price_vvat`, `total_hvat`, `created_at`, `updated_at`) VALUES
(8, 2, 2, 1479, 1, 21, 1764, 1479, 1789, 1458, NULL, NULL),
(9, 3, 3, 1, 2, 3, 7, 4, 5, 6, NULL, NULL),
(7, 2, 3, 969, 1, 21, 1147, 969, 1172, 948, NULL, NULL),
(10, 41, 34, 833, 15, 73, 6627, 4643, 144, 5130, '2018-07-23 23:33:50', NULL),
(11, 38, 8, 7821, 12, 71, 4645, 7712, 696, 8113, '2015-10-07 18:43:24', NULL),
(12, 4, 27, 1710, 6, 27, 6362, 7875, 3296, 1111, '2022-02-14 01:15:54', NULL),
(13, 8, 18, 370, 12, 36, 6637, 1823, 645, 6205, '2021-06-09 12:25:42', NULL),
(14, 14, 38, 4145, 11, 78, 6857, 5958, 2537, 3445, '2022-05-19 12:09:20', NULL),
(15, 32, 4, 4581, 1, 65, 6066, 723, 3290, 4822, '2014-05-11 05:52:52', NULL),
(16, 33, 10, 6890, 7, 7, 7009, 1487, 2590, 6094, '2023-04-14 13:33:43', NULL),
(17, 37, 16, 3127, 8, 57, 4514, 288, 548, 5634, '2014-11-04 20:15:38', NULL),
(18, 35, 30, 2008, 6, 21, 2915, 7700, 1041, 2225, '2016-08-03 01:21:23', NULL),
(19, 34, 10, 7034, 15, 9, 830, 3457, 4066, 157, '2018-02-05 22:30:54', NULL),
(20, 30, 8, 96, 11, 17, 1754, 7883, 3332, 6645, '2018-04-28 08:52:37', NULL),
(21, 39, 21, 1612, 12, 36, 4380, 6299, 31, 2650, '2021-08-08 14:42:35', NULL),
(22, 25, 36, 265, 13, 22, 6183, 5576, 4636, 5688, '2016-11-12 10:19:12', NULL),
(23, 5, 42, 4274, 10, 51, 5077, 757, 4177, 8172, '2018-05-15 21:57:59', NULL),
(24, 16, 13, 1087, 5, 66, 4856, 6560, 2535, 5735, '2019-07-06 00:59:07', NULL),
(25, 5, 22, 121, 15, 96, 3220, 6918, 1381, 94, '2022-03-13 16:40:43', NULL),
(26, 30, 31, 3504, 15, 82, 3318, 2431, 213, 6433, '2015-01-18 00:09:37', NULL),
(27, 36, 29, 7311, 9, 59, 5035, 4669, 2714, 153, '2017-11-10 18:07:23', NULL),
(28, 43, 31, 4652, 11, 19, 4135, 7872, 1283, 5285, '2021-06-12 21:46:08', NULL),
(29, 11, 35, 1728, 1, 42, 3520, 5883, 2065, 8864, '2022-10-19 02:50:11', NULL),
(30, 2, 16, 2860, 11, 30, 1941, 7379, 1230, 221, '2022-02-03 23:39:07', NULL),
(31, 9, 5, 5696, 9, 79, 5009, 1998, 1786, 7047, '2014-05-05 06:14:51', NULL),
(32, 41, 12, 4374, 2, 36, 664, 3536, 4690, 7371, '2017-12-24 08:43:26', NULL),
(33, 23, 36, 5791, 4, 84, 7347, 7804, 1217, 3348, '2023-05-02 23:08:34', NULL),
(34, 37, 30, 6721, 5, 86, 6874, 639, 3506, 6444, '2014-12-12 07:04:10', NULL),
(35, 31, 38, 1388, 5, 63, 923, 4337, 879, 1618, '2016-06-29 16:52:39', NULL),
(36, 43, 10, 6923, 8, 100, 4937, 693, 2613, 503, '2017-01-04 11:56:13', NULL),
(37, 43, 38, 2058, 3, 51, 141, 4815, 728, 7836, '2016-04-13 13:04:26', NULL),
(38, 23, 25, 387, 10, 76, 6054, 639, 374, 7508, '2016-04-22 00:54:14', NULL),
(39, 13, 28, 7196, 4, 10, 2837, 3819, 3393, 877, '2016-06-29 18:04:47', NULL),
(40, 22, 43, 652, 10, 18, 6162, 3556, 1120, 8319, '2014-02-26 18:32:13', NULL),
(41, 29, 28, 5542, 1, 56, 2247, 8531, 3806, 8030, '2018-04-02 04:27:56', NULL),
(42, 12, 11, 1128, 12, 85, 3386, 5434, 1095, 2311, '2015-12-05 16:24:12', NULL),
(43, 32, 36, 7415, 7, 17, 248, 5926, 3775, 7567, '2020-08-24 12:30:17', NULL),
(44, 39, 27, 8205, 11, 58, 594, 852, 1304, 2148, '2020-07-29 17:03:58', NULL),
(45, 5, 29, 6024, 9, 26, 5020, 6914, 1114, 3028, '2023-01-05 23:53:33', NULL),
(46, 16, 39, 5860, 15, 24, 3067, 3814, 2068, 903, '2015-12-15 04:36:46', NULL),
(47, 13, 36, 4320, 9, 68, 2065, 8266, 3490, 3812, '2016-09-19 11:22:20', NULL),
(48, 34, 6, 4222, 7, 76, 6241, 3218, 3940, 726, '2017-10-26 03:23:14', NULL),
(49, 10, 4, 2335, 11, 45, 2263, 3878, 2849, 2475, '2022-05-08 00:50:47', NULL),
(50, 36, 35, 6574, 2, 55, 3059, 3126, 678, 2385, '2020-04-23 21:53:43', NULL),
(51, 5, 35, 6032, 8, 79, 5420, 7541, 883, 2698, '2018-03-01 03:37:48', NULL),
(52, 32, 21, 6394, 14, 6, 1427, 1762, 979, 2757, '2022-12-24 17:50:26', NULL),
(53, 39, 22, 272, 7, 93, 2135, 3350, 1764, 6917, '2017-06-25 21:15:07', NULL),
(54, 39, 11, 6228, 2, 32, 2661, 6923, 2411, 3543, '2020-10-03 21:30:59', NULL),
(55, 19, 36, 5809, 9, 49, 1930, 2050, 2200, 8794, '2022-04-19 13:19:39', NULL),
(56, 23, 22, 700, 2, 11, 899, 4770, 345, 2498, '2019-02-10 22:25:17', NULL),
(57, 14, 37, 7576, 15, 86, 4394, 7948, 1364, 4143, '2015-05-15 22:13:36', NULL),
(58, 37, 37, 5422, 13, 53, 969, 3189, 1008, 6504, '2017-09-16 14:06:49', NULL),
(59, 24, 39, 2003, 11, 57, 2126, 6970, 4505, 8712, '2023-06-13 20:22:24', NULL),
(60, 23, 28, 175, 15, 22, 4633, 3708, 2114, 4826, '2020-03-18 01:30:19', NULL),
(61, 10, 14, 3475, 4, 82, 1394, 3933, 707, 8158, '2019-12-11 19:30:40', NULL),
(62, 41, 43, 7761, 10, 84, 2488, 4871, 2067, 5838, '2015-11-11 08:26:42', NULL),
(63, 41, 37, 706, 13, 66, 1495, 6575, 1861, 3641, '2015-02-05 20:35:48', NULL),
(64, 36, 22, 94, 15, 47, 230, 5589, 4572, 8832, '2021-02-11 11:43:21', NULL),
(65, 17, 5, 1530, 3, 58, 1787, 7936, 274, 2629, '2022-03-11 20:56:49', NULL),
(66, 39, 11, 436, 5, 36, 3771, 3418, 3234, 7157, '2018-09-12 07:19:45', NULL),
(67, 7, 29, 2764, 12, 42, 3191, 4673, 3777, 6015, '2015-06-15 21:33:29', NULL),
(68, 42, 5, 3797, 4, 5, 4547, 3686, 1928, 5146, '2023-10-27 00:36:17', NULL),
(69, 3, 6, 242, 14, 7, 5888, 491, 1704, 7328, '2021-04-15 04:21:10', NULL),
(70, 29, 42, 7888, 3, 30, 4979, 8021, 2977, 1063, '2018-04-21 02:22:29', NULL),
(71, 11, 4, 3250, 11, 2, 1896, 8425, 3453, 4131, '2022-01-18 07:45:55', NULL),
(72, 36, 34, 6630, 8, 83, 748, 518, 99, 115, '2016-11-23 22:32:36', NULL),
(73, 17, 43, 335, 3, 81, 5919, 660, 1943, 7382, '2018-12-24 18:29:05', NULL),
(74, 10, 28, 2585, 14, 15, 4334, 1029, 3708, 1446, '2021-05-04 16:12:43', NULL),
(75, 18, 32, 7821, 6, 53, 3919, 3966, 2972, 8375, '2020-09-10 00:27:38', NULL),
(76, 13, 7, 3637, 6, 52, 4316, 3202, 952, 8604, '2022-04-22 11:35:52', NULL),
(77, 10, 17, 3147, 6, 5, 3341, 6290, 58, 8111, '2022-08-20 13:40:52', NULL),
(78, 31, 3, 2797, 2, 15, 2855, 3669, 1122, 269, '2021-10-21 07:12:58', NULL),
(79, 20, 19, 284, 3, 62, 5384, 2199, 37, 2584, '2022-11-07 05:59:26', NULL),
(80, 29, 23, 1368, 4, 4, 2711, 988, 1251, 1638, '2018-05-22 10:41:32', NULL),
(81, 19, 19, 68, 11, 51, 3688, 6977, 2591, 8959, '2014-07-30 04:32:04', NULL),
(82, 22, 34, 5963, 8, 4, 6816, 8025, 4314, 4240, '2020-06-01 03:19:21', NULL),
(83, 8, 40, 7638, 1, 51, 5375, 3005, 1254, 6590, '2020-09-30 13:55:59', NULL),
(84, 23, 9, 7221, 1, 84, 709, 6881, 1844, 6723, '2016-12-31 12:08:52', NULL),
(85, 37, 41, 5268, 15, 21, 1341, 4967, 3499, 2908, '2018-08-19 13:56:30', NULL),
(86, 12, 3, 1782, 5, 20, 783, 6308, 4194, 4139, '2021-05-06 10:01:29', NULL),
(87, 7, 8, 65, 10, 38, 4490, 5236, 322, 2368, '2018-01-09 00:51:23', NULL),
(88, 28, 8, 7741, 7, 74, 1086, 6068, 2195, 99, '2019-02-27 22:58:37', NULL),
(89, 4, 36, 961, 13, 24, 5244, 1792, 2007, 4902, '2014-04-18 02:45:33', NULL),
(90, 2, 14, 7143, 5, 30, 304, 3794, 989, 4405, '2017-05-01 09:49:03', NULL),
(91, 37, 12, 1934, 12, 63, 4060, 7268, 1510, 6172, '2021-10-31 09:28:03', NULL),
(92, 22, 10, 7854, 10, 80, 5003, 5875, 1212, 7925, '2023-07-02 18:09:56', NULL),
(93, 37, 43, 7367, 10, 75, 5538, 3708, 121, 1265, '2015-09-21 08:16:13', NULL),
(94, 33, 7, 5903, 4, 72, 132, 2831, 3382, 6898, '2019-06-09 19:04:30', NULL),
(95, 17, 34, 2188, 11, 79, 2779, 1691, 127, 2304, '2022-06-23 18:58:33', NULL),
(96, 2, 14, 4079, 5, 2, 4688, 7386, 4240, 3861, '2014-10-23 09:52:30', NULL),
(97, 32, 5, 5591, 7, 64, 536, 6485, 2149, 2048, '2022-03-01 22:59:07', NULL),
(98, 22, 3, 349, 5, 72, 5474, 7364, 1741, 3542, '2014-01-21 14:18:04', NULL),
(99, 2, 28, 1854, 15, 63, 3219, 3917, 2618, 6845, '2016-08-18 09:17:04', NULL),
(100, 29, 41, 4928, 8, 76, 6701, 2811, 2881, 6722, '2023-06-22 01:13:15', NULL),
(101, 3, 20, 8392, 4, 18, 3863, 4781, 192, 6748, '2021-10-29 03:28:19', NULL),
(102, 13, 31, 2664, 7, 3, 7125, 1819, 1052, 8475, '2021-11-21 05:18:11', NULL),
(103, 32, 23, 2539, 4, 16, 1997, 746, 2537, 7665, '2023-05-10 00:03:30', NULL),
(104, 43, 4, 3678, 6, 48, 656, 8278, 1340, 5621, '2021-03-25 19:52:58', NULL),
(105, 14, 18, 2910, 6, 26, 2503, 4037, 734, 7062, '2015-10-06 03:27:27', NULL),
(106, 2, 43, 6013, 3, 84, 6734, 3776, 1437, 4819, '2017-04-06 21:37:08', NULL),
(107, 8, 10, 1659, 15, 25, 6266, 3110, 4363, 597, '2015-05-26 13:43:33', NULL),
(108, 4, 5, 1696, 8, 44, 4435, 1338, 2912, 6669, '2021-06-07 23:29:50', NULL),
(109, 37, 28, 5018, 15, 56, 3755, 4082, 214, 7025, '2020-09-24 15:10:24', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_11_160145_create_documenttypes_table', 1),
(6, '2023_10_11_160211_create_customers_table', 1),
(7, '2023_10_11_160431_create_documents_table', 1),
(8, '2023_10_11_161220_create_products_table', 1),
(9, '2023_10_11_162231_create_document_product_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('gaspard.delvaux@gmail.com', '$2y$10$Vdk5e64fq6my/plJNA5XheB0OjT.Kiu6NQJkci4eoTrFNjjgvnM06', '2023-11-04 14:27:22');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ean_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `stock_min` int NOT NULL DEFAULT '0',
  `buying_price` int NOT NULL DEFAULT '0',
  `selling_price` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_reference_unique` (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `reference`, `name`, `brand`, `ean_code`, `stock`, `stock_min`, `buying_price`, `selling_price`, `description`, `comment`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'AHHDHZ', 'iPhone 15', 'Apple', '79126548489', 5, 5, 5, 5, NULL, NULL, '1', 1, '2023-11-07 13:52:54', '2023-11-07 13:52:54'),
(4, 'ABCZDEFG', 'Laptop', 'Dell', '1234567890123', 50, 10, 700, 800, 'Powerful laptop with high performance.', 'Great for gaming.', '1', 1, '2023-11-14 08:30:00', NULL),
(5, 'HIJKLMNO', 'Smartphone', 'Apple', '9876543210987', 30, 5, 900, 1000, 'Latest model with exceptional camera features.', 'Sleek design.', '1', 1, '2023-11-14 09:45:00', NULL),
(6, 'PQRSTUVA', 'Speaker', 'JBL', '5678901234567', 100, 20, 150, 200, 'Wireless Bluetooth speaker with deep bass.', 'Perfect for parties.', '1', 1, '2023-11-14 11:15:00', NULL),
(7, 'BCDEFGHI', 'Headphones', 'Sony', '2345678901234', 80, 15, 100, 130, 'Comfortable over-ear headphones with noise cancellation.', 'Crystal clear sound.', '1', 1, '2023-11-14 13:00:00', NULL),
(8, 'JKLMNPOP', 'Tablet', 'Samsung', '8901234567890', 40, 8, 450, 500, 'Sleek and portable tablet with long battery life.', 'Ideal for productivity.', '1', 1, '2023-11-14 14:30:00', NULL),
(9, 'QRSTUVWZ', 'Camera', 'Canon', '3456789012345', 25, 5, 600, 700, 'Professional DSLR camera with multiple lenses.', 'Capture stunning moments.', '1', 1, '2023-11-14 16:00:00', NULL),
(10, 'XYZABCDE', 'Gaming Console', 'Microsoft', '9012345678901', 70, 15, 400, 450, 'High-performance gaming console with 4K support.', 'Immersive gaming experience.', '1', 1, '2023-11-14 17:45:00', NULL),
(11, 'KLMNOPQR', 'Smartwatch', 'Fitbit', '6789012345678', 60, 12, 200, 250, 'Fitness tracker with heart rate monitor.', 'Track your health goals.', '1', 1, '2023-11-14 19:20:00', NULL),
(12, 'STUVWXYZ', 'Wireless Mouse', 'Logitech', '4567890123456', 120, 25, 30, 40, 'Ergonomic wireless mouse for improved productivity.', 'Smooth and precise.', '1', 1, '2023-11-14 21:00:00', NULL),
(13, 'ZYXWVUTS', 'External Hard Drive', 'Seagate', '7890123456789', 90, 18, 80, 100, 'High-capacity external drive for data storage.', 'Backup your files easily.', '1', 1, '2023-11-14 22:45:00', NULL),
(14, 'EDCBAYTU', 'Printer', 'Epson', '5432109876543', 35, 7, 130, 150, 'Versatile printer for home and office use.', 'Fast and reliable printing.', '1', 1, '2023-11-15 00:30:00', NULL),
(15, 'PLOKIJUY', 'Wireless Keyboard', 'Razer', '2109876543210', 55, 11, 70, 80, 'Mechanical keyboard with customizable backlighting.', 'Enhance your typing experience.', '1', 1, '2023-11-15 02:15:00', NULL),
(16, 'QWERTYUI', 'USB Flash Drive', 'SanDisk', '6789451230034', 75, 15, 20, 25, 'Portable flash drive with high-speed data transfer.', 'Store and share files easily.', '1', 1, '2023-11-15 04:00:00', NULL),
(17, 'NBVCXZAS', 'Wi-Fi Router', 'TP-Link', '3456765432678', 45, 9, 60, 70, 'Dual-band router for seamless internet connectivity.', 'Strong and stable signal.', '1', 1, '2023-11-15 05:45:00', NULL),
(18, 'MNBLAJSA', 'Smart Thermostat', 'Nest', '7654323456789', 65, 13, 150, 170, 'Programmable thermostat for energy efficiency.', 'Control from your smartphone.', '1', 1, '2023-11-15 07:30:00', NULL),
(19, 'BHJHGHJU', 'Digital Watch', 'Casio', '6789456210012', 85, 17, 50, 60, 'Water-resistant digital watch with multiple features.', 'Sporty and durable.', '1', 1, '2023-11-15 09:15:00', NULL),
(20, 'KLHLGASG', 'External Webcam', 'Creative', '1234567890345', 42, 8, 40, 50, 'HD webcam for video calls and streaming.', 'Clear and sharp image.', '1', 1, '2023-11-15 11:00:00', NULL),
(21, 'KJHASKJG', 'Wireless Charger', 'Anker', '6789012345678', 95, 19, 30, 40, 'Fast charging pad for smartphones and other devices.', 'Convenient and efficient.', '1', 1, '2023-11-15 12:45:00', NULL),
(22, 'CJHASJKG', 'Bluetooth Earbuds', 'Skullcandy', '7890456123001', 120, 24, 80, 90, 'True wireless earbuds with long battery life.', 'Immersive audio experience.', '1', 1, '2023-11-15 14:30:00', NULL),
(23, 'NJHAGKAG', 'Fitness Tracker', 'Garmin', '9081234501234', 70, 14, 130, 150, 'GPS fitness watch with heart rate monitoring.', 'Track your workouts.', '1', 1, '2023-11-15 16:15:00', NULL),
(24, 'ASLJGKAS', 'Wireless Barcode Scanner', 'Honeywell', '7890612345612', 38, 7, 120, 140, 'Portable barcode scanner for inventory management.', 'Efficient scanning.', '1', 1, '2023-11-15 18:00:00', NULL),
(25, 'MNXKJGAS', 'Digital Voice Recorder', 'Olympus', '4561237890456', 50, 10, 60, 70, 'Capture clear audio with this digital recorder.', 'Ideal for meetings.', '1', 1, '2023-11-15 19:45:00', NULL),
(26, 'KJHAKJHG', 'USB-C Hub', 'Belkin', '6789345612789', 25, 5, 50, 60, 'Expand connectivity with multiple USB-C ports.', 'Sleek and compact design.', '1', 1, '2023-11-15 21:30:00', NULL),
(27, 'LKJHAGKG', 'Power Bank', 'Xiaomi', '7890456123456', 90, 18, 40, 50, 'High-capacity power bank for charging on the go.', 'Slim and portable.', '1', 1, '2023-11-14 23:15:00', NULL),
(28, 'UIOKJHGL', 'Portable Scanner', 'Brother', '4561237890456', 65, 13, 100, 120, 'Scan documents and photos with this portable scanner.', 'Easy to use.', '1', 1, '2023-11-15 01:00:00', NULL),
(29, 'CVBNMAHG', 'Compact Refrigerator', 'Haier', '7890456123412', 20, 4, 150, 170, 'Small refrigerator for dorm rooms or offices.', 'Keeps items cool.', '1', 1, '2023-11-15 02:45:00', NULL),
(30, 'OKIUKJHG', 'Electric Toothbrush', 'Oral-B', '6789345612789', 75, 15, 60, 70, 'Rechargeable electric toothbrush for superior cleaning.', 'Gentle on gums.', '1', 1, '2023-11-15 04:30:00', NULL),
(31, 'VBNGAJSG', 'Portable Projector', 'ViewSonic', '1234567890456', 45, 9, 200, 230, 'Compact projector for home entertainment.', 'Crisp and clear projection.', '1', 1, '2023-11-15 06:15:00', NULL),
(32, 'KJHASGKD', 'Wireless Doorbell', 'Ring', '4561237890456', 55, 11, 30, 40, 'Smart doorbell with camera and two-way audio.', 'Enhanced home security.', '1', 1, '2023-11-15 08:00:00', NULL),
(33, 'KJHASJKL', 'Air Purifier', 'Dyson', '7890456123456', 35, 7, 300, 350, 'Advanced air purifier with HEPA filter.', 'Improves air quality.', '1', 1, '2023-11-15 09:45:00', NULL),
(34, 'OKJASGHA', 'Electric Kettle', 'Hamilton Beach', '6789345678901', 80, 16, 20, 25, 'Quick-boil electric kettle for tea or coffee.', 'Convenient and fast.', '1', 1, '2023-11-15 11:30:00', NULL),
(35, 'NBVCMASJ', 'External SSD', 'Western Digital', '1234567890456', 50, 10, 120, 140, 'High-speed external SSD for fast data transfer.', 'Reliable storage solution.', '1', 1, '2023-11-15 13:15:00', NULL),
(36, 'PLASJGHK', 'Robot Vacuum Cleaner', 'iRobot', '4561237890456', 65, 13, 300, 350, 'Smart robot vacuum with mapping technology.', 'Effortless cleaning.', '1', 1, '2023-11-15 15:00:00', NULL),
(37, 'LKJHASJG', 'Coffee Maker', 'Keurig', '7890456123456', 40, 8, 80, 100, 'Single-serve coffee maker with various pod options.', 'Brews a perfect cup.', '1', 1, '2023-11-15 16:45:00', NULL),
(38, 'XCKJHASJ', 'Portable Air Conditioner', 'LG', '1234567890456', 30, 6, 400, 450, 'Portable AC unit for cooling small spaces.', 'Easy installation.', '1', 1, '2023-11-15 18:30:00', NULL),
(39, 'BJHASJGL', 'Wireless Security Camera', 'Arlo', '6789345678901', 70, 14, 150, 170, 'Outdoor wireless camera for home surveillance.', 'Weather-resistant.', '1', 1, '2023-11-15 20:15:00', NULL),
(40, 'POKLJHAS', 'Electric Fan', 'Honeywell', '1234567890456', 55, 11, 50, 60, 'Quiet and powerful oscillating tower fan.', 'Cools large rooms.', '1', 1, '2023-11-15 22:00:00', NULL),
(41, 'OKIJASDG', 'Digital Scale', 'Etekcity', '4561237890456', 25, 5, 25, 30, 'Accurate digital scale for precise measurements.', 'Sleek and modern design.', '1', 1, '2023-11-15 23:45:00', NULL),
(42, 'BHGJASDG', 'Bluetooth Speaker', 'Bose', '6789345678901', 90, 18, 130, 150, 'Portable Bluetooth speaker with 360-degree sound.', 'Rich and deep bass.', '1', 1, '2023-11-16 01:30:00', NULL),
(43, 'PLKOIUHG', 'Electric Shaver', 'Philips', '1234567890456', 60, 12, 80, 90, 'Rotary electric shaver for a close shave.', 'Gentle on skin.', '1', 1, '2023-11-16 03:15:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gaspard', 'gaspard.delvaux@gmail.com', NULL, '$2y$10$yi6mO6MzkXrXpGJ0Nb8b/O3poBAC54lE2HyrOQvI5mXluWQEE4joW', 'lKsEfLJidlwkpkRGa4Aem2UZbTGLMZVtdeNwVllDrWsaGKBc18IvYBtfQzvh', '2023-11-04 14:01:44', '2023-11-07 18:42:17'),
(3, 'Mike', 'mike@abc.be', NULL, '$2y$10$EdD2CtB1pUFNcRe90mNYqeQSDGkiixHbIUvvw8.zPkzLBdabdgC3S', NULL, '2023-11-14 16:11:52', '2023-11-14 16:12:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
