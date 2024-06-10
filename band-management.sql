-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2024 às 02:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `band-management`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_bandas`
--

CREATE TABLE `tb_bandas` (
  `id` int(11) NOT NULL,
  `descBanda` varchar(30) NOT NULL,
  `estilo_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_bandas`
--

INSERT INTO `tb_bandas` (`id`, `descBanda`, `estilo_id`) VALUES
(20, 'Fresno', 13),
(21, 'Turma do Pagode', 13),
(22, 'Victor e Leo', 15),
(23, 'Guns N Roses', 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_estilos`
--

CREATE TABLE `tb_estilos` (
  `id` int(11) NOT NULL,
  `nomeEstilo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_estilos`
--

INSERT INTO `tb_estilos` (`id`, `nomeEstilo`) VALUES
(13, 'rock'),
(14, 'pagode'),
(15, 'sertanejo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_integrantes`
--

CREATE TABLE `tb_integrantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `banda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_integrantes`
--

INSERT INTO `tb_integrantes` (`id`, `nome`, `foto`, `funcao`, `banda_id`) VALUES
(23, 'Victor Chaves', '8afb738e173e0f497c82fae0585a0785.jpeg', 'Vocalista', 22),
(24, 'Slash', '56d3d5dd00419b1206b498dfa378f5c2.jpg', 'Guitarrista', 23),
(25, 'Lucas Fresno', '71ddad0f83397d43cb0e3a64bd612512.jpeg', 'Vocalista', 20),
(26, 'Leandro Filé', 'efabc95261b5886e29a179ed1761d91d.jpg', 'Violinista', 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`, `permissao`) VALUES
(2, 'joaosantos', '123456', 'vis'),
(3, 'admin', '1234', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_bandas`
--
ALTER TABLE `tb_bandas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_estilos`
--
ALTER TABLE `tb_estilos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_integrantes`
--
ALTER TABLE `tb_integrantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_bandas`
--
ALTER TABLE `tb_bandas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tb_estilos`
--
ALTER TABLE `tb_estilos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_integrantes`
--
ALTER TABLE `tb_integrantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
