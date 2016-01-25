CREATE TABLE usuario (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(128) NOT NULL,
    clave VARCHAR(128) NOT NULL,
    correo VARCHAR(128) NOT NULL,
    fecha_creacion DATETIME NOT NULL 
);

INSERT INTO usuario (nombre, clave, correo, fecha_creacion) VALUES
(1, 'test1', 'pass1', 'test1@example.com', '2016-01-01 00:00:00'),
(2, 'leydy', '123', 'leydykm93@gmail.com', '2016-01-03 00:00:00');


