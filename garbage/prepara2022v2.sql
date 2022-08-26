-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2022 às 15:15
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prepara2022v2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(2) NOT NULL,
  `id_escola` int(2) NOT NULL,
  `ano_escolaridade` int(6) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `pontuacao_m` int(2) DEFAULT NULL,
  `pontuacao_p` int(2) DEFAULT NULL,
  `m01` enum('A','B','C','D') DEFAULT NULL,
  `m01_correta` varchar(1) DEFAULT NULL,
  `m02` enum('A','B','C','D') DEFAULT NULL,
  `m02_correta` varchar(1) DEFAULT NULL,
  `m03` enum('A','B','C','D') DEFAULT NULL,
  `m03_correta` varchar(1) DEFAULT NULL,
  `m04` enum('A','B','C','D') DEFAULT NULL,
  `m04_correta` varchar(1) DEFAULT NULL,
  `m05` enum('A','B','C','D') DEFAULT NULL,
  `m05_correta` varchar(1) DEFAULT NULL,
  `m06` enum('A','B','C','D') DEFAULT NULL,
  `m06_correta` varchar(1) DEFAULT NULL,
  `m07` enum('A','B','C','D') DEFAULT NULL,
  `m07_correta` varchar(1) DEFAULT NULL,
  `m08` enum('A','B','C','D') DEFAULT NULL,
  `m08_correta` varchar(1) DEFAULT NULL,
  `m09` enum('A','B','C','D') DEFAULT NULL,
  `m09_correta` varchar(1) DEFAULT NULL,
  `m10` enum('A','B','C','D') DEFAULT NULL,
  `m10_correta` varchar(1) DEFAULT NULL,
  `p01` enum('A','B','C','D') DEFAULT NULL,
  `p01_correta` varchar(1) DEFAULT NULL,
  `p02` enum('A','B','C','D') DEFAULT NULL,
  `p02_correta` varchar(1) DEFAULT NULL,
  `p03` enum('A','B','C','D') DEFAULT NULL,
  `p03_correta` varchar(1) DEFAULT NULL,
  `p04` enum('A','B','C','D') DEFAULT NULL,
  `p04_correta` varchar(1) DEFAULT NULL,
  `p05` enum('A','B','C','D') DEFAULT NULL,
  `p05_correta` varchar(1) DEFAULT NULL,
  `p06` enum('A','B','C','D') DEFAULT NULL,
  `p06_correta` varchar(1) DEFAULT NULL,
  `p07` enum('A','B','C','D') DEFAULT NULL,
  `p07_correta` varchar(1) DEFAULT NULL,
  `p08` enum('A','B','C','D') DEFAULT NULL,
  `p08_correta` varchar(1) DEFAULT NULL,
  `p09` enum('A','B','C','D') DEFAULT NULL,
  `p09_correta` varchar(1) DEFAULT NULL,
  `p10` enum('A','B','C','D') DEFAULT NULL,
  `p10_correta` varchar(1) DEFAULT NULL,
  `ok` tinyint(1) NOT NULL,
  `gravado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_escola` int(2) NOT NULL,
  `nome_escola` varchar(100) NOT NULL,
  `usuario` varchar(9) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `fk_AlunoEscola` (`id_escola`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_escola`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_escola` int(2) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_AlunoEscola` FOREIGN KEY (`id_escola`) REFERENCES `usuarios` (`id_escola`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
