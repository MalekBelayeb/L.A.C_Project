-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 mai 2018 à 12:45
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
-- Structure de la table `vu`
--

DROP TABLE IF EXISTS `vu`;
CREATE TABLE IF NOT EXISTS `vu` (
  `ID_COMPTE` varchar(40) NOT NULL,
  `ID_LIVRE` varchar(40) NOT NULL,
  `ID_AUTEUR` varchar(40) NOT NULL,
  `VU` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vu`
--

INSERT INTO `vu` (`ID_COMPTE`, `ID_LIVRE`, `ID_AUTEUR`, `VU`) VALUES
('test123', '45', '5', 1),
('test123', '46', '5', 1),
('test123', '48', '5', 1),
('test123', '47', '3', 1),
('test123', '43', '2', 1),
('test123', '44', '2', 1),
('test123', '49', '3', 1),
('test123', '50', '3', 1),
('ee4', '43', '2', 1),
('ee4', '44', '2', 1),
('sss6', '1', '1', 1),
('sss6', '2', '1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
