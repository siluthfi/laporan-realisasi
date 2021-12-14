-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2021 at 10:54 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci,
  `new_values` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_04_120827_create_one_inputs_table', 1),
(6, '2021_12_04_120828_create_two_inputs_table', 1),
(7, '2021_12_04_120833_create_outputs_table', 1),
(8, '2021_12_12_102623_create_audits_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `one_inputs`
--

CREATE TABLE `one_inputs` (
  `id` bigint UNSIGNED NOT NULL,
  `digit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_ro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` enum('Umum','PPA I','PPA II','SKKI','PAPK','Admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capaian_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_target` int NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_jumlah` int NOT NULL,
  `rvo` double(8,2) NOT NULL,
  `rvo_maksimal` double(8,2) NOT NULL,
  `volume_target_realisasi` int NOT NULL,
  `capaian_realisasi` double(8,2) NOT NULL,
  `pagu` bigint NOT NULL,
  `rp` bigint NOT NULL,
  `capaian` double(8,2) NOT NULL,
  `sisa` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `one_inputs`
--

INSERT INTO `one_inputs` (`id`, `digit`, `kd_kro`, `kd_ro`, `bidang`, `nama_ro`, `capaian_ro`, `volume_target`, `satuan`, `volume_jumlah`, `rvo`, `rvo_maksimal`, `volume_target_realisasi`, `capaian_realisasi`, `pagu`, `rp`, `capaian`, `sisa`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '4847', 'CEH', '2', 'Umum', 'Nama Ro UMUM', NULL, 6, 'Kegiatan', 45, 7.50, 1.20, 1, 1.20, 15000000, 13000000, 0.87, 2000000, NULL, '2021-12-12 04:16:09', '2021-12-13 18:44:35'),
(3, '23', 'BMB', '1', 'PPA II', 'Nama Ro PPA II', NULL, 8, 'Laporan', 10, 1.25, 1.20, 1, 1.20, 1230000, 1000000, 0.81, 230000, NULL, '2021-12-13 06:43:27', '2021-12-13 18:42:16'),
(4, '4857', 'EAH', '1', 'PPA I', 'Nama Ro PPA I', NULL, 4, 'Rekomendasi', 2, 1.25, 1.20, 5, 0.24, 8000000, 6500000, 0.81, 1500000, NULL, '2021-12-13 18:39:52', '2021-12-13 18:53:48'),
(5, '3124', 'BMB', '2', 'SKKI', 'Nama Ro SKKI', NULL, 21, 'Dokumen', 20, 0.95, 0.95, 1, 0.95, 3000000, 1800000, 0.60, 1200000, NULL, '2021-12-13 18:46:46', '2021-12-13 18:47:14'),
(6, '1234', 'BMB', '1', 'PAPK', 'Nama Ro PAPK', NULL, 16, 'Laporan', 15, 0.94, 0.94, 2, 0.47, 9500000, 9400000, 0.99, 100000, NULL, '2021-12-13 18:49:33', '2021-12-13 18:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `outputs`
--

CREATE TABLE `outputs` (
  `id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bidang` enum('Umum','PPA I','PPA II','SKKI','PAPK') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran_pagu` bigint NOT NULL,
  `anggaran_realisasi` bigint NOT NULL,
  `output_target` int NOT NULL,
  `output_realisasi` int NOT NULL,
  `one_input_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `two_inputs`
--

CREATE TABLE `two_inputs` (
  `id` bigint UNSIGNED NOT NULL,
  `volume_capaian` int DEFAULT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `one_input_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `two_inputs`
--

INSERT INTO `two_inputs` (`id`, `volume_capaian`, `uraian`, `nomor_dokumen`, `tanggal`, `deleted_at`, `one_input_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'asd', '123231', '2021-12-30 16:00:00', '2021-12-13 07:29:37', 2, '2021-12-13 07:25:01', '2021-12-13 07:29:37'),
(2, 10, 'asdsad', 'asdsad', '2021-11-29 16:00:00', NULL, 2, '2021-12-13 07:39:53', '2021-12-13 07:48:11'),
(3, 23, 'sadas', '123213', '2021-12-13 16:00:00', NULL, 2, '2021-12-13 08:13:47', '2021-12-13 08:17:16'),
(4, 12, 'asdsad', 'dsasad', '2022-01-05 16:00:00', NULL, 2, '2021-12-13 08:13:58', '2021-12-13 08:17:21'),
(5, 1, 'Nama Uraian 1', '12345', '2021-12-13 16:00:00', NULL, 4, '2021-12-13 18:50:51', '2021-12-13 18:53:42'),
(6, 1, 'Nama Uraian 2', '12345', '2021-12-14 16:00:00', NULL, 4, '2021-12-13 18:51:05', '2021-12-13 18:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` enum('Umum','PPA I','PPA II','SKKI','PAPK','Admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `user_profile`, `nip`, `nomor_telepon`, `gender`, `bidang`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', '1639409757.jpg', '12345', '12345', 'Pria', 'Admin', '$2y$10$bQI1PON2/LBk738BqE1R6eEkC0cVbvoGYhjfpKgq3kMmBtzfcpBfq', NULL, NULL, NULL, '2021-12-13 18:36:45'),
(3, 'umum', 'umum', 'umum@mail.com', '1639402903.jpg', '12345', '12345', 'Pria', 'Umum', '$2y$10$BbMloE1xQ.Ey8l1iTIp6ge/3HcGfcick9CHgd84Qmkl13eaq6iR76', NULL, NULL, '2021-12-13 05:41:43', '2021-12-13 18:36:16'),
(4, 'ppai', 'ppai', 'ppai@mail.com', '1639449039.jpg', '12345', '12345', 'Pria', 'PPA I', '$2y$10$qQfPUlDkWjyYxqRttrPe8uN25KwxKEfetUzlYtZ0U5xPjZkNRCeXm', NULL, NULL, '2021-12-13 18:30:39', '2021-12-13 18:31:36'),
(5, 'ppaii', 'ppaii', 'ppaii@mail.com', 'user.png', '12345', '4566', 'Pria', 'PPA II', '$2y$10$PccY9wSLstxcbzDc/uMCNuLp40vb4vxa774YA4bEOY2NqgvnfPdVK', NULL, NULL, '2021-12-13 18:34:43', '2021-12-13 18:36:01'),
(6, 'skki', 'skki', 'skki@mail.com', 'user.png', '13245', '12345', 'Pria', 'SKKI', '$2y$10$L46O.piaUMnZA2MVcu3QhuqYHe9KJrMLuMTWLSGSmu5omL1fqPnNm', NULL, NULL, '2021-12-13 18:35:20', '2021-12-13 18:35:20'),
(7, 'papk', 'papk', 'papk@mail.com', 'user.png', '12345', '12345', 'Pria', 'PAPK', '$2y$10$iJbYZDawYsSY74.5tb93GOWVmXnR0rlK9Y6Dmh.TDJR1QO4ergYBW', NULL, NULL, '2021-12-13 18:35:48', '2021-12-13 18:36:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

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
-- Indexes for table `one_inputs`
--
ALTER TABLE `one_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outputs`
--
ALTER TABLE `outputs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `outputs_one_input_id_foreign` (`one_input_id`);

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
-- Indexes for table `two_inputs`
--
ALTER TABLE `two_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `one_inputs`
--
ALTER TABLE `one_inputs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `outputs`
--
ALTER TABLE `outputs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `two_inputs`
--
ALTER TABLE `two_inputs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `outputs`
--
ALTER TABLE `outputs`
  ADD CONSTRAINT `outputs_one_input_id_foreign` FOREIGN KEY (`one_input_id`) REFERENCES `one_inputs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
