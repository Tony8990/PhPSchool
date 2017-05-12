-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 06:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_its2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idcategoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idcategoria`, `categoria`) VALUES
(1, 'php'),
(2, 'java'),
(3, 'javascript'),
(4, 'c#'),
(5, 'html5'),
(6, 'sql'),
(7, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `idpost` int(11) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `sottotitolo` varchar(50) NOT NULL,
  `testo` text NOT NULL,
  `immagine` text NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`idpost`, `titolo`, `sottotitolo`, `testo`, `immagine`, `idcategoria`) VALUES
(1, 'operatori di confronto', 'operatori di confronto', 'Gli operatori di confronto, come suggerisce il loro nome, permettono di confrontare due valori. Può essere interessante vedere la tabella di raffronto dei tipi, dato che mostra esempi di vari confronti tra i tipi di variabili.', 'https://kraken-php.com/build/img/index/logo-php-adbac78231.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cognome` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dataNascita` date DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `skill` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `noSkill` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `foto` mediumtext CHARACTER SET utf8 COLLATE utf8_bin,
  `hobby` mediumtext CHARACTER SET utf8 COLLATE utf8_bin,
  `matricola` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `dataNascita`, `email`, `skill`, `noSkill`, `foto`, `hobby`, `matricola`) VALUES
(1, 'RICCARDO', 'GABOSSI', NULL, 'riccardo.gabossi@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(2, 'VLADIMIR', 'VIBIO', NULL, 'vladimir.vibio@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(3, 'GIORGIO', 'MASERAZZO', NULL, 'giorgio.maserazzo@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(4, 'STEFANO', 'SCICOLONE', NULL, 'stefano.scicolone@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(5, 'DAVIDE', 'COLANGELO', NULL, 'davide.colangelo@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(6, 'FABRIZIO', 'DE CICCO', NULL, 'fabrizio.decicco@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(7, 'SIMONE', 'RORATO', NULL, 'simone.rorato@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(8, 'LORENZO', 'SCARPA', NULL, 'lorenzo.scarpa@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(9, 'SIMONE', 'FUOCO', NULL, 'simone.fuoco@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(10, 'ALESSANDRO', 'VIOTTI', NULL, 'alessandro.viotti@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(11, 'ROSA', 'BUONO', NULL, 'rosa.buono@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(12, 'STEFANO', 'ADAMO', NULL, 'stefano.adamo@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(13, 'TONY', 'FAVA', NULL, 'tony.fava@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(14, 'FRANCESCO', 'TALOMO', NULL, 'francesco.talomo@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(15, 'LUIGI', 'BOTTASSO', NULL, 'luigi.bottasso@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(16, 'MARCO', 'DE GENNARO', NULL, 'marco.degennaro@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(17, 'EMANUELE', 'GALLINA', NULL, 'alessandro.gallina@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(18, 'MARCO', 'ANTONINO', NULL, 'marco.antonino@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(19, 'ANDREA', 'SCAVUZZO', NULL, 'andrea.scavuzzo@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(20, 'THOMAS', 'OWENS', NULL, 'thomas.owens@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(21, 'ALESSANDRO', 'FLERES', NULL, 'alessandro.fleres@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(22, 'DANILO', 'CAPPELLINO', NULL, 'danilo.cappellino@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(23, 'VINCENZO', 'DI DOMENICO', NULL, 'vincenzo.didomenico@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(24, 'EDOARDO', 'ELIA', NULL, 'edoardo.elia@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(25, 'SIMONE', 'VOLPE', NULL, 'simone.volpe@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(26, 'MATTIA', 'VICENZI', NULL, 'mattia.vicenzi@edu.itspiemonte.it', NULL, NULL, NULL, NULL, ''),
(27, 'MARCO', 'PANZANARO', NULL, 'marco.panzanaro@edu.itspiemonte.it', NULL, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorie` (`idcategoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
