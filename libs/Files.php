<?php

require_once "config.php";
require_once 'Logs.php';

/**
 * Класс для работы с файлами
 */
class Files
{

  private $_filename;

  private $_log;
  /**
   * Максимельный размер загрузки файла в Mb
   * @var integer
   */
  private $_uploadMaxFilesize = null;

  /**
   * @param string $filename имя файла
   */
  public function __construct($filename)
  {
    $this->Init($filename);
  }

  /**
   * Инициализация
   * @param string $filename имя файла
   */
  private function Init ($filename)
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
    if (($file = fopen($this->_filename, 'r')) == false)
    {
    	$strError = "File not found";
    	die ($strError);
    }
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
  public function Upload($filenameToSave)
  {

    /*if($_FILES[$this->_filename]["size"] > $htis->_uploadMaxFilesize)
    {
    	die("Размер файла превышает 100 мегабайт");
    }*/
  	
   if(!copy($this->_filename, $filenameToSave))
   {
     $error = "Ошибка загрузки файла на сервер";
   	die($error);
     
   }
  }
  
  /**
   * Читать содержимое файла
   * 
   * @return string
   */
  public function ReadFile()
  {
  	$file = $this->OpenReadOnly();
  	$result = "";
  	while (!feof($file)) {
  		$result .= fgets($file);
  	}
  	fclose($file);
  	return $result;
  }
}
?>