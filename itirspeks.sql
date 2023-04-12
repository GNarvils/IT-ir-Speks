-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 12, 2023 at 09:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itirspeks`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktualitates`
--

CREATE TABLE `aktualitates` (
  `Aktualitates_ID` int(11) NOT NULL,
  `Bilde` text COLLATE utf8_latvian_ci NOT NULL,
  `Virsraksts` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Apraksts` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `Raksts` text COLLATE utf8_latvian_ci NOT NULL,
  `ID_Lietotaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `aktualitates`
--

INSERT INTO `aktualitates` (`Aktualitates_ID`, `Bilde`, `Virsraksts`, `Apraksts`, `Raksts`, `ID_Lietotaji`) VALUES
(1, 'https://imgs.search.brave.com/TRiP0fMcG_q9O24OTvaYO2ZpbNMcIA0956h6xxPIFIA/rs:fit:1000:600:1/g:ce/aHR0cHM6Ly9lZGl3/ZWIuY29tL2ZpbGVz/L3J1LXJ1L29nLWlt/YWdlcy9yaW1pLTEw/MDAuanBn', 'Rimī bankrotē!', 'Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.', 'Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.', 1),
(3, 'https://imgs.search.brave.com/PQtYkO47At-J0f_WyX9nEEUyKfa5eLxMzHzN1jOH0ic/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4u/bW9iaWxlc3lydXAu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE3LzA1L01pY3Jv/c29mdC1sb2dvLTIu/anBn', 'Jauna operētājsistēma!', 'Kompānijai Microsoft drīz iznāks jaunā Windows operētājsistēmas versija.', '', 1),
(6, 'data:image/jpeg;base64,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', 'Google palaiž 100 darbiniekus', 'Daudzi Google darbinieki zaudē savu darbu', 'Rip bozo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `Lietotaji_ID` int(11) NOT NULL,
  `Lietotajvards` varchar(60) COLLATE utf8_latvian_ci NOT NULL,
  `Epasts` varchar(60) COLLATE utf8_latvian_ci NOT NULL,
  `Parole` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `Talrunis` varchar(13) COLLATE utf8_latvian_ci NOT NULL,
  `Administrators` tinyint(1) NOT NULL,
  `Statuss` varchar(45) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`Lietotaji_ID`, `Lietotajvards`, `Epasts`, `Parole`, `Talrunis`, `Administrators`, `Statuss`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$b3UTLhccXnzGlbG/CyF/Xu1/oeh2o2Gi0rMXIKN5LV3Uto5eTa/1e', '+371203435768', 1, 'Aktīvs'),
(2, 'moderators', 'mod@mod.com', '$2y$10$/bQpbRt3GYDlNkDcSBC3nOlqpD/YVapyErlK57Sc1etsrIudPdynK', '+37102938271', 0, 'Aktīvs');

-- --------------------------------------------------------

--
-- Table structure for table `pieteikties`
--

CREATE TABLE `pieteikties` (
  `Pieteikties_ID` int(11) NOT NULL,
  `Vards` varchar(45) COLLATE utf8_latvian_ci NOT NULL,
  `Uzvards` varchar(45) COLLATE utf8_latvian_ci NOT NULL,
  `Epasts` varchar(45) COLLATE utf8_latvian_ci NOT NULL,
  `Talrunis` varchar(13) COLLATE utf8_latvian_ci NOT NULL,
  `DzimDati` date NOT NULL,
  `Izglitiba` text COLLATE utf8_latvian_ci NOT NULL,
  `DarbPieredze` text COLLATE utf8_latvian_ci NOT NULL,
  `DigPrasmes` text COLLATE utf8_latvian_ci NOT NULL,
  `Komentari` text COLLATE utf8_latvian_ci DEFAULT NULL,
  `ID_Vakances` int(11) NOT NULL,
  `ID_Statuss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `pieteikties`
--

INSERT INTO `pieteikties` (`Pieteikties_ID`, `Vards`, `Uzvards`, `Epasts`, `Talrunis`, `DzimDati`, `Izglitiba`, `DarbPieredze`, `DigPrasmes`, `Komentari`, `ID_Vakances`, `ID_Statuss`) VALUES
(3, 'Nav', 'Nav', 'Nav@nav', '+371203435768', '2014-04-01', 'nav', 'nav', 'nav', 'nav', 17, 6);

-- --------------------------------------------------------

--
-- Table structure for table `statuss`
--

CREATE TABLE `statuss` (
  `Statuss_ID` int(11) NOT NULL,
  `Statuss` varchar(45) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `statuss`
--

INSERT INTO `statuss` (`Statuss_ID`, `Statuss`) VALUES
(1, 'Aktīvs'),
(2, 'Neaktīvs'),
(3, 'Pieņemts'),
(4, 'Atraidīts'),
(5, 'Apskatīts'),
(6, 'Saņemts');

-- --------------------------------------------------------

--
-- Table structure for table `vakance`
--

CREATE TABLE `vakance` (
  `Vakances_ID` int(11) NOT NULL,
  `Logo` text COLLATE utf8_latvian_ci NOT NULL,
  `Nosaukums` varchar(45) COLLATE utf8_latvian_ci NOT NULL,
  `Profesija` varchar(60) COLLATE utf8_latvian_ci NOT NULL,
  `Pilseta` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Stundas` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `Samaksa` varchar(12) COLLATE utf8_latvian_ci NOT NULL,
  `Apraksts` text COLLATE utf8_latvian_ci NOT NULL,
  `ID_Lietotaji` int(11) NOT NULL,
  `ID_Statuss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `vakance`
--

INSERT INTO `vakance` (`Vakances_ID`, `Logo`, `Nosaukums`, `Profesija`, `Pilseta`, `Stundas`, `Samaksa`, `Apraksts`, `ID_Lietotaji`, `ID_Statuss`) VALUES
(17, 'https://imgs.search.brave.com/1WDrebQVZHIHT0jJcRlyvgy0iF50NDWf9J3AG6KJMrA/rs:fit:1024:368:1/g:ce/aHR0cHM6Ly9sb2dv/bm9pZC5jb20vaW1h/Z2VzL3JpbWktbG9n/by5wbmc', 'Rimis', 'Darbinieks', 'Tāšis', '1233', '2 Cents', 'Sliktis', 2, 2),
(22, 'https://imgs.search.brave.com/1WDrebQVZHIHT0jJcRlyvgy0iF50NDWf9J3AG6KJMrA/rs:fit:1024:368:1/g:ce/aHR0cHM6Ly9sb2dv/bm9pZC5jb20vaW1h/Z2VzL3JpbWktbG9n/by5wbmc', 'sdgdgs', 'sgdgsd', 'sgdsdg', 'sdggs', 'dgsg', 'dgsa', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktualitates`
--
ALTER TABLE `aktualitates`
  ADD PRIMARY KEY (`Aktualitates_ID`),
  ADD KEY `ID_Lietotaji` (`ID_Lietotaji`);

--
-- Indexes for table `lietotaji`
--
ALTER TABLE `lietotaji`
  ADD PRIMARY KEY (`Lietotaji_ID`);

--
-- Indexes for table `pieteikties`
--
ALTER TABLE `pieteikties`
  ADD PRIMARY KEY (`Pieteikties_ID`),
  ADD KEY `ID_Vakances` (`ID_Vakances`),
  ADD KEY `ID_Statuss` (`ID_Statuss`);

--
-- Indexes for table `statuss`
--
ALTER TABLE `statuss`
  ADD PRIMARY KEY (`Statuss_ID`);

--
-- Indexes for table `vakance`
--
ALTER TABLE `vakance`
  ADD PRIMARY KEY (`Vakances_ID`),
  ADD KEY `ID_Lietotaji` (`ID_Lietotaji`),
  ADD KEY `ID_Statuss` (`ID_Statuss`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktualitates`
--
ALTER TABLE `aktualitates`
  MODIFY `Aktualitates_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `Lietotaji_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pieteikties`
--
ALTER TABLE `pieteikties`
  MODIFY `Pieteikties_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `Statuss_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vakance`
--
ALTER TABLE `vakance`
  MODIFY `Vakances_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktualitates`
--
ALTER TABLE `aktualitates`
  ADD CONSTRAINT `aktualitates_ibfk_1` FOREIGN KEY (`ID_Lietotaji`) REFERENCES `lietotaji` (`Lietotaji_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pieteikties`
--
ALTER TABLE `pieteikties`
  ADD CONSTRAINT `pieteikties_ibfk_1` FOREIGN KEY (`ID_Vakances`) REFERENCES `vakance` (`Vakances_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pieteikties_ibfk_2` FOREIGN KEY (`ID_Statuss`) REFERENCES `statuss` (`Statuss_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vakance`
--
ALTER TABLE `vakance`
  ADD CONSTRAINT `vakance_ibfk_1` FOREIGN KEY (`ID_Lietotaji`) REFERENCES `lietotaji` (`Lietotaji_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vakance_ibfk_2` FOREIGN KEY (`ID_Statuss`) REFERENCES `statuss` (`Statuss_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
