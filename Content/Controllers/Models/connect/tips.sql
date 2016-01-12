-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 12 2016 г., 20:00
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tips`
--

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(5) unsigned NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'C/C++'),
(2, 'CSS'),
(3, 'HTML'),
(4, 'JavaScript'),
(5, 'PHP'),
(6, 'SQL');

-- --------------------------------------------------------

--
-- Структура таблицы `tips_block`
--

CREATE TABLE IF NOT EXISTS `tips_block` (
  `id` int(11) NOT NULL,
  `id_tips` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `texts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `tips_name`
--

CREATE TABLE IF NOT EXISTS `tips_name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creates` datetime DEFAULT NULL,
  `users` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `tips_type`
--

CREATE TABLE IF NOT EXISTS `tips_type` (
  `ID` int(11) NOT NULL,
  `types` varchar(50) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tips_block`
--
ALTER TABLE `tips_block`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tips_name`
--
ALTER TABLE `tips_name`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tips_type`
--
ALTER TABLE `tips_type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `tips_block`
--
ALTER TABLE `tips_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tips_name`
--
ALTER TABLE `tips_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tips_type`
--
ALTER TABLE `tips_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
