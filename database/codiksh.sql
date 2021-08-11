-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 01:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codiksh`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `companies_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `companies_id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 27, 'Rahul', 'Patel', 'patel@gmail.com', '9941599815', '2021-08-10 06:08:13', '2021-08-10 06:08:13'),
(2, 25, 'Mohan', 'Patidar', 'poat@gmail.com', '7788554411', '2021-08-10 06:08:41', '2021-08-10 06:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1:Admin, 0:Companies',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `logo`, `website`, `remember_token`, `is_admin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Qr0tkpRzgKOOMfQuTLRMk.QRfDqQVbvIZIbgQ6c6cu6KqPQ2J0aja', NULL, NULL, '2THa48GNtKAKXJ9pEkF8n5k3nmeDeslryVQMgMQSm12vK88uEdDkMaFvpbk0', 1, 0, '2021-08-10 08:21:31', '2021-08-10 06:08:53'),
(22, 'Asus', 'asus@gmail.com', NULL, NULL, NULL, 'https://stackoverflow.com/', NULL, 0, 0, '2021-08-10 06:00:07', '2021-08-10 06:00:07'),
(23, 'Cisco', 'cisco@gmail.com', NULL, NULL, NULL, 'http://localhost/laravel/codiksh/', NULL, 0, 0, '2021-08-10 06:00:57', '2021-08-10 06:00:57'),
(24, 'Yahoo', 'yahoo@gmail.com', NULL, NULL, NULL, 'https://www.google.com', NULL, 0, 0, '2021-08-10 06:01:25', '2021-08-10 06:01:25'),
(25, 'Volkswagen', 'volkswagen@gmail.com', NULL, NULL, NULL, 'https://stackoverflow.com', NULL, 0, 0, '2021-08-10 06:02:04', '2021-08-10 06:02:04'),
(26, 'The good', 'good@gmail.com', NULL, NULL, NULL, 'http://localhost', NULL, 0, 0, '2021-08-10 06:03:02', '2021-08-10 06:03:02'),
(27, 'News', 'news@gmail.com', NULL, NULL, NULL, 'http://localhost/newa', NULL, 0, 0, '2021-08-10 06:03:22', '2021-08-10 06:03:22'),
(28, 'There are', 'therw@gmail.com', NULL, NULL, NULL, 'https://www.oberlo.in/', NULL, 0, 0, '2021-08-10 06:03:45', '2021-08-10 06:03:45'),
(29, 'Company names', 'name@gmail.com', NULL, NULL, NULL, 'http://localhost/laravel/', NULL, 0, 0, '2021-08-10 06:04:13', '2021-08-10 06:04:13'),
(30, 'Producing great', 'producing@gmail.com', NULL, NULL, NULL, 'http://localhost/laravel/admin', NULL, 0, 0, '2021-08-10 06:04:50', '2021-08-10 06:04:50'),
(31, 'Store', 'store@gmail.com', NULL, NULL, NULL, 'http://store', NULL, 0, 0, '2021-08-10 06:05:14', '2021-08-10 06:05:14'),
(32, 'Catchy business', 'busiiness@gmail.com', NULL, NULL, 'HIPDeD9KvgYwFkHvNUOl151F6ohUZ6.jpg', 'http://localhost/laravel/Heloo', NULL, 0, 0, '2021-08-10 06:05:50', '2021-08-10 06:05:50'),
(33, 'Find that', 'the@gmail.com', NULL, NULL, NULL, 'http://localhost/12', NULL, 0, 0, '2021-08-10 06:06:23', '2021-08-10 06:06:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
