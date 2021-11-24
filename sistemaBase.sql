-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 02:02:21
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mipanaderia`
--

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`id`, `empresa_id`, `nombre`, `accion`) VALUES
(1, 1, 'Ver', 'view'),
(2, 1, 'Editar', 'edit'),
(3, 1, 'Crear', 'create'),
(4, 1, 'Todas', 'full'),
(5, 1, 'Eliminar', 'none');

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `region_id`, `nombre`, `codigo`) VALUES
(1, 1, 'Iquique', '011'),
(2, 1, 'Tamarugal', '014'),
(3, 2, 'Antofagasta', '021'),
(4, 2, 'El Loa', '022'),
(5, 2, 'Tocopilla', '023'),
(6, 3, 'Copiapó', '031'),
(7, 3, 'Chañaral', '032'),
(8, 3, 'Huasco', '033'),
(9, 4, 'Elqui', '041'),
(10, 4, 'Choapa', '042'),
(11, 4, 'Limarí', '043'),
(12, 5, 'Valparaíso', '051'),
(13, 5, 'Isla De Pascua', '052'),
(14, 5, 'Los Andes', '053'),
(15, 5, 'Petorca', '054'),
(16, 5, 'Quillota', '055'),
(17, 5, 'San Antonio', '056'),
(18, 5, 'San Felipe', '057'),
(19, 5, 'Marga Marga', '058'),
(20, 6, 'Cachapoal', '061'),
(21, 6, 'Cardenal Caro', '062'),
(22, 6, 'Colchagua', '063'),
(23, 7, 'Talca', '071'),
(24, 7, 'Cauquenes', '072'),
(25, 7, 'Curicó', '073'),
(26, 7, 'Linares', '074'),
(27, 8, 'Concepción', '081'),
(28, 8, 'Arauco', '082'),
(29, 8, 'Bío-Bío', '083'),
(30, 8, 'Ñuble', '084'),
(31, 9, 'Cautín', '091'),
(32, 9, 'Malleco', '092'),
(33, 10, 'Llanquihue', '101'),
(34, 10, 'Chiloé', '102'),
(35, 10, 'Osorno', '103'),
(36, 10, 'Palena', '104'),
(37, 11, 'Coihayque', '111'),
(38, 11, 'Aisén', '112'),
(39, 11, 'Capitán Prat', '113'),
(40, 11, 'General Carrera', '114'),
(41, 12, 'Magallanes', '121'),
(42, 12, 'Antártica Chilena', '122'),
(43, 12, 'Tierra del Fuego', '123'),
(44, 12, 'Última Esperanza', '124'),
(45, 13, 'Santiago', '131'),
(46, 13, 'Cordillera', '132'),
(47, 13, 'Chacabuco', '133'),
(48, 13, 'Maipo', '134'),
(49, 13, 'Melipilla', '135'),
(50, 13, 'Talagante', '136'),
(51, 14, 'Valdivia', '141'),
(52, 14, 'Ranco', '142'),
(53, 15, 'Arica', '151'),
(54, 15, 'Parinacota', '152');

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id`, `ciudad_id`, `nombre`, `codigo`) VALUES
(1, 1, 'Iquique', '01101'),
(2, 1, 'Alto Hospicio', '01107'),
(3, 2, 'Pozo Almonte', '01401'),
(4, 2, 'Camiña', '01402'),
(5, 2, 'Colchane', '01403'),
(6, 2, 'Huara', '01404'),
(7, 2, 'Pica', '01405'),
(8, 3, 'Antofagasta', '02101'),
(9, 3, 'Mejillones', '02102'),
(10, 3, 'Sierra Gorda', '02103'),
(11, 3, 'Taltal', '02104'),
(12, 4, 'Calama', '02201'),
(13, 4, 'Ollague', '02202'),
(14, 4, 'San Pedro De Atacama', '02203'),
(15, 5, 'Tocopilla', '02301'),
(16, 5, 'María Elena', '02302'),
(17, 6, 'Copiapó', '03101'),
(18, 6, 'Caldera', '03102'),
(19, 6, 'Tierra Amarilla', '03103'),
(20, 7, 'Chañaral', '03201'),
(21, 7, 'Diego De Almagro', '03202'),
(22, 8, 'Vallenar', '03301'),
(23, 8, 'Alto Del Carmen', '03302'),
(24, 8, 'Freirina', '03303'),
(25, 8, 'Huasco', '03304'),
(26, 9, 'La Serena', '04101'),
(27, 9, 'Coquimbo', '04102'),
(28, 9, 'Andacollo', '04103'),
(29, 9, 'La Higuera', '04104'),
(30, 9, 'Paiguano', '04105'),
(31, 9, 'Vicuña', '04106'),
(32, 10, 'Illapel', '04201'),
(33, 10, 'Canela', '04202'),
(34, 10, 'Los Vilos', '04203'),
(35, 10, 'Salamanca', '04204'),
(36, 11, 'Ovalle', '04301'),
(37, 11, 'Combarbalá', '04302'),
(38, 11, 'Monte Patria', '04303'),
(39, 11, 'Punitaqui', '04304'),
(40, 11, 'Río Hurtado', '04305'),
(41, 12, 'Valparaíso', '05101'),
(42, 12, 'Casablanca', '05102'),
(43, 12, 'Concón', '05103'),
(44, 12, 'Juan Fernández', '05104'),
(45, 12, 'Puchuncaví', '05105'),
(46, 12, 'Quintero', '05107'),
(47, 12, 'Viña Del Mar', '05109'),
(48, 13, 'Isla De Pascua', '05201'),
(49, 14, 'Los Andes', '05301'),
(50, 14, 'Calle Larga', '05302'),
(51, 14, 'Rinconada', '05303'),
(52, 14, 'San Esteban', '05304'),
(53, 15, 'La Ligua', '05401'),
(54, 15, 'Cabildo', '05402'),
(55, 15, 'Papudo', '05403'),
(56, 15, 'Petorca', '05404'),
(57, 15, 'Zapallar', '05405'),
(58, 16, 'Quillota', '05501'),
(59, 16, 'Calera', '05502'),
(60, 16, 'Hijuelas', '05503'),
(61, 16, 'La Cruz', '05504'),
(62, 16, 'Nogales', '05506'),
(63, 17, 'San Antonio', '05601'),
(64, 17, 'Algarrobo', '05602'),
(65, 17, 'Cartagena', '05603'),
(66, 17, 'El Quisco', '05604'),
(67, 17, 'El Tabo', '05605'),
(68, 17, 'Santo Domingo', '05606'),
(69, 18, 'San Felipe', '05701'),
(70, 18, 'Catemu', '05702'),
(71, 18, 'Llaillay', '05703'),
(72, 18, 'Panquehue', '05704'),
(73, 18, 'Putaendo', '05705'),
(74, 18, 'Santa María', '05706'),
(75, 19, 'Quilpué', '05801'),
(76, 19, 'Limache', '05802'),
(77, 19, 'Olmué', '05803'),
(78, 19, 'Villa Alemana', '05804'),
(79, 20, 'Rancagua', '06101'),
(80, 20, 'Codegua', '06102'),
(81, 20, 'Coinco', '06103'),
(82, 20, 'Coltauco', '06104'),
(83, 20, 'Doñihue', '06105'),
(84, 20, 'Graneros', '06106'),
(85, 20, 'Las Cabras', '06107'),
(86, 20, 'Machali', '06108'),
(87, 20, 'Malloa', '06109'),
(88, 20, 'Mostazal', '06110'),
(89, 20, 'El Olivar', '06111'),
(90, 20, 'Peumo', '06112'),
(91, 20, 'Pichidegua', '06113'),
(92, 20, 'Quinta De Tilcoco', '06114'),
(93, 20, 'Rengo', '06115'),
(94, 20, 'Requinoa', '06116'),
(95, 20, 'San Vicente', '06117'),
(96, 21, 'Pichilemu', '06201'),
(97, 21, 'La Estrella', '06202'),
(98, 21, 'Litueche', '06203'),
(99, 21, 'Marchihue', '06204'),
(100, 21, 'Navidad', '06205'),
(101, 21, 'Paredones', '06206'),
(102, 22, 'San Fernando', '06301'),
(103, 22, 'Chépica', '06302'),
(104, 22, 'Chimbarongo', '06303'),
(105, 22, 'Lolol', '06304'),
(106, 22, 'Nancagua', '06305'),
(107, 22, 'Palmilla', '06306'),
(108, 22, 'Peralillo', '06307'),
(109, 22, 'Placilla', '06308'),
(110, 22, 'Pumanque', '06309'),
(111, 22, 'Santa Cruz', '06310'),
(112, 23, 'Talca', '07101'),
(113, 23, 'Constitución', '07102'),
(114, 23, 'Curepto', '07103'),
(115, 23, 'Empedrado', '07104'),
(116, 23, 'Maule', '07105'),
(117, 23, 'Pelarco', '07106'),
(118, 23, 'Pencahue', '07107'),
(119, 23, 'Río Claro', '07108'),
(120, 23, 'San Clemente', '07109'),
(121, 23, 'San Rafael', '07110'),
(122, 24, 'Cauquenes', '07201'),
(123, 24, 'Chanco', '07202'),
(124, 24, 'Pelluhue', '07203'),
(125, 25, 'Curicó', '07301'),
(126, 25, 'Hualañe', '07302'),
(127, 25, 'Licantén', '07303'),
(128, 25, 'Molina', '07304'),
(129, 25, 'Rauco', '07305'),
(130, 25, 'Romeral', '07306'),
(131, 25, 'Sagrada Familia', '07307'),
(132, 25, 'Teno', '07308'),
(133, 25, 'Vichuquén', '07309'),
(134, 26, 'Linares', '07401'),
(135, 26, 'Colbún', '07402'),
(136, 26, 'Longaví', '07403'),
(137, 26, 'Parral', '07404'),
(138, 26, 'Retiro', '07405'),
(139, 26, 'San Javier', '07406'),
(140, 26, 'Villa Alegre', '07407'),
(141, 26, 'Yerbas Buenas', '07408'),
(142, 27, 'Concepción', '08101'),
(143, 27, 'Coronel', '08102'),
(144, 27, 'Chiguayante', '08103'),
(145, 27, 'Florida', '08104'),
(146, 27, 'Hualqui', '08105'),
(147, 27, 'Lota', '08106'),
(148, 27, 'Penco', '08107'),
(149, 27, 'San Pedro de la Paz', '08108'),
(150, 27, 'Santa Juana', '08109'),
(151, 27, 'Talcahuano', '08110'),
(152, 27, 'Tomé', '08111'),
(153, 27, 'Hualpén', '08112'),
(154, 28, 'Lebu', '08201'),
(155, 28, 'Arauco', '08202'),
(156, 28, 'Cañete', '08203'),
(157, 28, 'Contulmo', '08204'),
(158, 28, 'Curanilahue', '08205'),
(159, 28, 'Los Alamos', '08206'),
(160, 28, 'Tirua', '08207'),
(161, 29, 'Los Angeles', '08301'),
(162, 29, 'Antuco', '08302'),
(163, 29, 'Cabrero', '08303'),
(164, 29, 'Laja', '08304'),
(165, 29, 'Mulchén', '08305'),
(166, 29, 'Nacimiento', '08306'),
(167, 29, 'Negrete', '08307'),
(168, 29, 'Quilaco', '08308'),
(169, 29, 'Quilleco', '08309'),
(170, 29, 'San Rosendo', '08310'),
(171, 29, 'Santa Bárbara', '08311'),
(172, 29, 'Tucapel', '08312'),
(173, 29, 'Yumbel', '08313'),
(174, 29, 'Alto Biobío', '08314'),
(175, 30, 'Chillán', '08401'),
(176, 30, 'Bulnes', '08402'),
(177, 30, 'Cobquecura', '08403'),
(178, 30, 'Coelemu', '08404'),
(179, 30, 'Coihueco', '08405'),
(180, 30, 'Chillán Viejo', '08406'),
(181, 30, 'El Carmen', '08407'),
(182, 30, 'Ninhue', '08408'),
(183, 30, 'Ñiquén', '08409'),
(184, 30, 'Pemuco', '08410'),
(185, 30, 'Pinto', '08411'),
(186, 30, 'Portezuelo', '08412'),
(187, 30, 'Quillón', '08413'),
(188, 30, 'Quirihue', '08414'),
(189, 30, 'Ranquil', '08415'),
(190, 30, 'San Carlos', '08416'),
(191, 30, 'San Fabián', '08417'),
(192, 30, 'San Ignacio', '08418'),
(193, 30, 'San Nicolás', '08419'),
(194, 30, 'Treguaco', '08420'),
(195, 30, 'Yungay', '08421'),
(196, 31, 'Temuco', '09101'),
(197, 31, 'Carahue', '09102'),
(198, 31, 'Cunco', '09103'),
(199, 31, 'Curarrehue', '09104'),
(200, 31, 'Freire', '09105'),
(201, 31, 'Galvarino', '09106'),
(202, 31, 'Gorbea', '09107'),
(203, 31, 'Lautaro', '09108'),
(204, 31, 'Loncoche', '09109'),
(205, 31, 'Melipeuco', '09110'),
(206, 31, 'Nueva Imperial', '09111'),
(207, 31, 'Padre Las Casas', '09112'),
(208, 31, 'Perquenco', '09113'),
(209, 31, 'Pitrufquén', '09114'),
(210, 31, 'Pucón', '09115'),
(211, 31, 'Saavedra', '09116'),
(212, 31, 'Teodoro Schmidt', '09117'),
(213, 31, 'Toltén', '09118'),
(214, 31, 'Vilcún', '09119'),
(215, 31, 'Villarrica', '09120'),
(216, 31, 'Cholchol', '09121'),
(217, 32, 'Angol', '09201'),
(218, 32, 'Collipulli', '09202'),
(219, 32, 'Curacautín', '09203'),
(220, 32, 'Ercilla', '09204'),
(221, 32, 'Lonquimay', '09205'),
(222, 32, 'Los Sauces', '09206'),
(223, 32, 'Lumaco', '09207'),
(224, 32, 'Puren', '09208'),
(225, 32, 'Renaico', '09209'),
(226, 32, 'Traiguén', '09210'),
(227, 32, 'Victoria', '09211'),
(228, 33, 'Puerto Montt', '10101'),
(229, 33, 'Calbuco', '10102'),
(230, 33, 'Cochamó', '10103'),
(231, 33, 'Fresia', '10104'),
(232, 33, 'Frutillar', '10105'),
(233, 33, 'Los Muermos', '10106'),
(234, 33, 'Llanquihue', '10107'),
(235, 33, 'Maullín', '10108'),
(236, 33, 'Puerto Varas', '10109'),
(237, 34, 'Castro', '10201'),
(238, 34, 'Ancud', '10202'),
(239, 34, 'Chonchi', '10203'),
(240, 34, 'Curaco de Velez', '10204'),
(241, 34, 'Dalcahue', '10205'),
(242, 34, 'Puqueldón', '10206'),
(243, 34, 'Queilén', '10207'),
(244, 34, 'Quellón', '10208'),
(245, 34, 'Quemchi', '10209'),
(246, 34, 'Quinchao', '10210'),
(247, 35, 'Osorno', '10301'),
(248, 35, 'Puerto Octay', '10302'),
(249, 35, 'Purranque', '10303'),
(250, 35, 'Puyehue', '10304'),
(251, 35, 'Río Negro', '10305'),
(252, 35, 'San Juan de la Costa', '10306'),
(253, 35, 'San Pablo', '10307'),
(254, 36, 'Chaitén', '10401'),
(255, 36, 'Futaleufú', '10402'),
(256, 36, 'Hualaihue', '10403'),
(257, 36, 'Palena', '10404'),
(258, 37, 'Coihayque', '11101'),
(259, 37, 'Lago Verde', '11102'),
(260, 38, 'Aisén', '11201'),
(261, 38, 'Cisnes', '11202'),
(262, 38, 'Guaitecas', '11203'),
(263, 39, 'Cochrane', '11301'),
(264, 39, 'O´Higgins', '11302'),
(265, 39, 'Tortel', '11303'),
(266, 40, 'Chile Chico', '11401'),
(267, 40, 'Río Ibáñez', '11402'),
(268, 41, 'Punta Arenas', '12101'),
(269, 41, 'Laguna Blanca', '12102'),
(270, 41, 'Río Verde', '12103'),
(271, 41, 'San Gregorio', '12104'),
(272, 42, 'Cabo de Hornos', '12201'),
(273, 42, 'Antártica', '12202'),
(274, 43, 'Porvenir', '12301'),
(275, 43, 'Primavera', '12302'),
(276, 43, 'Timaukel', '12303'),
(277, 44, 'Natales', '12401'),
(278, 44, 'Torres del Paine', '12402'),
(279, 45, 'Santiago', '13101'),
(280, 45, 'Cerrillos', '13102'),
(281, 45, 'Cerro Navia', '13103'),
(282, 45, 'Conchalí', '13104'),
(283, 45, 'El Bosque', '13105'),
(284, 45, 'Estación Central', '13106'),
(285, 45, 'Huechuraba', '13107'),
(286, 45, 'Independencia', '13108'),
(287, 45, 'La Cisterna', '13109'),
(288, 45, 'La Florida', '13110'),
(289, 45, 'La Granja', '13111'),
(290, 45, 'La Pintana', '13112'),
(291, 45, 'La Reina', '13113'),
(292, 45, 'Las Condes', '13114'),
(293, 45, 'Lo Barnechea', '13115'),
(294, 45, 'Lo Espejo', '13116'),
(295, 45, 'Lo Prado', '13117'),
(296, 45, 'Macul', '13118'),
(297, 45, 'Maipú', '13119'),
(298, 45, 'Ñuñoa', '13120'),
(299, 45, 'Pedro Aguirre Cerda', '13121'),
(300, 45, 'Peñalolén', '13122'),
(301, 45, 'Providencia', '13123'),
(302, 45, 'Pudahuel', '13124'),
(303, 45, 'Quilicura', '13125'),
(304, 45, 'Quinta Normal', '13126'),
(305, 45, 'Recoleta', '13127'),
(306, 45, 'Renca', '13128'),
(307, 45, 'San Joaquín', '13129'),
(308, 45, 'San Miguel', '13130'),
(309, 45, 'San Ramón', '13131'),
(310, 45, 'Vitacura', '13132'),
(311, 46, 'Puente Alto', '13201'),
(312, 46, 'Pirque', '13202'),
(313, 46, 'San José De Maipo', '13203'),
(314, 47, 'Colina', '13301'),
(315, 47, 'Lampa', '13302'),
(316, 47, 'Tiltil', '13303'),
(317, 48, 'San Bernardo', '13401'),
(318, 48, 'Buin', '13402'),
(319, 48, 'Calera De Tango', '13403'),
(320, 48, 'Paine', '13404'),
(321, 49, 'Melipilla', '13501'),
(322, 49, 'Alhué', '13502'),
(323, 49, 'Curacaví', '13503'),
(324, 49, 'María Pinto', '13504'),
(325, 49, 'San Pedro', '13505'),
(326, 50, 'Talagante', '13601'),
(327, 50, 'El Monte', '13602'),
(328, 50, 'Isla De Maipo', '13603'),
(329, 50, 'Padre Hurtado', '13604'),
(330, 50, 'Peñaflor', '13605'),
(331, 51, 'Valdivia', '14101'),
(332, 51, 'Corral', '14102'),
(333, 51, 'Lanco', '14103'),
(334, 51, 'Los Lagos', '14104'),
(335, 51, 'Máfil', '14105'),
(336, 51, 'Mariquina', '14106'),
(337, 51, 'Paillaco', '14107'),
(338, 51, 'Panguipulli', '14108'),
(339, 52, 'La Unión', '14201'),
(340, 52, 'Futrono', '14202'),
(341, 52, 'Lago Ranco', '14203'),
(342, 52, 'Río Bueno', '14204'),
(343, 53, 'Arica', '15101'),
(344, 53, 'Camarones', '15102'),
(345, 54, 'Putre', '15201'),
(346, 54, 'General Lagos', '15202');

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id`, `empresa_id`, `nombre`, `fecha_creacion`, `fecha_ultimamodificacion`) VALUES
(1, 1, 'La Pintana', '2021-11-23 09:41:00', '2021-11-23 09:41:00');

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `rol`, `rut`, `logo`, `fecha_ingreso`, `fecha_ultimamodificacion`, `fecha_vigencia`, `logo_alt`) VALUES
(1, 'PANBO', 'PANBO', '', NULL, '2021-11-22 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `empresa_id`, `depende_de_id`, `menu_cabezera_id`, `modulo_id`, `nombre`, `icono`, `orden`) VALUES
(1, 1, 8, 1, 2, 'Empresas', 'far fa-dot-circle', 1),
(2, 1, 8, 1, 1, 'Cuentas', 'far fa-dot-circle', 2),
(5, 1, NULL, 1, 14, 'administradores', 'fas fa-users', 3),
(6, 1, 8, 1, 10, 'Menu', 'far fa-dot-circle', 3),
(8, 1, NULL, 1, NULL, 'Mantención', 'fas fa-wrench', 8),
(9, 1, 8, 1, 9, 'Perfil Usuario', 'far fa-dot-circle', 2),
(10, 1, 8, 1, 3, 'Modulos', 'far fa-dot-circle', 1),
(11, 1, NULL, 1, 12, 'Mis Datos', 'fas fa-user', 1),
(13, 1, NULL, 1, 11, 'Salir', 'fas fa-door-open', 9);

--
-- Volcado de datos para la tabla `menu_cabezera`
--

INSERT INTO `menu_cabezera` (`id`, `empresa_id`, `nombre`) VALUES
(1, 1, 'MainMenu');

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20211123022245', '2021-11-23 02:23:02');

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id`, `nombre`, `ruta`, `nombre_alt`, `descripcion`) VALUES
(1, 'empresa', 'empresa_index', 'Cuentas', ' '),
(2, 'cuenta', 'cuenta_index', 'Empresas', ' '),
(3, 'modulo', 'modulo_index', 'Modulos', ' '),
(4, 'privilegio', 'privilegio_index', 'Privilegios', ' '),
(5, 'usuario', 'usuario_index', 'Usuarios', ' '),
(6, 'menu', 'menu_index', 'Menu Items', ' Items'),
(7, 'usuario_cuenta', 'usuario_cuenta_index', 'Asignar cuentas', ' '),
(8, 'privilegio_tipousuario', 'privilegio_tipousuario_index', 'Privilegios Por Perfil', 'Asignacion de privilegios agrupados por Tipo de Usuario'),
(9, 'usuario_tipo', 'usuario_tipo_index', 'Perfil Usuario', 'Perfil del Usuario'),
(10, 'menu_cabezera', 'menu_cabezera_index', 'Menu', 'Agrega Menú'),
(11, 'Logout', 'app_logout', 'Salir', 'SALir'),
(12, 'mis_datos', 'mis_datos_index', 'Mis Datos', 'Modifica tus datos personales'),
(13, 'dashboard', 'dashboard', 'Panel', 'Inicio de sistema'),
(14, 'administradores', 'administradores_index', 'administradores', 'administradores');

