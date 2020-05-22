-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:08 PM
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
  `idMunicipio` int(11) NOT NULL,
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
-- Table structure for table `municipios`
--

CREATE TABLE `municipios` (
  `idMunicipio` int(11) NOT NULL,
  `nomeMunicipio` varchar(150) NOT NULL,
  `codMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipios`
--

INSERT INTO `municipios` (`idMunicipio`, `nomeMunicipio`, `codMunicipio`) VALUES
(1, 'Astolfo Dutra', 0),
(2, 'São Geraldo\r\n', 0),
(3, 'Dores do Turvo', 0),
(4, 'Senador Firmino', 0),
(5, 'Guidoval', 0),
(6, 'Visconde do Rio Branco', 0),
(7, 'Guiricema', 0),
(8, 'Mercês', 0),
(9, 'Piraúba', 0),
(10, 'Rio Pomba', 0),
(11, 'Tabuleiro', 0),
(12, 'Silverânia', 0),
(13, 'Rodeiro', 0),
(14, 'Divinésia', 0),
(15, 'Guarani', 0),
(16, 'Tocantins', 0),
(17, 'Ubá', 0),
(18, 'Ewbank da Câmara', 0),
(19, 'Belmiro Braga', 0),
(20, 'Bias Fortes', 0),
(21, 'Lima Duarte', 0),
(22, 'Chácara', 0),
(23, 'Coronel Pacheco', 0),
(24, 'Oliveiras Fortes', 0),
(25, 'Maripá de Minas', 0),
(26, 'Matias Barbosa', 0),
(27, 'Mar de Espanha', 0),
(28, 'Paiva', 0),
(29, 'Descoberto', 0),
(30, 'Aracitaba', 0),
(31, 'Goianá', 0),
(32, 'Guarará', 0),
(33, 'Bicas', 0),
(34, 'Pequeri', 0),
(35, 'Piau', 0),
(36, 'Rio Novo', 0),
(37, 'Rio Preto', 0),
(38, 'Piau', 0),
(39, 'Olaria', 0),
(40, 'Pedro Teixeira', 0),
(41, 'Simão Pereira', 0),
(42, 'Senador Cortes', 0),
(43, 'São João Nepomuceno', 0),
(44, 'Santos Dumont', 0),
(45, 'Santana do Deserto', 0),
(46, 'Santa Rita do Jacutinga', 0),
(47, 'Santa Rita do Ibitipoca', 0),
(48, 'Rochedo de Minas', 0),
(49, 'Santa Bárbara do Monte Verde', 0),
(50, 'Juiz de Fora', 0),
(51, 'Dona Eusébia', 0),
(52, 'São Sebastião da Vargem Alegre', 0),
(53, 'Miraí', 0),
(54, 'Descoberto', 0),
(55, 'Brás Pires', 0);

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
  `deleted_at` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `conteudoNoticia`, `created_at`, `updated_at`, `deleted_at`, `idUsuario`) VALUES
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
(73, 'das', '<p><b>dasda</b></p><p><b><br></b></p><p><b><br></b></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td></tr></tbody></table><p><b><br></b></p>', '2020-05-20 23:33:52', '2020-05-20 23:34:06', '0000-00-00 00:00:00', 4),
(74, 'teste', '<p><img src=\"https://img.ibxk.com.br/2020/05/21/21095628070078.jpg?w=1120&amp;h=420&amp;mode=crop&amp;scale=both\" style=\"width: 444px;\"><br></p>', '2020-05-21 10:51:08', '2020-05-21 10:51:29', '2020-05-21 10:51:29', 5),
(75, '1', '<p>1</p>', '2020-05-21 20:02:05', '2020-05-21 20:02:05', '0000-00-00 00:00:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ariel', 'arielgranatob@gmail.com', '$2y$10$zWMDtFC2YSPUvdN6VKOb5.gDClfI5ExzO.HjdvVzmjJXVvMRKyQaK', '2020-05-21 20:01:04', '2020-05-21 20:47:22'),
(2, 'Bruno', 'brunojp178@gmail.com', '$2y$10$8bok.DbcS3rAWe2rlGWm4uy9skdgoV0NNSKVgsm3NmO31Xt3jAf7W', '2020-05-21 20:57:51', '0000-00-00 00:00:00'),
(3, 'Misael', 'misaelg.freitas2000@gmail.com', '$2y$10$/pi2KLEStH2uvpIgHupzX..f4M1krcIs7gpVfXLIMaKHQ9uLa7KuK', '2020-05-21 20:58:22', '0000-00-00 00:00:00'),
(4, 'Thiago', 'thiagomotax@gmail.com', '$2y$10$5xtKCWpYavchOwuqlHTJgeM.T6lJazF9X9jzyk8sXMsDucb8bw86m', '2020-05-20 21:35:07', '2020-05-20 23:05:40'),
(5, 'Talles', 'tallesyagofariacota@gmail.com', '$2y$10$osiLZfY5b5w0zkjNZcWQy.mbcrxPlrKcaJK4SEyiqIrT/SI46cqXS', '2020-05-21 20:43:14', '0000-00-00 00:00:00'),
(6, 'Jesus', 'felipecandian95@gmail.com', '$2y$10$1xiSPWWYFTiIl.Pqnavf1uO1kilfl2q0wZICCzP8tMsfnmxMcoAiS', '2020-05-21 20:42:53', '0000-00-00 00:00:00'),
(7, 'Gustavo', 'gustavo.teixeira@ifsudestemg.edu.br', '$2y$10$K1EhY17cWxHPgOpWL83M3OChA/scmMvRmy3zgE6oeYyGQRrOIPwZu', '2020-05-21 20:42:18', '0000-00-00 00:00:00'),
(8, 'Wellington', 'wellington.moreira@ifsudestemg.edu.br', '$2y$10$u/ZTqM7ciZdL4m7h8k497OyRPec02XKpYqoI/8pSgqM9IgjRfSK1.', '2020-05-21 20:41:04', '0000-00-00 00:00:00'),
(9, 'Lucas Lattari', 'lucas.lattari@ifsudestemg.edu.br', '$2y$10$GTQ3aRV6.0/tDepKrrPVzeBrPt5gKgSPfC3LxK.LfVVK7h8Z8tUty', '2020-05-21 20:41:44', '0000-00-00 00:00:00'),
(10, 'Flávio', 'flavio.freitas@ifsudestemg.edu.br', '$2y$10$t9MdHULs.4cAM5PLiwHTNO4xbjtCEnLfU.RtOLvhom5AuWTeGAQ9K', '2020-05-21 20:42:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_municipio`
--

CREATE TABLE `users_municipio` (
  `idUsers_municipio` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_municipio`
--

INSERT INTO `users_municipio` (`idUsers_municipio`, `idUser`, `idMunicipio`) VALUES
(1, 6, 17),
(2, 6, 6),
(3, 6, 16),
(4, 6, 13),
(5, 6, 5),
(6, 6, 7),
(7, 8, 10),
(8, 8, 9),
(9, 8, 8),
(10, 8, 12),
(11, 8, 11),
(12, 10, 1),
(13, 10, 53),
(14, 10, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`idCaso`) USING BTREE,
  ADD KEY `fk_casos` (`idMunicipio`),
  ADD KEY `fk_casos2` (`idUsuario`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`idMunicipio`);

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
-- Indexes for table `users_municipio`
--
ALTER TABLE `users_municipio`
  ADD PRIMARY KEY (`idUsers_municipio`),
  ADD KEY `fk_municipio` (`idMunicipio`),
  ADD KEY `fk_users` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casos`
--
ALTER TABLE `casos`
  MODIFY `idCaso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `municipios`
--
ALTER TABLE `municipios`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_municipio`
--
ALTER TABLE `users_municipio`
  MODIFY `idUsers_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casos`
--
ALTER TABLE `casos`
  ADD CONSTRAINT `fk_casos` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`),
  ADD CONSTRAINT `fk_casos2` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_municipio`
--
ALTER TABLE `users_municipio`
  ADD CONSTRAINT `fk_municipio` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
