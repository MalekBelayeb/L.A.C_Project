-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 avr. 2018 à 02:41
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
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `PRIX` decimal(10,0) NOT NULL,
  `GNERE` varchar(25) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `REDUCTION` int(11) NOT NULL,
  `AUTHOR` int(11) NOT NULL,
  `OVERVIEW` varchar(255) NOT NULL,
  `ORIGINALITE` varchar(100) NOT NULL,
  `HARDCOVER` varchar(100) NOT NULL,
  `LANGUAGE` varchar(100) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `DIMENSION` varchar(100) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `RATING` int(11) DEFAULT '0',
  `QUANTITE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `AUTHOR` (`AUTHOR`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`ID`, `NOM`, `PRIX`, `GNERE`, `IMAGE`, `DATE`, `REDUCTION`, `AUTHOR`, `OVERVIEW`, `ORIGINALITE`, `HARDCOVER`, `LANGUAGE`, `ISBN`, `DIMENSION`, `couleur`, `RATING`, `QUANTITE`) VALUES
(38, 'hedi', '33', 'comedy', 'be_well_bee.jpg', '2018-04-19', 0, 16, 'ksqhqsqds', 'A', 'A', 'A', 'A', 'A', 'grey', 5, 6),
(40, 'hdzajk', '56', 'comedy', 'be_well_bee.jpg', '2018-04-11', 0, 16, '2', '2', '2', '2', '2', '2', '2', 5, 0),
(41, 'hedi', '20', 'romance', 'carbonel.jpg', '2018-04-11', 0, 16, 'geyazhijdksqlm', '', '', '', '', '', '', 3, 10),
(42, 'hedi', '55', 'comedy', 'carbonel.jpg', '2018-04-11', 0, 15, '', '', '', '', '', '', '', 4, 0),
(43, 'yyyyyy', '55', 'romance', 'boring_girls_a_novel.jpg', '2018-04-11', 0, 16, '', '', '', '', '', '', '', 4, 0),
(44, 'aaaaaaa', '55', 'romance', 'carbonel.jpg', '2018-04-11', 0, 15, '', '', '', '', '', '', '', 5, 0),
(46, 'aaa', '10', 'comedy', 'history_of_modern_architecture.jpg', '2018-04-14', 0, 16, '', '', '', '', '', '', '', 5, 0),
(47, 'aaa', '10', 'comedy', 'history_of_modern_architecture.jpg', '2018-04-14', 0, 16, '', '', '', '', '', '', '', 5, 0),
(48, 'aaa', '10', 'comedy', 'history_of_modern_architecture.jpg', '2018-04-14', 0, 16, '', '', '', '', '', '', '', 5, 0),
(51, 'fff', '50', 'romance', 'kenjo.jpg', '2018-04-21', 0, 15, '', '', '', '', '', '', '', 0, 0),
(52, 'zzzz', '50', 'romance', 'holy_ghosts.jpg', '2018-04-21', 0, 16, '', '', '', '', '', '', '', 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_author` FOREIGN KEY (`AUTHOR`) REFERENCES `auteur` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
