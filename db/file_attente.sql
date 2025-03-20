-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 jan. 2025 à 13:29
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `file_attente`
--

-- --------------------------------------------------------

--
-- Structure de la table `infirmiere`
--

CREATE TABLE `infirmiere` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom_infirmiere` varchar(255) NOT NULL,
  `date_naissance_infirmiere` date NOT NULL,
  `email_infirmiere` varchar(255) NOT NULL,
  `telephone_infirmiere` varchar(10) NOT NULL,
  `role` char(1) NOT NULL DEFAULT '2',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infirmiere`
--

INSERT INTO `infirmiere` (`id`, `nom`, `prenom_infirmiere`, `date_naissance_infirmiere`, `email_infirmiere`, `telephone_infirmiere`, `role`, `password`) VALUES
(1, 'andrade', 'sky', '2025-01-23', 'andrade@gmail.com', '123456785', '2', 'andrade1234');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom_medecin` varchar(255) NOT NULL,
  `date_naissance_medecin` date NOT NULL,
  `email_medecin` varchar(255) NOT NULL,
  `telephone_medecin` varchar(10) NOT NULL,
  `role` char(1) NOT NULL DEFAULT '1',
  `id_service` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom_medecin`, `date_naissance_medecin`, `email_medecin`, `telephone_medecin`, `role`, `id_service`, `password`) VALUES
(3, 'darian', 'robert', '0000-00-00', 'robert@gmail.com', '123456789', '1', 1, ''),
(4, 'honore', 'le blanc', '0000-00-00', 'honore@gmail.com', '123456788', '1', 1, ''),
(5, 'farel', 'ant', '2025-01-21', 'farel@gmail.com', '123456786', '1', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(255) NOT NULL,
  `prenom_patient` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `date_naissance_patient` date NOT NULL,
  `email_patient` varchar(255) NOT NULL,
  `telephone_patient` varchar(10) NOT NULL,
  `role` char(1) NOT NULL DEFAULT '3',
  `id_infirmiere` int(11) DEFAULT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `nom_patient`, `prenom_patient`, `profession`, `date_naissance_patient`, `email_patient`, `telephone_patient`, `role`, `id_infirmiere`, `id_medecin`, `id_service`) VALUES
(2, 'dwedw', 'wdwdew', 'fr', '2025-01-07', 'honore@gmail.com', '123456789', '3', 1, 5, 1),
(4, 'fdfdfdwedw', 'ddfwdwdewd', 'frsdwsd', '2025-01-23', 'honore@gmail.com', '123456788', '3', 1, 4, 2),
(5, 'nathand', 'fotso', 'macon', '2025-01-16', 'nathand@gmail.com', '698567854', '3', 1, 5, 2),
(7, 'Bekem', 'Edna', 'macon', '2018-06-20', 'Edna@gmail.com', '698567855', '3', 1, 3, 1),
(8, 'srettertrgerjbgfiuerhg', 'ergfehrhfiueriu', 'erwtirehtuh43t', '2025-01-22', 'honorfts@gmail.com', '123456781', '3', 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nom_service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `nom_service`) VALUES
(1, 'Parasitologie'),
(2, 'Chirugie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infirmiere`
--
ALTER TABLE `infirmiere`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telephone_infirmiere` (`telephone_infirmiere`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telephone_medecin` (`telephone_medecin`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD UNIQUE KEY `telephone_patient` (`telephone_patient`),
  ADD KEY `id_infirmiere` (`id_infirmiere`),
  ADD KEY `id_medecin` (`id_medecin`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infirmiere`
--
ALTER TABLE `infirmiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`id_infirmiere`) REFERENCES `infirmiere` (`id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
