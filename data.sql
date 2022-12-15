create user immobilier identified by immobilier;
grant dba to immobilier;

-- User
CREATE TABLE users
(
    idUser varchar(20),
    Nom varchar(20),
    Mpd varchar(50),
    Email varchar(50),
    estAdmin int,
    Constraint id_User PRIMARY KEY(idUser)
);

-- Habitation
create table habitation
(
    idHabitation varchar(20),
    Quartier varchar(50),
    Salon int,
    Chambre int,
    Douche int , 
    Toilette int,
    Balcon int,
    Constraint id_Habitation PRIMARY KEY(idHabitation)
);

-- Reservation
create table reservation
(
    idReservation varchar(20),
    idHabitation varchar(20),
    idUser varchar(20),
    DateDebutReservation timestamp(1),
    DateFinReservation timestamp(1)
);

ALTER TABLE Reservation
ADD Constraint ID_Habitations
FOREIGN KEY(idHabitation)
REFERENCES Habitation(idHabitation);

ALTER TABLE Reservation 
ADD Constraint id_users 
FOREIGN KEY (idUser)
REFERENCES users(idUser);


--------SEQUENCE USER-----------------------
CREATE SEQUENCE USER_SEQ MINVALUE 0 START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
--------INSERTION USER---------------------
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Toky','toky123456','tokyramanalina@gamil.com',0);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Judichael','judi123456','judichael@gamil.com',0);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Natana','natana123456','natana@gamil.com',0);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Rudy','rudy123456','rudy@gamil.com',1);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Lory','lory123456','lory@gamil.com',1);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Loic','loic123456','loic@gamil.com',1);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Chris','chris123456','chris@gamil.com',1);
INSERT INTO USERS VALUES(USER_SEQ.NEXTVAL,'Paul','paul123456','paul@gamil.com',1);



-----------SEQUENCE HABITATION----------------
CREATE SEQUENCE HAB_SEQ MINVALUE 0 START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
-------------INSERTION HABITAION--------------
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Analakely',1,4,1,2,2);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Behoririka',2,5,1,1,1);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Itaosy',1,1,1,1,1);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Andraharo',1,3,1,1,1);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Adoharanofotsy',2,2,4,2,2);

INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Ankadidramama',1,2,1,2,2);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Ankorondrano',1,5,2,2,2);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Ankadifotsy',1,1,1,1,1);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Anosizato',2,2,2,2,1);
INSERT INTO HABITATION VALUES(HAB_SEQ.NEXTVAL,'Ambohimiadana',1,1,2,2,1);

----------------SEQUENCE RESRVATION--------------
CREATE SEQUENCE RESERV_SEQ MINVALUE 0 START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
--------------------INSERT RESERVATION-------------
INSERT INTO RESERVATION VALUES(RESERV_SEQ.NEXTVAL,'1','3',' 06-DEC-22 04.33.51.04 PM','12-DEC-22 09.16.36.47 AM');
INSERT INTO RESERVATION VALUES(RESERV_SEQ.NEXTVAL,'2','5',' 12-DEC-22 11.33.51.04 PM','13-DEC-22 09.46.00.47 AM');
INSERT INTO RESERVATION VALUES(RESERV_SEQ.NEXTVAL,'5','4',' 25-DEC-22 11.33.51.04 AM','31-DEC-22 09.46.00.47 AM');
INSERT INTO RESERVATION VALUES(RESERV_SEQ.NEXTVAL,'9','6',' 25-DEC-22 11.33.51.04 AM','31-DEC-22 09.46.00.47 AM');
INSERT INTO RESERVATION VALUES(RESERV_SEQ.NEXTVAL,'7','7',' 14-OCT-22 07.33.51.04 AM','22-DEC-22 12.46.00.47 AM');
