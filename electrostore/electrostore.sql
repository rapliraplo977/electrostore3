-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2026 pada 05.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrostore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Monitor'),
(3, 'Keyboard'),
(4, 'Mouse');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kode_produk` varchar(100) DEFAULT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `nama_produk`, `kode_produk`, `harga`, `gambar`, `deskripsi`, `stok`, `created_at`) VALUES
(1, 1, 'ASUS ROG G16', 'ASUS-ROG-G16-01', 15999000, 'asus-rog-g16.jpg', 'Laptop gaming performa tinggi dengan RTX 4060.', 10, '2026-06-12 09:17:00'),
(2, 2, 'LG Monitor 24', 'LG-MONITOR-24-01', 2499000, 'lg-monitor.jpg', 'Monitor IPS Full HD.', 15, '2026-06-12 09:17:00'),
(3, 3, 'Mechanical Keyboard RGB', 'KEYBOARD-RGB-01', 699000, 'keyboard-rgb.jpg', 'Keyboard gaming RGB mechanical.', 20, '2026-06-12 09:17:00'),
(4, 4, 'Logitech G102', 'LOGITECH-G102-01', 399000, 'logitech-g102.jpg', 'Mouse gaming presisi tinggi.', 30, '2026-06-12 09:17:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `nama_variasi` varchar(100) DEFAULT NULL,
  `nilai_variasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `nama_variasi`, `nilai_variasi`) VALUES
(1, 1, 'RAM', '8 GB'),
(2, 1, 'RAM', '16 GB'),
(3, 1, 'RAM', '32 GB'),
(4, 1, 'SSD', '512 GB'),
(5, 1, 'SSD', '1 TB'),
(6, 1, 'SSD', '2 TB'),
(7, 2, 'Ukuran', '24 Inch'),
(8, 2, 'Ukuran', '27 Inch'),
(9, 2, 'Ukuran', '32 Inch'),
(10, 3, 'Switch', 'Red Switch'),
(11, 3, 'Switch', 'Blue Switch'),
(12, 3, 'Switch', 'Brown Switch'),
(13, 4, 'Warna', 'Hitam'),
(14, 4, 'Warna', 'Putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `nama`, `rating`, `ulasan`, `created_at`) VALUES
(1, 1, 'Rafli', 5, 'Produk sangat bagus', '2026-06-12 20:26:33'),
(2, 9, 'Rafli', 5, 'Produk Bagus', '2026-06-12 20:27:06'),
(3, 5, 'Rafli', 3, 'Bagus sih..', '2026-06-12 20:32:40'),
(4, 3, 'Hamdi', 3, 'Produk Cukup Bagus', '2026-06-12 21:24:51'),
(5, 3, 'Rafli', 5, 'Memuaskan dan Bagus saya suka...', '2026-06-12 21:25:36'),
(6, 9, 'Ariel', 3, 'Lumayan...', '2026-06-13 02:41:18'),
(7, 4, 'Hamdi', 3, 'Produk Cukup Bagus', '2026-06-13 02:43:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`) VALUES
(1, 'Rafli', 'user@gmail.com', 'rafli123', '2026-06-11 06:40:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
