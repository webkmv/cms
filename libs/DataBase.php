<?php

/**
 * Класс для работы с базой данных
 */
class DataBase
{
  /**
   * Имя базы данных
   */
  private $_dataBaseName = "cms";

  /**
   * Пользователь
   */
  private $_userName = "usercms";

  /**
   * Пароль
   */
  private $_password = "123456";

  /**
   * Хост
   */
  private $_host = "localhost";

  /**
   * Кодировка базы данных
   */
  private $_charset = "utf8";

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
	printf("Error set charset database. More: %s\n", $error->getMessage());
      }
  }
}
?>