-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 21:22
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jupiterdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `nome` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `login` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `dataNasc`, `sexo`, `login`, `senha`, `email`) VALUES
('Andreia', '2001-11-02', 'feminino', 'admAndreia', 'adm123', 'deiasimoes120@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `assunto` varchar(10000) NOT NULL,
  `areaAtuacao` varchar(20) NOT NULL,
  `autor` varchar(40) NOT NULL,
  `dataPub` date NOT NULL,
  `cod` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `usuario` varchar(20) NOT NULL,
  `corpo` varchar(2000) NOT NULL,
  `dataHora` datetime NOT NULL,
  `denuncias` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `local` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`usuario`, `corpo`, `dataHora`, `denuncias`, `cod`, `local`) VALUES
('anaClara1604', 'Melhor projeto que já fiz!!', '2019-11-25 17:58:26', 0, 47, 'pro_33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `mat` varchar(7) CHARACTER SET utf8 NOT NULL,
  `uso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`mat`, `uso`) VALUES
('TE04157', 0),
('TE04159', 0),
('TE04169', 0),
('TE04170', 0),
('TE04182', 0),
('TE04188', 0),
('TE04206', 0),
('TE04210', 0),
('TE04211', 0),
('TE04220', 0),
('TE04264', 0),
('TE04293', 1),
('TE04298', 0),
('TE04315', 0),
('TE04328', 0),
('TE04331', 0),
('TE04352', 0),
('TE04354', 0),
('TE04365', 0),
('TE04533', 0),
('TE04560', 0),
('TE06678', 0),
('TE06756', 0),
('TE06966', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisador`
--

CREATE TABLE `pesquisador` (
  `nome` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `login` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(64) NOT NULL,
  `matricula` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pesquisador`
--

INSERT INTO `pesquisador` (`nome`, `dataNasc`, `sexo`, `login`, `senha`, `email`, `matricula`) VALUES
('Ana Clara Ribeiro Fernandes', '2002-04-16', 'feminino', 'anaClara1604', 'thor1604', 'ana.fernandes6@ufv.br', 'TE04293');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `pesquisador` varchar(40) NOT NULL,
  `orientador` varchar(40) NOT NULL,
  `areaAtuacao` varchar(20) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `resumo` varchar(10000) NOT NULL,
  `arquivo` varchar(900) NOT NULL,
  `dataHoraPub` datetime NOT NULL,
  `cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`pesquisador`, `orientador`, `areaAtuacao`, `ano`, `titulo`, `descricao`, `resumo`, `arquivo`, `dataHoraPub`, `cod`) VALUES
('anaClara1604', ' Diego Antonio França de Freitas', 'agropecuaria', '2019', 'Estudo da Qualidade Visual do Solo ', '  Trabalho sobre a qualidade visual do solo realizado no período de agosto de 2018 a agosto de 2019 na Universidade Federal de Viçosa Campus Florestal/Instituto de Ciências Agrárias, Departamento/Agronomia.<br /><br /><br />\r\n', 'ESTUDO DA QUALIDADE VISUAL DO SOLO<br /><br /><br />\r\nSão atributos físicos utilizados como parâmetros de classificação de qualidade do solo a porosidade total (PT), que inclui macro e microporosidade e a estabilidade dos arregrados (EA) do solo. Estando diretamente relacionados com os índices de degradação do solo, por meio da erosão, compactação, queimada, ausência da matéria orgânica (MO) dentre outros. Dessa forma, esse projeto objetivou levantar e avaliar esses atributos físicos do solo com relação ao sistema de pastagem subdividido em Pastagem sob queimada (PQ) e Pastagem sem queimada (PS) em diferentes níveis de degradação do solo (N.d.s). A porosidade do solo e EA foram definidas por meio de Delineamento Inteiramente Casualizado (DIC) em esquema fatorial, com quatro níveis de degradação, nível 1, 2, 3 e 4, submetidos a queimada ou não, com três repetições. Os resultados foram submetidos a análise estatística, no software R, utilizando o teste de Tukey quando necessário, a um nível de significância de 5%. Observou-se que os<br /><br /><br />\r\nfatores área (PQ e PS) e os N.d.s não apresentaram interação significativa, ou seja, atuam de forma independente. Logo, os fatores são avaliados separadamente. Mediante análise do fator área observou-se que as médias estatisticamente não apresentaram diferença. Já quanto ao N.d.s somente as amostras de microporosidade sob os níveis 1 e 4 na profundidade de 10 a 20 centímetros (cm) apresentaram diferença significativa. E com relação a EA os valores do Diâmetro Médio Ponderado (DMP) e Diâmetro Médio Geométrico (DMG) obtidos por meio de planilha pronta no Software Excel e mediante ANOVA indicaram que...', 'estudodaqualidadevisualdosolo_anaClara1604.pdf', '2019-11-25 17:56:31', 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `login` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`mat`);

--
-- Indexes for table `pesquisador`
--
ALTER TABLE `pesquisador`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
