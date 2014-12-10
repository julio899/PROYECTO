-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2014 a las 22:25:05
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

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_inscripcion` datetime NOT NULL,
  `fecha_nacimiento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

--
-- Truncar tablas antes de insertar `alumnos`
--

TRUNCATE TABLE `alumnos`;
--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `cedula`, `edad`, `alergico`, `descripcion_alergia`, `peso`, `altura`, `ult_visita_psicologo`, `id_seccion`, `id_representante`, `fecha_inscripcion`, `fecha_nacimiento`) VALUES
(1, 'RAMONCITO', 'HERNANDEZ', 'V-15.457.324', 31, 'S', 'caraot', '40', '1.70m', '01-05-2014', 9, 2, '2014-11-05 16:28:04', ''),
(2, 'arturito', 'Gomez', 'V-29.000.000', 8, 'S', '', '26', '1.5', '', 9, 3, '2014-11-27 15:45:26', ''),
(5, 'Pedrito', 'Martines', 'V-', 10, 'N', '', '', '', '', 9, 6, '2014-11-27 15:54:52', ''),
(6, 'lunecito', 'lunecito', 'V-101', 30, 'S', 'a las caraotas', '80', '1.70 M', '05-14-2014', 14, 7, '2014-12-04 10:25:48', ''),
(7, 'Antono', 'Castro', 'V-29.000.002', 30, 'S', 'a cuba', '85', '1.70', '', 14, 8, '2014-12-09 15:53:50', ''),
(8, 'Aristobulito', 'Isturiz', 'V-28.014.014', 12, 'S', 'a las avispas, llamar al padre', '50', '1.50', '10-11-2014', 9, 9, '2014-12-09 16:20:30', ''),
(9, 'Juevecito', 'semana', 'V-3034567', 15, 'N', '', '', '', '', 6, 10, '2014-12-08 18:45:33', ''),
(10, 'viernecito', 'Decembrino', '', 10, 'S', '', '60', '1.20', '', 16, 11, '2014-12-08 18:47:23', ''),
(11, 'rubencito', 'blades', 'V-27712459', 18, 'N', '', '67', '1.68', '', 16, 12, '2014-12-08 20:17:39', '2005-12-08'),
(12, 'Antonio', 'Ceballos', 'V-30000000', 14, 'N', '', '55', '1.40', '', 16, 13, '2014-12-08 20:22:04', '2000-12-15'),
(13, 'Joseito', 'Ceballos', 'V-299878956', 22, 'S', '', '80', '1.65', '', 16, 14, '2014-12-08 20:26:47', '1990-05-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `valido` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` text COLLATE utf8_spanish_ci NOT NULL,
  `afectado` text COLLATE utf8_spanish_ci NOT NULL,
  `cambio` text COLLATE utf8_spanish_ci NOT NULL,
  `describe` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=60 ;

--
-- Truncar tablas antes de insertar `auditoria`
--

TRUNCATE TABLE `auditoria`;
--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `usuario`, `password`, `ip`, `valido`, `fecha`, `accion`, `afectado`, `cambio`, `describe`) VALUES
(1, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:11:49', 'SALIDA', '', '', ''),
(2, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 18:11:51', 'INGRESO', '', '', ''),
(3, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 18:12:06', 'CAMBIO DE SECCION', '8', '9', ''),
(4, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 18:12:45', 'SALIDA', '', '', ''),
(5, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:12:52', 'INGRESO', '', '', ''),
(6, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', 'TRUE', '2014-12-08 18:14:51', 'Reg. de Nuevo Docente', '', 'multiple', ''),
(7, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:37:33', 'SALIDA', '', '', ''),
(8, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:37:41', 'INGRESO', '', '', ''),
(9, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', 'TRUE', '2014-12-08 18:43:50', 'Reg. Nueva Secci&oacute;n', 'F', '6to - F', ''),
(10, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:44:06', 'SALIDA', '', '', ''),
(11, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 18:44:17', 'INGRESO', '', '', ''),
(12, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', 'TRUE', '2014-12-08 18:45:33', 'Reg. Reprecentante', '10', 'multiple', ''),
(13, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', 'TRUE', '2014-12-08 18:45:33', 'Reg. Alumno', '10', 'multiple', ''),
(14, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', 'TRUE', '2014-12-08 18:47:23', 'Reg. Reprecentante', '11', 'multiple', ''),
(15, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', 'TRUE', '2014-12-08 18:47:23', 'Reg. Alumno', '11', 'multiple', ''),
(16, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', 'TRUE', '2014-12-08 18:48:10', 'Actualizacion de Datos', '10', 'mixto', ''),
(17, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 18:48:21', 'SALIDA', '', '', ''),
(18, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 18:48:37', 'INGRESO', '', '', ''),
(19, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 19:00:04', 'SALIDA', '', '', ''),
(20, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 19:01:34', 'INGRESO', '', '', ''),
(21, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 19:02:28', 'CAMBIO DE SECCION', '2', '9', ''),
(22, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 19:02:37', 'CAMBIO DE SECCION', '1', '9', ''),
(23, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 19:04:00', 'Actualizacion de Datos', '7', 'mixto', ''),
(24, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 19:09:39', 'SALIDA', '', '', ''),
(25, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 19:09:50', 'INGRESO', '', '', ''),
(26, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 19:23:57', 'SALIDA', '', '', ''),
(27, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 19:24:09', 'INGRESO', '', '', ''),
(28, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 19:24:21', 'SALIDA', '', '', ''),
(29, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 19:24:23', 'INGRESO', '', '', ''),
(30, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 20:17:39', 'Reg. Reprecentante', '12', 'multiple', ''),
(31, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', 'TRUE', '2014-12-08 20:17:39', 'Reg. Alumno', '12', 'multiple', ''),
(32, 'jaivelis', 'fde9e63dbb42cf0890b9f666b71d72bc', '192.168.1.106', '1', '2014-12-08 20:19:32', 'SALIDA', '', '', ''),
(33, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:19:40', 'INGRESO', '', '', ''),
(34, '', '', '192.168.1.106', 'TRUE', '2014-12-08 20:22:04', 'Reg. Reprecentante', '13', 'multiple', ''),
(35, '', '', '192.168.1.106', 'TRUE', '2014-12-08 20:22:04', 'Reg. Alumno', '13', 'multiple', ''),
(36, '', '', '192.168.1.106', '1', '2014-12-08 20:22:04', 'SALIDA', '', '', ''),
(37, '', '', '192.168.1.106', '1', '2014-12-08 20:22:09', 'SALIDA', '', '', ''),
(38, '', '', '192.168.1.106', '1', '2014-12-08 20:22:11', 'SALIDA', '', '', ''),
(39, '', '', '192.168.1.106', '1', '2014-12-08 20:24:23', 'SALIDA', '', '', ''),
(40, '', '', '192.168.1.106', '0', '2014-12-08 20:24:31', 'INGRESO', '', '', ''),
(41, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:24:38', 'INGRESO', '', '', ''),
(42, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', 'TRUE', '2014-12-08 20:26:47', 'Reg. Reprecentante', '14', 'multiple', ''),
(43, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', 'TRUE', '2014-12-08 20:26:47', 'Reg. Alumno', '14', 'multiple', ''),
(44, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:28:09', 'SALIDA', '', '', ''),
(45, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 20:28:21', 'INGRESO', '', '', ''),
(46, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 20:44:48', 'SALIDA', '', '', ''),
(47, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:45:01', 'INGRESO', '', '', ''),
(48, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:46:19', 'SALIDA', '', '', ''),
(49, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 20:53:28', 'INGRESO', '', '', ''),
(50, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', 'TRUE', '2014-12-08 20:58:44', 'Reg. Nueva Secci&oacute;n', 'G', '5to - G', ''),
(51, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 21:11:13', 'SALIDA', '', '', ''),
(52, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 21:11:16', 'INGRESO', '', '', ''),
(53, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 21:12:24', 'SALIDA', '', '', ''),
(54, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 21:12:27', 'INGRESO', '', '', ''),
(55, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 21:12:32', 'SALIDA', '', '', ''),
(56, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 21:12:34', 'INGRESO', '', '', ''),
(57, 'admin', '31adb5784cd04b2ce8b45c1661b511ad', '192.168.1.106', '1', '2014-12-08 21:12:37', 'SALIDA', '', '', ''),
(58, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 21:12:39', 'INGRESO', '', '', ''),
(59, 'kelvin', '569417cce1278574c58c6a4a0cd071e6', '192.168.1.106', '1', '2014-12-08 21:13:12', 'SALIDA', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance_integral`
--

DROP TABLE IF EXISTS `avance_integral`;
CREATE TABLE IF NOT EXISTS `avance_integral` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(10) NOT NULL,
  `enlace_docente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cognitiva` text COLLATE utf8_spanish_ci NOT NULL,
  `lenguaje` text COLLATE utf8_spanish_ci NOT NULL,
  `social` text COLLATE utf8_spanish_ci NOT NULL,
  `afectiva` text COLLATE utf8_spanish_ci NOT NULL,
  `motora` text COLLATE utf8_spanish_ci NOT NULL,
  `sexual` text COLLATE utf8_spanish_ci NOT NULL,
  `fisica` text COLLATE utf8_spanish_ci NOT NULL,
  `moral` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Truncar tablas antes de insertar `avance_integral`
--

TRUNCATE TABLE `avance_integral`;
--
-- Volcado de datos para la tabla `avance_integral`
--

INSERT INTO `avance_integral` (`id`, `id_alumno`, `enlace_docente`, `cognitiva`, `lenguaje`, `social`, `afectiva`, `motora`, `sexual`, `fisica`, `moral`, `fecha`) VALUES
(6, 6, '3630', '', '', '', '', '', '', '', '', '2014-12-05 21:37:18'),
(7, 6, '3630', '', '', '', '', '', '', '', '', '2014-12-05 23:32:57'),
(8, 6, '3630', 'Cognitiva', 'Lenguaje', 'Social', 'Afectiva', 'Motora', 'sexual', 'Fisica', 'Moral', '2014-12-06 15:41:50'),
(9, 6, '3630', '', '', '', '', '', 'prueba de campos', '', '', '2014-12-06 15:44:02'),
(10, 6, '3630', '', 'Aprendió Nuevas palabras', '', '', '', '', '', '', '2014-12-08 07:48:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_enlace` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

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
(7, 'Jaivelis', 'Villegas', '0426-3215454', 'jaivelis@vi.es', '3630'),
(9, 'kelvin', 'xxxx', '1111111', 'no@tiene.com', '4c26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representanes`
--

DROP TABLE IF EXISTS `representanes`;
CREATE TABLE IF NOT EXISTS `representanes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Truncar tablas antes de insertar `representanes`
--

TRUNCATE TABLE `representanes`;
--
-- Volcado de datos para la tabla `representanes`
--

INSERT INTO `representanes` (`id`, `nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `direccion`, `edad`) VALUES
(2, 'RAMONS', 'HERNANDEZ', 'V-19.000.000', '0414-14512355', 'R@gmail.com', 'calle', 25),
(3, 'arturo', 'gomez', 'V-14.000.001', '0414-4144144', '', '', 32),
(5, 'Estevan', 'Orocopei', 'V-123441', '', '', '', 48),
(6, 'Pedro', 'Martinez', 'V-4651752', '', '', '', 0),
(7, 'lunes', 'lunes', 'V-100', '0426-2626261', 'Lunes@semana.com', 'calle la semana cruce con los meces,\nurbanización los años', 50),
(8, 'Cipriano', 'Castros', 'V-1.548', '0416-1234567', 'cuba@habana.com', 'la Isla de Cuba', 70),
(9, 'Aristobulo', 'Isturiz', 'V-41741471', '0412-1212121', '', '', 60),
(10, 'jueves', 'Semana', 'V-1.000.000', '', '', '', 49),
(11, 'Viernes', 'Decembrinoo', 'V-2000000', '', '', '', 40),
(12, 'Ruben', 'Blades', 'V-12341231', '', 'ruben@hotmail.com', 'calle los chaguaramos nro 40 los cocos maracay esatado aragua', 35),
(13, 'Jose', 'Ceballos', 'V-4657891', '', '', 'Edificio los mangos piso 4 apartamento 17', 32),
(14, 'Jose', 'Ceballos', 'V-14465397', '0243-321414', '', '', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `grado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `year` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `cap_alumnos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

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
(15, '3RO', 'B', '', '10', 'M', 'cae8'),
(16, '6to', 'F', '', '30', 'M', '4c26'),
(17, '5to', 'G', '', '30', 'T', '4c26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `secciones` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_enlace` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id_enlace` (`id_enlace`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

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
(12, 'jaivelis', '3630147a213aba59fbfc30119373898b', 'Jaivelis', 'Villegas', 'D', '', '', '3630'),
(13, 'juanp', '4360ee92f6cfb6581697788bdcfb6756', 'juan', 'perez', 'D', '', '', '4360'),
(14, 'kelvin', '4c26c1128da7ca8b80983f38dc068681', 'kelvin', 'xxxx', 'D', '', '', '4c26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
