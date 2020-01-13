-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-12-2019 a las 16:00:20
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdripley`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `hoteles` (
  `id` varchar(8) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `imagen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `hoteles` (`id`, `nombre`,`imagen`) VALUES
('65MU6305', '1 cama King,Habitación con balcón,Escritorio/Mesa de desayuno,Coffee Kit,Caja de Seguridad,Tina,Secadora de pelo,WIFI gratis', 'TVS01.JPG'),
('SY243424', '2 Camas Full-Size,Habitación con balcón,Escritorio/Mesa de Desayuno,Coffee Kit,Caja de Seguridad,Tina,Secadora de pelo,Wifi gratis', 'CDSY01.JPG'),
('R3HG1613', '2 Camas Full-Size,Habitación con balcón,Escritorio/Mesa de Desayuno,Coffee Kit,Caja de Seguridad,Tina,Secadora de pelo,Wifi gratis','CH02.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
