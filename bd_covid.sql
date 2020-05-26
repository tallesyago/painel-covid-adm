-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2020 às 01:35
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

--
-- Extraindo dados da tabela `casos`
--

INSERT INTO `casos` (`idCaso`, `idMunicipio`, `suspeitosCaso`, `confirmadosCaso`, `descartadosCaso`, `obitosCaso`, `recuperadosCaso`, `created_at`, `updated_at`, `deleted_at`, `idUsuario`) VALUES
(39, 50, 13, 12, 14, 16, 15, '2020-05-22 23:17:19', '2020-05-23 08:42:40', '2020-05-23 08:42:40', 7),
(40, 9, 78, 77, 79, 818, 80, '2020-05-22 23:22:42', '2020-05-23 08:50:22', '2020-05-23 08:50:22', 7),
(47, 50, 2, 1, 3, 5, 4, '2020-05-23 08:50:16', '2020-05-23 08:50:16', '0000-00-00 00:00:00', 7),
(48, 23, 4, 3, 5, 7, 6, '2020-05-23 08:50:33', '2020-05-23 08:50:33', '0000-00-00 00:00:00', 7),
(49, 23, 3, 23, 3, 3, 3, '2020-05-23 09:10:58', '2020-05-23 09:10:58', '0000-00-00 00:00:00', 7),
(50, 31, 2, 1, 3, 5, 4, '2020-05-23 09:11:42', '2020-05-23 09:11:42', '0000-00-00 00:00:00', 7),
(51, 38, 55, 55, 55, 55, 55, '2020-05-23 09:25:48', '2020-05-23 09:25:48', '0000-00-00 00:00:00', 7),
(52, 31, 77, 77, 77, 77, 77, '2020-05-26 10:50:17', '2020-05-26 10:50:17', '0000-00-00 00:00:00', 7),
(53, 9, 14, 12, 15, 17, 16, '2020-05-26 12:00:37', '2020-05-26 12:00:37', '0000-00-00 00:00:00', 8),
(54, 10, 8, 8, 8, 8, 8, '2020-05-26 12:24:55', '2020-05-26 14:54:34', '2020-05-26 14:54:34', 8),
(55, 10, 9, 3, 26, 1, 0, '2020-05-26 14:53:32', '2020-05-26 14:53:32', '0000-00-00 00:00:00', 8);

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
-- Estrutura da tabela `municipios`
--

