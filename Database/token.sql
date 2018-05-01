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
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `token` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `token`
--

INSERT INTO `token` (`token`) VALUES
('5ad34b05682485ad34b056824c5ad34b056824f'),
('5ad34bbbd86d75ad34bbbd86f35ad34bbbd86f7'),
('5ad34bdfb7e585ad34bdfb7e5c5ad34bdfb7e5e'),
('5ad34caa5c04b5ad34caa5c04f5ad34caa5c052'),
('5ad34d46b034b5ad34d46b034e5ad34d46b0351'),
('5ad34d5d69f8b5ad34d5d69f8f5ad34d5d69f92'),
('5ad34d6c5fdf55ad34d6c5fdfc5ad34d6c5fe02'),
('5ad34df19b71d5ad34df19b7215ad34df19b724'),
('5ad34e0e48a5f5ad34e0e48a625ad34e0e48a65'),
('5ad350d506cd65ad350d506cda5ad350d506cdc'),
('5ad350fc3b4f25ad350fc3b4f65ad350fc3b4f8'),
('5ad3514c892215ad3514c892255ad3514c89227'),
('5ad351710eaf15ad351710eaf95ad351710eafe'),
('5ad3518b126755ad3518b126785ad3518b1267b'),
('5ad351acf19595ad351acf195d5ad351acf1960'),
('5ad35229b27965ad35229b279a5ad35229b279c'),
('5ad37ae4a795f5ad37ae4a79625ad37ae4a7965'),
('5ad37d9120de95ad37d9120def5ad37d9120df3'),
('5ad37fdd8d7925ad37fdd8d7975ad37fdd8d79b'),
('5ad381fc5d04f5ad381fc5d0545ad381fc5d059');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
