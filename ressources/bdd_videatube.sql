-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 fév. 2019 à 13:17
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_videatube`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

CREATE TABLE `commentary` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_comm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentary`
--

INSERT INTO `commentary` (`id`, `content`, `id_video`, `id_user`, `date_comm`) VALUES
(1, 'First !!!!', 3, 6, '2019-01-31 06:00:00'),
(2, 'First !!', 3, 6, '2019-01-30 11:18:00'),
(3, 'ceci est un commentaire', 20, 3, '2019-02-01 10:00:00'),
(4, 'cococococoooooooomentaiiiiiiiiiire', 20, 5, '2019-02-01 15:30:00'),
(22, 'test', 20, 5, '2019-02-13 12:00:27'),
(23, 'j\'aime quentin schiff', 20, 5, '2019-02-13 12:00:45'),
(24, 'test final\n\n\n\n\n\n\n\n\n\n\n\n\n\nmega long de commentaire', 20, 5, '2019-02-13 14:41:03'),
(25, 'test final\n\n\n\n\n\n\n\n\n\n\n\n\n\nmega long de commentaire', 20, 5, '2019-02-13 14:41:08'),
(26, 'meeega ong\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\ncommentaire', 20, 5, '2019-02-13 14:42:00');

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `date_purchase` date NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `purchase`
--

INSERT INTO `purchase` (`id`, `date_purchase`, `id_video`, `id_user`) VALUES
(1, '2018-12-19', 4, 6),
(2, '2018-12-19', 11, 6),
(3, '2019-01-31', 13, 5),
(4, '2019-02-01', 20, 16),
(5, '2019-02-14', 20, 6);

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `date_sub` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_type_subscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`id`, `date_sub`, `id_user`, `id_type_subscription`) VALUES
(41, '2019-02-01 11:49:50', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `title`, `description`, `thumbnail`) VALUES
(1, 'Action', 'Animation tenant aux aventures représentées ou racontées.\r\n', 'fas fa-fist-raised'),
(2, 'Aventure', 'L\'aventure ensemble d\'activités, d\'expériences qui comportent du risque et de l\'imprévu.', 'fab fa-pied-piper-hat'),
(3, 'Cuisine', 'Aliments préparés qu\'on sert aux repas.', 'fas fa-hamburger'),
(4, 'Beauté', 'Caractère de ce qui est moralement admirable.', 'fas fa-eye'),
(5, 'Animaux', 'Être vivant non végétal, ne possédant pas les caractéristiques de l\'espèce humaine.', 'fas fa-cat'),
(6, 'Tutos', 'Guide d\'apprentissage (texte, vidéo) pour se familiariser étape par étape avec une activité.', 'fas fa-graduation-cap');

-- --------------------------------------------------------

--
-- Structure de la table `type_subscription`
--

