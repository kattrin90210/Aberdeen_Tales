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
-- Структура таблицы `stories`
--

CREATE TABLE `stories` (
  `id` int(12) NOT NULL,
  `title` varchar(512) NOT NULL,
  `author` int(12) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stories`
--

INSERT INTO `stories` (`id`, `title`, `author`, `content`, `image`, `date`, `status`) VALUES
(16, 'Castles', 16, 'GGGGG', '', '2022-03-25 16:14:52', 'publish'),
(17, 'Nature', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.\r\n', 'story-image-2.jpeg', '2022-03-25 16:18:20', 'publish'),
(18, 'Landscapes', 17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-4.jpeg', '2022-03-26 14:52:23', 'publish'),
(19, 'Castles', 18, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-1.jpeg', '2022-03-26 14:53:31', 'publish'),
(20, 'Houses', 19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-3.jpeg', '2022-03-26 14:54:50', 'publish'),
(21, 'Ships', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-5.jpeg', '2022-03-26 14:56:04', 'publish'),
(22, 'Red', 17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-6.jpeg', '2022-03-26 14:59:12', 'publish'),
(23, 'Shops', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-7.jpeg', '2022-03-26 15:00:07', 'publish'),
(24, 'Thunder', 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-8.jpeg', '2022-03-26 15:02:33', 'publish'),
(25, 'Amusement Park', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-9.jpeg', '2022-03-26 15:04:26', 'publish'),
(26, 'Forest', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-10.jpeg', '2022-03-26 15:06:24', 'publish'),
(27, 'Lighthouse', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-11.jpeg', '2022-03-26 15:07:50', 'publish'),
(28, 'Old city', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-12.jpeg', '2022-03-26 15:08:08', 'publish'),
(29, 'Boats', 22, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit eros at risus sollicitudin, a iaculis arcu faucibus. Ut varius est a enim iaculis, sed imperdiet risus rutrum. Integer tristique, enim id eleifend condimentum, nisi risus pharetra mauris, sit amet placerat turpis nulla in lacus. Quisque malesuada nulla lorem. Nunc egestas ante et rutrum sollicitudin. Cras accumsan consectetur lorem, nec volutpat ipsum dapibus non. Aliquam sit amet diam at nisi venenatis consectetur. Donec massa turpis, ultricies sed imperdiet ac, gravida at purus. Vestibulum volutpat, neque eget rhoncus aliquam, diam arcu consectetur leo, ultrices convallis eros ex eu nisi. Fusce ut tortor metus. Nullam vehicula sem sed est facilisis rhoncus. Duis a mauris vitae sem egestas euismod id in tortor. Vestibulum interdum, turpis in finibus sagittis, risus mi pulvinar ligula, id feugiat felis lacus vel neque. Nunc tempus vestibulum felis lacinia tempus.\r\n\r\nAliquam erat volutpat. Fusce et pellentesque justo. Donec augue diam, condimentum at porta nec, interdum nec nibh. Vivamus posuere sapien a nisl tempor, et tincidunt velit suscipit. Curabitur sit amet augue consectetur, laoreet sem sed, posuere diam. Ut a placerat urna. Praesent faucibus porta turpis sed gravida. Donec fermentum lorem turpis. Praesent malesuada et dolor consequat ullamcorper.\r\n\r\nPellentesque non eros metus. Ut bibendum laoreet turpis, eu ullamcorper nibh placerat eget. Sed euismod lorem mi, luctus ullamcorper quam luctus ac. Aliquam nunc ipsum, aliquet quis efficitur at, commodo quis lacus. Vivamus vitae orci a nunc tristique ullamcorper. Morbi rutrum vitae ligula at vehicula. Fusce ac arcu aliquam, vulputate tortor a, venenatis mi. Suspendisse ac rutrum arcu, sit amet tincidunt tortor. Aenean mattis risus orci, vel ullamcorper turpis consequat nec. Proin blandit iaculis felis non finibus.', 'story-image-9.jpeg', '2022-03-26 20:26:54', 'publish'),
(30, 'Castle', 25, 'Amazing!', 'story-image-10.jpeg', '2022-03-27 16:50:06', 'publish');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
