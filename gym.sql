-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2023, 23:35:17
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gym`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gymdb`
--

CREATE TABLE `gymdb` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `gymdb`
--

INSERT INTO `gymdb` (`username`, `password`, `name`, `surname`, `dob`, `id`) VALUES
('dbuser', 'dbpass', 'dbuser', 'dbpass', '19-03-02', 2147483647);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `package`
--

CREATE TABLE `package` (
  `no` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `starth` time NOT NULL,
  `endh` time NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `package`
--

INSERT INTO `package` (`no`, `name`, `price`, `starth`, `endh`, `quantity`) VALUES
(1, 'afternoon', '150TL', '17:30:15', '19:00:00', 20),
(2, 'night', '200TL', '22:30:04', '24:00:00', 20);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`no`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `package`
--
ALTER TABLE `package`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
