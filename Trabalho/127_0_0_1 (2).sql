-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2018 às 22:55
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdweb1`
--
DROP DATABASE IF EXISTS `bdweb1`;
CREATE DATABASE IF NOT EXISTS `bdweb1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdweb1`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE IF NOT EXISTS `consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_1_idx` (`id_cliente`),
  KEY `fk_2_idx` (`id_medico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `descricao`) VALUES
(1, 'pes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

DROP TABLE IF EXISTS `funcao`;
CREATE TABLE IF NOT EXISTS `funcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `descricao`) VALUES
(1, 'Médico'),
(2, 'Secretária/Recepcionista'),
(3, 'Cliente'),
(4, 'Gerente'),
(5, 'Diretor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcao` int(15) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_funcao` (`id_funcao`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_funcao`, `nome`, `email`, `login`, `senha`, `cpf`) VALUES
(1, 2, 'ANA CLARA SILVA PEREIRA', '', '', '', ''),
(2, 1, 'PAULO RICARDO BAPTISTA ALVARES', '', '', '', ''),
(3, 1, 'MARIA LÚCIA CARMEM SILVA', '', '', '', ''),
(4, 3, 'JOANA MARTINS DA SILVA', '', '', '', ''),
(5, 3, 'MARCOS CLAUDIO PINHEIRO MORAIS', '', '', '', ''),
(6, 3, 'MARIA APARECIDA LOPEZ', '', '', '', ''),
(7, 3, 'MARIANO CARVALHO VIEIRA RODRIGUES', '', '', '', ''),
(8, 1, 'JULIANA ALENCAR GONÇALVES', '', '', '', ''),
(9, 3, 'CICERO FARIAS DE BRITA', '', '', '', ''),
(10, 3, 'MARCOS ANTONIO GARCIA PRADO', '', '', '', ''),
(11, 3, 'BRUNO MATIAS CASTRO DE LIMA', '', '', '', ''),
(12, 3, 'DANIELE ALBUQUERQUE DE SOUSA', '', '', '', ''),
(13, 3, 'ANGELICA MOREIRA SILVANO ', '', '', '', ''),
(14, 3, 'MANOEL DA CRUZ GONÇALVES ', '', '', '', ''),
(15, 1, 'RENATO ALVES PINHEIRO', '', '', '', ''),
(16, 1, 'CAROLINE AGUIAR DA SILVA', '', '', '', ''),
(17, 3, 'DIEGO AZEVEDO GUILHERME', '', '', '', ''),
(18, 3, 'CARMEN AGOSTINHO ALVES ', '', '', '', ''),
(19, 5, 'ANDRE DE BARROS PINHEIRO', '', '', '', ''),
(20, 5, 'CAMILA CARVALHO MAGALHAES ', '', '', '', ''),
(21, 3, 'DEISE DOS SANTOS PINHEIRO', '', '', '', ''),
(22, 3, 'CARMELITA DIAS BRANCO', '', '', '', ''),
(23, 3, 'JOSIAS XAVIER FAUSTO LIMA', '', '', '', ''),
(24, 3, 'JOSE DA SILVA LOPEZ ', '', '', '', ''),
(25, 1, 'LILIAN MARIA GOMES MACIEL', '', '', '', ''),
(26, 5, 'JULIANO PEIXOTO MOTTA ', '', '', '', ''),
(27, 5, 'PAULA COSTA TORRES ', '', '', '', ''),
(28, 3, 'JULY TAVARES MARCIANO ', '', '', '', ''),
(29, 3, 'JOAO GABRIEL MENEZES DIAS', '', '', '', ''),
(30, 1, 'VITOR DANTAS', '', '', '', ''),
(31, 1, 'ITALO OTAVIANO DOS REIS', '', '', '', ''),
(32, 1, 'GUILHERME FARIAS FILHO', '', '', '', ''),
(33, 1, 'ITALO DOMINGUES MARTINS', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
