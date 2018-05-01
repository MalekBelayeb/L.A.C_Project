-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 mai 2018 à 12:46
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `malek`
--

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `ID_COMPTE` varchar(40) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID_COMPTE`,`ID_LIVRE`),
  KEY `fkl` (`ID_LIVRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`ID_COMPTE`, `ID_LIVRE`, `DATE`) VALUES
('test123', 45, '2018-04-25'),
('test123', 46, '2018-04-24'),
('test123', 48, '2018-04-27'),
('test1234', 45, '2018-04-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
