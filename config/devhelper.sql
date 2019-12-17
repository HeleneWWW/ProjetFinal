-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 17 déc. 2019 à 16:33
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
  `s_imgindex` varchar(255) DEFAULT NULL,
  `s_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`s_id`, `s_nom`, `s_slug`, `s_url`, `s_imgindex`, `s_description`) VALUES
(19, 'PHP.net', 'php-net', 'https://www.php.net/', '1.png', 'La bible du PHP ! Tu trouveras tout ce dont tu as besoins et en français !'),
(20, 'W3Schools', 'w3schools', 'https://www.w3schools.com/  ', '1.png', 'Tu trouves tout ce que tu veux sur quasiment tous les langages.Simple.Basique. Et en plus, il y a des petites simulations où tu peux tester toi même le code dans le but de mieux le comprendre.'),
(21, 'Bootstrap', 'bootstrap', 'https://getbootstrap.com/', '1.png', '#BootstrapYourLife ! '),
(22, 'MDN web docs', 'mdn-web-docs', 'https://developer.mozilla.org/fr/ ', '1.png', 'De la doc pour HTML, CSS et JS.'),
(23, 'Flexbox Froggy', 'flexbox-froggy', 'https://flexboxfroggy.com/#fr', '1.png', 'Le jeu qui te permet de comprendre FlexBox. Parce que sans, on ne PEUT PAS COMPRENDRE FLEXBOX '),
(24, 'CSS Tricks', 'css-tricks', 'https://css-tricks.com/', '1.png', 'Tout est dans le titre. des trucs et astuces pour mettre du CSS dans ta vie.'),
(25, 'Normalize.css', 'normalize-css', 'https://necolas.github.io/normalize.css/', '1.png', 'Il s\'agit d\'un petit fichier CSS qui offre une meilleure cohérence entre les navigateurs dans le style par défaut des éléments HTML. C\'est une alternative moderne, compatible HTML5, à la réinitialisation CSS traditionnelle.'),
(26, 'Reset CSS', 'reset-css', 'https://meyerweb.com/eric/tools/css/reset/', '1.png', 'L\'objectif d\'une feuille de style de réinitialisation est de réduire les incohérences du navigateur dans des éléments tels que les hauteurs de ligne par défaut, les marges et les tailles de police des en-têtes, etc.'),
(27, 'Validator W3C', 'validator-w3c', 'https://validator.w3.org/', '1.png', 'Passe ton HTML dans le validator si tu veux pas que ton formateur t’envoie  au goulag.'),
(28, 'Three.js', 'three-js', 'https://threejs.org/', '1.png', 'Une librairie Javascript qui te permet de faire des trucs assez ouf, où tu peux même modifier le code pour tenter des petites choses.'),
(29, 'GreenSock', 'greensock', 'https://greensock.com/showcase/', '1.png', 'Une chouette librairie JS.'),
(30, 'TypeScript', 'typescript', 'https://www.typescriptlang.org/', '1.png', 'Ici tu pourras compiler (réduire) ton JavaScript ça te permettra (entre autre) de réduire le nombre de requête et ça, ça fait plaisir.'),
(31, 'jQuery UI', 'jquery-ui', 'https://jqueryui.com/', '1.png', 'La bible de jQuery. T’sais comment ça se passe, tu sues en faisant du Javascript et dès que tu passe à jQuery, BIM ! Tu retrouves le sourire !'),
(32, 'Paper.js', 'paper-js', 'http://paperjs.org/', '1.png', 'Une jolie librairie JS.'),
(33, 'Placeholder', 'placeholder', 'https://placeholder.com/', '1.png', 'Alors, Placeholder, ils sont trop cool. Ils te proposent des ‘fausses images’ pour remplacer celles qui ne sont pas encore arrivées, ou tout simplement pour t\'entraîner pendant ta formation (true story)'),
(34, 'GlooMaps', 'gloomaps', 'https://www.gloomaps.com/', '1.png', 'Un petit outil sympa pour t’aider à élaborer et à mettre en forme l’arborescence de ton future site. et maintenant que j’y pense, tu pourrais faire un arbre généalogique...'),
(35, 'Should I Prefix ?', 'should-i-prefix', 'http://shouldiprefix.com/', '1.png', 'Quelques fonctionnalités requièrent encore des préfixes pour être compatibles avec différents navigateurs.On est au 21ème siècle, juste. Bref, comme on peut pas retenir QUELLES fonctionnalité a besoin de QUEL préfixe pour QUEL navigateur,on a besoin de  Should I Prefix.'),
(36, 'Hot Examples', 'hot-examples', 'https://hotexamples.com/', '1.png', 'Ce service a été créé pour aider les programmeurs à trouver de vrais exemples d\'utilisation de classes et de méthodes ainsi que de la documentation. Notre système recherche, récupère et classe automatiquement des exemples de code source provenant de plus d\'un million de projets open source. Une caractéristique clé du service est la possibilité de voir des exemples d\'utilisation d\'une classe ou d\'une méthode particulière à partir de plusieurs projets sur une seule page.'),
(37, 'CSS Script', 'css-script', 'https://www.cssscript.com/', '1.png', 'Le site ne paye pas de mine (comme on disait en 1958), mais faut dire que leurs scripts CSS sont plutôt sympas. Comme quoi, il faut croire que les cordonniers sont effectivement les plus mal chaussés (comme on disait en 1962).'),
(38, 'Codecademy', 'codecademy', 'https://www.codecademy.com/', '1.png', 'A gauche un menu avec les instructions et à droite un éditeur de texte où l\'on peut coder pour mettre en pratique.'),
(39, 'GitHub', 'github', 'https://github.com/', '1.png', 'La secte qu’on veut intégrer.'),
(40, 'StackOverflow', 'stackoverflow', 'https://stackoverflow.com/', '1.png', 'Méfie toi et ne copie/colle pas le premier code que tu y trouveras. C’est peut-être moi qui l’ai posté en quémandant un peu d’aide pour le débugger.'),
(41, 'HTML Color Codes', 'html-color-codes', 'https://htmlcolorcodes.com', '1.png', 'Colore ton code et colore ta vie.'),
(42, 'Wamp', 'wamp', 'http://www.wampserver.com/', '1.png', 'Si t’es sous Windows et que tu veux dynamiser ton site, faut choper Wamp.'),
(43, 'Xampp', 'xampp', 'https://www.apachefriends.org/fr/index.html', '1.png', 'Xampp a été mon ami, il pourra être le tien.'),
(44, 'Mamp', 'mamp', 'https://www.mamp.info/en/', '1.png', 'Si t’es sur Mac et que tu veux dynamiser ton site, faut choper Mamp.'),
(45, 'PHP Code Checker', 'php-code-checker', 'https://phpcodechecker.com/', '1.png', 'Mets ton code PHP dans le PHP code checker, et tu sauras où tu as oublié ce p***** de point virgule de m**** !'),
(46, 'Can I Use ?', 'can-i-use', 'https://caniuse.com/ ', '1.png', 'Can I Use vous indique si la fonctionnalité que vous voulez utiliser sera prise en charge sans problème selon les navigateurs.'),
(47, 'CSSmatic', 'cssmatic', 'https://www.cssmatic.com/', '1.png', 'Pour faire tes petits dégradés, tes bordures arrondies, tu n’auras qu’à copier/coller le code, mais prends garde à ne pas copier/coller bêtement.'),
(48, 'Border Radius', 'border-radius', 'https://border-radius.com/', '1.png', 'Ne t’embête pas à calculer la courbure de tes borders, Border Radius le fera pour toi.'),
(49, 'Modernizr', 'modernizr', 'https://modernizr.com/', '1.png', 'Modernizr vous indique les fonctionnalités HTML, CSS et JavaScript que le navigateur de l\'utilisateur a à offrir.'),
(50, 'Blockly Games', 'blockly-games', 'https://blockly.games/', '1.png', 'Un petit jeu pour appréhender les algorithmes. Mais ne m’en parle pas, je suis encore sur le niveau 10 du labyrinthe.'),
(51, 'Hour Of Code', 'hour-of-code', 'https://hourofcode.com/fr', '1.png', 'Des petits jeux sympas pour initier les enfants (de 7 à 77 ans) aux joies du code.'),
(52, 'Silent Teacher', 'silent-teacher', 'http://silentteacher.toxicode.fr/', '1.png', 'Un jeu pour apprendre en s’amusant parce que c’est rigolo ! Au début c’est facile, mais après BIM ! Là ça rigole moins, hein !'),
(53, 'Fancybox', 'fancybox', 'https://fancyapps.com/fancybox/3/', '1.png', 'Une librairie JS qui t’aideras dans l’élaboration d’un site responsive. Quand tu touches ton écran en écartant ton pouce et ton index et que ça zoom, et bien c’est grâce à Fancybox.'),
(55, 'Masonry', 'masonry', 'https://masonry.desandro.com/', '1.png', 'Une chouette librairie JS qui te permet d’empiler des images et autres éléments pas de même taille comme si tu faisais de la maçonnerie. Tout est dans le titre.'),
(56, 'Isotope', 'isotope', 'https://isotope.metafizzy.co/', '1.png', 'Tu auras besoin d’Isotope quand tu voudras trier, ordonner des éléments.'),
(57, 'Font Awesome', 'font-awesome', 'https://fontawesome.com/', '1.png', 'Tu as besoin d’icon ? C’est par là !\r\n'),
(58, 'Hammer.js', 'hammer-js', 'https://hammerjs.github.io/', '1.png', 'Si tu veux gérer des événements souris (entre autre) , c’est par là !\r\n'),
(59, 'MySQL (dev zone)', 'mysql-dev-zone', 'https://dev.mysql.com/', '1.png', 'Tes requête SQL ne sont pas au top comme les miennes ? Là-bas ils pourront t’aider.'),
(60, 'SQL.sh', 'sql-sh', 'https://sql.sh/', '1.png', 'Besoin d’aide pour la syntaxe de ta requête SQL de vingt-cinq lignes ? C’est par là !'),
(61, 'Composer', 'composer', 'https://getcomposer.org', '1.png', 'Pas encore compris à quoi ça servait...\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `sites_media`
--

CREATE TABLE `sites_media` (
  `sm_id` int(11) NOT NULL,
  `sm_url` varchar(255) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sites_media`
