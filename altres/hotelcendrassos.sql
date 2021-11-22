-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Temps de generació: 22-11-2021 a les 14:05:04
-- Versió del servidor: 5.7.31
-- Versió de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `hotelcendrassos`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `calendari`
--

DROP TABLE IF EXISTS `calendari`;
CREATE TABLE IF NOT EXISTS `calendari` (
  `id_calendari` int(10) NOT NULL AUTO_INCREMENT,
  `data_in_tencament` date NOT NULL,
  `data_fn_tencament` date NOT NULL,
  `id_hotel_calendari` int(10) NOT NULL,
  PRIMARY KEY (`id_calendari`),
  KEY `id_hotel_calendari` (`id_hotel_calendari`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `calendari`
--

INSERT INTO `calendari` (`id_calendari`, `data_in_tencament`, `data_fn_tencament`, `id_hotel_calendari`) VALUES
(19, '2021-12-29', '2021-01-01', 1),
(20, '2021-12-30', '2021-01-01', 1),
(21, '2021-12-31', '2021-01-01', 1),
(22, '2021-01-01', '2021-01-01', 1),
(23, '2021-01-02', '2021-01-01', 1),
(24, '2021-01-03', '2021-01-01', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `departament`
--

DROP TABLE IF EXISTS `departament`;
CREATE TABLE IF NOT EXISTS `departament` (
  `id_departament` int(10) NOT NULL,
  `nom_departament` varchar(20) NOT NULL,
  `descripcio_departament` varchar(250) NOT NULL,
  `id_hotel_departament` int(10) NOT NULL,
  PRIMARY KEY (`id_departament`),
  KEY `id_hotel_departament` (`id_hotel_departament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `departament`
--

INSERT INTO `departament` (`id_departament`, `nom_departament`, `descripcio_departament`, `id_hotel_departament`) VALUES
(0, 'client', 'clients', 1),
(1, 'informatica', 'Tecnics informatics', 1),
(2, 'nateja', 'Personal de nateja de l\'hotel', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `habitacio`
--

DROP TABLE IF EXISTS `habitacio`;
CREATE TABLE IF NOT EXISTS `habitacio` (
  `id_habitacio` int(10) NOT NULL AUTO_INCREMENT,
  `id_tipus_habitacio` int(10) NOT NULL,
  PRIMARY KEY (`id_habitacio`),
  KEY `id_tipus_habitacio` (`id_tipus_habitacio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `habitacio`
--

INSERT INTO `habitacio` (`id_habitacio`, `id_tipus_habitacio`) VALUES
(1, 1),
(5, 1),
(2, 2),
(6, 2),
(3, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de la taula `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` int(10) NOT NULL,
  `nom_hotel` varchar(50) NOT NULL,
  `descripcio_hotel` varchar(250) NOT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nom_hotel`, `descripcio_hotel`) VALUES
(1, 'hotel cendrassos', 'hotel cendrassos c/');

-- --------------------------------------------------------

--
-- Estructura de la taula `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `id_reserva` int(10) NOT NULL AUTO_INCREMENT,
  `num_ocupants` int(2) NOT NULL,
  `data_arribada` date NOT NULL,
  `data_sortida` date NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `preu` int(11) NOT NULL,
  `id_tipus_reserva` int(11) NOT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `DNI` (`DNI`),
  KEY `DNI_2` (`DNI`),
  KEY `DNI_3` (`DNI`),
  KEY `id_tipus_reserva` (`id_tipus_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `num_ocupants`, `data_arribada`, `data_sortida`, `DNI`, `preu`, `id_tipus_reserva`) VALUES
(63, 1, '2021-11-21', '2021-11-26', '11111111S', 200, 1),
(64, 2, '2021-10-04', '2021-10-08', '21111110S', 120, 1),
(65, 2, '2021-10-04', '2021-10-08', '21111110S', 120, 1),
(66, 2, '2021-08-01', '2021-08-05', '21111111S', 150, 2),
(67, 2, '2021-08-01', '2021-08-05', '21111111S', 150, 2),
(68, 2, '2021-11-09', '2021-11-16', '21111115S', 300, 3),
(69, 2, '2021-11-09', '2021-11-16', '21111115S', 300, 3),
(70, 2, '2021-11-01', '2021-11-05', '11111111S', 248, 2),
(71, 2, '2021-11-01', '2021-11-05', '11111111S', 248, 2),
(72, 2, '2021-12-20', '2021-12-25', '11111111S', 200, 1),
(73, 1, '2021-12-14', '2021-12-17', '11111111S', 100, 1),
(74, 1, '2021-12-20', '2021-12-22', '11111111S', 71, 2);

-- --------------------------------------------------------

--
-- Estructura de la taula `reservahabitacio`
--

DROP TABLE IF EXISTS `reservahabitacio`;
CREATE TABLE IF NOT EXISTS `reservahabitacio` (
  `id_reserva` int(10) NOT NULL,
  `id_habitacio` int(10) DEFAULT NULL,
  KEY `id_reserva` (`id_reserva`),
  KEY `id_habitacio` (`id_habitacio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `reservahabitacio`
--

INSERT INTO `reservahabitacio` (`id_reserva`, `id_habitacio`) VALUES
(63, NULL),
(64, NULL),
(65, 2),
(66, 3),
(67, 5),
(68, 6),
(67, 5),
(68, 4),
(69, 1),
(70, 2),
(71, 6),
(72, NULL),
(73, NULL),
(74, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `tipushabitacio`
--

DROP TABLE IF EXISTS `tipushabitacio`;
CREATE TABLE IF NOT EXISTS `tipushabitacio` (
  `id_tipus` int(10) NOT NULL,
  `m_tipus` int(5) NOT NULL,
  `serveis_tipus` varchar(250) NOT NULL,
  `ocupants_tipus` int(2) NOT NULL,
  `desc_tipus` varchar(250) NOT NULL,
  `nom_tipus` varchar(50) NOT NULL,
  `id_hotel_tipus` int(10) NOT NULL,
  `preu` int(5) NOT NULL,
  `imatge` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipus`),
  KEY `id_hotel_tipus` (`id_hotel_tipus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `tipushabitacio`
--

INSERT INTO `tipushabitacio` (`id_tipus`, `m_tipus`, `serveis_tipus`, `ocupants_tipus`, `desc_tipus`, `nom_tipus`, `id_hotel_tipus`, `preu`, `imatge`) VALUES
(1, 25, 'servei de nateja i esmorzar', 5, 'Aquesta habitació, igual que la resta, està dissenyada perquè no et falti de res tant si véns de vacances com per negocis. Condicionada amb tot el necessari perquè tinguis una estada d\'allò més agradable.', 'HABITACIO DOBLE', 1, 50, 'habitacio_doble.jpg'),
(2, 30, 'servei de nateja  i esmorzar', 2, 'Aquesta habitació, igual que la resta, està dissenyada perquè no et falti de res tant si vens de vacances com per negocis. Condicionada amb tot el necessari perquè tinguis una estada d\'allo més agradable.', 'ATIC', 1, 71, 'habitacio_familiar.jpg'),
(3, 15, 'Servei d\'esmorzar', 2, 'Aquesta habitació, igual que la resta, està dissenyada perquè no et falti de res tant si véns de vacances com per negocis. Condicionada amb tot el necessari perquè tinguis una estada d\'allò més agradable.', 'HABITACIO BASICA', 1, 25, 'habitacio.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

DROP TABLE IF EXISTS `usuari`;
CREATE TABLE IF NOT EXISTS `usuari` (
  `DNI` varchar(9) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Cognom` varchar(50) NOT NULL,
  `tel` int(9) NOT NULL,
  `correu` varchar(50) NOT NULL,
  `rol` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_departament_usuari` int(10) NOT NULL,
  PRIMARY KEY (`DNI`),
  KEY `id_departament_usuari` (`id_departament_usuari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `usuari`
--

INSERT INTO `usuari` (`DNI`, `Nom`, `Cognom`, `tel`, `correu`, `rol`, `username`, `password`, `id_departament_usuari`) VALUES
('11111111S', 'Eduard', 'Sellas Lleo', 111111112, 'esellas@cendrassos.net', 1, 'edusell', '123456', 1),
('11111112a', 'Usuari', 'Prova', 999999999, 'usuari@gmail.com', 0, 'prova1', 'Hola1234', 0),
('21111110S', 'usuari', 'usuari', 123123123, 'usuari@gmail.com', 0, 'usuari', 'Hola123456', 0),
('21111111S', 'usuari1', 'usuari1', 123123123, 'usuari1@gmail.com', 0, 'usuari1', 'Hola123456', 0),
('21111112S', 'usuari2', 'usuari2', 123123123, 'usuari2@gmail.com', 0, 'usuari2', 'Hola123456', 0),
('21111113S', 'usuari3', 'usuari3', 123123123, 'usuari@gmail.com', 0, 'usuari3', 'Hola123456', 0),
('21111114S', 'usuari4', 'usuari4', 123123123, 'usuari4@gmail.com', 0, 'usuari4', 'Hola123456', 0),
('21111115S', 'usuari5', 'usuari5', 123123123, 'usuari5@gmail.com', 0, 'usuari5', 'Hola123456', 0),
('21111116S', 'usuari6', 'usuari6', 123123123, 'usuari6@gmail.com', 0, 'usuari6', 'Hola123456', 0),
('21111117S', 'usuari7', 'usuari7', 123123123, 'usuari7@gmail.com', 0, 'usuari7', 'Hola123456', 0),
('21111118S', 'usuari8', 'usuari8', 123123123, 'usuari8@gmail.com', 0, 'usuari8', 'Hola123456', 0),
('21111119S', 'usuari9', 'usuari9', 123123123, 'usuari9@gmail.com', 0, 'usuari9', 'Hola123456', 0);

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `calendari`
--
ALTER TABLE `calendari`
  ADD CONSTRAINT `calendari_ibfk_1` FOREIGN KEY (`id_hotel_calendari`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `departament`
--
ALTER TABLE `departament`
  ADD CONSTRAINT `departament_ibfk_1` FOREIGN KEY (`id_hotel_departament`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `habitacio`
--
ALTER TABLE `habitacio`
  ADD CONSTRAINT `habitacio_ibfk_1` FOREIGN KEY (`id_tipus_habitacio`) REFERENCES `tipushabitacio` (`id_tipus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `usuari` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `reservahabitacio`
--
ALTER TABLE `reservahabitacio`
  ADD CONSTRAINT `reservahabitacio_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id_reserva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservahabitacio_ibfk_2` FOREIGN KEY (`id_habitacio`) REFERENCES `habitacio` (`id_habitacio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `tipushabitacio`
--
ALTER TABLE `tipushabitacio`
  ADD CONSTRAINT `tipushabitacio_ibfk_1` FOREIGN KEY (`id_hotel_tipus`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `usuari_ibfk_1` FOREIGN KEY (`id_departament_usuari`) REFERENCES `departament` (`id_departament`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
