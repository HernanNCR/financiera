-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2023 at 04:55 AM
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
-- Database: `financiera1`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonos`
--

CREATE TABLE `abonos` (
  `id` int(11) NOT NULL,
  `rfc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidadAbono` int(30) NOT NULL,
  `pago` int(50) NOT NULL,
  `saldoActualizado` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `abonos`
--

INSERT INTO `abonos` (`id`, `rfc`, `fecha`, `cantidadAbono`, `pago`, `saldoActualizado`) VALUES
(1, 'ASS384068', '2023-10-31', 12, 111, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `rfc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`rfc`, `nombre`, `telefono`) VALUES
('ASS384068', 'hernan cancino', '9612384068'),
('terrerrew', 'dsdssd', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `prestamo`
--

CREATE TABLE `prestamo` (
  `rfc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `prestamo`
--

INSERT INTO `prestamo` (`rfc`, `fecha`, `cantidad`) VALUES
('ASS384068', '2023-10-31', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `tipopago`
--

CREATE TABLE `tipopago` (
  `total` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `interes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tipopago`
--

INSERT INTO `tipopago` (`total`, `interes`, `pago`) VALUES
('11', '0.1', '0.55'),
('17250', '0.15', '1725'),
('17250', '0.15', '1725');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonos`
--
ALTER TABLE `abonos`
  ADD KEY `rfc` (`rfc`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD UNIQUE KEY `rfc` (`rfc`);

--
-- Indexes for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD UNIQUE KEY `rfc` (`rfc`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `prestamo` (`rfc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `clientes` (`rfc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
