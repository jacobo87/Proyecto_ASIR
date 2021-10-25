DROP DATABASE IF EXISTS helpdesk;
CREATE DATABASE helpdesk CHARACTER SET utf8mb4;
USE helpdesk;

#usuarios(id, número_asociado, nombre, apellido1, apellido2, dirección, teléfono, tipo)
CREATE TABLE usuarios (
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    numero_asociado MEDIUMINT UNSIGNED NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contraseña VARCHAR(100) NOT NULL,
);