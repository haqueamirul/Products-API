-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 09:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isra-arts-api`
--

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
(1, '2021_12_29_063132_create_posts_table', 1),
(2, '2021_12_29_071450_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Vel eligendi architecto omnis unde.', 'Sed perferendis incidunt sunt ut. Omnis placeat blanditiis perferendis necessitatibus delectus quae nostrum cum. Quis deserunt minus enim voluptas qui vitae et.', 'https://via.placeholder.com/640x480.png/000077?text=doloremque', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(2, 'Animi esse odit voluptatem voluptates error.', 'Ea aut facilis debitis perspiciatis. Error fugit fugit vel voluptas amet non neque. Vero sit quia necessitatibus praesentium ut expedita ab. Voluptatum omnis possimus quia quibusdam ea et delectus. Et voluptatem blanditiis quis.', 'https://via.placeholder.com/640x480.png/00cc11?text=impedit', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(3, 'Voluptatem enim debitis vel illum deserunt ab corporis mollitia.', 'Nihil ex cupiditate sapiente corporis nobis magnam quisquam. Veritatis voluptate veniam autem corrupti. Soluta ducimus et quisquam expedita. Qui iusto occaecati hic.', 'https://via.placeholder.com/640x480.png/001144?text=excepturi', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(4, 'Numquam odit illo in corporis cumque in.', 'Nam sed quia quae itaque. Id maiores nemo omnis ipsum non eum. Aspernatur eum dolorem in sit eos soluta.', 'https://via.placeholder.com/640x480.png/003322?text=accusamus', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(5, 'Ab et eius et voluptas eos.', 'Reprehenderit accusantium id aperiam nesciunt fugit cum. Saepe repudiandae optio nisi sit repellendus. Tempore aut nemo consectetur aut similique et architecto autem.', 'https://via.placeholder.com/640x480.png/008822?text=magnam', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(6, 'Sapiente vel ea magnam nisi omnis sit.', 'Soluta reprehenderit quia veritatis dolor sunt rerum. Magni velit possimus fugiat quas facilis. Pariatur ut laudantium deserunt molestias in. Quia adipisci dolore neque modi accusamus esse.', 'https://via.placeholder.com/640x480.png/001177?text=repellendus', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(7, 'Inventore animi inventore rerum fuga et magni aspernatur.', 'Fugiat ipsum aut ea perspiciatis impedit. Perspiciatis vel in occaecati sequi officiis vel dolores dolor. A et autem dicta et doloremque. Aliquid adipisci vel ipsa accusamus non in.', 'https://via.placeholder.com/640x480.png/009977?text=impedit', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(8, 'Quisquam nesciunt autem adipisci voluptas.', 'Eaque dolor culpa voluptate neque molestiae aut debitis est. Cum cumque ex est rem consequatur porro laborum.', 'https://via.placeholder.com/640x480.png/009933?text=sed', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(9, 'Quia vero quae consequatur quia.', 'Et minima id repellendus commodi. Vitae perspiciatis sed rerum iste. Adipisci ipsum aspernatur suscipit consequatur odit doloremque aspernatur. Dolores nam consequuntur ut ut.', 'https://via.placeholder.com/640x480.png/003322?text=aperiam', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(10, 'Suscipit temporibus tempora ullam rem.', 'Molestiae voluptatem magni ut itaque minus nostrum. Occaecati cumque consequatur reprehenderit accusantium itaque aut eius. Nisi nemo qui consequuntur maxime quis non alias minus. Sint eos tenetur ipsam ex.', 'https://via.placeholder.com/640x480.png/00ff11?text=porro', '2021-12-29 06:38:41', '2021-12-29 06:38:41'),
(12, 'this is test post new', 'body text will be here new', '1640767477UKMF-Finuial-1.png', '2021-12-29 08:44:37', '2021-12-29 08:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Allan Wisoky', 'batz.danyka@example.com', '$2y$10$Y.rlqhv/czlQ46gkgOJZ5.o9SBZ4Oiu7ix5CT21n9cEOc6LoyGOrq', '2021-12-29 07:20:25', '2021-12-29 07:20:25'),
(2, 'Hertha Schroeder', 'agustin23@example.org', '$2y$10$0F3xVKySVrZ44/aig4jIceJRCIrAfRdqXExvgp9qiyLshHSBoFToO', '2021-12-29 07:20:25', '2021-12-29 07:20:25'),
(3, 'Kaitlyn Metz V', 'gottlieb.conrad@example.com', '$2y$10$/v3j/KggKpkbEd8Mkpky2OT6wrrrGkC5WZvbIKoC.pcUaV80RnSaS', '2021-12-29 07:20:25', '2021-12-29 07:20:25'),
(4, 'Thurman Runte', 'gaylord.delpha@example.org', '$2y$10$y.BZGmWd9UMgMEXcdYxFluIIcvPl15hpMnkIQH9kFeVW67697T836', '2021-12-29 07:20:25', '2021-12-29 07:20:25'),
(5, 'Jessie Thiel', 'hkeeling@example.net', '$2y$10$rVzfpQp3z6KuCfxMbrN02Oyv6m6YlQEblo9yoKOv8mHeiOgtVBxga', '2021-12-29 07:20:25', '2021-12-29 07:20:25'),
(6, 'John', 'hello@gmail.com', '$2y$10$qIUq5J8shJ2uwnOZHyUipumToj/JfH9uASvIhKUnCjtApnaKct3PG', '2021-12-29 08:05:29', '2021-12-29 08:05:29'),
(7, 'John', 'hello123@gmail.com', '$2y$10$pgIrhDWB5OzTFuzW8GToDOrLb.eGol49SrGSrDTQpPxl5I1o1FOJ2', '2021-12-29 08:21:13', '2021-12-29 08:21:13'),
(8, 'Amirul', 'amirul@gmail.com', '$2y$10$FmlPLX/cz6qJ99BdPNSX/.PdhFHzdm1rzPnEZ.Be82yKexWQeO0Y6', '2021-12-29 11:49:17', '2021-12-29 11:49:17'),
(9, 'Amirul', 'amirul123@gmail.com', '$2y$10$XTz2mVwm.l5tstHe1.E.MORCPEOgcoMMK73yXT3rScm97bCJ3rC2G', '2021-12-30 08:18:28', '2021-12-30 08:18:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
