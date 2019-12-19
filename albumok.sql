-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gép: dbmysql:3306
-- Létrehozás ideje: 2019. Dec 17. 13:03
-- Kiszolgáló verziója: 8.0.18
-- PHP verzió: 7.2.22

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `albumok`
--
CREATE DATABASE IF NOT EXISTS `albumok` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `albumok`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `released` int(11) NOT NULL,
  `genere` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `tcc` double DEFAULT NULL,
  `sales` int(11) NOT NULL,
  `image` varchar(80) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla csonkolása beszúrás előtt `album`
--

TRUNCATE TABLE `album`;
--
-- A tábla adatainak kiíratása `album`
--

INSERT INTO `album` (`id`, `artist_id`, `title`, `released`, `genere`, `tcc`, `sales`, `image`) VALUES
(1, 1, 'Thriller', 1982, 'Pop, rock, R&B', 47.3, 66, 'thriller.png'),
(2, 2, 'Back in Black', 1980, 'Hard rock', 26.4, 50, 'back-in-black.png'),
(3, 3, 'Bat Out of Hell', 1977, 'Hard rock, glam rock, heavy metal', 21.7, 50, 'bat-out-of-hell.jpg'),
(4, 4, 'The Dark Side of the Moon', 1973, 'Progressive rock', 24.2, 45, 'Dark_Side_of_the_Moon.png'),
(5, 5, 'The Bodyguard', 1992, 'R&B, soul, pop, soundtrack', 28.4, 45, 'TheBodyguardSoundtrack.jpg'),
(6, 6, 'Their Greatest Hits (1971–1975)', 1976, 'Country rock, soft rock, folk rock', 41.2, 42, 'Eagles_-_Their_Greatest_Hits_(1971-1975).jpg'),
(7, 7, 'Saturday Night Fever', 1977, 'Disco', 21.6, 40, 'TheBeeGeesSaturdayNightFeveralbumcover.jpg'),
(8, 8, 'Rumours', 1977, 'Soft rock', 27.9, 40, 'FMacRumours.png'),
(9, 9, 'Come On Over', 1997, 'Country, pop', 29.6, 40, 'ShaniaTwainComeOnOver.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla csonkolása beszúrás előtt `artist`
--

TRUNCATE TABLE `artist`;
--
-- A tábla adatainak kiíratása `artist`
--

INSERT INTO `artist` (`id`, `name`, `image`) VALUES
(1, 'Michael Jackson', 'Michael_Jackson_in_1988.jpg'),
(2, 'AC/DC', 'ACDC_In_Tacoma_2009'),
(3, 'Meat Loaf', 'Meat_Loaf.jpg'),
(4, 'Pink Floyd', 'Pink_Floyd_-_all_members.jpg'),
(5, 'Whitney Houston', 'Whitney_Houston_Welcome_Home_Heroes.jpg'),
(6, 'Eagles', 'Eagles.jpg'),
(7, 'Bee Gees', 'Bee_Gees_1977.jpg'),
(8, 'Fleetwood Mac', 'Fleetwood_Mac_Billboard_1977.jpg'),
(9, 'Shania Twain', 'ShaniaTwainJunoAwardsMar2011.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `length` varchar(12) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla csonkolása beszúrás előtt `track`
--

TRUNCATE TABLE `track`;
--
-- A tábla adatainak kiíratása `track`
--

INSERT INTO `track` (`id`, `no`, `title`, `length`, `album_id`) VALUES
(1, 1, 'Wanna Be Startin\' Somethin\'', '00:06:02', 1),
(2, 2, 'Baby Be Mine', '00:04:20', 1),
(3, 3, 'The Girl Is Mine (with Paul McCartney)', '00:03:41', 1),
(4, 4, 'Thriller', '00:05:57', 1),
(5, 5, 'Beat It', '00:04:18', 1),
(6, 6, 'Billie Jean', '00:04:54', 1),
(7, 7, 'Human Nature', '00:04:07', 1),
(8, 8, 'P.Y.T. (Pretty Young Thing)', '00:03:58', 1),
(9, 9, 'The Lady in My Life', '00:04:59', 1),
(10, 1, 'Hells Bells', '00:05:10', 2),
(11, 2, 'Shoot to Thrill', '00:05:17', 2),
(12, 3, 'What Do You Do for Money Honey', '00:03:33', 2),
(13, 4, 'Given the Dog a Bone', '00:03:30', 2),
(14, 5, 'Let Me Put My Love into You', '00:04:16', 2),
(15, 6, 'Back in Black', '00:04:14', 2),
(16, 7, 'You Shook Me All Night Long', '00:03:30', 2),
(17, 8, 'Have a Drink on Me', '00:03:57', 2),
(18, 9, 'Shake a Leg', '00:04:06', 2),
(19, 10, 'Rock and Roll Ain\'t Noise Pollution', '00:04:15', 2),
(20, 1, 'Bat Out of Hell', '00:09:51', 3),
(21, 2, 'You Took the Words Right Out of My Mouth (Hot Summer Night)', '00:05:04', 3),
(22, 3, 'Heaven Can Wait', '00:04:40', 3),
(23, 4, 'All Revved Up with No Place to Go', '00:04:19', 3),
(24, 5, 'Two Out of Three Ain\'t Bad', '00:05:26', 3),
(25, 6, 'Paradise by the Dashboard Light (duet with Ellen Foley)', '00:08:28', 3),
(26, 7, 'For Crying Out Loud', '00:08:48', 3);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id_index` (`artist_id`),
  ADD KEY `released_index` (`released`),
  ADD KEY `sales_index` (`sales`);

--
-- A tábla indexei `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_index` (`no`),
  ADD KEY `album_id_index` (`album_id`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `FK_album_artist_id` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Megkötések a táblához `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `FK_track_album_id` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
