CREATE DATABASE internship_db;
USE internship_db;


CREATE TABLE Users (
    id INT AUTO-INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



INSERT INTO Users Values
(1,'Mevini','mevini@gmail.com','i12311'),
(2,'Nishanthi','nishanthi@gmail.com','n12345');

SELECT * FROM Users;