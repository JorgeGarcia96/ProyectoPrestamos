-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 04:34:54
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prestamos`
--
CREATE DATABASE IF NOT EXISTS `prestamos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prestamos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NoControl` int(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `NoControl`, `Nombre`, `Apellido`, `Grupo`, `Correo`) VALUES
(5, 20140357, 'Jorge Alejandro', ' Garcia Facio', '  6-TIC-A', ' a20140357@utem.edu.mx'),
(6, 20140058, 'Miguel Angel', ' Vazquez Delgado', ' 6-TIC-A', ' a20140058@utem.edu.mx'),
(7, 20140327, 'Andros Adolfo', ' Sahagun Capetillo', ' 6-TIC-A', ' a20140327@utem.edu.mx'),
(8, 20140125, 'Nestor Ali', ' Lobato Hernandez', ' 6-TIC-A', ' a20140125@utem.edu.mx'),
(10, 20140149, 'Luis Fernando', '   Zarate Molina', '   6-TIC-A', '   a20140149@utem.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE IF NOT EXISTS `prestamos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NoControl` int(10) NOT NULL,
  `NombreProducto` varchar(50) NOT NULL,
  `FechaPrestamo` date NOT NULL,
  `FechaEntrega` date NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Comentatios` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NoInventario` varchar(15) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Modelo` varchar(10) NOT NULL,
  `Ubicacion` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `NoInventario`, `Nombre`, `Descripcion`, `Modelo`, `Ubicacion`) VALUES
(12, 'Compu1', 'LANIX Neuron R', 'Laptop 4GB RAM 320 DD', '2012', '4D'),
(17, 'Compu2', 'OPTIPLEX 3020', 'CPU 8Gb RAM 1Tb DD', '2013', '4D'),
(18, 'Ardu1', 'Arduino shidori', 'Arduino 24 pines', '2012', '4C'),
(19, 'Ardu2', 'Arduino', 'ta shido :V', '2011', '4D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `passw` varchar(20) NOT NULL,
  `passwadmin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `passw`, `passwadmin`) VALUES
('Admin', '', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
