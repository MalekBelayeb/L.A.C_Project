-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 21:56
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
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `ID_ABONN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AUT` int(11) NOT NULL,
  `ID_COMPTE` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_ABONN`),
  KEY `FKKKKK` (`ID_COMPTE`),
  KEY `FKKK` (`ID_AUT`)
) ENGINE=InnoDB AUTO_INCREMENT=504 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`ID_ABONN`, `ID_AUT`, `ID_COMPTE`) VALUES
(501, 15, 'liv'),
(502, 15, 'test123'),
(503, 36, 'test123');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `text_auteur` varchar(255) NOT NULL,
  `PUBLISHER` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID`, `NOM`, `IMAGE`, `text_auteur`, `PUBLISHER`) VALUES
(15, 'aaa', 'carbonel.jpg', 'aaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbfaaaaaazjkb f;qsbkjqsbdqjksbdqjkbdkqsjbfkqjsjksbf', 'aaaa'),
(16, 'sha', 'lady_author_14.jpg', 'zhdajkd                                                            ', 'jsdk'),
(36, 'hosni', 'man_author_2-450x500.jpg', '                       azeaz                                     ', 'aze'),
(37, 'zzzzzz', 'man_author_3.jpg', '                   azeaz                                         ', 'zaea'),
(38, '555', 'man_author_8-450x500.jpg', '                                                                                                                                                                                                                                                               ', 'xfcgvjhb');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `ID_AUT` int(11) NOT NULL AUTO_INCREMENT,
  `MAIL` varchar(50) NOT NULL,
  `LOGIN` varchar(30) NOT NULL,
  `MDP` varchar(40) NOT NULL,
  `LIVRE` int(11) DEFAULT NULL,
  `IMG_PATH` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_AUT`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`ID_AUT`, `MAIL`, `LOGIN`, `MDP`, `LIVRE`, `IMG_PATH`) VALUES
(1, 'adresse', 'Auteur1', 'mdp1', 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `ID_COMPTE` varchar(40) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID_COMPTE`,`ID_LIVRE`),
  KEY `fkl` (`ID_LIVRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`ID_COMPTE`, `ID_LIVRE`, `DATE`) VALUES
('test123', 38, '2018-05-02');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `PRIX` decimal(10,0) NOT NULL,
  `GNERE` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `REDUCTION` int(11) NOT NULL,
  `AUTHOR` int(11) NOT NULL,
  `OVERVIEW` varchar(255) NOT NULL,
  `ORIGINALITE` varchar(100) NOT NULL,
  `HARDCOVER` varchar(100) NOT NULL,
  `LANGUAGE` varchar(100) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `DIMENSION` varchar(100) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `RATING` int(11) DEFAULT '0',
  `QUANTITE` int(11) NOT NULL DEFAULT '0',
  `NBR_VISIT` int(11) NOT NULL DEFAULT '0',
  `NBR_VENTE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `AUTHOR` (`AUTHOR`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`ID`, `NOM`, `PRIX`, `GNERE`, `IMAGE`, `DATE`, `REDUCTION`, `AUTHOR`, `OVERVIEW`, `ORIGINALITE`, `HARDCOVER`, `LANGUAGE`, `ISBN`, `DIMENSION`, `couleur`, `RATING`, `QUANTITE`, `NBR_VISIT`, `NBR_VENTE`) VALUES
(38, 'hedi', '33', 'actionthriller', 'les_des_animaux.jpg', '2018-04-19', 15, 36, 'ksqhqsqds', 'A', 'A', 'A', 'A', 'A', 'red', 3, 0, 192, 0),
(41, 'hedi', '20', 'romance', 'carbonel.jpg', '2018-04-11', 0, 16, 'geyazhijdksqlm', '', '', '', '', '', '', 3, 93, 6, 1),
(42, 'hedi', '55', 'comedy', 'carbonel.jpg', '2018-04-11', 0, 15, '', '', '', '', '', '', '', 4, 10, 2, 0),
(77, 'raggggggg', '99', 'comedyaction', 'economic.jpg', '2018-04-06', 0, 16, '', '', '', '', '', '', '', 0, 10, 34, 0),
(78, 'alaaaaaaaaa', '40', 'comedyromancethriller', 'slider-home-5_4.png', '2018-04-12', 0, 36, '', '', '', '', '', '', '', 0, 9, 6, 0);

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
(38, 'action'),
(72, 'comedy'),
(72, 'romance'),
(72, 'thriller'),
(72, 'hoobbbb'),
(74, 'thriller'),
(72, 'action'),
(74, 'romance'),
(74, 'comedy'),
(38, 'thriller'),
(78, 'thriller'),
(78, 'romance'),
(78, 'comedy'),
(77, 'action'),
(77, 'comedy');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID`, `CATEGORY`) VALUES
(1, 'comedy'),
(3, 'romance'),
(4, 'thriller'),
(7, 'hoobbbb'),
(10, 'action');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeverification`
--

INSERT INTO `codeverification` (`ID_VERIF`, `ID_COMPTE`, `MDP`, `EMAIL`, `CODE`) VALUES
(3, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '1789'),
(4, 'esd5', 's', 'malek.belayeb@esprit.tns', '1804'),
(5, 'test1234', 'ssss', 'malek.belayeb@esprit.t', '2141');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `totale` float NOT NULL,
  `MP` varchar(255) NOT NULL,
  `ETAT` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID`, `user`, `totale`, `MP`, `ETAT`, `DATE`) VALUES
(1, 'test123', 10, 'payment par cheque', 0, '2018-05-02'),
(2, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(3, 'test123', 20, 'payment par cheque', 0, '2018-05-02'),
(4, 'test123', 20, 'payment a la livraison', 0, '2018-05-02'),
(5, 'test123', 55, 'payment par cheque', 0, '2018-05-02'),
(6, 'test123', 55, 'payment par cheque', 0, '2018-05-02'),
(7, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(8, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(9, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(10, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(11, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(12, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(13, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(14, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(15, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(16, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(17, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(18, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(19, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(20, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(21, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(22, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(23, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(24, 'test123', 55, 'virement bancaire', 0, '2018-05-02'),
(25, 'test123', 55, 'virement bancaire', 0, '2018-05-02'),
(26, 'test123', 55, 'virement bancaire', 0, '2018-05-02'),
(27, 'test123', 55, 'virement bancaire', 0, '2018-05-02'),
(28, 'test123', 55, 'virement bancaire', 0, '2018-05-02'),
(29, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(30, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(31, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(32, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(33, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(34, 'test123', 33, 'virement bancaire', 0, '2018-05-02'),
(35, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(36, 'test123', 56, 'virement bancaire', 0, '2018-05-02'),
(37, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(38, 'test123', 84.48, 'virement bancaire', 0, '2018-05-02'),
(39, 'test123', 20, 'payment par cheque', 0, '2018-05-02'),
(40, 'test123', 20, 'payment a la livraison', 0, '2018-05-02'),
(41, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(42, 'test123', 20, 'virement bancaire', 0, '2018-05-02'),
(43, 'test123', 20, 'payment par cheque', 0, '2018-05-02'),
(44, 'test123', 20, 'payment a la livraison', 0, '2018-05-02'),
(45, 'test123', 0, '', 0, '2018-05-02'),
(46, 'test123', 0, '', 0, '2018-05-02'),
(47, 'test123', 0, '', 0, '2018-05-02');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LIVRE` int(20) NOT NULL,
  `COMMENTAIRE` varchar(255) NOT NULL,
  `ID_COMPTE` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID`, `ID_LIVRE`, `COMMENTAIRE`, `ID_COMPTE`) VALUES
(88, 60, 'very good\r\n', 'test123'),
(57, 41, 'hahahahah', 'admin'),
(58, 40, 'hmed', 'test123'),
(61, 48, 'lol', 'test123'),
(62, 42, 'very good', 'test123'),
(67, 60, 'very good\r\n', 'test123'),
(122, 38, 'ezsfsdfsd', 'test123'),
(126, 38, 'aaaaaa', 'test123');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `LOGIN` varchar(20) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `MDP` varchar(20) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `DATE_NAISS` date DEFAULT NULL,
  `ADRESSE` varchar(30) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL,
  `PT_FIDEL` int(11) DEFAULT NULL,
  `VENTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`LOGIN`, `EMAIL`, `MDP`, `NOM`, `PRENOM`, `DATE_NAISS`, `ADRESSE`, `TYPE`, `PT_FIDEL`, `VENTE`) VALUES
