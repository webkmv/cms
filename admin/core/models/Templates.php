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
    
    $query = "CREATE table templates
                           (id int auto_increment primary key,
                            id_user int not null,
                            title varchar(255),
                            path varchar(255),
                            create datetime,
                            sum_block int)";
    mysql_query($query) or die (mysql_error());
  }
}

?>