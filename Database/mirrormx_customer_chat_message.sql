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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_message`
--

INSERT INTO `mirrormx_customer_chat_message` (`id`, `from_id`, `to_id`, `body`, `datetime`, `talk_id`, `is_new`, `from_user_info`, `to_user_info`) VALUES
(1, 2, 1, 'salutt', '2018-05-01 19:20:38', 1, 'n', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:20:37\"}', 'all'),
(2, 2, 1, 'cc', '2018-05-01 19:22:01', 1, 'n', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:00\"}', 'all'),
(3, 1, 2, 'salut', '2018-05-01 19:22:09', 1, 'n', '{\"id\":1,\"name\":\"hanoun\",\"mail\":\"hanen.tarhouni@esprit.tn\",\"roles\":[\"OPERATOR\"],\"last_activity\":\"2018-05-01 20:22:09\",\"7\":\"2018-05-01 20:22:09\"}', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:06\"}'),
(4, 2, 1, '&gt;:D', '2018-05-01 19:22:30', 1, 'y', '{\"id\":2,\"name\":\"ilyes-1525206035\",\"mail\":\"ilyess.tourki@gmail.com\",\"image\":\"\\/livechat\\/upload\\/default-avatars\\/a.png\",\"info\":{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/views\\/views\\/forum.php\"},\"roles\":[\"GUEST\"],\"last_activity\":\"2018-05-01 20:22:27\"}', '{\"id\":1,\"name\":\"hanoun\",\"mail\":\"hanen.tarhouni@esprit.tn\",\"roles\":[\"OPERATOR\"],\"last_activity\":\"2018-05-01 20:22:09\",\"7\":\"2018-05-01 20:22:09\"}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
