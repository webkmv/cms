<?php
require_once "config.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Logs.php';

class ModelTemplates
{
	private $_logs = null;

	public function __construct()
	{
		$this->Init();
	}

	/**
	 * Инициализация
	 */
	private function Init ()
	{
		$this->_logs = new Logs();
		$db = new DataBase();
		$db->Connect();
	}

		
	/**
	 * Порлучить название шаблона
	 * @param int $id id шаблона
	 * @return string: название шаблона
	 */
	public function GetTemplateName ($id)
	{
		$query = "SELECT * FROM templates WHERE id=$id";
		if(!$result = mysql_query($query))
		{
			$this->_logs->AddLog(mysql_error());
			die (mysql_errno());
		}
		
		$array = mysql_fetch_array($result);
		
		return basename($array["path"]);
	}
}
?>