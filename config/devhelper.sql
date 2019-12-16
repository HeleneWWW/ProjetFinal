-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 déc. 2019 à 17:08
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

-- --------------------------------------------------------

--
-- Structure de la table `sites_media`
--

CREATE TABLE `sites_media` (
  `sm_id` int(11) NOT NULL,
  `sm_url` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `t_id` int(11) NOT NULL,
  `t_nom` varchar(255) NOT NULL,
  `t_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`t_id`, `t_nom`, `t_slug`) VALUES
(1, 'PHP', 'php'),
(2, 'HTML', 'html'),
(3, 'JavaScript', 'javascript'),
(4, 'CSS', 'css'),
(5, 'SQL', 'sql'),
(6, 'jQuery', 'jquery'),
(7, 'Ajax', 'ajax');

-- --------------------------------------------------------

--
-- Structure de la table `tag_site`
--

CREATE TABLE `tag_site` (
  `ts_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tag_site`
--

INSERT INTO `tag_site` (`ts_id`, `s_id`, `t_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 1, 6),
(5, 1, 3),
(6, 1, 4),
(7, 1, 7),
(8, 1, 5),
(9, 6, 4),
(10, 14, 6),
(13, 10, 2),
(14, 7, 4),
(15, 8, 4),
(16, 9, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pseudo` varchar(65) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`u_id`, `u_email`, `u_pseudo`, `u_password`, `u_status`) VALUES
(1, 'fab@gmail.com', 'Alexeï', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 0),
(2, 'hw@gmail.com', 'HeleneW', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(3, 'gaelledu34@gmail.com', 'Framb', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(4, 'llf@gmail.com', 'Uranie', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(5, 'kenny@gmail.com', 'Kenneth', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`s_id`);

--
-- Index pour la table `sites_media`
--
ALTER TABLE `sites_media`
  ADD PRIMARY KEY (`sm_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`t_id`);

--
-- Index pour la table `tag_site`
--
ALTER TABLE `tag_site`
  ADD PRIMARY KEY (`ts_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `sites_media`
--
ALTER TABLE `sites_media`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tag_site`
--
ALTER TABLE `tag_site`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sites_media`
--
ALTER TABLE `sites_media`
  ADD CONSTRAINT `sites_media_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sites` (`s_id`);

--
-- Contraintes pour la table `tag_site`
--
ALTER TABLE `tag_site`
  ADD CONSTRAINT `tag_site_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sites` (`s_id`),
  ADD CONSTRAINT `tag_site_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tags` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
