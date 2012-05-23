<?php

require_once "core/configcore.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';

class ModelPages 
{
	private $_logs = null;
	
	public function ModelPages()
	{
		$this->Init();
	}
	
	private function Init()
	{
		$this->_logs = new Logs();		
		$db = new DataBase();
		$db->Connect();
	}
	
	/**
	 * Все страницы
	 * 
	 * @result array Возвращает массив хэшей с данными стрниц
	 */
	public function GetAllPages ()
	{
		$sql = "SELECT * FROM pages";
		
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка извлечения страниц из базы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
		
		$result = array();
		while ($currentTemplate = mysql_fetch_array($query))
		{
			$result[] = $currentTemplate;
		}
		
		return $result;
	}
	
	/**
	 * Добавление страницы
	 * 
	 * @param string $title
	 * @param string $url
	 * @param int $idTemplate
	 * @param string $keywords
	 * @param string $description
	 * @param string $body
	 */
	public function InsertPage ($title, $url, $idTemplate, $keywords, $description, $body, $date)
	{
		$sql = "INSERT INTO pages (title, text, url, published, id_template, keywords, description, added) 
		        VALUES ('$title', '$body', '$url', 1, '$idTemplate', '$keywords', '$description', '$date')";
		
		if (!mysql_query($sql))
		{
			$error = "Ошибка добавления новой страницы в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
}

?>