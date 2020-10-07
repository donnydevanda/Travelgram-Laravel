-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2020 at 11:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/UfeVNjoLwlHfQrtQTvJGPCBtOBUrrtzUVm7j9qZ0.jpeg', '2020-09-21 07:19:10', '2020-08-19 04:19:04', '2020-09-21 07:19:10'),
(2, 3, 'assets/gallery/txQRD9VGPWIsPWtEPNImQMY1vvsQPDM31pl0dPWt.jpeg', '2020-08-19 05:39:08', '2020-08-19 05:39:05', '2020-08-19 05:39:08'),
(3, 2, 'assets/gallery/E1nAeS8i3OohZP2jt3mgogcfrc7yuYpJnnvNvpHA.jpeg', '2020-09-21 07:19:12', '2020-08-19 17:06:35', '2020-09-21 07:19:12'),
(4, 3, 'assets/gallery/34CT2GX8BHYqDJdgAANrOcj4wfTzUfKv8x1uS6I8.jpeg', '2020-09-21 07:19:13', '2020-08-19 17:06:45', '2020-09-21 07:19:13'),
(5, 4, 'assets/gallery/40Jsa3v00ewkOVMOjjO41vh2wJW5jsNhMWggAaAA.jpeg', '2020-09-21 07:19:14', '2020-08-19 17:06:56', '2020-09-21 07:19:14'),
(6, 1, 'assets/gallery/MhHd6Cwtib4xK97FxjdN2aCeieMwgONloEpRBzO1.jpeg', NULL, '2020-09-21 07:22:43', '2020-09-21 07:22:43'),
(7, 2, 'assets/gallery/HcksxTCOxDkYOw8FMeSbbVtWyabB1Lmogb1IQIiD.jpeg', NULL, '2020-09-21 07:24:10', '2020-09-21 07:24:10'),
(8, 3, 'assets/gallery/kHF3wey17gKmSazhIujTVCv9iJqXpSFslvbJTe6Z.jpeg', NULL, '2020-09-21 07:25:24', '2020-09-21 07:28:55'),
(9, 4, 'assets/gallery/rbQycv56Jw8KGmDhvL4hzWiwLoUFgv1KRI8MTUeZ.jpeg', NULL, '2020-09-21 07:27:58', '2020-09-21 07:28:25');

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
(4, '2020_08_15_053622_create_travel_packages_table', 1),
(5, '2020_08_15_055133_create_galleries_table', 2),
(6, '2020_08_15_055647_create_transactions_table', 3),
(7, '2020_08_15_093405_create_transaction_details_table', 4),
(8, '2020_08_15_114717_add_roles_field_to_users_table', 5),
(9, '2020_08_18_073517_add_username_field_to_users_table', 6);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 190, 290, 'SUCCESS', NULL, '2020-08-19 12:44:31', '2020-08-19 16:49:17'),
(9, 4, 1, 0, 400, 'PENDING', NULL, '2020-08-20 01:39:50', '2020-08-20 01:39:54'),
(10, 3, 1, 190, 2190, 'PENDING', NULL, '2020-09-02 02:27:53', '2020-09-02 02:32:20'),
(11, 2, 1, 190, 590, 'PENDING', NULL, '2020-09-02 02:36:18', '2020-09-02 02:36:55'),
(12, 4, 1, 0, 400, 'PENDING', NULL, '2020-09-02 02:53:44', '2020-09-02 02:53:48'),
(13, 1, 1, 190, 690, 'PENDING', NULL, '2020-09-02 02:54:08', '2020-09-02 02:54:20'),
(14, 2, 1, 0, 200, 'PENDING', NULL, '2020-09-02 02:57:30', '2020-09-02 02:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'donny', 'ID', 1, '2021-01-01', NULL, '2020-08-19 12:46:04', '2020-08-19 12:46:04'),
(11, 9, 'donny', 'ID', 0, '2025-08-20', NULL, '2020-08-20 01:39:50', '2020-08-20 01:39:50'),
(12, 10, 'donny', 'ID', 0, '2025-09-02', NULL, '2020-09-02 02:27:53', '2020-09-02 02:27:53'),
(13, 10, 'dev', 'SG', 1, '2021-01-14', NULL, '2020-09-02 02:28:08', '2020-09-02 02:28:08'),
(14, 11, 'donny', 'ID', 0, '2025-09-02', NULL, '2020-09-02 02:36:18', '2020-09-02 02:36:18'),
(15, 11, 'dev', 'SG', 1, '2020-11-19', NULL, '2020-09-02 02:36:28', '2020-09-02 02:36:28'),
(16, 12, 'donny', 'ID', 0, '2025-09-02', NULL, '2020-09-02 02:53:44', '2020-09-02 02:53:44'),
(17, 13, 'donny', 'ID', 0, '2025-09-02', NULL, '2020-09-02 02:54:08', '2020-09-02 02:54:08'),
(18, 13, 'dev', 'SG', 1, '2020-12-12', NULL, '2020-09-02 02:54:17', '2020-09-02 02:54:17'),
(19, 14, 'donny', 'ID', 0, '2025-09-02', NULL, '2020-09-02 02:57:30', '2020-09-02 02:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', 'jakarta', 'Indonesia', 'Jakarta Heritage', 'Ondel-Ondel', 'Indonesian', 'Kerak Telor', '2020-12-25', '3D2N', 'Private Trip', 2500000, NULL, '2020-08-19 03:15:14', '2020-08-19 17:05:14'),
(2, 'Bandung', 'bandung', 'Indonesia', 'Sunda Heritage', 'None', 'Indonesian', 'Sate', '2020-10-15', '2D1N', 'Open Trip', 1250000, NULL, '2020-08-19 04:05:46', '2020-08-19 17:05:07'),
(3, 'Bali', 'bali', 'Indonesia', 'Bali Fun', 'Tari Kecak', 'Indonesian', 'Nasi Campur', '2020-10-23', '7D6N', 'Open Trip', 13450000, NULL, '2020-08-19 17:04:56', '2020-08-19 17:04:56'),
(4, 'Yogyakarta', 'yogyakarta', 'Indonesia', 'Yogya Heritage Fun', 'Upacara Labuhan', 'Indonesian', 'Gudeg', '2020-11-24', '5D4N', 'Open Trip', 4100000, NULL, '2020-08-19 17:06:17', '2020-08-19 17:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'USER',
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Donny', 'donny@gmail.com', '2020-08-18', '$2y$10$l04wWn9SVVAwSx8l2.8A5eZEFyYG6u4duDSwrPG0Eh2TOxMcDHFS.', NULL, '2020-08-18', '2020-08-18', 'USER', 'donny'),
(2, 'Devanda', 'devanda@gmail.com', NULL, '$2y$10$j1oir8W4NBC9fMzL8kT0tuWz9M2XkY48FM4YS2EIPfhKMSO4Gz6N2', NULL, '2020-08-18', '2020-08-18', 'ADMIN', 'devanda'),
(3, 'Dev', 'dev@gmail.com', NULL, '$2y$10$5sdL0jBji81OrQVVNX/hKuMWK1NKAgO5/S0mCud84o8E2dWmu79AO', NULL, '2020-08-20', '2020-08-20', 'USER', 'dev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
