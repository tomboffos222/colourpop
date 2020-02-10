-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 24 2019 г., 10:25
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
(9, 'Callabs', 'https://cdn.shopify.com/s/files/1/1338/0845/files/Colourpop-0820-0188_550x.jpg?82690', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `child_cats`
--

CREATE TABLE `child_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_cat` varchar(255) NOT NULL,
  `order_cat` int(255) NOT NULL,
  `parent_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `child_cats`
--

INSERT INTO `child_cats` (`id`, `name`, `image_cat`, `order_cat`, `parent_cat`) VALUES
(3, 'Jelly Much Shadow\r\n', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Jelly_Much_Shadow_550x.jpg?v=1567204602', 1, 'Eyes'),
(5, 'super chock shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/freeshadowpromo_550x.jpg?v=1557862062', 1, 'Eyes'),
(6, 'pressed powder shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/0920_550x.jpg?v=1567549101', 1, 'Eyes'),
(7, 'loose shadow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Loose_Shadow_550x.jpg?v=1567204650', 1, 'Eyes'),
(8, 'eyeliner', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/liner_550x.png?v=1567204571', 1, 'Eyes'),
(9, 'mascara', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Mascara_550x.jpg?v=1564681605', 1, 'Eyes'),
(10, 'brow', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/BROWS-Category_800pix-800pix_550x.jpg?v=1564680992', 1, 'Eyes'),
(11, 'sets', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Sets_550x.jpg?v=1557862607', 1, 'Eyes'),
(12, 'Eyeshadow palletes', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Eyes-Shadow_Palette_970d8d30-44d4-4cba-81ad-68625e40dce0_550x.jpg?v=1567200682', 0, 'Eyes'),
(13, 'foundation', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/CP_No_Filter_Sticks_332_R_550x.jpg?v=1569375665', 1, 'Face'),
(14, 'concealer', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/PFconcealersSquareCrop-copyv10_550x.jpg?v=1572971708', 1, 'Face'),
(15, 'primer & setting spray', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Category-Face-Primer_And_Setting_Spray_550x.jpg?v=1569508244', 1, 'Face'),
(16, 'powder', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/blotting-powder-swipes_550x.jpg?v=1569436551', 1, 'Face'),
(17, 'highlighter', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/highlighter-category_550x.jpg?v=1557863412', 1, 'Face'),
(18, 'blush & bronzer', 'https://cdn.shopify.com/s/files/1/1338/0845/collections/Cheek_Colour_Collection_Menu_Image_550x.jpg?v=1557863462', 1, 'Face');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `props` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `cat`, `price`, `img`, `old_price`, `description`, `status`, `img_2`, `props`) VALUES
(1, 'whatever', 'Eyeshadow palletes', 1, 'https://cdn.shopify.com/s/files/1/1338/0845/products/whatever_1_340x.jpg?v=1568780270', '$18', 'can u call it the palette of the season?duh', 1, '', ''),
(2, 'whatever', 'Eyeshadow Palletes', 44.4, 'https://cdn.shopify.com/s/files/1/1338/0845/products/PFconcealersSquareCrop-copyv4_680x.jpg?v=1572917178', '$18', 'can u call it the palette of the season?duh', 1, 'https://cdn.shopify.com/s/files/1/1338/0845/products/Pretty-Fresh-Prime-and-Set-Kit-copy_800x1200.jpg?v=1569457822', 'cool and icy palette with hints of rich colour, just like your fave ice queen ❄️\r\n'),
(3, 'whatever', 'Eyeshadow palletes', 144.4, 'https://cdn.shopify.com/s/files/1/1338/0845/products/no-filter-concealer_1_680x.jpg?v=1569375923', '$18', 'can u call it the palette of the season?duh', 1, '', ''),
(4, 'whatever', 'Eyeshadow palletes', 4, 'https://cdn.shopify.com/s/files/1/1338/0845/products/Pretty-Fresh-Precision-Blending-Sponge-LG_A2_680x.jpg?v=1572918180', '$18', 'can u call it the palette of the season?duh', 1, '', ''),
(5, 'whatever', 'Brushes', 14, 'https://cdn.shopify.com/s/files/1/1338/0845/products/Primer-Cap-On_680x.jpg?v=1569457802', '$18', 'can u call it the palette of the season?duh', 1, '', ''),
(6, 'whatever', 'Brushes', 14, 'https://cdn.shopify.com/s/files/1/1338/0845/products/Setting-Mist-cap-on_680x.jpg?v=1569457832', '$18', 'can u call it the palette of the season?duh', 1, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `child_cats`
--
ALTER TABLE `child_cats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `child_cats`
--
ALTER TABLE `child_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
