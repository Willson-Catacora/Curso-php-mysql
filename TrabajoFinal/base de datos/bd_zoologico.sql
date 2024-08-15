-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2024 a las 04:50:17
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
-- Base de datos: `bd_zoologico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE `ficha_tecnica` (
  `Codigo` int(11) NOT NULL,
  `Nombre convencional` varchar(40) NOT NULL,
  `Nombre cientifico` varchar(40) NOT NULL,
  `Clasificación` varchar(25) NOT NULL,
  `Familia` varchar(25) NOT NULL,
  `Alimentación` varchar(25) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Longitud` int(11) NOT NULL,
  `Longevidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ficha_tecnica`
--

INSERT INTO `ficha_tecnica` (`Codigo`, `Nombre convencional`, `Nombre cientifico`, `Clasificación`, `Familia`, `Alimentación`, `Peso`, `Longitud`, `Longevidad`) VALUES
(1, 'JIRAFA', 'LEOPARDUS', 'MAMMALIA', 'GIRAFIDAE', 'HOJA DE ARBOLES', 1800, 40, 40),
(2, 'PUMA', 'PUMA CONCOLOR', 'MAMMALIA', 'FELIDAE', 'CARNIVOROS', 72, 180, 13),
(3, 'OCELOTE', 'LEOPARDUS PARDALIS', 'MAMMALIA', 'FELIDAE', 'CARNIVOROS', 11, 40, 20),
(4, 'LEON AFRICANO', 'PANTHERA LEO', 'MAMMALIA', 'FELIDAE', 'CARNIVOROS', 250, 250, 14),
(5, 'HALCON', 'PUMA CONCOLOR', 'AVES', 'FALCONIDAE', 'CARNIVORO', 3, 58, 16),
(6, 'AGULA REAL', 'AQUILA CHRYSAETOS', 'AVES', 'ACCIPITRIDAE', 'CARNIVORO', 6, 93, 40),
(7, 'TUCAN PECHO AMARILLO', 'RAMPHASTOS SULFURATUS', 'AVES', 'RAMPHASTIDAE', 'OMNIVORO', 1, 63, 30),
(9, 'TORTUGA GIGANTE DE ALDABRA', 'ALDABRACHAELYS GIGANTEA', 'SAUROPSIDA', 'TESTUDINIDAE', 'HERBIVORA', 250, 90, 165);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
