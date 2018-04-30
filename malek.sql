-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 avr. 2018 à 12:23
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
  KEY `FKKK` (`ID_AUT`),
  KEY `FKKKKK` (`ID_COMPTE`)
) ENGINE=InnoDB AUTO_INCREMENT=457 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID`, `NOM`, `IMAGE`, `text_auteur`, `PUBLISHER`) VALUES
(1, 'LISA', '', 'An aging former movie star is forced to face the reality that his glory days are behind him. On its surface, the film is a tale about faded fame. At its core, it\'s a universal story about growing old.', 'pub'),
(2, 'LISA', '', 'An aging former movie star is forced to face the reality that his glory days are behind him. On its surface, the film is a tale about faded fame. At its core, it\'s a universal story about growing old.', 'pub');

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
  `NB_LIVRE` int(11) DEFAULT NULL,
  `IMG_PROFILE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_AUT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`ID_AUT`, `MAIL`, `LOGIN`, `MDP`, `NB_LIVRE`, `IMG_PROFILE`) VALUES
(2, 'mail1', 'LUIS', 'ssss', 3, ''),
(3, 'MAIL3', 'SUSAN', 'PPP', 3, NULL),
(4, 'mail9', 'ANNA', 'MSE', 5, NULL),
(5, 'MAIL2', 'IRIS', 'MPS', 3, NULL);

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
('test123', 45, '2018-04-25'),
('test123', 46, '2018-04-24'),
('test123', 48, '2018-04-27'),
('test1234', 45, '2018-04-24');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `PRIX` decimal(10,0) NOT NULL,
  `GNERE` varchar(25) NOT NULL,
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
  PRIMARY KEY (`ID`),
  KEY `AUTHOR` (`AUTHOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codeverification`
--

INSERT INTO `codeverification` (`ID_VERIF`, `ID_COMPTE`, `MDP`, `EMAIL`, `CODE`) VALUES
(3, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '1789'),
(4, 'esd5', 's', 'malek.belayeb@esprit.tns', '1804'),
(5, 'test1234', 'ssss', 'malek.belayeb@esprit.t', '2141'),
(6, 'qsdqs55', 'mm', 'malek.belayeb@ee.eee', '2121'),
(7, 'dsqd41', 's', 'sqdsq@dsd.dsqd', '981'),
(8, 'qsdqsd88', 's', 'sqs@ss.dd', '2379'),
(9, 'qsdsd8', 's', 'sqdsq@dsd.dsqd', '2132'),
(10, 'qdsqs55', 's', 'malek.belayeb@esprit.tns', '2299'),
(11, 'eee8', 's', 'malek.belayeb@esprit.tns', '2716'),
(12, 'azert123', 'ssss', 'malek.belayeb@esprit.tt', '988'),
(13, 'ers5', 's', 'malek.belayeb@esprit.tn', '2696'),
(14, 'ee4', 's', 'malek.belayeb@esprit.tns', '1715'),
(15, 'sss8', 's', 'malek.belayeb@esprit.tn', '1185'),
(16, 'sss5', 's', 'malek.belayeb@esprit.tee', '1674'),
(17, 'qsdqs54', 's', 'sqs@ss.dd', '1931'),
(18, 'qsd5', 's', 'malek.belayeb@esprit.tnsa', '1257'),
(19, 'qsd5', 's', 'sqdsq@dsd.dsqds', '2337'),
(20, 'sss59', 's', 'sqs@ss.dds', '2549'),
(21, 'ss5', 's', 'sqdsq@dsd.dsqdss', '2016'),
(22, 'qsdqsd5', 's', 'sqs@ss.ddq', '2116'),
(23, 'qsdqsd5', 's', 'sqs@ss.ddaa', '2466'),
(24, 'qsdq99', 's', 'sqdsq@dsd.dsqds', '1446'),
(25, 'sd5', 's', 'sqs@ss.dde', '2178'),
(26, 'qssss6', 's', 'sqs@ss.ddq', '2092'),
(27, 'qsdsq11aa', 's', 'sqdsq@dsd.dsqd', '2440'),
(28, 'qdq55a', 's', 'sqdsq@dsd.dsqdse', '1244'),
(29, 'qsdsq5', 's', 'sqdsq@dsd.dsqds', '1703'),
(30, 'ss5', 's', 'sqs@ss.dde', '2114'),
(31, 'ss5r', 's', 'qsdqd@sss.dds', '1311'),
(32, 'qsd5', 's', 'sqs@ss.dds', '2325'),
(33, 'ssss6e', 's', 'sqs@ss.dde', '1808'),
(34, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '2242'),
(35, 'test123', 'ssss', 'malek.belayeb@esprit.tn', '825'),
(36, 'sss6', 's', 'malek.belayeb@esprit.t', '2004');

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
('sss6', 'malek.belayeb@esprit.t', 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  `AUTEUR` int(11) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PRIX` float NOT NULL,
  `ANCIEN_PRIX` float NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `IMG_PATH` varchar(60) NOT NULL,
  `LANGUAGE` varchar(30) NOT NULL,
  `MAISON_EDITION` varchar(60) NOT NULL,
  `AVG_RATE` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK2` (`AUTEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`ID`, `NOM`, `AUTEUR`, `DESCRIPTION`, `PRIX`, `ANCIEN_PRIX`, `CATEGORY`, `IMG_PATH`, `LANGUAGE`, `MAISON_EDITION`, `AVG_RATE`) VALUES
(43, 'Untitled Barry Levinson', 2, 'The centers on Joe Paterno, who, after becoming the winningest coach in college football history, is embroiled in Penn State\'s Jerry Sandusky sexual abuse scandal, challenging his ...', 50, 60, 'CULTURE', 'wp-content\\uploads\\economic.jpg', 'Francais', 'Maison1', 2),
(44, 'The Post\r\n', 2, 'A cover-up that spanned four U.S. Presidents pushed the country\'s first female newspaper publisher and a hard-driving editor to join an unprecedented battle between the press and the government.', 30, 40, 'ARTS', 'wp-content\\uploads\\freefall.jpg', 'Anglais', 'maison2', 3),
(45, 'LIVRE32', 5, 'Feature adaptation of Beatrix Potter\'s classic tale of a rebellious rabbit trying to sneak into a farmer\'s vegetable garden.\r\n\r\n', 50, 60, 'CULTURE', 'wp-content\\uploads\\kenjo.jpg', 'FRANCAIS', 'M1', 2),
(46, 'LIVRE5', 5, 'In 1892, a legendary Army captain reluctantly agrees to escort a Cheyenne chief and his family through dangerous territory.', 55, 60, 'ARTS', 'wp-content\\uploads\\clever_lands.jpg', 'FRANCAIS', 'MAISON2', 3),
(47, 'Livre9', 3, 'Lewis (Luke Evans) is an outwardly ordinary guy, but in reality he is hiding an obsession - revenge - against Cathy (Kelly Reilly).', 60, 90, 'CULTURE', 'wp-content\\uploads\\bash_and_lucy-2.jpg', 'FRANCAIS', 'maison5', 3),
(48, 'LIVRE35', 5, 'A young program coordinator at the United Nations stumbles upon a conspiracy involving Iraq\'s oil reserves.\r\n\r\n', 50, 60, 'ARTS', 'wp-content\\uploads\\economic.jpg', 'ANGLAIS', 'EDITION1', 3);

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
('test123', '40', '2'),
('test123', '41', '3'),
('test123', '48', '5'),
('test1234', '42', '4'),
('test1234', '46', '1');

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
('ee4', '44', '2', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FKKK` FOREIGN KEY (`ID_AUT`) REFERENCES `auteurs` (`ID_AUT`),
  ADD CONSTRAINT `FKKKKK` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`LOGIN`);

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_author` FOREIGN KEY (`AUTHOR`) REFERENCES `auteur` (`ID`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`AUTEUR`) REFERENCES `auteurs` (`ID_AUT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
