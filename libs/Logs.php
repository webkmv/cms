<?php

require_once "config.php";
require_once DIR_LIBS."Files.php";

/**
 * Класс для ведения логов
 */
class Logs
{

  /**
   * Файл для хранения логов
   *
   * @var string
   */
  private $_fileLogs;

  /**
   * Инициализируем новый объект логов
   *
   * @param string $filLogs файл для хранения логов
   */
  public function __construct()
  {
  	$this->_fileLogs =  DIR_ROOT.LOG_FILE;
    $this->_fileLogs = new Files($this->_fileLogs);
  }
  
  /**
   * Добавление нового лог сообщения
   *
   * @param string $logMessage лог-сообщение
   * @return void
   */
  public function AddLog ($errorMessage)
  {
    $dateNow = date("j.m.Y");
    $timeNow = date("H:i:s");
    $logMessage = "|".$dateNow." ".$timeNow."| ".$errorMessage."\n";
    $this->_fileLogs->AppendData($logMessage);
  }
}
?>