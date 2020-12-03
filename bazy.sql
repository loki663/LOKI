/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.6.17 : Database - ministere
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ministere` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ministere`;

/*Table structure for table `adresse_etab` */

DROP TABLE IF EXISTS `adresse_etab`;

CREATE TABLE `adresse_etab` (
  `AdressID` int(10) NOT NULL AUTO_INCREMENT,
  `Adresse_etab` varchar(25) DEFAULT NULL,
  `Province` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `District` varchar(15) DEFAULT NULL,
  `commune` varchar(15) DEFAULT NULL,
  `EtabID` int(10) DEFAULT NULL,
  PRIMARY KEY (`AdressID`),
  KEY `FK_adresse_etab` (`EtabID`),
  CONSTRAINT `FK_adresse_etab` FOREIGN KEY (`EtabID`) REFERENCES `etablissement` (`EtabID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `adresse_etab` */

insert  into `adresse_etab`(AdressID,Adresse_etab,Province,Region,District,commune,EtabID) values (3,'IVH 45 TER AB Ambodifilao','ANTANANARIVO','ANALAMANGA','AVARADRANO','COMMUNE URBAIN',6);

/*Table structure for table `efectif_emlpoyer` */

DROP TABLE IF EXISTS `efectif_emlpoyer`;

CREATE TABLE `efectif_emlpoyer` (
  `Id_personnel` int(9) NOT NULL AUTO_INCREMENT,
  `Nombre_Admin_Ecd` int(9) DEFAULT NULL,
  `Nombre_Admin_fonct` int(9) DEFAULT NULL,
  `Nombre_enseign_Vacat` int(9) DEFAULT NULL,
  `Nombre_enseign_fonct` int(9) DEFAULT NULL,
  `EtabID` int(8) DEFAULT NULL,
  PRIMARY KEY (`Id_personnel`),
  KEY `FK_efectif_emlpoyer` (`EtabID`),
  CONSTRAINT `FK_efectif_emlpoyer` FOREIGN KEY (`EtabID`) REFERENCES `etablissement` (`EtabID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `efectif_emlpoyer` */

insert  into `efectif_emlpoyer`(Id_personnel,Nombre_Admin_Ecd,Nombre_Admin_fonct,Nombre_enseign_Vacat,Nombre_enseign_fonct,EtabID) values (2,12,24,16,25,6);

/*Table structure for table `etab_fil_niv` */

DROP TABLE IF EXISTS `etab_fil_niv`;

CREATE TABLE `etab_fil_niv` (
  `EtabID` int(10) NOT NULL,
  `FiliereID` int(10) NOT NULL,
  `NiveauID` int(10) NOT NULL,
  PRIMARY KEY (`EtabID`,`FiliereID`,`NiveauID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `etab_fil_niv` */

/*Table structure for table `etablissement` */

DROP TABLE IF EXISTS `etablissement`;

CREATE TABLE `etablissement` (
  `EtabID` int(6) NOT NULL AUTO_INCREMENT,
  `Nom_etab` varchar(30) DEFAULT NULL,
  `Statut_etab` varchar(30) DEFAULT NULL,
  `Annee_crea` int(4) DEFAULT NULL,
  `Boite_postal` int(4) DEFAULT NULL,
  `Tel1` varchar(20) DEFAULT NULL,
  `Tel2` varchar(20) DEFAULT NULL,
  `E_mail` varchar(30) DEFAULT NULL,
  `Type_etab` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`EtabID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `etablissement` */

insert  into `etablissement`(EtabID,Nom_etab,Statut_etab,Annee_crea,Boite_postal,Tel1,Tel2,E_mail,Type_etab) values (6,'JJ RBEARIVELO','Public',1854,101,'034 02 250 00','032 00 000 00','jjr@yahoo.fr','LTP');

/*Table structure for table `filiere` */

DROP TABLE IF EXISTS `filiere`;

CREATE TABLE `filiere` (
  `FiliereID` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_filiere` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`FiliereID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `filiere` */

insert  into `filiere`(FiliereID,Nom_filiere) values (1,'Enseignement Gle'),(2,'Enseignement Techniq'),(3,'Gestion'),(4,'Informatique'),(5,'Genie Civil'),(6,'Agronomie'),(7,'Medecine'),(8,'Droit'),(9,'Architecture');

/*Table structure for table `membre` */

DROP TABLE IF EXISTS `membre`;

CREATE TABLE `membre` (
  `Id_membre` int(3) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(50) DEFAULT NULL,
  `Mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `membre` */

insert  into `membre`(Id_membre,Pseudo,Mdp) values (13,'ANDRY','7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),(14,'ANDRY','7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

/*Table structure for table `niveau` */

DROP TABLE IF EXISTS `niveau`;

CREATE TABLE `niveau` (
  `NiveauID` int(10) NOT NULL AUTO_INCREMENT,
  `Niveau` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`NiveauID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `niveau` */

insert  into `niveau`(NiveauID,Niveau) values (1,'PRIMAIRE'),(2,'SECONDAIRE I'),(3,'SECONDAIRE II'),(4,'BTS'),(5,'LICENCE'),(6,'MASTER I'),(7,'MASTER II');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
