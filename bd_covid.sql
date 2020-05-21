-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Maio-2020 às 06:38
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_covid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `casos`
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
  `deleted_at` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `casos`
--

INSERT INTO `casos` (`idCaso`, `suspeitosCaso`, `confirmadosCaso`, `descartadosCaso`, `obitosCaso`, `recuperadosCaso`, `created_at`, `updated_at`, `deleted_at`, `idUsuario`) VALUES
(1, 133, 555, 133, 135, 134, '0000-00-00 00:00:00', '2020-05-20 22:13:36', '2020-05-20 22:13:36', 0),
(2, 3, 3, 3, 3, 3, '0000-00-00 00:00:00', '2020-05-19 09:59:52', '2020-05-19 09:59:52', 0),
(3, 2, 2, 2, 2, 2, '2020-05-19 10:03:51', '2020-05-19 10:06:58', '2020-05-19 10:06:58', 0),
(4, 8, 9, 7, 5, 6, '2020-05-19 10:07:03', '2020-05-20 22:16:04', '2020-05-20 22:16:04', 0),
(5, 2, 1, 3, 5, 4, '2020-05-19 16:23:45', '2020-05-20 22:16:05', '2020-05-20 22:16:05', 0),
(6, 11, 10, 12, 14, 13, '2020-05-20 22:16:15', '2020-05-20 22:16:15', '0000-00-00 00:00:00', 0),
(7, 16, 15, 17, 19, 18, '2020-05-20 22:16:28', '2020-05-20 22:16:28', '0000-00-00 00:00:00', 0),
(8, 9, 99, 99, 9, 9, '2020-05-20 22:16:37', '2020-05-20 22:16:39', '2020-05-20 22:16:39', 0),
(9, 9, 5, 8, 6, 7, '2020-05-20 22:18:49', '2020-05-20 22:18:49', '0000-00-00 00:00:00', 0),
(10, 3, 2, 4, 6, 5, '2020-05-20 23:12:55', '2020-05-20 23:12:55', '0000-00-00 00:00:00', 0),
(11, 3, 2, 4, 6, 5, '2020-05-20 23:14:38', '2020-05-20 23:14:38', '0000-00-00 00:00:00', 0),
(12, 9, 9, 9, 9, 9, '2020-05-20 23:17:45', '2020-05-20 23:17:45', '0000-00-00 00:00:00', 4),
(13, 3, 3, 3, 3, 3, '2020-05-20 23:21:33', '2020-05-20 23:21:33', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
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
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20121031100537', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1589910572, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` text NOT NULL,
  `conteudoNoticia` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `conteudoNoticia`, `created_at`, `updated_at`, `deleted_at`, `idUsuario`) VALUES
