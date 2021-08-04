-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 04 Ağu 2021, 16:27:49
-- Sunucu sürümü: 10.3.30-MariaDB-cll-lve
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gamzesi1_wp393`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_cevaplar`
--

CREATE TABLE `veteriner_cevaplar` (
  `id` int(11) NOT NULL,
  `mus_id` varchar(255) CHARACTER SET latin5 NOT NULL,
  `soru_id` varchar(255) CHARACTER SET latin5 NOT NULL,
  `cevap` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_kampanyalar`
--

CREATE TABLE `veteriner_kampanyalar` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `baslik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_kullanicilar`
--

CREATE TABLE `veteriner_kullanicilar` (
  `id` int(11) UNSIGNED NOT NULL,
  `kadi` varchar(255) NOT NULL,
  `mailAdres` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `durum` varchar(255) NOT NULL,
  `dogrulamakodu` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_pet_listesi`
--

CREATE TABLE `veteriner_pet_listesi` (
  `id` int(11) UNSIGNED NOT NULL,
  `mus_id` varchar(255) NOT NULL,
  `pet_isim` varchar(255) NOT NULL,
  `pet_tur` varchar(255) NOT NULL,
  `pet_cins` varchar(255) NOT NULL,
  `pet_resim` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_sorular`
--

CREATE TABLE `veteriner_sorular` (
  `id` int(10) UNSIGNED NOT NULL,
  `mus_id` varchar(255) NOT NULL,
  `soru` varchar(255) NOT NULL,
  `durum` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veteriner_takipasi`
--

CREATE TABLE `veteriner_takipasi` (
  `id` int(11) NOT NULL,
  `mus_id` varchar(255) NOT NULL,
  `pet_id` varchar(255) NOT NULL,
  `asi_ismi` varchar(255) NOT NULL,
  `asi_durum` varchar(255) NOT NULL,
  `asi_tarih` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `veteriner_cevaplar`
--
ALTER TABLE `veteriner_cevaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veteriner_kampanyalar`
--
ALTER TABLE `veteriner_kampanyalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veteriner_kullanicilar`
--
ALTER TABLE `veteriner_kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veteriner_pet_listesi`
--
ALTER TABLE `veteriner_pet_listesi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veteriner_sorular`
--
ALTER TABLE `veteriner_sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veteriner_takipasi`
--
ALTER TABLE `veteriner_takipasi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_cevaplar`
--
ALTER TABLE `veteriner_cevaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_kampanyalar`
--
ALTER TABLE `veteriner_kampanyalar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_kullanicilar`
--
ALTER TABLE `veteriner_kullanicilar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_pet_listesi`
--
ALTER TABLE `veteriner_pet_listesi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_sorular`
--
ALTER TABLE `veteriner_sorular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `veteriner_takipasi`
--
ALTER TABLE `veteriner_takipasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
