-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2025 a las 22:05:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `cedula_identidad` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo_electronico` varchar(20) NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` text NOT NULL,
  `curso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`nombre`, `apellido`, `cedula_identidad`, `fecha_nacimiento`, `correo_electronico`, `direccion`, `ciudad`, `curso`) VALUES
('Hector', 'Narvaez', 401177910, '1982-03-02', 'narvaezhector@hotmai', 'Hermanos Utreras E7 55 y Pio Jaramillo', 'Quito', 'informatica'),
('Daniel', 'Narvaez', 1715843698, '2013-05-20', 'danielnarvaez@gmail.', 'Utreras y El Morlan', 'Quito', 'robotica'),
('Joseph', 'Narvaez', 1752259669, '2009-01-29', 'josephalexandre@outl', 'La Kennedy', 'Quito', 'electronica'),
('Jocelyn', 'Narvaez', 1752695847, '2011-03-02', 'jocelynnarvaez66@gma', 'Hermanos Utreras E7 55 y Pio Jaramillo', 'Quito', 'arquitectura');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cedula_identidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
