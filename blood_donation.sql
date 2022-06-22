-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 01:40
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blood_donation`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `ID_appointment` int(11) NOT NULL,
  `appoin_date` date DEFAULT NULL,
  `Donor_CIN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`ID_appointment`, `appoin_date`, `Donor_CIN`) VALUES
(2, '2022-06-21', 'AB124445'),
(3, '2022-06-21', 'JD124445'),
(4, '2022-06-21', 'MB123456'),
(5, '2022-06-21', 'JD124445'),
(6, '2022-06-21', 'JD124445'),
(7, '2022-06-21', 'KB123456'),
(8, '2022-06-22', 'WZ123456'),
(9, '2022-06-22', 'MB123456'),
(10, '2022-06-22', 'WZ123456'),
(11, '2022-06-22', 'WZ123456'),
(12, '2022-06-22', 'WZ123456'),
(13, '2022-06-28', 'KB123456');

-- --------------------------------------------------------

--
-- Structure de la table `blood_type`
--

CREATE TABLE `blood_type` (
  `ID_type` int(11) NOT NULL,
  `Type` varchar(10) DEFAULT NULL CHECK (`Type` in ('Unknown','A+','A-','B+','B-','O+','O-','AB+','AB-'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blood_type`
--

INSERT INTO `blood_type` (`ID_type`, `Type`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-'),
(9, 'Unknown');

-- --------------------------------------------------------

--
-- Structure de la table `donor`
--

CREATE TABLE `donor` (
  `CIN` varchar(10) NOT NULL,
  `First_name` varchar(30) DEFAULT NULL,
  `Last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL CHECK (`Gender` in ('Male','Female')),
  `Adress` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `ID_Type_Donor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donor`
--

INSERT INTO `donor` (`CIN`, `First_name`, `Last_name`, `email`, `password`, `Gender`, `Adress`, `Birthday`, `Phone`, `ID_Type_Donor`) VALUES
('AB124445', 'amine', 'salmi', 'amine@gmail.com', '1234567890', 'female', 'ADRESS 3', '2022-07-01', '0678765459', 4),
('JD124445', 'nada', 'bouyahya', 'nada@gmail.com', '12345678', 'female', 'my adress', '2022-06-09', '0678765456', 2),
('KB123456', 'khalil', 'bouyahya', 'khalil@gmail.com', '12345678', 'male', 'my adress', '2022-06-10', '0678765456', 2),
('MB123456', 'mariam', 'bouzine', 'mariam@gmail.com', '12345678901', 'female', 'ADRESS 4', '2022-06-23', '0678765450', 4),
('WZ123456', 'wafae', 'zouini', 'wafae@gmail.com', 'wafae123456', 'female', 'ADRESS 2', '2022-06-16', '0678765452', 8),
('ZR567787', 'zobair', 'soodi', 'zobair@gmail.com', '123456789', 'male', 'ADRESS 2', '2022-06-15', '0678765456', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID_appointment`),
  ADD KEY `Donor_CIN` (`Donor_CIN`);

--
-- Index pour la table `blood_type`
--
ALTER TABLE `blood_type`
  ADD PRIMARY KEY (`ID_type`);

--
-- Index pour la table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`CIN`),
  ADD KEY `ID_Type_Donor` (`ID_Type_Donor`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID_appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Donor_CIN`) REFERENCES `donor` (`CIN`);

--
-- Contraintes pour la table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`ID_Type_Donor`) REFERENCES `blood_type` (`ID_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
