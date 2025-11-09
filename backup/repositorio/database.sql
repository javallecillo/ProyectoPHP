CREATE DATABASE IF NOT EXISTS ProyectoPHP;

USE ProyectoPHP;

CREATE TABLE IF NOT EXISTS UserCategory (
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Description VARCHAR(120) NOT NULL UNIQUE
);

INSERT INTO UserCategory (Description) VALUES ('ADMIN');
INSERT INTO UserCategory (Description) VALUES ('GENERAL');

CREATE TABLE IF NOT EXISTS Users (
	Id INT PRIMARY KEY AUTO_INCREMENT,
	UserName VARCHAR(60) NOT NULL UNIQUE,
	NameFull VARCHAR(120) NOT NULL,
	`Password` VARCHAR(60) NOT NULL,
	Email VARCHAR(120) NOT NULL,
	Phone VARCHAR(20) NOT NULL,
	Category_Id INT NOT NULL,
	
	FOREIGN KEY (Category_Id) REFERENCES UserCategory (Id)
);

INSERT INTO Users (UserName, NameFull, `Password`, Email, Phone, Category_Id) VALUES ('ADMIN', 'ADMINISTRADOR', '123456', '', '', 1);
INSERT INTO Users (UserName, NameFull, `Password`, Email, Phone, Category_Id) VALUES ('USER', 'USUARIO', '123456', '', '', 2);

SELECT * FROM UserCategory;
SELECT * FROM Users;