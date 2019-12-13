-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Dez-2019 às 17:13
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vipdeskdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

DROP TABLE IF EXISTS `atendimentos`;
CREATE TABLE IF NOT EXISTS `atendimentos` (
  `id_responsavel` int(11) NOT NULL,
  `id_chamado` int(11) NOT NULL,
  PRIMARY KEY (`id_responsavel`,`id_chamado`),
  KEY `id_chamado` (`id_chamado`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

DROP TABLE IF EXISTS `chamados`;
CREATE TABLE IF NOT EXISTS `chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `classe` text NOT NULL,
  `id_responsavel` int(11) DEFAULT NULL,
  `id_fase` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `data_inicial` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_responsavel` (`id_responsavel`),
  KEY `id_fase` (`id_fase`),
  KEY `id_funcionario` (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `descricao`, `classe`, `id_responsavel`, `id_fase`, `id_funcionario`, `data_inicial`, `data_final`) VALUES
(18, 'Pc sem rede', 'Problemas de rede', NULL, 1, 6, '2019-12-13', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases`
--

DROP TABLE IF EXISTS `fases`;
CREATE TABLE IF NOT EXISTS `fases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fases`
--

INSERT INTO `fases` (`id`, `nome`) VALUES
(1, 'Tasks'),
(2, 'Make'),
(3, 'In progress'),
(4, 'Review'),
(5, 'Done');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` text NOT NULL,
  `id_setor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id_setor` (`id_setor`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `email`, `senha`, `id_setor`) VALUES
(4, 'Bruno ', 'bruno@hotmail.com', '123', 8),
(3, 'Marcos', 'marcos@teste.com.br', '123456', 8),
(5, 'DANILO', 'sistemasweb@gmail.com', '123', 9),
(6, 'Rafael', 'rafael@gmail.com', '123', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsaveis`
--

DROP TABLE IF EXISTS `responsaveis`;
CREATE TABLE IF NOT EXISTS `responsaveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `responsaveis`
--

INSERT INTO `responsaveis` (`id`, `nome`, `email`, `senha`) VALUES
(6, 'Fernando ', 'fernando@gmail.com', '123'),
(5, 'luiz', 'luiz@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

DROP TABLE IF EXISTS `setores`;
CREATE TABLE IF NOT EXISTS `setores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `nome`) VALUES
(9, 'RH'),
(8, 'Financeiro'),
(11, 'Planejamento Comercial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

DROP TABLE IF EXISTS `telefones`;
CREATE TABLE IF NOT EXISTS `telefones` (
  `id_funcionario` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`id_funcionario`,`telefone`),
  UNIQUE KEY `telefone` (`telefone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
