-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 avr. 2018 à 13:27
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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `text_auteur` varchar(255) NOT NULL,
  `PUBLISHER` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID`, `NOM`, `IMAGE`, `text_auteur`, `PUBLISHER`) VALUES
(15, 'aaa', 'carbonel.jpg', 'aaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbf', 'aaaa'),
(16, 'sha', 'lady_author_14.jpg', 'zhdajkd                                                            ', 'jsdk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
