-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 30 juil. 2023 à 12:44
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cart`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` double NOT NULL,
  `imageURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `imageURL`) VALUES
(3, ' table', 50, '    \r\nhttps://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80\"\r\n '),
(5, 'shoe', 100, '        https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80\r\n\"\r\n \"\r\n '),
(12, 'iphone', 1500, ' data:image/jpeg;base64,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');

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` int(200) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 0, 'belhakimmariem@gmail.com', 'f280222221365648412e785b92a558e9');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'mariem', 'Bel12456');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
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
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
