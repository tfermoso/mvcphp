-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2020 a las 18:29:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `unidad_id` int(11) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_alta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervenciones`
--

CREATE TABLE `intervenciones` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `sintomas` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tratamiento` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ingreso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `seguridad_social` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `IngresadoActualmente` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(0, 'Administrador'),
(1, 'Doctor'),
(2, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `planta` int(11) NOT NULL,
  `activa` tinyint(1) NOT NULL DEFAULT 1,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `nombre`, `planta`, `activa`, `doctor_id`) VALUES
(1, 'Oftalmologia', 1, 1, 3),
(2, 'Pediatria', 2, 1, 4),
(3, 'Traumatologia', 3, 0, 2),
(4, 'Pediatria', 1, 0, 2),
(5, 'Pediatria', 1, 0, 2),
(6, 'Pediatria', 1, 0, 2),
(7, 'Pediatria', 1, 0, 2),
(8, 'Oncologia', 2, 1, 15),
(9, 'Endocrinologia', 1, 1, 15),
(10, 'Neurologia', 8, 1, 4),
(11, 'Neonatal', 7, 1, 12),
(12, 'Nefrologia', 5, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `codigo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `especialidad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `activo`, `codigo`, `especialidad`) VALUES
(1, 'Fani', 'fani', '1234', 0, 1, '', ''),
(2, 'Carlos', 'carlos', '7410', 1, 0, NULL, NULL),
(3, 'Roberto', 'rober', '8520', 2, 0, '350', 'Oftalmologo'),
(4, 'Carina', 'Caro', '9632', 1, 1, '842', 'Pediatra'),
(5, 'Almudena', 'almu', '7896', 0, 0, NULL, NULL),
(6, 'antonio', 'toni', '4563', 1, 0, NULL, NULL),
(7, 'Casimiro', 'casi', '9999', 2, 0, NULL, NULL),
(8, 'Casimiro', 'casi', '9999', 2, 0, NULL, NULL),
(9, 'Teresa', 'tere', '8745', 1, 0, '542', 'Familia'),
(12, 'Anastasia', 'sia', '0902', 1, 1, '5263', 'Pediatra'),
(13, 'Josefina', 'josef', '321', 2, 0, '', ''),
(14, 'Alberto', 'b52', '5263', 2, 1, '', ''),
(15, 'Salvador', 'salva', '7485', 1, 1, '8796', 'Ginecologo'),
(16, 'Juan', 'jan', '6547', 1, 0, '1111', 'Medicina general'),
(17, 'Alicia', 'ali', '9999', 2, 0, '', ''),
(18, 'Ramon', 'moncho', '8888', 0, 0, '', ''),
(19, 'Rafael', 'rafa', '7777', 2, 0, '', ''),
(21, 'Manuel', 'man', '8596', 1, 1, '8555', 'Neurologo'),
(41, 'Maximiliano', 'max', '1507', 0, 1, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `unidad_id` (`unidad_id`);

--
-- Indices de la tabla `intervenciones`
--
ALTER TABLE `intervenciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingreso_id` (`ingreso_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intervenciones`
--
ALTER TABLE `intervenciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`unidad_id`) REFERENCES `unidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `intervenciones`
--
ALTER TABLE `intervenciones`
  ADD CONSTRAINT `intervenciones_ibfk_1` FOREIGN KEY (`ingreso_id`) REFERENCES `ingresos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `intervenciones_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
