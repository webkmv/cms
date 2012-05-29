<?php
$action = (isset($_GET[action])) ? $_GET['action'] : '';

require_once DIR_LIBS.'DataBase.php';
require_once DIR_LIBS.'Logs.php';

$log = new Logs();
$db = new DataBase();
$db->Connect();

// Вывод новостей
function news()
{
	$query = "SELECT * FROM news";
	if (mysql_query($query))
	{
		set
	}
	else
	{
		$error = "Ошибка чтения '. Файл '".__FILE__."'. Строка: ".__LINE__.". Ошибка: ".mysql_error();
		$log->AddLog($error);
		throw new Exception ($error);
	}
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