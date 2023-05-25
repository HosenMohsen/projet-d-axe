-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 25 mai 2023 à 00:53
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `esport-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_heure_message` datetime NOT NULL,
  `tag` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_utilisateur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `message`, `date_heure_message`, `tag`, `image`, `id_utilisateur`) VALUES
(30, 'today it\'s match day', '2023-04-02 18:55:41', '', NULL, 0),
(32, 'la  solo q challenge à commencer\r\n', '2023-04-02 19:03:36', '', NULL, 0),
(84, ' allah est grand', '2023-04-16 21:28:22', 'VCT', NULL, 0),
(115, 'blabla', '2023-05-04 15:36:51', 'League_of_legends', './images/tv_vintage.jpg', 0),
(133, 'voilaaaaaaaaààà', '2023-05-23 18:17:04', 'LEC', './images/', 15),
(135, 'test', '2023-05-23 22:05:37', 'LEC', './images/twitch.png', 15),
(141, 'test', '2023-05-25 02:29:38', 'League_of_legends', './images/', 11);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse_mail` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'https://picsum.photos/200/200'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `pseudo`, `adresse_mail`, `age`, `mot_de_passe`, `photo`) VALUES
(8, 'HOSEN', 'm0m0x', 'ex@gmail.com', 19, '$2y$10$C4h2kN5Y8wf0yl5n20YXdODESXJXa0MLuHASWPXj0NXE24eCwuuFu', 'https://picsum.photos/200/200'),
(11, 'tyro', 'adam', 'ty@gmail.com', 18, '$2y$10$gvgUERodMXcpeu/RQwamOeFs1J69mCWENFygzai3ALNBfr/na4u6q', 'https://picsum.photos/200/200'),
(13, 'test', 'momox', 't@gmail.com', 19, '$2y$10$ncXkbN7RP8qzPEYuiyaRmeMg9DW3BV/SOGMM8U445kGA5jDTzM6B6', 'https://picsum.photos/200/200'),
(14, 'Saken', 'Paken954', 'exemple@gmail.com', 70, '$2y$10$cX.EmThE7kXgGIhuVW0Hv.6BmagDngVnAVqwA095qiE5brkWCsPBm', 'https://picsum.photos/200/200'),
(15, 'p', 'mohsen', 'gmail@gmail.com', 23, '$2y$10$mdbh0XAQqhoGwPnPIpREVe9xXjnhHM/aMG4xynxzhxGj.B7f9XxdS', 'https://picsum.photos/200/200');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