CREATE TABLE `type_subscription` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(10) NOT NULL,
  `nbDaysTrial` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_subscription`
--

INSERT INTO `type_subscription` (`id`, `price`, `duration`, `nbDaysTrial`, `title`) VALUES
(1, '0.99', 1, 0, 'Abonnement à la journée'),
(2, '3.99', 7, 0, 'Abonnement à la semaine'),
(3, '9.99', 30, 7, 'Abonnement au mois');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `mail`, `log`, `password`, `nickname`, `role`, `avatar`) VALUES
(3, 'Mouttet', 'Mimi', 'mimiDuD67@gmail.com', 'CptLaDouille', '$2y$10$ajBhR0tGUEnbZkkL2/P0ie3LZ6Db7cvrKPEbpi.FPSwWKEGgytE8e', 'MimiLaDouille', 0, 'rems.jpg'),
(4, 'Thonin', 'Chloe', 'ChloeThonin@gmail.com', 'ChloeThonin', '$2y$10$sTAn0AjyNn.D84zCeDR5Sey5.KJAdFW50mTmUQdelhIWJNaLlkuRG', 'ChloeThonin', 0, 'chlo.jpg'),
(5, 'Schiff', 'Quentin', 'QuentinSchiff@gmail.com', 'SchiffQuentin', '$2y$10$2LOK0gDgoSC.itreRbsh6upgjVvea1WgxUYzw2xadcjTgx/Xt1Aza', 'SchiffQuentin', 1, 'qs1.jpg'),
(6, 'Knittle', 'lapute', 'KevKnittle@gmail.com', 'Kev67', '$2y$10$2LOK0gDgoSC.itreRbsh6upgjVvea1WgxUYzw2xadcjTgx/Xt1Aza', 'KevDu67', 1, 'keks.jpg'),
(7, 'test', 'test', 'test@test.com', 'test', '$2y$10$I7RgwhVON.rSzQH96lZUBeK2KlZ.22070PSD6BaLvZj85jp4fnjZa', 'test', 0, ''),
(8, 'trol', 'trol', 'trol', 'trol', '$2y$10$wizjiAs6ZifPKSOUG9Fn9.O/fyeqPFglkerDnQ/bLEjptLU4F3B4i', 'trol', 0, ''),
(9, 'dems', 'dems', 'demsdems@gmail.com', 'dems67', '$2y$10$9e1V9HckHU7bF9/TtL1KmO5YFExgZkfK4OeghyWR1rpzkQ/awoBMK', 'dems²', 0, 'qs1.jpg'),
(10, 'kevlagrongnasse', 'knitos', 'kevkev@gmail.com', 'keks', '$2y$10$2yZn0r71GxyudAdKRpHcneeqhGOZHRLsEXJJkpijMGif4mdiEPptm', 'Xxkevnamescope67xX', 0, 'keks.jpg'),
(16, 'jb', 'jb', 'jb', 'jb', '$2y$10$Iwpy52XyE7iX9Zg6ThftWenBOGcFQynMVD/LnerkhPWS1mgIN.MSq', 'jb', 0, 'user.png');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_upload` date NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `nbViews` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `title`, `price`, `link`, `date_upload`, `thumbnail`, `nbViews`, `description`) VALUES
(2, 'Shadow Of Mordor', '2.99', 'https://www.youtube.com/embed/5xK7e0-_3oQ', '2018-12-19', '', 0, ''),
(3, 'CET ANIMAL = 30 FOIS MA TAILLE ! (The Last Guardian #1)', '4.99', 'https://www.youtube.com/embed/JinTG_9ODuY', '2018-12-19', '', 0, ''),
(4, 'UNE DEUXIÈME BÊTE ?! (The Last Guardian #2)', '4.99', 'https://www.youtube.com/embed/HHmizvVsRgs', '2018-12-20', '', 0, ''),
(5, 'S\'INFILTRER OU SE FAIRE KIDNAPPER (The Last Guardian #3)', '4.99', 'https://www.youtube.com/embed/raSKTwY7x8I', '2018-12-21', '', 0, ''),
(6, 'LA CHUTE DE TRICO ?! (The Last Guardian #4)\r\n', '4.99', 'https://www.youtube.com/embed/GPQF0DhBnI8', '2018-12-22', '', 0, ''),
(7, 'MOURIR DANS UN ÉBOULEMENT ?! (The Last Guardian #5)', '4.99', 'https://www.youtube.com/embed/o50L0nnmQws', '2018-12-23', '', 0, ''),
(8, 'CE N\'EST PAS LA QUEUE DE TRICO... (The Last Guardian #6)', '4.99', 'https://www.youtube.com/embed/SvzRWMpKcfQ', '2018-12-24', '', 0, ''),
(9, 'IL EST MORT ?.. (The Last Guardian #7)', '4.99', 'https://www.youtube.com/embed/HMGmnwxaLzM', '2018-12-24', '', 0, ''),
(10, 'J\'AI PLEURÉ DEVANT CE CHEF D’ŒUVRE (The Last Guardian FIN)', '4.99', 'https://www.youtube.com/embed/lrnazIq--RU', '2018-12-25', 'squez15.jpg', 122, 'DANS CET EPISODE, JE FAIT FACE A MON PLUS GRAND DESESPOIR'),
(11, 'High & Fines Herbes : Episode 1 (édition 420) - Saison 1', '1.99', 'https://www.youtube.com/embed/NjkcDl1e1jc', '2018-12-18', '', 0, ''),
(12, 'High & Fines Herbes : Episode 2 - Saison 1', '1.99', 'https://www.youtube.com/embed/m0edPiv9rI4', '2018-12-27', 'A&fhe2s1.jpg', 959227, 'Dans cet épisode d\'Ail et fines herbes, Caba et JJ cuisinent un bon poulet curry avec un max de spatio-chanvre'),
(13, 'High & Fines Herbes : Episode 4 - Saison 1', '1.99', 'https://www.youtube.com/embed/XROv7HgyrWU', '2018-12-28', 'A&fhe4s1.png', 666, 'Dans cet épisode Caba et JJ ouvrent leur 3e oeil et cuisine des tenders de poulet'),
(14, '27 ASTUCES DE BEAUTÉ QUE TU AURAIS DU CONNAÎTRE PLUS TÔT\r\n', '0.00', 'https://www.youtube.com/embed/lW4zJRItAYY', '2018-12-26', '5ast.jpg', 46285589, 'Des astuces qui vous auriez préféré connaitre avant !'),
(15, 'Drôle ANIMAUX Eau FAILS qui vous fera MOURIR DE MOURIR - Vidéos épiques ANIMAUX FUNNY', '0.00', 'https://www.youtube.com/embed/ws4V4yorkYo', '2018-12-25', '', 0, ''),
(16, 'Vidéos de chats à mourir de rire compilation 2013', '0.00', 'https://www.youtube.com/embed/cggl4WN77Mw', '2018-12-20', '', 0, ''),
(17, '5 Easy Mouse/Rat Trap', '0.00', 'https://www.youtube.com/embed/EDqAcM9FQRs', '2018-12-18', '', 0, ''),
(18, 'TUTO COUPE DU MONDE', '1.99', 'https://www.youtube.com/embed/LvEA2KHWQec', '2018-12-18', '', 0, ''),
(20, 'Best of Oss 117', '12.00', 'best_of_oss_117.mp4', '2019-01-31', 'oss117.jpg', 42, 'le best of des meilleurs films de tout les temps');

