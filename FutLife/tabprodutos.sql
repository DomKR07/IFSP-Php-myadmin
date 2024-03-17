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
-- Estrutura para tabela `tabprodutos`
--

CREATE TABLE `tabprodutos` (
  `proId` int(11) NOT NULL,
  `proDescricao` varchar(255) DEFAULT NULL,
  `proImagem` varchar(30) NOT NULL,
  `proPreco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabprodutos`
--

INSERT INTO `tabprodutos` (`proId`, `proDescricao`, `proImagem`, `proPreco`) VALUES
(10, 'Camisa Oficial de Mandante do Palmeiras', 'Palmeiras1', 275.00),
(11, 'Camisa Oficial de Visitante do Palmeiras', 'Palmeiras2', 275.00),
(13, 'Camisa Oficial 3 do Palmeiras', 'Palmeiras3', 275.00),
(14, 'Camisa Oficial Goleiro do Palmeiras', 'Palmeiras4', 275.00),
(15, 'Camisa Edição Especial GOAT Cristiano Ronaldo - CR7', 'CR7', 350.00),
(17, 'Camisa Edição Especial GOAT Neymar - NJ10', 'Neymar', 350.00),
(18, 'Camisa Edição Especial GOAT Messi - LM10', 'Messi', 350.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabprodutos`
--
ALTER TABLE `tabprodutos`
  ADD PRIMARY KEY (`proId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabprodutos`
--
ALTER TABLE `tabprodutos`
  MODIFY `proId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
