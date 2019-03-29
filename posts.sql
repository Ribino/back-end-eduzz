-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/03/2019 às 20:08
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `TITULO` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AUTOR` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CATEGORIA` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEXTO` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`TITULO`, `AUTOR`, `CATEGORIA`, `TEXTO`, `ID`) VALUES
('testar', 'testar', 'testar', 'SKDOADKAOSDKAOD KASOKD OSAKD OSAKD OASK OA DKAODK OK OAKFOA JFIAFJA ODJF IA JOFA JAIOF JOISOFJAOSI JOIA DJAOID JAOS JI JSOIA DJAOI JSOI JOISA JAS JD IOASIJ FIOASJ IOAJ AOIJF IOAS JIAFJ OIAS JAO FOIAAS', 17),
('ÃÃÃÃÃÃÃÃÃ', 'Ã‰Ã‰Ã‰Ã‰Ã‰Ã‰Ã‰Ã‰Ã‰', 'Ã“Ã“Ã“Ã“Ã“Ã“', '	Ã“Ã“Ã“Ã“Ã“Ã“Ã“Ã“Ã“OÃ“Ã“Ã“Â´ÃšÂ´Â´UÃšÃšÃšUÂ´Â´UU', 19),
('Rogerinho', 'Rogerinho Rogerinho', 'Conselhos do rogerinho', 'Oi eu sou o rogerinho', 20);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
