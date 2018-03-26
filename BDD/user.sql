-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 mars 2018 à 08:11
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
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `MAIL_USER` varchar(30) CHARACTER SET utf8 NOT NULL,
  `PWD_USER` varchar(20) CHARACTER SET utf8 NOT NULL,
  `FIRSTNAME` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `USERGROUP` int(11) NOT NULL DEFAULT '0',
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_USER`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`MAIL_USER`, `PWD_USER`, `FIRSTNAME`, `USERGROUP`, `ID_USER`) VALUES
('cyril.rat@gmail.com', 'cyril', 'Cyril', 1, 1),
('sems@live.fr', 'sems', 'keletaona', 2, 2),
('dlugi57@gmail.com', 'loveafpa', 'Piotr', 3, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
