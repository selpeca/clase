--
-- Base de datos: `clase_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `pais_club` varchar(100) NOT NULL,
  `puesto` varchar(15) NOT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `equipo`, `pais_club`, `puesto`, `pais_id`) VALUES
(1, 'Álvaro Montero', 'Millonarios', 'Colombia', 'Portero', 6),
(2, 'Camilo Vargas', 'Atlas ', 'México', 'Portero', 6),
(3, 'David Ospina', 'Al-Nassr ', 'Arabia', 'Portero', 6),
(4, 'Carlos Cuesta', 'Genk ', 'Bélgica', 'Defensa', 6),
(5, 'Daniel Muñoz', 'Crystal Palace ', 'Inglaterra', 'Defensa', 6),
(6, 'Davinson Sánchez', 'Galatasaray ', 'Turquía', 'Defensa', 6),
(7, 'Deiver Machado', 'Lens ', 'Francia', 'Defensa', 6),
(8, 'Jhon Lucumí', 'Bologna ', 'Italia', 'Defensa', 6),
(9, 'Johan Mojica', 'Osasuna ', 'España', 'Defensa', 6),
(10, 'Santiago Arias', 'Bahía ', 'Brasil', 'Defensa', 6),
(11, 'Sebastián Gómez', 'Coritiba ', 'Brasil', 'Defensa', 6),
(12, 'Yerry Mina', 'Cagliari ', 'Italia', 'Defensa', 6),
(13, 'Yerson Mosquera', 'Villarreal ', 'España', 'Defensa', 6),
(14, 'James Rodríguez', 'Sao Paulo ', 'Brasil', 'Mediocampista', 6),
(15, 'Jefferson Lerma', 'Crystal Palace ', 'Inglaterra', 'Mediocampista', 6),
(16, 'Jhon Arias', 'Fluminense ', 'Brasil', 'Mediocampista', 6),
(17, 'Jorge Carrascal', 'Dynamo Moscú ', 'Rusia', 'Mediocampista', 6),
(18, 'Juan Fernando Quintero', 'Racing ', 'Argentina', 'Mediocampista', 6),
(19, 'Kevin Castaño', 'Krasnodar ', 'Rusia', 'Mediocampista', 6),
(20, 'Matheus Uribe', 'Al-Sadd ', 'Arabia', 'Mediocampista', 6),
(21, 'Richard Ríos', 'Palmeiras ', 'Brasil', 'Mediocampista', 6),
(22, 'Yáser Asprilla', 'Watford ', 'Inglaterra', 'Mediocampista', 6),
(23, 'Jhon Córdoba', 'Krasnodar ', 'Rusia', 'Delantero', 6),
(24, 'Jhon Jáder Durán', 'Aston Villa ', 'Inglaterra', 'Delantero', 6),
(25, 'Luis Díaz', 'Liverpool ', 'Inglaterra', 'Delantero', 6),
(26, 'Luis Sinisterra', 'Bournemouth ', 'Inglaterra', 'Delantero', 6),
(27, 'Miguel Ángel Borja', 'River ', 'Argentina', 'Delantero', 6),
(28, 'Rafael Santos Borré', 'Internacional ', 'Brasil', 'Delantero', 6),
(29, 'Franco Armani', 'River Plate', 'Argentina', 'Portero', 1),
(30, 'Gerónimo Rulli', 'Ajax ', 'Países Bajos', 'Portero', 1),
(31, 'Emiliano Martínez', 'Aston Villa ', 'Inglaterra', 'Portero', 1),
(32, 'Germán Pezzella', 'Betis ', 'España', 'Defensa', 1),
(33, 'Gonzalo Montiel', 'Nottingham ', 'Inglaterra', 'Defensa', 1),
(34, 'Nicolás Otamendi', 'Benfica ', 'Portugal', 'Defensa', 1),
(35, 'Cristian Romero', 'Tottenham ', 'Inglaterra', 'Defensa', 1),
(36, 'Nicolás Tagliafico', 'Lyon ', 'Francia', 'Defensa', 1),
(37, 'Marcos Acuña', 'Sevilla ', 'España', 'Defensa', 1),
(38, 'Lucas Martínez Quarta', 'Fiorentina ', 'Italia', 'Defensa', 1),
(39, 'Nahuel Molina Lucero', 'Atlético Madrid ', 'España', 'Defensa', 1),
(40, 'Valentín Barco', 'Brighton ', 'Inglaterra', 'Defensa', 1),
(41, 'Leonardo Balerdi', 'Olympique Marsella ', 'Francia', 'Defensa', 1),
(42, 'Lisandro Martínez', 'Manchester United ', 'Inglaterra', 'Defensa', 1),
(43, 'Exequiel Palacios', 'Bayer Leverkusen ', 'Alemania', 'Mediocampista', 1),
(44, 'Rodrigo De Paul', 'Atlético de Madrid ', 'España', 'Mediocampista', 1),
(45, 'Leandro Paredes', 'Roma ', 'Italia', 'Mediocampista', 1),
(46, 'Alexis Mac Allister', 'Liverpool ', 'Inglaterra', 'Mediocampista', 1),
(47, 'Enzo Fernández', 'Chelsea ', 'Inglaterra', 'Mediocampista', 1),
(48, 'Giovani Lo Celso', 'Tottenham ', 'Inglaterra', 'Mediocampista', 1),
(49, 'Valentín Carboni', 'Monza ', 'Italia', 'Mediocampista', 1),
(50, 'Guido Rodríguez', 'Betis ', 'España', 'Mediocampista', 1),
(51, 'Nicolás González', 'Fiorentina ', 'Italia', 'Delantero', 1),
(52, 'Alejandro Garnacho', 'Manchester United ', 'Inglaterra', 'Delantero', 1),
(53, 'Ángel Di María', 'Benfica ', 'Portugal', 'Delantero', 1),
(54, 'Julián Álvarez', 'Manchester City ', 'Inglaterra', 'Delantero', 1),
(55, 'Lautaro Martínez', 'Inter ', 'Italia', 'Delantero', 1),
(56, 'Lionel Messi', 'Inter Miami ', 'EE.UU.', 'Delantero', 1),
(57, 'Ángel Correa', 'Atlético de Madrid ', 'España', 'Delantero', 1),
(58, 'Carlos Lampe', 'Bolívar', 'Bolivia', 'Portero', 2),
(59, 'Guillermo Viscarra', 'The Strongest', 'Bolivia', 'Portero', 2),
(60, 'Gustavo Almada', 'Universitario de Vinto', 'Bolivia', 'Portero', 2),
(61, 'Diego Medina ', 'Always Ready', 'Bolivia', 'Defensa', 2),
(62, 'Pablo Vaca ', 'Always Ready', 'Bolivia', 'Defensa', 2),
(63, 'Héctor Cuéllar ', 'Always Ready', 'Bolivia', 'Defensa', 2),
(64, 'Marcelo Suárez ', 'Always Ready', 'Bolivia', 'Defensa', 2),
(65, 'Yomar Rocha ', 'Bolívar', 'Bolivia', 'Defensa', 2),
(66, 'Jesús Sagredo ', 'Bolívar', 'Bolivia', 'Defensa', 2),
(67, 'José Sagredo ', 'Bolívar', 'Bolivia', 'Defensa', 2),
(68, 'Jairo Quinteros ', 'Bolívar', 'Bolivia', 'Defensa', 2),
(69, 'Adrián Jusino ', 'The Strongest', 'Bolivia', 'Defensa', 2),
(70, 'Luis Haquín ', 'Atlético Ponte Preta', 'Brasil', 'Defensa', 2),
(71, 'Efraín Morales ', 'Atlanta United FC', 'Bolivia', 'Defensa', 2),
(72, 'Roberto Carlos Fernández ', 'FC Baltika Kaliningrad', 'Rusia', 'Defensa', 2),
(73, 'Lucas Chávez ', 'Bolívar', 'Bolivia', 'Mediocampista', 2),
(74, 'Leonel Justiniano ', 'Bolívar', 'Bolivia', 'Mediocampista', 2),
(75, 'Fernando Saucedo ', 'Bolívar', 'Bolivia', 'Mediocampista', 2),
(76, 'Ramiro Vaca ', 'Bolívar', 'Bolivia', 'Mediocampista', 2),
(77, 'Robson Matheus ', 'Always Ready', 'Bolivia', 'Mediocampista', 2),
(78, 'Adalid Terrazas ', 'Always Ready', 'Bolivia', 'Mediocampista', 2),
(79, 'Rodrigo Ramallo ', 'The Strongest', 'Bolivia', 'Mediocampista', 2),
(80, 'Boris Céspedes ', 'Yverdon Sport FC', 'Suiza', 'Mediocampista', 2),
(81, 'Jaume Cuéllar ', 'Barcelona B', 'España', 'Mediocampista', 2),
(82, 'Gabriel Villamil ', 'Liga de Quito', 'Ecuador', 'Mediocampista', 2),
(83, 'Miguel Terceros ', 'Santos', 'Brasil', 'Mediocampista', 2),
(84, 'César Menacho ', 'Blooming', 'Bolivia', 'Delantero', 2),
(85, 'Carmelo Algarañaz ', 'Bolívar', 'Bolivia', 'Delantero', 2),
(86, 'Bruno Miranda ', 'The Strongest', 'Bolivia', 'Delantero', 2),
(87, 'Alisson ', 'Liverpool', 'Inglaterra', 'Portero', 3),
(88, 'Bento ', 'Athletico Paranaense', 'Brasil', 'Portero', 3),
(89, 'Ederson ', 'Manchester City', 'Inglaterra', 'Portero', 3),
(90, 'Danilo ', 'Juventus', 'Italia', 'Defensa', 3),
(91, 'Yan Couto ', 'Girona', 'España', 'Defensa', 3),
(92, 'Guilherme Arana ', 'Atlético Mineiro', 'Brasil', 'Defensa', 3),
(93, 'Wendell ', 'Oporto', 'Portugal', 'Defensa', 3),
(94, 'Bremer', 'Juventus', 'Italia', 'Defensa', 3),
(95, 'Beraldo ', 'PSG', 'Francia', 'Defensa', 3),
(96, 'Éder Militão ', 'Real Madrid', 'España', 'Defensa', 3),
(97, 'Gabriel Magalhães ', 'Arsenal', 'Inglaterra', 'Defensa', 3),
(98, 'Marquinhos ', 'PSG', 'Francia', 'Defensa', 3),
(99, 'Lucas Beraldo', 'PSG', 'Francia', 'Defensa', 3),
(100, 'Andreas Pereira ', 'Fulham', 'Inglaterra', 'Mediocampista', 3),
(101, 'Bruno Guimarães ', 'Newcastle', 'Inglaterra', 'Mediocampista', 3),
(102, 'Douglas Luiz ', 'Aston Villa', 'Inglaterra', 'Mediocampista', 3),
(103, 'João Gomes ', 'Wolverhampton', 'Inglaterra', 'Mediocampista', 3),
(104, 'Lucas Paqueta ', 'West Ham', 'Inglaterra', 'Mediocampista', 3),
(105, 'Éderson ', 'Atalanta', 'Italia', 'Mediocampista', 3),
(106, 'Endrick ', 'Palmeiras', 'Brasil', 'Delantero', 3),
(107, 'Pepê', 'Oporto', 'Portugal', 'Delantero', 3),
(108, 'Evanilson ', 'Oporto', 'Portugal', 'Delantero', 3),
(109, 'Gabriel Martinelli ', 'Arsenal', 'Inglaterra', 'Delantero', 3),
(110, 'Raphinha ', 'Barcelona', 'España', 'Delantero', 3),
(111, 'Rodrygo Goes ', 'Real Madrid', 'España', 'Delantero', 3),
(112, 'Savinho ', 'Girona', 'España', 'Delantero', 3),
(113, 'Vinícius Júnior ', 'Real Madrid', 'España', 'Delantero', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `selecciones`
--

CREATE TABLE `selecciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `url_bandera` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `selecciones`
--

