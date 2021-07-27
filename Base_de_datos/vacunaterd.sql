-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2021 a las 01:59:55
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vacunaterd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id_provincias` int(11) NOT NULL,
  `provincias_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincias`, `provincias_nombre`) VALUES
(1, 'Distrito Nacional'),
(2, 'Santo Domingo'),
(3, 'Santiago'),
(4, 'Azúa'),
(5, 'Baoruco'),
(6, 'Barahona'),
(7, 'Dajabón'),
(8, 'Duarte'),
(9, 'Elías Pina'),
(10, 'El Seibo'),
(11, 'Espaillat'),
(12, 'Hato Mayor'),
(13, 'Independencia'),
(14, 'La Altagracia'),
(15, 'La Romana'),
(16, 'La Vega'),
(17, 'Maria Trinidad Sanchez'),
(18, 'Monseñor Nouel'),
(19, 'Monte Cristi'),
(20, 'Monte Plata'),
(21, 'Pedernales'),
(22, 'Peravia'),
(23, 'Ocoa'),
(24, 'San Juan'),
(25, 'San Pedro de Macorís'),
(26, 'Santiago Rodríguez'),
(27, 'Valverde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunados`
--

CREATE TABLE `vacunados` (
  `id_casos` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vacuna` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fechaprimera` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fechasegunda` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vacunados`
--

INSERT INTO `vacunados` (`id_casos`, `nombre`, `apellido`, `vacuna`, `provincia`, `fechaprimera`, `fechasegunda`, `cedula`) VALUES
(20, 'Jhon', 'David', 'Pfizer', 'Santo Domingo', '2021-06-07', '2021-07-08', '40237740820'),
(21, 'Juan', 'Guzman', 'Pfizer', 'Santo Domingo', '2021-06-07', '2021-07-10', '40233456780'),
(22, 'Juan', 'Mesa', 'Sinovac', 'Distrito Nacional', '2021-06-22', '2021-07-24', '10800043008'),
(23, 'Scarlett', 'Bilmania', 'AstraZeneca', 'Monte Cristi', '2021-07-20', '', '50434234530');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id_vacuna` int(11) NOT NULL,
  `nombrevacuna` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id_vacuna`, `nombrevacuna`) VALUES
(1, 'Pfizer'),
(2, 'Sinovac'),
(3, 'AstraZeneca'),
(4, 'Cubana');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincias`);

--
-- Indices de la tabla `vacunados`
--
ALTER TABLE `vacunados`
  ADD PRIMARY KEY (`id_casos`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `vacunados`
--
ALTER TABLE `vacunados`
  MODIFY `id_casos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id_vacuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
