-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 03:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubudiyah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jenis_pelanggaran`
--

CREATE TABLE `jenis_pelanggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggaran` varchar(255) NOT NULL,
  `sanksi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pelanggaran`
--

INSERT INTO `jenis_pelanggaran` (`id`, `nama_pelanggaran`, `sanksi`, `created_at`, `updated_at`) VALUES
(2, 'Tidak Sholat', 'Khataman di Pendopo Pengasuh', NULL, '2023-07-28 07:32:03'),
(3, 'Tidak Pakai Jubah', 'Al-Fatih 1000x', NULL, NULL),
(4, 'Tidak Menempati Shaf', 'Al-Fatih 150x', NULL, NULL),
(5, 'Lambat Jama\'ah', 'Ngaji di Kantor Ubudiyah', '2023-07-24 23:58:32', '2023-07-24 23:58:32'),
(11, 'Tidak Tarhim', 'Khataman 1 Asrama di pendopo Pengasuh', '2023-07-26 00:13:27', '2023-07-26 00:13:27');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_19_153806_create_pengontrols', 1),
(6, '2023_07_20_084020_pelanggaran', 2),
(7, '2023_07_20_085548_jenis_pelanggaran', 3),
(10, '2023_07_20_091353_admin', 4),
(11, '2023_07_27_142952_add_waktu_column_to_pelanggaran_table', 5),
(12, '2023_08_02_055231_add_role_column_to_users_table', 6);

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
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_santri` varchar(255) NOT NULL,
  `jenis_pelanggaran` varchar(255) NOT NULL,
  `asrama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nama_santri`, `jenis_pelanggaran`, `asrama`, `tgl`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Fauzen', 'Tidak Sholat', 'SUNAN KALIJOGO NO.12', '2023-07-25', '', NULL, '2023-07-28 07:32:16'),
