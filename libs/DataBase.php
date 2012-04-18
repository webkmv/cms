<?php

/**
 * Класс для работы с базой данных
 */
class DataBase
{
  /**
   * Имя базы данных
   * @var string
   */
  private $_dataBaseName = "cms";

  /**
   * Пользователь
   * @var string
   */
  private $_userName = "usercms";

  /**
   * Пароль
   * @var string
   */
  private $_password = "123456";

  /**
   * Хост
   * @var string
   */
  private $_host = "localhost";

  /**
   * Кодировка базы данных
   * @var string
   */
  private $_charset = "utf22";

  /**
   * Подключение к базе данных
   *
   * @return void
   */
  public function Connect ()
  {
    try
      {
	mysql_select_db ($this->_dataBaseName, mysql_connect ($this->_host, $this->_userName, $this->_password));
	$this->SetCharset();
      }
    catch (Exception $error)
      {
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
	mysql_query ("SET NAMES '".$this->_charset."'");
      }
    catch (Exception $error)
      {
	printf("Error set charset database. More: %s", $error->getMessage());
      }
  }
}
?>