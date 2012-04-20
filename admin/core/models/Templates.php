<?php

require_once "../config.php";
//require_once DIR_LIBS."config.php";
require_once DIR_LIBS."DataBase.php";

class ModelTemplates
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
    
    $query = "CREATE table templates
                           (id int auto_increment primary key,
                            id_user int not null,
                            title varchar(255),
                            path varchar(255),
                            created datetime,
                            sum_block int)";
    mysql_query($query) or die (mysql_error());
  }

  public function GetTemplates()
  {
    $sql = "SELECT * FROM templates";
    $query = mysql_query($sql) or die (mysql_error);
    $result = array();
    while ($currentTemplate = mysql_fetch_array($query))
      {
	$result[] = $currentTemplate;
      }
    return $result;
  }
}

?>