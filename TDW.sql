-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 13 mars 2021 à 07:41
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `excellence`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `ID_activite` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `titre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`ID_activite`, `description`, `titre`) VALUES
(1, '\r\nGitHub est un service web d\'hébergement et de gestion de développement de logiciels, utilisant le logiciel de gestion de versions Git.', 'Workshop Github'),
(2, 'Entrepreneur evenement pour les étudiants', 'Workshop Entrepreneir'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Drawing'),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Reading'),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Dancing'),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Cooking'),
(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID_article` int(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `concerne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID_article`, `titre`, `image`, `description`, `concerne`) VALUES
(9, 'Math', 'Articles/application.png', ' Les mathématiques (ou la mathématique) sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers', 5),
(10, 'Sport', 'Articles/application.png\r\n', ' Les mathématiques (ou la mathématique) sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers\r\n Les mathématiques (ou la mathématique) sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers', 4),
(11, 'Informatique', 'Articles/application.png', ' Les mathématiques (ou la mathématique) sont un ensemble de connaissances abstraites résultant de raisonnements logiques appliqués à des objets divers', 2),
(12, 'Science', 'Articles/application.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 6),
(13, 'Histoire', 'Articles/application.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 4),
(16, 'Politique', 'Articles/image1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 3),
(17, 'Aventure', 'Articles/image1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 3),
(18, 'Géographie', 'Articles/image3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500.', 1),
(19, 'Food', 'Articles/Application.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 6);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `ID_classe` int(100) NOT NULL,
  `ID_cycle` int(11) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `année` varchar(10) NOT NULL,
  `niveau` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`ID_classe`, `ID_cycle`, `classe`, `année`, `niveau`) VALUES
(1, 2, '2M1', '2020/2021', 2),
(2, 2, '2M3', '2020/2021', 2),
(3, 3, '3S1', '2020/2021', 4),
(4, 1, '1M2', '2020/2021', 1),
(5, 1, '1M1', '2020/2021', 1),
(6, 3, '3M3', '2020/2021', 3);

-- --------------------------------------------------------

--
-- Structure de la table `classe_ens`
--

CREATE TABLE `classe_ens` (
  `ID_classe` int(11) NOT NULL,
  `ID_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe_ens`
--

INSERT INTO `classe_ens` (`ID_classe`, `ID_ens`) VALUES
(1, 4),
(2, 4),
(3, 75),
(4, 75),
(3, 77),
(6, 75),
(5, 77),
(3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `ID_contact` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`ID_contact`, `email`, `adresse`, `tel`, `fax`) VALUES
(1, 'admin@excellence.dz', 'Alger', '0536870912', '0553322126');

-- --------------------------------------------------------

--
-- Structure de la table `cycles`
--

CREATE TABLE `cycles` (
  `ID_cycle` int(11) NOT NULL,
  `cycle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cycles`
--

INSERT INTO `cycles` (`ID_cycle`, `cycle`) VALUES
(1, 'primaire'),
(2, 'moyen'),
(3, 'secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `ID_eleve` int(100) NOT NULL,
  `ID_classe` int(100) NOT NULL,
  `ID_parent` int(100) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `ID_cycle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID_eleve`, `ID_classe`, `ID_parent`, `ID_user`, `ID_cycle`) VALUES
(1, 1, 5, 2, 0),
(2, 2, 1, 6, 0),
(3, 3, 5, 7, 0),
(14, 0, 1, 57, 0),
(16, 2, 5, 79, 3);

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `ID_seance` int(11) NOT NULL,
  `ID_module` int(11) NOT NULL,
  `ID_ens` int(11) NOT NULL,
  `ID_classe` int(11) NOT NULL,
  `jour` int(20) NOT NULL,
  `heure_debut` varchar(20) NOT NULL,
  `heure_fin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`ID_seance`, `ID_module`, `ID_ens`, `ID_classe`, `jour`, `heure_debut`, `heure_fin`) VALUES
(1, 3, 4, 1, 1, '08:30', '10:30'),
(2, 2, 75, 1, 1, '10:40', '12:30'),
(3, 1, 4, 1, 1, '21:43', '21:43'),
(4, 2, 75, 1, 1, '21:45', '21:46'),
(5, 2, 4, 1, 2, '21:45', '21:45'),
(6, 1, 4, 1, 3, '21:46', '21:45'),
(7, 1, 4, 1, 3, '22:21', '08:13'),
(8, 2, 75, 1, 4, '23:35', '23:37'),
(9, 3, 4, 1, 5, '23:36', '23:44'),
(10, 2, 77, 6, 1, '06:52', '06:53'),
(11, 2, 4, 6, 2, '06:55', '06:57'),
(12, 3, 75, 6, 4, '06:57', '11:04'),
(13, 2, 75, 6, 5, '09:57', '09:57'),
(14, 2, 4, 2, 2, '08:57', '09:58'),
(15, 4, 75, 3, 1, '08:59', '09:59'),
(16, 6, 4, 3, 1, '06:00', '09:00'),
(17, 5, 80, 5, 3, '08:01', '10:02'),
(18, 8, 77, 4, 2, '07:03', '07:04'),
(19, 4, 77, 5, 5, '09:03', '10:03');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

CREATE TABLE `enseignants` (
  `ID_ens` int(100) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `ID_cycle` int(11) NOT NULL,
  `heure_reception` date NOT NULL,
  `heure_travail` varchar(10) NOT NULL,
  `emploi_du_temps` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`ID_ens`, `ID_user`, `ID_cycle`, `heure_reception`, `heure_travail`, `emploi_du_temps`) VALUES
(1, 4, 1, '2021-02-25', '30h', '/emploi'),
(20, 75, 2, '2021-02-25', '20h', ''),
(22, 77, 3, '2021-02-25', '', ''),
(23, 80, 3, '2021-02-25', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

CREATE TABLE `enseigner` (
  `ID_ens` int(11) NOT NULL,
  `ID_module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`ID_ens`, `ID_module`) VALUES
(4, 1),
(4, 3),
(75, 1),
(75, 2),
(77, 3),
(80, 6);

-- --------------------------------------------------------

--
-- Structure de la table `imagediaporama`
--

CREATE TABLE `imagediaporama` (
  `ID_image` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `imagediaporama`
--

INSERT INTO `imagediaporama` (`ID_image`, `image`) VALUES
(3, '././Diaporama/image1.jpg'),
(4, '././Diaporama/image2.jpg'),
(5, '././Diaporama/image3.jpg'),
(6, '././Diaporama/La-société-Djiant.jpg'),
(7, '././Diaporama/IT Communities (Techsnooper).jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `ID_module` int(100) NOT NULL,
  `module` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`ID_module`, `module`) VALUES
(1, 'Analyse'),
(2, 'Web'),
(3, 'Outils'),
(4, 'Algebre'),
(5, 'Anad'),
(6, 'Chimie'),
(7, 'Arabe'),
(8, 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `ID_note` int(100) NOT NULL,
  `ID_module` int(100) NOT NULL,
  `ID_user` int(100) NOT NULL,
  `note` int(20) NOT NULL,
  `observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`ID_note`, `ID_module`, `ID_user`, `note`, `observation`) VALUES
(1, 1, 2, 19, 'Très bien, Cotinue !'),
(2, 2, 2, 17, 'Très bien, Cotinue !'),
(3, 3, 2, 20, 'Très bien, Cotinue !'),
(4, 5, 79, 14, 'Bon '),
(5, 6, 79, 16, 'Bon continue '),
(7, 4, 79, 20, 'Tres Bon ');

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE `parents` (
  `ID_parent` int(100) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `date_naissance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parents`
--

INSERT INTO `parents` (`ID_parent`, `ID_user`, `date_naissance`) VALUES
(1, 3, '25/08/1955');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `ID_eleve` int(11) NOT NULL,
  `ID_activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`ID_eleve`, `ID_activite`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 7),
(2, 8),
(2, 9),
(6, 1),
(6, 3),
(6, 7),
(6, 9);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `ID_parag` int(11) NOT NULL,
  `paragraphe` text NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`ID_parag`, `paragraphe`, `image`) VALUES
(14, '- page accueil avec menu ( disposition speciale ) menu diapo x) bullshit\r\n- menu : acceuil - presentation - primaire - moyen - secondaire -espace eleve - espace parent - contact', '././Presentation/image2.jpg'),
(16, '- page accueil avec menu ( disposition speciale ) menu diapo x) bullshit\r\n- menu : acceuil - presentation - primaire - moyen - secondaire -espace eleve - espace parent - contact', '././Presentation/image2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `restauration`
--

CREATE TABLE `restauration` (
  `ID_rest` int(11) NOT NULL,
  `jour` date NOT NULL,
  `menu` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `restauration`
--

INSERT INTO `restauration` (`ID_rest`, `jour`, `menu`, `description`) VALUES
(1, '2021-02-28', 'Curry Chicken', 'Chicken Chicken Curry 28 There are a hundred different ways to cook chicken curry, but Bengalis (from the eastern part of India)'),
(2, '2021-02-28', 'Pizza', 'Chicken Chicken Curry 28 There are a hundred different ways to cook chicken curry, but Bengalis (from the eastern part of India)'),
(3, '2021-02-28', 'Salade', 'Chicken Chicken Curry 28 There are a hundred different ways to cook chicken curry, but Bengalis (from the eastern part of India)'),
(4, '2021-02-28', 'Frittes Omlettes', 'Chicken Chicken Curry 28 There are a hundred different ways to cook chicken curry, but Bengalis (from the eastern part of India)');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_user` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `date_naissance` varchar(20) NOT NULL,
  `adresse` varchar(400) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) DEFAULT NULL,
  `tel3` varchar(10) DEFAULT NULL,
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_user`, `nom`, `prenom`, `user_name`, `email`, `mdp`, `date_naissance`, `adresse`, `tel1`, `tel2`, `tel3`, `type`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin@excellence.dz', '21232f297a57a5a743894a0e4a801fc3', '20/11/1980', 'Alger centre', '0213625214', NULL, NULL, 1),
(2, 'Selmane', 'Lamia', 'LAMIA', 'hl_selmane@esi.dz', '04fc6d58f3a7f1968dd8a89d1f44e511', '26/09/1999', 'alger', '0553322126', '0553322126', '0553322126', 3),
(4, 'Mokeddem', 'Hakim', 'Hakim', 'h_mokeddem@esi.dz', 'c96041081de85714712a79319cb2be5f', '03/03/1970', 'alger', '0553322126', '0553322126', '0553322126', 2),
(5, 'Selmane', 'Slimane', 'Slimane', 'etbsel02@yahoo.fr', 'ce66d4f7776858b6e1ea27704487da06', '06/07/1964', 'Chlef', '0553322126', '0553322126', '0553322126', 4),
(6, 'Zellat', 'Abdelkhalek', 'Abdelkhalek', 'ha_zellat@esi.dz', '14cfb0e52122cfcad82256aeb1d0a4fe', '25/06/2000', 'SBA', '0553322126', '0553322126', '0553322126', 3),
(7, 'Messaoudi', 'Huda', 'Ch9', 'hn_messaoudi@esi.dz', '0075a4e7a2e71083262da135ecdbdd14', '19/05/19999', 'Oum el bwaghi', '0553322126', '0553322126', '0553322126', 3),
(75, 'Dellys', 'Hachemi', 'Hachemi', 'h_dellys@esi.dz', '88169ec91a8ebc9d83f249d927b6d86e', '25/06/1977', 'alger', '0553322126', '0553322126', '0553322126', 2),
(77, 'Mostefai', 'Amine', 'Hachemi', 'm_mostefai@esi', '30d2310007b75bf0180f5ed831f20fdb', '25/06/1977', 'Alger', '0536870912', '536870912', '536870912', 2),
(79, 'Nekamiche', 'Noha', 'Noha', 'hn_nekamiche@esi', '2ce9cd90fcf79e14b05a42cd544599a3', '01/08/2000', 'alger', '0553322126', '0553322126', '0553322126', 3),
(80, 'Hamdad', 'Lylia', 'Lylia', 'l_hamdad@esi.dz', '3edebe652be9ddc0fa24027a12f129d7', '25/06/1977', 'Alger', '0536870912', '536870912', '0536870912', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`ID_activite`),
  ADD UNIQUE KEY `titre` (`titre`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_article`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID_classe`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID_contact`);

--
-- Index pour la table `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`ID_cycle`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`ID_eleve`),
  ADD KEY `ID_classe` (`ID_classe`,`ID_parent`),
  ADD KEY `ID_parent` (`ID_parent`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`ID_seance`);

--
-- Index pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD PRIMARY KEY (`ID_ens`),
  ADD UNIQUE KEY `ID_user` (`ID_user`);

--
-- Index pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD KEY `ID_ens` (`ID_ens`,`ID_module`),
  ADD KEY `ID_module` (`ID_module`);

--
-- Index pour la table `imagediaporama`
--
ALTER TABLE `imagediaporama`
  ADD PRIMARY KEY (`ID_image`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`ID_module`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID_note`),
  ADD KEY `ID_eleve` (`ID_user`,`ID_module`),
  ADD KEY `ID_module` (`ID_module`);

--
-- Index pour la table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ID_parent`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD KEY `ID_eleve` (`ID_eleve`,`ID_activite`),
  ADD KEY `ID_activite` (`ID_activite`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`ID_parag`);

--
-- Index pour la table `restauration`
--
ALTER TABLE `restauration`
  ADD PRIMARY KEY (`ID_rest`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `ID_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_article` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `ID_classe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cycles`
--
ALTER TABLE `cycles`
  MODIFY `ID_cycle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `ID_eleve` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `ID_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `enseignants`
--
ALTER TABLE `enseignants`
  MODIFY `ID_ens` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `imagediaporama`
--
ALTER TABLE `imagediaporama`
  MODIFY `ID_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `ID_module` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `ID_note` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `parents`
--
ALTER TABLE `parents`
  MODIFY `ID_parent` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `ID_parag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `restauration`
--
ALTER TABLE `restauration`
  MODIFY `ID_rest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
