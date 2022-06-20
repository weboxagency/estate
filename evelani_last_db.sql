-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2022 г., 13:41
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
-- Структура таблицы `about_ads_configuration`
--

CREATE TABLE `about_ads_configuration` (
  `id` int(11) NOT NULL,
  `modul_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modul_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modul_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `about_ads_configuration`
--

INSERT INTO `about_ads_configuration` (`id`, `modul_key`, `modul_name`, `modul_info`, `status`) VALUES
(1, 'vip', 'Elanı VIP etmək', 'Əgər bu seçimi nəsə dana onu snra yazarıq', 1),
(2, 'premium', 'Elanı Premium etmək', 'Nəsə dana bunu da sonra yazarıq', 1),
(3, 'pull', 'Elanı İrəli çəkmək', 'Bunu lap sonra yazarıq', 1),
(4, 'delete', 'Elanı silmək', 'Bunu axırdan əvvəl yazacıq', 1),
(5, 'update', 'Elanı redaktə etmək', 'Bunu ən axırda yazacıq', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `add_advertisement_rules`
--

CREATE TABLE `add_advertisement_rules` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `add_advertisement_rules`
--

INSERT INTO `add_advertisement_rules` (`id`, `content`, `status`) VALUES
(1, '                Saytda REKLAM yerləşdirmək\r\n \r\n\r\nEvelani.az  Azərbaycanın daşınmaz əmlak sahəsində yeni xidmətlər təklif edən onlayn platformadır. Sayt böyük müştəri bazasını əhatə edir və daşınmaz əmlak üzrə bütün sahələrdə şaxələnməyə davam edir.\r\n\r\nEvelani.az saytında reklam yerləşdirərək, hədəf müştəri kütlənizə məhsulunuzu təqdim edə, məhsuldar müştəri bazası əldə edə bilərsiniz. Evelani.az ilə əməkdaşlıq etdiyiniz zaman nəinki yalnız platforma üzərindən həmçinin digər satış kanalları üzərindən də məhsulunuzun təqdimatı aparılacaqdır. \r\n\r\nBizimlə əməkdaşlıq etmək üçün müraciət edin!\r\n\r\n(050) 786-00-84\r\n\r\n(012) 409-00-84\r\n\r\nevelani@evelani.az              ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ads_all`
--

CREATE TABLE `ads_all` (
  `id` int(11) NOT NULL,
  `ads_pin_kod` int(11) NOT NULL,
  `ads_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ads_number` int(11) NOT NULL,
  `announcement_type` int(11) NOT NULL,
  `connection_type` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `average_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` int(11) DEFAULT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `land_area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `max_floor` int(11) DEFAULT NULL,
  `repair` int(11) DEFAULT NULL,
  `deed` int(11) DEFAULT NULL,
  `mortgage` int(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `has_whatsapp` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `metro_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_description` text COLLATE utf8_unicode_ci NOT NULL,
  `business_center` int(11) DEFAULT NULL,
  `complex` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `show_count` int(11) NOT NULL DEFAULT 0,
  `pull_ads_forward_begin` datetime DEFAULT NULL,
  `pull_ads_forward_end` datetime DEFAULT NULL,
  `vip_begin` datetime DEFAULT NULL,
  `vip_end` datetime DEFAULT NULL,
  `premium_begin` datetime DEFAULT NULL,
  `premium_end` datetime DEFAULT NULL,
  `photos` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `approved_at` datetime NOT NULL,
  `simple_ads_end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_all`
--

INSERT INTO `ads_all` (`id`, `ads_pin_kod`, `ads_title`, `url_slug`, `ads_number`, `announcement_type`, `connection_type`, `property_type`, `price`, `average_price`, `room`, `area`, `land_area`, `floor`, `max_floor`, `repair`, `deed`, `mortgage`, `user_type`, `name`, `email`, `mobile`, `has_whatsapp`, `city_id`, `region_id`, `district_id`, `metro_id`, `address`, `latitude`, `longitude`, `property_description`, `business_center`, `complex`, `is_active`, `status`, `show_count`, `pull_ads_forward_begin`, `pull_ads_forward_end`, `vip_begin`, `vip_end`, `premium_begin`, `premium_end`, `photos`, `created_at`, `updated_at`, `deleted_at`, `approved_at`, `simple_ads_end_date`) VALUES
(1, 69691, '', '', 10, 1, 0, 1, '125,000', '', 3, '96', '', 7, 16, 1, 1, 0, 1, 'Məhərrəm', 'aghakarim.karimov@gmail.com', '708903400', 0, 2, 0, 0, 0, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4, 1, 3, 2', '2022-06-05 19:53:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 87933, '', '', 11, 2, 0, 1, '400', '', 3, '87', '', 5, 16, 1, 1, 0, 1, 'Cavid', 'chaparoglucavid@gmail.com', '552054132', 0, 1, 1, 1, 9, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '8, 5, 9, 6, 7', '2022-05-01 22:10:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 11354, '', '', 12, 3, 0, 2, '650', '', 4, '130', '', 8, 16, 1, 1, 0, 0, 'Nəriman', 'neriman@gmail.com', '559633636', 0, 1, 5, 99, 15, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '11, 12, 14, 10, 13', '2022-06-06 01:40:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 71517, '', '', 13, 1, 0, 2, '85,000', '', 4, '87', '', 5, 9, 1, 1, 0, 1, 'Ağakərim', 'aghakarim.karimov@gmail.com', '998812999', 0, 1, 1, 2, 23, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '15, 17, 19, 16, 18', '2022-06-06 01:47:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 47876, 'Satılır,Yeni tikili,5 otaqlı - 140 m²,Xırdalan-1654465902', 'satılıryeni-tikili5-otaqlı-140-m²xırdalan-1654465902', 14, 1, 0, 1, '150,000', '', 5, '140', '', 6, 16, 1, 1, 0, 1, 'Solmaz', 'aghakarimsolmaz@gmail.com', '705015505', 0, 2, 0, 0, 0, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '21, 23, 24, 20, 22', '2022-06-06 01:51:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 48422, 'Satılır,Yeni tikili,4 otaqlı - 240 m²,Sahil m.-1654466633', 'satiliryeni-tikili4-otaqli-240-m-sahil-m-1654466633', 15, 1, 0, 1, '780,000', '', 4, '240', '', 15, 16, 1, 1, 0, 1, 'Solmaz', 'aghakarimsolmaz@gmail.com', '705015505', 0, 1, 3, 20, 20, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '28, 26, 29, 25, 27', '2022-06-06 02:03:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 71301, 'Satılır,Ofis,7 otaqlı - 230 m²,Koroğlu m.-1654528586', 'satilirofis7-otaqli-230-m-koroglu-m-1654528586', 16, 1, 0, 5, '230,000', '', 7, '230', '5', 0, 0, 0, 0, 0, 1, 'Bünyad', 'bunyad@gmail.com', '708500005', 1, 1, 2, 14, 12, '', '', '', '', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '32, 30, 34, 33, 31', '2022-06-06 19:16:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 29387, 'Kiraye aylıq,Yeni tikili,4 otaqlı - 120 m²,Nəsimi m.', 'kiraye-ayliqyeni-tikili4-otaqli-120-m-nesimi-m-1654532065', 17, 1, 0, 1, '140,000', '', 4, '120', '', 8, 16, 1, 1, 0, 1, 'Namiq', 'karim@gmail.com', '556541200', 0, 1, 3, 23, 17, '', '', '', 'Metro Neftçilərdə 3 otaqlı mənzil Lahiyə: - Xuruşovka Mərtəbə: - 5/5 Sahə: - 41m² Otaq sayı: - 3 (2dən – 3ə Düzəlmə) Sənəd: Çıxarış (Kupça) Kommunal: Qaz, su, Elektrik daimidir. KabelTv, İnternet var. İstilik sistemi: - Mərkəzi istilik sistemi Yaxınlıqda: - Nizami Rayon İcara Hakimiyyəti, 24-cu pölis bölməsi, 210 saylı orta məktəb. Ünvan: - Nizami, ray., Prospekt / Qara Qarayev Neftçilər metrosuna ayaq məsafəsində. Qalacaq əşya: - bir çox əşya qalacaq. Soyuducu, paltaryuyan, kondisionerlər. Hər otaqda ayrı kodisioner var. stol-stul və s. QEYD: Ev metroya yaxındır. Dam tollanıb. Heç bir problem yoxdur. Whatsapla da əlaqə saxlaya bilərsiniz Evi göstərmə haqqı – 20 manat 1% - Əmlakçı haqqı (Alqı-satqı baş verdikdə)', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '37, 36, 39, 35, 38', '2022-06-06 20:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 34927, 'Satılır,Qaraj, otaqlı - 6 m²,Koroğlu m.', 'satilirqaraj-otaqli-6-m-koroglu-m-1654555398', 18, 1, 0, 8, '42,000', '', 0, '6', '', 0, 0, 1, 0, 0, 1, 'Məhərrəm', 'kerim@gmail.com', '708903400', 0, 1, 9, 78, 12, 'Bakı şəhəri, Pirşağı qəs., \"Qarabağ\" sanatoriyasının yaxinlığında', '', '', 'Sabunçu r-nu, Pirşağı qəs., \"Qarabağ\" sanatoriyasının yaxinlığında, yolu tam asvalt, yolun kənarında, hasarlı-darvazalı 6 sot torpaq sahəsi satılır. Həyətin ölçüsü 20 m x 30 m-dir və 30 m yol tərəfə düşür. Yəni itkisiz şəkildə 2 hissəyə də bölünə bilər. Bağ evi və ya obyekt üçün ideal yerdir. Sənəd: Kupça (çıxarış) Qiymət: 42.000 azn (1 sot - 7.000 azn)', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '48, 51, 50, 47, 49', '2022-06-07 02:43:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 16291, 'Satılır,Qaraj, otaqlı - 6 m²,Koroğlu m.', 'satilirqaraj-otaqli-6-m-koroglu-m-1654558185', 19, 1, 0, 8, '42,000', '', 0, '6', '', 0, 0, 1, 1, 0, 1, 'Məhərrəm', 'kerim@gmail.com', '708903400', 0, 1, 9, 78, 12, 'Bakı şəhəri, Pirşağı qəs., \"Qarabağ\" sanatoriyasının yaxinlığında', '', '', 'Sabunçu r-nu, Pirşağı qəs., \"Qarabağ\" sanatoriyasının yaxinlığında, yolu tam asvalt, yolun kənarında, hasarlı-darvazalı 6 sot torpaq sahəsi satılır. Həyətin ölçüsü 20 m x 30 m-dir və 30 m yol tərəfə düşür. Yəni itkisiz şəkildə 2 hissəyə də bölünə bilər. Bağ evi və ya obyekt üçün ideal yerdir. Sənəd: Kupça (çıxarış) Qiymət: 42.000 azn (1 sot - 7.000 azn)', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '53, 54, 55, 52, 56', '2022-06-07 03:29:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 29101, 'Satılır,Yeni tikili,5 otaqlı - 75 m²,Ağcabədi', 'satiliryeni-tikili5-otaqli-75-m-agcabedi-20', 20, 1, 0, 1, '95,000', '1266.6666666667', 5, '75', '', 6, 16, 1, 1, 0, 1, 'gdfgdfgdfg', 'jhkjhk@gmai.com', '708544601', 0, 4, 0, 0, 0, 'fsdfsdfsdfsdf', '40.39165954395852', '49.869089089965804', 'sdfsdfsdfsdfsdfsdfsfd', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '59, 60, 61, 58, 57', '2022-06-08 15:31:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 24278, 'Kiraye aylıq,Köhnə tikili,3 otaqlı - 75 m²,Xalqlar Dostluğu m.', 'kiraye-ayliqkohne-tikili3-otaqli-75-m-xalqlar-dostlugu-m-21', 21, 2, 0, 2, '350', '4.6666666666667', 3, '75', '', 6, 9, 1, 1, 0, 1, 'Həsən', 'aghakarim.karimov@gmail.com', '552054132', 0, 1, 1, 1, 22, 'Neapol dairəsi,G.Sixlinski küç', '40.382055', '49.96403', 'Xətai r-nu,Neapol dairəsi,G.Sixlinski küç, 9/6 leninqrad layihəli,3 otaqlı ev,75 kv ev kirayə verilir', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '110, 109, 108, 107, 102, 105, 106, 101, 103, 104', '2022-06-09 00:03:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 40038, 'Satılır,Torpaq,1 otaqlı - 150 m²,Nəriman Nərimanov m.', 'satilirtorpaq1-otaqli-150-m-neriman-nerimanov-m-22', 22, 1, 0, 6, '350,000', '2333.3333333333', 1, '150', '', 0, 0, 0, 0, 0, 0, 'Təbriz', 'aghakarim.karimov@gmail.com', '552054132', 0, 1, 4, 103, 16, 'Nərimanov metrosunun yaxınlığı', '40.40347679999999', '49.8710897', 'Nərimanov metrosunun yaxınlığında,14 mərtəbəli binanın 2ci mərtəbəsində 150 kv ofis yeri. Sənədi müqavilə.', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '111, 112, 119, 120', '2022-06-09 00:18:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 96270, 'Satılır,Yeni tikili,3 otaqlı - 110 m²,Əhmədli m.', 'satiliryeni-tikili3-otaqli-110-m-ehmedli-m-23', 23, 1, 0, 1, '170,000', '1545.4545454545', 3, '110', '', 10, 17, 1, 1, 0, 0, 'Təbriz', 'aghakarim.karimov@gmail.com', '552074272', 0, 1, 1, 2, 23, 'Xətai r-nu, M.Hadi küç, Əhmədli metrosu', '40.3889218', '49.9539833', 'Xətai r-nu,M.Hadi küç,Əhmədli metro,Yeni tikili, 17/10, 3 otaqlı, əla təmirli. Kupçalı, ipotekaya yararlı, 110 kv mənzil satılır. ', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '127, 126, 125, 124, 121, 123, 122', '2022-06-09 00:27:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 86458, 'Satılır,Qaraj,6.5 sot,Koroğlu m.', 'satilirqaraj65-sotkoroglu-m-24', 24, 1, 0, 8, '150,000', '23076.923076923', 0, '6.5', '', 0, 0, 1, 1, 0, 0, 'Təbriz', 'aghakarim.karimov@gmail.com', '552074272', 0, 1, 9, 78, 12, 'Pirşağıda dənizə yaxın', '40.57052372131047', '49.89115844313048', 'Pirşağıda torpaq. Dənizə yaxın 6.5sot. sənədi bələdiyyə.', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '157, 155, 158, 156', '2022-06-11 13:32:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 64719, 'Satılır,Həyət evi / Bağ,6 otaqlı - 170 m²,Koroğlu m.', 'satilirheyet-evi-bag6-otaqli-170-m-koroglu-m-25', 25, 1, 0, 3, '250,000', '1470.5882352941', 6, '170', '12', 0, 0, 1, 1, 0, 0, 'Azər', 'aghakarim.karimov@gmail.com', '502073344', 1, 1, 9, 73, 12, 'Yalnız real alıcılar üçün', '40.5811666', '50.0415363', 'Bag evi satılır.kupcali,170kv,2 mərtəbəli,2 zal,4 yataq,2 hamam otaq,12 sotun içində.', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '171, 170, 169, 168, 167, 165, 166, 163, 164, 159, 160, 161, 162', '2022-06-12 02:36:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 12005, 'Kiraye aylıq,Obyekt, otaqlı - 580 m²,Memar Əcəmi m.', 'kiraye-ayliqobyekt-otaqli-580-m-memar-ecemi-m-26', 26, 2, 0, 9, '2,500', '4.3103448275862', 0, '580', '', 0, 0, 1, 1, 0, 0, 'Azər', 'aghakarim.karimov@gmail.com', '502073344', 1, 1, 5, 98, 13, 'Əcəmi metrosu yaxınlığında', '40.411076', '49.814243', 'Əcəmi metrosu yaxınlığında kupçalı obyekt icarəyə verilir. 580kv, 10 otaqlı,təmirlidi, mebelləri ilə birlikdə. Uşaq bağçası kimi fəaliyyətdə olub.', 0, 0, 0, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '223, 222, 221, 216, 218, 219, 217, 215, 220', '2022-06-12 03:58:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `ads_complain`
--

CREATE TABLE `ads_complain` (
  `id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `complain_category` int(11) NOT NULL,
  `extra_info` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_complain`
--

INSERT INTO `ads_complain` (`id`, `ads_id`, `complain_category`, `extra_info`, `ip`, `soft`, `created_date`) VALUES
(1, 23, 2, 'bu bir elave melumatdir', '127.0.0.1', '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.5005.63 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"102.0.5005.63\",\"platform\":\"windows\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}', '2022-06-12 00:08:01'),
(2, 18, 4, 'Doğru məlumat deyil\r\n', '127.0.0.1', '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.5005.63 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"102.0.5005.63\",\"platform\":\"windows\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}', '2022-06-12 02:08:50'),
(3, 25, 3, 'jhgjkhkhkhjk', '127.0.0.1', '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.5005.63 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"102.0.5005.63\",\"platform\":\"windows\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}', '2022-06-12 13:27:47'),
(4, 25, 3, 'Əmlak artıq satılıb xahiş edirəm bu elanə çıxarın', '127.0.0.1', '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.5005.63 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"102.0.5005.63\",\"platform\":\"windows\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}', '2022-06-12 13:52:22');

-- --------------------------------------------------------

--
-- Структура таблицы `ads_configuration`
--

CREATE TABLE `ads_configuration` (
  `id` int(11) NOT NULL,
  `home_ads_limit` int(11) NOT NULL,
  `detail_ads_limit` int(11) NOT NULL,
  `category_ads_limit` int(11) NOT NULL,
  `min_photo_count` int(11) NOT NULL,
  `max_photo_count` int(11) NOT NULL,
  `one_number_ads_count` int(11) NOT NULL,
  `ads_expire_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_configuration`
--

INSERT INTO `ads_configuration` (`id`, `home_ads_limit`, `detail_ads_limit`, `category_ads_limit`, `min_photo_count`, `max_photo_count`, `one_number_ads_count`, `ads_expire_day`) VALUES
(1, 1, 30, 1, 3, 16, 3, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `ads_rules`
--

CREATE TABLE `ads_rules` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_rules`
--

INSERT INTO `ads_rules` (`id`, `content`, `status`) VALUES
(1, '                <p class=\"rules-list__item  rule-visible \">\r\n                        <span class=\"rules-list--number\">1.</span>Estate.az saytında bir ay ərzində bir nömrədən 2 pulsuz (təkrar olmayan) elan yerləşdirmək mümkündür. Hər bir növbəti elanın qiyməti - 3 AZN təşkil edir.\r\n                     </p>\r\n                     <p class=\"rules-list__item  rule-visible \">\r\n                        <span class=\"rules-list--number\">2.</span>Elanınız təqdim edərkən, elektron poçt ünvanı, telefon nömrəsi, əmlakın növünü və digər məlumatları dəqiq qeyd edin.\r\n                     </p>\r\n                     <p class=\"rules-list__item  rule-visible \">\r\n                        <span class=\"rules-list--number\">3.</span>Daşınmaz əmlakınızı daha aydın təqdim etmək üçün əmlakınızla bağlı fərqli foto şəkillər əlavə edin.\r\n                     </p>\r\n                     <p class=\"rules-list__item  rule-visible \">\r\n                        <span class=\"rules-list--number\">4.</span>Elanınız dərc edildikdən sonra, telefon nömrəsi, elektron poçt ünvanı, elanın tipi və əmlakın növü bölmələrində dəyişiklik etmək mümkün olmayacaq.\r\n                     </p>\r\n                     <p class=\"rules-list__item  rule-visible \">\r\n                        <span class=\"rules-list--number\">5.</span>Elanınızla bağlı bütün məlumatlar elektron poçt ünvanınıza göndərilir.\r\n                     </p>\r\n                     <p class=\"rules-list__item \">\r\n                        <span class=\"rules-list--number\">6.</span>Zəhmət olmasa daşınmaz əmlakınız haqqında məlumatları düzgün qeyd edin. </p>              ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ads_type`
--

CREATE TABLE `ads_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_type`
--

INSERT INTO `ads_type` (`id`, `type_name`, `seo_link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Satış', 'satish', 1, '2022-04-21 00:15:27', '2022-04-21 00:15:27', '2022-04-21 00:15:27'),
(2, 'Kirayə', 'kiraye', 1, '2022-04-21 00:15:27', '2022-04-21 00:15:27', '2022-04-21 00:15:27'),
(3, 'Kirayə günlük', 'kiraye_gunluk', 1, '2022-04-21 00:15:27', '2022-04-21 00:15:27', '2022-04-21 00:15:27');

-- --------------------------------------------------------

--
-- Структура таблицы `ads_users`
--

CREATE TABLE `ads_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `register_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_format_second` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobileBeautified` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `balance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_registered` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `browser_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verify_code` int(11) DEFAULT NULL,
  `register_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `ads_users`
--

INSERT INTO `ads_users` (`id`, `name`, `email`, `password`, `register_token`, `phone`, `mobile`, `mobile_format_second`, `mobileBeautified`, `provider_name`, `balance`, `is_registered`, `status`, `last_login`, `ip`, `soft`, `browser_name`, `second_email`, `email_verify_code`, `register_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cavid', 'weboxagency@gmail.com', '$2y$10$p1I.7WEQUNuQRWJdZMMCHejIymE9SjradsTrCK0ep.p4c4PRWySFm', '', '0708544301', '+994708544301', '708544301', '(070) 854-43-01', 'Narmobile', '0', 0, 1, '0000-00-00 00:00:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'Google Chrome', NULL, NULL, '2022-05-07 20:35:59', NULL, NULL),
(3, 'Ağakərim', 'aghakarimsolmaz@gmail.com', '$2y$10$KxIGhNVpSW2x3HddFbyGOOUnzkD.X0IN4N0BT3goruxbJaqffZAmC', 'b5a4a7779ba8fcad2676c490c042ddb517ca26049dae2afcbfb0f9d7658072a9', '0998812999', '+994998812999', '998812999', '(099) 881-29-99', 'Bakcell', '0', 0, 2, '0000-00-00 00:00:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'Google Chrome', NULL, NULL, '2022-06-05 14:41:32', NULL, NULL),
(6, 'Ağakərim', 'phpkodum@gmail.com', '$2y$10$RUY/.HhzUc4nSy1vJrjMN.O3JFeA0r0sHdklpuxfijIT0InFeyXvG', '', '0552323402', '+994552323402', '552323402', '(055) 232-34-02', 'Bakcell', '0', 0, 1, '2022-06-12 14:25:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'Google Chrome', NULL, NULL, '2022-06-12 00:34:01', NULL, NULL),
(7, 'Cavid', 'jkhkjhkhjhj@gmail.com', '$2y$10$HLIL17cV9MdYRO7cBzyo9.NsVTd6Qp1LSqvmFwT3gQVLZJPROgrke', '6037fc5d37d51a6d59ff51cb9395b6a071728f950a11675379e81dc67751ceab', '0552054132', '+994552054132', '552054132', '(055) 205-41-32', 'Bakcell', '0', 1, 2, '0000-00-00 00:00:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'Google Chrome', NULL, NULL, '2022-06-12 16:20:18', NULL, NULL),
(11, 'jkhkhjkhjjkh', 'jkhkhjhkj@Gmail.com', '$2y$10$9fh/.7x9UnTNENLHTLCUC.6luj4c2xZZVPHXjEILBflKA8Xvh9lu.', '0b2908a2d30bbca67dce5aff6d48e4b770f516d4aa4009f93311d47d3e3180af', '0556000193', '+994556000193', '556000193', '(055) 600-01-93', 'Bakcell', '0', 1, 2, '0000-00-00 00:00:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'Google Chrome', NULL, NULL, '2022-06-12 16:19:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `ads_users_reset_password`
--

CREATE TABLE `ads_users_reset_password` (
  `key` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `credential_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ads_users_reset_password`
--

INSERT INTO `ads_users_reset_password` (`key`, `email`, `credential_id`, `created_at`) VALUES
('53c6adf68d527037aa7a089dda60b697943cb7c4c289373f5bf53f5d4e4e6806bb0b0d79bdf4ff654c68f1f9fac50671eb36db47f085daee01e34fd0588af39c', 'weboxagency@gmail.com', '1', '2022-05-09 01:34:36');

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `external_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `side` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `page`, `external_link`, `side`, `type`, `img`, `status`) VALUES
(1, 'test', 'test', '1', '1', 'tests', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `symbol` varchar(25) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `stu_generate` tinyint(3) DEFAULT 0,
  `stu_username_prefix` varchar(255) NOT NULL,
  `stu_default_password` varchar(255) NOT NULL,
  `grd_generate` tinyint(3) DEFAULT 0,
  `grd_username_prefix` varchar(255) NOT NULL,
  `grd_default_password` varchar(255) NOT NULL,
  `teacher_restricted` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `branch`
--

INSERT INTO `branch` (`id`, `name`, `school_name`, `email`, `mobileno`, `currency`, `symbol`, `city`, `state`, `address`, `stu_generate`, `stu_username_prefix`, `stu_default_password`, `grd_generate`, `grd_username_prefix`, `grd_default_password`, `teacher_restricted`, `created_at`, `updated_at`) VALUES
(1, 'Estate.az', 'Estate.az', 'info@estate.az', '0708544301', 'AZN', '₼', 'Baku', 'Narimanov', 'Address', 0, '', '', 0, '', '', 1, '2022-04-19 20:03:43', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 - Aktiv',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `seo_link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bakı', 'baki', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(2, 'Xırdalan', 'xirdalan', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(3, 'Sumqayıt', 'sumqayit', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(4, 'Ağcabədi', 'agcabedi', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(5, 'Ağdam', 'agdam', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(6, 'Ağdaş', 'agdas', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(7, 'Ağstafa', 'agstafa', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(8, 'Ağsu', 'agsu', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(9, 'Astara', 'astara', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(10, 'Balakən', 'balaken', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(11, 'Beyləqan', 'beyleqan', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(12, 'Bərdə', 'berde', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(13, 'Biləsuvar', 'bilesuvar', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(14, 'Cəlilabad', 'celilabad', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(15, 'Daşkəsən', 'daskesen', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(16, 'Fizuli', 'fizuli', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(17, 'Gədəbəy', 'gedebey', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(18, 'Gəncə', 'gence', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(19, 'Goranboy', 'goranboy', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(20, 'Göyçay', 'goycay', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(21, 'Göygöl', 'goygol', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(22, 'Göytəpə', 'goytepe', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(23, 'Hacıqabul', 'haciqabul', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(24, 'İmişli', 'imisli', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(25, 'İsmayıllı', 'ismayilli', 1, '2022-04-20 19:26:25', '2022-04-20 19:26:25', '2022-04-20 19:26:25'),
(26, 'Kürdəmir', 'kurdemir', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(27, 'Lerik', 'lerik', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(28, 'Lənkəran', 'lenkeran', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(29, 'Masallı', 'masalli', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(30, 'Mingəçevir', 'mingecevir', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(31, 'Naxçıvan', 'naxcivan', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(32, 'Naftalan', 'naftalan', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(33, 'Neftçala', 'neftcala', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(34, 'Oğuz', 'oguz', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(35, 'Qax', 'qax', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(36, 'Qazax', 'qazax', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(37, 'Qəbələ', 'qebele', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(38, 'Quba', 'quba', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(39, 'Qusar', 'qusar', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(40, 'Saatlı', 'saatli', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(41, 'Sabirabad', 'sabirabad', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(42, 'Şabran', 'sabran', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(43, 'Salyan', 'salyan', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(44, 'Şamaxı', 'samaxi', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(45, 'Şəki', 'seki', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(46, 'Şəmkir', 'semkir', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(47, 'Şirvan', 'sirvan', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(48, 'Siyəzən', 'siyezen', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(49, 'Tərtər', 'terter', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(50, 'Tovuz', 'tovuz', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(51, 'Ucar', 'ucar', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(52, 'Xaçmaz', 'xacmaz', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(53, 'Xızı', 'xizi', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(54, 'Xudat', 'xudat', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(55, 'Yevlax', 'yevlax', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(56, 'Zaqatala', 'zaqatala', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23'),
(57, 'Zərdab', 'zerdab', 1, '2022-04-20 19:31:23', '2022-04-20 19:31:23', '2022-04-20 19:31:23');

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_numeric` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `custom_field`
--

CREATE TABLE `custom_field` (
  `id` int(11) NOT NULL,
  `form_to` varchar(50) DEFAULT NULL,
  `field_label` varchar(100) NOT NULL,
  `default_value` text DEFAULT NULL,
  `field_type` enum('text','textarea','dropdown','date','checkbox','number','url','email') NOT NULL,
  `required` varchar(5) NOT NULL DEFAULT 'false',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `show_on_table` varchar(5) DEFAULT NULL,
  `field_order` int(11) NOT NULL,
  `bs_column` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `custom_fields_values`
--

CREATE TABLE `custom_fields_values` (
  `id` int(11) NOT NULL,
  `relid` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_region` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 -Aktiv',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `seo_link`, `parent_region`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Həzi Aslanov', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Əhmədli', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'NZS', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Köhnə Günəşli', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ceyranbatan', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Digah', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Fatmayi', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Görədil', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Hökməli', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Köhnə Corat', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Masazır', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Mehdiabad', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Müşviqabad', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Novxanı', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Pirəkəşkül', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Qobu', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Saray', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Yeni Corat', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Şimal Dres', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '28 may', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '6-cı mikrorayon', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '7-ci mikrorayon', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '8-ci mikrorayon', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '9-cu mikrorayon', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Biləcəri', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Binəqədi', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'M. Rəsulzadə', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Sulutəpə', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Xocasən', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Xutor', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Dərnəgül', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Çiçək', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Bibi-Heybət', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Ələt', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Lökbatan', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Puta', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Qızıldaş', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Qobustan', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Sahil', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Səngəçal', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Şıxov', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Şubani', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Baş Ələt', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Ceyildağ', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Heybət', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Korgöz', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Kotal', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Pirsaat', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Qaradağ', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Qarakosa', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Şonqar', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Ümid', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Yeni Ələt', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Bahar', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Bülbülə', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Dədə Qorqud', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Əmircan', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Günəşli', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Hövsan', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Zığ', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Massiv A', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Massiv B', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Massiv D', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Massiv G', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Massiv V', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Qaraçuxur', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Şərq', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Suraxanı', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Yeni Günəşli', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Yeni Suraxanı', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Bakıxanov', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Balaxanı', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Bilgəh', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Kürdəxanı', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Maştağa', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Məmmədli', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Nardaran', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Pirşağı', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Ramana', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Sabunçu', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Savalan', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Yeni Balaxanı', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Yeni Ramana', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Zabrat', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Binə', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Buzovna', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Dübəndi', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Gürgən', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Mərdəkan', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Qala', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Şağan', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Şüvəlan', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Türkan', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Zirə', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Zağulba', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '1-ci mikrorayon', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '2-ci mikrorayon', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '3-cü mikrorayon', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '4-cü mikrorayon', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '5-ci mikrorayon', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Kubinka', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Böyükşor', '', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Montin', '', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '8-ci kilometr', '', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Keşlə', '', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '20-ci sahə', '', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Badamdar', '', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Bayıl', '', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Çilov', '', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Pirallahı', '', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Yasamal', '', 87, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Yeni Yasamal', '', 87, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Alatava', '', 87, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `email_config`
--

CREATE TABLE `email_config` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `protocol` varchar(255) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(100) DEFAULT NULL,
  `smtp_encryption` varchar(10) DEFAULT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email_config`
--

INSERT INTO `email_config` (`id`, `email`, `protocol`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `smtp_encryption`, `branch_id`) VALUES
(1, 'noreply@estate.az', 'smtp', 'smtp.hostinger.com', 'noreply@estate.az', 'Komputer0101001@', '465', 'ssl', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `tags`) VALUES
(1, 'account_registered', '{institute_name}, {name}, {login_username}, {password}, {user_role}, {login_url}'),
(2, 'forgot_password', '{institute_name}, {username}, {email}, {reset_url}'),
(3, 'change_password', '{institute_name}, {name}, {email}, {password}'),
(4, 'new_message_received', '{institute_name}, {recipient}, {message}, {message_url}'),
(5, 'payslip_generated', '{institute_name}, {username}, {month_year}, {payslip_url}'),
(6, 'award', '{institute_name}, {winner_name}, {award_name}, {gift_item}, {award_reason}, {given_date}'),
(7, 'leave_approve', '{institute_name}, {applicant_name}, {start_date}, {end_date}, {comments}'),
(8, 'leave_reject', '{institute_name}, {applicant_name}, {start_date}, {end_date}, {comments}'),
(9, 'advance_salary_approve', '{institute_name}, {applicant_name}, {deduct_motnh}, {amount}, {comments}'),
(10, 'advance_salary_reject', '{institute_name}, {applicant_name}, {deduct_motnh}, {amount}, {comments}'),
(11, 'apply_online_admission', '{institute_name}, {admission_id}, {applicant_name}, {applicant_mobile}, {class}, {section}, {apply_date}, {payment_url}, {admission_copy_url}, {paid_amount}'),
(12, 'student_admission', '{institute_name}, {academic_year}, {admission_date}, {admission_no}, {roll}, {category}, {student_name}, {student_mobile}, {class}, {section}, {login_username}, {password}, {login_url}'),
(13, 'registration', '{logo}, {url}, {name}, {activation_url}, {mobile}'),
(14, 'user_reset_password', '{logo}, {url}, {name}, {reset_url}, {mobile}'),
(15, 'change_email_verification', '{logo}, {url}, {name}, {rand}');

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates_details`
--

CREATE TABLE `email_templates_details` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `template_body` text NOT NULL,
  `notified` tinyint(1) NOT NULL DEFAULT 1,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email_templates_details`
--

INSERT INTO `email_templates_details` (`id`, `template_id`, `subject`, `template_body`, `notified`, `branch_id`) VALUES
(1, 13, 'Estate.az - Qeydiyyatınız tamamlandı', '  \n     <meta charset=\"utf-8\">\n     <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\n     <title>Email Confirmation</title>\n     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n     <style type=\"text/css\">\n        a:hover {text-decoration: underline !important;}\n     </style>\n  \n  \n     <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\" style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;\">\n        <tbody><tr>\n           <td>\n              <table style=\"background-color: #f2f3f8; max-width:670px; margin:0 auto;\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\n                 <tbody><tr>\n                    <td style=\"height:80px;\">&nbsp;</td>\n                 </tr>\n                 <tr>\n                    <td style=\"text-align:center;\">\n                       <a href=\"{url}\" title=\"{url}\" target=\"_blank\">\n                       <img width=\"110\" src=\"{logo}\" title=\"{url}\" alt=\"{url}\">\n                       </a>\n                    </td>\n                 </tr>\n                 <tr>\n                    <td style=\"height:20px;\">&nbsp;</td>\n                 </tr>\n                 <tr>\n                    <td>\n                       <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">\n                          <tbody><tr>\n                             <td style=\"height:40px;\">&nbsp;</td>\n                          </tr>\n                          <tr>\n                             <td style=\"padding:0 35px;\">\n                                <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:Rubik,sans-serif;\">Hörmətli {name}, xoş gəldiniz.\n                                </h1>\n                                <p style=\"font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;\">\n                                   Zəhmət olmazsa, aşağıdakı linkdən <br>və ya <a href=\"{activation_url}\">bu linkdən</a> istifadə edərək, saytımızdakı hesabınızı aktivləşdirin.\n                                </p>\n                                <span style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>\n                                <p style=\"color:#455056; font-size:18px;line-height:20px; margin:0; font-weight: 500;\">\n                                   <strong style=\"display: block;font-size: 13px; margin: 0 0 4px; color:rgba(0,0,0,.64); font-weight:normal;\">Qeydiyyat üçün istifadə etdiyiniz mobil nömrə</strong>{mobile}\n                                  \n                                </p>\n                                <a href=\"{activation_url}\" style=\"background:#dca73d;text-decoration:none !important; display:inline-block; font-weight:500; margin-top:24px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">\n                                   Təsdiq et\n                               </a>\n                             </td>\n                          </tr>\n                          <tr>\n                             <td style=\"height:40px;\">&nbsp;</td>\n                          </tr>\n                       </tbody></table>\n                    </td>\n                 </tr>\n                 <tr>\n                    <td style=\"height:20px;\">&nbsp;</td>\n                 </tr>\n                 <tr>\n                    <td style=\"text-align:center;\">\n                       <p style=\"font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;\"> Powered by ♥ <strong>WeBoX Agency</strong> ♥</p>\n                    </td>\n                 </tr>\n                 <tr>\n                    <td style=\"height:80px;\">&nbsp;</td>\n                 </tr>\n              </tbody></table>\n           </td>\n        </tr>\n     </tbody></table>\n  \n', 1, 1),
(3, 14, 'Estate.az - Şifrə bərpası', '\n  <meta charset=\"utf-8\">\n  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\n  <title>Email Confirmation</title>\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n  <style type=\"text/css\">\n     a:hover {text-decoration: underline !important;}\n  </style>\n\n\n  <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\" style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;\">\n     <tbody><tr>\n        <td>\n           <table style=\"background-color: #f2f3f8; max-width:670px; margin:0 auto;\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\n              <tbody><tr>\n                 <td style=\"height:80px;\">&nbsp;</td>\n              </tr>\n              <tr>\n                 <td style=\"text-align:center;\">\n                    <a href=\"{url}\" title=\"{url}\" target=\"_blank\">\n                    <img width=\"110\" src=\"{logo}\" title=\"{url}\" alt=\"{url}\">\n                    </a>\n                 </td>\n              </tr>\n              <tr>\n                 <td style=\"height:20px;\">&nbsp;</td>\n              </tr>\n              <tr>\n                 <td>\n                    <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">\n                       <tbody><tr>\n                          <td style=\"height:40px;\">&nbsp;</td>\n                       </tr>\n                       <tr>\n                          <td style=\"padding:0 35px;\">\n                             <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:Rubik,sans-serif;\">Hörmətli {name}, şifrənizi unutmusunuz?\n                             </h1>\n                             <p style=\"font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;\">\n                                Zəhmət olmazsa, aşağıdakı keçiddən <br>və ya <a href=\"{reset_url}\">bu linkdən</a> istifadə edərək, şifrənizi sıfırlayın.\n                             </p>\n                             <span style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>\n                             <p style=\"color:#455056; font-size:18px;line-height:20px; margin:0; font-weight: 500;\">\n                                <strong style=\"display: block;font-size: 13px; margin: 0 0 4px; color:rgba(0,0,0,.64); font-weight:normal;\">Saytımızda istifadə etdiyiniz mobil nömrə</strong>{mobile}\n                               \n                             </p>\n                             <a href=\"{reset_url}\" style=\"background:#dca73d;text-decoration:none !important; display:inline-block; font-weight:500; margin-top:24px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">\n                                Şifrəni sıfırla\n                            </a>\n                          </td>\n                       </tr>\n                       <tr>\n                          <td style=\"height:40px;\">&nbsp;</td>\n                       </tr>\n                    </tbody></table>\n                 </td>\n              </tr>\n              <tr>\n                 <td style=\"height:20px;\">&nbsp;</td>\n              </tr>\n              <tr>\n                 <td style=\"text-align:center;\">\n                    <p style=\"font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;\"> Powered by ♥ <strong>WeBoX Agency</strong> ♥</p>\n                 </td>\n              </tr>\n              <tr>\n                 <td style=\"height:80px;\">&nbsp;</td>\n              </tr>\n           </tbody></table>\n        </td>\n     </tr>\n  </tbody></table>\n\n', 1, 1),
(4, 15, 'Estate.az - Təsdiq kodu', '   \r\n      <meta charset=\"utf-8\">\r\n      <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\r\n      <title>Email Confirmation</title>\r\n      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n      <style type=\"text/css\">\r\n         a:hover {text-decoration: underline !important;}\r\n      </style>\r\n   \r\n   \r\n      <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\" style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;\">\r\n         <tbody><tr>\r\n            <td>\r\n               <table style=\"background-color: #f2f3f8; max-width:670px; margin:0 auto;\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                  <tbody><tr>\r\n                     <td style=\"height:80px;\"> </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td style=\"text-align:center;\">\r\n                        <a href=\"{url}\" title=\"{url}\" target=\"_blank\">\r\n                        <img width=\"110\" src=\"{logo}\" title=\"{url}\" alt=\"{url}\">\r\n                        </a>\r\n                     </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td style=\"height:20px;\"> </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td>\r\n                        <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">\r\n                           <tbody><tr>\r\n                              <td style=\"height:40px;\"> </td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td style=\"padding:0 35px;\">\r\n                                 <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:Rubik,sans-serif;\">Hörmətli {name}, \r\n                                 </h1>\r\n                                 <p style=\"font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;\">\r\n                                    Zəhmət olmazsa, aşağıdakı kodu saytımızdakı lazımlı xanaya yazaraq təsdiq edin.\r\n                                 </p>\r\n                                 <span style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>\r\n                                 <p style=\"color:#455056; font-size:18px;line-height:20px; margin:0; font-weight: 700;\">\r\n                                    <strong style=\"display: block;font-size: 23px; margin: 0 0 4px; color:rgba(0,0,0,.64); font-weight:normal;\">Təsdiq Kodu</strong>\r\n                                    <span style=\"color:#dca73d;text-decoration:none !important; display:inline-block; font-weight:1000; margin-top:14px; text-transform:uppercase; font-size:34px;padding:10px 24px;display:inline-block;\">{rand}</span>\r\n                                 </p>\r\n                              </td>\r\n                           </tr>\r\n                           <tr>\r\n                              <td style=\"height:40px;\"> </td>\r\n                           </tr>\r\n                        </tbody></table>\r\n                     </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td style=\"height:20px;\"> </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td style=\"text-align:center;\">\r\n                        <p style=\"font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;\"> Powered by ♥ <strong>WeBoX Agency</strong> ♥</p>\r\n                     </td>\r\n                  </tr>\r\n                  <tr>\r\n                     <td style=\"height:80px;\"> </td>\r\n                  </tr>\r\n               </tbody></table>\r\n            </td>\r\n         </tr>\r\n      </tbody></table>\r\n   \r\n', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `estate_type`
--

CREATE TABLE `estate_type` (
  `id` int(11) NOT NULL,
  `estate_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 - Aktiv',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `estate_type`
--

INSERT INTO `estate_type` (`id`, `estate_type_name`, `seo_link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yeni tikili', 'yeni-tikili', 1, '2022-04-23 22:25:40', '2022-04-23 22:25:40', '2022-04-23 22:25:40'),
(2, 'Köhnə tikili', 'kohne-tikili', 1, '2022-04-23 22:25:40', '2022-04-23 22:25:40', '2022-04-23 22:25:40'),
(3, 'Həyət evi / Bağ', 'heyet-evi-bag', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22'),
(5, 'Villa', 'vila', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22'),
(6, 'Ofis', 'ofis', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22'),
(8, 'Torpaq', 'torpaq', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22'),
(9, 'Obyekt', 'obyekt', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22'),
(10, 'Qaraj', 'qaraj', 1, '2022-04-23 22:26:22', '2022-04-23 22:26:22', '2022-04-23 22:26:22');

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_about`
--

CREATE TABLE `front_cms_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `about_image` varchar(255) NOT NULL,
  `elements` mediumtext NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_about`
--

INSERT INTO `front_cms_about` (`id`, `title`, `subtitle`, `page_title`, `content`, `banner_image`, `about_image`, `elements`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Welcome to School', 'Best Education Mangment Systems', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros amet sollicitudin interdum. Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n                        </p>\r\n                        <p>\r\n                            Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Mauris sit amet neque nec nunc gravida. \r\n                        </p>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 col-12\">\r\n                                <ul class=\"list-unstyled list-style-3\">\r\n                                    <li><a href=\"#\">Cardiothoracic Surgery</a></li>\r\n                                    <li><a href=\"#\">Cardiovascular Diseases</a></li>\r\n                                    <li><a href=\"#\">Ophthalmology</a></li>\r\n                                    <li><a href=\"#\">Dermitology</a></li>\r\n                                </ul>\r\n                            </div>\r\n                            <div class=\"col-sm-6 col-12\">\r\n                                <ul class=\"list-unstyled list-style-3\">\r\n                                    <li><a href=\"#\">Cardiothoracic Surgery</a></li>\r\n                                    <li><a href=\"#\">Cardiovascular Diseases</a></li>\r\n                                    <li><a href=\"#\">Ophthalmology</a></li>\r\n                                </ul>\r\n                            </div>\r\n                        </div>', 'about1.jpg', 'about1.png', '{\"cta_title\":\"Get in touch to join our community\",\"button_text\":\"Contact Our Office\",\"button_url\":\"contact\"}', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_admission`
--

CREATE TABLE `front_cms_admission` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `terms_conditions_title` varchar(255) DEFAULT NULL,
  `terms_conditions_description` text NOT NULL,
  `fee_elements` text DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_admission`
--

INSERT INTO `front_cms_admission` (`id`, `title`, `description`, `page_title`, `terms_conditions_title`, `terms_conditions_description`, `fee_elements`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Make An Admission', '<p>Lorem ipsum dolor sit amet, eum illum dolore concludaturque ex, ius latine adipisci no. Pro at nullam laboramus definitiones. Mandamusconceptam omittantur cu cum. Brute appetere it scriptorem ei eam, ne vim velit novum nominati. Causae volutpat percipitur at sed ne.</p>\r\n', 'Admission', '', '', '', 'admission1.jpg', 'Ramom - School Management System With CMS', 'Ramom  Admission Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_admitcard`
--

CREATE TABLE `front_cms_admitcard` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `templete_id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_admitcard`
--

INSERT INTO `front_cms_admitcard` (`id`, `page_title`, `templete_id`, `banner_image`, `description`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Admit Card', 1, 'admit_card1.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', 'Ramom - School Management System With CMS', 'Ramom Admit Card Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_certificates`
--

CREATE TABLE `front_cms_certificates` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_certificates`
--

INSERT INTO `front_cms_certificates` (`id`, `page_title`, `banner_image`, `description`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Certificates', 'certificates1.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', 'Ramom - School Management System With CMS', 'Ramom Admit Card Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_contact`
--

CREATE TABLE `front_cms_contact` (
  `id` int(11) NOT NULL,
  `box_title` varchar(255) DEFAULT NULL,
  `box_description` varchar(500) DEFAULT NULL,
  `box_image` varchar(255) DEFAULT NULL,
  `form_title` varchar(355) DEFAULT NULL,
  `address` varchar(355) DEFAULT NULL,
  `phone` varchar(355) DEFAULT NULL,
  `email` varchar(355) DEFAULT NULL,
  `submit_text` varchar(355) NOT NULL,
  `map_iframe` text DEFAULT NULL,
  `page_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_contact`
--

INSERT INTO `front_cms_contact` (`id`, `box_title`, `box_description`, `box_image`, `form_title`, `address`, `phone`, `email`, `submit_text`, `map_iframe`, `page_title`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'WE\'D LOVE TO HEAR FROM YOU', 'Fusce convallis diam vitae velit tempus rutrum. Donec nisl nisl, vulputate eu sapien sed, adipiscing vehicula massa. Mauris eget commodo neque, id molestie enim.', 'contact-info-box1.png', 'Get in touch by filling the form below', '4896  Romrog Way, LOS ANGELES,\r\nCalifornia', '954-648-1802, \r\n963-612-1782', 'info@example.com\r\nsupport@example.com', 'Send', '<iframe width=\"100%\" height=\"350\" id=\"gmap_canvas\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>', 'Contact Us', 'contact1.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_events`
--

CREATE TABLE `front_cms_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_events`
--

INSERT INTO `front_cms_events` (`id`, `title`, `description`, `page_title`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Upcoming Events', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p><p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>', 'Events', 'events1.jpg', 'Ramom - School Management System With CMS', 'Ramom Events Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_exam_results`
--

CREATE TABLE `front_cms_exam_results` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `grade_scale` tinyint(1) NOT NULL,
  `attendance` tinyint(1) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_exam_results`
--

INSERT INTO `front_cms_exam_results` (`id`, `page_title`, `grade_scale`, `attendance`, `banner_image`, `description`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Exam Results', 1, 1, 'exam_results1.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', 'Ramom - School Management System With CMS', 'Ramom Admit Card Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_faq`
--

CREATE TABLE `front_cms_faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_faq`
--

INSERT INTO `front_cms_faq` (`id`, `title`, `description`, `page_title`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Frequently Asked Questions', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>\r\n\r\n<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>', 'Faq', 'faq1.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_faq_list`
--

CREATE TABLE `front_cms_faq_list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_faq_list`
--

INSERT INTO `front_cms_faq_list` (`id`, `title`, `description`, `branch_id`) VALUES
(1, 'Any Information you provide on applications for disability, life or accidental insurance ?', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco quat. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\n</p>\r\n<ul>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>\r\n<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliq.</li>\r\n<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco quat. It is a long established fact.</li>\r\n<li>That a reader will be distracted by the readable content of a page when looking at its layout.</li>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>\r\n<li>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>\r\n<li>Quis nostrud exercitation ullamco quat. It is a long established fact that a reader will be distracted.</li>\r\n<li>Readable content of a page when looking at its layout.</li>\r\n<li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>\r\n<li>Opposed to using \'Content here, content here\', making it look like readable English.</li>\r\n</ul>', 1),
(2, 'Readable content of a page when looking at its layout ?', '<p>\r\n                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.\r\n                            </p>\r\n                            <ol>\r\n                                <li>Quis nostrud exercitation ullamco quat. It is a long established fact that a reader will be distracted.</li>\r\n                                <li>Readable content of a page when looking at its layout.</li>\r\n                                <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>\r\n                                <li>Opposed to using \'Content here, content here\', making it look like readable English.</li>\r\n                            </ol>\r\n                            <p>\r\n                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.\r\n                            </p>', 1),
(3, 'Opposed to using \'Content here, content here\', making it look like readable English ?', '<p>\r\n                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.\r\n                            </p>\r\n                            <ol>\r\n                                <li>Quis nostrud exercitation ullamco quat. It is a long established fact that a reader will be distracted.</li>\r\n                                <li>Readable content of a page when looking at its layout.</li>\r\n                                <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>\r\n                                <li>Opposed to using \'Content here, content here\', making it look like readable English.</li>\r\n                            </ol>\r\n                            <p>\r\n                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.\r\n                            </p>', 1),
(4, 'Readable content of a page when looking at its layout ?', '<p>\r\n                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.\r\n                            </p>\r\n                            <ol>\r\n                                <li>Quis nostrud exercitation ullamco quat. It is a long established fact that a reader will be distracted.</li>\r\n                                <li>Readable content of a page when looking at its layout.</li>\r\n                                <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>\r\n                                <li>Opposed to using \'Content here, content here\', making it look like readable English.</li>\r\n                            </ol>\r\n                            <p>\r\n                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.\r\n                            </p>', 1),
(5, 'What types of documents are required to travel?', '<p><strong>Lorem ipsum</strong> dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p>\r\n\r\n<ol>\r\n	<li>labores explicari qui</li>\r\n	<li>labores explicari qui</li>\r\n	<li>labores explicari quilabores explicari qui</li>\r\n	<li>labores explicari qui</li>\r\n</ol>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_gallery`
--

CREATE TABLE `front_cms_gallery` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_gallery`
--

INSERT INTO `front_cms_gallery` (`id`, `page_title`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Gallery', 'gallery1.jpg', 'Ramom - School Management System With CMS', 'Ramom Gallery  Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_gallery_category`
--

CREATE TABLE `front_cms_gallery_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_gallery_content`
--

CREATE TABLE `front_cms_gallery_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumb_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `elements` longtext NOT NULL,
  `show_web` tinyint(4) NOT NULL DEFAULT 0,
  `branch_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_home`
--

CREATE TABLE `front_cms_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `item_type` varchar(20) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `elements` mediumtext NOT NULL,
  `branch_id` int(11) NOT NULL,
  `active` tinyint(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_home`
--

INSERT INTO `front_cms_home` (`id`, `title`, `subtitle`, `item_type`, `description`, `elements`, `branch_id`, `active`) VALUES
(1, 'Welcome To Education', 'We will give you future', 'wellcome', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content.\r\n\r\nMaking it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '{\"image\":\"wellcome1.png\"}', 1, 1),
(2, 'Experience Teachers Team', NULL, 'teachers', 'Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.', '{\"teacher_start\":\"0\",\"image\":\"featured-parallax1.jpg\"}', 1, 1),
(3, 'WHY CHOOSE US', NULL, 'services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', 1, 1),
(4, 'Request for a free Education Class', 'Medical Services', 'cta', '', '{\"mobile_no\":\"+2484-398-8987\",\"button_text\":\"Request Now\",\"button_url\":\"http:\\/\\/localhost\\/multi_pro\\/home\\/admission\\/\"}', 1, 1),
(5, 'Wellcome To <span>Ramom</span>', NULL, 'slider', 'Lorem Ipsum is simply dummy text printer took a galley of type and scrambled it to make a type specimen book.', '{\"position\":\"c-left\",\"button_text1\":\"View Services\",\"button_url1\":\"https:\\/\\/www.youtube.com\\/watch?v=Zec8KQmoSOU\",\"button_text2\":\"Learn More\",\"button_url2\":\"#\",\"image\":\"home-slider-1592582779.jpg\"}', 1, 1),
(6, 'Online <span>Live Class</span> Facility', NULL, 'slider', 'Lorem Ipsum is simply dummy text printer took a galley of type and scrambled it to make a type specimen book.', '{\"position\":\"c-left\",\"button_text1\":\"Read More\",\"button_url1\":\"#\",\"button_text2\":\"Get Started\",\"button_url2\":\"#\",\"image\":\"home-slider-1592582805.jpg\"}', 1, 1),
(7, 'Online Classes', NULL, 'features', 'Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu.', '{\"button_text\":\"Read More\",\"button_url\":\"#\",\"icon\":\"fas fa-video\"}', 1, 1),
(8, 'Scholarship', NULL, 'features', 'Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu.', '{\"button_text\":\"Read More\",\"button_url\":\"#\",\"icon\":\"fas fa-graduation-cap\"}', 1, 1),
(9, 'Books & Liberary', NULL, 'features', 'Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu.', '{\"button_text\":\"Read More\",\"button_url\":\"#\",\"icon\":\"fas fa-book-reader\"}', 1, 1),
(10, 'Trending Courses', NULL, 'features', 'Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu.', '{\"button_text\":\"Read More\",\"button_url\":\"#\",\"icon\":\"fab fa-discourse\"}', 1, 1),
(11, 'WHAT PEOPLE SAYS', NULL, 'testimonial', 'Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.', '', 1, 1),
(12, '20 years experience in the field of study', NULL, 'statistics', 'Lorem Ipsum is simply dummy text printer took a galley of type and scrambled it to make a type specimen book.', '{\"image\":\"counter-parallax1.jpg\",\"widget_title_1\":\"Certified Teachers\",\"widget_icon_1\":\"fas fa-user-tie\",\"type_1\":\"teacher\",\"widget_title_2\":\"Students Enrolled\",\"widget_icon_2\":\"fas fa-user-graduate\",\"type_2\":\"student\",\"widget_title_3\":\"Classes\",\"widget_icon_3\":\"fas fa-graduation-cap\",\"type_3\":\"class\",\"widget_title_4\":\"Section\",\"widget_icon_4\":\"fas fa-award\",\"type_4\":\"section\"}', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_home_seo`
--

CREATE TABLE `front_cms_home_seo` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_home_seo`
--

INSERT INTO `front_cms_home_seo` (`id`, `page_title`, `meta_keyword`, `meta_description`, `branch_id`) VALUES
(1, 'Estate.az - Daşınmaz əmlak platforması', 'Estate.Az - Ev alqi satqisi , kiraye evler, dasinmaz emlak, ev elanlari, bina, evler, menziller, villalar, bag evleri, heyet evleri, ipotekada olan evler, kreditle satilan evler', 'Estate.Az - Ev alqi satqisi , kiraye evler, dasinmaz emlak, ev elanlari, bina, evler, menziller, villalar, bag evleri, heyet evleri, ipotekada olan evler, kreditle satilan evler', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_menu`
--

CREATE TABLE `front_cms_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `ordering` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `open_new_tab` int(11) NOT NULL DEFAULT 0,
  `ext_url` tinyint(3) NOT NULL DEFAULT 0,
  `ext_url_address` text DEFAULT NULL,
  `publish` tinyint(3) NOT NULL,
  `system` tinyint(3) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_menu`
--

INSERT INTO `front_cms_menu` (`id`, `title`, `alias`, `ordering`, `parent_id`, `open_new_tab`, `ext_url`, `ext_url_address`, `publish`, `system`, `branch_id`, `created_at`) VALUES
(1, 'Home', 'index', 1, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(2, 'Events', 'events', 3, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(3, 'Teachers', 'teachers', 2, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(4, 'About Us', 'about', 4, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(5, 'FAQ', 'faq', 5, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(6, 'Online Admission', 'admission', 6, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(7, 'Contact Us', 'contact', 9, 0, 0, 0, '', 1, 1, 0, '2019-08-09 12:18:54'),
(8, 'Pages', 'pages', 8, 0, 0, 1, '#', 1, 1, 0, '2019-08-09 12:18:54'),
(9, 'Admit Card', 'admit_card', 10, 8, 0, 0, '', 1, 1, 0, '2021-03-16 04:24:32'),
(10, 'Exam Results', 'exam_results', 11, 8, 0, 0, '', 1, 1, 0, '2021-03-16 04:24:32'),
(13, 'Certificates', 'certificates', 14, 8, 0, 0, '', 1, 1, 0, '2021-03-21 12:04:44'),
(14, 'Gallery', 'gallery', 7, 0, 0, 0, '', 1, 1, 0, '2021-03-21 12:04:44');

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_menu_visible`
--

CREATE TABLE `front_cms_menu_visible` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `parent_id` varchar(11) DEFAULT NULL,
  `ordering` varchar(20) DEFAULT NULL,
  `invisible` tinyint(2) NOT NULL DEFAULT 1,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_pages`
--

CREATE TABLE `front_cms_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_services`
--

CREATE TABLE `front_cms_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `parallax_image` varchar(255) DEFAULT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_services`
--

INSERT INTO `front_cms_services` (`id`, `title`, `subtitle`, `parallax_image`, `branch_id`) VALUES
(1, 'Get Well Soon', 'Our Best <span>Services</span>', 'service_parallax1.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_services_list`
--

CREATE TABLE `front_cms_services_list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_services_list`
--

INSERT INTO `front_cms_services_list` (`id`, `title`, `description`, `icon`, `branch_id`) VALUES
(1, 'Online Course Facilities', 'Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'fas fa-headphones', 1),
(2, 'Modern Book Library', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover.', 'fas fa-book-open', 1),
(3, 'Be Industrial Leader', 'Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.', 'fas fa-industry', 1),
(4, 'Programming Courses', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will.', 'fas fa-code', 1),
(5, 'Foreign Languages', 'Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover.', 'fas fa-language', 1),
(6, 'Alumni Directory', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a for \'lorem ipsum\' will uncover.', 'fas fa-user-graduate', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_setting`
--

CREATE TABLE `front_cms_setting` (
  `id` int(11) NOT NULL,
  `application_title` varchar(255) NOT NULL,
  `url_alias` varchar(255) DEFAULT NULL,
  `cms_active` tinyint(4) NOT NULL DEFAULT 0,
  `online_admission` tinyint(4) NOT NULL DEFAULT 0,
  `theme` varchar(255) NOT NULL,
  `captcha_status` varchar(20) NOT NULL,
  `recaptcha_site_key` varchar(255) NOT NULL,
  `recaptcha_secret_key` varchar(255) NOT NULL,
  `address` varchar(350) NOT NULL,
  `mobile_no` varchar(60) NOT NULL,
  `fax` varchar(60) NOT NULL,
  `receive_contact_email` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `copyright_text` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_about_text` varchar(300) NOT NULL,
  `working_hours` varchar(300) NOT NULL,
  `facebook_url` varchar(100) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `youtube_url` varchar(100) NOT NULL,
  `google_plus` varchar(100) NOT NULL,
  `linkedin_url` varchar(100) NOT NULL,
  `pinterest_url` varchar(100) NOT NULL,
  `instagram_url` varchar(100) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_setting`
--

INSERT INTO `front_cms_setting` (`id`, `application_title`, `url_alias`, `cms_active`, `online_admission`, `theme`, `captcha_status`, `recaptcha_site_key`, `recaptcha_secret_key`, `address`, `mobile_no`, `fax`, `receive_contact_email`, `email`, `copyright_text`, `fav_icon`, `logo`, `footer_about_text`, `working_hours`, `facebook_url`, `twitter_url`, `youtube_url`, `google_plus`, `linkedin_url`, `pinterest_url`, `instagram_url`, `branch_id`) VALUES
(1, 'Estate.az', 'example', 1, 1, 'red', 'disable', '', '', 'Your Address', '+12345678', '12345678', 'info@example.com', 'info@demo.com', 'Copyright © 2020 <span>Ramom</span>. All Rights Reserved.', 'fav_icon1.png', 'logo1.png', 'If you are going to use a passage LorIsum, you anythirassing hidden in the middle of text. Lators on the Internet tend to.', '<span>Hours : </span>  Mon To Fri - 10AM - 04PM,  Sunday Closed', 'https://facebook.com', 'https://twitter.com', 'https://youtube.com', 'https://google.com', 'https://linkedin.com', 'https://pinterest.com', 'https://instagram.com', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_teachers`
--

CREATE TABLE `front_cms_teachers` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_teachers`
--

INSERT INTO `front_cms_teachers` (`id`, `page_title`, `banner_image`, `meta_description`, `meta_keyword`, `branch_id`) VALUES
(1, 'Teachers', 'teachers1.jpg', 'Ramom - School Management System With CMS', 'Ramom  Teachers Page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `front_cms_testimonial`
--

CREATE TABLE `front_cms_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(355) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rank` int(5) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `front_cms_testimonial`
--

INSERT INTO `front_cms_testimonial` (`id`, `name`, `surname`, `image`, `description`, `rank`, `branch_id`, `created_by`, `created_at`) VALUES
(1, 'Gartrell Wright', 'Los Angeles', 'defualt.png', 'Intexure have done an excellent job presenting the analysis & insights. I am confident in saying  have helped encounter  is to be welcomed and every pain avoided”.', 1, 1, 1, '2019-08-23 12:26:42'),
(2, 'Clifton Hyde', 'Newyork City', 'defualt.png', '“Owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted always holds”.', 4, 1, 1, '2019-08-23 12:26:42'),
(3, 'Emily Lemus', 'Los Angeles', 'defualt.png', '“Intexure have done an excellent job presenting the analysis & insights. I am confident in saying  have helped encounter  is to be welcomed and every pain avoided”.', 5, 1, 1, '2019-08-23 12:26:42'),
(4, 'Michel Jhon', 'CEO', 'defualt.png', '“Owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted always holds”.', 3, 2, 1, '2019-08-23 12:26:42'),
(5, 'Hilda Howard', 'Chicago City', 'defualt.png', '“Owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted always holds”.', 4, 2, 1, '2019-08-23 12:26:42');

-- --------------------------------------------------------

--
-- Структура таблицы `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `institution_code` varchar(255) NOT NULL,
  `reg_prefix` varchar(255) NOT NULL,
  `institute_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `currency_symbol` varchar(100) NOT NULL,
  `sms_service_provider` varchar(100) NOT NULL,
  `session_id` int(11) NOT NULL,
  `translation` varchar(100) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `animations` varchar(100) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `date_format` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `cron_secret_key` varchar(255) DEFAULT NULL,
  `preloader_backend` tinyint(1) NOT NULL DEFAULT 1,
  `cms_default_branch` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `global_settings`
--

INSERT INTO `global_settings` (`id`, `institute_name`, `institution_code`, `reg_prefix`, `institute_email`, `address`, `mobileno`, `currency`, `currency_symbol`, `sms_service_provider`, `session_id`, `translation`, `footer_text`, `animations`, `timezone`, `date_format`, `facebook_url`, `twitter_url`, `linkedin_url`, `youtube_url`, `cron_secret_key`, `preloader_backend`, `cms_default_branch`, `created_at`, `updated_at`) VALUES
(1, 'Estate.az', 'RSM-', 'on', 'ramom@example.com', '', '', 'USD', '$', 'disabled', 3, 'lang_32', '© 2022 Estate.az - Developed by Webox Agency', 'fadeInUp', 'Asia/Baku', 'd.M.Y', '', '', '', '', '', 2, 1, '2018-10-22 09:07:49', '2020-05-01 22:37:06');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arabic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turkish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_32` longtext COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `word`, `english`, `arabic`, `turkish`, `lang_32`) VALUES
(1, 'language', 'Language', 'لغة', 'Dil', ''),
(2, 'attendance_overview', 'Attendance Overview', 'نظرة عامة على الحضور', 'Seyirci Genel Bakış', ''),
(3, 'annual_fee_summary', 'Annual Fee Summary', 'ملخص الرسوم السنوية', 'Yıllık Ücret Özeti', ''),
(4, 'my_annual_attendance_overview', 'My Annual Attendance Overview', 'حضري السنوي نظرة عامة', 'Yıllık Katılıma Genel Bakış', ''),
(5, 'schedule', 'Schedule', 'جداول', 'programları', ''),
(6, 'student_admission', 'Student Admission', 'قبول الطلاب', 'Öğrenci Kabulü', ''),
(7, 'returned', 'Returned', 'عاد', 'İade', ''),
(8, 'user_name', 'User Name', 'اسم المستخدم', 'Kullanıcı adı', ''),
(9, 'rejected', 'Rejected', 'مرفوض', 'Reddedilen', ''),
(10, 'route_name', 'Route Name', 'اسم المسار', 'Rota Adı', ''),
(11, 'route_fare', 'Route Fare', 'الطريق الأجرة', 'Yol Ücreti', ''),
(12, 'edit_route', 'Edit Route', 'تحرير المسار', 'Rotayı düzenle', ''),
(13, 'this_value_is_required', 'This value is required.', 'هذه القيمة مطلوبة', 'Bu değer gerekli', ''),
(14, 'vehicle_no', 'Vehicle No', 'السيارة لا', 'Araç Hayır', ''),
(15, 'insurance_renewal_date', 'Insurance Renewal Date', 'تاريخ تجديد التأمين', 'Sigorta Yenileme Tarihi', ''),
(16, 'driver_name', 'Driver Name', 'اسم السائق', 'Sürücü Adı', ''),
(17, 'driver_license', 'Driver License', 'رخصة قيادة', 'Ehliyet', ''),
(18, 'select_route', 'Select Route', 'حدد الطريق', 'Rotayı seçin', ''),
(19, 'edit_vehicle', 'Edit Vehicle', 'تحرير السيارة', 'Aracı Düzenle', ''),
(20, 'add_students', 'Add Students', ' إضافة الطلاب', 'Öğrenci ekle', ''),
(21, 'vehicle_number', 'Vehicle Number', 'عدد المركبات', 'Araç Numarası', ''),
(22, 'select_route_first', 'Select Route First', 'حدد الطريق أولا', 'Önce Güzergahı seçin', ''),
(23, 'transport_fee', 'Transport Fee', 'مصاريف الشحن', 'Taşıma ücreti', ''),
(24, 'control', 'Control', 'مراقبة', 'kontrol', ''),
(25, 'set_students', 'Set Students', 'تعيين الطلاب', 'Öğrencileri ayarla', ''),
(26, 'hostel_list', 'Hostel List', 'قائمة نزل', 'Hostel listesi', ''),
(27, 'watchman_name', 'Watchman Name', 'اسم الحارس', 'Bekçi adını', ''),
(28, 'hostel_address', 'Hostel Address', 'عنوان الفندق', 'Hostel adresi', ''),
(29, 'edit_hostel', 'Edit Hostel', 'تحرير نزل', 'Hostel düzenlemek', ''),
(30, 'room_name', 'Room Name', 'اسم الغرفة', 'Oda ismi', ''),
(31, 'no_of_beds', 'No Of Beds', 'عدد الأسرة', 'Yatak sayısı', ''),
(32, 'select_hostel_first', 'Select Hostel First', 'حدد نزل أولا', 'Önce pansiyon seç', ''),
(33, 'remaining', 'Remaining', 'متبق', 'Kalan', ''),
(34, 'hostel_fee', 'Hostel Fee', 'رسوم النزل', 'Hostel ücreti', ''),
(35, 'accountant_list', 'Accountant List', 'قائمة المحاسبين', 'Muhasebeci listesi', ''),
(36, 'students_fees', 'Students Fees', 'رسوم الطلاب', 'Öğrenci ücretleri', ''),
(37, 'fees_status', 'Fees Status', 'حالة الرسوم', 'Ücret durumu', ''),
(38, 'books', 'Books', 'الكتب', 'kitaplar', ''),
(39, 'home_page', 'Home Page', 'الصفحة الرئيسية', 'Ana sayfa', ''),
(40, 'collected', 'Collected', 'جمع', 'toplanmış', ''),
(41, 'student_mark', 'Student Mark', 'علامة الطالب', 'Öğrenci işareti', ''),
(42, 'select_exam_first', 'Select Exam First', 'حدد الامتحان أولا', 'Önce sınavı seç', ''),
(43, 'transport_details', 'Transport Details', 'تفاصيل النقل', 'Ulaşım bilgileri', ''),
(44, 'no_of_teacher', 'No of Teacher', 'لا المعلم', 'Öğretmenin numarası', ''),
(45, 'basic_details', 'Basic Details', 'تفاصيل أساسية', 'Temel Detaylar', ''),
(46, 'fee_progress', 'Fee Progress', 'رسوم التقدم', 'Ücret İlerlemesi', ''),
(47, 'word', 'Word', 'كلمة', 'sözcük', ''),
(48, 'book_category', 'Book Category', 'فئة الكتاب', 'Kitap kategorisi', ''),
(49, 'driver_phone', 'Driver Phone', 'سائق الهاتف', 'Sürücü Telefon', ''),
(50, 'invalid_csv_file', 'Invalid / Corrupted CSV File', 'ملف كسف غير صالح / معطل', 'geçersiz / bozuk CSV dosyası', ''),
(51, 'requested_book_list', 'Requested Book List', 'طلب قائمة الكتب', 'Talep edilen kitap listesi', ''),
(52, 'request_status', 'Request Status', 'حالة الطلب', 'Istek durumu', ''),
(53, 'book_request', 'Book Request', 'طلب الكتاب', 'Kitap isteği', ''),
(54, 'logout', 'Logout', 'الخروج', 'çıkış Yap', ''),
(55, 'select_payment_method', 'Select Payment Method', 'اختار طريقة الدفع', 'ödeme türünü seçin', ''),
(56, 'select_method', 'Select Method', 'حدد الطريقة', 'Yöntemi seç', ''),
(57, 'payment', 'Payment', 'دفع', 'Ödeme', ''),
(58, 'filter', 'Filter', 'منقي', 'filtre', ''),
(59, 'status', 'Status', 'الحالة', 'durum', ''),
(60, 'paid', 'Paid', 'دفع', 'ücretli', ''),
(61, 'unpaid', 'Unpaid', 'غير مدفوع', 'ödenmemiş', ''),
(62, 'method', 'Method', 'طريقة', 'Yöntem', ''),
(63, 'cash', 'Cash', 'السيولة النقدية', 'Nakit', ''),
(64, 'check', 'Check', 'الاختيار', 'Ara', ''),
(65, 'card', 'Card', 'بطاقة', 'kart', ''),
(66, 'payment_history', 'Payment History', 'تاريخ الدفع', 'ödeme geçmişi', ''),
(67, 'category', 'Category', 'فئة', 'Kategori', ''),
(68, 'book_list', 'Book List', 'قائمة الكتب', 'Kitap listesi', ''),
(69, 'author', 'Author', 'مؤلف', 'Yazar', ''),
(70, 'price', 'Price', 'السعر', 'Fiyat', ''),
(71, 'available', 'Available', 'متاح', 'Mevcut', ''),
(72, 'unavailable', 'Unavailable', 'غير متوفره', 'yok', ''),
(73, 'transport_list', 'Transport List', 'قائمة النقل', 'Taşıma listesi', ''),
(74, 'edit_transport', 'Edit Transport', 'تحرير النقل', 'Düzenleme Ulaşım', ''),
(75, 'hostel_name', 'Hostel Name', 'اسم المهجع', 'yatakhane Ad', ''),
(76, 'number_of_room', 'Hostel Of Room', 'عدد الغرف', 'Oda Sayısı', ''),
(77, 'yes', 'Yes', 'نعم فعلا', 'Evet', ''),
(78, 'no', 'No', 'لا', 'hayır', ''),
(79, 'messages', 'Messages', 'رسائل', 'Mesajlar', ''),
(80, 'compose', 'Compose', 'إرسال رسالة جديدة', 'Yeni Mesaj Yaz', ''),
(81, 'recipient', 'Recipient', 'مستلم', 'alıcı', ''),
(82, 'select_a_user', 'Select A User', 'تحديد مستخدم', 'Bir kullanıcı seçin', ''),
(83, 'send', 'Send', 'إرسال', 'göndermek', ''),
(84, 'global_settings', 'Global Settings', 'اعدادات النظام', 'Sistem ayarları', ''),
(85, 'currency', 'Currency', 'عملة', 'para', ''),
(86, 'system_email', 'System Email', 'نظام البريد الإلكتروني', 'sistem E-posta', ''),
(87, 'create', 'Create', 'خلق', 'yaratmak', ''),
(88, 'save', 'Save', 'حفظ', 'Kaydet', ''),
(89, 'file', 'File', 'ملف', 'Dosya', ''),
(90, 'theme_settings', 'Theme Settings', 'إعدادات موضوع', 'Tema ayarları', ''),
(91, 'default', 'Default', 'افتراضي', 'Varsayılan', ''),
(92, 'select_theme', 'Select Theme', 'اختر الموضوع', 'seç Tema', ''),
(93, 'upload_logo', 'Upload Logo', 'تحميل الشعار', 'yükleme Logo', ''),
(94, 'upload', 'Upload', 'تحميل', 'yükleme', ''),
(95, 'remember', 'Remember', 'تذكر', 'Hatırlamak', ''),
(96, 'not_selected', 'Not Selected', 'لم يتم اختياره', 'Seçilmedi', 'Seçilməyib'),
(97, 'disabled', 'Disabled', 'معاق', 'engelli', ''),
(98, 'inactive_account', 'Inactive Account', 'حساب غير نشط', 'Pasif hesap', ''),
(99, 'update_translations', 'Update Translations', 'تحديث الترجمات', 'çevirileri güncelle', ''),
(100, 'language_list', 'Language List', 'قائمة لغة', 'Dil listesi', ''),
(101, 'option', 'Option', 'خيار', 'seçenek', ''),
(102, 'edit_word', 'Edit Word', 'تحرير الكلمة', 'kelimeyi düzenle', ''),
(103, 'update_profile', 'Update Profile', 'تحديث الملف', 'Profili güncelle', ''),
(104, 'current_password', 'Current Password', 'كلمة السر الحالية', 'Şimdiki Şifre', ''),
(105, 'new_password', 'New Password', 'كلمة السر الجديدة', 'Yeni Şifre', ''),
(106, 'login', 'Login', 'تسجيل الدخول', 'Oturum aç', 'Daxil ol'),
(107, 'reset_password', 'Reset Password', 'اعادة تعيين كلمة السر', 'Şifreyi yenile', ''),
(108, 'present', 'Present', 'حاضر', 'mevcut', ''),
(109, 'absent', 'Absent', 'غائب', 'Yok', ''),
(110, 'update_attendance', 'Update Attendance', 'تحديث الحضور', 'güncelleme Seyirci', ''),
(111, 'undefined', 'Undefined', 'غير محدد', 'tanımlanmamış', ''),
(112, 'back', 'Back', 'الى الخلف', 'Geri', ''),
(113, 'save_changes', 'Save Changes', 'حفظ التغيرات', 'Değişiklikleri Kaydet', ''),
(114, 'uploader', 'Uploader', 'رافع', 'Yükleyici', ''),
(115, 'download', 'Download', 'تحميل', 'indir', ''),
(116, 'remove', 'Remove', 'إزالة', 'Kaldır', ''),
(117, 'print', 'Print', 'طباعة', 'baskı', ''),
(118, 'select_file_type', 'Select File Type', 'حدد نوع الملف', 'Seçin Dosya Türü', ''),
(119, 'excel', 'Excel', 'تفوق', 'Excel', ''),
(120, 'other', 'Other', 'آخر', 'Diğer', ''),
(121, 'students_of_class', 'Students Of Class', 'طلبة الدرجة', 'Sınıfının Öğrenciler', ''),
(122, 'marks_obtained', 'Marks Obtained', 'العلامات التي يحصل', 'Marks elde', ''),
(123, 'attendance_for_class', 'Attendance For Class', 'الحضور لفئة', 'Sınıfı Seyirci', ''),
(124, 'receiver', 'Receiver', 'المتلقي', 'alıcı', ''),
(125, 'please_select_receiver', 'Please Select Receiver', 'الرجاء الإختيار استقبال', 'Alıcısı Seçiniz', ''),
(126, 'session_changed', 'Session Changed', 'جلسة تغيير', 'Oturum Değişti', ''),
(127, 'exam_marks', 'Exam Marks', 'علامات الامتحان', 'sınav Marks', ''),
(128, 'total_mark', 'Total Mark', 'عدد الأقسام', 'Toplam Mark', ''),
(129, 'mark_obtained', 'Mark Obtained', 'علامة حصل', 'Mark elde', ''),
(130, 'invoice/payment_list', 'Invoice / Payment List', 'فاتورة / قائمة دفع', 'Fatura / ödeme listesi', ''),
(131, 'obtained_marks', 'Obtained Marks', 'العلامات التي تم الحصول عليها', 'elde edilen Marks', ''),
(132, 'highest_mark', 'Highest Mark', 'أعلى الأقسام', 'En yüksek işaretle', ''),
(133, 'grade', 'Grade (GPA)', 'درجة', 'sınıf', ''),
(134, 'dashboard', 'Dashboard', 'لوحة القيادة', 'gösterge paneli', ''),
(135, 'student', 'Student', 'طالب علم', 'öğrenci', ''),
(136, 'rename', 'Rename', 'إعادة تسمية', 'adını değiştirmek', ''),
(137, 'class', 'Class', 'صف مدرسي', 'sınıf', ''),
(138, 'teacher', 'Teacher', 'مدرس', 'öğretmen', ''),
(139, 'parents', 'Parents', 'الآباء', 'ebeveyn', ''),
(140, 'subject', 'Subject', 'موضوع', 'konu', ''),
(141, 'student_attendance', 'Student Attendance', 'حضور الطالب', 'Öğrenci yurdu', ''),
(142, 'exam_list', 'Exam List', 'قائمة الامتحان', 'sınav listesi', ''),
(143, 'grades_range', 'Grades Range', 'مجموعة الدرجات', 'Derece aralığı', ''),
(144, 'loading', 'Loading', 'جار التحميل', 'Yükleniyor', ''),
(145, 'library', 'Library', 'مكتبة', 'kütüphane', ''),
(146, 'hostel', 'Hostel', 'المهجع', 'Yurt', ''),
(147, 'events', 'Events', 'اللافتة', 'noticeboard', ''),
(148, 'message', 'Message', 'الرسالة', 'Mesaj', ''),
(149, 'translations', 'Translations', 'ترجمة', 'çeviriler', ''),
(150, 'account', 'Account', 'حساب', 'hesap', 'Hesabım'),
(151, 'selected_session', 'Selected Session', 'جلسة مختارة', 'seçilen oturum', ''),
(152, 'change_password', 'Change Password', 'تغيير كلمة السر', 'Şifre değiştir', ''),
(153, 'section', 'Section', 'قسم', 'Bölüm', ''),
(154, 'edit', 'Edit', 'تحرير', 'Düzenleme', ''),
(155, 'delete', 'Delete', 'حذف', 'silmek', ''),
(156, 'cancel', 'Cancel', 'إلغاء', 'İptal', ''),
(157, 'parent', 'Parent', 'أصل', 'ebeveyn', ''),
(158, 'attendance', 'Attendance', 'الحضور', 'katılım', ''),
(159, 'addmission_form', 'Admission Form', 'شكل القبول', 'Kabul Formu', ''),
(160, 'name', 'Name', 'اسم', 'isim', ''),
(161, 'select', 'Select', 'اختار', 'seçmek', ''),
(162, 'roll', 'Roll', 'لفة', 'Rulo', ''),
(163, 'birthday', 'Date Of Birth', 'تاريخ الميلاد', 'Doğum günü', ''),
(164, 'gender', 'Gender', 'جنس', 'Cinsiyet', ''),
(165, 'male', 'Male', 'ذكر', 'Erkek', ''),
(166, 'female', 'Female', 'أنثى', 'Kadın', ''),
(167, 'address', 'Address', 'عنوان', 'adres', ''),
(168, 'phone', 'Phone', 'هاتف', 'Telefon', ''),
(169, 'email', 'Email', 'البريد الإلكتروني', 'E-posta', ''),
(170, 'password', 'Password', 'كلمه السر', 'Parola', 'Şifrə'),
(171, 'transport_route', 'Transport Route', 'النقل الطريق', 'Ulaştırma Rota', ''),
(172, 'photo', 'Photo', 'صورة فوتوغرافية', 'fotoğraf', ''),
(173, 'select_class', 'Select Class', 'حدد فئة', 'seçin Sınıf', ''),
(174, 'username_password_incorrect', 'Username Or Password Is Incorrect', 'اسم المستخدم أو كلمة المرور غير صحيحة', 'Kullanıcı adı veya şifre yanlış', ''),
(175, 'select_section', 'Select Section', 'حدد القسم', 'seç Bölüm', ''),
(176, 'options', 'Options', 'خيارات', 'Seçenekler', ''),
(177, 'mark_sheet', 'Mark Sheet', 'ورقة علامة', 'İşareti levha', ''),
(178, 'profile', 'Profile', 'الملف الشخصي', 'Profil', 'Hesabım'),
(179, 'select_all', 'Select All', 'اختر الكل', 'Hepsini seç', ''),
(180, 'select_none', 'Select None', 'حدد بلا', 'Hiçbir şey seçilmedi', ''),
(181, 'average', 'Average', 'متوسط', 'Ortalama', ''),
(182, 'transfer', 'Transfer', 'تحويل', 'aktarma', ''),
(183, 'edit_teacher', 'Edit Teacher', 'تحرير المعلم', 'Düzenleme Öğretmen', ''),
(184, 'sex', 'Sex', 'جنس', 'Seks', ''),
(185, 'marksheet_for', 'Marksheet For', 'ورقة علامة ل', 'Mark levhalar', ''),
(186, 'total_marks', 'Total Marks', 'مجموع الدرجات', 'Toplam Marks', ''),
(187, 'parent_phone', 'Parent Phone', 'الأم الهاتف', 'Veli Telefon', ''),
(188, 'subject_author', 'Subject Author', 'الموضوع المؤلف', 'Konu Yazar', ''),
(189, 'update', 'Update', 'تحديث', 'Güncelleştirme', ''),
(190, 'class_list', 'Class List', 'قائمة الطبقة', 'sınıf listesi', ''),
(191, 'class_name', 'Class Name', 'اسم الطبقة', 'Sınıf adı', ''),
(192, 'name_numeric', 'Name Numeric', 'اسم الرقمية', 'isim Sayısal', ''),
(193, 'select_teacher', 'Select Teacher', 'حدد المعلم', 'seçin Öğretmen', ''),
(194, 'edit_class', 'Edit Class', 'تحرير الفئة', 'Düzenleme Sınıfı', ''),
(195, 'section_name', 'Section Name', 'اسم القسم', 'bölüm Adı', ''),
(196, 'add_section', 'Add Section', 'إضافة مقطع', 'Bölüm ekle', ''),
(197, 'subject_list', 'Subject List', 'قائمة الموضوع', 'Konu listesi', ''),
(198, 'subject_name', 'Subject Name', 'اسم الموضوع', 'Konu Adı', ''),
(199, 'edit_subject', 'Edit Subject', 'تحرير الموضوع', 'Konu Düzenle', ''),
(200, 'day', 'Day', 'يوم', 'Gün', ''),
(201, 'starting_time', 'Starting Time', 'ابتداء من الوقت', 'Başlangıç ​​zamanı', ''),
(202, 'hour', 'Hour', 'ساعة', 'Saat', ''),
(203, 'minutes', 'Minutes', 'دقيقة', 'dakika', ''),
(204, 'ending_time', 'Ending Time', 'إنهاء الوقت', 'Zaman Bitiş', ''),
(205, 'select_subject', 'Select Subject', 'حدد الموضوع', 'Konu seçin', ''),
(206, 'select_date', 'Select Date', 'حدد التاريخ', 'seçin tarihi', ''),
(207, 'select_month', 'Select Month', 'اختر الشهر', 'Ay seç', ''),
(208, 'select_year', 'Select Year', 'اختر السنة', 'Yıl seçin', ''),
(209, 'add_language', 'Add Language', 'إضافة لغة', 'dil ekle', ''),
(210, 'exam_name', 'Exam Name', 'اسم الامتحان', 'sınav Adı', ''),
(211, 'date', 'Date', 'تاريخ', 'tarih', ''),
(212, 'comment', 'Comment', 'التعليق', 'Yorum', ''),
(213, 'edit_exam', 'Edit Exam', 'تحرير امتحان', 'Düzenleme Sınavı', ''),
(214, 'grade_list', 'Grade List', 'قائمة الصف', 'sınıf listesi', ''),
(215, 'grade_name', 'Grade Name', 'اسم الصف', 'Sınıf Adı', ''),
(216, 'grade_point', 'Grade Point', 'الصف نقطة', 'not', ''),
(217, 'select_exam', 'Select Exam', 'حدد الامتحان', 'seç Sınav', ''),
(218, 'students', 'Students', 'الطلاب', 'Öğrenciler', ''),
(219, 'subjects', 'Subjects', 'المواضيع', 'Konular', ''),
(220, 'total', 'Total', 'مجموع', 'Toplam', ''),
(221, 'select_academic_session', 'Select Academic Session', 'حدد الدورة الأكاديمية', 'Akademik oturumu seç', ''),
(222, 'invoice_informations', 'Invoice Informations', 'معلومات الفاتورة', 'fatura Bilgileri', ''),
(223, 'title', 'Title', 'عنوان', 'başlık', ''),
(224, 'description', 'Description', 'وصف', 'tanım', ''),
(225, 'payment_informations', 'Payment Informations', 'معلومات الدفع', 'Ödeme Bilgileri', ''),
(226, 'view_invoice', 'View Invoice', 'عرض الفاتورة', 'Görünüm Fatura', ''),
(227, 'payment_to', 'Payment To', 'دفع ل', 'Için ödeme', ''),
(228, 'bill_to', 'Bill To', 'فاتورة الى', 'Ya fatura edilecek', ''),
(229, 'total_amount', 'Total Amount', 'المبلغ الإجمالي', 'Toplam tutar', ''),
(230, 'paid_amount', 'Paid Amount', 'المبلغ المدفوع', 'Ödenen miktar', ''),
(231, 'due', 'Due', 'بسبب', 'gereken', ''),
(232, 'amount_paid', 'Amount Paid', 'المبلغ المدفوع', 'Ödenen miktar', ''),
(233, 'payment_successfull', 'Payment has been successful', 'دفع النجاح', 'Ödeme Başarılı', ''),
(234, 'add_invoice/payment', 'Add Invoice/payment', 'إضافة فاتورة / دفع', 'Fatura / ödeme ekle', ''),
(235, 'invoices', 'Invoices', 'الفواتير', 'faturalar', ''),
(236, 'action', 'Action', 'عمل', 'Aksiyon', ''),
(237, 'required', 'Required', 'مطلوب', 'gereken', ''),
(238, 'info', 'Info', 'معلومات', 'Bilgi', ''),
(239, 'month', 'Month', '\r\nشهر', 'ay', ''),
(240, 'details', 'Details', 'تفاصيل', 'Ayrıntılar', ''),
(241, 'new', 'New', 'الجديد', 'Yeni', ''),
(242, 'reply_message', 'Reply Message', 'رسالة الرد', 'Mesaj cevabı', ''),
(243, 'message_sent', 'Message Sent', 'تم الارسال', 'Mesajı gönderildi', ''),
(244, 'search', 'Search', 'بحث', 'Arama', 'Axtar'),
(245, 'religion', 'Religion', 'دين', 'Din', ''),
(246, 'blood_group', 'Blood group', 'فصيلة الدم', 'kan grubu', ''),
(247, 'database_backup', 'Database Backup', 'قاعدة بيانات النسخ الاحتياطي', 'Veritabanı Yedekleme', ''),
(248, 'search', 'Search', 'بحث', 'Arama', 'Axtar'),
(249, 'payments_history', 'Fees Pay / Invoice', 'رسوم الدفع / الفاتورة', 'ücret ödemesi / fatura', ''),
(250, 'message_restore', 'Message Restore', 'استعادة الرسائل', 'Mesajın geri yüklenmesi', ''),
(251, 'write_new_message', 'Write New Message', 'إرسال رسالة جديدة', 'Yeni Mesaj Yaz', ''),
(252, 'attendance_sheet', 'Attendance Sheet', 'ورقة الحضور', 'Yoklama kağıdı', ''),
(253, 'holiday', 'Holiday', 'يوم الاجازة', 'Tatil', ''),
(254, 'exam', 'Exam', 'امتحان', 'Sınav', ''),
(255, 'successfully', 'Successfully', 'بنجاح', 'Başarıyla', ''),
(256, 'admin', 'Admin', 'مشرف', 'Admin', ''),
(257, 'inbox', 'Inbox', 'صندوق الوارد', 'Gelen kutusu', ''),
(258, 'sent', 'Sent', 'أرسلت', 'Gönderildi', ''),
(259, 'important', 'Important', 'مهم', 'Önemli', ''),
(260, 'trash', 'Trash', 'قمامة، يدمر، يهدم', 'Çöp', ''),
(261, 'error', 'Unsuccessful', 'غير ناجحة', 'Başarısız', ''),
(262, 'sessions_list', 'Sessions List', 'قائمة الجلسات', 'Oturumlar Listesi', ''),
(263, 'session_settings', 'Session Settings', 'إعدادات الجلسة', 'Oturum Ayarları', ''),
(264, 'add_designation', 'Add Designation', 'إضافة تسمية', 'İsmi Ekle', ''),
(265, 'users', 'Users', 'المستخدمين', 'Kullanıcılar', ''),
(266, 'librarian', 'Librarian', 'أمين المكتبة', 'kütüphaneci', ''),
(267, 'accountant', 'Accountant', 'محاسب', 'Muhasebeci', ''),
(268, 'academics', 'Academics', 'مؤسسيا', 'kurumsal olarak', ''),
(269, 'employees_attendance', 'Employees Attendance', 'حضور الموظفين', 'Çalışanlara katılım', ''),
(270, 'set_exam_term', 'Set Exam Term', 'تعيين مدة الامتحان', 'Sınav Süresini Ayarlayın', ''),
(271, 'set_attendance', 'Set Attendance', 'تعيين الحضور', 'Katılımı ayarla', ''),
(272, 'marks', 'Marks', 'علامات', 'izler', ''),
(273, 'books_category', 'Books Category', 'فئة الكتاب', 'Kitap Kategorisi', ''),
(274, 'transport', 'Transport', 'المواصلات', 'taşıma', ''),
(275, 'fees', 'Fees', 'رسوم', 'harç', ''),
(276, 'fees_allocation', 'Fees Allocation', 'توزيع الرسوم', 'ücret tahsisi', ''),
(277, 'fee_category', 'Fee Category', 'فئة الرسوم', 'Ücret kategorisi', ''),
(278, 'report', 'Report', 'أبلغ عن', 'rapor', ''),
(279, 'employee', 'Employee', 'الموظفين', 'çalışanlar', ''),
(280, 'invoice', 'Invoice', 'فاتورة', 'fatura', ''),
(281, 'event_catalogue', 'Event Catalogue', 'كتالوج الأحداث', 'Etkinlik Kataloğu', ''),
(282, 'total_paid', 'Total Paid', 'مجموع المبالغ المدفوعة', 'Toplam Ücretli', ''),
(283, 'total_due', 'Total Due', 'الاجمالي المستحق', 'Toplam Vade', ''),
(284, 'fees_collect', 'Fees Collect', 'تحصيل الرسوم', 'Ücret toplama', ''),
(285, 'total_school_students_attendance', 'Total School Students Attendance', 'مجموع طلاب المدارس الحضور', 'Toplam okul öğrencileri devam ediyor', ''),
(286, 'overview', 'Overview', 'نظرة عامة', 'genel bakış', ''),
(287, 'currency_symbol', 'Currency Symbol', 'رمز العملة', 'Para birimi sembolü', ''),
(288, 'enable', 'Enable', 'مكن', 'etkinleştirme', ''),
(289, 'disable', 'Disable', 'تعطيل', 'Devre dışı', ''),
(290, 'payment_settings', 'Payment Settings', 'إعدادات الدفع', 'Ödeme Ayarları', ''),
(291, 'student_attendance_report', 'Student Attendance Report', 'تقرير حضور الطالب', 'Öğrenci katılım raporu', ''),
(292, 'attendance_type', 'Attendance Type', 'نوع الحضور', 'Devam türü', ''),
(293, 'late', 'Late', 'متأخر', 'Geç', ''),
(294, 'employees_attendance_report', 'Employees Attendance Report', 'الموظفين تقرير الحضور', 'Çalışanlar katılım raporu', ''),
(295, 'attendance_report_of', 'Attendance Report Of', 'تقرير الحضور من', 'Devam raporu', ''),
(296, 'fee_paid_report', 'Fee Paid Report', 'الرسوم المدفوعة التقرير', 'Ücretli Ödenen Rapor', ''),
(297, 'invoice_no', 'Invoice No', 'رقم الفاتورة', 'Fatura no', ''),
(298, 'payment_mode', 'Payment Mode', 'طريقة الدفع', 'ödeme şekli', ''),
(299, 'payment_type', 'Payment Type', 'نوع الدفع', 'ödeme türü', ''),
(300, 'done', 'Done', 'فعله', 'tamam', ''),
(301, 'select_fee_category', 'Select Fee Category', 'حدد فئة الرسوم', 'Ücret kategorisini seçin', ''),
(302, 'discount', 'Discount', 'خصم', 'indirim', ''),
(303, 'enter_discount_amount', 'Enter Discount Amount', 'أدخل مبلغ الخصم', 'Indirim tutarını gir', ''),
(304, 'online_payment', 'Online Payment', 'الدفع عن بعد', 'Uzaktan Ödeme', ''),
(305, 'student_name', 'Student Name', 'أسم الطالب', 'Öğrenci adı', ''),
(306, 'invoice_history', 'Invoice History', 'تاريخ الفاتورة', 'Fatura geçmişi', ''),
(307, 'discount_amount', 'Discount Amount', 'مقدار الخصم', 'indirim tutarı', ''),
(308, 'invoice_list', 'Invoice List', 'قائمة الفاتورة', 'Fatura listesi', ''),
(309, 'partly_paid', 'Partly Paid', 'تدفع جزئيا', 'Kısmen ödenmiş', ''),
(310, 'fees_list', 'Fees List', 'قائمة الرسوم', 'Ücret listesi', ''),
(311, 'voucher_id', 'Voucher ID', 'معرف القسيمة', 'Kupon kimliği', ''),
(312, 'transaction_date', 'Transaction Date', 'تاريخ الصفقة', 'İşlem Tarihi', ''),
(313, 'admission_date', 'Admission Date', 'تاريخ القبول', 'Kabul tarihi', ''),
(314, 'user_status', 'User Status', 'حالة المستخدم', 'Kullanıcı durumu', ''),
(315, 'nationality', 'Nationality', 'جنسية', 'milliyet', ''),
(316, 'register_no', 'Register No', 'سجل رقم', 'Kayıt yok', ''),
(317, 'first_name', 'First Name', 'الاسم الاول', 'İsim', ''),
(318, 'last_name', 'Last Name', 'الكنية', 'soyadı', ''),
(319, 'state', 'State', 'حالة', 'belirtmek, bildirmek', ''),
(320, 'transport_vehicle_no', 'Transport Vehicle No', 'رقم مركبة النقل', 'Taşıma Aracı No', ''),
(321, 'percent', 'Percent', 'نسبه مئويه', 'yüzde', ''),
(322, 'average_result', 'Average Result', 'متوسط ​​النتيجة', 'Ortalama sonuç', ''),
(323, 'student_category', 'Student Category', 'طالب', 'Öğrenci kategorisi', ''),
(324, 'category_name', 'Category Name', 'اسم التصنيف', 'Kategori adı', ''),
(325, 'category_list', 'Category List', 'قائمة الفئات', 'Kategori listesi', ''),
(326, 'please_select_student_first', 'Please Select Students First', 'يرجى اختيار الطلاب أولا', 'Lütfen önce öğrencileri seç', ''),
(327, 'designation', 'Designation', 'تعيين', 'tayin', ''),
(328, 'qualification', 'Qualification', 'المؤهل', 'Vasıf', ''),
(329, 'account_deactivated', 'Account Deactivated', 'تم إلغاء تنشيط الحساب', 'Hesap devre dışı', ''),
(330, 'account_activated', 'Account Activated', 'تم تنشيط الحساب', 'Hesap etkinleştirildi', ''),
(331, 'designation_list', 'Designation List', 'قائمة التعيين', 'Belirleme Listesi', ''),
(332, 'joining_date', 'Joining Date', 'تاريخ الانضمام', 'Birleştirme Tarihi', ''),
(333, 'relation', 'Relation', 'علاقة', 'ilişki', ''),
(334, 'father_name', 'Father Name', 'اسم الأب', 'baba adı', ''),
(335, 'librarian_list', 'Librarian List', 'قائمة أمين المكتبة', 'Kütüphaneci listesi', ''),
(336, 'class_numeric', 'Class Numeric', 'فئة رقمية', 'Sayısal Sınıf', ''),
(337, 'maximum_students', 'Maximum Students', 'الحد الأقصى للطلاب', 'Maksimum Öğrenci', ''),
(338, 'class_room', 'Class Room', 'قاعة الدراسة', 'Sınıf oda', ''),
(339, 'pass_mark', 'Pass Mark', 'علامة المرور', 'Geçme notu', ''),
(340, 'exam_time', 'Exam Time (Min)', 'وقت الامتحان', 'sınav zamanı', ''),
(341, 'time', 'Time', 'زمن', 'zaman', ''),
(342, 'subject_code', 'Subject Code', 'رمز الموضوع', 'Konu Kodu', ''),
(343, 'full_mark', 'Full Mark', 'درجة كاملة', 'Tam not', ''),
(344, 'subject_type', 'Subject Type', 'نوع الموضوع', 'Konu türü', ''),
(345, 'date_of_publish', 'Date Of Publish', 'تاريخ النشر', 'Yayın Tarihi', ''),
(346, 'file_name', 'File Name', 'اسم الملف', 'Dosya adı', ''),
(347, 'students_list', 'Students List', 'قائمة الطلاب', 'Öğrenci Listesi', ''),
(348, 'start_date', 'Start Date', 'تاريخ البدء', 'Başlangıç ​​tarihi', ''),
(349, 'end_date', 'End Date', 'تاريخ الانتهاء', 'Bitiş tarihi', ''),
(350, 'term_name', 'Term Name', 'اسم المدى', 'Dönem adı', ''),
(351, 'grand_total', 'Grand Total', 'المبلغ الإجمالي', 'Genel Toplam', ''),
(352, 'result', 'Result', 'نتيجة', 'Sonuç', ''),
(353, 'books_list', 'Books List', 'قائمة الكتب', 'Kitap Listesi', ''),
(354, 'book_isbn_no', 'Book ISBN No', 'كتاب رقم إيسبن رقم', 'Kitap ISBN no', ''),
(355, 'total_stock', 'Total Stock', 'إجمالي الأسهم', 'Toplam Stok', ''),
(356, 'issued_copies', 'Issued Copies', 'تم إصدار نسخ', 'Çıkarılan Kopyalar', ''),
(357, 'publisher', 'Publisher', 'الناشر', 'Yayımcı', ''),
(358, 'books_issue', 'Books Issue', 'كتاب المسألة', 'Kitap Numarası', ''),
(359, 'user', 'User', 'المستعمل', 'kullanıcı', ''),
(360, 'fine', 'Fine', 'غرامة', 'İnce', ''),
(361, 'pending', 'Pending', 'قيد الانتظار', 'kadar', ''),
(362, 'return_date', 'Return Date', 'تاريخ العودة', 'dönüş tarihi', ''),
(363, 'accept', 'Accept', 'قبول', 'kabul etmek', ''),
(364, 'reject', 'Reject', 'رفض', 'reddetmek', ''),
(365, 'issued', 'Issued', 'نشر', 'Veriliş', ''),
(366, 'return', 'Return', 'إرجاع', 'Dönüş', ''),
(367, 'renewal', 'Renewal', 'تجديد', 'yenileme', ''),
(368, 'fine_amount', 'Fine Amount', 'كمية غرامة', 'Ince miktar', ''),
(369, 'password_mismatch', 'Password Mismatch', 'عدم تطابق كلمة المرور', 'Parola uyuşmazlığı', ''),
(370, 'settings_updated', 'Settings Update', 'تحديث الإعدادات', 'Ayarları güncelleştirme', ''),
(371, 'pass', 'Pass', 'البشري', 'pas', ''),
(372, 'event_to', 'Event To', 'الحدث ل', 'Olaya', ''),
(373, 'all_users', 'All Users', 'جميع المستخدمين', 'tüm kullanıcılar', ''),
(374, 'employees_list', 'Employees List', 'قائمة الموظفين', 'Çalışanların listesi', ''),
(375, 'on', 'On', 'على', 'üzerinde', ''),
(376, 'timezone', 'Timezone', 'وحدة زمنية', 'saat dilimi', ''),
(377, 'get_result', 'Get Result', 'الحصول على نتيجة', 'Sonuç almak', ''),
(378, 'apply', 'Apply', 'تطبيق', 'uygulamak', ''),
(379, 'hrm', 'Human Resource', 'الموارد البشرية', 'ทรัพยากรบุคคล', ''),
(380, 'payroll', 'Payroll', 'كشف رواتب', 'maaş bordrosu', ''),
(381, 'salary_assign', 'Salary Assign', 'مراقبة الرواتب', 'Maaş kontrolü', ''),
(382, 'employee_salary', 'Payment Salary', 'دفع الراتب', 'Ödeme maaşı', ''),
(383, 'application', 'Application', 'الوضعية', 'uygulama', ''),
(384, 'award', 'Award', 'جائزة', 'ödül', ''),
(385, 'basic_salary', 'Basic Salary', 'راتب اساسي', 'temel maaş', ''),
(386, 'employee_name', 'Employee Name', 'اسم الموظف', 'Çalışan Adı', ''),
(387, 'name_of_allowance', 'Name Of Allowance', 'اسم البدل', 'Ödenek adı', ''),
(388, 'name_of_deductions', 'Name Of Deductions', 'اسم الاستقطاعات', 'Kesintilerin adı', ''),
(389, 'all_employees', 'All Employees', 'كل الموظفين', 'tüm çalışanlar', ''),
(390, 'total_allowance', 'Total Allowance', 'مجموع المخصصات', 'Toplam ödenek', ''),
(391, 'total_deduction', 'Total Deductions', 'مجموع الخصومات', 'Toplam kesintiler', ''),
(392, 'net_salary', 'Net Salary', 'صافي الراتب', 'net maaş', ''),
(393, 'payslip', 'Payslip', 'قسيمة الدفع', 'maaş bordrosu', ''),
(394, 'days', 'Days', 'أيام', 'günler', ''),
(395, 'category_name_already_used', 'Category Name Already Used', 'اسم الفئة المستخدمة من قبل', 'Kategori adı zaten kullanılmış', ''),
(396, 'leave_list', 'Leave List', 'قائمة الإجازات', 'Izin listesi', ''),
(397, 'leave_category', 'Leave Category', 'ترك الفئة', 'Ayrıl kategori', ''),
(398, 'applied_on', 'Applied On', 'تطبيق على', 'Üzerine uygulanmış', ''),
(399, 'accepted', 'Accepted', 'قبلت', 'kabul edilmiş', ''),
(400, 'leave_statistics', 'Leave Statistics', 'وترك الإحصاءات', 'Istatistiği bırak', ''),
(401, 'leave_type', 'Leave Type', 'نوع الإجازة', 'Terk türü', ''),
(402, 'reason', 'Reason', 'السبب', 'neden', ''),
(403, 'close', 'Close', 'أغلق', 'kapat', ''),
(404, 'give_award', 'Give Award', 'إعطاء الجائزة', 'Ödül vermek', ''),
(405, 'list', 'List', 'قائمة', 'liste', ''),
(406, 'award_name', 'Award Name', 'اسم الجائزة', 'Ödül adı', ''),
(407, 'gift_item', 'Gift Item', 'هدية البند', 'Hediye kalemi', ''),
(408, 'cash_price', 'Cash Price', 'سعر الصرف', 'Nakit fiyatı', ''),
(409, 'award_reason', 'Award Reason', 'جائزة السبب', 'Ödül sebebi', ''),
(410, 'given_date', 'Given Date', 'تاريخ معين', 'Verilen tarih', ''),
(411, 'apply_leave', 'Apply Leave', 'تطبيق الإجازة', 'Izin başvurusu yapmak', ''),
(412, 'leave_application', 'Leave Application', 'اترك التطبيق', 'uygulamayı terket', ''),
(413, 'allowances', 'Allowances', 'البدلات', 'ödenekleri', ''),
(414, 'add_more', 'Add More', 'أضف المزيد', 'daha ekle', ''),
(415, 'deductions', 'Deductions', 'الخصومات', 'kesintiler', ''),
(416, 'salary_details', 'Salary Details', 'تفاصيل الراتب', 'Maaş ayrıntıları', ''),
(417, 'salary_month', 'Salary Month', 'راتب شهر', 'Maaş ayı', ''),
(418, 'leave_data_update_successfully', 'Leave Data Updated Successfully', 'ترك البيانات تحديثها بنجاح', 'Verileri başarıyla güncelledi bırak', ''),
(419, 'fees_history', 'Fees History', 'تاريخ الرسوم', 'Ücret geçmişi', ''),
(420, 'bank_name', 'Bank Name', 'اسم البنك', 'banka adı', ''),
(421, 'branch', 'Branch', 'فرع شجرة', 'şube', ''),
(422, 'bank_address', 'Bank Address', 'عنوان البنك', 'banka adresi', ''),
(423, 'ifsc_code', 'IFSC Code', 'رمز إفسك', 'IFSC kodu', ''),
(424, 'account_no', 'Account No', 'رقم الحساب', 'Hesap numarası', ''),
(425, 'add_bank', 'Add Bank', 'إضافة بنك', 'Banka ekle', ''),
(426, 'account_name', 'Account Holder', 'أسم الحساب', 'hesap adı', ''),
(427, 'database_backup_completed', 'Database Backup Completed', 'اكتمل قاعدة بيانات النسخ الاحتياطي', 'Veritabanı yedeklemesi tamamlandı', ''),
(428, 'restore_database', 'Restore Database', 'استعادة قاعدة البيانات', 'Veritabanı geri yükle', ''),
(429, 'template', 'Template', 'قالب', 'şablon', ''),
(430, 'time_and_date', 'Time And Date', 'الوقت و التاريخ', 'zaman ve tarih', ''),
(431, 'everyone', 'Everyone', 'كل واحد', 'herkes', ''),
(432, 'invalid_amount', 'Invalid Amount', 'مبلغ غير صحيح', 'geçersiz miktar', ''),
(433, 'leaving_date_is_not_available_for_you', 'Leaving Date Is Not Available For You', 'ترك التاريخ غير متاح لك', 'bırakma tarihi sizin için mevcut değil', ''),
(434, 'animations', 'Animations', 'الرسوم المتحركة', 'animasyonlar', ''),
(435, 'email_settings', 'Email Settings', 'إعدادات البريد الإلكتروني', 'e-posta ayarları', ''),
(436, 'deduct_month', 'Deduct Month', 'خصم الشهر', 'ay düşülmek', ''),
(437, 'no_employee_available', 'No Employee Available', 'لا يتوفر موظف', 'Çalışan yok', ''),
(438, 'advance_salary_application_submitted', 'Advance Salary Application Submitted', 'تم تقديم طلب الراتب المتقدم', 'Maaş Başvurusu Gönderildi', ''),
(439, 'date_format', 'Date Format', 'صيغة التاريخ', 'tarih formatı', ''),
(440, 'id_card_generate', 'ID Card Generate', 'بطاقة الهوية تولد', 'Kimlik kartı üret', ''),
(441, 'issue_salary', 'Issue Salary', 'إصدار الراتب', 'maaş çıkarmak', ''),
(442, 'advance_salary', 'Advance Salary', 'راتب مقدما', 'avans maaşı', ''),
(443, 'logo', 'Logo', 'شعار', 'logo', ''),
(444, 'book_request', 'Book Request', 'طلب الكتاب', 'kitap isteği', ''),
(445, 'reporting', 'Reporting', 'التقارير', 'raporlama', ''),
(446, 'paid_salary', 'Paid Salary', 'الراتب المدفوع', 'ücretli maaş', ''),
(447, 'due_salary', 'Due Salary', 'الراتب', 'maaş', ''),
(448, 'route', 'Route', 'طريق', 'rota', ''),
(449, 'academic_details', 'Academic Details', 'التفاصيل الأكاديمية', 'akademik ayrıntılar', ''),
(450, 'guardian_details', 'Guardian Details', 'التفاصيل الأكاديمية', 'akademik ayrıntılar', ''),
(451, 'due_amount', 'Due Amount', 'مبلغ مستحق', 'ödenecek meblağ', ''),
(452, 'fee_due_report', 'Fee Due Report', 'تقرير الرسوم المستحقة', 'due due due report', ''),
(453, 'other_details', 'Other Details', 'تفاصيل أخرى', 'diğer detaylar', ''),
(454, 'last_exam_report', 'Last Exam Report', 'تقرير الاختبار الأخير', 'Son Sınav Raporu', ''),
(455, 'book_issued', 'Book Issued', ' كتاب صدر', 'Yayınlanan Kitap', ''),
(456, 'interval_month', 'Interval 30 Days', 'الفاصل الزمني 30 يومًا', 'Aralık 30 Gün', ''),
(457, 'attachments', 'Attachments', 'مرفقات', 'Ekler', ''),
(458, 'fees_payment', 'Fees Payment', 'دفع الرسوم', 'Ücret Ödeme', ''),
(459, 'fees_summary', 'Fees Summary', 'ملخص الرسوم', 'Ücret Özeti', ''),
(460, 'total_fees', 'Total Fees', 'الرسوم الكلية', 'Toplam ücretler', ''),
(461, 'weekend_attendance_inspection', 'Weekend Attendance Inspection', 'فحص الحضور في عطلة نهاية الاسبوع', 'Hafta Sonu Katılım Denetimi', ''),
(462, 'book_issued_list', 'Book Issued List', 'كتاب صدر قائمة', 'Kitap Çıkarılmış Listesi', ''),
(463, 'lose_your_password', 'Lose Your Password?', '?تفقد كلمة المرور الخاصة بك', 'Şifrenizi kaybedin?', ''),
(464, 'all_branch_dashboard', 'All Branch Dashboard', 'كل لوحة فرع', 'Tüm Şube Panosu', ''),
(465, 'academic_session', 'Academic Session', 'الدورة الأكاديمية', 'Akademik Oturum', ''),
(466, 'all_branches', 'All Branches', 'كل الفروع', 'Tüm Şubeler', ''),
(467, 'admission', 'Admission', 'قبول', 'kabul', ''),
(468, 'create_admission', 'Create Admission', 'إنشاء القبول', 'Giriş Oluştur', ''),
(469, 'multiple_import', 'Multiple Import', 'استيراد متعدد', 'Birden çok içe aktarma', ''),
(470, 'student_details', 'Student Details', 'تفاصيل الطالب', 'Öğrenci Detayları', ''),
(471, 'student_list', 'Student List', 'قائمة الطلاب', 'Öğrenci Listesi', ''),
(472, 'login_deactivate', 'Login Deactivate', 'تسجيل الدخول', 'Giriş Devre Dışı Bırak', ''),
(473, 'parents_list', 'Parents List', 'قائمة الوالدين', 'Ebeveyn Listesi', ''),
(474, 'add_parent', 'Add Parent', 'أضف الوالد', 'Üst ekle', ''),
(475, 'employee_list', 'Employee List', 'قائمة موظف', 'İşçi listesi', ''),
(476, 'add_department', 'Add Department', 'أضف قسم', 'Bölüm ekle', ''),
(477, 'add_employee', 'Add Employee', 'إضافة موظف', 'Çalışan ekle', ''),
(478, 'salary_template', 'Salary Template', 'قالب الراتب', 'Maaş Şablonu', ''),
(479, 'salary_payment', 'Salary Payment', 'دفع المرتبات', 'Maaş ödemesi', ''),
(480, 'payroll_summary', 'Payroll Summary', 'ملخص الرواتب', 'Bordro Özeti', ''),
(481, 'academic', 'Academic', 'أكاديمي', 'Akademik', ''),
(482, 'control_classes', 'Control Classes', 'فئات التحكم', 'Kontrol Sınıfları', ''),
(483, 'assign_class_teacher', 'Assign Class Teacher', 'تعيين معلم الصف', 'Sınıf Öğretmeni Ata', ''),
(484, 'class_assign', 'Class Assign', 'تعيين فئة', 'Sınıf Ataması', ''),
(485, 'assign', 'Assign', 'تعيين', 'Atamak', ''),
(486, 'promotion', 'Promotion', 'ترقية وظيفية', ' tanıtım', ''),
(487, 'attachments_book', 'Attachments Book', 'كتاب المرفقات', 'Ekler Kitabı', ''),
(488, 'upload_content', 'Upload Content', 'تحميل المحتوى', 'İçerik Yükle', ''),
(489, 'attachment_type', 'Attachment Type', 'نوع المرفق', 'Ek tipi', ''),
(490, 'exam_master', 'Exam Master', 'الامتحان ماجستير', 'Sınav Masterı', ''),
(491, 'exam_hall', 'Exam Hall', 'قاعة الامتحان', 'Sınav salonu', ''),
(492, 'mark_entries', 'Mark Entries', 'إدخالات مارك', 'Mark Girdileri', ''),
(493, 'tabulation_sheet', 'Tabulation Sheet', 'ورقة الجدولة', 'Tablolama Sayfası', ''),
(494, 'supervision', 'Supervision', 'إشراف', 'Nezaret', ''),
(495, 'hostel_master', 'Hostel Master', 'نزل ماستر', 'Hostel Master', ''),
(496, 'hostel_room', 'Hostel Room', 'غرفة نزل', 'Hostel Odası', ''),
(497, 'allocation_report', 'Allocation Report', 'تقرير التخصيص', 'Tahsis Raporu', ''),
(498, 'route_master', 'Route Master', 'سيد الطريق', 'Rota ustası', ''),
(499, 'vehicle_master', 'Vehicle Master', 'سيد السيارة', 'Araç Ustası', ''),
(500, 'stoppage', 'Stoppage', 'إضراب', 'peklik', ''),
(501, 'assign_vehicle', 'Assign Vehicle', 'تخصيص مركبة', 'Araç Ata', ''),
(502, 'reports', 'Reports', 'تقارير', 'Raporlar', ''),
(503, 'books_entry', 'Books Entry', 'دخول الكتب', 'Kitaplar Girişi', ''),
(504, 'event_type', 'Event Type', 'نوع الحدث', 'Etkinlik tipi', ''),
(505, 'add_events', 'Add Events', 'إضافة أحداث', 'Etkinlik ekle', ''),
(506, 'student_accounting', 'Student Accounting', 'محاسبة الطلاب', 'Öğrenci Muhasebesi', ''),
(507, 'create_single_invoice', 'Create Single Invoice', 'إنشاء فاتورة واحدة', 'Tek Fatura Yaratın', ''),
(508, 'create_multi_invoice', 'Create Multi Invoice', 'إنشاء متعدد الفاتورة', 'Çok Fatura Oluştur', ''),
(509, 'summary_report', 'Summary Report', 'تقرير ملخص', 'Özet raporu', ''),
(510, 'office_accounting', 'Office Accounting', 'محاسبة المكتب', 'Ofis Muhasebesi', ''),
(511, 'under_group', 'Under Group', 'تحت المجموعة', 'Grup altında', ''),
(512, 'bank_account', 'Bank Account', 'حساب البنك', 'Banka hesabı', ''),
(513, 'ledger_account', 'Ledger Account', 'حساب دفتر الأستاذ', 'Muhasebe Hesabı', ''),
(514, 'create_voucher', 'Create Voucher', 'إنشاء قسيمة', '', ''),
(515, 'day_book', 'Day Book', 'كتاب اليوم', ' Gün Kitabı', ''),
(516, 'cash_book', 'Cash Book', 'كتاب النقدية', 'Kasa defteri', ''),
(517, 'bank_book', 'Bank Book', 'كتاب البنك', 'Banka defteri', ''),
(518, 'ledger_book', 'Ledger Book', 'دفتر الأستاذ', 'Defter Defteri', ''),
(519, 'trial_balance', 'Trial Balance', 'ميزان المراجعة', 'Mizan', ''),
(520, 'settings', 'Settings', 'الإعدادات', 'Ayarlar', ''),
(521, 'sms_settings', 'Sms Settings', 'إعدادات الرسائل القصيرة', 'Sms Ayarları', ''),
(522, 'cash_book_of', 'Cash Book Of', 'كتاب النقدية من', 'Nakit Çek Defteri', ''),
(523, 'by_cash', 'By Cash', 'نقدا', 'Nakit', ''),
(524, 'by_bank', 'By Bank', 'عن طريق البنك', 'Banka Tarafından', ''),
(525, 'total_strength', 'Total Strength', 'القوة الكلية', 'Toplam gücü', ''),
(526, 'teachers', 'Teachers', 'معلمون', 'Öğretmenler', ''),
(527, 'student_quantity', 'Student Quantity', 'كمية الطالب', 'Öğrenci Miktarı', ''),
(528, 'voucher', 'Voucher', 'قسيمة', 'fiş', ''),
(529, 'total_number', 'Total Number', 'মোট সংখ্যা', 'Toplam sayısı', ''),
(530, 'total_route', 'Total Route', 'الطريق الإجمالي', 'Toplam Güzergah', ''),
(531, 'total_room', 'Total Room', 'مجموع الغرفة', 'Toplam oda', ''),
(532, 'amount', 'Amount', 'كمية', 'Miktar', ''),
(533, 'branch_dashboard', 'Branch Dashboard', 'لوحة تحكم الفرع', 'Şube Panosu', ''),
(534, 'branch_list', 'Branch List', 'قائمة الفرع', 'รายชื่อสาขา', ''),
(535, 'create_branch', 'Create Branch', 'إنشاء فرع', 'Şube Yarat', ''),
(536, 'branch_name', 'Branch Name', 'اسم الفرع', 'Şube Adı', ''),
(537, 'school_name', 'School Name', 'اسم المدرسة', 'Okul Adı', ''),
(538, 'mobile_no', 'Mobile No', 'رقم الموبايل', 'Telefon numarası', ''),
(539, 'symbol', 'Symbol', 'رمز', 'sembol', ''),
(540, 'city', 'City', 'مدينة', 'şehir', ''),
(541, 'academic_year', 'Academic Year', 'السنة الأكاديمية', 'Akademik yıl', ''),
(542, 'select_branch_first', 'First Select The Branch', 'أولا اختر الفرع', 'İlk Şube Seç', ''),
(543, 'select_class_first', 'Select Class First', 'اختر الفئة الأولى', 'Önce sınıfı seç', ''),
(544, 'select_country', 'Select Country', 'حدد الدولة', 'Ülke Seç', ''),
(545, 'mother_tongue', 'Mother Tongue', 'اللغة الأم', 'Ana dil', ''),
(546, 'caste', 'Caste', 'الطائفة', 'Kast', ''),
(547, 'present_address', 'Present Address', 'العنوان الحالي', 'ที่อยู่ปัจจุบัน', ''),
(548, 'permanent_address', 'Permanent Address', 'العنوان الثابت', 'daimi Adres', ''),
(549, 'profile_picture', 'Profile Picture', 'الصوره الشخصيه', 'Profil fotoğrafı', ''),
(550, 'login_details', 'Login Details', 'تفاصيل تسجيل الدخول', 'เข้าสู่ระบบรายละเอียด', ''),
(551, 'retype_password', 'Retype Password', 'أعد إدخال كلمة السر', 'Şifrenizi yeniden yazın', ''),
(552, 'occupation', 'Occupation', 'الاحتلال', 'Meslek', ''),
(553, 'income', 'Income', 'الإيرادات', 'Gelir', ''),
(554, 'education', 'Education', 'التعليم', 'Eğitim', ''),
(555, 'first_select_the_route', 'First Select The Route', 'أولا اختر الطريق', 'İlk önce Rotayı Seçin', ''),
(556, 'hostel_details', 'Hostel Details', 'تفاصيل النزل', 'Hostel Detayları', ''),
(557, 'first_select_the_hostel', 'First Select The Hostel', 'প্রথম ছাত্রাবাস নির্বাচন', 'önce hosteli seç', ''),
(558, 'previous_school_details', 'Previous School Details', 'تفاصيل المدرسة السابقة', 'Önceki Okul Detayları', ''),
(559, 'book_name', 'Book Name', 'اسم الكتاب', 'ชื่อหนังสือ', ''),
(560, 'select_ground', 'Select Ground', 'اختر الأرض', 'Zemin seç', ''),
(561, 'import', 'Import', 'استيراد', 'İthalat', ''),
(562, 'add_student_category', 'Add Student Category', 'إضافة فئة الطالب', 'Öğrenci Kategorisi Ekle', ''),
(563, 'id', 'Id', '', 'İD', ''),
(564, 'edit_category', 'Edit Category', 'تحرير الفئة', 'Kategoriyi Düzenle', ''),
(565, 'deactivate_account', 'Deactivate Account', 'تعطيل الحساب', 'Aktif edilmemiş hesap', ''),
(566, 'all_sections', 'All Sections', 'كل الأقسام', 'tüm bölümler', ''),
(567, 'authentication_activate', 'Authentication Activate', 'تفعيل المصادقة', 'Kimlik Doğrulama Etkinleştir', ''),
(568, 'department', 'Department', ' قسم، أقسام', 'Bölüm', ''),
(569, 'salary_grades', 'Salary Grades', 'راتب', 'Maaş notu', ''),
(570, 'overtime', 'Overtime Rate (Per Hour)', 'معدل العمل الإضافي (لكل ساعة)', 'fazla mesai ücreti (Saat Başı)', ''),
(571, 'salary_grade', 'Salary Grade', 'راتب', 'Maaş notu', ''),
(572, 'payable_type', 'Payable Type', 'نوع الدفع', 'Ödenecek Tür', ''),
(573, 'edit_type', 'Edit Type', 'تحرير النوع', 'Türü Düzenle', ''),
(574, 'role', 'Role', 'وظيفة', 'rol', ''),
(575, 'remuneration_info_for', 'Remuneration Info For', 'الأجور معلومات عن', 'Ücret Bilgisi', ''),
(576, 'salary_paid', 'Salary Paid', 'الراتب المدفوع', 'Ücretli', ''),
(577, 'salary_unpaid', 'Salary Unpaid', 'الراتب غير مدفوع', 'Ödenmemiş Maaş', ''),
(578, 'pay_now', 'Pay Now', 'ادفع الآن', 'Şimdi öde', ''),
(579, 'employee_role', 'Employee Role', 'دور الموظف', 'Çalışan Rolü', ''),
(580, 'create_at', 'Create At', 'خلق في', 'At oluştur', ''),
(581, 'select_employee', 'Select Employee', 'اختر الموظف', 'Выберите сотрудника', ''),
(582, 'review', 'Review', 'إعادة النظر', 'gözden geçirmek', ''),
(583, 'reviewed_by', 'Reviewed By', 'تمت مراجعته من قبل', 'Tarafından gözden geçirildi', ''),
(584, 'submitted_by', 'Submitted By', 'المقدمة من قبل', 'Tarafından gönderilmiştir', ''),
(585, 'employee_type', 'Employee Type', 'نوع موظف', 'Çalışan tipi', ''),
(586, 'approved', 'Approved', 'وافق', 'onaylı', ''),
(587, 'unreviewed', 'Unreviewed', 'غير مراجع', 'İncelenmeyenler', ''),
(588, 'creation_date', 'Creation Date', 'تاريخ الإنشاء', 'Oluşturulma tarihi', ''),
(589, 'no_information_available', 'No Information Available', 'لا توجد معلومات متاحة', 'Bilgi bulunmamaktadır', ''),
(590, 'continue_to_payment', 'Continue To Payment', 'مواصلة الدفع', 'Ödeme devam', ''),
(591, 'overtime_total_hour', 'Overtime Total Hour', 'الساعة الاجمالية', 'Fazla Mesai Toplam Saati', ''),
(592, 'overtime_amount', 'Overtime Amount', 'مبلغ العمل الإضافي', 'Fazla Mesai Tutarı', ''),
(593, 'remarks', 'Remarks', 'تعليق', 'Opmerking', ''),
(594, 'view', 'View', 'رأي', 'Görünüm', ''),
(595, 'leave_appeal', 'Leave Appeal', 'اترك الاستئناف', 'Temyizden Ayrılmak', ''),
(596, 'create_leave', 'Create Leave', 'خلق إجازة', 'İzin Oluştur', ''),
(597, 'user_role', 'User Role', 'دور المستخدم', 'Kullanıcı rolü', ''),
(598, 'date_of_start', 'Date Of Start', 'تاريخ البدء', 'Başlangıç ​​tarihi', ''),
(599, 'date_of_end', 'Date Of End', 'تاريخ النهاية', 'Bitiş Tarihi', ''),
(600, 'winner', 'Winner', 'الفائز', 'kazanan', ''),
(601, 'select_user', 'Select User', 'اختر المستخدم', 'Kullanıcı seç', ''),
(602, 'create_class', 'Create Class', 'إنشاء فصل دراسي', 'Sınıf Oluştur', ''),
(603, 'class_teacher_allocation', 'Class Teacher Allocation', 'تخصيص معلم الصف', 'Sınıf Öğretmeni Tahsisi', ''),
(604, 'class_teacher', 'Class Teacher', 'معلم الصف', 'Sınıf öğretmeni', ''),
(605, 'create_subject', 'Create Subject', 'إنشاء موضوع', 'Konu Oluştur', ''),
(606, 'select_multiple_subject', 'Select Multiple Subject', 'حدد موضوعًا متعددًا', 'Birden Çok Konu Seçin', ''),
(607, 'teacher_assign', 'Teacher Assign', 'تعيين المعلم', 'Öğretmen Atama', ''),
(608, 'teacher_assign_list', 'Teacher Assign List', 'قائمة تعيين المعلم', 'Öğretmen Atama Listesi', ''),
(609, 'select_department_first', 'Select Department First', 'حدد القسم أولاً', 'Önce Bölüm Seçin', ''),
(610, 'create_book', 'Create Book', 'إنشاء كتاب', 'Kitap Oluştur', ''),
(611, 'book_title', 'Book Title', 'عنوان كتاب', 'Kitap başlığı', ''),
(612, 'cover', 'Cover', 'التغطية', 'Örtmek', ''),
(613, 'edition', 'Edition', 'الإصدار', 'Baskı', ''),
(614, 'isbn_no', 'ISBN No', 'رقم ISBN', 'ISBN Hayır', ''),
(615, 'purchase_date', 'Purchase Date', 'تاريخ الشراء', 'Satınalma tarihi', ''),
(616, 'cover_image', 'Cover Image', 'صورة الغلاف', 'Kapak resmi', ''),
(617, 'book_issue', 'Book Issue', 'إصدار الكتاب', 'Kitap Sayısı', ''),
(618, 'date_of_issue', 'Date Of Issue', 'تاريخ المسألة', 'Veriliş tarihi', ''),
(619, 'date_of_expiry', 'Date Of Expiry', 'تاريخ الانتهاء', 'Son kullanma tarihi', ''),
(620, 'select_category_first', 'Select Category First', 'حدد الفئة الأولى', 'Önce Kategori Seçin', ''),
(621, 'type_name', 'Type Name', 'أكتب اسم', 'Tür Adı', ''),
(622, 'type_list', 'Type List', 'قائمة الأنواع', 'Tür Listesi', ''),
(623, 'icon', 'Icon', 'أيقونة', 'Icon', ''),
(624, 'event_list', 'Event List', 'قائمة الأحداث', 'Etkinlik Listesi', ''),
(625, 'create_event', 'Create Event', 'انشاء حدث', 'Etkinlik oluşturmak', ''),
(626, 'type', 'Type', 'نوع', 'tip', ''),
(627, 'audience', 'Audience', 'الجمهور', 'seyirci', ''),
(628, 'created_by', 'Created By', 'انشأ من قبل', 'Tarafından yaratıldı', ''),
(629, 'publish', 'Publish', 'ينشر', 'Yayınla', ''),
(630, 'everybody', 'Everybody', 'الجميع', 'herkes', ''),
(631, 'selected_class', 'Selected Class', 'فئة مختارة', 'Seçilmiş Sınıf', ''),
(632, 'selected_section', 'Selected Section', 'القسم المختار', 'Seçilen Bölüm', ''),
(633, 'information_has_been_updated_successfully', 'Information Has Been Updated Successfully', 'تم تحديث المعلومات بنجاح', 'Bilgiler başarıyla güncellendi', ''),
(634, 'create_invoice', 'Create Invoice', 'إنشاء فاتورة', 'Fatura oluşturmak', ''),
(635, 'invoice_entry', 'Invoice Entry', 'إدخال الفاتورة', 'Fatura Girişi', ''),
(636, 'quick_payment', 'Quick Payment', 'دفع سريع', 'Hızlı Ödeme', ''),
(637, 'write_your_remarks', 'Write Your Remarks', 'اكتب ملاحظاتك', 'Yorumlarınızı Yazın', ''),
(638, 'reset', 'Reset', 'إعادة تعيين', 'Sıfırla', 'Sıfırla'),
(639, 'fees_payment_history', 'Fees Payment History', 'تاريخ دفع الرسوم', 'Ücret Ödeme Geçmişi', ''),
(640, 'fees_summary_report', 'Fees Summary Report', 'تقرير ملخص الرسوم', 'Ücret Özeti Raporu', ''),
(641, 'add_account_group', 'Add Account Group', 'إضافة مجموعة حساب', 'Hesap Grubu Ekle', ''),
(642, 'account_group', 'Account Group', 'جماعة حساب', 'Hesap grubu', ''),
(643, 'account_group_list', 'Account Group List', 'قائمة مجموعة الحساب', 'Hesap Grubu Listesi', ''),
(644, 'mailbox', 'Mailbox', 'صندوق بريد', 'Posta kutusu', ''),
(645, 'refresh_mail', 'Refresh Mail', 'تحديث البريد', 'Postayı Yenile', ''),
(646, 'sender', 'Sender', 'مرسل', 'gönderen', ''),
(647, 'general_settings', 'General Settings', 'الاعدادات العامة', 'Genel Ayarlar', ''),
(648, 'institute_name', 'Institute Name', 'اسم المعهد', 'Kurum İsmi', ''),
(649, 'institution_code', 'Institution Code', 'رمز المؤسسة', 'Kurum Kodu', ''),
(650, 'sms_service_provider', 'Sms Service Provider', 'مزود خدمة الرسائل القصيرة', 'Sms Servis Sağlayıcısı', ''),
(651, 'footer_text', 'Footer Text', 'نص التذييل', 'Altbilgi metni', ''),
(652, 'payment_control', 'Payment Control', 'مراقبة الدفع', 'Ödeme Kontrolü', ''),
(653, 'sms_config', 'Sms Config', 'تكوين الرسائل القصيرة', 'SMS Yapılandırması', ''),
(654, 'sms_triggers', 'Sms Triggers', 'مشغلات الرسائل القصيرة', 'Sms Tetikleyicileri', ''),
(655, 'authentication_token', 'Authentication Token', 'رمز المصادقة', 'Kimlik Doğrulama Simgesi', ''),
(656, 'sender_number', 'Sender Number', 'رقم المرسل', 'Gönderen Numarası', ''),
(657, 'username', 'Username', 'اسم المستخدم', 'Kullanıcı adı', ''),
(658, 'api_key', 'Api Key', 'مفتاح API', 'API Anahtarı', ''),
(659, 'authkey', 'Authkey', 'Authkey', 'authkey', ''),
(660, 'sender_id', 'Sender Id', 'معرف الإرسال', 'Gönderen Kimliği', ''),
(661, 'sender_name', 'Sender Name', 'اسم المرسل', 'Gönderenin adı', ''),
(662, 'hash_key', 'Hash Key', 'مفتاح التجزئة', 'Kare tuşu', ''),
(663, 'notify_enable', 'Notify Enable', 'إعلام تمكين', 'Etkinleştir', ''),
(664, 'exam_attendance', 'Exam Attendance', 'حضور الامتحان', 'Sınava Katılım', ''),
(665, 'exam_results', 'Exam Results', 'نتائج الامتحانات', 'Sınav sonuçları', ''),
(666, 'email_config', 'Email Config', 'تكوين البريد الإلكتروني', 'E-posta Yapılandırması', ''),
(667, 'email_triggers', 'Email Triggers', 'مشغلات البريد الإلكتروني', 'E-posta Tetikleyicileri', ''),
(668, 'account_registered', 'Account Registered', 'تم تسجيل الحساب', 'Hesap Kaydoldu', ''),
(669, 'forgot_password', 'Forgot Password', 'هل نسيت كلمة المرور', 'Parolanızı mı unuttunuz', ''),
(670, 'new_message_received', 'New Message Received', 'تم تلقي رسالة جديدة', 'Yeni Mesaj Alındı', ''),
(671, 'payslip_generated', 'Payslip Generated', 'تم إنشاء Payslip', 'Maaş bordrosu oluşturuldu', ''),
(672, 'leave_approve', 'Leave Approve', 'اترك الموافقة', 'Onaydan Ayrıl', ''),
(673, 'leave_reject', 'Leave Reject', 'اترك رفض', 'Reddet', ''),
(674, 'advance_salary_approve', 'Leave Reject', 'اترك رفض', 'Reddet', ''),
(675, 'advance_salary_reject', 'Advance Salary Reject', 'رفض الراتب المسبق', 'Peşin Maaş Reddi', ''),
(676, 'add_session', 'Add Session', 'إضافة جلسة', 'Oturum Ekle', ''),
(677, 'session', 'Session', 'جلسة', 'Oturum, toplantı, celse', ''),
(678, 'created_at', 'Created At', 'أنشئت في', 'Oluşturma Tarihi', ''),
(679, 'sessions', 'Sessions', 'الجلسات', 'Oturumlar', ''),
(680, 'flag', 'Flag', 'العلم', 'bayrak', ''),
(681, 'stats', 'Stats', 'احصائيات', 'İstatistikleri', ''),
(682, 'updated_at', 'Updated At', 'تم التحديث في', 'Güncelleme Tarihi:', ''),
(683, 'flag_icon', 'Flag Icon', 'رمز العلم', 'Bayrak Simgesi', ''),
(684, 'password_restoration', 'Password Restoration', 'استعادة كلمة المرور', 'Şifre Yenileme', ''),
(685, 'forgot', 'Forgot', 'نسيت', 'Unuttun', ''),
(686, 'back_to_login', 'Back To Login', 'العودة لتسجيل الدخول', 'Giriş Sayfasına Geri Dön', ''),
(687, 'database_list', 'Database List', 'قائمة قاعدة البيانات', 'Veritabanı Listesi', ''),
(688, 'create_backup', 'Create Backup', 'انشئ نسخة احتياطية', 'Yedek Oluştur', ''),
(689, 'backup', 'Backup', 'دعم', 'Destek olmak', ''),
(690, 'backup_size', 'Backup Size', 'حجم النسخ الاحتياطي', 'Yedek Boyutu', ''),
(691, 'file_upload', 'File Upload', 'تحميل الملف', 'Dosya yükleme', ''),
(692, 'parents_details', 'Parents Details', 'تفاصيل الوالدين', 'Ebeveyn Detayları', ''),
(693, 'social_links', 'Social Links', 'روابط اجتماعية', 'Sosyal Bağlantılar', ''),
(694, 'create_hostel', 'Create Hostel', 'إنشاء نزل', 'Hostel Yarat', ''),
(695, 'allocation_list', 'Allocation List', 'قائمة التخصيص', 'Tahsis Listesi', ''),
(696, 'payslip_history', 'Payslip History', 'سجل الدفع', 'Maaş bordrosu Geçmişi', ''),
(697, 'my_attendance_overview', 'My Attendance Overview', 'نظرة عامة على الحضور', 'Katılımım Genel Bakış', ''),
(698, 'total_present', 'Total Present', 'المجموع الحالي', 'Toplam Hediye', ''),
(699, 'total_absent', 'Total Absent', 'المجموع الكلي', 'Toplam Yok', ''),
(700, 'total_late', 'Total Late', 'المجموع المتأخر', 'Toplam Geç', '');
INSERT INTO `languages` (`id`, `word`, `english`, `arabic`, `turkish`, `lang_32`) VALUES
(701, 'class_teacher_list', 'Class Teacher List', 'قائمة مدرس الفصل', 'Sınıf Öğretmeni Listesi', ''),
(702, 'section_control', 'Section Control', 'التحكم بالقسم', 'Bölüm Kontrolü', ''),
(703, 'capacity ', 'Capacity', 'سعة', 'Kapasite', ''),
(704, 'request', 'Request', 'طلب', 'İstek', ''),
(705, 'salary_year', 'Salary Year', 'سنة الراتب', 'Maaş Yılı', ''),
(706, 'create_attachments', 'Create Attachments', 'إنشاء المرفقات', 'Ek Oluştur', ''),
(707, 'publish_date', 'Publish Date', 'تاريخ النشر', 'Yayın tarihi', ''),
(708, 'attachment_file', 'Attachment File', 'ملف المرفق', 'Ek dosya', ''),
(709, 'age', 'Age', 'عمر', 'Yaş', ''),
(710, 'student_profile', 'Student Profile', 'الملف الشخصي للطالب', 'Öğrenci profili', ''),
(711, 'authentication', 'Authentication', 'المصادقة', 'Kimlik Doğrulama', ''),
(712, 'parent_information', 'Parent Information', 'معلومات الوالدين', 'Veli Bilgileri', ''),
(713, 'full_marks', 'Full Marks', 'علامات كاملة', 'Tam Notlar', ''),
(714, 'passing_marks', 'Passing Marks', 'علامات النجاح', 'Geçme İşaretleri', ''),
(715, 'highest_marks', 'Highest Marks', 'أعلى العلامات', 'En Yüksek İşaretler', ''),
(716, 'unknown', 'Unknown', 'مجهول', 'Bilinmeyen', ''),
(717, 'unpublish', 'Unpublish', 'غير منشور', 'Yayından Kaldır', ''),
(718, 'login_authentication_deactivate', 'Login Authentication Deactivate', 'إلغاء تنشيط مصادقة تسجيل الدخول', 'Giriş Kimlik Doğrulaması Devre Dışı Bırak', ''),
(719, 'employee_profile', 'Employee Profile', 'ملف تعريف الموظف', 'İşçi profili', ''),
(720, 'employee_details', 'Employee Details', 'تفاصيل الموظف', 'Çalışan bilgileri', ''),
(721, 'salary_transaction', 'Salary Transaction', 'معاملة الراتب', 'Maaş İşlemleri', ''),
(722, 'documents', 'Documents', 'مستندات', 'evraklar', ''),
(723, 'actions', 'Actions', 'أجراءات', 'Hareketler', ''),
(724, 'activity', 'Activity', 'نشاط', 'Aktivite', ''),
(725, 'department_list', 'Department List', 'قائمة الأقسام', 'Bölüm Listesi', ''),
(726, 'manage_employee_salary', 'Manage Employee Salary', 'إدارة راتب الموظف', 'Çalışan Maaşını Yönetin', ''),
(727, 'the_configuration_has_been_updated', 'The Configuration Has Been Updated', 'تم تحديث التكوين', 'Yapılandırma Güncellendi', ''),
(728, 'add', 'Add', 'أضف', 'Ekle', 'Əlavə edin'),
(729, 'create_exam', 'Create Exam', 'إنشاء امتحان', 'Sınav Oluştur', ''),
(730, 'term', 'Term', 'مصطلح', 'terim', ''),
(731, 'add_term', 'Add Term', 'إضافة مصطلح', 'Terim Ekle', ''),
(732, 'create_grade', 'Create Grade', 'إنشاء تقدير', 'Not Oluştur', ''),
(733, 'mark_starting', 'Mark Starting', 'علامة البداية', 'Başlangıç ​​Olarak İşaretle', ''),
(734, 'mark_until', 'Mark Until', 'ضع علامة حتى', 'Bitiş', ''),
(735, 'room_list', 'Room List', 'قائمة غرفة', 'Oda listesi', ''),
(736, 'room', 'Room', 'غرفة', 'Oda', ''),
(737, 'route_list', 'Route List', 'قائمة المسار', 'Güzergah Listesi', ''),
(738, 'create_route', 'Create Route', 'إنشاء طريق', 'Rota Oluştur', ''),
(739, 'vehicle_list', 'Vehicle List', 'قائمة المركبات', 'Araç Listesi', ''),
(740, 'create_vehicle', 'Create Vehicle', 'إنشاء مركبة', 'Araç Yarat', ''),
(741, 'stoppage_list', 'Stoppage List', 'قائمة التوقف', 'Durma Listesi', ''),
(742, 'create_stoppage', 'Create Stoppage', 'إنشاء توقف', 'Duruş Oluştur', ''),
(743, 'stop_time', 'Stop Time', 'وقت التوقف', 'Durma zamanı', ''),
(744, 'employee_attendance', 'Employee Attendance', 'حضور الموظف', 'Çalışan Seyirci', ''),
(745, 'attendance_report', 'Attendance Report', 'حضور الموظف', 'Çalışan Katılımı', ''),
(746, 'opening_balance', 'Opening Balance', 'الرصيد الافتتاحي', 'Açılış bilançosu', ''),
(747, 'add_opening_balance', 'Add Opening Balance', 'إضافة رصيد افتتاحي', 'Açılış Bakiyesi Ekle', ''),
(748, 'credit', 'Credit', 'ائتمان', 'Kredi', ''),
(749, 'debit', 'Debit', 'مدين', 'borç', ''),
(750, 'opening_balance_list', 'Opening Balance List', 'قائمة الرصيد الافتتاحي', 'bakiye listesini açma', ''),
(751, 'voucher_list', 'Voucher List', 'قائمة القسائم', 'Kupon Listesi', ''),
(752, 'voucher_head', 'Voucher Head', 'رئيس قسيمة', 'Kupon Başlığı', ''),
(753, 'payment_method', 'Payment Method', 'طريقة الدفع او السداد', 'Ödeme şekli', ''),
(754, 'credit_ledger_account', 'Credit Ledger Account', 'حساب دفتر الأستاذ الائتماني', 'Kredi Defteri Hesabı', ''),
(755, 'debit_ledger_account', 'Debit Ledger Account', 'حساب دفتر الأستاذ المدين', 'Borç Defteri Hesabı', ''),
(756, 'voucher_no', 'Voucher No', 'رقم القسيمة', 'Fiş numarası', ''),
(757, 'balance', 'Balance', 'توازن', 'Denge', 'Balans'),
(758, 'event_details', 'Event Details', 'تفاصيل الحدث', 'etkinlik detayları', ''),
(759, 'welcome_to', 'Welcome To', 'مرحبا بك في', 'Hoşgeldiniz', ''),
(760, 'report_card', 'Report Card', 'بطاقة تقرير', 'Karne', ''),
(761, 'online_pay', 'Online Pay', 'الدفع عبر الإنترنت', 'Online Ödeme', ''),
(762, 'annual_fees_summary', 'Annual Fees Summary', 'ملخص الرسوم السنوية', 'Yıllık Ücret Özeti', ''),
(763, 'my_children', 'My Children', 'أطفالي', 'Benim çocuklarım', ''),
(764, 'assigned', 'Assigned', 'تعيين', 'atanan', ''),
(765, 'confirm_password', 'Confirm Password', 'تأكيد كلمة المرور', 'Şifreyi Onayla', ''),
(766, 'searching_results', 'Searching Results', 'نتائج البحث', 'Arama Sonuçları', 'Axtarışın nəticəsi'),
(767, 'information_has_been_saved_successfully', 'Information Has Been Saved Successfully', 'تم حفظ المعلومات بنجاح', 'Bilgiler Başarıyla Kaydedildi', ''),
(768, 'information_deleted', 'The information has been successfully deleted', 'تم حذف المعلومات بنجاح', 'Bilgi başarıyla silindi', ''),
(769, 'deleted_note', '*Note : This data will be permanently deleted', '* ملاحظة: سيتم حذف هذه البيانات نهائيًا', '* Not: Bu veri kalıcı olarak silinecek', ''),
(770, 'are_you_sure', 'Are You Sure?', 'هل أنت واثق؟', 'Emin misiniz?', ''),
(771, 'delete_this_information', 'Do You Want To Delete This Information?', 'هل تريد حذف هذه المعلومات؟', 'Bu Bilgiyi Silmek İstiyor musunuz?', ''),
(772, 'yes_continue', 'Yes, Continue', 'نعم ، استمر', 'Evet devam et', ''),
(773, 'deleted', 'Deleted', 'تم الحذف', 'silindi', ''),
(774, 'collect', 'Collect', 'تجميع', 'Toplamak', ''),
(775, 'school_setting', 'School Setting', 'إعداد المدرسة', 'Okul ayarı', ''),
(776, 'set', 'Set', 'جلس', 'Ayarlamak', ''),
(777, 'quick_view', 'Quick View', 'نظرة سريعة', 'Hızlı Görünüm', ''),
(778, 'due_fees_invoice', 'Due Fees Invoice', 'فاتورة رسوم مستحقة', 'Ödenmesi Gereken Fatura', ''),
(779, 'my_application', 'My Application', 'طلبي', 'Başvurum', ''),
(780, 'manage_application', 'Manage Application', 'إدارة الطلب', 'Uygulamayı yönet', ''),
(781, 'leave', 'Leave', 'غادر', 'Ayrılmak', ''),
(782, 'live_class_rooms', 'Live Class Rooms', 'غرف الصف المباشر', 'Canlı Ders Odaları', ''),
(783, 'homework', 'Homework', 'واجب منزلي', 'Ev ödevi', ''),
(784, 'evaluation_report', 'Evaluation Report', 'تقرير التقييم', 'Değerlendirme raporu', ''),
(785, 'exam_term', 'Exam Term', 'مصطلح الامتحان', 'Sınav Dönemi', ''),
(786, 'distribution', 'Distribution', 'توزيع', 'dağıtım', ''),
(787, 'exam_setup', 'Exam Setup', 'إعداد الامتحان', 'Sınav Kurulumu', ''),
(788, 'sms', 'Sms', '', '', ''),
(789, 'fees_type', 'Fees Type', 'نوع الرسوم', 'Ücret Türü', ''),
(790, 'fees_group', 'Fees Group', 'مجموعة الرسوم', 'Ücret Grubu', ''),
(791, 'fine_setup', 'Fine Setup', 'الإعداد الجيد', 'İnce Kurulum', ''),
(792, 'fees_reminder', 'Fees Reminder', 'تذكير بالرسوم', 'Ücret Hatırlatma', ''),
(793, 'new_deposit', 'New Deposit', 'وديعة جديدة', 'Yeni Depozito', ''),
(794, 'new_expense', 'New Expense', 'نفقة جديدة', 'Yeni Gider', ''),
(795, 'all_transactions', 'All Transactions', 'كل الحركات المالية', 'Tüm İşlemler', ''),
(796, 'head', 'Head', 'رئيس', 'baş', ''),
(797, 'fees_reports', 'Fees Reports', 'تقارير الرسوم', 'Ücret Raporları', ''),
(798, 'fees_report', 'Fees Report', 'تقرير الرسوم', 'Ücret Raporu', ''),
(799, 'receipts_report', 'Receipts Report', 'تقرير الإيصالات', 'Makbuz Raporu', ''),
(800, 'due_fees_report', 'Due Fees Report', 'تقرير الرسوم المستحقة', 'Ödenmesi Gereken Ücretler Raporu', ''),
(801, 'fine_report', 'Fine Report', 'تقرير جيد', 'İnce Rapor', ''),
(802, 'financial_reports', 'Financial Reports', 'تقارير مالية', 'Finansal raporlar', ''),
(803, 'statement', 'Statement', 'بيان', 'Beyan', ''),
(804, 'repots', 'Repots', '', '', ''),
(805, 'expense', 'Expense', 'مصروف', 'gider', ''),
(806, 'transitions', 'Transitions', 'الانتقالات', 'Geçişler', ''),
(807, 'sheet', 'Sheet', 'ورقة', 'yaprak', ''),
(808, 'income_vs_expense', 'Income Vs Expense', 'الدخل مقابل المصاريف', 'Gelir ve Gider', ''),
(809, 'attendance_reports', 'Attendance Reports', 'تقارير الحضور', 'Katılım Raporları', ''),
(810, 'examination', 'Examination', 'فحص', 'sınav', ''),
(811, 'school_settings', 'School Settings', 'إعدادات المدرسة', 'Okul Ayarları', ''),
(812, 'role_permission', 'Role Permission', 'إذن الدور', 'Rol İzni', ''),
(813, 'cron_job', 'Cron Job', 'وظيفة كرون', 'Cron İşi', ''),
(814, 'custom_field', 'Custom Field', 'حقل مخصص', 'Özel alan', ''),
(815, 'enter_valid_email', 'Enter Valid Email', 'أدخل بريدًا إلكترونيًا صالحًا', 'Geçerli e-posta girin', ''),
(816, 'lessons', 'Lessons', 'الدروس', 'Dersler', ''),
(817, 'live_class', 'Live Class', 'فئة حية', 'Canlı Sınıf', ''),
(818, 'sl', 'Sl', '', '', ''),
(819, 'meeting_id', 'Meeting ID', 'فئة حية', 'Canlı Sınıf', ''),
(820, 'start_time', 'Start Time', '', '', ''),
(821, 'end_time', 'End Time', '', '', ''),
(822, 'zoom_meeting_id', 'Zoom Meeting Id', 'تكبير / تصغير معرف الاجتماع', 'Toplantı Kimliği Yakınlaştır', ''),
(823, 'zoom_meeting_password', 'Zoom Meeting Password', 'تكبير كلمة مرور الاجتماع', 'Toplantı Şifresini Yakınlaştır', ''),
(824, 'time_slot', 'Time Slot', 'فسحة زمنية', 'Zaman aralığı', ''),
(825, 'send_notification_sms', 'Send Notification Sms', 'إرسال رسالة إعلام', 'Bildirim Gönder Sms', ''),
(826, 'host', 'Host', 'مضيف', 'evsahibi', ''),
(827, 'school', 'School', 'مدرسة', 'Okul', ''),
(828, 'accounting_links', 'Accounting Links', 'روابط المحاسبة', 'Muhasebe Bağlantıları', ''),
(829, 'applicant', 'Applicant', 'طالب وظيفة', 'Başvuru sahibi', ''),
(830, 'apply_date', 'Apply Date', 'تاريخ تطبيق', 'Başvuru tarihi', ''),
(831, 'add_leave', 'Add Leave', 'أضف إجازة', 'İzin Ekle', ''),
(832, 'leave_date', 'Leave Date', 'تاريخ مغادرة', 'Ayrılış tarihi', ''),
(833, 'attachment', 'Attachment', '', '', ''),
(834, 'comments', 'Comments', 'تعليقات', 'Yorumlar', ''),
(835, 'staff_id', 'Staff Id', 'معرف الموظفين', 'Personel Kimliği', ''),
(836, 'income_vs_expense_of', 'Income Vs Expense Of', 'دخل مقابل حساب', 'Gelir ve Giderleri', ''),
(837, 'designation_name', 'Designation Name', 'اسم التعيين', 'Adı', ''),
(838, 'already_taken', 'This %s already exists.', '', '', ''),
(839, 'department_name', 'Department Name', 'اسم القسم', 'Bölüm Adı', ''),
(840, 'date_of_birth', 'Date Of Birth', '', '', ''),
(841, 'bulk_delete', 'Bulk Delete', 'حذف مجمّع', 'Toplu Silme', ''),
(842, 'guardian_name', 'Guardian Name', 'اسم الوصي', 'Muhafız adı', ''),
(843, 'fees_progress', 'Fees Progress', 'رسوم التقدم', 'Ücret İlerlemesi', ''),
(844, 'evaluate', 'Evaluate', 'تقييم', 'Değerlendirmek', ''),
(845, 'date_of_homework', 'Date Of Homework', 'تاريخ الواجب المنزلي', 'Ödev Tarihi', ''),
(846, 'date_of_submission', 'Date Of Submission', 'تاريخ التقديم', 'Teslim tarihi', ''),
(847, 'student_fees_report', 'Student Fees Report', 'تقرير رسوم الطالب', 'Öğrenci Ücretleri Raporu', ''),
(848, 'student_fees_reports', 'Student Fees Reports', 'تقارير رسوم الطلاب', 'Öğrenci Ücret Raporları', ''),
(849, 'due_date', 'Due Date', 'تاريخ الاستحقاق', 'Bitiş tarihi', ''),
(850, 'payment_date', 'Payment Date', 'موعد الدفع', 'Ödeme tarihi', ''),
(851, 'payment_via', 'Payment Via', 'الدفع عن طريق', 'Üzerinden Ödeme', ''),
(852, 'generate', 'Generate', 'انشاء', 'üretmek', ''),
(853, 'print_date', 'Print Date', 'تاريخ الطباعة', 'Basım tarihi', ''),
(854, 'bulk_sms_and_email', 'Bulk Sms And Email', 'الرسائل القصيرة والبريد الإلكتروني', 'Toplu Sms ve E-posta', ''),
(855, 'campaign_type', 'Campaign Type', 'نوع الحملة', 'Kampanya Türü', ''),
(856, 'both', 'Both', 'على حد سواء', 'Her ikisi de', ''),
(857, 'regular', 'Regular', 'منتظم', 'Düzenli', ''),
(858, 'Scheduled', 'Scheduled', 'المقرر', 'tarifeli', ''),
(859, 'campaign', 'Campaign', 'حملة', 'Kampanya', ''),
(860, 'campaign_name', 'Campaign Name', 'اسم الحملة', 'Kampanya ismi', ''),
(861, 'sms_gateway', 'Sms Gateway', 'بوابة الرسائل القصيرة', 'SMS Ağ Geçidi', ''),
(862, 'recipients_type', 'Recipients Type', 'نوع المستلمين', 'Alıcı Türü', ''),
(863, 'recipients_count', 'Recipients Count', 'عدد المستلمين', 'Alıcı Sayısı', ''),
(864, 'body', 'Body', 'الجسم', 'Vücut', ''),
(865, 'guardian_already_exist', 'Guardian Already Exist', 'الوصي موجود بالفعل', 'Guardian Zaten Var', ''),
(866, 'guardian', 'Guardian', 'وصي', 'Muhafız', ''),
(867, 'mother_name', 'Mother Name', 'اسم الأم', 'Anne adı', ''),
(868, 'bank_details', 'Bank Details', 'التفاصيل المصرفية', 'Banka detayları', ''),
(869, 'skipped_bank_details', 'Skipped Bank Details', 'تخطي تفاصيل البنك', 'Atlanan Banka Bilgileri', ''),
(870, 'bank', 'Bank', 'مصرف', 'Banka', ''),
(871, 'holder_name', 'Holder Name', 'اسم صاحب التسجيل', 'Sahibinin adı', ''),
(872, 'bank_branch', 'Bank Branch', 'فرع بنك', 'Banka şubesi', ''),
(873, 'custom_field_for', 'Custom Field For', 'حقل مخصص لـ', 'İçin Özel Alan', ''),
(874, 'label', 'Label', 'ضع الكلمة المناسبة', 'Etiket', ''),
(875, 'order', 'Order', 'طلب', 'Sipariş', ''),
(876, 'online_admission', 'Online Admission', 'القبول عبر الإنترنت', 'Online Kabul', ''),
(877, 'field_label', 'Field Label', 'تسمية الميدان', 'Alan Etiketi', ''),
(878, 'field_type', 'Field Label', 'تسمية الميدان', 'Alan Etiketi', ''),
(879, 'default_value', 'Default Value', 'القيمة الافتراضية', 'Varsayılan değer', ''),
(880, 'checked', 'Checked', 'التحقق', 'Kontrol', ''),
(881, 'unchecked', 'Unchecked', 'غير محدد', 'kontrolsüz', ''),
(882, 'roll_number', 'Roll Number', 'رقم اللفة', 'Rulo Sayısı', ''),
(883, 'add_rows', 'Add Rows', 'إضافة صفوف', 'Satır Ekle', ''),
(884, 'salary', 'Salary', 'راتب', 'Maaş', ''),
(885, 'basic', 'Basic', 'الأساسي', 'Temel', ''),
(886, 'allowance', 'Allowance', '', '', ''),
(887, 'deduction', 'Deduction', '', '', ''),
(888, 'net', 'Net', 'Net', 'Ağ', ''),
(889, 'activated_sms_gateway', 'Activated Sms Gateway', 'بوابة الرسائل القصيرة المنشّطة', 'Etkinleştirilmiş Sms Ağ Geçidi', ''),
(890, 'account_sid', 'Account Sid', 'حساب Sid', 'Hesap Sid', ''),
(891, 'roles', 'Roles', 'الأدوار', 'Roller', ''),
(892, 'system_role', 'System Role', 'دور النظام', 'Sistem Rolü', ''),
(893, 'permission', 'Permission', 'الإذن', 'izin', ''),
(894, 'edit_session', 'Edit Session', 'تحرير الجلسة', 'Oturumu Düzenle', ''),
(895, 'transactions', 'Transactions', 'المعاملات', 'işlemler', ''),
(896, 'default_account', 'Default Account', 'الحساب الافتراضي', 'Varsayılan Hesap', ''),
(897, 'deposit', 'Deposit', 'الوديعة', 'Depozito', ''),
(898, 'acccount', 'Acccount', 'حساب', 'gelir hesabı', ''),
(899, 'role_permission_for', 'Role Permission For', 'إذن دور لـ', 'İçin Rol İzni', ''),
(900, 'feature', 'Feature', 'خاصية', 'özellik', ''),
(901, 'access_denied', 'Access Denied', 'تم الرفض', 'Erişim reddedildi', ''),
(902, 'time_start', 'Time Start', 'وقت البدء', 'Süre başladı', ''),
(903, 'time_end', 'Time End', 'انتهى الوقت', 'Zaman Sonu', ''),
(904, 'month_of_salary', 'Month Of Salary', 'شهر الراتب', 'Maaş Ayı', ''),
(905, 'add_documents', 'Add Documents', 'أضف وثائق', 'Belge Ekle', ''),
(906, 'document_type', 'Document Type', 'نوع الوثيقة', 'Belge Türü', ''),
(907, 'document', 'Document', 'المستند', 'belge', ''),
(908, 'document_title', 'Document Title', 'عنوان الوثيقة', 'Belge başlığı', ''),
(909, 'document_category', 'Document Category', 'فئة الوثيقة', 'Belge Kategorisi', ''),
(910, 'exam_result', 'Exam Result', 'نتيجة الإمتحان', 'Sınav sonucu', ''),
(911, 'my_annual_fee_summary', 'My Annual Fee Summary', 'ملخص رسومي السنوي', 'Yıllık Ücret Özetim', ''),
(912, 'book_manage', 'Book Manage', 'إدارة الكتاب', 'Kitap Yönetimi', ''),
(913, 'add_leave_category', 'Add Leave Category', 'إضافة فئة إجازة', 'Ayrılma Kategorisi Ekle', ''),
(914, 'edit_leave_category', 'Edit Leave Category', 'تحرير فئة الإجازة', 'Ayrılma Kategorisini Düzenle', ''),
(915, 'staff_role', 'Staff Role', 'دور الموظفين', 'Personel Rolü', ''),
(916, 'edit_assign', 'Edit Assign', 'تحرير تعيين', 'Atamayı Düzenle', ''),
(917, 'view_report', 'View Report', '', '', ''),
(918, 'rank_out_of_5', 'Rank Out Of 5', 'مرتبة من 5', 'Sıralama 5 üzerinden', ''),
(919, 'hall_no', 'Hall No', 'القاعة رقم', 'Salon No', ''),
(920, 'no_of_seats', 'No Of Seats', 'عدد المقاعد', 'Koltuk Sayısı', ''),
(921, 'mark_distribution', 'Mark Distribution', 'توزيع مارك', 'Mark Dağıtım', ''),
(922, 'exam_type', 'Exam Type', 'نوع الامتحان', 'Sınav Türü', ''),
(923, 'marks_and_grade', 'Marks And Grade', 'العلامات والدرجات', 'İşaretler ve Sınıf', ''),
(924, 'min_percentage', 'Min Percentage', 'النسبة المئوية', 'Minimum Yüzde', ''),
(925, 'max_percentage', 'Max Percentage', 'النسبة المئوية القصوى', 'Maksimum Yüzde', ''),
(926, 'cost_per_bed', 'Cost Per Bed', 'تكلفة السرير', 'Yatak Başına Maliyet', ''),
(927, 'add_category', 'Add Category', 'إضافة فئة', 'Kategori ekle', ''),
(928, 'category_for', 'Category For', 'التصنيف لـ', 'Kategori İçin', ''),
(929, 'start_place', 'Start Place', 'ابدأ مكان', 'Başlangıç ​​Yeri', ''),
(930, 'stop_place', 'Stop Place', 'مكان التوقف', 'Bitiş Yeri', ''),
(931, 'vehicle', 'Vehicle', 'مركبة', 'araç', ''),
(932, 'select_multiple_vehicle', 'Select Multiple Vehicle', 'حدد مركبة متعددة', 'Birden Çok Araç Seçin', ''),
(933, 'book_details', 'Book Details', 'تفاصيل الكتاب', 'Kitap Ayrıntıları', ''),
(934, 'issued_by', 'Issued By', 'أصدرت من قبل', 'Veren kuruluş', ''),
(935, 'return_by', 'Return By', 'العودة بواسطة', 'Gönderen', ''),
(936, 'group', 'Group', 'مجموعة', 'grup', ''),
(937, 'individual', 'Individual', 'فرد', 'bireysel', ''),
(938, 'recipients', 'Recipients', 'المستلمون', 'Alıcılar', ''),
(939, 'group_name', 'Group Name', 'أسم المجموعة', 'Grup ismi', ''),
(940, 'fee_code', 'Fee Code', 'كود الرسوم', 'Ücret Kodu', ''),
(941, 'fine_type', 'Fine Type', 'نوع جيد', 'İnce Tip', ''),
(942, 'fine_value', 'Fine Value', 'قيمة جيدة', 'İnce Değer', ''),
(943, 'late_fee_frequency', 'Late Fee Frequency', 'تردد الرسوم المتأخرة', 'Gecikme Ücreti Sıklığı', ''),
(944, 'fixed_amount', 'Fixed Amount', 'مبلغ ثابت', 'Sabit miktar', ''),
(945, 'fixed', 'Fixed', 'ثابت', 'Sabit', ''),
(946, 'daily', 'Daily', 'اليومي', 'Günlük', ''),
(947, 'weekly', 'Weekly', 'أسبوعي', 'Haftalık', ''),
(948, 'monthly', 'Monthly', 'شهريا', 'Aylık', ''),
(949, 'annually', 'Annually', 'سنويا', 'yıllık', ''),
(950, 'first_select_the_group', 'First Select The Group', 'أولا حدد المجموعة', 'Önce Grubu Seçin', ''),
(951, 'percentage', 'Percentage', '', '', ''),
(952, 'value', 'Value', 'القيمة', 'değer', ''),
(953, 'fee_group', 'Fee Group', 'مجموعة الرسوم', 'Ücret Grubu', ''),
(954, 'due_invoice', 'Due Invoice', 'فاتورة مستحقة', 'Vadesi Gelen Fatura', ''),
(955, 'reminder', 'Reminder', 'تذكير', 'Hatırlatma', ''),
(956, 'frequency', 'Frequency', 'تكرر', 'Sıklık', ''),
(957, 'notify', 'Notify', 'أبلغ', 'bildirmek', ''),
(958, 'before', 'Before', 'قبل', 'Önce', ''),
(959, 'after', 'After', 'بعد', 'Sonra', ''),
(960, 'number', 'Number', 'رقم', 'Numara', ''),
(961, 'ref_no', 'Ref No', 'مصدر رقم', 'Ref No', ''),
(962, 'pay_via', 'Pay Via', 'ادفع عن طريق', 'Ödeme Yöntemi', ''),
(963, 'ref', 'Ref', '', '', ''),
(964, 'dr', 'Dr', '', '', ''),
(965, 'cr', 'Cr', '', '', ''),
(966, 'edit_book', 'Edit Book', 'تحرير كتاب', 'Kitabı Düzenle', ''),
(967, 'leaves', 'Leaves', 'اوراق اشجار', 'Yapraklar', ''),
(968, 'leave_request', 'Leave Request', 'طلب إجازة', 'Ayrılma İsteği', ''),
(969, 'this_file_type_is_not_allowed', 'This File Type Is Not Allowed', 'نوع الملف هذا غير مسموح به', 'Bu Dosya Türüne İzin Verilmiyor', ''),
(970, 'error_reading_the_file', 'Error Reading The File', 'خطأ في قراءة الملف', 'Dosya Okuma Hatası', ''),
(971, 'staff', 'Staff', 'العاملين', 'Personel', ''),
(972, 'waiting', 'Waiting', 'انتظار', 'Bekleme', ''),
(973, 'live', 'Live', 'حي', 'Canlı', ''),
(974, 'by', 'By', '', '', ''),
(975, 'host_live_class', 'Host Live Class', 'استضافة فئة مباشرة', 'Host Sınıfı', ''),
(976, 'join_live_class', 'Join Live Class', 'انضم إلى Live Class', 'Canlı Sınıfa Katılın', ''),
(977, 'system_logo', 'System Logo', 'شعار النظام', 'Sistem Logosu', ''),
(978, 'text_logo', 'Text Logo', 'شعار النص', 'Metin Logosu', ''),
(979, 'printing_logo', 'Printing Logo', 'شعار الطباعة', 'Baskı Logo', ''),
(980, 'expired', 'Expired', 'منتهية الصلاحية', 'Süresi doldu', ''),
(981, 'collect_fees', 'Collect Fees', 'تحصيل الرسوم', 'Ücretleri Toplayın', ''),
(982, 'fees_code', 'Fees Code', 'كود الرسوم', 'Ücret Kodu', ''),
(983, 'collect_by', 'Collect By', 'اجمع بواسطة', 'Toplayan:', ''),
(984, 'fee_payment', 'Fee Payment', 'دفع الرسوم', 'Ücret Ödeme', ''),
(985, 'write_message', 'Write Message', 'اكتب رسالة', 'Mesaj Yaz', ''),
(986, 'discard', 'Discard', 'تجاهل', 'Sil', ''),
(987, 'message_sent_successfully', 'Message Sent Successfully', 'تم إرسال الرسالة بنجاح', 'Mesaj Başarıyla Gönderildi', ''),
(988, 'visit_home_page', 'Visit Home Page', '', '', ''),
(989, 'frontend', 'Frontend', '', '', ''),
(990, 'setting', 'Setting', '', '', ''),
(991, 'menu', 'Menu', '', '', ''),
(992, 'page', 'Page', '', '', ''),
(993, 'manage', 'Manage', '', '', ''),
(994, 'slider', 'Slider', '', '', ''),
(995, 'features', 'Features', '', '', ''),
(996, 'testimonial', 'Testimonial', '', '', ''),
(997, 'service', 'Service', '', '', ''),
(998, 'faq', 'Faq', '', '', ''),
(999, 'card_management', 'Card Management', '', '', ''),
(1000, 'id_card', 'Id Card', '', '', ''),
(1001, 'templete', 'Templete', '', '', ''),
(1002, 'admit_card', 'Admit Card', '', '', ''),
(1003, 'certificate', 'Certificate', '', '', ''),
(1004, 'system_update', 'System Update', '', '', ''),
(1005, 'url', 'Url', '', '', ''),
(1006, 'content', 'Content', '', '', ''),
(1007, 'banner_photo', 'Banner Photo', '', '', ''),
(1008, 'meta', 'Meta', '', '', ''),
(1009, 'keyword', 'Keyword', '', '', ''),
(1010, 'applicable_user', 'Applicable User', '', '', ''),
(1011, 'page_layout', 'Page Layout', '', '', ''),
(1012, 'background', 'Background', '', '', ''),
(1013, 'image', 'Image', '', '', ''),
(1014, 'width', 'Width', '', '', ''),
(1015, 'height', 'Height', '', '', ''),
(1016, 'signature', 'Signature', '', '', ''),
(1017, 'website', 'Website', '', '', ''),
(1018, 'cms', 'Cms', '', '', ''),
(1019, 'url_alias', 'Url Alias', '', '', ''),
(1020, 'cms_frontend', 'Cms Frontend', '', '', ''),
(1021, 'enabled', 'Enabled', '', '', ''),
(1022, 'receive_email_to', 'Receive Email To', '', '', ''),
(1023, 'captcha_status', 'Captcha Status', '', '', ''),
(1024, 'recaptcha_site_key', 'Recaptcha Site Key', '', '', ''),
(1025, 'recaptcha_secret_key', 'Recaptcha Secret Key', '', '', ''),
(1026, 'working_hours', 'Working Hours', '', '', ''),
(1027, 'fav_icon', 'Fav Icon', '', '', ''),
(1028, 'theme', 'Theme', '', '', ''),
(1029, 'fax', 'Fax', '', '', ''),
(1030, 'footer_about_text', 'Footer About Text', '', '', ''),
(1031, 'copyright_text', 'Copyright Text', '', '', ''),
(1032, 'facebook_url', 'Facebook Url', '', '', ''),
(1033, 'twitter_url', 'Twitter Url', '', '', ''),
(1034, 'youtube_url', 'Youtube Url', '', '', ''),
(1035, 'google_plus', 'Google Plus', '', '', ''),
(1036, 'linkedin_url', 'Linkedin Url', '', '', ''),
(1037, 'pinterest_url', 'Pinterest Url', '', '', ''),
(1038, 'instagram_url', 'Instagram Url', '', '', ''),
(1039, 'play', 'Play', '', '', ''),
(1040, 'video', 'Video', '', '', ''),
(1041, 'usename', 'Usename', '', '', ''),
(1042, 'experience_details', 'Experience Details', '', '', ''),
(1043, 'total_experience', 'Total Experience', '', '', ''),
(1044, 'class_schedule', 'Class Schedule', '', '', ''),
(1045, 'cms_default_branch', 'Cms Default Branch', '', '', ''),
(1046, 'website_page', 'Website Page', '', '', ''),
(1047, 'welcome', 'Welcome', '', '', 'Xoş gəlmisiniz'),
(1048, 'services', 'Services', '', '', ''),
(1049, 'call_to_action_section', 'Call To Action Section', '', '', ''),
(1050, 'subtitle', 'Subtitle', '', '', ''),
(1051, 'cta', 'Cta', '', '', ''),
(1052, 'button_text', 'Button Text', '', '', ''),
(1053, 'button_url', 'Button Url', '', '', ''),
(1054, '_title', ' Title', '', '', ''),
(1055, 'contact', 'Contact', '', '', ''),
(1056, 'box_title', 'Box Title', '', '', ''),
(1057, 'box_description', 'Box Description', '', '', ''),
(1058, 'box_photo', 'Box Photo', '', '', ''),
(1059, 'form_title', 'Form Title', '', '', ''),
(1060, 'submit_button_text', 'Submit Button Text', '', '', ''),
(1061, 'map_iframe', 'Map Iframe', '', '', ''),
(1062, 'email_subject', 'Email Subject', '', '', ''),
(1063, 'prefix', 'Prefix', '', '', ''),
(1064, 'surname', 'Surname', '', '', ''),
(1065, 'rank', 'Rank', '', '', ''),
(1066, 'submit', 'Submit', '', '', ''),
(1067, 'certificate_name', 'Certificate Name', '', '', ''),
(1068, 'layout_width', 'Layout Width', '', '', ''),
(1069, 'layout_height', 'Layout Height', '', '', ''),
(1070, 'expiry_date', 'Expiry Date', '', '', ''),
(1071, 'position', 'Position', '', '', ''),
(1072, 'target_new_window', 'Target New Window', '', '', ''),
(1073, 'external_url', 'External Url', '', '', ''),
(1074, 'external_link', 'External Link', '', '', ''),
(1075, 'sms_notification', 'Sms Notification', '', '', ''),
(1076, 'scheduled_at', 'Scheduled At', '', '', ''),
(1077, 'published', 'Published', '', '', ''),
(1078, 'unpublished_on_website', 'Unpublished On Website', '', '', ''),
(1079, 'published_on_website', 'Published On Website', '', '', ''),
(1080, 'no_selection_available', 'No Selection Available', '', '', ''),
(1081, 'select_for_everyone', 'Select For Everyone', '', '', ''),
(1082, 'teacher_restricted', 'Teacher Restricted', '', '', ''),
(1083, 'guardian_relation', 'Guardian Relation', '', '', ''),
(1084, 'username_prefix', 'Username Prefix', '', '', ''),
(1085, 'default_password', 'Default Password', '', '', ''),
(1086, 'parents_profile', 'Parents Profile', '', '', ''),
(1087, 'childs', 'Childs', '', '', ''),
(1088, 'page_title', 'Page Title', '', '', ''),
(1089, 'select_menu', 'Select Menu', '', '', ''),
(1090, 'meta_keyword', 'Meta Keyword', '', '', ''),
(1091, 'meta_description', 'Meta Description', '', '', ''),
(1092, 'evaluation_date', 'Evaluation Date', '', '', ''),
(1093, 'evaluated_by', 'Evaluated By', '', '', ''),
(1094, 'complete', 'Complete', '', '', ''),
(1095, 'incomplete', 'Incomplete', '', '', ''),
(1096, 'payment_details', 'Payment Details', '', '', ''),
(1097, 'edit_attachments', 'Edit Attachments', '', '', ''),
(1098, 'live_classes', 'Live Classes', '', '', ''),
(1099, 'duration', 'Duration', '', '', ''),
(1100, 'metting_id', 'Metting Id', '', '', ''),
(1101, 'set_record', 'Set Record', '', '', ''),
(1102, 'set_mute_on_start', 'Set Mute On Start', '', '', ''),
(1103, 'button_text_1', 'Button Text 1', '', '', ''),
(1104, 'button_url_1', 'Button Url 1', '', '', ''),
(1105, 'button_text_2', 'Button Text 2', '', '', ''),
(1106, 'button_url_2', 'Button Url 2', '', '', ''),
(1107, 'left', 'Left', '', '', ''),
(1108, 'center', 'Center', '', '', ''),
(1109, 'right', 'Right', '', '', ''),
(1110, 'about', 'About', '', '', ''),
(1111, 'about_photo', 'About Photo', '', '', ''),
(1112, 'parallax_photo', 'Parallax Photo', '', '', ''),
(1113, 'decline', 'Decline', '', '', ''),
(1114, 'edit_grade', 'Edit Grade', '', '', ''),
(1115, 'mark', 'Mark', '', '', ''),
(1116, 'hall_room', 'Hall Room', '', '', ''),
(1117, 'student_promotion', 'Student Promotion', '', '', ''),
(1118, 'username_has_already_been_used', 'Username Has Already Been Used', '', '', ''),
(1119, 'fee_collection', 'Fee Collection', '', '', ''),
(1120, 'not_found_anything', 'Not Found Anything', '', '', ''),
(1121, 'preloader_backend', 'Preloader Backend', '', '', ''),
(1122, 'ive_class_method', 'Ive Class Method', '', '', ''),
(1123, 'live_class_method', 'Live Class Method', '', '', ''),
(1124, 'api_credential', 'Api Credential', '', '', ''),
(1125, 'translation_update', 'Translation Update', '', '', ''),
(1126, ' live_class_reports', ' Live Class Reports', '', '', ''),
(1127, 'live_class_reports', 'Live Class Reports', '', '', ''),
(1128, 'all', 'All', '', '', ''),
(1129, 'student_participation_report', 'Student Participation Report', '', '', ''),
(1130, 'joining_time', 'Joining Time', '', '', ''),
(1131, 'gallery', 'Gallery', '', '', ''),
(1132, 'edit_branch', 'Edit Branch', '', '', ''),
(1133, 'place', 'Place', '', 'Yer', 'Yer'),
(1134, 'an_error_occurred', 'An Error Occurred', '', '', 'Xəta baş verdi'),
(1135, 'new_ads', 'New Ads', '', 'Yeni ilanlar', 'Yeni Elanlar'),
(1136, 'see_them_all', 'See Them All', '', 'Hepsini gör', 'Hamısına bax'),
(1137, 'vip_ads', 'Vip Ads', '', 'VİP ilanlar', 'VİP Elanlar'),
(1138, 'ads_number', 'Ads Number', '', 'İlan numarası', 'Elan nömrəsi'),
(1139, 'search_for_details', 'Search For Details', '', 'Detaylı arama', 'Ətraflı axtar'),
(1140, 'selected', 'Selected', '', '', 'Seçilmiş'),
(1141, 'confirm', 'Confirm', '', 'Kabul et', 'Təsdiq et'),
(1142, 'metro_stations', 'Metro Stations', '', 'Metro istasyonları', 'Metro stansiyalar'),
(1143, 'metro', 'Metro', '', 'Metro', 'Metro'),
(1144, 'search_the_map', 'Search The Map', '', 'Haritada ara', 'Xəritədə axtar'),
(1145, 'enter_the_names_of_districts_and_settlements', 'Enter The Names Of Districts And Settlements', '', '', 'Rayon və qəsəbə adlarını daxil edin'),
(1146, 'districts_and_settlements', 'Districts And Settlements', '', '', 'Rayon və qəsəbələr'),
(1147, 'wishlist', 'Wishlist', '', '', 'Seçilmişlər'),
(1148, 'targets', 'Targets', '', '', 'Nişangahlar'),
(1149, 'districts', 'Districts', '', '', 'Qəsəbələr'),
(1150, 'search_metro_station', 'Search Metro Station', '', '', 'Metro stansiyası axtar'),
(1151, 'enter_the_name_of_target', 'Enter The Name Of Target', '', '', 'Nişangahın adını daxil edin'),
(1152, 'register', 'Register', '', 'Kayıt', 'Qeydiyyat'),
(1153, 'add_listing', 'Add Listing', '', 'İlan ver', 'Elan yerləşdir'),
(1154, 'announcement_owner', 'Announcement Owner', '', 'Duyuru sahibi', ''),
(1155, 'user_type', 'User Type', '', 'Kullanıcı tipi', 'İstifadəçi tipi'),
(1156, 'mobile', 'Mobile', '', 'Mobil', 'Telefon'),
(1157, 'whatsapp', 'Whatsapp', '', 'Whatsapp', 'Whatsapp'),
(1158, 'photos', 'Photos', '', 'Resimler', 'Şəkillər'),
(1159, 'contact_information', 'Contact Information', '', 'İletişim bilgileri', 'Əlaqə məlumatları'),
(1160, 'continue', 'Continue', '', 'Devam et', 'Davam et'),
(1161, 'announcement_type', 'Announcement Type', '', 'İlan türü', 'Elan tipi'),
(1162, 'show_map', 'Show Map', '', 'Haritada göster', 'Xəritədə göstər'),
(1163, 'area', 'Area', '', '', 'Sahə'),
(1164, 'region', 'Region', '', '', 'Rayon'),
(1165, 'district', 'District', '', '', 'Qəsəbə'),
(1166, 'statistics', 'Statistics', '', '', 'Statistika'),
(1167, 'employees', 'Employees', '', '', ''),
(1168, 'classes', 'Classes', '', '', ''),
(1169, 'follow_us_on_social_networks', 'Follow Us On Social Networks', '', '', 'Bizi sosial şəbəkələrdə izləyin'),
(1170, 'site_map', 'Site Map', '', 'Sayt haritası', 'Sayt xəritəsi'),
(1171, 'home', 'Home', '', 'Anasayfa', 'Ana səhifə'),
(1172, 'cities', 'Cities', '', '', 'Şəhərlər'),
(1173, 'regions', 'Regions', '', '', 'Rayonlar'),
(1174, 'metros', 'Metros', '', '', 'Metrolar'),
(1175, 'do_you_already_have_an_account', 'Do You Already Have An Account', '', 'Zaten bir hesabın var mı', 'Artıq bir hesabınız var mı'),
(1176, 'agency', 'Agency', '', 'Ajans', 'Agentlik'),
(1177, 'for_sale', 'For Sale', '', 'Satılık', 'Satış'),
(1178, 'for_rent', 'For Rent', '', 'Kiralık', 'Kirayə'),
(1179, 'mortgage', 'Mortgage', '', 'İpotek', 'İpoteka'),
(1180, 'by_registering_you_are_deemed_to_have_accepted_all_the_rules', 'By Registering You Are Deemed To Have Accepted All The Rules', '', 'Kayıt olarak tüm kuralları kabul etmiş sayılırsınız.', 'Qeydiyyatdan keçməklə siz bütün qaydaları qəbul etmiş sayılırsınız.'),
(1181, 'user_agreement', 'User Agreement', '', 'Kullanıcı Sözleşmesi', 'İstifadəçi razılaşması'),
(1182, 'email_address_not_entered', 'Email Address Not Entered', '', '', 'E-mail ünvanı daxil edilməyib'),
(1183, 'password_not_entered', 'Password Not Entered', '', '', 'Şifrə daxil edilməyib'),
(1184, 'email_address_is_incorrect', 'Email Address Is Incorrect', '', '', 'E-Poçt ünvanı düzgün deyil'),
(1185, 'retry_password', 'Retry Password', '', '', 'Şifrənin təkrarı'),
(1186, 'no_contact_person_specified', 'No Contact Person Specified', '', '', 'Əlaqədar şəxs qeyd edilməyib'),
(1187, 'user_rules_not_accepted', 'User Rules Not Accepted', '', '', 'İstifadəçi şərtləri qəbul edilməyib'),
(1188, 'mobile_number_is_not_specified', 'Mobile Number Is Not Specified', '', '', 'Mobil nömrə daxil edilməyib'),
(1189, 'password_do_not_match', 'Password Do Not Match', '', '', 'Şifrələr uyğun gəlmir'),
(1190, 'mobile_number_is_incorrect', 'Mobile Number Is Incorrect', '', '', 'Mobil nömrə düzgün deyil'),
(1191, 'notifications', 'Notifications', '', '', 'Bildirişlər'),
(1192, 'my_ads', 'My Ads', '', '', 'Elanlarım'),
(1193, 'my_account', 'My Account', '', '', 'Hesabım'),
(1194, 'estate_types', 'Estate Types', '', '', 'Əmlakın növü'),
(1195, 'phone_number', 'Phone Number', '', '', 'Telefon nömrəsi'),
(1196, 'repeat_password', 'Repeat Password', '', '', 'Təkrar şifrə'),
(1197, 'relevant_person', 'Relevant Person', '', '', 'Əlaqədar şəxs'),
(1198, 'email_already_used', 'Email Already Used', '', '', 'Email artıq istifadə olunur'),
(1199, 'phone_number_already_used', 'Phone Number Already Used', '', '', 'Telefon nömrəsi artıq istifadə olunur'),
(1200, 'email_address_is_already_used', 'Email Address Is Already Used', '', '', 'Email adresi artıq istifadə olunur'),
(1201, 'mobile_number_is_used', 'Mobile Number Is Used', '', '', 'Mobil nömrə artıq istifadə olunur'),
(1202, 'the_announcement_owner_field_is_required', 'The Announcement Owner Field Is Required', '', '', 'Əlaqədar şəxs qeyd edilməyib'),
(1203, 'the_name_must_consist_of_at_least_3_letters', 'The Name Must Consist Of At Least 3 Letters', '', '', 'Ad ən azı 3 hərfdən ibarət olmalıdır'),
(1204, 'the_email_address_is_not_valid', 'The Email Address Is Not Valid', '', '', 'E-Poçt ünvanı doğru deyil'),
(1205, 'the_email_address_already_used', 'The Email Address Already Used', '', '', 'E-Poçt ünvanı artıq istifadə olunur'),
(1206, 'the_mobile_number_field_is_required', 'The Mobile Number Field Is Required', '', '', 'Telefon nömrəsi qeyd edilməyib'),
(1207, 'the_phone_number_is_not_valid', 'The Phone Number Is Not Valid', '', '', 'Telefon nömrəsi doğru deyil'),
(1208, 'the_phone_number_already_used', 'The Phone Number Already Used', '', '', 'Telefon nömrəsi artıq istifadə olunur'),
(1209, 'the_password_must_be_at_least_8_characters_long', 'The Password Must Be At Least 8 Characters Long', '', '', 'Şifrə ən azı 8 simvoldan ibarət olmalıdır'),
(1210, 'the_passwords_do_not_match', 'The Passwords Do Not Match', '', '', 'Şifrələr uyğun gəlmir'),
(1211, 'user_agreement_field_is_required', 'User Agreement Field Is Required', '', '', 'İstifadəçi razılaşması qəbul edilməyib'),
(1212, 'the_email_field_is_required', 'The Email Field Is Required', '', '', 'E-Poçt ünvanı qeyd edilməyib'),
(1213, 'the_password_field_is_required', 'The Password Field Is Required', '', '', 'Şifrə qeyd edilməyib'),
(1214, 'username_or_password_incorrect', 'Username Or Password Incorrect', '', '', 'İstifadəçi adı və ya şifrə yalnışdır'),
(1215, 'locations', 'Locations', '', '', 'Yerlər'),
(1216, 'unverified_account', 'Unverified Account', '', '', 'Hesabınız təsdiqlənməyib'),
(1217, 'your_registration_has_been_successfully_completed', 'Your Registration Has Been Successfully Completed', '', '', 'Qeydiyyatınız müvəffəqiyyətlə tamamlandı'),
(1218, 'the_name_field_is_required', 'The Name Field Is Required', '', '', 'Ad mütləq qeyd edilməlidir'),
(1219, 'new_name', 'New Name', '', '', 'Yeni ad'),
(1220, 'the_name_was_successfully_changed', 'The Name Was Successfully Changed', '', '', 'Ad müvəffəqiyyətlə dəyişdirildi'),
(1221, 'new_email', 'New Email', '', '', 'Yeni E-Poçt adresi'),
(1222, 'code', 'Code', '', '', 'Kod'),
(1223, 'the_code_field_is_required', 'The Code Field Is Required', '', '', 'Kod mütləq doldurulmalıdır'),
(1224, 'the_code_must_consist_of_at_least_4_letters', 'The Code Must Consist Of At Least 4 Letters', '', '', 'Kod mütləq 4 simvoldan ibarət olmalıdır'),
(1225, 'code_is_not_valid', 'Code Is Not Valid', '', '', 'Kod yalnışdır'),
(1226, 'apply_online_admission', 'Apply Online Admission', '', '', ''),
(1227, 'registration', 'Registration', '', '', ''),
(1228, 'user_reset_password', 'User Reset Password', '', '', ''),
(1229, 'change_email_verification', 'Change Email Verification', '', '', ''),
(1230, 'all_cities', 'All Cities', '', '', ''),
(1231, 'add_city', 'Add City', '', '', ''),
(1232, 'city_name', 'City Name', '', '', ''),
(1233, 'seo_link', 'Seo Link', '', '', ''),
(1234, 'please_select_one_item', 'Please Select One Item', '', '', ''),
(1235, 'deactive', 'Deactive', '', '', ''),
(1236, 'active', 'Active', '', '', ''),
(1237, 'all_regions', 'All Regions', '', '', ''),
(1238, 'add_region', 'Add Region', '', '', ''),
(1239, 'region_name', 'Region Name', '', '', ''),
(1240, 'all_metros', 'All Metros', '', '', ''),
(1241, 'add_metro', 'Add Metro', '', '', ''),
(1242, 'metro_name', 'Metro Name', '', '', ''),
(1243, 'the_phone_number_field_is_required', 'The Phone Number Field Is Required', '', '', ''),
(1244, 'the_phone_number_must_consist_of_at_least_10_numbers', 'The Phone Number Must Consist Of At Least 10 Numbers', '', '', ''),
(1245, 'ads_rules', 'Ads Rules', '', '', ''),
(1246, 'region_edit', 'Region Edit', '', '', ''),
(1247, 'all_districts', 'All Districts', '', '', ''),
(1248, 'add_district', 'Add District', '', '', ''),
(1249, 'district_name', 'District Name', '', '', ''),
(1250, 'all_targets', 'All Targets', '', '', ''),
(1251, 'add_target', 'Add Target', '', '', ''),
(1252, 'target_name', 'Target Name', '', '', ''),
(1253, 'add_user', 'Add User', '', '', ''),
(1254, 'user_name_surname', 'User Name Surname', '', '', ''),
(1255, 'user_email', 'User Email', '', '', ''),
(1256, 'user_mobile', 'User Mobile', '', '', ''),
(1257, 'user_balance', 'User Balance', '', '', ''),
(1258, 'enter_name_surname', 'Enter Name Surname', '', '', ''),
(1259, 'enter_email', 'Enter Email', '', '', ''),
(1260, 'enter_phone_number', 'Enter Phone Number', '', '', ''),
(1261, 'AZN', 'AZN', '', '', ''),
(1262, 'user_edit', 'User Edit', '', '', ''),
(1263, 'the_announcement_type_field_is_required', 'The Announcement Type Field Is Required', '', '', ''),
(1264, 'property_type', 'Property Type', '', '', ''),
(1265, 'the_property_type_field_is_required', 'The Property Type Field Is Required', '', '', ''),
(1266, 'deed', 'Deed', '', '', ''),
(1267, 'the_deed_field_is_required', 'The Deed Field Is Required', '', '', ''),
(1268, 'the_room_field_is_required', 'The Room Field Is Required', '', '', ''),
(1269, 'floor', 'Floor', '', '', ''),
(1270, 'the_floor_field_is_required', 'The Floor Field Is Required', '', '', ''),
(1271, 'max_floor', 'Max Floor', '', '', ''),
(1272, 'the_max_floor_field_is_required', 'The Max Floor Field Is Required', '', '', ''),
(1273, 'the_price_field_is_required', 'The Price Field Is Required', '', '', ''),
(1274, 'the_area_field_is_required', 'The Area Field Is Required', '', '', ''),
(1275, 'repair', 'Repair', '', '', ''),
(1276, 'the_repair_field_is_required', 'The Repair Field Is Required', '', '', 'Təmir növü seçilməyib'),
(1277, 'land_area', 'Land Area', '', '', 'Torpaq sahəsi'),
(1278, 'the_land_area_field_is_required', 'The Land Area Field Is Required', '', '', 'Torpaq sahəsi qeyd edilməyib'),
(1279, 'the_city_field_is_required', 'The City Field Is Required', '', '', 'Şəhər seçilməyib'),
(1280, 'the_district_field_is_required', 'The District Field Is Required', '', '', 'Qəsəbə seçilməyib'),
(1281, 'the_metro_field_is_required', 'The Metro Field Is Required', '', '', 'Metro seçilməyib'),
(1282, 'the_address_field_is_required', 'The Address Field Is Required', '', '', 'Ünvan qeyd edilməyib'),
(1283, 'latitude', 'Latitude', '', '', ''),
(1284, 'the_latitude_field_is_required', 'The Latitude Field Is Required', '', '', ''),
(1285, 'longitude', 'Longitude', '', '', ''),
(1286, 'the_longitude_field_is_required', 'The Longitude Field Is Required', '', '', ''),
(1287, 'property_description', 'Property Description', '', '', 'Əmlakın təsviri'),
(1288, 'the_property_description_field_is_required', 'The Property Description Field Is Required', '', '', 'Əmlakın təsviri qeyd edilməyib'),
(1289, 'images', 'Images', '', '', 'Şəkillər'),
(1290, 'the_minimum_number_for_images_must_be_4', 'The Minimum Number For Images Must Be 4', '', '', 'Şəkil sayı minimum 4 olmalıdır'),
(1291, 'the_region_field_is_required', 'The Region Field Is Required', '', '', 'Rayon seçilməyib'),
(1292, 'the_images_field_is_required', 'The Images Field Is Required', '', '', 'Şəkil yüklənməyib'),
(1293, 'the_mobile_number_is_not_valid', 'The Mobile Number Is Not Valid', '', '', 'Mobil nömrə düzgün qeyd edilməyib'),
(1294, 'ads', 'Ads', '', '', 'Elanlar'),
(1295, 'property_for_sale', 'Property For Sale', '', '', 'Satışda olan əmlaklar'),
(1296, 'property_for_rent', 'Property For Rent', '', '', 'Kirayə əmlaklar'),
(1297, 'site_banner', 'Site Banner', '', '', ''),
(1298, 'Site banners', 'Site Banners', '', '', ''),
(1299, 'header_banner', 'Header Banner', '', '', ''),
(1300, 'add_ads', 'Add Ads', '', '', 'Elan yerləşdir'),
(1301, 'ads_pin_kod', 'Ads Pin Kod', '', '', ''),
(1302, 'connection_type', 'Connection Type', '', '', ''),
(1303, 'average_price', 'Average Price', '', '', ''),
(1304, 'has_whatsapp', 'Has Whatsapp', '', '', ''),
(1305, 'city_id', 'City Id', '', '', ''),
(1306, 'region_id', 'Region Id', '', '', ''),
(1307, 'district_id', 'District Id', '', '', ''),
(1308, 'metro_id', 'Metro Id', '', '', ''),
(1309, 'business_center', 'Business Center', '', '', ''),
(1310, 'complex', 'Complex', '', '', ''),
(1311, 'is_active', 'Is Active', '', '', ''),
(1312, 'pull_ads_forward_begin', 'Pull Ads Forward Begin', '', '', ''),
(1313, 'pull_ads_forward_end', 'Pull Ads Forward End', '', '', ''),
(1314, 'vip_begin', 'Vip Begin', '', '', ''),
(1315, 'vip_end', 'Vip End', '', '', ''),
(1316, 'premium_begin', 'Premium Begin', '', '', ''),
(1317, 'premium_end', 'Premium End', '', '', ''),
(1318, 'deleted_at', 'Deleted At', '', '', ''),
(1319, 'approved_at', 'Approved At', '', '', ''),
(1320, 'simple_ads_end_date', 'Simple Ads End Date', '', '', ''),
(1321, 'related_person', 'Related Person', '', '', ''),
(1322, 'owner', 'Owner', '', '', ''),
(1323, 'mediator', 'Mediator', '', '', ''),
(1324, 'ads_type', 'Ads Type', '', '', ''),
(1325, 'estate_type', 'Estate Type', '', '', ''),
(1326, 'enter_floor', 'Enter Floor', '', '', 'Yerləşdiyi mərtəbə'),
(1327, 'enter_max_floor', 'Enter Max Floor', '', '', 'Mərtəbə sayı'),
(1328, 'site_banners', 'Site Banners', '', '', ''),
(1329, 'right_banner', 'Right Banner', '', '', ''),
(1330, 'left_banner', 'Left Banner', '', '', ''),
(1331, 'center_banner', 'Center Banner', '', '', ''),
(1332, 'sale', 'Sale', '', '', 'Satış'),
(1333, 'monthly_rent', 'Monthly Rent', '', '', 'Aylıq kirayə'),
(1334, 'daily_rent', 'Daily Rent', '', '', 'Günlük kirayə'),
(1335, 'the_map_is_required', 'The Map Is Required', '', '', 'Əmlak xəritədə göstərilməyib'),
(1336, 'map', 'Map', '', '', 'Xəritə'),
(1337, 'show_number', 'Show Number', '', '', 'Nömrəni göstər'),
(1338, 'hide_map', 'Hide Map', '', '', 'Xəritəni gizlət'),
(1339, 'short_information', 'Short Information', '', '', 'Qısa məlumat'),
(1340, 'show_all_information', 'Show All Information', '', '', 'Bütün məlumatları göstər'),
(1341, 'extra_info', 'Extra Info', '', '', ''),
(1342, 'complaints', 'Complaints', '', '', ''),
(1343, 'ads_banners', 'Ads Banners', '', '', ''),
(1344, 'complain_category', 'Complain Category', '', '', ''),
(1345, 'ads_configuration', 'Ads Configuration', '', '', ''),
(1346, 'home_ads_limit', 'Home Ads Limit', '', '', ''),
(1347, 'detail_ads_limit', 'Detail Ads Limit', '', '', ''),
(1348, 'category_ads_limit', 'Category Ads Limit', '', '', ''),
(1349, 'min_photo_count', 'Min Photo Count', '', '', ''),
(1350, 'max_photo_count', 'Max Photo Count', '', '', ''),
(1351, 'one_number_ads_count', 'One Number Ads Count', '', '', ''),
(1352, 'ads_expire_day', 'Ads Expire Day', '', '', ''),
(1353, 'rent', 'Rent', '', '', ''),
(1354, 'about_ads_onfiguration', 'About Ads Onfiguration', '', '', ''),
(1355, 'about_ads_configuration', 'About Ads Configuration', '', '', ''),
(1356, 'set_ads_vip', 'Set Ads Vip', '', '', ''),
(1357, 'set_ads_premium', 'Set Ads Premium', '', '', ''),
(1358, 'pull_ads_forward', 'Pull Ads Forward', '', '', ''),
(1359, 'delete_ads', 'Delete Ads', '', '', ''),
(1360, 'update_ads', 'Update Ads', '', '', ''),
(1361, 'Elanı VIP etmək', 'Elanı VIP Etmək', '', '', ''),
(1362, 'Elanı Premium etmək', 'Elanı Premium Etmək', '', '', ''),
(1363, 'Elanı İrəli çəkmək', 'Elanı İrəli çəkmək', '', '', ''),
(1364, 'Elanı silmək', 'Elanı Silmək', '', '', ''),
(1365, 'Elanı redaktə etmək', 'Elanı Redaktə Etmək', '', '', ''),
(1366, 'similar_ads', 'Similar Ads', '', '', ''),
(1367, 'all_new_ads', 'All New Ads', '', '', ''),
(1368, 'add_advertisement_rules', 'Add Advertisement Rules', '', '', ''),
(1369, 'add_advertisement', 'Add Advertisement', '', '', ''),
(1370, 'sitemap', 'Sitemap', '', '', ''),
(1371, 'new_listings', 'New Listings', '', '', ''),
(1372, 'new_buildings', 'New Buildings', '', '', ''),
(1373, 'old_buildings', 'Old Buildings', '', '', ''),
(1374, 'garden_villa', 'Garden Villa', '', '', ''),
(1375, 'garden_house', 'Garden House', '', '', ''),
(1376, 'banners', 'Banners', '', '', ''),
(1377, 'all_banners', 'All Banners', '', '', ''),
(1378, 'add_banner', 'Add Banner', '', '', ''),
(1379, 'banner_image', 'Banner Image', '', '', ''),
(1380, 'side', 'Side', '', '', ''),
(1381, 'top', 'Top', '', '', ''),
(1382, 'iframe', 'Iframe', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `language_list`
--

CREATE TABLE `language_list` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `lang_field` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `language_list`
--

INSERT INTO `language_list` (`id`, `name`, `lang_field`, `status`, `created_at`, `updated_at`) VALUES
(1, 'English', 'english', 1, '2018-11-15 11:36:31', '2020-04-18 20:05:12'),
(3, 'Arabic', 'arabic', 1, '2018-11-15 11:36:31', '2019-01-20 03:04:53'),
(13, 'Türkçe', 'turkish', 1, '2018-11-15 11:36:31', '2022-04-23 00:30:20'),
(32, 'Azərbaycan dili', 'lang_32', 1, '2022-04-21 17:46:15', '2022-06-09 15:52:18');

-- --------------------------------------------------------

--
-- Структура таблицы `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` tinyint(2) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1(active) 0(deactivate)',
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login_credential`
--

INSERT INTO `login_credential` (`id`, `user_id`, `username`, `password`, `role`, `active`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '$2y$10$EjHNS.iSKnai72IICIACSe7mlurHBOrM5u1HXu2zwfTYwknyU/lkW', 1, 1, '2022-06-17 21:27:27', '2022-04-19 20:01:34', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `metros`
--

CREATE TABLE `metros` (
  `id` int(11) NOT NULL,
  `metro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 - Aktiv',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `metros`
--

INSERT INTO `metros` (`id`, `metro_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '20 yanvar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '28 may', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Avtovağzal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Azadlıq prospekti', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bakmil', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Dərnəgül', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Elmlər Akademiyası', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Gənclik', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Həzi Aslanov', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'İçəri Şəhər', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'İnşaatçılar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Koroğlu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Memar Əcəmi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Neftçilər', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Nizami', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Nəriman Nərimanov', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Nəsimi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Qara Qarayev', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Şah İsmayıl Xətai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Sahil', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Ulduz', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Xalqlar Dostluğu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Əhmədli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '8 noyabr', 1, '2022-04-20 23:03:40', '2022-04-20 23:03:40', '2022-04-20 23:03:40');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(405);

-- --------------------------------------------------------

--
-- Структура таблицы `payment_config`
--

CREATE TABLE `payment_config` (
  `id` int(11) NOT NULL,
  `paypal_username` varchar(255) DEFAULT NULL,
  `paypal_password` varchar(255) DEFAULT NULL,
  `paypal_signature` varchar(255) DEFAULT NULL,
  `paypal_email` varchar(255) DEFAULT NULL,
  `paypal_sandbox` tinyint(4) DEFAULT NULL,
  `paypal_status` tinyint(4) DEFAULT NULL,
  `stripe_secret` varchar(255) DEFAULT NULL,
  `stripe_publishiable` varchar(255) NOT NULL,
  `stripe_demo` varchar(255) DEFAULT NULL,
  `stripe_status` tinyint(4) DEFAULT NULL,
  `payumoney_key` varchar(255) DEFAULT NULL,
  `payumoney_salt` varchar(255) DEFAULT NULL,
  `payumoney_demo` tinyint(4) DEFAULT NULL,
  `payumoney_status` tinyint(4) DEFAULT NULL,
  `paystack_secret_key` varchar(255) NOT NULL,
  `paystack_status` tinyint(4) NOT NULL,
  `razorpay_key_id` varchar(255) NOT NULL,
  `razorpay_key_secret` varchar(255) NOT NULL,
  `razorpay_demo` tinyint(4) NOT NULL,
  `razorpay_status` tinyint(4) NOT NULL,
  `sslcz_store_id` varchar(255) NOT NULL,
  `sslcz_store_passwd` varchar(255) NOT NULL,
  `sslcommerz_sandbox` tinyint(1) NOT NULL,
  `sslcommerz_status` tinyint(1) NOT NULL,
  `jazzcash_merchant_id` varchar(255) NOT NULL,
  `jazzcash_passwd` varchar(255) NOT NULL,
  `jazzcash_integerity_salt` varchar(255) NOT NULL,
  `jazzcash_sandbox` tinyint(1) NOT NULL,
  `jazzcash_status` tinyint(1) NOT NULL,
  `midtrans_client_key` varchar(255) NOT NULL,
  `midtrans_server_key` varchar(255) NOT NULL,
  `midtrans_sandbox` tinyint(1) NOT NULL,
  `midtrans_status` tinyint(1) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_salary_stipend`
--

CREATE TABLE `payment_salary_stipend` (
  `id` int(11) NOT NULL,
  `payslip_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL DEFAULT 0,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payment_types`
--

INSERT INTO `payment_types` (`id`, `name`, `branch_id`, `timestamp`) VALUES
(1, 'Cash', 0, '2019-07-27 18:12:21'),
(2, 'Card', 0, '2019-07-27 18:12:31'),
(3, 'Cheque', 0, '2019-12-21 10:07:59'),
(4, 'Bank Transfer', 0, '2019-12-21 10:08:36'),
(5, 'Other', 0, '2019-12-21 10:08:45'),
(6, 'Paypal', 0, '2019-12-21 10:08:45'),
(7, 'Stripe', 0, '2019-12-21 10:08:45'),
(8, 'PayUmoney', 0, '2019-12-21 10:08:45'),
(9, 'Paystack', 0, '2019-12-21 10:08:45'),
(10, 'Razorpay', 0, '2019-12-21 10:08:45'),
(11, 'SSLcommerz', 0, '2021-05-21 10:08:45'),
(12, 'Jazzcash', 0, '2021-05-21 10:08:45'),
(13, 'Midtrans', 0, '2021-05-21 10:08:45');

-- --------------------------------------------------------

--
-- Структура таблицы `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prefix` varchar(100) NOT NULL,
  `show_view` tinyint(1) DEFAULT 1,
  `show_add` tinyint(1) DEFAULT 1,
  `show_edit` tinyint(1) DEFAULT 1,
  `show_delete` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `permission`
--

INSERT INTO `permission` (`id`, `module_id`, `name`, `prefix`, `show_view`, `show_add`, `show_edit`, `show_delete`, `created_at`) VALUES
(1, 2, 'Student', 'student', 1, 1, 1, 1, '2020-01-22 11:45:47'),
(2, 2, 'Multiple Import', 'multiple_import', 0, 1, 0, 0, '2020-01-22 11:45:47'),
(3, 2, 'Student Category', 'student_category', 1, 1, 1, 1, '2020-01-22 11:45:47'),
(4, 2, 'Student Id Card', 'student_id_card', 1, 0, 0, 0, '2020-01-22 11:45:47'),
(5, 2, 'Disable Authentication', 'student_disable_authentication', 1, 1, 0, 0, '2020-01-22 11:45:47'),
(6, 4, 'Employee', 'employee', 1, 1, 1, 1, '2020-01-22 11:55:19'),
(7, 3, 'Parent', 'parent', 1, 1, 1, 1, '2020-01-22 13:24:05'),
(8, 3, 'Disable Authentication', 'parent_disable_authentication', 1, 1, 0, 0, '2020-01-22 14:22:21'),
(9, 4, 'Department', 'department', 1, 1, 1, 1, '2020-01-22 17:41:39'),
(10, 4, 'Designation', 'designation', 1, 1, 1, 1, '2020-01-22 17:41:39'),
(11, 4, 'Disable Authentication', 'employee_disable_authentication', 1, 1, 0, 0, '2020-01-22 17:41:39'),
(12, 5, 'Salary Template', 'salary_template', 1, 1, 1, 1, '2020-01-23 05:13:57'),
(13, 5, 'Salary Assign', 'salary_assign', 1, 1, 0, 0, '2020-01-23 05:14:05'),
(14, 5, 'Salary Payment', 'salary_payment', 1, 1, 0, 0, '2020-01-24 06:45:40'),
(15, 5, 'Salary Summary Report', 'salary_summary_report', 1, 0, 0, 0, '2020-03-14 17:09:17'),
(16, 5, 'Advance Salary', 'advance_salary', 1, 1, 1, 1, '2020-01-28 18:23:39'),
(17, 5, 'Advance Salary Manage', 'advance_salary_manage', 1, 1, 1, 1, '2020-01-25 04:57:12'),
(18, 5, 'Advance Salary Request', 'advance_salary_request', 1, 1, 0, 1, '2020-01-28 17:49:58'),
(19, 5, 'Leave Category', 'leave_category', 1, 1, 1, 1, '2020-01-29 02:46:23'),
(20, 5, 'Leave Request', 'leave_request', 1, 1, 1, 1, '2020-01-30 12:06:33'),
(21, 5, 'Leave Manage', 'leave_manage', 1, 1, 1, 1, '2020-01-29 07:27:15'),
(22, 5, 'Award', 'award', 1, 1, 1, 1, '2020-01-31 18:49:11'),
(23, 6, 'Classes', 'classes', 1, 1, 1, 1, '2020-02-01 18:10:00'),
(24, 6, 'Section', 'section', 1, 1, 1, 1, '2020-02-01 21:06:44'),
(25, 6, 'Assign Class Teacher', 'assign_class_teacher', 1, 1, 1, 1, '2020-02-02 07:09:22'),
(26, 6, 'Subject', 'subject', 1, 1, 1, 1, '2020-02-03 04:32:39'),
(27, 6, 'Subject Class Assign ', 'subject_class_assign', 1, 1, 1, 1, '2020-02-03 17:43:19'),
(28, 6, 'Subject Teacher Assign', 'subject_teacher_assign', 1, 1, 0, 1, '2020-02-03 19:05:11'),
(29, 6, 'Class Timetable', 'class_timetable', 1, 1, 1, 1, '2020-02-04 05:50:37'),
(30, 2, 'Student Promotion', 'student_promotion', 1, 1, 0, 0, '2020-02-05 18:20:30'),
(31, 8, 'Attachments', 'attachments', 1, 1, 1, 1, '2020-02-06 17:59:43'),
(32, 7, 'Homework', 'homework', 1, 1, 1, 1, '2020-02-07 05:40:08'),
(33, 8, 'Attachment Type', 'attachment_type', 1, 1, 1, 1, '2020-02-07 07:16:28'),
(34, 9, 'Exam', 'exam', 1, 1, 1, 1, '2020-02-07 09:59:29'),
(35, 9, 'Exam Term', 'exam_term', 1, 1, 1, 1, '2020-02-07 12:09:28'),
(36, 9, 'Exam Hall', 'exam_hall', 1, 1, 1, 1, '2020-02-07 14:31:04'),
(37, 9, 'Exam Timetable', 'exam_timetable', 1, 1, 0, 1, '2020-02-08 17:04:31'),
(38, 9, 'Exam Mark', 'exam_mark', 1, 1, 1, 1, '2020-02-10 12:53:41'),
(39, 9, 'Exam Grade', 'exam_grade', 1, 1, 1, 1, '2020-02-10 17:29:16'),
(40, 10, 'Hostel', 'hostel', 1, 1, 1, 1, '2020-02-11 04:41:36'),
(41, 10, 'Hostel Category', 'hostel_category', 1, 1, 1, 1, '2020-02-11 07:52:31'),
(42, 10, 'Hostel Room', 'hostel_room', 1, 1, 1, 1, '2020-02-11 11:50:09'),
(43, 10, 'Hostel Allocation', 'hostel_allocation', 1, 0, 0, 1, '2020-02-11 13:06:15'),
(44, 11, 'Transport Route', 'transport_route', 1, 1, 1, 1, '2020-02-12 05:26:19'),
(45, 11, 'Transport Vehicle', 'transport_vehicle', 1, 1, 1, 1, '2020-02-12 05:57:30'),
(46, 11, 'Transport Stoppage', 'transport_stoppage', 1, 1, 1, 1, '2020-02-12 06:49:20'),
(47, 11, 'Transport Assign', 'transport_assign', 1, 1, 1, 1, '2020-02-12 09:55:21'),
(48, 11, 'Transport Allocation', 'transport_allocation', 1, 0, 0, 1, '2020-02-12 19:33:05'),
(49, 12, 'Student Attendance', 'student_attendance', 0, 1, 0, 0, '2020-02-13 05:25:53'),
(50, 12, 'Employee Attendance', 'employee_attendance', 0, 1, 0, 0, '2020-02-13 10:04:16'),
(51, 12, 'Exam Attendance', 'exam_attendance', 0, 1, 0, 0, '2020-02-13 11:08:14'),
(52, 12, 'Student Attendance Report', 'student_attendance_report', 1, 0, 0, 0, '2020-02-13 19:20:56'),
(53, 12, 'Employee Attendance Report', 'employee_attendance_report', 1, 0, 0, 0, '2020-02-14 06:08:53'),
(54, 12, 'Exam Attendance Report', 'exam_attendance_report', 1, 0, 0, 0, '2020-02-14 06:21:40'),
(55, 13, 'Book', 'book', 1, 1, 1, 1, '2020-02-14 06:40:42'),
(56, 13, 'Book Category', 'book_category', 1, 1, 1, 1, '2020-02-15 04:11:41'),
(57, 13, 'Book Manage', 'book_manage', 1, 1, 0, 1, '2020-02-15 11:13:24'),
(58, 13, 'Book Request', 'book_request', 1, 1, 0, 1, '2020-02-17 06:45:19'),
(59, 14, 'Event', 'event', 1, 1, 1, 1, '2020-02-17 18:02:15'),
(60, 14, 'Event Type', 'event_type', 1, 1, 1, 1, '2020-02-18 04:40:33'),
(61, 15, 'Sendsmsmail', 'sendsmsmail', 1, 1, 0, 1, '2020-02-22 07:19:57'),
(62, 15, 'Sendsmsmail Template', 'sendsmsmail_template', 1, 1, 1, 1, '2020-02-22 10:14:57'),
(63, 17, 'Account', 'account', 1, 1, 1, 1, '2020-02-25 09:34:43'),
(64, 17, 'Deposit', 'deposit', 1, 1, 1, 1, '2020-02-25 12:56:11'),
(65, 17, 'Expense', 'expense', 1, 1, 1, 1, '2020-02-26 06:35:57'),
(66, 17, 'All Transactions', 'all_transactions', 1, 0, 0, 0, '2020-02-26 13:35:05'),
(67, 17, 'Voucher Head', 'voucher_head', 1, 1, 1, 1, '2020-02-25 10:50:56'),
(68, 17, 'Accounting Reports', 'accounting_reports', 1, 1, 1, 1, '2020-02-25 13:36:24'),
(69, 16, 'Fees Type', 'fees_type', 1, 1, 1, 1, '2020-02-27 10:11:03'),
(70, 16, 'Fees Group', 'fees_group', 1, 1, 1, 1, '2020-02-26 05:49:09'),
(71, 16, 'Fees Fine Setup', 'fees_fine_setup', 1, 1, 1, 1, '2020-03-05 02:59:27'),
(72, 16, 'Fees Allocation', 'fees_allocation', 1, 1, 1, 1, '2020-03-01 13:47:43'),
(73, 16, 'Collect Fees', 'collect_fees', 0, 1, 0, 0, '2020-03-15 04:23:58'),
(74, 16, 'Fees Reminder', 'fees_reminder', 1, 1, 1, 1, '2020-03-15 04:29:58'),
(75, 16, 'Due Invoice', 'due_invoice', 1, 0, 0, 0, '2020-03-15 04:33:36'),
(76, 16, 'Invoice', 'invoice', 1, 0, 0, 1, '2020-03-15 04:38:06'),
(77, 9, 'Mark Distribution', 'mark_distribution', 1, 1, 1, 1, '2020-03-19 13:02:54'),
(78, 9, 'Report Card', 'report_card', 1, 0, 0, 0, '2020-03-20 12:20:28'),
(79, 9, 'Tabulation Sheet', 'tabulation_sheet', 1, 0, 0, 0, '2020-03-21 07:12:38'),
(80, 15, 'Sendsmsmail Reports', 'sendsmsmail_reports', 1, 0, 0, 0, '2020-03-21 17:02:02'),
(81, 18, 'Global Settings', 'global_settings', 1, 0, 1, 0, '2020-03-22 05:05:41'),
(82, 18, 'Payment Settings', 'payment_settings', 1, 1, 0, 0, '2020-03-22 05:08:57'),
(83, 18, 'Sms Settings', 'sms_settings', 1, 1, 1, 1, '2020-03-22 05:08:57'),
(84, 18, 'Email Settings', 'email_settings', 1, 1, 1, 1, '2020-03-22 05:10:39'),
(85, 18, 'Translations', 'translations', 1, 1, 1, 1, '2020-03-22 05:18:33'),
(86, 18, 'Backup', 'backup', 1, 1, 1, 1, '2020-03-22 07:09:33'),
(87, 18, 'Backup Restore', 'backup_restore', 0, 1, 0, 0, '2020-03-22 07:09:34'),
(88, 7, 'Homework Evaluate', 'homework_evaluate', 1, 1, 0, 0, '2020-03-28 04:20:29'),
(89, 7, 'Evaluation Report', 'evaluation_report', 1, 0, 0, 0, '2020-03-28 09:56:04'),
(90, 18, 'School Settings', 'school_settings', 1, 0, 1, 0, '2020-03-30 17:36:37'),
(91, 1, 'Monthly Income Vs Expense Pie Chart', 'monthly_income_vs_expense_chart', 1, 0, 0, 0, '2020-03-31 06:15:31'),
(92, 1, 'Annual Student Fees Summary Chart', 'annual_student_fees_summary_chart', 1, 0, 0, 0, '2020-03-31 06:15:31'),
(93, 1, 'Employee Count Widget', 'employee_count_widget', 1, 0, 0, 0, '2020-03-31 06:31:56'),
(94, 1, 'Student Count Widget', 'student_count_widget', 1, 0, 0, 0, '2020-03-31 06:31:56'),
(95, 1, 'Parent Count Widget', 'parent_count_widget', 1, 0, 0, 0, '2020-03-31 06:31:56'),
(96, 1, 'Teacher Count Widget', 'teacher_count_widget', 1, 0, 0, 0, '2020-03-31 06:31:56'),
(97, 1, 'Student Quantity Pie Chart', 'student_quantity_pie_chart', 1, 0, 0, 0, '2020-03-31 07:14:07'),
(98, 1, 'Weekend Attendance Inspection Chart', 'weekend_attendance_inspection_chart', 1, 0, 0, 0, '2020-03-31 07:14:07'),
(99, 1, 'Admission Count Widget', 'admission_count_widget', 1, 0, 0, 0, '2020-03-31 07:22:05'),
(100, 1, 'Voucher Count Widget', 'voucher_count_widget', 1, 0, 0, 0, '2020-03-31 07:22:05'),
(101, 1, 'Transport Count Widget', 'transport_count_widget', 1, 0, 0, 0, '2020-03-31 07:22:05'),
(102, 1, 'Hostel Count Widget', 'hostel_count_widget', 1, 0, 0, 0, '2020-03-31 07:22:05'),
(103, 18, 'Accounting Links', 'accounting_links', 1, 0, 1, 0, '2020-03-31 09:46:30'),
(104, 16, 'Fees Reports', 'fees_reports', 1, 0, 0, 0, '2020-04-01 15:52:19'),
(105, 18, 'Cron Job', 'cron_job', 1, 0, 1, 0, '2020-03-31 09:46:30'),
(106, 18, 'Custom Field', 'custom_field', 1, 1, 1, 1, '2020-03-31 09:46:30'),
(107, 5, 'Leave Reports', 'leave_reports', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(108, 18, 'Live Class Config', 'live_class_config', 1, 0, 1, 0, '2020-03-31 09:46:30'),
(109, 19, 'Live Class', 'live_class', 1, 1, 1, 1, '2020-03-31 09:46:30'),
(110, 20, 'Certificate Templete', 'certificate_templete', 1, 1, 1, 1, '2020-03-31 09:46:30'),
(111, 20, 'Generate Student Certificate', 'generate_student_certificate', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(112, 20, 'Generate Employee Certificate', 'generate_employee_certificate', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(113, 21, 'ID Card Templete', 'id_card_templete', 1, 1, 1, 1, '2020-03-31 09:46:30'),
(114, 21, 'Generate Student ID Card', 'generate_student_idcard', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(115, 21, 'Generate Employee ID Card', 'generate_employee_idcard', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(116, 21, 'Admit Card Templete', 'admit_card_templete', 1, 1, 1, 1, '2020-03-31 09:46:30'),
(117, 21, 'Generate Admit card', 'generate_admit_card', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(118, 22, 'Frontend Setting', 'frontend_setting', 1, 1, 0, 0, '2019-09-11 03:24:07'),
(119, 22, 'Frontend Menu', 'frontend_menu', 1, 1, 1, 1, '2019-09-11 04:03:39'),
(120, 22, 'Frontend Section', 'frontend_section', 1, 1, 0, 0, '2019-09-11 04:26:11'),
(121, 22, 'Manage Page', 'manage_page', 1, 1, 1, 1, '2019-09-11 05:54:08'),
(122, 22, 'Frontend Slider', 'frontend_slider', 1, 1, 1, 1, '2019-09-11 06:12:31'),
(123, 22, 'Frontend Features', 'frontend_features', 1, 1, 1, 1, '2019-09-11 06:47:51'),
(124, 22, 'Frontend Testimonial', 'frontend_testimonial', 1, 1, 1, 1, '2019-09-11 06:54:30'),
(125, 22, 'Frontend Services', 'frontend_services', 1, 1, 1, 1, '2019-09-11 07:01:44'),
(126, 22, 'Frontend Faq', 'frontend_faq', 1, 1, 1, 1, '2019-09-11 07:06:16'),
(127, 2, 'Online Admission', 'online_admission', 1, 1, 0, 1, '2019-09-11 07:06:16'),
(128, 18, 'System Update', 'system_update', 0, 1, 0, 0, '2019-09-11 07:06:16'),
(129, 19, 'Live Class Reports', 'live_class_reports', 1, 0, 0, 0, '2020-03-31 09:46:30'),
(130, 16, 'Fees Revert', 'fees_revert', 0, 0, 0, 1, '2020-03-31 09:46:30'),
(131, 22, 'Frontend Gallery', 'frontend_gallery', 1, 1, 1, 1, '2019-09-11 07:06:16'),
(132, 22, 'Frontend Gallery Category', 'frontend_gallery_category', 1, 1, 1, 1, '2019-09-11 07:06:16'),
(133, 6, 'Teacher Timetable', 'teacher_timetable', 1, 0, 0, 0, '2019-09-11 07:06:16');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_modules`
--

CREATE TABLE `permission_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prefix` varchar(50) NOT NULL,
  `system` tinyint(1) NOT NULL,
  `sorted` tinyint(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `permission_modules`
--

INSERT INTO `permission_modules` (`id`, `name`, `prefix`, `system`, `sorted`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard', 1, 1, '2019-05-26 22:23:00'),
(2, 'Student', 'student', 1, 3, '2019-05-26 22:23:00'),
(3, 'Parents', 'parents', 1, 4, '2019-05-26 22:23:00'),
(4, 'Employee', 'employee', 1, 5, '2019-05-26 22:23:00'),
(5, 'Human Resource', 'human_resource', 1, 8, '2019-05-26 22:23:00'),
(6, 'Academic', 'academic', 1, 9, '2019-05-26 22:23:00'),
(7, 'Homework', 'homework', 1, 12, '2019-05-26 22:23:00'),
(8, 'Attachments Book', 'attachments_book', 1, 11, '2019-05-26 22:23:00'),
(9, 'Exam Master', 'exam_master', 1, 13, '2019-05-26 22:23:00'),
(10, 'Hostel', 'hostel', 1, 14, '2019-05-26 22:23:00'),
(11, 'Transport', 'transport', 1, 15, '2019-05-26 22:23:00'),
(12, 'Attendance', 'attendance', 1, 16, '2019-05-26 22:23:00'),
(13, 'Library', 'library', 1, 17, '2019-05-26 22:23:00'),
(14, 'Events', 'events', 1, 18, '2019-05-26 22:23:00'),
(15, 'Bulk Sms And Email', 'bulk_sms_and_email', 1, 19, '2019-05-26 22:23:00'),
(16, 'Student Accounting', 'student_accounting', 1, 20, '2019-05-26 22:23:00'),
(17, 'Office Accounting', 'office_accounting', 1, 21, '2019-05-26 22:23:00'),
(18, 'Settings', 'settings', 1, 22, '2019-05-26 22:23:00'),
(19, 'Live Class', 'live_class', 1, 10, '2019-05-26 22:23:00'),
(20, 'Certificate', 'certificate', 1, 7, '2019-05-26 22:23:00'),
(21, 'Card Management', 'card_management', 1, 6, '2019-05-26 22:23:00'),
(22, 'Website', 'website', 1, 2, '2019-05-26 22:23:00');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `region_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_city` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 - Aktiv',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `region_name`, `seo_link`, `parent_city`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Xətai r.', 'xetai', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(2, 'Abşeron r.', 'abseron', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(3, 'Binəqədi r.', 'bineqedi', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(4, 'Nərimanov r.', 'nerimanov', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(5, 'Nəsimi r.', 'nesimi', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(6, 'Nizami r.', 'nizami', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(7, 'Pirallahı r.', 'pirallahi', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(8, 'Qaradağ r.', 'qaradag', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(9, 'Sabunçu r.', 'sabuncu', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(10, 'Səbail r.', 'sebail', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(11, 'Suraxanı r.', 'suraxani', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(12, 'Xəzər r.', 'xezer', 1, 1, '2022-04-20 20:14:32', '2022-04-20 20:14:32', '2022-04-20 20:14:32'),
(13, '1-ci mikrorayon r. ', '1-ci-mikrorayon', 3, 1, '2022-04-20 21:59:55', '2022-04-20 21:59:55', '2022-04-20 21:59:55'),
(14, '2-ci mikrorayon r. ', '2-ci-mikrorayon', 3, 1, '2022-04-20 21:59:55', '2022-04-20 21:59:55', '2022-04-20 21:59:55'),
(15, '3-cü mikrorayon r.', '3-cu-mikrorayon', 3, 1, '2022-04-20 21:59:55', '2022-04-20 21:59:55', '2022-04-20 21:59:55'),
(16, '4-cü mikrorayon r', '4-cu-mikrorayon', 3, 1, '2022-04-20 21:59:55', '2022-04-20 21:59:55', '2022-04-20 21:59:55'),
(17, '5-ci mikrorayon r.', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '6-cı mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '7-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '8-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '9-cu mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '10-cu mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '11-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '12-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '13-cü mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '16-cı mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '17-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '18-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '20-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '21-ci mikrorayon r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '1-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '2-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '3-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '4-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '5-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '7-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '8-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '9-cu məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '12-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '13-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '14-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '15-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '16-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '17-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '18-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '19-cu məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '20-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '21-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '22-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '23-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '24-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '25-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '26-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '30-cu məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '34-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '36-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '40-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '41-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '42-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '43-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '44-cü məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '45-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '46-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '47-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '48-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '49-cu məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '51-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '52-ci məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '76-cı məhəllə r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Sumqayıt şəhər r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Stansiya Sumqayıt r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'İnşaatçılar qəsəbəsi r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Kotec qəsəbəsi r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Qurd dərəsi r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'BTZ bağları r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Xəzər bağları r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Corat bağları r. ', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Hacı Zeynəlabdin r.', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Babək r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Culfa r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Ordubad r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Şahbuz r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Şərur r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Sədərək r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Qıvraq r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Naxçıvan r.', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Yasamal r.', 'yasamal', 1, 1, '2022-04-21 01:29:10', '2022-04-21 01:29:10', '2022-04-21 01:29:10');

-- --------------------------------------------------------

--
-- Структура таблицы `reset_password`
--

CREATE TABLE `reset_password` (
  `key` longtext NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_credential_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rm_sessions`
--

CREATE TABLE `rm_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rm_sessions`
--

INSERT INTO `rm_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2od6fv9l498pv7pikoaahc59v520na3c', '::1', 1655487152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353438373135323b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('2ofjds031b85ppl452p65542etfa58kp', '::1', 1655496619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439363631393b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('3aqnv1v52b1beborhcj0f0g8ntfui1i3', '::1', 1655495918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439353931383b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('4j0j4tuibscq5tiat3npof7gplnvb2e8', '::1', 1655403434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430333433343b),
('66n4nl0gstjm37a2v8p58f7rr2pppo7o', '::1', 1655402318, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430323331373b),
('6rcvrvmrqbri5d2k37aulnc9tusg7ket', '::1', 1655405111, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430353131313b),
('7ltafmr4nakk42r4j1jhok4bd5p24mp6', '::1', 1655495570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439353537303b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('950vtv80nlabgqn88atg7injvsgdab53', '::1', 1655494213, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439343231333b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('av0p2hjse6k78ih4g2q73ojv2ajemjd7', '::1', 1655496887, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439363631393b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('ck4adp5tlq397q41kjqed3otoupbaapt', '::1', 1655477667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353437373636343b7365745f6c616e677c733a363a22617261626963223b),
('dvmql12thrtf4mdip0b1einrj5nffhso', '::1', 1655477667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353437373636343b7365745f6c616e677c733a363a22617261626963223b),
('ed4uahm616tigi4eqc54d096s4svih64', '::1', 1655494973, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439343937333b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('etkm32vtv228q3qvn7qnfv9jukefaqkf', '::1', 1655471213, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353437313231333b),
('fb3n8nk6kgh5p8hsvncegu8k991rpuba', '::1', 1655367242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353336373233343b),
('fp8hlnosaatrdro1arp2v4jrlido9ahp', '::1', 1655401270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430313237303b),
('i8eipcb93h8ch0di9vc6peeakog3vfht', '::1', 1655405203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430353131313b776973685f736573737c733a33323a223030653837313238353236623032366636323933383430363334316663646633223b),
('j7g4bg8evm3iiobh68qgbr6b08t9cfug', '::1', 1655492738, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439323733383b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('jpsgsi5q1q50mjdmt19cc97537e1gisj', '::1', 1655493611, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439333631313b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('ka67uciefjgkevku5okjjuooqrgspro5', '::1', 1655293052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353239323835353b),
('pevn0j9j95mnb7j66nlfvel4r745jhjp', '::1', 1655292843, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353239323730313b),
('qt9npllnl0sv20029d96gmqaogiqk6g8', '::1', 1655474632, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353437343633323b7365745f6c616e677c733a373a226c616e675f3332223b),
('s6g461l84q8src5st3u5g3qi575ugq55', '::1', 1655493298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353439333239383b6e616d657c733a353a224361766964223b6c6f676765725f70686f746f7c4e3b6c6f67676564696e5f6272616e63687c4e3b6c6f67676564696e5f69647c733a313a2231223b6c6f67676564696e5f7573657269647c733a313a2231223b6c6f67676564696e5f726f6c655f69647c733a313a2231223b6c6f67676564696e5f747970657c733a353a227374616666223b7365745f6c616e677c733a373a226c616e675f3332223b7365745f73657373696f6e5f69647c733a313a2233223b6c6f67676564696e7c623a313b),
('t1uicjfp01r85vllj5321q1psl07gg3q', '::1', 1655401670, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353430313637303b),
('vud1kc6qa229gqiuud6doismhc9r3iiv', '::1', 1655367234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635353336373233323b);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prefix` varchar(50) DEFAULT NULL,
  `is_system` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `prefix`, `is_system`) VALUES
(1, 'Super Admin', 'superadmin', '1'),
(2, 'Admin', 'admin', '1'),
(3, 'Teacher', 'teacher', '1'),
(4, 'Accountant', 'accountant', '1'),
(5, 'Librarian', 'librarian', '1'),
(6, 'Parent', 'parent', '1'),
(7, 'Student', 'student', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `schoolyear`
--

CREATE TABLE `schoolyear` (
  `id` int(11) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schoolyear`
--

INSERT INTO `schoolyear` (`id`, `school_year`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '2019-2020', 1, '2020-02-25 19:35:41', '2020-02-26 16:54:49'),
(3, '2020-2021', 1, '2020-02-25 19:35:41', '2020-02-26 01:35:41'),
(4, '2021-2022', 1, '2020-02-25 19:35:41', '2020-02-26 01:35:41'),
(5, '2022-2023', 1, '2020-02-25 19:35:41', '2020-02-26 01:35:41'),
(6, '2023-2024', 1, '2020-02-25 19:35:41', '2020-02-26 01:35:41'),
(7, '2024-2025', 1, '2020-02-25 19:35:41', '2020-02-26 01:20:04'),
(9, '2025-2026', 1, '2020-02-26 07:00:10', '2020-02-26 13:00:24');

-- --------------------------------------------------------

--
-- Структура таблицы `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sections_allocation`
--

CREATE TABLE `sections_allocation` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sms_api`
--

CREATE TABLE `sms_api` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sms_api`
--

INSERT INTO `sms_api` (`id`, `name`) VALUES
(1, 'twilio'),
(2, 'clickatell'),
(3, 'msg91'),
(4, 'bulksms'),
(5, 'textlocal'),
(6, 'smscountry');

-- --------------------------------------------------------

--
-- Структура таблицы `sms_credential`
--

CREATE TABLE `sms_credential` (
  `id` int(11) NOT NULL,
  `sms_api_id` int(11) NOT NULL,
  `field_one` varchar(300) NOT NULL,
  `field_two` varchar(300) NOT NULL,
  `field_three` varchar(300) NOT NULL,
  `field_four` varchar(300) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sms_template`
--

CREATE TABLE `sms_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sms_template`
--

INSERT INTO `sms_template` (`id`, `name`, `tags`) VALUES
(1, 'admission', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}'),
(2, 'fee_collection', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}, {paid_amount}, {paid_date} '),
(3, 'attendance', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}'),
(4, 'exam_attendance', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}, {exam_name}, {term_name}, {subject}'),
(5, 'exam_results', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}, {exam_name}, {term_name}, {subject}, {marks}'),
(6, 'homework', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}, {subject}, {date_of_homework}, {date_of_submission}'),
(7, 'live_class', '{name}, {class}, {section}, {admission_date}, {roll}, {register_no}, {date_of_live_class}, {start_time}, {end_time}, {host_by}');

-- --------------------------------------------------------

--
-- Структура таблицы `sms_template_details`
--

CREATE TABLE `sms_template_details` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `notify_student` tinyint(3) NOT NULL DEFAULT 1,
  `notify_parent` tinyint(3) NOT NULL DEFAULT 1,
  `template_body` longtext NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience_details` varchar(255) DEFAULT NULL,
  `total_experience` varchar(255) DEFAULT NULL,
  `designation` int(11) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salary_template_id` int(11) DEFAULT 0,
  `branch_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `name`, `department`, `qualification`, `experience_details`, `total_experience`, `designation`, `joining_date`, `birthday`, `sex`, `religion`, `blood_group`, `present_address`, `permanent_address`, `mobileno`, `email`, `salary_template_id`, `branch_id`, `photo`, `facebook_url`, `linkedin_url`, `twitter_url`, `created_at`, `updated_at`) VALUES
(1, '5743852', 'Cavid', 0, '', NULL, NULL, 0, '2022-04-19', '', '', '', '', '', '', '', 'admin@gmail.com', 0, NULL, NULL, NULL, NULL, NULL, '2022-04-19 20:01:34', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `targets`
--

CREATE TABLE `targets` (
  `id` int(11) NOT NULL,
  `target_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - Deaktiv\r\n1 - Aktiv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `targets`
--

INSERT INTO `targets` (`id`, `target_name`, `seo_link`, `status`) VALUES
(1, '28 Mall', '', 1),
(2, '5 nömrəli xəstəxana', '', 1),
(3, 'A.S.Puşkin parkı', '', 1),
(4, 'AAAF park', '', 1),
(5, 'ABŞ səfirliyi', '', 1),
(6, 'Abşeron Gənclər Şəhərciyi', '', 1),
(7, 'Abşeron Marriott otel', '', 1),
(8, 'Abu Arena', '', 1),
(9, 'ADA universiteti', '', 1),
(10, 'AF Biznes Mərkəzi', '', 1),
(11, 'Afrodita şadlıq sarayı', '', 1),
(12, 'Ağ Saray restoranı', '', 1),
(13, 'Ağ Şəhər', '', 1),
(14, 'AĞA biznes mərkəzi', '', 1),
(15, 'Al Saray restoranı', '', 1),
(16, 'Ali Məhkəmə', '', 1),
(17, 'Altes plaza', '', 1),
(18, 'AMAY ticarət mərkəzi', '', 1),
(19, 'Ambassador otel', '', 1),
(20, 'Amor şadlıq sarayı', '', 1),
(21, 'Anadolu restoranı', '', 1),
(22, 'Aqat şadlıq sarayı', '', 1),
(23, 'Arash estetik klinikası', '', 1),
(24, 'ASAN xidmət - 1', '', 1),
(25, 'ASAN xidmət - 2', '', 1),
(26, 'ASAN xidmət - 3', '', 1),
(27, 'ASAN xidmət - 4', '', 1),
(28, 'ASAN xidmət - 5', '', 1),
(29, 'ASAN xidmət Sumqayıt', '', 1),
(30, 'Asiman şadlıq sarayı', '', 1),
(31, 'ASK arena', '', 1),
(32, 'Atatürk parkı', '', 1),
(33, 'ATU onkoloji klinikası', '', 1),
(34, 'Aura şadlıq sarayı', '', 1),
(35, 'Avesta biznes mərkəzi', '', 1),
(36, 'Avrasiya klinikası', '', 1),
(37, 'Avropa otel', '', 1),
(38, 'Axundov bağı', '', 1),
(39, 'Ay İşığı şadlıq sarayı', '', 1),
(40, 'Aygün City Mall', '', 1),
(41, 'Ayla şadlıq sarayı', '', 1),
(42, 'Ayna Sultanova heykəli', '', 1),
(43, 'Aynalı plaza', '', 1),
(44, 'Aysun şadlıq sarayı', '', 1),
(45, 'Azad Qadın heykəli', '', 1),
(46, 'Azadlıq meydanı', '', 1),
(47, 'Azər Türk Med hospital', '', 1),
(48, 'Azərbaycan Dillər Universiteti', '', 1),
(49, 'Azneft meydanı', '', 1),
(50, 'AzTV telekanalı', '', 1),
(51, 'Badi-Səba şadlıq sarayı', '', 1),
(52, 'Badu-Kubə şadlıq sarayı', '', 1),
(53, 'Bakı Avrasiya Universiteti', '', 1),
(54, 'Bakı Bərpa Mərkəzi', '', 1),
(55, 'Bakı Dövlət Universiteti', '', 1),
(56, 'Bakı Flebologiya mərkəzi', '', 1),
(57, 'Bakı Mall', '', 1),
(58, 'Bakı Mühəndislik Universiteti', '', 1),
(59, 'Bakı Musiqi Akademiyası', '', 1),
(60, 'Bakı Oksford Məktəbi', '', 1),
(61, 'Bakı Sağlamlıq Mərkəzi', '', 1),
(62, 'Baku City hospital', '', 1),
(63, 'Baku Klinika', '', 1),
(64, 'Ballı şadlıq sarayı', '', 1),
(65, 'Banu Çiçək şadlıq sarayı', '', 1),
(66, 'Bayıl park', '', 1),
(67, 'Beşmərtəbə', '', 1),
(68, 'Binə ticarət mərkəzi', '', 1),
(69, 'Biolab tibb mərkəzi', '', 1),
(70, 'Bioloji təbabət klinikası', '', 1),
(71, 'Botanika bağı', '', 1),
(72, 'Bridge plaza', '', 1),
(73, 'Brilyant şadlıq sarayı', '', 1),
(74, 'Bül-bülə şadlıq sarayı', '', 1),
(75, 'C.Naxçıvanski adına Hərbi Lisey', '', 1),
(76, 'Caspian plaza', '', 1),
(77, 'Caspian Shopping Center', '', 1),
(78, 'Cavanşir körpüsü', '', 1),
(79, 'Ceyranbatan su anbarı', '', 1),
(80, 'Cəfər Cabbarlı heykəli', '', 1),
(81, 'Çanaqqala restoranı', '', 1),
(82, 'Çin səfirliyi', '', 1),
(83, 'Çinar plaza', '', 1),
(84, 'Çıraq palace restoranı', '', 1),
(85, 'Çıraq plaza', '', 1),
(86, 'Dağüstü park', '', 1),
(87, 'Dalğa plaza', '', 1),
(88, 'Daxili İşlər Nazirliyi', '', 1),
(89, 'Dədə Qorqud parkı', '', 1),
(90, 'Dəmirçi Plaza', '', 1),
(91, 'Dəniz Vağzalı', '', 1),
(92, 'Dənizkənarı Milli park', '', 1),
(93, 'Diaqnoz tibb mərkəzi', '', 1),
(94, 'Dobremed hospital', '', 1),
(95, 'Dövlət İdarəçilik Akademiyası', '', 1),
(96, 'Dövlət İmahan Mərkəzi', '', 1),
(97, 'Dövlət Statistika Komitəsi', '', 1),
(98, 'Dövlət Təhlükəsizliyi Xidməti', '', 1),
(99, 'Dünyagöz hospitalı', '', 1),
(100, 'Ekologiya və Təbii Sərvətlər Nazirliyi', '', 1),
(101, 'Elçin şadlıq sarayı', '', 1),
(102, 'Elit ticarət mərkəzi', '', 1),
(103, 'Elmed tibb mərkəzi', '', 1),
(104, 'Elşən şadlıq sarayı', '', 1),
(105, 'Eqoist otel', '', 1),
(106, 'Euro Lab klinikası', '', 1),
(107, 'Evromed tibb mərkəzi', '', 1),
(108, 'Ədliyyə Nazirliyi', '', 1),
(109, 'Əliağa Vahid heykəli', '', 1),
(110, 'Ərzurum şadlıq sarayı', '', 1),
(111, 'Fəridə şadlıq sarayı', '', 1),
(112, 'Fəvvarələr meydanı', '', 1),
(113, 'Fidan şadlıq sarayı', '', 1),
(114, 'Firuzə restoranı', '', 1),
(115, 'Flame Towers', '', 1),
(116, 'Four Seasons otel', '', 1),
(117, 'Fövqəladə Hallar Nazirliyi', '', 1),
(118, 'Fransız səfirliyi', '', 1),
(119, 'Funda hospital', '', 1),
(120, 'Gəlin Qaya restoranı', '', 1),
(121, 'Gənclər və İdman Nazirliyi', '', 1),
(122, 'Gənclik Mall', '', 1),
(123, 'Gənclik şadlıq sarayı', '', 1),
(124, 'Gilavar şadlıq sarayı', '', 1),
(125, 'Golden Ring şadlıq sarayı', '', 1),
(126, 'Günəş şadlıq sarayı', '', 1),
(127, 'H.Əliyev adına İdman Kompleksi', '', 1),
(128, 'Hayat klinikası', '', 1),
(129, 'HB Güvən klinikası', '', 1),
(130, 'Heydər Əliyev Mərkəzi', '', 1),
(131, 'Heydər Əliyev Sarayı', '', 1),
(132, 'Hilton otel', '', 1),
(133, 'Hökümət Evi', '', 1),
(134, 'Hollivud şadlıq sarayı', '', 1),
(135, 'Hüseyn Cavid parkı', '', 1),
(136, 'Hyatt Regency otel', '', 1),
(137, 'İçəri Şəhər', '', 1),
(138, 'İctimai telekanal', '', 1),
(139, 'İmperial şadlıq sarayı', '', 1),
(140, 'İnam tibb mərkəzi', '', 1),
(141, 'İnci şadlıq sarayı', '', 1),
(142, 'İqtisad Universiteti', '', 1),
(143, 'İqtisadiyyat Nazirliyi', '', 1),
(144, 'İran səfirliyi', '', 1),
(145, 'İtaliya səfirliyi', '', 1),
(146, 'İzmir parkı', '', 1),
(147, 'Intourist otel', '', 1),
(148, 'ISR plaza', '', 1),
(149, 'Kaktus restoranı', '', 1),
(150, 'Karnaval hall restoranı', '', 1),
(151, 'Keşlə bazarı', '', 1),
(152, 'Kəmalə Nərmin şadlıq sarayı', '', 1),
(153, 'Koala parkı', '', 1),
(154, 'Kolizey şadlıq sarayı', '', 1),
(155, 'Kooperasiya Universiteti', '', 1),
(156, 'Koroğlu parkı', '', 1),
(157, 'Korrupsiya idarəsi', '', 1),
(158, 'Kosmos restoranı', '', 1),
(159, 'Kral şadlıq sarayı', '', 1),
(160, 'Kukla Teatrı', '', 1),
(161, 'Lake Palace otel', '', 1),
(162, 'Landmark biznes mərkəzi', '', 1),
(163, 'Leyla plaza restoranı', '', 1),
(164, 'Leyla şadlıq evi', '', 1),
(165, 'Leyla Şıxlinskaya klinikası', '', 1),
(166, 'Lider telekanal', '', 1),
(167, 'LOR hospital', '', 1),
(168, 'Lotos ticarət mərkəzi', '', 1),
(169, 'M. Hüseynzadə parkı', '', 1),
(170, 'M.Ə.Sabir parkı', '', 1),
(171, 'Mala Praqa restoranı', '', 1),
(172, 'Malokan bağı', '', 1),
(173, 'Medera hospital', '', 1),
(174, 'Mega palace restoranı', '', 1),
(175, 'Megafun əyləncə mərkəzi', '', 1),
(176, 'Memarlıq və İnşaat Universiteti', '', 1),
(177, 'Metropark Mall', '', 1),
(178, 'Mədəniyyət və İncəsənət Universiteti', '', 1),
(179, 'Mələk şadlıq sarayı', '', 1),
(180, 'Mərkəzi Bank', '', 1),
(181, 'Mərkəzi Dəmiryol xəstəxanası', '', 1),
(182, 'Mərkəzi Gömrük hospitalı', '', 1),
(183, 'Mərkəzi Hərbi Hospital', '', 1),
(184, 'Mərkəzi klinika', '', 1),
(185, 'Mərkəzi univermaq', '', 1),
(186, 'Məşədi Dadaş məscidi', '', 1),
(187, 'Mətin şadlıq sarayı', '', 1),
(188, 'Milli Aviasiya Akademiyası', '', 1),
(189, 'Milli Konservatoriya', '', 1),
(190, 'Milli Məclis', '', 1),
(191, 'Modern hospital', '', 1),
(192, 'Mona Liza restoranı', '', 1),
(193, 'Montin bazarı', '', 1),
(194, 'Movida Plaza şadlıq sarayı', '', 1),
(195, 'Mübarək şadlıq sarayı', '', 1),
(196, 'Musabəyov parkı', '', 1),
(197, 'Nargilə kafesi', '', 1),
(198, 'Nazlı şadlıq sarayı', '', 1),
(199, 'Neapol dairəsi', '', 1),
(200, 'Neapol şadlıq sarayı', '', 1),
(201, 'Neft Akademiyası', '', 1),
(202, 'Neftçi baza', '', 1),
(203, 'Neftçilər xəstəxanası', '', 1),
(204, 'Neolit Hall şadlıq sarayı', '', 1),
(205, 'Neptun şadlıq sarayı', '', 1),
(206, 'New Med hospital', '', 1),
(207, 'Nəbz klinikası', '', 1),
(208, 'Nərgiz Mall', '', 1),
(209, 'Nəriman Nərimanov heykəli', '', 1),
(210, 'Nəriman Nərimanov parkı', '', 1),
(211, 'Nəsimi bazarı', '', 1),
(212, 'Nəsimi heykəli', '', 1),
(213, 'Nəsrəddin Tusi adına klinika', '', 1),
(214, 'Niel şadlıq sarayı', '', 1),
(215, 'Nizami heykəli', '', 1),
(216, 'Nizami kinoteatr', '', 1),
(217, 'Nizami Mall', '', 1),
(218, 'Oazis restoranı', '', 1),
(219, 'Odlar Yurdu Universiteti', '', 1),
(220, 'Oğuzxan şadlıq sarayı', '', 1),
(221, 'Oksigen klinikası', '', 1),
(222, 'Olimpik otel', '', 1),
(223, 'Olimpik Star', '', 1),
(224, 'Park Azure', '', 1),
(225, 'Park Bulvar Mall', '', 1),
(226, 'Park İnn otel', '', 1),
(227, 'Pedaqoji Universiteti', '', 1),
(228, 'Pirosmani restoranı', '', 1),
(229, 'Pitomnik restoranı', '', 1),
(230, 'Planet şadlıq sarayı', '', 1),
(231, 'Pluton şadlıq sarayı', '', 1),
(232, 'Port Baku Mall', '', 1),
(233, 'Praqa şadlıq sarayı', '', 1),
(234, 'Prezident parkı', '', 1),
(235, 'Qafqaz Resort otel', '', 1),
(236, 'Qələbə dairəsi', '', 1),
(237, 'Qərb Universiteti', '', 1),
(238, 'Qış parkı', '', 1),
(239, 'Qız Qalası', '', 1),
(240, 'Qızıl Buta şadlıq sarayı', '', 1),
(241, 'Qızıl Qaya şadlıq sarayı', '', 1),
(242, 'Qızıl Tac restoranı', '', 1),
(243, 'Qlobus plaza', '', 1),
(244, 'Qubernator parkı', '', 1),
(245, 'Qurtuluş 93 Yaşayış Kompleksi', '', 1),
(246, 'RAS plaza restoranı', '', 1),
(247, 'Real hospital', '', 1),
(248, 'Real şadlıq sarayı', '', 1),
(249, 'Respublika Müalicəvi Diaqnostika Mərkəzi', '', 1),
(250, 'Rəssamlıq Akademiyası', '', 1),
(251, 'Rich plaza', '', 1),
(252, 'Riviera otel', '', 1),
(253, 'Romance palace restoranı', '', 1),
(254, 'Roz Marina restoranı', '', 1),
(255, 'Rusiya səfirliyi', '', 1),
(256, 'Şahənşah şadlıq sarayı', '', 1),
(257, 'Şam bağı restoranı', '', 1),
(258, 'Şəhidlər Xiyabanı', '', 1),
(259, 'Şəki restoranı', '', 1),
(260, 'Şəlalə parkı', '', 1),
(261, 'Şərq bazarı', '', 1),
(262, 'Şuşa restoranı', '', 1),
(263, 'Şüvəlan Park ticarət mərkəzi', '', 1),
(264, 'Sahil bağı', '', 1),
(265, 'Sapfir şadlıq sarayı', '', 1),
(266, 'Sea Breeze', '', 1),
(267, 'Sevən Ürəklər şadlıq sarayı', '', 1),
(268, 'Sevgi parkı', '', 1),
(269, 'Sevil Qazıyeva parkı', '', 1),
(270, 'Sədərək Ticarət Mərkəzi', '', 1),
(271, 'Səhiyyə Nazirliyi', '', 1),
(272, 'Səməd Vurğun parkı', '', 1),
(273, 'Sərhədçi İdman Mərkəzi', '', 1),
(274, 'Simfoniya Hall şadlıq sarayı', '', 1),
(275, 'Sirk', '', 1),
(276, 'Siyaqut şadlıq sarayı', '', 1),
(277, 'Sofiya şadlıq sarayı', '', 1),
(278, 'Sosial Müdafiəsi Nazirliyi', '', 1),
(279, 'Space telekanalı', '', 1),
(280, 'Spero hospital', '', 1),
(281, 'Spring otel', '', 1),
(282, 'Starlab tibb mərkəzi', '', 1),
(283, 'Stimul hospital', '', 1),
(284, 'Su İdman Sarayı', '', 1),
(285, 'Su Səsi restoranı', '', 1),
(286, 'Su Sonası şadlıq sarayı', '', 1),
(287, 'Sultan şadlıq sarayı', '', 1),
(288, 'Texniki Universitet', '', 1),
(289, 'Təbrik şadlıq sarayı', '', 1),
(290, 'Təfəkkür Universiteti', '', 1),
(291, 'Təhsil Nazirliyi', '', 1),
(292, 'Tərlan restoranı', '', 1),
(293, 'Təzə bazar', '', 1),
(294, 'Tibb Universiteti', '', 1),
(295, 'Tofiq Bəhrəmov stadionu', '', 1),
(296, 'Turan klinikası', '', 1),
(297, 'Türk səfirliyi', '', 1),
(298, 'Türk-Amerikan tibb mərkəzi', '', 1),
(299, 'Тurizm və Menecment Universiteti', '', 1),
(300, 'Ukrayna dairəsi', '', 1),
(301, 'Venera şadlıq sarayı', '', 1),
(302, 'Vergilər Nazirliyi', '', 1),
(303, 'Versal şadlıq sarayı', '', 1),
(304, 'Vita Med hospital', '', 1),
(305, 'World Business Center', '', 1),
(306, 'Xalça Muzeyi', '', 1),
(307, 'Xan saray restoranı', '', 1),
(308, 'Xaqani Ticarət Mərkəzi', '', 1),
(309, 'Xarici İşlər Nazirliyi', '', 1),
(310, 'Xəzər Universiteti', '', 1),
(311, 'Xəzinə şadlıq sarayı', '', 1),
(312, 'Yaşam tibb mərkəzi', '', 1),
(313, 'Yasamal bazarı', '', 1),
(314, 'Yasamal parkı', '', 1),
(315, 'Yaşıl bazar', '', 1),
(316, 'Yeganə şadlıq sarayı', '', 1),
(317, 'Yüksək Texnologiyalar Nazirliyi', '', 1),
(318, 'Zabitlər parkı', '', 1),
(319, 'Zərifə Əliyeva adına park', '', 1),
(320, 'Zirvə şadlıq sarayı', '', 1),
(321, 'Zoopark', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `theme_settings`
--

CREATE TABLE `theme_settings` (
  `id` int(11) NOT NULL,
  `border_mode` varchar(200) NOT NULL,
  `dark_skin` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `theme_settings`
--

INSERT INTO `theme_settings` (`id`, `border_mode`, `dark_skin`, `created_at`, `updated_at`) VALUES
(1, 'true', 'false', '2018-10-23 16:59:38', '2020-05-10 14:08:47');

-- --------------------------------------------------------

--
-- Структура таблицы `thumb_image`
--

CREATE TABLE `thumb_image` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `thumb_image`
--

INSERT INTO `thumb_image` (`id`, `avatar`, `path`) VALUES
(1, 'http://localhost/evelani/uploads/photos/thumb/e95ae0319f091a1028b82ca48ad34779.jpg', 'http://localhost/evelani/uploads/photos/e95ae0319f091a1028b82ca48ad34779.jpg'),
(2, 'http://localhost/evelani/uploads/photos/thumb/3de21c23bc669203bff9bf08d82bcfce.jpg', 'http://localhost/evelani/uploads/photos/3de21c23bc669203bff9bf08d82bcfce.jpg'),
(3, 'http://localhost/evelani/uploads/photos/thumb/e6ebc997e315f757f895a8b226caa73e.jpg', 'http://localhost/evelani/uploads/photos/e6ebc997e315f757f895a8b226caa73e.jpg'),
(4, 'http://localhost/evelani/uploads/photos/thumb/26e1d993162f5b2c5b04e49107b2b6b9.jpg', 'http://localhost/evelani/uploads/photos/26e1d993162f5b2c5b04e49107b2b6b9.jpg'),
(5, 'http://localhost/evelani/uploads/photos/thumb/c95afa5af83f0954e598ecfc11e679fd.jpg', 'http://localhost/evelani/uploads/photos/c95afa5af83f0954e598ecfc11e679fd.jpg'),
(6, 'http://localhost/evelani/uploads/photos/thumb/daabeb459305dbf895416501116f93fa.jpg', 'http://localhost/evelani/uploads/photos/daabeb459305dbf895416501116f93fa.jpg'),
(7, 'http://localhost/evelani/uploads/photos/thumb/af10ed4f636d85af80d35032a4a0cbf4.jpg', 'http://localhost/evelani/uploads/photos/af10ed4f636d85af80d35032a4a0cbf4.jpg'),
(8, 'http://localhost/evelani/uploads/photos/thumb/30ce5276e5ae42e504cb10eb7cc1ee91.jpg', 'http://localhost/evelani/uploads/photos/30ce5276e5ae42e504cb10eb7cc1ee91.jpg'),
(9, 'http://localhost/evelani/uploads/photos/thumb/aeebdfa297fc7b0debba23f4d479d251.jpg', 'http://localhost/evelani/uploads/photos/aeebdfa297fc7b0debba23f4d479d251.jpg'),
(10, 'http://localhost/evelani/uploads/photos/thumb/82b868fa0ea196fcc4a38af59cc7a311.jpg', 'http://localhost/evelani/uploads/photos/82b868fa0ea196fcc4a38af59cc7a311.jpg'),
(11, 'http://localhost/evelani/uploads/photos/thumb/0015636fa16f396e5f1efb7e9b00a137.jpg', 'http://localhost/evelani/uploads/photos/0015636fa16f396e5f1efb7e9b00a137.jpg'),
(12, 'http://localhost/evelani/uploads/photos/thumb/74eb798ef9a5f2450fd8c30d26b329c0.jpg', 'http://localhost/evelani/uploads/photos/74eb798ef9a5f2450fd8c30d26b329c0.jpg'),
(13, 'http://localhost/evelani/uploads/photos/thumb/ee515727f7584eb18c6644ac252ce6c5.jpg', 'http://localhost/evelani/uploads/photos/ee515727f7584eb18c6644ac252ce6c5.jpg'),
(14, 'http://localhost/evelani/uploads/photos/thumb/d8951e05c74520e059a5db3395256c68.jpg', 'http://localhost/evelani/uploads/photos/d8951e05c74520e059a5db3395256c68.jpg'),
(15, 'http://localhost/evelani/uploads/photos/thumb/f6114ed0c8a5b35aec5fcebe286cecbd.jpg', 'http://localhost/evelani/uploads/photos/f6114ed0c8a5b35aec5fcebe286cecbd.jpg'),
(16, 'http://localhost/evelani/uploads/photos/thumb/7d66e1b8559d0e87053a40de8fca1978.jpg', 'http://localhost/evelani/uploads/photos/7d66e1b8559d0e87053a40de8fca1978.jpg'),
(17, 'http://localhost/evelani/uploads/photos/thumb/a590e070180739a395ee60f3c41d30eb.jpg', 'http://localhost/evelani/uploads/photos/a590e070180739a395ee60f3c41d30eb.jpg'),
(18, 'http://localhost/evelani/uploads/photos/thumb/8802be9e62d0cb5e62e494dec58ae9bc.jpg', 'http://localhost/evelani/uploads/photos/8802be9e62d0cb5e62e494dec58ae9bc.jpg'),
(19, 'http://localhost/evelani/uploads/photos/thumb/498aa0725bff285d57132a5bb946f687.jpg', 'http://localhost/evelani/uploads/photos/498aa0725bff285d57132a5bb946f687.jpg'),
(20, 'http://localhost/evelani/uploads/photos/thumb/d5f8fa860300070c73495c41131666cb.jpg', 'http://localhost/evelani/uploads/photos/d5f8fa860300070c73495c41131666cb.jpg'),
(21, 'http://localhost/evelani/uploads/photos/thumb/7f6278292de56cffa15180c0420bced9.jpg', 'http://localhost/evelani/uploads/photos/7f6278292de56cffa15180c0420bced9.jpg'),
(22, 'http://localhost/evelani/uploads/photos/thumb/15638b440f26845ca65d1658c7ac753e.jpg', 'http://localhost/evelani/uploads/photos/15638b440f26845ca65d1658c7ac753e.jpg'),
(23, 'http://localhost/evelani/uploads/photos/thumb/ad73c2c4f7fbea773a46aab02bf66164.jpg', 'http://localhost/evelani/uploads/photos/ad73c2c4f7fbea773a46aab02bf66164.jpg'),
(24, 'http://localhost/evelani/uploads/photos/thumb/b3a66e9be6794bf74a0cff39d4e81714.jpg', 'http://localhost/evelani/uploads/photos/b3a66e9be6794bf74a0cff39d4e81714.jpg'),
(25, 'http://localhost/evelani/uploads/photos/thumb/8de9c99cd075717a1abfef2bc8ccfb2f.jpg', 'http://localhost/evelani/uploads/photos/8de9c99cd075717a1abfef2bc8ccfb2f.jpg'),
(26, 'http://localhost/evelani/uploads/photos/thumb/5f41c2465c2b9a415719c0ebfa392cb9.jpg', 'http://localhost/evelani/uploads/photos/5f41c2465c2b9a415719c0ebfa392cb9.jpg'),
(27, 'http://localhost/evelani/uploads/photos/thumb/f7b9f4d1198ce4f86c811768893cebb9.jpg', 'http://localhost/evelani/uploads/photos/f7b9f4d1198ce4f86c811768893cebb9.jpg'),
(28, 'http://localhost/evelani/uploads/photos/thumb/02c28d939b475f302cdfabb4ddade53e.jpg', 'http://localhost/evelani/uploads/photos/02c28d939b475f302cdfabb4ddade53e.jpg'),
(29, 'http://localhost/evelani/uploads/photos/thumb/6b8565beb59d3b54be5f8093a8166d34.jpg', 'http://localhost/evelani/uploads/photos/6b8565beb59d3b54be5f8093a8166d34.jpg'),
(30, 'http://localhost/evelani/uploads/photos/thumb/01e1ef35659f0d53b2dae958aa2deb58.jpg', 'http://localhost/evelani/uploads/photos/01e1ef35659f0d53b2dae958aa2deb58.jpg'),
(31, 'http://localhost/evelani/uploads/photos/thumb/550cbbc5966e4308bd525ef846ca8695.jpg', 'http://localhost/evelani/uploads/photos/550cbbc5966e4308bd525ef846ca8695.jpg'),
(32, 'http://localhost/evelani/uploads/photos/thumb/6235feea6e131e295ae27eb73ba8a2b2.jpg', 'http://localhost/evelani/uploads/photos/6235feea6e131e295ae27eb73ba8a2b2.jpg'),
(33, 'http://localhost/evelani/uploads/photos/thumb/10e6302ac63004ac707fac06dc10844f.jpg', 'http://localhost/evelani/uploads/photos/10e6302ac63004ac707fac06dc10844f.jpg'),
(34, 'http://localhost/evelani/uploads/photos/thumb/8fc5c65721a4b02b89bf191712f07b21.jpg', 'http://localhost/evelani/uploads/photos/8fc5c65721a4b02b89bf191712f07b21.jpg'),
(35, 'http://localhost/evelani/uploads/photos/thumb/8632c444a48a6e6fec609160d83e6368.jpg', 'http://localhost/evelani/uploads/photos/8632c444a48a6e6fec609160d83e6368.jpg'),
(36, 'http://localhost/evelani/uploads/photos/thumb/4fe74c0fe66572b6484f9df24aeee218.jpg', 'http://localhost/evelani/uploads/photos/4fe74c0fe66572b6484f9df24aeee218.jpg'),
(37, 'http://localhost/evelani/uploads/photos/thumb/52debc08425fd1e92e63f4922a50e88b.jpg', 'http://localhost/evelani/uploads/photos/52debc08425fd1e92e63f4922a50e88b.jpg'),
(38, 'http://localhost/evelani/uploads/photos/thumb/98744fcb5473796adf572320d75a7569.jpg', 'http://localhost/evelani/uploads/photos/98744fcb5473796adf572320d75a7569.jpg'),
(39, 'http://localhost/evelani/uploads/photos/thumb/1a4a8c5507eb0cf24574820d447e74ce.jpg', 'http://localhost/evelani/uploads/photos/1a4a8c5507eb0cf24574820d447e74ce.jpg'),
(40, 'http://localhost/evelani/uploads/photos/thumb/967318989cb32d30f4598ffca4b5532b.jpg', 'http://localhost/evelani/uploads/photos/967318989cb32d30f4598ffca4b5532b.jpg'),
(41, 'http://localhost/evelani/uploads/photos/thumb/ae0b8edd8fddd6ef7fe0bad19589d444.jpg', 'http://localhost/evelani/uploads/photos/ae0b8edd8fddd6ef7fe0bad19589d444.jpg'),
(42, 'http://localhost/evelani/uploads/photos/thumb/7f440f6ff9a66d7dd2f9bec08db242cf.jpg', 'http://localhost/evelani/uploads/photos/7f440f6ff9a66d7dd2f9bec08db242cf.jpg'),
(43, 'http://localhost/evelani/uploads/photos/thumb/5ae6e5e4b1402a3c1e935fde3b1dfd42.jpg', 'http://localhost/evelani/uploads/photos/5ae6e5e4b1402a3c1e935fde3b1dfd42.jpg'),
(44, 'http://localhost/evelani/uploads/photos/thumb/daa3cefe29fd0436e035320680225541.jpg', 'http://localhost/evelani/uploads/photos/daa3cefe29fd0436e035320680225541.jpg'),
(45, 'http://localhost/evelani/uploads/photos/thumb/04183331533a875d13c61c20fe48e7eb.jpg', 'http://localhost/evelani/uploads/photos/04183331533a875d13c61c20fe48e7eb.jpg'),
(46, 'http://localhost/evelani/uploads/photos/thumb/acc761eb964006af09c477417272c849.jpg', 'http://localhost/evelani/uploads/photos/acc761eb964006af09c477417272c849.jpg'),
(47, 'http://localhost/evelani/uploads/photos/thumb/5449c8ca13c2a4bd1b1442273acc0ff4.jpg', 'http://localhost/evelani/uploads/photos/5449c8ca13c2a4bd1b1442273acc0ff4.jpg'),
(48, 'http://localhost/evelani/uploads/photos/thumb/d2aff7a28ac3b08317ebe0cfff59804b.jpg', 'http://localhost/evelani/uploads/photos/d2aff7a28ac3b08317ebe0cfff59804b.jpg'),
(49, 'http://localhost/evelani/uploads/photos/thumb/aba70ce0b26f36cc0668f5038e2ecce1.jpg', 'http://localhost/evelani/uploads/photos/aba70ce0b26f36cc0668f5038e2ecce1.jpg'),
(50, 'http://localhost/evelani/uploads/photos/thumb/ad27fe4a8c644aa2bbeea565b552e9a6.jpg', 'http://localhost/evelani/uploads/photos/ad27fe4a8c644aa2bbeea565b552e9a6.jpg'),
(51, 'http://localhost/evelani/uploads/photos/thumb/d14067bfbe9778e11c7583e168ed43ac.jpg', 'http://localhost/evelani/uploads/photos/d14067bfbe9778e11c7583e168ed43ac.jpg'),
(52, 'http://localhost/evelani/uploads/photos/thumb/26199370519093a99f8df1e5cdad2c01.jpg', 'http://localhost/evelani/uploads/photos/26199370519093a99f8df1e5cdad2c01.jpg'),
(53, 'http://localhost/evelani/uploads/photos/thumb/e650a444a8ff21abc8769824baf748ba.jpg', 'http://localhost/evelani/uploads/photos/e650a444a8ff21abc8769824baf748ba.jpg'),
(54, 'http://localhost/evelani/uploads/photos/thumb/fe575d5714c060c13cb8bc5272f89be1.jpg', 'http://localhost/evelani/uploads/photos/fe575d5714c060c13cb8bc5272f89be1.jpg'),
(55, 'http://localhost/evelani/uploads/photos/thumb/95139fee09f9b7beeb855d030ecbcf07.jpg', 'http://localhost/evelani/uploads/photos/95139fee09f9b7beeb855d030ecbcf07.jpg'),
(56, 'http://localhost/evelani/uploads/photos/thumb/36d9bf86c231476e2657376a53a3ccc3.jpg', 'http://localhost/evelani/uploads/photos/36d9bf86c231476e2657376a53a3ccc3.jpg'),
(57, 'http://localhost/evelani/uploads/photos/thumb/93c1e25d45981fa5a802127c0219d5c1.jpg', 'http://localhost/evelani/uploads/photos/93c1e25d45981fa5a802127c0219d5c1.jpg'),
(58, 'http://localhost/evelani/uploads/photos/thumb/df09ad21d9b25109a8b6b91bb11d2c2e.jpg', 'http://localhost/evelani/uploads/photos/df09ad21d9b25109a8b6b91bb11d2c2e.jpg'),
(59, 'http://localhost/evelani/uploads/photos/thumb/362925340c6b8f6ea843c73ba6c046a3.jpg', 'http://localhost/evelani/uploads/photos/362925340c6b8f6ea843c73ba6c046a3.jpg'),
(60, 'http://localhost/evelani/uploads/photos/thumb/9ac9d23d60254b0ed36c7e8722e0bbc0.jpg', 'http://localhost/evelani/uploads/photos/9ac9d23d60254b0ed36c7e8722e0bbc0.jpg'),
(61, 'http://localhost/evelani/uploads/photos/thumb/3541a52e777924ccbeb687301314920f.jpg', 'http://localhost/evelani/uploads/photos/3541a52e777924ccbeb687301314920f.jpg'),
(62, 'http://localhost/evelani/uploads/photos/thumb/80650480b0281d85a1812b30bdedce8a.jpg', 'http://localhost/evelani/uploads/photos/80650480b0281d85a1812b30bdedce8a.jpg'),
(63, 'http://localhost/evelani/uploads/photos/thumb/2a9bda09ec946fb730879e94624e1a9b.jpg', 'http://localhost/evelani/uploads/photos/2a9bda09ec946fb730879e94624e1a9b.jpg'),
(64, 'http://localhost/evelani/uploads/photos/thumb/0f74f5b117bdbfa5d591c4d10c52d746.jpg', 'http://localhost/evelani/uploads/photos/0f74f5b117bdbfa5d591c4d10c52d746.jpg'),
(65, 'http://localhost/evelani/uploads/photos/thumb/804547aa1c90cd9c7dfde8c4517f9be4.jpg', 'http://localhost/evelani/uploads/photos/804547aa1c90cd9c7dfde8c4517f9be4.jpg'),
(66, 'http://localhost/evelani/uploads/photos/thumb/9709b4efdc0cbef544f9f292346a4ce2.jpg', 'http://localhost/evelani/uploads/photos/9709b4efdc0cbef544f9f292346a4ce2.jpg'),
(67, 'http://localhost/evelani/uploads/photos/thumb/1dc22da420ac88fdd4ad22e36979772a.jpg', 'http://localhost/evelani/uploads/photos/1dc22da420ac88fdd4ad22e36979772a.jpg'),
(68, 'http://localhost/evelani/uploads/photos/thumb/68f66430b282e2f4e6055d58c63677df.jpg', 'http://localhost/evelani/uploads/photos/68f66430b282e2f4e6055d58c63677df.jpg'),
(69, 'http://localhost/evelani/uploads/photos/thumb/9a249eeb8b7cad6e2d42ced6f84e3d31.jpg', 'http://localhost/evelani/uploads/photos/original/9a249eeb8b7cad6e2d42ced6f84e3d31.jpg'),
(70, 'http://localhost/evelani/uploads/photos/thumb/b5eb53ddfd03f657f1f891162c5ebf8e.jpg', 'http://localhost/evelani/uploads/photos/original/b5eb53ddfd03f657f1f891162c5ebf8e.jpg'),
(71, 'http://localhost/evelani/uploads/photos/thumb/f22619e7e262562d4598bab8265373fb.jpg', 'http://localhost/evelani/uploads/photos/original/f22619e7e262562d4598bab8265373fb.jpg'),
(72, 'http://localhost/evelani/uploads/photos/thumb/23acc490c9a26c741ff691113d05c2c7.jpg', 'http://localhost/evelani/uploads/photos/original/23acc490c9a26c741ff691113d05c2c7.jpg'),
(73, 'http://localhost/evelani/uploads/photos/thumb/a5437cb11da95b5ed94284cb8c4582a8.jpg', 'http://localhost/evelani/uploads/photos/original/a5437cb11da95b5ed94284cb8c4582a8.jpg'),
(74, 'http://localhost/evelani/uploads/photos/thumb/bfb648bb6a1aca7775c4acb11a9e12f4.jpg', 'http://localhost/evelani/uploads/photos/original/bfb648bb6a1aca7775c4acb11a9e12f4.jpg'),
(75, 'http://localhost/evelani/uploads/photos/thumb/da4a1ce4265e040867d11bdde762becd.jpg', 'http://localhost/evelani/uploads/photos/original/da4a1ce4265e040867d11bdde762becd.jpg'),
(76, 'http://localhost/evelani/uploads/photos/thumb/2c266ed0ce60f82c0a3a00b5ae331e49.jpg', 'http://localhost/evelani/uploads/photos/original/2c266ed0ce60f82c0a3a00b5ae331e49.jpg'),
(77, 'http://localhost/evelani/uploads/photos/thumb/9a6d972c3ad60638ad59e14a199b88e2.jpg', 'http://localhost/evelani/uploads/photos/original/9a6d972c3ad60638ad59e14a199b88e2.jpg'),
(78, 'http://localhost/evelani/uploads/photos/thumb/7be25c70677e4f64b34c235b3ca83443.jpg', 'http://localhost/evelani/uploads/photos/original/7be25c70677e4f64b34c235b3ca83443.jpg'),
(79, 'http://localhost/evelani/uploads/photos/thumb/ad59c7393797d987cf72f2f86dcc7c10.jpg', 'http://localhost/evelani/uploads/photos/original/ad59c7393797d987cf72f2f86dcc7c10.jpg'),
(80, 'http://localhost/evelani/uploads/photos/thumb/f6403ce1b19519476bfd37bcac3f8b4c.jpg', 'http://localhost/evelani/uploads/photos/original/f6403ce1b19519476bfd37bcac3f8b4c.jpg'),
(81, 'http://localhost/evelani/uploads/photos/thumb/cf684deb85950dd8222c3c571a4a8a1f.jpg', 'http://localhost/evelani/uploads/photos/original/cf684deb85950dd8222c3c571a4a8a1f.jpg'),
(82, 'http://localhost/evelani/uploads/photos/thumb/787feda26bf083bf8618450025eee37b.jpg', 'http://localhost/evelani/uploads/photos/original/787feda26bf083bf8618450025eee37b.jpg'),
(83, 'http://localhost/evelani/uploads/photos/thumb/9e473993b334e68fdddb230497501555.jpg', 'http://localhost/evelani/uploads/photos/original/9e473993b334e68fdddb230497501555.jpg'),
(84, 'http://localhost/evelani/uploads/photos/thumb/24f8030a0b1f16d4e39e897cab583ba0.jpg', 'http://localhost/evelani/uploads/photos/original/24f8030a0b1f16d4e39e897cab583ba0.jpg'),
(85, 'http://localhost/evelani/uploads/photos/thumb/3188b47af018b1a05da5ddd015266953.jpg', 'http://localhost/evelani/uploads/photos/original/3188b47af018b1a05da5ddd015266953.jpg'),
(86, 'http://localhost/evelani/uploads/photos/thumb/538ff8fb47f498da318b8468d1fec7a0.jpg', 'http://localhost/evelani/uploads/photos/original/538ff8fb47f498da318b8468d1fec7a0.jpg'),
(87, 'http://localhost/evelani/uploads/photos/thumb/9fb5803f92e09056097984aadc8d471f.jpg', 'http://localhost/evelani/uploads/photos/original/9fb5803f92e09056097984aadc8d471f.jpg'),
(88, 'http://localhost/evelani/uploads/photos/thumb/6ab905974d9c08671112071ac1bff1d9.jpg', 'http://localhost/evelani/uploads/photos/original/6ab905974d9c08671112071ac1bff1d9.jpg'),
(89, 'http://localhost/evelani/uploads/photos/thumb/0ca87f0e6d88bc73447ca750139d8623.jpg', 'http://localhost/evelani/uploads/photos/original/0ca87f0e6d88bc73447ca750139d8623.jpg'),
(90, 'http://localhost/evelani/uploads/photos/thumb/ffa7bbead871af7a5e3dbeb341f976f0.jpg', 'http://localhost/evelani/uploads/photos/original/ffa7bbead871af7a5e3dbeb341f976f0.jpg'),
(91, 'http://localhost/evelani/uploads/photos/thumb/185de6c6356abc8262a36d7b9b7240a1.jpg', 'http://localhost/evelani/uploads/photos/original/185de6c6356abc8262a36d7b9b7240a1.jpg'),
(92, 'http://localhost/evelani/uploads/photos/thumb/cf1ff23f4e39de35696894ea84fb53e0.jpg', 'http://localhost/evelani/uploads/photos/original/cf1ff23f4e39de35696894ea84fb53e0.jpg'),
(93, 'http://localhost/evelani/uploads/photos/thumb/179d69ecde8b1a7806a4f48b1856f467.jpg', 'http://localhost/evelani/uploads/photos/original/179d69ecde8b1a7806a4f48b1856f467.jpg'),
(94, 'http://localhost/evelani/uploads/photos/thumb/70cc8769d3627940e3d586444e139128.jpg', 'http://localhost/evelani/uploads/photos/original/70cc8769d3627940e3d586444e139128.jpg'),
(95, 'http://localhost/evelani/uploads/photos/thumb/f8b8a8b89dfb5b7aa65f0f2805577d96.jpg', 'http://localhost/evelani/uploads/photos/original/f8b8a8b89dfb5b7aa65f0f2805577d96.jpg'),
(96, 'http://localhost/evelani/uploads/photos/thumb/d252193415c2596b2552dda08058fc8c.jpg', 'http://localhost/evelani/uploads/photos/original/d252193415c2596b2552dda08058fc8c.jpg'),
(97, 'http://localhost/evelani/uploads/photos/thumb/34f5370d3e16dbd7fcd58ccba4f126e0.jpg', 'http://localhost/evelani/uploads/photos/original/34f5370d3e16dbd7fcd58ccba4f126e0.jpg'),
(98, 'http://localhost/evelani/uploads/photos/thumb/78e737759b38b3f49d9b56eb0fa4561f.jpg', 'http://localhost/evelani/uploads/photos/original/78e737759b38b3f49d9b56eb0fa4561f.jpg'),
(99, 'http://localhost/evelani/uploads/photos/thumb/9b7a3e3a16b069db7077e9e048ae0e73.jpg', 'http://localhost/evelani/uploads/photos/original/9b7a3e3a16b069db7077e9e048ae0e73.jpg'),
(100, 'http://localhost/evelani/uploads/photos/thumb/089d7f3b98e2f70f75bed9f1155ee32d.jpg', 'http://localhost/evelani/uploads/photos/original/089d7f3b98e2f70f75bed9f1155ee32d.jpg'),
(101, 'http://localhost/evelani/uploads/photos/thumb/a82bcb62a51b5e9592dac4142e10b243.jpg', 'http://localhost/evelani/uploads/photos/original/a82bcb62a51b5e9592dac4142e10b243.jpg'),
(102, 'http://localhost/evelani/uploads/photos/thumb/37dc450e9dd757a0e5685f9ddc8c0446.jpg', 'http://localhost/evelani/uploads/photos/original/37dc450e9dd757a0e5685f9ddc8c0446.jpg'),
(103, 'http://localhost/evelani/uploads/photos/thumb/a8381c62494d35629ca20e20a675df23.jpg', 'http://localhost/evelani/uploads/photos/original/a8381c62494d35629ca20e20a675df23.jpg'),
(104, 'http://localhost/evelani/uploads/photos/thumb/4a5a94b8b588ad0c3456cfaf59b9820f.jpg', 'http://localhost/evelani/uploads/photos/original/4a5a94b8b588ad0c3456cfaf59b9820f.jpg'),
(105, 'http://localhost/evelani/uploads/photos/thumb/3e2f506f6650c24aa1fa997efc1da91d.jpg', 'http://localhost/evelani/uploads/photos/original/3e2f506f6650c24aa1fa997efc1da91d.jpg'),
(106, 'http://localhost/evelani/uploads/photos/thumb/879a6db68504d45c54d31b7cef999a61.jpg', 'http://localhost/evelani/uploads/photos/original/879a6db68504d45c54d31b7cef999a61.jpg'),
(107, 'http://localhost/evelani/uploads/photos/thumb/8a5cf617dc77e852304077cecb5c984f.jpg', 'http://localhost/evelani/uploads/photos/original/8a5cf617dc77e852304077cecb5c984f.jpg'),
(108, 'http://localhost/evelani/uploads/photos/thumb/7bb23f1e2dc1de4726c02247c7719c88.jpg', 'http://localhost/evelani/uploads/photos/original/7bb23f1e2dc1de4726c02247c7719c88.jpg'),
(109, 'http://localhost/evelani/uploads/photos/thumb/5ac0abc20b8d144be696eaec3f98eae0.jpg', 'http://localhost/evelani/uploads/photos/original/5ac0abc20b8d144be696eaec3f98eae0.jpg'),
(110, 'http://localhost/evelani/uploads/photos/thumb/035c13932f23075eac2ef18ded0df1ed.jpg', 'http://localhost/evelani/uploads/photos/original/035c13932f23075eac2ef18ded0df1ed.jpg'),
(111, 'http://localhost/evelani/uploads/photos/thumb/5456891db0b1f5dd74809d1a1e936169.jpg', 'http://localhost/evelani/uploads/photos/original/5456891db0b1f5dd74809d1a1e936169.jpg'),
(112, 'http://localhost/evelani/uploads/photos/thumb/6dfc7d689040b5dffff198cab84289ee.jpg', 'http://localhost/evelani/uploads/photos/original/6dfc7d689040b5dffff198cab84289ee.jpg'),
(113, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(114, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(115, 'http://localhost/evelani/uploads/photos/thumb/5444b9e76162f5ea805771e3a7cf3669.jpg', 'http://localhost/evelani/uploads/photos/original/5444b9e76162f5ea805771e3a7cf3669.jpg'),
(116, 'http://localhost/evelani/uploads/photos/thumb/9b6e8c2e52bf1be8a6cc035687a93499.jpg', 'http://localhost/evelani/uploads/photos/original/9b6e8c2e52bf1be8a6cc035687a93499.jpg'),
(117, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(118, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(119, 'http://localhost/evelani/uploads/photos/thumb/f9e87ec60241aa3f0f730220dd51ebb6.jpg', 'http://localhost/evelani/uploads/photos/original/f9e87ec60241aa3f0f730220dd51ebb6.jpg'),
(120, 'http://localhost/evelani/uploads/photos/thumb/6ace6944b038a8676a0718a7daa0cf47.jpg', 'http://localhost/evelani/uploads/photos/original/6ace6944b038a8676a0718a7daa0cf47.jpg'),
(121, 'http://localhost/evelani/uploads/photos/thumb/9d1f7c6f0cf9d87dfc51ec6321e522b3.jpg', 'http://localhost/evelani/uploads/photos/original/9d1f7c6f0cf9d87dfc51ec6321e522b3.jpg'),
(122, 'http://localhost/evelani/uploads/photos/thumb/48bce15c7f3c60afc29e39d19e7cb127.jpg', 'http://localhost/evelani/uploads/photos/original/48bce15c7f3c60afc29e39d19e7cb127.jpg'),
(123, 'http://localhost/evelani/uploads/photos/thumb/7e8da0471825246cb324e22a08b24979.jpg', 'http://localhost/evelani/uploads/photos/original/7e8da0471825246cb324e22a08b24979.jpg'),
(124, 'http://localhost/evelani/uploads/photos/thumb/d1fc47c68b1ecdff90676f0989839035.jpg', 'http://localhost/evelani/uploads/photos/original/d1fc47c68b1ecdff90676f0989839035.jpg'),
(125, 'http://localhost/evelani/uploads/photos/thumb/d46cfec9f464998fb79d8ae6bb385b1c.jpg', 'http://localhost/evelani/uploads/photos/original/d46cfec9f464998fb79d8ae6bb385b1c.jpg'),
(126, 'http://localhost/evelani/uploads/photos/thumb/9e1f4c3c4780ef694d3454384906100d.jpg', 'http://localhost/evelani/uploads/photos/original/9e1f4c3c4780ef694d3454384906100d.jpg'),
(127, 'http://localhost/evelani/uploads/photos/thumb/b63ca7c905188853c3bf749871298a83.jpg', 'http://localhost/evelani/uploads/photos/original/b63ca7c905188853c3bf749871298a83.jpg'),
(128, 'http://localhost/evelani/uploads/photos/thumb/c909094fffae8da5ff267790ea08d9a9.jpg', 'http://localhost/evelani/uploads/photos/original/c909094fffae8da5ff267790ea08d9a9.jpg'),
(129, 'http://localhost/evelani/uploads/photos/thumb/6078c2a50e5ba938d5c99f5275124e76.jpg', 'http://localhost/evelani/uploads/photos/original/6078c2a50e5ba938d5c99f5275124e76.jpg'),
(130, 'http://localhost/evelani/uploads/photos/thumb/d508142cc660c162cd9b626a5e7131ba.jpg', 'http://localhost/evelani/uploads/photos/original/d508142cc660c162cd9b626a5e7131ba.jpg'),
(131, 'http://localhost/evelani/uploads/photos/thumb/d218aa65711e87b818a0ba83437eef1a.jpg', 'http://localhost/evelani/uploads/photos/original/d218aa65711e87b818a0ba83437eef1a.jpg'),
(132, 'http://localhost/evelani/uploads/photos/thumb/e27eaa8d104e5e960f6efe167801d51f.jpg', 'http://localhost/evelani/uploads/photos/original/e27eaa8d104e5e960f6efe167801d51f.jpg'),
(133, 'http://localhost/evelani/uploads/photos/thumb/b38fa36ef2f07509d6d20ec56a485d02.jpg', 'http://localhost/evelani/uploads/photos/original/b38fa36ef2f07509d6d20ec56a485d02.jpg'),
(134, 'http://localhost/evelani/uploads/photos/thumb/fb9a57d7374a9433a8b5a407dc43ddcf.jpg', 'http://localhost/evelani/uploads/photos/original/fb9a57d7374a9433a8b5a407dc43ddcf.jpg'),
(135, 'http://localhost/evelani/uploads/photos/thumb/ac5f62bf8ce4edd5dab3839439984e51.jpg', 'http://localhost/evelani/uploads/photos/original/ac5f62bf8ce4edd5dab3839439984e51.jpg'),
(136, 'http://localhost/evelani/uploads/photos/thumb/daba4938095fc735e9a4e860c0a64e97.jpg', 'http://localhost/evelani/uploads/photos/original/daba4938095fc735e9a4e860c0a64e97.jpg'),
(137, 'http://localhost/evelani/uploads/photos/thumb/c12037d372d19f0d737257412ea5dde5.jpg', 'http://localhost/evelani/uploads/photos/original/c12037d372d19f0d737257412ea5dde5.jpg'),
(138, 'http://localhost/evelani/uploads/photos/thumb/7c38f135da2377d63b0913fd2d818d93.jpg', 'http://localhost/evelani/uploads/photos/original/7c38f135da2377d63b0913fd2d818d93.jpg'),
(139, 'http://localhost/evelani/uploads/photos/thumb/5554f294781c19568418c5f6f890f74a.jpg', 'http://localhost/evelani/uploads/photos/original/5554f294781c19568418c5f6f890f74a.jpg'),
(140, 'http://localhost/evelani/uploads/photos/thumb/71e96b7415b4b3b4f117e1b688e490fb.jpg', 'http://localhost/evelani/uploads/photos/original/71e96b7415b4b3b4f117e1b688e490fb.jpg'),
(141, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(142, 'http://localhost/evelani/uploads/photos/thumb/4696a5aacd8021793759216e5c130550.jpg', 'http://localhost/evelani/uploads/photos/original/4696a5aacd8021793759216e5c130550.jpg'),
(143, 'http://localhost/evelani/uploads/photos/thumb/9138f04f5c1d4b1844690857a70f5a81.jpg', 'http://localhost/evelani/uploads/photos/original/9138f04f5c1d4b1844690857a70f5a81.jpg'),
(144, 'http://localhost/evelani/uploads/photos/thumb/69f940f2e1d957a7b8f485d75fe3b77a.jpg', 'http://localhost/evelani/uploads/photos/original/69f940f2e1d957a7b8f485d75fe3b77a.jpg'),
(145, 'http://localhost/evelani/uploads/photos/thumb/29faca0611915681f993526dbda96952.jpg', 'http://localhost/evelani/uploads/photos/original/29faca0611915681f993526dbda96952.jpg'),
(146, 'http://localhost/evelani/uploads/photos/thumb/a493946eaa55533838e73cdec8cd72ee.jpg', 'http://localhost/evelani/uploads/photos/original/a493946eaa55533838e73cdec8cd72ee.jpg'),
(147, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(148, 'http://localhost/evelani/', 'http://localhost/evelani/'),
(149, 'http://localhost/evelani/', ''),
(150, 'http://localhost/evelani/', ''),
(151, 'http://localhost/evelani/', ''),
(152, 'http://localhost/evelani/', ''),
(153, 'http://localhost/evelani/', ''),
(154, 'http://localhost/evelani/', ''),
(155, 'http://localhost/evelani/uploads/photos/thumb/89314c9f3a6a72537290678eea80eed4.jpg', 'http://localhost/evelani/uploads/photos/original/89314c9f3a6a72537290678eea80eed4.jpg'),
(156, 'http://localhost/evelani/uploads/photos/thumb/e432ea360702eab1372a461f00341cb4.jpg', 'http://localhost/evelani/uploads/photos/original/e432ea360702eab1372a461f00341cb4.jpg'),
(157, 'http://localhost/evelani/uploads/photos/thumb/61958c8daa02158e6c026e2a89162692.jpg', 'http://localhost/evelani/uploads/photos/original/61958c8daa02158e6c026e2a89162692.jpg'),
(158, 'http://localhost/evelani/uploads/photos/thumb/1a2bbfaa2b999874d947a50154139a49.jpg', 'http://localhost/evelani/uploads/photos/original/1a2bbfaa2b999874d947a50154139a49.jpg'),
(159, 'http://localhost/evelani/uploads/photos/thumb/0f66302a4236b49662c7fd3841c681dd.jpg', 'http://localhost/evelani/uploads/photos/original/0f66302a4236b49662c7fd3841c681dd.jpg'),
(160, 'http://localhost/evelani/uploads/photos/thumb/15f43281f6630c0479c7e266e89efda3.jpg', 'http://localhost/evelani/uploads/photos/original/15f43281f6630c0479c7e266e89efda3.jpg'),
(161, 'http://localhost/evelani/uploads/photos/thumb/a883bcea3947dcd001026d5cb50b424a.jpg', 'http://localhost/evelani/uploads/photos/original/a883bcea3947dcd001026d5cb50b424a.jpg'),
(162, 'http://localhost/evelani/uploads/photos/thumb/5d742dabcee150a9c27d230ba3fd7922.jpg', 'http://localhost/evelani/uploads/photos/original/5d742dabcee150a9c27d230ba3fd7922.jpg'),
(163, 'http://localhost/evelani/uploads/photos/thumb/8fad351c6c54ece9c07474e62ffe7db7.jpg', 'http://localhost/evelani/uploads/photos/original/8fad351c6c54ece9c07474e62ffe7db7.jpg'),
(164, 'http://localhost/evelani/uploads/photos/thumb/5de65d177faf6a01132ee560315c706d.jpg', 'http://localhost/evelani/uploads/photos/original/5de65d177faf6a01132ee560315c706d.jpg'),
(165, 'http://localhost/evelani/uploads/photos/thumb/426a5c4e2155b136d29689746105e6ee.jpg', 'http://localhost/evelani/uploads/photos/original/426a5c4e2155b136d29689746105e6ee.jpg'),
(166, 'http://localhost/evelani/uploads/photos/thumb/c8cdd3893c00e27b99c649788fc55bf4.jpg', 'http://localhost/evelani/uploads/photos/original/c8cdd3893c00e27b99c649788fc55bf4.jpg'),
(167, 'http://localhost/evelani/uploads/photos/thumb/346771547a2fa17c113b47b36b168bba.jpg', 'http://localhost/evelani/uploads/photos/original/346771547a2fa17c113b47b36b168bba.jpg'),
(168, 'http://localhost/evelani/uploads/photos/thumb/07730cbc2187305fa86ad6c190027bf8.jpg', 'http://localhost/evelani/uploads/photos/original/07730cbc2187305fa86ad6c190027bf8.jpg'),
(169, 'http://localhost/evelani/uploads/photos/thumb/a26e0a5bbd4ea4f697945352344efe58.jpg', 'http://localhost/evelani/uploads/photos/original/a26e0a5bbd4ea4f697945352344efe58.jpg'),
(170, 'http://localhost/evelani/uploads/photos/thumb/ee368b7a751ab527cacd5f03a0dfc2e6.jpg', 'http://localhost/evelani/uploads/photos/original/ee368b7a751ab527cacd5f03a0dfc2e6.jpg'),
(171, 'http://localhost/evelani/uploads/photos/thumb/6e901d83918a1a64e0c36d3b0758eaba.jpg', 'http://localhost/evelani/uploads/photos/original/6e901d83918a1a64e0c36d3b0758eaba.jpg'),
(172, 'http://localhost/evelani/uploads/photos/thumb/9542205daa099370f0ed1b6c21fd6368.jpg', 'http://localhost/evelani/uploads/photos/original/9542205daa099370f0ed1b6c21fd6368.jpg'),
(173, 'http://localhost/evelani/uploads/photos/thumb/d0685f6c0413b4735eb1fb0b378bd21d.jpg', 'http://localhost/evelani/uploads/photos/original/d0685f6c0413b4735eb1fb0b378bd21d.jpg'),
(174, 'http://localhost/evelani/uploads/photos/thumb/8ca0c00f6ac609d2fcd70370cb6fd44f.jpg', 'http://localhost/evelani/uploads/photos/original/8ca0c00f6ac609d2fcd70370cb6fd44f.jpg'),
(175, 'http://localhost/evelani/uploads/photos/thumb/855e718d13ab8a29f0c52152b35ff2f0.jpg', 'http://localhost/evelani/uploads/photos/original/855e718d13ab8a29f0c52152b35ff2f0.jpg'),
(176, 'http://localhost/evelani/uploads/photos/thumb/91bff82e1d4dfa333680f183070ab2b7.jpg', 'http://localhost/evelani/uploads/photos/original/91bff82e1d4dfa333680f183070ab2b7.jpg'),
(177, 'http://localhost/evelani/uploads/photos/thumb/ca323ec7b566121a5505f7e165f6343a.jpg', 'http://localhost/evelani/uploads/photos/original/ca323ec7b566121a5505f7e165f6343a.jpg'),
(178, 'http://localhost/evelani/uploads/photos/thumb/f1a863668c580732b73b47a1a1d9ebe6.jpg', 'http://localhost/evelani/uploads/photos/original/f1a863668c580732b73b47a1a1d9ebe6.jpg'),
(179, 'http://localhost/evelani/uploads/photos/thumb/349b75c4037296d80bd07f96cc115061.jpg', 'http://localhost/evelani/uploads/photos/original/349b75c4037296d80bd07f96cc115061.jpg'),
(180, 'http://localhost/evelani/uploads/photos/thumb/56b6bf8c9aea17b17b7195c60786318d.jpg', 'http://localhost/evelani/uploads/photos/original/56b6bf8c9aea17b17b7195c60786318d.jpg'),
(181, 'http://localhost/evelani/uploads/photos/thumb/69dcad313e8d7bd8e11fe77f8031a062.jpg', 'http://localhost/evelani/uploads/photos/original/69dcad313e8d7bd8e11fe77f8031a062.jpg'),
(182, 'http://localhost/evelani/uploads/photos/thumb/d235d00261a50d07b0ab4cfd84e84b79.jpg', 'http://localhost/evelani/uploads/photos/original/d235d00261a50d07b0ab4cfd84e84b79.jpg'),
(183, 'http://localhost/evelani/uploads/photos/thumb/d21d84ebfb091d28683313f23b6874a4.jpg', 'http://localhost/evelani/uploads/photos/original/d21d84ebfb091d28683313f23b6874a4.jpg'),
(184, 'http://localhost/evelani/uploads/photos/thumb/6f11db1d344f121726b9f86dbd958651.jpg', 'http://localhost/evelani/uploads/photos/original/6f11db1d344f121726b9f86dbd958651.jpg'),
(185, 'http://localhost/evelani/uploads/photos/thumb/93effcde1e3999673491abe9e2c9c9de.jpg', 'http://localhost/evelani/uploads/photos/original/93effcde1e3999673491abe9e2c9c9de.jpg'),
(186, 'http://localhost/evelani/uploads/photos/thumb/4dc8d0f915a83143bc6206ed41ff1c3a.jpg', 'http://localhost/evelani/uploads/photos/original/4dc8d0f915a83143bc6206ed41ff1c3a.jpg'),
(187, 'http://localhost/evelani/uploads/photos/thumb/497b78352e8fcb2d0e8fa33c93fe4b59.jpg', 'http://localhost/evelani/uploads/photos/original/497b78352e8fcb2d0e8fa33c93fe4b59.jpg'),
(188, 'http://localhost/evelani/uploads/photos/thumb/d0cf5fc19088bf406549182b74428b42.jpg', 'http://localhost/evelani/uploads/photos/original/d0cf5fc19088bf406549182b74428b42.jpg'),
(189, 'http://localhost/evelani/uploads/photos/thumb/f7b3190d8262254d42ef6b949d1e09cb.jpg', 'http://localhost/evelani/uploads/photos/original/f7b3190d8262254d42ef6b949d1e09cb.jpg'),
(190, 'http://localhost/evelani/uploads/photos/thumb/d04780a97606f4b906c78b1bf8346ad1.jpg', 'http://localhost/evelani/uploads/photos/original/d04780a97606f4b906c78b1bf8346ad1.jpg'),
(191, 'http://localhost/evelani/uploads/photos/thumb/c9bde80ffc8f1509e839045ac2f2c5f5.jpg', 'http://localhost/evelani/uploads/photos/original/c9bde80ffc8f1509e839045ac2f2c5f5.jpg'),
(192, 'http://localhost/evelani/uploads/photos/thumb/d4add7bf46c321eae98b61875d5f07bb.jpg', 'http://localhost/evelani/uploads/photos/original/d4add7bf46c321eae98b61875d5f07bb.jpg'),
(193, 'http://localhost/evelani/uploads/photos/thumb/b384d40113ef45d1abaeaa4ebbd94a68.jpg', 'http://localhost/evelani/uploads/photos/original/b384d40113ef45d1abaeaa4ebbd94a68.jpg'),
(194, 'http://localhost/evelani/uploads/photos/thumb/63a1a3adf24cfda7ce6378c81997f69d.jpg', 'http://localhost/evelani/uploads/photos/original/63a1a3adf24cfda7ce6378c81997f69d.jpg'),
(195, 'http://localhost/evelani/uploads/photos/thumb/f1149853d8820a16e79f25a090c9c9a1.jpg', 'http://localhost/evelani/uploads/photos/original/f1149853d8820a16e79f25a090c9c9a1.jpg'),
(196, 'http://localhost/evelani/uploads/photos/thumb/9dfd38be6915bf9429398e61ac1099b5.jpg', 'http://localhost/evelani/uploads/photos/original/9dfd38be6915bf9429398e61ac1099b5.jpg'),
(197, 'http://localhost/evelani/uploads/photos/thumb/ba003727c81bd25a3d0f496ebf31fc2d.jpg', 'http://localhost/evelani/uploads/photos/original/ba003727c81bd25a3d0f496ebf31fc2d.jpg'),
(198, 'http://localhost/evelani/uploads/photos/thumb/9541e507b541ccc9775a5ab5f56d16ba.jpg', 'http://localhost/evelani/uploads/photos/original/9541e507b541ccc9775a5ab5f56d16ba.jpg'),
(199, 'http://localhost/evelani/uploads/photos/thumb/5b65b03a5ddace416df479c5eda4b944.jpg', 'http://localhost/evelani/uploads/photos/original/5b65b03a5ddace416df479c5eda4b944.jpg'),
(200, 'http://localhost/evelani/uploads/photos/thumb/b60ae76c1afe6a4540c88024d5439402.jpg', 'http://localhost/evelani/uploads/photos/original/b60ae76c1afe6a4540c88024d5439402.jpg'),
(201, 'http://localhost/evelani/uploads/photos/thumb/268e167d9ea569591a7a0bc38af400e5.jpg', 'http://localhost/evelani/uploads/photos/original/268e167d9ea569591a7a0bc38af400e5.jpg'),
(202, 'http://localhost/evelani/uploads/photos/thumb/4c8b9e41d5cfac3d31f8ee146e7ce3af.jpg', 'http://localhost/evelani/uploads/photos/original/4c8b9e41d5cfac3d31f8ee146e7ce3af.jpg'),
(203, 'http://localhost/evelani/uploads/photos/thumb/4468a13e064420c305245556f521ad98.jpg', 'http://localhost/evelani/uploads/photos/original/4468a13e064420c305245556f521ad98.jpg'),
(204, 'http://localhost/evelani/uploads/photos/thumb/d0e77fd45c19753110a42f2bc8c6c42a.jpg', 'http://localhost/evelani/uploads/photos/original/d0e77fd45c19753110a42f2bc8c6c42a.jpg'),
(205, 'http://localhost/evelani/uploads/photos/thumb/05909b22f75d64937c4b81b67fe2884b.jpg', 'http://localhost/evelani/uploads/photos/original/05909b22f75d64937c4b81b67fe2884b.jpg'),
(206, 'http://localhost/evelani/uploads/photos/thumb/9dafc064a7940407b2e0e847a6f5b8f1.jpg', 'http://localhost/evelani/uploads/photos/original/9dafc064a7940407b2e0e847a6f5b8f1.jpg'),
(207, 'http://localhost/evelani/uploads/photos/thumb/82e87b2508a2e10dcb41c6755ac93274.jpg', 'http://localhost/evelani/uploads/photos/original/82e87b2508a2e10dcb41c6755ac93274.jpg'),
(208, 'http://localhost/evelani/uploads/photos/thumb/16ab0a65f97f0b6199f8c9d3a4af2582.jpg', 'http://localhost/evelani/uploads/photos/original/16ab0a65f97f0b6199f8c9d3a4af2582.jpg'),
(209, 'http://localhost/evelani/uploads/photos/thumb/ca89a0d1411afe69409617b74d9e898e.jpg', 'http://localhost/evelani/uploads/photos/original/ca89a0d1411afe69409617b74d9e898e.jpg'),
(210, 'http://localhost/evelani/uploads/photos/thumb/7357dc2414da256ffd3e8d00bb2a7ba6.jpg', 'http://localhost/evelani/uploads/photos/original/7357dc2414da256ffd3e8d00bb2a7ba6.jpg'),
(211, 'http://localhost/evelani/uploads/photos/thumb/da84c3a2b9e07b0dd5fb88996be14aa4.jpg', 'http://localhost/evelani/uploads/photos/original/da84c3a2b9e07b0dd5fb88996be14aa4.jpg'),
(212, 'http://localhost/evelani/uploads/photos/thumb/15eec5a8d85a968771f3189bb8cbf580.jpg', 'http://localhost/evelani/uploads/photos/original/15eec5a8d85a968771f3189bb8cbf580.jpg'),
(213, 'http://localhost/evelani/uploads/photos/thumb/a14e0e348bf54065513428c3633fc0c5.jpg', 'http://localhost/evelani/uploads/photos/original/a14e0e348bf54065513428c3633fc0c5.jpg'),
(214, 'http://localhost/evelani/uploads/photos/thumb/b75c3e4e88536c9c3c0d2cb9c40b5a5f.jpg', 'http://localhost/evelani/uploads/photos/original/b75c3e4e88536c9c3c0d2cb9c40b5a5f.jpg'),
(215, 'http://localhost/evelani/uploads/photos/thumb/123bbd3bd7a4e85fa6b3185e779ef029.jpg', 'http://localhost/evelani/uploads/photos/original/123bbd3bd7a4e85fa6b3185e779ef029.jpg'),
(216, 'http://localhost/evelani/uploads/photos/thumb/a5b44a7ab177f180d49aea9dbcf66174.jpg', 'http://localhost/evelani/uploads/photos/original/a5b44a7ab177f180d49aea9dbcf66174.jpg'),
(217, 'http://localhost/evelani/uploads/photos/thumb/1756a50b5ef821ebc3e8ed203ad502c0.jpg', 'http://localhost/evelani/uploads/photos/original/1756a50b5ef821ebc3e8ed203ad502c0.jpg'),
(218, 'http://localhost/evelani/uploads/photos/thumb/dc8e4bf2c34d4c067cc4d1b198e767d6.jpg', 'http://localhost/evelani/uploads/photos/original/dc8e4bf2c34d4c067cc4d1b198e767d6.jpg'),
(219, 'http://localhost/evelani/uploads/photos/thumb/984683373e2c1b88072465753fd80017.jpg', 'http://localhost/evelani/uploads/photos/original/984683373e2c1b88072465753fd80017.jpg'),
(220, 'http://localhost/evelani/uploads/photos/thumb/e8439648289425e7310285579f56f82e.jpg', 'http://localhost/evelani/uploads/photos/original/e8439648289425e7310285579f56f82e.jpg'),
(221, 'http://localhost/evelani/uploads/photos/thumb/5e70c7a7104f1c29a70e3de7a41602a8.jpg', 'http://localhost/evelani/uploads/photos/original/5e70c7a7104f1c29a70e3de7a41602a8.jpg'),
(222, 'http://localhost/evelani/uploads/photos/thumb/d4d0776e9da22865ecf39f6b3294af2c.jpg', 'http://localhost/evelani/uploads/photos/original/d4d0776e9da22865ecf39f6b3294af2c.jpg'),
(223, 'http://localhost/evelani/uploads/photos/thumb/b318037db2579103c983fd1dcf4e381b.jpg', 'http://localhost/evelani/uploads/photos/original/b318037db2579103c983fd1dcf4e381b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user_agreements`
--

CREATE TABLE `user_agreements` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user_agreements`
--

INSERT INTO `user_agreements` (`id`, `content`, `status`) VALUES
(1, '        this is a test desription 2', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `wishlists`
--

INSERT INTO `wishlists` (`id`, `session_id`, `data_id`) VALUES
(18, '8c75b973e681065a9e47cce3edbb57d7', 14),
(39, '52616fdeb8bb472a2971b0e21b46eb85', 19),
(41, '00e87128526b026f62938406341fcdf3', 16);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_ads_configuration`
--
ALTER TABLE `about_ads_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `add_advertisement_rules`
--
ALTER TABLE `add_advertisement_rules`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_all`
--
ALTER TABLE `ads_all`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_complain`
--
ALTER TABLE `ads_complain`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_configuration`
--
ALTER TABLE `ads_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_rules`
--
ALTER TABLE `ads_rules`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_type`
--
ALTER TABLE `ads_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ads_users`
--
ALTER TABLE `ads_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `custom_field`
--
ALTER TABLE `custom_field`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `custom_fields_values`
--
ALTER TABLE `custom_fields_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relid` (`relid`),
  ADD KEY `fieldid` (`field_id`);

--
-- Индексы таблицы `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `email_config`
--
ALTER TABLE `email_config`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `email_templates_details`
--
ALTER TABLE `email_templates_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `estate_type`
--
ALTER TABLE `estate_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_about`
--
ALTER TABLE `front_cms_about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_admission`
--
ALTER TABLE `front_cms_admission`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_admitcard`
--
ALTER TABLE `front_cms_admitcard`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_certificates`
--
ALTER TABLE `front_cms_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_contact`
--
ALTER TABLE `front_cms_contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_events`
--
ALTER TABLE `front_cms_events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_exam_results`
--
ALTER TABLE `front_cms_exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_faq`
--
ALTER TABLE `front_cms_faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_faq_list`
--
ALTER TABLE `front_cms_faq_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_gallery`
--
ALTER TABLE `front_cms_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_gallery_category`
--
ALTER TABLE `front_cms_gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_gallery_content`
--
ALTER TABLE `front_cms_gallery_content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_home`
--
ALTER TABLE `front_cms_home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_home_seo`
--
ALTER TABLE `front_cms_home_seo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_menu`
--
ALTER TABLE `front_cms_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_menu_visible`
--
ALTER TABLE `front_cms_menu_visible`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_pages`
--
ALTER TABLE `front_cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_services`
--
ALTER TABLE `front_cms_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_services_list`
--
ALTER TABLE `front_cms_services_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_setting`
--
ALTER TABLE `front_cms_setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_teachers`
--
ALTER TABLE `front_cms_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `front_cms_testimonial`
--
ALTER TABLE `front_cms_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `language_list`
--
ALTER TABLE `language_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `login_credential`
--
ALTER TABLE `login_credential`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `metros`
--
ALTER TABLE `metros`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_config`
--
ALTER TABLE `payment_config`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_salary_stipend`
--
ALTER TABLE `payment_salary_stipend`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission_modules`
--
ALTER TABLE `permission_modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rm_sessions`
--
ALTER TABLE `rm_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sections_allocation`
--
ALTER TABLE `sections_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sms_api`
--
ALTER TABLE `sms_api`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sms_credential`
--
ALTER TABLE `sms_credential`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sms_template`
--
ALTER TABLE `sms_template`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sms_template_details`
--
ALTER TABLE `sms_template_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `theme_settings`
--
ALTER TABLE `theme_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `thumb_image`
--
ALTER TABLE `thumb_image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_agreements`
--
ALTER TABLE `user_agreements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_ads_configuration`
--
ALTER TABLE `about_ads_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `add_advertisement_rules`
--
ALTER TABLE `add_advertisement_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ads_all`
--
ALTER TABLE `ads_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `ads_complain`
--
ALTER TABLE `ads_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `ads_configuration`
--
ALTER TABLE `ads_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ads_rules`
--
ALTER TABLE `ads_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ads_type`
--
ALTER TABLE `ads_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ads_users`
--
ALTER TABLE `ads_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `custom_field`
--
ALTER TABLE `custom_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `custom_fields_values`
--
ALTER TABLE `custom_fields_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT для таблицы `email_config`
--
ALTER TABLE `email_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `email_templates_details`
--
ALTER TABLE `email_templates_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `estate_type`
--
ALTER TABLE `estate_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `front_cms_about`
--
ALTER TABLE `front_cms_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_admission`
--
ALTER TABLE `front_cms_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_admitcard`
--
ALTER TABLE `front_cms_admitcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_certificates`
--
ALTER TABLE `front_cms_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_contact`
--
ALTER TABLE `front_cms_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_events`
--
ALTER TABLE `front_cms_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_exam_results`
--
ALTER TABLE `front_cms_exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_faq`
--
ALTER TABLE `front_cms_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_faq_list`
--
ALTER TABLE `front_cms_faq_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `front_cms_gallery`
--
ALTER TABLE `front_cms_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_gallery_category`
--
ALTER TABLE `front_cms_gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `front_cms_gallery_content`
--
ALTER TABLE `front_cms_gallery_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `front_cms_home`
--
ALTER TABLE `front_cms_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `front_cms_home_seo`
--
ALTER TABLE `front_cms_home_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_menu`
--
ALTER TABLE `front_cms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `front_cms_menu_visible`
--
ALTER TABLE `front_cms_menu_visible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_pages`
--
ALTER TABLE `front_cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `front_cms_services`
--
ALTER TABLE `front_cms_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_services_list`
--
ALTER TABLE `front_cms_services_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `front_cms_setting`
--
ALTER TABLE `front_cms_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_teachers`
--
ALTER TABLE `front_cms_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `front_cms_testimonial`
--
ALTER TABLE `front_cms_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1383;

--
-- AUTO_INCREMENT для таблицы `language_list`
--
ALTER TABLE `language_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `metros`
--
ALTER TABLE `metros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `payment_config`
--
ALTER TABLE `payment_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment_salary_stipend`
--
ALTER TABLE `payment_salary_stipend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT для таблицы `permission_modules`
--
ALTER TABLE `permission_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sections_allocation`
--
ALTER TABLE `sections_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sms_api`
--
ALTER TABLE `sms_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sms_credential`
--
ALTER TABLE `sms_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sms_template`
--
ALTER TABLE `sms_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `sms_template_details`
--
ALTER TABLE `sms_template_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `targets`
--
ALTER TABLE `targets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT для таблицы `theme_settings`
--
ALTER TABLE `theme_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `thumb_image`
--
ALTER TABLE `thumb_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT для таблицы `user_agreements`
--
ALTER TABLE `user_agreements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
