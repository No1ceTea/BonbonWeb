-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 avr. 2022 à 02:10
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bonbons`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '1.48', 'Images/banans.png'),
(2, 'Acidofilo-cola', '2.58', 'Images/acidofilo-cola.png'),
(3, 'cola-mistral', '1.38', 'Images/cola-mistral.png'),
(4, 'croco', '2.18', 'Images/croco.png'),
(5, 'delir-pik', '3.55', 'Images/delir-pik.png'),
(6, 'dragibus-soft-pik', '2.48', 'Images/dragibus-soft-pik.png'),
(7, 'goldbears', '2.45', 'Images/goldbears.png'),
(8, 'happy-cola', '3.48', 'Images/happy-cola.png'),
(9, 'Lovelicorce sachet 250g', '2.48', 'Images/lovelicorne.png'),
(10, 'miami', '3.48', 'Images/miami.jpg'),
(11, 'nounours', '4.18', 'Images/nounours.jpg'),
(12, 'oeufs', '2.20', 'Images/oeufs.jpg'),
(13, 'rainbow', '2.52', 'Images/rainbow.jpg'),
(14, 'shtroumpf', '2.16', 'Images/shtroumpf.jpg'),
(15, 'langue-acide', '2.55', 'Images/langue-acide.png'),
(16, 'reglisses', '5.13', 'Images/reglisse.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
