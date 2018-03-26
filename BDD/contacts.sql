-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 mars 2018 à 08:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `ID_CONTACT_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENT` int(11) NOT NULL,
  `NOM_CONTACT` varchar(32) NOT NULL,
  `PRENOM_CONTACT` varchar(32) NOT NULL,
  `TEL_CONTACT` varchar(15) NOT NULL,
  `FONCTION_CONTACT` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_CONTACT_CLIENT`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`ID_CONTACT_CLIENT`, `ID_CLIENT`, `NOM_CONTACT`, `PRENOM_CONTACT`, `TEL_CONTACT`, `FONCTION_CONTACT`) VALUES
(34, 56, 'HERBIÉ', 'Joseph', '02 56 85 42 36', 'RESPONSABLE MARKETING'),
(33, 56, 'GRINGER', 'Léa', '04 15 74 56 56', 'HÔTESSE D\'ACCEUIL'),
(37, 59, 'GODIN', 'Julie', '06 68 17 41 33 ', 'VICE-PRÉSIDENT DU CONSEIL'),
(48, 59, 'MINZANI', 'Julien', '05 23 69 87 71', 'DIRECTEUR PAO'),
(39, 63, 'RATEAU', 'Bernard', '07 56 96 32 52 ', 'AGENT COMMERCIAL'),
(40, 63, 'GRAND', 'Michel', '08 65 32 69 42 ', 'RESPONSABLE RH'),
(35, 56, 'GÉRARD-LAVOISIER', 'Francis', '04 94 01 54 78', 'VICE-PRÉSIDENT DU CONSEIL'),
(16, 51, 'WINTZ', 'BIBIANA', '08 50 60 70 17', 'CHEF DE PROJET'),
(17, 63, 'VIVIANI', 'JEREMI', '08 17 17 12 15', 'PROFESSEUR'),
(42, 75, 'KÉLÉTAONA', 'Nicolas', '06 06 06 31 41 ', 'BIG BOSS'),
(49, 56, 'MEVEL', 'Virginie', '06 50 50 50 50', 'PROF'),
(47, 69, 'KÉLÉTAONA', 'Sems', '06 68 17 41 33', 'VICE-PRÉSIDENT DU CONSEIL'),
(87, 160, 'JAS', 'Mela', '06 11 11 11 11', 'NO FUNCTION'),
(88, 65, 'SDF', 'Qsdfg', '06 11 11 11 11', 'IUGHUIGH'),
(89, 64, 'DFG', 'Dsfg', '06 11 11 11 11', 'SDFG'),
(90, 64, 'DFG', 'Dsfg', '06 11 11 11 11', 'SDFG'),
(91, 64, 'QDFG', 'Qsdfg', '06 11 11 11 11', 'QSDF'),
(92, 64, 'QDFG', 'Qsdfg', '06 11 11 11 11', 'QSDF'),
(93, 64, 'TEST', 'Test', '06 11 11 11 11', 'TEST'),
(94, 67, 'TEST', 'Test', '06 11 11 11 11', 'TEST666'),
(95, 67, '456', 'Dfjh', '06 11 11 11 11', 'DGHJ'),
(96, 67, '546', '456', 'fgk', 'gk;'),
(97, 65, 'sqdf', 'qsdfg', '0611111111', 'qsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
