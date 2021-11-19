USE db;

INSERT INTO usuarios (id, nombre, apellido1, apellido2, email, contrasenya, fecha_creacion, fecha_modificacion, fecha_eliminacion, estado, rol_tipo) VALUES
('1', 'Jacobo', 'Azmani', 'Gonzalez', 'jacobo@iescelia.es', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 'administrador'),
('2', 'Jose Antonio', 'Padilla', 'Soler', 'padilla@iescelia.es', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 'administrador'),
('3', 'Juan', 'García', 'López', 'juan@iescelia.es', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 'usuario'),
('4', 'Pepe', 'Gonzalez', 'Sanchez', 'pepe@iescelia.es', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-06 19:46:22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 'usuario');


# Insertamos datos en la tabla categoría
INSERT INTO categoria (id, nombre) VALUES 
(1, 'Hardware'), 
(2, 'Software'),
(3, 'Redes'), 
(4, 'Sistema Operativo'),
(5, 'Otros');

# Insertamos datos en la tabla caso
INSERT INTO caso (id, usuario_id, categoria_id, titulo, descripcion, estado) VALUES 
(NULL, '1', '1', 'Placa base rota.', 'PC no arranca...', '1'),
(NULL, '3', '2', 'No funciona inicio.', 'El botón de inicio de Windows...', '1'),
(NULL, '3', '3', 'No tengo Wi-Fi.', 'No me puedo conectar...', '1'),
(NULL, '4', '2', 'Explorador de archivos.', 'Roto el buscador...', '1'),
(NULL, '4', '4', 'SFC /SCANNOW.', 'Pantalla azul...', '1'),
(NULL, '4', '1', 'USB no lo reconoce.', 'Conector roto...', '1'),
(NULL, '3', '1', 'Placa base rota.', 'PC no arranca...', '1');

# Insertamos datos en la tabla comentarios
INSERT INTO comentarios (id, usuarios_id. caso_id, comentario, fecha_creacion_comentario) VALUES
(NULL, '3', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '2021-01-01 00:00:00'),
(NULL, '4', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '2021-01-01 00:00:00'),
(NULL, '2', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '2021-01-01 00:00:00'),
(NULL, '3', '3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '2021-01-01 00:00:00'),
(NULL, '3', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '2021-01-01 00:00:00');