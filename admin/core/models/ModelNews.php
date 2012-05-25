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
                                          views, published, alias) 
		        VALUES ('$title', '$keywords', '$description',
                                 '$text', '$date', '$author', '$views', '$published', '$alias')";
		
		if (!mysql_query($sql))
		{
			$error = "Ошибка добавления новости в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
	
	/*
	 * Получить новость по ее идентификатору (id)
	 * @param int $id id новости
	 * @return associative array: хеш с данными новости
	 */
	public function GetNewsFromId ($id)
	{	
		$query = "SELECT * FROM news WHERE id=$id";
		if(!$result = mysql_query($query))
		{
			$this->_logs->AddLog(mysql_error());
			die (mysql_errno());
		}
		return mysql_fetch_array($result);
	}
  
       /**
        *   Удаление новости
        * 
        *   @param int $id - id шаблона
        */
        public function DeleteNews($id)
        {
            if (!mysql_query("DELETE FROM news WHERE id=$id"))
            {
                $error = "Не получается удалить новость. Подробнее: ".mysql_error();
                $this->_logs->AddLog($error);
                die ($error);
            }
        }
}

?>