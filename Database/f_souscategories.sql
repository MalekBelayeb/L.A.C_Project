-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 01:00
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
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `f_souscategories`
--

DROP TABLE IF EXISTS `f_souscategories`;
CREATE TABLE IF NOT EXISTS `f_souscategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_souscategories`
--

INSERT INTO `f_souscategories` (`id`, `id_categorie`, `nom`, `Date`) VALUES
(7, 1, 'ilyessa', '2018-04-20 15:41:49'),
(12, 17, 'remonaa', '2018-04-20 15:41:49'),
(13, 20, 'action', '2018-04-20 15:41:49'),
(14, 22, 'sousihebbb', '2018-04-20 15:41:49'),
(15, 22, 'lool', '2018-04-20 15:41:49'),
(16, 24, 'sssamir', '2018-04-20 15:41:49'),
(17, 25, 'errr', '2018-04-20 15:41:49'),
(18, 1, 'sa', '2018-04-20 15:42:06'),
(19, 28, 'chairde pouls', '2018-04-20 15:44:34'),
(20, 35, 'leonardo', '2018-04-22 00:56:15'),
(21, 28, 'peur', '2018-04-23 23:07:19'),
(22, 29, 'remoniste', '2018-04-24 23:46:44'),
(23, 29, 'rimonn', '2018-04-24 23:49:44'),
(24, 35, 'voila', '2018-04-26 03:07:55'),
(25, 37, 'Selemmm', '2018-04-26 04:47:04'),
(26, 38, 'AZERTA', '2018-04-26 10:21:22'),
(27, 28, 'testdate', '2018-04-29 17:50:07'),
(28, 34, 'Datetest3', '2018-04-29 19:12:37'),
(29, 40, 'DATETEST', '2018-04-29 20:01:13'),
(30, 34, 'AMINE', '2018-05-01 01:23:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
