CREATE DATABASE autosiskola;

Create table Bejelentkezes
(
	felhasznalo bigINT NOT NULL PRIMARY KEY,
    email varchar(200) NOT NULL,
    jelszo varchar(100) NOT NULL UNIQUE 
);

Create table jarmuvek
(
	jarmuID bigINT NOT NULL PRIMARY KEY,
    marka varchar(100) NOT NULL,
    evjarat integer(4) NOT NULL,
    valtotipus varchar(100) NOT NULL,
    uzemanyag varchar(100) NOT NULL,
    kategoria varchar(100) NOT NULL
);

Create table befizetesek
(
	befizetesID bigINT NOT NULL PRIMARY KEY,
    oraID bigINT NOT NULL,
    vizsgaID bigINT NOT NULL,
    jarmu bigINT NOT NULL,
    osszeg integer(10) NOT NULL,
    datum date NOT NULL
);

Create table vizsga
(
	vizsgaID bigINT NOT NULL PRIMARY KEY,
    datum date NOT NULL,
    sikeresseg boolean NOT NULL,
    vizsgazo bigINT NOT NULL,
    oktato bigINT NOT NULL,
    vizsgaztato bigINT NOT NULL
    
);
Create table orak
(
	oraID bigINT NOT NULL PRIMARY KEY,
    datum date NOT NULL,
    idotartam_perc integer(4),
    oktato bigINT NOT NULL,
    diak bigINT NOT NULL
    
);

Create table varosok
(
	irszam integer(4) NOT NULL PRIMARY KEY,
    nev varchar(100) NOT NULL
    
);

Create table szerepek
(
	roleID bigINT NOT NULL PRIMARY KEY,
    szerepnev varchar(100) NOT NULL
    
);

Create table felhasznalo
(
	id bigINT NOT NULL,
    nev varchar(200) NOT NULL,
    taj integer(9) NOT NULL PRIMARY KEY,
    szemelyi varchar(8) NOT NULL,
    adoszam integer(10) NOT NULL ,
    szulido date NOT NULL,
    szulhely integer(4) NOT NULL,
    elsosegelyvizsga boolean NOT NULL,
    szemuveg boolean NOT NULL
    
);