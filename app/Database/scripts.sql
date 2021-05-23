-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2021 às 16:23
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web_php_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_info`
--

CREATE TABLE `tb_info` (
                           `id` int(11) NOT NULL,
                           `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
                           `descricao` text COLLATE utf8_unicode_ci NOT NULL,
                           `icone` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_info`
--

INSERT INTO `tb_info` (`id`, `titulo`, `descricao`, `icone`) VALUES
(1, 'Missão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-chart-bar-32'),
(2, 'Visão', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-zoom-split'),
(3, 'Valores', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-satisfied');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem`
--

CREATE TABLE `tb_mensagem` (
                               `id` int(11) NOT NULL,
                               `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
                               `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
                               `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
                               `visualizada` tinyint(1) NOT NULL,
                               `data_envio` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_mensagem`
--

INSERT INTO `tb_mensagem` (`id`, `nome`, `email`, `mensagem`, `visualizada`, `data_envio`) VALUES
(1, 'Fábio Cantarino', 'fabio@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sollicitudin libero. Nulla nec ipsum gravida, iaculis ipsum vitae, convallis libero. ', 0, '22/05/2021'),

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_info`
--
ALTER TABLE `tb_info`
    ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_info`
--
ALTER TABLE `tb_info`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
