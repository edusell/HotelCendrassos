-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 13-10-2021 a les 17:02:43
-- Versió del servidor: 10.4.14-MariaDB
-- Versió de PHP: 7.2.34

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

CREATE TABLE `calendari` (
  `id_calendari` int(10) NOT NULL,
  `data_in_tencament` date NOT NULL,
  `data_fn_tencament` date NOT NULL,
  `id_hotel_calendari` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `calendari`
--

INSERT INTO `calendari` (`id_calendari`, `data_in_tencament`, `data_fn_tencament`, `id_hotel_calendari`) VALUES
(1, '2021-10-01', '2021-08-31', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `departament`
--

CREATE TABLE `departament` (
  `id_departament` int(10) NOT NULL,
  `nom_departament` varchar(20) NOT NULL,
  `descripcio_departament` varchar(250) NOT NULL,
  `id_hotel_departament` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `departament`
--

INSERT INTO `departament` (`id_departament`, `nom_departament`, `descripcio_departament`, `id_hotel_departament`) VALUES
(0, 'client', 'clients', 1),
(1, 'informatica', 'Tecnics informatics', 1),
(2, 'nateja', 'nateja de l\'hotel', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `habitacio`
--

CREATE TABLE `habitacio` (
  `id_habitacio` int(10) NOT NULL,
  `id_tipus_habitacio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `habitacio`
--

INSERT INTO `habitacio` (`id_habitacio`, `id_tipus_habitacio`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de la taula `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(10) NOT NULL,
  `nom_hotel` varchar(50) NOT NULL,
  `descripcio_hotel` varchar(250) NOT NULL
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

CREATE TABLE `reserva` (
  `id_reserva` int(10) NOT NULL,
  `num_ocupants` int(2) NOT NULL,
  `data_arribada` date NOT NULL,
  `data_sortida` date NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `num_ocupants`, `data_arribada`, `data_sortida`, `DNI`) VALUES
(1, 2, '2021-10-21', '2021-10-23', '22222222S');

-- --------------------------------------------------------

--
-- Estructura de la taula `reservahabitacio`
--

CREATE TABLE `reservahabitacio` (
  `id_reserva` int(10) NOT NULL,
  `id_habitacio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `reservahabitacio`
--

INSERT INTO `reservahabitacio` (`id_reserva`, `id_habitacio`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de la taula `tipushabitacio`
--

CREATE TABLE `tipushabitacio` (
  `id_tipus` int(10) NOT NULL,
  `m_tipus` int(5) NOT NULL,
  `serveis_tipus` varchar(250) NOT NULL,
  `ocupants_tipus` int(2) NOT NULL,
  `desc_tipus` varchar(250) NOT NULL,
  `nom_tipus` varchar(50) NOT NULL,
  `id_hotel_tipus` int(10) NOT NULL,
  `preu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `tipushabitacio`
--

INSERT INTO `tipushabitacio` (`id_tipus`, `m_tipus`, `serveis_tipus`, `ocupants_tipus`, `desc_tipus`, `nom_tipus`, `id_hotel_tipus`) VALUES
(1, 25, 'servei de nateja i esmorzar', 5, "Aquesta habitació, igual que la resta, està dissenyada perquè no et falti de res tant si véns de vacances com per negocis. Condicionada amb tot el necessari perquè tinguis una estada d'allò més agradable.", 'habitacio doble', 1),
(2, 30, 'servei de nateja  i esmorzar', 2, 'atic', 'atic', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuari`
--

CREATE TABLE `usuari` (
  `DNI` varchar(9) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Cognom` varchar(50) NOT NULL,
  `tel` int(9) NOT NULL,
  `correu` varchar(50) NOT NULL,
  `rol` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_departament_usuari` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `usuari`
--

INSERT INTO `usuari` (`DNI`, `Nom`, `Cognom`, `tel`, `correu`, `rol`, `username`, `password`, `id_departament_usuari`) VALUES
('11111111S', 'Eduard', 'Sellas Lleo', 111111111, 'esellas@cendrassos.net', 1, 'edusell', '123456', 1),
('22222222S', 'ben', 'younes', 222222222, 'benyounes@cendrassos.net', 0, 'benyounes', '123456', 0);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `calendari`
--
ALTER TABLE `calendari`
  ADD PRIMARY KEY (`id_calendari`),
  ADD KEY `id_hotel_calendari` (`id_hotel_calendari`);

--
-- Índexs per a la taula `departament`
--
ALTER TABLE `departament`
  ADD PRIMARY KEY (`id_departament`),
  ADD KEY `id_hotel_departament` (`id_hotel_departament`);

--
-- Índexs per a la taula `habitacio`
--
ALTER TABLE `habitacio`
  ADD PRIMARY KEY (`id_habitacio`),
  ADD KEY `id_tipus_habitacio` (`id_tipus_habitacio`);

--
-- Índexs per a la taula `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Índexs per a la taula `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `DNI_2` (`DNI`),
  ADD KEY `DNI_3` (`DNI`);

--
-- Índexs per a la taula `reservahabitacio`
--
ALTER TABLE `reservahabitacio`
  ADD KEY `id_reserva` (`id_reserva`),
  ADD KEY `id_habitacio` (`id_habitacio`);

--
-- Índexs per a la taula `tipushabitacio`
--
ALTER TABLE `tipushabitacio`
  ADD PRIMARY KEY (`id_tipus`),
  ADD KEY `id_hotel_tipus` (`id_hotel_tipus`);

--
-- Índexs per a la taula `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `id_departament_usuari` (`id_departament_usuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `calendari`
--
ALTER TABLE `calendari`
  MODIFY `id_calendari` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `habitacio`
--
ALTER TABLE `habitacio`
  MODIFY `id_habitacio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
