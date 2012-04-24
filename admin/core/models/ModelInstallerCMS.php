<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'DataBase.php';

class ModelInstallerCMS
{
	
	public function __construct()
	{
		$this->Init();
	}
	
	private function Init ()
	{
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
	
		$query = "CREATE table templates
		(id int auto_increment primary key,
		id_user int not null,
		title varchar(255),
		path varchar(255),
		created datetime,
		sum_block int)";
		mysql_query($query) or die (mysql_error());
	}
}

?>