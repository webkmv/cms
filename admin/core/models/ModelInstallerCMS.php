<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'DataBase.php';
require_once DIR_LIBS.'Logs.php';

class ModelInstallerCMS
{
	private $_log;

	public function __construct()
	{
		$this->Init();
	}

	private function Init ()
	{
		$this->_log = new Logs();
		$db = new DataBase();
		$db->Connect();
	}

	/**
	 * Создание таблицы шаблонов
	 *
	 * @return void
	 */
	public function CreateTableTemplates ()
	{

		$query = "CREATE TABLE templates
		(id int auto_increment primary key,
		id_user int not null,
		title varchar(255),
		path varchar(255),
		created datetime,
		sum_block int)";
		if (!mysql_query($query))
		{
			$error = "Ошибка создания таблицы 'templates'. Файл '".__FILE__."'. Строка: ".__LINE__.". Ошибка: ".mysql_error();
			$this->_log->AddLog($error);
			throw new Exception ($error);
		}
	}

	/**
	 * Создание таблицы страниц
	 *
	 * @return void
	 */
	public function CreateTablePages ()
	{

		$query = "CREATE TABLE pages
		(id int auto_increment primary key,
		title varchar(255),
		text text,
		url varchar(255),
		published int,
		is_index int,
		id_template int,
		keywords varchar(255),
		description text,
		added datetime)";

		if (!mysql_query($query))
		{
			$error = "Ошибка создания таблицы 'pages'. Файл '".__FILE__."'. Строка: ".__LINE__.". Ошибка: ".mysql_error();
			$this->_log->AddLog($error);
			throw new Exception ($error);
		}
	}
}

?>