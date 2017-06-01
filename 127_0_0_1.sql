-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 07:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--
CREATE DATABASE IF NOT EXISTS `homestead` DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci;
USE `homestead`;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `login_result` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `email`, `ip_address`, `login_result`, `created_at`, `updated_at`) VALUES
(1, 'asabanovic3@gmail.com', '127.0.0.1', 'FAILED', '2017-06-01 00:49:10', '2017-06-01 00:49:10'),
(2, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 00:49:20', '2017-06-01 00:49:20'),
(3, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 02:16:59', '2017-06-01 02:16:59'),
(4, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 02:18:30', '2017-06-01 02:18:30'),
(5, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 02:33:41', '2017-06-01 02:33:41'),
(6, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 02:52:31', '2017-06-01 02:52:31'),
(7, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 08:35:09', '2017-06-01 08:35:09'),
(8, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 11:03:38', '2017-06-01 11:03:38'),
(9, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 14:17:35', '2017-06-01 14:17:35'),
(10, 'asabanovic3@gmail.com', '127.0.0.1', 'FAILED', '2017-06-01 15:30:29', '2017-06-01 15:30:29'),
(11, 'asabanovic3@gmail.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 15:30:51', '2017-06-01 15:30:51'),
(12, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 16:11:11', '2017-06-01 16:11:11'),
(13, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 16:13:24', '2017-06-01 16:13:24'),
(14, 'avelic15@etf.unsa.ba', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 16:14:47', '2017-06-01 16:14:47'),
(15, 'admin@itelecom.com', '127.0.0.1', 'SUCCESSFUL', '2017-06-01 16:15:05', '2017-06-01 16:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(74, '2014_10_12_000000_create_users_table', 1),
(75, '2014_10_12_100000_create_password_resets_table', 1),
(76, '2017_04_06_152121_create_devices_table', 1),
(77, '2017_05_27_234145_create_login_attempts_table', 1),
(78, '2017_06_01_005551_create_page_visits_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_visits`
--

CREATE TABLE `page_visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_visits`
--

INSERT INTO `page_visits` (`id`, `email`, `route`, `ip_address`, `result`, `created_at`, `updated_at`) VALUES
(1, 'email', 'route', '127.0.0.1', 'result', '2017-06-01 00:21:47', '2017-06-01 00:21:47'),
(2, 'admin@itelecom.com', 'route', '127.0.0.1', 'result', '2017-06-01 00:24:54', '2017-06-01 00:24:54'),
(3, NULL, '/', '127.0.0.1', 'result', '2017-06-01 00:27:16', '2017-06-01 00:27:16'),
(20, 'admin@itelecom.com', '/dnevnik-prijava?email=&created_at=Najstarije', '127.0.0.1', 'result', '2017-06-01 02:58:16', '2017-06-01 02:58:16'),
(5, NULL, '/novosti', '127.0.0.1', 'result', '2017-06-01 00:37:30', '2017-06-01 00:37:30'),
(6, NULL, '/novosti', '127.0.0.1', 'result', '2017-06-01 00:48:33', '2017-06-01 00:48:33'),
(7, NULL, '/fiksna-telefonija', '127.0.0.1', 'result', '2017-06-01 00:48:35', '2017-06-01 00:48:35'),
(8, NULL, '/mobilna-telefonija', '127.0.0.1', 'result', '2017-06-01 00:48:37', '2017-06-01 00:48:37'),
(9, NULL, '/internet', '127.0.0.1', 'result', '2017-06-01 00:48:39', '2017-06-01 00:48:39'),
(10, NULL, '/tv', '127.0.0.1', 'result', '2017-06-01 00:48:43', '2017-06-01 00:48:43'),
(11, NULL, '/internet', '127.0.0.1', 'result', '2017-06-01 00:48:45', '2017-06-01 00:48:45'),
(12, NULL, '/tv', '127.0.0.1', 'result', '2017-06-01 00:48:47', '2017-06-01 00:48:47'),
(13, 'admin@itelecom.com', '/novosti', '127.0.0.1', 'result', '2017-06-01 00:49:22', '2017-06-01 00:49:22'),
(14, 'admin@itelecom.com', '/fiksna-telefonija', '127.0.0.1', 'result', '2017-06-01 00:49:23', '2017-06-01 00:49:23'),
(15, 'admin@itelecom.com', '/mobilna-telefonija', '127.0.0.1', 'result', '2017-06-01 00:49:25', '2017-06-01 00:49:25'),
(16, 'admin@itelecom.com', '/internet', '127.0.0.1', 'result', '2017-06-01 00:49:26', '2017-06-01 00:49:26'),
(17, 'admin@itelecom.com', '/tv', '127.0.0.1', 'result', '2017-06-01 00:49:28', '2017-06-01 00:49:28'),
(18, 'admin@itelecom.com', '/tv', '127.0.0.1', 'result', '2017-06-01 01:07:46', '2017-06-01 01:07:46'),
(19, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'result', '2017-06-01 02:55:27', '2017-06-01 02:55:27'),
(21, 'admin@itelecom.com', '/dnevnik-prijava?email=&created_at=Najstarije', '127.0.0.1', 'result', '2017-06-01 02:59:09', '2017-06-01 02:59:09'),
(22, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'result', '2017-06-01 03:01:14', '2017-06-01 03:01:14'),
(23, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 11:03:06', '2017-06-01 11:03:06'),
(24, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 11:03:38', '2017-06-01 11:03:38'),
(25, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:56:50', '2017-06-01 13:56:50'),
(26, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:57:24', '2017-06-01 13:57:24'),
(27, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:57:26', '2017-06-01 13:57:26'),
(28, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:58:23', '2017-06-01 13:58:23'),
(29, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:58:25', '2017-06-01 13:58:25'),
(30, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:58:40', '2017-06-01 13:58:40'),
(31, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:58:43', '2017-06-01 13:58:43'),
(32, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:58:47', '2017-06-01 13:58:47'),
(33, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:24', '2017-06-01 13:59:24'),
(34, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:26', '2017-06-01 13:59:26'),
(35, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:41', '2017-06-01 13:59:41'),
(36, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:43', '2017-06-01 13:59:43'),
(37, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:44', '2017-06-01 13:59:44'),
(38, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 13:59:52', '2017-06-01 13:59:52'),
(39, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:01:39', '2017-06-01 14:01:39'),
(40, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:01:44', '2017-06-01 14:01:44'),
(41, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:02:15', '2017-06-01 14:02:15'),
(42, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:02:26', '2017-06-01 14:02:26'),
(43, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:03:18', '2017-06-01 14:03:18'),
(44, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:03:23', '2017-06-01 14:03:23'),
(45, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:04:17', '2017-06-01 14:04:17'),
(46, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:04:31', '2017-06-01 14:04:31'),
(47, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:05:14', '2017-06-01 14:05:14'),
(48, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:06:18', '2017-06-01 14:06:18'),
(49, 'admin@itelecom.com', '/dnevnik-prijava?email=sabanovic', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:06:22', '2017-06-01 14:06:22'),
(50, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:06:31', '2017-06-01 14:06:31'),
(51, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:06:54', '2017-06-01 14:06:54'),
(52, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:08:23', '2017-06-01 14:08:23'),
(53, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:08:51', '2017-06-01 14:08:51'),
(54, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:08:54', '2017-06-01 14:08:54'),
(55, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:08:56', '2017-06-01 14:08:56'),
(56, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:09:42', '2017-06-01 14:09:42'),
(57, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:09:46', '2017-06-01 14:09:46'),
(58, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:11:00', '2017-06-01 14:11:00'),
(59, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:11:01', '2017-06-01 14:11:01'),
(60, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:11:40', '2017-06-01 14:11:40'),
(61, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:11:42', '2017-06-01 14:11:42'),
(62, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:14:36', '2017-06-01 14:14:36'),
(63, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:14:43', '2017-06-01 14:14:43'),
(64, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:15:34', '2017-06-01 14:15:34'),
(65, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:17:40', '2017-06-01 14:17:40'),
(66, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:17:43', '2017-06-01 14:17:43'),
(67, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:25:04', '2017-06-01 14:25:04'),
(68, 'admin@itelecom.com', '/dnevnik-prijava?email=', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:25:07', '2017-06-01 14:25:07'),
(69, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:25:58', '2017-06-01 14:25:58'),
(70, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:26:03', '2017-06-01 14:26:03'),
(71, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:26:08', '2017-06-01 14:26:08'),
(72, 'admin@itelecom.com', '/dnevnik-prijava?email=asa', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:26:15', '2017-06-01 14:26:15'),
(73, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:26:21', '2017-06-01 14:26:21'),
(74, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:35:49', '2017-06-01 14:35:49'),
(75, 'admin@itelecom.com', '/dnevnik-prijava?email=', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:35:51', '2017-06-01 14:35:51'),
(76, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:30', '2017-06-01 14:42:30'),
(77, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:32', '2017-06-01 14:42:32'),
(78, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:40', '2017-06-01 14:42:40'),
(79, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:42', '2017-06-01 14:42:42'),
(80, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:44', '2017-06-01 14:42:44'),
(81, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:42:46', '2017-06-01 14:42:46'),
(82, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:44:40', '2017-06-01 14:44:40'),
(83, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:45:05', '2017-06-01 14:45:05'),
(84, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:45:15', '2017-06-01 14:45:15'),
(85, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:45:27', '2017-06-01 14:45:27'),
(86, 'admin@itelecom.com', '/dnevnik-prijava', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:45:54', '2017-06-01 14:45:54'),
(87, 'admin@itelecom.com', '/dnevnik-prijava?email=saban', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:45:57', '2017-06-01 14:45:57'),
(88, 'admin@itelecom.com', '', '127.0.0.1', 'AUTHORIZED', '2017-06-01 14:50:40', '2017-06-01 14:50:40'),
(89, 'admin@itelecom.com', '/fiksna-telefonija', '127.0.0.1', 'AUTHORIZED', '2017-06-01 15:15:50', '2017-06-01 15:15:50'),
(90, 'avelic15@etf.unsa.ba', '/mobilna-telefonija', '127.0.0.1', 'AUTHORIZED', '2017-06-01 16:14:49', '2017-06-01 16:14:49'),
(91, 'avelic15@etf.unsa.ba', '/tv', '127.0.0.1', 'AUTHORIZED', '2017-06-01 16:14:52', '2017-06-01 16:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amir.sabanovic@outlook.com', '55051b293ca2cf92fdeb9a080b850740701f78b77cbf58e0946b7455d77d8bd7', '2017-06-01 16:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('admin','worker','client') COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `type`, `telephone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@itelecom.com', '$2y$10$Do5xuinCCvlpO5gHUgdE/ug7AhdD5InpDbT9uU.0cb5w0dCvSe4Mm', 'admin', '+38761100100', 'vIEom4wifflSmTNCJNFKQ3h1Hpd9ofLEoGn9PQZSgw2Ung5VocvvLUTuMehE', '2017-06-01 00:16:26', '2017-06-01 16:16:58'),
(2, 'Amir Šabanović', 'asabanovic3@gmail.com', '$2y$10$xQfELcFQXQEVOouzBJmfVOst.87x7giXmEC8tQd.p4/eRcRL5k0PW', 'worker', '+38761083081', 'gHakQseX9i2vMfJKIjBG9vpA4PklVOPtCwXeeNO0SK5DUCYgCvLobj2w6MVW', '2017-06-01 02:19:08', '2017-06-01 15:41:55'),
(3, 'Amir Shabanovich', 'amir.sabanovic@outlook.com', '$2y$10$YEFOF9u5UuG1L1u2I5XSEeFWYtAirNIANqHdiYD7mtGDPMmhODOZW', 'worker', '+38761083081', 'zx09qsTktb43XpM0ideomsxQugyMe6XEOvJSQYTjd2m674x2AqmJvF0zgNKr', '2017-06-01 02:34:13', '2017-06-01 02:38:57'),
(10, 'Adin Velic', 'avelic4@etf.unsa.ba', '$2y$10$ybPjtkuiiQUAot6wgNrvVeXeKDWEVhttLQK3pMkSX5AzxbJbCWRv.', 'worker', '061929292', NULL, '2017-06-01 15:08:42', '2017-06-01 15:08:42'),
(8, 'Adin Velic', 'avelic2@etf.unsa.ba', '$2y$10$R8qH2YmgFYL.jJo1TT1F6u9/8d7jBN/ExKz34PflgoO1Nc2ONWdAe', 'worker', '061929292', NULL, '2017-06-01 15:05:45', '2017-06-01 15:05:45'),
(9, 'Adin Velic', 'avelic3@etf.unsa.ba', '$2y$10$5NvTbSritvYINRNo2IeLV.1TkjYJG/OxUvhH1l91ZO/8CLiXQx/jO', 'worker', '061929292', NULL, '2017-06-01 15:07:35', '2017-06-01 15:07:35'),
(11, 'Adin Velic', 'avelic5@etf.unsa.ba', '$2y$10$pLfp5.66oGFAE2BNm5fZFuj5v1ZM9fdfW4RppOkVdEIi3Fr0E97Mi', 'worker', '061929292', NULL, '2017-06-01 15:10:47', '2017-06-01 15:10:47'),
(12, 'Adin Velic', 'avelic6@etf.unsa.ba', '$2y$10$fYPxe6Ol5Z3jHWXrw.OBhuCNhuV/VtRwZzoKvzUFJGkGqStQ9Lcd6', 'worker', '061929292', NULL, '2017-06-01 15:11:31', '2017-06-01 15:11:31'),
(13, 'Adin Velic', 'avelic7@etf.unsa.ba', '$2y$10$2Mrd/8vjAPc3g7Igooo7Ve7shOuQkz0Slbgng23IAt1euD4qa2ARu', 'worker', '061929292', NULL, '2017-06-01 15:12:18', '2017-06-01 15:12:18'),
(14, 'Adin Velic', 'avelic9@etf.unsa.ba', '$2y$10$QiVzGS6Qza6OBT/SMbXLJei6VTYfv/T7lPJU4rDgoivAziFyBpHxq', 'worker', '061061061', NULL, '2017-06-01 15:13:29', '2017-06-01 15:13:29'),
(15, 'Adin Velic', 'avelic10@etf.unsa.ba', '$2y$10$dnxhMIzNePL1iIIOEOzImO0ricEJsURWT7zSJXothWQwRZxRJcBai', 'worker', '061061061', NULL, '2017-06-01 15:13:59', '2017-06-01 15:13:59'),
(16, 'Adin Velic', 'avelic12@etf.unsa.ba', '$2y$10$BcCkicOuc0XqESwN731skuKFmO.MbwJshMfau0tEbs3MDXc3pkude', 'worker', '061061061', NULL, '2017-06-01 15:14:47', '2017-06-01 15:14:47'),
(17, 'Adin Velic', 'avelic15@etf.unsa.ba', '$2y$10$JbRVC67BYSDWBbX7NBAK7.cjZ3mLfUBhScOkPO0Stx/3TZGqY.oS6', 'worker', '061083081', 'JaRLk5v9XAJWt4nO6fspXHRCmscNThpJI7hFo9fMiKkf3wn3Pz5yuFLJ0JGG', '2017-06-01 16:14:14', '2017-06-01 16:14:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_visits`
--
ALTER TABLE `page_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `page_visits`
--
ALTER TABLE `page_visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
