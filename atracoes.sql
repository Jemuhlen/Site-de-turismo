-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 20:48
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
  `descricao` varchar(600) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `horarios` varchar(400) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `imagem` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`local`, `descricao`, `endereco`, `horarios`, `telefone`, `imagem`, `id`) VALUES
('Cascata Três Quedas', 'Localizada no caminho da Boa Esperança, assim como presente em uma placa sinalizando o local, a escada que leva até a cascata foi inaugurada em 2013. Facil acesso e descida segura.', 'Endereço: Caminho das Pipas - Boa Esperança, Rolante - RS, 95690-000', 'Horario: Aberto 24 horas', 'Telefone: (51) 3547-', '1669297432.jpeg', 1),
('Biergarten Eltz', 'Local para eventos no Rio Grande do Sul', 'Rua Henrique Laux, 116 - Areia, Rolante - RS, 95690-000', '', '(51) 98012-1380', '1669587779.jpeg', 2),
('Cantina Figueira Branca', 'Opções de serviço: Refeições; Espaço ideal para encontro informal com amigos e família ou até mesmo reuniões de negócios.', 'Estrada Boa Esperança, 550, no bairro Boa Esperanca, na cidade Rolante, RS, 95690-000', 'quinta-feira	Fechado sexta-feira	Fechado sábado	', '(51) 99814-9016 ou (', '1669588542.jpeg', 3),
('Vinícola sbardelotto', '', 'Boa Esperança, Rolante - RS, 95690-000', 'quarta-feira	07:30–11:45, 13:30–18:00\nquinta-feira	07:30–11:45, 13:30–18:00\nsexta-feira	07:30–11:45, 13:30–18:00\nsábado	07:30–11:45, 13:30–18:00\ndomingo	07:30–23:45\nsegunda-feira	07:30–11:45, 13:30–18', '(51) 3778-4611', '1670275434.jpg', 4),
('Casa Da Colonia', '', 'Av. Getúlio Vargas, 131 - Rolante, RS, 95690-000', 'quarta-feira	08:00–18:00\nquinta-feira	08:00–18:00\nsexta-feira	08:00–18:00\nsábado	09:00–17:00\ndomingo	09:00–17:00\nsegunda-feira	08:00–18:00\nterça-feira	08:00–18:00\n', '(51) 3547-3449', '1670347842.jpeg', 5),
('Cascata das Andorinhas', 'Também chamada de gruta das andorinhas, pela moradia dessas aves no local. Cascata entre rochas, formam um pequeno cânion, cai de uma altura de 15 metros e forma uma poça de 4 metros de profundidade. é possível banhar-se nela. Para chegar até a cascata é necessário realizar uma trilha apé, são em média 800 metros, sendo boa parte percorrida por um estrada larga e um pequeno percurso costeando o rio pela esquerda.Há placas indicando o caminho. Em torno de 20 minutos de trilha. Pode-se visitar em qualquer período do ano, mas aconselha-se o verão para poder banhar-se.', 'Boa Esperança, Rolante - RS, 95690-000', 'Aberto 24 horas', '', '1670349325.jpg', 6),
('Cascata Três Quedas', 'Localizada no caminho da Boa Esperança, assim como presente em uma placa sinalizando o local, a escada que leva até a cascata foi inaugurada em 2013. Facil acesso e descida segura.', 'Caminho das Pipas - Boa Esperança, Rolante - RS, 95690-000', 'Aberto 24 horas', '(51) 3547-1188', '1670350148.jpeg', 7),
('Dei Lazzari Vinicula', '', 'rua boa esperanca n 3449, Rolante - RS', 'quarta-feira	08:00–18:00 quinta-feira	08:00–18:00 sexta-feira	08:00–18:00 sábado	08:00–18:00 domingo	08:00–18:00 segunda-feira	08:00–18:00 terça-feira	08:00–18:00', '(51) 99944-6846', '1670350725.jpeg', 8),
('Fazenda Wolff', '', 'Campinas, Rolante - RS, 95690-000', '', '(51) 99996-7364', '1670350831.jpg', 9),
('Hotel Pousada Rolantchê', 'Acesso ao wifi, bar e restaurante;Quartos familiares, todos com casa de banho privativa. Oferece café da manhã.', 'RS-239, 64 - Rolante, RS, 95690-000', '', '(51) 99744-0793', '1670350924.jpg', 10),
('Morro Grande - Parque Municipal da Asa Delta', '', 'Morro Grande - Parque Municipal da Asa Delta', 'quarta-feira	08:00–19:00 quinta-feira	08:00–19:00 sexta-feira	08:00–19:00 sábado	08:00–20:00 domingo	08:00–20:00 segunda-feira	08:00–19:00 terça-feira	08:00–19:00', '(51) 99623-4751', '1670351210.jpeg', 11),
('Pórtico de Rolante', 'Entrada da cidade de Rolante com uma paisagem belíssima.Consegue-se conhecer tanto de passagem quando chega ou sai da cidade , quanto para tirar belas fotos.', 'Rodovia rs 239 rs 474, 95690000', 'Aberto', '', '1670351464.jpeg', 12),
('Pousada in mezzo ai monti', 'Uma pousada com dormitórios para uma pessoa, casal e casal com criança. Diária com café da manhã.', 'Boa Esperança - Zona Rural, Rolante - RS, 95690-000', 'Aberto 24 horas', '(51) 99722-3334', '1670351630.jpg', 13),
('Sucos Irmãos Colombo', '', 'Estrada geral boa esperança, 3390 - Boa Esperança, Rolante - RS, 95690-000', 'quarta-feira	08:00–12:00, 13:00–18:00\nquinta-feira	08:00–12:00, 13:00–18:00\nsexta-feira	08:00–12:00, 13:00–18:00\nsábado	08:00–12:00, 13:00–18:00\ndomingo	08:00–12:00, 13:00–18:00\nsegunda-feira	08:00–12:00, 13:00–18:00\nterça-feira	08:00–12:00, 13:00–18:00', '(51) 99953-0910', '1670351790.jpeg', 14),
('Vinhos e Sucos D\'Boa Esperança', '', 'Boa Esperança, Rolante - RS, 95690-000', '', '(51) 99912-0455', '1670352171.jpg', 15),
('Vinícola Dallarosa', 'Opções de serviço: Entrega', 'Estrada Boa Esperança, 3850 - Interior, Rolante - RS, 95690-000', 'quarta-feira	08:00–11:30, 13:30–18:00 quinta-feira	08:00–11:30, 13:30–18:00 sexta-feira	08:00–11:30, 13:30–18:00 sábado	09:00–12:00, 13:30–17:00 domingo	09:00–12:00, 13:30–17:00 segunda-feira	08:00–11:30, 13:30–18:00 terça-feira	08:00–11:30, 13:30–18:00', '(51) 3778-4613', '1670354297.webp', 16),
('Vinhos e Sucos Don Franchesco', '', 'Boa Esperança, Rolante - RS, 95690-000', 'quarta-feira	08:00–18:00 quinta-feira	08:00–18:00 sexta-feira	08:00–18:00 sábado	08:00–18:00 domingo	08:00–18:00 segunda-feira	08:00–18:00 terça-feira	08:00–18:00 Sugerir novos horários', '(51) 99647-9339', '1670354758.webp', 17),
('Vinhos Finger', '', 'Estr. Geral Boa Esperança, 2000 - Boa Esperança, Rolante - RS, 95690-000', 'quarta-feira	08:00–17:00 quinta-feira	08:00–17:00 sexta-feira	08:00–17:00 sábado	08:00–17:00 domingo	08:00–17:00 segunda-feira	08:00–17:00 terça-feira	08:00–17:00', '(51) 99938-4323', '1670354986.jpeg', 18),
('Vinícola Bennato', '', 'Estrada Municipal Boa Esperança, 2360, Rolante - RS, 95690-000\nÁreas atendidas: Rolante e as proximidades', 'quarta-feira	08:00–18:00 quinta-feira	08:00–18:00 sexta-feira	08:00–18:00 sábado	08:30–17:00 domingo	08:30–17:00 segunda-feira	08:00–18:00 terça-feira	08:00–18:00', '(51) 2747-1816', '1670355304.jpg', 19),
('Vinícola dom Vitor', 'Opções de serviço: Refeição no local', 'Linha Nova Palmeira, Boa Esperança, 301, Rolante - RS, 95690-000', 'quarta-feira	07:00–19:00 quinta-feira	07:00–19:00 sexta-feira	07:00–19:00 sábado	07:00–19:00 domingo	07:00–19:00 segunda-feira	07:00–19:00 terça-feira	07:00–19:00', '(51) 99331-3867', '1670355461.jpeg', 20),
('Vinícola Montemezzo', 'Opções de serviço: Retirada na porta · Entrega sem contato', 'Interior - Boa Esperança, Rolante - RS, 95690-000 Áreas atendidas: Brasil e as proximidades', 'quarta-feira	07:00–18:00 quinta-feira	07:00–18:00 sexta-feira	07:00–18:00 sábado	07:00–18:00 domingo	07:00–18:00 segunda-feira	07:00–18:00 terça-feira	07:00–18:00 Sugerir novos horários', '(51) 3778-4605', '1670355642.jpg', 21);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
