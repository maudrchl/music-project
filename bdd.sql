-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 15 mai 2018 à 16:02
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `music-project`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'rochel.maud@gmail.com', '$2y$10$BHvzhxqC2eomv4MwM60ENuyeT2A8coBVo79rVHqRmPd9274cs8Hxq', 'Maud'),
(2, 'rochel.maud@gmail.com', '$2y$10$vZGJsZ4OdyCWYu.2uXYNhuEjZbEMxwHmIE025AL0sC8Fw5iyl0nYe', 'Maud ROCHEL'),
(3, 'mathilde@fournier.com', '$2y$10$Ht3RZnw1yeVDpb0xmatiLe4zy2DYYhgYHP0mrLlVBT7n52XOfj5tK', 'Mathilde'),
(7, 'tara.guez@gmail.com', '$2y$10$2XBY515f9OzGR8GwIaeNRunz4N1YzW3l3jcdQgL7QsF72137M3l72', 'Tara'),
(8, 'tara.guez@gmail.com', '$2y$10$mwdm19C5GRDijSh6XV8ruO2A0r5NvZkqi4oIC3JpwKzuabphFeWe6', 'tara'),
(9, 'paul@lamy.com', '$2y$10$cFIa.57EMfyhvWz9tvTPzunuAbeiUp74PvFgdYzqvVaZ.Vx82Jvpi', 'paul');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
