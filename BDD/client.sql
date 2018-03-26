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
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `CA` float DEFAULT NULL,
  `EFFECTIF` int(11) DEFAULT NULL,
  `RAISON_SOCIALE` varchar(32) NOT NULL,
  `CODE_POSTAL` char(5) NOT NULL,
  `TELEPHONE` varchar(30) NOT NULL,
  `NOM_NATURE` varchar(25) DEFAULT NULL,
  `TYPE_SOCIETE` varchar(25) NOT NULL,
  `ADRESSE_DU_CLIENT` varchar(255) DEFAULT NULL,
  `VILLE` varchar(255) DEFAULT NULL,
  `COMMENTAIRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENT`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_CLIENT`, `CA`, `EFFECTIF`, `RAISON_SOCIALE`, `CODE_POSTAL`, `TELEPHONE`, `NOM_NATURE`, `TYPE_SOCIETE`, `ADRESSE_DU_CLIENT`, `VILLE`, `COMMENTAIRE`) VALUES
(64, 100000, 17, 'IBM', '44200', '06 06 06 31 41', 'ancienne', 'prive', '25 avenue du ruisseau', 'NANTES', 'Client a retravailler!'),
(63, 10000000, 2, 'AIRFRANCE', '06200', '06 45 24 84 03', 'principale', 'prive', 'Avenue de la Floride', 'SOPHIA ANTIPOLIS', 'Sans Commentaires'),
(67, 10000000, 4, 'MARLBORO', '06200', '05 87 65 98 54', 'principale', 'prive', '18 Rue de la californie', 'NICE', 'arrêter de fumer provoque notre faillite'),
(60, 530, 15, 'SAS LE PRINTEMPS', '06300', '04 92 25 25 85', 'secondaire', 'public', '150 Route des Alpes', 'BISCAROS', ''),
(59, 16542, 100, 'CLIENTA', '75001', '06 06 06 31 41', 'principale', 'prive', '12 rue du Printemps', 'PARIS', 'belle soci&eacute;t&eacute;, Client &agrave; travailler'),
(66, 12544.2, 17, 'SAS JOHNSON', '59500', '08 05 04 12 12', 'secondaire', 'prive', '150 rue de l\'église', 'DUNKERQUE', 'Futur Client'),
(126, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(55, 1800000, 50, 'PARFUMERIE ROBERT', '83700', '06 45 24 84 05', 'principale', 'prive', '159 Avenue de verdun', 'GRASSE', ''),
(56, 20.5, 1, 'AFPA2', '06800', '06 42 48 44 55', 'principale', 'prive', '244 Route de Turin', 'NICE', ''),
(65, 2566980, 251, 'THALES', '06400', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'CANNES', 'space time&quot;'),
(123, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(124, 10000000, 6, 'RAISONSOCIALE', '04400', '06 06 06 31 41', 'principale', 'prive', '11 rue du Soleil', 'AVIGNON', ''),
(125, 211155, 6, 'À DÉTRUIRE', '83300', '06 68 17 41 33', 'principale', 'prive', '756 Quartier des Faïsses Orientales', 'DRAGUIGNAN', ''),
(99, 12546, 6, 'RATNCO', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(102, 211155, 6, 'VLAD &AMP; CO', '83300', '06 68 17 41 33', 'principale', 'prive', '756 Quartier des Faïsses Orientales', 'DRAGUIGNAN', 'sf'),
(97, 254669, 6, 'SARL AGMELEC', '83700', '06 45 24 84 03', 'principale', 'prive', '159 Avenue de verdun', 'SAINT RAPHAEL', ''),
(127, 564, 21521, 'ZERFG', '06000', '05 54 56 45 25', 'principale', 'prive', 'stfgh', 'RTH', 'zghzrg'),
(128, 15, 21, 'raison', '03000', '1111111111', 'ancienne', 'prive', 'adress', 'ville', 'com'),
(129, 15, 21, 'raison', '03000', '1111111111', 'ancienne', 'prive', 'adress', 'ville', 'com'),
(130, 15, 21, 'raison', '03000', '1111111111', 'ancienne', 'prive', 'adress', 'ville', 'com'),
(158, 35, 45, 'raison', '03000', '1111111111', 'ancienne', 'prive', 'qsdfg', 'qsdfg', 'rtuy'),
(159, 35, 45, 'raison', '03000', '1111111111', 'ancienne', 'prive', 'qsdfg', 'qsdfg', 'rtuy'),
(160, 500, 123, 'Direct Matin', '06000', '0611111111', 'principale', 'public', 'Av', 'Nice', 'No comment'),
(161, 35, 45, 'raison', '06000', '0611111111', 'ancienne', 'prive', 'dfg', 'Nice', 'sdfg'),
(162, 666, 666, 'test', '06000', '0611111111', 'ancienne', 'prive', 'test', 'Nice', 'test'),
(163, 35, 35, 'test', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test'),
(164, 35, 35, 'test1', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test'),
(165, 35, 35, 'test1', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test'),
(166, 35, 35, 'test1', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test'),
(167, 35, 35, 'test1', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test'),
(168, 35, 35, 'test12', '06000', '0611111111', 'principale', 'public', 'test', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
