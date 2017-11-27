-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 12:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wl_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username_adm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username_adm`, `nama`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'rirfanuddin', 'Muhammad Rohman Irfanuddin', 'admin.irfan@mail.com', '$2y$10$yElOeGTIRM2K8RmEDLbpuuXj71XYo.vtGYzJsqW5O982pPxHnky9G', NULL, '2017-11-19 20:16:37', '2017-11-19 20:16:37'),
(4, 'ariqsw', 'M. Ariq Srihadi W.', 'admin.ariq@mail.com', '$2y$10$Hco33rV2cB30vG5NgiRHDewwWQehYvOXykrrHma374S/yFBqOecGu', NULL, '2017-11-19 20:18:44', '2017-11-19 20:18:44'),
(5, 'adminirfan', 'Muhammad Rohman Irfanuddin', 'adminirfan@mail.com', '$2y$10$C1D9WCeJI/hV70DefRkTIO68pwvmmGZpctyLrw5IZz8iHCSobHeUK', 'h521Ek6FdieqWzxfVfNxPsX1G5pp9inb5mnS6INPfjH0dhoEZKnxfpaRb21A', '2017-11-21 20:19:46', '2017-11-21 20:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `username_adm` varchar(191) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi_berita` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keretas`
--

CREATE TABLE `keretas` (
  `id` int(11) NOT NULL,
  `id_ka` char(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `username_adm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keretas`
--

INSERT INTO `keretas` (`id`, `id_ka`, `nama`, `jenis`, `jurusan`, `kapasitas`, `username_adm`) VALUES
(1, 'IA123', 'Bromo', 'on', 'Yogyakarta-Sleman', 50, 'adminirfan'),
(2, 'IA234', 'Bromo', 'Ekonomi', 'Yogyakarta-Jakarta', 120, 'adminirfan'),
(3, 'KA123', 'Argolawu', 'Ekonomi', 'Yogyakarta-Semarang', 120, '');

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
(3, '2017_11_19_203007_create_admins_table', 1);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nik` char(6) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nominal` int(7) NOT NULL,
  `sudah` tinyint(1) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pesan`
--

CREATE TABLE `transaksi_pesan` (
  `nik` char(6) NOT NULL,
  `id_ka` char(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `alamat`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123456', 'asegaf', 'klaten', 'asegaf@mail.com', '$2y$10$VgVR7Jfew0.Ph72s7/nDae7V2LxAZlZpMcMSeNQS1lPzwVUXJMgke', NULL, '2017-11-25 15:19:07', '2017-11-25 15:19:07'),
(2, 'KTP123', 'kemal', 'klaten', 'kemal@mail.com', '$2y$10$BHnr3OsF8uAfftv5BVxaXeoN1el8r/M/cgwSxxf2tH97jE8FdP03O', 'ypQwt7vqAfi68oJV3a8bEzkz9t5Rto4ghzmMYcVA6IkS946UvF9payUqGT72', '2017-11-25 15:35:28', '2017-11-25 15:35:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_adm_unique` (`username_adm`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `username_adm` (`username_adm`);

--
-- Indexes for table `keretas`
--
ALTER TABLE `keretas`
  ADD PRIMARY KEY (`id_ka`),
  ADD UNIQUE KEY `id_ka` (`id_ka`),
  ADD UNIQUE KEY `UNIQUE` (`id`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_pesan`
--
ALTER TABLE `transaksi_pesan`
  ADD PRIMARY KEY (`nik`,`id_ka`,`created_at`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_ka` (`id_ka`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keretas`
--
ALTER TABLE `keretas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi_pesan`
--
ALTER TABLE `transaksi_pesan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_transaksi_pembayaran_transaksi_pesan` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_pesan` (`id_transaksi`);

--
-- Constraints for table `transaksi_pesan`
--
ALTER TABLE `transaksi_pesan`
  ADD CONSTRAINT `id_ka` FOREIGN KEY (`id_ka`) REFERENCES `keretas` (`id_ka`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
