-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Mar-2021 às 08:35
-- Versão do servidor: 5.6.34
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
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `logradouro`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(2, 'francisco das chagas de sousa', 'f.chagas83@yahoo.com', 'Quadra TrÃªs (Cj Xingu)', 'Coqueiro', 'BelÃ©m', 'PA', '66650-488'),
(3, 'JÃºlio Gabriel Santos de Sousa', 'passareinoime@gmail.com', 'Quadra TrÃªs (Cj Xingu)', 'Coqueiro', 'BelÃ©m', 'Pa', '66650-488'),
(4, 'amanda aparecida santos de sousa', 'amanda09santos15@gmail.com', 'Quadra TrÃªs (Cj Xingu)', 'Coqueiro', 'BelÃ©m', 'Pa', '66650-488'),
(5, 'LetÃ­cia Marcela Santos de Sousa', 'fulan@gmail.com', 'Quadra TrÃªs (Cj Xingu)', 'Coqueiro', 'BelÃ©m', 'Pa', '66650-488'),
(6, 'Rosemery Santos Camarao', 'merinhacam@gmail.com.br', 'Quadra TrÃªs (Cj Xingu)', 'Coqueiro', 'BelÃ©m', 'Pa', '66650-488');

-- --------------------------------------------------------

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

