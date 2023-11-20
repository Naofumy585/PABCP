CREATE DATABASE  mielchiapaneca;
USE DATABASE mielchiapaneca;

CREATE TABLE `t_carrito` (
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_total` decimal(10,0) DEFAULT NULL,
  `Nombre_producto` varchar(50) DEFAULT NULL,
  `modelo_producto` varchar(50) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `t_carrito` (`id_usuario`, `id_producto`, `precio_total`, `Nombre_producto`, `modelo_producto`, `Precio`, `Img`) VALUES
(1, 1, 12, 'Miel Organica', NULL, 12, '../img/productos/1a.pn'),
(1, 2, 80, 'pastillas de miel', NULL, 80, '../img/productos/pas.jpg'),
(4, 3, 120, 'Shampo', NULL, 120, '../img/productos/shampoo.jpg'),
(4, 4, 75, 'Jabon de tocador', NULL, 75, '../img/productos/shampoo.jpg'),
(1, 1, 12, 'Miel Organica', NULL, 12, '../img/productos/1a.pn'),
(1, 2, 80, 'pastillas de miel', NULL, 80, '../img/productos/pas.jpg'),
(4, 3, 120, 'Shampo', NULL, 120, '../img/productos/shampoo.jpg'),
(4, 4, 75, 'Jabon de tocador', NULL, 75, '../img/productos/shampoo.jpg');

CREATE TABLE `t_compra` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `t_compra` (`id`, `id_usuario`, `id_producto`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 4, 2),
(5, 4, 4);


CREATE TABLE `t_detalles_compra` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `tipo_pago` varchar(20) DEFAULT NULL,
  `Num_targeta` varchar(25) DEFAULT NULL,
  `CVV` int(8) DEFAULT NULL,
  `FechaVencimiento` varchar(25) DEFAULT NULL,
  `titularTarjeta` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `t_detalles_compra` (`id`, `id_compra`, `tipo_pago`, `Num_targeta`, `CVV`, `FechaVencimiento`, `titularTarjeta`) VALUES
(1, 1, NULL, '1234567890123456', 333, '04/24', 'Yo'),
(2, 2, NULL, '1234567890123456', 444, '04/24', 'Charly'),
(3, 3, NULL, '1234567890123456', 222, '04/24', 'Arturo'),
(4, 4, NULL, '6543210987654321', 444, '04/24', 'Arleth'),
(5, 5, NULL, '6543210987654321', 777, '04/24', 'Areli');

-- --------------------------------------------------------

CREATE TABLE `t_pedidos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `modelo_producto` varchar(50) DEFAULT NULL,
  `precio_producto` decimal(10,0) DEFAULT NULL,
  `fecha_pedido` datetime DEFAULT NULL,
  `NombreRecibePedido` varchar(150) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `CodigoPostal` varchar(20) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `CorreoElectronico` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



INSERT INTO `t_pedidos` (`id`, `id_usuario`, `id_producto`, `modelo_producto`, `precio_producto`, `fecha_pedido`, `NombreRecibePedido`, `Direccion`, `CodigoPostal`, `Telefono`, `CorreoElectronico`) VALUES
(1, 1, 1, NULL, NULL, '2023-11-29 17:52:30', 'YO', 'barrio san francisco', '29066', '9161659580', 'charly.aquino75@gmail.com'),
(2, 1, 2, NULL, NULL, '2023-11-29 17:52:30', 'Carlos', 'PAtria', '29066', '9161659580', 'charly.aquino75@gmail.com'),
(3, 1, 3, NULL, NULL, '2023-11-16 07:03:39', 'Charly', 'Granjas', '29066', '9161096004', 'charly.aquino75@unach.mx'),
(4, 4, 2, NULL, NULL, '2023-11-15 07:03:39', 'Arleth', 'El parral', '298372', '9161659580', 'arleth.86@unach.mx'),
(5, 4, 4, NULL, NULL, '2023-11-15 07:03:39', 'Arleth', 'Parral2', '132334', '9161659580', 'arleth.86@unach.mx');


CREATE TABLE `t_productos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `CorreoElectronico` varchar(70) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `Img` varchar(256) DEFAULT NULL,
  `Descripcion` varchar(300) DEFAULT NULL,
  `cantidad_Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `t_productos` (`id`, `id_usuario`, `CorreoElectronico`, `Nombre`, `modelo`, `precio`, `Img`, `Descripcion`, `cantidad_Stock`) VALUES
(1, 0, NULL, 'Miel Organica', 'MLDS', 12, '../img/productos/1a.png', NULL, NULL),
(2, 0, NULL, 'pastillas de miel', 'pastillas para la tos', 80, '../img/productos/pas.jpg', NULL, NULL),
(3, 0, NULL, 'Shampoo', 'Para un cabello mas sedoso', 120, '../img/productos/shampoo.jpg', NULL, NULL),
(4, 0, NULL, 'Jabon de tocador', 'Para una piel mas suabe', 75, '../img/productos/Jabon tocador.jpg', NULL, NULL);

-- --------------------------------------------------------


CREATE TABLE `t_usuarios` (
  `id` int(11) NOT NULL,
  `NombreCompleto` varchar(150) DEFAULT NULL,
  `CorreoElectronico` varchar(70) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `FechaRegistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `t_usuarios` (`id`, `NombreCompleto`, `CorreoElectronico`, `Password`, `Tipo`, `FechaRegistro`) VALUES
(1, 'Charly Aquino Vazquez', 'charly.aquino75@unach.mx', '65239b14ab29c4acb3c5fff03687ff70', 1, '2023-11-01 02:00:00'),
(2, 'areli diaz jimenez', 'areli.86@unach.mx', '3411f6d521ed0d17b6953e5741eaecca', 1, '2023-11-07 04:00:00'),
(3, 'Rigoberto', 'Rigoberto.62@unach.mx', 'f1c1592588411002af340cbaedd6fc33', 1, '2023-11-07 17:00:00'),
(4, 'Arleth', 'arleth.86@unach.mx', 'f1c1592588411002af340cbaedd6fc33', 1, '2023-11-07 17:00:00'),
(5, 'thepopis', 'buuh@unach.mx', 'e10adc3949ba59abbe56e057f20f883e', 2, '2023-11-08 15:00:00'),
(6, 'Berenice', 'Berenice.86@unach.mx', 'f1c1592588411002af340cbaedd6fc33', 2, '2023-11-16 11:00:48');

--
ALTER TABLE `t_carrito`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `t_compra`
--
ALTER TABLE `t_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `t_detalles_compra`
--
ALTER TABLE `t_detalles_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Tipo` (`Tipo`);

ALTER TABLE `t_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_detalles_compra`
--
ALTER TABLE `t_detalles_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `t_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `t_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `t_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;



ALTER TABLE `t_carrito`
  ADD CONSTRAINT `fk_carrito_producto` FOREIGN KEY (`id_producto`) REFERENCES `t_productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_carrito_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id`) ON UPDATE CASCADE;

ALTER TABLE `t_compra`
  ADD CONSTRAINT `fk_compra_producto` FOREIGN KEY (`id_producto`) REFERENCES `t_productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compra_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_detalles_compra`
--
ALTER TABLE `t_detalles_compra`
  ADD CONSTRAINT `fk_detalle_compra` FOREIGN KEY (`id_compra`) REFERENCES `t_compra` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  ADD CONSTRAINT `fk_pedido_producto` FOREIGN KEY (`id_producto`) REFERENCES `t_productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD CONSTRAINT `fk_productos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
