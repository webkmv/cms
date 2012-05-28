-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 25 2012 г., 13:01
-- Версия сервера: 5.5.22
-- Версия PHP: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `keywords`, `text`, `author`, `date`, `published`, `alias`) VALUES
(47, 'fadfads', 'ffdsafa', 'fsadfads', 'dfsafas', 'fasdfa', '2012-05-25', 0, ''),
(53, 'dfas', '', '', 'ssss', 'aaa', '2012-05-25', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `published` int(2) NOT NULL,
  `id_block` int(2) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `author` varchar(150) NOT NULL,
  `views` int(10) NOT NULL,
  `published` tinyint(2) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `keywords`, `description`, `text`, `date`, `author`, `views`, `published`, `alias`) VALUES
(1, 'Заголовок новости', 'новость, новость', 'новость, новость сеголня', 'Сегодня разработчики наконец сделали первый модуль)) сейчас модуль тестируется.', '27.02.12', 'x0rb1n', 0, 1, 'name_title'),
(2, '1', 'заголовору, нововсти', 'Описание новости', '', '2012-05-25 10:23:04', 'Admin', 0, 1, 'title_news'),
(3, 'eqweqw', 'qwqw', 'wqe', '', '2012-05-25 10:41:28', 'Admin', 0, 1, 'eqweqweqe'),
(4, '1234', '1234', '4321', '', '2012-05-25 10:43:13', 'Admin', 0, 1, '1234124'),
(5, '', '', '', '', '2012-05-25 10:48:21', 'Admin', 0, 1, ''),
(6, 'Заказать рекламу', 'орл', 'щшпщ', 'пщпщпщ', '2012-05-25 11:11:01', 'Admin', 0, 1, 'щгнпщнпгщ'),
(7, 'wgfsd', 'fsdf', 'sdfsdff', 'asdf', '2012-05-25', '', 0, 1, 'fasfdas'),
(8, 'zxc', 'zxc', 'czxc', 'xczx', '2012-05-25', '', 0, 1, 'zxcz'),
(9, 'asdasdasd', 'asd', 'asd', 'sad', '2012-05-25', '', 0, 1, 'dasdasd'),
(10, 'sadasdas', 'dsad', 'adsa', 's', '2012-05-25', '', 0, 0, 'sa'),
(11, '', '', '', '', '2012-05-25', '', 0, 0, ''),
(12, '', '', '', '', '2012-05-25', '', 0, 0, ''),
(13, '', '', '', '', '2012-05-25', '', 0, 0, ''),
(14, '', '', '', '', '2012-05-25', '', 0, 0, ''),
(15, '', '', '', '', '2012-05-26', '', 0, 0, ''),
(16, '', '', '', '', '2012-05-24', '', 0, 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `path` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `sum_block` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
