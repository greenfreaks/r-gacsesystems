-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2022 a las 04:53:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dr_reminder`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `fk_medico` int(11) NOT NULL,
  `nombre_paciente` varchar(250) NOT NULL,
  `apellido_paciente` varchar(250) NOT NULL,
  `edad_paciente` int(11) NOT NULL,
  `localidad_paciente` varchar(250) NOT NULL,
  `tel_paciente` varchar(20) NOT NULL,
  `email_paciente` varchar(350) NOT NULL,
  `medio_contacto` varchar(250) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `fk_cita_estatus` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifiedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita_estatus`
--

CREATE TABLE `cita_estatus` (
  `id_estatus` int(200) NOT NULL,
  `nombre_estatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita_estatus`
--

INSERT INTO `cita_estatus` (`id_estatus`, `nombre_estatus`) VALUES
(1, 'Agendada'),
(2, 'En sala de espera'),
(3, 'En curso'),
(4, 'Finalizada'),
(5, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(255) NOT NULL,
  `name_medico` varchar(500) NOT NULL,
  `email_medico` varchar(350) NOT NULL,
  `pwd_medico` varchar(20) NOT NULL,
  `createdAT` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifiedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `cita_fk_medico` (`fk_medico`),
  ADD KEY `cita_fk_estatus` (`fk_cita_estatus`);

--
-- Indices de la tabla `cita_estatus`
--
ALTER TABLE `cita_estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `cita_estatus`
--
ALTER TABLE `cita_estatus`
  MODIFY `id_estatus` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `cita_fk_estatus` FOREIGN KEY (`fk_cita_estatus`) REFERENCES `cita_estatus` (`id_estatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_fk_medico` FOREIGN KEY (`fk_medico`) REFERENCES `medicos` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
