-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 03, 2023 at 02:18 PM
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
  `Bilde` longblob NOT NULL,
  `Virsraksts` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `Apraksts` varchar(150) COLLATE utf8_latvian_ci NOT NULL,
  `Raksts` text COLLATE utf8_latvian_ci NOT NULL,
  `ID_Lietotaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lietotaji`
--

CREATE TABLE `lietotaji` (
  `Lietotaji_ID` int(11) NOT NULL,
  `Lietotajvards` varchar(60) COLLATE utf8_latvian_ci NOT NULL,
  `E-pasts` varchar(60) COLLATE utf8_latvian_ci NOT NULL,
  `Parole` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `Talrunis` varchar(13) COLLATE utf8_latvian_ci NOT NULL,
  `Administrators` tinyint(4) NOT NULL,
  `Statuss` varchar(45) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

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
  `Izglitiba` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `Darba_pieredze` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `Dig_prasmes` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `Komentari` text COLLATE utf8_latvian_ci DEFAULT NULL,
  `ID_Vakances` int(11) NOT NULL,
  `ID_Statuss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuss`
--

CREATE TABLE `statuss` (
  `Statuss_ID` int(11) NOT NULL,
  `Statuss` varchar(45) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vakance`
--

CREATE TABLE `vakance` (
  `Vakances_ID` int(11) NOT NULL,
  `Logo` longblob NOT NULL,
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
  MODIFY `Aktualitates_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lietotaji`
--
ALTER TABLE `lietotaji`
  MODIFY `Lietotaji_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pieteikties`
--
ALTER TABLE `pieteikties`
  MODIFY `Pieteikties_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `Statuss_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vakance`
--
ALTER TABLE `vakance`
  MODIFY `Vakances_ID` int(11) NOT NULL AUTO_INCREMENT;

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
