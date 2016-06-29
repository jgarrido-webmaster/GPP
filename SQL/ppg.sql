-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2016 a las 21:24:35
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ppg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `rut` varchar(20) DEFAULT NULL,
  `razonSocial` varchar(200) DEFAULT NULL,
  `giro` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario_id`, `nombre`, `apellidos`, `empresa`, `telefono`, `celular`, `rut`, `razonSocial`, `giro`, `created`, `modified`) VALUES
(3, 0, 'Javier', 'Garrido Ceballo', 'Grupoweb', '9877777655', '6666666', '11.222.333-4', 'Gas', 'aSDas', '2016-06-28 00:33:10', '2016-06-28 00:33:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(10) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `cliente_id` int(10) NOT NULL,
  `neto` int(15) DEFAULT NULL,
  `descuento` int(15) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `formaPago` varchar(20) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `aprobado` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(10) NOT NULL,
  `cliente_id` int(10) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `usuario_id` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `cliente_id`, `nombre`, `direccion`, `ciudad`, `region`, `usuario_id`, `created`, `modified`) VALUES
(1, 3, 'Direccion Principal', 'Av Ohiggins 1186 Depto 000', 'Concepción', '8 Bio - Bio', NULL, '2016-06-28 01:13:33', '2016-06-28 01:13:33'),
(2, 3, 'Direccion Talca', 'Talca Av. 444 depto 901', 'Talca', '', NULL, '2016-06-28 01:19:43', '2016-06-28 01:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `item` varchar(200) NOT NULL,
  `descripcion` text,
  `sku` varchar(50) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `stock` int(15) NOT NULL,
  `precio` int(15) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1',
  `img` varchar(500) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `item`, `descripcion`, `sku`, `codigo`, `stock`, `precio`, `usuario_id`, `activo`, `img`, `created`, `modified`) VALUES
(1, 'Acido M', '', '12333', '0001', 100, 15000, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 02:19:51', '2016-06-28 02:19:51'),
(3, 'dfsdf5', 'dasdasdasd', '3434d', 'e3434', 244, 43434, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 02:29:26', '2016-06-28 02:29:26'),
(4, 'xczxczxv', '<zx<zx', 'asdasd', 'sadasd', 44, 344, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 02:34:54', '2016-06-28 02:34:54'),
(5, 'dsdfsfdfds', '5555', '555', '4555', 555, 444, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 02:40:24', '2016-06-28 02:40:24'),
(6, 'fdssdffdsfsd', 'werwerwer', '444', 'fssfdfsd', 555, 324, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 03:32:03', '2016-06-28 03:32:03'),
(7, 'sadasdad', 'wewr', '234234', '234234', 44, 444, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 03:34:08', '2016-06-28 03:34:08'),
(8, 'sgdfg', 'dfgdsgsdg', '345345', '344345', 345, 435435, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 03:35:01', '2016-06-28 03:35:01'),
(9, 'sdffsd', 'sfsgdfg', '345345', '345345', 345, 345345, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 03:37:35', '2016-06-28 03:37:35'),
(10, 'sdfsdf', 'werwerwerwe', '55', '555', 555, 55, 0, 1, 'uploads/28062016033933SYMWHTxx.png', '2016-06-28 03:39:33', '2016-06-28 03:39:33'),
(11, 'werwer', 'ertert', '6456', '5345', 546, 345, 0, 1, 'uploads/28062016033949SYMWHTxx.png', '2016-06-28 03:39:49', '2016-06-28 03:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_compras`
--

CREATE TABLE `productos_compras` (
  `id` int(10) NOT NULL,
  `compra_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(10) NOT NULL,
  `usuario_id` int(10) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text,
  `activo` int(1) NOT NULL DEFAULT '1',
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `usuario_id`, `titulo`, `descripcion`, `activo`, `desde`, `hasta`, `documento`, `created`, `modified`) VALUES
(1, NULL, 'asdasdasd', 'asdasdasd', 1, '2016-06-16', '2016-06-17', NULL, 1467227063, 1467227063),
(2, NULL, 'fasasd', 'asdasdasd', 1, '2016-06-12', '2016-06-12', NULL, 1467227141, 1467227141),
(4, NULL, 'fsddssdf', 'sdfsdf', 1, '2016-06-22', '2016-06-25', 'uploads/29062016090746RSA1522.pdf', 1467227266, 1467227266);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `rol`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-06-20 00:00:00', '2016-06-20 00:00:00'),
(2, 'Vendedor', '2016-06-20 00:00:00', '2016-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_id` int(10) NOT NULL,
  `cargo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `formaPago` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rut` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `especialidad` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `apellidos`, `telefono`, `tipo_id`, `cargo`, `formaPago`, `rut`, `especialidad`, `created`, `modified`) VALUES
(1, 'demo@demo.cl', '45d9c3b2c9322d7fb7d8de39d8b1e49eb1632907', 'Javier', 'Garrido', NULL, 1, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'javier2@grupoweb.cl', '45d9c3b2c9322d7fb7d8de39d8b1e49eb1632907', 'Wilhelm', 'Gallardo', '412155207', 2, 'Socio Fundador', 'Efectivo', '15.520.132', 'Cirujano', '2016-05-18 14:09:44', '2016-05-18 14:09:44'),
(3, 'demo1@demo.cl', 'a8a0e454ed7ab9b3ecd795da2aaae1b7e2fb6236', 'Doctor', 'Demo Demo', NULL, 2, 'Doctor', NULL, NULL, 'Cirujano', '2016-05-20 20:58:54', '2016-05-20 20:58:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_compras`
--
ALTER TABLE `productos_compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `productos_compras`
--
ALTER TABLE `productos_compras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
