-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 13:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `lastname`, `firstname`, `pwd`) VALUES
(2, 'jeanvaljean', 'val', 'jean', '$2y$10$oHR5X/zjpy94pAwgICAkCeo9GdftEGdaXjHZZWTVKdq2B1AJQo8a.'),
(3, 'Admin', 'admin', 'admin', '$2y$10$SrCpyvQK5vlXUzICd812EuCXJ/jpLRsGnZDIElJAcm9OU9N.CymAe'),
(4, 'olo', 'lolilo', 'lala', '$2y$10$t1l8b1YMCjNfqbMdSAP5qe1dQMq3Epij77megg9BOMhDleyuiFciy'),
(5, 'aaa', 'aaaaaa', 'aaaaaaa', '$2y$10$CTXmLvO9zT4TcBvTSFfygO47cddoLjgXWJOI9LC9PEpsynSZmw1jC'),
(6, 'aure', 'Ba', 'Aurelien', '$2y$10$kobrupehmGsHuPoAGiRBmOvHhKZV9Zfj/KFLsbddx894PhSS6hdeq'),
(7, 'test', 'test', 'test', '$2y$10$kLFyUo79gW/lG4iomSs.gerMXSPGfVC9uRuMomU1CwVOMrw.e.kNK'),
(8, 'testy', 'test', 'test', '$2y$10$tsQ9yqGg5sz/F7W5tzkWF.IQgsSHqLu39AssENPEf4.D36ODS9wVm'),
(9, 'testa', 'test', 'test', '$2y$10$eHly9ukKHFjnlZW3tWUGLOSo9.nwS1NAWR0SLVfGvuWytuIRGkOS.');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
