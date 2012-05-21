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
	
	private function GetAllPages ()
	{
		$sql = "SELECT * FROM pages";
		$queryError = mysql_error();
		
		if (!$query = mysql_query($sql))
		{
			$this->_logs->AddLog($queryError);
			die ($queryError);
		}
		
		$result = array();
		while ($currentTemplate = mysql_fetch_array($query))
		{
			$result[] = $currentTemplate;
		}
		
		return $result;
	}
}
?>