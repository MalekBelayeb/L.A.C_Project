-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 25 avr. 2018 à 17:28
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `raed`
--

-- --------------------------------------------------------

--
-- Structure de la table `laivraison`
--

CREATE TABLE `laivraison` (
  `code_Livraison` int(11) NOT NULL,
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
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(103, 'house', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548964', '7544', '2018-04-24', 0, 0, 1),
(104, 'housem7', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4778', '2018-04-24', 0, 11, 1),
(105, 'housem', 'nasri7', 'cafe paris2', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4444', '2018-04-24', 1, 2, 1),
(106, 'housem', 'nasri', 'cafe paris', 'lafayet', 'tunis', 'housm@yahoo.com', '21548963', '4512', '2018-04-24', 0, 2, 1),
(107, 'housem', 'nasri', 'cafe paris', 'lafayet', 'bizert', 'housm@yahoo.com', '21548963', '4113', '2018-04-24', 0, 0, 11),
(108, 'housem', 'nasri', 'cafe paris', 'lafayet', 'jendouba', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 0, 0, 11.3),
(109, 'housem', 'nasri', 'cafe paris', 'lafayet', 'sous', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 0, 0, 5.4),
(110, 'housem', 'nasri', 'cafe paris', 'lafayet', 'gafssa', 'housm@yahoo.com', '21548963', '4100', '2018-04-25', 1, 2, 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `laivraison`
--
ALTER TABLE `laivraison`
  ADD PRIMARY KEY (`code_Livraison`),
  ADD KEY `FK_LIVREUR` (`livreur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `laivraison`
--
ALTER TABLE `laivraison`
  MODIFY `code_Livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `laivraison`
--
ALTER TABLE `laivraison`
  ADD CONSTRAINT `FK_LIVREUR` FOREIGN KEY (`livreur`) REFERENCES `livreur` (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
