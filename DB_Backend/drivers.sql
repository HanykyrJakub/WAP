-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Ned 26. bře 2023, 15:13
-- Verze serveru: 5.7.11
-- Verze PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `jezdci`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `drivers`
--

CREATE TABLE `drivers` (
  `id` int(40) NOT NULL,
  `prijmeni` varchar(45) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `nazev v tymu` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `cislo jezdce` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `drivers`
--

INSERT INTO `drivers` (`id`, `prijmeni`, `nazev v tymu`, `cislo jezdce`) VALUES
(1, 'Hamilton', 'Mercedes F1 Team', 18),
(2, 'George Russel', 'Mercedes F1 Team', 24),
(3, 'Alonzo', 'AlphaTauri', 73),
(4, 'Schumacher', 'Hass', 56);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
