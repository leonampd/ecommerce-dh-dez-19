-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 11/05/2019 às 08:53
-- Versão do servidor: 5.5.62
-- Versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(10) NOT NULL,
  `valor` int(11) NOT NULL,
  `id_transacao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `preco_unitario` varchar(10) NOT NULL,
  `url_imagem` varchar(255) DEFAULT NULL,
  `quantidade_paginas` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tipo_produto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco_unitario`, `url_imagem`, `quantidade_paginas`, `link`, `tipo_produto`) VALUES
(1, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'Even bad code can function. But if code isn’t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn’t have to be that way.', '20271', 'https://images-na.ssl-images-amazon.com/images/I/515iEcDr1GL._SX385_BO1,204,203,200_.jpg', 431, '', 'fisico'),
(2, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'Even bad code can function. But if code isn’t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn’t have to be that way.', '9054', 'https://images-na.ssl-images-amazon.com/images/I/515iEcDr1GL._SX385_BO1,204,203,200_.jpg', 0, 'http://cleancode', 'digital'),
(3, 'Refactoring: Improving the Design of Existing Code (2nd Edition)', '\"Whenever you read [Refactoring], it’s time to read it again. And if you haven’t read it yet, please do before writing another line of code.\"', '22390', 'https://images-na.ssl-images-amazon.com/images/I/41LBzpPXCOL._SX379_BO1,204,203,200_.jpg', 448, NULL, 'fisico'),
(4, 'Refactoring: Improving the Design of Existing Code (2nd Edition)', '\"Whenever you read [Refactoring], it’s time to read it again. And if you haven’t read it yet, please do before writing another line of code.\"', '13389', 'https://images-na.ssl-images-amazon.com/images/I/41LBzpPXCOL._SX379_BO1,204,203,200_.jpg', NULL, 'http://refactoring', 'digital'),
(5, 'Padrões de Projetos: Soluções Reutilizáveis de Software Orientados a Objetos', 'Catálogo de soluções simples e sucintas para os problemas mais freqüentes na área de projeto, assinado por quatro profissionais com grande experiência em software orientado a objetos. Um best-seller mundial.', '10725', 'https://images-na.ssl-images-amazon.com/images/I/51exUj78lZL._SX348_BO1,204,203,200_.jpg', 368, NULL, 'fisico'),
(6, 'Padrões de Projetos: Soluções Reutilizáveis de Software Orientados a Objetos', 'Catálogo de soluções simples e sucintas para os problemas mais freqüentes na área de projeto, assinado por quatro profissionais com grande experiência em software orientado a objetos. Um best-seller mundial.', '10155', 'https://images-na.ssl-images-amazon.com/images/I/51exUj78lZL._SX348_BO1,204,203,200_.jpg', NULL, 'http://designpatterns', 'digital');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
