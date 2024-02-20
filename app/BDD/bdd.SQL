drop database IF EXISTs php;

create database php;
use php;

CREATE TABLE `Article` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(100),
  `img` varchar(100),
  `prix` int,
  `Description` varchar(100),
  `categorie` int,
  `TAG` int
);

CREATE TABLE `categorie` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(25)
);

CREATE TABLE `TAG` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(25)
);

CREATE TABLE `Commande` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `date` Date,
  `Status` bool
);

CREATE TABLE `Client` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(25),
  `Prenom` varchar(25),
  `login` varchar(25),
  `password` varchar(25)
);

CREATE TABLE `Admin` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(25),
  `password` varchar(25)
);

CREATE TABLE `USER` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `ID_user` int
);

CREATE TABLE `Article_Commande_Client` (
  `ID` int PRIMARY KEY AUTO_INCREMENT,
  `Quantite` int,
  `Article` int,
  `Commande` int,
  `Client` int
);

CREATE TABLE `TAG_Article` (
  `TAG_ID` int,
  `Article_TAG` int,
  PRIMARY KEY (`TAG_ID`, `Article_TAG`)
);

ALTER TABLE `TAG_Article` ADD FOREIGN KEY (`TAG_ID`) REFERENCES `TAG` (`ID`);

ALTER TABLE `TAG_Article` ADD FOREIGN KEY (`Article_TAG`) REFERENCES `Article` (`TAG`);


ALTER TABLE `Article_Commande_Client` ADD FOREIGN KEY (`Client`) REFERENCES `Client` (`ID`);

ALTER TABLE `Article_Commande_Client` ADD FOREIGN KEY (`Commande`) REFERENCES `Commande` (`ID`);

ALTER TABLE `Article_Commande_Client` ADD FOREIGN KEY (`Article`) REFERENCES `Article` (`ID`);

ALTER TABLE `Client` ADD FOREIGN KEY (`ID`) REFERENCES `USER` (`ID_user`);

ALTER TABLE `Admin` ADD FOREIGN KEY (`ID`) REFERENCES `USER` (`ID_user`);

ALTER TABLE `Article` ADD FOREIGN KEY (`categorie`) REFERENCES `categorie` (`ID`);
