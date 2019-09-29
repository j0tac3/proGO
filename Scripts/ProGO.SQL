/* Creacion de la base de datos */
CREATE DATABASE ProGO CHARACTER SET utf8 COLLATE utf8_spanish_ci;
/* Craecion del usuario Admin para la base de datos */
GRANT ALL ON ProGO.* TO 'Melona'@'localhost' IDENTIFIED BY 'melona23f';

/* CREACION DE TABLAS */
/* Tabla Pokemon */
CREATE TABLE ProGO.Pokemon (
    PokedexNumber INT(5) NOT NULL PRIMARY KEY,
    PokeName VARCHAR(50) NOT NULL,
    PokeDescription VARCHAR(255) NOT NULL,
    PokeType INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    PokeHeight VARCHAR(20) NOT NULL,
    PokeWeight VARCHAR(20) NOT NULL,
    PokeSex VARCHAR(20) NOT NULL,
    PokePreEvolution INT(5) REFERENCES Pokemon (PokedexNumber),
    PokeEvolution INT(5) REFERENCES Pokemon (PokedexNumber),
    Region INT(5) NOT NULL REFERENCES Region (RegionID),
    PokeImage VARCHAR(20),
    PokeActiveGO BINARY,
    PokeActiveShiny BINARY
);
/* Table Tipo */
CREATE TABLE ProGO.TipoPokemon(
    PokeTypeID INT(5) NOT NULL PRIMARY KEY,
    PokeType VARCHAR(20) NOT NULL
);
/* Table Region */
CREATE TABLE ProGO.Region(
    RegionID INT(5) NOT NULL PRIMARY KEY,
    RegionName VARCHAR(20) NOT NULL,
    Active BINARY
);
/* Table Ataque Rapido */
CREATE TABLE ProGO.AtaqueRapido(
    AttackID INT(5) NOT NULL PRIMARY KEY,
    AttackName VARCHAR(20) NOT NULL,
    AttackType INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    DanioPVP INT(5) NOT NULL,
    DanioNormal INT(5) NOT NULL,
    Speed INT(5) NOT NULL
);
/* Table Ataque Cargado */
CREATE TABLE ProGO.AtaqueCargado(
    AttackID INT(5) NOT NULL PRIMARY KEY,
    AttackName VARCHAR(20) NOT NULL,
    AttackType INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    DanioPVP INT(5) NOT NULL,
    DanioNormal INT(5) NOT NULL,
    LoadsPVP INT(5) NOT NULL,
    LoadsNormal INT(5) NOT NULL,
    Speed INT(5) NOT NULL
);
/* Table VentajaDesventaja */
CREATE TABLE ProGO.Ventaja(
    TypeAdvantage INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    TypeDisadvantage INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    DamageFor INT NOT NULL 
);
/* Table ResistenciaDebilidad */
CREATE TABLE ProGO.Resistencia(
    TypeResitent INT(5) NOT NULL REFERENCES TipoPokemon(PokeTypeID),
    TypeWeakness INT(5) NOT NULL REFERENCES TipoPokemon (PokeTypeID),
    DamageFor INT NOT NULL
);