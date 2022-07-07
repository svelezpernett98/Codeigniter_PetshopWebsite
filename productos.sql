-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2021 a las 15:20:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `foto`, `precio`, `descripcion`, `tipo`) VALUES
(2, 'cuido', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/cuido1.jpg?alt=media&token=9f59b08e-c5f4-4b88-aeef-e299967b8cd6', 50000, 'cuido para perros premium', '1'),
(3, 'cuido gatos nuevo', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/cuido2.jpg?alt=media&token=7165ad5e-a6d0-45df-aca9-2fa5396c7278', 1, 'cuido para gatos', '2'),
(4, 'correa para perro', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/lazoperro.jpg?alt=media&token=953e7d32-c7a0-4a20-a182-87b9b805f3ca', 30000, 'lazo', '1'),
(5, 'Cuido Pedigree', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/1.jpg?alt=media&token=07044cbe-bd3c-4b7d-a807-786b4ae6d27d', 50, 'Cuido marca Pedigree alta calidad', '1'),
(6, 'Cuido Rocku', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/2.jpg?alt=media&token=40aec476-7674-45b2-8e12-e7e3ee615805', 30, 'Cuido marca rocku', '1'),
(7, 'lazo para perro', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/4.jpg?alt=media&token=8aee5031-9fce-4bdb-a8ee-116458eaa29f', 35, 'Lazo para perro mediano', '1'),
(8, 'Pelota para perro', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/6.jpg?alt=media&token=aaa78334-6b18-4ff9-8987-0c3ca6127b9a', 10, 'Pelota de goma ', '1'),
(9, 'Pelota de tenis para perro', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/7.jpg?alt=media&token=567ef841-fd72-4a08-bb28-3cb888099884', 10, 'Pelota', '1'),
(10, 'Hueso para perro', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/8.jpg?alt=media&token=b307210a-e3ff-4dca-b356-6bfb34859c75', 10, 'Hueso', '1'),
(11, 'Huesos de colores', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/888.jpg?alt=media&token=2458c3d9-ad78-4f00-b7b2-94b13591bf08', 5000, 'Hueso de colores', '1'),
(12, 'Cuido petis', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/1.png?alt=media&token=95e27f53-f123-4605-9fd2-90493a8c1a36', 40, 'Alimento para gatos', '2'),
(13, 'Casa para gato', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/2.jpg?alt=media&token=d9661762-ec8f-47e7-a999-6f00373aff69', 250, 'Casa de juego para gato', '2'),
(14, 'Cuido advantage ', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/3.png?alt=media&token=d4e2b133-5fa6-4fea-8dc7-e22abfa0cd4c', 70, 'Alimento para gato', '2'),
(15, 'Atila', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/345435.jpg?alt=media&token=9461a756-31e3-4667-9341-4abe60198b41', 30, 'Alimento para gato', '2'),
(16, 'Alimento para aves', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves2.jpg?alt=media&token=8e41b3f2-bc1e-4be9-bad2-221286ae4b90', 10, 'alimento para aves', '3'),
(17, 'Mixtura alimento para aves', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves3.png?alt=media&token=bc0059af-4de2-4fa6-a68e-eb2f1b9fabc1', 15, 'alimento para aves', '3'),
(18, 'Alimento para aves silvestres', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves4.jpg?alt=media&token=06d94da2-9e1d-436d-a774-9be041cbb4dd', 30, 'alimento para aves', '3'),
(19, 'bebedero de pajaros', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves5.jpg?alt=media&token=0ab86e0b-92e3-453c-b178-9b4debd185f1', 80, 'bebedero', '3'),
(20, 'Palo pa loros', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves6.jpg?alt=media&token=b1820458-b92f-4d73-b562-1e98cfaf2d77', 30, 'palo', '3'),
(21, 'otro palo ', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/aves7.jpg?alt=media&token=83302a11-190e-4652-ad3f-048b51f08b9f', 10000, 'palo', '3'),
(22, 'Alimento para reptil', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/r2.jpg?alt=media&token=5cf8960c-099f-4e6d-bebb-f3dd752dd10e', 10, 'alimento reptil', '4'),
(23, 'Piedra para rana', 'https://firebasestorage.googleapis.com/v0/b/casahhogarsantiagovelez.appspot.com/o/r4.jpg?alt=media&token=a06987c8-9099-4572-8922-3df3856db8d0', 60000, 'piedra', '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
