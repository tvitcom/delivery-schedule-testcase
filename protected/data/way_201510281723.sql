-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 28 2015 г., 17:23
-- Версия сервера: 5.5.46-0ubuntu0.12.04.2
-- Версия PHP: 5.3.10-1ubuntu3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `way`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dispatchers`
--

CREATE TABLE IF NOT EXISTS `dispatchers` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `fio` varchar(45) DEFAULT NULL,
  `passhash` varchar(64) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `passhash_UNIQUE` (`passhash`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `dispatchers`
--

INSERT INTO `dispatchers` (`id`, `login`, `fio`, `passhash`, `position`) VALUES
(1, 'admin', 'Админ Админович Админов', '$2y$13$QDMF9Fk1grI.Oz83j19/I.36YUUpaZ8knYqC3bn3b608q8XPbtvTG', 'Developer'),
(2, 'dispatcher', 'Василий Васильевич Васильев', '$2y$13$FFxsG3vmkvcIGTtS81XzZOT6TR/n51vdfTqWZ1P01XV0tvKPZBY3K', 'Dispatcher');

-- --------------------------------------------------------

--
-- Структура таблицы `equipages`
--

CREATE TABLE IF NOT EXISTS `equipages` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT,
  `fio1` varchar(45) DEFAULT NULL,
  `fio2` varchar(45) DEFAULT NULL,
  `in_route` tinyint(1) DEFAULT NULL COMMENT 'Engaged',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Team with two men - driver and courier' AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `equipages`
--

INSERT INTO `equipages` (`id`, `fio1`, `fio2`, `in_route`) VALUES
(1, 'Петров А.Б.', '', NULL),
(2, 'Иванов А.Б.', '', 1),
(3, 'Сидоров В.Е,', '', NULL),
(4, 'Коваль А.Н.', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(52) NOT NULL,
  `distance` int(6) DEFAULT '0' COMMENT 'Distance from msk',
  `duration` int(6) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL COMMENT 'Descript',
  `pathway` text COMMENT 'Pathway as GPS tracking in json',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='in hours' AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`, `distance`, `duration`, `description`, `pathway`) VALUES
(1, 'Санкт-Петербург', 700, 10, NULL, NULL),
(2, 'Уфа', 1400, 21, NULL, NULL),
(3, 'Нижний Новгород', 440, 7, NULL, NULL),
(4, 'Владимир', 200, 3, NULL, NULL),
(5, 'Кострома', 340, 6, NULL, NULL),
(6, 'Екатеринбург', 1800, 16, NULL, NULL),
(7, 'Ковров', 280, 5, NULL, NULL),
(8, 'Воронеж', 530, 8, NULL, NULL),
(9, 'Самара', 1100, 18, NULL, NULL),
(10, 'Астрахань', 1400, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `relation_trips_regions`
--

CREATE TABLE IF NOT EXISTS `relation_trips_regions` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT,
  `trip_id` bigint(21) unsigned DEFAULT NULL COMMENT 'trip_id',
  `region_id` bigint(21) unsigned DEFAULT NULL COMMENT 'region_id',
  PRIMARY KEY (`id`),
  KEY `fk_relation_trips_regions_trips1_idx` (`trip_id`),
  KEY `fk_relation_trips_regions_regions1_idx` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `id` bigint(21) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` bigint(21) unsigned DEFAULT NULL COMMENT 'region_id',
  `equipage_id` bigint(21) unsigned DEFAULT NULL COMMENT 'equipage_id',
  `start_date` date NOT NULL,
  `assigned_date` date DEFAULT NULL,
  `dispatcher_id` bigint(21) unsigned NOT NULL,
  `is_full` tinyint(1) DEFAULT NULL COMMENT 'is_full',
  PRIMARY KEY (`id`),
  KEY `fk_trips_equipage_idx` (`equipage_id`),
  KEY `fk_trips_dispatcher1_idx` (`dispatcher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Records about trips' AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `trips`
--

INSERT INTO `trips` (`id`, `region_id`, `equipage_id`, `start_date`, `assigned_date`, `dispatcher_id`, `is_full`) VALUES
(17, 1, 1, '2015-10-23', '2015-10-23', 1, 1),
(18, 6, 4, '2015-10-29', '2015-10-30', 1, 1),
(19, 6, 2, '2015-10-20', '2015-10-21', 1, 1),
(20, 3, 3, '2015-09-23', '2015-09-23', 1, 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `relation_trips_regions`
--
ALTER TABLE `relation_trips_regions`
  ADD CONSTRAINT `fk_relation_trips_regions_regions1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_relation_trips_regions_trips1` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `fk_trips_dispatcher1` FOREIGN KEY (`dispatcher_id`) REFERENCES `dispatchers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trips_equipage` FOREIGN KEY (`equipage_id`) REFERENCES `equipages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
