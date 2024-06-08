CREATE DATABASE clase;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO users(username, password) VALUES ('admin',MD5('123456'));

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `puesto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `jugadores` (`id`, `nombre`, `equipo`, `pais`, `puesto`) VALUES
(1, 'Álvaro Montero', 'Millonarios', 'Colombia', 'Portero'),
(2, 'Camilo Vargas', 'Atlas ', 'México', 'Portero'),
(3, 'David Ospina', 'Al-Nassr ', 'Arabia', 'Portero'),
(4, 'Carlos Cuesta', 'Genk ', 'Bélgica', 'Defensa'),
(5, 'Daniel Muñoz', 'Crystal Palace ', 'Inglaterra', 'Defensa'),
(6, 'Davinson Sánchez', 'Galatasaray ', 'Turquía', 'Defensa'),
(7, 'Deiver Machado', 'Lens ', 'Francia', 'Defensa'),
(8, 'Jhon Lucumí', 'Bologna ', 'Italia', 'Defensa'),
(9, 'Johan Mojica', 'Osasuna ', 'España', 'Defensa'),
(10, 'Santiago Arias', 'Bahía ', 'Brasil', 'Defensa'),
(11, 'Sebastián Gómez', 'Coritiba ', 'Brasil', 'Defensa'),
(12, 'Yerry Mina', 'Cagliari ', 'Italia', 'Defensa'),
(13, 'Yerson Mosquera', 'Villarreal ', 'España', 'Defensa'),
(14, 'James Rodríguez', 'Sao Paulo ', 'Brasil', 'Mediocampista'),
(15, 'Jefferson Lerma', 'Crystal Palace ', 'Inglaterra', 'Mediocampista'),
(16, 'Jhon Arias', 'Fluminense ', 'Brasil', 'Mediocampista'),
(17, 'Jorge Carrascal', 'Dynamo Moscú ', 'Rusia', 'Mediocampista'),
(18, 'Juan Fernando Quintero', 'Racing ', 'Argentina', 'Mediocampista'),
(19, 'Kevin Castaño', 'Krasnodar ', 'Rusia', 'Mediocampista'),
(20, 'Matheus Uribe', 'Al-Sadd ', 'Arabia', 'Mediocampista'),
(21, 'Richard Ríos', 'Palmeiras ', 'Brasil', 'Mediocampista'),
(22, 'Yáser Asprilla', 'Watford ', 'Inglaterra', 'Mediocampista'),
(23, 'Jhon Córdoba', 'Krasnodar ', 'Rusia', 'Delantero'),
(24, 'Jhon Jáder Durán', 'Aston Villa ', 'Inglaterra', 'Delantero'),
(25, 'Luis Díaz', 'Liverpool ', 'Inglaterra', 'Delantero'),
(26, 'Luis Sinisterra', 'Bournemouth ', 'Inglaterra', 'Delantero'),
(27, 'Miguel Ángel Borja', 'River ', 'Argentina', 'Delantero'),
(28, 'Rafael Santos Borré', 'Internacional ', 'Brasil', 'Delantero');
