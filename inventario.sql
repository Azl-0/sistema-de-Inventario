-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2025 a las 11:32:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo_equipo` varchar(50) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `id_laboratorio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `codigo_equipo`, `categoria`, `estado`, `ubicacion`, `fecha_registro`, `id_laboratorio`) VALUES
(1, 'Computadora Dell Optiplex 3080', 'CB1001', 'PC de Escritorio', 'Operativo', 'Aula 101', '2025-08-01', NULL),
(2, 'Proyector Epson X200', 'CB1002', 'Proyector', 'Mantenimiento', 'Aula 102', '2025-08-02', NULL),
(3, 'Impresora HP LaserJet 1200', 'CB1003', 'Impresora', 'Operativo', 'Oficina', '2025-08-03', NULL),
(5, 'impresora', 'r3323wq', 'impresora', 'operativo', 'laboratorio1', '2025-08-13', NULL),
(92, 'Proyector Epson X41', 'PRJ2006', 'Proyector', 'Operativo', 'Laboratorio 1', '2025-08-14', 1),
(93, 'Monitor Samsung 24\"', 'MN2407', 'Monitor', 'Operativo', 'Laboratorio 2', '2025-08-10', 2),
(94, 'PC Dell OptiPlex 7080', 'PC7080D', 'Computadora', 'Operativo', 'Laboratorio 5', '2025-08-12', 5),
(95, 'proyector', 'FDF342', 'Proyector', 'Baja', 'Laboratorio 1', '2025-08-15', 3),
(96, 'laptop lenovo', 'sda23', 'Laptop', 'Baja', 'Laboratorio 2', '2025-08-15', 4),
(97, 'cpu', '456sad', 'PC de Escritorio', 'Mantenimiento', 'Laboratorio 5', '2025-08-15', 1),
(98, 'Escáner Canon Lide 300', 'SC300C', 'Escáner', 'Operativo', 'Laboratorio 2', '2025-08-07', 2),
(99, 'Impresora Epson EcoTank L3150', 'IE3150E', 'Impresora', 'Operativo', 'Oficina', '2025-08-11', 3),
(100, 'Cámara de Seguridad Hikvision', 'CAMHIKV1', 'Cámara', 'Operativo', 'Almacen', '2025-08-13', 4),
(101, 'Laptop HP EliteBook 840', 'G3HP840', 'Laptop', 'Operativo', 'Laboratorio 5', '2025-08-05', 5),
(102, 'Switch Cisco 24 Puertos', 'SWC24P', 'Red', 'Operativo', 'Laboratorio 2', '2025-08-04', 2),
(103, 'Impresora Brother HL-L2350DW', 'IB2350DW', 'Impresora', 'Operativo', 'Laboratorio 5', '2025-08-02', 5),
(104, 'Pantalla LG 27\"', 'LG27UL', 'Monitor', 'Operativo', 'Laboratorio 1', '2025-08-06', 1),
(105, 'Servidor HP ProLiant DL380', 'SRVHP380', 'Servidor', 'Operativo', 'Almacen', '2025-08-01', 4),
(106, 'Cámara Logitech C920', 'CAMC920L', 'Cámara', 'Operativo', 'Oficina', '2025-08-14', 3),
(107, 'Proyector BenQ MS550', 'PBMS550', 'Proyector', 'Operativo', 'Laboratorio 2', '2025-08-03', 2),
(108, 'Tablet Samsung Galaxy Tab A7', 'TABA7SMG', 'Tablet', 'Operativo', 'Laboratorio 5', '2025-08-12', 5),
(109, 'Micrófono HyperX QuadCast', 'MICXQC', 'Audio', 'Operativo', 'Laboratorio 1', '2025-08-09', 1),
(110, 'Disco SSD Kingston 480GB', 'SSD480K', 'Almacenamiento', 'Operativo', 'Almacen', '2025-08-06', 4),
(111, 'UPS APC 1500VA', 'UPS1500A', 'Energía', 'Operativo', 'Oficina', '2025-08-10', 3),
(112, 'CPU Dell Vostro 3681', 'CPU3681D', 'CPU', 'Operativo', 'Laboratorio 1', '2025-08-16', 1),
(113, 'PC Lenovo ThinkCentre M720', 'PC720LTC', 'PC', 'Operativo', 'Laboratorio 2', '2025-08-16', 2),
(114, 'Monitor Acer 22\"', 'MNACR22', 'Monitor', 'Operativo', 'Laboratorio 5', '2025-08-16', 5),
(115, 'Mouse Logitech M185', 'MSM185L', 'Mouse', 'Operativo', 'Oficina', '2025-08-16', 3),
(116, 'Teclado Genius KB-110', 'TKG110G', 'Teclado', 'Operativo', 'Almacen', '2025-08-16', 4),
(117, 'Proyector Epson PowerLite X49', 'PRJE49', 'Proyector', 'Operativo', 'Laboratorio 1', '2025-08-16', 1),
(118, 'CPU HP ProDesk 400 G6', 'CPUPD400', 'CPU', 'Operativo', 'Laboratorio 2', '2025-08-17', 2),
(119, 'PC Asus ExpertCenter D500', 'PC500AS', 'PC', 'Operativo', 'Laboratorio 5', '2025-08-17', 5),
(120, 'Monitor LG 24MP', 'MNLG24', 'Monitor', 'Operativo', 'Oficina', '2025-08-17', 3),
(121, 'Mouse Microsoft Basic', 'MSMSBSC', 'Mouse', 'Operativo', 'Almacen', '2025-08-17', 4),
(122, 'Teclado HP KU-1156', 'TKHP1156', 'Teclado', 'Operativo', 'Laboratorio 1', '2025-08-18', 1),
(123, 'Proyector BenQ MW560', 'PRJMW560', 'Proyector', 'Operativo', 'Laboratorio 2', '2025-08-18', 2),
(124, 'CPU Acer Veriton X4660G', 'CPU4660A', 'CPU', 'Operativo', 'Laboratorio 5', '2025-08-18', 5),
(125, 'PC Dell OptiPlex 5090', 'PC5090D', 'PC', 'Operativo', 'Oficina', '2025-08-18', 3),
(126, 'Monitor Samsung Curvo 27\"', 'MNSMC27', 'Monitor', 'Operativo', 'Almacen', '2025-08-18', 4),
(127, 'Mouse Razer DeathAdder', 'MSRZRDA', 'Mouse', 'Operativo', 'Laboratorio 1', '2025-08-19', 1),
(128, 'Teclado Mecánico Redragon Kumara', 'TKRDKUM', 'Teclado', 'Operativo', 'Laboratorio 2', '2025-08-19', 2),
(129, 'Proyector ViewSonic PA503S', 'PRJVS503', 'Proyector', 'Operativo', 'Laboratorio 5', '2025-08-19', 5),
(130, 'CPU Lenovo ThinkCentre M920', 'CPU920LTC', 'CPU', 'Operativo', 'Oficina', '2025-08-19', 3),
(131, 'PC HP EliteDesk 800 G6', 'PCHP800G6', 'PC', 'Operativo', 'Almacen', '2025-08-19', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id_laboratorio` int(11) NOT NULL,
  `nombre_lab` varchar(100) NOT NULL,
  `stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorios`
--

INSERT INTO `laboratorios` (`id_laboratorio`, `nombre_lab`, `stock`) VALUES
(1, 'Laboratorio 1', 0),
(2, 'Laboratorio 2', 5),
(3, 'Oficina', 10),
(4, 'Almacen', 5),
(5, 'Laboratorio 5', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `nombre_equipo` varchar(150) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_laboratorio_origen` int(11) DEFAULT NULL,
  `id_laboratorio_destino` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `nombre_equipo`, `nombre_usuario`, `tipo`, `descripcion`, `fecha`, `id_laboratorio_origen`, `id_laboratorio_destino`, `cantidad`) VALUES
