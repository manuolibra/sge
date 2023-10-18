-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 05:06:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula_escolar` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacionalidad` varchar(150) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `procede` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nro_hermanos` varchar(30) NOT NULL,
  `est_hermanos` varchar(30) NOT NULL,
  `enfermedades` varchar(200) NOT NULL,
  `vacunas` varchar(200) NOT NULL,
  `vive` varchar(200) NOT NULL,
  `id_rep` varchar(30) NOT NULL,
  `rep` varchar(100) NOT NULL,
  `parentesco` varchar(100) NOT NULL,
  `rep_edad` varchar(30) NOT NULL,
  `rep_nacimiento` date NOT NULL,
  `rep_lugar` varchar(100) NOT NULL,
  `rep_nacionalidad` varchar(100) NOT NULL,
  `estado_civil` varchar(100) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `inscripcion` date NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_rep2` varchar(100) DEFAULT NULL,
  `rep2` tinytext DEFAULT NULL,
  `parentesco2` tinytext DEFAULT NULL,
  `rep2_edad` tinyint(4) DEFAULT NULL,
  `rep2_nacimiento` date DEFAULT NULL,
  `rep2_lugar` tinytext DEFAULT NULL,
  `rep2_nacionalidad` tinytext DEFAULT NULL,
  `estado_civil2` tinytext DEFAULT NULL,
  `profesion2` tinytext DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `cedula_escolar`, `sexo`, `nacionalidad`, `edad`, `lugar`, `birthdate`, `direccion`, `telefono`, `procede`, `tipo`, `nro_hermanos`, `est_hermanos`, `enfermedades`, `vacunas`, `vive`, `id_rep`, `rep`, `parentesco`, `rep_edad`, `rep_nacimiento`, `rep_lugar`, `rep_nacionalidad`, `estado_civil`, `profesion`, `inscripcion`, `id_grado`, `id_rep2`, `rep2`, `parentesco2`, `rep2_edad`, `rep2_nacimiento`, `rep2_lugar`, `rep2_nacionalidad`, `estado_civil2`, `profesion2`, `fecha`, `image`) VALUES
