
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `lejardinduchocolat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lejardinduchocolat`;

CREATE TABLE IF NOT EXISTS `t_categorie` (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_NOM` varchar(100) NOT NULL,
  `CAT_DESC` varchar(1000) NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `t_chocolatier` (
  `CHT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CHT_NOM` varchar(100) NOT NULL,
  `CHT_ADRESSE` varchar(100) NOT NULL,
  `CHT_TEL` varchar(30) NOT NULL,
  `CHT_EMAIL` varchar(50) NOT NULL,
  PRIMARY KEY (`CHT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `t_chocolat` (
  `CHO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CHO_NOM` varchar(100) NOT NULL,
  `CHO_DATEAJOUT` date NOT NULL,
  `CHO_PRIX` float NOT NULL,
  `CHO_IMAGE` varchar(50) NOT NULL,
  `CAT_ID` int(11) NOT NULL,
  `CHT_ID` int(11) NOT NULL,
  PRIMARY KEY (`CHO_ID`),
  FOREIGN KEY (`CAT_ID`) REFERENCES t_categorie(`CAT_ID`),
  FOREIGN KEY (`CHT_ID`) REFERENCES t_chocolatier (`CHT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `t_client` (
  `CLI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_NOM` varchar(30) NOT NULL,
  `CLI_PRENOM` varchar(30) NOT NULL,
  `CLI_ADRESSE` varchar(100) NOT NULL,
  `CLI_CP` varchar(5) NOT NULL,
  `CLI_VILLE` varchar(100) NOT NULL,
  `CLI_COURRIEL` varchar(100) NOT NULL,
  `CLI_MDP` varchar(30) NOT NULL,
  PRIMARY KEY (`CLI_ID`),
  UNIQUE KEY `CLI_COURRIEL` (`CLI_COURRIEL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `lejardinduchocolat`.`t_categorie` (`CAT_ID`, `CAT_NOM`, `CAT_DESC`) VALUES (NULL, 'Ganache', 'La ganache est délicieux.'), (NULL, 'Praliné', 'La praline est née en 1930, etc...'), (NULL, 'Chocolat classique', 'Le chocolat classique, basique, il n''y a que ça de vrai.');

INSERT INTO `lejardinduchocolat`.`t_chocolatier` (`CHT_ID`, `CHT_NOM`, `CHT_ADRESSE`, `CHT_TEL`, `CHT_EMAIL`) VALUES (NULL, 'Richart', '258 boulevard Saint-Germain 75007 Paris 7ème', '01 45 55 66 00', 'contact@richart.fr'), (NULL, 'Sève chocolatier', '29 quai Saint Antoine 69002 Lyon 2ème arr', '04 78 37 67 81', 'contact@sevechocolatier.fr'), (NULL, 'Délices des sens', '12 boulevard des Brotteaux 69006 Lyon 6ème arr', '04 78 24 48 25', 'contact@delices.fr');

INSERT INTO `lejardinduchocolat`.`t_chocolat` (`CHO_ID`, `CHO_NOM`, `CHO_DATEAJOUT`, `CHO_PRIX`, `CHO_IMAGE`, `CAT_ID`, `CHT_ID`) VALUES (NULL, 'Le Temps d''un soir', '2014-02-12', '37.90', 'temps_soir', '1', '2'), (NULL, 'Le Temps d''un café', '2014-02-04', '37.90', 'temps_café', '1', '2'), (NULL, 'Grands Eclats 235g', '2014-02-08', '16.90', 'grands_eclats', '3', '3'), (NULL, 'Ronde de Mendiants 250g', '2014-02-16', '20.90', 'ronde_mendiants', '1', '2'), (NULL, 'Ronde de Tuiles et amandes 320g', '2014-02-10', '24.20', 'ronde_tuiles', '2', '1');

INSERT INTO `t_client` (`CLI_ID`, `CLI_NOM`, `CLI_PRENOM`, `CLI_ADRESSE`, `CLI_CP`, `CLI_VILLE`, `CLI_COURRIEL`, `CLI_MDP`) VALUES (1, 'Wonka', 'Willy', '164 La chocolaterie', '69100', 'Lyon', 'willy.wonka@choco.fr', '123465');
