
-- User
CREATE TABLE users
(
    idUser serial,
    Nom varchar(20),
    Mdp varchar(50),
    Email varchar(50),
    estAdmin int,
    Constraint id_User PRIMARY KEY(idUser)
);

-- Habitation
create table habitation
(
    idHabitation serial,
    Quartier varchar(50),
    Salon int,
    Chambre int,
    Douche int , 
    Toilette int,
    Balcon int,
    HousePic varchar(20),
    Constraint id_Habitation PRIMARY KEY(idHabitation)
);

-- Reservation
create table reservation
(
    idReservation serial,
    idHabitation int,
    idUser int,
    DateDebutReservation date,
    DateFinReservation date,
    FOREIGN KEY(idHabitation)REFERENCES habitation(idHabitation),
    FOREIGN KEY(idUser)REFERENCES users(idUser)
);


--------INSERTION USER---------------------
INSERT INTO USERS(Nom,Mdp,Email,estAdmin) 
VALUES('Toky','toky123456','tokyramanalina@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Judichael','judi123456','judichael@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Natana','natana123456','natana@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Rudy','rudy123456','rudy@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Lory','lory123456','lory@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Loic','loic123456','loic@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Chris','chris123456','chris@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Paul','paul123456','paul@gamil.com',1);

-------------INSERTION HABITAION--------------
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic) 
VALUES('Analakely',1,4,1,2,2,null);
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic) 
VALUES('Behoririka',2,5,1,1,1,null);
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic) 
VALUES('Itaosy',1,1,1,1,1,null);
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic) 
VALUES('Andraharo',1,3,1,1,1,null);
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic) 
VALUES('Adoharanofotsy',2,2,4,2,2,null);

INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic)
VALUES('Ankadidramama',1,2,1,2,2,null);
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic)
VALUES('Ankorondrano',1,5,2,2,2,null);
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic)
VALUES('Ankadifotsy',1,1,1,1,1,null);
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic)
VALUES('Anosizato',2,2,2,2,1,null);
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,HousePic)
VALUES('Ambohimiadana',1,1,2,2,1,null);

--------------------INSERT RESERVATION-------------
INSERT INTO RESERVATION(idHabitation,idUser,DateDebutReservation,DateFinReservation)
VALUES('1','3','12/06/2022','12/12/2022');
INSERT INTO RESERVATION (idHabitation,idUser,DateDebutReservation,DateFinReservation)
VALUES('2','5','12/12/2022','12/13/2022');
INSERT INTO RESERVATION (idHabitation,idUser,DateDebutReservation,DateFinReservation)
VALUES('5','4','12/25/2022','12/31/2022');
INSERT INTO RESERVATION (idHabitation,idUser,DateDebutReservation,DateFinReservation)
VALUES('9','6','11/25/2022','11/30/2022');
INSERT INTO RESERVATION (idHabitation,idUser,DateDebutReservation,DateFinReservation)
VALUES('7','7','10/01/2022','11/11/2022');
