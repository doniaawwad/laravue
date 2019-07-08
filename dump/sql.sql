-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test1.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.contacts: 1 rows
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
	(1, '123123123', 'adminweb@adminweb.com', '123123123', '2019-07-08 16:12:22', '2019-07-08 16:12:22');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table test1.leads
DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.leads: 0 rows
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;

-- Dumping structure for table test1.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.migrations: 6 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_07_07_064849_create_pages_table', 1),
	(4, '2019_07_08_064117_create_news_table', 1),
	(5, '2019_07_08_073823_create_contacts_table', 1),
	(6, '2019_07_08_084521_create_leads_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table test1.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.news: 3 rows
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever', '/storage/uploads/1562593163.jpg', '2019-07-08 13:39:23', '2019-07-08 13:39:23'),
	(2, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever', '/storage/uploads/1562593174.jpg', '2019-07-08 13:39:34', '2019-07-08 13:39:34'),
	(3, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever', '/storage/uploads/1562593887.jpg', '2019-07-08 13:39:43', '2019-07-08 13:51:27');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table test1.pages
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.pages: 3 rows
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Nulla metus metus ullamcorper Lorem Ipsum', 'Nulla metus metus ullamcorper Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.', '/storage/uploads/1562592187.svg', '2019-07-08 13:23:07', '2019-07-08 13:23:07'),
	(2, 'Nulla metus metus ullamcorper Lorem Ipsum', 'http://localhost:8000', '/storage/uploads/1562592350.svg', '2019-07-08 13:25:50', '2019-07-08 13:25:50'),
	(3, 'Nulla metus metus ullamcorper Lorem Ipsum', 'Nulla metus metus ullamcorper Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.', '/storage/uploads/1562592367.svg', '2019-07-08 13:26:07', '2019-07-08 13:26:07');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table test1.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table test1.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test1.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'donia', 'donia.awwad.91@gmail.com', '$2y$10$ORWKFLm8kEmW3UcxW82bQ.iTj9.7vKEf2s1gUHjTC0OrV.AYl4LZ2', '2J5uWlXMbjkXEhlDcSgsBppaqpf2aRVfiS56ZIdDqIvi6G0QqU5ZU3jX1rHt', '2019-07-08 12:26:29', '2019-07-08 12:26:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
