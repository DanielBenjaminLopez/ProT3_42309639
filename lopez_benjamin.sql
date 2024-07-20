-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2024 a las 06:06:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lopez_benjamin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Pepe', 'Lopez', 'Pepe24', 'pepe@gmail.com', '$2y$10$iU4qhO2VbPaY2zOmnoIpEeuMYwKgdywjkAVf7INgDWOBvlP/4OQVy', 1, 'NO'),
(2, 'Tobias Alejandro', 'Maciel', 'SrTobi', 'tobias@gmail.com', '$2y$10$Fb08/8xldpAB.c7OdHmMqOtyL9igu/2t0a7IA.kTqAFIxh3U4pvKq', 2, 'NO'),
(3, 'Juan Andres', 'Pérez Suarez', 'Juancito', 'juancito@gmail.com', '$2y$10$6.c6ddhNBhxZ7.ucGYmRReKUWys99AdPbdPo9FcmJDr5/S4j/Te0C', 2, 'SI'),
(4, 'Sofia', 'Lopez', 'SofiaLopez', 'sof@gmail.com', '$2y$10$yzGmAJIYOKmcnwKKePXysu2bN7GivbSXs4elfMgq8PR0Cc3eHWKUC', 2, 'NO'),
(7, 'Silvia', 'Alvarez', 'Silvita', 'silvita@gmail.com', '$2y$10$2bSxoxBL03O0Cm83rWRFV.Uw6miM7YDX53MJS/G3YhYAcPhaMKpA6', 2, 'NO'),
(8, 'Rene', 'Suarez', 'Renex', 'rene@gmail.com', '$2y$10$E7vImcIlUxMLO7xvLyDhyOmPXsoWl6Fg.IooBSTQSjCabCG7qrlvC', 2, 'NO'),
(9, 'Walter', 'Lerma', 'Walt', 'walter@gmail.com', '$2y$10$x86rB0p2EmD0lpxDR.pGteGJ.yeLrXaEgo3S4V65IO85vVwgVHJU.', 2, 'NO'),
(10, 'Hernesto', 'Volannova', 'Tito', 'tito@gmail.com', '$2y$10$S8eRLzRbdwFDZjKfKTkcXe0Hxjq7qbd.IcD8AaTKt6d6nlim56tV6', 2, 'NO'),
(11, 'Maria', 'Gomez', 'marita', 'marita@gmail.com', '$2y$10$lVYqZUqoZ5OCIAFy/qmQrOxcJjgS.gWHwqGLhR8XlOwmU5OweuoTW', 2, 'NO'),
(12, 'Antonella', 'Roca', 'anto23', 'anto@gmail.com', '$2y$10$gghJjMRD5Jw9k/c.3vdg8eqSvMUyNwoPrxK341IncssTcNUO8V8M6', 2, 'NO'),
(13, 'Sara', 'Sosa', 'Saraso', 'saraso@gmail.com', '$2y$10$IEZ3x4BZUlCQbR6cxKj0vuVJ89COTFHRBsojpbt4nmscrEs8TsOIK', 2, 'NO'),
(14, 'Manolo', 'Lamaz', 'manolo', 'manolo@gmail.com', '$2y$10$HDAEE9rCDTH2KviEOx7yRescMV54VBds5TzSBhCsXjkcjV44IskUK', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