CREATE TABLE `municipios` (
  `idMunicipio` int(11) NOT NULL,
  `nomeMunicipio` varchar(150) NOT NULL,
  `facebookMunicipio` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `municipios`
--

INSERT INTO `municipios` (`idMunicipio`, `nomeMunicipio`, `facebookMunicipio`) VALUES
(1, 'Astolfo Dutra', 'PrefAstolfoDutra'),
(2, 'São Geraldo\r\n', 'prefeitura.saogeraldo'),
(3, 'Dores do Turvo', 'doresdoturvo'),
(4, 'Senador Firmino', 'municipiosenadorfirmino'),
(5, 'Guidoval', 'prefeituradeguidoval'),
(6, 'Visconde do Rio Branco', 'prefeituravrbmg'),
(7, 'Guiricema', 'guiricema'),
(8, 'Mercês', 'prefeiturademerces'),
(9, 'Piraúba', 'municipio.pirauba'),
(10, 'Rio Pomba', 'riopomba'),
(11, 'Tabuleiro', 'prefeituradetabuleiro'),
(12, 'Silverânia', 'Prefeitura-Municipal-de-Silveirânia-2030149240557298'),
(13, 'Rodeiro', 'prefeituraderodeiromg'),
(14, 'Divinésia', 'prefeituraDivinesia'),
(15, 'Guarani', 'Prefeitura-Municipal-de-Guarani-205479812800138'),
(16, 'Tocantins', 'prefeituradetocantins'),
(17, 'Ubá', 'PrefeituradeUba'),
(18, 'Ewbank da Câmara', 'prefeituradeewbankdacamara'),
(19, 'Belmiro Braga', 'prefeituradebelmirobraga'),
(20, 'Bias Fortes', 'PrefeituradeBiasFortes'),
(21, 'Lima Duarte', 'PrefeituraLD'),
(22, 'Chácara', 'prefeituradechacaramg'),
(23, 'Coronel Pacheco', 'pmcpoficial'),
(24, 'Oliveiras Fortes', 'Prefeituramunicipaldeolveirafortes'),
(25, 'Maripá de Minas', 'MaripaDeMinasmg'),
(26, 'Matias Barbosa', 'Prefeituramunicipalmatiasbarbosa'),
(27, 'Mar de Espanha', 'prefeiturademardeespanha'),
(28, 'Paiva', 'prefeituradepaiva'),
(29, 'Descoberto', 'prefeituradescoberto'),
(30, 'Aracitaba', 'pmaadm20172020'),
(31, 'Goianá', 'PrefeituraMunicipalDeGoiana'),
(32, 'Guarará', 'PrefeituraMunicipalDeGuarara'),
(33, 'Bicas', 'prefeituradebicasadm20172020'),
(34, 'Pequeri', 'prefeiturapequerimg'),
(36, 'Rio Novo', 'prefeituramunicipalderionovomg'),
(37, 'Rio Preto', 'pmriopretominas'),
(38, 'Piau', 'prefeituramunicipaldepiau'),
(39, 'Olaria', 'PrefeituraOL'),
(40, 'Pedro Teixeira', 'PrefPtx'),
(41, 'Simão Pereira', 'prefeituradesimaopereira'),
(42, 'Senador Cortes', 'prefeiturasenadorcortes'),
(43, 'São João Nepomuceno', 'prefeiturasjnepomuceno'),
(44, 'Santos Dumont', 'Prefeitura-Municipal-de-Santos-Dumont-561920750577953'),
(45, 'Santana do Deserto', 'santanadodeserto'),
(46, 'Santa Rita do Jacutinga', 'Prefeitura-Municipal-de-Santa-Rita-de-Jacutinga-877687295659117'),
(47, 'Santa Rita do Ibitipoca', 'Informe-Covid-19-Santa-Rita-de-Ibitipoca-MG-100574188269392'),
(48, 'Rochedo de Minas', 'PrefeituraMunicipalDeRochedoDeMinas'),
(49, 'Santa Bárbara do Monte Verde', ''),
(50, 'Juiz de Fora', 'JuizdeForaPJF'),
(51, 'Brás Pires', 'braspiresoficial'),
(56, 'Barbacena', 'BarbacenaGov'),
(57, 'Cataguases', 'prefeituramunicipaldecataguasesmg'),
(58, 'Muriaé', 'Prefeiturademuriae'),
(59, 'Leopoldina', 'camaramunicipaldeleopoldina'),
(60, 'Viçosa', 'prefsvicosa');

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
(76, 'teste', '<p>dadada</p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', '2020-05-22 23:23:27', '2020-05-22 23:23:27', '0000-00-00 00:00:00', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ariel', 'arielgranatob@gmail.com', '$2y$10$CmQ.FQ2aiXGKfusZCT2OT.3SDVD0rBbnPq8WnaYUTOrttqYUminJ6', '2020-05-21 20:01:04', '2020-05-26 11:58:47'),
(2, 'Bruno', 'brunojp178@gmail.com', '$2y$10$8bok.DbcS3rAWe2rlGWm4uy9skdgoV0NNSKVgsm3NmO31Xt3jAf7W', '2020-05-21 20:57:51', '0000-00-00 00:00:00'),
(3, 'Misael', 'misaelg.freitas2000@gmail.com', '$2y$10$/pi2KLEStH2uvpIgHupzX..f4M1krcIs7gpVfXLIMaKHQ9uLa7KuK', '2020-05-21 20:58:22', '0000-00-00 00:00:00'),
(4, 'Thiago', 'thiagomotax@gmail.com', '$2y$10$ER317rEK6H2pOZ.x3Sp5DeLZJF5o10QJYQMNa55udtC9awa5xAsQy', '2020-05-20 21:35:07', '2020-05-26 11:10:26'),
(5, 'Talles', 'tallesyagofariacota@gmail.com', '$2y$10$osiLZfY5b5w0zkjNZcWQy.mbcrxPlrKcaJK4SEyiqIrT/SI46cqXS', '2020-05-21 20:43:14', '0000-00-00 00:00:00'),
(6, 'Jesus', 'felipecandian95@gmail.com', '$2y$10$1xiSPWWYFTiIl.Pqnavf1uO1kilfl2q0wZICCzP8tMsfnmxMcoAiS', '2020-05-21 20:42:53', '0000-00-00 00:00:00'),
(7, 'Gustavo', 'gustavo.teixeira@ifsudestemg.edu.br', '$2y$10$T6d0KfOnPKgedV2iKMItFeFk8zvSC4Cc004Txv3lLKoEgCIuue9M.', '2020-05-21 20:42:18', '2020-05-26 10:58:33'),
(8, 'Wellington', 'wellington.moreira@ifsudestemg.edu.br', '$2y$10$n/UJjMivndkV4l2Xv6RRPOCmfWIHhKDnjV8UOCDBoDGXLVn7OP55u', '2020-05-21 20:41:04', '2020-05-26 12:04:44'),
(9, 'Lucas Lattari', 'lucas.lattari@ifsudestemg.edu.br', '$2y$10$GTQ3aRV6.0/tDepKrrPVzeBrPt5gKgSPfC3LxK.LfVVK7h8Z8tUty', '2020-05-21 20:41:44', '0000-00-00 00:00:00'),
(10, 'Flávio', 'flavio.freitas@ifsudestemg.edu.br', '$2y$10$t9MdHULs.4cAM5PLiwHTNO4xbjtCEnLfU.RtOLvhom5AuWTeGAQ9K', '2020-05-21 20:42:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_municipio`
--

CREATE TABLE `users_municipio` (
  `idUsers_municipio` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_municipio`
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
(13, 10, 29),
(14, 7, 50),
(15, 7, 33),
(16, 7, 26),
(17, 7, 36),
(18, 7, 31),
(19, 7, 34),
(20, 7, 23),
(21, 7, 38),
(22, 7, 41),
(23, 10, 40),
(24, 10, 44);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`idCaso`) USING BTREE,
  ADD KEY `fk_casos` (`idMunicipio`),
  ADD KEY `fk_casos2` (`idUsuario`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`idMunicipio`);

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
-- Índices para tabela `users_municipio`
--
ALTER TABLE `users_municipio`
  ADD PRIMARY KEY (`idUsers_municipio`),
  ADD KEY `fk_municipio` (`idMunicipio`),
  ADD KEY `fk_users` (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casos`
--
ALTER TABLE `casos`
  MODIFY `idCaso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `municipios`
--
ALTER TABLE `municipios`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users_municipio`
--
ALTER TABLE `users_municipio`
  MODIFY `idUsers_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `casos`
--
ALTER TABLE `casos`
  ADD CONSTRAINT `fk_casos` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`),
  ADD CONSTRAINT `fk_casos2` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `users_municipio`
--
ALTER TABLE `users_municipio`
  ADD CONSTRAINT `fk_municipio` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
