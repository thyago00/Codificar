-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2020 às 04:46
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
-- Banco de dados: `bd_oficina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id_cliente` smallint(6) NOT NULL,
  `nome_cliente` varchar(30) NOT NULL,
  `dt_orcamento` datetime NOT NULL,
  `vendedor` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id_cliente`, `nome_cliente`, `dt_orcamento`, `vendedor`, `descricao`, `valor`) VALUES
(47, 'thyago', '2020-07-23 23:08:00', 'thyago', '         fasfasfa', 454.01),
(51, 'afasfasfas', '2020-05-04 22:22:00', 'safasfasfas', ' asfasfas', 545454),
(58, 'thyago', '2020-02-02 20:20:00', 'thyago', '   safasf', 5),
(63, 'asfasfas', '2020-04-23 18:27:00', '454safas', '  fsafasf', 544),
(65, 'safasfasfa', '2020-07-22 13:26:00', 'sfasfasfas', '    asfasfas', 4545450),
(68, 'thyago', '2020-05-20 23:00:00', 'thyago', ' trocar pneu\r\ntrocar embreagem', 450.55),
(69, 'thyago', '2020-07-23 22:15:00', 'joao', '   trocar freio\r\n', 450.5),
(70, 'thyago', '2020-07-08 21:11:00', 'joao', 'trocar volante', 450),
(71, 'thyago', '2020-07-23 22:12:00', 'thyago', 'carlos', 500),
(72, 'carlos', '2020-07-31 18:13:00', 'joao', 'trocar teste', 411.11),
(73, 'thyago', '2020-07-18 23:41:00', 'thyago', 'teste', 400);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id_cliente` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
