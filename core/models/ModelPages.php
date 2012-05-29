<?php

require_once "config.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Logs.php';

class ModelPages
{
	private $_log;
	
	public function ModelPages()
	{
		$this->Init();
	}
	
	private function Init()
	{
		$this->_log = new Logs();
		$db = new DataBase();
		$db->Connect();
	}
	
	/**
	 * получить данные страницы
	 * @param string $url - адрес страницы
	 * @throws Exception Если не удается вытащить данные о страницы, пробрасывается исключение
	 * @return array Возвращает хэш с данными страницы:
	 */
	public function GetPage($url)
	{
		$sql = "SELECT * FROM pages WHERE url = '$url'";
		
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка извлечения страницы '$url' из базы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_log->AddLog($error);
			throw new Exception($error);
		}
		
		return mysql_fetch_array($query);
	}
}
?>