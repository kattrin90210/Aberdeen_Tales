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
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(12) NOT NULL,
  `date` date NOT NULL,
  `message` longtext NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `date`, `message`, `email`, `name`) VALUES
(1, '2022-03-26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'melissa@gmail.com', 'Melissa'),
(2, '2022-03-26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'susanna@gmail.com', 'Susanna'),
(3, '2022-03-26', 'Thank you for stories!!!', 'olga@inbox.ru', 'Olga'),
(4, '2022-03-27', 'Thank you!', 'mary@inbox.ru', 'Mary'),
(5, '2022-03-27', 'KKKKKK', 'popova.lyubov@rambler.ru', 'LA');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
