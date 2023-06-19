-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 mai 2023 à 20:18
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parc_du_jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id_billet` int(11) NOT NULL,
  `date_visite` date NOT NULL,
  `quantité_adulte` int(11) NOT NULL,
  `id_tarif_fk` int(11) DEFAULT NULL,
  `id_reserv_fk` int(11) DEFAULT NULL,
  `quantité_enfant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id_billet`, `date_visite`, `quantité_adulte`, `id_tarif_fk`, `id_reserv_fk`, `quantité_enfant`) VALUES
(1, '2023-05-19', 2, 1, 1, 3),
(2, '2023-05-20', 1, 1, 2, 0),
(3, '2023-05-25', 2, 2, 3, 1),
(4, '2023-05-23', 3, 3, 4, 2),
(5, '2023-05-26', 2, 2, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id_emp` int(11) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `prenom_emp` varchar(30) NOT NULL,
  `poste_emp` varchar(30) NOT NULL,
  `salaire_emp` int(11) NOT NULL,
  `tel_emp` varchar(20) NOT NULL,
  `date_emb` date NOT NULL,
  `email_emp` varchar(50) NOT NULL,
  `mdp_emp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_emp`, `nom_emp`, `prenom_emp`, `poste_emp`, `salaire_emp`, `tel_emp`, `date_emb`, `email_emp`, `mdp_emp`) VALUES
(1, 'Ziani', 'Ahmad', 'responsable', 5000, '0711111111', '2016-03-14', 'ziani.ahmad@gmail.com', 'Ziani_ahmad_14');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reserv` int(11) NOT NULL,
  `date_reserv` datetime NOT NULL,
  `id_visit_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reserv`, `date_reserv`, `id_visit_fk`) VALUES
(1, '2023-05-18 23:37:47', 2),
(2, '2023-05-18 23:38:46', 2),
(3, '2023-05-18 23:52:42', 2),
(4, '2023-05-18 23:53:49', 1),
(5, '2023-05-19 15:47:12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `descr` varchar(40) NOT NULL,
  `adulte` varchar(20) NOT NULL,
  `enfant` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `descr`, `adulte`, `enfant`) VALUES
(1, 'Billet semaine', '60', '30'),
(2, 'Billet weekend', '90', '60'),
(3, 'billet premium', '100', '80');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visit` int(11) NOT NULL,
  `nom_visit` varchar(30) NOT NULL,
  `prenom_visit` varchar(30) NOT NULL,
  `adresse_visit` text NOT NULL,
  `tel_visit` varchar(30) NOT NULL,
  `datenais_visit` date NOT NULL,
  `email_visit` varchar(100) NOT NULL,
  `mdp_visit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visit`, `nom_visit`, `prenom_visit`, `adresse_visit`, `tel_visit`, `datenais_visit`, `email_visit`, `mdp_visit`) VALUES
(1, 'Dahir', 'Imane', 'Casablanca', '0711111111', '2001-01-08', 'Imane.dahir@gmail.com', 'Imane.2001'),
(2, 'kisi', 'Ali', 'Rabat', '0677777777', '1996-11-04', 'kisi.ali@gmail.com', 'kisi4331'),
(3, 'Sofi', 'Rachida', 'Tanger', '0699999999', '1997-09-02', 'Rachida_Sofi@gmail.com', 'Rachida.Sofi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id_billet`),
  ADD KEY `fk_id_tarif` (`id_tarif_fk`),
  ADD KEY `fk_id_reserv` (`id_reserv_fk`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_emp`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reserv`),
  ADD KEY `id_visit` (`id_visit_fk`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `fk_id_reserv` FOREIGN KEY (`id_reserv_fk`) REFERENCES `reservation` (`id_reserv`),
  ADD CONSTRAINT `fk_id_tarif` FOREIGN KEY (`id_tarif_fk`) REFERENCES `tarif` (`id_tarif`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_id_visit` FOREIGN KEY (`id_visit_fk`) REFERENCES `visiteur` (`id_visit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