--
-- Volcado de datos para la tabla `modulo_per`
--

INSERT INTO `modulo_per` (`id`, `empresa_id`, `modulo_id`, `nombre`, `descripcion`) VALUES
(1, 1, 3, 'Modulos', 'Modulos'),
(2, 1, 1, 'Cuentas', ' '),
(3, 1, 2, 'Empresas', ' '),
(4, 1, 4, 'Privilegios', ' '),
(5, 1, 5, 'Usuarios', ' '),
(6, 1, 6, 'Menu Items', ' Items'),
(7, 1, 7, 'Asignar cuentas', ' '),
(8, 1, 8, 'Privilegios Por Perfil', 'Asignacion de privilegios agrupados por Tipo de Usuario'),
(9, 1, 9, 'Perfil Usuario', 'Perfil del Usuario'),
(10, 1, 10, 'Menu', 'Agrega Menú'),
(11, 1, 11, 'Salir', 'SALir'),
(12, 1, 12, 'Mis Datos', 'Modifica tus datos personales'),
(13, 1, 13, 'Panel', 'Inicio de sistema'),
(14, 1, 14, 'administradores', 'administradores');

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `empresa_id`, `nombre`, `orden`) VALUES
(1, 1, 'CHILE', 1);

--
-- Volcado de datos para la tabla `privilegio`
--

