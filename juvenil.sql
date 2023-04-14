-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2023 a las 01:58:12
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juvenil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(10) NOT NULL,
  `cargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idcargo`, `cargo`) VALUES
(1, 'Secretario'),
(2, 'Gerente'),
(3, 'Administrador'),
(5, 'Director '),
(8, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `razonsocial` varchar(100) NOT NULL,
  `nit` varchar(15) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `razonsocial`, `nit`, `estado`) VALUES
(2, 'Bianca Sykes', '646456', 'ACTIVO'),
(3, 'Sevelinda parada', '654654', 'INACTIVO'),
(5, 'Alan Sanz', '678454', 'ACTIVO'),
(7, 'Rosio', '6855258', 'ACTIVO'),
(8, 'Tyler hadley', '798456', 'ACTIVO'),
(9, 'Charles Manson', '66668', 'ACTIVO'),
(10, 'Miriam Aguirre', '646894', 'INACTIVO'),
(12, 'Jim Jones', '686465', 'ACTIVO'),
(15, 'Evelynn <3', '6647448', 'ACTIVO'),
(17, 'Oliver ', '6468645', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `id_cargo` int(10) NOT NULL,
  `ci` varchar(10) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `paterno` varchar(70) NOT NULL,
  `materno` varchar(70) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `intereses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `id_cargo`, `ci`, `nombre`, `paterno`, `materno`, `direccion`, `telefono`, `fechanacimiento`, `genero`, `intereses`) VALUES
(1, 5, '3213211', 'Selma', 'Flores', 'Jaro', 'Av/ los andes', '65657923', '1998-03-25', 'F', 'estudia trabaja '),
(2, 1, '79854127', 'Laira', 'Samanta', 'Garcia', 'av/ guerra', '78978945', '1999-10-10', 'F', 'estudia trabaja '),
(3, 5, '8527', 'Luis', 'Mendez', 'Alvarado', 'Av/ fatima', '78542196', '2023-03-17', 'M', 'estudia trabaja '),
(5, 5, '665645', 'Jaime', 'Ticara', 'Avalos', 'av/ carmen', '74859645', '2000-03-23', 'M', 'trabaja '),
(6, 8, '96685645', 'Raul', 'Prado', 'Galindo', 'Av/ figeroa', '74797854', '1999-03-23', 'M', 'estudia trabaja '),
(7, 1, '656526', 'Marieli', 'Ticona', 'Alcon', 'Av/Miraflores', '78747576', '2000-08-02', 'F', 'estudia '),
(8, 1, '656526', 'Armando', 'Paredes', 'Simples', 'AV. Redelav', '65555645', '2023-03-02', 'M', 'estudia trabaja '),
(9, 3, '656526', 'Maria', 'Flores', 'Medina', 'Av/ bush', '78747571', '2023-03-02', 'F', 'trabaja '),
(10, 3, '9982167', 'Luis', 'Mejia', 'Loza', 'Av/ Vazques', '79516454', '2000-03-18', 'M', 'trabaja ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`idcargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
