-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 nov. 2020 à 15:07
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trashproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `_idAdmin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `idPart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`_idAdmin`, `username`, `password`, `role`, `idPart`) VALUES
(1, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `_idCom` int(11) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `idTrash` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `dateComment` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `historic`
--

CREATE TABLE `historic` (
  `_idHisto` int(11) NOT NULL,
  `idTrash` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `dateFull` datetime DEFAULT current_timestamp(),
  `idUser` varchar(45) DEFAULT NULL,
  `dateEmpty` varchar(45) DEFAULT NULL,
  `dateHisto` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historic`
--

INSERT INTO `historic` (`_idHisto`, `idTrash`, `level`, `weight`, `dateFull`, `idUser`, `dateEmpty`, `dateHisto`) VALUES
(1, '12', '40', '55', '2020-11-19 09:11:40', '40', '2020-11-19 09:11:31', '2020-11-26 11:13:12');

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `_idPart` int(11) NOT NULL,
  `namePart` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`_idPart`, `namePart`, `area`, `address`, `phone`, `date_add`) VALUES
(1, 'bounce', 'bounce', 'bounce', 'bonce', '2020-11-26 10:54:27'),
(2, 'Nashville', 'bn', 'fdfd', 'klkl', '2020-11-26 12:35:49');

-- --------------------------------------------------------

--
-- Structure de la table `trash`
--

CREATE TABLE `trash` (
  `_idTrash` int(11) NOT NULL,
  `longi` varchar(45) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `codeTrash` varchar(45) DEFAULT NULL,
  `dateTrash` datetime DEFAULT current_timestamp(),
  `typeTrash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trash`
--

INSERT INTO `trash` (`_idTrash`, `longi`, `lat`, `address`, `codeTrash`, `dateTrash`, `typeTrash`) VALUES
(4, '78.963606', '20.595164', 'my address is ...', '781227', '2020-11-26 14:46:52', 'paper'),
(5, '78.963608', '20.595166', 'my address is ...', '781229', '2020-11-26 14:46:52', 'paper');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `_idUser` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `idPart` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`_idUser`, `firstname`, `lastname`, `code`, `phone`, `area`, `idPart`, `date_created`) VALUES
(1, 'fsdf', 'fdfs', '40', 'ffs', 'sdfs', NULL, '2020-11-25 00:00:00'),
(2, 'gdfgdfg', 'gdfg', '781227', 'lmlm', 'bn', '1', '2020-11-26 12:36:19');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_idAdmin`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`_idCom`);

--
-- Index pour la table `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`_idHisto`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`_idPart`);

--
-- Index pour la table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`_idTrash`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `_idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `historic`
--
ALTER TABLE `historic`
  MODIFY `_idHisto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `_idPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `trash`
--
ALTER TABLE `trash`
  MODIFY `_idTrash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `_idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
