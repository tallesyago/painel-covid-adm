-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 07:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `casos`
--

CREATE TABLE `casos` (
  `idCaso` int(11) NOT NULL,
  `suspeitosCaso` int(11) NOT NULL,
  `confirmadosCaso` int(11) NOT NULL,
  `descartadosCaso` int(11) NOT NULL,
  `obitosCaso` int(11) NOT NULL,
  `recuperadosCaso` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casos`
--

INSERT INTO `casos` (`idCaso`, `suspeitosCaso`, `confirmadosCaso`, `descartadosCaso`, `obitosCaso`, `recuperadosCaso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 133, 555, 133, 135, 134, '0000-00-00 00:00:00', '2020-05-19 09:58:21', '0000-00-00 00:00:00'),
(2, 3, 3, 3, 3, 3, '0000-00-00 00:00:00', '2020-05-19 09:59:52', '2020-05-19 09:59:52'),
(3, 2, 2, 2, 2, 2, '2020-05-19 10:03:51', '2020-05-19 10:06:58', '2020-05-19 10:06:58'),
(4, 33, 323, 3, 3, 3, '2020-05-19 10:07:03', '2020-05-19 10:07:03', '0000-00-00 00:00:00'),
(5, 1, 1, 1, 1, 1, '2020-05-19 16:23:45', '2020-05-19 16:23:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20121031100537', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1589910572, 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` text NOT NULL,
  `conteudoNoticia` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `conteudoNoticia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'teste', 'teste', '2020-05-18 15:53:20', '2020-05-18 16:12:37', '2020-05-18 16:12:37'),
