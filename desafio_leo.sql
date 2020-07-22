-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2020 às 22:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_leo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accesses`
--

CREATE TABLE `accesses` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` text NOT NULL,
  `user` int(11) UNSIGNED DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT ' ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `title`, `subtitle`, `user`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Curso HTML na prática', 'HTML é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML. HyTime é um padrão para a representação estruturada de hipermídia e conteúdo baseado em tempo.', 0, 'images/2020/07/curso-html-na-pratica.jpg', 1, '2020-07-20 22:08:20', '2020-07-20 22:08:20'),
(3, 'Curso de Wordpress Essencial', 'WordPress é um sistema livre e aberto de gestão de conteúdo para internet, baseado em PHP com banco de dados MySQL, executado em um servidor interpretador, voltado principalmente para a criação de páginas eletrônicas e blogs online.', 0, 'images/2020/07/curso-de-wordpress-essencial.jpg', 1, '2020-07-20 22:16:41', '2020-07-20 22:16:41'),
(4, 'Curso de Marketing Digital', 'Marketing digital são ações de comunicação que as empresas podem utilizar por meio da internet, da telefonia celular e outros meios digitais, para assim divulgar e comercializar seus produtos, conquistando novos clientes e melhorando a sua rede de relacionamentos.', 0, 'images/2020/07/curso-de-marketing-digital.jpg', 1, '2020-07-20 22:20:25', '2020-07-20 22:20:25'),
(5, 'Curso de Social Media', 'O social media são tecnologias interativas mediadas por computador que facilitam a criação ou o compartilhamento de informações , idéias, interesses profissionais e outras formas de expressão por meio de comunidades e redes virtuais.', 1, 'images/2020/07/curso-de-midias-digitais.png', 1, '2020-07-20 22:39:52', '2020-07-22 19:03:07'),
(6, 'Curso de drinks', 'Venha aprender a fazer os mais diversos drinks preparados em festas pelos mais experientes barmans, tire seu certificado ao final do curso', 4, 'images/2020/07/curso-de-drinks-1595296424.jpg', 1, '2020-07-21 01:52:02', '2020-07-21 01:53:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1,
  `password` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `status`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Luiz Felipe', 'Azevedo', 'loez', 1, '$2y$10$gnq/xSJ06Ky07mkb0vRDv.lmI0wAuJ9A5pvvGHqtqugSKP6ZDVl7S', 'images/2020/07/luiz-felipe-azevedo.jpg', '2020-07-20 03:25:42', '2020-07-20 06:58:00'),
(3, 'Luiz Felipe', 'Azevedo 2', 'Loez2', 1, '$2y$10$Zvi0lWv2IOl45ANdCWbVVeBuHKgVilMAOYplqtTY3ZsBjvUIgdigG', 'images/2020/07/luiz-felipe-azevedo-2-1595230930.jpg', '2020-07-20 07:42:10', '2020-07-20 07:42:10'),
(4, 'Teste', 'Teste', 'teste', 1, '$2y$10$Xut5wacQSCJ0KrD1PXLy/uC5kVek32Ll/6utp1GjaEXX1YNbtzeta', NULL, '2020-07-20 19:24:22', '2020-07-20 20:11:14'),
(5, 'Teste3', 'teste3', 'teste3', 1, '$2y$10$2NUJm6D74AMfT41f97udoumfYwbA4M7MwmuXxJa7Q56nzFZgu6/ce', NULL, '2020-07-22 02:05:28', '2020-07-22 02:05:28');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_unique` (`title`);
ALTER TABLE `courses` ADD FULLTEXT KEY `title` (`title`,`subtitle`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`) USING BTREE;
ALTER TABLE `users` ADD FULLTEXT KEY `first_name` (`first_name`);
ALTER TABLE `users` ADD FULLTEXT KEY `last_name` (`last_name`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
