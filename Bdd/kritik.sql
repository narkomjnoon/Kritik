-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 23 nov. 2019 à 12:38
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kritik`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `ID_acteur` int(11) NOT NULL,
  `Nom_acteur` varchar(255) NOT NULL,
  `Prenom_acteur` varchar(255) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Lieu_naissance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`ID_acteur`, `Nom_acteur`, `Prenom_acteur`, `Date_naissance`, `Lieu_naissance`) VALUES
(1, 'Hanks', 'Tom', '1956-07-09', 'Californie'),
(2, 'Sinise', 'Gary', '1955-03-17', 'Illinois'),
(3, 'Wright', 'Robin', '1966-04-08', 'Texas'),
(4, 'Clarke Duncan', 'Michael', '1957-12-10', 'Illinois'),
(5, 'Bowditch Morse', 'Davide', '1953-10-11', 'Massachussets'),
(7, 'Mortensen', 'Viggo', '1958-10-20', 'New York'),
(8, 'Borg', 'Yoann', '0000-00-00', 'France'),
(9, 'Orsat', 'Alice', '0000-00-00', ''),
(10, 'Blanchard', 'Fanny', '0000-00-00', ''),
(12, 'Mahershalalhashbaz', 'Gilmore', '1974-02-16', 'Californie'),
(13, 'Cardellini', 'Linda', '1975-06-25', 'Californie'),
(14, 'Neeson', 'Liam', '1952-06-07', 'Ballymena'),
(15, 'Kingsley', 'Ben', '1943-12-31', 'Snaiton'),
(16, 'Fiennes', 'Ralph', '1962-12-22', 'Ipswich'),
(17, 'Santamaria', 'Andrea', '0000-00-00', 'France'),
(18, 'Abittan', 'Abry', '1974-01-31', 'Paris'),
(19, 'Demaison', 'François-Xavier', '1973-09-22', 'Asnières-sur-Seine'),
(20, 'Fonda', 'Henry', '1982-08-12', 'Amérique'),
(21, 'Balsam', 'Martin', '1919-11-04', 'Amérique'),
(22, 'Fiedler', 'John', '1925-02-03', 'Amérique'),
(23, 'Malek', 'Rami', '1981-05-12', 'Californie'),
(24, 'Lee', 'Gwilym', '1983-11-24', 'Londre'),
(25, 'Boynton', 'Lucy', '1994-01-17', 'Londre'),
(26, 'Brando', 'Marlon', '1924-04-03', 'Nebraska'),
(27, 'Pacino', 'Al', '1940-04-25', 'New York'),
(28, 'Caan', 'James', '1939-03-26', 'New York'),
(29, 'De Niro', 'Robert', '1943-08-17', 'New York'),
(30, 'Kilmer', 'Val', '1959-12-31', 'Californie'),
(31, 'Liotta', 'Ray', '1954-12-18', 'New Jersey'),
(32, 'Pesci', 'Joe', '1943-02-09', 'New Jersey');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `ID_commentaire` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Date` date NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

CREATE TABLE `concerner` (
  `ID_film` int(11) NOT NULL,
  `ID_commentaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `est_de`
--

CREATE TABLE `est_de` (
  `ID_genre` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `est_de`
--

INSERT INTO `est_de` (`ID_genre`, `ID_film`) VALUES
(1, 1),
(2, 1),
(2, 5),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 1),
(4, 2),
(4, 4),
(4, 8),
(5, 2),
(5, 11),
(5, 12),
(5, 13),
(7, 4),
(7, 8),
(9, 5),
(9, 10),
(9, 14),
(10, 7),
(11, 7),
(12, 13),
(13, 14);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `ID_film` int(11) NOT NULL,
  `titre_film` varchar(255) NOT NULL,
  `date_realisation` date NOT NULL,
  `lieu_realisation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`ID_film`, `titre_film`, `date_realisation`, `lieu_realisation`) VALUES
