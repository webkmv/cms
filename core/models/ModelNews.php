<?php
	
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
		public function getAllNews ()
		{
			$sql = "SELECT * FROM news";
			
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
		
		/*
		 * Получить новость по ее идентификатору (id)
		 * @param int $id id новости
		 * @return associative array: хеш с данными новости
		 */
		public function getNewsFromId ($id)
		{	
			$query = "SELECT * FROM news WHERE id=$id";
			if(!$result = mysql_query($query))
			{
				$this->_logs->AddLog(mysql_error());
				die (mysql_errno());
			}
			return mysql_fetch_array($result);
		}
		
	}

?>