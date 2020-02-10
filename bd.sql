-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 21 2019 г., 05:57
-- Версия сервера: 5.7.26
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `colourpop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_cat` varchar(255) NOT NULL,
  `order_cat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cats`
--

INSERT INTO `cats` (`id`, `name`, `image_cat`, `order_cat`) VALUES
(1, 'Eyes', 'https://cdn.shopify.com/s/files/1/1338/0845/files/Spring_palette_550x.jpg?82690', 0),
(2, 'Face', 'https://cdn.shopify.com/s/files/1/1338/0845/files/Category-Shop-Face_550x.jpg?82690', 0),
(3, 'Build Your Own Pallete', 'https://cdn.shopify.com/s/files/1/1338/0845/files/g_sqrd_4_550x.jpg?82690', 0),
(4, 'Brushes', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/brushes_w-out_bag_99567c58-e70f-47ba-b309-2e468634ef46_550x.png?v=1567636830', 0),
(5, 'Sets & Bundles', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Shop-Sets_And_Bundles_550x.jpg?v=1567199703', 0),
(6, 'Lips', 'https://cdn.shopify.com/s/files/1/1338/0845/files/Category-Shop-Lips_550x.jpg?82690', 0),
(7, 'Fourth Ray Beauty', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Shop-Fourth_Ray_Beauty_550x.jpg?v=1570052652', 0),
(8, 'Sol Body', 'https://cdn.shopify.com/s/files/1/1338/0845/files/lapetitechicmommy_550x.jpeg?82690', 0),
(9, 'Callabs', 'https://cdn.shopify.com/s/files/1/1338/0845/files/Colourpop-0820-0188_550x.jpg?82690', 0),
(10, 'Jelly Much Shadow\r\n', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Jelly_Much_Shadow_550x.jpg?v=1567204602', 1),
(11, 'eyeshadow pattern', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Shadow_Palette_970d8d30-44d4-4cba-81ad-68625e40dce0_550x.jpg?v=1567200682', 1),
(12, 'super chock shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/freeshadowpromo_550x.jpg?v=1557862062', 1),
(13, 'pressed powder shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/0920_550x.jpg?v=1567549101', 1),
(14, 'loose shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Loose_Shadow_550x.jpg?v=1567204650', 1),
(15, 'eyeliner', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/liner_550x.png?v=1567204571', 1),
(16, 'mascara', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Mascara_550x.jpg?v=1564681605', 1),
(17, 'brow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/BROWS-Category_800pix-800pix_550x.jpg?v=1564680992', 1),
(18, 'sets', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Sets_550x.jpg?v=1557862607', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
