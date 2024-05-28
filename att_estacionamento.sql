-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 05:23
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
-- Banco de dados: `att_estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estacionamentos`
--

CREATE TABLE `estacionamentos` (
  `ESTACIONAMENTO` int(4) NOT NULL,
  `DESCRICAO` varchar(50) DEFAULT NULL,
  `CAPACIDADE` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estacionamentos`
--

INSERT INTO `estacionamentos` (`ESTACIONAMENTO`, `DESCRICAO`, `CAPACIDADE`) VALUES
(1, 'YPÊ', 800);

-- --------------------------------------------------------

--
-- Estrutura para tabela `movimentacoes`
--

CREATE TABLE `movimentacoes` (
  `MOVIMENTACAO` int(4) NOT NULL,
  `ESTACIONAMENTO` int(11) NOT NULL,
  `DT_ENTRADA` datetime NOT NULL,
  `DT_SAIDA` datetime DEFAULT NULL,
  `PLACA` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `movimentacoes`
--

INSERT INTO `movimentacoes` (`MOVIMENTACAO`, `ESTACIONAMENTO`, `DT_ENTRADA`, `DT_SAIDA`, `PLACA`) VALUES
(1, 1, '2024-05-27 23:49:23', '2024-05-27 23:52:34', 'AAABB'),
(2, 1, '2024-05-28 00:21:27', NULL, 'AA45BB'),
(3, 1, '2024-05-28 00:21:30', NULL, 'AA45BB'),
(4, 1, '2024-05-28 00:21:32', NULL, 'AA45BB'),
(5, 1, '2024-05-28 00:21:33', NULL, 'AA45BB'),
(6, 1, '2024-05-28 00:21:34', NULL, 'AA45BB');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `estacionamentos`
--
ALTER TABLE `estacionamentos`
  ADD PRIMARY KEY (`ESTACIONAMENTO`);

--
-- Índices de tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  ADD PRIMARY KEY (`MOVIMENTACAO`),
  ADD KEY `ESTACIONAMENTO` (`ESTACIONAMENTO`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estacionamentos`
--
ALTER TABLE `estacionamentos`
  MODIFY `ESTACIONAMENTO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  MODIFY `MOVIMENTACAO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `movimentacoes`
--
ALTER TABLE `movimentacoes`
  ADD CONSTRAINT `movimentacoes_ibfk_1` FOREIGN KEY (`ESTACIONAMENTO`) REFERENCES `estacionamentos` (`ESTACIONAMENTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
