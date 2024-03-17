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

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  ADD PRIMARY KEY (`funId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  MODIFY `funId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
