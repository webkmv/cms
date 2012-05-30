-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 29 2012 г., 14:25
-- Версия сервера: 5.5.16
-- Версия PHP: 5.3.8

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `keywords`, `text`, `author`, `date`, `published`, `alias`) VALUES
(54, 'lechenie', '', '', '<h1>Перечень заболеваний</h1>\r\n<p>Перечень заболеваний, лечение которых может осуществляться на базе санатория &laquo;Пятигорский Нарзан&raquo;</p>\r\n<p class="title_content">Заболевания костно-мышечной системы</p>\r\n<ul>\r\n<li>Ревматоидный полиартрит (активность 0-1-2 степени).</li>\r\n<li>Болезнь Бехтерева (анкилозирующий спондилоартрит) и другие системные заболевания соединительной ткани.</li>\r\n<li>Остеохондроз позвоночника.</li>\r\n<li>Артриты и полиартриты нетуберкулезного происхождения.</li>\r\n<li>Остеоартрозы.</li>\r\n<li>Последствия перелома костей, хронический остеомиелит.</li>\r\n<li>Хронические воспалителные заболевания околосуставных тканей и связочного аппарата.</li>\r\n</ul>\r\n<p class="title_content">Заболевания нервной системы</p>\r\n<ul>\r\n<li>Болезни периферической нервной системы: болезни тройничного и лицевого нервов, нервных корешков и сплетений, воспалительная и токсическая нейропатия; смещение межпозвонковых дисков (при условии самостоятельного передвижения); постламинэктомический синдром, травмы нервных корешков и сплетений;</li>\r\n<li>Болезни вегетативной нервной системы. Полинейропатии, соляриты, симпатоганглиониты.</li>\r\n<li>Болезни центральной нервной системы. Хронические воспалительные заболевания (по окончании острого периода, через 4-6 месяцев) арахноидит,энцефалит, миелит, энцефаломиелит.</li>\r\n<li>Функциональные и другие болезни нервной системы . неврастения, вегето-сосудистая дисфункция.</li>\r\n</ul>\r\n<p class="title_content">Заболевания органов пищеварения</p>\r\n<ul>\r\n<li>Воспаление пищевода, язвенная болезнь желудка и двенадцатиперстной кишки, хронические гастриты, хронические холециститы, хронические панкреатиты, хронические гепатиты, хронические колиты.</li>\r\n<li>Постхолецистоэктомический синдром.</li>\r\n<li>Болезнь лперированного желудка.</li>\r\n</ul>', 'admin', '2012-05-29', 0, ''),
(55, 'index', '', '', '<h1>Санаторий "Пятигорский нарзан"</h1>\r\n<!-- text about us-->\r\n<div class="c_text">\r\n<p>Санатоий &laquo;Пятигорский Нарзан&raquo; уже давно заслужил репутацию одного из лучших на Кавминводах. Благодаря усилиям заслуженного директора России Татьяны Арсентьевны Чумаковой реконструированное в кратчайшие сроки здание превратилось в современую высококлассную многопрофильную здравницу. Санаторий уютно расположен у подножия горы Машук. Чистейший горный воздух, уникальная природа, уникальные минеральные источники, целебные грязи, вдохновляющие на отличную прогулку терренкуры - сочитание всех этих лечебных факторов позволяет поправить здоровье, набраться сил и жизненной энергии. В здравнице наряду с традиционными проверенными веками методами применяются новейшие разработки в области курортологии и медицины. Процесс лечения осуществяют квалифицированные доктора. Здесь отработаны методики лечения болезней опорно-двигательного аппарата, нервной системы, органов пищеварения, дыхания, обмена веществ, лор-заболеваний, мочеполовой и эндокриной системы, кожных заболеваний, неинфекционной этиологии. Отдыхающих ждёт достойный уровень обслуживания, благоустроенные, со вкусом оформленные номера, оснащённые всем необходимым для комфортного проживания. Санаторий предлагает для своих отдыхающих питание в ресторане( 2 VIP-зала, основной зал, банкетный зал, кафе, &laquo;Летний домик&raquo;). К каждому гостю имеется индивидуальный подход. Питание сбалансированное, диетическое по заказному меню.</p>\r\n<p>Качество предоставляемых здесь услуг, радушный приём и высокий уровень комфорта не оставляет равнодушным ни одного гостя санатория.</p>\r\n</div>\r\n<div class="director"><img src="core/media/images/director.jpg" alt="" />\r\n<p class="d1">Генеральный директор санатория &laquo;Пятигорский Нарзан&raquo;, заслуженный директор России</p>\r\n<p class="d2">Татьяна Арсентьевна Чумакова</p>\r\n</div>', 'admin', '2012-05-29', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
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
-- Дамп данных таблицы `modules`
--

INSERT INTO `modules` (`id`, `title`, `path`, `published`, `id_block`, `alias`) VALUES
(1, 'Новости', 'news.php', 0, 0, ''),
(2, 'Статьи', 'articles.php', 0, 0, '');

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
(9, 'asdasdasd', 'asd', 'asd', 'sad', '2012-05-25', '', 0, 1, 'dasdasd');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `text` text CHARACTER SET utf16,
  `url` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `published` int(11) DEFAULT NULL,
  `is_index` int(11) DEFAULT NULL,
  `id_template` int(11) DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  `description` text CHARACTER SET cp1251,
  `added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `url`, `published`, `is_index`, `id_template`, `keywords`, `description`, `added`) VALUES
(1, 'Главная страница', '', 'index', 1, 1, 1, '', '', '2012-05-28 20:39:59'),
(5, 'Лечение', '', 'lechenie', 1, NULL, 2, '', '', '2012-05-29 08:31:35');

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` text,
  `created` datetime DEFAULT NULL,
  `sum_block` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `templates`
--

INSERT INTO `templates` (`id`, `id_user`, `title`, `path`, `created`, `sum_block`) VALUES
(1, 1, 'index', 'Z:homelocalhostwwwcms/templates/templates/index.tpl', '2012-05-29 01:01:15', 5),
(2, 1, 'Лечение', '/opt/lampp/htdocs/cms/templates/templates/lechenie.tpl', '2012-05-29 12:54:07', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
