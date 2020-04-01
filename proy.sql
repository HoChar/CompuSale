-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2020 a las 22:52:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `fac_id` int(11) NOT NULL,
  `fac_fechaCompra` date DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `usu_id` varchar(11) DEFAULT NULL,
  `fac_precioTotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(30) DEFAULT NULL,
  `pro_descripcion` varchar(300) DEFAULT NULL,
  `pro_precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pro_id`, `pro_nombre`, `pro_descripcion`, `pro_precio`) VALUES
(1, 'ALIENWARE M15', 'El portátil de 15 pulgadas más fino de Alienware hasta el momento. Con una regulación de voltaje de 8 fases de alta eficiencia opcional, la tecnología de refrigeración Cryo-Tech 3.0 y un nuevo y diseño industrial Legend.', 6146949),
(2, 'ALIENWARE M17', 'El portátil de 43,1 cm o 17 pulgadas más compacto de Alienware hasta el momento. Con una regulación de voltaje de 8 fases de alta eficiencia opcional, la tecnología de refrigeración Cryo-Techv3.0 & nuevoy legendario diseño industrial.', 6762054),
(3, 'ALIENWARE AREA-51M', 'Un revolucionario portátil para juegos de 17 pulgadas que incorpora un procesador de sobremesa Intel® Core™ de 9.ª generación actualizable y sobreacelerable, una tarjeta gráfica NVIDIA® GeForce RTX™ y un chasis de aleación de magnesio.', 9017398),
(4, 'Asus X512fb', 'El ASUS VivoBook 15 es un compacto portátil que pronuncia la sensación de inmersión cuando trabajas o te relajas con tus contenidos favoritos. Rodeada de marcos de 5,7 mm y con una relación pantalla-cuerpo del 88 %, la nueva pantalla NanoEdge ofrece un nivel de inmersión visual espectacular. La bisa', 1899000),
(5, 'Acer 53lp', 'Explora y disfruta un nuevo nivel de Gaming más inmersivo con la pantalla Full HD y la potente tecnología del Nitro 5.', 2869000),
(6, 'Lenovo S145', 'Diseñada para ofrecer un rendimiento duradero, la IdeaPad S145 ofrece un procesamiento potente y fluido con un diseño elegante y ligero. Perfecta para realizar tus tareas informáticas diarias desde cualquier parte, esta portátil duradera de 14\" ofrece un magnífico sonido y opciones de almacenamiento', 895000),
(7, 'HP Gamer I5-9300h', 'El procesador Intel® Core™ i5 de cuatro núcleos de 9.ª generación más reciente, gráficos dedicados avanzados NVIDIA® GeForce® GTX 1050 y una pantalla de alta resolución con velocidad de actualización rápida.', 2600000),
(8, 'Zen AiO', 'Creemos que la tecnología puede ser hermosa, y Zen AiO es la prueba definitiva. Su construcción unibody sin costuras está fabricada con precisión con un acabado de efecto metálico en glamoroso Quartz Grey, detalles de metal hilado inspirados en Zen y un elegante soporte integrado, Zen AiO no es solo', 2700000),
(9, 'Acer Aspire Z24-890-UA91 AIO', 'Desktop de 23,8 pulgadas Full HD, Intel Core i5-9400T, 12 GB DDR4, 512 GB SSD, Wi-Fi 802.11ac, USB 3.1 tipo C, teclado y ratón inalámbricos, Windows 10 Home, color plateado, Plateado', 2869041),
(10, 'Pc Gamer Glacius Two', 'Obtén el mayor estilo, poder y rendimiento Gaming en un presupuesto reducido con base en el espectacular gabinete GLACIUS, con su textura mate en color blanco, con iluminación interna roja. Disfruta de una máquina balanceada, configurada y lista para correr todos los títulos existentes.', 2149000),
(11, 'Lenovo 330', 'TODO EN UNO LENOVO 330-20AST AMD A6 RAM 4GB DISCO DURO 500GB WINDOWS 10 Home 19,5 PULGADAS BLANCO ', 1085900),
(12, 'Lenovo 330-20ast', 'Lenovo AIO IC AIO 330-20AST AMD A69225 1T 4G. LINUX. 19,5.Color Blanco. AMD A6 9225 2.6G 2C. 4GB DDR4 2400 SODIMM. 1TB HD 5400RPM 2.5 SATA3. Graficos Integrados. 1*USB3.0 2*USB2.0 3 in1 card reader RJ45 headphone & mic combo HDMI output. Camara WEB 720P. WIRELESS+ BLUETOOTH: 802.11AC BT4.0 1X1. memo', 1038470),
(13, 'Mouse Pad Gamer Logitech G240', 'FRICCIÓN SUPERFICIAL MODERADA\r\nLos juegos que utilizan ajustes de PPP bajo se benefician de una resistencia moderada a los pies del mouse al iniciar o detener un movimiento rápido. Con tratamiento térmico a 200 ° C, la superficie de la tela del G240 proporciona la cantidad justa de fricción para man', 45900),
(14, 'Monitor Samsung Curvo', 'Monitor curvo esencial de 27\\\" con una experiencia de visualización intensamente envolvente , Una pantalla ergonómicamente amigable con los ojos con la espectacular pantalla del monitor ', 782900),
(15, 'Monitor Lg Led', 'El UltraWide 21: 9 relación de aspecto hace los juegos y las películas más envolvente que nunca. La claridad de 1080p píxeles de resolución Full HD con IPS es un cambio de juego. En pocas palabras, desde cualquier ángulo de visión, todo se ve más nítido y detallado en Full HD.sRGB es el espacio de c', 675000),
(16, 'Ventilador Fan Iceberg Magic', '15 LEDs instalados - Operación silenciosa - Conector Molex para conexión a Fuente o 3 Pin para Board (NUNCA USAR LOS DOS). - OEM (sin caja individual). Incluye tornillos.', 199000),
(17, 'Disco Duro Externo 1tb Toshiba', 'Este disco duro externo de 1TB tiene la capacidad equivalente para más de 300.000 canciones, 500 películas o medio millón de fotografías. Como ves, toda una vida y mucho más tiene cabida en éste disco duro Toshiba. Si estás interesado en comprar un disco duro externo Toshiba de 1TB, el modelo Toshib', 179900),
(18, 'Memoria Ram Corsair Vengeance ', 'VISUALICE, SINCRONICE, MEMORICE\r\nLa memoria con overclocking DDR4 CORSAIR VENGEANCE RGB PRO Series ilumina el PC con un efecto hipnótico gracias a la iluminación dinámica RGB direccionable de forma individual, además de ofrecer las mejores características de las DDR4 en cuanto a rendimiento.', 500000),
(19, 'Diadema G633 Artemis Spectrum', 'TRANSDUCTORES PRO-G™\r\nLos transductores de audio avanzado Pro-G™ están hechos con materiales de malla híbrida que proporcionan desempeño de alta calidad y están diseñados específicamente para juegos. El diseño de los transductores Pro-G ofrece agudos precisos y nítidos, y graves profundos y potentes', 399500),
(20, 'Audifono Diadema Gamer Kotion ', 'ESTE KOTION EACH G2000 ES UN MODELO EXCELENTE DE AURICULARES PARA VIDEOJUEGOS, QUE TE LLEVARÁ A TENER UN CAMPO DE SONIDO VIVO, CON UNA FORMIDABLE CALIDAD, UNA SENSACIÓN DE DESCARGA INCREÍBLE PARA JUGAR LO QUE SEA QUE DESEES.', 49900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` varchar(11) NOT NULL,
  `usu_nombre` varchar(11) DEFAULT NULL,
  `usu_telefono` varchar(11) DEFAULT NULL,
  `usu_fechaNacimiento` date DEFAULT NULL,
  `usu_tipo` int(1) DEFAULT NULL,
  `usu_ciudad` varchar(20) DEFAULT NULL,
  `usu_direccion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`fac_id`),
  ADD KEY `fac_usu` (`usu_id`),
  ADD KEY `fac_pro` (`pro_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `fac_pro` FOREIGN KEY (`pro_id`) REFERENCES `productos` (`pro_id`),
  ADD CONSTRAINT `fac_usu` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
