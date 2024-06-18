-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 01:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papelarte`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `producto`, `categoria`, `cantidad`, `precio`, `img`, `marca`, `info`) VALUES
(1, 'Crayones 12 Pz Est', 'Arte', 22, 25, 'fotos/D_NQ_NP_635775-MLM75533312061_042024-W.png', 'Crayola', 'Crayones de 12 Piezas Marca Crayola de tamaño estándar'),
(2, 'TAKIS FUEGO 200g', 'Botana', 12, 19, 'fotos/vtetsemcsjobpxss7vzr.png', 'Barcel', 'Takis Fuego Barcel Cont.200g');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(59) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `password`, `telefono`) VALUES
(1, 'Administrador', 'luis@gmail.com', 'mkmkm', '6331133967'),
(2, 'Administrador', 'luis@gmail.com', '95ed136f1ff343e42d36fba7b010746f', '6331133967'),
(3, 'Jorge', 'jorgevi@hotmail.com', '07997db612a709573b19360a640a6c6b', '6331254849'),
(4, 'Administrador', 'papeleria_mussme@hotmail.com', 'a636a5b400cb797a98ecbf94342addb2', '6333312871'),
(5, 'Administrador', 'papeleria_mussme@hotmail.com', 'a636a5b400cb797a98ecbf94342addb2', '6333312871'),
(6, 'Jorge', 'jorgevi@hotmail.com', 'a5e9b44b95546307abcb6979bf7c4cef', '6331133967'),
(7, 'dw', 'jorgevi2@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(8, 'dw', 'dwdwd@dwpdska', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(9, 'dw', 'dwdwd@dwpdska', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(10, 'dw', 'dwdwd@dwpdska', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(11, 'fesadad', 'dwdwd@dwpdskawdsa', 'a5e9b44b95546307abcb6979bf7c4cef', '44444444'),
(12, 'Jorge', 'luisa@gmail.com', '07997db612a709573b19360a640a6c6b', '6331133967'),
(13, 'dw', 'pap@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(14, 'dw', 'pap@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(15, 'dw', 'luis3@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(16, 'dw', 'luis3@gmail.com', 'a5e9b44b95546307abcb6979bf7c4cef', '44444444'),
(17, 'Administrador', 'luis2@gmail.com', '07997db612a709573b19360a640a6c6b', '6333312871'),
(18, 'dw', 'luis7@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(19, 'dw', 'luis6@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(20, 'dw', 'luis5@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(21, 'dw', 'luis4@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(22, 'dw', 'luis1@gmail.com', '84bf125cee304a74b7c58a8ef094d058', '6331133967'),
(23, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(24, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(25, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(26, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(27, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(28, 'Jorge', 'jorge3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(29, 'Jorge', 'jorgae3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(30, 'Jorge', 'jorgae3vi@hotmail.com', '07997db612a709573b19360a640a6c6b', '44444444'),
(31, 'Jorge', 'jorgevi@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '44444444'),
(32, 'sss', 'jorgevssi@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(33, 'sss', 'jorgevsssi@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(34, 'sss', 'jorg3evsssi@hotmail.com', '84bf125cee304a74b7c58a8ef094d058', '6333312871'),
(35, 'Manuel', 'JorgitoPeralta@gmail.com', 'c7e174f4debbdf0a6fd8fab1890b238d', '6333331287');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
