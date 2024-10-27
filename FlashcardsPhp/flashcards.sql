

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Struktura tabeli dla tabeli `slowka`
--

CREATE TABLE `slowka` (
  `id` int(255) NOT NULL,
  `slowo` varchar(50) NOT NULL,
  `znaczenie` varchar(50) NOT NULL,
  `diff` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `slowka`
--

INSERT INTO `slowka` (`id`, `slowo`, `znaczenie`, `diff`) VALUES
(1, 'cesky', 'czeski', '5'),
(2, 'hrát si', 'grać', '4'),
(3, 'kvetien', 'maj', ''),
(4, ' čerstvý', 'świeży', ''),
(5, 'záchod ', 'ubikacja', ''),
(6, ' zápach', 'smród', ''),
(7, 'lustr', 'żyrandol', ''),
(8, 'kýbl', 'wiadro', ''),
(9, 'divan', 'kanapa', ''),
(10, 'divák', 'widz ', ''),
(11, 'jahoda', 'truskawka', ''),
(12, 'židle', 'krzesło', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `slowka`
--
ALTER TABLE `slowka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `slowka`
--
ALTER TABLE `slowka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