(1, 'Computadora Dell Optiplex 3080', 'martin', 'Ingreso', 'Ingreso inicial al inventario', '2025-08-01', NULL, NULL, 1),
(2, 'Proyector Epson X200', 'asistente1', 'Mantenimiento', 'Revisión y cambio de lámpara', '2025-08-03', NULL, NULL, 1),
(3, 'Impresora HP LaserJet 1200', 'asistente2', 'Traslado', 'Movida desde Aula 105 a Oficina', '2025-08-05', NULL, NULL, 1),
(4, 'Laptop Lenovo ThinkPad T14', 'javier', 'Baja', 'Equipo obsoleto dado de baja', '2025-08-06', NULL, NULL, 1),
(5, 'das', 'sad', 'dsad', 'dasdsa', '2025-07-31', 2, 2, 1),
(6, 'laptop lenovo', 'martin', 'Ingreso', 'equipo nuevo', '2025-08-13', 1, 2, 1),
(7, 'aaa', 'aaa', 'Baja', 'laptop dada de baja en laboratorio 2', '2025-08-10', 2, 4, 1),
(8, 'asas', 'sdas', 'Baja', 'sdad', '2025-08-07', 2, 4, 1),
(9, 'sdasda', 'sdads', 'Mantenimiento', 'sadadsa', '2025-08-13', 5, 4, 2),
(10, 'sdad', 'dsad', 'Baja', 'dsadsa', '2025-08-13', 4, 1, 1),
(11, 'sdad', 'dsad', 'Baja', 'dsadsa', '2025-08-13', 4, 1, 1),
(12, 'sdad', 'dsad', 'Baja', 'dsadsa', '2025-08-13', 4, 1, 1),
(13, 'dsad', 'dsad', 'Baja', 'sad', '2025-08-07', 1, 4, 1),
(14, 'dsad', 'asd', 'Ingreso', 'dsa', '2025-07-31', 1, 5, 1),
(15, 'sdads', 'adsd', 'Ingreso', 'dasd', '2025-08-07', 1, 2, 1),
(16, 'pc lenovo', 'martin', 'Traslado', 'traslado de lab2 a lab 5', '2025-08-22', 2, 5, 3),
(17, 'dsad', 'sdad', 'Mantenimiento', 'sdad', '2025-08-07', 1, 5, 1),
(18, 'sada', 'sdad', 'Baja', 'dasd', '2025-08-15', 1, 2, 7),
(19, 'sadad', 'dsada', 'Ingreso', 'dasd', '2025-08-09', 1, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `contrasena`, `rol`) VALUES
(1, 'martin', 'martin', 'martin123', 'Administrador'),
(2, 'javier', 'javier', 'javier123', 'Administrador'),
(3, 'asistente1', 'asistente123', 'asist123', 'Asistente'),
(4, 'asistente2', 'asistente2', 'asist2', 'Asistente'),
(5, 'a', 'aa', '123', 'Asistente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `codigo_barras` (`codigo_equipo`),
  ADD KEY `id_laboratorio` (`id_laboratorio`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `id_laboratorio_origen` (`id_laboratorio_origen`),
  ADD KEY `id_laboratorio_destino` (`id_laboratorio_destino`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorios` (`id_laboratorio`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`id_laboratorio_origen`) REFERENCES `laboratorios` (`id_laboratorio`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`id_laboratorio_destino`) REFERENCES `laboratorios` (`id_laboratorio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
