DROP DATABASE IF EXISTS db;
CREATE DATABASE db CHARACTER SET utf8mb4;
USE db;

# USUARIOS (id, nombre ,apellido1, apellido2, email, contrasenya, fecha_creacion, fecha_modificacion, fecha_eliminacion,  estado)
CREATE TABLE usuarios (
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(150) NOT NULL,
  apellido1 VARCHAR(150) NOT NULL,
  apellido2 VARCHAR(150) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL,
  contrasenya VARCHAR(29) NOT NULL,
  fecha_creacion DATETIME NOT NULL,
  fecha_modificacion DATETIME NOT NULL,
  fecha_eliminacion DATETIME NOT NULL,
  estado INTEGER(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# CATEGORÍA (id, nombre, estado)
CREATE TABLE categoria (
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(150) NOT NULL,
  estado INTEGER(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# CASO (id, usuario_id, categoria_id, título, descripción, estado)
CREATE TABLE caso (
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  usuario_id INTEGER UNSIGNED,
  categoria_id INTEGER UNSIGNED,
  titulo VARCHAR(250) NOT NULL,
  descripcion MEDIUMTEXT NOT NULL,
  estado INTEGER(11) NOT NULL,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  FOREIGN KEY (categoria_id) REFERENCES categoria(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# CREATE USER IF NOT EXISTS 'user'@'%';
# SET PASSWORD FOR 'user'@'%' = 'password';
# GRANT ALL PRIVILEGES ON db.* TO 'user'@'%';