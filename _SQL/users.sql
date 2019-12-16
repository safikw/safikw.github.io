-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 18.11
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'admin', 'Yudi febri', 'Yudi@gmail.com', NULL, '$2y$10$MfoVm15XP7eMbWiLFk0yd.cPOKq7unVi6bwhKgjuo/mw.IuyB8eBy', NULL, '2019-12-08 17:46:27', '2019-12-08 17:46:27', 1),
(9, 'admin', 'rizhann', 'rizhann@gmail.com', NULL, '$2y$10$mp71ep52VmaFPGURzAcoyOaJLCPQ0rGds9OqSLJhgmnO6qXaYHCYu', NULL, '2019-12-10 23:20:58', '2019-12-10 23:20:58', 0),
(12, 'user', 'kole', 'kole@gmail.com', NULL, '$2y$10$QNvG73McwJP9g.yqwEpdg.W6HWaVTqOFBAn3b4Tzx28NlKmP8XDBi', NULL, '2019-12-11 20:51:03', '2019-12-11 20:51:03', 0),
(13, 'user', 'mung', 'mung@gmail.com', NULL, '$2y$10$Azlyc8arRUbRXgfn2TBu1OEKyTcNa.F.x1SDMfAvVIErUQpp9Ff.a', NULL, '2019-12-14 23:01:53', '2019-12-14 23:01:53', 0),
(14, 'user', 'lala', 'lalal@gmail.com', NULL, '$2y$10$/rIeTESw.egqdpgJAVgBp.KI4Oay0ihASCmgggCvlY/6mTOznZi4u', NULL, '2019-12-14 23:06:30', '2019-12-14 23:06:30', 0),
(15, 'user', 'mbuh', 'mbuh@gmail.com', NULL, '$2y$10$M5AoJNGSEF.ttuCLi7o6aOkJmo9yhiO9qta8BCr9J0KQO2d73dA6G', NULL, '2019-12-14 23:08:24', '2019-12-14 23:08:24', 0),
(16, 'user', 'neo', 'neo@gmail.com', NULL, '$2y$10$dPjKuWKrsjXrx5wefEqka.yRKmd3Wzum47K89NaXI0cTeZJQMWxf6', NULL, '2019-12-15 06:52:10', '2019-12-15 06:52:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
