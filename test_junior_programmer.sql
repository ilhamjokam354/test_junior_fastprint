-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 21.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_junior_programmer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_16_142845_create_produk_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `kategori`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 12500, 'L QUEENLY', 'bisa dijual', NULL, NULL),
(2, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(3, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(4, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(5, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(6, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(7, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(8, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(9, 'ARM PENDEK MODEL U', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(10, 'ARM SUPPORT KECIL', 13000, 'L MTH TABUNG (LK)', 'tidak bisa dijual', NULL, NULL),
(11, 'ARM SUPPORT KOTAK PUTIH', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(12, 'ARM SUPPORT PENDEK POLOS', 13000, 'L MTH TABUNG (LK)', 'bisa dijual', NULL, NULL),
(13, 'ARM SUPPORT S IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(14, 'ARM SUPPORT T (IMPORT)', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual', NULL, NULL),
(15, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, 'L MTH TABUNG (LK)', 'bisa dijual', NULL, NULL),
(16, 'BLACK LASER TONER FP-T3 (100gr)', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual', NULL, NULL),
(17, 'BODY PRINTER CANON IP2770', 500, 'SP MTH SPAREPART (LK)', 'bisa dijual', NULL, NULL),
(18, 'BODY PRINTER T13X', 15000, 'SP MTH SPAREPART (LK)', 'bisa dijual', NULL, NULL),
(19, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual', NULL, NULL),
(20, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(21, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual', NULL, NULL),
(22, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(23, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(24, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual', NULL, NULL),
(25, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(26, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual', NULL, NULL),
(27, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(28, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual', NULL, NULL),
(29, 'BOTOL KOTAK 100ML LK', 1000, 'L MTH AKSESORIS (LK)', 'bisa dijual', NULL, NULL),
(30, 'BOTOL 10ML IM', 1000, 'S MTH STEMPEL (IM)', 'tidak bisa dijual', NULL, NULL),
(35, 'TINTA CANON HITAM', 10000, 'INK', 'bisa dijual', '2021-06-16 12:22:53', '2021-06-16 12:22:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$Y8BSwXrciPi4Tbu504Bp8.vNY.4CUM/X6HbIImvConkrgN2TPkMrC', '2021-06-16 09:01:17', '2021-06-16 09:01:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
