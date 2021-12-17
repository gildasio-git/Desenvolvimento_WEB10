-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Dez-2021 às 17:35
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(21, '127.0.0.1', '2021-12-17 17:05:01', '61bcb52d3e834');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin_visitas`
--

CREATE TABLE `tb_admin_visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin_visitas`
--

INSERT INTO `tb_admin_visitas` (`id`, `ip`, `dia`) VALUES
(1, '127.0.0.1', '2021-12-13'),
(2, '192.169.257.255', '2021-12-12'),
(3, '127.0.0.1', '2021-12-15'),
(4, '127.0.0.1', '2021-12-15'),
(5, '127.0.0.1', '2021-12-17'),
(6, '127.0.0.1', '2021-12-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm_usuarios`
--

CREATE TABLE `tb_adm_usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_adm_usuarios`
--

INSERT INTO `tb_adm_usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'admin', 'senha', '61bb76ebe8a1a.jpeg', 'gildasio', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin_visitas`
--
ALTER TABLE `tb_admin_visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_adm_usuarios`
--
ALTER TABLE `tb_adm_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_admin_visitas`
--
ALTER TABLE `tb_admin_visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_adm_usuarios`
--
ALTER TABLE `tb_adm_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
