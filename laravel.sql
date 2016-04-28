-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2015 г., 08:49
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callme`
--

CREATE TABLE IF NOT EXISTS `callme` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `callme_email_unique` (`email`),
  UNIQUE KEY `callme_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `comments_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `username`, `phone`, `body`, `created_at`, `updated_at`) VALUES
(5, 'admin', '8003210', 'I''ll be back', '2015-01-30 02:12:43', '2015-01-30 02:12:43'),
(6, 'rwwr', 'hdh3464w6', 'dfxhdrfbddfb', '2015-01-30 02:26:20', '2015-01-30 02:26:20'),
(7, 'petja', 'w53252353', 'dhsg', '2015-01-30 03:29:15', '2015-01-30 03:29:15'),
(8, 'ivan', '86586366346', 'shsdrggd', '2015-02-11 04:10:59', '2015-02-11 04:10:59');

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `photo` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `photo_s` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `maintext`
--

CREATE TABLE IF NOT EXISTS `maintext` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8_unicode_ci NOT NULL,
  `lang` enum('ru','en') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `maintext`
--

INSERT INTO `maintext` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `created_at`, `updated_at`) VALUES
(1, '', '<h3 align="center">Добро пожаловать на сайт профессионального свадебного фотографа!</h3>\r\n<div>Каждая свадьба – это знаменательное событие в отдельно взятой семье. Это – соединение судеб, счастливые лица молодоженов и гостей, белое платье невесты как символ веры, верности и надежды, и обязательный большой свадебный торт, обещающий сладкую и красивую супружескую жизнь.<br>\r\nНо вот гости разошлись, торт съеден, а платье бережно сложено и отправлено в шкаф. А что же остается?<br>\r\nКонечно же, <strong>свадебные фотографии!</strong><br>Молодожены, родственники, гости – веселые, задорные, озорные, дерзкие, немножко задумчивые… Сколько неповторимых и важных моментов «ловит» фотоаппарат мастера!<br>Свадебный фотограф не только поможет сохранить в памяти вашу свадьбу на долгие годы, но и подарит возможность пережить эти события вашим будущим детям и внукам!\r\nНаш творческий подход к съёмке каждой фотографии, а также компьютерная обработка изображения, позволят добиться отличного качества фотографий, которые Вы будете просматривать с удовольствием не один раз!</div>', 'index', 'show', '', '2015-01-21 18:43:00', '2015-01-22 18:52:00'),
(2, '', '<h3 align="center">Приветствую Вас дорогие друзья на моём сайте!</h3>\r\n<div><strong>Меня зовут Роман Христофоров и я свадебный фотограф.</strong><br>\r\nУвлекся фотографией достаточно давно, в 2002г.<br>\r\nВсё началось с подарка моего отца, и как Вы догадались, это была - Фотокамера, Minolta! Именно с неё зародилась во мне любовь к фотографии.. плёночная камера, безотказная))) и в снег и в мороз, она всегда была со мной. И, казалось бы, интересное хобби превратилось в мою профессию!<br>\r\nЯ всегда рад воплотить Ваши творческие идеи и задумки и создать хорошие, качественные фотографии, которые будут радовать глаз. В свою очередь, моя задача – это показать Ваши лучшие стороны, отобразить образ и характер, показать Ваше очарование, шарм и природную красоту личности. К каждому человеку я нахожу нетрадиционный, индивидуальный и креативный подход. Своим профессиональным взглядом готов дать любые советы по поводу внешнего вида, идеи и места прохождения фотоссесии. На моём сайте я предлагаю Вашему вниманию свадебные, индивидуальные фотоссесии, романтичные love story . Свои услуги я предоставляю в городе Бресте, Минске и других городах Беларуси. Молодые люди, влюбленные, молодожены, парни и девушки, если у Вас есть желание провести несколько часов в присутствии профессионального фотографа, то в конечном итоге у Вас получатся самые необыкновенные, творческие, красивые, художественные фотографии, которые Вы будете смотреть с удовольствием не один раз! Также я приглашаю к сотрудничеству визажистов и заинтересованных мастеров по прическам, дизайнеров украшений.\r\n</div>', 'about', 'show', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', '<h3>Мои контактные данные:</h3>\r\n<p>Моб.тел: МТС <strong>800-32-10</strong></p>\r\n<p>E-mail: <strong>hristophorov.roman@gmail.com</strong></p>', 'contact', 'show', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '<h3>Спасибо, Ваш заказ принят</h3>', 'thanks', 'show', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_21_174932_maintexts', 1),
('2015_01_23_164619_user', 2),
('2015_01_28_122224_callme', 3),
('2015_01_28_160136_comments', 4),
('2015_02_01_095235_foto', 5),
('2015_02_02_112626_foto', 6),
('2015_02_13_064842_orders', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `body`, `created_at`, `updated_at`) VALUES
(1, 'test3', '', 'a:1:{i:1;s:1:"3";}', '2015-02-16 03:07:50', '2015-02-16 03:07:50'),
(2, 'Charli', '86586366346', 'a:1:{i:1;s:1:"6";}', '2015-02-16 03:35:41', '2015-02-16 03:35:41'),
(3, 'admin', '86586366346', 'a:1:{i:1;s:1:"2";}', '2015-02-16 03:43:16', '2015-02-16 03:43:16'),
(4, 'sx', '2222222222222222', 'a:1:{i:1;s:1:"2";}', '2015-02-16 03:46:09', '2015-02-16 03:46:09'),
(5, 'test3', '86586366346', 'a:1:{i:2;s:1:"3";}', '2015-02-18 01:01:34', '2015-02-18 01:01:34'),
(6, 'test4', '532235235235', 'a:1:{i:3;s:1:"5";}', '2015-02-20 03:08:37', '2015-02-20 03:08:37'),
(7, 'rom', '86586366346', 'a:1:{i:3;s:1:"2";}', '2015-02-22 08:53:03', '2015-02-22 08:53:03'),
(8, 'test6', '800-23-10', 'a:2:{i:14;s:1:"5";i:5;s:1:"3";}', '2015-02-22 01:02:35', '2015-02-22 01:02:35'),
(9, 'test1', '80-3434-3434-46', 'a:1:{i:31;s:2:"11";}', '2015-02-22 03:26:07', '2015-02-22 03:26:07');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `isAdmin`, `isActive`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'dvd@trt.tu', '$2y$10$kHxTGjwvuL5tMhuM4XE8zuXQipfeYjW4FrfmMP27x1l0HMBuOaV7G', 'admin', 1, 0, NULL, '2015-01-30 02:11:37', '2015-01-30 02:11:37'),
(7, 'vasili@gmail.com', '$2y$10$q3mGOqrgCkRpCTGbhhGBu.hliyuiUtBNrCKNiSemUAwqwcXWz6nFm', 'vasili', 0, 0, NULL, '2015-01-30 02:25:03', '2015-01-30 02:25:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
