
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
    loyer int,
    host varchar(20),
    HousePic varchar(20),
    Constraint id_Habitation PRIMARY KEY(idHabitation)
);

-- Reservation
create table reservation
(
    idReservation serial,
    idHabitation int,
    idUser int,
    nbLocataire int,
    DateDebutReservation date,
    DateFinReservation date,
    FOREIGN KEY(idHabitation)REFERENCES habitation(idHabitation),
    FOREIGN KEY(idUser)REFERENCES users(idUser)
);

--image:idhab,photoDressin1,photoDressing2

CREATE TABLE images
(
    idHabitation int,
    photoDressin1 varchar(30),
    photoDressin2 varchar(30),
     FOREIGN KEY(idHabitation)REFERENCES habitation(idHabitation)
);

--------INSERTION USER---------------------
INSERT INTO USERS(Nom,Mdp,Email,estAdmin) 
VALUES('Toky','toky123456','tokyramanalina@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Judichael','judi123456','judichael@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Natana','natana123456','natana@gamil.com',1);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Rudy','rudy123456','rudy@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Lory','lory123456','lory@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Loic','loic123456','loic@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Chris','chris123456','chris@gamil.com',0);

INSERT INTO USERS(Nom,Mdp,Email,estAdmin)
VALUES('Paul','paul123456','paul@gamil.com',0);

-------------INSERTION HABITAION--------------
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic) 
VALUES('Analakely',1,4,1,2,2, 700, 'Michel', '1.jpg');
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic) 
VALUES('Behoririka',2,5,1,1,1, 584, 'Kareen', '2.jpg');
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic) 
VALUES('Itaosy',1,1,1,1,1, 900, 'Jean', '3.jpg');
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic) 
VALUES('Andraharo',1,3,1,1,1, 806, 'Richard', '4.jpg');
INSERT INTO HABITATION(Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic) 
VALUES('Adoharanofotsy',2,2,4,2,2, 659, 'Loic', '5.jpg');

INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic)
VALUES('Ankadidramama',1,2,1,2,2, 690, 'Paul', '6.jpg');
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic)
VALUES('Ankorondrano',1,5,2,2,2, 870, 'Anna', '7.jpg');
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic)
VALUES('Ankadifotsy',1,1,1,1,1, 508, 'Chris', '8.jpg');
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic)
VALUES('Anosizato',2,2,2,2,1, 686, 'Lory', '9.jpg');
INSERT INTO HABITATION (Quartier,Salon,Chambre,Douche,Toilette,Balcon,loyer,host,HousePic)
VALUES('Ambohimiadana',1,1,2,2,1, 847, 'Romuald', '10.jpg');

--------------------INSERT RESERVATION-------------
INSERT INTO RESERVATION(idHabitation,idUser,nbLocataire,DateDebutReservation,DateFinReservation)
VALUES('1','3', 3, '12/06/2022','12/12/2022');
INSERT INTO RESERVATION (idHabitation,idUser,nbLocataire,DateDebutReservation,DateFinReservation)
VALUES('2','5', 1, '12/12/2022','12/13/2022');
INSERT INTO RESERVATION (idHabitation,idUser,nbLocataire,DateDebutReservation,DateFinReservation)
VALUES('5','4', 2, '12/25/2022','12/31/2022');
INSERT INTO RESERVATION (idHabitation,idUser,nbLocataire,DateDebutReservation,DateFinReservation)
VALUES('9','6', 2, '11/25/2022','11/30/2022');
INSERT INTO RESERVATION (idHabitation,idUser,nbLocataire,DateDebutReservation,DateFinReservation)
VALUES('7','7',4 ,'10/01/2022','11/11/2022');

INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(1,'14.jpg','15.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(2,'16.jpg','17.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(3,'18.jpg','19.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(4,'20.jpg','21.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(5,'22.jpg','23.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(6,'24.jpg','25.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(7,'26.jpg','27.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(8,'28.jpg','29.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(9,'30.jpg','31.jpg');
INSERT INTO images(idHabitation,photoDressin1,photoDressin2)
VALUES(10,'13.jpg','12.jpg');
