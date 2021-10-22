-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 01:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasdashboard`
--

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
-- Table structure for table `iframes`
--

CREATE TABLE `iframes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dashboard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iframes`
--

INSERT INTO `iframes` (`id`, `nama_dashboard`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Safe Secure', 'http://103.129.221.106:3001/public/dashboard/50a9fb48-3f21-4318-8cfc-12c80e532b8f', NULL, '2021-10-22 04:14:02'),
(2, 'Coziness', 'http://103.129.221.106:3001/public/dashboard/f06e6ecf-07db-49b9-9245-591987948be0', NULL, '2021-10-22 04:15:06'),
(3, 'Social Distancing', 'http://103.129.221.106:3001/public/dashboard/ddbcbb2d-46d5-4598-a0be-1827b569e6bd', NULL, '2021-10-22 04:15:15'),
(4, 'Cumulative Counting', 'http://103.129.221.106:3001/public/dashboard/28c98d62-9867-41f0-8c7b-c09d78910dd1', NULL, '2021-10-22 04:15:24'),
(5, 'Face Recognition', 'http://103.129.221.106:3001/public/dashboard/932bb324-7924-40c8-8d5a-b221617c2046', NULL, '2021-10-22 04:15:34'),
(6, 'Kondisi dan Sarana Prasarana Stasiun', 'http://103.129.221.106:3001/public/dashboard/a55322b8-c666-4737-b3ec-4cb88a332953', NULL, '2021-10-22 04:15:48'),
(7, 'Metadata Social Media', 'http://103.129.221.106:3001/public/dashboard/70b1bb72-0528-4adb-9dfe-10d04b53e6e9', NULL, '2021-10-22 04:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `iframe_role`
--

CREATE TABLE `iframe_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_15_133733_role', 2),
(6, '2021_10_15_144418_create_roles_table', 3),
(7, '2021_10_22_072303_create_iframes_table', 4),
(8, '2021_10_22_075001_iframe_role', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'User', NULL, '2021-10-22 04:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rizman', 1, 'rizman@gmail.com', NULL, '$2y$10$iYURu568UbRk0SsKNHgZyetbRXLQrQ/ysq3o4qkq2oMDFAS3zhC5u', 'fMXzk2x4RvLKhvM2VWdEehuyUib6gpRp9VusEDDyUO4rERW41kgmoeEuAG6U', '2021-10-10 21:12:25', '2021-10-10 21:12:25'),
(2, 'Maulana', 2, 'maulana@gmail.com', NULL, '$2y$10$pqNKRWCelsp2HBgEPxW3X.kESqReeV9Mzstkdx.2hUEP2UqOKU41q', 'EeeazBaIx0Xo5WkDSu0At4fgw7to6cyMu7ROuNJMYHO6jHCGDARaT3jXagDE', '2021-10-11 01:08:08', '2021-10-22 04:11:34'),
(4, 'Rizqi Maulana', 2, 'rizman768@gmail.com', NULL, '$2y$10$qHgXUHYlqsMge4HbXveCLucKXV9luS3I4fdG/NsqV3ek0Qr/tAsGC', NULL, '2021-10-11 21:58:41', '2021-10-11 21:58:41'),
(7, 'Diky Prayoga', 2, 'apaaja@gmail.com', NULL, '$2y$10$erh2xY95iJ.4E46o1o9kJejZ8A4rAsdq3ruMgvo6RNHNxO26X47jy', NULL, '2021-10-11 22:19:16', '2021-10-11 22:19:16'),
(9, 'Nadaa Marhama', 2, 'nadaa@gmail.com', NULL, '$2y$10$8IfVsWjcRGi77PqYChk7Tu57hZLILwBYXrIw3fN5cPB3piV8vS.ku', NULL, '2021-10-11 23:01:54', '2021-10-11 23:01:54'),
(10, 'Gandi', 2, 'ganas@gmail.com', NULL, '$2y$10$gOgJlKQXvm1nWg3rAJzyfu2W3AcUa4GAMv173QTCbW0n4JIGSI6tG', NULL, '2021-10-17 22:40:24', '2021-10-17 22:40:24'),
(12, 'admin1', 1, 'admin@gmail.com', NULL, '$2y$10$qWPWMGQi9uw4XxWo6IpW2O7nB4MUdMuWKIAOt28HEI9DDPHL3O4.W', NULL, '2021-10-17 22:45:00', '2021-10-17 22:45:00'),
(14, 'nada', 2, 'nada@gmail.com', NULL, '$2y$10$9aPlWdav8SeHN/DUeOikuOH9J45fMZnXDDxMTOtQMQYwHclxdNArm', NULL, '2021-10-21 20:19:11', '2021-10-21 20:19:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iframes`
--
ALTER TABLE `iframes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iframe_role`
--
ALTER TABLE `iframe_role`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iframes`
--
ALTER TABLE `iframes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `iframe_role`
--
ALTER TABLE `iframe_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
