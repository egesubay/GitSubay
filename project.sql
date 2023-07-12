-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2023, 18:11:56
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `create_date`, `user_id`) VALUES
(28, 'egebey', '123', '2023-07-07', 38),
(29, 'mtur', 'tur', '2023-07-07', 39),
(30, 'cr7', 'cris', '2023-07-07', 40),
(31, 'leo', 'm10', '2023-07-07', 41),
(32, 'lebron', 'lj1', '2023-07-07', 42);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `isim` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `soyisim` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dogumTarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `isim`, `soyisim`, `dogumTarihi`) VALUES
(38, 'ege', 'subay', '1999-08-31'),
(39, 'mehmet', 'turgut', '2000-01-01'),
(40, 'ronaldo', 'cristiano', '1977-07-07'),
(41, 'messi', 'lionel', '1910-10-10'),
(42, 'james', 'king', '1923-12-23');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
