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
  `noEstacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
   `tipo`      int(11) NOT NULL,
  `email` 	   varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password`   varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `referencia` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblUsuarios`
--

INSERT INTO `tblUsuarios` (`noEstacion`, `tipo`, `email`, `password`, `referencia`) VALUES
('123a', 1, '123@gas.com', '$2y$10$H0.c3sRBHIsTaqeNyxc9p.OehhhaH1WP3dDn9wnY7qP4LIEd.ogSS', 'admin');


/*Login: 123a   gasvalid123*/
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