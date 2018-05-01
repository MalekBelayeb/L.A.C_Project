-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 25 avr. 2018 à 17:27
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
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `cin` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `num_tel` int(25) NOT NULL,
  `ville_actuelle` varchar(25) NOT NULL,
  `situation` varchar(25) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`cin`, `nom`, `prenom`, `mail`, `num_tel`, `ville_actuelle`, `situation`, `lat`, `lng`) VALUES
(0, '0', '0', '0', 0, '0', '0', 0, 0),
(2, 'amin', 'cherni', 'amin@yahoo.com', 21548963, 'tunis', '13', 35.6759, 10.0919),
(4, 'ben ali', 'ahmed', 'ahme@salhi.com', 52369871, 'gafssa', '5', 34.4311, 8.7757),
(5, 'mohamed', 'amin', 'mohamed@yahoo.com', 21547836, 'bizert', '0', 37.2746, 9.8627),
(6, 'sami', 'sami', 'sami@yahoo.fr', 54128963, 'kef', '1', 36.168, 8.7096),
(7, 'ezf', 'ezf7', 'fff@yahoo.com', 165655, 'sous', '0', 35.8245, 10.6346),
(8, 'zz', 'SS', 'sami@yahoo.fr', 21548963, 'tunis', '0', 36.8065, 10.1815),
(9, 'fsdf', 'zdq', 'housm@yahoo.com', 21548963, 'mounestir', '1', 35.7643, 10.8113),
(10, 'fsdf', 'zdq', 'housm@yahoo.com', 21548964, 'mounestir', '0', 35.7643, 10.8113),
(11, 'mounir', 'louta', 'dd@edf', 51548963, 'tunis', '1', 36.8065, 10.1815),
(12, 'mounir', 'louta', 'dd@edf', 21548963, 'tunis', '0', 36.8065, 10.1815);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`cin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `cin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
