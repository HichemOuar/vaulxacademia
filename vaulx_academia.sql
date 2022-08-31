-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 07 mars 2022 à 15:39
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
-- Base de données : `vaulx_academia`
--

-- --------------------------------------------------------

--
-- Structure de la table `actus`
--

DROP TABLE IF EXISTS `actus`;
CREATE TABLE IF NOT EXISTS `actus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1000) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `media` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actus`
--

INSERT INTO `actus` (`id`, `titre`, `contenu`, `media`) VALUES
(22, 'Exemple Actu 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nisi efficitur, accumsan sem in, tincidunt enim. Vestibulum sit amet iaculis orci. Morbi mauris nulla, dictum in ipsum non, condimentum ultricies est. Integer quis felis eget dui consequat dictum et aliquam magna. Integer ultricies blandit purus, eu vulputate mi iaculis quis. Praesent consequat sit amet est sed consequat. Vivamus efficitur ullamcorper est, in fringilla orci tincidunt facilisis. Proin ac luctus diam. Vestibulum efficitur ipsum in nibh pellentesque congue. Donec feugiat enim ipsum, non hendrerit justo gravida at. Phasellus vitae vehicula augue. Donec et orci tempor, bibendum risus sed, tincidunt quam.', 'test2.png'),
(20, 'Exemple Actu 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nisi efficitur, accumsan sem in, tincidunt enim. Vestibulum sit amet iaculis orci. Morbi mauris nulla, dictum in ipsum non, condimentum ultricies est. Integer quis felis eget dui consequat dictum et aliquam magna. Integer ultricies blandit purus, eu vulputate mi iaculis quis. Praesent consequat sit amet est sed consequat. Vivamus efficitur ullamcorper est, in fringilla orci tincidunt facilisis. Proin ac luctus diam. Vestibulum efficitur ipsum in nibh pellentesque congue. Donec feugiat enim ipsum, non hendrerit justo gravida at. Phasellus vitae vehicula augue. Donec et orci tempor, bibendum risus sed, tincidunt quam.', 'img1.jpg'),
(25, 'hfvdfidshjs', 'hvksvqufvqs', 'img1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `logi`
--

DROP TABLE IF EXISTS `logi`;
CREATE TABLE IF NOT EXISTS `logi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logi`
--

INSERT INTO `logi` (`id`, `user`, `pass`) VALUES
(5, 'admin', '$2y$10$eWL9qVLPptKPUT6HApH9GOfDl3A5cLStCHlLp9L.dm7qATFSc1o0e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
