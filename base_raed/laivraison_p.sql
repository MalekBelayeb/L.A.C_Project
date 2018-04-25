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
-- Structure de la table `laivraison_p`
--

CREATE TABLE `laivraison_p` (
  `code_Livraison_p` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `code_postale` int(4) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num_tel` varchar(100) NOT NULL,
  `code_livre` varchar(100) NOT NULL,
  `date_laivraison_p` date NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(56, 'housem7', 'nasri', 7485, 'tunis', 'housm@yahoo.com', '21548963', '2222', '2018-04-24', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `laivraison_p`
--
ALTER TABLE `laivraison_p`
  ADD PRIMARY KEY (`code_Livraison_p`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `laivraison_p`
--
ALTER TABLE `laivraison_p`
  MODIFY `code_Livraison_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
