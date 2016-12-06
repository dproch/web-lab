-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2016 г., 12:36
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `web_lab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `uri`, `filename`, `alt`, `title`, `type`, `updated_at`, `created_at`) VALUES
(4, 'images/origin/1481014039_607702.png', '1481014039_607702.png', 'ук', 'Феодосия достопримечательности', NULL, '2016-12-06 09:47:19', '2016-12-06 09:47:19'),
(5, 'images/origin/1481014426_Hydrangeas.jpg', '1481014426_Hydrangeas.jpg', 'sdfsdfsdf', 'Страница недвижимости', NULL, '2016-12-06 09:53:46', '2016-12-06 09:53:46'),
(6, 'images/origin/1481014436_Penguins.jpg', '1481014436_Penguins.jpg', 'sd', 'Коктебель', NULL, '2016-12-06 09:53:56', '2016-12-06 09:53:56'),
(7, 'images/origin/1481014708_Jellyfish.jpg', '1481014708_Jellyfish.jpg', 'ertetert', 'Феодосия достопримечательности', NULL, '2016-12-06 09:58:28', '2016-12-06 09:58:28'),
(8, 'images/origin/1481014727_Chrysanthemum.jpg', '1481014727_Chrysanthemum.jpg', '6', 'tyu', NULL, '2016-12-06 09:58:47', '2016-12-06 09:58:47');

-- --------------------------------------------------------

--
-- Структура таблицы `main_menu`
--

CREATE TABLE IF NOT EXISTS `main_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `route` text NOT NULL,
  `html_id` text NOT NULL,
  `html_class` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `main_menu`
--

INSERT INTO `main_menu` (`id`, `pid`, `title`, `route`, `html_id`, `html_class`) VALUES
(1, 0, 'Главаная', 'site/index', '', ''),
(2, 0, 'Пользователи', 'site/users', '', ''),
(3, 0, 'Галерея', 'images/index', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `info`, `updated_at`, `created_at`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668', 'Description', '2016-02-25 08:48:00', '2016-02-25 08:48:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
