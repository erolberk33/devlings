-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Ağu 2024, 12:53:07
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `magaza`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitaplar`
--

CREATE TABLE `kitaplar` (
  `id` int(11) NOT NULL,
  `kitap_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_yazari` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_fiyat` float(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kitaplar`
--

INSERT INTO `kitaplar` (`id`, `kitap_adi`, `kitap_yazari`, `kitap_aciklama`, `kitap_fiyat`) VALUES
(1, '1984', 'George Orwell', 'Totaliter bir toplumda geçen, Büyük Birader tarafından yönetilen distopik bir roman.', 45.00),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'Amerikan Güneyi\'nde ırkçılık ve önyargıların adaletsizliklerini ele alan bir roman.', 50.00),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Zenginlik, aşk ve Amerikan Rüyası\'nın temalarını keşfeden bir roman.', 40.00),
(4, 'Kürk Mantolu Madonna', 'Sabahattin Ali', 'Raif Efendi’nin hayatındaki derin aşkı anlatan bir roman.', 35.00),
(5, 'İnce Memed', 'Yaşar Kemal', 'Çukurova\'da bir halk kahramanı olan İnce Memed\'in hikayesi.', 40.00),
(6, 'Tutunamayanlar', 'Oğuz Atay', 'Modern Türk edebiyatının önemli eserlerinden biri olan bu roman, topluma ayak uyduramayan bireylerin yaşamını işler.', 45.00),
(7, 'Saatleri Ayarlama Enstitüsü', 'Ahmet Hamdi Tanpınar', 'Batı ve Doğu arasında sıkışıp kalmış bir toplumun eleştirisi.', 38.00),
(8, 'Sefiller', 'Victor Hugo', 'Fransız Devrimi sonrası toplumsal sorunları ve bireylerin bu süreçteki mücadelelerini anlatan klasik bir roman.', 50.00),
(9, 'Beyaz Kale', 'Orhan Pamuk', '17. yüzyılda geçen bir köle ve efendi arasındaki kimlik değişimlerini anlatan bir roman.', 42.00),
(10, 'Puslu Kıtalar Atlası', 'İhsan Oktay Anar', 'Felsefi ve fantastik unsurların harmanlandığı bir hikaye.', 37.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kitaplar`
--
ALTER TABLE `kitaplar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kitaplar`
--
ALTER TABLE `kitaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
