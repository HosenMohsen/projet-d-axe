-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 16 avr. 2023 à 21:50
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
  `image` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `message`, `date_heure_message`, `tag`, `image`) VALUES
(30, 'today it\'s match day', '2023-04-02 18:55:41', '', NULL),
(32, 'la  solo q challenge à commencer\r\n', '2023-04-02 19:03:36', '', NULL),
(42, 'match aujourd\'hui', '2023-04-11 16:33:33', '', NULL),
(46, 'On affronte les abeilles ce vendredi à 21h, je vous attend nombreux les boys', '2023-04-12 16:26:33', 'VCT', NULL),
(52, 'aujourd\'hui match day lets\' go trop hate\r\n', '2023-04-13 16:22:01', 'Karmine Corp', NULL),
(53, 'aujourd\'hui match day lets\' go trop hate\r\n', '2023-04-13 16:22:35', 'LEC', NULL),
(54, 'hate de renconter rekkles', '2023-04-13 16:24:04', 'League_of_legends', NULL),
(58, 'je fais un test\r\n', '2023-04-14 17:25:53', 'League_of_legends', 'bg.jpg'),
(66, 'vous pensez quoi de ce backgroud', '2023-04-15 19:26:18', 'League_of_legends', NULL),
(70, 'vous pensez quoi de ce backgroud', '2023-04-15 19:34:51', 'Karmine Corp', NULL),
(71, 'vous pensez quoi de ce backgroud', '2023-04-15 19:35:24', 'Karmine Corp', NULL),
(74, 'test numero 14500', '2023-04-15 19:38:20', 'VCT', NULL),
(76, 'yo c\'est moi ', '2023-04-16 19:54:02', 'VCT', NULL),
(77, 'yo c\'est moi ', '2023-04-16 19:56:55', 'VCT', NULL),
(80, 'yo c\'est moi ', '2023-04-16 20:33:06', 'VCT', NULL),
(82, 'yo c\'est moi ', '2023-04-16 21:21:48', 'VCT', NULL),
(83, 'yo c\'est moi ', '2023-04-16 21:25:01', 'VCT', NULL),
(84, ' allah est grand', '2023-04-16 21:28:22', 'VCT', NULL),
(85, ' allah est grand', '2023-04-16 21:40:06', 'VCT', ''),
(86, 'j\'essaie', '2023-04-16 21:41:03', 'LEC', ''),
(87, 'j\'essaie', '2023-04-16 21:42:18', 'LEC', 'Array[name]'),
(88, 'j\'essaie', '2023-04-16 21:43:59', 'LEC', 'dji.jpg'),
(89, 'j\'essaie', '2023-04-16 21:50:50', 'LEC', 'images/dji.jpg'),
(90, 'nouveau test  j\'espere ca marhce', '2023-04-16 21:51:19', 'LEC', 'images/fond.jpg'),
(91, 'nouveau test  j\'espere ca marhce', '2023-04-16 21:52:24', 'LEC', 'images/fond.jpg'),
(92, 'nouveau test  j\'espere ca marhce', '2023-04-16 21:55:45', 'LEC', 'images/fond.jpg'),
(93, 'logo dji j\'espre c\'est bon ', '2023-04-16 21:57:09', 'LEC', 'images/dji-logo.jpg'),
(100, 'logo dji j\'espre c\'est bon ', '2023-04-16 22:27:59', 'Europe', './images/dji3.jpg');

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
(7, 'momo', 'test', 'ex@gmail.com', 12, '$2y$10$Dimx6GWh1GWf.C8f.RyCdesp7cCpq4OgLOEvVZwvdl3uQkSzEFxDi', 'https://picsum.photos/200/200'),
(8, 'HOSEN', 'm0m0x', 'ex@gmail.com', 19, '$2y$10$C4h2kN5Y8wf0yl5n20YXdODESXJXa0MLuHASWPXj0NXE24eCwuuFu', 'https://picsum.photos/200/200'),
(9, 'Larson', 'Rekkles', 'rekkles123@glail', 24, '$2y$10$hIzOFje/pZJlUJ8cmJdW.uzM.M9g.KutyUM2oO.GSVxCeAYNc8Vyy', 'https://picsum.photos/200/200'),
(10, 'Mike', 'Saken', 'example@gmail.com', 20, '$2y$10$HVjgWExUDijbVB3TqGlGpeMSb4hju.CBRzIG5iYk5IzLN2RZa584a', 'https://picsum.photos/200/200'),
(11, 'tyro', 'adam', 'ty@gmail.com', 18, '$2y$10$gvgUERodMXcpeu/RQwamOeFs1J69mCWENFygzai3ALNBfr/na4u6q', 'https://picsum.photos/200/200'),
(12, '.', 'M0m0x', 'ex@gmail.com', 19, '$2y$10$3XevbXL38TrTYmwkRYGt8.eOtmdg/BzXOkduAa1LcJe6mp5dG6Wki', 'https://picsum.photos/200/200'),
(13, 'test', 'momox', 't@gmail.com', 19, '$2y$10$ncXkbN7RP8qzPEYuiyaRmeMg9DW3BV/SOGMM8U445kGA5jDTzM6B6', 'https://picsum.photos/200/200'),
(14, 'Saken', 'Paken954', 'exemple@gmail.com', 70, '$2y$10$cX.EmThE7kXgGIhuVW0Hv.6BmagDngVnAVqwA095qiE5brkWCsPBm', 'https://picsum.photos/200/200');

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
  MODIFY `id_tweet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
