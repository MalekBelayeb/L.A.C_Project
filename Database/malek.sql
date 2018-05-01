-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 avr. 2018 à 12:03
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
('malek_belayeb_106626685520290420650', 40, '2018-04-07'),
('test123', 37, '2018-04-03'),
('test123', 38, '2018-04-03'),
('test123', 39, '2018-04-03');

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
('test123', 'malek.belayeb@esprit.tn', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('test1234', 'malek.belayeb@esprit.t', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('test123', '41', '3'),
('test1234', '42', '4');

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
