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
   * @return открытый файл для чтения
   */
  public function OpenReadOnly ()
  {
    return fopen($this->_filename, 'r');
  }

  /**
   * Открыть файл для добавления в него данных. 
   *
   * @return открытый файл для добавления данных
   */
  private function OpenByAppend ()
  {
    return fopen($this->_filename, 'a');
  }

  /**
   * Добавление данных конец файла
   *
   * @param string $data данный для добавления
   * @return void
   */
  public function AppendData ($data)
  {
    $file = new Files($this->_filename);
    $openFile = $file->OpenByAppend();
    fwrite($openFile, $data);
    fclose($openFile);
  }
}
?>