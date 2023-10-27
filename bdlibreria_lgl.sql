-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 07:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlibreria_lgl`
--

-- --------------------------------------------------------

--
-- Table structure for table `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `id` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `nombre`, `correo`, `usuario`, `contrasena`) VALUES
(3, 'nairobi keren', 'nai@gmail.com', 'nai', '202cb962ac59075b964b07152d234b70'),
(4, 'Beth', 'lizbethgala02@gmail.com', 'liz', 'd9b1d7db4cd6e70935368a1efb10e377'),
(8, 'Valeria', 'vl2005@gmail.com', 'Val1507', 'cb906433e1289aa1c251dc5057746a88'),
(14, 'Lizbeth', 'lizbethgala02@gmail.com', 'lizgatos', '202cb962ac59075b964b07152d234b70'),
(15, 'val', 'iwgdkad', 'Val1507', 'cb906433e1289aa1c251dc5057746a88'),
(16, 'Eliseo', 'el@2534.gamil', 'enanito', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `renta`
--

CREATE TABLE `renta` (
  `id` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `num_factura` int(50) NOT NULL,
  `num_telefono` bigint(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tiempo_renta` varchar(50) NOT NULL,
  `pago` decimal(10,2) NOT NULL,
  `num_cuenta` int(11) NOT NULL,
  `tipo_tarjeta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renta`
--

INSERT INTO `renta` (`id`, `id_renta`, `id_libro`, `id_usuario`, `id_empleado`, `num_factura`, `num_telefono`, `direccion`, `tiempo_renta`, `pago`, `num_cuenta`, `tipo_tarjeta`) VALUES
(7, 1, 1, 1, 1, 2671, 1111111111, 'hidalgo del parral', '4 meses', 350.00, 39424, 'debito'),
(8, 23, 50, 56, 73, 26374, 6567849365, 'hidalgo del parral', '3 meses', 350.00, 37439, 'credito');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
