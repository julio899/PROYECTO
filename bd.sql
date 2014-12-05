-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 16:46:28
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
`id` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(5) NOT NULL,
  `alergico` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_alergia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `altura` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ult_visita_psicologo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `fecha_inscripcion` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `alumnos`
--

TRUNCATE TABLE `alumnos`;
--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `cedula`, `edad`, `alergico`, `descripcion_alergia`, `peso`, `altura`, `ult_visita_psicologo`, `id_seccion`, `id_representante`, `fecha_inscripcion`) VALUES
(1, 'RAMONCITO', 'HERNANDEZ', 'V-15.457.324', 31, 'S', 'caraot', '40', '1.70m', '01-05-2014', 5, 2, '2014-11-05 16:28:04'),
(2, 'arturito', 'Gomez', 'V-29.000.000', 8, 'N', '', '26', '1.5', '', 0, 3, '2014-11-27 15:45:26'),
(4, 'Estevita', 'Orocopei', 'V-', 0, 'N', '', '', '', '', 0, 5, '2014-11-27 15:52:31'),
(5, 'Pedrito', 'Martines', 'V-', 0, 'N', '', '', '', '', 0, 6, '2014-11-27 15:54:52'),
(6, 'lunecito', 'lunecito', 'V-101', 30, 'N', '', '80', '1.70 M', '', 14, 7, '2014-12-04 10:25:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
`id` int(10) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `valido` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `auditoria`
--

TRUNCATE TABLE `auditoria`;
--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `usuario`, `password`, `ip`, `valido`, `fecha`) VALUES
(171, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 16:45:10'),
(170, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 13:35:07'),
(169, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 12:20:44'),
(13, '', '', '127.0.0.1', '0', '2014-11-04 18:19:01'),
(14, '', '', '127.0.0.1', '0', '2014-11-04 18:19:05'),
(15, '', '', '127.0.0.1', '0', '2014-11-04 18:19:18'),
(168, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:41:35'),
(167, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:35:49'),
(18, '', '', '127.0.0.1', '0', '2014-11-04 18:30:04'),
(19, '', '', '127.0.0.1', '0', '2014-11-04 18:30:12'),
(166, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:17:28'),
(165, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:12:40'),
(22, '', '', '127.0.0.1', '0', '2014-11-04 18:48:47'),
(164, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:12:04'),
(163, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 11:11:59'),
(162, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 11:11:48'),
(161, 'julio899', '84099f59402528e431a11c7fd7e64f28', '127.0.0.1', '1', '2014-12-05 11:10:37'),
(160, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 11:08:28'),
(159, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 11:05:43'),
(158, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:03:48'),
(157, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 11:02:16'),
(156, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 11:01:03'),
(32, '', '', '127.0.0.1', '0', '2014-11-04 20:40:48'),
(155, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 10:59:16'),
(154, '', '', '127.0.0.1', '0', '2014-12-05 10:59:04'),
(153, 'julio899', '84099f59402528e431a11c7fd7e64f28', '127.0.0.1', '1', '2014-12-05 10:50:48'),
(152, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 10:34:35'),
(151, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 10:14:51'),
(150, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-12-05 09:45:54'),
(149, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-05 08:14:55'),
(40, '', '', '127.0.0.1', '0', '2014-11-04 22:23:01'),
(41, '', '', '127.0.0.1', '0', '2014-11-04 22:23:03'),
(42, '', '', '127.0.0.1', '0', '2014-11-04 22:23:04'),
(43, '', '', '127.0.0.1', '0', '2014-11-04 22:23:04'),
(44, '', '', '127.0.0.1', '0', '2014-11-04 22:23:05'),
(45, '', '', '127.0.0.1', '0', '2014-11-04 22:23:06'),
(46, '', '', '127.0.0.1', '0', '2014-11-04 22:23:08'),
(47, '', '', '127.0.0.1', '0', '2014-11-04 22:23:12'),
(48, '', '', '127.0.0.1', '0', '2014-11-04 22:25:22'),
(49, '', '', '127.0.0.1', '0', '2014-11-04 22:25:25'),
(50, '', '', '127.0.0.1', '0', '2014-11-04 22:25:26'),
(51, '', '', '127.0.0.1', '0', '2014-11-04 22:25:37'),
(52, '', '', '127.0.0.1', '0', '2014-11-04 22:25:47'),
(148, '', '', '127.0.0.1', '0', '2014-12-05 08:14:45'),
(147, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.3.116', '1', '2014-12-04 15:49:35'),
(146, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.3.116', '1', '2014-12-04 11:27:43'),
(145, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.3.116', '1', '2014-12-04 08:23:18'),
(144, 'julio899', '84099f59402528e431a11c7fd7e64f28', '192.168.3.116', '1', '2014-12-04 08:23:01'),
(60, 'rafael', 'b36c2e612e8bcec7a03a73b0387b4408', '127.0.0.1', '1', '2014-11-04 22:57:48'),
(61, 'rafael', 'b36c2e612e8bcec7a03a73b0387b4408', '127.0.0.1', '1', '2014-11-04 22:58:06'),
(62, 'rafael', 'b36c2e612e8bcec7a03a73b0387b4408', '127.0.0.1', '1', '2014-11-04 23:00:17'),
(63, '', '', '127.0.0.1', '0', '2014-11-04 23:01:14'),
(143, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.3.116', '1', '2014-12-04 08:22:45'),
(142, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '127.0.0.1', '1', '2014-12-03 15:36:30'),
(141, 'julio899', '84099f59402528e431a11c7fd7e64f28', '127.0.0.1', '1', '2014-12-03 15:36:02'),
(140, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 16:31:14'),
(139, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 16:30:51'),
(138, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 16:29:28'),
(137, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 16:02:16'),
(136, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-27 15:58:44'),
(72, 'rafael', 'b36c2e612e8bcec7a03a73b0387b4408', '127.0.0.1', '1', '2014-11-04 23:24:34'),
(73, '', '', '127.0.0.1', '0', '2014-11-04 23:25:44'),
(135, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-27 15:55:25'),
(134, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 15:47:46'),
(76, 'rafael', 'b36c2e612e8bcec7a03a73b0387b4408', '127.0.0.1', '1', '2014-11-04 23:28:44'),
(77, '', '', '127.0.0.1', '0', '2014-11-05 00:37:26'),
(133, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 15:45:31'),
(79, '', '', '127.0.0.1', '0', '2014-11-05 08:50:39'),
(132, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:58:52'),
(131, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:54:03'),
(130, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:53:59'),
(83, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 08:59:52'),
(84, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:01:28'),
(85, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:16:53'),
(86, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:20:53'),
(87, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:20:55'),
(88, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:20:59'),
(89, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:21:23'),
(90, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:22:40'),
(91, 'mari', '1d9aa55e3594eec1c48f8c0e067499e8', '127.0.0.1', '1', '2014-11-05 09:23:08'),
(129, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:51:08'),
(128, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:49:59'),
(127, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-27 14:49:34'),
(126, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-27 14:40:56'),
(96, '', '', '127.0.0.1', '0', '2014-11-06 09:31:18'),
(97, '', '', '127.0.0.1', '0', '2014-11-06 09:31:35'),
(125, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 15:50:40'),
(124, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 15:48:59'),
(123, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 14:59:51'),
(122, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 14:44:26'),
(121, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 14:32:21'),
(120, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 13:23:17'),
(119, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 12:32:35'),
(118, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 12:29:14'),
(117, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 12:29:05'),
(116, 'hugo', 'be68d1fda9524576edd7314eb9aa6da3', '127.0.0.1', '1', '2014-11-11 12:27:44'),
(115, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 11:55:10'),
(114, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-11 09:01:29'),
(110, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-07 12:05:09'),
(111, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-07 12:06:30'),
(112, '', '', '127.0.0.1', '0', '2014-11-07 12:06:37'),
(113, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '127.0.0.1', '1', '2014-11-07 12:13:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance_integral`
--

CREATE TABLE IF NOT EXISTS `avance_integral` (
`id` int(10) NOT NULL,
  `id_alumno` int(10) NOT NULL,
  `enlace_docente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cognitiva` text COLLATE utf8_spanish_ci NOT NULL,
  `lenguage` text COLLATE utf8_spanish_ci NOT NULL,
  `social` text COLLATE utf8_spanish_ci NOT NULL,
  `afectiva` text COLLATE utf8_spanish_ci NOT NULL,
  `motora` text COLLATE utf8_spanish_ci NOT NULL,
  `sexual` text COLLATE utf8_spanish_ci NOT NULL,
  `fisica` text COLLATE utf8_spanish_ci NOT NULL,
  `moral` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `avance_integral`
--

TRUNCATE TABLE `avance_integral`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_enlace` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `docentes`
--

TRUNCATE TABLE `docentes`;
--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `id_enlace`) VALUES
(1, 'Maritza Josefina', 'Campos de Blanco', '0426-6348190', 'Maritz@campos.com', '33e0'),
(5, 'Hugo Federico', 'Aponte Rondon', '0412-4123865', 'HugoAR@hotmail.com', '33e1'),
(4, 'Paul Hernesto', 'Figueroa Romero', '0424-14512355', 'PaulH@gmail.com', 'cae8'),
(6, 'Maria', 'Rodriguez', '0243-2715020', '', 'e50d'),
(7, 'Jaivelis', 'Villegas', '0426-3215454', 'jaivelis@vi.es', '3630');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representanes`
--

CREATE TABLE IF NOT EXISTS `representanes` (
`id` int(5) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `representanes`
--

TRUNCATE TABLE `representanes`;
--
-- Volcado de datos para la tabla `representanes`
--

INSERT INTO `representanes` (`id`, `nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `direccion`, `edad`) VALUES
(2, 'RAMON', 'HERNANDEZs', 'V-19.000.000', '0414-14512355', 'R@gmail.com', 'calle', 25),
(3, 'arturo', 'gomez', 'V-14.000.001', '', '', '', 32),
(5, 'Estevan', 'Orocopei', 'V-123441', '', '', '', 48),
(6, 'Pedro', 'Martinez', 'V-4651752', '', '', '', 0),
(7, 'lunes', 'lunes', 'V-100', '', '', '', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
`id` int(5) NOT NULL,
  `grado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `year` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `cap_alumnos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `secciones`
--

TRUNCATE TABLE `secciones`;
--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `grado`, `seccion`, `year`, `cap_alumnos`, `turno`, `id_docente`) VALUES
(6, '1ro', 'A', '', '10', 'M', '33e0'),
(11, '1ro', 'B', '', '10', 'M', '33e1'),
(8, '1ro', 'C', '', '20', 'M', 'e50d'),
(9, '2do', 'A', '', '10', 'M', '3630'),
(13, '2do', 'B', '', '20', 'M', '33e1'),
(12, '3RO', 'A', '', '10', 'M', 'cae8'),
(14, '4to', 'A', '', '10', 'T', '3630'),
(15, '3RO', 'B', '', '10', 'M', 'cae8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(10) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `secciones` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_enlace` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `tipo`, `secciones`, `turno`, `id_enlace`) VALUES
(1, 'julio899', 'eabacb751d027c3f9da9570fc9bcd135', '', '', 'A', '', '', ''),
(2, 'josev', '1d2f90da4dc9ba77f98d9734f1d8ce8f', 'jose', 'dionicio', 'D', '', '', '1d2f'),
(3, 'maris', 'e6a12d5ec27e4f37a914d8c0b5ebe24a', 'marys', 'ochoa', 'D', '', '', 'e6a1'),
(4, 'kellys', '97907cf7421b5746cb08b1a7dfdba7c7', 'Kelys', 'perez', 'D', '', '', '9790'),
(5, 'rafael', 'fa9f456b0ba139786aa083f8fab66621', 'rafael', 'caldera', 'D', '', '', 'fa9f'),
(6, 'mari', '479820dab360c749bbf05d9e98b24a2d', 'mari', 'carmen', 'D', '', '', '4798'),
(7, 'hugo', '33e0e35510bf2d0a02313b631a57d7fb', 'Hugo', 'Friaz', 'D', '', '', '33e0'),
(8, 'hugo2', 'c0324a20d2586e063d1ae8930e1609c8', 'Hugo', 'Friaz', 'D', '', '', 'c032'),
(9, 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Administrador', 'ADMIN', 'A', '', '', 'f6fd'),
(10, 'paul', 'cae8f2d6c83b6e03bdd0bd5b3ad66a40', 'Paul Hernesto', 'Figueroa Romero', 'D', '', '', 'cae8'),
(11, 'mariar', 'e50d9e9230021698fa7a4d82e1b86094', 'Maria', 'Rodriguez', 'D', '', '', 'e50d'),
(12, 'jaivelis', '3630147a213aba59fbfc30119373898b', 'Jaivelis', 'Villegas', 'D', '', '', '3630');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avance_integral`
--
ALTER TABLE `avance_integral`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `representanes`
--
ALTER TABLE `representanes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `id_enlace` (`id_enlace`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT de la tabla `avance_integral`
--
ALTER TABLE `avance_integral`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `representanes`
--
ALTER TABLE `representanes`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
