-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Abr-2023 às 22:08
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('12300025262', 'Casimiro', 'Migel', '1993-10-20', '18996320412', 'ceze@outlook.com', 'ceze123'),
('123123123', 'miguel', 'silva', '2006-12-23', '123123123', 'miguel@gmail.com', 'migual123'),
('12312312300', 'gab', 'Perez', '2007-02-18', '18981617763', 'gab@eu.com', '`gab123'),
('12312312310', 'Roguer', 'Guedes', '1992-03-12', '18912312312', 'guedes10@gmail.com', 'amem123'),
('123123123123', 'TESTE', '2', '2023-04-05', '12121212', 'teste@gmail.com', '1234'),
('12345678910', 'JosÃ©', 'silva', '3333-03-31', '18981617763', 'zÃ©@gmail.com', 'j123'),
('52125893800', 'Rafael', 'Perez', '2005-03-28', '18981617763', 'rafael@gmail.com', 'rafael123'),
('53651019861', 'dino', 'sauro', '1986-03-24', '18981617763', 'dino@gmail.com', 'd123'),
('55566628422', 'Ludmilla', 'Gonçalves', '1993-05-04', '18992220102', 'lud_numanice@outlook.com', 'numanice'),
('77700707007', 'Cristiano', 'Ronaldo', '1987-07-07', '18900070707', 'cr7@gmail.com', 'sete7'),
('77785295623', 'Beyoncé', 'Carter', '1981-09-04', '18996325852', 'beyonce_com_c@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `fun_cpf` int(11) NOT NULL,
  `fun_nome` varchar(100) NOT NULL,
  `fun_sobrenome` varchar(100) NOT NULL,
  `fun_dataNasc` date NOT NULL,
  `fun_telefone` int(20) NOT NULL,
  `fun_cargo` varchar(150) NOT NULL,
  `fun_salario` float NOT NULL,
  `fun_email` varchar(150) NOT NULL,
  `fun_senha` varchar(150) NOT NULL,
  PRIMARY KEY (`fun_cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`fun_cpf`, `fun_nome`, `fun_sobrenome`, `fun_dataNasc`, `fun_telefone`, `fun_cargo`, `fun_salario`, `fun_email`, `fun_senha`) VALUES
(2147483647, 'Yan', 'Andrade', '2023-04-05', 2147483647, 'Prostituto', 12000, 'yan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `pro_cod` varchar(100) NOT NULL,
  `pro_nome` varchar(100) NOT NULL,
  `pro_fab` varchar(200) NOT NULL,
  `pro_des` varchar(200) NOT NULL,
  `pro_val` varchar(100) NOT NULL,
  `pro_qtd` varchar(100) NOT NULL,
  `pro_img` varchar(300) NOT NULL,
  PRIMARY KEY (`pro_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`pro_cod`, `pro_nome`, `pro_fab`, `pro_des`, `pro_val`, `pro_qtd`, `pro_img`) VALUES
('80', 'Curintia', ' nike', ' camiseta basica curintia', ' 200', ' 2', '../img/produtos/59e5fb0ee573aca3e60186059e11e9f5.jpg'),
('65', 'CurintiaBRRRR', ' Addidas', ' camisa feia', ' 90', ' 2', '../img/produtos/f430e5b3a276dd48bccde91e6e2fea08.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
