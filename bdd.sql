-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 11 juin 2018 à 15:32
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
  `body` varchar(140) NOT NULL,
  `stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `body`, `stamp`) VALUES
(1, 1, 'Message perso', '2018-06-11 09:21:00'),
(3, 21, 'c\'est le 21', '2018-06-07 00:00:00'),
(4, 20, 'C\'est le 20', '2018-06-05 00:00:00');

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
(1, 'rochel.maud@gmail.com', '$2y$10$BHvzhxqC2eomv4MwM60ENuyeT2A8coBVo79rVHqRmPd9274cs8Hxq', 'Maud', 'french music lover, pasionnated about electro music !'),
(20, 'tatidaniel@gmail.com', '$2y$10$eFI9BJxYd2Vv8J9rHt5ooeYUjSU7UpxaQhv.tis5p2n04s3v1UTbi', 'tatidaniel', ''),
(21, 'maud.rochel@hetic.net', '$2y$10$IPCL6EBouIw3dnQ/bVW7weUsBk9ReuXl3k5VsCbC6c6VQLVoZ9gYm', 'maudrchl', 'yo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;