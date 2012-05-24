<?php

require_once "core/configcore.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';

class ModelNews 
{
	private $_logs = null;
	
	public function ModelNews()
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
	 * Все новости
	 * @result array Возвращает массив хэшей с данными новостей
	 */
	public function GetAllNews ()
	{
		$sql = "SELECT id,title,date,author,views,published,alias FROM news";
		
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка извлечения новостей из базы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
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
	 * Добавление Новости
	 * 
	 * @param string $title
	 * @param string $keywords
	 * @param string $description
	 * @param string $text
	 * @param string $date
	 * @param string $author
	 * @param   int  $views
	 * @param string alias
	 */
        
	public function InsertNews ($title, $keywords, $description,
                                    $text, $date, $author, $views, $published, $alias)
	{
		$sql = "INSERT INTO news (title, keywords, description, text, date, author,
                                          views, alias) 
		        VALUES ('$title', '$keywords', '$description',
                                    '$text', '$date', '$author', '$views', '$published', '$alias')";
		
		if (!mysql_query($sql))
		{
			$error = "Ошибка добавления новой страницы в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
}

?>