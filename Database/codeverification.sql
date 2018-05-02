-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 04:34
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
-- Structure de la table `codeverification`
--

DROP TABLE IF EXISTS `codeverification`;
CREATE TABLE IF NOT EXISTS `codeverification` (
  `ID_VERIF` int(11) NOT NULL AUTO_INCREMENT,
  `ID_COMPTE` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CODE` varchar(30) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `DATE_NAISS` varchar(30) NOT NULL,
  `ADRESSE` varchar(30) NOT NULL,
  `TEL` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_VERIF`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeverification`
--

INSERT INTO `codeverification` (`ID_VERIF`, `ID_COMPTE`, `MDP`, `EMAIL`, `CODE`, `NOM`, `PRENOM`, `DATE_NAISS`, `ADRESSE`, `TEL`) VALUES
(40, 'test123e', 'ssss', 'malek.belayeb@esprit.tne', '707', 'malek', 'belayeb', '2018-12-14', 'qsdqdsd', '55317899'),
(41, 'azdz4', 's', 'sqs@ss.dd', '2375', 's', 's', '', 's', '55555555'),
(42, 'asd5', 's', 'sqs@ss.dd', '2169', 's', 's', '2002-05-02', 's', '55555555');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
