-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 20:48:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id_rep2` tinyint(4) DEFAULT NULL,
  `rep2` tinytext,
  `parentesco2` tinytext,
  `rep2_edad` tinyint(4) DEFAULT NULL,
  `rep2_nacimiento` date DEFAULT NULL,
  `rep2_lugar` tinytext,
  `rep2_nacionalidad` tinytext,
  `estado_civil2` tinytext,
  `profesion2` tinytext,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `cedula_escolar`, `sexo`, `nacionalidad`, `edad`, `lugar`, `birthdate`, `direccion`, `telefono`, `procede`, `tipo`, `nro_hermanos`, `est_hermanos`, `enfermedades`, `vacunas`, `vive`, `id_rep`, `rep`, `parentesco`, `rep_edad`, `rep_nacimiento`, `rep_lugar`, `rep_nacionalidad`, `estado_civil`, `profesion`, `inscripcion`, `id_grado`, `id_rep2`, `rep2`, `parentesco2`, `rep2_edad`, `rep2_nacimiento`, `rep2_lugar`, `rep2_nacionalidad`, `estado_civil2`, `profesion2`, `fecha`, `imagen`) VALUES
(4, 'JOSE GABRIEL', 'VILLALOBOS VILLALOBOS', '29790768', 'M', 'VENEZOLANA', '21', 'San Francisco', '2002-03-05', 'Los Cortijos, Av. 49M, Casa 218A-33', '04127500805', 'UEE TERESA LOPEZ BUSTAMANTE', 'PÃšBLICO', '3', 'SÃ­', 'No', 'Todas', 'MADRE', '18317890', 'KEILA VILLALOBOS', 'Madre', '48', '1976-01-08', 'La Paz', 'Venezolana', 'Soltera', 'Chef', '2023-01-31', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-08 19:02:41', ''),
(5, 'manuel', 'olivier', '4234234234', 'masculino', 'venezolano', '23', 'mm', '2023-10-12', '324', '234234', '2342', '2342', '23423', '23423', '24324', '234234', '234234', '23423', '234234', '234324', '23423', '2023-10-19', '23423', '234234', '234234', '234234', '2023-10-09', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-08 22:19:19', ''),
(6, 'Manuel', 'Olivier', '54464', 'Masculino', 'venezolano', '23', '456456456', '2023-10-15', 'Barrio El Manzanillo, Av. 25-C', '04120746710', '46456456456', 'Público', '0', 'No', '464564', '45645645', '544654', '464564', '46456', '464564', '456', '0666-07-13', '4646545', '456456', 'Soltero', '46456464', '2023-10-09', 2, 127, '55453453', '4534534', 127, '2023-10-13', '4646545', '464646', 'Soltero', '4564646', '2023-10-10 21:53:55', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `descripcion`, `duracion`, `fecha`) VALUES
(1, '1A', '6 meses', '2023-08-28 23:34:18'),
(2, '1B', '3 meses', '2023-08-19 23:41:26');

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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_especialidad` int(11) NOT NULL,
  `lugar_na` varchar(150) NOT NULL,
  `estado_civil` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `niv_edu` varchar(150) NOT NULL,
  `m_acad` varchar(150) NOT NULL,
  `est_post` varchar(150) NOT NULL,
  `cursos` varchar(200) NOT NULL,
  `t_servicio` varchar(100) NOT NULL,
  `f_ingreso` date NOT NULL,
  `tipo_p` varchar(150) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `l_cobra` varchar(150) NOT NULL,
  `l_labora` varchar(150) NOT NULL,
  `d_cargo` varchar(150) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `cedula`, `nombres`, `apellidos`, `correo`, `curp`, `edad`, `fecha_na`, `id_especialidad`, `lugar_na`, `estado_civil`, `direccion`, `niv_edu`, `m_acad`, `est_post`, `cursos`, `t_servicio`, `f_ingreso`, `tipo_p`, `cargo`, `l_cobra`, `l_labora`, `d_cargo`, `codigo`, `fecha`) VALUES
(4, '45645656', '546456456', '45345', '4564@gmail.com', '4533453', '453453', '2023-10-13', 0, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '2023-10-09 23:56:04'),
(5, '29790768', 'JOSE GABRIEL', 'VILLALOBOS', 'josegabovillalobos@gmail.com', 'VENEZOLANO', '21', '2002-03-05', 0, 'LOS CORTIJOS', 'SOLTERO', 'SAN FRANCSICO', 'PRIMARIA', 'PASJD', 'LCDS', 'CONTADURIA', '5 meses', '2020-01-31', 'OBRERO', 'BAMA', 'CONCEOCIO', 'ALA', 'PROFESOR', '636232378', '2023-10-12 18:46:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rol` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
