-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 01:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parag-sault`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(24, 'chilli powder', 'chilli-powder', 'this is chilli powder description', 1, '2024-06-03 07:39:53', '2024-06-03 07:39:53'),
(25, 'turmeric powder', 'turmeric-powder', 'turmeric powder', 1, '2024-06-03 07:40:09', '2024-06-03 07:40:09'),
(26, 'zeruu powder', 'zeruu-powder', 'zeruu powder', 1, '2024-06-03 07:41:39', '2024-06-03 07:41:39'),
(27, 'salt', 'salt', 'salt powder', 1, '2024-06-03 07:41:51', '2024-06-03 07:41:51'),
(28, 'daniya powder', 'daniya-powder', 'daniya powder', 1, '2024-06-03 07:43:10', '2024-06-03 07:43:10'),
(29, 'reshami mirch powder', 'reshami-mirch-powder', 'reshami mirch powder', 1, '2024-06-03 07:43:47', '2024-06-03 07:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile_number`, `product_name`, `state`, `city`, `address`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Apples', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'Test', '2024-05-31 05:08:01', '2024-05-31 05:08:01'),
(2, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Strawberry', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'hello', '2024-05-31 05:30:32', '2024-05-31 05:30:32'),
(3, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Strawberry', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'hello', '2024-05-31 05:31:12', '2024-05-31 05:31:12'),
(4, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Strawberry', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'hello', '2024-05-31 05:31:20', '2024-05-31 05:31:20'),
(5, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Strawberry', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'hello', '2024-05-31 05:31:34', '2024-05-31 05:31:34'),
(6, 'Ruhullah Maknojiya', 'maknojiyaruhullah786@gmail.com', '07046507369', 'Strawberry', 'Gujarat', 'BANASKANTHA', 'MASIYA FARM,CHADOTAR, 1', 'hello', '2024-05-31 05:31:46', '2024-05-31 05:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_15_073408_create_categories_table', 2),
(7, '2024_05_15_111118_create_products_table', 3),
(8, '2024_05_17_055408_create__general_settings_table', 4),
(10, '2024_05_27_053745_create_contactus_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('maknojiyaruhullah786@gmail.com', '$2y$12$m.OkGY3imQp7ThgOBIV3GOXXxVgbsYZ3/liXdRa6N9ba5H6r.PsJa', '2024-05-21 04:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `SKU` bigint(20) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` longtext NOT NULL,
  `price` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `images` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `SKU`, `product_quantity`, `product_description`, `price`, `status`, `images`, `created_at`, `updated_at`) VALUES
(51, 24, 'mirchi', 32, 2, 'mirchi is red color description', 24, 1, '[\"products\\/ibc9COUKKuqpyS17Cso0Wdti2ZyUTRw09rUdfmTp.jpg\"]', '2024-06-03 07:45:50', '2024-06-03 07:45:50'),
(52, 25, 'powder', 3, 3, 'powder', 5, 1, '[\"products\\/sTQoeS2rvBgKfeOeulULvglVdObmhV24LSAeoZrq.jpg\"]', '2024-06-03 07:47:22', '2024-06-03 07:47:22'),
(53, 26, 'zera powder', 34, 34, 'zera powder description', 454, 1, '[\"products\\/qUvFFI0DNZ3lx0cgB22XU3xk50C45BNDdQQp6O3k.jpg\"]', '2024-06-03 07:47:57', '2024-06-03 07:51:48'),
(54, 28, 'Salt powder', 34, 43, 'Salt powder description', 4, 1, '[\"products\\/bcL8ksTBiAV3Jkxv4hVEewx9yQ88wrLlhXPGFQ46.jpg\"]', '2024-06-03 07:48:54', '2024-06-03 07:49:46'),
(55, 27, 'Salt powder', 34, 43, 'Salt powder description', 4, 1, '[\"products\\/ssbLCQIkB06biFPbUhM3r5iAg0l6qm33p0vq3Y02.jpg\"]', '2024-06-03 07:48:55', '2024-06-03 07:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 1,
  `profile_image` varchar(255) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `profile_image`, `contact_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Ruhullah', 'maknojiyaruhullah786@gmail.com', NULL, '$2y$12$VsoRdQNkK7I1Ei.g6bLQk.ggR/hSnPcb.wZDwfKVFt1C5gr3E9BHi', 1, '1716535270.png', '9638585316', NULL, '2024-05-22 00:51:27', '2024-05-24 01:51:10'),
(5, 'demo', 'demo@gmail.com', NULL, '$2y$12$pXDiKa2B5QVsHiXWop3cl.sb8hgzHFSiDrOYUZLneqFTHmBr1a4hS', 1, '1716377188.jfif', '7046507369', NULL, '2024-05-22 05:54:11', '2024-05-22 05:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `_general_settings`
--

CREATE TABLE `_general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bazar_logo_site` varchar(255) NOT NULL,
  `home_page_banner` varchar(255) NOT NULL,
  `contact_info` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) NOT NULL,
  `Snapchat` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_general_settings`
--

INSERT INTO `_general_settings` (`id`, `bazar_logo_site`, `home_page_banner`, `contact_info`, `email`, `address`, `Facebook`, `Twitter`, `Snapchat`, `Instagram`, `created_at`, `updated_at`) VALUES
(2, 'uploads/I6HlpgcGAQff5mWxnl77LjyH6IzqD7n3sfbMRSDj.png', 'Cg73XFVoTl2mpu8E0IuoHv1hNPpmIbpFQwzkte30.png', 780458522, 'user@gmail.com', '123 Main Street, bengalulru, India.', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.snapchat.com', 'https://instagram.com', '2024-05-17 04:37:48', '2024-06-10 00:42:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_general_settings`
--
ALTER TABLE `_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_general_settings`
--
ALTER TABLE `_general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
