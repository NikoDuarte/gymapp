-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2020 a las 04:57:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like_com`
--

CREATE TABLE `like_com` (
  `id_like_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `id_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `codigo_gym` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_publi`, `id_user`, `codigo_gym`, `titulo`, `descripcion`, `imagen`, `fecha`) VALUES
(15, 2, 'gymapp111111', 'IMPORTANTE!! ', 'SmartFit mosquera tiene concierto', 'img/41Hr2wd1cTL._SX342_.jpg', '2020-09-10'),
(16, 2, 'gymapp111111', 'prueba', 'wwqeqe', 'img/wave.png', '2020-09-10'),
(17, 2, 'gymapp111111', 'alexito', 'hola', 'img/js.png', '2020-09-10'),
(18, 10, 'gymapp222222', 'prueba2gym', 'hola mundo', 'img/modelo de caja.jpg', '2020-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `codigo_gym` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_gym_user` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `telefono`, `codigo_gym`, `codigo_gym_user`, `rol`) VALUES
(2, 'smartfit mosquera', 'smartfit@gymcolombia.com.co', 'samtfit', 2147483647, 'gymapp111111', '', 'Gimnasio'),
(6, 'Nicolas Duarte Moreno', 'nicoduartem2002@gmail.com', 'asdhkjsahbd', 0, '', 'gymapp111111', 'Usuario'),
(7, 'hola', 'hola@gmail.com', 'hola', 0, '', 'gymapp111111', 'Usuario'),
(10, 'smartfit bogota', 'smartfitbogota@gymcolombia.com.co', 'hola', 2147483647, 'gymapp222222', '', 'Gimnasio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_com`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_publi` (`id_publi`);

--
-- Indices de la tabla `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_publi` (`id_publi`);

--
-- Indices de la tabla `like_com`
--
ALTER TABLE `like_com`
  ADD PRIMARY KEY (`id_like_com`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_publi` (`id_publi`,`id_com`),
  ADD KEY `id_com` (`id_com`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publi`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `like_com`
--
ALTER TABLE `like_com`
  MODIFY `id_like_com` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`);

--
-- Filtros para la tabla `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`);

--
-- Filtros para la tabla `like_com`
--
ALTER TABLE `like_com`
  ADD CONSTRAINT `like_com_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `like_com_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`),
  ADD CONSTRAINT `like_com_ibfk_3` FOREIGN KEY (`id_com`) REFERENCES `comentarios` (`id_com`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