(15, 'teste', 'teste', '2020-05-18 15:53:20', '2020-05-18 16:12:37', '2020-05-18 16:12:37', 0),
(16, 'teste', 'teswte', '0000-00-00 00:00:00', '2020-05-18 21:18:35', '2020-05-18 21:18:35', 0),
(17, 'cacaca', 'cacac', '0000-00-00 00:00:00', '2020-05-18 21:18:44', '2020-05-18 21:18:44', 0),
(18, 'dasdsasad', 'das', '2020-05-18 17:36:42', '2020-05-18 21:24:35', '2020-05-18 21:24:35', 0),
(19, 'cachaça', 'coie', '2020-05-18 17:36:52', '2020-05-18 21:36:03', '2020-05-18 21:36:03', 0),
(20, 'd', 'd', '2020-05-18 20:33:23', '2020-05-18 21:35:32', '2020-05-18 21:35:32', 0),
(21, 'coco', 'cococ', '2020-05-18 20:34:39', '2020-05-18 21:36:38', '2020-05-18 21:36:38', 0),
(22, 'd', 'd', '2020-05-18 20:35:19', '2020-05-18 21:36:55', '2020-05-18 21:36:55', 0),
(23, 'cococo', 'cococ', '2020-05-18 20:35:33', '2020-05-18 21:38:14', '2020-05-18 21:38:14', 0),
(24, 'd', 'd', '2020-05-18 20:35:49', '2020-05-18 21:37:35', '2020-05-18 21:37:35', 0),
(25, 'd', 'd', '2020-05-18 20:37:23', '2020-05-18 21:32:36', '2020-05-18 21:32:36', 0),
(26, 'd', 'd', '2020-05-18 21:38:27', '2020-05-18 21:38:29', '2020-05-18 21:38:29', 0),
(27, 'd', 'd', '2020-05-18 21:38:54', '2020-05-18 21:39:48', '2020-05-18 21:39:48', 0),
(28, 'ddsad', 'ddasdsa', '2020-05-18 21:38:59', '2020-05-18 21:39:00', '2020-05-18 21:39:00', 0),
(29, 'dasd', 'dasdsa', '2020-05-18 21:39:39', '2020-05-18 21:40:51', '2020-05-18 21:40:51', 0),
(30, 'dasddas', 'dasdsadas', '2020-05-18 21:39:41', '2020-05-18 21:39:49', '2020-05-18 21:39:49', 0),
(31, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:43', '2020-05-18 21:59:19', '2020-05-18 21:59:19', 0),
(32, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:43', '2020-05-18 21:39:50', '2020-05-18 21:39:50', 0),
(33, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 21:59:21', '2020-05-18 21:59:21', 0),
(34, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 22:00:47', '2020-05-18 22:00:47', 0),
(35, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:44', '2020-05-18 22:24:05', '2020-05-18 22:24:05', 0),
(36, 'dasddas2312', 'dasdsadas', '2020-05-18 21:39:45', '2020-05-18 22:26:05', '2020-05-18 22:26:05', 0),
(37, 'melancia', 'batata', '2020-05-18 21:39:45', '2020-05-18 22:37:33', '2020-05-18 22:37:33', 0),
(38, '2', 'd', '2020-05-18 21:42:14', '2020-05-18 21:42:20', '2020-05-18 21:42:20', 0),
(39, 'd', 'd', '2020-05-18 22:34:17', '2020-05-18 22:37:28', '2020-05-18 22:37:28', 0),
(40, 'd', 'd', '2020-05-18 22:34:17', '2020-05-18 22:37:29', '2020-05-18 22:37:29', 0),
(41, 'DDDDDDD', 'dd', '2020-05-18 22:34:20', '2020-05-18 22:37:30', '2020-05-18 22:37:30', 0),
(42, 'DDDDDDD', 'dd', '2020-05-18 22:34:21', '2020-05-18 22:37:31', '2020-05-18 22:37:31', 0),
(43, 'potato', 'goiaba', '2020-05-18 22:36:54', '2020-05-18 22:37:31', '2020-05-18 22:37:31', 0),
(44, 'potato', 'goiaba', '2020-05-18 22:36:54', '2020-05-18 22:37:32', '2020-05-18 22:37:32', 0),
(45, 'eu sou foda', 'ddd', '2020-05-18 22:37:40', '2020-05-18 22:37:42', '2020-05-18 22:37:42', 0),
(46, 'batata frita3', 'boa3', '2020-05-18 22:37:46', '2020-05-18 22:47:40', '2020-05-18 22:47:40', 0),
(47, 'd', 'd', '2020-05-18 22:39:13', '2020-05-18 22:47:41', '2020-05-18 22:47:41', 0),
(48, 'qq', 'qqq', '2020-05-18 22:39:15', '2020-05-18 22:47:43', '2020-05-18 22:47:43', 0),
(49, 'ae', 'ae', '2020-05-18 22:39:45', '2020-05-18 22:47:45', '2020-05-18 22:47:45', 0),
(50, 'd', 'd', '2020-05-18 22:39:48', '2020-05-18 22:47:54', '2020-05-18 22:47:54', 0),
(51, 'kk\'k', 'k', '2020-05-18 22:46:56', '2020-05-18 22:47:51', '2020-05-18 22:47:51', 0),
(52, 'popo', 'popo', '2020-05-18 22:47:03', '2020-05-18 22:47:50', '2020-05-18 22:47:50', 0),
(53, 'alahu', 'akaaxaxa', '2020-05-18 22:47:08', '2020-05-18 22:47:49', '2020-05-18 22:47:49', 0),
(54, 'koka', 'cola', '2020-05-18 22:47:30', '2020-05-18 22:47:47', '2020-05-18 22:47:47', 0),
(55, 'ameixa', 'frita', '2020-05-18 22:48:01', '2020-05-18 23:45:19', '2020-05-18 23:45:19', 0),
(56, 'limao', 'mornod', '2020-05-18 22:48:07', '2020-05-18 23:03:31', '2020-05-18 23:03:31', 0),
(57, 'pastel', 'azedo', '2020-05-18 22:48:15', '2020-05-19 08:31:27', '2020-05-19 08:31:27', 0),
(58, 'risole', 'franngo', '2020-05-18 22:48:40', '2020-05-18 22:48:40', '0000-00-00 00:00:00', 0),
(59, 'd', 'd', '2020-05-18 22:53:54', '2020-05-18 23:03:36', '2020-05-18 23:03:36', 0),
(60, 'd', 'd', '2020-05-18 22:57:02', '2020-05-18 23:03:34', '2020-05-18 23:03:34', 0),
(61, 'caca', 'caca', '2020-05-18 22:57:41', '2020-05-18 22:57:41', '0000-00-00 00:00:00', 0),
(62, 'poao', 'cocco', '2020-05-18 23:24:56', '2020-05-19 08:31:51', '0000-00-00 00:00:00', 0),
(63, '', '', '2020-05-19 08:31:54', '2020-05-20 21:36:14', '2020-05-20 21:36:14', 0),
(64, 'd', 'd', '2020-05-19 08:31:57', '2020-05-20 21:36:15', '2020-05-20 21:36:15', 0),
(65, 'd', 'd', '2020-05-19 09:13:47', '2020-05-20 23:05:46', '2020-05-20 23:05:46', 0),
(66, 'co', 'co', '2020-05-20 22:18:58', '2020-05-20 22:19:01', '2020-05-20 22:19:01', 0),
(67, 'd', '<p><b>Eu sou o deus da galaxia</b></p><p><b><br></b></p><p><b><br></b></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><b><br></b></p>', '2020-05-20 23:18:27', '2020-05-20 23:33:46', '2020-05-20 23:33:46', 4),
(68, 'xa', 'xa', '2020-05-20 23:19:06', '2020-05-20 23:19:06', '0000-00-00 00:00:00', 4),
(69, 'da', 'de', '2020-05-20 23:27:16', '2020-05-20 23:27:16', '0000-00-00 00:00:00', 4),
(70, 'aeeee', '<p><b>dddd</b></p>', '2020-05-20 23:30:01', '2020-05-20 23:30:01', '0000-00-00 00:00:00', 4),
(71, 'teste de velocidade do mr potato x', '<p><b>dasdsaads</b></p><p><b><br></b></p><p><b><br></b></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><b><br></b></p>', '2020-05-20 23:30:24', '2020-05-20 23:30:39', '2020-05-20 23:30:39', 4),
(72, '', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td></tr></tbody></table><p><br></p>', '2020-05-20 23:30:57', '2020-05-20 23:31:02', '2020-05-20 23:31:02', 4),
(73, 'das', '<p><b>dasda</b></p><p><b><br></b></p><p><b><br></b></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td></tr></tbody></table><p><b><br></b></p>', '2020-05-20 23:33:52', '2020-05-20 23:34:06', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Ariel', 'Granato', 'arielgranatob@gmail.com', '$2y$10$5FWrXAzeDSWvXua29HYZZ.XR/q0ZR7tocwcGfCBP5i6IUnAU9Xsl2', '2020-05-19 15:59:50', '0000-00-00 00:00:00'),
(4, 'Thiago', 'Motax', 'thiagomotax@gmail.com', '$2y$10$5xtKCWpYavchOwuqlHTJgeM.T6lJazF9X9jzyk8sXMsDucb8bw86m', '2020-05-20 21:35:07', '2020-05-20 23:05:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`idCaso`) USING BTREE;

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casos`
--
ALTER TABLE `casos`
  MODIFY `idCaso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
