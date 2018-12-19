INSERT INTO `user` (`id`, `lastname`, `firstname`, `mail`, `log`, `password`, `nickname`, `role`) VALUES
(3, 'Mouttet', 'Mimi', 'mimiDuD67@gmail.com', 'CptLaDouille', 'admin', 'MimiLaDouille', 0),
(4, 'Thonin', 'Chloe', 'ChloeThonin@gmail.com', 'ChloeThonin', 'admin', 'ChloeThonin', 0),
(5, 'Schiff', 'Quentin', 'QuentinSchiff@gmail.com', 'SchiffQuentin', 'user', 'SchiffQuentin', 1),
(6, 'Knittle', 'Kevin', 'KevKnittle@gmail.com', 'Kev67', 'user', 'KevDu67', 1);

INSERT INTO `video` (`id`, `title`, `price`, `link`, `date_upload`) VALUES
(2, 'Shadow Of Mordor', '2.99', 'https://www.youtube.com/watch?v=5xK7e0-_3oQ', '2018-12-19'),
(3, 'CET ANIMAL = 30 FOIS MA TAILLE ! (The Last Guardian #1)', '4.99', 'https://www.youtube.com/watch?v=JinTG_9ODuY', '2018-12-19'),
(4, 'UNE DEUXIÈME BÊTE ?! (The Last Guardian #2)', '4.99', 'https://www.youtube.com/watch?v=HHmizvVsRgs', '2018-12-20'),
(5, 'S\'INFILTRER OU SE FAIRE KIDNAPPER (The Last Guardian #3)', '4.99', 'https://www.youtube.com/watch?v=raSKTwY7x8I', '2018-12-21'),
(6, 'LA CHUTE DE TRICO ?! (The Last Guardian #4)\r\n', '4.99', 'https://www.youtube.com/watch?v=GPQF0DhBnI8', '2018-12-22'),
(7, 'MOURIR DANS UN ÉBOULEMENT ?! (The Last Guardian #5)', '4.99', 'https://www.youtube.com/watch?v=o50L0nnmQws', '2018-12-23'),
(8, 'CE N\'EST PAS LA QUEUE DE TRICO... (The Last Guardian #6)', '4.99', 'https://www.youtube.com/watch?v=SvzRWMpKcfQ', '2018-12-24'),
(9, 'IL EST MORT ?.. (The Last Guardian #7)', '4.99', 'https://www.youtube.com/watch?v=HMGmnwxaLzM', '2018-12-24'),
(10, 'J\'AI PLEURÉ DEVANT CE CHEF D’ŒUVRE (The Last Guardian FIN)', '4.99', 'https://www.youtube.com/watch?v=lrnazIq--RU', '2018-12-25'),
(11, 'High & Fines Herbes : Episode 1 (édition 420) - Saison 1', '1.99', 'https://www.youtube.com/watch?v=NjkcDl1e1jc', '2018-12-18'),
(12, 'High & Fines Herbes : Episode 2 - Saison 1', '1.99', 'https://www.youtube.com/watch?v=m0edPiv9rI4', '2018-12-27'),
(13, 'High & Fines Herbes : Episode 4 - Saison 1', '1.99', 'https://www.youtube.com/watch?v=XROv7HgyrWU', '2018-12-28'),
(14, '27 ASTUCES DE BEAUTÉ QUE TU AURAIS DU CONNAÎTRE PLUS TÔT\r\n', '0.00', 'https://www.youtube.com/watch?v=lW4zJRItAYY', '2018-12-26'),
(15, 'Drôle ANIMAUX Eau FAILS qui vous fera MOURIR DE MOURIR - Vidéos épiques ANIMAUX FUNNY', '0.00', 'https://www.youtube.com/watch?v=ws4V4yorkYo', '2018-12-25'),
(16, 'Vidéos de chats à mourir de rire compilation 2013', '0.00', 'https://www.youtube.com/watch?v=cggl4WN77Mw', '2018-12-20'),
(17, '5 Easy Mouse/Rat Trap', '0.00', 'https://www.youtube.com/watch?v=EDqAcM9FQRs', '2018-12-18'),
(18, 'TUTO COUPE DU MONDE', '1.99', 'https://www.youtube.com/watch?v=LvEA2KHWQec', '2018-12-18');

INSERT INTO `theme` (`id`, `title`, `description`) VALUES
(1, 'Action', 'Animation tenant aux aventures représentées ou racontées.\r\n'),
(2, 'Aventure', 'L\'aventure ensemble d\'activités, d\'expériences qui comportent du risque et de l\'imprévu.'),
(3, 'Cuisine', 'Aliments préparés qu\'on sert aux repas.'),
(4, 'Beauté', 'Caractère de ce qui est moralement admirable.'),
(5, 'Animaux', 'Être vivant non végétal, ne possédant pas les caractéristiques de l\'espèce humaine.'),
(6, 'Tutos', 'Guide d\'apprentissage (texte, vidéo) pour se familiariser étape par étape avec une activité.');

INSERT INTO `type_subscription` (`id`, `price`, `duration`, `nbDaysTrial`, `title`) VALUES
(1, '0.9900', 1, 0, 'Abonnement à la journée'),
(2, '3.9900', 7, 0, 'Abonnement à la semaine'),
(3, '9.9900', 30, 7, 'Abonnement au mois');

INSERT INTO `commentary` (`id`, `content`, `id_video`, `id_user`) VALUES
(1, 'First !!!!', 3, 6),
(2, 'First !!', 3, 6);

INSERT INTO `purchase` (`id`, `date_purchase`, `id_video`, `id_user`) VALUES
(1, '2018-12-19', 4, 6),
(2, '2018-12-19', 11, 6);

INSERT INTO `subscription` (`id`, `date_sub`, `id_user`, `id_type_subscription`) VALUES
(1, '2018-12-19', 5, 1),
(2, '2018-12-20', 5, 1),
(3, '2018-12-20', 6, 3);

INSERT INTO `videotheme` (`id`, `id_video`, `id_theme`) VALUES
(0, 2, 1),
(0, 3, 2),
(0, 4, 2),
(0, 5, 2),
(0, 6, 2),
(0, 7, 2),
(0, 8, 2),
(0, 9, 2),
(0, 10, 2),
(0, 11, 3),
(0, 12, 3),
(0, 13, 3),
(0, 14, 4),
(0, 15, 5),
(0, 16, 5),
(0, 17, 6),
(0, 18, 6);