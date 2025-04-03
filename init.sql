CREATE DATABASE IF NOT EXISTS sae203Base;
USE sae203Base;

-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 02 avr. 2025 à 18:57
-- Version du serveur : 10.11.6-MariaDB-0+deb12u1
-- Version de PHP : 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae203Base`
--

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `proprio_id` tinyint(4) NOT NULL,
  `proprio_nom` varchar(25) NOT NULL,
  `proprio_prenom` varchar(25) NOT NULL,
  `proprio_nationalite` char(2) DEFAULT NULL,
  `proprio_age` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`proprio_id`, `proprio_nom`, `proprio_prenom`, `proprio_nationalite`, `proprio_age`) VALUES
(1, 'Simpson', 'Lisa', 'US', 8),
(2, 'Tom', 'Jerry', 'US', 5),
(3, 'Bonnet', 'Jean', 'FR', 40),
(4, 'Miyazaki', 'Hayao', 'JP', 82),
(5, 'Rowling', 'J.K.', 'GB', 58),
(6, 'Davis', 'Jim', 'US', 78),
(7, 'Disney', 'Walt', 'US', 65),
(8, 'Kubrick', 'Stanley', 'US', 70),
(9, 'Hergé', 'Georges', 'BE', 75),
(10, 'King', 'Stephen', 'US', 76),
(11, 'Takahashi', 'Rumiko', 'JP', 66),
(12, 'Toriyama', 'Akira', 'JP', 68),
(13, 'Kojima', 'Hideo', 'JP', 60),
(14, 'Lynch', 'David', 'US', 78),
(15, 'Burton', 'Tim', 'US', 65),
(16, 'Moebius', 'Jean', 'FR', 73),
(17, 'Goscinny', 'René', 'FR', 51),
(18, 'Uderzo', 'Albert', 'FR', 92),
(19, 'Henson', 'Jim', 'US', 53),
(20, 'Oda', 'Eiichiro', 'JP', 49),
(21, 'Tezuka', 'Osamu', 'JP', 60),
(22, 'Chauvel', 'David', 'FR', 55),
(23, 'Claremont', 'Chris', 'US', 74),
(24, 'Lee', 'Stan', 'US', 95),
(25, 'Anderson', 'Wes', 'US', 55),
(26, 'Spielberg', 'Steven', 'US', 77),
(27, 'Tarantino', 'Quentin', 'US', 61),
(28, 'Nolan', 'Christopher', 'GB', 54),
(29, 'Cameron', 'James', 'US', 70),
(30, 'Lucas', 'George', 'US', 80),
(31, 'Scott', 'Ridley', 'GB', 86),
(32, 'Jackson', 'Peter', 'NZ', 63),
(33, 'Carpenter', 'John', 'US', 76),
(34, 'Besson', 'Luc', 'FR', 65),
(35, 'Villeneuve', 'Denis', 'CA', 57),
(36, 'Verne', 'Jules', 'FR', 77),
(37, 'Doyle', 'Arthur', 'GB', 71),
(38, 'Christie', 'Agatha', 'GB', 85),
(39, 'Austen', 'Jane', 'GB', 41),
(40, 'Shakespeare', 'William', 'GB', 52),
(41, 'Hugo', 'Victor', 'FR', 83),
(42, 'Orwell', 'George', 'GB', 46),
(43, 'Bradbury', 'Ray', 'US', 91),
(44, 'Asimov', 'Isaac', 'US', 72),
(45, 'Clarke', 'Arthur', 'GB', 90),
(46, 'Herbert', 'Frank', 'US', 65),
(47, 'King', 'Carole', 'US', 82),
(48, 'Franklin', 'Aretha', 'US', 76),
(49, 'Houston', 'Whitney', 'US', 48),
(50, 'Mercury', 'Freddie', 'GB', 45),
(51, 'Cobain', 'Kurt', 'US', 27),
(52, 'Joplin', 'Janis', 'US', 27),
(53, 'Hendrix', 'Jimi', 'US', 27),
(54, 'Presley', 'Elvis', 'US', 42);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`proprio_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  MODIFY `proprio_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 02 avr. 2025 à 18:57
-- Version du serveur : 10.11.6-MariaDB-0+deb12u1
-- Version de PHP : 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae203Base`
--

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE `chats` (
  `chat_id` tinyint(4) NOT NULL,
  `chat_nom` varchar(25) NOT NULL,
  `chat_age` tinyint(2) NOT NULL,
  `chat_race` varchar(25) NOT NULL,
  `chat_genre` tinyint(1) NOT NULL,
  `chat_date` date DEFAULT NULL,
  `chat_poids` float NOT NULL,
  `chat_photo` varchar(30) NOT NULL,
  `_proprio_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chats`
--

INSERT INTO `chats` (`chat_id`, `chat_nom`, `chat_age`, `chat_race`, `chat_genre`, `chat_date`, `chat_poids`, `chat_photo`, `_proprio_id`) VALUES
(3, 'Tom', 12, 'American Shorthair', 1, '2012-02-10', 4.8, 'tom.jpg', 2),
(5, 'Cheshire', 100, 'British Shorthair', 1, NULL, 6, 'cheshire.jpg', 5),
(6, 'Azrael', 9, 'Persian', 1, '2015-05-22', 5.1, 'azrael.jpg', 17),
(7, 'Snowball II', 5, 'Domestic Shorthair', 2, '2020-10-10', 3.9, 'snowball.jpg', 1),
(8, 'Figaro', 4, 'Tuxedo', 1, '2021-06-15', 4.2, 'figaro.jpg', 7),
(9, 'Crookshanks', 6, 'Himalayan', 1, '2019-03-05', 4.9, 'crookshanks.jpg', 5),
(10, 'Salem', 13, 'American Shorthair', 1, '2011-09-30', 5.7, 'salem.jpg', 16),
(11, 'Heathcliff', 8, 'Tabby', 1, '2016-11-20', 5.5, 'heathcliff.jpg', 3),
(12, 'Meowth', 3, 'Unknown', 1, '2022-05-15', 4, 'meowth.jpg', 12),
(13, 'Top Cat', 7, 'Unknown', 1, '2017-02-18', 4.8, 'topcat.jpg', 13),
(14, 'Berlioz', 2, 'Maine Coon', 1, '2023-07-10', 3.6, 'berlioz.jpg', 14),
(15, 'Marie', 3, 'Maine Coon', 2, '2022-03-25', 3.4, 'marie.jpg', 15),
(16, 'Toulouse', 4, 'Maine Coon', 1, '2021-02-08', 3.9, 'toulouse.jpg', 18),
(17, 'Bagheera', 12, 'Panther', 1, '2012-11-12', 50, 'bagheera.jpg', 4),
(18, 'Lucifer', 10, 'British Shorthair', 1, '2014-09-30', 5.8, 'lucifer.jpg', 10),
(19, 'Si', 6, 'Siamese', 2, '2018-06-02', 4.1, 'si.jpg', 20),
(20, 'Am', 6, 'Siamese', 2, '2018-06-02', 4.1, 'am.jpg', 21),
(21, 'Oliver', 5, 'Tabby', 1, '2019-10-30', 4.5, 'oliver.jpg', 9),
(22, 'Mr. Mistoffelees', 7, 'Unknown', 1, '2017-08-20', 5.3, 'mistoffelees.jpg', 22),
(23, 'Macavity', 9, 'Unknown', 1, '2015-11-11', 5.7, 'macavity.jpg', 23),
(24, 'Puss in Boots', 8, 'Spanish Shorthair', 1, '2016-04-15', 4.9, 'puss.jpg', 24),
(25, 'The Cat in the Hat', 12, 'Unknown', 1, '2012-09-25', 5.2, 'cat_hat.jpg', 25),
(26, 'Bucky Katt', 11, 'Siamese-Tabby Mix', 1, '2013-05-04', 5, 'bucky.jpg', 26),
(27, 'Nermal', 4, 'Exotic Shorthair', 2, '2020-08-11', 3.2, 'nermal.jpg', 27),
(28, 'Gumball', 6, 'Blue Cat', 1, '2018-01-30', 4.4, 'gumball.jpg', 28),
(29, 'Azul', 5, 'Russian Blue', 1, '2019-06-21', 4.3, 'azul.jpg', 29),
(30, 'Jiji', 7, 'Black Cat', 1, '2017-10-10', 3.8, 'jiji.jpg', 30),
(31, 'Milo', 8, 'Orange Tabby', 1, '2016-07-07', 4.6, 'milo.jpg', 31),
(32, 'Socks', 9, 'Tuxedo', 1, '2015-12-25', 4.5, 'socks.jpg', 32),
(33, 'Bob', 7, 'Ginger Tabby', 1, '2018-06-23', 4.5, 'bob.jpg', 33),
(34, 'Felicia', 6, 'Unknown', 2, '2019-11-05', 3.9, 'felicia.jpg', 34),
(35, 'Duchess', 9, 'Persian', 2, '2015-04-10', 3.7, 'duchess.jpg', 35),
(36, 'Thomas O’Malley', 10, 'Tabby', 1, '2014-12-11', 5.2, 'omalley.jpg', 36),
(37, 'Mittens', 5, 'Tuxedo', 2, '2019-07-14', 4.2, 'mittens.jpg', 37),
(38, 'Cheetara', 7, 'Unknown', 2, '2017-02-28', 4.1, 'cheetara.jpg', 38),
(39, 'Bonkers', 8, 'Bobcat', 1, '2016-09-15', 6, 'bonkers.jpg', 39),
(40, 'Stimpy', 10, 'Manx', 1, '2014-08-21', 5.5, 'stimpy.jpg', 40),
(41, 'Felix II', 6, 'Tuxedo', 1, '2018-03-03', 4.7, 'felix2.jpg', 41),
(42, 'Punkin', 9, 'Tabby', 1, '2015-11-18', 4.6, 'punkin.jpg', 42),
(43, 'Scar', 12, 'Lion', 1, '2012-04-25', 180, 'scar.jpg', 43),
(44, 'Mufasa', 14, 'Lion', 1, '2010-09-10', 190, 'mufasa.jpg', 44),
(45, 'Tigger', 10, 'Tiger', 1, '2014-07-07', 220, 'tigger.jpg', 45),
(46, 'Shere Khan', 15, 'Bengal Tiger', 1, '2009-06-11', 250, 'sherekhan.jpg', 46),
(47, 'Rajah', 7, 'Tiger', 1, '2017-12-25', 210, 'rajah.jpg', 47),
(48, 'Clawhauser', 5, 'Cheetah', 1, '2019-05-22', 90, 'clawhauser.jpg', 48),
(49, 'Diego', 12, 'Smilodon', 1, '2012-03-17', 230, 'diego.jpg', 49),
(50, 'Gideon', 8, 'Unknown', 1, '2016-01-29', 4.8, 'gideon.jpg', 50),
(51, 'Kirara', 9, 'Unknown', 2, '2015-02-14', 5, 'kirara.jpg', 51),
(52, 'Nyan Cat', 5, 'Pixel Cat', 1, '2019-06-06', 0, 'nyancat.jpg', 52),
(53, 'Chairman Meow', 10, 'Unknown', 1, '2014-11-09', 5.1, 'chairman.jpg', 53),
(55, 'nfdosqfdq', 123, 'Tigré', 0, NULL, 12, '2025_04_02_14_39_43---tom.jpg', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `proprio_id` (`_proprio_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `proprio_id` FOREIGN KEY (`_proprio_id`) REFERENCES `proprietaires` (`proprio_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER IF NOT EXISTS 'sae203User'@'%' IDENTIFIED BY 'MonSuperMotDePasse1';
GRANT ALL PRIVILEGES ON sae203Base.* TO 'sae203User'@'%';
FLUSH PRIVILEGES;