(1, 'Forrest Gump', '1994-10-05', 'Amérique'),
(2, 'La Ligne Verte', '2000-03-01', 'Amérique'),
(4, 'Your Name', '2016-12-28', 'Japon'),
(5, 'Green Book', '2019-01-23', 'Amérique'),
(7, 'La Liste De Schindler', '1994-03-02', 'Amérique'),
(8, 'Coco', '2017-11-29', 'Amérique'),
(9, '12 Homme En Colère', '1957-09-04', 'Amérique'),
(10, 'Bohemian Rhapsody', '2018-10-31', 'Amérique'),
(11, 'Le Parrain', '1972-03-15', 'Amérique'),
(12, 'Heat', '1996-02-21', 'Amérique'),
(13, 'Les Affranchis', '1990-09-12', 'Amérique'),
(14, 'The Irishman', '2019-11-27', 'Amérique');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `ID_genre` int(11) NOT NULL,
  `Nom_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID_genre`, `Nom_genre`) VALUES
(1, 'Romance'),
(2, 'Drame'),
(3, 'Comédie'),
(4, 'Fantastique'),
(5, 'Policier'),
(7, 'Animation'),
(9, 'Biopic'),
(10, 'Guerre'),
(11, 'Historique'),
(12, 'Judiciaire'),
(13, 'Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `jouer_dans`
--

CREATE TABLE `jouer_dans` (
  `ID_acteur` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jouer_dans`
--

INSERT INTO `jouer_dans` (`ID_acteur`, `ID_film`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(7, 5),
(8, 4),
(9, 4),
(10, 4),
(12, 5),
(13, 5),
(14, 7),
(15, 7),
(16, 7),
(17, 8),
(18, 8),
(19, 8),
(20, 9),
(21, 9),
(22, 9),
(23, 10),
(24, 10),
(25, 10),
(26, 11),
(27, 11),
(27, 12),
(27, 14),
(28, 11),
(29, 12),
(29, 13),
(29, 14),
(30, 12),
(31, 13),
(32, 13),
(32, 14);

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `id_utilisateur` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `ID_realisateur` int(11) NOT NULL,
  `Nom_realisateur` varchar(255) NOT NULL,
  `Prenom_realisateur` varchar(255) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Lieu_naissance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`ID_realisateur`, `Nom_realisateur`, `Prenom_realisateur`, `Date_naissance`, `Lieu_naissance`) VALUES
(1, 'Zemeckis', 'Robert', '1952-05-14', 'Illinois'),
(2, 'Darabont', 'Frank', '1959-01-28', 'Montbéliard'),
(8, 'Shinkai', 'Makoto', '0000-00-00', 'Japon'),
(9, 'Farrely', 'Peter', '1956-12-17', 'Pennsylvannie'),
(10, 'Spielberg', 'Steven', '1946-12-18', 'Ohio'),
(11, 'Unkrich', 'Lee', '1967-08-08', 'Ohio'),
(12, 'Molina', 'Adrian', '0000-00-00', 'Mexique'),
(13, 'Lumet', 'Sidney', '1924-06-25', 'Pennsylvanie'),
(14, 'Singer', 'Bryan', '1965-09-17', 'New York'),
(15, 'Cappola', 'Francis Ford', '1939-04-07', 'Michigan'),
(16, 'Mann', 'Michael', '1943-02-05', 'Illinois'),
(17, 'Scorsese', 'Martin', '1942-11-17', 'New York');

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

CREATE TABLE `realiser` (
  `ID_film` int(11) NOT NULL,
  `ID_realisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realiser`
--

INSERT INTO `realiser` (`ID_film`, `ID_realisateur`) VALUES
(1, 1),
(2, 2),
(4, 8),
(5, 9),
(7, 10),
(8, 11),
(8, 12),
(9, 13),
(10, 14),
(11, 15),
(12, 16),
(13, 17),
(14, 17);

-- --------------------------------------------------------

--
-- Structure de la table `recompense`
--

CREATE TABLE `recompense` (
  `ID_recompense` int(11) NOT NULL,
  `Nom_recompense` varchar(255) NOT NULL,
  `Lieu_recompense` varchar(255) NOT NULL,
  `Date_recompense` date NOT NULL,
  `ID_realisateur` int(11) DEFAULT NULL,
  `ID_acteur` int(11) DEFAULT NULL,
  `ID_film` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recompense`
--

INSERT INTO `recompense` (`ID_recompense`, `Nom_recompense`, `Lieu_recompense`, `Date_recompense`, `ID_realisateur`, `ID_acteur`, `ID_film`) VALUES
(3, 'Meilleur film dramatique', 'Los Angeles', '1995-01-01', NULL, NULL, 1),
(4, 'Meilleur acteur dans un drame', 'Los Angeles', '1995-01-01', NULL, 1, NULL),
(5, 'Meilleur réalisateur', 'Los Angeles', '1995-01-01', 1, NULL, NULL),
(6, 'Oscar du Meilleur film', 'Los Angeles', '1995-03-27', NULL, NULL, 1),
(7, 'Oscar du Meilleur réalisateur', 'Los Angeles', '1995-03-27', 1, NULL, NULL),
(8, 'Oscar du Meilleur acteur', 'Los Angeles', '1995-03-27', NULL, 1, NULL),
(9, 'Oscar du Meilleur film\r\n', 'Los Angeles', '2000-03-26', NULL, NULL, 2),
(11, ' Meilleur réalisateur pour le cinéma', 'Los Angeles', '2017-02-04', 8, NULL, NULL),
(12, 'Oscar du Meilleur film', 'Los Angeles', '2019-02-24', NULL, NULL, 5),
(13, 'Oscar du Meilleur acteur dans un second rôle', 'Los Angeles', '2019-02-24', NULL, 12, NULL),
(14, 'Oscar du meilleur film', 'Los Angeles', '1994-03-21', NULL, NULL, 7),
(15, 'Oscar du meilleur réalisateur', 'Los Angeles', '1994-03-21', 10, NULL, NULL),
(16, 'Meilleur acteur dans un second rôle', 'Londre', '1994-01-01', NULL, 16, NULL),
(17, 'Meilleur réalisateur', 'Londre', '1994-01-01', 10, NULL, NULL),
(18, 'Meilleur film', 'Londre', '1994-01-01', NULL, NULL, 7),
(19, 'Meilleur film d\'animation', 'Los Angeles', '2018-03-04', NULL, NULL, 8),
(20, 'Meilleur film d\'animation', 'Londre', '2018-02-18', NULL, NULL, 8),
(21, 'Meilleur film d\'animation', 'Los Angeles', '2018-02-03', NULL, NULL, 8),
(22, 'Meilleur film d\'animation', 'Los Angeles', '2018-01-20', NULL, NULL, 8),
(23, 'Meilleur film d\'animation', 'Los Angeles', '2018-01-07', NULL, NULL, 8),
(24, 'Meilleur réalisateur', 'Los Angeles', '2018-02-03', 12, NULL, NULL),
(25, 'Meilleur acteur étranger', 'Londres', '1958-01-01', NULL, 20, NULL),
(26, 'Meilleur film', 'Los Angeles', '1958-03-26', NULL, NULL, 9),
(27, 'Meilleur acteur', 'Los Angeles', '2019-02-24', NULL, 23, NULL),
(28, 'Meilleur acteur', 'Londres', '2019-02-10', NULL, 23, NULL),
(29, 'Meilleur acteur', 'Los Angeles', '2019-01-27', NULL, 23, NULL),
(30, 'Meilleur acteur', 'Los Angeles', '2019-01-07', NULL, 23, NULL),
(31, 'Meilleur film', 'Los Angeles', '2019-01-07', NULL, NULL, 10),
(32, 'Meilleur film', 'Los Angeles', '2019-01-19', NULL, NULL, 10),
(33, 'Meilleur film', 'Los Angeles', '1973-03-27', NULL, NULL, 11),
(34, 'Meilleur acteur', 'Los Angeles', '1973-03-27', NULL, 26, NULL),
(35, 'Meilleur acteur dans un second rôle', 'Los Angeles', '1991-03-25', NULL, 32, NULL),
(36, 'Meilleur film', 'Los Angeles', '1991-03-25', NULL, NULL, 13),
(37, 'Meilleur film', 'Londre', '1991-01-01', NULL, NULL, 13),
(38, 'Meilleur acteur dans un second rôle', 'Londre', '1991-01-01', NULL, 32, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Mot_de_passe` varchar(20) NOT NULL,
  `Mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`ID_acteur`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`ID_commentaire`),
  ADD KEY `Commentaires_Utilisateur_FK` (`id_utilisateur`);

--
-- Index pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD PRIMARY KEY (`ID_film`,`ID_commentaire`),
  ADD KEY `Concerner_Commentaires0_FK` (`ID_commentaire`);

--
-- Index pour la table `est_de`
--
ALTER TABLE `est_de`
  ADD PRIMARY KEY (`ID_genre`,`ID_film`),
  ADD KEY `Est_de_Film0_FK` (`ID_film`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_film`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_genre`);

--
-- Index pour la table `jouer_dans`
--
ALTER TABLE `jouer_dans`
  ADD PRIMARY KEY (`ID_acteur`,`ID_film`),
  ADD KEY `Jouer_dans_Film0_FK` (`ID_film`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD PRIMARY KEY (`id_utilisateur`,`ID_film`),
  ADD KEY `Noter_Film0_FK` (`ID_film`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`ID_realisateur`);

--
-- Index pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD PRIMARY KEY (`ID_film`,`ID_realisateur`),
  ADD KEY `Realiser_Realisateur0_FK` (`ID_realisateur`);

--
-- Index pour la table `recompense`
--
ALTER TABLE `recompense`
  ADD PRIMARY KEY (`ID_recompense`),
  ADD KEY `Recompense_Realisateur_FK` (`ID_realisateur`),
  ADD KEY `Recompense_Acteurs0_FK` (`ID_acteur`),
  ADD KEY `Recompense_Film1_FK` (`ID_film`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `ID_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `ID_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `ID_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `ID_realisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `recompense`
--
ALTER TABLE `recompense`
  MODIFY `ID_recompense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `Commentaires_Utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `Concerner_Commentaires0_FK` FOREIGN KEY (`ID_commentaire`) REFERENCES `commentaires` (`ID_commentaire`),
  ADD CONSTRAINT `Concerner_Film_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`);

--
-- Contraintes pour la table `est_de`
--
ALTER TABLE `est_de`
  ADD CONSTRAINT `Est_de_Film0_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`),
  ADD CONSTRAINT `Est_de_Genre_FK` FOREIGN KEY (`ID_genre`) REFERENCES `genre` (`ID_genre`);

--
-- Contraintes pour la table `jouer_dans`
--
ALTER TABLE `jouer_dans`
  ADD CONSTRAINT `Jouer_dans_Acteurs_FK` FOREIGN KEY (`ID_acteur`) REFERENCES `acteurs` (`ID_acteur`),
  ADD CONSTRAINT `Jouer_dans_Film0_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`);

--
-- Contraintes pour la table `noter`
--
ALTER TABLE `noter`
  ADD CONSTRAINT `Noter_Film0_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`),
  ADD CONSTRAINT `Noter_Utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `Realiser_Film_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`),
  ADD CONSTRAINT `Realiser_Realisateur0_FK` FOREIGN KEY (`ID_realisateur`) REFERENCES `realisateur` (`ID_realisateur`);

--
-- Contraintes pour la table `recompense`
--
ALTER TABLE `recompense`
  ADD CONSTRAINT `Recompense_Acteurs0_FK` FOREIGN KEY (`ID_acteur`) REFERENCES `acteurs` (`ID_acteur`),
  ADD CONSTRAINT `Recompense_Film1_FK` FOREIGN KEY (`ID_film`) REFERENCES `film` (`ID_film`),
  ADD CONSTRAINT `Recompense_Realisateur_FK` FOREIGN KEY (`ID_realisateur`) REFERENCES `realisateur` (`ID_realisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
