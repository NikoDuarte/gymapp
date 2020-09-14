-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2020 at 05:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_com`, `id_user`, `id_publi`, `descripcion`, `fecha`) VALUES
(1, 7, 15, 'holaaa', '2020-09-11'),
(2, 7, 15, 'asdd', '2020-09-11'),
(3, 7, 15, 'asdsa', '2020-09-13'),
(4, 7, 16, 'asdas', '2020-09-13'),
(5, 7, 17, 'asdfasd', '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like_com`
--

CREATE TABLE `like_com` (
  `id_like_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_publi` int(11) NOT NULL,
  `id_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id_pagos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(12) NOT NULL,
  `formpago` varchar(50) NOT NULL,
  `tipoDoc` varchar(3) NOT NULL,
  `documento` int(11) NOT NULL,
  `numTarjeta` int(20) NOT NULL,
  `fechaExpedicion` date NOT NULL,
  `codeSeguridad` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagos`
--

INSERT INTO `pagos` (`id_pagos`, `id_producto`, `id_usuario`, `direccion`, `telefono`, `formpago`, `tipoDoc`, `documento`, `numTarjeta`, `fechaExpedicion`, `codeSeguridad`) VALUES
(1, 1, 11, 'asdasd', 123123, 'tarjetaC', 'C.C', 123123123, 123123123, '2020-09-16', 121),
(2, 1, 11, 'casasd', 123213, 'tarjetaC', 'T.I', 123123213, 123123, '2020-09-11', 123);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `tipo`, `precio`, `imagen`) VALUES
(1, 'ropa', 'asdasd', 'ropa', 20000, 'img/Captura de pantalla 2020-09-12 00:17:52.png'),
(2, 'accesorio', 'asdasd', 'accesorios', 1222, 'img/Captura de pantalla 2020-09-12 00:17:52.png'),
(3, 'esteroides', 'ten mas musculo', 'vitaminas', 50000, 'img/Captura de pantalla 2020-09-14 09:35:21.png');

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
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
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`id_publi`, `id_user`, `codigo_gym`, `titulo`, `descripcion`, `imagen`, `fecha`) VALUES
(15, 2, 'gymapp111111', 'IMPORTANTE!! ', 'SmartFit mosquera tiene concierto', 'img/41Hr2wd1cTL._SX342_.jpg', '2020-09-10'),
(16, 2, 'gymapp111111', 'prueba', 'wwqeqe', 'img/wave.png', '2020-09-10'),
(17, 2, 'gymapp111111', 'alexito', 'hola', 'img/js.png', '2020-09-10'),
(18, 10, 'gymapp222222', 'prueba2gym', 'hola mundo', 'img/modelo de caja.jpg', '2020-09-10'),
(19, 2, 'gymapp111111', 'asd', 'asdasd', 'img/Captura de pantalla 2020-09-12 00:17:52.png', '2020-09-13'),
(20, 11, '', '', 'asdasd', 'img/Captura de pantalla 2020-09-12 00:17:52.png', '2020-09-14'),
(21, 11, '', '', 'asdasd', 'img/Captura de pantalla 2020-09-12 00:17:52.png', '2020-09-14'),
(22, 11, '', '', 'ten mas musculo', 'img/Captura de pantalla 2020-09-14 09:35:21.png', '2020-09-14'),
(23, 11, '', '', 'asdasd', 'img/Captura de pantalla 2020-09-12 00:17:52.png', '2020-09-14'),
(24, 2, 'gymapp111111', 'werwerf', 'asdasd', 'img/Captura de pantalla 2020-09-14 09:35:21.png', '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_gym` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_gym_user` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `codigo_gym`, `codigo_gym_user`, `rol`) VALUES
(2, 'smartfit mosquera', 'smartfit@gymcolombia.com.co', 'smartfit', 'gymapp111111', '', 'Gimnasio'),
(6, 'Nicolas Duarte Moreno', 'nicoduartem2002@gmail.com', 'asdhkjsahbd', '', 'gymapp111111', 'Usuario'),
(7, 'hola', 'hola@gmail.com', 'hola', '', 'gymapp111111', 'Usuario'),
(10, 'smartfit bogota', 'smartfitbogota@gymcolombia.com.co', 'hola', 'gymapp222222', '', 'Gimnasio'),
(11, 'admin', 'admin@admin.com', 'admin', '', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_publi` (`id_publi`) USING BTREE;

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_publi` (`id_publi`);

--
-- Indexes for table `like_com`
--
ALTER TABLE `like_com`
  ADD PRIMARY KEY (`id_like_com`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_publi` (`id_publi`,`id_com`),
  ADD KEY `id_com` (`id_com`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pagos`),
  ADD KEY `id_producto` (`id_producto`,`id_usuario`) USING BTREE,
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publi`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like_com`
--
ALTER TABLE `like_com`
  MODIFY `id_like_com` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`);

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`);

--
-- Constraints for table `like_com`
--
ALTER TABLE `like_com`
  ADD CONSTRAINT `like_com_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `like_com_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `publicaciones` (`id_publi`),
  ADD CONSTRAINT `like_com_ibfk_3` FOREIGN KEY (`id_com`) REFERENCES `comentarios` (`id_com`);

--
-- Constraints for table `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Constraints for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
