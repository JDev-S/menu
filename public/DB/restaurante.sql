-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2020 a las 09:55:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id_alimento` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fotografia_miniatura` varchar(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `eliminado` tinyint(1) NOT NULL,
  `calorias` varchar(100) NOT NULL,
  `tiempo_preparacion` varchar(100) NOT NULL,
  `nombre_alimento` varchar(255) NOT NULL,
  `disponible` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id_alimento`, `id_categoria`, `descripcion`, `fotografia_miniatura`, `precio`, `eliminado`, `calorias`, `tiempo_preparacion`, `nombre_alimento`, `disponible`) VALUES
(1, 2, 'Carne en su jugo', '/images/carne_asada', '200.00', 1, '200', '20-30 ', 'Carne asada', 'on'),
(2, 2, 'Pollo rostizado', '/images/pollo_rostizado', '200.00', 0, '200', '30-60 ', 'Pollo rostizado', 'on'),
(3, 4, 'Pastel de chocolate relleno de chocolate concubertura de chocolate', '/images/1592505954_Pastel de  3 chocolate', '200.00', 0, '2000', '20-90', 'Pastel de  3 chocolate', 'on'),
(4, 4, 'pye de queso', '/images/1592495804_Pye', '900.00', 0, '900', '60-90', 'Pye', 'on'),
(5, 4, 'Carlota de limon', '/images/1592538085_carlota', '200.00', 0, '200', '60-90', 'carlota', 'on'),
(6, 2, 'arrachera', '/images/1592611097_arrachera', '200.00', 0, '900', '60-90', 'arrachera', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelacion`
--

CREATE TABLE `cancelacion` (
  `id_venta` int(11) NOT NULL,
  `id_cancelacion` int(11) NOT NULL,
  `folio_cancelacion` varchar(100) NOT NULL,
  `descripcion_cancelacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL,
  `categoria_padre` int(11) DEFAULT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `categoria_padre`, `eliminado`) VALUES
(2, 'Carnes', NULL, 0),
(4, 'Postres', NULL, 0),
(5, 'Bebidassss', NULL, 0),
(6, 'Ensalada', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_alimento` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `persona_recibe` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero_interior` varchar(10) NOT NULL,
  `numero_exterior` varchar(10) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `referencia` text NOT NULL,
  `calleA` varchar(100) NOT NULL,
  `calleB` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `id_usuario`, `persona_recibe`, `colonia`, `calle`, `numero_interior`, `numero_exterior`, `cp`, `referencia`, `calleA`, `calleB`, `telefono`, `eliminado`) VALUES
(3, 13, 'jose', 'Tabachines', 'villa del monte', '', '1100', '38349', 'casa color amarilla, porton color blanco ', 'villa de aculco', 'prolongacion justo sierra', '123456', 0),
(4, 14, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 1),
(5, 14, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 0),
(6, 14, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 0),
(7, 14, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 0),
(8, 14, 'd', 'd', 'd', 'd', 'd', 'd', 'cd', 'd', 'd', 'd', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_direccion` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id_usuario` int(11) NOT NULL,
  `id_alimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_de_muestra`
--

CREATE TABLE `imagenes_de_muestra` (
  `id_imagen_muestra` int(11) NOT NULL,
  `id_alimento` int(11) NOT NULL,
  `imagen_muestra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_de_muestra`
--

INSERT INTO `imagenes_de_muestra` (`id_imagen_muestra`, `id_alimento`, `imagen_muestra`) VALUES
(5, 5, '/images/1592538086_carlota'),
(10, 6, '/images/1592611101_arrachera'),
(11, 6, '/images/1592611102_arrachera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` int(11) NOT NULL,
  `ingrediente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente_alimento`
--

CREATE TABLE `ingrediente_alimento` (
  `id_alimento` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id_mesa`, `id_usuario`, `mesa`) VALUES
(2, 2, 2),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_de_pago`
--

CREATE TABLE `metodo_de_pago` (
  `id_metodo_de_pago` int(11) NOT NULL,
  `metodo_pago` varchar(100) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodo_de_pago`
--

INSERT INTO `metodo_de_pago` (`id_metodo_de_pago`, `metodo_pago`, `eliminado`) VALUES
(1, 'Efectivo', 0),
(2, 'Tarjeta', 0),
(3, 'Paypal', 0),
(4, 'Mercado pago', 0),
(5, 'Bitcoins', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cancelacion`
--

CREATE TABLE `tipo_cancelacion` (
  `id_cancelacion` int(11) NOT NULL,
  `tipo_cancelacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `nombre`, `apellidos`, `nombre_usuario`, `correo`, `contraseña`, `telefono`, `fecha_nacimiento`, `sexo`, `eliminado`) VALUES
(1, 2, 'Juan jesus', 'Padron Diaz', 'juanito', 'juanjesuspadrondiaz@gmail.com', 'jjpd1996', '4641124092', '1996-08-19', 'M', 0),
(2, 1, 'JDev-S', 'JDev-S', 'admin', 'admin@gmail.com', 'admin', '4641662036', '1996-08-19', 'M', 0),
(3, 2, 'a', 'a', 'a', 'a', 'a', 'a', '2020-06-10', 'a', 1),
(13, 2, 'Jose', 'hurtado', 'pepe', 'septjose@gmail.com', 'aaaa', '1234567890', '2020-06-24', 'M', 0),
(14, 2, 'rita', 'diaz g', 'rita', 'ritadiaz@gmail.com', 'rdg1972', '123456', '2020-06-19', 'F', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `folio` varchar(255) NOT NULL,
  `id_metodo_pago` int(11) NOT NULL,
  `costo_envio` decimal(6,2) NOT NULL,
  `total_venta` decimal(8,2) NOT NULL,
  `status_confirmacion_pedido` tinyint(4) NOT NULL,
  `status_pago_recibido` tinyint(4) NOT NULL,
  `status_reparticion` tinyint(4) NOT NULL,
  `status_venta_entrega` tinyint(4) NOT NULL,
  `comentario_comida` text NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_confirmacion_pedido` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_reparticion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_entrega` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id_alimento`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `cancelacion`
--
ALTER TABLE `cancelacion`
  ADD PRIMARY KEY (`id_venta`,`id_cancelacion`),
  ADD UNIQUE KEY `folio_cancelacion` (`folio_cancelacion`),
  ADD KEY `id_cancelacion` (`id_cancelacion`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `categoria_ibfk_1` (`categoria_padre`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_venta`,`id_usuario`,`id_alimento`),
  ADD KEY `id_usuario` (`id_usuario`,`id_venta`),
  ADD KEY `id_alimento` (`id_alimento`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_direccion`,`id_venta`),
  ADD KEY `envio_ibfk_2` (`id_venta`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_usuario`,`id_alimento`),
  ADD KEY `id_alimento` (`id_alimento`);

--
-- Indices de la tabla `imagenes_de_muestra`
--
ALTER TABLE `imagenes_de_muestra`
  ADD PRIMARY KEY (`id_imagen_muestra`),
  ADD KEY `id_alimento` (`id_alimento`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`);

--
-- Indices de la tabla `ingrediente_alimento`
--
ALTER TABLE `ingrediente_alimento`
  ADD PRIMARY KEY (`id_alimento`,`id_ingrediente`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  ADD PRIMARY KEY (`id_metodo_de_pago`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_cancelacion`
--
ALTER TABLE `tipo_cancelacion`
  ADD PRIMARY KEY (`id_cancelacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD KEY `usuario_ibfk_1` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_metodo_pago` (`id_metodo_pago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id_alimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `imagenes_de_muestra`
--
ALTER TABLE `imagenes_de_muestra`
  MODIFY `id_imagen_muestra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metodo_de_pago`
--
ALTER TABLE `metodo_de_pago`
  MODIFY `id_metodo_de_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_cancelacion`
--
ALTER TABLE `tipo_cancelacion`
  MODIFY `id_cancelacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancelacion`
--
ALTER TABLE `cancelacion`
  ADD CONSTRAINT `cancelacion_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `cancelacion_ibfk_2` FOREIGN KEY (`id_cancelacion`) REFERENCES `tipo_cancelacion` (`id_cancelacion`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`categoria_padre`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_alimento`) REFERENCES `alimentos` (`id_alimento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingrediente_alimento`
--
ALTER TABLE `ingrediente_alimento`
  ADD CONSTRAINT `ingrediente_alimento_ibfk_1` FOREIGN KEY (`id_alimento`) REFERENCES `alimentos` (`id_alimento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingrediente_alimento_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id_ingrediente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `mesa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
