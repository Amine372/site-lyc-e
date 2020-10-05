-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 05 oct. 2020 à 12:09
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_lycee`
--
CREATE DATABASE IF NOT EXISTS `projet_lycee` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet_lycee`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `titre` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  KEY `fk_id_user_annonce` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `id` int(11) NOT NULL,
  `id_user1` int(10) UNSIGNED NOT NULL,
  `id_user2` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_user1` (`id_user1`),
  KEY `fk_id_user2` (`id_user2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `titre` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  KEY `fk_id_user_event` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `id_discussion` int(11) NOT NULL,
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_user_messages` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `date_connexion` date DEFAULT NULL,
  `verif` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`, `date_connexion`, `verif`) VALUES
(1, 'a', 'a', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL, NULL, 1),
(2, 'b', 'b', 'b@b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', NULL, NULL, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `fk_id_user_annonce` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `fk_id_user1` FOREIGN KEY (`id_user1`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `fk_id_user2` FOREIGN KEY (`id_user2`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `fk_id_user_event` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_id_user_messages` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
