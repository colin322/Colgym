DROP DATABASE IF EXISTS beep;

CREATE DATABASE beep;

USE beep;

CREATE TABLE evenementen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255),
    afbeelding VARCHAR(255),
    omschrijving VARCHAR(255),
    datum_tijd DATETIME,
    plaats VARCHAR(255)
);

CREATE TABLE proefles_aanmeldingen 
( aanmelding_id INT AUTO_INCREMENT PRIMARY KEY, 
naam VARCHAR(255) NOT NULL, 
email VARCHAR(255) NOT NULL UNIQUE, 
telefoonnummer VARCHAR(20), 
datum DATE NOT NULL ); 
    
CREATE TABLE evenement_aanmeldingen (
    aanmelding_id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL,
    email VARCHAR(255)  UNIQUE NOT NULL,
    les VARCHAR(255) NOT NULL
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    wachtwoord VARCHAR(255),
    username VARCHAR(255),
    email VARCHAR(255) UNIQUE
);

INSERT INTO users (email, wachtwoord, username, abonnement_soort, is_admin)
VALUES ('pieter@gmail.com', '$2y$10$GyTpb0gUaoaDiG/phfgu/eC9.ryg1nES4TM3vEvbVlCJyA6jIWhW6', 'Pieter');

INSERT INTO evenementen (naam, afbeelding, omschrijving, datum_tijd, plaats)
VALUES ('event', 'https://images.pexels.com/photos/25358063/pexels-photo-25358063/free-photo-of-singapore-flyer.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load', 'omschrijving', '2024-06-22 17:00:00', 'plaats');

INSERT INTO proefles_aanmeldingen (naam, email, telefoonnummer, datum)
VALUES ('John Doe', 'john.doe@example.com', '1234567890', '2024-06-20');

INSERT INTO evenement_aanmeldingen (naam, email, les)
VALUES ('John Doe', 'john.doe@example.com', 'Yoga');

INSERT INTO users (wachtwoord, abonnement_soort, email, username) 
VALUES ('$2y$10$GyTpb0gUaoaDiG/phfgu/eC9.ryg1nES4TM3vEvbVlCJyA6jIWhW6', 'Premium', 'test@email.com', 'naam');

    