(5, 'manuel', 'olivier', '4234234234', 'Masculino', 'venezolano', '23', 'mm', '2023-10-12', '324', '234234', '2342', 'Público', '23423', 'Sí', '24324', '234234', '234234', '23423', '234234', '234324', '23423', '2023-10-19', '23423', '234234', 'Soltero', '234234', '2023-10-09', 1, '127', '257272', '78878', 55, '2023-10-16', '23423', '782782', 'Soltero', '78278278', '2023-10-18 01:54:48', ''),
(6, 'Manuel', 'Olivier', '54464', 'Masculino', 'venezolano', '23', '456456456', '2023-10-15', 'Barrio El Manzanillo, Av. 25-C', '04120746710', '46456456456', 'Público', '0', 'No', '464564', '45645645', '544654', '464564', '46456', '464564', '456', '0666-07-13', '4646545', '456456', 'Soltero', '46456464', '2023-10-09', 2, '127', '55453453', '4534534', 127, '2023-10-13', '4646545', '464646', 'Soltero', '4564646', '2023-10-10 21:53:55', ''),
(7, 'fsfs', 'sfsass', '1231313', 'Masculino', 'weqwe', '12', 'eqweqwe', '2023-10-12', '4534534', '524553', '46456456456', 'Público', '55', 'Sí', '4534534', '34534534', '534534', '453453645', '43453453', '345345345345', '45', '2023-10-18', '56644564', '456456456', 'Soltero', '64564664', '2023-10-18', 1, '127', '6456456', '4564564', 127, '2023-10-11', '56644564', '644564', 'Soltero', '456456456', '2023-10-18 01:45:38', ''),
(8, 'Manuel Alejando', 'Olivier Bravo', '27104792', 'Masculino', 'Venezolana', '23', 'Maracaibo, Estado Zulia', '2000-05-12', 'Barrio El Manzanillo, Av. 25-C', '04120746710', 'Ninguno', 'Público', '0', 'No', 'Alergias', 'Todas', 'Mamá y Abuelos', '12590011', 'Wilmary Josefina Olivier Bravo', 'Madre', '49', '1974-10-29', 'Maracaibo, Estado Zulia', 'Venezolana', 'Soltero', 'Maestra', '2023-10-17', 1, '127', 'Ana María Bravo Socorro', 'Abuela', 64, '1947-10-08', 'Maracaibo, Estado Zulia', 'Venezolana', 'Soltero', 'Maestra', '2023-10-18 03:03:25', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `profesor` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `descripcion`, `profesor`, `fecha`) VALUES
(1, '1A', '6', '2023-10-15 21:46:16'),
(2, '1B', '6', '2023-10-15 21:54:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `per_ini` date NOT NULL,
  `per_fin` date NOT NULL,
  `id_grado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Profesor'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `curp` varchar(150) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `fecha_na` date NOT NULL,
  `telefono` tinytext DEFAULT NULL,
  `lugar_na` varchar(150) NOT NULL,
  `estado_civil` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `niv_edu` varchar(150) NOT NULL,
  `m_acad` varchar(150) NOT NULL,
  `est_post` varchar(150) NOT NULL,
  `cursos` varchar(200) DEFAULT NULL,
  `t_servicio` varchar(100) NOT NULL,
  `f_ingreso` date NOT NULL,
  `tipo_p` varchar(150) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `l_cobra` varchar(150) NOT NULL,
  `l_labora` varchar(150) NOT NULL,
  `d_cargo` varchar(150) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `cedula`, `nombres`, `apellidos`, `correo`, `curp`, `edad`, `fecha_na`, `telefono`, `lugar_na`, `estado_civil`, `direccion`, `niv_edu`, `m_acad`, `est_post`, `cursos`, `t_servicio`, `f_ingreso`, `tipo_p`, `cargo`, `l_cobra`, `l_labora`, `d_cargo`, `codigo`, `fecha`) VALUES
(4, '45645656', '546456456', '45345', '4564@gmail.com', '4533453', '453453', '0000-00-00', '0', '', 'Soltero', '', 'Licenciado', '', '', '', '', '0000-00-00', 'Administrativo', '', '', '', '', '', '2023-10-16 00:11:40'),
(5, '29790768', 'JOSE GABRIEL', 'VILLALOBOS', 'josegabovillalobos@gmail.com', 'VENEZOLANO', '21', '2002-03-05', '0', 'LOS CORTIJOS', 'SOLTERO', 'SAN FRANCSICO', 'PRIMARIA', 'PASJD', 'LCDS', 'CONTADURIA', '5 meses', '2020-01-31', 'OBRERO', 'BAMA', 'CONCEOCIO', 'ALA', 'PROFESOR', '636232378', '2023-10-12 18:46:11'),
(6, '27104792', 'Manuel', 'Olivier', 'manuelolibra1205@gmail.com', '12345', '23', '2008-11-11', NULL, 'Maracaibo', 'Soltero', 'Manzanillo', 'TSU', '', '', '', '0', '2008-11-11', 'Docente', '', '', '', '', '120500', '2023-10-15 21:30:00'),
(7, '5275', 'Manuel', 'Olivier', 'fssfs@hotmail.com', '454', '5', '2023-10-04', NULL, '4544545', 'Zulia', 'Barrio El Manzanillo, Av. 25-C', '4545', '4544', '4544', '45445', '454545', '2023-10-10', '4545', '454545', '4545', '454', '4545', '4004', '2023-10-12 21:39:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_rol` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `correo`, `password`, `fecha`, `id_rol`, `imagen`) VALUES
(21, 'admin', 'admin@mail.com ', '$2y$05$X1qw3Kxu3Hm3vl4tPmzgzOOllW9emX2kz20bLxVDVG47gKzyvWzIO', '2023-10-08 20:32:50', 1, ''),
(22, 'editor', 'lector@gmail.com', '$2y$05$yQaBREZyiY8AELY6D/OyJeIGfwPmJhFQpXckYlZwImwyZQoGiYNB.', '2023-10-10 02:43:57', 2, ''),
(23, 'lector', 'fssfs@hotmail.com ', '$2y$05$pLLlN5Ti7soaaTjEzL3T0eU5AsczuH/Y5rd.0sYp8DhrlpePYKGEm', '2023-10-10 02:44:16', 3, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
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
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