--

INSERT INTO `sites_media` (`sm_id`, `sm_url`, `s_id`) VALUES
(1, '4.png', 50),
(2, '3.png', 50),
(3, '2.png', 50),
(4, '3.png', 21),
(5, '2.png', 21),
(6, '2.png', 48),
(7, '3.png', 48),
(8, '2.png', 46),
(9, '3.png', 46),
(10, '2.png', 38),
(11, '2.png', 61),
(12, '2.png', 47),
(13, '3.png', 47),
(14, '4.png', 47),
(15, '2.png', 37),
(16, '2.png', 24),
(17, '3.png', 37),
(18, '2.png', 53),
(19, '3.png', 53),
(20, '4.png', 53),
(21, '2.png', 23),
(22, '2.png', 57),
(23, '3.png', 57),
(24, '2.png', 34),
(25, '3.png', 34),
(26, '4.png', 34),
(27, '2.png', 29),
(28, '2.png', 58),
(29, '3.png', 58),
(30, '2.png', 36),
(31, '3.png', 36),
(32, '2.png', 51),
(33, '3.png', 51),
(34, '2.png', 41),
(35, '3.png', 41),
(36, '2.png', 56),
(37, '2.png', 31),
(38, '2.png', 44),
(39, '2.png', 55),
(40, '2.png', 22),
(41, '2.png', 49),
(42, '3.png', 49),
(43, '2.png', 59),
(44, '3.png', 59),
(45, '2.png', 25),
(46, '2.png', 32),
(47, '4.png', 32),
(48, '2.png', 45),
(49, '2.png', 19),
(50, '3.php', 19),
(51, '2.png', 33),
(52, '3.png', 33),
(53, '2.png', 26),
(54, '2.png', 35),
(55, '2.png', 52),
(56, '3.png', 52),
(57, '2.png', 60),
(58, '3.png', 60),
(59, '2.png', 40),
(60, '3.png', 40),
(61, '4.png', 40),
(62, '2.png', 28),
(63, '3.png', 28),
(64, '4.png', 28),
(65, '2.png', 30),
(66, '2.png', 27),
(67, '2.png', 20),
(68, '3.png', 20),
(69, '2.png', 42),
(70, '3.png', 42),
(71, '2.png', 43);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `t_id` int(11) NOT NULL,
  `t_nom` varchar(255) NOT NULL,
  `t_slug` varchar(255) NOT NULL,
  `t_img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`t_id`, `t_nom`, `t_slug`, `t_img`) VALUES
(1, 'PHP', 'php', '1.png'),
(2, 'HTML', 'html', '1.png'),
(3, 'JavaScript', 'javascript', '1.png'),
(4, 'CSS', 'css', '1.png'),
(5, 'SQL', 'sql', '1.png'),
(6, 'jQuery', 'jquery', '1.png'),
(7, 'Ajax', 'ajax', '1.png'),
(8, 'Librairie', 'librairie', NULL),
(9, 'Jeux', 'jeux', NULL),
(10, 'Serveur', 'serveur', NULL),
(11, 'Tutos', 'tutos', NULL);

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
(23, 19, 1),
(24, 20, 1),
(25, 20, 2),
(26, 20, 3),
(27, 20, 4),
(28, 20, 5),
(29, 20, 6),
(30, 20, 7),
(31, 21, 2),
(32, 21, 3),
(33, 21, 4),
(34, 22, 2),
(35, 22, 3),
(36, 22, 4),
(37, 23, 4),
(38, 24, 4),
(39, 25, 4),
(40, 26, 4),
(41, 27, 2),
(42, 28, 3),
(43, 29, 3),
(44, 30, 3),
(45, 31, 3),
(46, 31, 6),
(47, 32, 3),
(48, 33, 2),
(49, 33, 4),
(50, 34, 2),
(51, 28, 8),
(52, 32, 8),
(53, 29, 8),
(54, 35, 3),
(55, 35, 4),
(56, 35, 6),
(57, 36, 1),
(58, 37, 4),
(59, 38, 1),
(60, 38, 3),
(61, 38, 11),
(62, 39, 1),
(63, 39, 2),
(64, 39, 3),
(65, 39, 4),
(66, 39, 5),
(67, 39, 6),
(68, 39, 7),
(69, 40, 1),
(70, 40, 2),
(71, 40, 3),
(72, 40, 4),
(73, 40, 5),
(74, 40, 6),
(75, 40, 7),
(76, 41, 2),
(77, 41, 4),
(78, 42, 5),
(79, 42, 10),
(80, 43, 5),
(81, 43, 10),
(82, 44, 5),
(83, 44, 10),
(84, 45, 1),
(85, 46, 3),
(86, 46, 4),
(87, 46, 6),
(88, 47, 4),
(89, 48, 4),
(90, 49, 2),
(91, 49, 3),
(92, 49, 4),
(93, 50, 3),
(94, 50, 9),
(95, 50, 11),
(96, 51, 3),
(97, 51, 6),
(98, 51, 9),
(99, 51, 11),
(100, 52, 3),
(101, 52, 6),
(102, 52, 9),
(103, 52, 11),
(104, 53, 3),
(105, 53, 6),
(106, 53, 8),
(110, 55, 3),
(111, 55, 6),
(112, 55, 8),
(113, 56, 3),
(114, 56, 6),
(115, 56, 8),
(116, 57, 2),
(117, 57, 4),
(118, 58, 3),
(119, 58, 6),
(120, 58, 8),
(121, 59, 5),
(122, 60, 5),
(123, 61, 1);

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
(2, 'hw@gmail.com', 'HeleneW', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(3, 'gaelledu34@gmail.com', 'Framb', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(4, 'llf@gmail.com', 'Uranie', '$2y$10$oQwtWi/CKJStDTRVps3pJesk9WAzOODZn1hO9OcHy.zvuYTUh50Qu', 1),
(9, 'fab@gmail.com', 'gardechampetre', '$2y$10$204iH.4w3kTJlhlXzYK49ujWSwPKJNkc2DDewNNQhWtnNPJUVcv2i', 0),
(10, 'pix@gmail.com', 'Pix', '$2y$10$sbuWH6UBbJ7jNGuw5pFuuetL8D3md2sYodrzZvdg4fSjpmxH/Ds5e', 0);

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
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `sites_media`
--
ALTER TABLE `sites_media`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `tag_site`
--
ALTER TABLE `tag_site`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
