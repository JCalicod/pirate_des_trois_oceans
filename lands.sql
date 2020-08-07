-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 avr. 2020 à 23:10
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pd3o`
--

-- --------------------------------------------------------

--
-- Structure de la table `lands`
--

DROP TABLE IF EXISTS `lands`;
CREATE TABLE IF NOT EXISTS `lands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x` int(11) NOT NULL DEFAULT '1',
  `y` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lands`
--

INSERT INTO `lands` (`id`, `name`, `percentage`, `description`, `x`, `y`) VALUES
(1, 'Banquise', 4, '', 1, 1),
(2, 'Montagnes Blanches', 4, '', 2, 1),
(3, 'Terres du Nord', 4, '', 3, 1),
(4, 'Terres Glacées', 4, '', 4, 1),
(5, 'Forêt Mystique', 4, '', 1, 2),
(6, 'Ile Volcanique', 4, '', 2, 2),
(7, 'Marécages', 4, '', 4, 2),
(8, 'Forêt de Jade', 4, '', 5, 2),
(9, 'Golfe des Naufragés', 4, '', 1, 3),
(10, 'Montagnes Grises', 4, '', 2, 3),
(11, 'Plaines de Drimmor', 4, '', 4, 3),
(12, 'Monts Lance-Pierre', 4, '', 5, 3),
(13, 'Forêt Morte', 4, '', 1, 4),
(14, 'Jungle', 4, '', 2, 4),
(15, 'Ile aux Forbans', 20, '', 3, 4),
(16, 'Baie des Tortues', 4, '', 4, 4),
(17, 'Forêt Tropicale', 4, '', 5, 4),
(18, 'Désert', 4, '', 1, 5),
(19, 'Oasis', 4, '', 2, 5),
(20, 'Terres du Sud', 4, '', 4, 5),
(21, 'Ile Assaron', 4, '', 5, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
