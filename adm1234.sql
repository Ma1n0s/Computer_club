-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2024 г., 08:18
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `adm1234`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carts`
--

CREATE TABLE `carts` (
  `id_cart_product` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `carts`
--

INSERT INTO `carts` (`id_cart_product`, `id_user`, `id_product`) VALUES
(201, 1, 15),
(225, 7, 4),
(226, 1, 5),
(227, 3, 3),
(228, 3, 2),
(229, 9, 2),
(230, 9, 5),
(231, 9, 2),
(232, 9, 2),
(267, 1, 13),
(268, 11, 13),
(269, 11, 14);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Vip место'),
(2, 'Обычное место');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id_order` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id_order`, `id_user`, `id_product`, `Name`, `Surname`, `Telephone`, `Email`) VALUES
(1, 3, 3, 'kirill', '213', '+79345634643', ''),
(9, 3, 3, 'kirill', '123', '+7934563464', ''),
(10, 3, 3, 'kirill', '123', '+7934563464', ''),
(11, 9, 5, 'Кирилл', 'Филимонов', '', ''),
(12, 8, 8, 'kirill1', 'kirill1', '', ''),
(13, 8, 8, 'kirill1', 'kirill1', '', ''),
(14, 8, 8, 'kirill1', 'kirill1', '', ''),
(15, 8, 8, 'kirill1', 'kirill1', '', ''),
(16, 8, 8, 'kirill1', 'kirill1', '', ''),
(17, 8, 8, 'kirill1', 'kirill1', '', ''),
(18, 8, 8, 'kirill1', 'kirill1', '', ''),
(19, 8, 8, 'kirill1', 'kirill1', '', ''),
(20, 8, 8, 'kirill1', 'kirill1', '', ''),
(21, 8, 8, 'kirill1', 'kirill1', '', ''),
(22, 8, 8, 'kirill1', 'kirill1', '', ''),
(23, 8, 8, 'kirill1', 'kirill1', '', ''),
(24, 8, 8, 'kirill1', 'kirill1', '', ''),
(25, 8, 8, 'kirill1', 'kirill1', '', ''),
(26, 8, 8, 'kirill1', 'kirill1', '', ''),
(27, 8, 8, 'kirill1', 'kirill1', '', ''),
(28, 8, 8, '', 'kirill1', '', ''),
(29, 8, 8, 'kirill1', 'kirill1', '', ''),
(30, 8, 8, 'kirill1', 'kirill1', '8902545543', '123@mail.ru'),
(31, 8, 8, 'kirill1', 'kirill1', '123', '123@mail.ru'),
(32, 8, 8, 'kirill1', 'kirill1', '123', '123@mail.ru'),
(33, 8, 8, 'kirill1', 'kirill1', '', ''),
(34, 8, 8, 'kirill1', 'kirill1', '', ''),
(35, 8, 8, 'kirill1', 'kirill1', '', ''),
(36, 8, 8, 'kirill1', 'kirill1', '', ''),
(37, 8, 8, 'kirill1', 'kirill1', '', ''),
(38, 8, 8, 'kirill1', 'kirill1', '123', ''),
(39, 8, 8, 'kirill1', 'kirill1', '', ''),
(40, 8, 9, 'kirill1', 'kirill1', '', ''),
(41, 11, 8, 'Егор', 'Щенников', '123', '123@mail.ru'),
(42, 11, 8, 'Егор', 'Щенников', '', ''),
(43, 11, 8, 'Егор', 'Щенников', '8902545543', '123@mail.ru'),
(44, 11, 8, 'Егор', 'Щенников', '', ''),
(45, 11, 8, 'Егор', 'Щенников', '', ''),
(46, 11, 8, 'Егор', 'Щенников', '', ''),
(47, 11, 9, 'Егор', 'Щенников', '', ''),
(48, 11, 11, 'Егор', 'Щенников', '', ''),
(49, 11, 8, 'Егор', 'Щенников', '', ''),
(50, 11, 7, 'Егор', 'Щенников', '', ''),
(51, 11, 9, 'Егор', 'Щенников', '', ''),
(52, 11, 14, 'Егор', 'Щенников', '5555', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `title` varchar(1024) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(1024) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `category_id` int NOT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `title`, `price`, `description`, `img`, `category_id`, `sale`, `new`) VALUES
(15, 'Столик №1', 500, 'Столик №1 является обычным местом.\r\n\r\nХарактеристики компьютера:\r\nПроцессор: intel Core i5-10400F\r\n\r\nВидеокарта: NVIDIA GeForce RTX 2060 6 Gb\r\n\r\nОперативная память 16 Gb DDR4\r\n\r\nЖёсткий диск SSD\r\n', 'cover-4.jpg', 2, NULL, 1),
(16, 'Столик №2', 1000, 'Столик №1 является обычным местом.\r\n\r\nХарактеристики компьютера:\r\nПроцессор: intel Core i5-10400F\r\n\r\nВидеокарта: NVIDIA GeForce RTX 3060 6 Gb\r\n\r\nОперативная память 16 Gb DDR4\r\n\r\nЖёсткий диск SSD\r\n', 'cover-4.jpg', 1, NULL, 1),
(17, 'Столик №3', 550, 'Столик №1 является обычным местом.\r\n\r\nХарактеристики компьютера:\r\nПроцессор: intel Core i5-10400F\r\n\r\nВидеокарта: NVIDIA GeForce RTX 2060 6 Gb\r\n\r\nОперативная память 16 Gb DDR4\r\n\r\nЖёсткий диск SSD\r\n', '4c1d1345a6d54f401e2732c3c3d017ca5ef2fed3c75df237756947.jpg', 2, 1, NULL),
(18, 'Столик №4', 500, 'Столик №1 является обычным местом.\r\n\r\nХарактеристики компьютера:\r\nПроцессор: intel Core i5-10400F\r\n\r\nВидеокарта: NVIDIA GeForce RTX 2060 6 Gb\r\n\r\nОперативная память 16 Gb DDR4\r\n\r\nЖёсткий диск SSD\r\n', '45-2-arttim-pro-sravnenie-1200x800.jpg', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `user` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`, `role`, `Name`, `Surname`, `Telephone`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'administrator', '', '', ''),
(3, 'kirill', 'd9b1d7db4cd6e70935368a1efb10e377', 'user', 'kirill', '123', '+7934563464'),
(8, 'kirill1', '202cb962ac59075b964b07152d234b70', 'user', 'kirill1', 'kirill1', ''),
(9, 'kirill123', '202cb962ac59075b964b07152d234b70', 'user', 'Кирилл', 'Филимонов', ''),
(10, 'user6', 'd9b1d7db4cd6e70935368a1efb10e377', 'user', '123', '123', ''),
(11, 'egor', '202cb962ac59075b964b07152d234b70', 'user', 'Егор', 'Щенников', '5555'),
(12, 'user', '202cb962ac59075b964b07152d234b70', 'user', '123', '123', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart_product`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
