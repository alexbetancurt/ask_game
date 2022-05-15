-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-05-2022 a las 04:43:00
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softmedi_ask_game`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `Enunciado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Opcion1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Opcion2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Opcion3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Opcion4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Respuesta` int(11) DEFAULT NULL,
  `Categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `Enunciado`, `Opcion1`, `Opcion2`, `Opcion3`, `Opcion4`, `Respuesta`, `Categoria`) VALUES
(2, '¿De qué color es el Sol?', 'Negro', 'Blanco', 'Amarillo', 'Azul', 3, 1),
(3, '¿Cuántos colores tiene el arcoiris?', 'Tres', 'Cincuenta', 'Diez', 'Siete', 4, 1),
(4, '¿Cuántos lados tiene un cuadrado?', 'Dos', 'Cuatro', 'Seis', 'Uno', 2, 1),
(5, 'Como se dice Hola en Inglés', 'Heloww', 'Good', 'Hello', 'Bonjour', 3, 1),
(6, '¿Cuántos planetas tiene el Sistema Solar?', 'Cinco', 'Nueve', 'Doce', 'Veinte', 2, 1),
(7, 'El Perro es un:', 'Anfibio', 'Mamífero', 'Reptil', 'Ninguna de las anteriores', 2, 2),
(8, '¿Quién es Isabel II?', 'La Monarca de Inglaterra', 'Mi tia', 'Una Cantante Famosa', 'Una Escritora Famosa', 1, 2),
(9, '¿Cuál es la Capital de Colombia?', 'Medellín', 'Calí', 'Bogotá', 'Pasto', 3, 2),
(10, '¿Cuáles son los estados de la materia?', 'Materia Gris y Materia Oscura', 'Solido, Liquido, Gaseoso y Plasma', 'Estado Externo, Estado Intermedio y Estado Interno', 'Estado Primario, Estado Secundario y Estado Terciario\r\n\r\n', 2, 2),
(11, '¿Cuántos Continentes hay en la Tierra?', 'Ocho', 'Cuatro', 'Dos', 'Cinco', 4, 2),
(12, '¿En qué año terminó la Segunda Guerra Mundial?', 'En 1945', 'En 1912', 'En 1928', 'En 1990', 1, 3),
(13, '¿Cuál es el monte más alto del Mundo?', 'La Piedra del Peñol', 'La Cordillera de los Andes', 'El Monte Everest', 'El Monte Olimpo', 3, 3),
(14, '¿Cuál es el planeta más grande del Sistema Solar?', 'Júpiter', 'Saturno', 'Plutón', 'Venus', 1, 3),
(15, '¿Por qué partículas está formado un átomo?', 'Electronitos y Plutinos', 'Protones, neutrones y electrones', 'Partículas de energía oscura', 'Por alfa y omega', 2, 3),
(16, '¿Cuál es el país más grande?', 'Argentina', 'EEUU', 'Rusia', 'Australia', 3, 3),
(17, '¿Cuántos corazones tiene un pulpo?', 'Uno', 'Cinco', 'Tres', 'Dos', 3, 4),
(18, '¿Cuál es el libro sagrado del Islam?', 'La Biblia', 'El Corán', 'El Torá', 'La Biblia Hebrea', 2, 4),
(19, '¿Cuánto vale el número pi?', 'Equivale a 3,1416', 'Equivale a 20', 'Equivale a 2,54', 'Equivale a 3', 1, 4),
(20, '¿Cuál es la cordillera más larga del mundo?', 'El Hymalaya', 'De los Alpes', 'De los Andes', 'De Rumania', 3, 4),
(21, '¿De qué país es originario el cóctel mojito?', 'De Colombia', 'De Cuba', 'De Jamaica', 'De Perú', 2, 4),
(22, '¿En qué país se encuentra el Taj Mahal?', 'En España', 'En Italia', 'En Brasil', 'En India', 4, 5),
(23, '¿Cuántos dientes puede llegar a tener un adulto?', '18 dientes', '39 dientes', '32 dientes', '40 dientes', 3, 5),
(24, '¿Cuál es la sustancia natural más dura que podemos encontrar en la Naturaleza?', 'El Hierro', 'El Diamante', 'El Oro', 'La Plata', 2, 5),
(25, '¿En qué estado de la materia los átomos se encuentran más apretujados?', 'Sólido', 'Líquido', 'Gaseoso', 'Plasma', 1, 5),
(26, '¿Cuántos huesos tiene el cuerpo humano?', '206 huesos en total', '400 huesos en total', '158 huesos en total', '295 huesos en total', 1, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
