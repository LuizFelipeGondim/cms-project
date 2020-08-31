-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31-Ago-2020 às 22:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Luiz Felipe', 'l@gmail.com', 'Muito Bom!'),
(2, 'Fernando', 'f@gmail.com', 'Nullam convallis nulla quis venenatis elementum. Pellentesque pulvinar ipsum nec tincidunt tristique. Curabitur quis metus at ante convallis pretium. Phasellus eros ipsum, fringilla sed sollicitudin ut, imperdiet ac ligula. Duis in mollis turpis, quis accumsan enim. Morbi viverra rhoncus nisi, ut imperdiet mauris. Sed gravida in lorem eget ultrices.'),
(5, 'João', 'j@gmail.com', 'Quero um emprego');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome`, `descricao`) VALUES
(1, 'Felipe', 'Programador'),
(4, 'Luiz', 'Programador Junior'),
(6, 'Ruan', 'Programador'),
(9, 'João', 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(7, '                                                                                                                                                                                                                                                                                            <div class=\"col-md-4\">\r\n                        <h3><!-- colocar ícone -->Diferencial #1</h3>\r\n                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse \r\n                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue \r\n                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>\r\n                    </div>\r\n                    <div class=\"col-md-4\">\r\n                        <h3><!-- colocar ícone -->Diferencial #2</h3>\r\n                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse \r\n                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue \r\n                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>\r\n                    </div>\r\n                    <div class=\"col-md-4\">\r\n                        <h3><!-- colocar ícone -->Diferencial #3</h3>\r\n                        <p>Praesent at nisi nunc. Curabitur mollis dolor eget aliquet tincidunt. Suspendisse \r\n                            scelerisque felis turpis, vel commodo justo vestibulum ac. Nullam interdum congue \r\n                            gravida. Pellentesque imperdiet sem vitae mauris pretium suscipit.</p>\r\n                    </div>                                                                                                                                                                                ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
