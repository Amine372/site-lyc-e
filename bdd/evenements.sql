-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 07 déc. 2020 à 16:10
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
(1, 3, 'AMINE', 'NAKHIL', '2020-10-05', 'TEST'),
(2, 3, 'Dévelopeur Informatique Fullstack H/F', 'À propos d\'AtosAtos est un leader international de la transformation digitale avec plus de 110 000 collaborateurs dans 73 pays et un chiffre d\'affaires annuel de plus de 11 milliards d\'euros. Numéro un européen du Cloud, de la cybersécurité et des supercalculateurs.', '2020-10-21', 'AGEFIPH- Espace Emploi'),
(4, 3, 'stage Developpeur informatique - H/F', 'Qui sommes-nous ? Avec 90 000 collaborateurs présents sur les cinq \r\ncontinents, SUEZ est un leader mondial dans la gestion intelligente et \r\ndurable des ressources. Le Groupe fournit des solutions de gestion de l\'eau \r\net des déchets qui permettent aux villes.', '2020-06-09', 'Jobijoba');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `fk_id_user_event` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
