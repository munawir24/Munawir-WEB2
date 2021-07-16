-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for belajar
CREATE DATABASE IF NOT EXISTS `belajar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `belajar`;

-- Dumping structure for table belajar.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table belajar.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table belajar.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(8) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL DEFAULT '',
  `tempat_lahir` varchar(30) NOT NULL DEFAULT '',
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `telepon` varchar(15) NOT NULL DEFAULT '',
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table belajar.mahasiswa: ~2 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `npm`, `nama_mahasiswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `telepon`, `alamat`) VALUES
	(1, '19630270', 'Ahmad Munawir', 'Sungai Pasir', '2000-03-23', 'L', '082251925522', 'Pangkalan Bun'),
	(2, '19620370', 'Roihatul Jannah', 'Pangkalan bun', '2000-04-27', 'P', '082252128962', 'Sungai Rangit'),
	(3, '19620370', 'Munawir Ahmad', 'Pangkalan bun', '2021-07-16', 'L', '54321', 'KalTeng');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table belajar.makul
CREATE TABLE IF NOT EXISTS `makul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_makul` varchar(10) NOT NULL,
  `nama_makul` varchar(50) NOT NULL,
  `sks` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table belajar.makul: ~2 rows (approximately)
/*!40000 ALTER TABLE `makul` DISABLE KEYS */;
INSERT INTO `makul` (`id`, `kd_makul`, `nama_makul`, `sks`) VALUES
	(1, 'KM001', 'WEB 2', 3),
	(2, 'KM002', 'JarKom 2', 2),
	(4, 'KM003', 'Sistem Informasi Geografis', 2);
/*!40000 ALTER TABLE `makul` ENABLE KEYS */;

-- Dumping structure for table belajar.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table belajar.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table belajar.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makul_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mahasiswa_id` (`mahasiswa_id`),
  KEY `makul_id` (`makul_id`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`makul_id`) REFERENCES `makul` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table belajar.nilai: ~4 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id`, `makul_id`, `mahasiswa_id`, `nilai`) VALUES
	(1, 1, 1, 80),
	(2, 2, 1, 85),
	(3, 2, 2, 88),
	(4, 4, 1, 87);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping structure for table belajar.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table belajar.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table belajar.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table belajar.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Munawir', 'almunawir123@gmail.com', NULL, '$2y$10$Q2n1LAIAgxanBOlMq3F8H.hMeAe3ilhkLhRjfv0.95atYiLRSwCL6', 'DjLQXSyVxSjRfg142TzbeVFYbcbFF1TTMsqM8ufVJgLUUmmbiBVnLhQP7bpE', '2021-06-14 13:13:48', '2021-06-14 13:13:48'),
	(2, 'Nawir', 'almunawir12345@yahoo.com', NULL, '$2y$10$ErTw2e/NgJN9rvPOzj32fe3nxnRitxr3JfuLWiykwbfCrUV0VydxG', NULL, '2021-07-16 07:44:33', '2021-07-16 07:44:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
