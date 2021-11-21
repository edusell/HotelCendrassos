-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Temps de generació: 21-11-2021 a les 17:10:13
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

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `tipushabitacio`
--
ALTER TABLE `tipushabitacio`
  ADD CONSTRAINT `tipushabitacio_ibfk_1` FOREIGN KEY (`id_hotel_tipus`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
