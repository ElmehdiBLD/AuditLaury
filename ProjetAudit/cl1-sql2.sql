-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : cl1-sql2
-- Généré le :  ven. 19 juil. 2019 à 09:13
-- Version du serveur :  10.1.40-MariaDB-1~jessie
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `univcergy2`
--
CREATE DATABASE IF NOT EXISTS `univcergy2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `univcergy2`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `idTemplate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nom`, `idTemplate`) VALUES
(17, 'cat1', 13),
(18, 'cat2', 13),
(19, 'cat3', 13),
(39, 'PLAFOND', 22),
(40, 'LUMIERE', 22),
(41, 'cuisine', 23),
(42, 'salle', 23),
(43, 'Usine', 24),
(44, 'Pole tertiare', 24);

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `idElement` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `note` double NOT NULL,
  `idSousCategorie` int(11) NOT NULL,
  `idRapport` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`idElement`, `nom`, `note`, `idSousCategorie`, `idRapport`) VALUES
(1, 'moisissure au plafond', 1, 49, 4),
(2, 'plaques de cuisson salles', 3, 49, 4),
(3, 'pas d\'extincteur', 2, 49, 4),
(4, 'papier pret du four', 3, 49, 4),
(5, 'chewing-gum sous la table', 3, 49, 4),
(6, 'tache sur la moquette', 3, 49, 4),
(7, 'extincteur present', 10, 49, 4),
(8, 'fenetres cassables en cas d\'incendie', 9, 49, 4),
(9, 'Panne', 4, 49, 5),
(10, 'Souris', 5, 49, 5),
(11, 'Panne', 3, 49, 5);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `idRapport` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `idTemplate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`idRapport`, `nom`, `idTemplate`) VALUES
(5, 'PSA', 24),
(4, 'Fouquets', 23);

-- --------------------------------------------------------

--
-- Structure de la table `souscategorie`
--

CREATE TABLE `souscategorie` (
  `idSousCategorie` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `souscategorie`
--

INSERT INTO `souscategorie` (`idSousCategorie`, `nom`, `idCategorie`) VALUES
(37, 'sscta1', 17),
(40, 'sscat21', 18),
(41, 'sscat22', 18),
(43, 'sscat31', 19),
(44, 'sscat32', 19),
(45, 'sscat33', 19),
(85, 'TROU', 39),
(86, 'PANNE', 40),
(87, 'hygiene', 41),
(88, 'securite', 41),
(89, 'hygiene', 42),
(90, 'securite', 42),
(91, 'Machine', 43),
(92, 'Rat', 43),
(93, 'Machine Ã  cafÃ©', 44),
(94, 'Extincteur', 44);

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

CREATE TABLE `template` (
  `idTemplate` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`idTemplate`, `nom`) VALUES
(13, 'temp2'),
(22, 'ENDROIT'),
(23, 'Restaurant'),
(24, 'Batiment');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `login`, `password`) VALUES
(1, 'Alexandre', 'azerty'),
(2, 'Remi', '123456');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`),
  ADD KEY `cascadecat` (`idTemplate`);

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`idElement`),
  ADD KEY `idSousCategorie` (`idSousCategorie`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`idRapport`),
  ADD KEY `idTemplate` (`idTemplate`);

--
-- Index pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD PRIMARY KEY (`idSousCategorie`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`idTemplate`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `idElement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `idRapport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  MODIFY `idSousCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `template`
--
ALTER TABLE `template`
  MODIFY `idTemplate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `cascadecat` FOREIGN KEY (`idTemplate`) REFERENCES `template` (`idTemplate`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD CONSTRAINT `cascadesscat` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
