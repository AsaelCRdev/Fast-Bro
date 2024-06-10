-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2024 a las 21:41:34
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
-- Base de datos: `fastbro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `tocino_burguer` int(11) DEFAULT NULL,
  `hamburguesa_carne` int(11) DEFAULT NULL,
  `smash_burguer` int(11) DEFAULT NULL,
  `papas_fritas` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `descripcion`, `precio`, `cantidad`, `foto`, `nombre`) VALUES
(1, 'Pan Brioche,\r\n2 carnes (res o cerdo),\r\nLechuga fresca,\r\nTomate,\r\nCebolla Caramelizada,\r\nSalsa de tomate,\r\nMayonesa,\r\nTocineta,\r\nSalsa especial,\r\n100gr de Papas.', 10.00, 50, 'vistas\\img\\Tocino-Burguer.jpg', 'Tocino burguer'),
(2, 'Pan Brioche,\r\ncarne de (res o cerdo),\r\nLechuga fresca,\r\nTomate,\r\nQueso Cheddar,\r\nSalsa de tomate,\r\nMayonesa,\r\n100gr de Papas.', 7.50, 50, 'vistas\\img\\hamburguesa.jpg-1200x788.png', 'Hamburguesa de Carne'),
(3, 'Pan Brioche,\r\n3 carnes de res(Res,Cerdo o pollo),\r\nLechuga fresca,\r\nTomate,\r\nTocineta,\r\npepinillos,\r\nJamon haumado,\r\nQueso Americano,\r\nCebolla Caramelizada,\r\nSalsa de tomate,\r\nMayonesa,\r\n100 gr de papas.', 14.00, 50, 'vistas\\img\\smash-burguer.jpg', 'Smash-Burguer'),
(4, '200gr de Papas', 3.00, 100, 'vistas\\img\\papas-fritas.png', 'Papas Fritas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
