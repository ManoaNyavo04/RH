create table service(
    idservice int auto_increment,
    nomservice VARCHAR(30),
    horaire VARCHAR(10),
    nbrpers int,
    PRIMARY KEY (idservice)
);

create table emploi(
    idemploi int auto_increment,
    nomemploi VARCHAR(20),
    PRIMARY KEY(idemploi)
);

    create table diplome(
        iddiplome int auto_increment,
        nomdiplome VARCHAR(20),
        PRIMARY KEY (iddiplome)
    );

    INSERT INTO diplome (nomdiplome) VALUES ('BEPC');
    INSERT INTO diplome (nomdiplome) VALUES ('BACC');
    INSERT INTO diplome (nomdiplome) VALUES ('LICENCE');
    INSERT INTO diplome (nomdiplome) VALUES ('MASTER');
    INSERT INTO diplome (nomdiplome) VALUES ('DOCTORAT');

create table situationmatrimoniale(
    idsituation int auto_increment,
    nomsituation VARCHAR(20),
    PRIMARY KEY (idsituation)
);

INSERT INTO situationmatrimoniale (nomsituation) VALUES ('Celibataire');
INSERT INTO situationmatrimoniale (nomsituation) VALUES ('Marie');
INSERT INTO situationmatrimoniale (nomsituation) VALUES ('Divorce');
INSERT INTO situationmatrimoniale (nomsituation) VALUES ('Separe');
INSERT INTO situationmatrimoniale (nomsituation) VALUES ('Veuf/Veuve');

create table experience(
    idexperience int auto_increment,
    min int,
    max int,
    PRIMARY KEY (idexperience)
);

INSERT INTO experience (min,max) VALUES (1,2);
INSERT INTO experience (min,max) VALUES (2,3);
INSERT INTO experience (min,max) VALUES (3,4);

create table genre (
    idgenre int auto_increment,
    nomgenre VARCHAR(10),
    PRIMARY KEY (idgenre)
);

INSERT INTO genre (nomgenre) VALUES ('Homme');
INSERT INTO genre (nomgenre) VALUES ('Femme');

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

drop table pays;
create table pays (
    idpays int auto_increment,
    nompays VARCHAR(20),
    nationalite  VARCHAR(20),
    PRIMARY KEY (idpays)
);

