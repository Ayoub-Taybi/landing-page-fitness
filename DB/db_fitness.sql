-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 21 fév. 2020 à 00:12
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
-- Base de données :  `db_fitness`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID` int(11) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Subject` text NOT NULL,
  `Date_order` date NOT NULL DEFAULT current_timestamp(),
  `Shipping` varchar(50) NOT NULL DEFAULT 'Not shipped'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID`, `Full_name`, `Email`, `Tel`, `Subject`, `Date_order`, `Shipping`) VALUES
(33, 'ousama', 'oussam@gmail.com', '212698700480', 'bghite wa7d l prduite', '2020-02-19', 'shipped');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `paragraph` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `delay_start` varchar(100) NOT NULL,
  `delay_rest` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visibility` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `email`, `password`) VALUES
(4, 'ayoub taybi', 'taybi.ayoub04@gmail.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077');

-- --------------------------------------------------------

--
-- Structure de la table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `ID` int(11) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `Visibility` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Index pour la table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
