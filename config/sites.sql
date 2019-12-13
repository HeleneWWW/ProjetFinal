-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 déc. 2019 à 17:03
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `devhelper`
--

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `s_id` int(11) NOT NULL,
  `s_nom` varchar(255) NOT NULL,
  `s_slug` varchar(255) NOT NULL,
  `s_url` varchar(255) NOT NULL,
  `s_imgindex` varchar(255) NOT NULL,
  `s_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`s_id`, `s_nom`, `s_slug`, `s_url`, `s_imgindex`, `s_description`) VALUES
(1, 'W3schools', 'w3schools', 'https://www.w3schools.com/', '', ''),
(2, 'PHP: Hypertext Processor', 'php-net', 'https://www.php.net/', '', ''),
(3, 'Bootstrap', 'bootstrap', 'https://getbootstrap.com/\r\n', '', ''),
(4, 'MDN web docs', 'mdn-web-doc', 'https://developer.mozilla.org/fr/ ', '', ''),
(5, 'W3C', 'w3c', 'https://www.w3.org/\r\n', '', ''),
(6, 'Flexbox Froggy', 'flexbox-froggy', 'https://flexboxfroggy.com/#fr', '', ''),
(7, 'CSS-Tricks', 'css-tricks', 'https://css-tricks.com/', '', ''),
(8, 'Normalize.css', 'normalize-css', 'https://necolas.github.io/normalize.css/', '', ''),
(9, 'Reset CSS', 'reset-css', 'https://meyerweb.com/eric/tools/css/reset/', '', ''),
(10, 'The W3C Markup Validation Service', 'the-w3c-markup-validation-service', 'https://validator.w3.org/\r\n', '', ''),
(11, 'three.js - JavaScript 3D Library', 'three-js-javascript-3d-library', 'https://threejs.org/', '', ''),
(12, 'GreenSock', 'greensock', 'https://greensock.com/showcase/', '', ''),
(13, 'TypeScript', 'typescript', 'https://www.typescriptlang.org/ ', '', ''),
(14, 'jQuery UI', 'jquery-ui', 'https://jqueryui.com/', '', ''),
(15, 'Paper.js', 'paper-js', 'http://paperjs.org/', '', ''),
(16, 'Placeholder', 'placeholder', 'https://placeholder.com/ ', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
