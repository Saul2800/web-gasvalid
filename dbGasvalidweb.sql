SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Crear la base de datos y luego importar la tabla
-- Base de datos: `dbGasvalidweb`
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblUsuarios`
--

CREATE TABLE `tblUsuarios` (
  `noEstacion` int(11) NOT NULL,
   `tipo`      int(11) NOT NULL,
  `email` 	   varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password`   varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `referencia` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblUsuarios`
--

INSERT INTO `tblUsuarios` (`noEstacion`, `tipo`, `email`, `password`, `referencia`) VALUES
(12,  0, 'mauricios@', '$2y$10$ieDvkHdqyzm4BQ.JVEh3QOMNh7YreMYecqrQOPWn.bUPVNAB4ZL2C', 'azul'),
(123, 1, 'admin@', '$2y$10$5K.dCB5R6Li7RXn96c4YCeT7zx0Vqgkulsd7VskX9//KduOWprgJ2', 'rojo'),
(124, 0, 'configuroweb@', '$2y$10$OayB2Pv03Gqret5/FSFe2eN1.q1xfPHrQjzCcUXEYS1a2LTxQGAiq', 'verde');

--
-- Indices de la tabla `tblUsuarios`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`noEstacion`),
  ADD UNIQUE KEY `username` (`noEstacion`);
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;