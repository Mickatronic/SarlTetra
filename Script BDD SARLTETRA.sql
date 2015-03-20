@@ -1,168 +0,0 @@
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mars 2015 à 14:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sarl tetra`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `MotDePasse` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`Id`, `Nom`, `Prenom`, `Login`, `MotDePasse`) VALUES
(1, 'Poisson', 'Jean', 'pjean', 'pjean1');

-- --------------------------------------------------------

--
-- Structure de la table `civilites`
--

CREATE TABLE IF NOT EXISTS `civilites` (
  `IdCivilite` int(11) NOT NULL AUTO_INCREMENT,
  `Abreviation` varchar(10) NOT NULL,
  `Libelle` varchar(200) NOT NULL,
  PRIMARY KEY (`IdCivilite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `civilites`
--

INSERT INTO `civilites` (`IdCivilite`, `Abreviation`, `Libelle`) VALUES
(1, 'Mr', 'Monsieur'),
(2, 'Mme', 'Madame');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `IdCivilite` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Age` int(3) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `CartePostale` int(5) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`Id`, `IdCivilite`, `Nom`, `Prenom`, `Age`, `Adresse`, `CartePostale`, `Ville`, `Mail`, `Telephone`) VALUES
(1, 2, 'Tchouani ', 'Laetitia', 45, '12,rue des archives', 25450, 'Damprichard', 'laetitiat@orange.fr', '0612358595'),
(2, 2, 'Kaleba', 'Bénédicte', 30, '121, rue vieille du temple', 83300, 'Draguignan', 'kbenedicte@sfr.fr', '0710125873'),
(3, 1, 'Bouzid ', 'Maxime\r\n', 28, '37, rue de turenne', 13121, 'Aurons', 'bmax@numericable.fr', '0654328780'),
(4, 2, 'Sall', 'Aïssata', 55, '1, boulevard bourdon', 59000, 'Lille', 'asall@hotmail.com', '0780145651'),
(5, 1, 'Vouzelaud', 'Julien', 29, '7, quai saint bernard', 45360, 'Chatillon sur Loire', 'vjulien@yahoo.fr', '0642378790'),
(6, 2, 'Domba', 'Felicité', 47, '3, rue saint jacques', 59250, 'Halluin', 'dfel@gmail.com', '0756969685'),
(7, 2, 'Lefèvre', 'Natacha', 23, '22, rue montmartre', 31000, 'Toulouse', 'lefnat@orange.fr', '0785201563'),
(8, 1, 'Honvault', 'Michael', 35, '26, rue de richelieu', 78130, 'Lille', 'mhonvault@yahoo.fr', '0603501806');

-- --------------------------------------------------------

--
-- Structure de la table `clientsdocuments`
--

CREATE TABLE IF NOT EXISTS `clientsdocuments` (
  `IdClientsDocument` int(11) NOT NULL AUTO_INCREMENT,
  `IdClient` int(11) NOT NULL,
  `IdDocument` int(11) NOT NULL,
  `Date` date NOT NULL,
  `IdAdministrateur` int(11) NOT NULL,
  PRIMARY KEY (`IdClientsDocument`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clientsdocuments`
--

INSERT INTO `clientsdocuments` (`IdClientsDocument`, `IdClient`, `IdDocument`, `Date`, `IdAdministrateur`) VALUES
(1, 7, 1, '2015-03-05', 1),
(2, 7, 2, '2015-03-05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Chemin` varchar(100) NOT NULL,
  `IdTypeDocuments` int(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`Id`, `Nom`, `Chemin`, `IdTypeDocuments`) VALUES
(1, '1-Armoire électrique', 'C:\\wamp\\www\\sarltetra\\documents\\Devis\\MonDevis.txt', 1),
(2, 'Armoire electrique', 'C:\\wamp\\www\\sarltetra\\documents\\Facture\\Facture-20124154.txt', 2);

-- --------------------------------------------------------

--
-- Structure de la table `typedocuments`
--

CREATE TABLE IF NOT EXISTS `typedocuments` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `typedocuments`
--

INSERT INTO `typedocuments` (`Id`, `Libelle`) VALUES
(1, 'Devis'),
(2, 'Facture'),
(3, 'Schéma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;