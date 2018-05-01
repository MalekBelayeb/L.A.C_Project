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
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `ID_ABONN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AUT` int(11) NOT NULL,
  `ID_COMPTE` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_ABONN`),
  KEY `FKKKKK` (`ID_COMPTE`),
  KEY `FKKK` (`ID_AUT`)
) ENGINE=InnoDB AUTO_INCREMENT=496 DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FKKK` FOREIGN KEY (`ID_AUT`) REFERENCES `auteur` (`ID`),
  ADD CONSTRAINT `FKKKKK` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`LOGIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
