<?php

require_once "config.php";
require_once DIR_LIBS."Logs.php";

/**
 * Класс для работы с базой данных
 */
class DataBase
{
  /**
   * Имя базы данных
   * @var string
   */
  private $_dataBaseName = DB_NAME;

  /**
   * Пользователь
   * @var string
   */
  private $_userName = DB_USER;

  /**
   * Пароль
   * @var string
   */
  private $_password = DB_PASSWORD;

  /**
   * Хост
   * @var string
   */
  private $_host = DB_HOST;

  /**
   * Кодировка базы данных
   * @var string
   */
  private $_charset = DB_CHARSET;

  /**
   * Файл логов
   *
   * @var Logs
   */
  private $_logs = null;

  public function __construct()
  {
    $this->_logs = new Logs();
  }

  /**
   * Подключение к базе данных
   *
   * @return void
   */
  public function Connect ()
  {
    try
      {
	if (! mysql_select_db ($this->_dataBaseName, mysql_connect ($this->_host, $this->_userName, $this->_password)))
	  throw new Exception("Error connect to database.");
	$this->SetCharset();
      }
    catch (Exception $error)
      {
	$this->_logs->AddLog($error->getMessage());
	printf("Error connect to database.");
      }
  }

  /**
   * Установка кодировки базы данных
   *
   * @return void
   */
  private function SetCharset ()
  {
    try
      {
	if (!mysql_query ("SET NAMES '".$this->_charset."'"))
	  throw new Exception ("Error setcharset database.");
      }
    catch (Exception $error)
      {
	$this->_logs->AddLog($error->getMessage());
	printf("Error set charset database. More: %s", $error->getMessage());
      }
  }
}
?>