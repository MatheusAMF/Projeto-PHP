CREATE DATABASE db_dispositivos;
USE db_dispositivos;

CREATE TABLE dispositivo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    hostname VARCHAR(30) NOT NULL,
    ip VARCHAR(30) NOT NULL,
    tipo VARCHAR(30) NOT NULL,
    fabricante VARCHAR(30) NOT NULL
);