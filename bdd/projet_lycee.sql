-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 nov. 2020 à 12:42
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
  `titre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `Comm` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  KEY `fk_id_user_event` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `id_utilisateur`, `titre`, `description`, `date`, `Comm`) VALUES
(1, 3, 'AMINE', 'NAKHIK', '2020-10-05', 'TEST'),
(2, 3, 'Dévelopeur Informatique Fullstack H/F', 'À propos d\'AtosAtos est un leader international de la transformation digitale avec plus de 110 000 collaborateurs dans 73 pays et un chiffre d\'affaires annuel de plus de 11 milliards d\'euros. Numéro un européen du Cloud, de la cybersécurité et des supercalculateurs.', '2020-10-21', 'AGEFIPH- Espace Emploi'),
(4, 3, 'stage Developpeur informatique - H/F', 'Qui sommes-nous ? Avec 90 000 collaborateurs présents sur les cinq \r\ncontinents, SUEZ est un leader mondial dans la gestion intelligente et \r\ndurable des ressources. Le Groupe fournit des solutions de gestion de l\'eau \r\net des déchets qui permettent aux villes.', '2020-06-09', 'Jobijoba');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`, `date_connexion`, `verif`) VALUES
(1, 'a', 'a', 'a@a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL, NULL, 1),
(2, 'b', 'b', 'b@b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', NULL, NULL, 1),
(3, 'Nakhil', 'Amine', 'nakhila@orange.fr', '265545635d1704996ba4dbb482377aa542cdf5c0', NULL, NULL, 0);

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
