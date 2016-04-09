SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `add_sist_inventario` (
  `cod` varchar(20) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `talla` varchar(30) NOT NULL,
  `marca` char(50) NOT NULL,
  `precio` int(25) NOT NULL
) ENGINE=InnoDB  AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE IF NOT EXISTS `codigo` (
  `id` int(11) NOT NULL,
  `nombre` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `add_sist_inventario`
--
ALTER TABLE `add_sist_inventario`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`id`),
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;