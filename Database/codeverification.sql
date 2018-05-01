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
-- Structure de la table `codeverification`
--

DROP TABLE IF EXISTS `codeverification`;
CREATE TABLE IF NOT EXISTS `codeverification` (
  `ID_VERIF` int(11) NOT NULL AUTO_INCREMENT,
  `ID_COMPTE` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CODE` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_VERIF`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeverification`
--

INSERT INTO `codeverification` (`ID_VERIF`, `ID_COMPTE`, `MDP`, `EMAIL`, `CODE`) VALUES
(3, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '1789'),
(4, 'esd5', 's', 'malek.belayeb@esprit.tns', '1804'),
(5, 'test1234', 'ssss', 'malek.belayeb@esprit.t', '2141'),
(6, 'qsdqs55', 'mm', 'malek.belayeb@ee.eee', '2121'),
(7, 'dsqd41', 's', 'sqdsq@dsd.dsqd', '981'),
(8, 'qsdqsd88', 's', 'sqs@ss.dd', '2379'),
(9, 'qsdsd8', 's', 'sqdsq@dsd.dsqd', '2132'),
(10, 'qdsqs55', 's', 'malek.belayeb@esprit.tns', '2299'),
(11, 'eee8', 's', 'malek.belayeb@esprit.tns', '2716'),
(12, 'azert123', 'ssss', 'malek.belayeb@esprit.tt', '988'),
(13, 'ers5', 's', 'malek.belayeb@esprit.tn', '2696'),
(14, 'ee4', 's', 'malek.belayeb@esprit.tns', '1715'),
(15, 'sss8', 's', 'malek.belayeb@esprit.tn', '1185'),
(16, 'sss5', 's', 'malek.belayeb@esprit.tee', '1674'),
(17, 'qsdqs54', 's', 'sqs@ss.dd', '1931'),
(18, 'qsd5', 's', 'malek.belayeb@esprit.tnsa', '1257'),
(19, 'qsd5', 's', 'sqdsq@dsd.dsqds', '2337'),
(20, 'sss59', 's', 'sqs@ss.dds', '2549'),
(21, 'ss5', 's', 'sqdsq@dsd.dsqdss', '2016'),
(22, 'qsdqsd5', 's', 'sqs@ss.ddq', '2116'),
(23, 'qsdqsd5', 's', 'sqs@ss.ddaa', '2466'),
(24, 'qsdq99', 's', 'sqdsq@dsd.dsqds', '1446'),
(25, 'sd5', 's', 'sqs@ss.dde', '2178'),
(26, 'qssss6', 's', 'sqs@ss.ddq', '2092'),
(27, 'qsdsq11aa', 's', 'sqdsq@dsd.dsqd', '2440'),
(28, 'qdq55a', 's', 'sqdsq@dsd.dsqdse', '1244'),
(29, 'qsdsq5', 's', 'sqdsq@dsd.dsqds', '1703'),
(30, 'ss5', 's', 'sqs@ss.dde', '2114'),
(31, 'ss5r', 's', 'qsdqd@sss.dds', '1311'),
(32, 'qsd5', 's', 'sqs@ss.dds', '2325'),
(33, 'ssss6e', 's', 'sqs@ss.dde', '1808'),
(34, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '2242'),
(35, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '825'),
(36, 'sss6', 's', 'malek.belayeb@esprit.t', '2004');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
