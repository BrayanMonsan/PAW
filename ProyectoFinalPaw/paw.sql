-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2023 at 03:56 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw`
--

-- --------------------------------------------------------

--
-- Table structure for table `rusuarios`
--

CREATE TABLE `rusuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(120) NOT NULL,
  `Correo` varchar(120) NOT NULL,
  `Clave` varchar(120) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Municipio` varchar(120) NOT NULL,
  `Colonia` varchar(120) NOT NULL,
  `CodigoPostal` int(10) NOT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rusuarios`
--

INSERT INTO `rusuarios` (`Id`, `Nombre`, `Correo`, `Clave`, `Telefono`, `Municipio`, `Colonia`, `CodigoPostal`, `Activo`) VALUES
(1, 'Brayan', 'brayan@gmail.com', '12345', 965127278, 'Tuxtla', 'Miravalle', 112233, 123);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(120) NOT NULL,
  `Correo` varchar(120) NOT NULL,
  `Clave` varchar(120) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Municipio` varchar(120) NOT NULL,
  `Colonia` varchar(120) NOT NULL,
  `CodigoPostal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Correo`, `Clave`, `Telefono`, `Municipio`, `Colonia`, `CodigoPostal`) VALUES
(1, 'Brayan', 'brayan@gmail.com', '12345', 965127278, 'Tuxtla', 'Miravalle', 112233);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_administradores`
--

CREATE TABLE `usuarios_administradores` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `fecha_creación` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios_administradores`
--

INSERT INTO `usuarios_administradores` (`Id`, `Nombre`, `Correo`, `contraseña`, `fecha_creación`) VALUES
(1, 'Brayan', 'brayan@gmail.com', '12345', '2023-05-19 15:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rusuarios`
--
ALTER TABLE `rusuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rusuarios`
--
ALTER TABLE `rusuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
