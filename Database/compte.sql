-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 04:35
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
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `LOGIN` varchar(20) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `MDP` varchar(20) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `DATE_NAISS` date DEFAULT NULL,
  `ADRESSE` varchar(30) DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `PT_FIDEL` int(11) DEFAULT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`LOGIN`, `EMAIL`, `MDP`, `NOM`, `PRENOM`, `DATE_NAISS`, `ADRESSE`, `TEL`, `PT_FIDEL`) VALUES
('admin', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
('asd5', 'sqs@ss.dd', 's', 's', 's', '2002-05-02', 's', '55555555', NULL),
('liv', 'fff@yahoo.com', 'liv', 'ali', NULL, NULL, NULL, NULL, NULL),
('sami123', 'sami@yahoo.fr', 's', NULL, NULL, NULL, NULL, NULL, NULL),
('test123', 'malek.belayeb@esprit.tn', 's', NULL, NULL, NULL, NULL, NULL, NULL),
('test123e', 'malek.belayeb@esprit.tne', 'ssss', 'malek', 'belayeb', '2018-12-14', 'qsdqdsd', '55317899', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
