-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 13:15
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
-- Structure de la table `book_category`
--

DROP TABLE IF EXISTS `book_category`;
CREATE TABLE IF NOT EXISTS `book_category` (
  `ID_LIVRE` int(11) NOT NULL,
  `CATEGORY` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book_category`
--

INSERT INTO `book_category` (`ID_LIVRE`, `CATEGORY`) VALUES
(70, 'hoobbbb'),
(70, 'thriller'),
(69, 'hoobbbb'),
(69, 'romance'),
(69, 'comedy'),
(71, 'action'),
(72, 'comedy'),
(72, 'romance'),
(72, 'thriller'),
(72, 'hoobbbb'),
(74, 'thriller'),
(72, 'action'),
(74, 'romance'),
(74, 'comedy'),
(78, 'thriller'),
(78, 'romance'),
(78, 'comedy'),
(77, 'action'),
(77, 'comedy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
