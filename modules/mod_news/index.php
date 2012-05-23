<?php

$action = (isset($_GET[action])) ? $_GET['action'] : '';

// Вывод новостей
function news()
{
    //1. подключаемся к базе выбирем все новости из таблицы news
    //2. вывод
}

// просмотр новости
function view()
{
    
}

switch($action) {
	default:
	news();
	break;
	
	case "view":
	view();
	break;
}
?>