-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 04 oct. 2019 à 14:41
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `corporate`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Full_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`User_ID`, `Username`, `Password`, `Full_Name`) VALUES
(3, 'jeff', '5f4dcc3b5aa765d61d8327deb882cf99', 'Happi Oliver');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(5000) NOT NULL,
  `postSlug` varchar(1000) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_articles`
--

INSERT INTO `tbl_articles` (`Information_ID`, `Title`, `postSlug`, `Photo`) VALUES
(1, 'JUNIOR ATEMENGUE, FC NEMAN GRODNO (Belarus) We are Proud of You', 'junior-atemengue-fc-neman-grodno-belarus-we-are-proud-of-you', 'upload/43236042565204455-399518793991881-3481231066839121920-n-960x960-800x800.jpg'),
(2, 'During this 2019 African cup of Nations, have a look on our Zimbabwe National Team brother, friend and player KUDA MAHACHI.', 'during-this-2019-african-cup-of-nations-have-a-look-on-our-zimbabwe-national-team-brother-friend-and-player-kuda-mahachi', 'upload/78992459365050828-396082737668820-6665930217103556608-n-1-470x318.jpg'),
(3, 'Our player Patrick Wessely played his first match of the season on the 6th day of the championship with his club Neman Grodno,', 'our-player-patrick-wessely-played-his-first-match-of-the-season-on-the-6th-day-of-the-championship-with-his-club-neman-grodno', 'upload/25400783059799305-372076496736111-5193858617672990720-n-960x600-800x500.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_horizon`
--

CREATE TABLE `tbl_horizon` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `postSlug` varchar(1000) NOT NULL,
  `Bref` varchar(5000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_horizon`
--

INSERT INTO `tbl_horizon` (`Information_ID`, `Title`, `postSlug`, `Bref`, `Content`, `Photo`, `Pdf`) VALUES
(2, 'Communication', 'communication', 'Sortie du N°0001 :Horizon 2035', 'Développement local durable: le Moungo peut-il compter sur sur son agriculture?', 'upload/prsentation2-1260x10500.jpg.png', 'upload/ExeHorizon2035.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `postSlug` varchar(1000) NOT NULL,
  `Bref` varchar(5000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  `Pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`Information_ID`, `Title`, `postSlug`, `Bref`, `Content`, `Photo`, `Pdf`) VALUES
(17, 'Communication', 'communication', 'Sortie du N°0002 :Horizon 2035', 'Dibombari, le futur Eldorado de la Région', 'upload/exe-horizon203520nc2b000220-2036pages20mail-417x572.png', 'upload/ExeHorizon2035.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `Information_ID` int(11) NOT NULL,
  `Photo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_slider`
--

INSERT INTO `tbl_slider` (`Information_ID`, `Photo`) VALUES
(1, 'upload/143953792260125724-376430086300752-2704427785442557952-n-640x422.jpg'),
(2, 'upload/139510687456483225-357987064811721-5336795189413412864-n-1-800x534.jpg'),
(3, 'upload/85353268756236250-355359408407820-6522229721005031424-n-960x5404.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`User_ID`);

--
-- Index pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`Information_ID`);

--
-- Index pour la table `tbl_horizon`
--
ALTER TABLE `tbl_horizon`
  ADD PRIMARY KEY (`Information_ID`);

--
-- Index pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`Information_ID`);

--
-- Index pour la table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`Information_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_horizon`
--
ALTER TABLE `tbl_horizon`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