(16, 'teste', 'teswte', '0000-00-00 00:00:00', '2020-05-18 21:18:35', '2020-05-18 21:18:35'),
(17, 'cacaca', 'cacac', '0000-00-00 00:00:00', '2020-05-18 21:18:44', '2020-05-18 21:18:44'),
(18, 'dasdsasad', 'das', '2020-05-18 17:36:42', '2020-05-18 21:24:35', '2020-05-18 21:24:35'),
(19, 'cachaça', 'coie', '2020-05-18 17:36:52', '2020-05-18 21:36:03', '2020-05-18 21:36:03'),
(20, 'd', 'd', '2020-05-18 20:33:23', '2020-05-18 21:35:32', '2020-05-18 21:35:32'),
(21, 'coco', 'cococ', '2020-05-18 20:34:39', '2020-05-18 21:36:38', '2020-05-18 21:36:38'),
(22, 'd', 'd', '2020-05-18 20:35:19', '2020-05-18 21:36:55', '2020-05-18 21:36:55'),
(23, 'cococo', 'cococ', '2020-05-18 20:35:33', '2020-05-18 21:38:14', '2020-05-18 21:38:14'),
(24, 'd', 'd', '2020-05-18 20:35:49', '2020-05-18 21:37:35', '2020-05-18 21:37:35'),
(25, 'd', 'd', '2020-05-18 20:37:23', '2020-05-18 21:32:36', '2020-05-18 21:32:36'),
(26, 'd', 'd', '2020-05-18 21:38:27', '2020-05-18 21:38:29', '2020-05-18 21:38:29'),
(27, 'd', 'd', '2020-05-18 21:38:54', '2020-05-18 21:39:48', '2020-05-18 21:39:48'),
(28, 'ddsad', 'ddasdsa', '2020-05-18 21:38:59', '2020-05-18 21:39:00', '2020-05-18 21:39:00'),
(29, 'dasd', 'dasdsa', '2020-05-18 21:39:39', '2020-05-18 21:40:51', '2020-05-18 21:40:51'),
(30, 'dasddas', 'dasdsadas', '2020-05-18 21:39:41', '2020-05-18 21:39:49', '2020-05-18 21:39:49'),
(31, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:43', '2020-05-18 21:59:19', '2020-05-18 21:59:19'),
(32, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:43', '2020-05-18 21:39:50', '2020-05-18 21:39:50'),
(33, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 21:59:21', '2020-05-18 21:59:21'),
(34, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 22:00:47', '2020-05-18 22:00:47'),
(35, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 22:24:05', '2020-05-18 22:24:05'),
(36, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:45', '2020-05-18 22:26:05', '2020-05-18 22:26:05'),
(37, 'melancia', 'batata', '2020-05-18 21:39:45', '2020-05-18 22:37:33', '2020-05-18 22:37:33'),
(38, '2', 'd', '2020-05-18 21:42:14', '2020-05-18 21:42:20', '2020-05-18 21:42:20'),
(39, 'd', 'd', '2020-05-18 22:34:17', '2020-05-18 22:37:28', '2020-05-18 22:37:28'),
(40, 'd', 'd', '2020-05-18 22:34:17', '2020-05-18 22:37:29', '2020-05-18 22:37:29'),
(41, 'DDDDDDD', 'dd', '2020-05-18 22:34:20', '2020-05-18 22:37:30', '2020-05-18 22:37:30'),
(42, 'DDDDDDD', 'dd', '2020-05-18 22:34:21', '2020-05-18 22:37:31', '2020-05-18 22:37:31'),
(43, 'potato', 'goiaba', '2020-05-18 22:36:54', '2020-05-18 22:37:31', '2020-05-18 22:37:31'),
(44, 'potato', 'goiaba', '2020-05-18 22:36:54', '2020-05-18 22:37:32', '2020-05-18 22:37:32'),
(45, 'eu sou foda', 'ddd', '2020-05-18 22:37:40', '2020-05-18 22:37:42', '2020-05-18 22:37:42'),
(46, 'batata frita3', 'boa3', '2020-05-18 22:37:46', '2020-05-18 22:47:40', '2020-05-18 22:47:40'),
(47, 'd', 'd', '2020-05-18 22:39:13', '2020-05-18 22:47:41', '2020-05-18 22:47:41'),
(48, 'qq', 'qqq', '2020-05-18 22:39:15', '2020-05-18 22:47:43', '2020-05-18 22:47:43'),
(49, 'ae', 'ae', '2020-05-18 22:39:45', '2020-05-18 22:47:45', '2020-05-18 22:47:45'),
(50, 'd', 'd', '2020-05-18 22:39:48', '2020-05-18 22:47:54', '2020-05-18 22:47:54'),
(51, 'kk\'k', 'k', '2020-05-18 22:46:56', '2020-05-18 22:47:51', '2020-05-18 22:47:51'),
(52, 'popo', 'popo', '2020-05-18 22:47:03', '2020-05-18 22:47:50', '2020-05-18 22:47:50'),
(53, 'alahu', 'akaaxaxa', '2020-05-18 22:47:08', '2020-05-18 22:47:49', '2020-05-18 22:47:49'),
(54, 'koka', 'cola', '2020-05-18 22:47:30', '2020-05-18 22:47:47', '2020-05-18 22:47:47'),
(55, 'ameixa', 'frita', '2020-05-18 22:48:01', '2020-05-18 23:45:19', '2020-05-18 23:45:19'),
(56, 'limao', 'mornod', '2020-05-18 22:48:07', '2020-05-18 23:03:31', '2020-05-18 23:03:31'),
(57, 'pastel', 'azedo', '2020-05-18 22:48:15', '2020-05-19 08:31:27', '2020-05-19 08:31:27'),
(58, 'risole', 'franngo', '2020-05-18 22:48:40', '2020-05-18 22:48:40', '0000-00-00 00:00:00'),
(59, 'd', 'd', '2020-05-18 22:53:54', '2020-05-18 23:03:36', '2020-05-18 23:03:36'),
(60, 'd', 'd', '2020-05-18 22:57:02', '2020-05-18 23:03:34', '2020-05-18 23:03:34'),
(61, 'caca', 'caca', '2020-05-18 22:57:41', '2020-05-18 22:57:41', '0000-00-00 00:00:00'),
(62, 'poao', 'cocco', '2020-05-18 23:24:56', '2020-05-19 08:31:51', '0000-00-00 00:00:00'),
(63, '', '', '2020-05-19 08:31:54', '2020-05-19 08:31:54', '0000-00-00 00:00:00'),
(64, 'd', 'd', '2020-05-19 08:31:57', '2020-05-19 08:31:57', '0000-00-00 00:00:00'),
(65, 'd', 'd', '2020-05-19 09:13:47', '2020-05-19 09:13:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Ariel', 'Granato', 'arielgranatob@gmail.com', '$2y$10$5FWrXAzeDSWvXua29HYZZ.XR/q0ZR7tocwcGfCBP5i6IUnAU9Xsl2', '2020-05-19 15:59:50', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`idCaso`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casos`
--
ALTER TABLE `casos`
  MODIFY `idCaso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
