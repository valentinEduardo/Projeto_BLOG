-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Ago-2023 às 19:28
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `name_cat` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`idCategory`, `name_cat`) VALUES
(1, 'Programação'),
(2, 'Marcação'),
(3, 'Hardware');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `data` date DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `news` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `idCategory`, `title`, `category`, `description`, `data`, `image`, `news`) VALUES
(11, 2, 'HTML5', 'Marcação', 'NOVO HTML', '2022-12-09', 'uploads/ISO_C++_Logo.svg.png', 'testeee'),
(12, 1, 'PYTHON', 'Programação', 'Python no front esta cada vez mais proximo', '2022-12-10', 'uploads/python.png', ''),
(13, 1, 'C', '', '<p>Linguagem mae</p>', '2022-12-10', 'uploads/download.png', ''),
(14, 1, 'JAVA', '', 'Java', '2022-12-10', 'uploads/produtos_55_produto-teste-nao-usar_www.alternativagameselan.com.br_zz4ef5edb9b8.png', '<p>teste 2</p>'),
(22, 1, 'C++', '', '<p>C++ NA CRIA&Ccedil;&Atilde;O DE JOGOS&nbsp;</p>', '2023-08-10', 'uploads/ISO_C++_Logo.svg.png', ''),
(23, 1, 'Título teste', '', 'Descrição teste', '2023-08-10', 'uploads/produtos_55_produto-teste-nao-usar_www.alternativagameselan.com.br_zz4ef5edb9b8.png', '<p>Noticia teste teste teste teste teste teste teste</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `senha`) VALUES
(6, 'Valentin Eduardo', 'ADMmaster', '76bf1508'),
(8, 'Lucas Carvalho', 'hui', '81dc9bdb'),
(9, 'Miguel', 'Billy', '81dc9bdb'),
(10, 'Miguel', 'ADM', '202cb962');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_category` (`idCategory`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_posts_category` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
