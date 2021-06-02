-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 02 juin 2021 à 14:12
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `uploadprojet`
--

CREATE TABLE `uploadprojet` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Lien` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Afficher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `uploadprojet`
--

INSERT INTO `uploadprojet` (`ID`, `Nom`, `Description`, `Lien`, `Image`, `Afficher`) VALUES
(15, 'projet 8', 'test 4', 'https://anthonys787@promo-72.codeur.online', 'fond13.jpg', 'non'),
(17, 'projet6', 'test5', 'https://anthonys787@promo-72.codeur.online', 'fond7.jpg', 'non'),
(18, 'projet9', 'test2', 'https://anthonys787@promo-72.codeur.online', 'fond10.jpg', 'non'),
(21, 'projet5', 'test5', 'https://anthonys787@promo-72.codeur.online', 'fond9.jpg', 'non'),
(23, 'projet10', 'test2', 'www.test2.test', 'fond8.jpg', 'non'),
(24, 'projet7', 'test3', 'https://anthonys787@promo-72.codeur.online', 'millo-lin-IbngTBpNuMA-unsplash.jpg', 'non'),
(25, 'Reproduire une maquette', 'RÃ©alisation d\'un site web responsive en reproduisant une maquette trouvÃ©e sur le web.', 'https://anthonys787.promo-72.codeur.online/ACS_Projet1/', 'projet1.png', 'oui'),
(26, 'Promouvoir un dÃ©partement', 'RÃ©alisation d\'un site vitrine responsive afin de promouvoir une rÃ©gion ( Var ).', 'https://anthonys787.promo-72.codeur.online/ACS_Projet2/', 'projet2.png', 'oui'),
(27, 'Projet ampoule', 'RÃ©alisation d\'un Dashboard responsive dans lequel on peut ajouter, modifier ou supprimer chaque changement d\'ampoule.', 'https://anthonys787.promo-72.codeur.online/ACS_Projet3/', 'projet3.png', 'oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `uploadprojet`
--
ALTER TABLE `uploadprojet`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `uploadprojet`
--
ALTER TABLE `uploadprojet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
