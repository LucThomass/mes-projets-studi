
CREATE DATABASE RESAHOTEL;
 
USE RESAHOTEL

CREATE TABLE  Hotels(
	idHotel int NOT NULL PRIMARY KEY,
	Libelle varchar(50) NULL,
	Etoile varchar(5) NULL
);

CREATE TABLE  TypesChambre(
	idTypeChambre int NOT NULL PRIMARY KEY,
	NombreLit smallint NULL,
	TypeLit varchar(20) NULL,
	Description varchar(255) NULL
);

CREATE TABLE Chambres(
	idChambre int NOT NULL PRIMARY KEY,
	Hotel int NULL,
	TypeChambre int NULL,
	NumChambre varchar(6) NULL,
	Commentaire varchar(400) NULL
);

CREATE TABLE  Tarifs(
	idTarif int NOT NULL PRIMARY KEY,
	hotel int NULL,
	typeChambre int NULL,
	DateDebut date NULL,
	DateFin date NULL,
	Prix money NULL
);

ALTER TABLE  Chambres ADD CONSTRAINT FK_Chambres_Hotels FOREIGN KEY(Hotel)
REFERENCES  Hotels (IdHotel);

ALTER TABLE  Chambres ADD CONSTRAINT FK_Chambres_TypesChambre FOREIGN KEY(TypeChambre)
REFERENCES  TypesChambre (idTypeChambre);

ALTER TABLE  Tarifs ADD CONSTRAINT FK_Tarifs_Hotels FOREIGN KEY(hotel)
REFERENCES  Hotels (IdHotel);

ALTER TABLE  Tarifs ADD CONSTRAINT FK_Tarifs_TypesChambre FOREIGN KEY(typeChambre)
REFERENCES  TypesChambre (idTypeChambre);

CREATE TABLE  Hotels_FR(
	idHotel int NOT NULL PRIMARY KEY,
	Libelle varchar(50) NULL,
	Etoile varchar(5) NULL
);

CREATE TABLE  Hotels_GB(
	idHotel int NOT NULL PRIMARY KEY,
	Libelle varchar(50) NULL,
	Etoile varchar(5) NULL
);
