-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2012 a las 21:34:09
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `delicias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `tipo`, `descripcion`) VALUES
(1, 'Bodas', 1, 'Pasteles para boda'),
(2, 'Caseros', 1, 'Deliciosos pasteles estilo casero'),
(3, 'Frutales', 1, 'Disfruta tu fruta favorita en un pastel'),
(4, 'Infantiles', 1, 'Un pasteles para niÃ±os y niÃ±as'),
(7, 'Cupcakes', 2, 'Los mejores cupcakes para tu paladar'),
(8, 'Pays', 3, 'Los mejores pays para disfrutar'),
(9, 'Panaderia', 4, 'Productos variados de panaderia'),
(10, 'Ocasion Especial', 1, 'Los mejores pasteles para esa ocasion especial'),
(11, 'XV Anios', 1, 'Los mejores pasteles para tus XV anios');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