INSERT INTO `selecciones` (`id`, `nombre`, `grupo`, `url_bandera`) VALUES
(1, 'ARGENTINA', 'A', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1200px-Flag_of_Argentina.svg.png'),
(2, 'BOLIVIA', 'C', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Bolivia.svg/264px-Flag_of_Bolivia.svg.png'),
(3, 'BRASIL', 'D', NULL),
(4, 'CANADÁ', 'A', NULL),
(5, 'CHILE', 'A', NULL),
(6, 'COLOMBIA', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/1280px-Flag_of_Colombia.svg.png'),
(7, 'COSTA RICA', 'D', NULL),
(8, 'ECUADOR', 'B', NULL),
(9, 'ESTADOS UNIDOS', 'C', NULL),
(10, 'JAMAICA', 'B', NULL),
(11, 'MÉXICO', 'B', NULL),
(12, 'PANAMÁ', 'C', NULL),
(13, 'PARAGUAY', 'D', NULL),
(14, 'PERÚ', 'A', NULL),
(15, 'URUGUAY', 'C', NULL),
(16, 'VENEZUELA', 'B', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_active`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'juanito', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'pedrito', 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, 'ramon', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais_jugador_fk` (`pais_id`);

--
-- Indices de la tabla `selecciones`
--
ALTER TABLE `selecciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `selecciones`
--
ALTER TABLE `selecciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `pais_jugador_fk` FOREIGN KEY (`pais_id`) REFERENCES `selecciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
