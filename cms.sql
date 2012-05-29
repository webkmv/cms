-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2012 at 01:17 AM
-- Server version: 5.1.40
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
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
-- Dumping data for table `articles`
--


-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `published` int(2) NOT NULL,
  `id_block` int(2) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `path`, `published`, `id_block`, `alias`) VALUES
(1, 'Новости', 'news.php', 0, 0, ''),
(2, 'Статьи', 'articles.php', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
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
-- Dumping data for table `news`
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
(15, '', '', '', '', '2012-05-25', '', 0, 0, ''),
(16, '', '', '', '', '2012-05-25', '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `text` text CHARACTER SET cp1251,
  `url` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `published` int(11) DEFAULT NULL,
  `is_index` int(11) DEFAULT NULL,
  `id_template` int(11) DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `description` text CHARACTER SET cp1251,
  `added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `url`, `published`, `is_index`, `id_template`, `keywords`, `description`, `added`) VALUES
(1, 'Главная страница', NULL, 'index', 1, 1, NULL, NULL, NULL, '2012-05-28 20:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` text,
  `created` datetime DEFAULT NULL,
  `sum_block` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `id_user`, `title`, `path`, `created`, `sum_block`) VALUES
(1, 1, 'index', 'Z:homelocalhostwwwcms/templates/templates/index.html', '2012-05-29 01:01:15', 5);
