-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2020 at 09:19 PM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kokngodi_orari`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'App\\Landing model has been created', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-03 11:59:48', '2020-06-03 11:59:48'),
(2, 'default', 'App\\Page model has been created', 1, 'App\\Page', 1, 'App\\User', '[]', '2020-06-03 12:04:45', '2020-06-03 12:04:45'),
(3, 'default', 'App\\Kategori model has been created', 1, 'App\\Kategori', 1, 'App\\User', '[]', '2020-06-03 12:11:30', '2020-06-03 12:11:30'),
(4, 'default', 'App\\Kategori model has been created', 2, 'App\\Kategori', 1, 'App\\User', '[]', '2020-06-03 12:11:38', '2020-06-03 12:11:38'),
(5, 'default', 'App\\Kategori model has been created', 3, 'App\\Kategori', 1, 'App\\User', '[]', '2020-06-03 12:11:47', '2020-06-03 12:11:47'),
(6, 'default', 'App\\Kategori model has been created', 4, 'App\\Kategori', 1, 'App\\User', '[]', '2020-06-03 12:11:54', '2020-06-03 12:11:54'),
(7, 'default', 'App\\Download model has been created', 1, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 12:13:03', '2020-06-03 12:13:03'),
(8, 'default', 'App\\Beritum model has been created', 1, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 12:18:46', '2020-06-03 12:18:46'),
(9, 'default', 'App\\Beritum model has been updated', 1, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 12:18:52', '2020-06-03 12:18:52'),
(10, 'default', 'App\\Beritum model has been created', 2, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 12:21:35', '2020-06-03 12:21:35'),
(11, 'default', 'App\\Beritum model has been updated', 2, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 12:21:57', '2020-06-03 12:21:57'),
(12, 'default', 'App\\Download model has been created', 2, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 12:51:38', '2020-06-03 12:51:38'),
(13, 'default', 'App\\Download model has been created', 3, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 12:59:22', '2020-06-03 12:59:22'),
(14, 'default', 'App\\Download model has been updated', 1, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 13:08:29', '2020-06-03 13:08:29'),
(15, 'default', 'App\\Download model has been updated', 2, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 13:13:04', '2020-06-03 13:13:04'),
(16, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-03 13:36:09', '2020-06-03 13:36:09'),
(17, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-03 13:36:20', '2020-06-03 13:36:20'),
(18, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-03 13:36:31', '2020-06-03 13:36:31'),
(19, 'default', 'App\\Beritum model has been created', 3, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 14:00:09', '2020-06-03 14:00:09'),
(20, 'default', 'App\\Beritum model has been updated', 3, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 14:01:01', '2020-06-03 14:01:01'),
(21, 'default', 'App\\Beritum model has been updated', 3, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 14:01:35', '2020-06-03 14:01:35'),
(22, 'default', 'App\\Download model has been updated', 1, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 14:07:32', '2020-06-03 14:07:32'),
(23, 'default', 'App\\Download model has been updated', 2, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 14:12:47', '2020-06-03 14:12:47'),
(24, 'default', 'App\\Download model has been updated', 3, 'App\\Download', 1, 'App\\User', '[]', '2020-06-03 14:13:22', '2020-06-03 14:13:22'),
(25, 'default', 'App\\Beritum model has been updated', 1, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 14:14:02', '2020-06-03 14:14:02'),
(26, 'default', 'App\\Beritum model has been updated', 2, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 14:14:34', '2020-06-03 14:14:34'),
(27, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-03 14:16:53', '2020-06-03 14:16:53'),
(28, 'default', 'App\\Beritum model has been created', 4, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-03 23:55:22', '2020-06-03 23:55:22'),
(29, 'default', 'App\\Tanggal_kegiatan model has been created', 1, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-04 10:49:35', '2020-06-04 10:49:35'),
(30, 'default', 'App\\Waktu_kegiatan model has been created', 1, 'App\\Waktu_kegiatan', 1, 'App\\User', '[]', '2020-06-04 10:49:55', '2020-06-04 10:49:55'),
(31, 'default', 'App\\Waktu_kegiatan model has been created', 2, 'App\\Waktu_kegiatan', 1, 'App\\User', '[]', '2020-06-04 11:25:49', '2020-06-04 11:25:49'),
(32, 'default', 'App\\Tanggal_kegiatan model has been created', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-04 11:26:00', '2020-06-04 11:26:00'),
(33, 'default', 'App\\Waktu_kegiatan model has been updated', 2, 'App\\Waktu_kegiatan', 1, 'App\\User', '[]', '2020-06-04 11:29:16', '2020-06-04 11:29:16'),
(34, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-05 03:27:49', '2020-06-05 03:27:49'),
(35, 'default', 'App\\Beritum model has been created', 5, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:15:07', '2020-06-05 08:15:07'),
(36, 'default', 'App\\Beritum model has been created', 6, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:15:40', '2020-06-05 08:15:40'),
(37, 'default', 'App\\Beritum model has been created', 7, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:15', '2020-06-05 08:17:15'),
(38, 'default', 'App\\Beritum model has been created', 8, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:18', '2020-06-05 08:17:18'),
(39, 'default', 'App\\Beritum model has been created', 9, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:20', '2020-06-05 08:17:20'),
(40, 'default', 'App\\Beritum model has been created', 10, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:21', '2020-06-05 08:17:21'),
(41, 'default', 'App\\Beritum model has been created', 11, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:22', '2020-06-05 08:17:22'),
(42, 'default', 'App\\Beritum model has been created', 12, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:22', '2020-06-05 08:17:22'),
(43, 'default', 'App\\Beritum model has been created', 13, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:23', '2020-06-05 08:17:23'),
(44, 'default', 'App\\Beritum model has been created', 14, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:24', '2020-06-05 08:17:24'),
(45, 'default', 'App\\Beritum model has been created', 15, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:24', '2020-06-05 08:17:24'),
(46, 'default', 'App\\Beritum model has been created', 16, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:25', '2020-06-05 08:17:25'),
(47, 'default', 'App\\Beritum model has been created', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:17:26', '2020-06-05 08:17:26'),
(48, 'default', 'App\\Beritum model has been created', 18, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-05 08:25:20', '2020-06-05 08:25:20'),
(49, 'default', 'App\\Download model has been created', 4, 'App\\Download', 1, 'App\\User', '[]', '2020-06-05 08:27:34', '2020-06-05 08:27:34'),
(50, 'default', 'App\\Download model has been updated', 4, 'App\\Download', 1, 'App\\User', '[]', '2020-06-05 08:51:38', '2020-06-05 08:51:38'),
(51, 'default', 'App\\Download model has been updated', 1, 'App\\Download', 1, 'App\\User', '[]', '2020-06-05 08:52:06', '2020-06-05 08:52:06'),
(52, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-05 10:13:26', '2020-06-05 10:13:26'),
(53, 'default', 'App\\Download model has been updated', 2, 'App\\Download', NULL, NULL, '[]', '2020-06-05 10:19:25', '2020-06-05 10:19:25'),
(54, 'default', 'App\\Download model has been updated', 1, 'App\\Download', NULL, NULL, '[]', '2020-06-05 10:25:34', '2020-06-05 10:25:34'),
(55, 'default', 'App\\Permission model has been created', 1, 'App\\Permission', 1, 'App\\User', '[]', '2020-06-05 12:29:43', '2020-06-05 12:29:43'),
(56, 'default', 'App\\Role model has been created', 1, 'App\\Role', 1, 'App\\User', '[]', '2020-06-05 12:29:58', '2020-06-05 12:29:58'),
(57, 'default', 'App\\Beritum model has been updated', 18, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-06 08:18:43', '2020-06-06 08:18:43'),
(58, 'default', 'App\\Beritum model has been updated', 18, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-06 10:58:05', '2020-06-06 10:58:05'),
(59, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-06 14:32:57', '2020-06-06 14:32:57'),
(60, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-06 14:36:03', '2020-06-06 14:36:03'),
(61, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-06 14:39:36', '2020-06-06 14:39:36'),
(62, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 13:07:24', '2020-06-07 13:07:24'),
(63, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 13:08:32', '2020-06-07 13:08:32'),
(64, 'default', 'App\\Beritum model has been created', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 13:34:39', '2020-06-07 13:34:39'),
(65, 'default', 'App\\Beritum model has been updated', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 14:05:25', '2020-06-07 14:05:25'),
(66, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 14:05:59', '2020-06-07 14:05:59'),
(67, 'default', 'App\\Beritum model has been created', 20, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 14:21:34', '2020-06-07 14:21:34'),
(68, 'default', 'App\\Beritum model has been created', 21, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-07 23:45:03', '2020-06-07 23:45:03'),
(69, 'default', 'App\\Beritum model has been deleted', 20, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-08 00:07:46', '2020-06-08 00:07:46'),
(70, 'default', 'App\\Beritum model has been deleted', 21, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-08 00:07:50', '2020-06-08 00:07:50'),
(71, 'default', 'App\\Beritum model has been created', 22, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-08 00:08:02', '2020-06-08 00:08:02'),
(72, 'default', 'App\\Beritum model has been created', 23, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-08 00:08:56', '2020-06-08 00:08:56'),
(73, 'default', 'App\\Beritum model has been created', 24, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-08 00:15:10', '2020-06-08 00:15:10'),
(74, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-08 01:18:18', '2020-06-08 01:18:18'),
(75, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-08 01:29:03', '2020-06-08 01:29:03'),
(76, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 08:50:19', '2020-06-09 08:50:19'),
(77, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 08:51:54', '2020-06-09 08:51:54'),
(78, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 08:58:43', '2020-06-09 08:58:43'),
(79, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 08:59:55', '2020-06-09 08:59:55'),
(80, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 09:01:23', '2020-06-09 09:01:23'),
(81, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 09:08:15', '2020-06-09 09:08:15'),
(82, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 09:09:18', '2020-06-09 09:09:18'),
(83, 'default', 'App\\Beritum model has been deleted', 24, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 09:17:19', '2020-06-09 09:17:19'),
(84, 'default', 'App\\Beritum model has been deleted', 23, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 09:17:23', '2020-06-09 09:17:23'),
(85, 'default', 'App\\Beritum model has been updated', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 09:17:42', '2020-06-09 09:17:42'),
(86, 'default', 'App\\Beritum model has been updated', 17, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 09:17:54', '2020-06-09 09:17:54'),
(87, 'default', 'App\\Beritum model has been created', 25, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 10:04:27', '2020-06-09 10:04:27'),
(88, 'default', 'App\\Beritum model has been created', 26, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 10:17:31', '2020-06-09 10:17:31'),
(89, 'default', 'App\\Beritum model has been created', 27, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 10:17:52', '2020-06-09 10:17:52'),
(90, 'default', 'App\\Beritum model has been created', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 10:18:05', '2020-06-09 10:18:05'),
(91, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 10:19:10', '2020-06-09 10:19:10'),
(92, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-09 10:19:46', '2020-06-09 10:19:46'),
(93, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-09 10:34:10', '2020-06-09 10:34:10'),
(94, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-16 14:29:11', '2020-06-16 14:29:11'),
(95, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-16 14:29:28', '2020-06-16 14:29:28'),
(96, 'default', 'App\\Download model has been created', 5, 'App\\Download', 1, 'App\\User', '[]', '2020-06-16 14:32:54', '2020-06-16 14:32:54'),
(97, 'default', 'App\\Download model has been created', 6, 'App\\Download', 1, 'App\\User', '[]', '2020-06-16 14:54:29', '2020-06-16 14:54:29'),
(98, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-19 12:07:10', '2020-06-19 12:07:10'),
(99, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-19 12:07:23', '2020-06-19 12:07:23'),
(100, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 12:09:04', '2020-06-19 12:09:04'),
(101, 'default', 'App\\Tanggal_kegiatan model has been updated', 1, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:00:41', '2020-06-19 13:00:41'),
(102, 'default', 'App\\Tanggal_kegiatan model has been updated', 1, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:11:32', '2020-06-19 13:11:32'),
(103, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:14:19', '2020-06-19 13:14:19'),
(104, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:14:55', '2020-06-19 13:14:55'),
(105, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:15:19', '2020-06-19 13:15:19'),
(106, 'default', 'App\\Tanggal_kegiatan model has been updated', 1, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:15:46', '2020-06-19 13:15:46'),
(107, 'default', 'App\\Waktu_kegiatan model has been created', 3, 'App\\Waktu_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:17:32', '2020-06-19 13:17:32'),
(108, 'default', 'App\\Waktu_kegiatan model has been created', 4, 'App\\Waktu_kegiatan', 1, 'App\\User', '[]', '2020-06-19 13:33:10', '2020-06-19 13:33:10'),
(109, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-19 14:28:07', '2020-06-19 14:28:07'),
(110, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-19 14:28:39', '2020-06-19 14:28:39'),
(111, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-19 14:29:15', '2020-06-19 14:29:15'),
(112, 'default', 'App\\Tanggal_kegiatan model has been created', 3, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:33:42', '2020-06-19 14:33:42'),
(113, 'default', 'App\\Tanggal_kegiatan model has been created', 4, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:33:55', '2020-06-19 14:33:55'),
(114, 'default', 'App\\Tanggal_kegiatan model has been created', 5, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:12', '2020-06-19 14:35:12'),
(115, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:24', '2020-06-19 14:35:24'),
(116, 'default', 'App\\Tanggal_kegiatan model has been updated', 5, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:32', '2020-06-19 14:35:32'),
(117, 'default', 'App\\Tanggal_kegiatan model has been updated', 4, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:40', '2020-06-19 14:35:40'),
(118, 'default', 'App\\Tanggal_kegiatan model has been updated', 3, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:49', '2020-06-19 14:35:49'),
(119, 'default', 'App\\Tanggal_kegiatan model has been updated', 2, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:35:55', '2020-06-19 14:35:55'),
(120, 'default', 'App\\Tanggal_kegiatan model has been updated', 1, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-19 14:36:03', '2020-06-19 14:36:03'),
(121, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:05', '2020-06-19 17:15:05'),
(122, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:08', '2020-06-19 17:15:08'),
(123, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:09', '2020-06-19 17:15:09'),
(124, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:11', '2020-06-19 17:15:11'),
(125, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:12', '2020-06-19 17:15:12'),
(126, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:14', '2020-06-19 17:15:14'),
(127, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:15:15', '2020-06-19 17:15:15'),
(128, 'default', 'App\\Beritum model has been updated', 27, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:19:04', '2020-06-19 17:19:04'),
(129, 'default', 'App\\Beritum model has been updated', 26, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:19:07', '2020-06-19 17:19:07'),
(130, 'default', 'App\\Beritum model has been updated', 25, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:19:11', '2020-06-19 17:19:11'),
(131, 'default', 'App\\Beritum model has been updated', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:19:15', '2020-06-19 17:19:15'),
(132, 'default', 'App\\Beritum model has been updated', 18, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:19:18', '2020-06-19 17:19:18'),
(133, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 17:20:40', '2020-06-19 17:20:40'),
(134, 'default', 'App\\Beritum model has been updated', 27, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 18:24:21', '2020-06-19 18:24:21'),
(135, 'default', 'App\\Beritum model has been updated', 26, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 18:24:28', '2020-06-19 18:24:28'),
(136, 'default', 'App\\Beritum model has been updated', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-19 18:24:32', '2020-06-19 18:24:32'),
(137, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-20 18:01:11', '2020-06-20 18:01:11'),
(138, 'default', 'App\\Beritum model has been updated', 28, 'App\\Beritum', 1, 'App\\User', '[]', '2020-06-20 18:01:31', '2020-06-20 18:01:31'),
(139, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', NULL, NULL, '[]', '2020-06-22 18:11:28', '2020-06-22 18:11:28'),
(140, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', NULL, NULL, '[]', '2020-06-22 18:12:05', '2020-06-22 18:12:05'),
(141, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', NULL, NULL, '[]', '2020-06-22 18:12:12', '2020-06-22 18:12:12'),
(142, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', NULL, NULL, '[]', '2020-06-22 18:12:16', '2020-06-22 18:12:16'),
(143, 'default', 'App\\Tanggal_kegiatan model has been deleted', 5, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-22 18:14:02', '2020-06-22 18:14:02'),
(144, 'default', 'App\\Tanggal_kegiatan model has been deleted', 4, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-22 18:14:06', '2020-06-22 18:14:06'),
(145, 'default', 'App\\Tanggal_kegiatan model has been deleted', 3, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-22 18:14:09', '2020-06-22 18:14:09'),
(146, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-22 18:23:27', '2020-06-22 18:23:27'),
(147, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-06-22 18:23:32', '2020-06-22 18:23:32'),
(148, 'default', 'App\\Tanggal_kegiatan model has been created', 6, 'App\\Tanggal_kegiatan', 1, 'App\\User', '[]', '2020-06-22 22:32:58', '2020-06-22 22:32:58'),
(149, 'default', 'App\\Agenda model has been created', 1, 'App\\Agenda', 1, 'App\\User', '[]', '2020-07-03 16:18:39', '2020-07-03 16:18:39'),
(150, 'default', 'App\\Agenda model has been created', 2, 'App\\Agenda', 1, 'App\\User', '[]', '2020-07-07 07:11:56', '2020-07-07 07:11:56'),
(151, 'default', 'App\\Agenda model has been updated', 1, 'App\\Agenda', 1, 'App\\User', '[]', '2020-07-07 07:30:05', '2020-07-07 07:30:05'),
(152, 'default', 'App\\Agenda model has been created', 3, 'App\\Agenda', 1, 'App\\User', '[]', '2020-07-11 07:35:59', '2020-07-11 07:35:59'),
(153, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-11 07:36:31', '2020-07-11 07:36:31'),
(154, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-11 07:36:44', '2020-07-11 07:36:44'),
(155, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-16 16:37:11', '2020-07-16 16:37:11'),
(156, 'default', 'App\\Beritum model has been updated', 19, 'App\\Beritum', 1, 'App\\User', '[]', '2020-07-16 16:40:39', '2020-07-16 16:40:39'),
(157, 'default', 'App\\Beritum model has been updated', 22, 'App\\Beritum', 1, 'App\\User', '[]', '2020-07-16 16:40:54', '2020-07-16 16:40:54'),
(158, 'default', 'App\\Beritum model has been updated', 3, 'App\\Beritum', 1, 'App\\User', '[]', '2020-07-16 16:41:16', '2020-07-16 16:41:16'),
(159, 'default', 'App\\Beritum model has been updated', 1, 'App\\Beritum', 1, 'App\\User', '[]', '2020-07-16 16:41:39', '2020-07-16 16:41:39'),
(160, 'default', 'App\\Beritum model has been updated', 2, 'App\\Beritum', 1, 'App\\User', '[]', '2020-07-16 16:41:51', '2020-07-16 16:41:51'),
(161, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-16 16:43:35', '2020-07-16 16:43:35'),
(162, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-16 16:45:19', '2020-07-16 16:45:19'),
(163, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-16 16:45:22', '2020-07-16 16:45:22'),
(164, 'default', 'App\\Landing model has been updated', 1, 'App\\Landing', 1, 'App\\User', '[]', '2020-07-16 16:45:51', '2020-07-16 16:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `ad_spaces`
--

CREATE TABLE `ad_spaces` (
  `id` int(11) NOT NULL,
  `ad_space` text DEFAULT NULL,
  `ad_code_728` text DEFAULT NULL,
  `ad_code_468` text DEFAULT NULL,
  `ad_code_300` text DEFAULT NULL,
  `ad_code_234` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_spaces`
