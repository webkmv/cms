<?php

require_once "../config.php";
require_once DIR_LIBS."DataBase.php";
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';

class ModelTemplates
{

  /**
   * Файл логов
   *
   * @var Logs
   */
  private $_logs = null;
  
  /**
   * Объект для обработки данных форм
   * @var Forms
   */
  private $_forms = null;


  public function __construct()
  {
    $this->Init();
  }
  
  /**
   * Инициализация 
   */
  private function Init ()
  {
  	$this->_logs = new Logs("logs");
  	$this->_forms = new Forms();
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

  /**
   * Получить список шаблонов
   * @return void
   */
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
  
  /**
   * Сохранение шаблона
   * @param int $id_user id пользователя
   * @param string $title заголовок
   * @param string $path путь сохранения
   * @param datetime $created дата сохранения
   * @param int $sumBlock количество блоков
   */
  public function SaveTemplate ($id_user, $title, $path, $created, $sumBlock)
  {
  	$query = "INSERT INTO templates (id_user, title, path, created, sum_block) VALUES ($id_user, '$title' '$path', '$created', $sumBlock)";
  	mysql_query($query) or die ("Не удалось сохранить шаблон");
  }
}

?>