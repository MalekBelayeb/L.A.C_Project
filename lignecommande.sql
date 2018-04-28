-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 12:05
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
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PRODUIT` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=433 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`ID`, `ID_COMMANDE`, `ID_PRODUIT`, `QUANTITE`) VALUES
(413, 149, 1, 1),
(414, 149, 2, 1),
(415, 150, 1, 3),
(416, 150, 2, 1),
(417, 151, 1, 16),
(418, 151, 2, 5),
(419, 151, 4, 1),
(420, 152, 2, 5),
(421, 152, 4, 1),
(422, 153, 2, 1),
(423, 154, 2, 2),
(424, 154, 2, 2),
(425, 158, 2, 2),
(426, 158, 4, 1),
(427, 159, 2, 2),
(428, 159, 4, 1),
(429, 160, 2, 2),
(430, 160, 4, 3),
(431, 161, 2, 2),
(432, 161, 4, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