--

INSERT INTO `ad_spaces` (`id`, `ad_space`, `ad_code_728`, `ad_code_468`, `ad_code_300`, `ad_code_234`) VALUES
(1, 'index_top', NULL, NULL, NULL, NULL),
(2, 'index_bottom', NULL, NULL, NULL, NULL),
(3, 'post_top', NULL, NULL, NULL, NULL),
(4, 'post_bottom', NULL, NULL, NULL, NULL),
(5, 'category_top', NULL, NULL, NULL, NULL),
(6, 'category_bottom', NULL, NULL, NULL, NULL),
(7, 'tag_top', NULL, NULL, NULL, NULL),
(8, 'tag_bottom', NULL, NULL, NULL, NULL),
(9, 'search_top', NULL, NULL, NULL, NULL),
(10, 'search_bottom', NULL, NULL, NULL, NULL),
(11, 'profile_top', NULL, NULL, NULL, NULL),
(12, 'profile_bottom', NULL, NULL, NULL, NULL),
(13, 'reading_list_top', NULL, NULL, NULL, NULL),
(14, 'reading_list_bottom', NULL, NULL, NULL, NULL),
(15, 'sidebar_top', NULL, NULL, NULL, NULL),
(16, 'sidebar_bottom', NULL, NULL, NULL, NULL),
(17, 'header', NULL, NULL, NULL, NULL),
(18, 'posts_top', NULL, NULL, NULL, NULL),
(19, 'posts_bottom', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_agenda` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_agenda` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_agenda` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `created_at`, `updated_at`, `nama_agenda`, `deskripsi_agenda`, `lokasi_agenda`, `tanggal_mulai`, `jam_mulai`, `tanggal_selesai`, `jam_selesai`, `gambar`) VALUES
(1, '2020-07-03 16:18:39', '2020-07-07 07:30:04', 'Contoh Agenda', '<p>qwertyasdfghj</p>\r\n<p>zxcvbn</p>', 'yogyakarta', '2020-07-04', '07:18:00', '2020-07-04', '00:18:00', 'img_berita/y4cP2s9Vf5NwZCxHmmu5MtmvhwSbLuxvL7LjD1qy.jpeg'),
(2, '2020-07-07 07:11:56', '2020-07-07 07:11:56', 'Contoh Agenda', '<p>Agenda penyambutan masa akhir pandemisakflsdasfjasjfkdjkfjadsklfjdsklafjakjflkafjkldsjfkajfkdajflkdfjdskfjkalfjksjfklafjdskfjkdsjfkdsfjkdsljfdskfjakljksj</p>', 'yogyakarta', '2020-07-07', '22:11:00', '2020-07-07', '10:11:00', 'img_berita/ULxO1rvoWR2kP0xXzlza7uDaxQ6pRgXndDJiwksD.png'),
(3, '2020-07-11 07:35:59', '2020-07-11 07:35:59', 'kerja bhakti', '<p>membersihkan sungai dari sabang sampai merauke</p>', 'Yogyakarta', '2020-07-25', '02:35:00', '2020-08-06', '22:40:00', 'img_berita/cUBWArFckjQavLmm3JXPxfx7kR6G3tYMPKh96RMJ.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `audio_name` varchar(255) DEFAULT NULL,
  `audio_path` varchar(255) DEFAULT NULL,
  `download_button` tinyint(1) DEFAULT 1,
  `user_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','unpublish') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `created_at`, `updated_at`, `judul`, `konten`, `tanggal`, `gambar`, `status`) VALUES
(1, '2020-06-03 12:18:46', '2020-07-16 16:41:39', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-04', 'img_berita/E0KywEyhl7YsAI8WhXnCO7ePsfaZal8aXJmGiwBP.jpeg', 'publish'),
(2, '2020-06-03 12:21:35', '2020-07-16 16:41:51', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-04', 'img_berita/6U2eNUcC7asDPBtM8r8DCUjZBHg1BnKs6jhBb0x0.jpeg', 'publish'),
(3, '2020-06-03 14:00:09', '2020-07-16 16:41:16', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-04', 'img_berita/gtqTJ0gEI0MUyxbzHIejrM26mf6uwNeka5lBTVig.jpeg', 'unpublish'),
(4, '2020-06-03 23:55:21', '2020-06-03 23:55:21', 'pengajuan dana pembangunan masjid di kampung Dero', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-04', 'img_berita/eRUooERqVL4auX00sLAu2xxK4CBwSudAlzeJcLG9.jpeg', 'unpublish'),
(17, '2020-06-05 08:17:26', '2020-06-09 09:17:54', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p><strong>SURABAYA, KOMPAS.com</strong> - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang.</p>\r\n<p>Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya.</p>\r\n<p>Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria.</p>\r\n<p>Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-25', 'img_berita/SVw3EqEQfeUn10ORMZsxFKVYxCdOTRL53tmennbb.jpeg', 'publish'),
(18, '2020-06-05 08:25:20', '2020-06-19 17:19:18', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-25', 'img_berita/pSIHqNHq0x5NlwCJ9HB1ifw3YWix6vI7CoMmwuar.jpeg', 'unpublish'),
(19, '2020-06-07 13:34:39', '2020-07-16 16:40:39', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-08', 'img_berita/Hyz8C29mDv6LUfkI6igbL2kvykn1nNa8vSBpWwxC.jpeg', 'publish'),
(22, '2020-06-08 00:08:02', '2020-07-16 16:40:54', 'Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-08', NULL, 'unpublish'),
(25, '2020-06-09 10:04:27', '2020-06-19 17:19:11', 'Berita contoh untuk hari ini', '<p>SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-10', NULL, 'unpublish'),
(26, '2020-06-09 10:17:31', '2020-06-19 18:24:28', 'Pembuatan Pembangkit Listrik Tenaga Air di Concad', '<p>&lt;p&gt;SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina&lt;/p&gt;</p>', '2020-06-10', 'img_berita/Sa8JIpSETuIGC9w0KUPBYvWCakhid2RqJ74ZELYA.jpeg', 'publish'),
(27, '2020-06-09 10:17:52', '2020-06-19 18:24:21', 'pengajuan dana pembangunan masjid di kampung Dero', '<p>&lt;p&gt;SURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina&lt;/p&gt;</p>', '2020-06-10', 'img_berita/zjK8acxmMlSHej7C4Aag1DDbat4S2hIzL1lLUT0w.jpeg', 'publish'),
(28, '2020-06-09 10:18:05', '2020-06-20 18:01:31', 'Pembuatan Pembangkit Listrik Tenaga Air di amikom', '<p>iSURABAYA, KOMPAS.com - Pemkot Surabaya mengumumkan tambahan 24 pasien sembuh dari Covid-19 pada Sabtu (6/6/2020). Dinas Kesehatan (Dinkes) Kota Surabaya mencatat, hingga Sabtu (6/6/2020) ini, data kumulatif pasien Covid-19 yang dinyatakan sembuh di Surabaya mencapai 766 orang. Koordinator Bidang Pencegahan Gugus Tugas Percepatan Penanganan Covid-19 Surabaya, Febria Rachmanita mengatakan, meningkatnya angka kesembuhan pasien Covid-19 di Surabaya karena hasil diagnosa bisa dilihat lebih cepat dengan adanya dukungan mobil lab PCR dari BIN dan BNPB. \"Kita bisa lihat dan kita bisa dapat data itu karena ada lab yang bisa cepat selesai. Pertama ada bantuan mobil PCR dari BIN, lalu dari BNPB. Kemudian, ada bantuan lagi alat dari BIN selengkap dengan real time PCR yang masa kerjanya mulai dari unboxing, ekstracting, kemudian masuk ke mesin PCR itu kurang lebih 7 jam 45 menit,\" kata Febria di Balai Kota Surabaya, Sabtu. Baca juga: Hasil Tes Swab, Wakil Wali Kota Surabaya Dinyatakan Negatif Covid-19 Ia memprediksi, tren kesembuhan pasien Covid-19 di Surabaya ke depan bakal terus bertambah Menurut Febria, tren kesembuhan pasien ini paling banyak berasal dari Hotel Asrama Haji Sukolilo, Surabaya. Hingga saat ini, pihaknya menyatakan masih terus melakukan verifikasi data pasien sembuh tersebut. \"Besok ada potensi sembuh sekitar 127-an orang, karena ini masih verifikasi. Insya Allah tambah terus (pasien sembuh), paling banyak tingkat kesembuhannya di Asrama Haji,\" ujar Febria. Ia menjelaskan, tingkat kesembuhan pasien yang dirawat di Hotel Asrama Haji begitu besar karena beberapa faktor. Salah satunya, adanya fasilitas pendukung yang disiapkan pemkot untuk mendorong mereka agar imunitas tubuhnya tetap terjaga. Artikel ini telah tayang di Kompas.com dengan judul \"Bertambah 24, Pasien Covid-19 Sembuh di Surabaya Jadi 766 Orang\", https://regional.kompas.com/read/2020/06/06/23171011/bertambah-24-pasien-covid-19-sembuh-di-surabaya-jadi-766-orang. Penulis : Kontributor Surabaya, Ghinan Salman Editor : Khairina</p>', '2020-06-10', NULL, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 1,
  `name` varchar(255) DEFAULT NULL,
  `name_slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `block_type` varchar(255) DEFAULT NULL,
  `category_order` int(11) DEFAULT 0,
  `show_at_homepage` tinyint(1) DEFAULT 1,
  `show_on_menu` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `like_count` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `callsign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin` timestamp NULL DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `created_at`, `updated_at`, `callsign`, `checkin`, `kategori`, `counter`, `file`) VALUES
(1, '2020-06-03 12:13:03', '2020-06-05 10:25:34', 'qwerty', '2020-06-03 21:07:00', 2, 3, 'file/48GhUycIdctcuxYaEPcyK6jKSsRerVhkyRs6hm84.pdf'),
(2, '2020-06-03 12:51:38', '2020-06-05 10:19:25', 'zxcvbnm', '2020-06-03 21:12:00', 4, 2, 'file/Al1whrK5hT3oEYfhCBKfRtxBycbp8jWwLrTSJ50q.pdf'),
(3, '2020-06-03 12:59:22', '2020-06-03 14:13:22', 'zczzbm', '2020-06-03 21:13:00', 3, 1, 'file/KMt24w59ye4G3d9mpL4HGg56r4l0g7pYr5On2Xlj.pdf'),
(4, '2020-06-05 08:27:34', '2020-06-05 08:51:38', 'qwerty', '2020-06-05 15:26:00', 1, 2, 'file/YoiE2B6kS7gY7MvAMpO5HrOtucRFMh6KtmUuSAQt.pdf'),
(5, '2020-06-16 14:32:54', '2020-06-16 14:32:54', 'qwerty', '2020-06-16 21:29:00', 3, 0, 'file/d3q6tPnH56oHRktabyOaj1OG3v00Geiu92N0REPt.pdf'),
(6, '2020-06-16 14:54:29', '2020-06-16 14:54:29', 'qwerty', '2020-06-16 21:54:00', 3, 0, 'file/CyPrpvHUFZk8srhECR39rYW4tMgPNnR3oF4pUwnD.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `following_id` int(11) DEFAULT NULL,
  `follower_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `id` int(11) NOT NULL,
  `font_name` varchar(255) DEFAULT NULL,
  `font_url` varchar(2000) DEFAULT NULL,
  `font_family` varchar(500) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fonts`
--

INSERT INTO `fonts` (`id`, `font_name`, `font_url`, `font_family`, `is_default`) VALUES
(1, 'Arial', NULL, 'font-family: Arial, Helvetica, sans-serif', 1),
(2, 'Arvo', '<link href=\"https://fonts.googleapis.com/css?family=Arvo:400,700&display=swap\" rel=\"stylesheet\">\r\n', 'font-family: \"Arvo\", Helvetica, sans-serif', 0),
(3, 'Averia Libre', '<link href=\"https://fonts.googleapis.com/css?family=Averia+Libre:300,400,700&display=swap\" rel=\"stylesheet\">\r\n', 'font-family: \"Averia Libre\", Helvetica, sans-serif', 0),
(4, 'Bitter', '<link href=\"https://fonts.googleapis.com/css?family=Bitter:400,400i,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Bitter\", Helvetica, sans-serif', 0),
(5, 'Cabin', '<link href=\"https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap&subset=latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Cabin\", Helvetica, sans-serif', 0),
(6, 'Cherry Swash', '<link href=\"https://fonts.googleapis.com/css?family=Cherry+Swash:400,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Cherry Swash\", Helvetica, sans-serif', 0),
(7, 'Encode Sans', '<link href=\"https://fonts.googleapis.com/css?family=Encode+Sans:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Encode Sans\", Helvetica, sans-serif', 0),
(8, 'Helvetica', NULL, 'font-family: Helvetica, sans-serif', 1),
(9, 'Hind', '<link href=\"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&display=swap&subset=devanagari,latin-ext\" rel=\"stylesheet\">', 'font-family: \"Hind\", Helvetica, sans-serif', 0),
(10, 'Josefin Sans', '<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap&subset=latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Josefin Sans\", Helvetica, sans-serif', 0),
(11, 'Kalam', '<link href=\"https://fonts.googleapis.com/css?family=Kalam:300,400,700&display=swap&subset=devanagari,latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Kalam\", Helvetica, sans-serif', 0),
(12, 'Khula', '<link href=\"https://fonts.googleapis.com/css?family=Khula:300,400,600,700&display=swap&subset=devanagari,latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Khula\", Helvetica, sans-serif', 0),
(13, 'Lato', '<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">', 'font-family: \"Lato\", Helvetica, sans-serif', 0),
(14, 'Lora', '<link href=\"https://fonts.googleapis.com/css?family=Lora:400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Lora\", Helvetica, sans-serif', 0),
(15, 'Merriweather', '<link href=\"https://fonts.googleapis.com/css?family=Merriweather:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Merriweather\", Helvetica, sans-serif', 0),
(16, 'Montserrat', '<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Montserrat\", Helvetica, sans-serif', 0),
(17, 'Mukta', '<link href=\"https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap&subset=devanagari,latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Mukta\", Helvetica, sans-serif', 0),
(18, 'Nunito', '<link href=\"https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Nunito\", Helvetica, sans-serif', 0),
(19, 'Open Sans', '<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese\" rel=\"stylesheet\">', 'font-family: \"Open Sans\", Helvetica, sans-serif', 0),
(20, 'Oswald', '<link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese\" rel=\"stylesheet\">', 'font-family: \"Oswald\", Helvetica, sans-serif', 0),
(21, 'Oxygen', '<link href=\"https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Oxygen\", Helvetica, sans-serif', 0),
(22, 'Poppins', '<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap&subset=devanagari,latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Poppins\", Helvetica, sans-serif', 0),
(23, 'PT Sans', '<link href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"PT Sans\", Helvetica, sans-serif', 0),
(24, 'Raleway', '<link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">\r\n', 'font-family: \"Raleway\", Helvetica, sans-serif', 0),
(25, 'Roboto', '<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese\" rel=\"stylesheet\">', 'font-family: \"Roboto\", Helvetica, sans-serif', 0),
(26, 'Roboto Condensed', '<link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Roboto Condensed\", Helvetica, sans-serif', 0),
(27, 'Roboto Slab', '<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Roboto Slab\", Helvetica, sans-serif', 0),
(28, 'Rokkitt', '<link href=\"https://fonts.googleapis.com/css?family=Rokkitt:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese\" rel=\"stylesheet\">\r\n', 'font-family: \"Rokkitt\", Helvetica, sans-serif', 0),
(29, 'Source Sans Pro', '<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese\" rel=\"stylesheet\">', 'font-family: \"Source Sans Pro\", Helvetica, sans-serif', 0),
(30, 'Titillium Web', '<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">', 'font-family: \"Titillium Web\", Helvetica, sans-serif', 0),
(31, 'Ubuntu', '<link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext\" rel=\"stylesheet\">', 'font-family: \"Ubuntu\", Helvetica, sans-serif', 0),
(32, 'Verdana', NULL, 'font-family: Verdana, Helvetica, sans-serif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 1,
  `title` varchar(500) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `path_big` varchar(255) DEFAULT NULL,
  `path_small` varchar(255) DEFAULT NULL,
  `is_album_cover` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_albums`
--

CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 1,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 1,
  `name` varchar(255) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `site_lang` int(11) NOT NULL DEFAULT 1,
  `multilingual_system` tinyint(1) DEFAULT 1,
  `show_hits` tinyint(1) DEFAULT 1,
  `show_rss` tinyint(1) DEFAULT 1,
  `show_newsticker` tinyint(1) DEFAULT 1,
  `pagination_per_page` smallint(6) DEFAULT 10,
  `google_analytics` text DEFAULT NULL,
  `mail_library` varchar(100) DEFAULT 'swift',
  `mail_protocol` varchar(100) DEFAULT 'smtp',
  `mail_host` varchar(255) DEFAULT NULL,
  `mail_port` varchar(255) DEFAULT '587',
  `mail_username` varchar(255) DEFAULT NULL,
  `mail_password` varchar(255) DEFAULT NULL,
  `mail_title` varchar(255) DEFAULT NULL,
  `google_client_id` varchar(500) DEFAULT NULL,
  `google_client_secret` varchar(500) DEFAULT NULL,
  `vk_app_id` varchar(500) DEFAULT NULL,
  `vk_secure_key` varchar(500) DEFAULT NULL,
  `facebook_app_id` varchar(500) DEFAULT NULL,
  `facebook_app_secret` varchar(500) DEFAULT NULL,
  `facebook_comment` text DEFAULT NULL,
  `facebook_comment_active` tinyint(1) DEFAULT 1,
  `show_featured_section` tinyint(1) DEFAULT 1,
  `show_latest_posts` tinyint(1) DEFAULT 1,
  `registration_system` tinyint(1) DEFAULT 1,
  `comment_system` tinyint(1) DEFAULT 1,
  `comment_approval_system` tinyint(1) DEFAULT 1,
  `show_post_author` tinyint(1) DEFAULT 1,
  `show_post_date` tinyint(1) DEFAULT 1,
  `menu_limit` tinyint(4) DEFAULT 8,
  `custom_css_codes` mediumtext DEFAULT NULL,
  `custom_javascript_codes` mediumtext DEFAULT NULL,
  `adsense_activation_code` text DEFAULT NULL,
  `vr_key` varchar(500) DEFAULT NULL,
  `purchase_code` varchar(255) DEFAULT NULL,
  `recaptcha_site_key` varchar(255) DEFAULT NULL,
  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `emoji_reactions` tinyint(1) DEFAULT 1,
  `mail_contact_status` tinyint(1) DEFAULT 0,
  `mail_contact` varchar(255) DEFAULT NULL,
  `cache_system` tinyint(1) DEFAULT 0,
  `cache_refresh_time` int(11) DEFAULT 1800,
  `refresh_cache_database_changes` tinyint(1) DEFAULT 0,
  `email_verification` tinyint(1) DEFAULT 0,
  `file_manager_show_files` tinyint(1) DEFAULT 1,
  `audio_download_button` tinyint(1) DEFAULT 1,
  `approve_added_user_posts` tinyint(1) DEFAULT 1,
  `approve_updated_user_posts` tinyint(1) DEFAULT 1,
  `timezone` varchar(255) DEFAULT 'America/New_York',
  `sort_slider_posts` varchar(100) DEFAULT 'by_slider_order',
  `sort_featured_posts` varchar(100) DEFAULT 'by_featured_order',
  `newsletter` tinyint(1) DEFAULT 1,
  `text_editor_lang` varchar(30) DEFAULT 'en',
  `show_home_link` tinyint(1) DEFAULT 1,
  `post_format_article` tinyint(1) DEFAULT 1,
  `post_format_gallery` tinyint(1) DEFAULT 1,
  `post_format_sorted_list` tinyint(1) DEFAULT 1,
  `post_format_video` tinyint(1) DEFAULT 1,
  `post_format_audio` tinyint(1) DEFAULT 1,
  `post_format_trivia_quiz` tinyint(1) DEFAULT 1,
  `post_format_personality_quiz` tinyint(1) DEFAULT 1,
  `maintenance_mode_title` varchar(500) DEFAULT 'Coming Soon!',
  `maintenance_mode_description` varchar(5000) DEFAULT NULL,
  `maintenance_mode_status` tinyint(1) DEFAULT 0,
  `sitemap_frequency` varchar(30) DEFAULT 'monthly',
  `sitemap_last_modification` varchar(30) DEFAULT 'server_response',
  `sitemap_priority` varchar(30) DEFAULT 'automatically'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_lang`, `multilingual_system`, `show_hits`, `show_rss`, `show_newsticker`, `pagination_per_page`, `google_analytics`, `mail_library`, `mail_protocol`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_title`, `google_client_id`, `google_client_secret`, `vk_app_id`, `vk_secure_key`, `facebook_app_id`, `facebook_app_secret`, `facebook_comment`, `facebook_comment_active`, `show_featured_section`, `show_latest_posts`, `registration_system`, `comment_system`, `comment_approval_system`, `show_post_author`, `show_post_date`, `menu_limit`, `custom_css_codes`, `custom_javascript_codes`, `adsense_activation_code`, `vr_key`, `purchase_code`, `recaptcha_site_key`, `recaptcha_secret_key`, `recaptcha_lang`, `emoji_reactions`, `mail_contact_status`, `mail_contact`, `cache_system`, `cache_refresh_time`, `refresh_cache_database_changes`, `email_verification`, `file_manager_show_files`, `audio_download_button`, `approve_added_user_posts`, `approve_updated_user_posts`, `timezone`, `sort_slider_posts`, `sort_featured_posts`, `newsletter`, `text_editor_lang`, `show_home_link`, `post_format_article`, `post_format_gallery`, `post_format_sorted_list`, `post_format_video`, `post_format_audio`, `post_format_trivia_quiz`, `post_format_personality_quiz`, `maintenance_mode_title`, `maintenance_mode_description`, `maintenance_mode_status`, `sitemap_frequency`, `sitemap_last_modification`, `sitemap_priority`) VALUES
(1, 1, 1, 1, 1, 1, 16, NULL, 'swift', 'smtp', NULL, '587', NULL, NULL, 'Varient', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, 1, 1, 1, 1, 1, 9, NULL, NULL, NULL, 'f68c5e70-94f3-6124-a512-3824bda6907f', '', NULL, NULL, 'en', 1, 0, NULL, 0, 180000, 0, 1, 1, 1, 1, 1, 'Asia/Jakarta', 'by_slider_order', 'by_featured_order', 1, 'en', 1, 1, 1, 1, 1, 1, 1, 1, 'Coming Soon!', 'Our website is under construction. We\'ll be here soon with our new awesome site.', 0, 'weekly', 'server_response', 'automatically');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 1,
  `image_big` varchar(255) DEFAULT NULL,
  `image_default` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_mime` varchar(50) DEFAULT 'jpg',
  `file_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `created_at`, `updated_at`, `nama`) VALUES
(1, '2020-06-03 12:11:30', '2020-06-03 12:11:30', 'HF 40 M - Phone'),
(2, '2020-06-03 12:11:38', '2020-06-03 12:11:38', 'Hf 40 M - CW'),
(3, '2020-06-03 12:11:47', '2020-06-03 12:11:47', 'Hf 40 M - FT 8'),
(4, '2020-06-03 12:11:53', '2020-06-03 12:11:53', 'VHF 2 M222');

-- --------------------------------------------------------

--
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juknis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `izin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_tentang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_juknis` enum('publish','unpublish') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_izin` enum('publish','unpublish') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landings`
--

INSERT INTO `landings` (`id`, `created_at`, `updated_at`, `nama_perusahaan`, `deskripsi`, `tentang`, `visi`, `misi`, `juknis`, `izin`, `alamat`, `email`, `telpon`, `gambar_tentang`, `link_video`, `status_juknis`, `status_izin`) VALUES
(1, '2020-06-03 11:59:47', '2020-07-16 16:45:51', 'ORARI LOKAL BANTUL', '<p>SPECIAL CALL HUT KOTA YOGYAKARTA KE 263 TAHUN 2019 8G263YOG ORARI LOKAL KOTA YOGYAKARTA FREKUENSI: HF 40 M - Phone : Frekuensi 7.155 Mhz HF 40 M - CW : Frekuensi 7.010 - 7.025 Mhz HF 40 M - FT 8 : Frekuensi 7.074 Mhz VHF 2 M : Frekuensi 145.500 Mhz PERTUKARAN REPORT: Phone: Callsign + report signal + Ucapan &ldquo;Selamat HUT Kota Yogyakarta Ke &ndash; 263&rdquo; CW / FT8: Callsign + Rst</p>', '<p>SPECIAL CALL HUT KOTA YOGYAKARTA KE 263 TAHUN 2019 8G263YOG ORARI LOKAL KOTA YOGYAKARTA FREKUENSI: HF 40 M - Phone : Frekuensi 7.155 Mhz HF 40 M - CW : Frekuensi 7.010 - 7.025 Mhz HF 40 M - FT 8 : Frekuensi 7.074 Mhz VHF 2 M : Frekuensi 145.500 Mhz</p>', '<p>Menjadi role model pertanian terpadu berorientasi ekspor nomor satu di Jawa Barat pada tahun 2025 Memenuhi 5% kebutuhan pupuk organik untuk sektor perkebunan di seluruh Asia Tenggara</p>', '<p>Meningkatkan produktivitas lahan pertanian menggunakan sistem pertanian terintegrasi Melakukan riset dan inovasi berkelanjutan untuk menghasilkan pupuk organik yang sesuai dengan daerah tropis Melakukan scale-up sistem produksi pupuk organik secara bertahap hingga memenuhi kuota ekspor</p>', 'file/LuYZ7jKEcwcrL3q5FxLz1g7j2vsLfzUigSR6zRk9.pdf', 'file/KYcWWK7c2CXpyCsUp0U39vYLxJ9ZZ6Tjhmsj1qpd.pdf', '<p>Daerah Istimewa Yogyakarta</p>', 'admin@orarilokalbantul.com', '083148263599', 'img/Jrj8N8SQlpquTNATFRbEWZ0fd8D5UMdfeiav0jku.jpeg', 'https://www.youtube.com/watch?v=V4iEtNgthMM', 'publish', 'unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_form` varchar(255) NOT NULL,
  `language_code` varchar(100) NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `text_direction` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `language_order` smallint(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_form`, `language_code`, `folder_name`, `text_direction`, `status`, `language_order`) VALUES
(1, 'English', 'en', 'en-US', 'default', 'ltr', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_193651_create_roles_permissions_tables', 2),
(4, '2018_08_01_183154_create_pages_table', 2),
(5, '2018_08_04_122319_create_settings_table', 2),
(6, '2020_06_03_183041_create_activity_log_table', 2),
(7, '2020_06_03_184221_create_landings_table', 3),
(8, '2020_06_03_184322_create_kategoris_table', 4),
(9, '2020_06_03_184947_create_downloads_table', 5),
(10, '2020_06_03_185644_create_beritas_table', 6),
(11, '2020_06_04_064105_create_tanggal_kegiatans_table', 7),
(12, '2020_06_04_064804_create_waktu_kegiatans_table', 7),
(13, '2020_07_03_224921_create_agendas_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `content`) VALUES
(1, '2020-06-03 12:04:45', '2020-06-03 12:04:45', NULL, 'contoh', '<p>untuk percobaan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2020-06-05 12:29:43', '2020-06-05 12:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2020-06-05 12:29:58', '2020-06-05 12:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_kegiatans`
--

CREATE TABLE `tanggal_kegiatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hari` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanggal_kegiatans`
--

INSERT INTO `tanggal_kegiatans` (`id`, `created_at`, `updated_at`, `hari`, `tanggal`) VALUES
(1, '2020-06-04 10:49:35', '2020-06-19 14:36:03', 'Jumat', '2020-06-26'),
(2, '2020-06-04 11:26:00', '2020-06-19 14:35:55', 'Kamis', '2020-06-18'),
(6, '2020-06-22 22:32:58', '2020-06-22 22:32:58', 'Kamis', '2020-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin orari', 'admin@admin.com', NULL, '$2y$10$TDlSSA9BUp1Z1LxTmuSe.OBND1.faX0BmsCgo87WS7GjJnafyREey', 'ARy4TwOqWIeKSjwp34h3xVtfJlmOoYcULsAyB7is9ZFAzodgQWthhQsTgd1N', '2020-06-03 11:31:35', '2020-06-05 12:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_kegiatans`
--

CREATE TABLE `waktu_kegiatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tanggal` int(11) DEFAULT NULL,
  `mulai` time DEFAULT NULL,
  `selesai` time DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waktu_kegiatans`
--

INSERT INTO `waktu_kegiatans` (`id`, `created_at`, `updated_at`, `id_tanggal`, `mulai`, `selesai`, `detail`) VALUES
(1, '2020-06-04 10:49:55', '2020-06-04 10:49:55', 1, '00:49:00', '12:49:00', '08:00 - 15:00 UTC HF 40 M - Phone'),
(2, '2020-06-04 11:25:49', '2020-06-04 11:29:16', 2, '13:25:00', '01:29:00', '08:00 - 15:00 UTC HF 40 M - Phone'),
(3, '2020-06-19 13:17:32', '2020-06-19 13:17:32', 2, '16:17:00', '22:21:00', '08:00 - 15:00 UTC HF 40 M - Phone'),
(4, '2020-06-19 13:33:10', '2020-06-19 13:33:10', 1, '04:33:00', '16:33:00', '08:00 - 15:00 UTC HF 40 M - Phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tanggal_kegiatans`
--
ALTER TABLE `tanggal_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waktu_kegiatans`
--
ALTER TABLE `waktu_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanggal_kegiatans`
--
ALTER TABLE `tanggal_kegiatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waktu_kegiatans`
--
ALTER TABLE `waktu_kegiatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
