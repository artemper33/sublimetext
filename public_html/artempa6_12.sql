-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 19 2022 г., 23:04
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `artempa6_12`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_users`
--
-- Создание: Май 16 2022 г., 17:06
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'adminpanel', 0, 'youremail@gmail.com', '1112224455', 1),
(10, 'admin2', 'coding', 1, 'example@gmail.com', '2223339900', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `hot`
--
-- Создание: Май 22 2022 г., 15:48
--

DROP TABLE IF EXISTS `hot`;
CREATE TABLE `hot` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hot`
--

INSERT INTO `hot` (`id`, `image`, `title`, `price`) VALUES
(1, 'classes/img/tovar.png', 'sdasds', 12),
(2, 'classes/img/tovar.png', 'мишка', 12),
(3, 'classes/img/tovar.png', 'мишка', 12),
(4, 'classes/img/tovar.png', 'мишка', 12),
(5, 'classes/img/tovar.png', 'мишка', 12),
(6, 'classes/img/tovar.png', 'мишка', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--
-- Создание: Май 16 2022 г., 17:08
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `image`, `title`, `price`) VALUES
(1, 'classes/img/tovar.png', 'Чебурашка', 10),
(2, 'classes/img/tovar.png', 'Мартышка', 11),
(3, 'classes/img/tovar.png', 'sdsd', 232),
(4, 'classes/img/tovar.png', 'dsd', 32),
(6, 'classes/img/tovar.png', 'Аська', 200);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Май 20 2022 г., 08:01
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'Иванов Иван Иванович', 'test', 'test@local.ru', '202cb962ac59075b964b07152d234b70', 'uploads/15698233144.png'),
(4, 'asdsadsa', 'sadsadsa', 'sadsadsa@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/1653034416'),
(5, 'sadasdsa', 'sadasdsa', 'sadasdsa@mail.ru', '63353ad9ce5e933838e5d2cd7758a3b4', 'uploads/1653034441'),
(6, 'sadasd', 'sadasdsa', 'sadasdsa@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/1653214216'),
(7, 'dasdsa', 'dasdsa', 'dasdsa@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/1653234104Снимок экрана 2022-03-25 214652.png'),
(8, 'asdasdsa', 'asdasdsa', 'asdasdsa@mail.ru', 'e93ccf5ffc90eefcc0bdb81f87d25d1a', 'uploads/1653235429IMG_7898 (1).avi'),
(9, 'asdsadas', 'asdsadas', 'asdsadas@mail.ru', '630faa05ea22c48ed5c4b16ad64f6dfa', 'uploads/1653251784tovar.png'),
(10, 'счсчсч', 'xcxcxc', 'xcxcxc@mail.ru', '683e29ac95b27502229168ef318cb3ad', 'uploads/1653234104Снимок экрана 2022-03-25 214652.png'),
(11, 'sadfasdsa', 'sadfasdsa', 'sadfasdsa@mail.ru', '66e9006c5ae4897b3d5f045cab4ac0e7', 'uploads/165462121720220124211623.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hot`
--
ALTER TABLE `hot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hot`
--
ALTER TABLE `hot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