INSERT INTO pays (nompays, nationalite) VALUES ('Algerie', 'Algerien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Bresil', 'Bresilien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Canada', 'Canadien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Danemark', 'Danois(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Espagne', 'Espagnol(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('France', 'Français(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Grèce', 'Grec(que)');
INSERT INTO pays (nompays, nationalite) VALUES ('Hongrie', 'Hongrois(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Italie', 'Italien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Japon', 'Japonais(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Koweït', 'Koweïtien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Liban', 'Libanais(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Maroc', 'Marocain(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Norvège', 'Norvegien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Oman', 'Omanais(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Portugal', 'Portugais(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Qatar', 'Qatari(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Russie', 'Russe');
INSERT INTO pays (nompays, nationalite) VALUES ('Suède', 'Suedois(e)');
INSERT INTO pays (nompays, nationalite) VALUES ('Tunisie', 'Tunisien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Uruguay', 'Uruguayen(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Vietnam', 'Vietnamien(ne)');
INSERT INTO pays (nompays, nationalite) VALUES ('Yemen', 'Yemenite');



create table ville (
    idville int auto_increment,
    nomville VARCHAR(20),
    PRIMARY KEY (idville)
);

INSERT INTO ville (nomville) VALUES ('Afghanistan');
INSERT INTO ville (nomville) VALUES ('Belgique');
INSERT INTO ville (nomville) VALUES ('Canada');
INSERT INTO ville (nomville) VALUES ('Danemark');
INSERT INTO ville (nomville) VALUES ('Egypte');
INSERT INTO ville (nomville) VALUES ('France');
INSERT INTO ville (nomville) VALUES ('Grece');
INSERT INTO ville (nomville) VALUES ('Hongrie');
INSERT INTO ville (nomville) VALUES ('Inde');
INSERT INTO ville (nomville) VALUES ('Japon');
INSERT INTO ville (nomville) VALUES ('Kenya');
INSERT INTO ville (nomville) VALUES ('Liban');
INSERT INTO ville (nomville) VALUES ('Mexique');
INSERT INTO ville (nomville) VALUES ('Norvege');
INSERT INTO ville (nomville) VALUES ('Oman');
INSERT INTO ville (nomville) VALUES ('Pologne');
INSERT INTO ville (nomville) VALUES ('Qatar');
INSERT INTO ville (nomville) VALUES ('Roumanie');
INSERT INTO ville (nomville) VALUES ('Suisse');
INSERT INTO ville (nomville) VALUES ('Thaïlande');
INSERT INTO ville (nomville) VALUES ('Uruguay');
INSERT INTO ville (nomville) VALUES ('Vietnam');
INSERT INTO ville (nomville) VALUES ('Wales');
INSERT INTO ville (nomville) VALUES ('Xinjiang');
INSERT INTO ville (nomville) VALUES ('Yemen');
INSERT INTO ville (nomville) VALUES ('Zimbabwe');

drop table candidat;
create table candidat(
    idcandidat int auto_increment,
    idservice int,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    dtn date,
    email VARCHAR(100),
    telephone int,
    adresse VARCHAR(20),
    idpays int,
    idgenre int,
    idville int,
    iddiplome int,
    idexperience int,
    PRIMARY KEY (idcandidat),
    FOREIGN KEY (idservice) REFERENCES service(idservice),
    FOREIGN KEY (idpays) REFERENCES pays(idpays),
    FOREIGN KEY (idgenre) REFERENCES genre(idgenre),
    FOREIGN KEY (idville) REFERENCES ville(idville),
    FOREIGN KEY (iddiplome) REFERENCES diplome(iddiplome),
    FOREIGN KEY (idexperience) REFERENCES experience(idexperience)
);

drop table reponse;
drop table question;
create table question(
    idquestion int auto_increment,
    idservice int,
    question text,
    coeff int,
    annee int,
    PRIMARY KEY (idquestion),
    FOREIGN KEY (idservice) REFERENCES service(idservice)
);

INSERT INTO question (idservice, question, coeff, annee) VALUES
(1, 'Que signifie le sigle "CEO" ?', 2, 2023),
(1, 'Quelle est la principale responsabilite d un service financier ?', 2, 2023),
(1, 'Quelle analyse mesure la rentabilite dune entreprise ?', 2, 2024),
(1, 'Sur quoi se concentre l analyse des forces ?', 2, 2024),
(1, 'Comment gerez-vous les priorites lorsque vous avez plusieurs projets en cours ?', 2, 2023),
(2, 'Quel terme designe la partie d une entreprise ?', 2, 2023),
(2, 'Quelle est la principale fonction du marketing ?', 2, 2023),
(2, 'Quelle mesure evalue la capacite d une entreprise ?', 2, 2024),
(2, 'Sur quoi se concentre l''analyse des faiblesses ?', 2, 2024),
(2, 'Parlez-moi d''une situation où vous avez dû travailler en equipe pour atteindre un objectif commun.', 2, 2023),
(3, 'Quelle strategie consiste à vendre des produits ?', 2, 2023),
(3, 'Que signifie "B2B" ?', 2, 2023),
(3, 'Qu est-ce que le PIB signifie ?', 2, 2023),
(3, 'Quels sont les trois facteurs de production classiques ?', 2, 2023),
(3, 'Quelle est la devise premiere devise international ?', 2, 2023);


create table reponse (
    idreponse int auto_increment,
    idquestion int,
    reponse text,
    note int,
    PRIMARY KEY (idreponse),
    FOREIGN KEY (idquestion) REFERENCES question(idquestion)
);


INSERT INTO reponse (idquestion, reponse,note) VALUES
(1, 'Chief Executive Officer',2),
(1, 'Chief Financial Officer',0),
(1, 'Chief Exceptional Officer',0),
(2, 'Gerer les ressources humaines',0),
(2, 'Gerer les finances et les budgets',1),
(2, 'Gerer les ventes et le marketing',1),
(3, 'Analyse SWOT',0),
(3, 'Analyse du compte de resultat',1),
(3, 'Analyse de la chaîne de valeur',1),
(4, 'Les faiblesses internes de l''entreprise',0),
(4, 'Les opportunites externes de l''entreprise',1),
(4, 'Les ressources et les avantages internes de l''entreprise',1),
(5, 'Je mets tous les projets en pause jusqu''à ce que l''un d''eux soit termine',0),
(5, 'Je classe les projets par ordre d''importance et d''urgence, puis je les gère en consequence',0),
(5, 'Je travaille sur tous les projets en même temps pour gagner du temps',2),
(6, 'Division',2),
(6, 'Aire',0),
(6, 'Comptabilite',0),
(7, 'Mesure de la satisfaction des clients',0),
(7, 'Promotion et vente des produits',2),
(7, 'Gestion des ressources humaines',0),
(8, 'Mesure de la temperature de l''entreprise',0),
(8, 'Mesure du coût de production',0),
(8, 'Analyse SWOT',2),
(9, 'Les forces internes de l''entreprise',0),
(9, 'Les opportunites externes de l''entreprise',0),
(9, 'Les faiblesses internes de l''entreprise' ,2),
(10, 'Je prefère travailler seul et je n''ai pas d''experience de travail en equipe',0),
(10, 'J''ai recemment collabore avec une equipe pour livrer un projet dans les delais',2),
(10, 'Je n''ai jamais eu à travailler en equipe, car je suis plus efficace en solo',0),
(11, 'Strategie de diversification',0),
(11, 'Strategie de reduction des coûts',0),
(11, 'Strategie de liquidation',2),
(12, 'Business to Business',2),
(12, 'Back to Basics',0),
(12, 'Buy to Believe',0),
(13, 'Produit Interieur Brut',2),
(13, 'Prix Indexe des Biens',0),
(13, 'Plan d''Investissement Bancaire',0),
(14, 'Terre, Eau, Feu',0),
(14, 'Travail, Capital, Terre',2),
(14, 'Air, Lumière, Eau',0),
(15, 'Dollar americain',2),
(15, 'Euro',0),
(15, 'Yen japonais',0);

CREATE OR REPLACE VIEW v_serv_question AS(
    SELECT 
        service.idservice,
        question.idquestion,
        question.question
    FROM question
    join service 
    on service.idservice=question.idservice
);

CREATE OR REPLACE VIEW v_rep_question AS(
    SELECT 
        question.idquestion,
        reponse.idreponse,
        reponse.note,
        question.coeff
    FROM question
    join reponse 
    on reponse.idquestion=question.idquestion
);



