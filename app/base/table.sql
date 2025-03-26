CREATE DATABASE TD3_SI_IHM;
USE TD3_SI_IHM;

CREATE OR REPLACE TABLE TD3_SI_IHM_Caisse (
    id int primary key auto_increment,
    nom varchar(10)
);

CREATE OR REPLACE TABLE TD3_SI_IHM_Produit(
    id int primary key auto_increment,
    nom varchar(100),
    prix decimal(10,2),
    stock number
);

CREATE OR REPLACE TABLE TD3_SI_IHM_Achat(
    id int primary key auto_increment,
    id_caisse int references TD3_SI_IHM_Caisse(id),
    id_produit int references TD3_SI_IHM_Produit(id),
    quantite number
);

CREATE OR REPLACE TABLE TD3_SI_IHM_User(
    id int primary key auto_increment,
    nom varchar(100),
    mdp varchar(10)
);