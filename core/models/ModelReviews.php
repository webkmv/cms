<?php

    require_once 'config.php';
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';

class ModelReviews 
{
	private $_logs = null;
	
	public function ModelReviews()
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
	 * Вывод всех отзывов
	 * 
	 */
        
	public function getAllReviews ()
	{
		$sql = "SELECT * FROM reviews WHERE published='Да'";
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка при выводе отзывов из базы.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
$result = array();
		while ($currentTemplate = mysql_fetch_array($query))
		{
			$result[] = $currentTemplate;
		}
		//print_r($result);
		return $result;
	}
	
	/**
	 * Опубликовать отзыв или нет
	 * @param int id - id отзыва 
	 * @throws Exception
	 */
	public function Published ($id)
	{
		$data = $this -> GetReviewsFromId($id);
		
		$publish = ($data['published'] == 'Нет') ? 'Да' : 'Нет';
		
		$sql = "UPDATE reviews 
				SET published='".$publish."'
				WHERE id = '".$id."'";
		if (!mysql_query($sql))
		{
			$error = "Ошибка сохранение новости № ".$publish." Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
	
	/**
	 * Добавление Отзыва
	 * 
	 * @param string $name
	 * @param string $email
	 * @param string $title
	 * @param string $text
	 */
        
	public function InsertReviews ($name, $email, $title, $text, $date)
	{
		$sql = "INSERT INTO reviews (name,email,title,text,date) 
		        VALUES ('$name', '$email', '$title','$text','$date')";
		if (!mysql_query($sql))
		{
			$error = "Ошибка добавления отзыва в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
}

?>