-- --------------------------------------------------------

--
-- Structure de la table `videotheme`
--

CREATE TABLE `videotheme` (
  `id` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `videotheme`
--

INSERT INTO `videotheme` (`id`, `id_video`, `id_theme`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 2),
(4, 5, 2),
(5, 6, 2),
(6, 7, 2),
(7, 8, 2),
(8, 9, 2),
(9, 10, 2),
(10, 11, 3),
(11, 12, 3),
(12, 13, 3),
(13, 14, 4),
(14, 15, 5),
(15, 16, 5),
(16, 17, 6),
(17, 18, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_video_commentary` (`id_video`) USING BTREE,
  ADD KEY `fk_id_user_commentary` (`id_user`);

--
-- Index pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_video_purchase` (`id_video`),
  ADD KEY `fk_id_user_purchase` (`id_user`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_type_subscription_subscription` (`id_type_subscription`),
  ADD KEY `fk_id_user_subscription` (`id_user`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_subscription`
--
ALTER TABLE `type_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `log` (`log`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `videotheme`
--
ALTER TABLE `videotheme`
  ADD PRIMARY KEY (`id`,`id_video`,`id_theme`),
  ADD KEY `fk_id_video_videotheme` (`id_video`) USING BTREE,
  ADD KEY `fk_id_theme_videotheme` (`id_theme`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentary`
--
ALTER TABLE `commentary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_subscription`
--
ALTER TABLE `type_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `videotheme`
--
ALTER TABLE `videotheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD CONSTRAINT `fk_id_user_commentary` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id_video_commentary` FOREIGN KEY (`id_video`) REFERENCES `video` (`id`);

--
-- Contraintes pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_id_user_purchase` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id_video_purchase` FOREIGN KEY (`id_video`) REFERENCES `video` (`id`);

--
-- Contraintes pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `fk_id_type_subscription_subscription` FOREIGN KEY (`id_type_subscription`) REFERENCES `type_subscription` (`id`),
  ADD CONSTRAINT `fk_id_user_subscription` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `videotheme`
--
ALTER TABLE `videotheme`
  ADD CONSTRAINT `fk_id_theme_videotheme` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id`),
  ADD CONSTRAINT `fk_id_video_videotheme` FOREIGN KEY (`id_video`) REFERENCES `video` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
