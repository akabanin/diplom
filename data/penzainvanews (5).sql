-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 24 2020 г., 11:15
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `penzainvanews`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `extinf`
--

CREATE TABLE `extinf` (
  `iduser` int(11) NOT NULL,
  `patronymic` varchar(30) NOT NULL,
  `idsex` int(11) NOT NULL,
  `birthsday` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adres` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` varchar(360) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `date`) VALUES
(1, 'фыв', 'В пензе прошли соревнования', '2020-03-04 18:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `newscategory`
--

CREATE TABLE `newscategory` (
  `idnews` int(100) NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `link`) VALUES
(1, 'pan.png');

-- --------------------------------------------------------

--
-- Структура таблицы `photouser`
--

CREATE TABLE `photouser` (
  `iduser` int(11) NOT NULL,
  `idphoto` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `picture`
--

CREATE TABLE `picture` (
  `id` int(255) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `picture`
--

INSERT INTO `picture` (`id`, `link`) VALUES
(1, 's800.jpeg'),
(2, 's801.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `picturenews`
--

CREATE TABLE `picturenews` (
  `idnews` int(100) NOT NULL,
  `idpicture` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `picturenews`
--

INSERT INTO `picturenews` (`idnews`, `idpicture`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `sod` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `sod`, `time`) VALUES
(1, 'gobread', '2020-01-03 11:40:00'),
(2, 'asd', '2020-02-27 01:02:00'),
(3, 'Ñ„Ñ‹Ð²Ð°Ð¿Ñ€Ð¾', '2020-03-05 00:00:00'),
(4, 'Ñ„Ñ‹Ð²Ð°Ð¿Ñ€Ð¾', '2020-03-05 00:00:00'),
(5, 'Ñ„Ñ‹Ð²Ð°Ð¿Ñ€', '2020-03-26 00:00:00'),
(6, 'ФЫВАП', '2020-03-19 00:00:00'),
(7, 'Ð¯Ð§Ð¡ÐœÐ˜', '2020-03-05 01:00:00'),
(8, 'ЯЧСМ', '2020-03-13 01:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'disabled'),
(2, 'volunteer'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'ППППП', 'lastname', '', 'edcef'),
(2, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'lastname', 'dr@yandex.ru', 'edcef'),
(3, 'Ð¤Ñ‘Ð´Ð¾Ñ€', 'lastname', 'fedordyadya@yandex.ru', 'fffg'),
(4, 'Ð¤Ñ‘Ð´Ð¾Ñ€', 'Ð”ÑÐ´Ñ', 'fedordyadya@yandex.ru', 'fffg'),
(5, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(6, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(7, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(8, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(9, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(10, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(11, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(12, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(13, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(14, 'Ð¡ÐµÑ€Ð³ÐµÐ¹', 'Ð¡0ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡', 'serega@mail.ru', 'sersdfs'),
(15, 'Dad', 'Dadov', 'sad', 'Dad@mail.ru'),
(16, 'Dad', 'Dadov', 'sad', 'Dad@mail.ru'),
(17, 'Dad', 'Dadov', 'sad', 'Dad@mail.ru'),
(18, 'Dad', 'fedorov', 'rog', 'fedor@yandex.ru'),
(19, 'Dad', 'fedorov', 'rog', 'fedor@yandex.ru'),
(20, 'Dad', 'fedorov', 'rog', 'fedor@yandex.ru'),
(21, 'Dad', 'fedorov', 'fedor@yandex.ru', 'rog'),
(22, 'Alex', 'Kabanin', 'kaban@yandex.ru', '1998'),
(23, 'Tatyana', 'Kabanina', 'tanya@yandex.ru', 'sroe'),
(24, 'Fedor', 'Grigoriyv', 'fg@mail.com', 'fgg'),
(25, 'sasha', 'ivanov', 'aaskd@eso.ru', 'edwedp'),
(26, 'sura', 'surov', 'surq@mail.com', 'sdsd'),
(27, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'ÐšÐ°Ð±Ð°Ð½Ð¸Ð½', 'alexandr.kabanin@yandex.ru', '89374010161'),
(28, 'Alexandr', 'Kabanin', 'alexandr.kabanin@mail.com', '89374010161'),
(29, 'ÐºÐµÐ½', 'Ð°Ð¿Ñ€Ð¾', 'fgh@dfgh.rty', 'erty'),
(30, 'xcv', 'dfg', 'fg@sdf.s', 'asdf'),
(31, 'dfg', 'tyu', 'gh', 'ghj'),
(32, 'Александр', 'Кабанин', 'sdgs@ffcaz.com', 'rttethoewr'),
(33, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'ÐšÐ°Ð±Ð°Ð½Ð¸Ð½', 'drkabanin@yandex.ru', '89374010161'),
(34, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð•Ð³Ð¾Ñ€Ð¾Ð²', 'egorov@yandex.ru', 'asd'),
(35, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð•Ð³Ð¾Ñ€Ð¾Ð²', 'egorov1@yandex.ru', 'asd'),
(36, 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€', 'Ð•Ð³Ð¾Ñ€Ð¾Ð²', 'egorov2@yandex.ru', 'asd'),
(37, 'Ñ„Ñ‹Ð²', 'Ñ„Ñ‹Ð²', 'fedoÐ²Ð²r@yandex.ru', 'Ñ„Ñ‹Ð²');

-- --------------------------------------------------------

--
-- Структура таблицы `usernews`
--

CREATE TABLE `usernews` (
  `iduser` int(11) NOT NULL,
  `idnews` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userole`
--

CREATE TABLE `userole` (
  `iduser` int(11) NOT NULL,
  `idrole` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userole`
--

INSERT INTO `userole` (`iduser`, `idrole`) VALUES
(25, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `userrequest`
--

CREATE TABLE `userrequest` (
  `iduser` int(11) NOT NULL,
  `idrequest` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
