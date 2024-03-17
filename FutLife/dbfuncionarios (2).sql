-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/12/2023 às 21:40
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
-- Estrutura para tabela `tabcarrinho`
--

CREATE TABLE `tabcarrinho` (
  `carId` int(11) NOT NULL,
  `carProId` int(11) NOT NULL,
  `carQtde` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabcarrinho`
--

INSERT INTO `tabcarrinho` (`carId`, `carProId`, `carQtde`) VALUES
(16, 10, 1);

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

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabfuncionarios`
--

CREATE TABLE `tabfuncionarios` (
  `funId` int(11) NOT NULL,
  `funNome` varchar(30) NOT NULL,
  `funSenha` varchar(10) NOT NULL,
  `funEmail` varchar(50) NOT NULL,
  `funCargo` varchar(20) NOT NULL,
  `funUsuario` varchar(10) NOT NULL,
  `funFoto` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabfuncionarios`
--

INSERT INTO `tabfuncionarios` (`funId`, `funNome`, `funSenha`, `funEmail`, `funCargo`, `funUsuario`, `funFoto`) VALUES
(3, 'Domenico', '1234', 'dkrizzo2005@gmail.com', 'Chefe', 'Dom', 'Funcionario1'),
(4, 'Monica', '0607', 'monica.hemiko@outlook.com', 'Administradora', 'Monica', 'Funcionario2'),
(5, 'Cristina', '6718', 'crissu@gmail.com', 'Empacotadora', 'Cris', 'Funcionario2');

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
-- Índices de tabela `tabcarrinho`
--
ALTER TABLE `tabcarrinho`
  ADD PRIMARY KEY (`carId`);

--
-- Índices de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  ADD PRIMARY KEY (`cliId`);

--
-- Índices de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  ADD PRIMARY KEY (`funId`);

--
-- Índices de tabela `tabprodutos`
--
ALTER TABLE `tabprodutos`
  ADD PRIMARY KEY (`proId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabcarrinho`
--
ALTER TABLE `tabcarrinho`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  MODIFY `cliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  MODIFY `funId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tabprodutos`
--
ALTER TABLE `tabprodutos`
  MODIFY `proId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
