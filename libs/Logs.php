<?php

require_once "libs/config.php";
require_once "Files.php";

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
  private $fileLogs;

  /**
   * Инициализируем новый объект логов
   *
   * @param string $filLogs файл для хранения логов
   */
  public function __construct($fileLogs)
  {
    $this->_fileLogs = new Files($fileLogs);
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
    $logMessage = "|".$dateNow." ".$timeNow."| ".$errorMessage;
    $this->_fileLogs->AppendData($logMessage);
  }
}
?>