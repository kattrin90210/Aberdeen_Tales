-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 27 2022 г., 17:06
-- Версия сервера: 5.7.34
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kattrinc_app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `occupation` varchar(512) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `occupation`, `email`, `username`, `password`, `admin`) VALUES
(3, 'Ekaterina', 'manager', 'kattrin90210@inbox.ru', 'kattrin90210', '12345', 1),
(4, 'Maria', 'student', 'popova.lyubov@rambler.ru', '2008704', '3333333', 0),
(5, 'Ekaterina', '', 'popova.lyubov@rambler.ru', '2008704', '1111111', 0),
(7, 'Ekaterina', 'manager', 'popova.lyubov@rambler.ru', 'EkaterinaPes', '11111', 0),
(8, 'Ekaterina', 'student', 'popova.lyubov@rambler.ru', 'kkkkk', '11111', 0),
(9, 'Ekaterina', 'student', 'popova.lyubov@rambler.ru', 'kkkkk', '11111', 0),
(10, 'ElenaK', 'sales', 'kkkkkk@yandex.ru', 'Elena', '22222', 0),
(11, 'Nikita', 'linguist', 'popova.lyubov@rambler.ru', 'Nik', '12345', 0),
(12, 'Ekaterina', 'student', 'kattrin90210@inbox.ru', 'kat', '33333', 0),
(13, 'Maria', 'student', 'kattrin90210@inbox.ru', 'Mar', '11111', 0),
(14, 'Kat', 'student', 'kattrin90210@inbox.ru', 'Kate', '11111', 0),
(15, 'Gloria', 'linguist', 'popova.lyubov@rambler.ru', 'Glo', 'Glo', 0),
(16, 'Irina', 'student', 'popova.lyubov@rambler.ru', 'IrinaS', '00000', 0),
(17, 'Lana', 'singer', 'lana@delray.com', 'Lana', '11111', 0),
(18, 'Antonio', 'actor', 'antonio@banderas.com', 'Antonio', '22222', 0),
(19, 'Kristina', 'model', 'kristina@ricci.com', 'Kristina', '33333', 0),
(20, 'Vladimir', 'president', 'vladimir@zelen.com', 'Vladimir', '44444', 0),
(21, 'Leonig', 'singer', 'leonid@agutin.com', 'Leonid', '55555', 0),
(22, 'Lol', 'student', 'lol@inbox.ru', 'Lol', '99999', 0),
(23, 'Laura', 'singer', 'laura@mail.ru', 'Laura', '11111', 0),
(24, 'Lina', 'student', 'lina@mail.ru', 'Lina', '11111', 0),
(25, 'Lika', 'singer', 'lika@mail.ru', 'lika', '99999', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
