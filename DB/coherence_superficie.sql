-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 mai 2024 à 16:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rga`
--

-- --------------------------------------------------------

--
-- Structure de la table `coherence_superficie`
--

CREATE TABLE `coherence_superficie` (
  `id_` int(11) NOT NULL,
  `id_quest` int(11) NOT NULL,
  `coherence_stat_jur` varchar(50) NOT NULL,
  `coherence_util_sol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coherence_superficie`
--

INSERT INTO `coherence_superficie` (`id_`, `id_quest`, `coherence_stat_jur`, `coherence_util_sol`) VALUES
(1, 11, 'text-warning', 'text-warning'),
(2, 8, 'text-success', 'text-warning'),
(3, 10, 'text-danger', 'text-success'),
(4, 9, 'text-danger', 'text-warning');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coherence_superficie`
--
ALTER TABLE `coherence_superficie`
  ADD PRIMARY KEY (`id_`),
  ADD KEY `id_quest` (`id_quest`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coherence_superficie`
--
ALTER TABLE `coherence_superficie`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
