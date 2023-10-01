create database rh;
use rh;

create table service(
    idservice int auto_increment,
    nomservice VARCHAR(30),
    horaire VARCHAR(10),
    nbrpers int,
    PRIMARY KEY (idservice)
);

INSERT INTO service VALUES('', 'service1', '8h/j', 300);
INSERT INTO service VALUES('', 'service2', '7h/j', 350);
INSERT INTO service VALUES('', 'service3', '6h/j', 200);

create table emploi(
    idemploi int auto_increment,
    nomemploi VARCHAR(20),
    PRIMARY KEY(idemploi)
);

create table diplome(
    iddiplome int auto_increment,
    diplome VARCHAR(20),
    PRIMARY KEY (iddiplome)
);

create table nationalite (
    idnationalite int auto_increment,
    nationalite VARCHAR(30),
    PRIMARY KEY (idnationalite)
);

create table situationmatrimoniale(
    idsituation int auto_increment,
    situation VARCHAR(20),
    PRIMARY KEY (idsituation)
);

create table experience(
    idexperience int auto_increment,
    min int,
    max int,
    PRIMARY KEY (idexperience)
);

create table genre (
    idgenre int auto_increment,
    genre VARCHAR(10),
    PRIMARY KEY (idgenre)
);

create table critere(
    idcritere int auto_increment,
    idservice int,
    idemploi int,
    iddiplome int,
    idnationalite int,
    idsituation int,
    age int,
    idexperience int,
    idgenre int,
    salaire float,
    PRIMARY KEY (idcritere),
    FOREIGN KEY (idservice) REFERENCES service(idservice),
    FOREIGN KEY (idemploi) REFERENCES emploi(idemploi),
    FOREIGN KEY (iddiplome) REFERENCES diplome(iddiplome),
    FOREIGN KEY (idnationalite) REFERENCES nationalite(idnationalite),
    FOREIGN KEY (idsituation) REFERENCES situationmatrimoniale(idsituation),
    FOREIGN KEY (idexperience) REFERENCES experience(idexperience),
    FOREIGN KEY (idgenre) REFERENCES genre(idgenre)
);

create table demandeservice(
    iddemandeservice int auto_increment,
    idservice int,
    nbrpersdemander int,
    idcritere int,
    PRIMARY KEY (iddemandeservice),
    FOREIGN KEY (idservice) REFERENCES service(idservice)
);

create table pays (
    idpays int auto_increment,
    pays VARCHAR(20),
    PRIMARY KEY (idpays)
);

create table ville (
    idville int auto_increment,
    ville VARCHAR(20),
    PRIMARY KEY (idville)
);

create table candidat(
    idcandidat int auto_increment,
    idservice int,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    dtn date,
    nationalite int,
    genre int,
    ville int,
    pays int,
    adresse VARCHAR(20),
    PRIMARY KEY (idcandidat),
    FOREIGN KEY (idservice) REFERENCES service(idservice)
);

create table question(
    idquestion int auto_increment,
    idservice int,
    question text,
    coeff int,
    annee YEAR,
    PRIMARY KEY (idquestion),
    FOREIGN KEY (idservice) REFERENCES service(idservice)
);

INSERT INTO question VALUES('',1, 'le sigle « CEO » signifie', 5, 2023);
INSERT INTO question VALUES('',1, 'la principale responsabilité d un service financier', 5, 2023);
INSERT INTO question VALUES('',1, 'analyse qui mesure la rentabilité d une entreprise', 4, 2024);
INSERT INTO question VALUES('',1, 'Quelle analyse se concentre sur les forces', 6, 2024);
INSERT INTO question VALUES('',2, 'terme désigne la partie d une entreprise', 6, 2023);
INSERT INTO question VALUES('',2, 'principale fonction du marketing', 4, 2023);
INSERT INTO question VALUES('',2, 'Quelle mesure évalue la capacité d une entreprise', 5, 2024);
INSERT INTO question VALUES('',2, 'Quelle analyse se concentre sur les faiblesses', 5, 2024);
INSERT INTO question VALUES('',3, 'Quelle stratégie consiste à vendre des produits', 7, 2023);
INSERT INTO question VALUES('',3, 'Que signifie B2B', 3, 2023);
INSERT INTO question VALUES('',3, 'Quelle analyse se concentre sur les opportunites', 6, 2024);
INSERT INTO question VALUES('',3, 'Quelle analyse se concentre sur les menaces', 4, 2024);

create table reponse (
    idreponse int auto_increment,
    idquestion int,
    reponse text,
    PRIMARY KEY (idreponse),
    FOREIGN KEY (idquestion) REFERENCES question(idquestion)
);

INSERT INTO reponse VALUES('', 1, 'Chef de lÉtat Opérationnel');
INSERT INTO reponse VALUES('', 1, 'Chef Exécutif des Opérations');
INSERT INTO reponse VALUES('', 2, 'Marketing et publicité');
INSERT INTO reponse VALUES('', 2, 'Gestion des finances et de la comptabilité');
INSERT INTO reponse VALUES('', 3, 'Analyse PESTEL');
INSERT INTO reponse VALUES('', 3, 'Analyse de la rentabilité');
INSERT INTO reponse VALUES('', 4, 'Actifs');
INSERT INTO reponse VALUES('', 4, 'Passifs');
INSERT INTO reponse VALUES('', 5, 'Analyse SWOT');
INSERT INTO reponse VALUES('', 5, 'Méthode de Delphi');
INSERT INTO reponse VALUES('', 6, 'Ratio de rotation des stocks');
INSERT INTO reponse VALUES('', 6, 'Ratio de rentabilité');
INSERT INTO reponse VALUES('', 7, 'Modèle de monétisation');
INSERT INTO reponse VALUES('', 7, 'Modèle de vente directe');
INSERT INTO reponse VALUES('', 8, 'Bilan');
INSERT INTO reponse VALUES('', 8, 'Budget');
INSERT INTO reponse VALUES('', 9, 'Méthode Agile');
INSERT INTO reponse VALUES('', 9, 'Méthode en cascade');
INSERT INTO reponse VALUES('', 10, 'Ressources humaines');
INSERT INTO reponse VALUES('', 10, 'Marketing');
INSERT INTO reponse VALUES('', 11, 'Financement par capitaux propres');
INSERT INTO reponse VALUES('', 11, 'Financement par emprunt');
INSERT INTO reponse VALUES('', 12, 'Planification stratégique');
INSERT INTO reponse VALUES('', 12, 'Évaluation stratégique');










-- 
-- INSERT INTO test VALUES('', 1, 'dsfqef', 2, 2023);
-- INSERT INTO test VALUES('', 1, 'oipod', 1, 2023);
-- INSERT INTO test VALUES('', 1, 'dfghjk', 3, 2021);
-- INSERT INTO test VALUES('', 1, 'omlkd', 4, 2021);