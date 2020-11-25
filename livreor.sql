-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 nov. 2020 à 15:30
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'salut salut salut ', 3, '2020-11-25 09:09:07'),
(2, 'samir younou na marre\r\n', 3, '2020-11-25 09:13:54'),
(3, 'inchallah sa marche', 3, '2020-11-25 09:15:18'),
(4, 'ererrtr', 3, '2020-11-25 09:15:41'),
(5, 'lemok', 3, '2020-11-25 09:19:30'),
(6, 'merci pour tous ', 3, '2020-11-25 09:24:53'),
(7, 'rediille', 3, '2020-11-25 09:25:45'),
(8, 'eeeee', 3, '2020-11-25 09:26:07'),
(9, 'zegrgg', 3, '2020-11-25 09:27:01'),
(10, 'jfezhzuhgvsklslis', 3, '2020-11-25 09:28:29'),
(11, 'allez lemok', 3, '2020-11-25 14:38:55'),
(12, 'efzaefz', 3, '2020-11-25 14:44:49'),
(13, 'kgkvg kgukg gjg j', 3, '2020-11-25 14:46:58'),
(14, 'efzefef', 27, '2020-11-25 14:52:26'),
(15, 'zdjkezhfhou', 27, '2020-11-25 14:54:38'),
(16, 'cndeacfioe jsikefkefheif saission', 28, '2020-11-25 14:57:47'),
(17, 'so commment', 29, '2020-11-25 15:19:30'),
(18, 'gigi', 29, '2020-11-25 15:23:10');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(3, 'lemok_du_84', '$2y$10$AeLzU..jMb.KnzBXiIyl6e3yz6ciqNuk.iWJyh9Vv.4TCW0h/avom'),
(4, 'ruru', '$2y$10$HG0e886KjUIRxoRB1ReEE.0Ht6XyCg5XSndNcawFck2gHhW0n5o5u'),
(15, 'riro', '$2y$10$36Xc6miRc9IZgMcnVrnRre8Bm1TCWz5mE54STaZE7VRfGr4wAF32a'),
(16, 'kaka', '$2y$10$TSYJZeGdaWmuLzL7Amf.Suu1kgAHgtGr/Ebmmhluhae7qSTWDcQK.'),
(17, 'khra', '$2y$10$RcCP7phQngnssW8ujAJk2ugS1IO9Ycqj7sGqUwXerkVVUzbkcK69K'),
(18, 'loulou', '$2y$10$B78w0beAaWdkUjPp89F4RuTldKWe7WeirispOwA/W13r.PX2qAlIi'),
(19, 'rarou', '$2y$10$k33JNjk6X4qy2dNerPn/L.nfMxRT6DC7x/kv9m36BLdCGO3WZswq6'),
(20, 'kikou', '$2y$10$emyurPlX3lRbldpRpn.X6uQAsjVhqCcyfVGzwfuhmRhflBa8KhNoG'),
(22, 'ruben', '$2y$10$O4GTGvtJr0qJsrgiy4VKz.slQ3K/Czg9oYWzgYMyorIp8vEhgqJfu'),
(23, 'moula', '$2y$10$C.rsf3o.OA2m5ZTQ1mWu7OoX8UqHrjvQbjM6CP6lDEGwgT106cKtK'),
(24, 'riri', '$2y$10$djRkRgzpEifxJ507cCh7V./fmbLNxnM0DUCS5WqWzdr8y/tQZXyma'),
(26, 'morad', '$2y$10$stA6HAoLXduvbaVpcsEVtOUYg8LWHZmCLbGmAtoDv00UZSrlOOzmK'),
(27, 'bototo', '$2y$10$LwnMFw074QFvdMH7sAiKO.2Hj9nZN0L.ieSFUv7NAM9RhZdXeNxki'),
(28, 'gaga', '$2y$10$9V5mflOeDqjSgzu8ILHIHe4O0Zf8WEyLHihOgHhPY4J8XBIus1G1q'),
(29, 'coucou', '$2y$10$yk/FMBimv9M0JQmCu1Furuyu/O9U3XwMuRAW8mYpCE1SeeKTzdy/i');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
