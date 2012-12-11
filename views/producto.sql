-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2012 a las 21:31:13
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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `categoria` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,0) NOT NULL DEFAULT '0',
  `foto` varchar(254) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `categoria`, `descripcion`, `precio`, `foto`, `fecha_registro`) VALUES
(1, 'Mod. PB01', 1, 'Pastel 4 niveles estilo campestre', 1000, '../Imagenes/1/Mod. PB01.jpg', '2012-12-12 01:38:30'),
(2, 'Mod. PB02', 1, 'Pastel 2 niveles sencillo con flores', 500, '../Imagenes/1/Mod. PB02.jpg', '2012-12-12 01:39:34'),
(3, 'Mod. PB03', 1, 'Pastel 3 niveles a rayas con flores naturales', 800, '../Imagenes/1/Mod. PB03.jpg', '2012-12-12 01:40:12'),
(4, 'Mod. PB04', 1, 'Pastel blanco de 2 niveles sencillo con flores', 500, '../Imagenes/1/Mod. PB04.jpg', '2012-12-12 01:46:16'),
(5, 'Mod. PB05', 1, 'Pastel blanco de 5 pisos con flores naturales', 1500, '../Imagenes/1/Mod. PB05.jpg', '2012-12-12 01:47:24'),
(6, 'Mod. PB06', 1, 'Pastel de 4 pisos con alcatraces', 1000, '../Imagenes/1/Mod. PB06.jpg', '2012-12-12 01:49:46'),
(7, 'Mod. PB07', 1, 'Pastel de 3 pisos con decoracion de cristal y flores', 1000, '../Imagenes/1/Mod. PB07.jpg', '2012-12-12 01:55:02'),
(8, 'Mod. PB08', 1, 'Pastel imperial de 6 pisos', 1200, '../Imagenes/1/Mod. PB08.jpg', '2012-12-12 01:56:05'),
(9, 'Mod. PB09', 1, 'Pastel 2 pisos sencillo con flores', 500, '../Imagenes/1/Mod. PB09.jpg', '2012-12-12 01:57:27'),
(10, 'Mod. PB10', 1, 'Pastel de 2 pisos sencillo con flores naturales', 500, '../Imagenes/1/Mod. PB10.jpg', '2012-12-12 01:58:03'),
(11, 'Mod. PC01', 2, 'Pastel de chocolate con fresas', 200, '../Imagenes/2/Mod. PC01.jpg', '2012-12-12 02:22:34'),
(12, 'Mod. PC02', 2, 'Pastel sabor brownie con queso', 250, '../Imagenes/2/Mod. PC02.jpg', '2012-12-12 02:36:03'),
(13, 'Mod. PC03', 2, 'Pastel sabor coco', 200, '../Imagenes/2/Mod. PC03.jpg', '2012-12-12 02:36:55'),
(14, 'Mod. PC04', 2, 'Pastel de fresa', 220, '../Imagenes/2/Mod. PC04.jpg', '2012-12-12 02:37:33'),
(15, 'Mod. PC05', 2, 'Pastel sabor chocolate con frambuesas encima', 230, '../Imagenes/2/Mod. PC05.jpg', '2012-12-12 02:38:37'),
(16, 'Mod. PC06', 2, 'Pastel de durazno con un toque de canela', 210, '../Imagenes/2/Mod. PC06.jpg', '2012-12-12 02:54:20'),
(17, 'Mod. PC07', 2, 'Pastel sabor Milkyway', 250, '../Imagenes/2/Mod. PC07.jpg', '2012-12-12 02:56:47'),
(18, 'Mod. PC08', 2, 'Pastel sabor piña colada', 210, '../Imagenes/2/Mod. PC08.jpg', '2012-12-12 03:01:23'),
(19, 'Mod. PC09', 2, 'Pastel sabor pinguino', 240, '../Imagenes/2/Mod. PC09.jpg', '2012-12-12 03:02:45'),
(20, 'Mod. PC10', 2, 'Rosca sabor moka', 250, '../Imagenes/2/Mod. PC10.jpg', '2012-12-12 03:03:31'),
(21, 'Mod. PF01', 3, 'Pastel de vainilla con fresas', 200, '../Imagenes/3/Mod. PF01.jpg', '2012-12-12 03:05:05'),
(22, 'Mod. PF02', 3, 'Pastel de manzana', 200, '../Imagenes/3/Mod. PF02.jpg', '2012-12-12 03:07:00'),
(23, 'Mod. PF03', 3, 'Pastel de queso y arandanos', 220, '../Imagenes/3/Mod. PF03.jpg', '2012-12-12 03:07:43'),
(24, 'Mod. PF04', 3, 'Pastel de fresas con crema', 220, '../Imagenes/3/Mod. PF04.jpg', '2012-12-12 03:08:45'),
(25, 'Mod. PF05', 3, 'Mini-pastel de queso y zarzamoras', 100, '../Imagenes/3/Mod. PF05.jpg', '2012-12-12 03:09:56'),
(26, 'Mod. PF06', 3, 'Pastel de fresa y mango', 200, '../Imagenes/3/Mod. PF06.jpg', '2012-12-12 03:10:46'),
(27, 'Mod. PF07', 3, 'Pastel de frutos rojos', 220, '../Imagenes/3/Mod. PF07.jpg', '2012-12-12 03:13:10'),
(28, 'Mod. PF08', 3, 'Pastel de frutas tropicales', 220, '../Imagenes/3/Mod. PF08.jpg', '2012-12-12 03:14:25'),
(29, 'Mod. PF09', 3, 'Pastel sabor mango', 200, '../Imagenes/3/Mod. PF09.jpg', '2012-12-12 03:15:45'),
(30, 'Mod. PF10', 3, 'Pastel sabor chocolate con fresas', 230, '../Imagenes/3/Mod. PF10.jpeg', '2012-12-12 03:16:47'),
(31, 'Mod. PI01', 4, 'Pastel de plantas vs zombies de 1 piso', 400, '../Imagenes/4/Mod. PI01.jpg', '2012-12-12 03:18:32'),
(32, 'Mod. PI02', 4, 'Pastel de 2 pisos de barbie', 500, '../Imagenes/4/Mod. PI02.jpg', '2012-12-12 03:25:30'),
(33, 'Mod. PI03', 4, 'Pastel de 2 pisos de Mickey Mouse', 500, '../Imagenes/4/Mod. PI03.jpg', '2012-12-12 03:26:11'),
(34, 'Mod. PI04', 4, 'Pastel de 2 pisos de princesa', 550, '../Imagenes/4/Mod. PI04.jpg', '2012-12-12 03:27:02'),
(35, 'Mod. PI05', 4, 'Pastel con forma de auto azul', 500, '../Imagenes/4/Mod. PI05.jpg', '2012-12-12 03:27:57'),
(36, 'Mod. PI06', 4, 'Pastel de 4 pisos de Minnie Mouse', 700, '../Imagenes/4/Mod. PI06.jpg', '2012-12-12 03:29:19'),
(37, 'Mod. PI07', 4, 'Pastel de nintendo y muñeco de Mario Bross', 600, '../Imagenes/4/Mod. PI07.jpg', '2012-12-12 03:30:32'),
(38, 'Mod. PI08', 4, 'Pastel de mariposa rosa', 300, '../Imagenes/4/Mod. PI08.jpg', '2012-12-12 03:31:03'),
(39, 'Mod. PI09', 4, 'Pastel de 2 pisos de Ben 10', 500, '../Imagenes/4/Mod. PI09.jpg', '2012-12-12 03:31:39'),
(40, 'Mod. PI10', 4, 'Pastel con forma de Play Station3', 600, '../Imagenes/4/Mod. PI10.jpg', '2012-12-12 03:32:48'),
(41, 'Mod. PO01', 10, 'Tronco de navidad', 300, '../Imagenes/10/Mod. PO01.jpg', '2012-12-12 03:40:24'),
(42, 'Mod. PO02', 10, 'Pastel para Baby Shower', 300, '../Imagenes/10/Mod. PO02.jpg', '2012-12-12 03:41:49'),
(43, 'Mod. PO03', 10, 'Pastel para despedida de soltera 2 pisos', 500, '../Imagenes/10/Mod. PO03.jpg', '2012-12-12 03:42:25'),
(44, 'Mod. PO04', 10, 'Pastel con forma de corazon', 250, '../Imagenes/10/Mod. PO04.jpg', '2012-12-12 03:43:39'),
(45, 'Mod. PO05', 10, 'Pastel musical de 2 pisos', 600, '../Imagenes/10/Mod. PO05.jpg', '2012-12-12 03:44:27'),
(46, 'Mod. PO06', 10, 'Pastel de bandera mexicana', 300, '../Imagenes/10/Mod. PO06.JPG', '2012-12-12 03:47:21'),
(47, 'Mod. PO07', 10, 'Pastel para Baby Shower de 2 pisos', 450, '../Imagenes/10/Mod. PO07.JPG', '2012-12-12 03:48:10'),
(48, 'Mod. PO08', 10, 'Pastel para el dia del padre', 300, '../Imagenes/10/Mod. PO08.jpg', '2012-12-12 03:48:39'),
(49, 'Mod. PO09', 10, 'Pastel feliz cumple', 300, '../Imagenes/10/Mod. PO09.jpg', '2012-12-12 03:49:49'),
(50, 'Mod. PO10', 10, 'Pastel de Rolling Stones', 400, '../Imagenes/10/Mod. PO10.jpg', '2012-12-12 03:50:21'),
(51, 'Mod. PX01', 11, 'Pastel carnaval azul y blanco', 1000, '../Imagenes/11/Mod. PX01.jpg', '2012-12-12 03:52:00'),
(52, 'Mod. PX02', 11, 'Pastel fiesta de caramelo 3 pisos', 700, '../Imagenes/11/Mod. PX02.jpg', '2012-12-12 03:52:52'),
(53, 'Mod. PX03', 11, 'Pastel de 5 pisos verde y rosa', 1000, '../Imagenes/11/Mod. PX03.JPG', '2012-12-12 03:53:27'),
(54, 'Mod. PX04', 11, 'Pastel de 2 pisos rosa con flores', 500, '../Imagenes/11/Mod. PX04.jpg', '2012-12-12 03:54:22'),
(55, 'Mod. PX05', 11, 'Pastel de 2 pisos cafe y rosa', 600, '../Imagenes/11/Mod. PX05.jpg', '2012-12-12 03:55:22'),
(56, 'Mod. PX06', 11, 'Pastel de 3 pisos con mariposas azules', 800, '../Imagenes/11/Mod. PX06.jpg', '2012-12-12 03:56:33'),
(57, 'Mod. PX07', 11, 'Pastel de 3 pisos morado con blanco', 700, '../Imagenes/11/Mod. PX07.jpg', '2012-12-12 03:57:16'),
(58, 'Mod. PX08', 11, 'Pastel de 3 pisos rosa con negro', 800, '../Imagenes/11/Mod. PX08.jpg', '2012-12-12 03:59:02'),
(59, 'Mod. PX09', 11, 'Pastel de 3 pisos zebra azul', 700, '../Imagenes/11/Mod. PX09.jpg', '2012-12-12 03:59:38'),
(60, 'Mod. PX10', 11, 'Pastel alegria de 4 pisos', 1000, '../Imagenes/11/Mod. PX10.jpg', '2012-12-12 04:00:17'),
(61, 'Mod. C01', 7, 'Cupcake Chocolate con flores (venta por docena)', 120, '../Imagenes/7/Mod. C01.jpg', '2012-12-12 04:04:36'),
(62, 'Mod. C02', 7, 'Cupcakes dia de las madres (venta por docena)', 130, '../Imagenes/7/Mod. C02.jpg', '2012-12-12 04:05:41'),
(63, 'Mod. C03', 7, 'Cupcakes para fiestas (venta por docena)', 120, '../Imagenes/7/Mod. C03.jpg', '2012-12-12 04:06:43'),
(64, 'Mod. C04', 7, 'Cupcakes Baby Shower', 140, '../Imagenes/7/Mod. C04.jpg', '2012-12-12 04:07:33'),
(65, 'Mod. C05', 7, 'Cupcakes pocoyó', 140, '../Imagenes/7/Mod. C05.jpg', '2012-12-12 04:09:12'),
(66, 'Mod. C06', 7, 'Cupcakes sabor chocolate Hersheys (venta por docena)', 130, '../Imagenes/7/Mod. C06.jpg', '2012-12-12 04:10:06'),
(67, 'Mod. C07', 7, 'Cupcakes deportivos (venta por docena)', 120, '../Imagenes/7/Mod. C07.jpg', '2012-12-12 04:11:03'),
(68, 'Mod. C08', 7, 'Cupcakes Primaverales', 140, '../Imagenes/7/Mod. C08.jpg', '2012-12-12 04:11:42'),
(69, 'Mod. C09', 7, 'Cupcakes Infantiles (venta por docena)', 150, '../Imagenes/7/Mod. C09.jpg', '2012-12-12 04:12:20'),
(70, 'Mod. C10', 7, 'Cupcakes I LOVE YOU', 130, '../Imagenes/7/Mod. C10.jpg', '2012-12-12 04:12:57'),
(71, 'Mod. PA01', 8, 'Mini-pay de queso con fresas', 80, '../Imagenes/8/Mod. PA01.jpg', '2012-12-12 04:14:18'),
(72, 'Mod. PA02', 8, 'Pay sabor naranja', 150, '../Imagenes/8/Mod. PA02.jpg', '2012-12-12 04:15:41'),
(73, 'Mod. PA03', 8, 'Pay sabor chocolate', 160, '../Imagenes/8/Mod. PA03.jpg', '2012-12-12 04:16:11'),
(74, 'Mod. PA04', 8, 'Pay sabor nuez', 170, '../Imagenes/8/Mod. PA04.jpg', '2012-12-12 04:16:40'),
(75, 'Mod. PA05', 8, 'Mini-pay de manzana', 80, '../Imagenes/8/Mod. PA05.jpg', '2012-12-12 04:17:14'),
(76, 'Mod. PA06', 8, 'Pay frutas de verano', 160, '../Imagenes/8/Mod. PA06.jpg', '2012-12-12 04:17:47'),
(77, 'Mod. PA07', 8, 'Pay de zarzamoras', 150, '../Imagenes/8/Mod. PA07.jpg', '2012-12-12 04:18:28'),
(78, 'Mod. PA08', 8, 'Pay sabor piña colada', 150, '../Imagenes/8/Mod. PA08.jpg', '2012-12-12 04:19:08'),
(79, 'Mod. PA09', 8, 'Pay de amareto con galletas oreo', 160, '../Imagenes/8/Mod. PA09.jpg', '2012-12-12 04:20:01'),
(80, 'Mod. PA10', 8, 'Pay sabor limón', 150, '../Imagenes/8/Mod. PA10.jpg', '2012-12-12 04:20:42'),
(81, 'Mod. PA10', 8, 'Pay sabor limón', 150, '../Imagenes/8/Mod. PA10.jpg', '2012-12-12 04:20:42'),
(82, 'Mod. P01', 9, 'Deliciosos roles de canela (venta 1/2 docena)', 30, '../Imagenes/9/Mod. P01.jpg', '2012-12-12 04:21:43'),
(83, 'Mod. P02', 9, 'Galletas rellenas de fresa (venta por docena)', 15, '../Imagenes/9/Mod. P02.jpg', '2012-12-12 04:22:28'),
(84, 'Mod. P03', 9, 'Sabrosos Cuernitos (venta por pieza)', 5, '../Imagenes/9/Mod. P03.jpg', '2012-12-12 04:23:29'),
(85, 'Mod. P04', 9, 'Galletas para Baby Shower (vent por docena)', 20, '../Imagenes/9/Mod. P04.jpg', '2012-12-12 04:24:45'),
(86, 'Mod. P05', 9, 'Conchitas de chocolate (venta por pieza)', 5, '../Imagenes/9/Mod. P05.jpg', '2012-12-12 04:25:22'),
(87, 'Mod. P06', 9, 'Pan integral entero', 20, '../Imagenes/9/Mod. P06.jpg', '2012-12-12 04:25:58'),
(88, 'Mod. P07', 9, 'Donitas glaseadas diferentes sabores (venta por docena)', 30, '../Imagenes/9/Mod. P07.jpg', '2012-12-12 04:26:45'),
(89, 'Mod. P08', 9, 'Galletas de mantequilla rellenas de mermelada de fresa (venta por docena)', 18, '../Imagenes/9/Mod. P08.jpg', '2012-12-12 04:27:37'),
(90, 'Mod. P09', 9, 'Polvorones azucarados (venta por pieza)', 5, '../Imagenes/9/Mod. P09.jpg', '2012-12-12 04:29:15'),
(91, 'Mod. P10', 9, 'Rosca rellena de chocolate', 150, '../Imagenes/9/Mod. P10.jpg', '2012-12-12 04:29:51');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
