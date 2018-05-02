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
-- Structure de la table `mirrormx_customer_chat_user`
--

DROP TABLE IF EXISTS `mirrormx_customer_chat_user`;
CREATE TABLE IF NOT EXISTS `mirrormx_customer_chat_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `mail` char(64) NOT NULL,
  `password` char(255) NOT NULL,
  `image` char(255) DEFAULT NULL,
  `info` text,
  `roles` char(128) DEFAULT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_user`
--

INSERT INTO `mirrormx_customer_chat_user` (`id`, `name`, `mail`, `password`, `image`, `info`, `roles`, `last_activity`) VALUES
(1, 'hanoun', 'hanen.tarhouni@esprit.tn', '3915da4d2d16dd5a69b6204cacb8a2a1d9e79f34', NULL, NULL, 'OPERATOR', '2018-05-01 21:38:04'),
(2, 'ilyes-1525206035', 'ilyess.tourki@gmail.com', 'x', '/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/livechat\\/php\\/app.php?widget-test\"}', 'GUEST', '2018-05-01 21:43:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