('admin', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('liv', 'fff@yahoo.com', 'liv', 'ali', 'liv', NULL, NULL, NULL, NULL, NULL),
('mahdi', 'zzz@yahoo.com', 'mahdi', 'ww', 'livwww', NULL, NULL, NULL, NULL, NULL),
('test123', 'malek.belayeb@esprit.tn', 'aaa', 'rag', 'hedi', NULL, NULL, NULL, NULL, NULL),
('test1234', 'malek.belayeb@esprit.t', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_souscategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id`, `nom`, `Date`, `id_souscategorie`) VALUES
(2, 'ilyessa', '2018-04-26 03:57:09', 7),
(3, 'lyeraa', '2018-04-26 04:01:33', 7),
(4, 'asas', '2018-04-26 04:13:12', 19),
(5, 'DTst', '2018-04-29 18:47:04', 20),
(6, 'datettest4', '2018-04-29 19:15:02', 28),
(7, 'jbndkjqsnqsk', '2018-05-02 19:22:33', 30);

-- --------------------------------------------------------

--
-- Structure de la table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `ID` int(11) NOT NULL,
  `VALEUR` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coupon`
--

INSERT INTO `coupon` (`ID`, `VALEUR`) VALUES
(5, 12);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
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
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_ev`, `nom_ev`, `invite_ev`, `date_ev`, `sujet_ev`, `sujet_res_ev`, `image_ev`, `image_ev1`, `image_ev2`, `image_ev3`) VALUES
(119, 'aa', 'aa', '2018-05-11', 'aa', 'aa', '1.png', '', '', ''),
(120, 'aa', 'jj', '2018-05-31', 'jlkj', 'kj', 'carbonel.jpg', 'boring_girls_a_novel.jpg', '', ''),
(121, 'hahah', 'hahahah', '2018-05-18', 'hah', 'hahahhhah', 'book6.jpg', 'book7.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

DROP TABLE IF EXISTS `f_categories`;
CREATE TABLE IF NOT EXISTS `f_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_categories`
--

INSERT INTO `f_categories` (`id`, `nom`, `Date`) VALUES
(29, 'remon', '2018-04-20 15:43:57'),
(35, 'Acteur', '2018-04-20 17:15:09'),
(34, 'Action', '2018-04-20 16:49:34'),
(36, 'Comedie', '2018-04-26 04:45:52'),
(37, 'Direct', '2018-04-26 04:46:40'),
(39, 'Datetest', '2018-04-29 18:17:05'),
(40, 'Datetest2', '2018-04-29 19:11:04'),
(41, 'AMINE', '2018-05-01 01:23:51'),
(42, 'jjjjj', '2018-05-02 18:03:04');

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

-- --------------------------------------------------------

--
-- Structure de la table `laivraison`
--

DROP TABLE IF EXISTS `laivraison`;
CREATE TABLE IF NOT EXISTS `laivraison` (
  `code_Livraison` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse_ligne_1` varchar(40) NOT NULL,
  `adresse_ligne_2` varchar(40) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` varchar(100) NOT NULL,
  `code_livre` varchar(100) NOT NULL,
  `date_laivraison` date NOT NULL,
  `affectation` int(11) NOT NULL,
  `livreur` int(10) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`code_Livraison`),
  KEY `FK_LIVREUR` (`livreur`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laivraison`
--

INSERT INTO `laivraison` (`code_Livraison`, `nom`, `prenom`, `adresse_ligne_1`, `adresse_ligne_2`, `ville`, `mail`, `num_tel`, `code_livre`, `date_laivraison`, `affectation`, `livreur`, `prix`) VALUES
(0, 'housem', 'nasri', 'cafe paris', 'lafayet', 'bizert', 'housm@yahoo.com', '21548963', '1414', '2018-04-24', 0, 0, 5.6),
(90, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '1003', '2018-04-23', 1, 2, 2),
(91, 'benabdalah', 'ali', 'zafir marsa', 'tunis', 'tunis', 'ali@gmail.com', '21548796', '1111', '2018-04-24', 1, 4, 0),
(92, 'benabdalah', 'ali', 'zafir marsa', 'tunis', 'tunis', 'ali@gmail.com', '21548796', '2136', '2018-04-24', 1, 4, 0),
(93, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '7417', '2018-04-24', 0, 6, 0),
(96, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '7411', '2018-04-24', 0, 9, 0),
(97, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '7411', '2018-04-24', 0, 0, 0),
(98, 'housem', 'nasri', 'cafe paris', 'lafayet', 'bizert', 'housm@yahoo.com', '21548963', '7412', '2018-04-24', 0, 0, 5.5),
(99, 'housem', 'nasri', 'cafe paris', 'lafayet', 'kef', 'housm@yahoo.com', '21548963', '7411', '2018-04-24', 0, 0, 10.5),
(101, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '1200', '2018-04-24', 0, 0, 1),
(102, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '1241', '2018-04-24', 0, 0, 1),
(103, 'house', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548964', '7544', '2018-04-24', 1, 7, 1),
(104, 'housem7', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4778', '2018-04-24', 0, 11, 1),
(105, 'housem', 'nasri7', 'cafe paris2', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4444', '2018-04-24', 1, 2, 1),
(106, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4512', '2018-04-24', 0, 2, 1),
(107, 'housem', 'nasri', 'cafe paris', 'lafayet', 'bizert', 'housm@yahoo.com', '21548963', '4113', '2018-04-24', 1, 7, 15),
(108, 'housem', 'nasri', 'cafe paris', 'lafayet', 'jendouba', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 1, 7, 81),
(109, 'housem', 'nasri', 'cafe paris', 'lafayet', 'sous', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 0, 8, 15),
(110, 'housem', 'nasri', 'cafe paris', 'lafayet', 'gafssa', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 0, 10, 14),
(112, 'rag', 'hedi', 'lafayet', 'manzah 9', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-01', 0, 7, 1.4),
(114, 'rag', 'hedi', 'ssssqqqq', 'sqqsqqq', 'tunis', 'malek.belayeb@esprit.tn', '20000000', '0', '2018-05-01', 0, 7, 15.4),
(116, 'rag', 'hedi', 'tttttttt', 'tttttttt', 'bizert', 'malek.belayeb@esprit.tn', '55555551', '0', '2018-05-02', 0, 0, 11),
(117, 'rag', 'hedi', 'tttttttt', 'tttttttt', 'jendouba', 'malek.belayeb@esprit.tn', '55555551', '0', '2018-05-02', 0, 0, 11.3),
(118, 'rag', 'hedi', 'tttttttt', 'tttttttt12', 'tunis', 'malek.belayeb@esprit.tn', '55555551', '0', '2018-05-02', 0, 0, 1.4),
(119, 'rag', 'hedi', 'aaaaa71', 'ttttttt7', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-02', 1, 10, 1.4),
(120, 'rag', 'hedi', 'zzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzz', 'tunis', 'malek.belayeb@esprit.tn', '50194754', '0', '2018-05-02', 0, 0, 1.4),
(121, 'rag', 'hedi', 'ksjqhkjsq', 'djklqshlk', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-02', 0, 0, 1.4),
(122, 'rag', 'hedi', 'ksjqhkjsq', 'djklqshlk', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-02', 0, 0, 1.4),
(123, 'rag', 'hedi', 'sdbfjsb', 'n,b,nsbn,s', 'tunis', 'malek.belayeb@esprit.tn', '23789465', '23', '2018-05-02', 0, 0, 1.4),
(124, 'rag', 'hedi', 'n,b,nvbn', 'n,b,nb,nb,', 'tunis', 'malek.belayeb@esprit.tn', '50194754', '24', '2018-05-02', 0, 0, 1.4),
(125, 'rag', 'hedi', 'jhkjhkjh1', 'jkhjkhjkh', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '37', '2018-05-02', 0, 10, 1.4),
(126, 'rag', 'hedi', 'aaaaaa', 'zaeazeazea', 'tunis', 'malek.belayeb@esprit.tn', '27998904', '0', '2018-05-02', 0, 0, 1.4),
(127, 'rag', 'hedi', 'azeazeza', 'eazeazeaz', 'tunis', 'malek.belayeb@esprit.tn', '21194754', '44', '2018-05-02', 0, 0, 1.4);

-- --------------------------------------------------------

--
-- Structure de la table `laivraison_p`
--

DROP TABLE IF EXISTS `laivraison_p`;
CREATE TABLE IF NOT EXISTS `laivraison_p` (
  `code_Livraison_p` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `code_postale` int(4) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` varchar(100) NOT NULL,
  `code_livre` varchar(100) NOT NULL,
  `date_laivraison_p` date NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`code_Livraison_p`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laivraison_p`
--

INSERT INTO `laivraison_p` (`code_Livraison_p`, `nom`, `prenom`, `code_postale`, `ville`, `mail`, `num_tel`, `code_livre`, `date_laivraison_p`, `prix`) VALUES
(3, 'zorgui', 'slim', 0, 'tunis', 'zorgui@yahoo.com', '22222222', '20', '2018-03-27', 0),
(6, 'rim', 'nasri', 885, 'tunis', 'housm@yahoo.com', '215489633', '11', '0000-00-00', 0),
(7, 'gg', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '90', '0000-00-00', 0),
(8, 'rrrr', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '9688', '2018-03-27', 0),
(10, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '442', '2018-03-31', 0),
(11, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '4425', '2018-03-31', 0),
(12, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '66', '2018-03-31', 0),
(13, 'housem', 'nasri', 99, 'tunis', 'housm@yahoo.com', '215489633', '889', '2018-04-02', 0),
(14, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '8892', '2018-04-02', 0),
(15, 'housem', 'nasri', 55, 'tunis', 'housm@yahoo.com', '215489633', '8892', '2018-04-02', 0),
(20, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '8', '2018-04-02', 0),
(24, 'housem', 'nasri', 0, 'tunis', 'housm@yahoo.com', '215489633', '7', '2018-04-03', 0),
(42, 'uu', 'kk', 66, 'tunis', 'housm@yahoo.com', '215489633', '411', '2018-04-03', 0),
(47, 'housem', 'nasri', 0, 'tunis', 'housmd@d', '215489633', '77', '2018-04-03', 0),
(48, 'housem', 'nasri', 7744, 'tunis', 'housm@yahoo.com', '21548963', '4444', '2018-04-03', 0),
(49, 'housem', 'nasri', 8555, 'tunis', 'housm@yahoo.com', '21548963', '5570', '2018-04-04', 0),
(50, 'housem', 'nasri', 8010, 'sous', 'housm@yahoo.com', '21548963', '1254', '2018-04-17', 0),
(52, 'housem', 'nasri', 1548, 'tunis', 'housm@yahoo.com', '21548963', '4521', '2018-04-19', 11),
(53, 'housem', 'nasri', 4120, 'tunis', 'housm@yahoo.com', '21548963', '7412', '2018-04-24', 0),
(54, 'housem', 'nasri', 4120, 'tunis', 'housm@yahoo.com', '21548963', '7412', '2018-04-24', 0),
(55, 'housem', 'nasri', 4120, 'sous', 'housm@yahoo.com', '21548963', '7412', '2018-04-24', 7.3),
(56, 'housem7', 'nasri', 7485, 'tunis', 'housm@yahoo.com', '21548963', '2222', '2018-04-24', 0),
(58, 'rag', 'hedi', 2050, 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-01', 0.4),
(59, 'rag', 'hedi', 3051, 'tunis', 'malek.belayeb@esprit.tn', '55555557', '0', '2018-05-02', 0.4),
(60, 'rag', 'hedi', 3057, 'tunis', 'malek.belayeb@esprit.tn', '55555222', '0', '2018-05-02', 0.4),
(61, 'rag', 'hedi', 3058, 'bizert', 'malek.belayeb@esprit.tn', '55555222', '0', '2018-05-02', 4.4),
(62, 'rag', 'hedi', 2050, 'tunis', 'malek.belayeb@esprit.tn', '21194754', '0', '2018-05-02', 0.4),
(63, 'rag', 'hedi', 1050, 'tunis', 'malek.belayeb@esprit.tn', '23736456', '0', '2018-05-02', 0.4),
(64, 'rag', 'hedi', 1050, 'tunis', 'malek.belayeb@esprit.tn', '23736456', '0', '2018-05-02', 0.4),
(65, 'rag', 'hedi', 1050, 'tunis', 'malek.belayeb@esprit.tn', '23736456', '0', '2018-05-02', 0.4),
(66, 'rag', 'hedi', 2050, 'tunis', 'malek.belayeb@esprit.tn', '21348568', '0', '2018-05-02', 0.4),
(67, 'rag', 'hedi', 1050, 'tunis', 'malek.belayeb@esprit.tn', '12345678', '0', '2018-05-02', 0.4),
(68, 'rag', 'hedi', 5555, 'tunis', 'malek.belayeb@esprit.tn', '22222222', '0', '2018-05-02', 0.4),
(69, 'rag', 'hedi', 1050, 'tunis', 'malek.belayeb@esprit.tn', '12345678', '36', '2018-05-02', 0.4),
(70, 'rag', 'hedi', 3064, 'tunis', 'malek.belayeb@esprit.tn', '50194754', '38', '2018-05-02', 0.4);

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PRODUIT` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=478 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`ID`, `ID_COMMANDE`, `ID_PRODUIT`, `QUANTITE`) VALUES
(413, 149, 1, 1),
(414, 149, 2, 1),
(415, 150, 1, 3),
(416, 150, 2, 1),
(417, 151, 1, 16),
(418, 151, 2, 5),
(419, 151, 4, 1),
(420, 152, 2, 5),
(421, 152, 4, 1),
(422, 153, 2, 1),
(423, 154, 2, 2),
(424, 154, 2, 2),
(425, 158, 2, 2),
(426, 158, 4, 1),
(427, 159, 2, 2),
(428, 159, 4, 1),
(429, 160, 2, 2),
(430, 160, 4, 3),
(431, 161, 2, 2),
(432, 161, 4, 3),
(433, 2, 41, 1),
(434, 3, 41, 1),
(435, 4, 41, 1),
(436, 4, 41, 1),
(437, 5, 42, 1),
(438, 6, 42, 1),
(439, 7, 41, 1),
(440, 8, 41, 1),
(441, 9, 41, 1),
(442, 10, 41, 1),
(443, 11, 41, 1),
(444, 12, 41, 1),
(445, 13, 41, 1),
(446, 14, 41, 1),
(447, 15, 41, 1),
(448, 16, 41, 1),
(449, 17, 41, 1),
(450, 18, 40, 1),
(451, 19, 40, 1),
(452, 20, 40, 1),
(453, 21, 40, 1),
(454, 22, 40, 1),
(455, 23, 40, 1),
(456, 24, 42, 1),
(457, 25, 42, 1),
(458, 26, 42, 1),
(459, 27, 42, 1),
(460, 28, 42, 1),
(461, 29, 38, 1),
(462, 30, 38, 1),
(463, 31, 38, 1),
(464, 32, 38, 1),
(465, 33, 38, 1),
(466, 34, 38, 1),
(467, 35, 40, 1),
(468, 36, 40, 1),
(469, 37, 41, 1),
(470, 38, 78, 1),
(471, 38, 40, 1),
(472, 39, 41, 1),
(473, 40, 41, 1),
(474, 41, 41, 1),
(475, 42, 41, 1),
(476, 43, 41, 1),
(477, 44, 41, 1);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  `AUTEUR` varchar(30) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PRIX` float NOT NULL,
  `ANCIEN_PRIX` float NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `IMG_PATH` varchar(250) NOT NULL,
  `LANGUAGE` varchar(30) NOT NULL,
  `MAISON_EDITION` varchar(60) NOT NULL,
  `AVG_RATE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`ID`, `NOM`, `AUTEUR`, `DESCRIPTION`, `PRIX`, `ANCIEN_PRIX`, `CATEGORY`, `IMG_PATH`, `LANGUAGE`, `MAISON_EDITION`, `AVG_RATE`) VALUES
(30, 'Livre1', 'LUMA', 'Young hero Thomas embarks on a mission to find a cure for a deadly disease known as the \"Flare\".', 60, 120, 'CUISINE', 'wp-content\\uploads\\freakonomics.jpg', 'FRANCAIS', 'EDITION1', 2),
(31, 'LIVRE3', 'MOSES', 'A military family takes part in a ground-breaking experiment of genetic evolution and space exploration.\r\n\r\n', 50, 60, 'CULTURE', 'wp-content\\uploads\\boring_girls_a_novel.jpg', 'ANGLAIS', 'EDITION3', 0),
(32, 'LIVRE3', 'MOSES', 'A military family takes part in a ground-breaking experiment of genetic evolution and space exploration.\r\n\r\n', 50, 60, 'CULTURE', 'wp-content\\uploads\\kenjo.jpg', 'FRANCAIS', 'EDITION4', 0),
(33, 'LIVRE5', 'MOSES', 'When an inmate is granted one weekend out of prison to see her dying mother, a rookie correction officer struggles to keep her under control.', 90, 120, 'ARTS', 'wp-content\\uploads\\clever_lands.jpg', 'ANGLAIS', 'EDITION5', 0),
(34, 'LIVRE8', 'LUIS', 'What makes a woman swipe right for Mr. Wrong? Sofía Vergara and Whitney Cummings star in this fresh, witty look at the science behind our romantic missteps.\r\n\r\n', 70, 80, 'CUISINE', 'wp-content\\uploads\\darknet.jpg', 'FRANCAIS', 'EDITION35', 0),
(35, 'LIVRE5', 'MOSES', 'When an inmate is granted one weekend out of prison to see her dying mother, a rookie correction officer struggles to keep her under control.', 90, 120, 'ARTS', 'wp-content\\uploads\\carbonel.jpg', 'ANGLAIS', 'EDITION5', 0),
(36, 'LIVRE8', 'LUIS', 'What makes a woman swipe right for Mr. Wrong? Sofía Vergara and Whitney Cummings star in this fresh, witty look at the science behind our romantic missteps.\r\n\r\n', 70, 80, 'CUISINE', 'wp-content\\uploads\\economic.jpg', 'FRANCAIS', 'EDITION35', 0),
(37, 'LIVRE8', 'LUISA', 'Barbara Thorson struggles through life by escaping into a fantasy life of magic and monsters.\r\n\r\n', 40, 60, 'ARTS', 'wp-content\\uploads\\shattered.jpg', 'FRANCAIS', 'EDITION8', 0),
(38, 'LIVRE35', 'LUISA', 'Sean Haggerty only has an hour to deliver his illegal cargo. An hour to reassure a drug cartel, a hitman, and the DEA that nothing is wrong. An hour to make sure his wife survives. And he must do it all from the cockpit of his Cessna', 50, 60, 'CUISINE', 'wp-content\\uploads\\be_well_bee.jpg', 'ARABIC', 'EDITION37', 0),
(39, 'LIVRE8', 'LUISA', 'Barbara Thorson struggles through life by escaping into a fantasy life of magic and monsters.\r\n\r\n', 40, 60, 'ARTS', 'wp-content\\uploads\\freefall.jpg', 'FRANCAIS', 'EDITION8', 0),
(40, 'LIVRE35', 'LUISA', 'Sean Haggerty only has an hour to deliver his illegal cargo. An hour to reassure a drug cartel, a hitman, and the DEA that nothing is wrong. An hour to make sure his wife survives. And he must do it all from the cockpit of his Cessna', 50, 60, 'CUISINE', 'wp-content\\uploads\\the_tree_queen.jpg', 'ARABIC', 'EDITION37', 0),
(41, 'LIVRE25', 'LUISA', 'A particle physicist grieving over the loss of her husband in a car crash travels to a parallel world to find him again, with dire consequences for her family.\r\n\r\n', 40, 50, 'TECHNOLOGIES', 'wp-content\\uploads\\the_girl_of_ink_and_stars.jpg', 'ARABIC', 'EDITION6', 0),
(42, 'LIVRE25', 'LUISA', 'When Greg Sestero, an aspiring film actor, meets the weird and mysterious Tommy Wiseau in an acting class, they form a unique friendship and travel to Hollywood to make their dreams come true.', 40, 30, 'ARTS', 'wp-content\\uploads\\the_happy_lemon.jpg', 'FRANCAIS', 'EDITION35', 0);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `cin` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `num_tel` int(25) NOT NULL,
  `ville_actuelle` varchar(25) NOT NULL,
  `situation` varchar(25) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`cin`, `nom`, `prenom`, `mail`, `num_tel`, `ville_actuelle`, `situation`, `lat`, `lng`) VALUES
(0, '0', '0', '0', 0, '0', '0', 0, 0),
(2, 'amin', 'cherni', 'amin@yahoo.com', 21548963, 'tunis', '14', 36.8065, 10.1815),
(4, 'ben ali', 'ahmed', 'ahme@salhi.com', 52369871, 'gafssa', '5', 34.4311, 8.7757),
(5, 'mohamed', 'amin', 'mohamed@yahoo.com', 21547836, 'bizert', '0', 37.2746, 9.8627),
(6, 'sami', 'sami', 'sami@yahoo.fr', 54128963, 'kef', '2', 36.168, 8.7096),
(7, 'liv', 'ezf7', 'fff@yahoo.com', 165655, 'sous', '4', 36.8988988, 10.1894454),
(8, 'zz', 'SS', 'sami@yahoo.fr', 21548963, 'tunis', '2', 36.8065, 10.1815),
(9, 'fsdf', 'zdq', 'housm@yahoo.com', 21548963, 'mounestir', '1', 35.7643, 10.8113),
(10, 'fsdf', 'zdq', 'zzz@yahoo.com', 21548964, 'mounestir', '2', 36.864992699999995, 10.1660258),
(11, 'mounir', 'louta', 'dd@edf', 51548963, 'tunis', '1', 36.8065, 10.1815),
(12, 'mounir', 'louta', 'dd@edf', 21548963, 'tunis', '0', 36.8065, 10.1815),
(15, 'hedi', 'hedi', 'hedi@geaz.mm', 21194754, 'tunis', '0', 36.8065, 10.1815),
(16, 'raed', 'raed', 'raed@esprit.tn', 50194759, 'tunis', '0', 36.8065, 10.1815);

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_data`
--

DROP TABLE IF EXISTS `mirrormx_customer_chat_data`;
CREATE TABLE IF NOT EXISTS `mirrormx_customer_chat_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `key` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_message`
--

DROP TABLE IF EXISTS `mirrormx_customer_chat_message`;
CREATE TABLE IF NOT EXISTS `mirrormx_customer_chat_message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `talk_id` bigint(20) NOT NULL,
  `is_new` char(1) NOT NULL DEFAULT 'y',
  `from_user_info` text NOT NULL,
  `to_user_info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_message`
--

INSERT INTO `mirrormx_customer_chat_message` (`id`, `from_id`, `to_id`, `body`, `datetime`, `talk_id`, `is_new`, `from_user_info`, `to_user_info`) VALUES
(1, 2, 1, 'salutt', '2018-05-01 19:20:38', 1, 'n', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:20:37\"}', 'all'),
(2, 2, 1, 'cc', '2018-05-01 19:22:01', 1, 'n', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:00\"}', 'all'),
(3, 1, 2, 'salut', '2018-05-01 19:22:09', 1, 'n', '{\"id\":1,\"name\":\"hanoun\",\"mail\":\"hanen.tarhouni@esprit.tn\",\"roles\":[\"OPERATOR\"],\"last_activity\":\"2018-05-01 20:22:09\",\"7\":\"2018-05-01 20:22:09\"}', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:06\"}'),
(4, 2, 1, '&gt;:D', '2018-05-01 19:22:30', 1, 'n', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:27\"}', '{\"id\":1,\"name\":\"hanoun\",\"mail\":\"hanen.tarhouni@esprit.tn\",\"roles\":[\"OPERATOR\"],\"last_activity\":\"2018-05-01 20:22:09\",\"7\":\"2018-05-01 20:22:09\"}'),
(5, 3, -1, ':p', '2018-05-02 16:49:40', 2, 'n', '{\"id\":3,\"name\":\"hedi-1525283375\",\"mail\":\"hedi@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/AvenirCulturel\\/Views\\/forum\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-02 17:49:35\"}', 'all'),
(6, 4, -1, 'hello :D', '2018-05-02 17:41:12', 3, 'y', '{\"id\":4,\"name\":\"hedi-1525286467\",\"mail\":\"hedi@esprit.Tn\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/c.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/AvenirCulturel\\/Views\\/forum\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-02 18:41:12\"}', 'all');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_user`
--

INSERT INTO `mirrormx_customer_chat_user` (`id`, `name`, `mail`, `password`, `image`, `info`, `roles`, `last_activity`) VALUES
(1, 'hanoun', 'hanen.tarhouni@esprit.tn', '3915da4d2d16dd5a69b6204cacb8a2a1d9e79f34', NULL, NULL, 'OPERATOR', '2018-05-02 17:41:44'),
(2, 'ilyes-1525206035', 'ilyess.tourki@gmail.com', 'x', '/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/livechat\\/php\\/app.php?widget-test\"}', 'GUEST', '2018-05-01 21:43:12'),
(3, 'hedi-1525283375', 'hedi@gmail.com', 'x', '/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/AvenirCulturel\\/Views\\/forum\\/views\\/forum.php\"}', 'GUEST', '2018-05-02 17:14:03'),
(4, 'hedi-1525286467', 'hedi@esprit.Tn', 'x', '/livechat/upload/default-avatars/c.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/AvenirCulturel\\/Views\\/forum\\/views\\/forum.php\"}', 'GUEST', '2018-05-02 17:49:07');

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

DROP TABLE IF EXISTS `prix`;
CREATE TABLE IF NOT EXISTS `prix` (
  `region` varchar(10) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`region`, `prix`) VALUES
('bizert', 11),
('sous', 5.4),
('beja', 7.5),
('mounestir', 8),
('jendouba', 11.3),
('gafssa', 14),
('tunis', 1.4),
('mhamdeya', 87);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `ID_COMPTE` varchar(40) NOT NULL,
  `ID_LIVRE` varchar(50) NOT NULL,
  `RATE` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_COMPTE`,`ID_LIVRE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`ID_COMPTE`, `ID_LIVRE`, `RATE`) VALUES
('liv', '38', '5'),
('test123', '38', '1'),
('test123', '41', '3'),
('test1234', '42', '4');

-- --------------------------------------------------------

--
-- Structure de la table `rating_info`
--

DROP TABLE IF EXISTS `rating_info`;
CREATE TABLE IF NOT EXISTS `rating_info` (
  `user_id` varchar(55) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL,
  UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
('1', 70, 'dislike'),
('2', 1, 'like'),
('2', 2, 'like'),
('2', 3, 'like'),
('2', 4, 'like'),
('2', 5, 'like'),
('2', 70, 'like'),
('2', 73, 'like'),
('2', 74, 'dislike'),
('2', 75, 'like'),
('2', 77, 'like'),
('3', 70, 'like'),
('3', 114, 'like'),
('3', 116, 'like'),
('4', 70, 'dislike'),
('5', 70, 'like'),
('5', 71, 'like'),
('5', 72, 'like'),
('5', 74, 'like'),
('5', 75, 'dislike'),
('5', 76, 'like'),
('6', 70, 'like'),
('6', 72, 'like'),
('7', 70, 'dislike'),
('admin', 119, 'like'),
('mahdi', 119, 'like'),
('test123', 119, 'dislike'),
('test123', 120, 'like');

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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
(25, 'bug', 'bug', '2018-04-28 14:51:24', 1, ''),
(26, 'bug', 'zaa', '2018-05-02 19:00:43', 1, 'darknet.jpg'),
(27, 'renseignement', 'zriohlqhjlkqsjlkqsjlqsdkj', '2018-05-02 19:01:36', 1, '');

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

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `ID_VENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_COMPTE` varchar(40) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID_VENTE`),
  KEY `ID_COMPTE` (`ID_COMPTE`),
  KEY `ID_LIVRE` (`ID_LIVRE`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`ID_VENTE`, `ID_COMPTE`, `ID_LIVRE`, `DATE`) VALUES
(9, 'test123', 38, '2018-04-30'),
(10, 'test123', 41, '2018-04-30'),
(11, 'test123', 41, '2018-04-30'),
(12, 'test123', 38, '2018-04-30'),
(13, 'test123', 42, '2018-04-30'),
(14, 'test123', 42, '2018-04-30'),
(15, 'test123', 42, '2018-04-30'),
(16, 'test123', 42, '2018-04-30'),
(17, 'test123', 77, '2018-04-30'),
(18, 'test123', 77, '2018-04-30'),
(19, 'test123', 77, '2018-04-30');

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
('sss6', '2', '1', 1),
('test123', '38', '16', 1),
('test123', '40', '16', 1),
('test123', '41', '16', 1),
('test123', '77', '16', 1),
('liv', '42', '15', 1),
('test123', '42', '15', 1),
('test123', '78', '36', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FKKK` FOREIGN KEY (`ID_AUT`) REFERENCES `auteur` (`ID`),
  ADD CONSTRAINT `FKKKKK` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`LOGIN`);

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_author` FOREIGN KEY (`AUTHOR`) REFERENCES `auteur` (`ID`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`LOGIN`),
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`ID_LIVRE`) REFERENCES `book` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
