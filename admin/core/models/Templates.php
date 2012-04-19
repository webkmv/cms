<?php

require_once "libs/config.php";
require_once "DataBase.php";

class MmodelTemplates
{

  /**
   * Файл логов
   *
   * @var Logs
   */
  private $_logs = null;


  public function __construct()
  {
    $this->_logs = new Logs("logs");
    $db = new DataBase();
    $db->Connect();
  }

  /**
   * Создание таблицы шаблонов
   *
   * @return void
   */
  public function CreateTableTemplates ()
  {
    try
      {
	$query = "CREATE ";
	if (!mysql_query($query))
	  throw new Exception("Can't create table 'Templates'");
      }
    catch(Exception $error)
      {
	$this->_logs->AddLog($error->getMessage());
	printf($error->getMessage());
      }
  }
}

?>