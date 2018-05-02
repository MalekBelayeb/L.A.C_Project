-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 01:01
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
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `rec` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notif` int(1) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT '1.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `type`, `rec`, `date`, `notif`, `img`) VALUES
(1, 'samouel', 'etoo', '2018-04-22 01:14:04', 1, ''),
(2, 'Sur livre', 'je suis desole', '2018-04-22 01:14:04', 1, ''),
(3, 'voila', 'desolee', '2018-04-22 01:20:22', 1, ''),
(4, 'quel', 'voile je suis entrain decrre une reclamation a fin de voir comment ellle va etre afficher deans le dashbord', '2018-04-22 01:24:11', 1, ''),
(5, 'lol', 'lololol', '2018-04-22 02:05:25', 1, ''),
(6, 'livre', 'je suis tomber sur ce livre qui ma tres intrige sur son sujet je croit ', '2018-04-22 02:13:08', 1, ''),
(7, 'horr', 'horss', '2018-04-22 02:37:42', 1, ''),
(8, 'howw', 'verr', '2018-04-22 13:42:04', 1, ''),
(9, 'hololo', 'voilaaaaaa', '2018-04-22 16:52:10', 1, ''),
(10, 'shrr', 'bakkk', '2018-04-22 16:56:18', 1, ''),
(11, 'rrrr', 'vvvvv', '2018-04-22 17:11:34', 1, ''),
(12, 'bach', 'bach', '2018-04-23 16:59:31', 1, ''),
(13, 'hammaha', 'hamma', '2018-04-23 21:38:47', 1, ''),
(14, 'oumiama', 'oumaima', '2018-04-23 22:59:21', 1, ''),
(15, 'type', 'reclamtion', '2018-04-24 16:21:46', 1, ''),
(16, 'reclamationss', 'hamma', '2018-04-25 16:59:36', 1, ''),
(17, 'Reclamation', 'recla', '2018-04-26 10:28:17', 1, ''),
(18, 'bug', 'j ao eu  u bug ', '2018-04-28 13:26:45', 1, ''),
(19, 'payment', 'payer', '2018-04-28 14:27:20', 1, 'TEST.png'),
(20, 'renseignement', 'reiseig,err vouss !', '2018-04-28 14:41:45', 1, ''),
(21, 'renseignement', 'renseigneerr', '2018-04-28 14:44:43', 1, ''),
(23, 'bug', 'big', '2018-04-28 14:46:47', 1, ''),
(24, 'livre', 'livre', '2018-04-28 14:47:55', 1, ''),
(25, 'bug', 'bug', '2018-04-28 14:51:24', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
