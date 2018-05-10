-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 02 mai 2018 à 00:20
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id5194460_cloud`
--

-- --------------------------------------------------------

--
-- Structure de la table `cloud`
--

CREATE TABLE `cloud` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `newname` varchar(255) NOT NULL,
  `proprietaire` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `affichage` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cloud`
--

INSERT INTO `cloud` (`id`, `intitule`, `newname`, `proprietaire`, `action`, `date`, `affichage`) VALUES
(1, 'Séance 1 -Liste des projets d\'apps.xlsx', 'Séance 1 -Liste des projets d\'apps.xlsx', 'gilles', 'ajouté', '2018-04-27', 'yes'),
(2, 'bdd.xlsx', 'cloud-2.xlsx', 'gilles', 'ajouté', '2018-05-01', 'no'),
(3, 'bdd.xlsx', 'cloud-3.xlsx', 'gilles', 'ajouté', '2018-05-01', 'no'),
(4, 'Questionnaire-méms gilles.docx', 'cloud-4.docx', 'gilles', 'ajouté', '2018-05-01', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `ffom`
--

CREATE TABLE `ffom` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ffom`
--

INSERT INTO `ffom` (`id`, `type`, `contenu`) VALUES
(1, 'force', 'La majorité de l\'activité sur fait directement sur internet'),
(2, 'opportunite', 'L\'arrivé des futures diplômés de l\'école Poly 3D qui vont chercher une plateforme pour diffuser leurs applications'),
(4, 'force', 'Aucun besoin réel d\'investir dans des locaux pour commencer'),
(5, 'opportunite', 'Les débuts de French Bee va augmenter le nombre de tourisme, qui eux chercheront un site de référence');

-- --------------------------------------------------------

--
-- Structure de la table `gantt`
--

CREATE TABLE `gantt` (
  `id` int(11) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gantt`
--

INSERT INTO `gantt` (`id`, `activite`, `debut`, `fin`, `description`) VALUES
(1, 'Présentation de notre projet au PRISM', '2018-04-27', '2018-08-31', 'Présentation de notre projet au PRISM'),
(2, 'PRISM - Meet up l- Les géants du web', '2018-05-03', '2018-05-03', 'Meet up organisé par le PRISM à 17h à la CCISM sur les géants du web');

-- --------------------------------------------------------

--
-- Structure de la table `idees`
--

CREATE TABLE `idees` (
  `id` int(11) NOT NULL,
  `idee` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `proprietaire` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `newname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `idees`
--

INSERT INTO `idees` (`id`, `idee`, `description`, `proprietaire`, `image`, `newname`) VALUES
(1, 'Pour info', 'Pour info, un gars du PRISM qui se lance dans une plateforme numérique.', 'gilles', 'destination polynésie.png', 'idees-1.png'),
(2, 'Meet up 2 PRISM', '', 'gilles', 'prism meet up.png', 'idees-2.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `login`, `password`) VALUES
(1, 'admin', 'root'),
(2, 'tuatini', 'mamadou'),
(3, 'gilles', 'root');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cloud`
--
ALTER TABLE `cloud`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ffom`
--
ALTER TABLE `ffom`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gantt`
--
ALTER TABLE `gantt`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `idees`
--
ALTER TABLE `idees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cloud`
--
ALTER TABLE `cloud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ffom`
--
ALTER TABLE `ffom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `gantt`
--
ALTER TABLE `gantt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `idees`
--
ALTER TABLE `idees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
