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
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `totale` float NOT NULL,
  `MP` varchar(20) NOT NULL,
  `ETAT` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID`, `user`, `totale`, `MP`, `ETAT`) VALUES
(149, 'ala', 13.72, 'virement bancaire', 1),
(150, 'ala', 26.18, 'payment par stripe', 1),
(151, 'ala', 126.977, 'virement bancaire', 1),
(152, 'ala', 40.2549, 'payment par stripe', 1),
(153, 'admin', 7.49, 'virement bancaire', 0),
(154, 'admin', 14.98, 'virement bancaire', 0),
(155, 'admin', 0, '', 0),
(156, 'admin', 0, '', 0),
(157, 'admin', 0, '', 0),
(158, 'ala', 23.8, 'virement bancaire', 1),
(159, 'ala', 23.8, 'payment par stripe', 1),
(160, 'ala', 41.44, 'virement bancaire', 1),
(161, 'ala', 41.44, 'payment par stripe', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
