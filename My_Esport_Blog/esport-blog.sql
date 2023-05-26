-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 21:03
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
(150, 'test', '2023-05-26 15:20:58', 'League_of_legends', './images/', 11),
(157, 'KELAWIN', '2023-05-26 15:51:38', 'League_of_legends', './images/1014478.jpg', 11),
(159, 'Alexis 2', '2023-05-26 16:08:57', 'League_of_legends', './images/', 11),
(161, 'Vitality a gagné le major ', '2023-05-26 16:52:49', 'League_of_legends', './images/vita.jpg', 11),
(165, 'Trop hâte de revoir la LFL reprendre', '2023-05-26 17:33:56', 'Karmine Corp', './images/', 15),
(166, 'VIVE LA KC ', '2023-05-26 17:53:28', 'League_of_legends', './images/Karmine-Corp-annonce-equipe-LoL-2023.jpg', 15),
(170, 'Je commence Valorant ! J\'espère passer diamant très vite', '2023-05-26 22:24:12', 'Valorant', './images/', 16),
(176, 'Bon courage pour la correction ', '2023-05-26 23:01:49', 'Europe', './images/', 16);

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
(15, 'p', 'mohsen', 'gmail@gmail.com', 23, '$2y$10$mdbh0XAQqhoGwPnPIpREVe9xXjnhHM/aMG4xynxzhxGj.B7f9XxdS', 'https://picsum.photos/200/200'),
(16, 'TEST', 'pierre', 'gmail@gmail.com', 22, '$2y$10$iNY.qxisE1Bxv1MBDOQ9aOU04L3Oqu5LmO12P7dkCSfLn7er85bcW', 'https://picsum.photos/200/200');

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
  MODIFY `id_tweet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
