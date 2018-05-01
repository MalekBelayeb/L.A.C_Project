-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Avril 2018 à 14:04
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
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id_ev` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ev` varchar(100) NOT NULL,
  `invite_ev` varchar(100) NOT NULL,
  `date_ev` varchar(100) NOT NULL,
  `sujet_ev` varchar(555) NOT NULL,
  `sujet_res_ev` varchar(100) NOT NULL,
  `image_ev` varchar(288) NOT NULL,
  `image_ev1` varchar(255) NOT NULL,
  `image_ev2` varchar(255) NOT NULL,
  `image_ev3` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id_ev`, `nom_ev`, `invite_ev`, `date_ev`, `sujet_ev`, `sujet_res_ev`, `image_ev`, `image_ev1`, `image_ev2`, `image_ev3`) VALUES
(114, 'slim', 'hh', '2018-04-24', 'aa', 'aa', 'economic.jpg', '', '', ''),
(116, 'hamma', 'ahah', '2018-04-25', 'jajaj', 'jaj', 'lady_author_7.jpg', '', '', ''),
(117, 'rais', 'HH', '2018-04-23', 'HAHA', 'HAH', 'bugatti.jpg', 'avion.jpg', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
