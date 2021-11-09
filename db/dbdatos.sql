USE db;

INSERT INTO usuarios (id, nombre, apellido1, apellido2, email, contrasenya, fecha_creacion, fecha_modificacion, fecha_eliminacion, estado) VALUES
('1', 'Jacobo', 'Azmani', 'Gonzalez', 'jacobo@iescelia.es', '123456', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1),
('2', 'Jose Antonio', 'Padilla', 'Soler', 'padilla@iescelia.es', '123456', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1),
('3', 'Juan', 'García', 'López', 'juan@iescelia.es', '123456', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1),
('4', 'Pepe', 'Gonzalez', 'Sanchez', 'pepe@iescelia.es', '123456', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2);


# Insertamos datos en la tabla categoría
INSERT INTO `categoria` (`id`, `nombre`, `estado`) VALUES 
(1, 'Hardware', '1'), 
(2, 'Software', '1'),
(3, 'Redes', '1'), 
(4, 'Sistema Operativo', '1'),
(5, 'Otros', '1');

# Insertamos datos en la tabla caso
INSERT INTO `caso` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `estado`) VALUES 
(NULL, '1', '1', 'Placa base rota.', 'PC no arranca...', '1');

# INSERT INTO `usuarios` (`id`, `nombre`, `apellido1`, `apellido2`, `email`, `contrasenya`, `fecha_creacion`, `fecha_modificacion`, `fecha_eliminacion`, `estado`) VALUES 
# ('2', 'Jose Antonio', 'Padilla', 'Soler', 'antonio@iescelia.es', '123456', '2021-11-07 18:32:14', '', '', '1');
