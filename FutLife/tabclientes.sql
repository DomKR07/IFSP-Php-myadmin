-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/12/2023 às 21:46
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbfuncionarios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabclientes`
--

CREATE TABLE `tabclientes` (
  `cliId` int(11) NOT NULL,
  `cliNome` varchar(40) NOT NULL,
  `cliTelefone` varchar(15) DEFAULT NULL,
  `cliDataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabclientes`
--

INSERT INTO `tabclientes` (`cliId`, `cliNome`, `cliTelefone`, `cliDataNasc`) VALUES
(2, 'Eytor ', '(11)994762003', '2004-06-09'),
(3, 'Sophia', '(11)060783053', '1994-07-09'),
(6, 'Marcelo', '(11)996586718', '1973-03-31'),
(7, 'Isabella', '(11)77563495', '1971-08-30');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  ADD PRIMARY KEY (`cliId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  MODIFY `cliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
