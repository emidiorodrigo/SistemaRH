-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24-Fev-2017 às 19:22
-- Versão do servidor: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursosFuncionario`
--

CREATE TABLE `cursosFuncionario` (
  `cursoID` int(10) NOT NULL,
  `nomeCurso` varchar(50) NOT NULL,
  `cargaHoraria` varchar(10) NOT NULL,
  `finalizado` tinyint(1) NOT NULL,
  `certificado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursosFuncionario`
--

INSERT INTO `cursosFuncionario` (`cursoID`, `nomeCurso`, `cargaHoraria`, `finalizado`, `certificado`) VALUES
(1, 'informatica', '3000', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `data`
--

CREATE TABLE `data` (
  `dataID` int(10) NOT NULL,
  `dataAdmissao` date NOT NULL,
  `dataDemissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionarios` (
  `id` serial not null AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `supervisor` varchar(100) DEFAULT NULL,
  `data_demissao` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone1` varchar(60) DEFAULT NULL,
  `telefone2` varchar(60) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `rua` varchar(500) DEFAULT NULL,
  `numero` int(50) DEFAULT NULL,
  `bairo` varchar(200) DEFAULT NULL,
  `faculdade` varchar(500) DEFAULT NULL,
  `curso` varchar(500) DEFAULT NULL,
  `ano_conclusao` date DEFAULT NULL,
  `termino_previsto` date DEFAULT NULL,
  `faculdade_pos` varchar(500) DEFAULT NULL,
  `curso_pos` varchar(500) DEFAULT NULL,
  `ano_conclusao_pos` date DEFAULT NULL,
  `termino_previsto_pos` date DEFAULT NULL,
  `motivo_advertencia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `tipo` varchar(50) DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `foto`, `tipo`) VALUES
(1, 'Rodrigo', 'rodrigo', '202cb962ac59075b964b07152d234b70', '', 'usuario'),
(2, 'Renato Kira', 'kira', '202cb962ac59075b964b07152d234b70', 'https://img.fstatic.com/A0BtZh6SemLgZNgfIslNQVAh9Rs=/full-fit-in/640x480/https://cdn.fstatic.com/media/accounts/avatar/2013/07/b7c4d0c5-f2d5-44c1-963d-7d34fcbae456.jpg', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursosFuncionario`
--
ALTER TABLE `cursosFuncionario`
  ADD PRIMARY KEY (`cursoID`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`dataID`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursosFuncionario`
--
ALTER TABLE `cursosFuncionario`
  MODIFY `cursoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `dataID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
