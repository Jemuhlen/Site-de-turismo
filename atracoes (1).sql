-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 14:53
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atracoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `local` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `imagem` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`local`, `descricao`, `endereco`, `horarios`, `telefone`, `imagem`, `id`) VALUES
('Cascata Três Quedas', 'Localizada no caminho da Boa Esperança, assim como presente em uma placa sinalizando o local, a escada que leva até a cascata foi inaugurada em 2013. Facil acesso e descida segura.', 'Endereço: Caminho das Pipas - Boa Esperança, Rolante - RS, 95690-000', 'Horario: Aberto 24 horas', 'Telefone: (51) 3547-', '1669297432.jpeg', 4),
('Biergarten Eltz', 'Local para eventos no Rio Grande do Sul', 'Rua Henrique Laux, 116 - Areia, Rolante - RS, 95690-000', '', '(51) 98012-1380', '1669587779.jpeg', 5),
('Cantina Figueira Branca', 'Opções de serviço: Refeições; Espaço ideal para encontro informal com amigos e família ou até mesmo reuniões de negócios.', 'Estrada Boa Esperança, 550, no bairro Boa Esperanca, na cidade Rolante, RS, 95690-000', 'quinta-feira	Fechado sexta-feira	Fechado sábado	', '(51) 99814-9016 ou (', '1669588542.jpeg', 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
