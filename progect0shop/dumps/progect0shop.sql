-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 08 2022 р., 20:39
-- Версія сервера: 8.0.19
-- Версія PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `progect0shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `action`
--

CREATE TABLE `action` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `min_description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img1` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img2` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img3` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `search` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name_categori` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `action`
--

INSERT INTO `action` (`id`, `name`, `price`, `description`, `min_description`, `size`, `size2`, `size3`, `size4`, `color`, `color2`, `color3`, `img1`, `img2`, `img3`, `img4`, `img5`, `search`, `date`, `name_categori`) VALUES
(1, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/1.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2022-01-23', 'panties'),
(2, 'Трусики', '400$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', 'XX', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2022-01-20', 'panties'),
(3, 'Трусики', '9999$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(4, 'Трусики', '9999$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', 'XX', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2022-01-20', 'panties'),
(5, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'bluev', '', '/static/images/product/3.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(6, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(7, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', '', 'blec', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(8, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(9, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(10, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(11, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', '', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(12, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(13, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '/static/images/2.jpg', '', '', '', 'Комплект комплект жіноча білизна фул', '2022-01-23', 'set'),
(14, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(15, 'Ліфчик', '150$', 'Модель на каркасах с широким гладким станом, который продублирован сеткой, гарантирует максимальную поддержку и абсолютный комфорт во время носки. Треугольная форма чашек плавно переходящая в бретели обеспечивает отличную поддержку и фиксацию груди. Нижняя часть чашки имеет специальный «карман» из х/б материала для дополнительных вкладышей. Бретели леотард (leotard) - на спинке фиксируются по центру изделия, что позволяет носить его под одеждой с более открытой спиной. Бретели несъемные, регулируемые. Такая модель приподнимает грудь и визуально увеличивает ее размер. Подходит для небольших и средних полнот.\r\n\r\nЧашка: push up. Чашка: на косточках. Бретели: широкие (от 13 мм). Классика / мода: мода. Особенности ткани: кружево. Упаковка: пакет. Полнота размера: полноразмерный. Push up эффект: средний. Тип товара: бюстгальтер. Картонная бирка: да. Особенности: комбинированный цвет. Бретели: тканевые. Застежка: крючки. Вид бюстгальтера: push up. Декор: кулон', 'Бюстгальтер push-up Effetto 70B Чёрный', 'S', 'L', 'XL', '', 'red', '', '', '/static/images/category/buyst.jpg', '', '', '', '', 'Бюстгалтер \r\nЖіноча білизна ліфчик', '2021-11-20', 'bras'),
(18, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/bra/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(19, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/bra/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2021-11-18', 'panties');

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hash` text,
  `ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `hash`, `ip`) VALUES
(7, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', '991eb26741b30bf247b55b96e4c382e3', '2130706433');

-- --------------------------------------------------------

--
-- Структура таблиці `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `id_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sizepro` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `desk` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `namep` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `basket`
--

INSERT INTO `basket` (`id`, `ip`, `id_product`, `sizepro`, `color`, `foto`, `desk`, `namep`, `price`, `name`, `surname`, `phone`, `address`) VALUES
(27, '127.0.0.1', '17', 'S', 'red', '/static/images/category/buyst.jpg', 'Бюстгальтер push-up Effetto 70B Чёрный', 'Ліфчик', '150$', 'Олег Журавський', 'Журавський', '0936175819', 'Зарічна 7,'),
(28, '127.0.0.1', '10', 'S', 'red', '/static/images/set/1.jpg', 'Комплект жіночої білизни', 'Комплект жіночої білизни', '450$', 'Олег Журавський', 'Журавський', '0936175819', 'Зарічна 7,'),
(29, '127.0.0.1', '3', 'S', 'red', '/static/images/product/1.jpg', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'Трусики', '9999$', 'Олег Журавський', 'Журавський', '0936175819', 'Зарічна 7,'),
(30, '127.0.0.1', '2', 'S', 'red', '/static/images/product/2.jpg', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'Трусики', '400$', 'Олег Журавський', 'Журавський', '0936175819', 'Зарічна 7,'),
(31, '127.0.0.1', '2', 'S', 'red', '/static/images/product/1.jpg', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'Трусики', '400$', NULL, NULL, NULL, NULL),
(32, '127.0.0.1', '2', 'S', 'red', '/static/images/product/1.jpg', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'Трусики', '400$', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `url_category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `name`, `url_category`, `img`) VALUES
(1, 'Бюстгальтер', 'bra', '/static/images/category/buyst.jpg'),
(2, 'Трусики', 'panties', '/static/images/category/trp.jpg'),
(3, 'Комплект', 'set', '/static/images/category/complect.jpg'),
(4, 'Спорт', 'sport', '');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `min_description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `size4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `color3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img1` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img2` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img3` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `search` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name_categori` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `min_description`, `size`, `size2`, `size3`, `size4`, `color`, `color2`, `color3`, `img1`, `img2`, `img3`, `img4`, `img5`, `search`, `date`, `name_categori`) VALUES
(1, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/bra/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(2, 'Трусики', '400$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', 'XX', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2022-01-20', 'panties'),
(3, 'Трусики', '9999$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(4, 'Трусики', '9999$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', 'XX', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2022-01-20', 'panties'),
(5, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'bluev', '', '/static/images/product/3.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(6, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(7, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', '', 'blec', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(8, 'Трусики', '9999$', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть дискомфорту', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/product/1.jpg', '', '', '', '', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(9, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(10, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(11, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', '', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(12, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(13, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(14, 'Комплект жіночої білизни', '450$', 'Комплект жіночої білизни від тм Milady (Білорусь) виконаний з еластичної мікрофібри. Бюстгальтер рush up з карманом для вставок, внутрішня частина чашки бавовна. Бретелі щільно пришиті і регулюються по довжині. Застібка на один гачок з вибором із трьох позицій.\r\nСклад: 40% поліамід, 31% бавовна, 9% еластан, 20% віскоза.', 'Комплект жіночої білизни', 'S', 'L', 'XL', '', 'red', '', 'black', '/static/images/set/1.jpg', '', '', '', '', 'Комплект комплект жіноча білизна фул', '2021-11-20', 'set'),
(15, 'Ліфчик', '150$', 'Модель на каркасах с широким гладким станом, который продублирован сеткой, гарантирует максимальную поддержку и абсолютный комфорт во время носки. Треугольная форма чашек плавно переходящая в бретели обеспечивает отличную поддержку и фиксацию груди. Нижняя часть чашки имеет специальный «карман» из х/б материала для дополнительных вкладышей. Бретели леотард (leotard) - на спинке фиксируются по центру изделия, что позволяет носить его под одеждой с более открытой спиной. Бретели несъемные, регулируемые. Такая модель приподнимает грудь и визуально увеличивает ее размер. Подходит для небольших и средних полнот.\r\n\r\nЧашка: push up. Чашка: на косточках. Бретели: широкие (от 13 мм). Классика / мода: мода. Особенности ткани: кружево. Упаковка: пакет. Полнота размера: полноразмерный. Push up эффект: средний. Тип товара: бюстгальтер. Картонная бирка: да. Особенности: комбинированный цвет. Бретели: тканевые. Застежка: крючки. Вид бюстгальтера: push up. Декор: кулон', 'Бюстгальтер push-up Effetto 70B Чёрный', 'S', 'L', 'XL', '', 'red', '', '', '/static/images/category/buyst.jpg', '', '', '', '', 'Бюстгалтер \r\nЖіноча білизна ліфчик', '2021-11-20', 'bras'),
(18, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/bra/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2021-11-18', 'panties'),
(19, 'Трусики', '123$', 'Эротические трусики женские стринги - отличная возможность порадовать своего мужчину, пробудить интерес, разжечь угасший огонь. Подходят как для ежедневной носки, так и для романтических вечеров. Для завершения образа можно приобрести дополнительно чулки и кружевную маску.', 'Виготовлені з легкої бавовни яка ідеально ляже на ваше тіло і не задасть', 'S', 'L', 'XL', '', 'red', 'blue', '', '/static/images/product/1.jpg', '/static/images/bra/2.jpg', '/static/images/bra/3.jpg', '/static/images/bra/4.jpg', '/static/images/bra/5.jpg', 'Трусики труси нижня білизна', '2021-11-18', 'panties');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surnames` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dateuser` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hash` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `surnames`, `email`, `login`, `password`, `ip`, `dateuser`, `hash`) VALUES
(15, 'Олег', 'Журавський', 'oleg.khorobriv@gmail.com', 'test11', '469f91babc1a0a5f5e484e31024285d1', '2130706433', '02-12-2021', '656f629805be2b7788b18617ef0bf780'),
(16, 'Олег Журавський', 'dsddfgsgdf', 'oleg.khorobriv@gmail.com', 'sdhfghgfh', '7513204df5710687ea54cd73734900a5', '127.0.0.1', '12-12-2021', NULL),
(17, 'Олег Журавський', 'Журавський', 'oleg.khorobriv@gmail.com', 's', 'c9b164f80871028d6ca454a86242cb55', '127.0.0.1', '12-12-2021', NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `action`
--
ALTER TABLE `action`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблиці `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
