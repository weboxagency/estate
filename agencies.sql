-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2022 г., 10:42
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `evelani`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agencies`
--

CREATE TABLE `agencies` (
  `agency_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agency_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_phone_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_phone_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_phone_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agency_description` text COLLATE utf8_unicode_ci NOT NULL,
  `agency_show_count` int(11) NOT NULL,
  `agency_status` int(11) NOT NULL,
  `agency_created_at` datetime NOT NULL,
  `agency_updated_at` datetime NOT NULL,
  `agency_deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`agency_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `agencies`
--
ALTER TABLE `agencies`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
