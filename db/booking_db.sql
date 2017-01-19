-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Sty 2017, 16:36
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `booking_db`
--
CREATE DATABASE IF NOT EXISTS `booking_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking_db`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL COMMENT 'Identyfikator',
  `Value` int(11) DEFAULT NULL COMMENT 'Wartość'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela testowa';

--
-- Zrzut danych tabeli `test`
--

INSERT INTO `test` (`ID`, `Value`) VALUES
(1, 0),
(2, 997);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL COMMENT 'Identyfikator',
  `Login` varchar(10) NOT NULL COMMENT 'Nazwa',
  `Password` varchar(10) NOT NULL COMMENT 'Hasło'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela z użytkownikami';

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `Login`, `Password`) VALUES
(1, 'user', 'test');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identyfikator', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identyfikator', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
