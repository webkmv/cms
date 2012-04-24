<?php

require_once "core/configcore.php";
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
  	$fileLog = DIR_ROOT.LOG_FILE;
  	$this->_logs = new Logs($fileLog);
  	$this->_forms = new Forms();
  	$db = new DataBase();
  	$db->Connect();
  }

  /**
   * Получить список шаблонов
   * @return void
   */
  public function GetTemplates()
  {
    $sql = "SELECT * FROM templates";
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
  	$query = "INSERT INTO templates (id_user, title, path, created, sum_block) VALUES ($id_user, '$title', '$path', '$created', '$sumBlock')";
  	if (!mysql_query($query))
  	{
  		$error = "Не удалось сохранить шаблон. Подробнее: ".mysql_error();
  		$this->_logs->AddLog($error);
  		die ($error);
  	}
  }
  
  /**
   * Удаление шаблонв
   * @param int $idTemplate id шаблона
   */
  public function DeleteTemplate($idTemplate)
  {
  	if (!mysql_query("DELETE FROM templates WHERE id=$idTemplate"))
  	{
  		$error = "Не получается удалить шаблон. Подробнее: ".mysql_error();
  		$this->_logs->AddLog($error);
  		die ($error);
  	}
  }
  
  /**
   * Порлучить шаблон по его идентификатору (id)
   * @param int $id id шаблона
   * @return associative array: хеш с данными шаблона
   */
  public function GetTemplateFromId ($id)
  {
  	$query = "SELECT * FROM templates WHERE id=$id";
  	if(!$result = mysql_query($query))
  	{
  		$this->_logs->AddLog(mysql_error());
  		die (mysql_errno());
  	}
  	return mysql_fetch_array($result);
  	
  }
}

?>