(5, 'sdadas', 'Tidak Tahajjud', 'adada', '2021-12-12', '', '2023-07-21 01:47:07', '2023-07-21 01:47:07'),
(6, 'sdadas', 'Tidak Tahajjud', 'adada', '2021-12-12', '', '2023-07-21 01:47:16', '2023-07-21 01:47:16'),
(7, 'Rohiqi', 'Tidak Tahajjud', 'adada', '2021-12-12', '', '2023-07-21 01:48:22', '2023-07-25 00:15:24'),
(8, '12', 'Tidak Sholat', '12', '2021-12-12', '', '2023-07-21 01:48:41', '2023-07-24 20:52:01'),
(9, '121', 'Tidak Tahajjud', '12121', '1212-12-12', '', '2023-07-21 01:50:42', '2023-07-21 01:50:42'),
(12, '12', 'Tidak Tahajjud', '1212', '2122-12-12', '', '2023-07-21 02:06:57', '2023-07-21 02:06:57'),
(13, 'Arik', 'Tidak Menempati Shaf', 'Sunan Muria No.01', '2023-07-21', '', '2023-07-21 02:24:56', '2023-07-21 02:24:56'),
(14, 'Arik', 'Tidak Menempati Shaf', 'Sunan Muria No.01', '2023-07-21', '', '2023-07-21 02:25:13', '2023-07-21 02:25:13'),
(15, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:32:11', '2023-07-21 02:32:11'),
(16, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:34:20', '2023-07-21 02:34:20'),
(17, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:34:27', '2023-07-21 02:34:27'),
(18, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:35:30', '2023-07-21 02:35:30'),
(19, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:37:58', '2023-07-21 02:37:58'),
(20, 'Rohiqim', 'Tidak Sholat', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 02:42:20', '2023-07-21 02:42:20'),
(21, 'wqc', 'Tidak Tahajjud', 'xsqxw', '1212-12-12', '', '2023-07-21 02:46:28', '2023-07-21 02:46:28'),
(22, 'sxq', 'Tidak Sholat', 'qwxqw', '1212-12-12', '', '2023-07-21 02:47:51', '2023-07-21 02:47:51'),
(23, 'wsxwe', 'Tidak Sholat', 'wcwe', '1111-02-12', '', '2023-07-21 02:48:33', '2023-07-21 02:48:33'),
(24, 'wcwe', 'Tidak Sholat', 'qwxqwx', '1111-12-12', '', '2023-07-21 02:49:04', '2023-07-21 02:49:04'),
(25, 'asca', 'Tidak Tahajjud', 'aqw', '3333-12-12', '', '2023-07-21 02:51:04', '2023-07-21 02:51:04'),
(26, 'wecew', 'Tidak Sholat', 'wewe', '2322-03-12', '', '2023-07-21 02:55:02', '2023-07-21 02:55:02'),
(27, 'sabchks', 'Tidak Menempati Shaf', 'Sunan Kalijogo No.04', '2023-07-15', '', '2023-07-21 03:00:41', '2023-07-21 03:00:41'),
(28, 'Zaki', 'Tidak Pakai Jubah', 'Sunan Kalijogo No.04', '2023-07-21', '', '2023-07-21 06:45:04', '2023-07-21 06:45:04'),
(29, 'Zaki', 'Tidak Pakai Jubah', 'Sunan Kalijogo No.04', '2023-07-21', '', '2023-07-21 06:47:18', '2023-07-21 06:47:18'),
(30, 'Mahtum', 'Tidak Menempati Shaf', 'Sunan Kalijogo No.04', '2023-07-20', '', '2023-07-21 06:47:41', '2023-07-21 06:47:41'),
(31, 'Ilhan', 'Tidak Pakai Jubah', 'Sunan Drajad No.20', '2023-07-22', '', '2023-07-21 07:10:51', '2023-07-21 07:10:51'),
(32, 'Ilhan', 'Tidak Pakai Jubah', 'Sunan Drajad No.20', '2023-07-22', '', '2023-07-21 07:12:35', '2023-07-21 07:12:35'),
(33, 'Afil', 'Tidak Menempati Shaf', 'Sunan Gunung Jati', '2023-07-19', '', '2023-07-21 07:17:25', '2023-07-21 07:17:25'),
(34, 'Afil', 'Tidak Menempati Shaf', 'Sunan Gunung Jati', '2023-07-19', '', '2023-07-21 07:27:17', '2023-07-21 07:27:17'),
(35, 'As\'ad Alwi Shihab', 'Tidak Tahajjud', 'Sunan Muria No.01', '2023-07-22', '', '2023-07-22 07:06:35', '2023-07-22 07:06:35'),
(36, 'As\'ad Alwi Shihab', 'Tidak Tahajjud', 'Sunan Muria No.01', '2023-07-22', '', '2023-07-22 07:21:30', '2023-07-22 07:21:30'),
(37, 'Wakil', 'Tidak Sholat', 'Sunan Kudus No.05', '2023-07-23', '', '2023-07-22 21:16:07', '2023-07-22 21:16:07'),
(50, 'andi', 'Tidak Sholat', 'SUNAN KALIJOGO NO.16', '2023-07-27', NULL, '2023-07-27 08:17:12', '2023-07-27 08:17:12'),
(51, 'Rizal', 'Tidak Sholat', 'SUNAN KALIJOGO NO.16', '2023-07-27', 'Dzuhur', '2023-07-27 08:17:36', '2023-07-28 07:32:34'),
(52, 'Sultan', 'Tidak Pakai Jubah', 'SUNAN KALIJOGO NO.17', '2023-07-29', 'Maghrib', '2023-07-28 20:59:24', '2023-07-28 21:00:18'),
(53, 'Imron', 'Lambat Jama\'ah', 'MQ.13', '2023-07-29', 'Subuh', '2023-07-28 21:00:54', '2023-07-28 21:00:54'),
(54, 'Anzori', 'Tidak Sholat', 'Takmir Masjid No.01', '2023-08-01', 'Subuh', '2023-07-31 18:03:46', '2023-07-31 18:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `pengontrols`
--

CREATE TABLE `pengontrols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `daerah_kontrol` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengontrols`
--

INSERT INTO `pengontrols` (`id`, `nama`, `daerah_kontrol`, `created_at`, `updated_at`) VALUES
(1, 'Mahtum', 'Sunan Drajat', NULL, '2023-08-02 08:59:41'),
(2, 'Rifki Holiyanto', 'Sunan Bonang', '2023-07-29 00:20:13', '2023-07-30 17:50:26'),
(5, 'Andi', 'Sunan Giri', '2023-08-01 22:39:50', '2023-08-01 22:39:50'),
(6, 'Abdul qodir Jaelani Amd.Pi', 'Sunan Kalijogo', '2023-08-01 22:40:28', '2023-08-01 22:40:28');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','pengontrol') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'mas admin', 'admin@gmail.com', NULL, '$2y$10$FA6k9LTaoCqqq0n8HcWAOOPJp/i54tI54vwbfWpNhzz6DXEn7U/X2', NULL, '2023-08-01 23:35:40', '2023-08-01 23:35:40', 'admin'),
(2, 'mas pengontrol', 'pengontrol@gmail.com', NULL, '$2y$10$nmEOPp/3FuI/YfSb3u6rCOSmuhukmeo8/cdfeXGLxkF2hl.pXjuB6', NULL, '2023-08-01 23:35:40', '2023-08-01 23:35:40', 'pengontrol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
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
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengontrols`
--
ALTER TABLE `pengontrols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pengontrols`
--
ALTER TABLE `pengontrols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
