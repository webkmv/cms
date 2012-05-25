<?php

require_once "core/configcore.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_ADMIN_MODELS.'Templates.php';

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
			$error = "Ошибка добавления новой страницы в базу.  Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
	
	/**
	 * Удаление страницы
	 * @param int $id Номер страницы
	 * @throws Exception Не удается удалить файл
	 */
	public function DeletePage($id) 
	{
		$sql = "DELETE FROM pages WHERE id='$id'";
		if (!mysql_query($sql))
		{
			$error = "Ошибка удаления страницы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
	
	/**
	 * Получить страницу по указанному id
	 * @param int $idPage идентификатор страницы
	 * @throws Exception
	 * @return возвращает массив с 2 элементами (массивами). Первый - список шаблонов страницы; второй - сама страница
	 */
	public function GetPageById($idPage)
	{
		$sql = "SELECT * FROM pages WHERE id='$idPage'";
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка извлечения страницы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
		
		return mysql_fetch_array($query);
	}
	
	/**
	 * Обновление состояния публикации страницы
	 * @param int $idPage номер страницы
	 * @param int $state состояние
	 * @throws Exception
	 */
	public function UpdatePublished ($idPage, $state)
	{
		$sql = "UPDATE pages SET published=".$state." WHERE id=".$idPage;
		if (!mysql_query($sql))
		{
			$error = "Ошибка публикации страницы № $idPage. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
	
	/**
	 * Сохранение данных страницы
	 * @param array $data - массив с данными формы 
	 * @throws Exception
	 */
	public function SavePage ($data)
	{
		$sql = "UPDATE pages 
				SET title='".$data["title"]."', 
					text='".$data["body"]."', 
					url='".$data["url"]."', 
					id_template='".$data["template"]."', 
					keywords='".$data["keywords"]."', 
					description='".$data["description"]."' 
				WHERE id = ".$data["idPage"];
		if (!mysql_query($sql))
		{
			$error = "Ошибка сохранение страницы № ".$data["idPage"]." Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
}

?>