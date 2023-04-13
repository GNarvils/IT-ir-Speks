-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 13, 2023 at 07:35 PM
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
(1, 'https://imgs.search.brave.com/TRiP0fMcG_q9O24OTvaYO2ZpbNMcIA0956h6xxPIFIA/rs:fit:1000:600:1/g:ce/aHR0cHM6Ly9lZGl3/ZWIuY29tL2ZpbGVz/L3J1LXJ1L29nLWlt/YWdlcy9yaW1pLTEw/MDAuanBn', 'Rimī bankrotē!', 'Populārs tirzniecības veikals rimī ir bankrotējis un tā rezultātā daudziem cilvēkiem, būs jāmeklē gan cita darba vieta, gan cita vieta, kur iepirkties.', 'Šodien ir skumja diena visiem rimī klientiem, jo nesen uzņēmuma SIA \"RIMI\" prezidents pateica, ka Rimi ir bankrotējis un vairs nav naudas.\r\nViņš teica \"Rimi vairs nav naudas un ja gribat vairāk informācijas apmeklējiet mūsu mājaslapu rimi.lv\", tad viņš aizgāja prom.\r\nŠīs ir ļoti gan RImi darbiniekiem, gan arī Rimi klientiem, jo viņiem tagad būs jājautā sev: \"kur tagad iepirkties.\"', 1);

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
  `ParoleM` text COLLATE utf8_latvian_ci NOT NULL DEFAULT 'Negrib',
  `Statuss` varchar(45) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `lietotaji`
--

INSERT INTO `lietotaji` (`Lietotaji_ID`, `Lietotajvards`, `Epasts`, `Parole`, `Talrunis`, `Administrators`, `ParoleM`, `Statuss`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$b3UTLhccXnzGlbG/CyF/Xu1/oeh2o2Gi0rMXIKN5LV3Uto5eTa/1e', '+371203435768', 1, 'Negrib', 'Aktīvs'),
(2, 'moderators', 'mod@mod.com', '$2y$10$/bQpbRt3GYDlNkDcSBC3nOlqpD/YVapyErlK57Sc1etsrIudPdynK', '+37102938271', 0, 'Grib', 'Aktīvs'),
(3, 'Dead', 'dead@dead.com', '$2y$10$txqDmQvMRbp78zdOzdP.NOktmwezaEJuSrA4x3U7zzKTCaYKLAnk6', '+37120344223', 1, 'Grib', 'Neaktīvs');

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
(4, 'Gustavs', 'Narvils', 'gust@gmail.com', '20444229', '2004-02-21', 'Liepājas Valsts Tehnikums optimālā izglītība.', 'Diemžēl nav nekādas', 'Java, C++, C#, HTML, PHP, CSS.', 'Man ļoti patīk Rimi un es gribu ļoti pie jums strādāt.', 30, 6);

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
(30, 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c7/Rimi_Baltic_Logo.svg/1200px-Rimi_Baltic_Logo.svg.png', 'Rimi', 'IT Speciālists', 'Liepāja', '8 stundas', '1500 bruto', 'Ir nepieciešams cilvēks kuram ir spējas labot kases aparātus un pašapkalpošanas aparātus. Darbs ir grūts, bet vismaz varēsi veidot draugus ar vairākiem kolēģiem.', 1, 1),
(31, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png', 'Google', 'AI Testeris', 'Rīga', '10 stundas', '4000 bruto', 'Ir vajadzīgs cilvēks, kurš ir gatavs ilgī testēt mūsu jaunos AI tehnoloģijas izgudrojumus. Ir vajadzīga pieredze strādāt ar citām AI tehnoloģijām.', 1, 1);

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
  MODIFY `Aktualitates_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `Lietotaji_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pieteikties`
--
ALTER TABLE `pieteikties`
  MODIFY `Pieteikties_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `Statuss_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vakance`
--
ALTER TABLE `vakance`
  MODIFY `Vakances_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