INSERT INTO `privilegio` (`id`, `usuario_id`, `accion_id`, `modulo_per_id`) VALUES
(1, 1, 4, 1),
(2, 1, 4, 9),
(3, 1, 4, 8),
(4, 1, 4, 2),
(5, 1, 4, 3),
(6, 1, 4, 4),
(7, 1, 4, 5),
(8, 1, 4, 6),
(9, 1, 4, 10),
(10, 1, 4, 11),
(11, 1, 4, 12),
(12, 1, 4, 13),
(13, 1, 4, 14);

--
-- Volcado de datos para la tabla `privilegio_tipousuario`
--

INSERT INTO `privilegio_tipousuario` (`id`, `accion_id`, `tipousuario_id`, `modulo_per_id`) VALUES
(1, 4, 1, 1),
(2, 4, 1, 2),
(3, 4, 1, 3),
(4, 4, 1, 4),
(5, 4, 1, 5),
(6, 4, 1, 6),
(7, 4, 1, 8),
(8, 4, 1, 9),
(9, 4, 1, 10),
(10, 4, 1, 11),
(11, 4, 1, 12),
(12, 4, 1, 13),
(13, 4, 1, 14);

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `nombre`, `codigo`) VALUES
(1, 'Tarapacá', '01'),
(2, 'Antofagasta', '02'),
(3, 'Atacama', '03'),
(4, 'Coquimbo', '04'),
(5, 'Valparaíso', '05'),
(6, 'Libertador General Bernardo O`Higgins', '06'),
(7, 'Maule', '07'),
(8, 'Biobío', '08'),
(9, 'La Araucanía', '09'),
(10, 'Los Lagos', '10'),
(11, 'Aysén del General Carlos Ibáñez del Campo', '11'),
(12, 'Magallanes y de la Antártica Chilena', '12'),
(13, 'Metropolitana de Santiago', '13'),
(14, 'Los Ríos', '14'),
(15, 'Arica y Parinacota', '15');

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `cuenta_id`, `nombre`) VALUES
(1, 1, 'La pintana 1'),
(2, 1, 'la pintana 2');

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario_tipo_id`, `categoria_id`, `status_id`, `tipo_documento_id`, `username`, `password`, `nombre`, `estado`, `fecha_activacion`, `correo`, `token`, `empresa_actual`, `fecha_no_disponible`, `whatsapp`, `telefono`, `rut`, `direccion`, `sexo`, `color`, `password_ant`, `lunes`, `lunes_start`, `lunes_end`, `martes`, `martes_start`, `martes_end`, `miercoles`, `miercoles_start`, `miercoles_end`, `jueves`, `jueves_start`, `jueves_end`, `viernes`, `viernes_start`, `viernes_end`, `sabado`, `sabado_start`, `sabado_end`, `domingo`, `domingo_start`, `domingo_end`, `sobrecupo`, `lotes`) VALUES
(1, 1, NULL, NULL, NULL, 'admin', '$2y$04$IKSwrPJkc.Om72LnFvNQT.q8TTAIDkBOyAaPXmea7x0XG2g2k5zB.', 'Administrador', 1, '2020-10-31 00:00:00', 'jromero@proyectosti.cl', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Volcado de datos para la tabla `usuario_tipo`
--

INSERT INTO `usuario_tipo` (`id`, `menu_cabezera_id`, `empresa_id`, `nombre`, `orden`, `fijar`, `nombre_interno`, `statues`) VALUES
(1, 1, 1, 'Administrador de Sistema', NULL, 1, 'sys_admin', NULL),
(2, 1, NULL, 'Administrador de Cuenta', NULL, 1, 'managed_company', 'a:15:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"6\";i:6;s:1:\"7\";i:7;s:1:\"8\";i:8;s:1:\"9\";i:9;s:2:\"10\";i:10;s:2:\"11\";i:11;s:2:\"12\";i:12;s:2:\"13\";i:13;s:2:\"14\";i:14;s:2:\"15\";}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
