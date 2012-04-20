<?php

require_once "config.php";

/**
 * Класс для работы с файлами
 */
class Files
{

  private $_filename;

  /**
   * Максимельный размер загрузки файла в Mb
   * @var integer
   */
  private $_uploadMaxFilesize = UPLOAD_MAX_FILESIZE;

  /**
   * Инициализируем новый объект файла
   *
   * @param string $filename имя файла
   */
  public function __construct($filename)
  {
    $this->_filename = $filename;
  }

  private function Init ()
  {
    
  }

  /**
   * Открыть файл только для чтения
   *
   * @return открытый файл для чтения
   */
  public function OpenReadOnly ()
  {
    if (($file = fopen($this->_filename, 'r')) == false)
      throw new Exception ("File not found!");
    return $file;
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

  /**
   * Загрузка файла на сервер
   *
   * @param string $pathToSave путь для хохранения файла
   * @return void
   */
  public function Upload($pathToSave)
  {

    if($_FILES[$this->_filename]["size"] > $htis->_uploadMaxFilesize)
      {
	die("Размер файла превышает 100 мегабайт");
      }

    // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES[$this->_filename]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его из временной директории в конечную
     move_uploaded_file($_FILES[$this->_filename]["tmp_name"], $pathToSave.$_FILES[$this->_filename]["name"]);
   } 
   else 
     {
      die("Ошибка загрузки файла");
   }
  }
}
?>