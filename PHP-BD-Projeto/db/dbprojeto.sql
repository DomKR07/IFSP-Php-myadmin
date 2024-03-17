-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/12/2023 às 23:54
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
-- Banco de dados: `dbprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `AdmId` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administradores`
--

INSERT INTO `administradores` (`AdmId`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Joel', 'joel@adm.com', 'joel123'),
(2, 'Antonio', 'antonio@adm.com', 'antonio123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaId` int(11) NOT NULL,
  `NomeCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaId`, `NomeCategoria`) VALUES
(1, 'Aves'),
(2, 'Carne Bovina'),
(3, 'Carne Suína'),
(4, 'Frutos do Mar'),
(6, 'Queijos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ClienteId` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` char(64) NOT NULL,
  `Endereco` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ClienteId`, `Nome`, `Email`, `Senha`, `Endereco`) VALUES
(27, 'Jorge', 'jorge@gmail.com', 'jorge123', 'Rua Pastel, 23'),
(28, 'Pedro Lauton', 'pedro@gmail.com', 'pedro123', 'Rua Graviola, 45'),
(29, 'Leonardo', 'leo@gmail.com', 'leo123', 'Rua Nova, 24'),
(30, 'Carlos', 'carlos@gmail.com', 'carlos123', 'Rua Silva,78'),
(31, 'Isabella', 'isa@gmail.com', 'isa123', 'Rua Dia, 67'),
(32, 'Caio', 'caio@gmail.com', 'caio123', 'Rua Noite, 68'),
(33, 'Domenico', 'dom@gmail.com', 'dom123', 'Rua Palmeiras, 51'),
(34, 'Tiago', 'tiago@gmail.com', 'tiago123', 'Rua Coda, 09'),
(35, 'Alex', 'alex@gmail.com', 'alex123', 'Rua Vegas, 89'),
(36, 'Gabriel', 'gabriel@gmail.com', 'gabriel123', 'Rua Casa, 34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `ProdutoId` int(11) NOT NULL,
  `NomeProduto` varchar(120) NOT NULL,
  `PorcaoUnidadeKg` float NOT NULL,
  `PrecoUnitario` float NOT NULL,
  `Lote` varchar(50) NOT NULL,
  `CategoriaId` int(11) NOT NULL,
  `FornecedorId` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `fotoProduto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`ProdutoId`, `NomeProduto`, `PorcaoUnidadeKg`, `PrecoUnitario`, `Lote`, `CategoriaId`, `FornecedorId`, `Quantidade`, `fotoProduto`) VALUES
(1, 'Peito de frango', 1, 52, 'e3r23r', 1, 2, 1000, 'corte1_aves.png'),
(2, 'Coxa de frango', 1, 7.29, 'e3rrer3', 1, 2, 1000, 'corte2_aves.png'),
(3, 'Pé de frango', 1, 7.99, 'e3rrer3', 1, 2, 1000, 'corte3_aves.png'),
(4, 'Coração de frango', 1, 37.9, 'e3r23r', 1, 2, 1000, 'corte4_aves.png'),
(5, 'Asas de frango', 1, 19.94, 'e3rrer3', 1, 2, 1000, 'corte5_aves.png'),
(6, 'Contra filé', 1, 32.99, 'e3r23r', 2, 3, 1000, 'corte1_bovinos.png'),
(7, 'Costela', 1, 34.19, 'e3rrer3', 2, 3, 1000, 'corte2_bovinos.png'),
(8, 'Patinho', 1, 40.99, 'e3rrer3', 2, 3, 1000, 'corte3_bovinos.png'),
(9, 'Maminha', 1, 33.99, 'e3rrer3', 2, 3, 1000, 'corte4_bovinos.png'),
(10, 'Picanha', 1, 58.5, 'e3rrer3', 2, 3, 1000, 'corte5_bovinos.png'),
(11, 'Linguiça', 1, 36.99, 'e3r23r', 3, 2, 1000, 'corte1_suinos.png'),
(12, 'Lombo', 1, 30, 'e3r23r', 3, 3, 1000, 'corte2_suinos.png'),
(13, 'Costelinha', 1, 16.79, 'e3r23r', 3, 2, 1000, 'corte3_suinos.png'),
(14, 'Pernil', 1, 27.89, 'e3r23r', 3, 2, 1000, 'corte4_suinos.png'),
(15, 'Bisteca', 1, 13.78, 'e3rrer3', 3, 2, 1000, 'corte5_suinos.png'),
(16, 'Caranguejo', 1, 86.9, 'e3r23r', 4, 3, 1000, 'corte1_frutos.png'),
(17, 'Camarão', 1, 84.9, 'e3rrer3', 4, 3, 1000, 'corte2_frutos.png'),
(18, 'Lula', 1, 89, 'e3rrer3', 4, 3, 1000, 'corte3_frutos.png'),
(19, 'Tilápia', 1, 59.98, 'e3r23r', 4, 3, 1000, 'corte4_frutos.png'),
(20, 'Ostras', 1, 60, 'e3rrer3', 4, 3, 1000, 'corte5_frutos.png'),
(21, 'Parmesão', 1, 81.67, 'e3r23r', 6, 1, 1000, 'corte1_queijos.png'),
(22, 'Mussarela', 1, 57.6, 'e3rrer3', 6, 1, 1000, 'corte2_queijos.png'),
(23, 'Cheddar', 1, 59.6, 'e3rrer3', 6, 1, 1000, 'corte3_queijos.png'),
(24, 'Gorgonzola', 1, 114.68, 'e3rrer3', 6, 1, 1000, 'corte4_queijos.png'),
(25, 'Provolone', 1, 98.56, 'e3r23r', 6, 1, 1000, 'corte5_queijos.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `FornecedorId` int(11) NOT NULL,
  `NomeFornecedor` varchar(50) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `EmailFornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`FornecedorId`, `NomeFornecedor`, `Telefone`, `EmailFornecedor`) VALUES
(1, 'LeiteAutêntico', '(11) 99999-9990', 'autenticoleite@gmail.com'),
(2, 'FazuelleCortes', '(11) 99999-9999', 'fazuellecortes@gmail.com'),
(3, 'Fogonoboi', '(11) 99999-9999', 'fogonoboi@gmail');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` char(64) NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Id`, `Nome`, `Telefone`, `Email`, `Senha`, `Cargo`) VALUES
(3, 'Alan', '(11) 67546764', 'alan@fun.com', 'alan123', 'Auxiliar'),
(4, 'Vinicius', '(11) 758467593', 'vini@fun.com', 'vini123', 'Auxiliar'),
(5, 'Caio', '(11) 83950483', 'caio@fun.com', 'caio123', 'Gerente'),
(6, 'Pedro Lauton', '(11)  748395849', 'lauton@fun.com', 'lauton123', 'Chefe'),
(7, 'Sérgio', '(11) 5784839274', 'sergio@fun.com', 'sergio123', 'CEO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `ItemPedidoId` int(11) NOT NULL,
  `PedidoId` int(11) NOT NULL,
  `ProdutoId` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Imagem` varchar(20) NOT NULL,
  `Quantidade` int(99) NOT NULL,
  `Preco` float NOT NULL,
  `Total` float NOT NULL,
  `CodigoPedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`ItemPedidoId`, `PedidoId`, `ProdutoId`, `Nome`, `Imagem`, `Quantidade`, `Preco`, `Total`, `CodigoPedido`) VALUES
(58, 46, 1, 'Peito de frango', 'corte1_aves.png', 4, 52, 208, 'PE67377'),
(59, 47, 16, 'Caranguejo', 'corte1_frutos.png', 3, 86.9, 260.7, 'PE50711'),
(60, 48, 24, 'Gorgonzola', 'corte4_queijos.png', 4, 114.68, 458.72, 'PE69341'),
(61, 48, 23, 'Cheddar', 'corte3_queijos.png', 3, 59.6, 178.8, 'PE69341'),
(62, 48, 1, 'Peito de frango', 'corte1_aves.png', 3, 52, 156, 'PE69341'),
(63, 49, 10, 'Picanha', 'corte5_bovinos.png', 10, 58.5, 585, 'PE21446'),
(64, 50, 14, 'Pernil', 'corte4_suinos.png', 3, 27.89, 83.67, 'PE07888');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `PedidoId` int(11) NOT NULL,
  `ClienteId` int(11) NOT NULL,
  `CodigoPedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`PedidoId`, `ClienteId`, `CodigoPedido`) VALUES
(46, 28, 'PE67377'),
(47, 28, 'PE50711'),
(48, 29, 'PE69341'),
(49, 31, 'PE21446'),
(50, 31, 'PE07888');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`AdmId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaId`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`ProdutoId`),
  ADD KEY `CategoriaId` (`CategoriaId`),
  ADD KEY `FornecedorId` (`FornecedorId`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`FornecedorId`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD PRIMARY KEY (`ItemPedidoId`),
  ADD KEY `PedidoId` (`PedidoId`),
  ADD KEY `ProdutoId` (`ProdutoId`),
  ADD KEY `CodigoPedido` (`CodigoPedido`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`PedidoId`),
  ADD UNIQUE KEY `CodigoPedido` (`CodigoPedido`),
  ADD KEY `ClienteId` (`ClienteId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `AdmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ProdutoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `FornecedorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `ItemPedidoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `PedidoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`CategoriaId`) REFERENCES `categorias` (`CategoriaId`),
  ADD CONSTRAINT `estoque_ibfk_2` FOREIGN KEY (`FornecedorId`) REFERENCES `fornecedores` (`FornecedorId`);

--
-- Restrições para tabelas `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD CONSTRAINT `itens_pedido_ibfk_1` FOREIGN KEY (`PedidoId`) REFERENCES `pedidos` (`PedidoId`),
  ADD CONSTRAINT `itens_pedido_ibfk_2` FOREIGN KEY (`ProdutoId`) REFERENCES `estoque` (`ProdutoId`),
  ADD CONSTRAINT `itens_pedido_ibfk_3` FOREIGN KEY (`CodigoPedido`) REFERENCES `pedidos` (`CodigoPedido`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ClienteId`) REFERENCES `clientes` (`ClienteId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
