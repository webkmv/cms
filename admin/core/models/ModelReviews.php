<?php

require_once "core/configcore.php";
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
	 * Вывод настроек модуля
	 * @result array Возвращает массив хэшей с данными настроек
	 */
	public function GetReviewsSettings ()
	{
		$sql = "SELECT id,email FROM reviews_settings";
		
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка извлечения из базы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
		
		return mysql_fetch_array($query);
	}
	
	/**
	 * Вывод всех отзывов
	 * 
	 */
        
	public function getAllReviews ()
	{
		$sql = "SELECT * FROM reviews";
		if (!$query = mysql_query($sql))
		{
			$error = "Ошибка при выводе отзывов в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}

		while ($currentTemplate = mysql_fetch_array($query))
		{
			$result[] = $currentTemplate;
		}		
		return $result;
	}
	
	/*
	 * Получить новость по ее идентификатору (id)
	 * @param int $id id новости
	 * @return associative array: хеш с данными новости
	 */
	public function GetReviewsFromId ($id)
	{	
		$query = "SELECT * FROM reviews WHERE id=$id";
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
	
	/**
	 * Опубликовать отзыв или нет
	 * @param int id - id отзыва 
	 * @throws Exception
	 */
	public function Published ($id)
	{
		$data = $this -> GetReviewsFromId($id);
		
		$publish = ($data['published'] == 0) ? 1 : 0;
		
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
}

?>