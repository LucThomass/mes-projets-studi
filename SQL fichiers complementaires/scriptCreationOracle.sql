
CREATE DATABASE RESAHOTEL;
 
USE RESAHOTEL

CREATE TABLE  Hotels(
	idHotel number(38,0) NOT NULL PRIMARY KEY,
	Libelle varchar2(50) NULL,
	Etoile varchar2(5) NULL
);

CREATE TABLE  TypesChambre(
	idTypeChambre number(38,0) NOT NULL PRIMARY KEY,
	NombreLit number(38,0) NULL,
	TypeLit varchar2(20) NULL,
	Description varchar2(255) NULL
);

CREATE TABLE Chambres(
	idChambre number(38,0) NOT NULL PRIMARY KEY,
	Hotel number(38,0) NULL,
	TypeChambre number(38,0) NULL,
	NumChambre varchar2(6) NULL,
	Commentaire varchar2(400) NULL
);

CREATE TABLE  Tarifs(
	idTarif number(38,0) NOT NULL PRIMARY KEY,
	hotel number(38,0) NULL,
	typeChambre number(38,0) NULL,
	DateDebut date NULL,
	DateFin date NULL,
	Prix decimal(7,3) NULL
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
	idHotel number(38,0) NOT NULL PRIMARY KEY,
	Libelle varchar2(50) NULL,
	Etoile varchar2(5) NULL
);

CREATE TABLE  Hotels_GB(
	idHotel number(38,0) NOT NULL PRIMARY KEY,
	Libelle varchar2(50) NULL,
	Etoile varchar2(5) NULL
);




