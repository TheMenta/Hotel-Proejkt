-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Dec 01. 21:20
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `portfolio_hotel`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_d` date NOT NULL,
  `end_d` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `type`, `capacity`, `price`, `status`) VALUES
(1, 101, 0, 1, 10000, 0),
(2, 102, 0, 2, 15000, 0),
(3, 103, 0, 3, 20000, 0),
(4, 104, 0, 4, 25000, 0),
(5, 105, 0, 1, 10000, 0),
(6, 106, 0, 2, 15000, 0),
(7, 107, 0, 3, 20000, 0),
(8, 108, 0, 4, 25000, 0),
(9, 109, 0, 2, 15000, 0),
(10, 110, 0, 1, 10000, 0),
(11, 201, 0, 1, 11000, 0),
(12, 202, 0, 2, 16000, 0),
(13, 203, 0, 3, 21000, 0),
(14, 204, 0, 4, 26000, 0),
(15, 205, 0, 1, 11000, 0),
(16, 206, 0, 2, 16000, 0),
(17, 207, 0, 3, 21000, 0),
(18, 208, 0, 4, 26000, 0),
(19, 209, 0, 2, 16000, 0),
(20, 210, 0, 1, 11000, 0),
(21, 301, 0, 1, 12000, 0),
(22, 302, 0, 2, 17000, 0),
(23, 303, 0, 3, 22000, 0),
(24, 304, 0, 4, 27000, 0),
(25, 305, 0, 1, 12000, 0),
(26, 306, 0, 2, 17000, 0),
(27, 307, 0, 3, 22000, 0),
(28, 308, 0, 4, 27000, 0),
(29, 309, 0, 2, 17000, 0),
(30, 310, 0, 1, 12000, 0),
(31, 401, 0, 1, 13000, 0),
(32, 402, 0, 2, 18000, 0),
(33, 403, 0, 3, 23000, 0),
(34, 404, 0, 4, 28000, 0),
(35, 405, 0, 1, 13000, 0),
(36, 406, 0, 2, 18000, 0),
(37, 407, 0, 3, 23000, 0),
(38, 408, 0, 4, 28000, 0),
(39, 409, 0, 2, 18000, 0),
(40, 410, 1, 6, 40000, 0),
(41, 501, 0, 1, 14000, 0),
(42, 502, 0, 2, 19000, 0),
(43, 503, 0, 3, 24000, 0),
(44, 504, 0, 4, 29000, 0),
(45, 505, 0, 1, 14000, 0),
(46, 506, 0, 2, 19000, 0),
(47, 507, 0, 3, 24000, 0),
(48, 508, 0, 4, 29000, 0),
(49, 509, 0, 2, 19000, 0),
(50, 510, 1, 6, 41000, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
