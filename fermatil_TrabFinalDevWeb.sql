-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Dez-2019 às 16:28
-- Versão do servidor: 10.1.17-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fermatil_TrabFinalDevWeb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `codigo` int(15) NOT NULL,
  `responsavel` varchar(25) NOT NULL,
  `dtinicio` date NOT NULL,
  `dtfinal` date NOT NULL,
  `descricao` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`codigo`, `responsavel`, `dtinicio`, `dtfinal`, `descricao`) VALUES
(1, 'Responsavel 1', '2018-06-12', '2018-07-15', 'Esta é a descrição do problema e sua solução'),
(2, 'Responsavel 2', '2018-07-15', '2018-08-16', 'Descrição'),
(3, 'Responsavel 2', '2015-12-15', '2016-02-16', 'Descrição 3 do problema e solução'),
(4, 'Responsavel 1', '2016-12-07', '2017-01-13', 'teste'),
(5, 'Responsavel 1', '2015-12-23', '2016-03-22', 'Descrição do Atendimento');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
