-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 May 2017, 21:25:36
-- Sunucu sürümü: 5.5.51-38.2
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `fafatura_megts`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) unsigned NOT NULL,
  `course_id` varchar(15) COLLATE utf8_unicode_ci DEFAULT '',
  `course_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dept_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructor_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `course_name`, `dept_name`, `instructor_id`) VALUES
(5, 'CMSE322', 'Software Design', 'Soft. Engineering', 'emu0001'),
(6, 'Cmse326', 'Software Testing', 'Software Engineering', 'emu0002');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `instructor_courses`
--

CREATE TABLE IF NOT EXISTS `instructor_courses` (
  `id` int(11) unsigned NOT NULL,
  `user_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `instructor_courses`
--

INSERT INTO `instructor_courses` (`id`, `user_id`, `course_id`) VALUES
(4, 'emu0001', 'CMSE322'),
(5, 'emu0002', 'Cmse326');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student_courses`
--

CREATE TABLE IF NOT EXISTS `student_courses` (
  `id` int(11) unsigned NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `passw` varchar(20) DEFAULT NULL,
  `utype` varchar(10) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `deptname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `userid`, `passw`, `utype`, `name`, `deptname`) VALUES
(2, '11', '11', 'admin', 'Administrator', 'Information Technology'),
(3, '131133', '131133', 'student', 'Fikri Kurtulus', 'Software Engineering'),
(25, '133429', '133429', 'student', 'Berke Muhtaroglu', 'Software Engineering '),
(26, 'emu0001', 'emu0001', 'instructor', 'Duygu Celik', 'software engineering'),
(27, '142323', '142323', 'student', 'Ahmet Sezen', 'Software Engineering'),
(28, 'admin', 'admin', 'admin', 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `instructor_courses`
--
ALTER TABLE `instructor_courses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `instructor_courses`
--
ALTER TABLE `instructor_courses`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
