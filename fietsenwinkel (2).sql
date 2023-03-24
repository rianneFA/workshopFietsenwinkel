-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2023 om 13:01
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fietsenwinkel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `beheer`
--

CREATE TABLE `beheer` (
  `firstName` int(11) NOT NULL,
  `lastName` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets`
--

CREATE TABLE `fiets` (
  `Wielmaat` int(11) NOT NULL,
  `Kettingkast Type` varchar(255) NOT NULL,
  `prijs` double NOT NULL,
  `merk` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `omschrijving` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets`
--

INSERT INTO `fiets` (`Wielmaat`, `Kettingkast Type`, `prijs`, `merk`, `id`, `Type`, `image`, `omschrijving`) VALUES
(28, 'Voorzet kast', 255, 'Altec Metro ', 1, 'Damesfiets', 'damesFiets1.jpg', 'Shimano derailleur 7: Shimano derailleur 7 biedt een zeer ruime keuze in versnellingen\r\nVoordelig: Zeer mooie prijs kwaliteitsverhouding\r\nBagagedrager: Degelijke bagagedrager waar je met gemak tot 25kg op mag meenemen\r\nDesign: De fiets is hip'),
(29, 'Metalen kettingkast', 399, 'Altec King', 2, 'Heren mountainbike ', 'herenFiets1.jpg', 'Verende voorvork: Een verende voorvork biedt net dat beetje extra comfort\r\nShimano Nexus 3: Een Shimano Nexus 3 schakelsysteem werkt altijd soepel en nauwkeurig\r\nVoordelig: Zeer mooie prijs kwaliteitsverhouding\r\nDesign: De fiets is stoer'),
(28, 'dichte kettingkast', 416, 'Altec Dutch ', 5, 'Damesfiets Transportfiets', 'damesFiets2.jpg', 'Stuurstabilisator: Een stuurstabilisator zorgt voor extra stabiliteit, super handig in combinatie met een voordrager zodat je stuur niet omklapt\r\nDubbele standaard: Een dubbele standaard zorgt voor extra stabiliteit op je fiets\r\nVoordrager: Geschikt voor een mand of krat. Ideaal om je boodschappen of schooltas overzichtelijk en veilig mee te vervoeren\r\nShimano Nexus 3: Een Shimano Nexus 3 schakelsysteem werkt altijd soepel en nauwkeurig'),
(28, 'dichte kettingkast', 349, 'Altec Love ', 8, 'Damesfiets transportfiets ', 'damesFiets3.jpg', 'Stuurstabilisator: Een stuurstabilisator zorgt voor extra stabiliteit, super handig in combinatie met een voordrager zodat je stuur niet omklapt\r\nDubbele standaard: Een dubbele standaard zorgt voor extra stabiliteit op je fiets\r\nVoordrager: Geschikt voor een mand of krat. Ideaal om je boodschappen of schooltas overzichtelijk en veilig mee te vervoeren\r\nGesloten kettingkast: Een gesloten kettingkast is niet alleen netjes afgewerkt maar is ook onderhoudsvriendelijk en houd je kleren lekker schoon'),
(29, 'half open', 1500, 'Pegasus Siena E7F Plus Disc 2022', 9, 'Herenfiets elektrische fiets', 'herenFiets2.jpg', 'Zeer stille Bosch Active Plus middenmotor\r\nKeuze uit twee verschillende accu’s, zo vind je altijd de accucapaciteit die bij je past\r\nNetjes afgewerkte fiets met onderdelen als een gesloten kettingkast, bagagedrager en spatborden'),
(30, 'Gesloten kettingkast', 309, 'Avalon Export', 10, 'zwart opafiets', 'herenFiets3.jpg', 'Voordelig: Zeer mooie prijs kwaliteitsverhouding\r\nBagagedrager: Degelijke bagagedrager waar je met gemak tot 25kg op mag meenemen\r\nOnderhoudsarm: Het onderhoudsarme karakter maakt deze fiets uiterst geschikt voor dagelijks gebruik\r\nGesloten kettingkast: Een gesloten kettingkast is niet alleen netjes afgewerkt maar is ook onderhoudsvriendelijk en houd je kleren lekker schoon'),
(24, 'Open kettingkast', 249.99, 'ROCKRIDER', 11, 'Mountainbike kind', 'kinderFiets1.jpg', 'Een frame geschikt om mee te mountainbiken\r\nOnze ingenieurs ontwierpen dit nieuwe en stevige stalen frame. Het frame heeft een korte achtervork wat de fiets wendbaar en eenvoudig te besturen maakt.\r\nVoorvering voor demping op grillig terrein\r\nOverwin probleemloos elk obstakel (wortels, rotsen, stenen, ... ) dankzij de verende voorvork.\r\nSchakelen tussen 18 versnellingen'),
(24, 'Gesloten kettingkast', 259.99, 'BTWIN', 12, 'Stadsfiets kind', 'kinderFiets2.jpg', 'Gebruiksgemak\r\nFiets met 6 versnellingen en remhendels die aangepast zijn aan kinderhandjes.\r\nFietscomfort\r\nOp deze \'omafiets\' rij je comfortabel met een rechte rug.\r\nVeelzijdigheid\r\nDeze stadsfiets is uitgerust met spatborden, een standaard en een fietsmand.\r\nLevenslange garantie\r\nB\'TWIN geeft levenslange garantie op frame, stuurpen, stuur en de vaste voorvork.'),
(24, 'Open kettingkast', 249.99, 'BTWIN', 13, 'Hybridefiets voor kinderen', 'kinderFiets3.jpg', 'Gebruiksgemak\r\nEen hybridefiets met 6 versnellingen en remhendels aangepast aan kinderhanden.\r\nZitcomfort\r\nErgonomisch, breed BTWIN-zadel, perfect op kindermaat\r\nVeelzijdigheid\r\nDeze fiets heeft een spatbord, een standaard en voor- en achterverlichting.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verkocht`
--

CREATE TABLE `verkocht` (
  `fietsID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fiets`
--
ALTER TABLE `fiets`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `verkocht`
--
ALTER TABLE `verkocht`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fiets`
--
ALTER TABLE `fiets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `verkocht`
--
ALTER TABLE `verkocht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
