<?php

/**
 * Класс для работы с файлами
 */
class Files
{

  private $_filename;

  /**
   * Инициализируем новый объект файла
   *
   * @param string $filename имя файла
   */
  public function __construct($filename)
  {
    $this->_filename = $filename;
  }

  /**
   * Открыть файл только для чтения
   *
   * @return открытый файл
   */
  public function OpenFileReadOnly ()
  {
    return fopen($this->_filename, 'r');
  }

  
}
?>