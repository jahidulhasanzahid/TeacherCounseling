-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 08:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher_counseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mayen Uddin', 'mayen@admin.com', '$2y$10$fKDfFivYi.Hg4yK5f.kFQuzZ2C6V3biQPkRzTcoy/8Dzt9VSW70tu', '2019-11-01 13:01:58', '2019-11-01 13:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotOne` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotTwo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotThree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotFour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotFive` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotSix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `teacher_code`, `day`, `slotOne`, `slotTwo`, `slotThree`, `slotFour`, `slotFive`, `slotSix`, `created_at`, `updated_at`) VALUES
(3, 'RS', 'Saturday', 'Class', 'Counseling', 'Counseling', 'Class', 'Class', 'Off', '2019-10-18 02:27:16', '2019-10-18 03:32:51'),
(4, 'RS', 'Sunday', 'Class', 'Class', 'Class', 'Counseling', 'Off', 'Class', '2019-10-18 00:13:09', '2019-10-18 01:16:13'),
(5, 'RS', 'Monday', 'Off', 'Class', 'Class', 'Class', 'Off', 'Off', '2019-10-18 00:35:10', '2019-10-18 00:35:10'),
(6, 'RS', 'Tuesday', 'Class', 'Class', 'Class', 'Class', 'Class', 'Class', '2019-10-18 02:51:57', '2019-10-18 03:33:09'),
(7, 'FR', 'Saturday', 'Off', 'Off', 'Class', 'Class', 'Class', 'Class', '2019-10-18 03:34:54', '2019-10-18 03:35:45'),
(8, 'FR', 'Sunday', 'Class', 'Counseling', 'Class', 'Counseling', 'Off', 'Class', '2019-10-18 03:37:20', '2019-10-18 03:37:20');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_10_18_044025_create_information_table', 2),
(6, '2019_11_01_184644_create_admins_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `teacher_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `teacher_code`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rakiba Sultana', 'rakiba0454@gmail.com', NULL, '$2y$10$EzXtrtkO8MPUtAwf8HMWZOsu64FzoOeGMQ/qYuDO0zBtI9V8.LeL6', 123456789, 'RS', 'pending', NULL, '2019-10-17 14:32:08', '2019-10-17 14:32:08'),
(3, 'Foysal Rana', 'foysal@gmail.com', NULL, '$2y$10$ESNwdDfiM4oUzi4fBUPlLuU3d05towsmO0Lgt7AWeWNyH8m8jy79W', 123456789, 'FR', 'pending', NULL, '2019-10-18 03:34:08', '2019-10-18 03:34:08'),
(4, 'Sagor', 'sagor@gmail.com', NULL, '$2y$10$BZpqkJn/SLqHMQTaqt3fW.rKNA9xZlxOkrDPbeBPB66pVwB87O5Oe', 12345678, 'SB11', 'Active', NULL, '2019-11-01 13:39:35', '2019-11-01 13:39:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
