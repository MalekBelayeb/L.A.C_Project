-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Avril 2018 à 14:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `crud_tutorial`
--

-- --------------------------------------------------------

--
-- Structure de la table `rating_info`
--

CREATE TABLE IF NOT EXISTS `rating_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL,
  UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(1, 70, 'dislike'),
(2, 1, 'like'),
(2, 2, 'like'),
(2, 3, 'like'),
(2, 4, 'like'),
(2, 5, 'like'),
(2, 70, 'like'),
(2, 73, 'like'),
(2, 74, 'dislike'),
(2, 75, 'like'),
(2, 77, 'like'),
(3, 70, 'like'),
(3, 114, 'like'),
(3, 116, 'like'),
(4, 70, 'dislike'),
(5, 70, 'like'),
(5, 71, 'like'),
(5, 72, 'like'),
(5, 74, 'like'),
(5, 75, 'dislike'),
(5, 76, 'like'),
(6, 70, 'like'),
(6, 72, 'like'),
(7, 70, 'dislike');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
