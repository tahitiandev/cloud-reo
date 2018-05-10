-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Avril 2018 à 23:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cloud`
--

-- --------------------------------------------------------

--
-- Structure de la table `cloud`
--

CREATE TABLE IF NOT EXISTS `cloud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) NOT NULL,
  `proprietaire` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `affichage` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ffom`
--

CREATE TABLE IF NOT EXISTS `ffom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ffom`
--

INSERT INTO `ffom` (`id`, `type`, `contenu`) VALUES
(2, 'force', 'test'),
(3, 'force', 'hep');

-- --------------------------------------------------------

--
-- Structure de la table `gantt`
--

CREATE TABLE IF NOT EXISTS `gantt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite` varchar(255) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `idees`
--

CREATE TABLE IF NOT EXISTS `idees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idee` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `proprietaire` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `idees`
--

INSERT INTO `idees` (`id`, `idee`, `description`, `proprietaire`) VALUES
(1, 'test', 'test', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`iduser`, `login`, `password`) VALUES
(1, 'admin', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
