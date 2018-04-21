-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 avr. 2018 à 15:48
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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LIVRE` int(20) NOT NULL,
  `COMMENTAIRE` varchar(255) NOT NULL,
  `RATING` int(20) NOT NULL,
  `ID_COMPTE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `ID_LIVRE`, `COMMENTAIRE`, `RATING`, `ID_COMPTE`) VALUES
(1, 35, 'ejdhqdjkqshdjqlskdhqlk', 4, 0),
(2, 35, 'zqadsqdqsdqsd', 5, 0),
(3, 36, 'zaeqs', 3, 1),
(4, 36, 'jezakedqlkjdkqmsndqsndcqpnm', 5, 1),
(12, 36, 'ghdbqldq', 3, 1),
(11, 38, 'good', 5, 1),
(7, 33, 'ghnbvb;,n', 5, 1),
(8, 33, 'qzsdsfs', 1, 1),
(9, 33, 'qzsdsfs', 1, 1),
(10, 33, 'qzsdsfs', 1, 1),
(13, 40, 'ekzqjfqoslf,qsmlqdsj', 5, 1),
(14, 36, 'bhezjdkqsn,c;wekjqf,qnks,', 3, 1),
(22, 36, 'nnnnnnnnn', 3, 1),
(21, 36, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 5, 1),
(20, 36, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 5, 1),
(23, 36, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 5, 1),
(24, 36, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 5, 1),
(25, 36, 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 5, 2),
(26, 36, 'azeqrsdtyujfdv', 5, 1),
(27, 36, 'ryguhjklm', 1, 2),
(29, 37, 'jrezksfsknfsnfs ', 4, 2),
(30, 41, 'fjkljhgfhjkjhgfdgh,j', 5, 1),
(31, 36, 'cccccccccccccccccccccccccccccccccccccccccccccc', 1, 1),
(32, 36, 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 5, 1),
(33, 36, 'hezjkhjeznjazkme,maz', 3, 1),
(34, 36, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 5, 2),
(35, 41, 'dhuzakjjdkqmsjdmlqskdslmqdksq', 5, 2),
(36, 46, 'esrdfghjkserdtyuhjkserdfghbjerdtfghbjerdtfghbjerdtfghbj', 5, 2),
(37, 44, 'zhjnlkq,d;s:zhefs,;:hesd,;n,c;x,', 5, 2),
(38, 42, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 4, 1),
(39, 37, 'azhgbdhkqsjbdqldnqsl', 4, 1),
(40, 37, 'azhgbdhkqsjbdqldnqsl', 4, 1),
(41, 37, 'azhgbdhkqsjbdqldnqsl', 4, 1),
(42, 37, 'azhgbdhkqsjbdqldnqsl', 4, 1),
(43, 37, 'azhgbdhkqsjbdqldnqsl', 4, 1),
(44, 43, 'ttttttttttttttttttttttttttttttt', 5, 2),
(45, 43, 'hahahahahahahahah', 0, 2),
(46, 43, 'hahahahahahahahah', 0, 2),
(47, 43, 'sdjskjssdmlkfsmdlkfsdpofjsdml', 3, 1),
(48, 43, 'sdjskjssdmlkfsmdlkfsdpofjsdml', 0, 1),
(49, 46, 'uizehjdlksnfsdkfn', 0, 2),
(50, 46, 'ccccccccccccccccccccccccccccccccccccccccccccccc', 5, 1),
(51, 46, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\r\n', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
