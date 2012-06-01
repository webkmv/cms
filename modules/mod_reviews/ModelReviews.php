<?php

    require_once '../../config.php';
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
		$sql = "SELECT * FROM reviews WHERE publish='Да'";
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
		$res = mysql_query("SELECT email,send_report FROM reviews_settings");
		$isSend = mysql_fetch_array($res);
		
		$msg = "Имя: $name ($email)<br>Заголовок: $title<br> <p>$text</p>";
		
		if ($isSend['send_report'] == 'Да')
		{
  		   $sub = '=?windows-1251?B?'.base64_encode(iconv("utf-8", "cp1251", "Новый отзыв")).'?=';
		   $headers = 'MIME-Version: 1.0'. "\r\n";  
		   $headers .= 'Content-type: text/html;'. "\r\n";
		   $headers .= 'From: =?windows-1251?B?'.base64_encode(iconv("utf-8", "cp1251", "Отзыв")).'?= <'.$email.'>'."\r\n";
		   mail($isSend['email'], $sub, iconv("utf-8", "cp1251", $msg), $headers);
		}
		if (!mysql_query($sql))
		{
			$error = "Ошибка добавления отзыва в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
			$this->_logs->AddLog($error);
			throw new Exception($error);
		}
	}
}

?>