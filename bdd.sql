-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 18 juin 2018 à 07:40
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `music`
--

-- --------------------------------------------------------

--
-- Structure de la table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `following_id`) VALUES
(1, 1, 20),
(2, 1, 21);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `body` varchar(300) NOT NULL,
  `stamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_name`, `body`, `stamp`) VALUES
(77, 21, 'maudrchl', 'eh les gars ! vous avez écouté le nouvel album de Damso ? ', '2018-06-17 23:50:25'),
(78, 25, 'Jean-Michel Music', 'Franchement bof...', '2018-06-17 23:50:59'),
(79, 69, 'Guest', 'Moi j\'aime bien les instrus, regardez ce reportage d\'ailleurs : https://www.youtube.com/watch?v=0oT-AHxHLOw', '2018-06-18 00:11:41');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `description`) VALUES
(1, 'rochel.maud@gmail.com', '$2y$10$xm9LL/k.HlilISfggosVL.JBmktVe/ctf980Zyk3QnV2OBvwb1IKu', 'maudrchl', 'french lover of electronic music'),
(20, 'tatidaniel@gmail.com', '$2y$10$eFI9BJxYd2Vv8J9rHt5ooeYUjSU7UpxaQhv.tis5p2n04s3v1UTbi', 'tatidaniel', ''),
(25, 'jeanmichel@music.net', '$2y$10$Ibla9o/uf2sLGiG5s5wZGu1Z1FPH15kume0lOtEOn2PVqve/C.NIS', 'Jean-Michel Music', 'Fan inconditionnel de Jacques Brel'),
(69, 'guest@gmail.com', '$2y$10$vIUXcd0t4h8tNH9u/TuzDuZCL0kTyTinI8OIRuPR56Gl15O0nQrzC', 'Guest', 'You\'re a guest, but an amazing guest. Pimp your profile in Settings !');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;