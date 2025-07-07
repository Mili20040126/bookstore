-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/07/2025 às 04:07
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bookstore`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idLivro` int(11) DEFAULT NULL,
  `dataCompra` date DEFAULT NULL,
  `horaCompra` time DEFAULT NULL,
  `valorCompra` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `idLivro` int(11) NOT NULL,
  `fotoLivro` varchar(100) DEFAULT NULL,
  `tituloLivro` varchar(100) DEFAULT NULL,
  `autorLivro` varchar(100) DEFAULT NULL,
  `nomeCategoria` varchar(30) DEFAULT NULL,
  `valorLivro` double(6,2) DEFAULT NULL,
  `editoraLivro` varchar(100) DEFAULT NULL,
  `edicaoLivro` varchar(15) DEFAULT NULL,
  `anoPublicacaoLivro` char(4) DEFAULT NULL,
  `numPaginasLivro` int(11) DEFAULT NULL,
  `descricaoLivro` text DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `statusLivros` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`idLivro`, `fotoLivro`, `tituloLivro`, `autorLivro`, `nomeCategoria`, `valorLivro`, `editoraLivro`, `edicaoLivro`, `anoPublicacaoLivro`, `numPaginasLivro`, `descricaoLivro`, `isbn`, `statusLivros`) VALUES
(1, 'img/tronodevidro.jpg', 'Trono de Vidro: A Lâmina da Assassina (Vol. 1 - Edição Especial)', 'Sarah J. Maas', 'Fantasia', 79.00, 'Galera', '1º', '2023', 432, 'Toda lenda tem um começo... e no primeiro volume da série Trono de Vidro, Caelena Sardothian mostra que faz jus à sua fama de maior assassina de Adarlan. Em uma edição especial de colecionador, com capa dura e projeto gráfico exclusivo, A lâmina da assassina dá início ao tão aguardado lançamento das edições de luxo da saga de estreia de Sarah J. Maas, um dos maiores nomes da fantasia mundial.', '6559812030', 'disponivel'),
(2, 'img/tronodevidro2.jpg', 'Trono de vidro (Vol. 2 - Edição especial)', 'Sarah J. Maas', 'Fantasia', 82.00, 'Galera', '1º', '2023', 416, 'Toda lenda tem um começo... e no primeiro volume da série Trono de Vidro, Caelena Sardothian mostra que faz jus à sua fama de maior assassina de Adarlan. Em uma edição especial de colecionador, com capa dura e projeto gráfico exclusivo, A lâmina da assassina dá início ao tão aguardado lançamento das edições de luxo da saga de estreia de Sarah J. Maas, um dos maiores nomes da fantasia mundial.', '6559811999', 'disponivel'),
(3, 'img/tronodevidro3.jpg', 'Trono de vidro: Coroa da Meia-Noite (Vol. 3 - Edição especial)', 'Sarah J. Maas', 'Fantasia', 104.00, 'Galera', '1º', '2023', 424, 'Uma barreira que jamais deve ser cruzada está prestes a ser rompida. Coroa da Meia-Noite é o volume 3 da série best-seller Trono de Vidro, que já soma mais de 1 milhão de exemplares vendidos no Brasil. Edição especial em capa dura com projeto gráfico exclusivo perfeito para os fãs da autora Sarah J. Maas e de fantasias épicas.', '6559811980', 'disponivel'),
(4, 'img/tronodevidro4.jpg', 'Trono de vidro: Herdeira do Fogo (Vol. 4 - Edição especial)', 'Sarah J. Maas', 'Fantasia', 106.00, 'Galera', '1º', '2023', 560, 'A assassina do tirano rei de Adarlan está de volta ainda mais forte e letal em Herdeira do Fogo, volume 4 da série best-seller Trono de Vidro. Com mais de 1 milhão de exemplares vendidos no Brasil, a série de estreia de Sarah J. Maas ganha edição especial em capa dura com um projeto gráfico exclusivo perfeito para os fãs de fantasias épicas.', '6559813185', 'disponivel'),
(5, 'img/tronodevidro5.jpg', 'Trono de vidro: Rainha das Sombras (Vol. 5 - Edição especial)', 'Sarah J. Maas', 'Fantasia', 98.00, 'Galera', '1º', '2023', 688, 'A assassina de Adarlan assumiu sua verdadeira identidade como Rainha de Terrasen! Rainha das Sombras é o quinto volume da fantasia épica Trono de Vidro, de Sarah J. Maas, autora da série Corte de Espinhos e Rosas. Edição especial de colecionador, com capa dura, pintura trilateral e projeto gráfico especial.', '6559813576', 'disponivel'),
(6, 'img/tronodevidro6.jpg', 'Trono de vidro: Império de Tempestades (Vol. 6 - Edição especial)', 'Sarah J. Maas', 'Fantasia', 99.00, 'Galera', '1º', '2023', 704, 'Chegar a Terrasen foi só metade do caminho. Mas agora que o verdadeiro inimigo veio à tona, Aelin Ashryver Galathinius precisará repensar tudo que acreditava saber. Império de Tempestades é o sexto volume de Trono de Vidro, fantasia épica de Sarah J. Maas, autora da série Corte de Espinhos e Rosas. Edição especial de colecionador, com capa dura e projeto gráfico especial.', '6559813584', 'disponivel'),
(7, 'img/tronodevidro7.jpg', 'Trono de Vidro: Torre do alvorecer (Vol. 7 Edição Especial) + BRINDES', 'Sarah J. Maas', 'Fantasia', 118.00, 'Galera', '1º', '2023', 688, 'Um império glorioso. Uma jornada desesperada. Um segredo antigo. É hora de conhecer Terrasen pelos olhos de Chaol Westfall. Torre do alvorecer é o sétimo volume da série Trono de Vidro, da aclamada autora de Corte de espinhos e rosas. Edição especial de colecionador, com capa dura e projeto gráfico especial.', '8501307033', 'disponivel'),
(8, 'img/tronodevidro8.jpg', 'Trono de vidro: Reino de cinzas (Vol. 8 Edição especial)', 'Sarah J. Maas', 'Fantasia', 104.00, 'Galera', '1º', '2024', 1040, 'Uma princesa que viveria por mil anos. Deveria ser uma dádiva, mas agora é uma maldição. Descubra o eletrizante desfecho de Aelin em Reino de cinzas, o oitavo e último volume da série Trono de Vidro. De Sarah J. Maas, aclamada autora de Corte de espinhos e rosas, esta edição especial de colecionador conta com capa dura, projeto gráfico especial e brindes exclusivos.', '6559814831', 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(15) DEFAULT NULL,
  `fotoUsuario` varchar(100) DEFAULT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `dataNascUsuario` date DEFAULT NULL,
  `cidadeUsuario` varchar(30) DEFAULT NULL,
  `ufUsuario` char(2) DEFAULT NULL,
  `telefoneUsuario` char(10) DEFAULT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `senhaUsuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipoUsuario`, `fotoUsuario`, `nomeUsuario`, `dataNascUsuario`, `cidadeUsuario`, `ufUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'administrador', 'img/logo_4.PNG', 'Magic World Adm', '2025-06-01', 'Telêmaco Borba', NULL, '(42) 99999', 'bookstore@gmail', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'cliente', 'img/download.jpeg', 'Milena Pestana', '2025-06-01', 'Telêmaco Borba', NULL, '(42) 99999', 'email@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idLivro` (`idLivro`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idLivro`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idLivro`) REFERENCES `livros` (`idLivro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
